<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_4731b0405176cc6c90d509016f13e086c331353f2158f41d9f6e7ac113dc49b5 extends Twig_Template
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
        $__internal_9373d6483b454063d37756f5e61f1c3cd14025049b78e592f28242e44bd47179 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9373d6483b454063d37756f5e61f1c3cd14025049b78e592f28242e44bd47179->enter($__internal_9373d6483b454063d37756f5e61f1c3cd14025049b78e592f28242e44bd47179_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_397c70fb311007c9680860396061bff9b966a282671acdb6e0d9d78f78be5cf8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_397c70fb311007c9680860396061bff9b966a282671acdb6e0d9d78f78be5cf8->enter($__internal_397c70fb311007c9680860396061bff9b966a282671acdb6e0d9d78f78be5cf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_9373d6483b454063d37756f5e61f1c3cd14025049b78e592f28242e44bd47179->leave($__internal_9373d6483b454063d37756f5e61f1c3cd14025049b78e592f28242e44bd47179_prof);

        
        $__internal_397c70fb311007c9680860396061bff9b966a282671acdb6e0d9d78f78be5cf8->leave($__internal_397c70fb311007c9680860396061bff9b966a282671acdb6e0d9d78f78be5cf8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/var/www/html/symfony-stg/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
