<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_1bf698c8af22e1004b04a632aada1b17d33e9fcd80242aea3939bdd86e7c95fc extends Twig_Template
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
        $__internal_dd26b6d10f412220ac84f43c984f2ff09a3a7e82b5660bdd18d0d6e25ea90b76 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd26b6d10f412220ac84f43c984f2ff09a3a7e82b5660bdd18d0d6e25ea90b76->enter($__internal_dd26b6d10f412220ac84f43c984f2ff09a3a7e82b5660bdd18d0d6e25ea90b76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_0e2423822d4292ee6dc3a65eddfe8f64e029747c97253a341a8d25f4756dcce2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e2423822d4292ee6dc3a65eddfe8f64e029747c97253a341a8d25f4756dcce2->enter($__internal_0e2423822d4292ee6dc3a65eddfe8f64e029747c97253a341a8d25f4756dcce2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_dd26b6d10f412220ac84f43c984f2ff09a3a7e82b5660bdd18d0d6e25ea90b76->leave($__internal_dd26b6d10f412220ac84f43c984f2ff09a3a7e82b5660bdd18d0d6e25ea90b76_prof);

        
        $__internal_0e2423822d4292ee6dc3a65eddfe8f64e029747c97253a341a8d25f4756dcce2->leave($__internal_0e2423822d4292ee6dc3a65eddfe8f64e029747c97253a341a8d25f4756dcce2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/var/www/html/symfony-stg/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
