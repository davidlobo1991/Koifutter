<?php

/* @Koi/sites/utils/list.html.twig */
class __TwigTemplate_ed2fbb3b749bd77b1ca5202cf98112837766055c0d11c6590468d72ee08a4394 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'list' => array($this, 'block_list'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b4a544ba757a9a5429abc2282b6390007d7ffaa8173e9d57acf185a62d288bad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4a544ba757a9a5429abc2282b6390007d7ffaa8173e9d57acf185a62d288bad->enter($__internal_b4a544ba757a9a5429abc2282b6390007d7ffaa8173e9d57acf185a62d288bad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Koi/sites/utils/list.html.twig"));

        // line 1
        $this->displayBlock('list', $context, $blocks);
        
        $__internal_b4a544ba757a9a5429abc2282b6390007d7ffaa8173e9d57acf185a62d288bad->leave($__internal_b4a544ba757a9a5429abc2282b6390007d7ffaa8173e9d57acf185a62d288bad_prof);

    }

    public function block_list($context, array $blocks = array())
    {
        $__internal_deb8f97d02142112d9e3875d990dd85f061505ad64cf2e516e8d8b0a5e8b59a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_deb8f97d02142112d9e3875d990dd85f061505ad64cf2e516e8d8b0a5e8b59a0->enter($__internal_deb8f97d02142112d9e3875d990dd85f061505ad64cf2e516e8d8b0a5e8b59a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list"));

        // line 2
        echo "        <form class=\"compare-form\" id=\"compare-form\">
        <div id=\"pagination-list\">
            ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["feed"] ?? $this->getContext($context, "feed")));
        foreach ($context['_seq'] as $context["_key"] => $context["feedActive"]) {
            // line 5
            echo "                <div class=\"table-list row\">
                    <div class=\"table-properties col-bg\">
                        <h3>";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute($context["feedActive"], "nameFeed", array()), "html", null, true);
            echo "</h3>
                        <div class=\"properties-1\">

                            <span class=\"prop-value tooltip\" title=\"Jahreszeit\">
                                <span class=\"icon icon-flower\"></span>
                                <span class=\"loop-comma\">
                                    ";
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["seasons"] ?? $this->getContext($context, "seasons")));
            foreach ($context['_seq'] as $context["_key"] => $context["seasonActive"]) {
                // line 14
                echo "                                        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["feed_seasons"] ?? $this->getContext($context, "feed_seasons")));
                foreach ($context['_seq'] as $context["_key"] => $context["feed_seasonsActive"]) {
                    if ((($this->getAttribute($this->getAttribute(                    // line 15
$context["feed_seasonsActive"], "idFeed", array()), "id", array()) == $this->getAttribute($context["feedActive"], "id", array())) && ($this->getAttribute($this->getAttribute(                    // line 16
$context["feed_seasonsActive"], "idSeason", array()), "id", array()) == $this->getAttribute($context["seasonActive"], "id", array())))) {
                        // line 18
                        echo "                                            ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["seasonActive"], "nameSeason", array()), "html", null, true);
                        echo ",
                                        ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['feed_seasonsActive'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 20
                echo "                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['seasonActive'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "                                </span>
                            </span>


                            ";
            // line 25
            if ($this->getAttribute($context["feedActive"], "waterTemperature", array())) {
                // line 26
                echo "                                <span class=\"prop-value tooltip\" title=\"Temperatur\">
                                    <span class=\"icon icon-thermometer\"></span>
                                    ab ";
                // line 28
                echo twig_escape_filter($this->env, $this->getAttribute($context["feedActive"], "waterTemperature", array()), "html", null, true);
                echo " °
                                </span>
                            ";
            }
            // line 31
            echo "
                            ";
            // line 32
            if (($this->getAttribute($context["feedActive"], "pelletSizeMin", array()) || $this->getAttribute($context["feedActive"], "pelletSizeMax", array()))) {
                // line 33
                echo "                                <span class=\"prop-value tooltip\" title=\"Größe\">
                                    <span class=\"icon icon-ice-crystal\"></span>
                                    ";
                // line 35
                if ($this->getAttribute($context["feedActive"], "pelletSizeMin", array())) {
                    // line 36
                    echo "                                        ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["feedActive"], "pelletSizeMin", array()), "html", null, true);
                    echo " mm
                                    ";
                }
                // line 38
                echo "                                    ";
                if ($this->getAttribute($context["feedActive"], "pelletSizeMax", array())) {
                    // line 39
                    echo "                                        - ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["feedActive"], "pelletSizeMax", array()), "html", null, true);
                    echo " mm
                                    ";
                }
                // line 41
                echo "                                </span>
                            ";
            }
            // line 43
            echo "
                             ";
            // line 44
            if ($this->getAttribute($context["feedActive"], "colorant", array())) {
                // line 45
                echo "                                <span class=\"prop-value tooltip\" title=\"Farbstoff\">
                                    <span class=\"icon icon-brush\"></span>
                                    ";
                // line 47
                echo twig_escape_filter($this->env, $this->getAttribute($context["feedActive"], "colorant", array()), "html", null, true);
                echo "
                                </span>
                             ";
            }
            // line 50
            echo "                        </div>
                        <div class=\"properties-2\">
                            ";
            // line 52
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["elements"] ?? $this->getContext($context, "elements")));
            foreach ($context['_seq'] as $context["_key"] => $context["elementsActive"]) {
                if (($this->getAttribute($context["elementsActive"], "idType", array()) == "1")) {
                    // line 53
                    echo "                                ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["feed_elements"] ?? $this->getContext($context, "feed_elements")));
                    foreach ($context['_seq'] as $context["_key"] => $context["feed_elementsActive"]) {
                        if ((($this->getAttribute($this->getAttribute(                        // line 54
$context["feed_elementsActive"], "idElement", array()), "id", array()) == $this->getAttribute($context["elementsActive"], "id", array())) && ($this->getAttribute($this->getAttribute(                        // line 55
$context["feed_elementsActive"], "idFeed", array()), "id", array()) == $this->getAttribute($context["feedActive"], "id", array())))) {
                            // line 56
                            echo "                                    <span class=\"prop-value\">
                                        <span class=\"prop-title\">";
                            // line 57
                            echo twig_escape_filter($this->env, $this->getAttribute($context["elementsActive"], "nameElement", array()), "html", null, true);
                            echo ":</span>
                                        ";
                            // line 58
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
                    // line 61
                    echo "                            ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['elementsActive'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 62
            echo "                        </div>
                        <div class=\"properties-3\">
                            <span class=\"all prop-value\">
                                <span class=\"prop-title\">Zusatzstoffe und Spurenelemente:</span>
                                <span class=\"loop-comma\">
                                    ";
            // line 67
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["elements"] ?? $this->getContext($context, "elements")));
            foreach ($context['_seq'] as $context["_key"] => $context["elementsActive"]) {
                if (((($this->getAttribute(                // line 68
$context["elementsActive"], "idType", array()) == "2") || ($this->getAttribute(                // line 69
$context["elementsActive"], "idType", array()) == "3")) || ($this->getAttribute(                // line 70
$context["elementsActive"], "idType", array()) == "4"))) {
                    // line 71
                    echo "                                        ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["feed_elements"] ?? $this->getContext($context, "feed_elements")));
                    foreach ($context['_seq'] as $context["_key"] => $context["feed_elementsActive"]) {
                        if ((($this->getAttribute($this->getAttribute(                        // line 72
$context["feed_elementsActive"], "idElement", array()), "id", array()) == $this->getAttribute($context["elementsActive"], "id", array())) && ($this->getAttribute($this->getAttribute(                        // line 73
$context["feed_elementsActive"], "idFeed", array()), "id", array()) == $this->getAttribute($context["feedActive"], "id", array())))) {
                            // line 74
                            echo "                                            ";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["elementsActive"], "nameElement", array()), "html", null, true);
                            echo "
                                            (";
                            // line 75
                            echo twig_escape_filter($this->env, $this->getAttribute($context["feed_elementsActive"], "amount", array()), "html", null, true);
                            echo "
                                            ";
                            // line 76
                            echo twig_escape_filter($this->env, $this->getAttribute($context["elementsActive"], "scaleElement", array()), "html", null, true);
                            echo "),
                                        ";
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['feed_elementsActive'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 78
                    echo "                                    ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['elementsActive'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 79
            echo "                                </span>
                            </span>
                        </div>
                    </div>
                    <div class=\"table-details col-sm\">
                        ";
            // line 84
            if ($this->getAttribute($context["feedActive"], "idDistributor", array())) {
                // line 85
                echo "                            <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("images/content/" . $this->getAttribute($this->getAttribute($context["feedActive"], "idDistributor", array()), "nameImage", array()))), "html", null, true);
                echo "\"
                             alt=\"";
                // line 86
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["feedActive"], "idDistributor", array()), "nameImage", array()), "html", null, true);
                echo "\">
                        ";
            }
            // line 88
            echo "                        <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_details", array("id_feed" => $this->getAttribute($context["feedActive"], "id", array()))), "html", null, true);
            echo "\" class=\"btn-details btn\">
                            Zu den details
                            <span class=\"icon icon-chevron-right\"></span>
                        </a>
                        <div class=\"details-compare\">
                            ";
            // line 93
            $context["checked"] = $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "get", array(0 => ("_idfeed_" . $this->getAttribute($context["feedActive"], "id", array()))), "method");
            // line 94
            echo "                            ";
            if (($context["checked"] ?? $this->getContext($context, "checked"))) {
                // line 95
                echo "                                <input type=\"checkbox\" name=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["feedActive"], "id", array()), "html", null, true);
                echo "\" id=\"feed-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["feedActive"], "id", array()), "html", null, true);
                echo "\" checked=\"checked\">
                                <label for = \"feed-";
                // line 96
                echo twig_escape_filter($this->env, $this->getAttribute($context["feedActive"], "id", array()), "html", null, true);
                echo "\">Vergleichen</label>
                            ";
            } else {
                // line 98
                echo "                                <input type=\"checkbox\" name=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["feedActive"], "id", array()), "html", null, true);
                echo "\" id=\"feed-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["feedActive"], "id", array()), "html", null, true);
                echo "\">
                                <label for = \"feed-";
                // line 99
                echo twig_escape_filter($this->env, $this->getAttribute($context["feedActive"], "id", array()), "html", null, true);
                echo "\">Vergleichen</label>
                            ";
            }
            // line 101
            echo "                        </div>
                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['feedActive'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 105
        echo "        </div>
           <div class=\"navigation\">
                ";
        // line 107
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, ($context["feed"] ?? $this->getContext($context, "feed")));
        echo "
           </div>
            <div class=\"select-num left\">
                <form action=\"";
        // line 110
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("koi_homepage");
        echo "\" method=\"post\">
                    <label for=\"num-feed\">Treffer je Seite:</label>
                    <select id=\"num-feed\" name=\"num_feed\" class=\"select-list\" data-url=\"";
        // line 112
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_sorting");
        echo "\">
                           <option value=\"5\" ";
        // line 113
        echo (((($context["num_per_page"] ?? $this->getContext($context, "num_per_page")) == 5)) ? ("selected") : (""));
        echo ">5</option>
                           <option value=\"10\" ";
        // line 114
        echo (((($context["num_per_page"] ?? $this->getContext($context, "num_per_page")) == 10)) ? ("selected") : (""));
        echo ">10</option>
                           <option value=\"20\" ";
        // line 115
        echo (((($context["num_per_page"] ?? $this->getContext($context, "num_per_page")) == 20)) ? ("selected") : (""));
        echo ">20</option>
                    </select>
                    <span class=\"icon icon-chevron-down\"></span>
                    <input type=\"hidden\" name=\"list-order\" value=\"";
        // line 118
        if ($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "list-order"), "method")) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "list-order"), "method"), "html", null, true);
        } else {
            echo "nameFeed-asc-col";
        }
        echo "\"/>
                    <input type=\"hidden\" class=\"hidden_id_feed\" name=\"id_feed\" value=\"\" />
                </form>
            </div>

            <input id=\"compare-send\" class=\"btn\" type=\"submit\" value=\"Vergleichen\">
    <span class=\"alert\">Mindestens 2 Produkte auswählen</span>
