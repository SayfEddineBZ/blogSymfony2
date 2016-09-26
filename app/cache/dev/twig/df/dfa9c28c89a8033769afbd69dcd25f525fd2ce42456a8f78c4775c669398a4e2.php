<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_6fce723dd1ba51914a43a1e435e95dc6e962427fc9658c3bef2db9ec76eb6526 extends Twig_Template
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
        $__internal_7bda625e22b3d46e8ac2ef90c2fdcbe165d6f6ae13aae0dc8648f65936ef090f = $this->env->getExtension("native_profiler");
        $__internal_7bda625e22b3d46e8ac2ef90c2fdcbe165d6f6ae13aae0dc8648f65936ef090f->enter($__internal_7bda625e22b3d46e8ac2ef90c2fdcbe165d6f6ae13aae0dc8648f65936ef090f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_7bda625e22b3d46e8ac2ef90c2fdcbe165d6f6ae13aae0dc8648f65936ef090f->leave($__internal_7bda625e22b3d46e8ac2ef90c2fdcbe165d6f6ae13aae0dc8648f65936ef090f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
