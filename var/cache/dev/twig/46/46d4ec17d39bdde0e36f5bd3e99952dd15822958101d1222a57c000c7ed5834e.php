<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_95d19563e60c0d887c4027d8b2e3f5aca02a70723e631af6b2e916c1e14a0b6c extends Twig_Template
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
        $__internal_86f6e7b6f7497076ae85baede65f9255a016afd123cdea54828d59bb57b7247e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86f6e7b6f7497076ae85baede65f9255a016afd123cdea54828d59bb57b7247e->enter($__internal_86f6e7b6f7497076ae85baede65f9255a016afd123cdea54828d59bb57b7247e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_4e762b8c2dc18d9b130c67b133d5dd0e02c498466abc7517dc0a2a361430aa27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e762b8c2dc18d9b130c67b133d5dd0e02c498466abc7517dc0a2a361430aa27->enter($__internal_4e762b8c2dc18d9b130c67b133d5dd0e02c498466abc7517dc0a2a361430aa27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_86f6e7b6f7497076ae85baede65f9255a016afd123cdea54828d59bb57b7247e->leave($__internal_86f6e7b6f7497076ae85baede65f9255a016afd123cdea54828d59bb57b7247e_prof);

        
        $__internal_4e762b8c2dc18d9b130c67b133d5dd0e02c498466abc7517dc0a2a361430aa27->leave($__internal_4e762b8c2dc18d9b130c67b133d5dd0e02c498466abc7517dc0a2a361430aa27_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_container_attributes.html.php", "/var/www/html/symfony-stg/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_container_attributes.html.php");
    }
}
