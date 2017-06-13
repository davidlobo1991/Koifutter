<?php

/* @Koi/sites/index.html.twig */
class __TwigTemplate_f36caacd3c05ca349af7bbf50516331b82c2a5dac31ab62f5bf5f1ccb1851d8d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("KoiBundle::base.html.twig", "@Koi/sites/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
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
        <div class=\"overlay-popup\">
            <div class=\"overlay\"></div>
            <div class=\"compare-list\">
                <h2>Vergleichliste</h2>
                <button class=\"btn-close\"><span class=\"icon icon-cross\"></span></button>
                <div class=\"scroll-table\">
                    <div id=\"loading\">
                    </div>
                </div>
            </div>
        </div>

        <div class=\"content-wrap\">
            <!-- Start CONTENT -->
            <div class=\"content\">
                ";
        // line 20
        $this->loadTemplate("KoiBundle:sites/utils:filter.html.twig", "@Koi/sites/index.html.twig", 20)->display($context);
        // line 21
        echo "
                <div class=\"container-wrapper clearfix\">
                    <div class=\"container\">
                        <h2>
                            Futterliste
                        </h2>
                        <div class=\"select-order right\">
                            <form id=\"form-sort\" method=\"get\" action=\"";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_sorting");
        echo "\">
                                <label for=\"list-order\">Sortierung: </label>
                                <select id=\"list-order\" class=\"select-list\" name=\"list-order\">
                                    <!-- Attributes of the table feed, therefore in english -->
                                    <option value=\"nameFeed-asc-col\">Alphabetisch (a - z)</option>
                                    <option value=\"nameFeed-des-col\">Alphabetisch (z - a)</option>
                                    <option value=\"waterTemperature-asc-col\">Temperatur (asc)</option>
                                    <option value=\"waterTemperature-des-col\">Temperatur (desc)</option>
                                    <option value=\"pelletSizeMax-asc-col\">Größe (asc)</option>
                                    <option value=\"pelletSizeMax-des-col\">Größe (desc)</option>

                                    <!-- Name of the elements in the database, therefore in german -->
                                    <option value=\"Rohprotein-asc\">Rohprotein (asc)</option>
                                    <option value=\"Rohprotein-des\">Rohprotein (desc)</option>
                                    <option value=\"Rohfett-asc\">Rohfett (asc)</option>
                                    <option value=\"Rohfett-des\">Rohfett (desc)</option>
                                    <option value=\"Rohasche-asc\">Rohasche (asc)</option>
                                    <option value=\"Rohasche-des\">Rohasche (desc)</option>
                                    <option value=\"Rohfaser-asc\">Rohfaser (asc)</option>
                                    <option value=\"Rohfaser-des\">Rohfaser (desc)</option>
                                </select>
                                <span class=\"icon icon-chevron-down\"></span>
                                <input type=\"hidden\" class=\"hidden_id_feed\" name=\"id_feed\" value=\"\" />
                                <input type=\"hidden\" class=\"hidden_num_per_site\" name=\"num_feed\" value=\"";
        // line 51
        echo twig_escape_filter($this->env, ($context["num_per_page"] ?? null), "html", null, true);
        echo "\" />
                            </form>
                        </div>

                        <div class=\"koi-list\">
                            ";
        // line 56
        $this->loadTemplate("KoiBundle:sites/utils:list.html.twig", "@Koi/sites/index.html.twig", 56)->display($context);
        // line 57
        echo "                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
    }

    // line 65
    public function block_javascripts($context, array $blocks = array())
    {
        // line 66
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

    <script>
        \$(document).ready(function() {

            // Feeds that are available now
            var feedInPage = [];
            var selFeedInPage = \$('#list-order');
            var selElementsPerSite = \$('#num-feed');
            var formFilter = \$('#form-filter');
            var nummer = 0;

            ";
        // line 78
        if ($this->getAttribute($this->getAttribute(($context["app"] ?? null), "session", array()), "get", array(0 => "num"), "method")) {
            // line 79
            echo "                setNumAct(";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "session", array()), "get", array(0 => "num"), "method"), "html", null, true);
            echo ");
            ";
        } else {
            // line 81
            echo "                setNumAct(nummer);
            ";
        }
        // line 83
        echo "
            // Default (first time) all of them

            ";
        // line 86
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["feedAll"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["feedActive"]) {
            // line 87
            echo "            feedInPage.push(";
            echo twig_escape_filter($this->env, $this->getAttribute($context["feedActive"], "id", array()), "html", null, true);
            echo ");
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['feedActive'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 89
        echo "
            // Selected parameter order list
            selFeedInPage.find('option').each(function() {
                if (\$(this).val() == \"";
        // line 92
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "get", array(0 => "list-order"), "method"), "html", null, true);
        echo "\") {
                    \$(this).attr(\"selected\", \"selected\");
                }
            });

            selFeedInPage.on('change', function () {
                \$(this).siblings('.hidden_id_feed').val(JSON.stringify(feedInPage));
                this.form.submit();
\t\t\t\tsetNumAct(";
        // line 100
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "session", array()), "get", array(0 => "num"), "method"), "html", null, true);
        echo ");
            });

            selElementsPerSite.on('change', function() {
\t\t\t\t\$(this).siblings('.hidden_id_feed').val(JSON.stringify(feedInPage));
\t\t\t\tthis.form.submit();
\t\t\t\tsetNumAct(";
        // line 106
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "session", array()), "get", array(0 => "num"), "method"), "html", null, true);
        echo ");
\t\t\t});
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "@Koi/sites/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  184 => 106,  175 => 100,  164 => 92,  159 => 89,  150 => 87,  146 => 86,  141 => 83,  137 => 81,  131 => 79,  129 => 78,  113 => 66,  110 => 65,  100 => 57,  98 => 56,  90 => 51,  64 => 28,  55 => 21,  53 => 20,  32 => 3,  29 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Koi/sites/index.html.twig", "C:\\Users\\David\\Projekte\\Koifutter\\src\\KoiBundle\\Resources\\views\\sites\\index.html.twig");
    }
}
