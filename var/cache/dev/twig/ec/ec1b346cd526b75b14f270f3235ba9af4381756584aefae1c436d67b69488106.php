<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_e9435576adeb5cc411e1a54ab880521fc1ad5054538f9adedf8470ac29b179af extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
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
        $__internal_15a283cf1371ae9daa100ed96a14d005db3a3b2a31faee447aa1ed72f1c2ab5f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15a283cf1371ae9daa100ed96a14d005db3a3b2a31faee447aa1ed72f1c2ab5f->enter($__internal_15a283cf1371ae9daa100ed96a14d005db3a3b2a31faee447aa1ed72f1c2ab5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $__internal_631b96b9d4c8e667890d8fc8168c79f9dd444039aa8529d4a3552bd23cd8f1a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_631b96b9d4c8e667890d8fc8168c79f9dd444039aa8529d4a3552bd23cd8f1a0->enter($__internal_631b96b9d4c8e667890d8fc8168c79f9dd444039aa8529d4a3552bd23cd8f1a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_15a283cf1371ae9daa100ed96a14d005db3a3b2a31faee447aa1ed72f1c2ab5f->leave($__internal_15a283cf1371ae9daa100ed96a14d005db3a3b2a31faee447aa1ed72f1c2ab5f_prof);

        
        $__internal_631b96b9d4c8e667890d8fc8168c79f9dd444039aa8529d4a3552bd23cd8f1a0->leave($__internal_631b96b9d4c8e667890d8fc8168c79f9dd444039aa8529d4a3552bd23cd8f1a0_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7212f73ea6be99b4e0ae4bd0438c5687cb9ef4b12964ce0ef3f7dec6f23b8002 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7212f73ea6be99b4e0ae4bd0438c5687cb9ef4b12964ce0ef3f7dec6f23b8002->enter($__internal_7212f73ea6be99b4e0ae4bd0438c5687cb9ef4b12964ce0ef3f7dec6f23b8002_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_450ab2a05749dda69f590018947b0f8038b622e84e35f3025c8f07ce3ecc0575 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_450ab2a05749dda69f590018947b0f8038b622e84e35f3025c8f07ce3ecc0575->enter($__internal_450ab2a05749dda69f590018947b0f8038b622e84e35f3025c8f07ce3ecc0575_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.confirmed", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 6, $this->getSourceContext()); })()), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if ((isset($context["targetUrl"]) || array_key_exists("targetUrl", $context) ? $context["targetUrl"] : (function () { throw new Twig_Error_Runtime('Variable "targetUrl" does not exist.', 7, $this->getSourceContext()); })())) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) || array_key_exists("targetUrl", $context) ? $context["targetUrl"] : (function () { throw new Twig_Error_Runtime('Variable "targetUrl" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_450ab2a05749dda69f590018947b0f8038b622e84e35f3025c8f07ce3ecc0575->leave($__internal_450ab2a05749dda69f590018947b0f8038b622e84e35f3025c8f07ce3ecc0575_prof);

        
        $__internal_7212f73ea6be99b4e0ae4bd0438c5687cb9ef4b12964ce0ef3f7dec6f23b8002->leave($__internal_7212f73ea6be99b4e0ae4bd0438c5687cb9ef4b12964ce0ef3f7dec6f23b8002_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 8,  54 => 7,  49 => 6,  40 => 5,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>
    {% if targetUrl %}
    <p><a href=\"{{ targetUrl }}\">{{ 'registration.back'|trans }}</a></p>
    {% endif %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:confirmed.html.twig", "/var/www/html/symfony-stg/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/confirmed.html.twig");
    }
}
