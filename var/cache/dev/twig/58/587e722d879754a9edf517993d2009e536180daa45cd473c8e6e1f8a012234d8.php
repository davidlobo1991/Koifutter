<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_e608e62734b2e4e5034fbe7d92445d420c12f11afcfa043f1b9e9325faefd241 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_525ec8708b5444f015bfaed4a5d83c5f95e5ead477e60bc309661053750ab36c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_525ec8708b5444f015bfaed4a5d83c5f95e5ead477e60bc309661053750ab36c->enter($__internal_525ec8708b5444f015bfaed4a5d83c5f95e5ead477e60bc309661053750ab36c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_525ec8708b5444f015bfaed4a5d83c5f95e5ead477e60bc309661053750ab36c->leave($__internal_525ec8708b5444f015bfaed4a5d83c5f95e5ead477e60bc309661053750ab36c_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_6ec61103d8fa1c2126ab31e63b7d77c74b768e96dfc454313e244439315c4791 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ec61103d8fa1c2126ab31e63b7d77c74b768e96dfc454313e244439315c4791->enter($__internal_6ec61103d8fa1c2126ab31e63b7d77c74b768e96dfc454313e244439315c4791_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_6ec61103d8fa1c2126ab31e63b7d77c74b768e96dfc454313e244439315c4791->leave($__internal_6ec61103d8fa1c2126ab31e63b7d77c74b768e96dfc454313e244439315c4791_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "@WebProfiler/Profiler/ajax_layout.html.twig", "C:\\Users\\David\\Projekte\\Koifutter\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\ajax_layout.html.twig");
    }
}
