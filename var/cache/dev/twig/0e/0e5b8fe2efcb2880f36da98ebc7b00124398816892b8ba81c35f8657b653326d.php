<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_150a7250fb9b6283e58ff1296fd403d8e9d3753551065dd3f233b9ef47110cd8 extends Twig_Template
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
        $__internal_05f676ce0b6c72ae3e33f39b8e4495c9750575ce229b859503343d7455f2952e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05f676ce0b6c72ae3e33f39b8e4495c9750575ce229b859503343d7455f2952e->enter($__internal_05f676ce0b6c72ae3e33f39b8e4495c9750575ce229b859503343d7455f2952e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_433c18a87e3beaf581b832de3a64f1347e55fb7a3548864361167844e524c827 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_433c18a87e3beaf581b832de3a64f1347e55fb7a3548864361167844e524c827->enter($__internal_433c18a87e3beaf581b832de3a64f1347e55fb7a3548864361167844e524c827_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_05f676ce0b6c72ae3e33f39b8e4495c9750575ce229b859503343d7455f2952e->leave($__internal_05f676ce0b6c72ae3e33f39b8e4495c9750575ce229b859503343d7455f2952e_prof);

        
        $__internal_433c18a87e3beaf581b832de3a64f1347e55fb7a3548864361167844e524c827->leave($__internal_433c18a87e3beaf581b832de3a64f1347e55fb7a3548864361167844e524c827_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/var/www/html/symfony-stg/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/collection_widget.html.php");
    }
}
