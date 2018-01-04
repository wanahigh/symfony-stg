<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_9616506b3079af75e1f71d32e5cb5443a90bcc7116bb26e7076f4df3c1afa2d0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c34e51edd777ac42d1ab2ee37cf59379e6ef9dce11927dec0ffa66114547632f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c34e51edd777ac42d1ab2ee37cf59379e6ef9dce11927dec0ffa66114547632f->enter($__internal_c34e51edd777ac42d1ab2ee37cf59379e6ef9dce11927dec0ffa66114547632f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        $__internal_ac5cc835addc6e6eb95e8d275b823ec7425c0722898950b037da5a04b2f80a08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac5cc835addc6e6eb95e8d275b823ec7425c0722898950b037da5a04b2f80a08->enter($__internal_ac5cc835addc6e6eb95e8d275b823ec7425c0722898950b037da5a04b2f80a08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_c34e51edd777ac42d1ab2ee37cf59379e6ef9dce11927dec0ffa66114547632f->leave($__internal_c34e51edd777ac42d1ab2ee37cf59379e6ef9dce11927dec0ffa66114547632f_prof);

        
        $__internal_ac5cc835addc6e6eb95e8d275b823ec7425c0722898950b037da5a04b2f80a08->leave($__internal_ac5cc835addc6e6eb95e8d275b823ec7425c0722898950b037da5a04b2f80a08_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_af3ec05554c801a9fc0f63325066640caae94ec71a860267b5e66f4ad70f85ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af3ec05554c801a9fc0f63325066640caae94ec71a860267b5e66f4ad70f85ca->enter($__internal_af3ec05554c801a9fc0f63325066640caae94ec71a860267b5e66f4ad70f85ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_e4f54511ba9187d9d04ff2dfb00cf0ad888f36fa214c09e10d727362a857a58c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4f54511ba9187d9d04ff2dfb00cf0ad888f36fa214c09e10d727362a857a58c->enter($__internal_e4f54511ba9187d9d04ff2dfb00cf0ad888f36fa214c09e10d727362a857a58c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 4, $this->getSourceContext()); })()), "username", array())), "FOSUserBundle");
        
        $__internal_e4f54511ba9187d9d04ff2dfb00cf0ad888f36fa214c09e10d727362a857a58c->leave($__internal_e4f54511ba9187d9d04ff2dfb00cf0ad888f36fa214c09e10d727362a857a58c_prof);

        
        $__internal_af3ec05554c801a9fc0f63325066640caae94ec71a860267b5e66f4ad70f85ca->leave($__internal_af3ec05554c801a9fc0f63325066640caae94ec71a860267b5e66f4ad70f85ca_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_8efe31ac92dbc9069559f83e41dadc073cd2e866e82a6c1fb520b1f4c448a369 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8efe31ac92dbc9069559f83e41dadc073cd2e866e82a6c1fb520b1f4c448a369->enter($__internal_8efe31ac92dbc9069559f83e41dadc073cd2e866e82a6c1fb520b1f4c448a369_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_5e9b4aa8f92ea8b75311316eb358be8d584a22302672f8cc61c9c4332fb3472b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e9b4aa8f92ea8b75311316eb358be8d584a22302672f8cc61c9c4332fb3472b->enter($__internal_5e9b4aa8f92ea8b75311316eb358be8d584a22302672f8cc61c9c4332fb3472b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 10, $this->getSourceContext()); })()), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) || array_key_exists("confirmationUrl", $context) ? $context["confirmationUrl"] : (function () { throw new Twig_Error_Runtime('Variable "confirmationUrl" does not exist.', 10, $this->getSourceContext()); })())), "FOSUserBundle");
        echo "
";
        
        $__internal_5e9b4aa8f92ea8b75311316eb358be8d584a22302672f8cc61c9c4332fb3472b->leave($__internal_5e9b4aa8f92ea8b75311316eb358be8d584a22302672f8cc61c9c4332fb3472b_prof);

        
        $__internal_8efe31ac92dbc9069559f83e41dadc073cd2e866e82a6c1fb520b1f4c448a369->leave($__internal_8efe31ac92dbc9069559f83e41dadc073cd2e866e82a6c1fb520b1f4c448a369_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_50bf166d09bc56764643636f81b5831cbb0c480bb8a89a07b893c23d0cd30d6f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50bf166d09bc56764643636f81b5831cbb0c480bb8a89a07b893c23d0cd30d6f->enter($__internal_50bf166d09bc56764643636f81b5831cbb0c480bb8a89a07b893c23d0cd30d6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_7baad6e18c28e6df56117a8c5113fdbd8b418c50c051d5405cb63e25fa5c926a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7baad6e18c28e6df56117a8c5113fdbd8b418c50c051d5405cb63e25fa5c926a->enter($__internal_7baad6e18c28e6df56117a8c5113fdbd8b418c50c051d5405cb63e25fa5c926a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_7baad6e18c28e6df56117a8c5113fdbd8b418c50c051d5405cb63e25fa5c926a->leave($__internal_7baad6e18c28e6df56117a8c5113fdbd8b418c50c051d5405cb63e25fa5c926a_prof);

        
        $__internal_50bf166d09bc56764643636f81b5831cbb0c480bb8a89a07b893c23d0cd30d6f->leave($__internal_50bf166d09bc56764643636f81b5831cbb0c480bb8a89a07b893c23d0cd30d6f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  85 => 13,  73 => 10,  64 => 8,  54 => 4,  45 => 2,  35 => 13,  33 => 8,  30 => 7,  28 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
{% block subject %}
{%- autoescape false -%}
{{ 'resetting.email.subject'|trans({'%username%': user.username}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Resetting:email.txt.twig", "/var/www/html/symfony-stg/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/email.txt.twig");
    }
}
