<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_9d1949df1f92f2d8dc488da9599ba8019801ec31d57cc7bcbb386700bc335a05 extends Twig_Template
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
        $__internal_65f01e39a1b7bac214884e34346cf29d06e00dd79bd4c699e54dc97545bd8452 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65f01e39a1b7bac214884e34346cf29d06e00dd79bd4c699e54dc97545bd8452->enter($__internal_65f01e39a1b7bac214884e34346cf29d06e00dd79bd4c699e54dc97545bd8452_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_a411653b49bdccfe8d628d9ba75bc9643f8d20064a382dd2a2d5da9aacd04434 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a411653b49bdccfe8d628d9ba75bc9643f8d20064a382dd2a2d5da9aacd04434->enter($__internal_a411653b49bdccfe8d628d9ba75bc9643f8d20064a382dd2a2d5da9aacd04434_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_65f01e39a1b7bac214884e34346cf29d06e00dd79bd4c699e54dc97545bd8452->leave($__internal_65f01e39a1b7bac214884e34346cf29d06e00dd79bd4c699e54dc97545bd8452_prof);

        
        $__internal_a411653b49bdccfe8d628d9ba75bc9643f8d20064a382dd2a2d5da9aacd04434->leave($__internal_a411653b49bdccfe8d628d9ba75bc9643f8d20064a382dd2a2d5da9aacd04434_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/var/www/html/symfony-stg/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}
