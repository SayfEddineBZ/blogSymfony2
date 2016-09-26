<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_cc2fba15021a045eafcec1bbe43e017b2acfd1380c4077e0ea86f3d13b7eb763 extends Twig_Template
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
        $__internal_d59fb99544b383a52c54d9e46839bfdb0627529b9d1529714b8fcd080286e12b = $this->env->getExtension("native_profiler");
        $__internal_d59fb99544b383a52c54d9e46839bfdb0627529b9d1529714b8fcd080286e12b->enter($__internal_d59fb99544b383a52c54d9e46839bfdb0627529b9d1529714b8fcd080286e12b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_d59fb99544b383a52c54d9e46839bfdb0627529b9d1529714b8fcd080286e12b->leave($__internal_d59fb99544b383a52c54d9e46839bfdb0627529b9d1529714b8fcd080286e12b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
