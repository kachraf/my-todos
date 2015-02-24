<?php

/* SimpleProfileBundle:Security:todolist.html.twig */
class __TwigTemplate_e9cbe6fad8ea4d569d7626591ae0378e0275e4e644eec3a75b3f2f2c7c9f1f25 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div>
    <a href=\"";
        // line 2
        echo $this->env->getExtension('routing')->getPath("logout");
        echo "\">Logout</a>
</div>

<h2>welcome to my Todo's</h2>

Hi ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo " !\t
";
    }

    public function getTemplateName()
    {
        return "SimpleProfileBundle:Security:todolist.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 7,  22 => 2,  19 => 1,);
    }
}
