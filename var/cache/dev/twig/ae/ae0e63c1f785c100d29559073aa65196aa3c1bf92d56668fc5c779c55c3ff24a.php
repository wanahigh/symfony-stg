<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_f0d58d7e48313ae0d306d3947c53eb51c5f0199b788d84b614ebb6b26ec4d575 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2d3a805114604c64a775fcd6d33b2e42eea6b72e2313f4488e51899375faa955 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d3a805114604c64a775fcd6d33b2e42eea6b72e2313f4488e51899375faa955->enter($__internal_2d3a805114604c64a775fcd6d33b2e42eea6b72e2313f4488e51899375faa955_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_e5ce078b31bac372b9cfd9e1049fe801cb5fe8c2fbed0ec68625fff2f15c9a75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5ce078b31bac372b9cfd9e1049fe801cb5fe8c2fbed0ec68625fff2f15c9a75->enter($__internal_e5ce078b31bac372b9cfd9e1049fe801cb5fe8c2fbed0ec68625fff2f15c9a75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2d3a805114604c64a775fcd6d33b2e42eea6b72e2313f4488e51899375faa955->leave($__internal_2d3a805114604c64a775fcd6d33b2e42eea6b72e2313f4488e51899375faa955_prof);

        
        $__internal_e5ce078b31bac372b9cfd9e1049fe801cb5fe8c2fbed0ec68625fff2f15c9a75->leave($__internal_e5ce078b31bac372b9cfd9e1049fe801cb5fe8c2fbed0ec68625fff2f15c9a75_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_bcb2e80fa376e9bf9f4c5afe8004717a177fe72e44942ce1ddce07c0da02d327 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bcb2e80fa376e9bf9f4c5afe8004717a177fe72e44942ce1ddce07c0da02d327->enter($__internal_bcb2e80fa376e9bf9f4c5afe8004717a177fe72e44942ce1ddce07c0da02d327_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_3042c93b87da0ed7b97ccd836cc3a56f4ea55c74ebec27510040bebe4a7b08f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3042c93b87da0ed7b97ccd836cc3a56f4ea55c74ebec27510040bebe4a7b08f0->enter($__internal_3042c93b87da0ed7b97ccd836cc3a56f4ea55c74ebec27510040bebe4a7b08f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_3042c93b87da0ed7b97ccd836cc3a56f4ea55c74ebec27510040bebe4a7b08f0->leave($__internal_3042c93b87da0ed7b97ccd836cc3a56f4ea55c74ebec27510040bebe4a7b08f0_prof);

        
        $__internal_bcb2e80fa376e9bf9f4c5afe8004717a177fe72e44942ce1ddce07c0da02d327->leave($__internal_bcb2e80fa376e9bf9f4c5afe8004717a177fe72e44942ce1ddce07c0da02d327_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_eb8591b3f7bc28a8b9974f3b8924902b6c128fa91356380503aca9dc60d60f44 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb8591b3f7bc28a8b9974f3b8924902b6c128fa91356380503aca9dc60d60f44->enter($__internal_eb8591b3f7bc28a8b9974f3b8924902b6c128fa91356380503aca9dc60d60f44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_d11e8992426fcdf62388bfd3c9a9db2443859d57dff71b23184eac0248140b8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d11e8992426fcdf62388bfd3c9a9db2443859d57dff71b23184eac0248140b8b->enter($__internal_d11e8992426fcdf62388bfd3c9a9db2443859d57dff71b23184eac0248140b8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_d11e8992426fcdf62388bfd3c9a9db2443859d57dff71b23184eac0248140b8b->leave($__internal_d11e8992426fcdf62388bfd3c9a9db2443859d57dff71b23184eac0248140b8b_prof);

        
        $__internal_eb8591b3f7bc28a8b9974f3b8924902b6c128fa91356380503aca9dc60d60f44->leave($__internal_eb8591b3f7bc28a8b9974f3b8924902b6c128fa91356380503aca9dc60d60f44_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6608b7b19e7271e8e23fe828a0c63bddd4ab995a6071312116c2fa41937801cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6608b7b19e7271e8e23fe828a0c63bddd4ab995a6071312116c2fa41937801cc->enter($__internal_6608b7b19e7271e8e23fe828a0c63bddd4ab995a6071312116c2fa41937801cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_c005f9e42873ff9ac320b9b4ebab633cbce0b379e0cb0fd37308b7a62073bf92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c005f9e42873ff9ac320b9b4ebab633cbce0b379e0cb0fd37308b7a62073bf92->enter($__internal_c005f9e42873ff9ac320b9b4ebab633cbce0b379e0cb0fd37308b7a62073bf92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_c005f9e42873ff9ac320b9b4ebab633cbce0b379e0cb0fd37308b7a62073bf92->leave($__internal_c005f9e42873ff9ac320b9b4ebab633cbce0b379e0cb0fd37308b7a62073bf92_prof);

        
        $__internal_6608b7b19e7271e8e23fe828a0c63bddd4ab995a6071312116c2fa41937801cc->leave($__internal_6608b7b19e7271e8e23fe828a0c63bddd4ab995a6071312116c2fa41937801cc_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "WebProfilerBundle:Collector:router.html.twig", "/var/www/html/symfony-stg/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
