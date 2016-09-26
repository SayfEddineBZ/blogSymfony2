<?php

/* BloggerBlogBundle:Page:index.html.twig */
class __TwigTemplate_3c631438ba3262b9fba67fc1fd496bae2aa6e8c8c347df8e13e2a583b5e7d53d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("BloggerBlogBundle::layout.html.twig", "BloggerBlogBundle:Page:index.html.twig", 2);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BloggerBlogBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_572724292b7d44b2d54f3ee08d456db9eb98276dd2d3c785bff4f7b24f0b0df6 = $this->env->getExtension("native_profiler");
        $__internal_572724292b7d44b2d54f3ee08d456db9eb98276dd2d3c785bff4f7b24f0b0df6->enter($__internal_572724292b7d44b2d54f3ee08d456db9eb98276dd2d3c785bff4f7b24f0b0df6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BloggerBlogBundle:Page:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_572724292b7d44b2d54f3ee08d456db9eb98276dd2d3c785bff4f7b24f0b0df6->leave($__internal_572724292b7d44b2d54f3ee08d456db9eb98276dd2d3c785bff4f7b24f0b0df6_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_4e0a4781c9910319a9579d5ead282510db218856e2c8ad0d3b1b74bac3d225d1 = $this->env->getExtension("native_profiler");
        $__internal_4e0a4781c9910319a9579d5ead282510db218856e2c8ad0d3b1b74bac3d225d1->enter($__internal_4e0a4781c9910319a9579d5ead282510db218856e2c8ad0d3b1b74bac3d225d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    Blog homepage
";
        
        $__internal_4e0a4781c9910319a9579d5ead282510db218856e2c8ad0d3b1b74bac3d225d1->leave($__internal_4e0a4781c9910319a9579d5ead282510db218856e2c8ad0d3b1b74bac3d225d1_prof);

    }

    public function getTemplateName()
    {
        return "BloggerBlogBundle:Page:index.html.twig";
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
/* {# src/Blogger/BlogBundle/Resources/views/Page/index.html.twig #}*/
/* {% extends 'BloggerBlogBundle::layout.html.twig' %}*/
/* */
/* {% block body %}*/
/*     Blog homepage*/
/* {% endblock %}*/
