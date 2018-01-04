<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_832561e986ceb76c3dca583e740719af65c9154ff54c57e0db761a751280ed53 extends Twig_Template
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
        $__internal_090101c07efb88248bb026f258f24def21ad013df420636104c2298b26dd4265 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_090101c07efb88248bb026f258f24def21ad013df420636104c2298b26dd4265->enter($__internal_090101c07efb88248bb026f258f24def21ad013df420636104c2298b26dd4265_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_e8d36c470d1b43c265bd99b17affd5cfe0b8d6e859b933ee36a28e1210989aa4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8d36c470d1b43c265bd99b17affd5cfe0b8d6e859b933ee36a28e1210989aa4->enter($__internal_e8d36c470d1b43c265bd99b17affd5cfe0b8d6e859b933ee36a28e1210989aa4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_090101c07efb88248bb026f258f24def21ad013df420636104c2298b26dd4265->leave($__internal_090101c07efb88248bb026f258f24def21ad013df420636104c2298b26dd4265_prof);

        
        $__internal_e8d36c470d1b43c265bd99b17affd5cfe0b8d6e859b933ee36a28e1210989aa4->leave($__internal_e8d36c470d1b43c265bd99b17affd5cfe0b8d6e859b933ee36a28e1210989aa4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/var/www/html/symfony-stg/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
