<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_6272dc9ab3da1414f1c835b1d616a3a8717a40ff6a20c17d867ea022e7a4d410 extends Twig_Template
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
        $__internal_e4bf074cd30abba5d9ff388f8cbdfc9193b3336a1e1e50b9d2d52c668520404d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4bf074cd30abba5d9ff388f8cbdfc9193b3336a1e1e50b9d2d52c668520404d->enter($__internal_e4bf074cd30abba5d9ff388f8cbdfc9193b3336a1e1e50b9d2d52c668520404d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_14a24dabd3dfe4d44f0afdebee641c5c5ad5f3abcf6220aa11fc7cc54f48dd66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14a24dabd3dfe4d44f0afdebee641c5c5ad5f3abcf6220aa11fc7cc54f48dd66->enter($__internal_14a24dabd3dfe4d44f0afdebee641c5c5ad5f3abcf6220aa11fc7cc54f48dd66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes'); ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form); ?>
        </td>
    </tr>
    <?php endif; ?>
    <?php echo \$view['form']->block(\$form, 'form_rows'); ?>
    <?php echo \$view['form']->rest(\$form); ?>
</table>
";
        
        $__internal_e4bf074cd30abba5d9ff388f8cbdfc9193b3336a1e1e50b9d2d52c668520404d->leave($__internal_e4bf074cd30abba5d9ff388f8cbdfc9193b3336a1e1e50b9d2d52c668520404d_prof);

        
        $__internal_14a24dabd3dfe4d44f0afdebee641c5c5ad5f3abcf6220aa11fc7cc54f48dd66->leave($__internal_14a24dabd3dfe4d44f0afdebee641c5c5ad5f3abcf6220aa11fc7cc54f48dd66_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes'); ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form); ?>
        </td>
    </tr>
    <?php endif; ?>
    <?php echo \$view['form']->block(\$form, 'form_rows'); ?>
    <?php echo \$view['form']->rest(\$form); ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "/var/www/html/symfony-stg/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_widget_compound.html.php");
    }
}
