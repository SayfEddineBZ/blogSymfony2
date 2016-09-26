<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_19f926dfdd0b2903f85ad0ba9be712f107e4f779e6ce7aeaa929d1687d685c1b extends Twig_Template
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
        $__internal_72aa151b98a1aa99883519c54c38c485d42043a8971a0da87cd12a83937b79ad = $this->env->getExtension("native_profiler");
        $__internal_72aa151b98a1aa99883519c54c38c485d42043a8971a0da87cd12a83937b79ad->enter($__internal_72aa151b98a1aa99883519c54c38c485d42043a8971a0da87cd12a83937b79ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_72aa151b98a1aa99883519c54c38c485d42043a8971a0da87cd12a83937b79ad->leave($__internal_72aa151b98a1aa99883519c54c38c485d42043a8971a0da87cd12a83937b79ad_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