</form>

";
        
        $__internal_deb8f97d02142112d9e3875d990dd85f061505ad64cf2e516e8d8b0a5e8b59a0->leave($__internal_deb8f97d02142112d9e3875d990dd85f061505ad64cf2e516e8d8b0a5e8b59a0_prof);

    }

    public function getTemplateName()
    {
        return "@Koi/sites/utils/list.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  337 => 118,  331 => 115,  327 => 114,  323 => 113,  319 => 112,  314 => 110,  308 => 107,  304 => 105,  295 => 101,  290 => 99,  283 => 98,  278 => 96,  271 => 95,  268 => 94,  266 => 93,  257 => 88,  252 => 86,  247 => 85,  245 => 84,  238 => 79,  231 => 78,  222 => 76,  218 => 75,  213 => 74,  211 => 73,  210 => 72,  205 => 71,  203 => 70,  202 => 69,  201 => 68,  197 => 67,  190 => 62,  183 => 61,  171 => 58,  167 => 57,  164 => 56,  162 => 55,  161 => 54,  156 => 53,  151 => 52,  147 => 50,  141 => 47,  137 => 45,  135 => 44,  132 => 43,  128 => 41,  122 => 39,  119 => 38,  113 => 36,  111 => 35,  107 => 33,  105 => 32,  102 => 31,  96 => 28,  92 => 26,  90 => 25,  84 => 21,  78 => 20,  68 => 18,  66 => 16,  65 => 15,  60 => 14,  56 => 13,  47 => 7,  43 => 5,  39 => 4,  35 => 2,  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block list %}
        <form class=\"compare-form\" id=\"compare-form\">
        <div id=\"pagination-list\">
            {% for feedActive in feed %}
                <div class=\"table-list row\">
                    <div class=\"table-properties col-bg\">
                        <h3>{{ feedActive.nameFeed }}</h3>
                        <div class=\"properties-1\">

                            <span class=\"prop-value tooltip\" title=\"Jahreszeit\">
                                <span class=\"icon icon-flower\"></span>
                                <span class=\"loop-comma\">
                                    {% for seasonActive in seasons %}
                                        {% for feed_seasonsActive in feed_seasons
                                        if feed_seasonsActive.idFeed.id == feedActive.id
                                        and feed_seasonsActive.idSeason.id == seasonActive.id
                                        %}
                                            {{ seasonActive.nameSeason }},
                                        {% endfor %}
                                    {% endfor %}
                                </span>
                            </span>


                            {% if feedActive.waterTemperature %}
                                <span class=\"prop-value tooltip\" title=\"Temperatur\">
                                    <span class=\"icon icon-thermometer\"></span>
                                    ab {{ feedActive.waterTemperature }} °
                                </span>
                            {% endif %}

                            {% if feedActive.pelletSizeMin or feedActive.pelletSizeMax %}
                                <span class=\"prop-value tooltip\" title=\"Größe\">
                                    <span class=\"icon icon-ice-crystal\"></span>
                                    {% if feedActive.pelletSizeMin %}
                                        {{ feedActive.pelletSizeMin }} mm
                                    {% endif %}
                                    {% if feedActive.pelletSizeMax %}
                                        - {{ feedActive.pelletSizeMax }} mm
                                    {% endif %}
                                </span>
                            {% endif %}

                             {% if feedActive.colorant %}
                                <span class=\"prop-value tooltip\" title=\"Farbstoff\">
                                    <span class=\"icon icon-brush\"></span>
                                    {{ feedActive.colorant }}
                                </span>
                             {% endif %}
                        </div>
                        <div class=\"properties-2\">
                            {% for elementsActive in elements if elementsActive.idType == \"1\" %}
                                {% for feed_elementsActive in feed_elements
                                if feed_elementsActive.idElement.id == elementsActive.id
                                and feed_elementsActive.idFeed.id == feedActive.id %}
                                    <span class=\"prop-value\">
                                        <span class=\"prop-title\">{{ elementsActive.nameElement }}:</span>
                                        {{ feed_elementsActive.amount }} {{ elementsActive.scaleElement }}
                                    </span>
                                {% endfor %}
                            {% endfor %}
                        </div>
                        <div class=\"properties-3\">
                            <span class=\"all prop-value\">
                                <span class=\"prop-title\">Zusatzstoffe und Spurenelemente:</span>
                                <span class=\"loop-comma\">
                                    {% for elementsActive in elements
                                    if elementsActive.idType == \"2\"
                                    or elementsActive.idType == \"3\"
                                    or elementsActive.idType == \"4\" %}
                                        {% for feed_elementsActive in feed_elements
                                        if feed_elementsActive.idElement.id == elementsActive.id
                                        and feed_elementsActive.idFeed.id == feedActive.id %}
                                            {{ elementsActive.nameElement }}
                                            ({{ feed_elementsActive.amount }}
                                            {{ elementsActive.scaleElement }}),
                                        {% endfor %}
                                    {% endfor %}
                                </span>
                            </span>
                        </div>
                    </div>
                    <div class=\"table-details col-sm\">
                        {%  if feedActive.idDistributor %}
                            <img src=\"{{ asset('images/content/' ~ feedActive.idDistributor.nameImage) }}\"
                             alt=\"{{ feedActive.idDistributor.nameImage }}\">
                        {% endif %}
                        <a href=\"{{ path('_details', {'id_feed': feedActive.id, }) }}\" class=\"btn-details btn\">
                            Zu den details
                            <span class=\"icon icon-chevron-right\"></span>
                        </a>
                        <div class=\"details-compare\">
                            {% set checked = app.session.get('_idfeed_' ~ feedActive.id)  %}
                            {% if checked %}
                                <input type=\"checkbox\" name=\"{{ feedActive.id }}\" id=\"feed-{{ feedActive.id }}\" checked=\"checked\">
                                <label for = \"feed-{{ feedActive.id }}\">Vergleichen</label>
                            {% else %}
                                <input type=\"checkbox\" name=\"{{ feedActive.id }}\" id=\"feed-{{ feedActive.id }}\">
                                <label for = \"feed-{{ feedActive.id }}\">Vergleichen</label>
                            {% endif %}
                        </div>
                    </div>
                </div>
            {% endfor %}
        </div>
           <div class=\"navigation\">
                {{ knp_pagination_render(feed) }}
           </div>
            <div class=\"select-num left\">
                <form action=\"{{ path('koi_homepage') }}\" method=\"post\">
                    <label for=\"num-feed\">Treffer je Seite:</label>
                    <select id=\"num-feed\" name=\"num_feed\" class=\"select-list\" data-url=\"{{ path('_sorting') }}\">
                           <option value=\"5\" {{  num_per_page == 5 ? 'selected' : '' }}>5</option>
                           <option value=\"10\" {{ num_per_page == 10 ? 'selected' : '' }}>10</option>
                           <option value=\"20\" {{ num_per_page == 20 ? 'selected' : '' }}>20</option>
                    </select>
                    <span class=\"icon icon-chevron-down\"></span>
                    <input type=\"hidden\" name=\"list-order\" value=\"{% if app.request.get('list-order') %}{{ app.request.get('list-order') }}{% else %}nameFeed-asc-col{% endif %}\"/>
                    <input type=\"hidden\" class=\"hidden_id_feed\" name=\"id_feed\" value=\"\" />
                </form>
            </div>

            <input id=\"compare-send\" class=\"btn\" type=\"submit\" value=\"Vergleichen\">
    <span class=\"alert\">Mindestens 2 Produkte auswählen</span>
</form>

{% endblock %}", "@Koi/sites/utils/list.html.twig", "C:\\Users\\David\\Projekte\\Koifutter\\src\\KoiBundle\\Resources\\views\\sites\\utils\\list.html.twig");
    }
}
