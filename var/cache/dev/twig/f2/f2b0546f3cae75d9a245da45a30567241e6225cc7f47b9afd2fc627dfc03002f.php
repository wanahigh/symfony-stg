<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_23c3b06366171b2e81fe2e489e9a9e81ffd06ccc89dd97d5fb59ff3dc8bddd13 extends Twig_Template
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
        $__internal_21cc72dae5e61d902d11e28b34d5d4a9ec056ddec10d9bb295b43b9a7b15e67a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21cc72dae5e61d902d11e28b34d5d4a9ec056ddec10d9bb295b43b9a7b15e67a->enter($__internal_21cc72dae5e61d902d11e28b34d5d4a9ec056ddec10d9bb295b43b9a7b15e67a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_5c0b3c80e3189395620a468544b6725a50dca2c08e2e7ad0f9a685c0f09de6a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c0b3c80e3189395620a468544b6725a50dca2c08e2e7ad0f9a685c0f09de6a9->enter($__internal_5c0b3c80e3189395620a468544b6725a50dca2c08e2e7ad0f9a685c0f09de6a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_21cc72dae5e61d902d11e28b34d5d4a9ec056ddec10d9bb295b43b9a7b15e67a->leave($__internal_21cc72dae5e61d902d11e28b34d5d4a9ec056ddec10d9bb295b43b9a7b15e67a_prof);

        
        $__internal_5c0b3c80e3189395620a468544b6725a50dca2c08e2e7ad0f9a685c0f09de6a9->leave($__internal_5c0b3c80e3189395620a468544b6725a50dca2c08e2e7ad0f9a685c0f09de6a9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/var/www/html/symfony-stg/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
