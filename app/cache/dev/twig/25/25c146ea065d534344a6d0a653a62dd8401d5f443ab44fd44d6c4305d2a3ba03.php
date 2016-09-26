<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_3f8a58eba23e4c3b31a7ca41ca2c76456c7c065fe895250156d1b81bd364cec0 extends Twig_Template
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
        $__internal_93c839117f4b0ada9117068de4157c7393562f00ab8e5050ab413f975f7a3d3b = $this->env->getExtension("native_profiler");
        $__internal_93c839117f4b0ada9117068de4157c7393562f00ab8e5050ab413f975f7a3d3b->enter($__internal_93c839117f4b0ada9117068de4157c7393562f00ab8e5050ab413f975f7a3d3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_93c839117f4b0ada9117068de4157c7393562f00ab8e5050ab413f975f7a3d3b->leave($__internal_93c839117f4b0ada9117068de4157c7393562f00ab8e5050ab413f975f7a3d3b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
