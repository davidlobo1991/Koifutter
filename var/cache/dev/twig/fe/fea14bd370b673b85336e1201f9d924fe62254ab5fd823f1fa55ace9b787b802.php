<?php

/* SonataAdminBundle:CRUD:list__select.html.twig */
class __TwigTemplate_d9a17da4cec726c2412f1cb50494572bebee9b7a911ce6559bb5a57bf019d8fc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list__select.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_19a58ae0ddf919091d6a21699189dff40c92d82d0f9cd5c897cd4d69828a1b34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19a58ae0ddf919091d6a21699189dff40c92d82d0f9cd5c897cd4d69828a1b34->enter($__internal_19a58ae0ddf919091d6a21699189dff40c92d82d0f9cd5c897cd4d69828a1b34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list__select.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_19a58ae0ddf919091d6a21699189dff40c92d82d0f9cd5c897cd4d69828a1b34->leave($__internal_19a58ae0ddf919091d6a21699189dff40c92d82d0f9cd5c897cd4d69828a1b34_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_ec034b4c26474005b079fc2b2a2f25c7a20d8c61bb72c359eaa7a62f0f84b8dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec034b4c26474005b079fc2b2a2f25c7a20d8c61bb72c359eaa7a62f0f84b8dc->enter($__internal_ec034b4c26474005b079fc2b2a2f25c7a20d8c61bb72c359eaa7a62f0f84b8dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <a class=\"btn btn-primary\" href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "generateUrl", array(0 => "list"), "method"), "html", null, true);
        echo "\">
        <i class=\"fa fa-check\" aria-hidden=\"true\"></i>
        ";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("list_select", array(), "SonataAdminBundle"), "html", null, true);
        echo "
    </a>
";
        
        $__internal_ec034b4c26474005b079fc2b2a2f25c7a20d8c61bb72c359eaa7a62f0f84b8dc->leave($__internal_ec034b4c26474005b079fc2b2a2f25c7a20d8c61bb72c359eaa7a62f0f84b8dc_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list__select.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 17,  39 => 15,  33 => 14,  18 => 12,);
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

{% extends admin.getTemplate('base_list_field') %}

{% block field %}
    <a class=\"btn btn-primary\" href=\"{{ admin.generateUrl('list') }}\">
        <i class=\"fa fa-check\" aria-hidden=\"true\"></i>
        {{ 'list_select'|trans({}, 'SonataAdminBundle') }}
    </a>
{% endblock %}
", "SonataAdminBundle:CRUD:list__select.html.twig", "C:\\Users\\David\\Projekte\\Koifutter\\vendor\\sonata-project\\admin-bundle/Resources/views/CRUD/list__select.html.twig");
    }
}
