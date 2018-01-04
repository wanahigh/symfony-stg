<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_10fb4d073906cad45eabf8661696d57ca5cb44eb75ff166fce9d187d649d5b19 extends Twig_Template
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
        $__internal_899108de5dc5e850ccdd386d47e703e688196344cbb88cf4cec8113a6d4c6e6e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_899108de5dc5e850ccdd386d47e703e688196344cbb88cf4cec8113a6d4c6e6e->enter($__internal_899108de5dc5e850ccdd386d47e703e688196344cbb88cf4cec8113a6d4c6e6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_6e66fa14f9f78f9c7468e822cec83d87037784e40b8b7e9a4a9aa36e18eab214 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e66fa14f9f78f9c7468e822cec83d87037784e40b8b7e9a4a9aa36e18eab214->enter($__internal_6e66fa14f9f78f9c7468e822cec83d87037784e40b8b7e9a4a9aa36e18eab214_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_899108de5dc5e850ccdd386d47e703e688196344cbb88cf4cec8113a6d4c6e6e->leave($__internal_899108de5dc5e850ccdd386d47e703e688196344cbb88cf4cec8113a6d4c6e6e_prof);

        
        $__internal_6e66fa14f9f78f9c7468e822cec83d87037784e40b8b7e9a4a9aa36e18eab214->leave($__internal_6e66fa14f9f78f9c7468e822cec83d87037784e40b8b7e9a4a9aa36e18eab214_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/var/www/html/symfony-stg/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
