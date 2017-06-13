<?php

/* SonataAdminBundle::standard_layout.html.twig */
class __TwigTemplate_3ab657dd3bb9c559895d85475fb45e67bb6bfe0f99ebbaac6ee85c11d07da7c1 extends Twig_Template
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
        if ($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? null), "adminPool", array()), "getOption", array(0 => "use_bootlint"), "method")) {
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
    }

    // line 26
    public function block_html_attributes($context, array $blocks = array())
    {
        echo "class=\"no-js\"";
    }

    // line 28
    public function block_meta_tags($context, array $blocks = array())
    {
        // line 29
        echo "            <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
            <meta charset=\"UTF-8\">
            <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        ";
    }

    // line 34
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 35
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? null), "adminPool", array()), "getOption", array(0 => "stylesheets", 1 => array()), "method"));
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
    }

    // line 40
    public function block_javascripts($context, array $blocks = array())
    {
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
        $context["locale"] = $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "locale", array());
        // line 69
        echo "            ";
        // line 70
        echo "            ";
        if ((twig_slice($this->env, ($context["locale"] ?? null), 0, 2) != "en")) {
            // line 71
            echo "                <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("bundles/sonatacore/vendor/moment/locale/" . twig_replace_filter(twig_lower_filter($this->env,             // line 73
($context["locale"] ?? null)), array("_" => "-"))) . ".js")), "html", null, true);
            // line 75
            echo "\"></script>
            ";
        }
        // line 77
        echo "
            ";
        // line 79
        echo "            ";
        if ($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? null), "adminPool", array()), "getOption", array(0 => "use_select2"), "method")) {
            // line 80
            echo "                ";
            if ((($context["locale"] ?? null) == "pt")) {
                $context["locale"] = "pt_PT";
            }
            // line 81
            echo "
                ";
            // line 83
            echo "                ";
            if ((twig_slice($this->env, ($context["locale"] ?? null), 0, 2) != "en")) {
                // line 84
                echo "                    <script src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("bundles/sonatacore/vendor/select2/select2_locale_" . twig_replace_filter(($context["locale"] ?? null), array("_" => "-"))) . ".js")), "html", null, true);
                echo "\"></script>
                ";
            }
            // line 86
            echo "            ";
        }
        // line 87
        echo "        ";
    }

    // line 41
    public function block_sonata_javascript_config($context, array $blocks = array())
    {
        // line 42
        echo "                <script>
                    window.SONATA_CONFIG = {
                        CONFIRM_EXIT: ";
        // line 44
        if ($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? null), "adminPool", array()), "getOption", array(0 => "confirm_exit"), "method")) {
            echo "true";
        } else {
            echo "false";
        }
        echo ",
                        USE_SELECT2: ";
        // line 45
        if ($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? null), "adminPool", array()), "getOption", array(0 => "use_select2"), "method")) {
            echo "true";
        } else {
            echo "false";
        }
        echo ",
                        USE_ICHECK: ";
        // line 46
        if ($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? null), "adminPool", array()), "getOption", array(0 => "use_icheck"), "method")) {
            echo "true";
        } else {
            echo "false";
        }
        echo ",
                        USE_STICKYFORMS: ";
        // line 47
        if ($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? null), "adminPool", array()), "getOption", array(0 => "use_stickyforms"), "method")) {
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
    }

    // line 62
    public function block_sonata_javascript_pool($context, array $blocks = array())
    {
        // line 63
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? null), "adminPool", array()), "getOption", array(0 => "javascripts", 1 => array()), "method"));
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
    }

    // line 90
    public function block_sonata_head_title($context, array $blocks = array())
    {
        // line 91
        echo "            ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Admin", array(), "SonataAdminBundle"), "html", null, true);
        echo "

            ";
        // line 93
        if ( !twig_test_empty(($context["_title"] ?? null))) {
            // line 94
            echo "                ";
            echo ($context["_title"] ?? null);
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
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["breadcrumbs_builder"] ?? null), "breadcrumbs", array(0 => ($context["admin"] ?? null), 1 => ($context["action"] ?? null)), "method"));
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
                        if ( !(($context["translation_domain"] ?? null) === false)) {
                            // line 107
                            $context["label"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? null), $this->getAttribute($context["menu"], "extra", array(0 => "translation_params", 1 => array()), "method"), ($context["translation_domain"] ?? null));
                        }
                        // line 110
                        echo twig_escape_filter($this->env, ($context["label"] ?? null), "html", null, true);
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
    }

    // line 118
    public function block_body_attributes($context, array $blocks = array())
    {
        echo "class=\"sonata-bc skin-black fixed\"";
    }

    // line 122
    public function block_sonata_header($context, array $blocks = array())
    {
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
    }

    // line 124
    public function block_sonata_header_noscript_warning($context, array $blocks = array())
    {
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
    }

    // line 131
    public function block_logo($context, array $blocks = array())
    {
        // line 132
        echo "                    ";
        ob_start();
        // line 133
        echo "                        <a class=\"logo\" href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sonata_admin_dashboard");
        echo "\">
                            ";
        // line 134
        if ((("single_text" == $this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? null), "adminPool", array()), "getOption", array(0 => "title_mode"), "method")) || ("both" == $this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? null), "adminPool", array()), "getOption", array(0 => "title_mode"), "method")))) {
            // line 135
            echo "                                <span>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? null), "adminPool", array()), "title", array()), "html", null, true);
            echo "</span>
                            ";
        }
        // line 137
        echo "                        </a>
                    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 139
        echo "                ";
    }

    // line 140
    public function block_sonata_nav($context, array $blocks = array())
    {
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
    }

    // line 147
    public function block_sonata_breadcrumb($context, array $blocks = array())
    {
        // line 148
        echo "                                <div class=\"hidden-xs\">
                                    ";
        // line 149
        if (( !twig_test_empty(($context["_breadcrumb"] ?? null)) || array_key_exists("action", $context))) {
            // line 150
            echo "                                        <ol class=\"nav navbar-top-links breadcrumb\">
                                            ";
            // line 151
            if (twig_test_empty(($context["_breadcrumb"] ?? null))) {
                // line 152
                echo "                                                ";
                if (array_key_exists("action", $context)) {
                    // line 153
                    echo "                                                    ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["breadcrumbs_builder"] ?? null), "breadcrumbs", array(0 => ($context["admin"] ?? null), 1 => ($context["action"] ?? null)), "method"));
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
                        if ( !(($context["translation_domain"] ?? null) === false)) {
                            // line 157
                            $context["label"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? null), $this->getAttribute($context["menu"], "extra", array(0 => "translation_params", 1 => array()), "method"), ($context["translation_domain"] ?? null));
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
                                    echo ($context["label"] ?? null);
                                } else {
                                    // line 167
                                    echo twig_escape_filter($this->env, ($context["label"] ?? null), "html", null, true);
                                }
                                // line 169
                                echo "                                                                    </a>
                                                                ";
                            } else {
                                // line 171
                                echo "                                                                    <span>";
                                echo twig_escape_filter($this->env, ($context["label"] ?? null), "html", null, true);
                                echo "</span>
                                                                ";
                            }
                            // line 173
                            echo "                                                            </li>
                                                        ";
                        } else {
                            // line 175
                            echo "                                                            <li class=\"active\"><span>";
                            echo twig_escape_filter($this->env, ($context["label"] ?? null), "html", null, true);
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
                echo ($context["_breadcrumb"] ?? null);
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
    }

    // line 188
    public function block_sonata_top_nav_menu($context, array $blocks = array())
    {
        // line 189
        echo "                            ";
        if (($this->getAttribute(($context["app"] ?? null), "user", array()) && $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_SONATA_ADMIN"))) {
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
    }

    // line 192
    public function block_sonata_top_nav_menu_add_block($context, array $blocks = array())
    {
        // line 193
        echo "                                            <li class=\"dropdown\">
                                                <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                                    <i class=\"fa fa-plus-square fa-fw\" aria-hidden=\"true\"></i> <i class=\"fa fa-caret-down\" aria-hidden=\"true\"></i>
                                                </a>
                                                ";
        // line 197
        $this->loadTemplate($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? null), "adminPool", array()), "getTemplate", array(0 => "add_block"), "method"), "SonataAdminBundle::standard_layout.html.twig", 197)->display($context);
        // line 198
        echo "                                            </li>
                                        ";
    }

    // line 200
    public function block_sonata_top_nav_menu_user_block($context, array $blocks = array())
    {
        // line 201
        echo "                                            <li class=\"dropdown user-menu\">
                                                <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                                    <i class=\"fa fa-user fa-fw\" aria-hidden=\"true\"></i> <i class=\"fa fa-caret-down\" aria-hidden=\"true\"></i>
                                                </a>
                                                <ul class=\"dropdown-menu dropdown-user\">
                                                    ";
        // line 206
        $this->loadTemplate($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? null), "adminPool", array()), "getTemplate", array(0 => "user_block"), "method"), "SonataAdminBundle::standard_layout.html.twig", 206)->display($context);
        // line 207
        echo "                                                </ul>
                                            </li>
                                        ";
    }

    // line 219
    public function block_sonata_wrapper($context, array $blocks = array())
    {
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
    }

    // line 220
    public function block_sonata_left_side($context, array $blocks = array())
    {
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
    }

    // line 223
    public function block_sonata_side_nav($context, array $blocks = array())
    {
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
    }

    // line 224
    public function block_sonata_sidebar_search($context, array $blocks = array())
    {
        // line 225
        echo "                                <form action=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sonata_admin_search");
        echo "\" method=\"GET\" class=\"sidebar-form\" role=\"search\">
                                    <div class=\"input-group custom-search-form\">
                                        <input type=\"text\" name=\"q\" value=\"";
        // line 227
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "get", array(0 => "q"), "method"), "html", null, true);
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
    }

    // line 237
    public function block_side_bar_before_nav($context, array $blocks = array())
    {
        echo " ";
    }

    // line 238
    public function block_side_bar_nav($context, array $blocks = array())
    {
        // line 239
        echo "                                ";
        echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render("sonata_admin_sidebar", array("template" => $this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? null), "adminPool", array()), "getTemplate", array(0 => "knp_menu_template"), "method")));
        echo "
                            ";
    }

    // line 247
    public function block_sonata_page_content($context, array $blocks = array())
    {
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
    }

    // line 250
    public function block_sonata_page_content_header($context, array $blocks = array())
    {
        // line 251
        echo "                            ";
        $this->displayBlock('sonata_page_content_nav', $context, $blocks);
        // line 303
        echo "                        ";
    }

    // line 251
    public function block_sonata_page_content_nav($context, array $blocks = array())
    {
        // line 252
        echo "                                ";
        if ((( !twig_test_empty(($context["_tab_menu"] ?? null)) ||  !twig_test_empty(($context["_actions"] ?? null))) ||  !twig_test_empty(($context["_list_filters_actions"] ?? null)))) {
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
            if ( !twig_test_empty(($context["_tab_menu"] ?? null))) {
                // line 265
                echo "                                                    <div class=\"navbar-left\">
                                                        ";
                // line 266
                echo ($context["_tab_menu"] ?? null);
                echo "
                                                    </div>
                                                ";
            }
            // line 269
            echo "
                                                ";
            // line 270
            if ((((array_key_exists("admin", $context) && array_key_exists("action", $context)) && (($context["action"] ?? null) == "list")) && (twig_length_filter($this->env, $this->getAttribute(($context["admin"] ?? null), "listModes", array())) > 1))) {
                // line 271
                echo "                                                    <div class=\"nav navbar-right btn-group\">
                                                        ";
                // line 272
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["admin"] ?? null), "listModes", array()));
                foreach ($context['_seq'] as $context["mode"] => $context["settings"]) {
                    // line 273
                    echo "                                                            <a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? null), "generateUrl", array(0 => "list", 1 => twig_array_merge($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "query", array()), "all", array()), array("_list_mode" => $context["mode"]))), "method"), "html", null, true);
                    echo "\" class=\"btn btn-default navbar-btn btn-sm";
                    if (($this->getAttribute(($context["admin"] ?? null), "getListMode", array(), "method") == $context["mode"])) {
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
            if ( !twig_test_empty(($context["_list_filters_actions"] ?? null))) {
                // line 296
                echo "                                                    ";
                echo ($context["_list_filters_actions"] ?? null);
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
    }

    // line 255
    public function block_tab_menu_navbar_header($context, array $blocks = array())
    {
        // line 256
        echo "                                                ";
        if ( !twig_test_empty(($context["_navbar_title"] ?? null))) {
            // line 257
            echo "                                                    <div class=\"navbar-header\">
                                                        <a class=\"navbar-brand\" href=\"#\">";
            // line 258
            echo ($context["_navbar_title"] ?? null);
            echo "</a>
                                                    </div>
                                                ";
        }
        // line 261
        echo "                                            ";
    }

    // line 278
    public function block_sonata_admin_content_actions_wrappers($context, array $blocks = array())
    {
        // line 279
        echo "                                                    ";
        if ( !twig_test_empty(twig_trim_filter(twig_replace_filter(($context["_actions"] ?? null), array("<li>" => "", "</li>" => ""))))) {
            // line 280
            echo "                                                        <ul class=\"nav navbar-nav navbar-right\">
                                                        ";
            // line 281
            if ((twig_length_filter($this->env, twig_split_filter($this->env, ($context["_actions"] ?? null), "</a>")) > 2)) {
                // line 282
                echo "                                                            <li class=\"dropdown sonata-actions\">
                                                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">";
                // line 283
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("link_actions", array(), "SonataAdminBundle"), "html", null, true);
                echo " <b class=\"caret\"></b></a>
                                                                <ul class=\"dropdown-menu\" role=\"menu\">
                                                                    ";
                // line 285
                echo ($context["_actions"] ?? null);
                echo "
                                                                </ul>
                                                            </li>
                                                        ";
            } else {
                // line 289
                echo "                                                            ";
                echo ($context["_actions"] ?? null);
                echo "
                                                        ";
            }
            // line 291
            echo "                                                        </ul>
                                                    ";
        }
        // line 293
        echo "                                                ";
    }

    // line 307
    public function block_sonata_admin_content($context, array $blocks = array())
    {
        // line 308
        echo "
                            ";
        // line 309
        $this->displayBlock('notice', $context, $blocks);
        // line 312
        echo "
                            ";
        // line 313
        if ( !twig_test_empty(($context["_preview"] ?? null))) {
            // line 314
            echo "                                <div class=\"sonata-ba-preview\">";
            echo ($context["_preview"] ?? null);
            echo "</div>
                            ";
        }
        // line 316
        echo "
                            ";
        // line 317
        if ( !twig_test_empty(($context["_content"] ?? null))) {
            // line 318
            echo "                                <div class=\"sonata-ba-content\">";
            echo ($context["_content"] ?? null);
            echo "</div>
                            ";
        }
        // line 320
        echo "
                            ";
        // line 321
        if ( !twig_test_empty(($context["_show"] ?? null))) {
            // line 322
            echo "                                <div class=\"sonata-ba-show\">";
            echo ($context["_show"] ?? null);
            echo "</div>
                            ";
        }
        // line 324
        echo "
                            ";
        // line 325
        if ( !twig_test_empty(($context["_form"] ?? null))) {
            // line 326
            echo "                                <div class=\"sonata-ba-form\">";
            echo ($context["_form"] ?? null);
            echo "</div>
                            ";
        }
        // line 328
        echo "
                            ";
        // line 329
        if ( !twig_test_empty(($context["_list_filters"] ?? null))) {
            // line 330
            echo "                                <div class=\"row\">
                                    ";
            // line 331
            echo ($context["_list_filters"] ?? null);
            echo "
                                </div>
                            ";
        }
        // line 334
        echo "
                            ";
        // line 335
        if ( !twig_test_empty(($context["_list_table"] ?? null))) {
            // line 336
            echo "                                <div class=\"row\">
                                    ";
            // line 337
            echo ($context["_list_table"] ?? null);
            echo "
                                </div>
                            ";
        }
        // line 340
        echo "                        ";
    }

    // line 309
    public function block_notice($context, array $blocks = array())
    {
        // line 310
        echo "                                ";
        $this->loadTemplate("SonataCoreBundle:FlashMessage:render.html.twig", "SonataAdminBundle::standard_layout.html.twig", 310)->display($context);
        // line 311
        echo "                            ";
    }

    // line 348
    public function block_bootlint($context, array $blocks = array())
    {
        // line 349
        echo "            ";
        // line 350
        echo "            <script type=\"text/javascript\">
                javascript:(function(){var s=document.createElement(\"script\");s.onload=function(){bootlint.showLintReportForCurrentDocument([], {hasProblems: false, problemFree: false});};s.src=\"https://maxcdn.bootstrapcdn.com/bootlint/latest/bootlint.min.js\";document.body.appendChild(s)})();
            </script>
        ";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle::standard_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1031 => 350,  1029 => 349,  1026 => 348,  1022 => 311,  1019 => 310,  1016 => 309,  1012 => 340,  1006 => 337,  1003 => 336,  1001 => 335,  998 => 334,  992 => 331,  989 => 330,  987 => 329,  984 => 328,  978 => 326,  976 => 325,  973 => 324,  967 => 322,  965 => 321,  962 => 320,  956 => 318,  954 => 317,  951 => 316,  945 => 314,  943 => 313,  940 => 312,  938 => 309,  935 => 308,  932 => 307,  928 => 293,  924 => 291,  918 => 289,  911 => 285,  906 => 283,  903 => 282,  901 => 281,  898 => 280,  895 => 279,  892 => 278,  888 => 261,  882 => 258,  879 => 257,  876 => 256,  873 => 255,  869 => 302,  863 => 298,  857 => 296,  855 => 295,  852 => 294,  850 => 278,  847 => 277,  843 => 275,  828 => 273,  824 => 272,  821 => 271,  819 => 270,  816 => 269,  810 => 266,  807 => 265,  805 => 264,  801 => 262,  799 => 255,  795 => 253,  792 => 252,  789 => 251,  785 => 303,  782 => 251,  779 => 250,  774 => 341,  772 => 307,  767 => 304,  765 => 250,  761 => 248,  758 => 247,  751 => 239,  748 => 238,  742 => 237,  727 => 227,  721 => 225,  718 => 224,  714 => 241,  711 => 238,  709 => 237,  706 => 236,  703 => 224,  700 => 223,  694 => 242,  692 => 223,  688 => 221,  685 => 220,  680 => 343,  678 => 247,  674 => 245,  671 => 220,  668 => 219,  662 => 207,  660 => 206,  653 => 201,  650 => 200,  645 => 198,  643 => 197,  637 => 193,  634 => 192,  630 => 213,  625 => 210,  622 => 200,  620 => 192,  616 => 190,  613 => 189,  610 => 188,  605 => 184,  601 => 182,  595 => 180,  592 => 179,  589 => 178,  575 => 177,  569 => 175,  565 => 173,  559 => 171,  555 => 169,  552 => 167,  549 => 165,  547 => 164,  542 => 163,  540 => 162,  537 => 161,  535 => 160,  532 => 157,  530 => 156,  528 => 155,  526 => 154,  508 => 153,  505 => 152,  503 => 151,  500 => 150,  498 => 149,  495 => 148,  492 => 147,  487 => 214,  485 => 188,  481 => 186,  479 => 147,  471 => 141,  468 => 140,  464 => 139,  460 => 137,  454 => 135,  452 => 134,  447 => 133,  444 => 132,  441 => 131,  433 => 127,  429 => 125,  426 => 124,  421 => 216,  418 => 140,  415 => 131,  413 => 124,  410 => 123,  407 => 122,  401 => 118,  397 => 115,  394 => 114,  391 => 113,  377 => 112,  372 => 110,  369 => 107,  367 => 106,  365 => 105,  363 => 104,  359 => 101,  356 => 100,  353 => 99,  336 => 98,  333 => 97,  330 => 96,  324 => 94,  322 => 93,  316 => 91,  313 => 90,  309 => 66,  300 => 64,  295 => 63,  292 => 62,  277 => 50,  273 => 48,  267 => 47,  259 => 46,  251 => 45,  243 => 44,  239 => 42,  236 => 41,  232 => 87,  229 => 86,  223 => 84,  220 => 83,  217 => 81,  212 => 80,  209 => 79,  206 => 77,  202 => 75,  200 => 73,  198 => 71,  195 => 70,  193 => 69,  191 => 68,  188 => 67,  186 => 62,  183 => 61,  180 => 41,  177 => 40,  173 => 38,  164 => 36,  159 => 35,  156 => 34,  149 => 29,  146 => 28,  140 => 26,  133 => 355,  130 => 354,  127 => 348,  125 => 347,  121 => 345,  119 => 219,  116 => 218,  114 => 122,  107 => 118,  103 => 116,  101 => 90,  97 => 88,  95 => 40,  92 => 39,  90 => 34,  87 => 33,  85 => 28,  80 => 26,  76 => 24,  74 => 23,  72 => 22,  70 => 21,  68 => 20,  66 => 19,  64 => 18,  62 => 17,  60 => 16,  58 => 15,  56 => 14,  54 => 13,  52 => 12,  49 => 11,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SonataAdminBundle::standard_layout.html.twig", "C:\\Users\\David\\Projekte\\Koifutter\\vendor\\sonata-project\\admin-bundle/Resources/views/standard_layout.html.twig");
    }
}
