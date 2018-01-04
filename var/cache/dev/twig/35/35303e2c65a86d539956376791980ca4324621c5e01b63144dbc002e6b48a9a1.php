<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_b97be77b74cc7f1764b7c345c1a442d3e2ec49f1eb82ba0d633314825b19d2ed extends Twig_Template
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
        $__internal_633ff3d8aa7c6fc97350626d88d115932e6ba1adaaef157f59292b8df4e8d6d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_633ff3d8aa7c6fc97350626d88d115932e6ba1adaaef157f59292b8df4e8d6d1->enter($__internal_633ff3d8aa7c6fc97350626d88d115932e6ba1adaaef157f59292b8df4e8d6d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_c851811bcdddf827dc87d0df4bbcfac414067f44d568194afaea1ab228cfb84f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c851811bcdddf827dc87d0df4bbcfac414067f44d568194afaea1ab228cfb84f->enter($__internal_c851811bcdddf827dc87d0df4bbcfac414067f44d568194afaea1ab228cfb84f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 1, $this->getSourceContext()); })()), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_633ff3d8aa7c6fc97350626d88d115932e6ba1adaaef157f59292b8df4e8d6d1->leave($__internal_633ff3d8aa7c6fc97350626d88d115932e6ba1adaaef157f59292b8df4e8d6d1_prof);

        
        $__internal_c851811bcdddf827dc87d0df4bbcfac414067f44d568194afaea1ab228cfb84f->leave($__internal_c851811bcdddf827dc87d0df4bbcfac414067f44d568194afaea1ab228cfb84f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "/var/www/html/symfony-stg/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/money_widget.html.php");
    }
}
