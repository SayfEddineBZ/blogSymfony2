<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_80c64569019c37db502c4513044204aa6affe21d95064fb22477f1960116066a extends Twig_Template
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
        $__internal_9b5974300f774796c0b7a0c4974101f0639d8146029c050bb12f9a6a42468734 = $this->env->getExtension("native_profiler");
        $__internal_9b5974300f774796c0b7a0c4974101f0639d8146029c050bb12f9a6a42468734->enter($__internal_9b5974300f774796c0b7a0c4974101f0639d8146029c050bb12f9a6a42468734_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_9b5974300f774796c0b7a0c4974101f0639d8146029c050bb12f9a6a42468734->leave($__internal_9b5974300f774796c0b7a0c4974101f0639d8146029c050bb12f9a6a42468734_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
