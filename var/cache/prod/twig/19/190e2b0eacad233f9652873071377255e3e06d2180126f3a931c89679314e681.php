<?php

/* KoiBundle:sites/utils:filter.html.twig */
class __TwigTemplate_34dfe46adc070ce69c9d19d5e14b428af77741c7d9176e2925cc1dd5af86bc4d extends Twig_Template
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
        // line 1
        $this->displayBlock('filter', $context, $blocks);
    }

    public function block_filter($context, array $blocks = array())
    {
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
        echo twig_escape_filter($this->env, ($context["num_per_page"] ?? null), "html", null, true);
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
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "query", array()), "get", array(0 => "Rohprotein-min"), "method") <= 70)) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "query", array()), "get", array(0 => "Rohprotein-min"), "method"), "html", null, true);
        } else {
            echo "0";
        }
        echo "\">
                                    <input type=\"hidden\" class=\"filter-max\" name=\"Rohprotein-max\"
                                           value=\"";
        // line 34
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "query", array()), "get", array(0 => "Rohprotein-max"), "method") <= 70)) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "query", array()), "get", array(0 => "Rohprotein-max"), "method"), "html", null, true);
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
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "query", array()), "get", array(0 => "Rohfett-min"), "method") <= 30)) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "query", array()), "get", array(0 => "Rohfett-min"), "method"), "html", null, true);
        } else {
            echo "0";
        }
        echo "\">
                                    <input type=\"hidden\" class=\"filter-max\" name=\"Rohfett-max\"
                                           value=\"";
        // line 49
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "query", array()), "get", array(0 => "Rohfett-max"), "method") <= 30)) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "query", array()), "get", array(0 => "Rohfett-max"), "method"), "html", null, true);
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
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "query", array()), "get", array(0 => "Rohfaser-min"), "method") <= 7)) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "query", array()), "get", array(0 => "Rohfaser-min"), "method"), "html", null, true);
        } else {
            echo "0";
        }
        echo "\">

                                    <input type=\"hidden\" class=\"filter-max\" name=\"Rohfaser-max\"
                                           value=\"";
        // line 65
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "query", array()), "get", array(0 => "Rohfaser-max"), "method") <= 7)) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "query", array()), "get", array(0 => "Rohfaser-max"), "method"), "html", null, true);
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
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "query", array()), "get", array(0 => "Rohasche-min"), "method") <= 25)) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "query", array()), "get", array(0 => "Rohasche-min"), "method"), "html", null, true);
        } else {
            echo "0";
        }
        echo "\">
                                    <input type=\"hidden\" class=\"filter-max\" name=\"Rohasche-max\"
                                           value=\"";
        // line 79
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "query", array()), "get", array(0 => "Rohasche-max"), "method") <= 25)) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "query", array()), "get", array(0 => "Rohasche-max"), "method"), "html", null, true);
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
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "query", array()), "get", array(0 => "spring"), "method")) {
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
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "query", array()), "get", array(0 => "summer"), "method")) {
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
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "query", array()), "get", array(0 => "autumn"), "method")) {
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
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "query", array()), "get", array(0 => "winter"), "method")) {
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
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "query", array()), "get", array(0 => "colorant"), "method") && ($this->getAttribute($this->getAttribute($this->getAttribute(        // line 155
($context["app"] ?? null), "request", array()), "query", array()), "get", array(0 => "colorant"), "method") == "yes"))) {
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
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "query", array()), "get", array(0 => "colorant"), "method") && ($this->getAttribute($this->getAttribute($this->getAttribute(        // line 165
($context["app"] ?? null), "request", array()), "query", array()), "get", array(0 => "colorant"), "method") == "no"))) {
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
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "query", array()), "get", array(0 => "waterTemperature-min-col"), "method") <= 40)) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "query", array()), "get", array(0 => "waterTemperature-min-col"), "method"), "html", null, true);
        } else {
            echo "0";
        }
        echo "\">
                                        <input type=\"hidden\" class=\"filter-max\" name=\"waterTemperature-max-col\"
                                               value=\"";
        // line 182
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "query", array()), "get", array(0 => "waterTemperature-max-col"), "method") <= 40)) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "query", array()), "get", array(0 => "waterTemperature-max-col"), "method"), "html", null, true);
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
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "query", array()), "get", array(0 => "pelletSizeMin-min-col"), "method") <= 12)) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "query", array()), "get", array(0 => "pelletSizeMin-min-col"), "method"), "html", null, true);
        } else {
            echo "0";
        }
        echo "\">
                                        <input type=\"hidden\" class=\"filter-max\" name=\"pelletSizeMax-max-col\"
                                               value = \"";
        // line 198
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "query", array()), "get", array(0 => "pelletSizeMax-max-col"), "method") <= 12)) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "query", array()), "get", array(0 => "pelletSizeMax-max-col"), "method"), "html", null, true);
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
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "query", array()), "get", array(0 => "Vitamin_A-check"), "method") && ($this->getAttribute($this->getAttribute($this->getAttribute(        // line 222
($context["app"] ?? null), "request", array()), "query", array()), "get", array(0 => "Vitamin_A-check"), "method") == "checked"))) {
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
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "query", array()), "get", array(0 => "Vitamin_D3-check"), "method") && ($this->getAttribute($this->getAttribute($this->getAttribute(        // line 233
($context["app"] ?? null), "request", array()), "query", array()), "get", array(0 => "Vitamin_D3-check"), "method") == "checked"))) {
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
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "query", array()), "get", array(0 => "Vitamin_E-check"), "method") && ($this->getAttribute($this->getAttribute($this->getAttribute(        // line 244
($context["app"] ?? null), "request", array()), "query", array()), "get", array(0 => "Vitamin_E-check"), "method") == "checked"))) {
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
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "query", array()), "get", array(0 => "Vitamin_C-check"), "method") && ($this->getAttribute($this->getAttribute($this->getAttribute(        // line 255
($context["app"] ?? null), "request", array()), "query", array()), "get", array(0 => "Vitamin_C-check"), "method") == "checked"))) {
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
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "query", array()), "get", array(0 => "Vitamin_B1-check"), "method") && ($this->getAttribute($this->getAttribute($this->getAttribute(        // line 266
($context["app"] ?? null), "request", array()), "query", array()), "get", array(0 => "Vitamin_B1-check"), "method") == "checked"))) {
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
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "query", array()), "get", array(0 => "Vitamin_B2-check"), "method") && ($this->getAttribute($this->getAttribute($this->getAttribute(        // line 277
($context["app"] ?? null), "request", array()), "query", array()), "get", array(0 => "Vitamin_B2-check"), "method") == "checked"))) {
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
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "query", array()), "get", array(0 => "E1_Eisen-check"), "method") && ($this->getAttribute($this->getAttribute($this->getAttribute(        // line 292
($context["app"] ?? null), "request", array()), "query", array()), "get", array(0 => "E1_Eisen-check"), "method") == "checked"))) {
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
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "query", array()), "get", array(0 => "E2_Jod-check"), "method") && ($this->getAttribute($this->getAttribute($this->getAttribute(        // line 303
($context["app"] ?? null), "request", array()), "query", array()), "get", array(0 => "E2_Jod-check"), "method") == "checked"))) {
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
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "query", array()), "get", array(0 => "E3_Kobald-check"), "method") && ($this->getAttribute($this->getAttribute($this->getAttribute(        // line 314
($context["app"] ?? null), "request", array()), "query", array()), "get", array(0 => "E3_Kobald-check"), "method") == "checked"))) {
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
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "query", array()), "get", array(0 => "E4_Kupfer-check"), "method") && ($this->getAttribute($this->getAttribute($this->getAttribute(        // line 325
($context["app"] ?? null), "request", array()), "query", array()), "get", array(0 => "E4_Kupfer-check"), "method") == "checked"))) {
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
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "query", array()), "get", array(0 => "E5_Mangan-check"), "method") && ($this->getAttribute($this->getAttribute($this->getAttribute(        // line 336
($context["app"] ?? null), "request", array()), "query", array()), "get", array(0 => "E5_Mangan-check"), "method") == "checked"))) {
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
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "query", array()), "get", array(0 => "E6_Zink-check"), "method") && ($this->getAttribute($this->getAttribute($this->getAttribute(        // line 346
($context["app"] ?? null), "request", array()), "query", array()), "get", array(0 => "E6_Zink-check"), "method") == "checked"))) {
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
        echo twig_escape_filter($this->env, ($context["num_per_page"] ?? null), "html", null, true);
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
    }

    public function getTemplateName()
    {
        return "KoiBundle:sites/utils:filter.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  604 => 359,  595 => 352,  591 => 350,  586 => 347,  584 => 346,  583 => 345,  578 => 342,  574 => 340,  569 => 337,  567 => 336,  566 => 335,  560 => 331,  556 => 329,  551 => 326,  549 => 325,  548 => 324,  542 => 320,  538 => 318,  533 => 315,  531 => 314,  530 => 313,  524 => 309,  520 => 307,  515 => 304,  513 => 303,  512 => 302,  506 => 298,  502 => 296,  497 => 293,  495 => 292,  494 => 291,  484 => 283,  480 => 281,  475 => 278,  473 => 277,  472 => 276,  466 => 272,  462 => 270,  457 => 267,  455 => 266,  454 => 265,  448 => 261,  444 => 259,  439 => 256,  437 => 255,  436 => 254,  430 => 250,  426 => 248,  421 => 245,  419 => 244,  418 => 243,  412 => 239,  408 => 237,  403 => 234,  401 => 233,  400 => 232,  394 => 228,  390 => 226,  385 => 223,  383 => 222,  382 => 221,  352 => 198,  343 => 196,  322 => 182,  313 => 180,  302 => 171,  298 => 169,  293 => 166,  291 => 165,  290 => 164,  285 => 161,  281 => 159,  276 => 156,  274 => 155,  273 => 154,  261 => 144,  257 => 142,  252 => 139,  250 => 138,  244 => 134,  240 => 132,  235 => 129,  233 => 128,  228 => 125,  224 => 123,  219 => 120,  217 => 119,  211 => 115,  207 => 113,  202 => 110,  200 => 109,  163 => 79,  154 => 77,  135 => 65,  125 => 62,  105 => 49,  96 => 47,  76 => 34,  67 => 32,  49 => 17,  41 => 12,  35 => 9,  26 => 2,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "KoiBundle:sites/utils:filter.html.twig", "C:\\Users\\David\\Projekte\\Koifutter\\src\\KoiBundle/Resources/views/sites/utils/filter.html.twig");
    }
}
