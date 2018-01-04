<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_b9597a1a81f8694f53aceb869b6298c4f7a25194c77728195910e6f88484ee83 extends Twig_Template
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
        $__internal_ca1668e4c980b1241781e3a83568aedfa7a16fb0c0b8f9b0ca1c1684f657a395 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca1668e4c980b1241781e3a83568aedfa7a16fb0c0b8f9b0ca1c1684f657a395->enter($__internal_ca1668e4c980b1241781e3a83568aedfa7a16fb0c0b8f9b0ca1c1684f657a395_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_cd9e5559da989a665bcfb397fe9c280c63011119ab43c412f6d073cdac7f6431 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd9e5559da989a665bcfb397fe9c280c63011119ab43c412f6d073cdac7f6431->enter($__internal_cd9e5559da989a665bcfb397fe9c280c63011119ab43c412f6d073cdac7f6431_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_ca1668e4c980b1241781e3a83568aedfa7a16fb0c0b8f9b0ca1c1684f657a395->leave($__internal_ca1668e4c980b1241781e3a83568aedfa7a16fb0c0b8f9b0ca1c1684f657a395_prof);

        
        $__internal_cd9e5559da989a665bcfb397fe9c280c63011119ab43c412f6d073cdac7f6431->leave($__internal_cd9e5559da989a665bcfb397fe9c280c63011119ab43c412f6d073cdac7f6431_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "/var/www/html/symfony-stg/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_compound.html.php");
    }
}
