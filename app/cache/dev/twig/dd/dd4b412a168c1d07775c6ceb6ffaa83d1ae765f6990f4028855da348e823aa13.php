<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_9a02115b89dbf7075a254525480acd5adf73b472642a9aaa412d54552b664d41 extends Twig_Template
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
        $__internal_e3392cef1a8255ec47524414b680616ef02924bbc6669469b76ddecd24db71c5 = $this->env->getExtension("native_profiler");
        $__internal_e3392cef1a8255ec47524414b680616ef02924bbc6669469b76ddecd24db71c5->enter($__internal_e3392cef1a8255ec47524414b680616ef02924bbc6669469b76ddecd24db71c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_e3392cef1a8255ec47524414b680616ef02924bbc6669469b76ddecd24db71c5->leave($__internal_e3392cef1a8255ec47524414b680616ef02924bbc6669469b76ddecd24db71c5_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
