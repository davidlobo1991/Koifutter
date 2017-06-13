<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_7a2987ed315d37f324007b6e24e0e88a3bcb54a799bd494feeeb40c44c6628e4 extends Twig_Template
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
        $__internal_b3cf2dbaa571865f7097ece35f06353fbb2873199a1bf6f8d888288a7cb28ba5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3cf2dbaa571865f7097ece35f06353fbb2873199a1bf6f8d888288a7cb28ba5->enter($__internal_b3cf2dbaa571865f7097ece35f06353fbb2873199a1bf6f8d888288a7cb28ba5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_b3cf2dbaa571865f7097ece35f06353fbb2873199a1bf6f8d888288a7cb28ba5->leave($__internal_b3cf2dbaa571865f7097ece35f06353fbb2873199a1bf6f8d888288a7cb28ba5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_rows') ?>
", "@Framework/Form/repeated_row.html.php", "C:\\Users\\David\\Projekte\\Koifutter\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\repeated_row.html.php");
    }
}
