<?php

/* @Koi/sites/utils/list.html.twig */
class __TwigTemplate_276be666fb831beb1cfeee1709ef9232d55f150578392f7c55993672f61475a8 extends Twig_Template
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
        // line 1
        $this->displayBlock('list', $context, $blocks);
    }

    public function block_list($context, array $blocks = array())
    {
        // line 2
        echo "        <form class=\"compare-form\" id=\"compare-form\">
        <div id=\"pagination-list\">
            ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["feed"] ?? null));
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
            $context['_seq'] = twig_ensure_traversable(($context["seasons"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["seasonActive"]) {
                // line 14
                echo "                                        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["feed_seasons"] ?? null));
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
            $context['_seq'] = twig_ensure_traversable(($context["elements"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["elementsActive"]) {
                if (($this->getAttribute($context["elementsActive"], "idType", array()) == "1")) {
                    // line 53
                    echo "                                ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["feed_elements"] ?? null));
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
            $context['_seq'] = twig_ensure_traversable(($context["elements"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["elementsActive"]) {
                if (((($this->getAttribute(                // line 68
$context["elementsActive"], "idType", array()) == "2") || ($this->getAttribute(                // line 69
$context["elementsActive"], "idType", array()) == "3")) || ($this->getAttribute(                // line 70
$context["elementsActive"], "idType", array()) == "4"))) {
                    // line 71
                    echo "                                        ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["feed_elements"] ?? null));
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
            $context["checked"] = $this->getAttribute($this->getAttribute(($context["app"] ?? null), "session", array()), "get", array(0 => ("_idfeed_" . $this->getAttribute($context["feedActive"], "id", array()))), "method");
            // line 94
            echo "                            ";
            if (($context["checked"] ?? null)) {
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
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, ($context["feed"] ?? null));
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
        echo (((($context["num_per_page"] ?? null) == 5)) ? ("selected") : (""));
        echo ">5</option>
                           <option value=\"10\" ";
        // line 114
        echo (((($context["num_per_page"] ?? null) == 10)) ? ("selected") : (""));
        echo ">10</option>
                           <option value=\"20\" ";
        // line 115
        echo (((($context["num_per_page"] ?? null) == 20)) ? ("selected") : (""));
        echo ">20</option>
                    </select>
                    <span class=\"icon icon-chevron-down\"></span>
                    <input type=\"hidden\" name=\"list-order\" value=\"";
        // line 118
        if ($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "get", array(0 => "list-order"), "method")) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "get", array(0 => "list-order"), "method"), "html", null, true);
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
    }

    public function getTemplateName()
    {
        return "@Koi/sites/utils/list.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  328 => 118,  322 => 115,  318 => 114,  314 => 113,  310 => 112,  305 => 110,  299 => 107,  295 => 105,  286 => 101,  281 => 99,  274 => 98,  269 => 96,  262 => 95,  259 => 94,  257 => 93,  248 => 88,  243 => 86,  238 => 85,  236 => 84,  229 => 79,  222 => 78,  213 => 76,  209 => 75,  204 => 74,  202 => 73,  201 => 72,  196 => 71,  194 => 70,  193 => 69,  192 => 68,  188 => 67,  181 => 62,  174 => 61,  162 => 58,  158 => 57,  155 => 56,  153 => 55,  152 => 54,  147 => 53,  142 => 52,  138 => 50,  132 => 47,  128 => 45,  126 => 44,  123 => 43,  119 => 41,  113 => 39,  110 => 38,  104 => 36,  102 => 35,  98 => 33,  96 => 32,  93 => 31,  87 => 28,  83 => 26,  81 => 25,  75 => 21,  69 => 20,  59 => 18,  57 => 16,  56 => 15,  51 => 14,  47 => 13,  38 => 7,  34 => 5,  30 => 4,  26 => 2,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Koi/sites/utils/list.html.twig", "C:\\Users\\David\\Projekte\\Koifutter\\src\\KoiBundle\\Resources\\views\\sites\\utils\\list.html.twig");
    }
}
