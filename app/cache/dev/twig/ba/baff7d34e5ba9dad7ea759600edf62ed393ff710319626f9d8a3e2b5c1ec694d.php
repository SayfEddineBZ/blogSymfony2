<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_62c32caab54233b9ec1018ef4fe82e390dabffb7157a0d1dfd47c3b420715493 extends Twig_Template
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
        $__internal_996b3553104232426fe1eeb0340b7e28923c5e36e91b75b5c4e19faa757cc091 = $this->env->getExtension("native_profiler");
        $__internal_996b3553104232426fe1eeb0340b7e28923c5e36e91b75b5c4e19faa757cc091->enter($__internal_996b3553104232426fe1eeb0340b7e28923c5e36e91b75b5c4e19faa757cc091_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_996b3553104232426fe1eeb0340b7e28923c5e36e91b75b5c4e19faa757cc091->leave($__internal_996b3553104232426fe1eeb0340b7e28923c5e36e91b75b5c4e19faa757cc091_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
