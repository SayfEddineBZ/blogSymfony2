<?php

/* BloggerblogBundle:Page:index.html.twig */
class __TwigTemplate_3f0de6d392a2bfc9637fc152350924c37cc31045327e1f7ff8e3954e686408ce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("BloggerBlogBundle::layout.html.twig", "BloggerblogBundle:Page:index.html.twig", 2);
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
        $__internal_f20827e5567ec41d54a97875333a6f079821886ea845a71af8c6d728c83c2473 = $this->env->getExtension("native_profiler");
        $__internal_f20827e5567ec41d54a97875333a6f079821886ea845a71af8c6d728c83c2473->enter($__internal_f20827e5567ec41d54a97875333a6f079821886ea845a71af8c6d728c83c2473_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BloggerblogBundle:Page:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f20827e5567ec41d54a97875333a6f079821886ea845a71af8c6d728c83c2473->leave($__internal_f20827e5567ec41d54a97875333a6f079821886ea845a71af8c6d728c83c2473_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_cd5655e5614dc929ef506f95b0ee3334e22e0a490e3636ea049f4836e11d5b72 = $this->env->getExtension("native_profiler");
        $__internal_cd5655e5614dc929ef506f95b0ee3334e22e0a490e3636ea049f4836e11d5b72->enter($__internal_cd5655e5614dc929ef506f95b0ee3334e22e0a490e3636ea049f4836e11d5b72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    Blog homepage
";
        
        $__internal_cd5655e5614dc929ef506f95b0ee3334e22e0a490e3636ea049f4836e11d5b72->leave($__internal_cd5655e5614dc929ef506f95b0ee3334e22e0a490e3636ea049f4836e11d5b72_prof);

    }

    public function getTemplateName()
    {
        return "BloggerblogBundle:Page:index.html.twig";
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
