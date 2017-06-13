<?php

/* @SonataAdmin/Core/user_block.html.twig */
class __TwigTemplate_3ccdacfbb17b5d696fc4849c8f112df5d4279a4ec3fa4210809fc096a1b0df30 extends Twig_Template
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
        $__internal_8069eb4d7832a933724237559ef913cb72a6d29c5a65e4f9bc63ca5bd12c549c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8069eb4d7832a933724237559ef913cb72a6d29c5a65e4f9bc63ca5bd12c549c->enter($__internal_8069eb4d7832a933724237559ef913cb72a6d29c5a65e4f9bc63ca5bd12c549c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/Core/user_block.html.twig"));

        // line 1
        $this->displayBlock('user_block', $context, $blocks);
        
        $__internal_8069eb4d7832a933724237559ef913cb72a6d29c5a65e4f9bc63ca5bd12c549c->leave($__internal_8069eb4d7832a933724237559ef913cb72a6d29c5a65e4f9bc63ca5bd12c549c_prof);

    }

    public function block_user_block($context, array $blocks = array())
    {
        $__internal_3a16d5032bbb353f901721e92b08b89d871556b174e72150cd1357b5b3b9dbe9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a16d5032bbb353f901721e92b08b89d871556b174e72150cd1357b5b3b9dbe9->enter($__internal_3a16d5032bbb353f901721e92b08b89d871556b174e72150cd1357b5b3b9dbe9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_block"));

        
        $__internal_3a16d5032bbb353f901721e92b08b89d871556b174e72150cd1357b5b3b9dbe9->leave($__internal_3a16d5032bbb353f901721e92b08b89d871556b174e72150cd1357b5b3b9dbe9_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/Core/user_block.html.twig";
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
", "@SonataAdmin/Core/user_block.html.twig", "C:\\Users\\David\\Projekte\\Koifutter\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\Core\\user_block.html.twig");
    }
}
