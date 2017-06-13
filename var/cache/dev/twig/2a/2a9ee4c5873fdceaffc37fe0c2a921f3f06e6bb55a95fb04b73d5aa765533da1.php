<?php

/* KoiBundle:sites/utils:filter.html.twig */
class __TwigTemplate_1c5e7416e18134955b575fee75139c1490102a127a3cbf72276a4385060b1a21 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'filter' => array($this, 'block_filter'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5c4d5ace551796c95e697c2b5e1789db3fd19eb2ba0e0b4fcd5e00ab178ca909 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c4d5ace551796c95e697c2b5e1789db3fd19eb2ba0e0b4fcd5e00ab178ca909->enter($__internal_5c4d5ace551796c95e697c2b5e1789db3fd19eb2ba0e0b4fcd5e00ab178ca909_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KoiBundle:sites/utils:filter.html.twig"));

        // line 1
        $this->displayBlock('filter', $context, $blocks);
        
        $__internal_5c4d5ace551796c95e697c2b5e1789db3fd19eb2ba0e0b4fcd5e00ab178ca909->leave($__internal_5c4d5ace551796c95e697c2b5e1789db3fd19eb2ba0e0b4fcd5e00ab178ca909_prof);

    }

    public function block_filter($context, array $blocks = array())
    {
        $__internal_27122e42ab571e5d64b15e3a1d9db3f3162ee106e192b3cc1bc7fb65ee787af3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27122e42ab571e5d64b15e3a1d9db3f3162ee106e192b3cc1bc7fb65ee787af3->enter($__internal_27122e42ab571e5d64b15e3a1d9db3f3162ee106e192b3cc1bc7fb65ee787af3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "filter"));

        // line 2
        echo "    <div class=\"filter\">
        <div class=\"container\">
            <button id=\"btn-filter\"  class=\"btn\">
                <span class=\"icon icon-list\"></span>
                <span class=\"text\">Filter</span>
            </button>

            <form  id=\"search\" class=\"search\" action=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_search");
        echo "\" method=\"get\">
                <label for=\"txt-search\"></label>
                <input type=\"text\" class=\"txt-search\" name=\"txt-search\" id=\"txt-search\" placeholder=\"Suche\">
                <input type=\"hidden\" class=\"hidden_num_per_site\" name=\"num_feed\" value=\"";
        // line 12
        echo twig_escape_filter($this->env, ($context["num_per_page"] ?? $this->getContext($context, "num_per_page")), "html", null, true);
        echo "\" />
                <button type=\"submit\" class=\"btn-search\"><span class=\"icon icon-magnifying-glass\"></span></button>
            </form>

            <div class=\"filter-toggle\">
                <form id=\"form-filter\" method=\"get\" action=\"";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_filter");
        echo "\">
                    <div class=\"filter-row tabs\">
                        <ul class=\"filter-menu\">
                            <li><a href=\"#tabs-1\">Analytische Bestandteile</a></li>
                        </ul>

                        <div id=\"tabs-1\" class=\"filter-content row\">
                            <a href=\"#tabs-1\" class=\"accordion-menu mobile\">
                                Analytische Bestandteile
                                <span class=\"icon icon-chevron-down\"></span>
                            </a>
                            <div class=\"accordion-slide\">
                                <div class=\"filter-col col-sm\">
                                    <!-- Name of the elements in the database, therefore name in german -->
                                    <input type=\"hidden\" class=\"filter-min\" name=\"Rohprotein-min\"
                                           value=\"";
        // line 32
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "Rohprotein-min"), "method") <= 70)) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "Rohprotein-min"), "method"), "html", null, true);
        } else {
            echo "0";
        }
        echo "\">
                                    <input type=\"hidden\" class=\"filter-max\" name=\"Rohprotein-max\"
                                           value=\"";
        // line 34
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "Rohprotein-max"), "method") <= 70)) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "Rohprotein-max"), "method"), "html", null, true);
        } else {
            echo "70";
        }
        echo "\">
                                    <span class=\"filter-title\">Rohprotein</span>
                                    <div class=\"slider-range slider-rohprotein\">
                                        <div id=\"rohprotein-range-min\" class=\"range-min ui-slider-handle\"></div>
                                        <span class=\"range-min-txt\">0 %</span>
                                        <div id=\"rohprotein-range-max\" class=\"range-max ui-slider-handle\"></div>
                                        <span class=\"range-max-txt\">70 %</span>
                                    </div>
                                </div>

                                <div class=\"filter-col col-sm\">
                                    <!-- Name of the elements in the database, therefore name in german -->
                                    <input type=\"hidden\" class=\"filter-min\" name=\"Rohfett-min\"
                                           value=\"";
        // line 47
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "Rohfett-min"), "method") <= 30)) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "Rohfett-min"), "method"), "html", null, true);
        } else {
            echo "0";
        }
        echo "\">
                                    <input type=\"hidden\" class=\"filter-max\" name=\"Rohfett-max\"
                                           value=\"";
        // line 49
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "Rohfett-max"), "method") <= 30)) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "Rohfett-max"), "method"), "html", null, true);
        } else {
            echo "30";
        }
        echo "\">
                                    <span class=\"filter-title\">Rohfett</span>
                                    <div class=\"slider-range slider-rohfett\">
                                        <div class=\"range-min ui-slider-handle\"></div>
                                        <span class=\"range-min-txt\">0 %</span>
                                        <div class=\"range-max ui-slider-handle\"></div>
                                        <span class=\"range-max-txt\">30 %</span>
                                    </div>
                                </div>

                                <div class=\"filter-col col-sm\">
                                    <!-- Name of the elements in the database, therefore name in german -->
                                    <input type=\"hidden\" class=\"filter-min\" name=\"Rohfaser-min\"
                                           value=\"";
        // line 62
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "Rohfaser-min"), "method") <= 7)) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "Rohfaser-min"), "method"), "html", null, true);
        } else {
            echo "0";
        }
        echo "\">

                                    <input type=\"hidden\" class=\"filter-max\" name=\"Rohfaser-max\"
                                           value=\"";
        // line 65
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "Rohfaser-max"), "method") <= 7)) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "Rohfaser-max"), "method"), "html", null, true);
        } else {
            echo "7";
        }
        echo "\">
                                    <span class=\"filter-title\">Rohfaser</span>
                                    <div class=\"slider-range slider-rohfaser\">
                                        <div class=\"range-min ui-slider-handle\"></div>
                                        <span class=\"range-min-txt\">0 %</span>
                                        <div class=\"range-max ui-slider-handle\"></div>
                                        <span class=\"range-max-txt\">7 %</span>
                                    </div>
                                </div>
                                <div class=\"filter-col col-sm\">
                                    <!-- Name of the elements in the database, therefore name in german -->
                                    <input type=\"hidden\" class=\"filter-min\" name=\"Rohasche-min\"
                                           value=\"";
        // line 77
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "Rohasche-min"), "method") <= 25)) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "Rohasche-min"), "method"), "html", null, true);
        } else {
            echo "0";
        }
        echo "\">
                                    <input type=\"hidden\" class=\"filter-max\" name=\"Rohasche-max\"
                                           value=\"";
        // line 79
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "Rohasche-max"), "method") <= 25)) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "Rohasche-max"), "method"), "html", null, true);
        } else {
            echo "25";
        }
        echo "\">
                                    <span class=\"filter-title\">Rohasche</span>
                                    <div class=\"slider-range slider-rohasche\">
                                        <div class=\"range-min ui-slider-handle\"></div>
                                        <span class=\"range-min-txt\">0 %</span>
                                        <div class=\"range-max ui-slider-handle\"></div>
                                        <span class=\"range-max-txt\">25 %</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"filter-row tabs\">
                        <ul class=\"filter-menu\">
                            <li><a href=\"#tabs-2\">Zusatzstoffe & Spurenelemente</a></li>
                            <li><a href=\"#tabs-3\">Sonstiges</a></li>
                        </ul>

                        <div id=\"tabs-2\" class=\"filter-content\">
                            <a href=\"#tabs-2\" class=\"accordion-menu mobile\">
                                Zusatzstoffe & Spurenelemente
                                <span class=\"icon icon-chevron-down\"></span>
                            </a>
                            <div class=\"accordion-slide\">
                                <div class=\"row\">
                                    <div class=\"filter-col col-md\">
                                        <span class=\"filter-title\">Jahreszeit</span>
                                        <!-- Attributes of the table feed, therefore name in english -->
                                        <ul class=\"filter-checkbox\">
                                            <li>
                                                ";
        // line 109
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "spring"), "method")) {
            // line 110
            echo "                                                    <input type=\"checkbox\" id=\"season-1\" name=\"spring\" value=\"Frühling\"
                                                    checked=\"checked\">
                                                ";
        } else {
            // line 113
            echo "                                                    <input type=\"checkbox\" id=\"season-1\" name=\"spring\" value=\"Frühling\">
                                                ";
        }
        // line 115
        echo "                                                <label for=\"season-1\">Frühling</label>
                                            </li>

                                            <li>
                                                ";
        // line 119
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "summer"), "method")) {
            // line 120
            echo "                                                    <input type=\"checkbox\" id=\"season-2\" name=\"summer\" value=\"Sommer\"
                                                    checked=\"checked\">
                                                ";
        } else {
            // line 123
            echo "                                                    <input type=\"checkbox\" id=\"season-2\" name=\"summer\" value=\"Sommer\">
                                                ";
        }
        // line 125
        echo "                                                <label for=\"season-2\">Sommer</label>
                                            </li>
                                            <li>
                                                ";
        // line 128
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "autumn"), "method")) {
            // line 129
            echo "                                                    <input type=\"checkbox\" id=\"season-3\" name=\"autumn\" value=\"Herbst\"
                                                    checked=\"checked\">
                                                ";
        } else {
            // line 132
            echo "                                                    <input type=\"checkbox\" id=\"season-3\" name=\"autumn\" value=\"Herbst\">
                                                ";
        }
        // line 134
        echo "                                                <label for=\"season-3\">Herbst</label>
                                            </li>

                                            <li>
                                                ";
        // line 138
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "winter"), "method")) {
            // line 139
            echo "                                                    <input type=\"checkbox\" id=\"season-4\" name=\"winter\" value=\"Winter\"
                                                    checked=\"checked\">
                                                ";
        } else {
            // line 142
            echo "                                                    <input type=\"checkbox\" id=\"season-4\" name=\"winter\" value=\"Winter\">
                                                ";
        }
        // line 144
        echo "
                                                <label for=\"season-4\">Winter</label>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class=\"filter-col col-md\">
                                        <span class=\"filter-title\">Farbstoff</span>
                                        <!-- Attributes of the table feed, therefore name in english -->
                                        <ul class=\"filter-checkbox\">
                                            <li>
                                                ";
        // line 154
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "colorant"), "method") && ($this->getAttribute($this->getAttribute($this->getAttribute(        // line 155
($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "colorant"), "method") == "yes"))) {
            // line 156
            echo "                                                    <input type=\"radio\" id=\"colorant-y\" name=\"colorant\" value=\"yes\"
                                                    checked=\"checked\">
                                               ";
        } else {
            // line 159
            echo "                                                   <input type=\"radio\" id=\"colorant-y\" name=\"colorant\" value=\"yes\">
                                                ";
        }
        // line 161
        echo "                                                <label for=\"colorant-y\">mit Farbstoff</label>
                                            </li>
                                            <li>
                                                ";
        // line 164
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "colorant"), "method") && ($this->getAttribute($this->getAttribute($this->getAttribute(        // line 165
($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "colorant"), "method") == "no"))) {
            // line 166
            echo "                                                    <input type=\"radio\" id=\"colorant-n\" name=\"colorant\" value=\"no\"
                                                    checked=\"checked\">
                                                ";
        } else {
            // line 169
            echo "                                                    <input type=\"radio\" id=\"colorant-n\" name=\"colorant\" value=\"no\">
                                                ";
        }
        // line 171
        echo "                                                <label for=\"colorant-n\">ohne Farbstoff</label>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"filter-col col-sm\">
                                        <!-- Attributes of the table feed, therefore name in english -->
                                        <input type=\"hidden\" class=\"filter-min\" name=\"waterTemperature-min-col\"
                                               value=\"";
        // line 180
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "waterTemperature-min-col"), "method") <= 40)) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "waterTemperature-min-col"), "method"), "html", null, true);
        } else {
            echo "0";
        }
        echo "\">
                                        <input type=\"hidden\" class=\"filter-max\" name=\"waterTemperature-max-col\"
                                               value=\"";
        // line 182
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "waterTemperature-max-col"), "method") <= 40)) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "waterTemperature-max-col"), "method"), "html", null, true);
        } else {
            echo "40";
        }
        echo "\">
                                        <span class=\"filter-title\">Wassertemperatur</span>
                                        <div id=\"slider-temperatur\" class=\"slider-temperatur\">
                                            <div class=\"range-min ui-slider-handle\"></div>
                                            <span class=\"range-min-txt\">0 °</span>
                                            <div class=\"range-max ui-slider-handle\"></div>
                                            <span class=\"range-max-txt\">40 °</span>
                                        </div>
                                        <input type=\"hidden\" id=\"range-min\">
                                    </div>

                                    <div class=\"filter-col col-sm\">
                                        <!-- Attributes of the table feed, therefore name in english -->
                                        <input type=\"hidden\" class=\"filter-min\" name=\"pelletSizeMin-min-col\"
                                               value = \"";
        // line 196
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "pelletSizeMin-min-col"), "method") <= 12)) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "pelletSizeMin-min-col"), "method"), "html", null, true);
        } else {
            echo "0";
        }
        echo "\">
                                        <input type=\"hidden\" class=\"filter-max\" name=\"pelletSizeMax-max-col\"
                                               value = \"";
        // line 198
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "pelletSizeMax-max-col"), "method") <= 12)) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "pelletSizeMax-max-col"), "method"), "html", null, true);
        } else {
            echo "12";
        }
        echo "\">
                                        <span class=\"filter-title\">Pelletgröße</span>
                                        <div id=\"slider-size\" class=\"slider-size\">
                                            <div class=\"range-min ui-slider-handle\"></div>
                                            <span class=\"range-min-txt\">0 mm</span>
                                            <div class=\"range-max ui-slider-handle\"></div>
                                            <span class=\"range-max-txt\">12 mm</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id=\"tabs-3\" class=\"filter-content row\">
                            <a href=\"#tabs-2\" class=\"accordion-menu mobile\">
                                Sonstiges
                                <span class=\"icon icon-chevron-down\"></span>
                            </a>
                            <div class=\"accordion-slide\">
                                <div class=\"filter-col col-md\">
                                    <span class=\"filter-title\">Zusatzstoffe</span>
                                    <ul class=\"filter-checkbox\">
                                        <li>
                                            ";
        // line 221
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "Vitamin_A-check"), "method") && ($this->getAttribute($this->getAttribute($this->getAttribute(        // line 222
($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "Vitamin_A-check"), "method") == "checked"))) {
            // line 223
            echo "                                                <input type=\"checkbox\" id=\"vitamin-1\" name=\"Vitamin_A-check\" value=\"checked\"
                                                checked=\"checked\">
                                            ";
        } else {
            // line 226
            echo "                                                <input type=\"checkbox\" id=\"vitamin-1\" name=\"Vitamin_A-check\" value=\"checked\">
                                            ";
        }
        // line 228
        echo "                                                <label for=\"vitamin-1\">Vitamin A</label>
                                        </li>

                                        <li>
                                            ";
        // line 232
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "Vitamin_D3-check"), "method") && ($this->getAttribute($this->getAttribute($this->getAttribute(        // line 233
($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "Vitamin_D3-check"), "method") == "checked"))) {
            // line 234
            echo "                                                <input type=\"checkbox\" id=\"vitamin-2\" name=\"Vitamin_D3-check\" value=\"checked\"
                                                checked=\"checked\">
                                            ";
        } else {
            // line 237
            echo "                                                <input type=\"checkbox\" id=\"vitamin-2\" name=\"Vitamin_D3-check\" value=\"checked\">
                                            ";
        }
        // line 239
        echo "                                                <label for=\"vitamin-2\">Vitamin D3</label>
                                            </li>

                                        <li>
                                            ";
        // line 243
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "Vitamin_E-check"), "method") && ($this->getAttribute($this->getAttribute($this->getAttribute(        // line 244
($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "Vitamin_E-check"), "method") == "checked"))) {
            // line 245
            echo "                                                <input type=\"checkbox\" id=\"vitamin-3\" name=\"Vitamin_E-check\" value=\"checked\"
                                                checked=\"checked\">
                                            ";
        } else {
            // line 248
            echo "                                                <input type=\"checkbox\" id=\"vitamin-3\" name=\"Vitamin_E-check\" value=\"checked\">
                                            ";
        }
        // line 250
        echo "                                                <label for=\"vitamin-3\">Vitamin E</label>
                                        </li>

                                        <li>
                                            ";
        // line 254
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "Vitamin_C-check"), "method") && ($this->getAttribute($this->getAttribute($this->getAttribute(        // line 255
($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "Vitamin_C-check"), "method") == "checked"))) {
            // line 256
            echo "                                                <input type=\"checkbox\" id=\"vitamin-4\" name=\"Vitamin_C-check\" value=\"checked\"
                                                checked=\"checked\">
                                            ";
        } else {
            // line 259
            echo "                                                <input type=\"checkbox\" id=\"vitamin-4\" name=\"Vitamin_C-check\" value=\"checked\">
                                            ";
        }
        // line 261
        echo "                                            <label for=\"vitamin-4\">Vitamin C</label>
                                        </li>

                                        <li>
                                            ";
        // line 265
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "Vitamin_B1-check"), "method") && ($this->getAttribute($this->getAttribute($this->getAttribute(        // line 266
($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "Vitamin_B1-check"), "method") == "checked"))) {
            // line 267
            echo "                                                <input type=\"checkbox\" id=\"vitamin-5\" name=\"Vitamin_B1-check\" value=\"checked\"
                                                checked=\"checked\">
                                            ";
        } else {
            // line 270
            echo "                                                <input type=\"checkbox\" id=\"vitamin-5\" name=\"Vitamin_B1-check\" value=\"checked\">
                                            ";
        }
        // line 272
        echo "                                            <label for=\"vitamin-5\">Vitamin B1</label>
                                        </li>

                                        <li>
                                            ";
        // line 276
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "Vitamin_B2-check"), "method") && ($this->getAttribute($this->getAttribute($this->getAttribute(        // line 277
($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "Vitamin_B2-check"), "method") == "checked"))) {
            // line 278
            echo "                                                <input type=\"checkbox\" id=\"vitamin-6\" name=\"Vitamin_B2-check\" value=\"checked\"
                                                checked=\"checked\">
                                            ";
        } else {
            // line 281
            echo "                                                <input type=\"checkbox\" id=\"vitamin-6\" name=\"Vitamin_B2-check\" value=\"checked\">
                                            ";
        }
        // line 283
        echo "                                            <label for=\"vitamin-6\">Vitamin B2</label>
                                        </li>
                                    </ul>
                                </div>
                                <div class=\"filter-col col-md\">
                                    <span class=\"filter-title\">Spurenelemente</span>
                                    <ul class=\"filter-checkbox\">
                                        <li>
                                            ";
        // line 291
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "E1_Eisen-check"), "method") && ($this->getAttribute($this->getAttribute($this->getAttribute(        // line 292
($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "E1_Eisen-check"), "method") == "checked"))) {
            // line 293
            echo "                                                <input type=\"checkbox\" id=\"trace-1\" name=\"E1_Eisen-check\" value=\"checked\"
                                                checked=\"checked\">
                                            ";
        } else {
            // line 296
            echo "                                                <input type=\"checkbox\" id=\"trace-1\" name=\"E1_Eisen-check\" value=\"checked\">
                                            ";
        }
        // line 298
        echo "                                            <label for=\"trace-1\">Eisen</label>
                                        </li>

                                        <li>
                                            ";
        // line 302
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "E2_Jod-check"), "method") && ($this->getAttribute($this->getAttribute($this->getAttribute(        // line 303
($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "E2_Jod-check"), "method") == "checked"))) {
            // line 304
            echo "                                                <input type=\"checkbox\" id=\"trace-2\" name=\"E2_Jod-check\" value=\"checked\"
                                                checked=\"checked\">
                                            ";
        } else {
            // line 307
            echo "                                                <input type=\"checkbox\" id=\"trace-2\" name=\"E2_Jod-check\" value=\"checked\">
                                            ";
        }
        // line 309
        echo "                                            <label for=\"trace-2\">Jod</label>
                                        </li>

                                        <li>
                                            ";
        // line 313
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "E3_Kobald-check"), "method") && ($this->getAttribute($this->getAttribute($this->getAttribute(        // line 314
($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "E3_Kobald-check"), "method") == "checked"))) {
            // line 315
            echo "                                                <input type=\"checkbox\" id=\"trace-3\" name=\"E3_Kobald-check\" value=\"checked\"
                                                checked=\"checked\">
                                            ";
        } else {
            // line 318
            echo "                                                <input type=\"checkbox\" id=\"trace-3\" name=\"E3_Kobald-check\" value=\"checked\">
                                            ";
        }
        // line 320
        echo "                                            <label for=\"trace-3\">Kobald</label>
                                        </li>

                                        <li>
                                            ";
        // line 324
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "E4_Kupfer-check"), "method") && ($this->getAttribute($this->getAttribute($this->getAttribute(        // line 325
($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "E4_Kupfer-check"), "method") == "checked"))) {
            // line 326
            echo "                                                <input type=\"checkbox\" id=\"trace-4\" name=\"E4_Kupfer-check\" value=\"checked\"
                                                checked=\"checked\">
                                            ";
        } else {
            // line 329
            echo "                                                <input type=\"checkbox\" id=\"trace-4\" name=\"E4_Kupfer-check\" value=\"checked\">
                                            ";
        }
        // line 331
        echo "                                            <label for=\"trace-4\">Kupfer</label>
                                        </li>

                                        <li>
                                            ";
        // line 335
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "E5_Mangan-check"), "method") && ($this->getAttribute($this->getAttribute($this->getAttribute(        // line 336
($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "E5_Mangan-check"), "method") == "checked"))) {
            // line 337
            echo "                                                <input type=\"checkbox\" id=\"trace-5\" name=\"E5_Mangan-check\" value=\"checked\"
                                                checked=\"checked\">
                                            ";
        } else {
            // line 340
            echo "                                                <input type=\"checkbox\" id=\"trace-5\" name=\"E5_Mangan-check\" value=\"checked\">
                                            ";
        }
        // line 342
        echo "                                            <label for=\"trace-5\">Mangan</label>
                                        </li>
                                        <li>
                                            ";
        // line 345
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "E6_Zink-check"), "method") && ($this->getAttribute($this->getAttribute($this->getAttribute(        // line 346
($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "E6_Zink-check"), "method") == "checked"))) {
            // line 347
            echo "                                                <input type=\"checkbox\" id=\"trace-6\" name=\"E6_Zink-check\" value=\"checked\"
                                                checked=\"checked\">
                                            ";
        } else {
            // line 350
            echo "                                                <input type=\"checkbox\" id=\"trace-6\" name=\"E6_Zink-check\" value=\"checked\">
                                            ";
        }
        // line 352
        echo "                                            <label for=\"trace-6\">Zink</label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <input type=\"hidden\" class=\"hidden_num_per_site\" name=\"num_feed\" value=\"";
        // line 359
        echo twig_escape_filter($this->env, ($context["num_per_page"] ?? $this->getContext($context, "num_per_page")), "html", null, true);
        echo "\" />
                    <div class=\"filter-submit\">
                        <input type=\"reset\" class=\"reset\" value=\"Zurücksetzen\">
                        <button class=\"btn btn-filter-submit\" type=\"submit\">Anwenden</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
