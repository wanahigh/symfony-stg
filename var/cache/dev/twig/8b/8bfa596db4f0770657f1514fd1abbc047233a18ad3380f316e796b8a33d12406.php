<?php

/* FOSUserBundle:Resetting:request_content.html.twig */
class __TwigTemplate_a812882e7d3de92c83f115876b72e610e26ad7a2f2697937c091107974a1cbc0 extends Twig_Template
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
        $__internal_5910edf5854c6e23a88749b23cacd3a3ed8c696963cc3b765a9a0336fb14d3be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5910edf5854c6e23a88749b23cacd3a3ed8c696963cc3b765a9a0336fb14d3be->enter($__internal_5910edf5854c6e23a88749b23cacd3a3ed8c696963cc3b765a9a0336fb14d3be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request_content.html.twig"));

        $__internal_36d12218f962df6b7eda76fdef8a05b35bfeb7b7cc7406def52381e41fd33486 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36d12218f962df6b7eda76fdef8a05b35bfeb7b7cc7406def52381e41fd33486->enter($__internal_36d12218f962df6b7eda76fdef8a05b35bfeb7b7cc7406def52381e41fd33486_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request_content.html.twig"));

        // line 2
        echo "
<form action=\"";
        // line 3
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_resetting_send_email");
        echo "\" method=\"POST\" class=\"fos_user_resetting_request\">
    <div>
        <label for=\"username\">";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.request.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
        <input type=\"text\" id=\"username\" name=\"username\" required=\"required\" />
    </div>
    <div>
        <input type=\"submit\" value=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.request.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
</form>
";
        
        $__internal_5910edf5854c6e23a88749b23cacd3a3ed8c696963cc3b765a9a0336fb14d3be->leave($__internal_5910edf5854c6e23a88749b23cacd3a3ed8c696963cc3b765a9a0336fb14d3be_prof);

        
        $__internal_36d12218f962df6b7eda76fdef8a05b35bfeb7b7cc7406def52381e41fd33486->leave($__internal_36d12218f962df6b7eda76fdef8a05b35bfeb7b7cc7406def52381e41fd33486_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 9,  33 => 5,  28 => 3,  25 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

<form action=\"{{ path('fos_user_resetting_send_email') }}\" method=\"POST\" class=\"fos_user_resetting_request\">
    <div>
        <label for=\"username\">{{ 'resetting.request.username'|trans }}</label>
        <input type=\"text\" id=\"username\" name=\"username\" required=\"required\" />
    </div>
    <div>
        <input type=\"submit\" value=\"{{ 'resetting.request.submit'|trans }}\" />
    </div>
</form>
", "FOSUserBundle:Resetting:request_content.html.twig", "/var/www/html/symfony-stg/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/request_content.html.twig");
    }
}
