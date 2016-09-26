<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_8548ea0b2a22cc09e8e3a4bb70dc144be31b827ec36db4d7e252e266d46e6b3b extends Twig_Template
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
        $__internal_bbf034fa6f9b20ca6a7932c8560d37e7fdc4aa0f513bb3d7eeebfb704c3201cb = $this->env->getExtension("native_profiler");
        $__internal_bbf034fa6f9b20ca6a7932c8560d37e7fdc4aa0f513bb3d7eeebfb704c3201cb->enter($__internal_bbf034fa6f9b20ca6a7932c8560d37e7fdc4aa0f513bb3d7eeebfb704c3201cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_bbf034fa6f9b20ca6a7932c8560d37e7fdc4aa0f513bb3d7eeebfb704c3201cb->leave($__internal_bbf034fa6f9b20ca6a7932c8560d37e7fdc4aa0f513bb3d7eeebfb704c3201cb_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
