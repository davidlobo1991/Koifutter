<?php

/* KoiBundle::base.html.twig */
class __TwigTemplate_3911ae285db7dfa6af7dfc5e76a07397a8378c58ea1fd191e6173cf332b2de74 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'header' => array($this, 'block_header'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_74d91683fff74c0c05a7c7ad7b2b3d404f0d76dbbb097842555b2bbae878b72e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74d91683fff74c0c05a7c7ad7b2b3d404f0d76dbbb097842555b2bbae878b72e->enter($__internal_74d91683fff74c0c05a7c7ad7b2b3d404f0d76dbbb097842555b2bbae878b72e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KoiBundle::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 12
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 15
        $this->displayBlock('body', $context, $blocks);
        // line 30
        echo "
        ";
        // line 31
        $this->displayBlock('javascripts', $context, $blocks);
        // line 38
        echo "    </body>
</html>
";
        
        $__internal_74d91683fff74c0c05a7c7ad7b2b3d404f0d76dbbb097842555b2bbae878b72e->leave($__internal_74d91683fff74c0c05a7c7ad7b2b3d404f0d76dbbb097842555b2bbae878b72e_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_a8ad4493007883828735ac6cc36c8f99707a4db1a6882530be2767a69cf4dceb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8ad4493007883828735ac6cc36c8f99707a4db1a6882530be2767a69cf4dceb->enter($__internal_a8ad4493007883828735ac6cc36c8f99707a4db1a6882530be2767a69cf4dceb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Koifutter Vergleich";
        
        $__internal_a8ad4493007883828735ac6cc36c8f99707a4db1a6882530be2767a69cf4dceb->leave($__internal_a8ad4493007883828735ac6cc36c8f99707a4db1a6882530be2767a69cf4dceb_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_bbc5173e46ede77c96c272c936aac3fe1a68be6b92ac98bf7952eba4c10ca8b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bbc5173e46ede77c96c272c936aac3fe1a68be6b92ac98bf7952eba4c10ca8b2->enter($__internal_bbc5173e46ede77c96c272c936aac3fe1a68be6b92ac98bf7952eba4c10ca8b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
            <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/vendor/ui/jquery-ui.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />


        ";
        
        $__internal_bbc5173e46ede77c96c272c936aac3fe1a68be6b92ac98bf7952eba4c10ca8b2->leave($__internal_bbc5173e46ede77c96c272c936aac3fe1a68be6b92ac98bf7952eba4c10ca8b2_prof);

    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        $__internal_265236bf0c13e4ec06880109e2b99693a3225302e7f1d0a38bb2d924619bbe95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_265236bf0c13e4ec06880109e2b99693a3225302e7f1d0a38bb2d924619bbe95->enter($__internal_265236bf0c13e4ec06880109e2b99693a3225302e7f1d0a38bb2d924619bbe95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 16
        echo "            ";
        $this->displayBlock('header', $context, $blocks);
        // line 29
        echo "        ";
        
        $__internal_265236bf0c13e4ec06880109e2b99693a3225302e7f1d0a38bb2d924619bbe95->leave($__internal_265236bf0c13e4ec06880109e2b99693a3225302e7f1d0a38bb2d924619bbe95_prof);

    }

    // line 16
    public function block_header($context, array $blocks = array())
    {
        $__internal_36134c181672f7b9440ad729b1b9e5c22a8823dbed6b7f6907a0ae9365118def = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36134c181672f7b9440ad729b1b9e5c22a8823dbed6b7f6907a0ae9365118def->enter($__internal_36134c181672f7b9440ad729b1b9e5c22a8823dbed6b7f6907a0ae9365118def_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 17
        echo "                <!-- Start HEADER -->
                <div class=\"header\">
                    <header>
                        <h1>
                            <a href=\"";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("koi_homepage");
        echo "\" title=\"Zur Startseite\" class=\"logo\">
                                <img src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/koifuttervergleich.png"), "html", null, true);
        echo "\" alt=\"Koifuttervergleich\">
                            </a>
                        </h1>
                    </header>
                </div>
                <!-- End HEADER -->
            ";
        
        $__internal_36134c181672f7b9440ad729b1b9e5c22a8823dbed6b7f6907a0ae9365118def->leave($__internal_36134c181672f7b9440ad729b1b9e5c22a8823dbed6b7f6907a0ae9365118def_prof);

    }

    // line 31
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_49708e08b295f5f4b96924b64615184b7477b8dc47c5848c96cea6be79aa369f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49708e08b295f5f4b96924b64615184b7477b8dc47c5848c96cea6be79aa369f->enter($__internal_49708e08b295f5f4b96924b64615184b7477b8dc47c5848c96cea6be79aa369f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 32
        echo "            <script src=";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/vendor/jquery-3.1.1.min.js"), "html", null, true);
        echo "></script>
            <script src=";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/vendor/ui/jquery-ui.min.js"), "html", null, true);
        echo "></script>
            <script src=";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/scripts.js"), "html", null, true);
        echo "></script>
            <script src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/base.compare.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/base.buttons.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_49708e08b295f5f4b96924b64615184b7477b8dc47c5848c96cea6be79aa369f->leave($__internal_49708e08b295f5f4b96924b64615184b7477b8dc47c5848c96cea6be79aa369f_prof);

    }

    public function getTemplateName()
    {
        return "KoiBundle::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 36,  161 => 35,  157 => 34,  153 => 33,  148 => 32,  142 => 31,  128 => 22,  124 => 21,  118 => 17,  112 => 16,  105 => 29,  102 => 16,  96 => 15,  85 => 8,  80 => 7,  74 => 6,  62 => 5,  53 => 38,  51 => 31,  48 => 30,  46 => 15,  39 => 12,  37 => 6,  33 => 5,  27 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Koifutter Vergleich{% endblock %}</title>
        {% block stylesheets %}
            <link href=\"{{ asset('css/style.css') }}\" rel=\"stylesheet\" type=\"text/css\" />
            <link href=\"{{ asset('js/vendor/ui/jquery-ui.min.css') }}\" rel=\"stylesheet\" type=\"text/css\" />


        {% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}
            {% block header %}
                <!-- Start HEADER -->
                <div class=\"header\">
                    <header>
                        <h1>
                            <a href=\"{{ path('koi_homepage') }}\" title=\"Zur Startseite\" class=\"logo\">
                                <img src=\"{{ asset('images/koifuttervergleich.png') }}\" alt=\"Koifuttervergleich\">
                            </a>
                        </h1>
                    </header>
                </div>
                <!-- End HEADER -->
            {% endblock %}
        {% endblock %}

        {% block javascripts %}
            <script src={{ asset('js/vendor/jquery-3.1.1.min.js') }}></script>
            <script src={{ asset('js/vendor/ui/jquery-ui.min.js') }}></script>
            <script src={{ asset('js/scripts.js') }}></script>
            <script src=\"{{ asset('js/base.compare.js') }}\"></script>
            <script src=\"{{ asset('js/base.buttons.js') }}\"></script>
        {% endblock %}
    </body>
</html>
", "KoiBundle::base.html.twig", "C:\\Users\\David\\Projekte\\Koifutter\\src\\KoiBundle\\Resources\\views\\base.html.twig");
    }
}
