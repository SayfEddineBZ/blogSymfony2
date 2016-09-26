<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_12511f2a1ebac9a29881308d887e0d30cb6bda863ce7027851c51748dbac4bb2 extends Twig_Template
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
        $__internal_38653a2a6aa9409079a953b642ea653260b0b3436c986c82686d29f4ccfb5a13 = $this->env->getExtension("native_profiler");
        $__internal_38653a2a6aa9409079a953b642ea653260b0b3436c986c82686d29f4ccfb5a13->enter($__internal_38653a2a6aa9409079a953b642ea653260b0b3436c986c82686d29f4ccfb5a13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_38653a2a6aa9409079a953b642ea653260b0b3436c986c82686d29f4ccfb5a13->leave($__internal_38653a2a6aa9409079a953b642ea653260b0b3436c986c82686d29f4ccfb5a13_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
