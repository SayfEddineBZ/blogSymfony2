<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_f6b697683efa878c2a8fb2b98c3abdd3ccb113cdd26c74b29b4600bd2aaf653d extends Twig_Template
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
        $__internal_b7c75865d9a6b6dbe2d70b5a512c329f5258b29c024757b367eba93c27fb926a = $this->env->getExtension("native_profiler");
        $__internal_b7c75865d9a6b6dbe2d70b5a512c329f5258b29c024757b367eba93c27fb926a->enter($__internal_b7c75865d9a6b6dbe2d70b5a512c329f5258b29c024757b367eba93c27fb926a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_b7c75865d9a6b6dbe2d70b5a512c329f5258b29c024757b367eba93c27fb926a->leave($__internal_b7c75865d9a6b6dbe2d70b5a512c329f5258b29c024757b367eba93c27fb926a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
