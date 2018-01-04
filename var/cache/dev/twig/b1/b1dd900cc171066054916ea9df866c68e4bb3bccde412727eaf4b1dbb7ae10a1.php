<?php

/* :entity/advert:new.html.twig */
class __TwigTemplate_71c636dee908ca709082d61b7a4aec344d411ff80d10efea564ffd073dcca1c2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":entity/advert:new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ef8215e8c04dd7889610f1dbaeed681fe64a2105a8b48bdea6891969b9d17984 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef8215e8c04dd7889610f1dbaeed681fe64a2105a8b48bdea6891969b9d17984->enter($__internal_ef8215e8c04dd7889610f1dbaeed681fe64a2105a8b48bdea6891969b9d17984_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":entity/advert:new.html.twig"));

        $__internal_53c8f637b874e305ba2b7afae2326c6dd0e0f224e7e736a40a70d3fed4f9ab7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53c8f637b874e305ba2b7afae2326c6dd0e0f224e7e736a40a70d3fed4f9ab7e->enter($__internal_53c8f637b874e305ba2b7afae2326c6dd0e0f224e7e736a40a70d3fed4f9ab7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":entity/advert:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ef8215e8c04dd7889610f1dbaeed681fe64a2105a8b48bdea6891969b9d17984->leave($__internal_ef8215e8c04dd7889610f1dbaeed681fe64a2105a8b48bdea6891969b9d17984_prof);

        
        $__internal_53c8f637b874e305ba2b7afae2326c6dd0e0f224e7e736a40a70d3fed4f9ab7e->leave($__internal_53c8f637b874e305ba2b7afae2326c6dd0e0f224e7e736a40a70d3fed4f9ab7e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3850212ff02ca028a8f9803acfb2f823c1e16cdabcdb159ab116162cf491ec96 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3850212ff02ca028a8f9803acfb2f823c1e16cdabcdb159ab116162cf491ec96->enter($__internal_3850212ff02ca028a8f9803acfb2f823c1e16cdabcdb159ab116162cf491ec96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d265fdcfe8af028b86fcd48bd96f41c51f1202fe928702a9b7f4b186d0d87c08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d265fdcfe8af028b86fcd48bd96f41c51f1202fe928702a9b7f4b186d0d87c08->enter($__internal_d265fdcfe8af028b86fcd48bd96f41c51f1202fe928702a9b7f4b186d0d87c08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Advert creation</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 6, $this->getSourceContext()); })()), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 7, $this->getSourceContext()); })()), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 9, $this->getSourceContext()); })()), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("entity_advert_index");
        echo "\">Retour</a>
     </li>
    </ul>
";
        
        $__internal_d265fdcfe8af028b86fcd48bd96f41c51f1202fe928702a9b7f4b186d0d87c08->leave($__internal_d265fdcfe8af028b86fcd48bd96f41c51f1202fe928702a9b7f4b186d0d87c08_prof);

        
        $__internal_3850212ff02ca028a8f9803acfb2f823c1e16cdabcdb159ab116162cf491ec96->leave($__internal_3850212ff02ca028a8f9803acfb2f823c1e16cdabcdb159ab116162cf491ec96_prof);

    }

    public function getTemplateName()
    {
        return ":entity/advert:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Advert creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('entity_advert_index') }}\">Retour</a>
     </li>
    </ul>
{% endblock %}
", ":entity/advert:new.html.twig", "/var/www/html/symfony-stg/app/Resources/views/entity/advert/new.html.twig");
    }
}
