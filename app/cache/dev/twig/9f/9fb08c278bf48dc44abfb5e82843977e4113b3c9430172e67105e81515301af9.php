<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_b008bfc0755c399d6b7821ac96afae52bc002cc4c495df5b859bce3aeedb2dbd extends Twig_Template
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
        $__internal_ae84050dd698efcac41822733a5895f8bc5b45696bcbfbad82022a560b57abfc = $this->env->getExtension("native_profiler");
        $__internal_ae84050dd698efcac41822733a5895f8bc5b45696bcbfbad82022a560b57abfc->enter($__internal_ae84050dd698efcac41822733a5895f8bc5b45696bcbfbad82022a560b57abfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_ae84050dd698efcac41822733a5895f8bc5b45696bcbfbad82022a560b57abfc->leave($__internal_ae84050dd698efcac41822733a5895f8bc5b45696bcbfbad82022a560b57abfc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */
