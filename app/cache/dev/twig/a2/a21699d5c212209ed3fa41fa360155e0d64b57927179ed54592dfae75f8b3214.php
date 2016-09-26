<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_8ae0a03c87e4bb784a1a4a26fa19b73ec576ba7186b0f0adacd03201d98fa029 extends Twig_Template
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
        $__internal_4c3f2538bc19738491e66a94511f49580920da9d003543a8305b988d1709bf8a = $this->env->getExtension("native_profiler");
        $__internal_4c3f2538bc19738491e66a94511f49580920da9d003543a8305b988d1709bf8a->enter($__internal_4c3f2538bc19738491e66a94511f49580920da9d003543a8305b988d1709bf8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_4c3f2538bc19738491e66a94511f49580920da9d003543a8305b988d1709bf8a->leave($__internal_4c3f2538bc19738491e66a94511f49580920da9d003543a8305b988d1709bf8a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
