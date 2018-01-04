<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_2d2d534a0c941a132bf9e03232549e2902670ba02f3048bef8864ac9bb6ac002 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ca4a4fc411322f0a98fa61095e3c43a631e1b18384ba53453336d8a5d7f12bac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca4a4fc411322f0a98fa61095e3c43a631e1b18384ba53453336d8a5d7f12bac->enter($__internal_ca4a4fc411322f0a98fa61095e3c43a631e1b18384ba53453336d8a5d7f12bac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $__internal_ea85ced49a0f11a7980519131a17a0c1c9ff7f9cc6bbae3c6feb6248e431c7d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea85ced49a0f11a7980519131a17a0c1c9ff7f9cc6bbae3c6feb6248e431c7d4->enter($__internal_ea85ced49a0f11a7980519131a17a0c1c9ff7f9cc6bbae3c6feb6248e431c7d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ca4a4fc411322f0a98fa61095e3c43a631e1b18384ba53453336d8a5d7f12bac->leave($__internal_ca4a4fc411322f0a98fa61095e3c43a631e1b18384ba53453336d8a5d7f12bac_prof);

        
        $__internal_ea85ced49a0f11a7980519131a17a0c1c9ff7f9cc6bbae3c6feb6248e431c7d4->leave($__internal_ea85ced49a0f11a7980519131a17a0c1c9ff7f9cc6bbae3c6feb6248e431c7d4_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_cd307f1c61188e6e39fe7226ed049400251c287906d7bfefad4b8a92fa905061 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd307f1c61188e6e39fe7226ed049400251c287906d7bfefad4b8a92fa905061->enter($__internal_cd307f1c61188e6e39fe7226ed049400251c287906d7bfefad4b8a92fa905061_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_a4a603d395b98b2eb2639b2eb25188986491e14fe3a1e68f1ce7861378ae3418 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4a603d395b98b2eb2639b2eb25188986491e14fe3a1e68f1ce7861378ae3418->enter($__internal_a4a603d395b98b2eb2639b2eb25188986491e14fe3a1e68f1ce7861378ae3418_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_a4a603d395b98b2eb2639b2eb25188986491e14fe3a1e68f1ce7861378ae3418->leave($__internal_a4a603d395b98b2eb2639b2eb25188986491e14fe3a1e68f1ce7861378ae3418_prof);

        
        $__internal_cd307f1c61188e6e39fe7226ed049400251c287906d7bfefad4b8a92fa905061->leave($__internal_cd307f1c61188e6e39fe7226ed049400251c287906d7bfefad4b8a92fa905061_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Profile/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:show.html.twig", "/var/www/html/symfony-stg/vendor/friendsofsymfony/user-bundle/Resources/views/Profile/show.html.twig");
    }
}
