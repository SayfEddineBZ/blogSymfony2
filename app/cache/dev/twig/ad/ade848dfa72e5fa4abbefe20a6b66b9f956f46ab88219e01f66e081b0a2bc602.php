<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_2aebe9f035ba1a706b8cbd71dcf3fcb59481afe2b94850fdeaa71b9cfa524b31 extends Twig_Template
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
        $__internal_b42798a7f7a5313237718b01bf33b74917ab42d4434cbf6b989f6f28117020c2 = $this->env->getExtension("native_profiler");
        $__internal_b42798a7f7a5313237718b01bf33b74917ab42d4434cbf6b989f6f28117020c2->enter($__internal_b42798a7f7a5313237718b01bf33b74917ab42d4434cbf6b989f6f28117020c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_b42798a7f7a5313237718b01bf33b74917ab42d4434cbf6b989f6f28117020c2->leave($__internal_b42798a7f7a5313237718b01bf33b74917ab42d4434cbf6b989f6f28117020c2_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
