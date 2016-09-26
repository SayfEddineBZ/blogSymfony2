<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_609bc05833933aa09e1514f6011407a52c14001d23ae615f40a23beb1b26f495 extends Twig_Template
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
        $__internal_4be906bcb4dbe74679eaa297052a11c9da7424ee3ad241f5f441cf5c75e66d6e = $this->env->getExtension("native_profiler");
        $__internal_4be906bcb4dbe74679eaa297052a11c9da7424ee3ad241f5f441cf5c75e66d6e->enter($__internal_4be906bcb4dbe74679eaa297052a11c9da7424ee3ad241f5f441cf5c75e66d6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_4be906bcb4dbe74679eaa297052a11c9da7424ee3ad241f5f441cf5c75e66d6e->leave($__internal_4be906bcb4dbe74679eaa297052a11c9da7424ee3ad241f5f441cf5c75e66d6e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
