<?php

/* BloggerblogBundle::layout.html.twig */
class __TwigTemplate_ad730f7771e9af69ffe99d155be8ba045f8eba6c6cb06610aeb8aafcf4a49484 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::base.html.twig", "BloggerblogBundle::layout.html.twig", 2);
        $this->blocks = array(
            'sidebar' => array($this, 'block_sidebar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a0012ce8e08958f9f66460236b05c1b53f4a7a164cec594a5f1a8ee28d1499b3 = $this->env->getExtension("native_profiler");
        $__internal_a0012ce8e08958f9f66460236b05c1b53f4a7a164cec594a5f1a8ee28d1499b3->enter($__internal_a0012ce8e08958f9f66460236b05c1b53f4a7a164cec594a5f1a8ee28d1499b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BloggerblogBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a0012ce8e08958f9f66460236b05c1b53f4a7a164cec594a5f1a8ee28d1499b3->leave($__internal_a0012ce8e08958f9f66460236b05c1b53f4a7a164cec594a5f1a8ee28d1499b3_prof);

    }

    // line 4
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_83bd0b7e45ec1540f56e828a9a765eab742030065d601b37d8c6b01a8e2b8d18 = $this->env->getExtension("native_profiler");
        $__internal_83bd0b7e45ec1540f56e828a9a765eab742030065d601b37d8c6b01a8e2b8d18->enter($__internal_83bd0b7e45ec1540f56e828a9a765eab742030065d601b37d8c6b01a8e2b8d18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 5
        echo "    Sidebar content
";
        
        $__internal_83bd0b7e45ec1540f56e828a9a765eab742030065d601b37d8c6b01a8e2b8d18->leave($__internal_83bd0b7e45ec1540f56e828a9a765eab742030065d601b37d8c6b01a8e2b8d18_prof);

    }

    public function getTemplateName()
    {
        return "BloggerblogBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 5,  34 => 4,  11 => 2,);
    }
}
/* {# src/Blogger/BlogBundle/Resources/views/layout.html.twig #}*/
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block sidebar %}*/
/*     Sidebar content*/
/* {% endblock %}*/
