<?php
namespace Simple\ProfileBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\SecurityContext;

class SecurityController extends Controller
{
    public function loginAction()
    {
        $request = $this->getRequest();
        $session = $request->getSession();

        // get the login error if there is one
        if ($request->attributes->has(SecurityContext::AUTHENTICATION_ERROR)) {
            $error = $request->attributes->get(
                SecurityContext::AUTHENTICATION_ERROR
            );
        } else {
            $error = $session->get(SecurityContext::AUTHENTICATION_ERROR);
            $session->remove(SecurityContext::AUTHENTICATION_ERROR);
        }

        return $this->render(
            'SimpleProfileBundle:Security:login.html.twig',
            array(
                // last username entered by the user
                'last_username' => $session->get(SecurityContext::LAST_USERNAME),
                'error'         => $error,
            )
        );
    }

    public function todoListAction()
    {
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $id = $user->getId();

        $todos = $this->getDoctrine()
            ->getRepository('SimpleProfileBundle:Todo')
            ->findByIdUser($id);
        if (!$todos) {
            throw $this->createNotFoundException('No todos found');
        }

      return $this->render('SimpleProfileBundle:Security:todolist.html.twig',  array( 'todos' => $todos));
    }
}
