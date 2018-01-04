<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_26b370434e2987fa8f4beb4c92e308c2046906f0f012d6aa24e41d8c82537047 extends Twig_Template
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
        $__internal_ef255b0cc34c326b2ab4c1d6b44cdad6d70080547ad77d564f68b00c7cf7be8d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef255b0cc34c326b2ab4c1d6b44cdad6d70080547ad77d564f68b00c7cf7be8d->enter($__internal_ef255b0cc34c326b2ab4c1d6b44cdad6d70080547ad77d564f68b00c7cf7be8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_0aa8d9e5866914408f401824bad23cfd8a4ffd271384e81a60aa1bec17f62d52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0aa8d9e5866914408f401824bad23cfd8a4ffd271384e81a60aa1bec17f62d52->enter($__internal_0aa8d9e5866914408f401824bad23cfd8a4ffd271384e81a60aa1bec17f62d52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_ef255b0cc34c326b2ab4c1d6b44cdad6d70080547ad77d564f68b00c7cf7be8d->leave($__internal_ef255b0cc34c326b2ab4c1d6b44cdad6d70080547ad77d564f68b00c7cf7be8d_prof);

        
        $__internal_0aa8d9e5866914408f401824bad23cfd8a4ffd271384e81a60aa1bec17f62d52->leave($__internal_0aa8d9e5866914408f401824bad23cfd8a4ffd271384e81a60aa1bec17f62d52_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/var/www/html/symfony-stg/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
