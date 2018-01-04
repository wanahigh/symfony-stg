<?php

/* AcmeWorkBundle:Default:index.html.twig */
class __TwigTemplate_f3ee24e3dfc4a07966a7cb047373b43fc42462483a06cdfa5b019be1accc51d0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AcmeWorkBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_30a86b964b224671fb22c6f025ec12b89e4d737c179999a7fadd9882c26109e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_30a86b964b224671fb22c6f025ec12b89e4d737c179999a7fadd9882c26109e0->enter($__internal_30a86b964b224671fb22c6f025ec12b89e4d737c179999a7fadd9882c26109e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AcmeWorkBundle:Default:index.html.twig"));

        $__internal_77d8b0882258fa79f8d37839760028b194db453f1dcf7575dba5f167c14899ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77d8b0882258fa79f8d37839760028b194db453f1dcf7575dba5f167c14899ec->enter($__internal_77d8b0882258fa79f8d37839760028b194db453f1dcf7575dba5f167c14899ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AcmeWorkBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_30a86b964b224671fb22c6f025ec12b89e4d737c179999a7fadd9882c26109e0->leave($__internal_30a86b964b224671fb22c6f025ec12b89e4d737c179999a7fadd9882c26109e0_prof);

        
        $__internal_77d8b0882258fa79f8d37839760028b194db453f1dcf7575dba5f167c14899ec->leave($__internal_77d8b0882258fa79f8d37839760028b194db453f1dcf7575dba5f167c14899ec_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_db6c77dd69cf005a84ceb4a8233f2314c7795ae6a9191ab84dfaef1bdda3de1a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db6c77dd69cf005a84ceb4a8233f2314c7795ae6a9191ab84dfaef1bdda3de1a->enter($__internal_db6c77dd69cf005a84ceb4a8233f2314c7795ae6a9191ab84dfaef1bdda3de1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_059425543515f26354dda7a90f9723753d38ce0ee2a2f80571620f60b0fa0295 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_059425543515f26354dda7a90f9723753d38ce0ee2a2f80571620f60b0fa0295->enter($__internal_059425543515f26354dda7a90f9723753d38ce0ee2a2f80571620f60b0fa0295_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "<h1>hello world</h1>

";
        
        $__internal_059425543515f26354dda7a90f9723753d38ce0ee2a2f80571620f60b0fa0295->leave($__internal_059425543515f26354dda7a90f9723753d38ce0ee2a2f80571620f60b0fa0295_prof);

        
        $__internal_db6c77dd69cf005a84ceb4a8233f2314c7795ae6a9191ab84dfaef1bdda3de1a->leave($__internal_db6c77dd69cf005a84ceb4a8233f2314c7795ae6a9191ab84dfaef1bdda3de1a_prof);

    }

    public function getTemplateName()
    {
        return "AcmeWorkBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 7,  40 => 6,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '::base.html.twig' %}




{% block body %}
<h1>hello world</h1>

{% endblock %}









", "AcmeWorkBundle:Default:index.html.twig", "/var/www/html/symfony-stg/src/Acme/WorkBundle/Resources/views/Default/index.html.twig");
    }
}
