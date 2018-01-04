<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_7dd8c9894cbfc03f2efb2cac0c63b1adcbc7da101dc793f54633a17ed0519a3a extends Twig_Template
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
        $__internal_2b72efd7d5b313ac92c9b4d572606a35f5e7636740983f3583c7b986bd02a3f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b72efd7d5b313ac92c9b4d572606a35f5e7636740983f3583c7b986bd02a3f2->enter($__internal_2b72efd7d5b313ac92c9b4d572606a35f5e7636740983f3583c7b986bd02a3f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_d43973a471d5f1a6b3f628fc5649d8f674f739fa25a49a3c7af4b20cd25fa377 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d43973a471d5f1a6b3f628fc5649d8f674f739fa25a49a3c7af4b20cd25fa377->enter($__internal_d43973a471d5f1a6b3f628fc5649d8f674f739fa25a49a3c7af4b20cd25fa377_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_2b72efd7d5b313ac92c9b4d572606a35f5e7636740983f3583c7b986bd02a3f2->leave($__internal_2b72efd7d5b313ac92c9b4d572606a35f5e7636740983f3583c7b986bd02a3f2_prof);

        
        $__internal_d43973a471d5f1a6b3f628fc5649d8f674f739fa25a49a3c7af4b20cd25fa377->leave($__internal_d43973a471d5f1a6b3f628fc5649d8f674f739fa25a49a3c7af4b20cd25fa377_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/var/www/html/symfony-stg/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
