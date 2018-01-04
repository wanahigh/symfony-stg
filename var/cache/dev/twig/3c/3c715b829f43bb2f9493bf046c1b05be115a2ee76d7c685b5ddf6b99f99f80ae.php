<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_8803b0b78840a02753355cb266c2dcc78a1b17aea4dc03102512788cbf4f3569 extends Twig_Template
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
        $__internal_08304a3c7e1c46d4c36ee9e2e53bb671fccd3369cecca09cc6d444835bb30722 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08304a3c7e1c46d4c36ee9e2e53bb671fccd3369cecca09cc6d444835bb30722->enter($__internal_08304a3c7e1c46d4c36ee9e2e53bb671fccd3369cecca09cc6d444835bb30722_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_04ca44f18704cdb45fd144684210ceebf1213e36e84c5e74fe852b655ccc35c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04ca44f18704cdb45fd144684210ceebf1213e36e84c5e74fe852b655ccc35c3->enter($__internal_04ca44f18704cdb45fd144684210ceebf1213e36e84c5e74fe852b655ccc35c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_08304a3c7e1c46d4c36ee9e2e53bb671fccd3369cecca09cc6d444835bb30722->leave($__internal_08304a3c7e1c46d4c36ee9e2e53bb671fccd3369cecca09cc6d444835bb30722_prof);

        
        $__internal_04ca44f18704cdb45fd144684210ceebf1213e36e84c5e74fe852b655ccc35c3->leave($__internal_04ca44f18704cdb45fd144684210ceebf1213e36e84c5e74fe852b655ccc35c3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/var/www/html/symfony-stg/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
