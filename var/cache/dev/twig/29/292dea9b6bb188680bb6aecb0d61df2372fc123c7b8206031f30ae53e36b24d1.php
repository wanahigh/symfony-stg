<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_0193cc713abfe6cf9fd8c9de3253105c2101af57c22c456c78b04dc4e582c91c extends Twig_Template
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
        $__internal_4a6f8e4e47da8a169e90a5b82be29df62e65fe72af3370bed1db08dae0419523 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a6f8e4e47da8a169e90a5b82be29df62e65fe72af3370bed1db08dae0419523->enter($__internal_4a6f8e4e47da8a169e90a5b82be29df62e65fe72af3370bed1db08dae0419523_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_fd5de845044fe1471f453d83421ee1f4244bd78cd80bb60eeb7ffe11b715bd92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd5de845044fe1471f453d83421ee1f4244bd78cd80bb60eeb7ffe11b715bd92->enter($__internal_fd5de845044fe1471f453d83421ee1f4244bd78cd80bb60eeb7ffe11b715bd92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_4a6f8e4e47da8a169e90a5b82be29df62e65fe72af3370bed1db08dae0419523->leave($__internal_4a6f8e4e47da8a169e90a5b82be29df62e65fe72af3370bed1db08dae0419523_prof);

        
        $__internal_fd5de845044fe1471f453d83421ee1f4244bd78cd80bb60eeb7ffe11b715bd92->leave($__internal_fd5de845044fe1471f453d83421ee1f4244bd78cd80bb60eeb7ffe11b715bd92_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "/var/www/html/symfony-stg/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/checkbox_widget.html.php");
    }
}
