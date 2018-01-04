<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_81b9a4cfb6c8fc0ebac087319cac35c804b9f31656594bc76a1a63ac7758130a extends Twig_Template
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
        $__internal_ce1ad2a1e1674bb6a535e785da76ca85f7caa1cbd16cb7ae81fc86ab204cd275 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce1ad2a1e1674bb6a535e785da76ca85f7caa1cbd16cb7ae81fc86ab204cd275->enter($__internal_ce1ad2a1e1674bb6a535e785da76ca85f7caa1cbd16cb7ae81fc86ab204cd275_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_663fbe30f76fdf004da0feb72df3d1b3347e38b23af836da90b65787ad400cd7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_663fbe30f76fdf004da0feb72df3d1b3347e38b23af836da90b65787ad400cd7->enter($__internal_663fbe30f76fdf004da0feb72df3d1b3347e38b23af836da90b65787ad400cd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_ce1ad2a1e1674bb6a535e785da76ca85f7caa1cbd16cb7ae81fc86ab204cd275->leave($__internal_ce1ad2a1e1674bb6a535e785da76ca85f7caa1cbd16cb7ae81fc86ab204cd275_prof);

        
        $__internal_663fbe30f76fdf004da0feb72df3d1b3347e38b23af836da90b65787ad400cd7->leave($__internal_663fbe30f76fdf004da0feb72df3d1b3347e38b23af836da90b65787ad400cd7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/var/www/html/symfony-stg/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
