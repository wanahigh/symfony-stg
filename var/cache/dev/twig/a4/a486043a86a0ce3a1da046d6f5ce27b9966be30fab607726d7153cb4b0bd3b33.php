<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_f45507bd92659b4dc669e37e5f1e8f5d3cbf6cb42dde5861a5a3c38705b7453e extends Twig_Template
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
        $__internal_2f6fb5d128b06b7206a49952dc454b176f98e89356678f109034921e826bff4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f6fb5d128b06b7206a49952dc454b176f98e89356678f109034921e826bff4c->enter($__internal_2f6fb5d128b06b7206a49952dc454b176f98e89356678f109034921e826bff4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_d4b9d6291fd059924534590d456c8697534a88d1c25d4a8b2bf06f5871dd68bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4b9d6291fd059924534590d456c8697534a88d1c25d4a8b2bf06f5871dd68bb->enter($__internal_d4b9d6291fd059924534590d456c8697534a88d1c25d4a8b2bf06f5871dd68bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_2f6fb5d128b06b7206a49952dc454b176f98e89356678f109034921e826bff4c->leave($__internal_2f6fb5d128b06b7206a49952dc454b176f98e89356678f109034921e826bff4c_prof);

        
        $__internal_d4b9d6291fd059924534590d456c8697534a88d1c25d4a8b2bf06f5871dd68bb->leave($__internal_d4b9d6291fd059924534590d456c8697534a88d1c25d4a8b2bf06f5871dd68bb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/var/www/html/symfony-stg/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
