<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_b1f638739527b7c234625819feb6597e9279898ef908a11c82e71d45cf1997a6 extends Twig_Template
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
        $__internal_32ee57f133d2be1587679153a6efde83f2383af1ff9893717256469643e9bdb4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32ee57f133d2be1587679153a6efde83f2383af1ff9893717256469643e9bdb4->enter($__internal_32ee57f133d2be1587679153a6efde83f2383af1ff9893717256469643e9bdb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_70d5ac7b4e12837c6b71fa930c2dc56cbfe630839800c7034919bb55c2e57f33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70d5ac7b4e12837c6b71fa930c2dc56cbfe630839800c7034919bb55c2e57f33->enter($__internal_70d5ac7b4e12837c6b71fa930c2dc56cbfe630839800c7034919bb55c2e57f33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_32ee57f133d2be1587679153a6efde83f2383af1ff9893717256469643e9bdb4->leave($__internal_32ee57f133d2be1587679153a6efde83f2383af1ff9893717256469643e9bdb4_prof);

        
        $__internal_70d5ac7b4e12837c6b71fa930c2dc56cbfe630839800c7034919bb55c2e57f33->leave($__internal_70d5ac7b4e12837c6b71fa930c2dc56cbfe630839800c7034919bb55c2e57f33_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "/var/www/html/symfony-stg/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_simple.html.php");
    }
}
