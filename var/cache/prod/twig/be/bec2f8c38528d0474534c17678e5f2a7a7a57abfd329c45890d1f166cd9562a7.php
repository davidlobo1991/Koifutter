<?php

/* KoiBundle:sites/utils:overlay.html.twig */
class __TwigTemplate_14acea1c57752760ee48f7c394a08351363e5cd1febda3d6e944d693f598470b extends Twig_Template
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
        // line 1
        $this->displayBlock('compare', $context, $blocks);
    }

    public function block_compare($context, array $blocks = array())
    {
        // line 2
        echo "        <table class=\"compare-table\">
            <thead>
            <tr>
                <td class=\"headcol\"></td>
                ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["feed"] ?? null));
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
        $context['_seq'] = twig_ensure_traversable(($context["elements"] ?? null));
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
            $context['_seq'] = twig_ensure_traversable(($context["feed"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["feedActive"]) {
                // line 16
                echo "                                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["feed_elements"] ?? null));
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
    }

    public function getTemplateName()
    {
        return "KoiBundle:sites/utils:overlay.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  105 => 26,  98 => 24,  92 => 23,  85 => 21,  76 => 19,  74 => 18,  73 => 17,  67 => 16,  63 => 15,  57 => 14,  54 => 13,  50 => 12,  45 => 9,  36 => 7,  32 => 6,  26 => 2,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "KoiBundle:sites/utils:overlay.html.twig", "C:\\Users\\David\\Projekte\\Koifutter\\src\\KoiBundle/Resources/views/sites/utils/overlay.html.twig");
    }
}
