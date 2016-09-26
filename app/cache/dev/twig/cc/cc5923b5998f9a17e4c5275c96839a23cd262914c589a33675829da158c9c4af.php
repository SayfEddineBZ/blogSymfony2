<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_5e8aab0ef42cb0b345b3191cdc7fa0b7ccbe0605e91b0549877fdaa40c6943af extends Twig_Template
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
        $__internal_50d3f7bb3107f4e5579d162a912be9d5eb7e49b37fc59807f70aa80e7247950f = $this->env->getExtension("native_profiler");
        $__internal_50d3f7bb3107f4e5579d162a912be9d5eb7e49b37fc59807f70aa80e7247950f->enter($__internal_50d3f7bb3107f4e5579d162a912be9d5eb7e49b37fc59807f70aa80e7247950f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_50d3f7bb3107f4e5579d162a912be9d5eb7e49b37fc59807f70aa80e7247950f->leave($__internal_50d3f7bb3107f4e5579d162a912be9d5eb7e49b37fc59807f70aa80e7247950f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
