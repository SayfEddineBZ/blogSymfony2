<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_005b12d2879c51a3098cf5a2d428e9b7456a672b9689d0bab0db6545f04c6f3b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_da065f8467986a7b65311c730dc4f1a94f42b888bb127d873ddd0edf4e298b0c = $this->env->getExtension("native_profiler");
        $__internal_da065f8467986a7b65311c730dc4f1a94f42b888bb127d873ddd0edf4e298b0c->enter($__internal_da065f8467986a7b65311c730dc4f1a94f42b888bb127d873ddd0edf4e298b0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_da065f8467986a7b65311c730dc4f1a94f42b888bb127d873ddd0edf4e298b0c->leave($__internal_da065f8467986a7b65311c730dc4f1a94f42b888bb127d873ddd0edf4e298b0c_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_5dbefe7d27e704e62a94c66fcaf0a7213d9a673c68e2c6ef4a442020f006aeb9 = $this->env->getExtension("native_profiler");
        $__internal_5dbefe7d27e704e62a94c66fcaf0a7213d9a673c68e2c6ef4a442020f006aeb9->enter($__internal_5dbefe7d27e704e62a94c66fcaf0a7213d9a673c68e2c6ef4a442020f006aeb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_5dbefe7d27e704e62a94c66fcaf0a7213d9a673c68e2c6ef4a442020f006aeb9->leave($__internal_5dbefe7d27e704e62a94c66fcaf0a7213d9a673c68e2c6ef4a442020f006aeb9_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
