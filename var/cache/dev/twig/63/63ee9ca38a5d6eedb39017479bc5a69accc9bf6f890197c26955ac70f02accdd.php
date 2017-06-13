<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_6ea285caccaa7b52d4bfcbdf1cdcc001995ef4da7ccf0b8d70e8090baa756fc0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_44db3cd3e571f795c1b7e9802f3dc097506d386bc66a51ebc8130e162d32cdae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44db3cd3e571f795c1b7e9802f3dc097506d386bc66a51ebc8130e162d32cdae->enter($__internal_44db3cd3e571f795c1b7e9802f3dc097506d386bc66a51ebc8130e162d32cdae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_44db3cd3e571f795c1b7e9802f3dc097506d386bc66a51ebc8130e162d32cdae->leave($__internal_44db3cd3e571f795c1b7e9802f3dc097506d386bc66a51ebc8130e162d32cdae_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "C:\\Users\\David\\Projekte\\Koifutter\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_options.html.php");
    }
}
