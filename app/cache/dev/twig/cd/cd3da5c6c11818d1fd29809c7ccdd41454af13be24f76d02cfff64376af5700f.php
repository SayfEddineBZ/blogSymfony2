<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_ec7622deb887763536cfd5ebdbb18bc84a6a94cf46434f3a6bb567a5033b351e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_7397660c860690c6e62c7e3441b3d3208e127c71ed58bd37823ed00717d484f2 = $this->env->getExtension("native_profiler");
        $__internal_7397660c860690c6e62c7e3441b3d3208e127c71ed58bd37823ed00717d484f2->enter($__internal_7397660c860690c6e62c7e3441b3d3208e127c71ed58bd37823ed00717d484f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7397660c860690c6e62c7e3441b3d3208e127c71ed58bd37823ed00717d484f2->leave($__internal_7397660c860690c6e62c7e3441b3d3208e127c71ed58bd37823ed00717d484f2_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_5b4279ace5b26654ca7897daae292120f8fa7ac534ce7c567e773b4f3f1e5787 = $this->env->getExtension("native_profiler");
        $__internal_5b4279ace5b26654ca7897daae292120f8fa7ac534ce7c567e773b4f3f1e5787->enter($__internal_5b4279ace5b26654ca7897daae292120f8fa7ac534ce7c567e773b4f3f1e5787_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_5b4279ace5b26654ca7897daae292120f8fa7ac534ce7c567e773b4f3f1e5787->leave($__internal_5b4279ace5b26654ca7897daae292120f8fa7ac534ce7c567e773b4f3f1e5787_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_55ecf650499aa8f6ba24fbbc82dfd12f4933f34c7e9780cb8eb69866dce926ad = $this->env->getExtension("native_profiler");
        $__internal_55ecf650499aa8f6ba24fbbc82dfd12f4933f34c7e9780cb8eb69866dce926ad->enter($__internal_55ecf650499aa8f6ba24fbbc82dfd12f4933f34c7e9780cb8eb69866dce926ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_55ecf650499aa8f6ba24fbbc82dfd12f4933f34c7e9780cb8eb69866dce926ad->leave($__internal_55ecf650499aa8f6ba24fbbc82dfd12f4933f34c7e9780cb8eb69866dce926ad_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
