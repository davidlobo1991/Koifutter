<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_7b7702a7a2c8ec2e8d1bae91472b275aa08bcc07f41a3f4ac1d33780ae395a00 extends Twig_Template
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
        $__internal_92b7ab8af54a70818fcdf3b9086666691f834d1ba0e2bec7fbf8cf1239c77018 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92b7ab8af54a70818fcdf3b9086666691f834d1ba0e2bec7fbf8cf1239c77018->enter($__internal_92b7ab8af54a70818fcdf3b9086666691f834d1ba0e2bec7fbf8cf1239c77018_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_92b7ab8af54a70818fcdf3b9086666691f834d1ba0e2bec7fbf8cf1239c77018->leave($__internal_92b7ab8af54a70818fcdf3b9086666691f834d1ba0e2bec7fbf8cf1239c77018_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "C:\\Users\\David\\Projekte\\Koifutter\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_row.html.php");
    }
}
