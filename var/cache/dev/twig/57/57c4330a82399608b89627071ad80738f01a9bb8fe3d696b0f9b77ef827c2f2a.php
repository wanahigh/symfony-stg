<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_d3c7754e6d8840c56237deccb0fa34e0dc753d67e3046cdaac20e393b7668f96 extends Twig_Template
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
        $__internal_788ff022dc0460979ec1014e29bd68caa31782b05ec139145a2ed6e0075721d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_788ff022dc0460979ec1014e29bd68caa31782b05ec139145a2ed6e0075721d9->enter($__internal_788ff022dc0460979ec1014e29bd68caa31782b05ec139145a2ed6e0075721d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_8dc143bcbd788a5e8e7bb33c3801d3d86e00d0f912adfdb1a77dbbf8aa0b1105 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8dc143bcbd788a5e8e7bb33c3801d3d86e00d0f912adfdb1a77dbbf8aa0b1105->enter($__internal_8dc143bcbd788a5e8e7bb33c3801d3d86e00d0f912adfdb1a77dbbf8aa0b1105_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_788ff022dc0460979ec1014e29bd68caa31782b05ec139145a2ed6e0075721d9->leave($__internal_788ff022dc0460979ec1014e29bd68caa31782b05ec139145a2ed6e0075721d9_prof);

        
        $__internal_8dc143bcbd788a5e8e7bb33c3801d3d86e00d0f912adfdb1a77dbbf8aa0b1105->leave($__internal_8dc143bcbd788a5e8e7bb33c3801d3d86e00d0f912adfdb1a77dbbf8aa0b1105_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/var/www/html/symfony-stg/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
