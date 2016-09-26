<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_848fdefc423cf9bd887aaf110f64ea44b3e2af8247c39fc0f2cf61afd16821a9 extends Twig_Template
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
        $__internal_877c3e57ddd92b89e4d979445c2b88f10809d9799faefeeb2b279eab8205c111 = $this->env->getExtension("native_profiler");
        $__internal_877c3e57ddd92b89e4d979445c2b88f10809d9799faefeeb2b279eab8205c111->enter($__internal_877c3e57ddd92b89e4d979445c2b88f10809d9799faefeeb2b279eab8205c111_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_877c3e57ddd92b89e4d979445c2b88f10809d9799faefeeb2b279eab8205c111->leave($__internal_877c3e57ddd92b89e4d979445c2b88f10809d9799faefeeb2b279eab8205c111_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
