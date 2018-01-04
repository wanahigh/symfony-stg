<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_39fb44afa3f6cfff2c39a1565823e95f0a4591d903de9713951b97fd31d9b168 extends Twig_Template
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
        $__internal_d215020e4613ac7cb0702aeb63576961701a01e7be1595e7e1c62e5a21971412 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d215020e4613ac7cb0702aeb63576961701a01e7be1595e7e1c62e5a21971412->enter($__internal_d215020e4613ac7cb0702aeb63576961701a01e7be1595e7e1c62e5a21971412_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_a7bc3a768ecd533bc94ac650e2e77204c64251d436d9bc5c64b41178544c9b17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7bc3a768ecd533bc94ac650e2e77204c64251d436d9bc5c64b41178544c9b17->enter($__internal_a7bc3a768ecd533bc94ac650e2e77204c64251d436d9bc5c64b41178544c9b17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_d215020e4613ac7cb0702aeb63576961701a01e7be1595e7e1c62e5a21971412->leave($__internal_d215020e4613ac7cb0702aeb63576961701a01e7be1595e7e1c62e5a21971412_prof);

        
        $__internal_a7bc3a768ecd533bc94ac650e2e77204c64251d436d9bc5c64b41178544c9b17->leave($__internal_a7bc3a768ecd533bc94ac650e2e77204c64251d436d9bc5c64b41178544c9b17_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/var/www/html/symfony-stg/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
