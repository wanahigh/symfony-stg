<?php

/* AcmeFilialeBundle:Default:index.html.twig */
class __TwigTemplate_adb470759bb94ede3de558648073c5243c33e80492ff2ccac3b052e5d4169cdf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "AcmeFilialeBundle:Default:index.html.twig", 1);
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
        $__internal_1ed2e78c110f2bd4872e6a9e82ce3ccfbb93024956d7c5ed7458fdeb193d8bef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ed2e78c110f2bd4872e6a9e82ce3ccfbb93024956d7c5ed7458fdeb193d8bef->enter($__internal_1ed2e78c110f2bd4872e6a9e82ce3ccfbb93024956d7c5ed7458fdeb193d8bef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AcmeFilialeBundle:Default:index.html.twig"));

        $__internal_48e68e5e17fc961d83cb2de78819f889a33ad6c8e764db25c2300ad86ca18907 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48e68e5e17fc961d83cb2de78819f889a33ad6c8e764db25c2300ad86ca18907->enter($__internal_48e68e5e17fc961d83cb2de78819f889a33ad6c8e764db25c2300ad86ca18907_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AcmeFilialeBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1ed2e78c110f2bd4872e6a9e82ce3ccfbb93024956d7c5ed7458fdeb193d8bef->leave($__internal_1ed2e78c110f2bd4872e6a9e82ce3ccfbb93024956d7c5ed7458fdeb193d8bef_prof);

        
        $__internal_48e68e5e17fc961d83cb2de78819f889a33ad6c8e764db25c2300ad86ca18907->leave($__internal_48e68e5e17fc961d83cb2de78819f889a33ad6c8e764db25c2300ad86ca18907_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_27eab5f4ead894f114fea638441212455ab81652f98e0c0f5cdcbb8934bcf84f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27eab5f4ead894f114fea638441212455ab81652f98e0c0f5cdcbb8934bcf84f->enter($__internal_27eab5f4ead894f114fea638441212455ab81652f98e0c0f5cdcbb8934bcf84f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_72dc242550f1650b39348a93bf5e5bc1a07c41d4a0d83f666623d0b9df087861 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72dc242550f1650b39348a93bf5e5bc1a07c41d4a0d83f666623d0b9df087861->enter($__internal_72dc242550f1650b39348a93bf5e5bc1a07c41d4a0d83f666623d0b9df087861_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    <div class=\"row\">
        <div class=\"col s12 m9 l10\">
            <div id=\"introduction\" class=\"section scrollspy\">
                <p>Content </p>
            </div>

            <div id=\"structure\" class=\"section scrollspy\">
                <p>Content </p>
            </div>

            <div id=\"initialization\" class=\"section scrollspy\">
                <p>Content </p>
            </div>
        </div>
        <div class=\"col hide-on-small-only m3 l2\">
            <ul class=\"section table-of-contents\">
                <li><a href=\"#introduction\">Introduction</a></li>
                <li><a href=\"#structure\">Structure</a></li>
                <li><a href=\"#initialization\">Intialization</a></li>
            </ul>
        </div>
    </div>

    <script>  \$(document).ready(function(){
            \$('.scrollspy').scrollSpy();
        });</script>


";
        
        $__internal_72dc242550f1650b39348a93bf5e5bc1a07c41d4a0d83f666623d0b9df087861->leave($__internal_72dc242550f1650b39348a93bf5e5bc1a07c41d4a0d83f666623d0b9df087861_prof);

        
        $__internal_27eab5f4ead894f114fea638441212455ab81652f98e0c0f5cdcbb8934bcf84f->leave($__internal_27eab5f4ead894f114fea638441212455ab81652f98e0c0f5cdcbb8934bcf84f_prof);

    }

    public function getTemplateName()
    {
        return "AcmeFilialeBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 5,  40 => 4,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{#------------------------------------------HEADER END---------------------------------------------------------------    #}
{% block body %}
    <div class=\"row\">
        <div class=\"col s12 m9 l10\">
            <div id=\"introduction\" class=\"section scrollspy\">
                <p>Content </p>
            </div>

            <div id=\"structure\" class=\"section scrollspy\">
                <p>Content </p>
            </div>

            <div id=\"initialization\" class=\"section scrollspy\">
                <p>Content </p>
            </div>
        </div>
        <div class=\"col hide-on-small-only m3 l2\">
            <ul class=\"section table-of-contents\">
                <li><a href=\"#introduction\">Introduction</a></li>
                <li><a href=\"#structure\">Structure</a></li>
                <li><a href=\"#initialization\">Intialization</a></li>
            </ul>
        </div>
    </div>

    <script>  \$(document).ready(function(){
            \$('.scrollspy').scrollSpy();
        });</script>


{% endblock %}






    {#-------------------------------------------FOOTER BEGIN---------------------------------------------------    #}


", "AcmeFilialeBundle:Default:index.html.twig", "/var/www/html/symfony-stg/src/Acme/FilialeBundle/Resources/views/Default/index.html.twig");
    }
}
