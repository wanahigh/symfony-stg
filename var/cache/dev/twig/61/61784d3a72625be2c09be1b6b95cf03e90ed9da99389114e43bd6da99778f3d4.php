<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_29bcfdfc68855135df0f04e7daeadce95b943302ceb4cda11c155d9d73018a07 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0ad112b4f7daffb786ec5bb05150d7a450222a21e0261b71382e5655c54368b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ad112b4f7daffb786ec5bb05150d7a450222a21e0261b71382e5655c54368b3->enter($__internal_0ad112b4f7daffb786ec5bb05150d7a450222a21e0261b71382e5655c54368b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_e29bcee52b7a733f534b080c27bedc4faf05bdb3d62dcfe42a279d7c3853de50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e29bcee52b7a733f534b080c27bedc4faf05bdb3d62dcfe42a279d7c3853de50->enter($__internal_e29bcee52b7a733f534b080c27bedc4faf05bdb3d62dcfe42a279d7c3853de50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0ad112b4f7daffb786ec5bb05150d7a450222a21e0261b71382e5655c54368b3->leave($__internal_0ad112b4f7daffb786ec5bb05150d7a450222a21e0261b71382e5655c54368b3_prof);

        
        $__internal_e29bcee52b7a733f534b080c27bedc4faf05bdb3d62dcfe42a279d7c3853de50->leave($__internal_e29bcee52b7a733f534b080c27bedc4faf05bdb3d62dcfe42a279d7c3853de50_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f7d00a1ed5e9f74ada9931a96db6a5673cecd152039ffbe39c1d8113e9a33425 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7d00a1ed5e9f74ada9931a96db6a5673cecd152039ffbe39c1d8113e9a33425->enter($__internal_f7d00a1ed5e9f74ada9931a96db6a5673cecd152039ffbe39c1d8113e9a33425_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_3249991e3ac913c7519ffabf0c21777a84f9c8724ffcaa70fde12fc61bb24456 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3249991e3ac913c7519ffabf0c21777a84f9c8724ffcaa70fde12fc61bb24456->enter($__internal_3249991e3ac913c7519ffabf0c21777a84f9c8724ffcaa70fde12fc61bb24456_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_3249991e3ac913c7519ffabf0c21777a84f9c8724ffcaa70fde12fc61bb24456->leave($__internal_3249991e3ac913c7519ffabf0c21777a84f9c8724ffcaa70fde12fc61bb24456_prof);

        
        $__internal_f7d00a1ed5e9f74ada9931a96db6a5673cecd152039ffbe39c1d8113e9a33425->leave($__internal_f7d00a1ed5e9f74ada9931a96db6a5673cecd152039ffbe39c1d8113e9a33425_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_4ad0152b427a51841b0b428f5faca24185b62b58616e654fc714e8d1672b0b50 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ad0152b427a51841b0b428f5faca24185b62b58616e654fc714e8d1672b0b50->enter($__internal_4ad0152b427a51841b0b428f5faca24185b62b58616e654fc714e8d1672b0b50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_81edd0eb0d12347cebb0c76e1aaf6658b170b2b437b7907acabff2377dadc970 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81edd0eb0d12347cebb0c76e1aaf6658b170b2b437b7907acabff2377dadc970->enter($__internal_81edd0eb0d12347cebb0c76e1aaf6658b170b2b437b7907acabff2377dadc970_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["file"]) || array_key_exists("file", $context) ? $context["file"] : (function () { throw new Twig_Error_Runtime('Variable "file" does not exist.', 11, $this->getSourceContext()); })()), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, (isset($context["line"]) || array_key_exists("line", $context) ? $context["line"] : (function () { throw new Twig_Error_Runtime('Variable "line" does not exist.', 11, $this->getSourceContext()); })()), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt((isset($context["filename"]) || array_key_exists("filename", $context) ? $context["filename"] : (function () { throw new Twig_Error_Runtime('Variable "filename" does not exist.', 15, $this->getSourceContext()); })()), (isset($context["line"]) || array_key_exists("line", $context) ? $context["line"] : (function () { throw new Twig_Error_Runtime('Variable "line" does not exist.', 15, $this->getSourceContext()); })()),  -1);
        echo "
</div>
";
        
        $__internal_81edd0eb0d12347cebb0c76e1aaf6658b170b2b437b7907acabff2377dadc970->leave($__internal_81edd0eb0d12347cebb0c76e1aaf6658b170b2b437b7907acabff2377dadc970_prof);

        
        $__internal_4ad0152b427a51841b0b428f5faca24185b62b58616e654fc714e8d1672b0b50->leave($__internal_4ad0152b427a51841b0b428f5faca24185b62b58616e654fc714e8d1672b0b50_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "WebProfilerBundle:Profiler:open.html.twig", "/var/www/html/symfony-stg/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
