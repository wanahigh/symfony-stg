<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_34c88b78d3af81f9ac24533a86a16fadf654d9497d8d0de3b4ef2c40d3b5e46a extends Twig_Template
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
        $__internal_c425c1c5f89954536b901c5089169e676112972f729bc8af1f4fbe0787ba7a55 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c425c1c5f89954536b901c5089169e676112972f729bc8af1f4fbe0787ba7a55->enter($__internal_c425c1c5f89954536b901c5089169e676112972f729bc8af1f4fbe0787ba7a55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_fb29fc013c15d13ce3d6ea8e79dd5c3fee25b474be854b682ec544b7a9c955ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb29fc013c15d13ce3d6ea8e79dd5c3fee25b474be854b682ec544b7a9c955ae->enter($__internal_fb29fc013c15d13ce3d6ea8e79dd5c3fee25b474be854b682ec544b7a9c955ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_c425c1c5f89954536b901c5089169e676112972f729bc8af1f4fbe0787ba7a55->leave($__internal_c425c1c5f89954536b901c5089169e676112972f729bc8af1f4fbe0787ba7a55_prof);

        
        $__internal_fb29fc013c15d13ce3d6ea8e79dd5c3fee25b474be854b682ec544b7a9c955ae->leave($__internal_fb29fc013c15d13ce3d6ea8e79dd5c3fee25b474be854b682ec544b7a9c955ae_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "/var/www/html/symfony-stg/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_widget.html.php");
    }
}
