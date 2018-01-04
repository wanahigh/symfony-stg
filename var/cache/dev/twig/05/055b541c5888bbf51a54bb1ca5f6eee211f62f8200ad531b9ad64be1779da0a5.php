<?php

/* ::accueil.html.twig */
class __TwigTemplate_0f8388992bc449c42fbaf2a5c1d5146e681223341ee9fd1bf88b34abc77eb417 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig ", "::accueil.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig ";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2c95134a48904d0be1e49f291d1a461f8580463ac343a4195cb66c4fa82931a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c95134a48904d0be1e49f291d1a461f8580463ac343a4195cb66c4fa82931a3->enter($__internal_2c95134a48904d0be1e49f291d1a461f8580463ac343a4195cb66c4fa82931a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::accueil.html.twig"));

        $__internal_44d4c89a699706930a259742ce3cb04c4c78d55a5f98aed4d6a2e1cceb699e75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44d4c89a699706930a259742ce3cb04c4c78d55a5f98aed4d6a2e1cceb699e75->enter($__internal_44d4c89a699706930a259742ce3cb04c4c78d55a5f98aed4d6a2e1cceb699e75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::accueil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2c95134a48904d0be1e49f291d1a461f8580463ac343a4195cb66c4fa82931a3->leave($__internal_2c95134a48904d0be1e49f291d1a461f8580463ac343a4195cb66c4fa82931a3_prof);

        
        $__internal_44d4c89a699706930a259742ce3cb04c4c78d55a5f98aed4d6a2e1cceb699e75->leave($__internal_44d4c89a699706930a259742ce3cb04c4c78d55a5f98aed4d6a2e1cceb699e75_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_1cdb7fd46daf9d156fe952ddfb95551ca615f6e05719daa305befb90bd703e87 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1cdb7fd46daf9d156fe952ddfb95551ca615f6e05719daa305befb90bd703e87->enter($__internal_1cdb7fd46daf9d156fe952ddfb95551ca615f6e05719daa305befb90bd703e87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4f679316c8414b29ae5d593df4c023fcfebb47a054f7b54763b4671d7d9b1406 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f679316c8414b29ae5d593df4c023fcfebb47a054f7b54763b4671d7d9b1406->enter($__internal_4f679316c8414b29ae5d593df4c023fcfebb47a054f7b54763b4671d7d9b1406_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<div class=\"parallax-container\">
    <div class=\"parallax\"><img src=\"logo-filiere-spmeca-01.png\"></div>
</div>
<div class=\"section white\">
    <div class=\"row container\">
        <h2 class=\"header\">Parallax</h2>
        <p class=\"grey-text text-darken-3 lighten-3\">Parallax is an effect where the background content or image in this case, is moved at a different speed than the foreground content while scrolling.</p>
    </div>
</div>
<div class=\"parallax-container\">
    <div class=\"parallax\"><img src=\"images/parallax2.jpg\"></div>
</div>

";
        
        $__internal_4f679316c8414b29ae5d593df4c023fcfebb47a054f7b54763b4671d7d9b1406->leave($__internal_4f679316c8414b29ae5d593df4c023fcfebb47a054f7b54763b4671d7d9b1406_prof);

        
        $__internal_1cdb7fd46daf9d156fe952ddfb95551ca615f6e05719daa305befb90bd703e87->leave($__internal_1cdb7fd46daf9d156fe952ddfb95551ca615f6e05719daa305befb90bd703e87_prof);

    }

    public function getTemplateName()
    {
        return "::accueil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 3,  40 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig ' %}
{% block body %}
<div class=\"parallax-container\">
    <div class=\"parallax\"><img src=\"logo-filiere-spmeca-01.png\"></div>
</div>
<div class=\"section white\">
    <div class=\"row container\">
        <h2 class=\"header\">Parallax</h2>
        <p class=\"grey-text text-darken-3 lighten-3\">Parallax is an effect where the background content or image in this case, is moved at a different speed than the foreground content while scrolling.</p>
    </div>
</div>
<div class=\"parallax-container\">
    <div class=\"parallax\"><img src=\"images/parallax2.jpg\"></div>
</div>

{% endblock %}", "::accueil.html.twig", "/var/www/html/symfony-stg/app/Resources/views/accueil.html.twig");
    }
}
