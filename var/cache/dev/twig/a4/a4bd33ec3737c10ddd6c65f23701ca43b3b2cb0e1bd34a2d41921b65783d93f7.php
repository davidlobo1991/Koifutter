<?php

/* KoiBundle:sites/utils:overlay.html.twig */
class __TwigTemplate_26dda9d4a335413b6dc9c74bbde2625de49f3f8279a5dad646ad527c00055ad5 extends Twig_Template
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
        $__internal_8bd83f4031d1b5668214dcae759c649b71931820c68014c090d360dbae0168b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8bd83f4031d1b5668214dcae759c649b71931820c68014c090d360dbae0168b2->enter($__internal_8bd83f4031d1b5668214dcae759c649b71931820c68014c090d360dbae0168b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KoiBundle:sites/utils:overlay.html.twig"));

        // line 1
        $this->displayBlock('compare', $context, $blocks);
        
        $__internal_8bd83f4031d1b5668214dcae759c649b71931820c68014c090d360dbae0168b2->leave($__internal_8bd83f4031d1b5668214dcae759c649b71931820c68014c090d360dbae0168b2_prof);

    }

    public function block_compare($context, array $blocks = array())
    {
        $__internal_6e80b0423742f2f208ad2df5f33d6e40f15283aac9cebdf4ebd8cd00ad1a8642 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e80b0423742f2f208ad2df5f33d6e40f15283aac9cebdf4ebd8cd00ad1a8642->enter($__internal_6e80b0423742f2f208ad2df5f33d6e40f15283aac9cebdf4ebd8cd00ad1a8642_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "compare"));

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
        
        $__internal_6e80b0423742f2f208ad2df5f33d6e40f15283aac9cebdf4ebd8cd00ad1a8642->leave($__internal_6e80b0423742f2f208ad2df5f33d6e40f15283aac9cebdf4ebd8cd00ad1a8642_prof);

    }

    public function getTemplateName()
    {
        return "KoiBundle:sites/utils:overlay.html.twig";
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
", "KoiBundle:sites/utils:overlay.html.twig", "C:\\Users\\David\\Projekte\\Koifutter\\src\\KoiBundle\\Resources\\views\\sites\\utils\\overlay.html.twig");
    }
}
