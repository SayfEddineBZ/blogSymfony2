<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_e576f2c1a0cf4c38db855be3f5dcdf29b3fde01cc3845f60e809f775dfc12e28 extends Twig_Template
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
        $__internal_ca3a482e0be028b687cca6f606147ea56b4e5fb7ae5d5ca8be95fb245c9dba82 = $this->env->getExtension("native_profiler");
        $__internal_ca3a482e0be028b687cca6f606147ea56b4e5fb7ae5d5ca8be95fb245c9dba82->enter($__internal_ca3a482e0be028b687cca6f606147ea56b4e5fb7ae5d5ca8be95fb245c9dba82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_ca3a482e0be028b687cca6f606147ea56b4e5fb7ae5d5ca8be95fb245c9dba82->leave($__internal_ca3a482e0be028b687cca6f606147ea56b4e5fb7ae5d5ca8be95fb245c9dba82_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
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
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */
