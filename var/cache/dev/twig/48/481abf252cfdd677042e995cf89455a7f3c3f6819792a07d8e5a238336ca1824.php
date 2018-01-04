<?php

/* @Framework/Form/widget_attributes.html.php */
class __TwigTemplate_b7cb7b49a279a265cea9a403a6392ac6ee3047b5c8f68f260bb482a283fb0a5f extends Twig_Template
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
        $__internal_143a929b1fa74371f13fb675166ca80e2dcacd34eed0b8b9ca37e4cc7fbb60f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_143a929b1fa74371f13fb675166ca80e2dcacd34eed0b8b9ca37e4cc7fbb60f7->enter($__internal_143a929b1fa74371f13fb675166ca80e2dcacd34eed0b8b9ca37e4cc7fbb60f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_a0b7127b11dc916422a3b4840db243328d34c45ba8ce3002ab048a127d0e8ac6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0b7127b11dc916422a3b4840db243328d34c45ba8ce3002ab048a127d0e8ac6->enter($__internal_a0b7127b11dc916422a3b4840db243328d34c45ba8ce3002ab048a127d0e8ac6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_143a929b1fa74371f13fb675166ca80e2dcacd34eed0b8b9ca37e4cc7fbb60f7->leave($__internal_143a929b1fa74371f13fb675166ca80e2dcacd34eed0b8b9ca37e4cc7fbb60f7_prof);

        
        $__internal_a0b7127b11dc916422a3b4840db243328d34c45ba8ce3002ab048a127d0e8ac6->leave($__internal_a0b7127b11dc916422a3b4840db243328d34c45ba8ce3002ab048a127d0e8ac6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_attributes.html.php", "/var/www/html/symfony-stg/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_attributes.html.php");
    }
}
