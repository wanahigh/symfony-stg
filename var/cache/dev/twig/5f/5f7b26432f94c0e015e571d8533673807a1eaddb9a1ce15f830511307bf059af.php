<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_28e47ee68bd48ff00a4894ea48041af1484bd0e9b6bab1faff248ed5086f133e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_7aa89e98e6c04ea291c75f641d85868ac8fe4ca499126d43fb46537713c06d4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7aa89e98e6c04ea291c75f641d85868ac8fe4ca499126d43fb46537713c06d4c->enter($__internal_7aa89e98e6c04ea291c75f641d85868ac8fe4ca499126d43fb46537713c06d4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_9b4f5bf3d1e425ba93d876859aed5e021dfb1da5a56716fbdbdfa9e0a76c754d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b4f5bf3d1e425ba93d876859aed5e021dfb1da5a56716fbdbdfa9e0a76c754d->enter($__internal_9b4f5bf3d1e425ba93d876859aed5e021dfb1da5a56716fbdbdfa9e0a76c754d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7aa89e98e6c04ea291c75f641d85868ac8fe4ca499126d43fb46537713c06d4c->leave($__internal_7aa89e98e6c04ea291c75f641d85868ac8fe4ca499126d43fb46537713c06d4c_prof);

        
        $__internal_9b4f5bf3d1e425ba93d876859aed5e021dfb1da5a56716fbdbdfa9e0a76c754d->leave($__internal_9b4f5bf3d1e425ba93d876859aed5e021dfb1da5a56716fbdbdfa9e0a76c754d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ac942b697f3dc15b01245113943fa062ca7cbb70fe9cc6991ab9380d90b8eea8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac942b697f3dc15b01245113943fa062ca7cbb70fe9cc6991ab9380d90b8eea8->enter($__internal_ac942b697f3dc15b01245113943fa062ca7cbb70fe9cc6991ab9380d90b8eea8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_0de226940c2919d614efdf0733baae2eddf83ad8b8781bffd118034e9d338e8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0de226940c2919d614efdf0733baae2eddf83ad8b8781bffd118034e9d338e8c->enter($__internal_0de226940c2919d614efdf0733baae2eddf83ad8b8781bffd118034e9d338e8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 4, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_0de226940c2919d614efdf0733baae2eddf83ad8b8781bffd118034e9d338e8c->leave($__internal_0de226940c2919d614efdf0733baae2eddf83ad8b8781bffd118034e9d338e8c_prof);

        
        $__internal_ac942b697f3dc15b01245113943fa062ca7cbb70fe9cc6991ab9380d90b8eea8->leave($__internal_ac942b697f3dc15b01245113943fa062ca7cbb70fe9cc6991ab9380d90b8eea8_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_aaeec0bbabf3fe61ebc39e401273d9f47636ef9f1665da19d6757380b6d37ec6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aaeec0bbabf3fe61ebc39e401273d9f47636ef9f1665da19d6757380b6d37ec6->enter($__internal_aaeec0bbabf3fe61ebc39e401273d9f47636ef9f1665da19d6757380b6d37ec6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_b625ee2bb5f3028902c58a466a1ac6a117626914a06636aba885e636cefede15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b625ee2bb5f3028902c58a466a1ac6a117626914a06636aba885e636cefede15->enter($__internal_b625ee2bb5f3028902c58a466a1ac6a117626914a06636aba885e636cefede15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 13, $this->getSourceContext()); })()), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 16, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_b625ee2bb5f3028902c58a466a1ac6a117626914a06636aba885e636cefede15->leave($__internal_b625ee2bb5f3028902c58a466a1ac6a117626914a06636aba885e636cefede15_prof);

        
        $__internal_aaeec0bbabf3fe61ebc39e401273d9f47636ef9f1665da19d6757380b6d37ec6->leave($__internal_aaeec0bbabf3fe61ebc39e401273d9f47636ef9f1665da19d6757380b6d37ec6_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_52d0acc6908fd4afa0f8661448a848bf4551311c9e7ba0664f834f500e6f7ea7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52d0acc6908fd4afa0f8661448a848bf4551311c9e7ba0664f834f500e6f7ea7->enter($__internal_52d0acc6908fd4afa0f8661448a848bf4551311c9e7ba0664f834f500e6f7ea7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_0cbd55eac46a2022c60e492ced58497427640b70d3727e9c03f6cdd307802f7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0cbd55eac46a2022c60e492ced58497427640b70d3727e9c03f6cdd307802f7a->enter($__internal_0cbd55eac46a2022c60e492ced58497427640b70d3727e9c03f6cdd307802f7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 27, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 33, $this->getSourceContext()); })()))));
            echo "
        </div>
    ";
        }
        
        $__internal_0cbd55eac46a2022c60e492ced58497427640b70d3727e9c03f6cdd307802f7a->leave($__internal_0cbd55eac46a2022c60e492ced58497427640b70d3727e9c03f6cdd307802f7a_prof);

        
        $__internal_52d0acc6908fd4afa0f8661448a848bf4551311c9e7ba0664f834f500e6f7ea7->leave($__internal_52d0acc6908fd4afa0f8661448a848bf4551311c9e7ba0664f834f500e6f7ea7_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "WebProfilerBundle:Collector:exception.html.twig", "/var/www/html/symfony-stg/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
