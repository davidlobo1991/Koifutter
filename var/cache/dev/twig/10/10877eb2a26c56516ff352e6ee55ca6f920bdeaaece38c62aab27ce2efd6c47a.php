<?php

/* SonataAdminBundle:Core:user_block.html.twig */
class __TwigTemplate_cbe472b49b202494b084da7a853871d119b0c14b4440eb24375fef94283507ae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'user_block' => array($this, 'block_user_block'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8754b3e31ed57936fd7aad1fe5602b7e29e7827b651889671dfb9c05bc137d9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8754b3e31ed57936fd7aad1fe5602b7e29e7827b651889671dfb9c05bc137d9e->enter($__internal_8754b3e31ed57936fd7aad1fe5602b7e29e7827b651889671dfb9c05bc137d9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Core:user_block.html.twig"));

        // line 1
        $this->displayBlock('user_block', $context, $blocks);
        
        $__internal_8754b3e31ed57936fd7aad1fe5602b7e29e7827b651889671dfb9c05bc137d9e->leave($__internal_8754b3e31ed57936fd7aad1fe5602b7e29e7827b651889671dfb9c05bc137d9e_prof);

    }

    public function block_user_block($context, array $blocks = array())
    {
        $__internal_0d83758869ff822ae441ff2a01091dae25c1fe42c04ad5d212bc987074e9c883 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d83758869ff822ae441ff2a01091dae25c1fe42c04ad5d212bc987074e9c883->enter($__internal_0d83758869ff822ae441ff2a01091dae25c1fe42c04ad5d212bc987074e9c883_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_block"));

        
        $__internal_0d83758869ff822ae441ff2a01091dae25c1fe42c04ad5d212bc987074e9c883->leave($__internal_0d83758869ff822ae441ff2a01091dae25c1fe42c04ad5d212bc987074e9c883_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Core:user_block.html.twig";
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
        return new Twig_Source("{% block user_block %}{# Customize this value #}{% endblock %}
", "SonataAdminBundle:Core:user_block.html.twig", "C:\\Users\\David\\Projekte\\Koifutter\\vendor\\sonata-project\\admin-bundle/Resources/views/Core/user_block.html.twig");
    }
}
