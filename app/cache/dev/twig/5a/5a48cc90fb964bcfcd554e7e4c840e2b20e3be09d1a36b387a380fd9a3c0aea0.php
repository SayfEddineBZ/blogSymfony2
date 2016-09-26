<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_81c71ceae4448526f2e1bb165cd60892180f4e9d01b555db4a42c240326ff5aa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f80f606f5736deab2bc32ee7c4f0e91475fa6b1eceee5299e57f6eb3996c7f31 = $this->env->getExtension("native_profiler");
        $__internal_f80f606f5736deab2bc32ee7c4f0e91475fa6b1eceee5299e57f6eb3996c7f31->enter($__internal_f80f606f5736deab2bc32ee7c4f0e91475fa6b1eceee5299e57f6eb3996c7f31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f80f606f5736deab2bc32ee7c4f0e91475fa6b1eceee5299e57f6eb3996c7f31->leave($__internal_f80f606f5736deab2bc32ee7c4f0e91475fa6b1eceee5299e57f6eb3996c7f31_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a4878680fc35d276cb96f5e9962cefca5f6796d21aef85907dd3d292e2e0a11a = $this->env->getExtension("native_profiler");
        $__internal_a4878680fc35d276cb96f5e9962cefca5f6796d21aef85907dd3d292e2e0a11a->enter($__internal_a4878680fc35d276cb96f5e9962cefca5f6796d21aef85907dd3d292e2e0a11a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_a4878680fc35d276cb96f5e9962cefca5f6796d21aef85907dd3d292e2e0a11a->leave($__internal_a4878680fc35d276cb96f5e9962cefca5f6796d21aef85907dd3d292e2e0a11a_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_897732ae66c5c33278f67aa9b93cd27cfd605e5c3ce20ceab1a9f28b43072e7d = $this->env->getExtension("native_profiler");
        $__internal_897732ae66c5c33278f67aa9b93cd27cfd605e5c3ce20ceab1a9f28b43072e7d->enter($__internal_897732ae66c5c33278f67aa9b93cd27cfd605e5c3ce20ceab1a9f28b43072e7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_897732ae66c5c33278f67aa9b93cd27cfd605e5c3ce20ceab1a9f28b43072e7d->leave($__internal_897732ae66c5c33278f67aa9b93cd27cfd605e5c3ce20ceab1a9f28b43072e7d_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a1d59d2a7e1d1a9dbb6b2160af1570808cab5c2916bf1273b9ffbed249224174 = $this->env->getExtension("native_profiler");
        $__internal_a1d59d2a7e1d1a9dbb6b2160af1570808cab5c2916bf1273b9ffbed249224174->enter($__internal_a1d59d2a7e1d1a9dbb6b2160af1570808cab5c2916bf1273b9ffbed249224174_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_a1d59d2a7e1d1a9dbb6b2160af1570808cab5c2916bf1273b9ffbed249224174->leave($__internal_a1d59d2a7e1d1a9dbb6b2160af1570808cab5c2916bf1273b9ffbed249224174_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
