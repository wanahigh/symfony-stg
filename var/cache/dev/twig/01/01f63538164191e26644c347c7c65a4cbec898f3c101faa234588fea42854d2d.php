<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_91b67f433abce1ed199e8157fe0558421c904bf0c273fae20e08cb78dcfd896f extends Twig_Template
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
        $__internal_419868be82f8f1a51a5ce46b78731f48bfab2f9474f4ca6d5e42bdad7cdb3fa7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_419868be82f8f1a51a5ce46b78731f48bfab2f9474f4ca6d5e42bdad7cdb3fa7->enter($__internal_419868be82f8f1a51a5ce46b78731f48bfab2f9474f4ca6d5e42bdad7cdb3fa7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_d05cda9c26e0791718b54ed2929681b382493e15675d6067e6e9ac1f66745c53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d05cda9c26e0791718b54ed2929681b382493e15675d6067e6e9ac1f66745c53->enter($__internal_d05cda9c26e0791718b54ed2929681b382493e15675d6067e6e9ac1f66745c53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_419868be82f8f1a51a5ce46b78731f48bfab2f9474f4ca6d5e42bdad7cdb3fa7->leave($__internal_419868be82f8f1a51a5ce46b78731f48bfab2f9474f4ca6d5e42bdad7cdb3fa7_prof);

        
        $__internal_d05cda9c26e0791718b54ed2929681b382493e15675d6067e6e9ac1f66745c53->leave($__internal_d05cda9c26e0791718b54ed2929681b382493e15675d6067e6e9ac1f66745c53_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "/var/www/html/symfony-stg/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
    }
}
