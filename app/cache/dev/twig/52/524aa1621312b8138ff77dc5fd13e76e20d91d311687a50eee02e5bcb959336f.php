<?php

/* BloggerBlogBundle:Page:about.html.twig */
class __TwigTemplate_2606f64dabcb87eb2f1fe1f61d50dbd531ef79b4263ece5cf8eba7e9d0320ce3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BloggerBlogBundle::layout.html.twig", "BloggerBlogBundle:Page:about.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BloggerBlogBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_58899d3a62c0c68e1f217919cbc343b6c1a6f7f9b258c3f2b8b932e5402fc378 = $this->env->getExtension("native_profiler");
        $__internal_58899d3a62c0c68e1f217919cbc343b6c1a6f7f9b258c3f2b8b932e5402fc378->enter($__internal_58899d3a62c0c68e1f217919cbc343b6c1a6f7f9b258c3f2b8b932e5402fc378_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BloggerBlogBundle:Page:about.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_58899d3a62c0c68e1f217919cbc343b6c1a6f7f9b258c3f2b8b932e5402fc378->leave($__internal_58899d3a62c0c68e1f217919cbc343b6c1a6f7f9b258c3f2b8b932e5402fc378_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_7411f412a88b7ace753cac53eeedbb1b6af223a9e4e37dedb2ab7fb4282844e4 = $this->env->getExtension("native_profiler");
        $__internal_7411f412a88b7ace753cac53eeedbb1b6af223a9e4e37dedb2ab7fb4282844e4->enter($__internal_7411f412a88b7ace753cac53eeedbb1b6af223a9e4e37dedb2ab7fb4282844e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "About";
        
        $__internal_7411f412a88b7ace753cac53eeedbb1b6af223a9e4e37dedb2ab7fb4282844e4->leave($__internal_7411f412a88b7ace753cac53eeedbb1b6af223a9e4e37dedb2ab7fb4282844e4_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_d2dac39b67614228644ec655bd63350a67f474f11e1410a6f093b93f0277e811 = $this->env->getExtension("native_profiler");
        $__internal_d2dac39b67614228644ec655bd63350a67f474f11e1410a6f093b93f0277e811->enter($__internal_d2dac39b67614228644ec655bd63350a67f474f11e1410a6f093b93f0277e811_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <header>
        <h1>About symblog</h1>
    </header>
    <article>
        <p>
            Dhm-it Symfony blog<br>
            Created by: Saifeddine BOUZIDI<br>
            Ingénieur étude et développement<br>
        </p>
    </article>
";
        
        $__internal_d2dac39b67614228644ec655bd63350a67f474f11e1410a6f093b93f0277e811->leave($__internal_d2dac39b67614228644ec655bd63350a67f474f11e1410a6f093b93f0277e811_prof);

    }

    public function getTemplateName()
    {
        return "BloggerBlogBundle:Page:about.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'BloggerBlogBundle::layout.html.twig' %}*/
/* */
/* {% block title %}About{% endblock%}*/
/* */
/* {% block body %}*/
/*     <header>*/
/*         <h1>About symblog</h1>*/
/*     </header>*/
/*     <article>*/
/*         <p>*/
/*             Dhm-it Symfony blog<br>*/
/*             Created by: Saifeddine BOUZIDI<br>*/
/*             Ingénieur étude et développement<br>*/
/*         </p>*/
/*     </article>*/
/* {% endblock %}*/
