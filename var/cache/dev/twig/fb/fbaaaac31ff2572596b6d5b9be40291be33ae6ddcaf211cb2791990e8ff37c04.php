<?php

/* @Framework/Form/form_start.html.php */
class __TwigTemplate_edf4ec2a396fe40caf56e5599884c952a22c944c9f731548423dfeaab2855b25 extends Twig_Template
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
        $__internal_454c44fba7ed9d8645880f15793259149c138e7c1d0a3ea70aea9876189c43cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_454c44fba7ed9d8645880f15793259149c138e7c1d0a3ea70aea9876189c43cf->enter($__internal_454c44fba7ed9d8645880f15793259149c138e7c1d0a3ea70aea9876189c43cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_start.html.php"));

        $__internal_e0b74e8beafd54ae4dda6fabef50f679daf519af4c354bd98bfe7f2fc2aec7ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0b74e8beafd54ae4dda6fabef50f679daf519af4c354bd98bfe7f2fc2aec7ce->enter($__internal_e0b74e8beafd54ae4dda6fabef50f679daf519af4c354bd98bfe7f2fc2aec7ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_start.html.php"));

        // line 1
        echo "<?php \$method = strtoupper(\$method) ?>
<?php \$form_method = \$method === 'GET' || \$method === 'POST' ? \$method : 'POST' ?>
<form name=\"<?php echo \$name ?>\" method=\"<?php echo strtolower(\$form_method) ?>\"<?php if (\$action !== ''): ?> action=\"<?php echo \$action ?>\"<?php endif ?><?php foreach (\$attr as \$k => \$v) { printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(\$v)); } ?><?php if (\$multipart): ?> enctype=\"multipart/form-data\"<?php endif ?>>
<?php if (\$form_method !== \$method): ?>
    <input type=\"hidden\" name=\"_method\" value=\"<?php echo \$method ?>\" />
<?php endif ?>
";
        
        $__internal_454c44fba7ed9d8645880f15793259149c138e7c1d0a3ea70aea9876189c43cf->leave($__internal_454c44fba7ed9d8645880f15793259149c138e7c1d0a3ea70aea9876189c43cf_prof);

        
        $__internal_e0b74e8beafd54ae4dda6fabef50f679daf519af4c354bd98bfe7f2fc2aec7ce->leave($__internal_e0b74e8beafd54ae4dda6fabef50f679daf519af4c354bd98bfe7f2fc2aec7ce_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_start.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php \$method = strtoupper(\$method) ?>
<?php \$form_method = \$method === 'GET' || \$method === 'POST' ? \$method : 'POST' ?>
<form name=\"<?php echo \$name ?>\" method=\"<?php echo strtolower(\$form_method) ?>\"<?php if (\$action !== ''): ?> action=\"<?php echo \$action ?>\"<?php endif ?><?php foreach (\$attr as \$k => \$v) { printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(\$v)); } ?><?php if (\$multipart): ?> enctype=\"multipart/form-data\"<?php endif ?>>
<?php if (\$form_method !== \$method): ?>
    <input type=\"hidden\" name=\"_method\" value=\"<?php echo \$method ?>\" />
<?php endif ?>
", "@Framework/Form/form_start.html.php", "/var/www/html/symfony-stg/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_start.html.php");
    }
}
