<?php

/* SonataAdminBundle::ajax_layout.html.twig */
class __TwigTemplate_6c799c2cfed971248015757fded71d20146b467cb3726c5172d2a3c3afa44572 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'preview' => array($this, 'block_preview'),
            'form' => array($this, 'block_form'),
            'list' => array($this, 'block_list'),
            'show' => array($this, 'block_show'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_056d68aef4f61310a5631b6c8817c2b9166f0be3acf15a0ac9a836a8744fdcc8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_056d68aef4f61310a5631b6c8817c2b9166f0be3acf15a0ac9a836a8744fdcc8->enter($__internal_056d68aef4f61310a5631b6c8817c2b9166f0be3acf15a0ac9a836a8744fdcc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle::ajax_layout.html.twig"));

        // line 11
        echo "
";
        // line 12
        $this->displayBlock('content', $context, $blocks);
        
        $__internal_056d68aef4f61310a5631b6c8817c2b9166f0be3acf15a0ac9a836a8744fdcc8->leave($__internal_056d68aef4f61310a5631b6c8817c2b9166f0be3acf15a0ac9a836a8744fdcc8_prof);

    }

    public function block_content($context, array $blocks = array())
    {
        $__internal_fd14a564afc923e4de577c1174ae1b4de8cc2735f0ee09df3d60cc883bdb8c91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd14a564afc923e4de577c1174ae1b4de8cc2735f0ee09df3d60cc883bdb8c91->enter($__internal_fd14a564afc923e4de577c1174ae1b4de8cc2735f0ee09df3d60cc883bdb8c91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 13
        echo "    ";
        $context["_list_table"] = ((        $this->hasBlock("list_table", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("list_table", $context, $blocks))) : (null));
        // line 14
        echo "    ";
        $context["_list_filters"] = ((        $this->hasBlock("list_filters", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("list_filters", $context, $blocks))) : (null));
        // line 15
        echo "    ";
        $context["_list_filters_actions"] = ((        $this->hasBlock("list_filters_actions", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("list_filters_actions", $context, $blocks))) : (null));
        // line 16
        echo "
    ";
        // line 17
        $this->displayBlock('preview', $context, $blocks);
        // line 18
        echo "    ";
        $this->displayBlock('form', $context, $blocks);
        // line 19
        echo "    ";
        $this->displayBlock('list', $context, $blocks);
        // line 20
        echo "    ";
        $this->displayBlock('show', $context, $blocks);
        // line 21
        echo "
    ";
        // line 22
        if (( !twig_test_empty(($context["_list_table"] ?? $this->getContext($context, "_list_table"))) ||  !twig_test_empty(($context["_list_filters"] ?? $this->getContext($context, "_list_filters"))))) {
            // line 23
            echo "    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"navbar navbar-default sonata-list-table\">
                <div class=\"container-fluid\">
                    <div class=\"navbar-collapse\">
                        ";
            // line 28
            if ((((array_key_exists("admin", $context) && array_key_exists("action", $context)) && (($context["action"] ?? $this->getContext($context, "action")) == "list")) && (twig_length_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "listModes", array())) > 1))) {
                // line 29
                echo "                            <div class=\"nav navbar-right btn-group\">
                                ";
                // line 30
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "listModes", array()));
                foreach ($context['_seq'] as $context["mode"] => $context["settings"]) {
                    // line 31
                    echo "                                    <a href=\"";
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
                // line 33
                echo "                            </div>
                        ";
            }
            // line 35
            echo "
                        ";
            // line 36
            if ( !twig_test_empty(($context["_list_filters_actions"] ?? $this->getContext($context, "_list_filters_actions")))) {
                // line 37
                echo "                            ";
                echo ($context["_list_filters_actions"] ?? $this->getContext($context, "_list_filters_actions"));
                echo "
                        ";
            }
            // line 39
            echo "                    </div>
                </div>
            </div>
        </div>

        ";
            // line 44
            if (twig_trim_filter(($context["_list_filters"] ?? $this->getContext($context, "_list_filters")))) {
                // line 45
                echo "            <div class=\"row\">
                ";
                // line 46
                echo ($context["_list_filters"] ?? $this->getContext($context, "_list_filters"));
                echo "
            </div>
        ";
            }
            // line 49
            echo "
        <div class=\"row\">
            ";
            // line 51
            echo ($context["_list_table"] ?? $this->getContext($context, "_list_table"));
            echo "
        </div>
    </div>
    ";
        }
        
        $__internal_fd14a564afc923e4de577c1174ae1b4de8cc2735f0ee09df3d60cc883bdb8c91->leave($__internal_fd14a564afc923e4de577c1174ae1b4de8cc2735f0ee09df3d60cc883bdb8c91_prof);

    }

    // line 17
    public function block_preview($context, array $blocks = array())
    {
        $__internal_17518e6ddb473da542998b4acd409bff5cc3eceb7a99d807cc3c57dceadcfefa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17518e6ddb473da542998b4acd409bff5cc3eceb7a99d807cc3c57dceadcfefa->enter($__internal_17518e6ddb473da542998b4acd409bff5cc3eceb7a99d807cc3c57dceadcfefa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "preview"));

        
        $__internal_17518e6ddb473da542998b4acd409bff5cc3eceb7a99d807cc3c57dceadcfefa->leave($__internal_17518e6ddb473da542998b4acd409bff5cc3eceb7a99d807cc3c57dceadcfefa_prof);

    }

    // line 18
    public function block_form($context, array $blocks = array())
    {
        $__internal_c36fb074b568679eed25aa1c7e995e2a359a3a53c69ef8f7c3fdf3829eebad3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c36fb074b568679eed25aa1c7e995e2a359a3a53c69ef8f7c3fdf3829eebad3c->enter($__internal_c36fb074b568679eed25aa1c7e995e2a359a3a53c69ef8f7c3fdf3829eebad3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        
        $__internal_c36fb074b568679eed25aa1c7e995e2a359a3a53c69ef8f7c3fdf3829eebad3c->leave($__internal_c36fb074b568679eed25aa1c7e995e2a359a3a53c69ef8f7c3fdf3829eebad3c_prof);

    }

    // line 19
    public function block_list($context, array $blocks = array())
    {
        $__internal_a2ff45d6c332e5c37aa42d87df129f318c924aa6c6e5d1ca72e2aca364c27a7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2ff45d6c332e5c37aa42d87df129f318c924aa6c6e5d1ca72e2aca364c27a7a->enter($__internal_a2ff45d6c332e5c37aa42d87df129f318c924aa6c6e5d1ca72e2aca364c27a7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list"));

        
        $__internal_a2ff45d6c332e5c37aa42d87df129f318c924aa6c6e5d1ca72e2aca364c27a7a->leave($__internal_a2ff45d6c332e5c37aa42d87df129f318c924aa6c6e5d1ca72e2aca364c27a7a_prof);

    }

    // line 20
    public function block_show($context, array $blocks = array())
    {
        $__internal_2231c7301e4e235673ca88c2c1b2201fcd49ccb924611d5b00f3701f0fc1115d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2231c7301e4e235673ca88c2c1b2201fcd49ccb924611d5b00f3701f0fc1115d->enter($__internal_2231c7301e4e235673ca88c2c1b2201fcd49ccb924611d5b00f3701f0fc1115d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show"));

        
        $__internal_2231c7301e4e235673ca88c2c1b2201fcd49ccb924611d5b00f3701f0fc1115d->leave($__internal_2231c7301e4e235673ca88c2c1b2201fcd49ccb924611d5b00f3701f0fc1115d_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle::ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  183 => 20,  172 => 19,  161 => 18,  150 => 17,  138 => 51,  134 => 49,  128 => 46,  125 => 45,  123 => 44,  116 => 39,  110 => 37,  108 => 36,  105 => 35,  101 => 33,  86 => 31,  82 => 30,  79 => 29,  77 => 28,  70 => 23,  68 => 22,  65 => 21,  62 => 20,  59 => 19,  56 => 18,  54 => 17,  51 => 16,  48 => 15,  45 => 14,  42 => 13,  30 => 12,  27 => 11,);
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

{% block content %}
    {% set _list_table = block('list_table') is defined ? block('list_table')|trim : null %}
    {% set _list_filters = block('list_filters') is defined ? block('list_filters')|trim : null %}
    {% set _list_filters_actions = block('list_filters_actions') is defined ? block('list_filters_actions')|trim : null %}

    {% block preview %}{% endblock %}
    {% block form %}{% endblock %}
    {% block list %}{% endblock %}
    {% block show %}{% endblock %}

    {% if _list_table is not empty or _list_filters is not empty %}
    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"navbar navbar-default sonata-list-table\">
                <div class=\"container-fluid\">
                    <div class=\"navbar-collapse\">
                        {% if admin is defined and action is defined and action == 'list' and admin.listModes|length > 1 %}
                            <div class=\"nav navbar-right btn-group\">
                                {% for mode, settings in admin.listModes %}
                                    <a href=\"{{ admin.generateUrl('list', app.request.query.all|merge({_list_mode: mode})) }}\" class=\"btn btn-default navbar-btn btn-sm{% if admin.getListMode() == mode %} active{% endif %}\"><i class=\"{{ settings.class }}\"></i></a>
                                {% endfor %}
                            </div>
                        {% endif %}

                        {% if _list_filters_actions is not empty %}
                            {{ _list_filters_actions|raw }}
                        {% endif %}
                    </div>
                </div>
            </div>
        </div>

        {% if _list_filters|trim %}
            <div class=\"row\">
                {{ _list_filters|raw }}
            </div>
        {% endif %}

        <div class=\"row\">
            {{ _list_table|raw }}
        </div>
    </div>
    {% endif %}
{% endblock %}
", "SonataAdminBundle::ajax_layout.html.twig", "C:\\Users\\David\\Projekte\\Koifutter\\vendor\\sonata-project\\admin-bundle/Resources/views/ajax_layout.html.twig");
    }
}
