<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_647b6dd210976a497664e7f341c00db350bac77d79a3735a9a081c31cf20c6fa extends Twig_Template
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
        $__internal_b23bedd39f2494464a50f15b637a4eb7ac8f5baeda93689736a761c92dbe6167 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b23bedd39f2494464a50f15b637a4eb7ac8f5baeda93689736a761c92dbe6167->enter($__internal_b23bedd39f2494464a50f15b637a4eb7ac8f5baeda93689736a761c92dbe6167_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_473a0149af559f15bd31bfdc91c13b2c83b70a2671c177bcdac15fe7e65280be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_473a0149af559f15bd31bfdc91c13b2c83b70a2671c177bcdac15fe7e65280be->enter($__internal_473a0149af559f15bd31bfdc91c13b2c83b70a2671c177bcdac15fe7e65280be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_b23bedd39f2494464a50f15b637a4eb7ac8f5baeda93689736a761c92dbe6167->leave($__internal_b23bedd39f2494464a50f15b637a4eb7ac8f5baeda93689736a761c92dbe6167_prof);

        
        $__internal_473a0149af559f15bd31bfdc91c13b2c83b70a2671c177bcdac15fe7e65280be->leave($__internal_473a0149af559f15bd31bfdc91c13b2c83b70a2671c177bcdac15fe7e65280be_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/var/www/html/symfony-stg/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
