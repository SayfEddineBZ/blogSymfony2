<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_89658961f04ba07ea89cc808762c9ed394a9e9b67db19915ed9a16b3be5d4e5b extends Twig_Template
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
        $__internal_4f267f99592b84a8586a719f3ef6ea1a6383b2fb9f133b5aa642e046d6250858 = $this->env->getExtension("native_profiler");
        $__internal_4f267f99592b84a8586a719f3ef6ea1a6383b2fb9f133b5aa642e046d6250858->enter($__internal_4f267f99592b84a8586a719f3ef6ea1a6383b2fb9f133b5aa642e046d6250858_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_4f267f99592b84a8586a719f3ef6ea1a6383b2fb9f133b5aa642e046d6250858->leave($__internal_4f267f99592b84a8586a719f3ef6ea1a6383b2fb9f133b5aa642e046d6250858_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
