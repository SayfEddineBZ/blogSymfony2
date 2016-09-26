<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_ff51cacfa8a28598fc8e280e9fdd1db8d8139957a304edde211695ed69079875 extends Twig_Template
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
        $__internal_f40874a9f613e8e8bc6c87cdbc0e4a1542e8f31072d154655011538f974b06a2 = $this->env->getExtension("native_profiler");
        $__internal_f40874a9f613e8e8bc6c87cdbc0e4a1542e8f31072d154655011538f974b06a2->enter($__internal_f40874a9f613e8e8bc6c87cdbc0e4a1542e8f31072d154655011538f974b06a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_f40874a9f613e8e8bc6c87cdbc0e4a1542e8f31072d154655011538f974b06a2->leave($__internal_f40874a9f613e8e8bc6c87cdbc0e4a1542e8f31072d154655011538f974b06a2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
