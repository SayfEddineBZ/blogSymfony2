<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_9f3348ccf96aa6a53ab97c69cd233df469358079960106100976085507aa5a01 extends Twig_Template
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
        $__internal_bea731e1573a60dd44017916578369682d40f5d2be6ab87852a636be2cafadba = $this->env->getExtension("native_profiler");
        $__internal_bea731e1573a60dd44017916578369682d40f5d2be6ab87852a636be2cafadba->enter($__internal_bea731e1573a60dd44017916578369682d40f5d2be6ab87852a636be2cafadba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_bea731e1573a60dd44017916578369682d40f5d2be6ab87852a636be2cafadba->leave($__internal_bea731e1573a60dd44017916578369682d40f5d2be6ab87852a636be2cafadba_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
