<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_8bd58c95e72c8b841d1463cc8441775c98bf50693e0c58b11e06e056991d6003 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a5c64ed1fe927efae20f4caa3c434b7d94ba08c4033caffddf6e6cc47791725b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5c64ed1fe927efae20f4caa3c434b7d94ba08c4033caffddf6e6cc47791725b->enter($__internal_a5c64ed1fe927efae20f4caa3c434b7d94ba08c4033caffddf6e6cc47791725b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_05f43736cd30be75404a3014dc3cf09a91b865acc2938efe3995995b114e94d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05f43736cd30be75404a3014dc3cf09a91b865acc2938efe3995995b114e94d2->enter($__internal_05f43736cd30be75404a3014dc3cf09a91b865acc2938efe3995995b114e94d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a5c64ed1fe927efae20f4caa3c434b7d94ba08c4033caffddf6e6cc47791725b->leave($__internal_a5c64ed1fe927efae20f4caa3c434b7d94ba08c4033caffddf6e6cc47791725b_prof);

        
        $__internal_05f43736cd30be75404a3014dc3cf09a91b865acc2938efe3995995b114e94d2->leave($__internal_05f43736cd30be75404a3014dc3cf09a91b865acc2938efe3995995b114e94d2_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_80a3b827238f3c7a582ea2ee2e0ae39fa9d791a098e98eba92da86c87403c35e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80a3b827238f3c7a582ea2ee2e0ae39fa9d791a098e98eba92da86c87403c35e->enter($__internal_80a3b827238f3c7a582ea2ee2e0ae39fa9d791a098e98eba92da86c87403c35e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_cbbd5f60d33cb359a5f6db8abe92f3be2e06b0b191d9b176fbbc5a073a26e244 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbbd5f60d33cb359a5f6db8abe92f3be2e06b0b191d9b176fbbc5a073a26e244->enter($__internal_cbbd5f60d33cb359a5f6db8abe92f3be2e06b0b191d9b176fbbc5a073a26e244_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 12
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 12, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 12, $this->getSourceContext()); })()), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 14
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 14, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 14, $this->getSourceContext()); })()), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_cbbd5f60d33cb359a5f6db8abe92f3be2e06b0b191d9b176fbbc5a073a26e244->leave($__internal_cbbd5f60d33cb359a5f6db8abe92f3be2e06b0b191d9b176fbbc5a073a26e244_prof);

        
        $__internal_80a3b827238f3c7a582ea2ee2e0ae39fa9d791a098e98eba92da86c87403c35e->leave($__internal_80a3b827238f3c7a582ea2ee2e0ae39fa9d791a098e98eba92da86c87403c35e_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7f0a8ece173471f3f8839255b66a3f255e5f986a643b2209c0c0242ffa62797c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f0a8ece173471f3f8839255b66a3f255e5f986a643b2209c0c0242ffa62797c->enter($__internal_7f0a8ece173471f3f8839255b66a3f255e5f986a643b2209c0c0242ffa62797c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_7a43a560813e2870d1dcb07abf690c1efb4c5fc7ee1e6d9cfba597bf0bbe77d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a43a560813e2870d1dcb07abf690c1efb4c5fc7ee1e6d9cfba597bf0bbe77d1->enter($__internal_7a43a560813e2870d1dcb07abf690c1efb4c5fc7ee1e6d9cfba597bf0bbe77d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 20, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 20, $this->getSourceContext()); })()), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 21, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 21, $this->getSourceContext()); })()), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_7a43a560813e2870d1dcb07abf690c1efb4c5fc7ee1e6d9cfba597bf0bbe77d1->leave($__internal_7a43a560813e2870d1dcb07abf690c1efb4c5fc7ee1e6d9cfba597bf0bbe77d1_prof);

        
        $__internal_7f0a8ece173471f3f8839255b66a3f255e5f986a643b2209c0c0242ffa62797c->leave($__internal_7f0a8ece173471f3f8839255b66a3f255e5f986a643b2209c0c0242ffa62797c_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 21,  84 => 20,  75 => 19,  61 => 14,  55 => 12,  46 => 11,  36 => 1,  34 => 7,  33 => 6,  32 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% set messages = {
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "WebProfilerBundle:Profiler:info.html.twig", "/var/www/html/symfony-stg/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
