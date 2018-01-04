<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_7c1a0fb87f9d1adc56ad2b6bfeca092fd118f42d68bfdae3426238f6a4df990f extends Twig_Template
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
        $__internal_ad73ab1c0e10760420351dde3cce5efc4c6b1c9b6d2bfc82fd0cd36dd370b06a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad73ab1c0e10760420351dde3cce5efc4c6b1c9b6d2bfc82fd0cd36dd370b06a->enter($__internal_ad73ab1c0e10760420351dde3cce5efc4c6b1c9b6d2bfc82fd0cd36dd370b06a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_a99d34b029daa640492b1a1e6f2af4a8fbf2700088b01c958c9f6845730b3eae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a99d34b029daa640492b1a1e6f2af4a8fbf2700088b01c958c9f6845730b3eae->enter($__internal_a99d34b029daa640492b1a1e6f2af4a8fbf2700088b01c958c9f6845730b3eae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_ad73ab1c0e10760420351dde3cce5efc4c6b1c9b6d2bfc82fd0cd36dd370b06a->leave($__internal_ad73ab1c0e10760420351dde3cce5efc4c6b1c9b6d2bfc82fd0cd36dd370b06a_prof);

        
        $__internal_a99d34b029daa640492b1a1e6f2af4a8fbf2700088b01c958c9f6845730b3eae->leave($__internal_a99d34b029daa640492b1a1e6f2af4a8fbf2700088b01c958c9f6845730b3eae_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "/var/www/html/symfony-stg/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_attributes.html.php");
    }
}
