<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_5a32d4a60f9db30b29e1aa30d0c09849f865be170fed3f7ca5e3a227fbad1da8 extends Twig_Template
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
        $__internal_c314d95c3c53d0293d49909ad208685f7ebe04dc6bd86a1a0c4a8361243516e4 = $this->env->getExtension("native_profiler");
        $__internal_c314d95c3c53d0293d49909ad208685f7ebe04dc6bd86a1a0c4a8361243516e4->enter($__internal_c314d95c3c53d0293d49909ad208685f7ebe04dc6bd86a1a0c4a8361243516e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_c314d95c3c53d0293d49909ad208685f7ebe04dc6bd86a1a0c4a8361243516e4->leave($__internal_c314d95c3c53d0293d49909ad208685f7ebe04dc6bd86a1a0c4a8361243516e4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
