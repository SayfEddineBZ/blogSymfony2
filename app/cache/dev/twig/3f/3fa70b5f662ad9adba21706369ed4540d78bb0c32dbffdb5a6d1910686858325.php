<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_57f3fd4717ad698f3ab8e6b4da90a2046b64b6f1b929d4ff01cd145a079cacf0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_42464168ba33a85b11d8774f75d0313fb967ff25323290181b0d348567450552 = $this->env->getExtension("native_profiler");
        $__internal_42464168ba33a85b11d8774f75d0313fb967ff25323290181b0d348567450552->enter($__internal_42464168ba33a85b11d8774f75d0313fb967ff25323290181b0d348567450552_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_42464168ba33a85b11d8774f75d0313fb967ff25323290181b0d348567450552->leave($__internal_42464168ba33a85b11d8774f75d0313fb967ff25323290181b0d348567450552_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_04de9e6d53763ee7d1986e9e87a6b07e184021c3072f2b118365c6cf520708d6 = $this->env->getExtension("native_profiler");
        $__internal_04de9e6d53763ee7d1986e9e87a6b07e184021c3072f2b118365c6cf520708d6->enter($__internal_04de9e6d53763ee7d1986e9e87a6b07e184021c3072f2b118365c6cf520708d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_04de9e6d53763ee7d1986e9e87a6b07e184021c3072f2b118365c6cf520708d6->leave($__internal_04de9e6d53763ee7d1986e9e87a6b07e184021c3072f2b118365c6cf520708d6_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_48a8507915e4e80b082ca9b0db4f82ce34992d38a9bc80f62b8cead90abc5e38 = $this->env->getExtension("native_profiler");
        $__internal_48a8507915e4e80b082ca9b0db4f82ce34992d38a9bc80f62b8cead90abc5e38->enter($__internal_48a8507915e4e80b082ca9b0db4f82ce34992d38a9bc80f62b8cead90abc5e38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_48a8507915e4e80b082ca9b0db4f82ce34992d38a9bc80f62b8cead90abc5e38->leave($__internal_48a8507915e4e80b082ca9b0db4f82ce34992d38a9bc80f62b8cead90abc5e38_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_10965f277c3987a734444d173be8b134dee369d957000142f204cca73bbcc9d5 = $this->env->getExtension("native_profiler");
        $__internal_10965f277c3987a734444d173be8b134dee369d957000142f204cca73bbcc9d5->enter($__internal_10965f277c3987a734444d173be8b134dee369d957000142f204cca73bbcc9d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_10965f277c3987a734444d173be8b134dee369d957000142f204cca73bbcc9d5->leave($__internal_10965f277c3987a734444d173be8b134dee369d957000142f204cca73bbcc9d5_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
