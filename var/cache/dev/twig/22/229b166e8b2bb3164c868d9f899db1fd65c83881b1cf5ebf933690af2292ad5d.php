<?php

/* :entity/actor:new.html.twig */
class __TwigTemplate_53e897f1e35b88a4b273099428c43536704a10c82000fa10baf32809adb04717 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":entity/actor:new.html.twig", 1);
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
        $__internal_38ea21989d2a4adcdbed769851a930fe48b48be3c1df5a91787cc76dc568f6cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38ea21989d2a4adcdbed769851a930fe48b48be3c1df5a91787cc76dc568f6cc->enter($__internal_38ea21989d2a4adcdbed769851a930fe48b48be3c1df5a91787cc76dc568f6cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":entity/actor:new.html.twig"));

        $__internal_decb3d5ebc0fc4f096394f7d08c95b2602c167a6a58d2d92b12dbbb01ad232c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_decb3d5ebc0fc4f096394f7d08c95b2602c167a6a58d2d92b12dbbb01ad232c7->enter($__internal_decb3d5ebc0fc4f096394f7d08c95b2602c167a6a58d2d92b12dbbb01ad232c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":entity/actor:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_38ea21989d2a4adcdbed769851a930fe48b48be3c1df5a91787cc76dc568f6cc->leave($__internal_38ea21989d2a4adcdbed769851a930fe48b48be3c1df5a91787cc76dc568f6cc_prof);

        
        $__internal_decb3d5ebc0fc4f096394f7d08c95b2602c167a6a58d2d92b12dbbb01ad232c7->leave($__internal_decb3d5ebc0fc4f096394f7d08c95b2602c167a6a58d2d92b12dbbb01ad232c7_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d23bd6c535177005721de0ac2e36fb03e175f00f8be1f85359053aa67e832909 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d23bd6c535177005721de0ac2e36fb03e175f00f8be1f85359053aa67e832909->enter($__internal_d23bd6c535177005721de0ac2e36fb03e175f00f8be1f85359053aa67e832909_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e2e45b720f5505978d5e0ba44819cf6c87d4f6627861048d17b9c917da3bccab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2e45b720f5505978d5e0ba44819cf6c87d4f6627861048d17b9c917da3bccab->enter($__internal_e2e45b720f5505978d5e0ba44819cf6c87d4f6627861048d17b9c917da3bccab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Actor creation</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("entity_actor_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_e2e45b720f5505978d5e0ba44819cf6c87d4f6627861048d17b9c917da3bccab->leave($__internal_e2e45b720f5505978d5e0ba44819cf6c87d4f6627861048d17b9c917da3bccab_prof);

        
        $__internal_d23bd6c535177005721de0ac2e36fb03e175f00f8be1f85359053aa67e832909->leave($__internal_d23bd6c535177005721de0ac2e36fb03e175f00f8be1f85359053aa67e832909_prof);

    }

    public function getTemplateName()
    {
        return ":entity/actor:new.html.twig";
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
    <h1>Actor creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('entity_actor_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", ":entity/actor:new.html.twig", "/var/www/html/symfony-stg/app/Resources/views/entity/actor/new.html.twig");
    }
}
