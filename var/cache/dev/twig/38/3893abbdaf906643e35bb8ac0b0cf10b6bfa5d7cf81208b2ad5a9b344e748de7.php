<?php

/* AcmeHomeBundle::index.html.twig */
class __TwigTemplate_4690427564b32034df35b70d4a72e7aae294ba2c787f4c4dd3d150d43bb2f425 extends Twig_Template
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
        $__internal_f5658dd15a5bb110fdea3933b43e56d42d3b464c4150b23228a8bd5eaae63a03 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5658dd15a5bb110fdea3933b43e56d42d3b464c4150b23228a8bd5eaae63a03->enter($__internal_f5658dd15a5bb110fdea3933b43e56d42d3b464c4150b23228a8bd5eaae63a03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AcmeHomeBundle::index.html.twig"));

        $__internal_544a5a011c063cfa16446b9cde5a02894176c5b4b3c1f0dd25eac78a862139a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_544a5a011c063cfa16446b9cde5a02894176c5b4b3c1f0dd25eac78a862139a8->enter($__internal_544a5a011c063cfa16446b9cde5a02894176c5b4b3c1f0dd25eac78a862139a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AcmeHomeBundle::index.html.twig"));

        // line 2
        echo "

";
        // line 5
        echo "
";
        // line 7
        echo "

";
        // line 10
        echo "
";
        // line 12
        echo "

    ";
        // line 15
        echo "
    ";
        // line 17
        echo "
        ";
        // line 19
        echo "
            ";
        // line 21
        echo "
                ";
        // line 23
        echo "
            ";
        // line 25
        echo "
        ";
        // line 27
        echo "
    ";
        // line 29
        echo "

    ";
        // line 32
        echo "
    ";
        // line 34
        echo "
    ";
        // line 36
        echo "

";
        
        $__internal_f5658dd15a5bb110fdea3933b43e56d42d3b464c4150b23228a8bd5eaae63a03->leave($__internal_f5658dd15a5bb110fdea3933b43e56d42d3b464c4150b23228a8bd5eaae63a03_prof);

        
        $__internal_544a5a011c063cfa16446b9cde5a02894176c5b4b3c1f0dd25eac78a862139a8->leave($__internal_544a5a011c063cfa16446b9cde5a02894176c5b4b3c1f0dd25eac78a862139a8_prof);

    }

    public function getTemplateName()
    {
        return "AcmeHomeBundle::index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  74 => 36,  71 => 34,  68 => 32,  64 => 29,  61 => 27,  58 => 25,  55 => 23,  52 => 21,  49 => 19,  46 => 17,  43 => 15,  39 => 12,  36 => 10,  32 => 7,  29 => 5,  25 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/OC/UserBundle/Resources/views/layout.html.twig #}


{# On étend notre layout #}

{#{% extends \"::base.html.twig\" %}#}


{# Dans notre layout, il faut définir le block body #}

{#{% block body %}#}


    {# On affiche les messages flash que définissent les contrôleurs du bundle #}

    {#{% for key, messages in app.session.flashbag.all() %}#}

        {#{% for message in messages %}#}

            {#<div class=\"alert alert-{{ key }}\">#}

                {#{{ message|trans({}, 'FOSUserBundle') }}#}

            {#</div>#}

        {#{% endfor %}#}

    {#{% endfor %}#}


    {# On définit ce block, dans lequel vont venir s'insérer les autres vues du bundle #}

    {#{% block fos_user_content %}#}

    {#{% endblock fos_user_content %}#}


{#{% endblock %}#}", "AcmeHomeBundle::index.html.twig", "/var/www/html/symfony-stg/src/Acme/AdminBundle/Resources/views/index.html.twig");
    }
}
