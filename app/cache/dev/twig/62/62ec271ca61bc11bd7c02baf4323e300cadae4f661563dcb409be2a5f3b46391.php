<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_7b15144cef533542c5f41621b7462375d33954a97c27edc84a5a190767ec69c3 extends Twig_Template
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
        $__internal_a8c6aca39da315c931f1a0ffb733907d105d8a648ca715f8a74c8ef258fc6601 = $this->env->getExtension("native_profiler");
        $__internal_a8c6aca39da315c931f1a0ffb733907d105d8a648ca715f8a74c8ef258fc6601->enter($__internal_a8c6aca39da315c931f1a0ffb733907d105d8a648ca715f8a74c8ef258fc6601_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_a8c6aca39da315c931f1a0ffb733907d105d8a648ca715f8a74c8ef258fc6601->leave($__internal_a8c6aca39da315c931f1a0ffb733907d105d8a648ca715f8a74c8ef258fc6601_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */
