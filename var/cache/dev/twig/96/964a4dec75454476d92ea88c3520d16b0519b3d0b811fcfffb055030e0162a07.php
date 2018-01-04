<?php

/* AcmeActuBundle:Default:index.html.twig */
class __TwigTemplate_7d9b894bf74e0538fa53f557df5d438dd0580d9fef9aab6dc7cfc97ed497cd32 extends Twig_Template
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
        $__internal_c01c6888402f8aadfa44889290a077fa8efa97d6a14b35618f081cbb3688f952 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c01c6888402f8aadfa44889290a077fa8efa97d6a14b35618f081cbb3688f952->enter($__internal_c01c6888402f8aadfa44889290a077fa8efa97d6a14b35618f081cbb3688f952_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AcmeActuBundle:Default:index.html.twig"));

        $__internal_78cd3a93a97ec07fcdf49604148ab92f5d4f19ea695712f5dad846cc2e83b39d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78cd3a93a97ec07fcdf49604148ab92f5d4f19ea695712f5dad846cc2e83b39d->enter($__internal_78cd3a93a97ec07fcdf49604148ab92f5d4f19ea695712f5dad846cc2e83b39d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AcmeActuBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        // line 2
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2, $this->getSourceContext()); })()), 'form_start');
        echo "
    ";
        // line 4
        echo "
    ";
        // line 5
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 5, $this->getSourceContext()); })()), "image", array()), 'row');
        echo "
";
        // line 6
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 6, $this->getSourceContext()); })()), 'form_end');
        
        $__internal_c01c6888402f8aadfa44889290a077fa8efa97d6a14b35618f081cbb3688f952->leave($__internal_c01c6888402f8aadfa44889290a077fa8efa97d6a14b35618f081cbb3688f952_prof);

        
        $__internal_78cd3a93a97ec07fcdf49604148ab92f5d4f19ea695712f5dad846cc2e83b39d->leave($__internal_78cd3a93a97ec07fcdf49604148ab92f5d4f19ea695712f5dad846cc2e83b39d_prof);

    }

    public function getTemplateName()
    {
        return "AcmeActuBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 6,  35 => 5,  32 => 4,  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("Hello World!
{{ form_start(form) }}
    {# ... #}

    {{ form_row(form.image) }}
{{ form_end(form) }}", "AcmeActuBundle:Default:index.html.twig", "/var/www/html/symfony-stg/src/Acme/ActuBundle/Resources/views/Default/index.html.twig");
    }
}