";
        
        $__internal_27122e42ab571e5d64b15e3a1d9db3f3162ee106e192b3cc1bc7fb65ee787af3->leave($__internal_27122e42ab571e5d64b15e3a1d9db3f3162ee106e192b3cc1bc7fb65ee787af3_prof);

    }

    public function getTemplateName()
    {
        return "KoiBundle:sites/utils:filter.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  613 => 359,  604 => 352,  600 => 350,  595 => 347,  593 => 346,  592 => 345,  587 => 342,  583 => 340,  578 => 337,  576 => 336,  575 => 335,  569 => 331,  565 => 329,  560 => 326,  558 => 325,  557 => 324,  551 => 320,  547 => 318,  542 => 315,  540 => 314,  539 => 313,  533 => 309,  529 => 307,  524 => 304,  522 => 303,  521 => 302,  515 => 298,  511 => 296,  506 => 293,  504 => 292,  503 => 291,  493 => 283,  489 => 281,  484 => 278,  482 => 277,  481 => 276,  475 => 272,  471 => 270,  466 => 267,  464 => 266,  463 => 265,  457 => 261,  453 => 259,  448 => 256,  446 => 255,  445 => 254,  439 => 250,  435 => 248,  430 => 245,  428 => 244,  427 => 243,  421 => 239,  417 => 237,  412 => 234,  410 => 233,  409 => 232,  403 => 228,  399 => 226,  394 => 223,  392 => 222,  391 => 221,  361 => 198,  352 => 196,  331 => 182,  322 => 180,  311 => 171,  307 => 169,  302 => 166,  300 => 165,  299 => 164,  294 => 161,  290 => 159,  285 => 156,  283 => 155,  282 => 154,  270 => 144,  266 => 142,  261 => 139,  259 => 138,  253 => 134,  249 => 132,  244 => 129,  242 => 128,  237 => 125,  233 => 123,  228 => 120,  226 => 119,  220 => 115,  216 => 113,  211 => 110,  209 => 109,  172 => 79,  163 => 77,  144 => 65,  134 => 62,  114 => 49,  105 => 47,  85 => 34,  76 => 32,  58 => 17,  50 => 12,  44 => 9,  35 => 2,  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block filter %}
    <div class=\"filter\">
        <div class=\"container\">
            <button id=\"btn-filter\"  class=\"btn\">
                <span class=\"icon icon-list\"></span>
                <span class=\"text\">Filter</span>
            </button>

            <form  id=\"search\" class=\"search\" action=\"{{ path('_search') }}\" method=\"get\">
                <label for=\"txt-search\"></label>
                <input type=\"text\" class=\"txt-search\" name=\"txt-search\" id=\"txt-search\" placeholder=\"Suche\">
                <input type=\"hidden\" class=\"hidden_num_per_site\" name=\"num_feed\" value=\"{{ num_per_page }}\" />
                <button type=\"submit\" class=\"btn-search\"><span class=\"icon icon-magnifying-glass\"></span></button>
            </form>

            <div class=\"filter-toggle\">
                <form id=\"form-filter\" method=\"get\" action=\"{{ path('_filter') }}\">
                    <div class=\"filter-row tabs\">
                        <ul class=\"filter-menu\">
                            <li><a href=\"#tabs-1\">Analytische Bestandteile</a></li>
                        </ul>

                        <div id=\"tabs-1\" class=\"filter-content row\">
                            <a href=\"#tabs-1\" class=\"accordion-menu mobile\">
                                Analytische Bestandteile
                                <span class=\"icon icon-chevron-down\"></span>
                            </a>
                            <div class=\"accordion-slide\">
                                <div class=\"filter-col col-sm\">
                                    <!-- Name of the elements in the database, therefore name in german -->
                                    <input type=\"hidden\" class=\"filter-min\" name=\"Rohprotein-min\"
                                           value=\"{% if app.request.query.get('Rohprotein-min') <= 70  %}{{ app.request.query.get('Rohprotein-min') }}{% else %}0{% endif %}\">
                                    <input type=\"hidden\" class=\"filter-max\" name=\"Rohprotein-max\"
                                           value=\"{% if app.request.query.get('Rohprotein-max') <= 70  %}{{ app.request.query.get('Rohprotein-max') }}{% else %}70{% endif %}\">
                                    <span class=\"filter-title\">Rohprotein</span>
                                    <div class=\"slider-range slider-rohprotein\">
                                        <div id=\"rohprotein-range-min\" class=\"range-min ui-slider-handle\"></div>
                                        <span class=\"range-min-txt\">0 %</span>
                                        <div id=\"rohprotein-range-max\" class=\"range-max ui-slider-handle\"></div>
                                        <span class=\"range-max-txt\">70 %</span>
                                    </div>
                                </div>

                                <div class=\"filter-col col-sm\">
                                    <!-- Name of the elements in the database, therefore name in german -->
                                    <input type=\"hidden\" class=\"filter-min\" name=\"Rohfett-min\"
                                           value=\"{% if app.request.query.get('Rohfett-min') <= 30  %}{{ app.request.query.get('Rohfett-min') }}{% else %}0{% endif %}\">
                                    <input type=\"hidden\" class=\"filter-max\" name=\"Rohfett-max\"
                                           value=\"{% if app.request.query.get('Rohfett-max') <= 30  %}{{ app.request.query.get('Rohfett-max') }}{% else %}30{% endif %}\">
                                    <span class=\"filter-title\">Rohfett</span>
                                    <div class=\"slider-range slider-rohfett\">
                                        <div class=\"range-min ui-slider-handle\"></div>
                                        <span class=\"range-min-txt\">0 %</span>
                                        <div class=\"range-max ui-slider-handle\"></div>
                                        <span class=\"range-max-txt\">30 %</span>
                                    </div>
                                </div>

                                <div class=\"filter-col col-sm\">
                                    <!-- Name of the elements in the database, therefore name in german -->
                                    <input type=\"hidden\" class=\"filter-min\" name=\"Rohfaser-min\"
                                           value=\"{% if app.request.query.get('Rohfaser-min') <= 7  %}{{ app.request.query.get('Rohfaser-min') }}{% else %}0{% endif %}\">

                                    <input type=\"hidden\" class=\"filter-max\" name=\"Rohfaser-max\"
                                           value=\"{% if app.request.query.get('Rohfaser-max') <= 7  %}{{ app.request.query.get('Rohfaser-max') }}{% else %}7{% endif %}\">
                                    <span class=\"filter-title\">Rohfaser</span>
                                    <div class=\"slider-range slider-rohfaser\">
                                        <div class=\"range-min ui-slider-handle\"></div>
                                        <span class=\"range-min-txt\">0 %</span>
                                        <div class=\"range-max ui-slider-handle\"></div>
                                        <span class=\"range-max-txt\">7 %</span>
                                    </div>
                                </div>
                                <div class=\"filter-col col-sm\">
                                    <!-- Name of the elements in the database, therefore name in german -->
                                    <input type=\"hidden\" class=\"filter-min\" name=\"Rohasche-min\"
                                           value=\"{% if app.request.query.get('Rohasche-min') <= 25  %}{{ app.request.query.get('Rohasche-min') }}{% else %}0{% endif %}\">
                                    <input type=\"hidden\" class=\"filter-max\" name=\"Rohasche-max\"
                                           value=\"{% if app.request.query.get('Rohasche-max') <= 25  %}{{ app.request.query.get('Rohasche-max') }}{% else %}25{% endif %}\">
                                    <span class=\"filter-title\">Rohasche</span>
                                    <div class=\"slider-range slider-rohasche\">
                                        <div class=\"range-min ui-slider-handle\"></div>
                                        <span class=\"range-min-txt\">0 %</span>
                                        <div class=\"range-max ui-slider-handle\"></div>
                                        <span class=\"range-max-txt\">25 %</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"filter-row tabs\">
                        <ul class=\"filter-menu\">
                            <li><a href=\"#tabs-2\">Zusatzstoffe & Spurenelemente</a></li>
                            <li><a href=\"#tabs-3\">Sonstiges</a></li>
                        </ul>

                        <div id=\"tabs-2\" class=\"filter-content\">
                            <a href=\"#tabs-2\" class=\"accordion-menu mobile\">
                                Zusatzstoffe & Spurenelemente
                                <span class=\"icon icon-chevron-down\"></span>
                            </a>
                            <div class=\"accordion-slide\">
                                <div class=\"row\">
                                    <div class=\"filter-col col-md\">
                                        <span class=\"filter-title\">Jahreszeit</span>
                                        <!-- Attributes of the table feed, therefore name in english -->
                                        <ul class=\"filter-checkbox\">
                                            <li>
                                                {% if app.request.query.get('spring') %}
                                                    <input type=\"checkbox\" id=\"season-1\" name=\"spring\" value=\"Frühling\"
                                                    checked=\"checked\">
                                                {% else %}
                                                    <input type=\"checkbox\" id=\"season-1\" name=\"spring\" value=\"Frühling\">
                                                {% endif %}
                                                <label for=\"season-1\">Frühling</label>
                                            </li>

                                            <li>
                                                {% if app.request.query.get('summer') %}
                                                    <input type=\"checkbox\" id=\"season-2\" name=\"summer\" value=\"Sommer\"
                                                    checked=\"checked\">
                                                {% else %}
                                                    <input type=\"checkbox\" id=\"season-2\" name=\"summer\" value=\"Sommer\">
                                                {% endif %}
                                                <label for=\"season-2\">Sommer</label>
                                            </li>
                                            <li>
                                                {% if app.request.query.get('autumn') %}
                                                    <input type=\"checkbox\" id=\"season-3\" name=\"autumn\" value=\"Herbst\"
                                                    checked=\"checked\">
                                                {% else %}
                                                    <input type=\"checkbox\" id=\"season-3\" name=\"autumn\" value=\"Herbst\">
                                                {% endif %}
                                                <label for=\"season-3\">Herbst</label>
                                            </li>

                                            <li>
                                                {% if app.request.query.get('winter') %}
                                                    <input type=\"checkbox\" id=\"season-4\" name=\"winter\" value=\"Winter\"
                                                    checked=\"checked\">
                                                {% else %}
                                                    <input type=\"checkbox\" id=\"season-4\" name=\"winter\" value=\"Winter\">
                                                {% endif %}

                                                <label for=\"season-4\">Winter</label>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class=\"filter-col col-md\">
                                        <span class=\"filter-title\">Farbstoff</span>
                                        <!-- Attributes of the table feed, therefore name in english -->
                                        <ul class=\"filter-checkbox\">
                                            <li>
                                                {% if app.request.query.get('colorant') and
                                                app.request.query.get('colorant') == \"yes\" %}
                                                    <input type=\"radio\" id=\"colorant-y\" name=\"colorant\" value=\"yes\"
                                                    checked=\"checked\">
                                               {% else %}
                                                   <input type=\"radio\" id=\"colorant-y\" name=\"colorant\" value=\"yes\">
                                                {% endif %}
                                                <label for=\"colorant-y\">mit Farbstoff</label>
                                            </li>
                                            <li>
                                                {% if app.request.query.get('colorant') and
                                                app.request.query.get('colorant') == \"no\" %}
                                                    <input type=\"radio\" id=\"colorant-n\" name=\"colorant\" value=\"no\"
                                                    checked=\"checked\">
                                                {% else %}
                                                    <input type=\"radio\" id=\"colorant-n\" name=\"colorant\" value=\"no\">
                                                {% endif %}
                                                <label for=\"colorant-n\">ohne Farbstoff</label>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"filter-col col-sm\">
                                        <!-- Attributes of the table feed, therefore name in english -->
                                        <input type=\"hidden\" class=\"filter-min\" name=\"waterTemperature-min-col\"
                                               value=\"{% if app.request.query.get('waterTemperature-min-col') <= 40  %}{{ app.request.query.get('waterTemperature-min-col') }}{% else %}0{% endif %}\">
                                        <input type=\"hidden\" class=\"filter-max\" name=\"waterTemperature-max-col\"
                                               value=\"{% if app.request.query.get('waterTemperature-max-col') <= 40  %}{{ app.request.query.get('waterTemperature-max-col') }}{% else %}40{% endif %}\">
                                        <span class=\"filter-title\">Wassertemperatur</span>
                                        <div id=\"slider-temperatur\" class=\"slider-temperatur\">
                                            <div class=\"range-min ui-slider-handle\"></div>
                                            <span class=\"range-min-txt\">0 °</span>
                                            <div class=\"range-max ui-slider-handle\"></div>
                                            <span class=\"range-max-txt\">40 °</span>
                                        </div>
                                        <input type=\"hidden\" id=\"range-min\">
                                    </div>

                                    <div class=\"filter-col col-sm\">
                                        <!-- Attributes of the table feed, therefore name in english -->
                                        <input type=\"hidden\" class=\"filter-min\" name=\"pelletSizeMin-min-col\"
                                               value = \"{% if app.request.query.get('pelletSizeMin-min-col') <= 12  %}{{ app.request.query.get('pelletSizeMin-min-col') }}{% else %}0{% endif %}\">
                                        <input type=\"hidden\" class=\"filter-max\" name=\"pelletSizeMax-max-col\"
                                               value = \"{% if app.request.query.get('pelletSizeMax-max-col') <= 12 %}{{ app.request.query.get('pelletSizeMax-max-col') }}{% else %}12{% endif %}\">
                                        <span class=\"filter-title\">Pelletgröße</span>
                                        <div id=\"slider-size\" class=\"slider-size\">
                                            <div class=\"range-min ui-slider-handle\"></div>
                                            <span class=\"range-min-txt\">0 mm</span>
                                            <div class=\"range-max ui-slider-handle\"></div>
                                            <span class=\"range-max-txt\">12 mm</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id=\"tabs-3\" class=\"filter-content row\">
                            <a href=\"#tabs-2\" class=\"accordion-menu mobile\">
                                Sonstiges
                                <span class=\"icon icon-chevron-down\"></span>
                            </a>
                            <div class=\"accordion-slide\">
                                <div class=\"filter-col col-md\">
                                    <span class=\"filter-title\">Zusatzstoffe</span>
                                    <ul class=\"filter-checkbox\">
                                        <li>
                                            {% if app.request.query.get('Vitamin_A-check') and
                                            app.request.query.get('Vitamin_A-check') == \"checked\" %}
                                                <input type=\"checkbox\" id=\"vitamin-1\" name=\"Vitamin_A-check\" value=\"checked\"
                                                checked=\"checked\">
                                            {% else %}
                                                <input type=\"checkbox\" id=\"vitamin-1\" name=\"Vitamin_A-check\" value=\"checked\">
                                            {% endif %}
                                                <label for=\"vitamin-1\">Vitamin A</label>
                                        </li>

                                        <li>
                                            {% if app.request.query.get('Vitamin_D3-check') and
                                            app.request.query.get('Vitamin_D3-check') == \"checked\" %}
                                                <input type=\"checkbox\" id=\"vitamin-2\" name=\"Vitamin_D3-check\" value=\"checked\"
                                                checked=\"checked\">
                                            {% else %}
                                                <input type=\"checkbox\" id=\"vitamin-2\" name=\"Vitamin_D3-check\" value=\"checked\">
                                            {% endif %}
                                                <label for=\"vitamin-2\">Vitamin D3</label>
                                            </li>

                                        <li>
                                            {% if app.request.query.get('Vitamin_E-check') and
                                            app.request.query.get('Vitamin_E-check') == \"checked\" %}
                                                <input type=\"checkbox\" id=\"vitamin-3\" name=\"Vitamin_E-check\" value=\"checked\"
                                                checked=\"checked\">
                                            {% else %}
                                                <input type=\"checkbox\" id=\"vitamin-3\" name=\"Vitamin_E-check\" value=\"checked\">
                                            {% endif %}
                                                <label for=\"vitamin-3\">Vitamin E</label>
                                        </li>

                                        <li>
                                            {% if app.request.query.get('Vitamin_C-check') and
                                            app.request.query.get('Vitamin_C-check') == \"checked\" %}
                                                <input type=\"checkbox\" id=\"vitamin-4\" name=\"Vitamin_C-check\" value=\"checked\"
                                                checked=\"checked\">
                                            {% else %}
                                                <input type=\"checkbox\" id=\"vitamin-4\" name=\"Vitamin_C-check\" value=\"checked\">
                                            {% endif %}
                                            <label for=\"vitamin-4\">Vitamin C</label>
                                        </li>

                                        <li>
                                            {% if app.request.query.get('Vitamin_B1-check') and
                                            app.request.query.get('Vitamin_B1-check') == \"checked\" %}
                                                <input type=\"checkbox\" id=\"vitamin-5\" name=\"Vitamin_B1-check\" value=\"checked\"
                                                checked=\"checked\">
                                            {% else %}
                                                <input type=\"checkbox\" id=\"vitamin-5\" name=\"Vitamin_B1-check\" value=\"checked\">
                                            {% endif %}
                                            <label for=\"vitamin-5\">Vitamin B1</label>
                                        </li>

                                        <li>
                                            {% if app.request.query.get('Vitamin_B2-check') and
                                            app.request.query.get('Vitamin_B2-check') == \"checked\" %}
                                                <input type=\"checkbox\" id=\"vitamin-6\" name=\"Vitamin_B2-check\" value=\"checked\"
                                                checked=\"checked\">
                                            {% else %}
                                                <input type=\"checkbox\" id=\"vitamin-6\" name=\"Vitamin_B2-check\" value=\"checked\">
                                            {% endif %}
                                            <label for=\"vitamin-6\">Vitamin B2</label>
                                        </li>
                                    </ul>
                                </div>
                                <div class=\"filter-col col-md\">
                                    <span class=\"filter-title\">Spurenelemente</span>
                                    <ul class=\"filter-checkbox\">
                                        <li>
                                            {% if app.request.query.get('E1_Eisen-check') and
                                            app.request.query.get('E1_Eisen-check') == \"checked\" %}
                                                <input type=\"checkbox\" id=\"trace-1\" name=\"E1_Eisen-check\" value=\"checked\"
                                                checked=\"checked\">
                                            {% else %}
                                                <input type=\"checkbox\" id=\"trace-1\" name=\"E1_Eisen-check\" value=\"checked\">
                                            {% endif %}
                                            <label for=\"trace-1\">Eisen</label>
                                        </li>

                                        <li>
                                            {% if app.request.query.get('E2_Jod-check') and
                                            app.request.query.get('E2_Jod-check') == \"checked\" %}
                                                <input type=\"checkbox\" id=\"trace-2\" name=\"E2_Jod-check\" value=\"checked\"
                                                checked=\"checked\">
                                            {% else %}
                                                <input type=\"checkbox\" id=\"trace-2\" name=\"E2_Jod-check\" value=\"checked\">
                                            {% endif %}
                                            <label for=\"trace-2\">Jod</label>
                                        </li>

                                        <li>
                                            {% if app.request.query.get('E3_Kobald-check') and
                                            app.request.query.get('E3_Kobald-check') == \"checked\" %}
                                                <input type=\"checkbox\" id=\"trace-3\" name=\"E3_Kobald-check\" value=\"checked\"
                                                checked=\"checked\">
                                            {% else %}
                                                <input type=\"checkbox\" id=\"trace-3\" name=\"E3_Kobald-check\" value=\"checked\">
                                            {% endif %}
                                            <label for=\"trace-3\">Kobald</label>
                                        </li>

                                        <li>
                                            {% if app.request.query.get('E4_Kupfer-check') and
                                            app.request.query.get('E4_Kupfer-check') == \"checked\" %}
                                                <input type=\"checkbox\" id=\"trace-4\" name=\"E4_Kupfer-check\" value=\"checked\"
                                                checked=\"checked\">
                                            {% else %}
                                                <input type=\"checkbox\" id=\"trace-4\" name=\"E4_Kupfer-check\" value=\"checked\">
                                            {% endif %}
                                            <label for=\"trace-4\">Kupfer</label>
                                        </li>

                                        <li>
                                            {% if app.request.query.get('E5_Mangan-check') and
                                            app.request.query.get('E5_Mangan-check') == \"checked\" %}
                                                <input type=\"checkbox\" id=\"trace-5\" name=\"E5_Mangan-check\" value=\"checked\"
                                                checked=\"checked\">
                                            {% else %}
                                                <input type=\"checkbox\" id=\"trace-5\" name=\"E5_Mangan-check\" value=\"checked\">
                                            {% endif %}
                                            <label for=\"trace-5\">Mangan</label>
                                        </li>
                                        <li>
                                            {% if app.request.query.get('E6_Zink-check') and
                                            app.request.query.get('E6_Zink-check') == \"checked\" %}
                                                <input type=\"checkbox\" id=\"trace-6\" name=\"E6_Zink-check\" value=\"checked\"
                                                checked=\"checked\">
                                            {% else %}
                                                <input type=\"checkbox\" id=\"trace-6\" name=\"E6_Zink-check\" value=\"checked\">
                                            {% endif %}
                                            <label for=\"trace-6\">Zink</label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <input type=\"hidden\" class=\"hidden_num_per_site\" name=\"num_feed\" value=\"{{ num_per_page }}\" />
                    <div class=\"filter-submit\">
                        <input type=\"reset\" class=\"reset\" value=\"Zurücksetzen\">
                        <button class=\"btn btn-filter-submit\" type=\"submit\">Anwenden</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
{% endblock %}", "KoiBundle:sites/utils:filter.html.twig", "C:\\Users\\David\\Projekte\\Koifutter\\src\\KoiBundle\\Resources\\views\\sites\\utils\\filter.html.twig");
    }
}
