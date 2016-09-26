<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_3e33c68c78614953a5b0df7887a3ba12eb22e6e24eb113de86d1479bebd97381 extends Twig_Template
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
        $__internal_d6b76c88a06654cf1f2c916ae69ac795f12867895bd775a786d6aeaa246ce018 = $this->env->getExtension("native_profiler");
        $__internal_d6b76c88a06654cf1f2c916ae69ac795f12867895bd775a786d6aeaa246ce018->enter($__internal_d6b76c88a06654cf1f2c916ae69ac795f12867895bd775a786d6aeaa246ce018_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_d6b76c88a06654cf1f2c916ae69ac795f12867895bd775a786d6aeaa246ce018->leave($__internal_d6b76c88a06654cf1f2c916ae69ac795f12867895bd775a786d6aeaa246ce018_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
