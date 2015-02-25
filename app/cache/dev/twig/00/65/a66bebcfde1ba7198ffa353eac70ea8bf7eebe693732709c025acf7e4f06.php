<?php

/* SimpleProfileBundle:Security:todolist.html.twig */
class __TwigTemplate_0065a66bebcfde1ba7198ffa353eac70ea8bf7eebe693732709c025acf7e4f06 extends Twig_Template
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
        echo " !


<table border=\"1\">
    ";
        // line 11
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["todos"]) ? $context["todos"] : $this->getContext($context, "todos")));
        foreach ($context['_seq'] as $context["_key"] => $context["todo"]) {
            // line 12
            echo "    <tr>

            <td>";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["todo"], "name", array()));
            echo "</td>
            <td>";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["todo"], "description", array()));
            echo "</td>
            <td>";
            // line 16
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["todo"], "date_todo", array()), "Y-m-d H:i:s"), "html", null, true);
            echo "</td>
            <td><a href=\"";
            // line 17
            echo $this->env->getExtension('routing')->getPath("logout");
            echo "\">Delete</a></td>


    </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['todo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "</table>

<div>
    <a href=\"\">Add Todo</a>
</div>


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
        return array (  68 => 22,  57 => 17,  53 => 16,  49 => 15,  45 => 14,  41 => 12,  37 => 11,  30 => 7,  22 => 2,  19 => 1,);
    }
}
