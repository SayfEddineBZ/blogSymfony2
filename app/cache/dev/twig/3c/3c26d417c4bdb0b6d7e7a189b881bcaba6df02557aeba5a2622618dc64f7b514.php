<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_889a5993a5fff6e6ef7a060d32aa1237e7f4b602cf37ebda5c97114627e5a204 extends Twig_Template
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
        $__internal_35f162cc3f3216ab48e20b62e854566ef5f419acf6d04e8612c2ba9cde659acf = $this->env->getExtension("native_profiler");
        $__internal_35f162cc3f3216ab48e20b62e854566ef5f419acf6d04e8612c2ba9cde659acf->enter($__internal_35f162cc3f3216ab48e20b62e854566ef5f419acf6d04e8612c2ba9cde659acf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_35f162cc3f3216ab48e20b62e854566ef5f419acf6d04e8612c2ba9cde659acf->leave($__internal_35f162cc3f3216ab48e20b62e854566ef5f419acf6d04e8612c2ba9cde659acf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */
