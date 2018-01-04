<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_f050ee9f0934ae1551e0ab9b8f3f3b293201c330c243bc09885f744477d43b9d extends Twig_Template
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
        $__internal_21744d7ed5340784fe29ebea6bd878babaae37f41880fca1e641e96ce0ec72f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21744d7ed5340784fe29ebea6bd878babaae37f41880fca1e641e96ce0ec72f5->enter($__internal_21744d7ed5340784fe29ebea6bd878babaae37f41880fca1e641e96ce0ec72f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_4b82570d7fe47528d3c0230eac9fe9aed993553afb83458df80d04e356041860 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b82570d7fe47528d3c0230eac9fe9aed993553afb83458df80d04e356041860->enter($__internal_4b82570d7fe47528d3c0230eac9fe9aed993553afb83458df80d04e356041860_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_21744d7ed5340784fe29ebea6bd878babaae37f41880fca1e641e96ce0ec72f5->leave($__internal_21744d7ed5340784fe29ebea6bd878babaae37f41880fca1e641e96ce0ec72f5_prof);

        
        $__internal_4b82570d7fe47528d3c0230eac9fe9aed993553afb83458df80d04e356041860->leave($__internal_4b82570d7fe47528d3c0230eac9fe9aed993553afb83458df80d04e356041860_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/var/www/html/symfony-stg/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
