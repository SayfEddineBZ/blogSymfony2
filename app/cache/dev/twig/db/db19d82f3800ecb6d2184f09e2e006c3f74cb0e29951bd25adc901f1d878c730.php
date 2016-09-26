<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_32aea0a6fea15397f80f650a280594c0e4b98b6df12ce52c9dd0172c8d6d4e5f extends Twig_Template
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
        $__internal_ca9a45a9673b2ef0dd5c6ab5e8cbb406f1176a5333bdae22c4a767014d529c71 = $this->env->getExtension("native_profiler");
        $__internal_ca9a45a9673b2ef0dd5c6ab5e8cbb406f1176a5333bdae22c4a767014d529c71->enter($__internal_ca9a45a9673b2ef0dd5c6ab5e8cbb406f1176a5333bdae22c4a767014d529c71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_ca9a45a9673b2ef0dd5c6ab5e8cbb406f1176a5333bdae22c4a767014d529c71->leave($__internal_ca9a45a9673b2ef0dd5c6ab5e8cbb406f1176a5333bdae22c4a767014d529c71_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
