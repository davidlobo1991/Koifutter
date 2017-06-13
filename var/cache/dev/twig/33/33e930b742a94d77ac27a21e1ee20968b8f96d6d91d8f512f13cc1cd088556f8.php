<?php

/* @Koi/sites/utils/overlay.html.twig */
class __TwigTemplate_e43767a3de8207c1db7bd951d65b94e353082c4ea754973de88584f543713b30 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'compare' => array($this, 'block_compare'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b81e03720f7db6ddecb06a5438cda36db0395db908a659219e27c6e77a048728 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b81e03720f7db6ddecb06a5438cda36db0395db908a659219e27c6e77a048728->enter($__internal_b81e03720f7db6ddecb06a5438cda36db0395db908a659219e27c6e77a048728_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Koi/sites/utils/overlay.html.twig"));

        // line 1
        $this->displayBlock('compare', $context, $blocks);
        
        $__internal_b81e03720f7db6ddecb06a5438cda36db0395db908a659219e27c6e77a048728->leave($__internal_b81e03720f7db6ddecb06a5438cda36db0395db908a659219e27c6e77a048728_prof);

    }

    public function block_compare($context, array $blocks = array())
    {
        $__internal_e5031dba3d7227b21df7f3c6fa7783116d90147e897b8a21f87565ccb43cd305 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5031dba3d7227b21df7f3c6fa7783116d90147e897b8a21f87565ccb43cd305->enter($__internal_e5031dba3d7227b21df7f3c6fa7783116d90147e897b8a21f87565ccb43cd305_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "compare"));

        // line 2
        echo "        <table class=\"compare-table\">
            <thead>
            <tr>
                <td class=\"headcol\"></td>
                ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["feed"] ?? $this->getContext($context, "feed")));
        foreach ($context['_seq'] as $context["_key"] => $context["feedActive"]) {
            // line 7
            echo "                    <td>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["feedActive"], "nameFeed", array()), "html", null, true);
            echo "</td>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['feedActive'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "            </tr>
            </thead>
            <tbody>
                ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["elements"] ?? $this->getContext($context, "elements")));
        foreach ($context['_seq'] as $context["_key"] => $context["elementsActive"]) {
            // line 13
            echo "                    <tr>
                        <td class=\"headcol\">";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["elementsActive"], "nameElement", array()), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, $this->getAttribute($context["elementsActive"], "scaleElement", array()), "html", null, true);
            echo ")</td>
                            ";
            // line 15
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["feed"] ?? $this->getContext($context, "feed")));
            foreach ($context['_seq'] as $context["_key"] => $context["feedActive"]) {
                // line 16
                echo "                                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["feed_elements"] ?? $this->getContext($context, "feed_elements")));
                $context['_iterated'] = false;
                foreach ($context['_seq'] as $context["_key"] => $context["feed_elementsActive"]) {
                    if ((($this->getAttribute($this->getAttribute(                    // line 17
$context["feed_elementsActive"], "idElement", array()), "id", array()) == $this->getAttribute($context["elementsActive"], "id", array())) && ($this->getAttribute($this->getAttribute(                    // line 18
$context["feed_elementsActive"], "idFeed", array()), "id", array()) == $this->getAttribute($context["feedActive"], "id", array())))) {
                        // line 19
                        echo "                                    <td>";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["feed_elementsActive"], "amount", array()), "html", null, true);
                        echo "</td>
                                ";
                        $context['_iterated'] = true;
                    }
                }
                if (!$context['_iterated']) {
                    // line 21
                    echo "                                    <td>-</td>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['feed_elementsActive'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 23
                echo "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['feedActive'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['elementsActive'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "            </tbody>
        </table>
";
        
        $__internal_e5031dba3d7227b21df7f3c6fa7783116d90147e897b8a21f87565ccb43cd305->leave($__internal_e5031dba3d7227b21df7f3c6fa7783116d90147e897b8a21f87565ccb43cd305_prof);

    }

    public function getTemplateName()
    {
        return "@Koi/sites/utils/overlay.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  114 => 26,  107 => 24,  101 => 23,  94 => 21,  85 => 19,  83 => 18,  82 => 17,  76 => 16,  72 => 15,  66 => 14,  63 => 13,  59 => 12,  54 => 9,  45 => 7,  41 => 6,  35 => 2,  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block compare %}
        <table class=\"compare-table\">
            <thead>
            <tr>
                <td class=\"headcol\"></td>
                {% for feedActive in feed %}
                    <td>{{ feedActive.nameFeed }}</td>
                {% endfor %}
            </tr>
            </thead>
            <tbody>
                {% for elementsActive in elements %}
                    <tr>
                        <td class=\"headcol\">{{ elementsActive.nameElement }} ({{ elementsActive.scaleElement }})</td>
                            {% for feedActive in feed %}
                                {% for feed_elementsActive in feed_elements
                                if feed_elementsActive.idElement.id == elementsActive.id
                                and feed_elementsActive.idFeed.id == feedActive.id %}
                                    <td>{{ feed_elementsActive.amount }}</td>
                                {% else %}
                                    <td>-</td>
                                {% endfor %}
                            {% endfor %}
                    </tr>
                {% endfor %}
            </tbody>
        </table>
{% endblock %}
", "@Koi/sites/utils/overlay.html.twig", "C:\\Users\\David\\Projekte\\Koifutter\\src\\KoiBundle\\Resources\\views\\sites\\utils\\overlay.html.twig");
    }
}
