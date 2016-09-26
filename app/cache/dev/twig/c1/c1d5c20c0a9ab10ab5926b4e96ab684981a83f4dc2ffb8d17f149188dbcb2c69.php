<?php

/* ::base.html.twig */
class __TwigTemplate_a87461866307537d9c05c2ac0e479242c3ff571d799e9b90317b5531f2c3ed81 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'navigation' => array($this, 'block_navigation'),
            'blog_title' => array($this, 'block_blog_title'),
            'blog_tagline' => array($this, 'block_blog_tagline'),
            'body' => array($this, 'block_body'),
            'sidebar' => array($this, 'block_sidebar'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ccf3071969628ba825d555d8067bf7cdea0665aee5a8d902e9fe4f1c4338511b = $this->env->getExtension("native_profiler");
        $__internal_ccf3071969628ba825d555d8067bf7cdea0665aee5a8d902e9fe4f1c4338511b->enter($__internal_ccf3071969628ba825d555d8067bf7cdea0665aee5a8d902e9fe4f1c4338511b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!-- app/Resources/views/base.html.twig -->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html\"; charset=utf-8\" />
        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo " - symblog</title>
        <!--[if lt IE 9]>
            <script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
        <![endif]-->
        ";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 15
        echo "        <link rel=\"shortcut icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>

        <section id=\"wrapper\">
            <header id=\"header\">
                <div class=\"top\">
                    ";
        // line 22
        $this->displayBlock('navigation', $context, $blocks);
        // line 31
        echo "                </div>

                <hgroup>
                    <h2>";
        // line 34
        $this->displayBlock('blog_title', $context, $blocks);
        echo "</h2>
                    <h3>";
        // line 35
        $this->displayBlock('blog_tagline', $context, $blocks);
        echo "</h3>
                </hgroup>
            </header>

            <section class=\"main-col\">
            ";
        // line 40
        $this->displayBlock('body', $context, $blocks);
        // line 41
        echo "        </section>
        <aside class=\"sidebar\">
        ";
        // line 43
        $this->displayBlock('sidebar', $context, $blocks);
        // line 44
        echo "    </aside>

    <div id=\"footer\">
        ";
        // line 47
        $this->displayBlock('footer', $context, $blocks);
        // line 50
        echo "    </div>
</section>

";
        // line 53
        $this->displayBlock('javascripts', $context, $blocks);
        // line 54
        echo "</body>
</html>";
        
        $__internal_ccf3071969628ba825d555d8067bf7cdea0665aee5a8d902e9fe4f1c4338511b->leave($__internal_ccf3071969628ba825d555d8067bf7cdea0665aee5a8d902e9fe4f1c4338511b_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_9df4aadc1337e7f00139eb03c4a3399f6f44db7956c0e35c251204cc3e4bee99 = $this->env->getExtension("native_profiler");
        $__internal_9df4aadc1337e7f00139eb03c4a3399f6f44db7956c0e35c251204cc3e4bee99->enter($__internal_9df4aadc1337e7f00139eb03c4a3399f6f44db7956c0e35c251204cc3e4bee99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "symblog";
        
        $__internal_9df4aadc1337e7f00139eb03c4a3399f6f44db7956c0e35c251204cc3e4bee99->leave($__internal_9df4aadc1337e7f00139eb03c4a3399f6f44db7956c0e35c251204cc3e4bee99_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f7576ca83454cf49fc2788ab91a70bb3f48102c80f8d5f64e9255f8a585a076a = $this->env->getExtension("native_profiler");
        $__internal_f7576ca83454cf49fc2788ab91a70bb3f48102c80f8d5f64e9255f8a585a076a->enter($__internal_f7576ca83454cf49fc2788ab91a70bb3f48102c80f8d5f64e9255f8a585a076a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        echo "            <link href='http://fonts.googleapis.com/css?family=Irish+Grover' rel='stylesheet' type='text/css'>
            <link href='http://fonts.googleapis.com/css?family=La+Belle+Aurore' rel='stylesheet' type='text/css'>
            <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/screen.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        ";
        
        $__internal_f7576ca83454cf49fc2788ab91a70bb3f48102c80f8d5f64e9255f8a585a076a->leave($__internal_f7576ca83454cf49fc2788ab91a70bb3f48102c80f8d5f64e9255f8a585a076a_prof);

    }

    // line 22
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_4f31943466262d1f3081952809fc0a1cf18357efee83183bf84756d3e59d24d4 = $this->env->getExtension("native_profiler");
        $__internal_4f31943466262d1f3081952809fc0a1cf18357efee83183bf84756d3e59d24d4->enter($__internal_4f31943466262d1f3081952809fc0a1cf18357efee83183bf84756d3e59d24d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        // line 23
        echo "                        <nav>
                            <ul class=\"navigation\">
                                <li><a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("BloggerBlogBundle_homepage");
        echo "\">Home</a></li>
                                <li><a href=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("BloggerBlogBundle_about");
        echo "\">About</a></li>
                                <li><a href=\"#\">Contact</a></li>
                            </ul>
                        </nav>
                    ";
        
        $__internal_4f31943466262d1f3081952809fc0a1cf18357efee83183bf84756d3e59d24d4->leave($__internal_4f31943466262d1f3081952809fc0a1cf18357efee83183bf84756d3e59d24d4_prof);

    }

    // line 34
    public function block_blog_title($context, array $blocks = array())
    {
        $__internal_726a44b0529f7b742c7d17e33d673929574f11abbe1dec108d6bee975dfb1509 = $this->env->getExtension("native_profiler");
        $__internal_726a44b0529f7b742c7d17e33d673929574f11abbe1dec108d6bee975dfb1509->enter($__internal_726a44b0529f7b742c7d17e33d673929574f11abbe1dec108d6bee975dfb1509_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blog_title"));

        echo "<a href=\"";
        echo $this->env->getExtension('routing')->getPath("BloggerBlogBundle_homepage");
        echo "\">symblog</a>";
        
        $__internal_726a44b0529f7b742c7d17e33d673929574f11abbe1dec108d6bee975dfb1509->leave($__internal_726a44b0529f7b742c7d17e33d673929574f11abbe1dec108d6bee975dfb1509_prof);

    }

    // line 35
    public function block_blog_tagline($context, array $blocks = array())
    {
        $__internal_b61b17413252ca65c3603b2b28af3735e5feebf6d60732ba55f856a29b47560a = $this->env->getExtension("native_profiler");
        $__internal_b61b17413252ca65c3603b2b28af3735e5feebf6d60732ba55f856a29b47560a->enter($__internal_b61b17413252ca65c3603b2b28af3735e5feebf6d60732ba55f856a29b47560a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blog_tagline"));

        echo "<a href=\"";
        echo $this->env->getExtension('routing')->getPath("BloggerBlogBundle_homepage");
        echo "\">creating a blog in Symfony2</a>";
        
        $__internal_b61b17413252ca65c3603b2b28af3735e5feebf6d60732ba55f856a29b47560a->leave($__internal_b61b17413252ca65c3603b2b28af3735e5feebf6d60732ba55f856a29b47560a_prof);

    }

    // line 40
    public function block_body($context, array $blocks = array())
    {
        $__internal_fc7ed5e3123e9c1fb820e3b7aa12a5d1804654e7295aa1602cd78c76fee5fb58 = $this->env->getExtension("native_profiler");
        $__internal_fc7ed5e3123e9c1fb820e3b7aa12a5d1804654e7295aa1602cd78c76fee5fb58->enter($__internal_fc7ed5e3123e9c1fb820e3b7aa12a5d1804654e7295aa1602cd78c76fee5fb58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_fc7ed5e3123e9c1fb820e3b7aa12a5d1804654e7295aa1602cd78c76fee5fb58->leave($__internal_fc7ed5e3123e9c1fb820e3b7aa12a5d1804654e7295aa1602cd78c76fee5fb58_prof);

    }

    // line 43
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_ba0040ea7662fdde5f8381fb5ea1f74d760c9ada58a92289c557d0b60520d948 = $this->env->getExtension("native_profiler");
        $__internal_ba0040ea7662fdde5f8381fb5ea1f74d760c9ada58a92289c557d0b60520d948->enter($__internal_ba0040ea7662fdde5f8381fb5ea1f74d760c9ada58a92289c557d0b60520d948_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_ba0040ea7662fdde5f8381fb5ea1f74d760c9ada58a92289c557d0b60520d948->leave($__internal_ba0040ea7662fdde5f8381fb5ea1f74d760c9ada58a92289c557d0b60520d948_prof);

    }

    // line 47
    public function block_footer($context, array $blocks = array())
    {
        $__internal_256602968ad67a14c0ba705c5b16eff4e59e9f9c06c43a1055b3bbffc82a5153 = $this->env->getExtension("native_profiler");
        $__internal_256602968ad67a14c0ba705c5b16eff4e59e9f9c06c43a1055b3bbffc82a5153->enter($__internal_256602968ad67a14c0ba705c5b16eff4e59e9f9c06c43a1055b3bbffc82a5153_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 48
        echo "            Symfony2 blog - created by <a href=\"https://github.com/SayfEddineBZ\">Saif eddine BOUZIDI</a>
        ";
        
        $__internal_256602968ad67a14c0ba705c5b16eff4e59e9f9c06c43a1055b3bbffc82a5153->leave($__internal_256602968ad67a14c0ba705c5b16eff4e59e9f9c06c43a1055b3bbffc82a5153_prof);

    }

    // line 53
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8791f86814438895b372f3f6d7cf1eaa1250f99acc09f7e9ad6ae4fc810eb542 = $this->env->getExtension("native_profiler");
        $__internal_8791f86814438895b372f3f6d7cf1eaa1250f99acc09f7e9ad6ae4fc810eb542->enter($__internal_8791f86814438895b372f3f6d7cf1eaa1250f99acc09f7e9ad6ae4fc810eb542_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_8791f86814438895b372f3f6d7cf1eaa1250f99acc09f7e9ad6ae4fc810eb542->leave($__internal_8791f86814438895b372f3f6d7cf1eaa1250f99acc09f7e9ad6ae4fc810eb542_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  228 => 53,  220 => 48,  214 => 47,  203 => 43,  192 => 40,  178 => 35,  164 => 34,  152 => 26,  148 => 25,  144 => 23,  138 => 22,  129 => 13,  125 => 11,  119 => 10,  107 => 6,  99 => 54,  97 => 53,  92 => 50,  90 => 47,  85 => 44,  83 => 43,  79 => 41,  77 => 40,  69 => 35,  65 => 34,  60 => 31,  58 => 22,  47 => 15,  45 => 10,  38 => 6,  31 => 1,);
    }
}
/* <!-- app/Resources/views/base.html.twig -->*/
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta http-equiv="Content-Type" content="text/html"; charset=utf-8" />*/
/*         <title>{% block title %}symblog{% endblock %} - symblog</title>*/
/*         <!--[if lt IE 9]>*/
/*             <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>*/
/*         <![endif]-->*/
/*         {% block stylesheets %}*/
/*             <link href='http://fonts.googleapis.com/css?family=Irish+Grover' rel='stylesheet' type='text/css'>*/
/*             <link href='http://fonts.googleapis.com/css?family=La+Belle+Aurore' rel='stylesheet' type='text/css'>*/
/*             <link href="{{ asset('css/screen.css') }}" type="text/css" rel="stylesheet" />*/
/*         {% endblock %}*/
/*         <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/* */
/*         <section id="wrapper">*/
/*             <header id="header">*/
/*                 <div class="top">*/
/*                     {% block navigation %}*/
/*                         <nav>*/
/*                             <ul class="navigation">*/
/*                                 <li><a href="{{ path('BloggerBlogBundle_homepage') }}">Home</a></li>*/
/*                                 <li><a href="{{ path('BloggerBlogBundle_about') }}">About</a></li>*/
/*                                 <li><a href="#">Contact</a></li>*/
/*                             </ul>*/
/*                         </nav>*/
/*                     {% endblock %}*/
/*                 </div>*/
/* */
/*                 <hgroup>*/
/*                     <h2>{% block blog_title %}<a href="{{ path('BloggerBlogBundle_homepage') }}">symblog</a>{% endblock %}</h2>*/
/*                     <h3>{% block blog_tagline %}<a href="{{ path('BloggerBlogBundle_homepage') }}">creating a blog in Symfony2</a>{% endblock %}</h3>*/
/*                 </hgroup>*/
/*             </header>*/
/* */
/*             <section class="main-col">*/
/*             {% block body %}{% endblock %}*/
/*         </section>*/
/*         <aside class="sidebar">*/
/*         {% block sidebar %}{% endblock %}*/
/*     </aside>*/
/* */
/*     <div id="footer">*/
/*         {% block footer %}*/
/*             Symfony2 blog - created by <a href="https://github.com/SayfEddineBZ">Saif eddine BOUZIDI</a>*/
/*         {% endblock %}*/
/*     </div>*/
/* </section>*/
/* */
/* {% block javascripts %}{% endblock %}*/
/* </body>*/
/* </html>*/
