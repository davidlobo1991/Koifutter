<?php

/* @Koi/sites/details.html.twig */
class __TwigTemplate_5d2b9cb34a693d21b9b8e040a331758abe8feda58deadb213f21f41eea70b6d6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("KoiBundle::base.html.twig", "@Koi/sites/details.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "KoiBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "

<div class=\"wrapper\">
    <div class=\"content-wrap\">
        <!-- Start CONTENT -->
        <div class=\"content\">
            <div class=\"container-wrapper\">
                <div class=\"container\">
                    <div class=\"breadcrumbs\">
                        <a href=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("koi_homepage");
        echo "\"><span class=\"icon icon-chevron-right\"></span>Zurück</a>
                    </div>
                    <div class=\"details-site row\">
                        <h2>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute(($context["feed"] ?? null), "nameFeed", array()), "html", null, true);
        echo "</h2>
                        <div class=\"col-bg\">
                            <div class=\"table-list clearfix\">
                                <h3>Analytische Bestandteile</h3>
                                <div class=\"properties\">
                                    ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["elements"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["elementsActive"]) {
            if (($this->getAttribute($context["elementsActive"], "idType", array()) == "1")) {
                // line 21
                echo "                                        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["feed_elements"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["feed_elementsActive"]) {
                    if (($this->getAttribute($this->getAttribute(                    // line 22
$context["feed_elementsActive"], "idElement", array()), "id", array()) == $this->getAttribute($context["elementsActive"], "id", array()))) {
                        // line 23
                        echo "                                            <span class=\"prop-value\">
                                                <span class=\"prop-title\">";
                        // line 24
                        echo twig_escape_filter($this->env, $this->getAttribute($context["elementsActive"], "nameElement", array()), "html", null, true);
                        echo ":</span>
                                                ";
                        // line 25
                        echo twig_escape_filter($this->env, $this->getAttribute($context["feed_elementsActive"], "amount", array()), "html", null, true);
                        echo " ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["elementsActive"], "scaleElement", array()), "html", null, true);
                        echo "
                                            </span>
                                        ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['feed_elementsActive'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 28
                echo "                                    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['elementsActive'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "                                </div>
                            </div>

                            <div class=\"table-list clearfix\">
                                <h3>Eigenschafften</h3>
                                <div class=\"properties\">
                                    <span class=\"prop-value tooltip\" title=\"Jahreszeit\">
                                        <span class=\"icon icon-flower\"></span>
                                        <span class=\"loop-comma\">
                                            ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["seasons"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["seasonActive"]) {
            // line 39
            echo "                                                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["feed_seasons"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["feed_seasonsActive"]) {
                if (($this->getAttribute($this->getAttribute(                // line 40
$context["feed_seasonsActive"], "idSeason", array()), "id", array()) == $this->getAttribute($context["seasonActive"], "id", array()))) {
                    // line 42
                    echo "                                                    ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["seasonActive"], "nameSeason", array()), "html", null, true);
                    echo ",
                                                ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['feed_seasonsActive'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            echo "                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['seasonActive'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "                                        </span>
                                    </span>

                                    ";
        // line 48
        if ($this->getAttribute(($context["feed"] ?? null), "waterTemperature", array())) {
            // line 49
            echo "                                        <span class=\"prop-value tooltip\" title=\"Temperaturr\">
                                            <span class=\"icon icon-thermometer\"></span>
                                            ab ";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute(($context["feed"] ?? null), "waterTemperature", array()), "html", null, true);
            echo "°
                                        </span>
                                    ";
        }
        // line 54
        echo "
                                    ";
        // line 55
        if (($this->getAttribute(($context["feed"] ?? null), "pelletSizeMin", array()) || $this->getAttribute(($context["feed"] ?? null), "pelletSizeMax", array()))) {
            // line 56
            echo "                                        <span class=\"prop-value tooltip\" title=\"Größe\">
                                            <span class=\"icon icon-price-tag\"></span>
                                            ";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute(($context["feed"] ?? null), "pelletSizeMin", array()), "html", null, true);
            echo " cm
                                            ";
            // line 59
            if ($this->getAttribute(($context["feed"] ?? null), "pelletSizeMax", array())) {
                // line 60
                echo "                                                - ";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["feed"] ?? null), "pelletSizeMax", array()), "html", null, true);
                echo " cm
                                            ";
            }
            // line 62
            echo "                                        </span>
                                    ";
        }
        // line 64
        echo "
                                    ";
        // line 65
        if ($this->getAttribute(($context["feed"] ?? null), "colorant", array())) {
            // line 66
            echo "                                        <span class=\"prop-value tooltip\" title=\"Farbstoff\">
                                            <span class=\"icon icon-brush\"></span>";
            // line 67
            echo twig_escape_filter($this->env, $this->getAttribute(($context["feed"] ?? null), "colorant", array()), "html", null, true);
            echo "
                                        </span>
                                    ";
        }
        // line 70
        echo "                                </div>
                            </div>

                            <div class=\"table-list clearfix\">
                                <h3>Zusatzstoffe und Spurenelemente</h3>
                                <div class=\"properties-list row\">
                                    <div class=\"col-nr\">
                                        ";
        // line 77
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["elements"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["elementsActive"]) {
            if (($this->getAttribute($context["elementsActive"], "idType", array()) == "2")) {
                // line 78
                echo "                                            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["feed_elements"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["feed_elementsActive"]) {
                    if (($this->getAttribute($this->getAttribute(                    // line 79
$context["feed_elementsActive"], "idElement", array()), "id", array()) == $this->getAttribute($context["elementsActive"], "id", array()))) {
                        // line 80
                        echo "                                                <span class=\"prop-value\">
                                                    <span class=\"prop-title\">";
                        // line 81
                        echo twig_escape_filter($this->env, $this->getAttribute($context["elementsActive"], "nameElement", array()), "html", null, true);
                        echo ":</span>
                                                    ";
                        // line 82
                        echo twig_escape_filter($this->env, $this->getAttribute($context["feed_elementsActive"], "amount", array()), "html", null, true);
                        echo " ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["elementsActive"], "scaleElement", array()), "html", null, true);
                        echo "
                                                </span>
                                            ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['feed_elementsActive'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 85
                echo "                                        ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['elementsActive'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 86
        echo "                                    </div>
                                    <div class=\"col-nr\">
                                        ";
        // line 88
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["elements"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["elementsActive"]) {
            if (($this->getAttribute($context["elementsActive"], "idType", array()) == "3")) {
                // line 89
                echo "                                            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["feed_elements"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["feed_elementsActive"]) {
                    if (($this->getAttribute($this->getAttribute(                    // line 90
$context["feed_elementsActive"], "idElement", array()), "id", array()) == $this->getAttribute($context["elementsActive"], "id", array()))) {
                        // line 91
                        echo "                                                <span class=\"prop-value\">
                                                    <span class=\"prop-title\">";
                        // line 92
                        echo twig_escape_filter($this->env, $this->getAttribute($context["elementsActive"], "nameElement", array()), "html", null, true);
                        echo ":</span>
                                                    ";
                        // line 93
                        echo twig_escape_filter($this->env, $this->getAttribute($context["feed_elementsActive"], "amount", array()), "html", null, true);
                        echo " ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["elementsActive"], "scaleElement", array()), "html", null, true);
                        echo "
                                                </span>
                                            ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['feed_elementsActive'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 96
                echo "                                        ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['elementsActive'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 97
        echo "                                    </div>
                                    <div class=\"col-nr\">
                                        ";
        // line 99
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["elements"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["elementsActive"]) {
            if (($this->getAttribute($context["elementsActive"], "idType", array()) == "4")) {
                // line 100
                echo "                                            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["feed_elements"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["feed_elementsActive"]) {
                    if (($this->getAttribute($this->getAttribute(                    // line 101
$context["feed_elementsActive"], "idElement", array()), "id", array()) == $this->getAttribute($context["elementsActive"], "id", array()))) {
                        // line 102
                        echo "                                                <span class=\"prop-value\">
                                                    <span class=\"prop-title\">";
                        // line 103
                        echo twig_escape_filter($this->env, $this->getAttribute($context["elementsActive"], "nameElement", array()), "html", null, true);
                        echo ":</span>
                                                    ";
                        // line 104
                        echo twig_escape_filter($this->env, $this->getAttribute($context["feed_elementsActive"], "amount", array()), "html", null, true);
                        echo " ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["elementsActive"], "scaleElement", array()), "html", null, true);
                        echo "
                                                </span>
                                            ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['feed_elementsActive'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 107
                echo "                                        ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['elementsActive'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 108
        echo "                                    </div>
                                    <a class=\"more-info\"></a>

                                </div>
                            </div>
                            <div class=\"table-list clearfix\">
                                <h3>Zusammensetzung</h3>
                                <div class=\"properties\">
                                    <span class=\"all prop-value loop-comma\">
                                         ";
        // line 117
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["components"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["componentsActive"]) {
            // line 118
            echo "                                             ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["feed_components"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["feed_componentsActive"]) {
                if (($this->getAttribute($this->getAttribute(                // line 119
$context["feed_componentsActive"], "idComponent", array()), "id", array()) == $this->getAttribute($context["componentsActive"], "id", array()))) {
                    // line 120
                    echo "                                                       ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["componentsActive"], "nameComponent", array()), "html", null, true);
                    echo ",
                                             ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['feed_componentsActive'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 122
            echo "                                         ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['componentsActive'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 123
        echo "                                    </span>
                                </div>
                            </div>
                        </div>

                        <div class=\"col-sm\">
                            <div class=\"table-list table-details clearfix\">
                                ";
        // line 130
        if ($this->getAttribute(($context["feed"] ?? null), "idDistributor", array())) {
            // line 131
            echo "                                    <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("images/content/" . $this->getAttribute($this->getAttribute(($context["feed"] ?? null), "idDistributor", array()), "nameImage", array()))), "html", null, true);
            echo "\"
                                     alt=\"";
            // line 132
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["feed"] ?? null), "idDistributor", array()), "nameImage", array()), "html", null, true);
            echo "\">
                                ";
        }
        // line 134
        echo "                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "@Koi/sites/details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  380 => 134,  375 => 132,  370 => 131,  368 => 130,  359 => 123,  353 => 122,  343 => 120,  341 => 119,  336 => 118,  332 => 117,  321 => 108,  314 => 107,  302 => 104,  298 => 103,  295 => 102,  293 => 101,  288 => 100,  283 => 99,  279 => 97,  272 => 96,  260 => 93,  256 => 92,  253 => 91,  251 => 90,  246 => 89,  241 => 88,  237 => 86,  230 => 85,  218 => 82,  214 => 81,  211 => 80,  209 => 79,  204 => 78,  199 => 77,  190 => 70,  184 => 67,  181 => 66,  179 => 65,  176 => 64,  172 => 62,  166 => 60,  164 => 59,  160 => 58,  156 => 56,  154 => 55,  151 => 54,  145 => 51,  141 => 49,  139 => 48,  134 => 45,  128 => 44,  118 => 42,  116 => 40,  111 => 39,  107 => 38,  96 => 29,  89 => 28,  77 => 25,  73 => 24,  70 => 23,  68 => 22,  63 => 21,  58 => 20,  50 => 15,  44 => 12,  31 => 3,  28 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Koi/sites/details.html.twig", "C:\\Users\\David\\Projekte\\Koifutter\\src\\KoiBundle\\Resources\\views\\sites\\details.html.twig");
    }
}
