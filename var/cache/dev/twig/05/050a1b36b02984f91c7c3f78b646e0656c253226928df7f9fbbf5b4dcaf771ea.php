<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_0179119bf82e440bbf380cf5f4cb6d9145f033f2e2e2ce8e708b157bfe9905c7 extends Twig_Template
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
        $__internal_9ec812b426d5135e53b6c8680fd400259e5dc04bed7e2430f464019c5cc6657e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ec812b426d5135e53b6c8680fd400259e5dc04bed7e2430f464019c5cc6657e->enter($__internal_9ec812b426d5135e53b6c8680fd400259e5dc04bed7e2430f464019c5cc6657e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_1030f31025a8fd607fa4a11bb52636f07ea4ea7a88f2e6f3c71b111f62fc2f8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1030f31025a8fd607fa4a11bb52636f07ea4ea7a88f2e6f3c71b111f62fc2f8f->enter($__internal_1030f31025a8fd607fa4a11bb52636f07ea4ea7a88f2e6f3c71b111f62fc2f8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_9ec812b426d5135e53b6c8680fd400259e5dc04bed7e2430f464019c5cc6657e->leave($__internal_9ec812b426d5135e53b6c8680fd400259e5dc04bed7e2430f464019c5cc6657e_prof);

        
        $__internal_1030f31025a8fd607fa4a11bb52636f07ea4ea7a88f2e6f3c71b111f62fc2f8f->leave($__internal_1030f31025a8fd607fa4a11bb52636f07ea4ea7a88f2e6f3c71b111f62fc2f8f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/var/www/html/symfony-stg/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
