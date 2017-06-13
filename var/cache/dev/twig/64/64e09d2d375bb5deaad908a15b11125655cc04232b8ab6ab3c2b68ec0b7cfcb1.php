<?php

/* @SonataAdmin/standard_layout.html.twig */
class __TwigTemplate_d74360a0e8115fca21134999ac4c0a9c693f0f76c5aa84cf24e9d2afbd11f9d8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'html_attributes' => array($this, 'block_html_attributes'),
            'meta_tags' => array($this, 'block_meta_tags'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'sonata_javascript_config' => array($this, 'block_sonata_javascript_config'),
            'sonata_javascript_pool' => array($this, 'block_sonata_javascript_pool'),
            'sonata_head_title' => array($this, 'block_sonata_head_title'),
            'body_attributes' => array($this, 'block_body_attributes'),
            'sonata_header' => array($this, 'block_sonata_header'),
            'sonata_header_noscript_warning' => array($this, 'block_sonata_header_noscript_warning'),
            'logo' => array($this, 'block_logo'),
            'sonata_nav' => array($this, 'block_sonata_nav'),
            'sonata_breadcrumb' => array($this, 'block_sonata_breadcrumb'),
            'sonata_top_nav_menu' => array($this, 'block_sonata_top_nav_menu'),
            'sonata_top_nav_menu_add_block' => array($this, 'block_sonata_top_nav_menu_add_block'),
            'sonata_top_nav_menu_user_block' => array($this, 'block_sonata_top_nav_menu_user_block'),
            'sonata_wrapper' => array($this, 'block_sonata_wrapper'),
            'sonata_left_side' => array($this, 'block_sonata_left_side'),
            'sonata_side_nav' => array($this, 'block_sonata_side_nav'),
            'sonata_sidebar_search' => array($this, 'block_sonata_sidebar_search'),
            'side_bar_before_nav' => array($this, 'block_side_bar_before_nav'),
            'side_bar_nav' => array($this, 'block_side_bar_nav'),
            'sonata_page_content' => array($this, 'block_sonata_page_content'),
            'sonata_page_content_header' => array($this, 'block_sonata_page_content_header'),
            'sonata_page_content_nav' => array($this, 'block_sonata_page_content_nav'),
            'tab_menu_navbar_header' => array($this, 'block_tab_menu_navbar_header'),
            'sonata_admin_content_actions_wrappers' => array($this, 'block_sonata_admin_content_actions_wrappers'),
            'sonata_admin_content' => array($this, 'block_sonata_admin_content'),
            'notice' => array($this, 'block_notice'),
            'bootlint' => array($this, 'block_bootlint'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9007be2b81c565120d48d23f2964551292561437623bbc8cef1984808b61b8b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9007be2b81c565120d48d23f2964551292561437623bbc8cef1984808b61b8b7->enter($__internal_9007be2b81c565120d48d23f2964551292561437623bbc8cef1984808b61b8b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/standard_layout.html.twig"));

        // line 11
        echo "
";
        // line 12
        $context["_preview"] = ((        $this->hasBlock("preview", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("preview", $context, $blocks))) : (null));
        // line 13
        $context["_form"] = ((        $this->hasBlock("form", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("form", $context, $blocks))) : (null));
        // line 14
        $context["_show"] = ((        $this->hasBlock("show", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("show", $context, $blocks))) : (null));
        // line 15
        $context["_list_table"] = ((        $this->hasBlock("list_table", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("list_table", $context, $blocks))) : (null));
        // line 16
        $context["_list_filters"] = ((        $this->hasBlock("list_filters", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("list_filters", $context, $blocks))) : (null));
        // line 17
        $context["_tab_menu"] = ((        $this->hasBlock("tab_menu", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("tab_menu", $context, $blocks))) : (null));
        // line 18
        $context["_content"] = ((        $this->hasBlock("content", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("content", $context, $blocks))) : (null));
        // line 19
        $context["_title"] = ((        $this->hasBlock("title", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("title", $context, $blocks))) : (null));
        // line 20
        $context["_breadcrumb"] = ((        $this->hasBlock("breadcrumb", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("breadcrumb", $context, $blocks))) : (null));
        // line 21
        $context["_actions"] = ((        $this->hasBlock("actions", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("actions", $context, $blocks))) : (null));
        // line 22
        $context["_navbar_title"] = ((        $this->hasBlock("navbar_title", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("navbar_title", $context, $blocks))) : (null));
        // line 23
        $context["_list_filters_actions"] = ((        $this->hasBlock("list_filters_actions", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("list_filters_actions", $context, $blocks))) : (null));
        // line 24
        echo "
<!DOCTYPE html>
<html ";
        // line 26
        $this->displayBlock('html_attributes', $context, $blocks);
        echo ">
    <head>
        ";
        // line 28
        $this->displayBlock('meta_tags', $context, $blocks);
        // line 33
        echo "
        ";
        // line 34
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 39
        echo "
        ";
        // line 40
        $this->displayBlock('javascripts', $context, $blocks);
        // line 88
        echo "
        <title>
        ";
        // line 90
        $this->displayBlock('sonata_head_title', $context, $blocks);
        // line 116
        echo "        </title>
    </head>
    <body ";
        // line 118
        $this->displayBlock('body_attributes', $context, $blocks);
        echo ">

    <div class=\"wrapper\">

        ";
        // line 122
        $this->displayBlock('sonata_header', $context, $blocks);
        // line 218
        echo "
        ";
        // line 219
        $this->displayBlock('sonata_wrapper', $context, $blocks);
        // line 345
        echo "    </div>

    ";
        // line 347
        if ($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "use_bootlint"), "method")) {
            // line 348
            echo "        ";
            $this->displayBlock('bootlint', $context, $blocks);
            // line 354
            echo "    ";
        }
        // line 355
        echo "
    </body>
</html>
";
        
        $__internal_9007be2b81c565120d48d23f2964551292561437623bbc8cef1984808b61b8b7->leave($__internal_9007be2b81c565120d48d23f2964551292561437623bbc8cef1984808b61b8b7_prof);

    }

    // line 26
    public function block_html_attributes($context, array $blocks = array())
    {
        $__internal_d8156790fdaa655a5072024124bd584dd5954d2070f2ad56d1833c9ea149d6b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8156790fdaa655a5072024124bd584dd5954d2070f2ad56d1833c9ea149d6b3->enter($__internal_d8156790fdaa655a5072024124bd584dd5954d2070f2ad56d1833c9ea149d6b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "html_attributes"));

        echo "class=\"no-js\"";
        
        $__internal_d8156790fdaa655a5072024124bd584dd5954d2070f2ad56d1833c9ea149d6b3->leave($__internal_d8156790fdaa655a5072024124bd584dd5954d2070f2ad56d1833c9ea149d6b3_prof);

    }

    // line 28
    public function block_meta_tags($context, array $blocks = array())
    {
        $__internal_2070ecad92a07b5aa57934c9a7b623a17911f30b5bdd1b9c576bb98c6249cfa8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2070ecad92a07b5aa57934c9a7b623a17911f30b5bdd1b9c576bb98c6249cfa8->enter($__internal_2070ecad92a07b5aa57934c9a7b623a17911f30b5bdd1b9c576bb98c6249cfa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "meta_tags"));

        // line 29
        echo "            <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
            <meta charset=\"UTF-8\">
            <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        ";
        
        $__internal_2070ecad92a07b5aa57934c9a7b623a17911f30b5bdd1b9c576bb98c6249cfa8->leave($__internal_2070ecad92a07b5aa57934c9a7b623a17911f30b5bdd1b9c576bb98c6249cfa8_prof);

    }

    // line 34
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_943b1bb13e607d8733f8ea1079c801f16325783e3b0c1347f632f7088900195a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_943b1bb13e607d8733f8ea1079c801f16325783e3b0c1347f632f7088900195a->enter($__internal_943b1bb13e607d8733f8ea1079c801f16325783e3b0c1347f632f7088900195a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 35
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "stylesheets", 1 => array()), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["stylesheet"]) {
            // line 36
            echo "                <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($context["stylesheet"]), "html", null, true);
            echo "\">
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stylesheet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "        ";
        
        $__internal_943b1bb13e607d8733f8ea1079c801f16325783e3b0c1347f632f7088900195a->leave($__internal_943b1bb13e607d8733f8ea1079c801f16325783e3b0c1347f632f7088900195a_prof);

    }

    // line 40
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_269381f7cb224f5eeb325c970c60979b539265bb9ab300cc3d052b12d23c24a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_269381f7cb224f5eeb325c970c60979b539265bb9ab300cc3d052b12d23c24a2->enter($__internal_269381f7cb224f5eeb325c970c60979b539265bb9ab300cc3d052b12d23c24a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 41
        echo "            ";
        $this->displayBlock('sonata_javascript_config', $context, $blocks);
        // line 61
        echo "
            ";
        // line 62
        $this->displayBlock('sonata_javascript_pool', $context, $blocks);
        // line 67
        echo "
            ";
        // line 68
        $context["locale"] = $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "locale", array());
        // line 69
        echo "            ";
        // line 70
        echo "            ";
        if ((twig_slice($this->env, ($context["locale"] ?? $this->getContext($context, "locale")), 0, 2) != "en")) {
            // line 71
            echo "                <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("bundles/sonatacore/vendor/moment/locale/" . twig_replace_filter(twig_lower_filter($this->env,             // line 73
($context["locale"] ?? $this->getContext($context, "locale"))), array("_" => "-"))) . ".js")), "html", null, true);
            // line 75
            echo "\"></script>
            ";
        }
        // line 77
        echo "
            ";
        // line 79
        echo "            ";
        if ($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "use_select2"), "method")) {
            // line 80
            echo "                ";
            if ((($context["locale"] ?? $this->getContext($context, "locale")) == "pt")) {
                $context["locale"] = "pt_PT";
            }
            // line 81
            echo "
                ";
            // line 83
            echo "                ";
            if ((twig_slice($this->env, ($context["locale"] ?? $this->getContext($context, "locale")), 0, 2) != "en")) {
                // line 84
                echo "                    <script src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("bundles/sonatacore/vendor/select2/select2_locale_" . twig_replace_filter(($context["locale"] ?? $this->getContext($context, "locale")), array("_" => "-"))) . ".js")), "html", null, true);
                echo "\"></script>
                ";
            }
            // line 86
            echo "            ";
        }
        // line 87
        echo "        ";
        
        $__internal_269381f7cb224f5eeb325c970c60979b539265bb9ab300cc3d052b12d23c24a2->leave($__internal_269381f7cb224f5eeb325c970c60979b539265bb9ab300cc3d052b12d23c24a2_prof);

    }

    // line 41
    public function block_sonata_javascript_config($context, array $blocks = array())
    {
        $__internal_116360d5377830c3bbd153a3044ab419b9e869663a6ad9354d9637b1996a6781 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_116360d5377830c3bbd153a3044ab419b9e869663a6ad9354d9637b1996a6781->enter($__internal_116360d5377830c3bbd153a3044ab419b9e869663a6ad9354d9637b1996a6781_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_javascript_config"));

        // line 42
        echo "                <script>
                    window.SONATA_CONFIG = {
                        CONFIRM_EXIT: ";
        // line 44
        if ($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "confirm_exit"), "method")) {
            echo "true";
        } else {
            echo "false";
        }
        echo ",
                        USE_SELECT2: ";
        // line 45
        if ($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "use_select2"), "method")) {
            echo "true";
        } else {
            echo "false";
        }
        echo ",
                        USE_ICHECK: ";
        // line 46
        if ($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "use_icheck"), "method")) {
            echo "true";
        } else {
            echo "false";
        }
        echo ",
                        USE_STICKYFORMS: ";
        // line 47
        if ($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "use_stickyforms"), "method")) {
            echo "true";
        } else {
            echo "false";
        }
        // line 48
        echo "                    };
                    window.SONATA_TRANSLATIONS = {
                        CONFIRM_EXIT: '";
        // line 50
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("confirm_exit", array(), "SonataAdminBundle"), "js"), "html", null, true);
        echo "'
                    };

                    // http://getbootstrap.com/getting-started/#support-ie10-width
                    if (navigator.userAgent.match(/IEMobile\\/10\\.0/)) {
                        var msViewportStyle = document.createElement('style');
                        msViewportStyle.appendChild(document.createTextNode('@-ms-viewport{width:auto!important}'));
                        document.querySelector('head').appendChild(msViewportStyle);
                    }
                </script>
            ";
        
        $__internal_116360d5377830c3bbd153a3044ab419b9e869663a6ad9354d9637b1996a6781->leave($__internal_116360d5377830c3bbd153a3044ab419b9e869663a6ad9354d9637b1996a6781_prof);

    }

    // line 62
    public function block_sonata_javascript_pool($context, array $blocks = array())
    {
        $__internal_3ca880c4b80279502519663b1f618fb0ebbc3933418e38a0f9fdb9a91fcb27ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ca880c4b80279502519663b1f618fb0ebbc3933418e38a0f9fdb9a91fcb27ef->enter($__internal_3ca880c4b80279502519663b1f618fb0ebbc3933418e38a0f9fdb9a91fcb27ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_javascript_pool"));

        // line 63
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "javascripts", 1 => array()), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["javascript"]) {
            // line 64
            echo "                    <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($context["javascript"]), "html", null, true);
            echo "\"></script>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['javascript'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "            ";
        
        $__internal_3ca880c4b80279502519663b1f618fb0ebbc3933418e38a0f9fdb9a91fcb27ef->leave($__internal_3ca880c4b80279502519663b1f618fb0ebbc3933418e38a0f9fdb9a91fcb27ef_prof);

    }

    // line 90
    public function block_sonata_head_title($context, array $blocks = array())
    {
        $__internal_b0ba1e82a33ab94dd317a9821d6a9735ba5cdf722bfe947724032f5af9d7299c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0ba1e82a33ab94dd317a9821d6a9735ba5cdf722bfe947724032f5af9d7299c->enter($__internal_b0ba1e82a33ab94dd317a9821d6a9735ba5cdf722bfe947724032f5af9d7299c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_head_title"));

        // line 91
        echo "            ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Admin", array(), "SonataAdminBundle"), "html", null, true);
        echo "

            ";
        // line 93
        if ( !twig_test_empty(($context["_title"] ?? $this->getContext($context, "_title")))) {
            // line 94
            echo "                ";
            echo ($context["_title"] ?? $this->getContext($context, "_title"));
            echo "
            ";
        } else {
            // line 96
            echo "                ";
            if (array_key_exists("action", $context)) {
                // line 97
                echo "                    -
                    ";
                // line 98
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["breadcrumbs_builder"] ?? $this->getContext($context, "breadcrumbs_builder")), "breadcrumbs", array(0 => ($context["admin"] ?? $this->getContext($context, "admin")), 1 => ($context["action"] ?? $this->getContext($context, "action"))), "method"));
                $context['loop'] = array(
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                );
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
                    // line 99
                    echo "                        ";
                    if ( !$this->getAttribute($context["loop"], "first", array())) {
                        // line 100
                        echo "                            ";
                        if (($this->getAttribute($context["loop"], "index", array()) != 2)) {
                            // line 101
                            echo "                                &gt;
                            ";
                        }
                        // line 104
                        $context["translation_domain"] = $this->getAttribute($context["menu"], "extra", array(0 => "translation_domain", 1 => "messages"), "method");
                        // line 105
                        $context["label"] = $this->getAttribute($context["menu"], "label", array());
                        // line 106
                        if ( !(($context["translation_domain"] ?? $this->getContext($context, "translation_domain")) === false)) {
                            // line 107
                            $context["label"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? $this->getContext($context, "label")), $this->getAttribute($context["menu"], "extra", array(0 => "translation_params", 1 => array()), "method"), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain")));
                        }
                        // line 110
                        echo twig_escape_filter($this->env, ($context["label"] ?? $this->getContext($context, "label")), "html", null, true);
                        echo "
                        ";
                    }
                    // line 112
                    echo "                    ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 113
                echo "                ";
            }
            // line 114
            echo "            ";
        }
        // line 115
        echo "        ";
        
        $__internal_b0ba1e82a33ab94dd317a9821d6a9735ba5cdf722bfe947724032f5af9d7299c->leave($__internal_b0ba1e82a33ab94dd317a9821d6a9735ba5cdf722bfe947724032f5af9d7299c_prof);

    }

    // line 118
    public function block_body_attributes($context, array $blocks = array())
    {
        $__internal_a6e32e7e9463479621916b2529e5e55946d1f37fb7f94fa09129d6e5aa46bf37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6e32e7e9463479621916b2529e5e55946d1f37fb7f94fa09129d6e5aa46bf37->enter($__internal_a6e32e7e9463479621916b2529e5e55946d1f37fb7f94fa09129d6e5aa46bf37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_attributes"));

        echo "class=\"sonata-bc skin-black fixed\"";
        
        $__internal_a6e32e7e9463479621916b2529e5e55946d1f37fb7f94fa09129d6e5aa46bf37->leave($__internal_a6e32e7e9463479621916b2529e5e55946d1f37fb7f94fa09129d6e5aa46bf37_prof);

    }

    // line 122
    public function block_sonata_header($context, array $blocks = array())
    {
        $__internal_571e552bb265ff3153e8102b109ddbdd2aab71c99bdea3ceb0a283ca0c5bf614 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_571e552bb265ff3153e8102b109ddbdd2aab71c99bdea3ceb0a283ca0c5bf614->enter($__internal_571e552bb265ff3153e8102b109ddbdd2aab71c99bdea3ceb0a283ca0c5bf614_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header"));

        // line 123
        echo "            <header class=\"main-header\">
                ";
        // line 124
        $this->displayBlock('sonata_header_noscript_warning', $context, $blocks);
        // line 131
        echo "                ";
        $this->displayBlock('logo', $context, $blocks);
        // line 140
        echo "                ";
        $this->displayBlock('sonata_nav', $context, $blocks);
        // line 216
        echo "            </header>
        ";
        
        $__internal_571e552bb265ff3153e8102b109ddbdd2aab71c99bdea3ceb0a283ca0c5bf614->leave($__internal_571e552bb265ff3153e8102b109ddbdd2aab71c99bdea3ceb0a283ca0c5bf614_prof);

    }

    // line 124
    public function block_sonata_header_noscript_warning($context, array $blocks = array())
    {
        $__internal_6363635d9a5db69bd1d8787f27498a98cc404216f68eeeb71f29583d16198309 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6363635d9a5db69bd1d8787f27498a98cc404216f68eeeb71f29583d16198309->enter($__internal_6363635d9a5db69bd1d8787f27498a98cc404216f68eeeb71f29583d16198309_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header_noscript_warning"));

        // line 125
        echo "                    <noscript>
                        <div class=\"noscript-warning\">
                            ";
        // line 127
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("noscript_warning", array(), "SonataAdminBundle"), "html", null, true);
        echo "
                        </div>
                    </noscript>
                ";
        
        $__internal_6363635d9a5db69bd1d8787f27498a98cc404216f68eeeb71f29583d16198309->leave($__internal_6363635d9a5db69bd1d8787f27498a98cc404216f68eeeb71f29583d16198309_prof);

    }

    // line 131
    public function block_logo($context, array $blocks = array())
    {
        $__internal_0162c23dad4882933831f0de88fd89bda0ac1e9491f5d5ae0ed5cdb7bd43eb14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0162c23dad4882933831f0de88fd89bda0ac1e9491f5d5ae0ed5cdb7bd43eb14->enter($__internal_0162c23dad4882933831f0de88fd89bda0ac1e9491f5d5ae0ed5cdb7bd43eb14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "logo"));

        // line 132
        echo "                    ";
        ob_start();
        // line 133
        echo "                        <a class=\"logo\" href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sonata_admin_dashboard");
        echo "\">
                            ";
        // line 134
        if ((("single_text" == $this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "title_mode"), "method")) || ("both" == $this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "title_mode"), "method")))) {
            // line 135
            echo "                                <span>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "title", array()), "html", null, true);
            echo "</span>
                            ";
        }
        // line 137
        echo "                        </a>
                    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 139
        echo "                ";
        
        $__internal_0162c23dad4882933831f0de88fd89bda0ac1e9491f5d5ae0ed5cdb7bd43eb14->leave($__internal_0162c23dad4882933831f0de88fd89bda0ac1e9491f5d5ae0ed5cdb7bd43eb14_prof);

    }

    // line 140
    public function block_sonata_nav($context, array $blocks = array())
    {
        $__internal_5ed701de6fd867b53586d3b1ad66469299e950de8a1afe08e485615cd7c491ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ed701de6fd867b53586d3b1ad66469299e950de8a1afe08e485615cd7c491ef->enter($__internal_5ed701de6fd867b53586d3b1ad66469299e950de8a1afe08e485615cd7c491ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

        // line 141
        echo "                    <nav class=\"navbar navbar-static-top\" role=\"navigation\">
                        <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
                            <span class=\"sr-only\">Toggle navigation</span>
                        </a>

                        <div class=\"navbar-left\">
                            ";
        // line 147
        $this->displayBlock('sonata_breadcrumb', $context, $blocks);
        // line 186
        echo "                        </div>

                        ";
        // line 188
        $this->displayBlock('sonata_top_nav_menu', $context, $blocks);
        // line 214
        echo "                    </nav>
                ";
        
        $__internal_5ed701de6fd867b53586d3b1ad66469299e950de8a1afe08e485615cd7c491ef->leave($__internal_5ed701de6fd867b53586d3b1ad66469299e950de8a1afe08e485615cd7c491ef_prof);

    }

    // line 147
    public function block_sonata_breadcrumb($context, array $blocks = array())
    {
        $__internal_8bf27135fd42b930a9ece3a7a7df64c058fdd6400b4be07529ff1f3773545cfc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8bf27135fd42b930a9ece3a7a7df64c058fdd6400b4be07529ff1f3773545cfc->enter($__internal_8bf27135fd42b930a9ece3a7a7df64c058fdd6400b4be07529ff1f3773545cfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_breadcrumb"));

        // line 148
        echo "                                <div class=\"hidden-xs\">
                                    ";
        // line 149
        if (( !twig_test_empty(($context["_breadcrumb"] ?? $this->getContext($context, "_breadcrumb"))) || array_key_exists("action", $context))) {
            // line 150
            echo "                                        <ol class=\"nav navbar-top-links breadcrumb\">
                                            ";
            // line 151
            if (twig_test_empty(($context["_breadcrumb"] ?? $this->getContext($context, "_breadcrumb")))) {
                // line 152
                echo "                                                ";
                if (array_key_exists("action", $context)) {
                    // line 153
                    echo "                                                    ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["breadcrumbs_builder"] ?? $this->getContext($context, "breadcrumbs_builder")), "breadcrumbs", array(0 => ($context["admin"] ?? $this->getContext($context, "admin")), 1 => ($context["action"] ?? $this->getContext($context, "action"))), "method"));
                    $context['loop'] = array(
                      'parent' => $context['_parent'],
                      'index0' => 0,
                      'index'  => 1,
                      'first'  => true,
                    );
                    if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                        $length = count($context['_seq']);
                        $context['loop']['revindex0'] = $length - 1;
                        $context['loop']['revindex'] = $length;
                        $context['loop']['length'] = $length;
                        $context['loop']['last'] = 1 === $length;
                    }
                    foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
                        // line 154
                        $context["translation_domain"] = $this->getAttribute($context["menu"], "extra", array(0 => "translation_domain", 1 => "messages"), "method");
                        // line 155
                        $context["label"] = $this->getAttribute($context["menu"], "label", array());
                        // line 156
                        if ( !(($context["translation_domain"] ?? $this->getContext($context, "translation_domain")) === false)) {
                            // line 157
                            $context["label"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? $this->getContext($context, "label")), $this->getAttribute($context["menu"], "extra", array(0 => "translation_params", 1 => array()), "method"), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain")));
                        }
                        // line 160
                        if ( !$this->getAttribute($context["loop"], "last", array())) {
                            // line 161
                            echo "                                                            <li>
                                                                ";
                            // line 162
                            if ( !twig_test_empty($this->getAttribute($context["menu"], "uri", array()))) {
                                // line 163
                                echo "                                                                    <a href=\"";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["menu"], "uri", array()), "html", null, true);
                                echo "\">
                                                                        ";
                                // line 164
                                if ($this->getAttribute($context["menu"], "extra", array(0 => "safe_label", 1 => true), "method")) {
                                    // line 165
                                    echo ($context["label"] ?? $this->getContext($context, "label"));
                                } else {
                                    // line 167
                                    echo twig_escape_filter($this->env, ($context["label"] ?? $this->getContext($context, "label")), "html", null, true);
                                }
                                // line 169
                                echo "                                                                    </a>
                                                                ";
                            } else {
                                // line 171
                                echo "                                                                    <span>";
                                echo twig_escape_filter($this->env, ($context["label"] ?? $this->getContext($context, "label")), "html", null, true);
                                echo "</span>
                                                                ";
                            }
                            // line 173
                            echo "                                                            </li>
                                                        ";
                        } else {
                            // line 175
                            echo "                                                            <li class=\"active\"><span>";
                            echo twig_escape_filter($this->env, ($context["label"] ?? $this->getContext($context, "label")), "html", null, true);
                            echo "</span></li>
                                                        ";
                        }
                        // line 177
                        echo "                                                    ";
                        ++$context['loop']['index0'];
                        ++$context['loop']['index'];
                        $context['loop']['first'] = false;
                        if (isset($context['loop']['length'])) {
                            --$context['loop']['revindex0'];
                            --$context['loop']['revindex'];
                            $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 178
                    echo "                                                ";
                }
                // line 179
                echo "                                            ";
            } else {
                // line 180
                echo "                                                ";
                echo ($context["_breadcrumb"] ?? $this->getContext($context, "_breadcrumb"));
                echo "
                                            ";
            }
            // line 182
            echo "                                        </ol>
                                    ";
        }
        // line 184
        echo "                                </div>
                            ";
        
        $__internal_8bf27135fd42b930a9ece3a7a7df64c058fdd6400b4be07529ff1f3773545cfc->leave($__internal_8bf27135fd42b930a9ece3a7a7df64c058fdd6400b4be07529ff1f3773545cfc_prof);

    }

    // line 188
    public function block_sonata_top_nav_menu($context, array $blocks = array())
    {
        $__internal_55abf297fc1c66019003441b55d3319259ea109926eb6c6a6a1c4e876a9724bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55abf297fc1c66019003441b55d3319259ea109926eb6c6a6a1c4e876a9724bb->enter($__internal_55abf297fc1c66019003441b55d3319259ea109926eb6c6a6a1c4e876a9724bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_top_nav_menu"));

        // line 189
        echo "                            ";
        if (($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()) && $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_SONATA_ADMIN"))) {
            // line 190
            echo "                                <div class=\"navbar-custom-menu\">
                                    <ul class=\"nav navbar-nav\">
                                        ";
            // line 192
            $this->displayBlock('sonata_top_nav_menu_add_block', $context, $blocks);
            // line 200
            echo "                                        ";
            $this->displayBlock('sonata_top_nav_menu_user_block', $context, $blocks);
            // line 210
            echo "                                    </ul>
                                </div>
                            ";
        }
        // line 213
        echo "                        ";
        
        $__internal_55abf297fc1c66019003441b55d3319259ea109926eb6c6a6a1c4e876a9724bb->leave($__internal_55abf297fc1c66019003441b55d3319259ea109926eb6c6a6a1c4e876a9724bb_prof);

    }

    // line 192
    public function block_sonata_top_nav_menu_add_block($context, array $blocks = array())
    {
        $__internal_ade273e74381d174fb50b363a57f5ce531c6e0a90981075166b1b67ac52c0023 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ade273e74381d174fb50b363a57f5ce531c6e0a90981075166b1b67ac52c0023->enter($__internal_ade273e74381d174fb50b363a57f5ce531c6e0a90981075166b1b67ac52c0023_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_top_nav_menu_add_block"));

        // line 193
        echo "                                            <li class=\"dropdown\">
                                                <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                                    <i class=\"fa fa-plus-square fa-fw\" aria-hidden=\"true\"></i> <i class=\"fa fa-caret-down\" aria-hidden=\"true\"></i>
                                                </a>
                                                ";
        // line 197
        $this->loadTemplate($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "add_block"), "method"), "@SonataAdmin/standard_layout.html.twig", 197)->display($context);
        // line 198
        echo "                                            </li>
                                        ";
        
        $__internal_ade273e74381d174fb50b363a57f5ce531c6e0a90981075166b1b67ac52c0023->leave($__internal_ade273e74381d174fb50b363a57f5ce531c6e0a90981075166b1b67ac52c0023_prof);

    }

    // line 200
    public function block_sonata_top_nav_menu_user_block($context, array $blocks = array())
    {
        $__internal_b9ff5003386b9def6fd6396b67a8f2372b764b5abba4a52bde25bba992911f45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9ff5003386b9def6fd6396b67a8f2372b764b5abba4a52bde25bba992911f45->enter($__internal_b9ff5003386b9def6fd6396b67a8f2372b764b5abba4a52bde25bba992911f45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_top_nav_menu_user_block"));

        // line 201
        echo "                                            <li class=\"dropdown user-menu\">
                                                <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                                    <i class=\"fa fa-user fa-fw\" aria-hidden=\"true\"></i> <i class=\"fa fa-caret-down\" aria-hidden=\"true\"></i>
                                                </a>
                                                <ul class=\"dropdown-menu dropdown-user\">
                                                    ";
        // line 206
        $this->loadTemplate($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "user_block"), "method"), "@SonataAdmin/standard_layout.html.twig", 206)->display($context);
        // line 207
        echo "                                                </ul>
                                            </li>
                                        ";
        
        $__internal_b9ff5003386b9def6fd6396b67a8f2372b764b5abba4a52bde25bba992911f45->leave($__internal_b9ff5003386b9def6fd6396b67a8f2372b764b5abba4a52bde25bba992911f45_prof);

    }

    // line 219
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        $__internal_58773067a1019b092a5d403787b529dddad19bcaffaf00accfb1ccd39149d043 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58773067a1019b092a5d403787b529dddad19bcaffaf00accfb1ccd39149d043->enter($__internal_58773067a1019b092a5d403787b529dddad19bcaffaf00accfb1ccd39149d043_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

        // line 220
        echo "            ";
        $this->displayBlock('sonata_left_side', $context, $blocks);
        // line 245
        echo "
            <div class=\"content-wrapper\">
                ";
        // line 247
        $this->displayBlock('sonata_page_content', $context, $blocks);
        // line 343
        echo "            </div>
        ";
        
        $__internal_58773067a1019b092a5d403787b529dddad19bcaffaf00accfb1ccd39149d043->leave($__internal_58773067a1019b092a5d403787b529dddad19bcaffaf00accfb1ccd39149d043_prof);

    }

    // line 220
    public function block_sonata_left_side($context, array $blocks = array())
    {
        $__internal_75c1afaa080ae4fc63e614241b5c35b40a7fa333e873cf1099dfa9e24c2ae519 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75c1afaa080ae4fc63e614241b5c35b40a7fa333e873cf1099dfa9e24c2ae519->enter($__internal_75c1afaa080ae4fc63e614241b5c35b40a7fa333e873cf1099dfa9e24c2ae519_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

        // line 221
        echo "                <aside class=\"main-sidebar\">
                    <section class=\"sidebar\">
                        ";
        // line 223
        $this->displayBlock('sonata_side_nav', $context, $blocks);
        // line 242
        echo "                    </section>
                </aside>
            ";
        
        $__internal_75c1afaa080ae4fc63e614241b5c35b40a7fa333e873cf1099dfa9e24c2ae519->leave($__internal_75c1afaa080ae4fc63e614241b5c35b40a7fa333e873cf1099dfa9e24c2ae519_prof);

    }

    // line 223
    public function block_sonata_side_nav($context, array $blocks = array())
    {
        $__internal_0b3d7267b54786bc6d5087313fc497727c8c7f522c7cda35ce72d3b1a547dcd2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b3d7267b54786bc6d5087313fc497727c8c7f522c7cda35ce72d3b1a547dcd2->enter($__internal_0b3d7267b54786bc6d5087313fc497727c8c7f522c7cda35ce72d3b1a547dcd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_side_nav"));

        // line 224
        echo "                            ";
        $this->displayBlock('sonata_sidebar_search', $context, $blocks);
        // line 236
        echo "
                            ";
        // line 237
        $this->displayBlock('side_bar_before_nav', $context, $blocks);
        // line 238
        echo "                            ";
        $this->displayBlock('side_bar_nav', $context, $blocks);
        // line 241
        echo "                        ";
        
        $__internal_0b3d7267b54786bc6d5087313fc497727c8c7f522c7cda35ce72d3b1a547dcd2->leave($__internal_0b3d7267b54786bc6d5087313fc497727c8c7f522c7cda35ce72d3b1a547dcd2_prof);

    }

    // line 224
    public function block_sonata_sidebar_search($context, array $blocks = array())
    {
        $__internal_80f713ce10ba8fb63c8364db860585395330b1ab30cf4b6716dd529ecbfa1e34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80f713ce10ba8fb63c8364db860585395330b1ab30cf4b6716dd529ecbfa1e34->enter($__internal_80f713ce10ba8fb63c8364db860585395330b1ab30cf4b6716dd529ecbfa1e34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_sidebar_search"));

        // line 225
        echo "                                <form action=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sonata_admin_search");
        echo "\" method=\"GET\" class=\"sidebar-form\" role=\"search\">
                                    <div class=\"input-group custom-search-form\">
                                        <input type=\"text\" name=\"q\" value=\"";
        // line 227
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "q"), "method"), "html", null, true);
        echo "\" class=\"form-control\" placeholder=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("search_placeholder", array(), "SonataAdminBundle"), "html", null, true);
        echo "\">
                                        <span class=\"input-group-btn\">
                                            <button class=\"btn btn-flat\" type=\"submit\">
                                                <i class=\"fa fa-search\" aria-hidden=\"true\"></i>
                                            </button>
                                        </span>
                                    </div>
                                </form>
                            ";
        
        $__internal_80f713ce10ba8fb63c8364db860585395330b1ab30cf4b6716dd529ecbfa1e34->leave($__internal_80f713ce10ba8fb63c8364db860585395330b1ab30cf4b6716dd529ecbfa1e34_prof);

    }

    // line 237
    public function block_side_bar_before_nav($context, array $blocks = array())
    {
        $__internal_c4ba6e660940ef27e27f920caf5f07fb286d3aa73984aa6c814dfcb0bedb4aa8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4ba6e660940ef27e27f920caf5f07fb286d3aa73984aa6c814dfcb0bedb4aa8->enter($__internal_c4ba6e660940ef27e27f920caf5f07fb286d3aa73984aa6c814dfcb0bedb4aa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_before_nav"));

        echo " ";
        
        $__internal_c4ba6e660940ef27e27f920caf5f07fb286d3aa73984aa6c814dfcb0bedb4aa8->leave($__internal_c4ba6e660940ef27e27f920caf5f07fb286d3aa73984aa6c814dfcb0bedb4aa8_prof);

    }

    // line 238
    public function block_side_bar_nav($context, array $blocks = array())
    {
        $__internal_166db867621f474965bea4ed2cb8da017e9a8a7aa8a1e02b219e67603b73cf30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_166db867621f474965bea4ed2cb8da017e9a8a7aa8a1e02b219e67603b73cf30->enter($__internal_166db867621f474965bea4ed2cb8da017e9a8a7aa8a1e02b219e67603b73cf30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_nav"));

        // line 239
        echo "                                ";
        echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render("sonata_admin_sidebar", array("template" => $this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "knp_menu_template"), "method")));
        echo "
                            ";
        
        $__internal_166db867621f474965bea4ed2cb8da017e9a8a7aa8a1e02b219e67603b73cf30->leave($__internal_166db867621f474965bea4ed2cb8da017e9a8a7aa8a1e02b219e67603b73cf30_prof);

    }

    // line 247
    public function block_sonata_page_content($context, array $blocks = array())
    {
        $__internal_03c877c9a0c5eeac43a54ebf9de8d96d28f15c8e19d8ee4548368d93147abda4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03c877c9a0c5eeac43a54ebf9de8d96d28f15c8e19d8ee4548368d93147abda4->enter($__internal_03c877c9a0c5eeac43a54ebf9de8d96d28f15c8e19d8ee4548368d93147abda4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content"));

        // line 248
        echo "                    <section class=\"content-header\">

                        ";
        // line 250
        $this->displayBlock('sonata_page_content_header', $context, $blocks);
        // line 304
        echo "                    </section>

                    <section class=\"content\">
                        ";
        // line 307
        $this->displayBlock('sonata_admin_content', $context, $blocks);
        // line 341
        echo "                    </section>
                ";
        
        $__internal_03c877c9a0c5eeac43a54ebf9de8d96d28f15c8e19d8ee4548368d93147abda4->leave($__internal_03c877c9a0c5eeac43a54ebf9de8d96d28f15c8e19d8ee4548368d93147abda4_prof);

    }

    // line 250
    public function block_sonata_page_content_header($context, array $blocks = array())
    {
        $__internal_0c0951e74862f1f5f98af09610c0626158f99fed2639daf5e6c54eae7cba2a4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c0951e74862f1f5f98af09610c0626158f99fed2639daf5e6c54eae7cba2a4c->enter($__internal_0c0951e74862f1f5f98af09610c0626158f99fed2639daf5e6c54eae7cba2a4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content_header"));

        // line 251
        echo "                            ";
        $this->displayBlock('sonata_page_content_nav', $context, $blocks);
        // line 303
        echo "                        ";
        
        $__internal_0c0951e74862f1f5f98af09610c0626158f99fed2639daf5e6c54eae7cba2a4c->leave($__internal_0c0951e74862f1f5f98af09610c0626158f99fed2639daf5e6c54eae7cba2a4c_prof);

    }

    // line 251
    public function block_sonata_page_content_nav($context, array $blocks = array())
    {
        $__internal_8403822bb8dcefbf53deab6c4cdfc6fe57172ed9bff8e5d128a49c9703a2411c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8403822bb8dcefbf53deab6c4cdfc6fe57172ed9bff8e5d128a49c9703a2411c->enter($__internal_8403822bb8dcefbf53deab6c4cdfc6fe57172ed9bff8e5d128a49c9703a2411c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content_nav"));

        // line 252
        echo "                                ";
        if ((( !twig_test_empty(($context["_tab_menu"] ?? $this->getContext($context, "_tab_menu"))) ||  !twig_test_empty(($context["_actions"] ?? $this->getContext($context, "_actions")))) ||  !twig_test_empty(($context["_list_filters_actions"] ?? $this->getContext($context, "_list_filters_actions"))))) {
            // line 253
            echo "                                    <nav class=\"navbar navbar-default\" role=\"navigation\">
                                        <div class=\"container-fluid\">
                                            ";
            // line 255
            $this->displayBlock('tab_menu_navbar_header', $context, $blocks);
            // line 262
            echo "
                                            <div class=\"navbar-collapse\">
                                                ";
            // line 264
            if ( !twig_test_empty(($context["_tab_menu"] ?? $this->getContext($context, "_tab_menu")))) {
                // line 265
                echo "                                                    <div class=\"navbar-left\">
                                                        ";
                // line 266
                echo ($context["_tab_menu"] ?? $this->getContext($context, "_tab_menu"));
                echo "
                                                    </div>
                                                ";
            }
            // line 269
            echo "
                                                ";
            // line 270
            if ((((array_key_exists("admin", $context) && array_key_exists("action", $context)) && (($context["action"] ?? $this->getContext($context, "action")) == "list")) && (twig_length_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "listModes", array())) > 1))) {
                // line 271
                echo "                                                    <div class=\"nav navbar-right btn-group\">
                                                        ";
                // line 272
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "listModes", array()));
                foreach ($context['_seq'] as $context["mode"] => $context["settings"]) {
                    // line 273
                    echo "                                                            <a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "generateUrl", array(0 => "list", 1 => twig_array_merge($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "all", array()), array("_list_mode" => $context["mode"]))), "method"), "html", null, true);
                    echo "\" class=\"btn btn-default navbar-btn btn-sm";
                    if (($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "getListMode", array(), "method") == $context["mode"])) {
                        echo " active";
                    }
                    echo "\"><i class=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["settings"], "class", array()), "html", null, true);
                    echo "\"></i></a>
                                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['mode'], $context['settings'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 275
                echo "                                                    </div>
                                                ";
            }
            // line 277
            echo "
                                                ";
            // line 278
            $this->displayBlock('sonata_admin_content_actions_wrappers', $context, $blocks);
            // line 294
            echo "
                                                ";
            // line 295
            if ( !twig_test_empty(($context["_list_filters_actions"] ?? $this->getContext($context, "_list_filters_actions")))) {
                // line 296
                echo "                                                    ";
                echo ($context["_list_filters_actions"] ?? $this->getContext($context, "_list_filters_actions"));
                echo "
                                                ";
            }
            // line 298
            echo "                                            </div>
                                        </div>
                                    </nav>
                                ";
        }
        // line 302
        echo "                            ";
        
        $__internal_8403822bb8dcefbf53deab6c4cdfc6fe57172ed9bff8e5d128a49c9703a2411c->leave($__internal_8403822bb8dcefbf53deab6c4cdfc6fe57172ed9bff8e5d128a49c9703a2411c_prof);

    }

    // line 255
    public function block_tab_menu_navbar_header($context, array $blocks = array())
    {
        $__internal_0b7a35fadf585d23f775375158e497971496c987adfc20984d78f321c3b1141f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b7a35fadf585d23f775375158e497971496c987adfc20984d78f321c3b1141f->enter($__internal_0b7a35fadf585d23f775375158e497971496c987adfc20984d78f321c3b1141f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu_navbar_header"));

        // line 256
        echo "                                                ";
        if ( !twig_test_empty(($context["_navbar_title"] ?? $this->getContext($context, "_navbar_title")))) {
            // line 257
            echo "                                                    <div class=\"navbar-header\">
                                                        <a class=\"navbar-brand\" href=\"#\">";
            // line 258
            echo ($context["_navbar_title"] ?? $this->getContext($context, "_navbar_title"));
            echo "</a>
                                                    </div>
                                                ";
        }
        // line 261
        echo "                                            ";
        
        $__internal_0b7a35fadf585d23f775375158e497971496c987adfc20984d78f321c3b1141f->leave($__internal_0b7a35fadf585d23f775375158e497971496c987adfc20984d78f321c3b1141f_prof);

    }

    // line 278
    public function block_sonata_admin_content_actions_wrappers($context, array $blocks = array())
    {
        $__internal_278aa2316dc4f4bb883f52d6dba4eab26d19c12a222eb499f6242190095981e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_278aa2316dc4f4bb883f52d6dba4eab26d19c12a222eb499f6242190095981e1->enter($__internal_278aa2316dc4f4bb883f52d6dba4eab26d19c12a222eb499f6242190095981e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_admin_content_actions_wrappers"));

        // line 279
        echo "                                                    ";
        if ( !twig_test_empty(twig_trim_filter(twig_replace_filter(($context["_actions"] ?? $this->getContext($context, "_actions")), array("<li>" => "", "</li>" => ""))))) {
            // line 280
            echo "                                                        <ul class=\"nav navbar-nav navbar-right\">
                                                        ";
            // line 281
            if ((twig_length_filter($this->env, twig_split_filter($this->env, ($context["_actions"] ?? $this->getContext($context, "_actions")), "</a>")) > 2)) {
                // line 282
                echo "                                                            <li class=\"dropdown sonata-actions\">
                                                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">";
                // line 283
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("link_actions", array(), "SonataAdminBundle"), "html", null, true);
                echo " <b class=\"caret\"></b></a>
                                                                <ul class=\"dropdown-menu\" role=\"menu\">
                                                                    ";
                // line 285
                echo ($context["_actions"] ?? $this->getContext($context, "_actions"));
                echo "
                                                                </ul>
                                                            </li>
                                                        ";
            } else {
                // line 289
                echo "                                                            ";
                echo ($context["_actions"] ?? $this->getContext($context, "_actions"));
                echo "
                                                        ";
            }
            // line 291
            echo "                                                        </ul>
                                                    ";
        }
        // line 293
        echo "                                                ";
        
        $__internal_278aa2316dc4f4bb883f52d6dba4eab26d19c12a222eb499f6242190095981e1->leave($__internal_278aa2316dc4f4bb883f52d6dba4eab26d19c12a222eb499f6242190095981e1_prof);

    }

    // line 307
    public function block_sonata_admin_content($context, array $blocks = array())
    {
        $__internal_b33db94188c069a736e9e9a4c3c80532175c511b4c415c2820e2314fb2cee154 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b33db94188c069a736e9e9a4c3c80532175c511b4c415c2820e2314fb2cee154->enter($__internal_b33db94188c069a736e9e9a4c3c80532175c511b4c415c2820e2314fb2cee154_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_admin_content"));

        // line 308
        echo "
                            ";
        // line 309
        $this->displayBlock('notice', $context, $blocks);
        // line 312
        echo "
                            ";
        // line 313
        if ( !twig_test_empty(($context["_preview"] ?? $this->getContext($context, "_preview")))) {
            // line 314
            echo "                                <div class=\"sonata-ba-preview\">";
            echo ($context["_preview"] ?? $this->getContext($context, "_preview"));
            echo "</div>
                            ";
        }
        // line 316
        echo "
                            ";
        // line 317
        if ( !twig_test_empty(($context["_content"] ?? $this->getContext($context, "_content")))) {
            // line 318
            echo "                                <div class=\"sonata-ba-content\">";
            echo ($context["_content"] ?? $this->getContext($context, "_content"));
            echo "</div>
                            ";
        }
        // line 320
        echo "
                            ";
        // line 321
        if ( !twig_test_empty(($context["_show"] ?? $this->getContext($context, "_show")))) {
            // line 322
            echo "                                <div class=\"sonata-ba-show\">";
            echo ($context["_show"] ?? $this->getContext($context, "_show"));
            echo "</div>
                            ";
        }
        // line 324
        echo "
                            ";
        // line 325
        if ( !twig_test_empty(($context["_form"] ?? $this->getContext($context, "_form")))) {
            // line 326
            echo "                                <div class=\"sonata-ba-form\">";
            echo ($context["_form"] ?? $this->getContext($context, "_form"));
            echo "</div>
                            ";
        }
        // line 328
        echo "
                            ";
        // line 329
        if ( !twig_test_empty(($context["_list_filters"] ?? $this->getContext($context, "_list_filters")))) {
            // line 330
            echo "                                <div class=\"row\">
                                    ";
            // line 331
            echo ($context["_list_filters"] ?? $this->getContext($context, "_list_filters"));
            echo "
                                </div>
                            ";
        }
        // line 334
        echo "
                            ";
        // line 335
        if ( !twig_test_empty(($context["_list_table"] ?? $this->getContext($context, "_list_table")))) {
            // line 336
            echo "                                <div class=\"row\">
                                    ";
            // line 337
            echo ($context["_list_table"] ?? $this->getContext($context, "_list_table"));
            echo "
                                </div>
                            ";
        }
        // line 340
        echo "                        ";
        
        $__internal_b33db94188c069a736e9e9a4c3c80532175c511b4c415c2820e2314fb2cee154->leave($__internal_b33db94188c069a736e9e9a4c3c80532175c511b4c415c2820e2314fb2cee154_prof);

    }

    // line 309
    public function block_notice($context, array $blocks = array())
    {
        $__internal_796b9b6d3732f0c92932ca325a334b4cbeaa8261d4e50ca55e5c09753075c20a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_796b9b6d3732f0c92932ca325a334b4cbeaa8261d4e50ca55e5c09753075c20a->enter($__internal_796b9b6d3732f0c92932ca325a334b4cbeaa8261d4e50ca55e5c09753075c20a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "notice"));

        // line 310
        echo "                                ";
        $this->loadTemplate("SonataCoreBundle:FlashMessage:render.html.twig", "@SonataAdmin/standard_layout.html.twig", 310)->display($context);
        // line 311
        echo "                            ";
        
        $__internal_796b9b6d3732f0c92932ca325a334b4cbeaa8261d4e50ca55e5c09753075c20a->leave($__internal_796b9b6d3732f0c92932ca325a334b4cbeaa8261d4e50ca55e5c09753075c20a_prof);

    }

    // line 348
    public function block_bootlint($context, array $blocks = array())
    {
        $__internal_c24e0a461f9d3b27e5800ce7185a98ba754890f432398ddfec9cd0baf65c1f9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c24e0a461f9d3b27e5800ce7185a98ba754890f432398ddfec9cd0baf65c1f9f->enter($__internal_c24e0a461f9d3b27e5800ce7185a98ba754890f432398ddfec9cd0baf65c1f9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bootlint"));

        // line 349
        echo "            ";
        // line 350
        echo "            <script type=\"text/javascript\">
                javascript:(function(){var s=document.createElement(\"script\");s.onload=function(){bootlint.showLintReportForCurrentDocument([], {hasProblems: false, problemFree: false});};s.src=\"https://maxcdn.bootstrapcdn.com/bootlint/latest/bootlint.min.js\";document.body.appendChild(s)})();
            </script>
        ";
        
        $__internal_c24e0a461f9d3b27e5800ce7185a98ba754890f432398ddfec9cd0baf65c1f9f->leave($__internal_c24e0a461f9d3b27e5800ce7185a98ba754890f432398ddfec9cd0baf65c1f9f_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/standard_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1214 => 350,  1212 => 349,  1206 => 348,  1199 => 311,  1196 => 310,  1190 => 309,  1183 => 340,  1177 => 337,  1174 => 336,  1172 => 335,  1169 => 334,  1163 => 331,  1160 => 330,  1158 => 329,  1155 => 328,  1149 => 326,  1147 => 325,  1144 => 324,  1138 => 322,  1136 => 321,  1133 => 320,  1127 => 318,  1125 => 317,  1122 => 316,  1116 => 314,  1114 => 313,  1111 => 312,  1109 => 309,  1106 => 308,  1100 => 307,  1093 => 293,  1089 => 291,  1083 => 289,  1076 => 285,  1071 => 283,  1068 => 282,  1066 => 281,  1063 => 280,  1060 => 279,  1054 => 278,  1047 => 261,  1041 => 258,  1038 => 257,  1035 => 256,  1029 => 255,  1022 => 302,  1016 => 298,  1010 => 296,  1008 => 295,  1005 => 294,  1003 => 278,  1000 => 277,  996 => 275,  981 => 273,  977 => 272,  974 => 271,  972 => 270,  969 => 269,  963 => 266,  960 => 265,  958 => 264,  954 => 262,  952 => 255,  948 => 253,  945 => 252,  939 => 251,  932 => 303,  929 => 251,  923 => 250,  915 => 341,  913 => 307,  908 => 304,  906 => 250,  902 => 248,  896 => 247,  886 => 239,  880 => 238,  868 => 237,  850 => 227,  844 => 225,  838 => 224,  831 => 241,  828 => 238,  826 => 237,  823 => 236,  820 => 224,  814 => 223,  805 => 242,  803 => 223,  799 => 221,  793 => 220,  785 => 343,  783 => 247,  779 => 245,  776 => 220,  770 => 219,  761 => 207,  759 => 206,  752 => 201,  746 => 200,  738 => 198,  736 => 197,  730 => 193,  724 => 192,  717 => 213,  712 => 210,  709 => 200,  707 => 192,  703 => 190,  700 => 189,  694 => 188,  686 => 184,  682 => 182,  676 => 180,  673 => 179,  670 => 178,  656 => 177,  650 => 175,  646 => 173,  640 => 171,  636 => 169,  633 => 167,  630 => 165,  628 => 164,  623 => 163,  621 => 162,  618 => 161,  616 => 160,  613 => 157,  611 => 156,  609 => 155,  607 => 154,  589 => 153,  586 => 152,  584 => 151,  581 => 150,  579 => 149,  576 => 148,  570 => 147,  562 => 214,  560 => 188,  556 => 186,  554 => 147,  546 => 141,  540 => 140,  533 => 139,  529 => 137,  523 => 135,  521 => 134,  516 => 133,  513 => 132,  507 => 131,  496 => 127,  492 => 125,  486 => 124,  478 => 216,  475 => 140,  472 => 131,  470 => 124,  467 => 123,  461 => 122,  449 => 118,  442 => 115,  439 => 114,  436 => 113,  422 => 112,  417 => 110,  414 => 107,  412 => 106,  410 => 105,  408 => 104,  404 => 101,  401 => 100,  398 => 99,  381 => 98,  378 => 97,  375 => 96,  369 => 94,  367 => 93,  361 => 91,  355 => 90,  348 => 66,  339 => 64,  334 => 63,  328 => 62,  310 => 50,  306 => 48,  300 => 47,  292 => 46,  284 => 45,  276 => 44,  272 => 42,  266 => 41,  259 => 87,  256 => 86,  250 => 84,  247 => 83,  244 => 81,  239 => 80,  236 => 79,  233 => 77,  229 => 75,  227 => 73,  225 => 71,  222 => 70,  220 => 69,  218 => 68,  215 => 67,  213 => 62,  210 => 61,  207 => 41,  201 => 40,  194 => 38,  185 => 36,  180 => 35,  174 => 34,  164 => 29,  158 => 28,  146 => 26,  136 => 355,  133 => 354,  130 => 348,  128 => 347,  124 => 345,  122 => 219,  119 => 218,  117 => 122,  110 => 118,  106 => 116,  104 => 90,  100 => 88,  98 => 40,  95 => 39,  93 => 34,  90 => 33,  88 => 28,  83 => 26,  79 => 24,  77 => 23,  75 => 22,  73 => 21,  71 => 20,  69 => 19,  67 => 18,  65 => 17,  63 => 16,  61 => 15,  59 => 14,  57 => 13,  55 => 12,  52 => 11,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% set _preview = block('preview') is defined ? block('preview')|trim : null %}
{% set _form = block('form') is defined ? block('form')|trim : null %}
{% set _show = block('show') is defined ? block('show')|trim : null %}
{% set _list_table = block('list_table') is defined ? block('list_table')|trim : null %}
{% set _list_filters = block('list_filters') is defined ? block('list_filters')|trim : null %}
{% set _tab_menu = block('tab_menu') is defined ? block('tab_menu')|trim : null %}
{% set _content = block('content') is defined ? block('content')|trim : null %}
{% set _title = block('title') is defined ? block('title')|trim : null %}
{% set _breadcrumb = block('breadcrumb') is defined ? block('breadcrumb')|trim : null %}
{% set _actions = block('actions') is defined ? block('actions')|trim : null %}
{% set _navbar_title = block('navbar_title') is defined ? block('navbar_title')|trim : null %}
{% set _list_filters_actions = block('list_filters_actions') is defined ? block('list_filters_actions')|trim : null %}

<!DOCTYPE html>
<html {% block html_attributes %}class=\"no-js\"{% endblock %}>
    <head>
        {% block meta_tags %}
            <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
            <meta charset=\"UTF-8\">
            <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        {% endblock %}

        {% block stylesheets %}
            {% for stylesheet in sonata_admin.adminPool.getOption('stylesheets', []) %}
                <link rel=\"stylesheet\" href=\"{{ asset(stylesheet) }}\">
            {% endfor %}
        {% endblock %}

        {% block javascripts %}
            {% block sonata_javascript_config %}
                <script>
                    window.SONATA_CONFIG = {
                        CONFIRM_EXIT: {% if sonata_admin.adminPool.getOption('confirm_exit') %}true{% else %}false{% endif %},
                        USE_SELECT2: {% if sonata_admin.adminPool.getOption('use_select2') %}true{% else %}false{% endif %},
                        USE_ICHECK: {% if sonata_admin.adminPool.getOption('use_icheck') %}true{% else %}false{% endif %},
                        USE_STICKYFORMS: {% if sonata_admin.adminPool.getOption('use_stickyforms') %}true{% else %}false{% endif %}
                    };
                    window.SONATA_TRANSLATIONS = {
                        CONFIRM_EXIT: '{{ 'confirm_exit'|trans({}, 'SonataAdminBundle')|escape('js') }}'
                    };

                    // http://getbootstrap.com/getting-started/#support-ie10-width
                    if (navigator.userAgent.match(/IEMobile\\/10\\.0/)) {
                        var msViewportStyle = document.createElement('style');
                        msViewportStyle.appendChild(document.createTextNode('@-ms-viewport{width:auto!important}'));
                        document.querySelector('head').appendChild(msViewportStyle);
                    }
                </script>
            {% endblock %}

            {% block sonata_javascript_pool %}
                {% for javascript in sonata_admin.adminPool.getOption('javascripts', []) %}
                    <script src=\"{{ asset(javascript) }}\"></script>
                {% endfor %}
            {% endblock %}

            {% set locale = app.request.locale %}
            {# localize moment #}
            {% if locale[:2] != 'en' %}
                <script src=\"{{ asset(
                    'bundles/sonatacore/vendor/moment/locale/' ~
                    locale|lower|replace({'_':'-'}) ~
                    '.js'
                ) }}\"></script>
            {% endif %}

            {# localize select2 #}
            {% if sonata_admin.adminPool.getOption('use_select2') %}
                {% if locale == 'pt' %}{% set locale = 'pt_PT' %}{% endif %}

                {# omit default EN locale #}
                {% if locale[:2] != 'en' %}
                    <script src=\"{{ asset('bundles/sonatacore/vendor/select2/select2_locale_' ~ locale|replace({'_':'-'}) ~ '.js') }}\"></script>
                {% endif %}
            {% endif %}
        {% endblock %}

        <title>
        {% block sonata_head_title %}
            {{ 'Admin'|trans({}, 'SonataAdminBundle') }}

            {% if _title is not empty %}
                {{ _title|raw }}
            {% else %}
                {% if action is defined %}
                    -
                    {% for menu in breadcrumbs_builder.breadcrumbs(admin, action) %}
                        {% if not loop.first %}
                            {% if loop.index != 2 %}
                                &gt;
                            {% endif %}

                            {%- set translation_domain = menu.extra('translation_domain', 'messages') -%}
                            {%- set label = menu.label -%}
                            {%- if translation_domain is not same as(false) -%}
                                {%- set label = label|trans(menu.extra('translation_params', {}), translation_domain) -%}
                            {%- endif -%}

                            {{ label }}
                        {% endif %}
                    {% endfor %}
                {% endif %}
            {% endif %}
        {% endblock %}
        </title>
    </head>
    <body {% block body_attributes %}class=\"sonata-bc skin-black fixed\"{% endblock %}>

    <div class=\"wrapper\">

        {% block sonata_header %}
            <header class=\"main-header\">
                {% block sonata_header_noscript_warning %}
                    <noscript>
                        <div class=\"noscript-warning\">
                            {{ 'noscript_warning'|trans({}, 'SonataAdminBundle') }}
                        </div>
                    </noscript>
                {% endblock %}
                {% block logo %}
                    {% spaceless %}
                        <a class=\"logo\" href=\"{{ path('sonata_admin_dashboard') }}\">
                            {% if 'single_text' == sonata_admin.adminPool.getOption('title_mode') or 'both' == sonata_admin.adminPool.getOption('title_mode') %}
                                <span>{{ sonata_admin.adminPool.title }}</span>
                            {% endif %}
                        </a>
                    {% endspaceless %}
                {% endblock %}
                {% block sonata_nav %}
                    <nav class=\"navbar navbar-static-top\" role=\"navigation\">
                        <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
                            <span class=\"sr-only\">Toggle navigation</span>
                        </a>

                        <div class=\"navbar-left\">
                            {% block sonata_breadcrumb %}
                                <div class=\"hidden-xs\">
                                    {% if _breadcrumb is not empty or action is defined %}
                                        <ol class=\"nav navbar-top-links breadcrumb\">
                                            {% if _breadcrumb is empty %}
                                                {% if action is defined %}
                                                    {% for menu in breadcrumbs_builder.breadcrumbs(admin, action) %}
                                                        {%- set translation_domain = menu.extra('translation_domain', 'messages') -%}
                                                        {%- set label = menu.label -%}
                                                        {%- if translation_domain is not same as(false) -%}
                                                            {%- set label = label|trans(menu.extra('translation_params', {}), translation_domain) -%}
                                                        {%- endif -%}

                                                        {% if not loop.last %}
                                                            <li>
                                                                {% if menu.uri is not empty %}
                                                                    <a href=\"{{ menu.uri }}\">
                                                                        {% if menu.extra('safe_label', true) %}
                                                                            {{- label|raw -}}
                                                                        {% else %}
                                                                            {{- label -}}
                                                                        {% endif %}
                                                                    </a>
                                                                {% else %}
                                                                    <span>{{ label }}</span>
                                                                {% endif %}
                                                            </li>
                                                        {% else %}
                                                            <li class=\"active\"><span>{{ label }}</span></li>
                                                        {% endif %}
                                                    {% endfor %}
                                                {% endif %}
                                            {% else %}
                                                {{ _breadcrumb|raw }}
                                            {% endif %}
                                        </ol>
                                    {% endif %}
                                </div>
                            {% endblock sonata_breadcrumb %}
                        </div>

                        {% block sonata_top_nav_menu %}
                            {% if app.user and is_granted('ROLE_SONATA_ADMIN') %}
                                <div class=\"navbar-custom-menu\">
                                    <ul class=\"nav navbar-nav\">
                                        {% block sonata_top_nav_menu_add_block %}
                                            <li class=\"dropdown\">
                                                <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                                    <i class=\"fa fa-plus-square fa-fw\" aria-hidden=\"true\"></i> <i class=\"fa fa-caret-down\" aria-hidden=\"true\"></i>
                                                </a>
                                                {% include sonata_admin.adminPool.getTemplate('add_block') %}
                                            </li>
                                        {% endblock %}
                                        {% block sonata_top_nav_menu_user_block %}
                                            <li class=\"dropdown user-menu\">
                                                <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                                    <i class=\"fa fa-user fa-fw\" aria-hidden=\"true\"></i> <i class=\"fa fa-caret-down\" aria-hidden=\"true\"></i>
                                                </a>
                                                <ul class=\"dropdown-menu dropdown-user\">
                                                    {% include sonata_admin.adminPool.getTemplate('user_block') %}
                                                </ul>
                                            </li>
                                        {% endblock %}
                                    </ul>
                                </div>
                            {% endif %}
                        {% endblock %}
                    </nav>
                {% endblock sonata_nav %}
            </header>
        {% endblock sonata_header %}

        {% block sonata_wrapper %}
            {% block sonata_left_side %}
                <aside class=\"main-sidebar\">
                    <section class=\"sidebar\">
                        {% block sonata_side_nav %}
                            {% block sonata_sidebar_search %}
                                <form action=\"{{ path('sonata_admin_search') }}\" method=\"GET\" class=\"sidebar-form\" role=\"search\">
                                    <div class=\"input-group custom-search-form\">
                                        <input type=\"text\" name=\"q\" value=\"{{ app.request.get('q') }}\" class=\"form-control\" placeholder=\"{{ 'search_placeholder'|trans({}, 'SonataAdminBundle') }}\">
                                        <span class=\"input-group-btn\">
                                            <button class=\"btn btn-flat\" type=\"submit\">
                                                <i class=\"fa fa-search\" aria-hidden=\"true\"></i>
                                            </button>
                                        </span>
                                    </div>
                                </form>
                            {% endblock sonata_sidebar_search %}

                            {% block side_bar_before_nav %} {% endblock %}
                            {% block side_bar_nav %}
                                {{ knp_menu_render('sonata_admin_sidebar', {template: sonata_admin.adminPool.getTemplate('knp_menu_template')}) }}
                            {% endblock side_bar_nav %}
                        {% endblock sonata_side_nav %}
                    </section>
                </aside>
            {% endblock sonata_left_side %}

            <div class=\"content-wrapper\">
                {% block sonata_page_content %}
                    <section class=\"content-header\">

                        {% block sonata_page_content_header %}
                            {% block sonata_page_content_nav %}
                                {% if _tab_menu is not empty or _actions is not empty or _list_filters_actions is not empty %}
                                    <nav class=\"navbar navbar-default\" role=\"navigation\">
                                        <div class=\"container-fluid\">
                                            {% block tab_menu_navbar_header %}
                                                {% if _navbar_title is not empty %}
                                                    <div class=\"navbar-header\">
                                                        <a class=\"navbar-brand\" href=\"#\">{{ _navbar_title|raw }}</a>
                                                    </div>
                                                {% endif %}
                                            {% endblock %}

                                            <div class=\"navbar-collapse\">
                                                {% if _tab_menu is not empty %}
                                                    <div class=\"navbar-left\">
                                                        {{ _tab_menu|raw }}
                                                    </div>
                                                {% endif %}

                                                {% if admin is defined and action is defined and action == 'list' and admin.listModes|length > 1 %}
                                                    <div class=\"nav navbar-right btn-group\">
                                                        {% for mode, settings in admin.listModes %}
                                                            <a href=\"{{ admin.generateUrl('list', app.request.query.all|merge({_list_mode: mode})) }}\" class=\"btn btn-default navbar-btn btn-sm{% if admin.getListMode() == mode %} active{% endif %}\"><i class=\"{{ settings.class }}\"></i></a>
                                                        {% endfor %}
                                                    </div>
                                                {% endif %}

                                                {% block sonata_admin_content_actions_wrappers %}
                                                    {% if _actions|replace({ '<li>': '', '</li>': '' })|trim is not empty %}
                                                        <ul class=\"nav navbar-nav navbar-right\">
                                                        {% if _actions|split('</a>')|length > 2 %}
                                                            <li class=\"dropdown sonata-actions\">
                                                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">{{ 'link_actions'|trans({}, 'SonataAdminBundle') }} <b class=\"caret\"></b></a>
                                                                <ul class=\"dropdown-menu\" role=\"menu\">
                                                                    {{ _actions|raw }}
                                                                </ul>
                                                            </li>
                                                        {% else %}
                                                            {{ _actions|raw }}
                                                        {% endif %}
                                                        </ul>
                                                    {% endif %}
                                                {% endblock sonata_admin_content_actions_wrappers %}

                                                {% if _list_filters_actions is not empty %}
                                                    {{ _list_filters_actions|raw }}
                                                {% endif %}
                                            </div>
                                        </div>
                                    </nav>
                                {% endif %}
                            {% endblock sonata_page_content_nav %}
                        {% endblock sonata_page_content_header %}
                    </section>

                    <section class=\"content\">
                        {% block sonata_admin_content %}

                            {% block notice %}
                                {% include 'SonataCoreBundle:FlashMessage:render.html.twig' %}
                            {% endblock notice %}

                            {% if _preview is not empty %}
                                <div class=\"sonata-ba-preview\">{{ _preview|raw }}</div>
                            {% endif %}

                            {% if _content is not empty %}
                                <div class=\"sonata-ba-content\">{{ _content|raw }}</div>
                            {% endif %}

                            {% if _show is not empty %}
                                <div class=\"sonata-ba-show\">{{ _show|raw }}</div>
                            {% endif %}

                            {% if _form is not empty %}
                                <div class=\"sonata-ba-form\">{{ _form|raw }}</div>
                            {% endif %}

                            {% if _list_filters is not empty %}
                                <div class=\"row\">
                                    {{ _list_filters|raw }}
                                </div>
                            {% endif %}

                            {% if _list_table is not empty %}
                                <div class=\"row\">
                                    {{ _list_table|raw }}
                                </div>
                            {% endif %}
                        {% endblock sonata_admin_content %}
                    </section>
                {% endblock sonata_page_content %}
            </div>
        {% endblock sonata_wrapper %}
    </div>

    {% if sonata_admin.adminPool.getOption('use_bootlint') %}
        {% block bootlint %}
            {# Bootlint - https://github.com/twbs/bootlint#in-the-browser #}
            <script type=\"text/javascript\">
                javascript:(function(){var s=document.createElement(\"script\");s.onload=function(){bootlint.showLintReportForCurrentDocument([], {hasProblems: false, problemFree: false});};s.src=\"https://maxcdn.bootstrapcdn.com/bootlint/latest/bootlint.min.js\";document.body.appendChild(s)})();
            </script>
        {% endblock %}
    {% endif %}

    </body>
</html>
", "@SonataAdmin/standard_layout.html.twig", "C:\\Users\\David\\Projekte\\Koifutter\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\standard_layout.html.twig");
    }
}
