<?php

/* KoiBundle::base.html.twig */
class __TwigTemplate_dcef943ede2794c63a15ad0288d2ba5360122fda8d9e805136cec42655d41865 extends Twig_Template
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
        $__internal_75a5d3b2347162b67826b6c9c3295d60e50c0e8f423268fdfcbb52743b6a3bbd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75a5d3b2347162b67826b6c9c3295d60e50c0e8f423268fdfcbb52743b6a3bbd->enter($__internal_75a5d3b2347162b67826b6c9c3295d60e50c0e8f423268fdfcbb52743b6a3bbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KoiBundle::base.html.twig"));

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
        // line 48
        echo "    </body>
</html>
";
        
        $__internal_75a5d3b2347162b67826b6c9c3295d60e50c0e8f423268fdfcbb52743b6a3bbd->leave($__internal_75a5d3b2347162b67826b6c9c3295d60e50c0e8f423268fdfcbb52743b6a3bbd_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_779f824b232d5e9d81a85a4fb08ed4804af216491d9e336143e15130de0695f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_779f824b232d5e9d81a85a4fb08ed4804af216491d9e336143e15130de0695f3->enter($__internal_779f824b232d5e9d81a85a4fb08ed4804af216491d9e336143e15130de0695f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Koifutter Vergleich";
        
        $__internal_779f824b232d5e9d81a85a4fb08ed4804af216491d9e336143e15130de0695f3->leave($__internal_779f824b232d5e9d81a85a4fb08ed4804af216491d9e336143e15130de0695f3_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8fe982b5b893e39725dd9816970bd7459243671b031cba3b0296f38bf439ec7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fe982b5b893e39725dd9816970bd7459243671b031cba3b0296f38bf439ec7a->enter($__internal_8fe982b5b893e39725dd9816970bd7459243671b031cba3b0296f38bf439ec7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
            <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/vendor/ui/jquery-ui.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />


        ";
        
        $__internal_8fe982b5b893e39725dd9816970bd7459243671b031cba3b0296f38bf439ec7a->leave($__internal_8fe982b5b893e39725dd9816970bd7459243671b031cba3b0296f38bf439ec7a_prof);

    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        $__internal_531899d7db62800bbc54425b8ebaca763f1e53a202ad6e23ec3a9bf86a6134c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_531899d7db62800bbc54425b8ebaca763f1e53a202ad6e23ec3a9bf86a6134c7->enter($__internal_531899d7db62800bbc54425b8ebaca763f1e53a202ad6e23ec3a9bf86a6134c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 16
        echo "            ";
        $this->displayBlock('header', $context, $blocks);
        // line 29
        echo "        ";
        
        $__internal_531899d7db62800bbc54425b8ebaca763f1e53a202ad6e23ec3a9bf86a6134c7->leave($__internal_531899d7db62800bbc54425b8ebaca763f1e53a202ad6e23ec3a9bf86a6134c7_prof);

    }

    // line 16
    public function block_header($context, array $blocks = array())
    {
        $__internal_1355a09d60cd7e2e79feb48fe3aae1c106b3fc60f04e4ecf580c8f61b9482c29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1355a09d60cd7e2e79feb48fe3aae1c106b3fc60f04e4ecf580c8f61b9482c29->enter($__internal_1355a09d60cd7e2e79feb48fe3aae1c106b3fc60f04e4ecf580c8f61b9482c29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

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
        
        $__internal_1355a09d60cd7e2e79feb48fe3aae1c106b3fc60f04e4ecf580c8f61b9482c29->leave($__internal_1355a09d60cd7e2e79feb48fe3aae1c106b3fc60f04e4ecf580c8f61b9482c29_prof);

    }

    // line 31
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5bb918ba9738b0d8151b6668729c27029d83d7e4e2fcebc64dab57d0ce16d857 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5bb918ba9738b0d8151b6668729c27029d83d7e4e2fcebc64dab57d0ce16d857->enter($__internal_5bb918ba9738b0d8151b6668729c27029d83d7e4e2fcebc64dab57d0ce16d857_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/compareCheck.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/compare.js"), "html", null, true);
        echo "\"></script>
            <script>
\t\t\t\t(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
\t\t\t\t\t\t(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
\t\t\t\t\tm=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
\t\t\t\t})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

\t\t\t\tga('create', 'UA-91659139-1', 'auto');
\t\t\t\tga('send', 'pageview');

            </script>
        ";
        
        $__internal_5bb918ba9738b0d8151b6668729c27029d83d7e4e2fcebc64dab57d0ce16d857->leave($__internal_5bb918ba9738b0d8151b6668729c27029d83d7e4e2fcebc64dab57d0ce16d857_prof);

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
        return array (  165 => 36,  161 => 35,  157 => 34,  153 => 33,  148 => 32,  142 => 31,  128 => 22,  124 => 21,  118 => 17,  112 => 16,  105 => 29,  102 => 16,  96 => 15,  85 => 8,  80 => 7,  74 => 6,  62 => 5,  53 => 48,  51 => 31,  48 => 30,  46 => 15,  39 => 12,  37 => 6,  33 => 5,  27 => 1,);
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
            <script src=\"{{ asset('js/compareCheck.js') }}\"></script>
            <script src=\"{{ asset('js/compare.js') }}\"></script>
            <script>
\t\t\t\t(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
\t\t\t\t\t\t(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
\t\t\t\t\tm=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
\t\t\t\t})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

\t\t\t\tga('create', 'UA-91659139-1', 'auto');
\t\t\t\tga('send', 'pageview');

            </script>
        {% endblock %}
    </body>
</html>
", "KoiBundle::base.html.twig", "C:\\Users\\David\\Projekte\\Koifutter\\src\\KoiBundle/Resources/views/base.html.twig");
    }
}
