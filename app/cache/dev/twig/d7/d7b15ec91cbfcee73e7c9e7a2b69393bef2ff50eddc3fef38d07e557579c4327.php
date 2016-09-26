<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_06d47a7a0b6f0b69db6100d43fd146908f77b40b1c00f7578fa994c849d800be extends Twig_Template
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
        $__internal_a42c3608ef5b504212b61a821b55823e68f69288f7e521f9751ef0e3ba3f17c1 = $this->env->getExtension("native_profiler");
        $__internal_a42c3608ef5b504212b61a821b55823e68f69288f7e521f9751ef0e3ba3f17c1->enter($__internal_a42c3608ef5b504212b61a821b55823e68f69288f7e521f9751ef0e3ba3f17c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_a42c3608ef5b504212b61a821b55823e68f69288f7e521f9751ef0e3ba3f17c1->leave($__internal_a42c3608ef5b504212b61a821b55823e68f69288f7e521f9751ef0e3ba3f17c1_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
