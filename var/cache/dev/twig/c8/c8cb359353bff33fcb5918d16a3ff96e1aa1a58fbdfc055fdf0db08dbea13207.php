<?php

/* @Framework/Form/button_attributes.html.php */
class __TwigTemplate_9fda7f1a14db741f9e032d65a357513d4767941572047e70fcd565499bb10955 extends Twig_Template
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
        $__internal_a1260139826055eec3e63c1d0da993e1623193bae048bb566f95cf0d7a4f8df3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1260139826055eec3e63c1d0da993e1623193bae048bb566f95cf0d7a4f8df3->enter($__internal_a1260139826055eec3e63c1d0da993e1623193bae048bb566f95cf0d7a4f8df3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_f282aadc13532be55d2ff14a5569d754fb8b5a265a67d24635375eb5dcb38a5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f282aadc13532be55d2ff14a5569d754fb8b5a265a67d24635375eb5dcb38a5e->enter($__internal_f282aadc13532be55d2ff14a5569d754fb8b5a265a67d24635375eb5dcb38a5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_a1260139826055eec3e63c1d0da993e1623193bae048bb566f95cf0d7a4f8df3->leave($__internal_a1260139826055eec3e63c1d0da993e1623193bae048bb566f95cf0d7a4f8df3_prof);

        
        $__internal_f282aadc13532be55d2ff14a5569d754fb8b5a265a67d24635375eb5dcb38a5e->leave($__internal_f282aadc13532be55d2ff14a5569d754fb8b5a265a67d24635375eb5dcb38a5e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/button_attributes.html.php", "/var/www/html/symfony-stg/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_attributes.html.php");
    }
}
