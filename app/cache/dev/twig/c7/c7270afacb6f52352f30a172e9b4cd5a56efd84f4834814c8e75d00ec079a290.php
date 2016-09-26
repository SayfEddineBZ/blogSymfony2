<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_b01b2df0041e4336b6c2edeb4909f0bc790d64d77b923c94f0fcd0ec5a4458c7 extends Twig_Template
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
        $__internal_93eefe4d41679559c506e959b81acb10b40509c8454cdb836f30c01cfe3c4b0b = $this->env->getExtension("native_profiler");
        $__internal_93eefe4d41679559c506e959b81acb10b40509c8454cdb836f30c01cfe3c4b0b->enter($__internal_93eefe4d41679559c506e959b81acb10b40509c8454cdb836f30c01cfe3c4b0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_93eefe4d41679559c506e959b81acb10b40509c8454cdb836f30c01cfe3c4b0b->leave($__internal_93eefe4d41679559c506e959b81acb10b40509c8454cdb836f30c01cfe3c4b0b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <textarea <?php echo $view['form']->block($form, 'widget_attributes') ?>><?php echo $view->escape($value) ?></textarea>*/
/* */
