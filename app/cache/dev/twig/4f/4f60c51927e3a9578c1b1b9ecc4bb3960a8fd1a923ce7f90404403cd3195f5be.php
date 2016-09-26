<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_e0ab158146915c06e5f98e164046808fe3f8dd4c4bd55942772018d4425972a4 extends Twig_Template
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
        $__internal_842464bc589dbf6e213cc26007ea201afe9830e2846b629c803a164a7a60dbfc = $this->env->getExtension("native_profiler");
        $__internal_842464bc589dbf6e213cc26007ea201afe9830e2846b629c803a164a7a60dbfc->enter($__internal_842464bc589dbf6e213cc26007ea201afe9830e2846b629c803a164a7a60dbfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_842464bc589dbf6e213cc26007ea201afe9830e2846b629c803a164a7a60dbfc->leave($__internal_842464bc589dbf6e213cc26007ea201afe9830e2846b629c803a164a7a60dbfc_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
