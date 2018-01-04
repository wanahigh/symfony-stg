<?php

/* WebProfilerBundle:Profiler:header.html.twig */
class __TwigTemplate_0a023b4ea10593998fb38a6cdfd52ca63f62f501066cf4b10860ab5f4b2d9a47 extends Twig_Template
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
        $__internal_bd33932e1c9cef4418f07c1a2afdc06e5df4bb70efd71233abc66dd9593a5769 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd33932e1c9cef4418f07c1a2afdc06e5df4bb70efd71233abc66dd9593a5769->enter($__internal_bd33932e1c9cef4418f07c1a2afdc06e5df4bb70efd71233abc66dd9593a5769_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        $__internal_3efa445471db649096af497f7d42a8fef56015b2b96d85337071c2d28e858348 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3efa445471db649096af497f7d42a8fef56015b2b96d85337071c2d28e858348->enter($__internal_3efa445471db649096af497f7d42a8fef56015b2b96d85337071c2d28e858348_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_bd33932e1c9cef4418f07c1a2afdc06e5df4bb70efd71233abc66dd9593a5769->leave($__internal_bd33932e1c9cef4418f07c1a2afdc06e5df4bb70efd71233abc66dd9593a5769_prof);

        
        $__internal_3efa445471db649096af497f7d42a8fef56015b2b96d85337071c2d28e858348->leave($__internal_3efa445471db649096af497f7d42a8fef56015b2b96d85337071c2d28e858348_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "WebProfilerBundle:Profiler:header.html.twig", "/var/www/html/symfony-stg/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/header.html.twig");
    }
}
