<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_da8f4f6cbd4b3d61334f2e4d5353f2eecf9c5578132f723e90664b89da91057b extends Twig_Template
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
        $__internal_70581e87ab2bf06348ca94a241a625bfdcbd48c7582cac8b670a4718fc3d25af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70581e87ab2bf06348ca94a241a625bfdcbd48c7582cac8b670a4718fc3d25af->enter($__internal_70581e87ab2bf06348ca94a241a625bfdcbd48c7582cac8b670a4718fc3d25af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_e10d8a6329cf1efc63fb5507973edb98eb66753ea2e2e3775cde8f1637956d9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e10d8a6329cf1efc63fb5507973edb98eb66753ea2e2e3775cde8f1637956d9b->enter($__internal_e10d8a6329cf1efc63fb5507973edb98eb66753ea2e2e3775cde8f1637956d9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_70581e87ab2bf06348ca94a241a625bfdcbd48c7582cac8b670a4718fc3d25af->leave($__internal_70581e87ab2bf06348ca94a241a625bfdcbd48c7582cac8b670a4718fc3d25af_prof);

        
        $__internal_e10d8a6329cf1efc63fb5507973edb98eb66753ea2e2e3775cde8f1637956d9b->leave($__internal_e10d8a6329cf1efc63fb5507973edb98eb66753ea2e2e3775cde8f1637956d9b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/var/www/html/symfony-stg/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
