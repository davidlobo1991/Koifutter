<?php

/* KoiBundle:sites:details.html.twig */
class __TwigTemplate_9b5bcce742c2e71d2381d7459b88eaa077319e6d005168d1f4689955a1a5719b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("KoiBundle::base.html.twig", "KoiBundle:sites:details.html.twig", 1);
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
        $__internal_fd2b2ce741c208f60658df47fb5003f1526e8f4180fe4b350340b9275a09f405 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd2b2ce741c208f60658df47fb5003f1526e8f4180fe4b350340b9275a09f405->enter($__internal_fd2b2ce741c208f60658df47fb5003f1526e8f4180fe4b350340b9275a09f405_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KoiBundle:sites:details.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fd2b2ce741c208f60658df47fb5003f1526e8f4180fe4b350340b9275a09f405->leave($__internal_fd2b2ce741c208f60658df47fb5003f1526e8f4180fe4b350340b9275a09f405_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_ea39eaf8467d0028e285c1be0ce6f3c27b24b964e9336475912a91665beec8c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea39eaf8467d0028e285c1be0ce6f3c27b24b964e9336475912a91665beec8c0->enter($__internal_ea39eaf8467d0028e285c1be0ce6f3c27b24b964e9336475912a91665beec8c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo twig_escape_filter($this->env, $this->getAttribute(($context["feed"] ?? $this->getContext($context, "feed")), "nameFeed", array()), "html", null, true);
        echo "</h2>
                        <div class=\"col-bg\">
                            <div class=\"table-list clearfix\">
                                <h3>Analytische Bestandteile</h3>
                                <div class=\"properties\">
                                    ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["elements"] ?? $this->getContext($context, "elements")));
        foreach ($context['_seq'] as $context["_key"] => $context["elementsActive"]) {
            if (($this->getAttribute($context["elementsActive"], "idType", array()) == "1")) {
                // line 21
                echo "                                        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["feed_elements"] ?? $this->getContext($context, "feed_elements")));
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
        $context['_seq'] = twig_ensure_traversable(($context["seasons"] ?? $this->getContext($context, "seasons")));
        foreach ($context['_seq'] as $context["_key"] => $context["seasonActive"]) {
            // line 39
            echo "                                                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["feed_seasons"] ?? $this->getContext($context, "feed_seasons")));
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
        if ($this->getAttribute(($context["feed"] ?? $this->getContext($context, "feed")), "waterTemperature", array())) {
            // line 49
            echo "                                        <span class=\"prop-value tooltip\" title=\"Temperaturr\">
                                            <span class=\"icon icon-thermometer\"></span>
                                            ab ";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute(($context["feed"] ?? $this->getContext($context, "feed")), "waterTemperature", array()), "html", null, true);
            echo "°
                                        </span>
                                    ";
        }
        // line 54
        echo "
                                    ";
        // line 55
        if (($this->getAttribute(($context["feed"] ?? $this->getContext($context, "feed")), "pelletSizeMin", array()) || $this->getAttribute(($context["feed"] ?? $this->getContext($context, "feed")), "pelletSizeMax", array()))) {
            // line 56
            echo "                                        <span class=\"prop-value tooltip\" title=\"Größe\">
                                            <span class=\"icon icon-price-tag\"></span>
                                            ";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute(($context["feed"] ?? $this->getContext($context, "feed")), "pelletSizeMin", array()), "html", null, true);
            echo " cm
                                            ";
            // line 59
            if ($this->getAttribute(($context["feed"] ?? $this->getContext($context, "feed")), "pelletSizeMax", array())) {
                // line 60
                echo "                                                - ";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["feed"] ?? $this->getContext($context, "feed")), "pelletSizeMax", array()), "html", null, true);
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
        if ($this->getAttribute(($context["feed"] ?? $this->getContext($context, "feed")), "colorant", array())) {
            // line 66
            echo "                                        <span class=\"prop-value tooltip\" title=\"Farbstoff\">
                                            <span class=\"icon icon-brush\"></span>";
            // line 67
            echo twig_escape_filter($this->env, $this->getAttribute(($context["feed"] ?? $this->getContext($context, "feed")), "colorant", array()), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable(($context["elements"] ?? $this->getContext($context, "elements")));
        foreach ($context['_seq'] as $context["_key"] => $context["elementsActive"]) {
            if (($this->getAttribute($context["elementsActive"], "idType", array()) == "2")) {
                // line 78
                echo "                                            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["feed_elements"] ?? $this->getContext($context, "feed_elements")));
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
        $context['_seq'] = twig_ensure_traversable(($context["elements"] ?? $this->getContext($context, "elements")));
        foreach ($context['_seq'] as $context["_key"] => $context["elementsActive"]) {
            if (($this->getAttribute($context["elementsActive"], "idType", array()) == "3")) {
                // line 89
                echo "                                            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["feed_elements"] ?? $this->getContext($context, "feed_elements")));
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
        $context['_seq'] = twig_ensure_traversable(($context["elements"] ?? $this->getContext($context, "elements")));
        foreach ($context['_seq'] as $context["_key"] => $context["elementsActive"]) {
            if (($this->getAttribute($context["elementsActive"], "idType", array()) == "4")) {
                // line 100
                echo "                                            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["feed_elements"] ?? $this->getContext($context, "feed_elements")));
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
        $context['_seq'] = twig_ensure_traversable(($context["components"] ?? $this->getContext($context, "components")));
        foreach ($context['_seq'] as $context["_key"] => $context["componentsActive"]) {
            // line 118
            echo "                                             ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["feed_components"] ?? $this->getContext($context, "feed_components")));
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
        if ($this->getAttribute(($context["feed"] ?? $this->getContext($context, "feed")), "idDistributor", array())) {
            // line 131
            echo "                                    <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("images/content/" . $this->getAttribute($this->getAttribute(($context["feed"] ?? $this->getContext($context, "feed")), "idDistributor", array()), "nameImage", array()))), "html", null, true);
            echo "\"
                                     alt=\"";
            // line 132
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["feed"] ?? $this->getContext($context, "feed")), "idDistributor", array()), "nameImage", array()), "html", null, true);
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
        
        $__internal_ea39eaf8467d0028e285c1be0ce6f3c27b24b964e9336475912a91665beec8c0->leave($__internal_ea39eaf8467d0028e285c1be0ce6f3c27b24b964e9336475912a91665beec8c0_prof);

    }

    public function getTemplateName()
    {
        return "KoiBundle:sites:details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  389 => 134,  384 => 132,  379 => 131,  377 => 130,  368 => 123,  362 => 122,  352 => 120,  350 => 119,  345 => 118,  341 => 117,  330 => 108,  323 => 107,  311 => 104,  307 => 103,  304 => 102,  302 => 101,  297 => 100,  292 => 99,  288 => 97,  281 => 96,  269 => 93,  265 => 92,  262 => 91,  260 => 90,  255 => 89,  250 => 88,  246 => 86,  239 => 85,  227 => 82,  223 => 81,  220 => 80,  218 => 79,  213 => 78,  208 => 77,  199 => 70,  193 => 67,  190 => 66,  188 => 65,  185 => 64,  181 => 62,  175 => 60,  173 => 59,  169 => 58,  165 => 56,  163 => 55,  160 => 54,  154 => 51,  150 => 49,  148 => 48,  143 => 45,  137 => 44,  127 => 42,  125 => 40,  120 => 39,  116 => 38,  105 => 29,  98 => 28,  86 => 25,  82 => 24,  79 => 23,  77 => 22,  72 => 21,  67 => 20,  59 => 15,  53 => 12,  40 => 3,  34 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'KoiBundle::base.html.twig' %}
{% block body %}
    {{ parent() }}

<div class=\"wrapper\">
    <div class=\"content-wrap\">
        <!-- Start CONTENT -->
        <div class=\"content\">
            <div class=\"container-wrapper\">
                <div class=\"container\">
                    <div class=\"breadcrumbs\">
                        <a href=\"{{ path('koi_homepage') }}\"><span class=\"icon icon-chevron-right\"></span>Zurück</a>
                    </div>
                    <div class=\"details-site row\">
                        <h2>{{ feed.nameFeed }}</h2>
                        <div class=\"col-bg\">
                            <div class=\"table-list clearfix\">
                                <h3>Analytische Bestandteile</h3>
                                <div class=\"properties\">
                                    {% for elementsActive in elements if elementsActive.idType == \"1\" %}
                                        {% for feed_elementsActive in feed_elements
                                        if feed_elementsActive.idElement.id == elementsActive.id %}
                                            <span class=\"prop-value\">
                                                <span class=\"prop-title\">{{ elementsActive.nameElement }}:</span>
                                                {{ feed_elementsActive.amount }} {{ elementsActive.scaleElement }}
                                            </span>
                                        {% endfor %}
                                    {% endfor %}
                                </div>
                            </div>

                            <div class=\"table-list clearfix\">
                                <h3>Eigenschafften</h3>
                                <div class=\"properties\">
                                    <span class=\"prop-value tooltip\" title=\"Jahreszeit\">
                                        <span class=\"icon icon-flower\"></span>
                                        <span class=\"loop-comma\">
                                            {% for seasonActive in seasons %}
                                                {% for feed_seasonsActive in feed_seasons
                                                if feed_seasonsActive.idSeason.id == seasonActive.id
                                                %}
                                                    {{ seasonActive.nameSeason }},
                                                {% endfor %}
                                            {% endfor %}
                                        </span>
                                    </span>

                                    {% if feed.waterTemperature %}
                                        <span class=\"prop-value tooltip\" title=\"Temperaturr\">
                                            <span class=\"icon icon-thermometer\"></span>
                                            ab {{ feed.waterTemperature }}°
                                        </span>
                                    {% endif %}

                                    {% if feed.pelletSizeMin or feed.pelletSizeMax %}
                                        <span class=\"prop-value tooltip\" title=\"Größe\">
                                            <span class=\"icon icon-price-tag\"></span>
                                            {{ feed.pelletSizeMin }} cm
                                            {% if feed.pelletSizeMax %}
                                                - {{ feed.pelletSizeMax }} cm
                                            {% endif %}
                                        </span>
                                    {% endif %}

                                    {% if feed.colorant %}
                                        <span class=\"prop-value tooltip\" title=\"Farbstoff\">
                                            <span class=\"icon icon-brush\"></span>{{ feed.colorant }}
                                        </span>
                                    {% endif %}
                                </div>
                            </div>

                            <div class=\"table-list clearfix\">
                                <h3>Zusatzstoffe und Spurenelemente</h3>
                                <div class=\"properties-list row\">
                                    <div class=\"col-nr\">
                                        {% for elementsActive in elements if elementsActive.idType == \"2\" %}
                                            {% for feed_elementsActive in feed_elements
                                            if feed_elementsActive.idElement.id == elementsActive.id %}
                                                <span class=\"prop-value\">
                                                    <span class=\"prop-title\">{{ elementsActive.nameElement }}:</span>
                                                    {{ feed_elementsActive.amount }} {{ elementsActive.scaleElement }}
                                                </span>
                                            {% endfor %}
                                        {% endfor %}
                                    </div>
                                    <div class=\"col-nr\">
                                        {% for elementsActive in elements if elementsActive.idType == \"3\" %}
                                            {% for feed_elementsActive in feed_elements
                                            if feed_elementsActive.idElement.id == elementsActive.id %}
                                                <span class=\"prop-value\">
                                                    <span class=\"prop-title\">{{ elementsActive.nameElement }}:</span>
                                                    {{ feed_elementsActive.amount }} {{ elementsActive.scaleElement }}
                                                </span>
                                            {% endfor %}
                                        {% endfor %}
                                    </div>
                                    <div class=\"col-nr\">
                                        {% for elementsActive in elements if elementsActive.idType == \"4\" %}
                                            {% for feed_elementsActive in feed_elements
                                            if feed_elementsActive.idElement.id == elementsActive.id %}
                                                <span class=\"prop-value\">
                                                    <span class=\"prop-title\">{{ elementsActive.nameElement }}:</span>
                                                    {{ feed_elementsActive.amount }} {{ elementsActive.scaleElement }}
                                                </span>
                                            {% endfor %}
                                        {% endfor %}
                                    </div>
                                    <a class=\"more-info\"></a>

                                </div>
                            </div>
                            <div class=\"table-list clearfix\">
                                <h3>Zusammensetzung</h3>
                                <div class=\"properties\">
                                    <span class=\"all prop-value loop-comma\">
                                         {% for componentsActive in components %}
                                             {% for feed_componentsActive in feed_components
                                             if feed_componentsActive.idComponent.id == componentsActive.id %}
                                                       {{ componentsActive.nameComponent }},
                                             {% endfor %}
                                         {% endfor %}
                                    </span>
                                </div>
                            </div>
                        </div>

                        <div class=\"col-sm\">
                            <div class=\"table-list table-details clearfix\">
                                {%  if feed.idDistributor %}
                                    <img src=\"{{ asset('images/content/' ~ feed.idDistributor.nameImage) }}\"
                                     alt=\"{{ feed.idDistributor.nameImage }}\">
                                {% endif %}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{% endblock %}
", "KoiBundle:sites:details.html.twig", "C:\\Users\\David\\Projekte\\Koifutter\\src\\KoiBundle/Resources/views/sites/details.html.twig");
    }
}
