<?php

/* KoiBundle:sites:index.html.twig */
class __TwigTemplate_cbc89248e5af168b94756ef32c26320d15ec4fc9a1b2a2271230bed7c24d0e41 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("KoiBundle::base.html.twig", "KoiBundle:sites:index.html.twig", 1);
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
        $__internal_3e46268f4970b3645b2b25bc02b52bc942d1271576b14cf3d9c25015b68eea4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e46268f4970b3645b2b25bc02b52bc942d1271576b14cf3d9c25015b68eea4c->enter($__internal_3e46268f4970b3645b2b25bc02b52bc942d1271576b14cf3d9c25015b68eea4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KoiBundle:sites:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3e46268f4970b3645b2b25bc02b52bc942d1271576b14cf3d9c25015b68eea4c->leave($__internal_3e46268f4970b3645b2b25bc02b52bc942d1271576b14cf3d9c25015b68eea4c_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_c616d9e2a80d9de9bc2f54e8fa35cf99c75709723c3c16972c6be3addb5e1291 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c616d9e2a80d9de9bc2f54e8fa35cf99c75709723c3c16972c6be3addb5e1291->enter($__internal_c616d9e2a80d9de9bc2f54e8fa35cf99c75709723c3c16972c6be3addb5e1291_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        $this->loadTemplate("KoiBundle:sites/utils:filter.html.twig", "KoiBundle:sites:index.html.twig", 20)->display($context);
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
        echo twig_escape_filter($this->env, ($context["num_per_page"] ?? $this->getContext($context, "num_per_page")), "html", null, true);
        echo "\" />
                            </form>
                        </div>

                        <div class=\"koi-list\">
                            ";
        // line 56
        $this->loadTemplate("KoiBundle:sites/utils:list.html.twig", "KoiBundle:sites:index.html.twig", 56)->display($context);
        // line 57
        echo "                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_c616d9e2a80d9de9bc2f54e8fa35cf99c75709723c3c16972c6be3addb5e1291->leave($__internal_c616d9e2a80d9de9bc2f54e8fa35cf99c75709723c3c16972c6be3addb5e1291_prof);

    }

    // line 65
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0e2c2725d9ec64856f149ff7a73a0298d2a19ab40fd33ea541a7339c69b14f72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e2c2725d9ec64856f149ff7a73a0298d2a19ab40fd33ea541a7339c69b14f72->enter($__internal_0e2c2725d9ec64856f149ff7a73a0298d2a19ab40fd33ea541a7339c69b14f72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        if ($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "get", array(0 => "num"), "method")) {
            // line 79
            echo "                setNumAct(";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "get", array(0 => "num"), "method"), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable(($context["feedAll"] ?? $this->getContext($context, "feedAll")));
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
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "list-order"), "method"), "html", null, true);
        echo "\") {
                    \$(this).attr(\"selected\", \"selected\");
                }
            });

            selFeedInPage.on('change', function () {
                \$(this).siblings('.hidden_id_feed').val(JSON.stringify(feedInPage));
                this.form.submit();
\t\t\t\tsetNumAct(";
        // line 100
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "get", array(0 => "num"), "method"), "html", null, true);
        echo ");
            });

            selElementsPerSite.on('change', function() {
\t\t\t\t\$(this).siblings('.hidden_id_feed').val(JSON.stringify(feedInPage));
\t\t\t\tthis.form.submit();
\t\t\t\tsetNumAct(";
        // line 106
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "get", array(0 => "num"), "method"), "html", null, true);
        echo ");
\t\t\t});
        });
    </script>
";
        
        $__internal_0e2c2725d9ec64856f149ff7a73a0298d2a19ab40fd33ea541a7339c69b14f72->leave($__internal_0e2c2725d9ec64856f149ff7a73a0298d2a19ab40fd33ea541a7339c69b14f72_prof);

    }

    public function getTemplateName()
    {
        return "KoiBundle:sites:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  199 => 106,  190 => 100,  179 => 92,  174 => 89,  165 => 87,  161 => 86,  156 => 83,  152 => 81,  146 => 79,  144 => 78,  128 => 66,  122 => 65,  109 => 57,  107 => 56,  99 => 51,  73 => 28,  64 => 21,  62 => 20,  41 => 3,  35 => 2,  11 => 1,);
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
                {%  include('KoiBundle:sites/utils:filter.html.twig') %}

                <div class=\"container-wrapper clearfix\">
                    <div class=\"container\">
                        <h2>
                            Futterliste
                        </h2>
                        <div class=\"select-order right\">
                            <form id=\"form-sort\" method=\"get\" action=\"{{ path('_sorting') }}\">
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
                                <input type=\"hidden\" class=\"hidden_num_per_site\" name=\"num_feed\" value=\"{{ num_per_page }}\" />
                            </form>
                        </div>

                        <div class=\"koi-list\">
                            {% include 'KoiBundle:sites/utils:list.html.twig' %}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}

{% block javascripts %}
    {{ parent() }}

    <script>
        \$(document).ready(function() {

            // Feeds that are available now
            var feedInPage = [];
            var selFeedInPage = \$('#list-order');
            var selElementsPerSite = \$('#num-feed');
            var formFilter = \$('#form-filter');
            var nummer = 0;

            {% if app.session.get('num') %}
                setNumAct({{ app.session.get('num') }});
            {% else %}
                setNumAct(nummer);
            {% endif %}

            // Default (first time) all of them

            {% for feedActive in feedAll %}
            feedInPage.push({{ feedActive.id }});
            {% endfor %}

            // Selected parameter order list
            selFeedInPage.find('option').each(function() {
                if (\$(this).val() == \"{{ app.request.get('list-order') }}\") {
                    \$(this).attr(\"selected\", \"selected\");
                }
            });

            selFeedInPage.on('change', function () {
                \$(this).siblings('.hidden_id_feed').val(JSON.stringify(feedInPage));
                this.form.submit();
\t\t\t\tsetNumAct({{ app.session.get('num') }});
            });

            selElementsPerSite.on('change', function() {
\t\t\t\t\$(this).siblings('.hidden_id_feed').val(JSON.stringify(feedInPage));
\t\t\t\tthis.form.submit();
\t\t\t\tsetNumAct({{ app.session.get('num') }});
\t\t\t});
        });
    </script>
{% endblock %}
", "KoiBundle:sites:index.html.twig", "C:\\Users\\David\\Projekte\\Koifutter\\src\\KoiBundle/Resources/views/sites/index.html.twig");
    }
}
