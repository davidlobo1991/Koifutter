<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_e5bbb6ba6b82b79148162cfac0e7f9a36164e798e0b11bb8aad06a39cb54aa45 extends Twig_Template
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
        $__internal_32e66384e0057ebc5d71e8744fa6a8544bbb950fb3637a5dca1bffc91215f087 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32e66384e0057ebc5d71e8744fa6a8544bbb950fb3637a5dca1bffc91215f087->enter($__internal_32e66384e0057ebc5d71e8744fa6a8544bbb950fb3637a5dca1bffc91215f087_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_32e66384e0057ebc5d71e8744fa6a8544bbb950fb3637a5dca1bffc91215f087->leave($__internal_32e66384e0057ebc5d71e8744fa6a8544bbb950fb3637a5dca1bffc91215f087_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "C:\\Users\\David\\Projekte\\Koifutter\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\attributes.html.php");
    }
}
