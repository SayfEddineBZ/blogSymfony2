<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_3e1a37cc6c6b8a31595633143566d3d905199babe3ee9125f40fb650b377fd6c extends Twig_Template
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
        $__internal_046b323f0a7273d6471b1eff2afc0204a84812968dc6634cd740bc6181205239 = $this->env->getExtension("native_profiler");
        $__internal_046b323f0a7273d6471b1eff2afc0204a84812968dc6634cd740bc6181205239->enter($__internal_046b323f0a7273d6471b1eff2afc0204a84812968dc6634cd740bc6181205239_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_046b323f0a7273d6471b1eff2afc0204a84812968dc6634cd740bc6181205239->leave($__internal_046b323f0a7273d6471b1eff2afc0204a84812968dc6634cd740bc6181205239_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
