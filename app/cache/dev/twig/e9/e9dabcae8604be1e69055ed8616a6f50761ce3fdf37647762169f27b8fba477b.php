<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_c9735a0b2247fff0af8647639fbe64efb702a04583648cf6461d5861c1b1cfd1 extends Twig_Template
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
        $__internal_d7bc6e84ad91f90b67b923a5993f4d3d99b06fac40056f2f281901b81ac8d360 = $this->env->getExtension("native_profiler");
        $__internal_d7bc6e84ad91f90b67b923a5993f4d3d99b06fac40056f2f281901b81ac8d360->enter($__internal_d7bc6e84ad91f90b67b923a5993f4d3d99b06fac40056f2f281901b81ac8d360_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_d7bc6e84ad91f90b67b923a5993f4d3d99b06fac40056f2f281901b81ac8d360->leave($__internal_d7bc6e84ad91f90b67b923a5993f4d3d99b06fac40056f2f281901b81ac8d360_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
