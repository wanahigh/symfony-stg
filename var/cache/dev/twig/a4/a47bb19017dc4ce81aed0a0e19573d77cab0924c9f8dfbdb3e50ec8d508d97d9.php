<?php

/* WebProfilerBundle:Collector:ajax.html.twig */
class __TwigTemplate_0d612582cdd332fb79e58d3b2cfa3768990f8cfb90f7a7245bc845e0138f4170 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e5c7f97bae6b21f20049feb8f19d078deb5f3315454ffd0cee30c26e50e08058 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5c7f97bae6b21f20049feb8f19d078deb5f3315454ffd0cee30c26e50e08058->enter($__internal_e5c7f97bae6b21f20049feb8f19d078deb5f3315454ffd0cee30c26e50e08058_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_7dc55cb4c7c50f153027c1fda68c1236e0387184fd0a942421533f1b5d1e5696 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7dc55cb4c7c50f153027c1fda68c1236e0387184fd0a942421533f1b5d1e5696->enter($__internal_7dc55cb4c7c50f153027c1fda68c1236e0387184fd0a942421533f1b5d1e5696_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e5c7f97bae6b21f20049feb8f19d078deb5f3315454ffd0cee30c26e50e08058->leave($__internal_e5c7f97bae6b21f20049feb8f19d078deb5f3315454ffd0cee30c26e50e08058_prof);

        
        $__internal_7dc55cb4c7c50f153027c1fda68c1236e0387184fd0a942421533f1b5d1e5696->leave($__internal_7dc55cb4c7c50f153027c1fda68c1236e0387184fd0a942421533f1b5d1e5696_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_dad27605afb716272ecfe99d5b9222d50c5898c6c7b04bc89f6c1673dad2dbb6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dad27605afb716272ecfe99d5b9222d50c5898c6c7b04bc89f6c1673dad2dbb6->enter($__internal_dad27605afb716272ecfe99d5b9222d50c5898c6c7b04bc89f6c1673dad2dbb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_bda319f652bc631e054979bcbf569479b67f6099b42916aa3234210f6c95e303 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bda319f652bc631e054979bcbf569479b67f6099b42916aa3234210f6c95e303->enter($__internal_bda319f652bc631e054979bcbf569479b67f6099b42916aa3234210f6c95e303_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_bda319f652bc631e054979bcbf569479b67f6099b42916aa3234210f6c95e303->leave($__internal_bda319f652bc631e054979bcbf569479b67f6099b42916aa3234210f6c95e303_prof);

        
        $__internal_dad27605afb716272ecfe99d5b9222d50c5898c6c7b04bc89f6c1673dad2dbb6->leave($__internal_dad27605afb716272ecfe99d5b9222d50c5898c6c7b04bc89f6c1673dad2dbb6_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "WebProfilerBundle:Collector:ajax.html.twig", "/var/www/html/symfony-stg/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
