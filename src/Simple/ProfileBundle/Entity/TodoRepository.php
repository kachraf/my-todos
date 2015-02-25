<?php

namespace Simple\ProfileBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * TodoRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class TodoRepository extends EntityRepository
{

    public function _findByIdUser($id)
    {
        $query = $this->getEntityManager()
            ->createQuery('
            SELECT t FROM SimpleProfileBundle:Todo t
            LEFT JOIN t.user u
            WHERE u.id = :id'
            )->setParameter('id', $id);

        try {
            return $query->getSingleResult();
        } catch (\Doctrine\ORM\NoResultException $e) {
            return null;
        }
    }

    public function findByIdUser($id)
    {
        $todos = $this->createQueryBuilder('t')
            ->leftJoin('t.user', 'u')
            ->select(
                't.id',
                't.name',
                't.description',
                't.date_todo'
            )
            ->where('u.id = :id')
            ->setParameter('id', $id)
            ->distinct()
            ->getQuery()
            ->getResult();

        return $todos;
    }


}
