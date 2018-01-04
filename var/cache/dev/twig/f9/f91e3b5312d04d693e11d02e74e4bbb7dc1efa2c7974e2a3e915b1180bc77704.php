<?php

/* ::index.html.twig */
class __TwigTemplate_91eee038022e953bd1549c63494c5351b6a44563ae67ff29890f8d07eb517f47 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "::index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a23eaccb3b62b75edc731f5fa17ee67b2ffedc03796a7dd4447556dffa0de1ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a23eaccb3b62b75edc731f5fa17ee67b2ffedc03796a7dd4447556dffa0de1ef->enter($__internal_a23eaccb3b62b75edc731f5fa17ee67b2ffedc03796a7dd4447556dffa0de1ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::index.html.twig"));

        $__internal_31d22cc9aa9df3e05ec2fd7e52002af78e4ee252381c4b248e4b3a03dcf7b7f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31d22cc9aa9df3e05ec2fd7e52002af78e4ee252381c4b248e4b3a03dcf7b7f0->enter($__internal_31d22cc9aa9df3e05ec2fd7e52002af78e4ee252381c4b248e4b3a03dcf7b7f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a23eaccb3b62b75edc731f5fa17ee67b2ffedc03796a7dd4447556dffa0de1ef->leave($__internal_a23eaccb3b62b75edc731f5fa17ee67b2ffedc03796a7dd4447556dffa0de1ef_prof);

        
        $__internal_31d22cc9aa9df3e05ec2fd7e52002af78e4ee252381c4b248e4b3a03dcf7b7f0->leave($__internal_31d22cc9aa9df3e05ec2fd7e52002af78e4ee252381c4b248e4b3a03dcf7b7f0_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_de7e9eb909ed1995d6846cd47837c523bd10c4178eb543f8bd212ace81f1bedc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de7e9eb909ed1995d6846cd47837c523bd10c4178eb543f8bd212ace81f1bedc->enter($__internal_de7e9eb909ed1995d6846cd47837c523bd10c4178eb543f8bd212ace81f1bedc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_dca483f6a78c1dc1c369d91c1fc387d93dafac9904271d3b2218617ed87ab2a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dca483f6a78c1dc1c369d91c1fc387d93dafac9904271d3b2218617ed87ab2a5->enter($__internal_dca483f6a78c1dc1c369d91c1fc387d93dafac9904271d3b2218617ed87ab2a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"slider\">
        <ul class=\"slides\">
            <li>
                <img src=\"https://lorempixel.com/580/250/nature/1\"> <!-- random image -->
                <div class=\"caption center-align\">
                    <h3>This is our big Tagline!</h3>
                    <h5 class=\"light grey-text text-lighten-3\">Here's our small slogan.</h5>
                </div>
            </li>
            <li>
                <img src=\"https://lorempixel.com/580/250/nature/2\"> <!-- random image -->
                <div class=\"caption left-align\">
                    <h3>Left Aligned Caption</h3>
                    <h5 class=\"light grey-text text-lighten-3\">Here's our small slogan.</h5>
                </div>
            </li>
            <li>
                <img src=\"https://lorempixel.com/580/250/nature/3\"> <!-- random image -->
                <div class=\"caption right-align\">
                    <h3>Right Aligned Caption</h3>
                    <h5 class=\"light grey-text text-lighten-3\">Here's our small slogan.</h5>
                </div>
            </li>
            <li>
                <img src=\"https://lorempixel.com/580/250/nature/4\"> <!-- random image -->
                <div class=\"caption center-align\">
                    <h3>This is our big Tagline!</h3>
                    <h5 class=\"light grey-text text-lighten-3\">Here's our small slogan.</h5>
                </div>
            </li>
        </ul>
    </div>";
        // line 38
        echo "<div class=\"section white\">
        <div class=\"row container\">
            <h2 class=\"header\">Myriapolis</h2>
            <p class=\"grey-text text-darken-3 lighten-3\">Parallax is an effect where the background content or image in this case, is moved at a different speed than the foreground content while scrolling.</p>
        </div>
    </div>
    <div class=\"parallax-container\">
        <div class=\"parallax\"><img src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(""), "html", null, true);
        echo "\"></div>
    </div>";
        // line 49
        echo "<div class=\"carousel carousel-slider center\" data-indicators=\"true\">
        <div class=\"carousel-fixed-item center\">
            <a class=\"btn waves-effect white grey-text darken-text-2\">accueil</a>
        </div>
        <div class=\"carousel-item red white-text\" href=\"#one!\">
            <h2>First Panel</h2>
            <p class=\"white-text\">This is your first panel</p>
        </div>
        <div class=\"carousel-item amber white-text\" href=\"#two!\">
            <h2>Second Panel</h2>
            <p class=\"white-text\">This is your second panel</p>
        </div>
        <div class=\"carousel-item green white-text\" href=\"#three!\">
            <h2>Third Panel</h2>
            <p class=\"white-text\">This is your third panel</p>
        </div>
        <div class=\"carousel-item blue white-text\" href=\"#four!\">
            <h2>Fourth Panel</h2>
            <p class=\"white-text\">This is your fourth panel</p>
        </div>
    </div>";
        // line 74
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_dca483f6a78c1dc1c369d91c1fc387d93dafac9904271d3b2218617ed87ab2a5->leave($__internal_dca483f6a78c1dc1c369d91c1fc387d93dafac9904271d3b2218617ed87ab2a5_prof);

        
        $__internal_de7e9eb909ed1995d6846cd47837c523bd10c4178eb543f8bd212ace81f1bedc->leave($__internal_de7e9eb909ed1995d6846cd47837c523bd10c4178eb543f8bd212ace81f1bedc_prof);

    }

    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_22f6b321383205c9e420ddbeeb69f6b6907d632f97e3d0d7c33cde520589d557 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22f6b321383205c9e420ddbeeb69f6b6907d632f97e3d0d7c33cde520589d557->enter($__internal_22f6b321383205c9e420ddbeeb69f6b6907d632f97e3d0d7c33cde520589d557_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_0255b419aaf0c9a8a2d97ebab4c56d794fc64341aadd33663c98bf492588a78d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0255b419aaf0c9a8a2d97ebab4c56d794fc64341aadd33663c98bf492588a78d->enter($__internal_0255b419aaf0c9a8a2d97ebab4c56d794fc64341aadd33663c98bf492588a78d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 75
        echo "        <script> \$(document).ready(function(){
                \$('.carousel.carousel-slider').carousel({fullWidth: true})});
            \$('.carousel').carousel({
                padding: 200
            });
            autoplay()
            function autoplay() {
                \$('.carousel').carousel('next');
                setTimeout(autoplay, 4500);
            }
            \$(document).ready(function(){
                \$('.parallax').parallax();
            });

            \$(document).ready(function(){
                \$('.slider').slider();
            });

        </script>

    ";
        
        $__internal_0255b419aaf0c9a8a2d97ebab4c56d794fc64341aadd33663c98bf492588a78d->leave($__internal_0255b419aaf0c9a8a2d97ebab4c56d794fc64341aadd33663c98bf492588a78d_prof);

        
        $__internal_22f6b321383205c9e420ddbeeb69f6b6907d632f97e3d0d7c33cde520589d557->leave($__internal_22f6b321383205c9e420ddbeeb69f6b6907d632f97e3d0d7c33cde520589d557_prof);

    }

    public function getTemplateName()
    {
        return "::index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 75,  118 => 74,  96 => 49,  92 => 45,  83 => 38,  50 => 4,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '::base.html.twig' %}

{% block body %}
    <div class=\"slider\">
        <ul class=\"slides\">
            <li>
                <img src=\"https://lorempixel.com/580/250/nature/1\"> <!-- random image -->
                <div class=\"caption center-align\">
                    <h3>This is our big Tagline!</h3>
                    <h5 class=\"light grey-text text-lighten-3\">Here's our small slogan.</h5>
                </div>
            </li>
            <li>
                <img src=\"https://lorempixel.com/580/250/nature/2\"> <!-- random image -->
                <div class=\"caption left-align\">
                    <h3>Left Aligned Caption</h3>
                    <h5 class=\"light grey-text text-lighten-3\">Here's our small slogan.</h5>
                </div>
            </li>
            <li>
                <img src=\"https://lorempixel.com/580/250/nature/3\"> <!-- random image -->
                <div class=\"caption right-align\">
                    <h3>Right Aligned Caption</h3>
                    <h5 class=\"light grey-text text-lighten-3\">Here's our small slogan.</h5>
                </div>
            </li>
            <li>
                <img src=\"https://lorempixel.com/580/250/nature/4\"> <!-- random image -->
                <div class=\"caption center-align\">
                    <h3>This is our big Tagline!</h3>
                    <h5 class=\"light grey-text text-lighten-3\">Here's our small slogan.</h5>
                </div>
            </li>
        </ul>
    </div>
    {#---------------------------------------------------------------------------------------------------------#}

    <div class=\"section white\">
        <div class=\"row container\">
            <h2 class=\"header\">Myriapolis</h2>
            <p class=\"grey-text text-darken-3 lighten-3\">Parallax is an effect where the background content or image in this case, is moved at a different speed than the foreground content while scrolling.</p>
        </div>
    </div>
    <div class=\"parallax-container\">
        <div class=\"parallax\"><img src=\"{{ asset('') }}\"></div>
    </div>
    {#---------------------------------------------------------------------------------------------------------#}

    <div class=\"carousel carousel-slider center\" data-indicators=\"true\">
        <div class=\"carousel-fixed-item center\">
            <a class=\"btn waves-effect white grey-text darken-text-2\">accueil</a>
        </div>
        <div class=\"carousel-item red white-text\" href=\"#one!\">
            <h2>First Panel</h2>
            <p class=\"white-text\">This is your first panel</p>
        </div>
        <div class=\"carousel-item amber white-text\" href=\"#two!\">
            <h2>Second Panel</h2>
            <p class=\"white-text\">This is your second panel</p>
        </div>
        <div class=\"carousel-item green white-text\" href=\"#three!\">
            <h2>Third Panel</h2>
            <p class=\"white-text\">This is your third panel</p>
        </div>
        <div class=\"carousel-item blue white-text\" href=\"#four!\">
            <h2>Fourth Panel</h2>
            <p class=\"white-text\">This is your fourth panel</p>
        </div>
    </div>
{#---------------------------------------------------------------------------------------------------------#}



    {% block javascripts %}
        <script> \$(document).ready(function(){
                \$('.carousel.carousel-slider').carousel({fullWidth: true})});
            \$('.carousel').carousel({
                padding: 200
            });
            autoplay()
            function autoplay() {
                \$('.carousel').carousel('next');
                setTimeout(autoplay, 4500);
            }
            \$(document).ready(function(){
                \$('.parallax').parallax();
            });

            \$(document).ready(function(){
                \$('.slider').slider();
            });

        </script>

    {% endblock %}
{% endblock %}
", "::index.html.twig", "/var/www/html/symfony-stg/app/Resources/views/index.html.twig");
    }
}
