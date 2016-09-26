<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_a57b45854eb842b8d08301f95ba56394772b47f01a1f7cb3405bc08e6db16358 extends Twig_Template
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
        $__internal_8b03f3e46f6702583ba57b9d80751f9453d5dfe2a2795b5a67d8123f078ee471 = $this->env->getExtension("native_profiler");
        $__internal_8b03f3e46f6702583ba57b9d80751f9453d5dfe2a2795b5a67d8123f078ee471->enter($__internal_8b03f3e46f6702583ba57b9d80751f9453d5dfe2a2795b5a67d8123f078ee471_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_8b03f3e46f6702583ba57b9d80751f9453d5dfe2a2795b5a67d8123f078ee471->leave($__internal_8b03f3e46f6702583ba57b9d80751f9453d5dfe2a2795b5a67d8123f078ee471_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
