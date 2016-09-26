<?php

/* BloggerBlogBundle::layout.html.twig */
class __TwigTemplate_464e08aa04c248367f49f38ad6ce6364622d4e010ca42ddd258b49bd43834f00 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::base.html.twig", "BloggerBlogBundle::layout.html.twig", 2);
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
        $__internal_f7cf0661df533adba56194ea5b2e6f1d547bc3b902caaa2e7fd5596432e23877 = $this->env->getExtension("native_profiler");
        $__internal_f7cf0661df533adba56194ea5b2e6f1d547bc3b902caaa2e7fd5596432e23877->enter($__internal_f7cf0661df533adba56194ea5b2e6f1d547bc3b902caaa2e7fd5596432e23877_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BloggerBlogBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f7cf0661df533adba56194ea5b2e6f1d547bc3b902caaa2e7fd5596432e23877->leave($__internal_f7cf0661df533adba56194ea5b2e6f1d547bc3b902caaa2e7fd5596432e23877_prof);

    }

    // line 4
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_8c74a131f8c36341c3c1c8556ec1ae435f4638610cbdafa63d7429278a2dfcc9 = $this->env->getExtension("native_profiler");
        $__internal_8c74a131f8c36341c3c1c8556ec1ae435f4638610cbdafa63d7429278a2dfcc9->enter($__internal_8c74a131f8c36341c3c1c8556ec1ae435f4638610cbdafa63d7429278a2dfcc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 5
        echo "    Sidebar content
";
        
        $__internal_8c74a131f8c36341c3c1c8556ec1ae435f4638610cbdafa63d7429278a2dfcc9->leave($__internal_8c74a131f8c36341c3c1c8556ec1ae435f4638610cbdafa63d7429278a2dfcc9_prof);

    }

    public function getTemplateName()
    {
        return "BloggerBlogBundle::layout.html.twig";
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
