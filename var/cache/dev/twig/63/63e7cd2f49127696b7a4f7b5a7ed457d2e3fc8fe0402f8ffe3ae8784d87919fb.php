<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_8672fe1e1b8fff661c9b207263d2b46acf487cfeae55f062389a75b3e23f5ad3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fa910117e3577ae2b5e54c7286aee6ca20898ea332e8e3607468011164a680fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa910117e3577ae2b5e54c7286aee6ca20898ea332e8e3607468011164a680fb->enter($__internal_fa910117e3577ae2b5e54c7286aee6ca20898ea332e8e3607468011164a680fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_349d6e3fab2a660a71003d37ee32ea4a87d3a1c085e2fc4946bb36db8fb10f0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_349d6e3fab2a660a71003d37ee32ea4a87d3a1c085e2fc4946bb36db8fb10f0a->enter($__internal_349d6e3fab2a660a71003d37ee32ea4a87d3a1c085e2fc4946bb36db8fb10f0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fa910117e3577ae2b5e54c7286aee6ca20898ea332e8e3607468011164a680fb->leave($__internal_fa910117e3577ae2b5e54c7286aee6ca20898ea332e8e3607468011164a680fb_prof);

        
        $__internal_349d6e3fab2a660a71003d37ee32ea4a87d3a1c085e2fc4946bb36db8fb10f0a->leave($__internal_349d6e3fab2a660a71003d37ee32ea4a87d3a1c085e2fc4946bb36db8fb10f0a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_05b66608a182145009528e61b6cf2c6cb55e2856b4aaf078ac8cad5afa5c5723 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05b66608a182145009528e61b6cf2c6cb55e2856b4aaf078ac8cad5afa5c5723->enter($__internal_05b66608a182145009528e61b6cf2c6cb55e2856b4aaf078ac8cad5afa5c5723_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_40545a2ffd9e4f24afe3452c434c1805d01ac9c22b480696120a50779359bf16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40545a2ffd9e4f24afe3452c434c1805d01ac9c22b480696120a50779359bf16->enter($__internal_40545a2ffd9e4f24afe3452c434c1805d01ac9c22b480696120a50779359bf16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_40545a2ffd9e4f24afe3452c434c1805d01ac9c22b480696120a50779359bf16->leave($__internal_40545a2ffd9e4f24afe3452c434c1805d01ac9c22b480696120a50779359bf16_prof);

        
        $__internal_05b66608a182145009528e61b6cf2c6cb55e2856b4aaf078ac8cad5afa5c5723->leave($__internal_05b66608a182145009528e61b6cf2c6cb55e2856b4aaf078ac8cad5afa5c5723_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_fcbb91c391a0f0662e3c0c2b84c06a98d9a1d3b237c256b577cd59eae463cc95 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fcbb91c391a0f0662e3c0c2b84c06a98d9a1d3b237c256b577cd59eae463cc95->enter($__internal_fcbb91c391a0f0662e3c0c2b84c06a98d9a1d3b237c256b577cd59eae463cc95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c5c72f72534c8a8d33587449a68ca98fd9cbb172b821d3e2a334f4b9595b739b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5c72f72534c8a8d33587449a68ca98fd9cbb172b821d3e2a334f4b9595b739b->enter($__internal_c5c72f72534c8a8d33587449a68ca98fd9cbb172b821d3e2a334f4b9595b739b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new Twig_Error_Runtime('Variable "location" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new Twig_Error_Runtime('Variable "location" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_c5c72f72534c8a8d33587449a68ca98fd9cbb172b821d3e2a334f4b9595b739b->leave($__internal_c5c72f72534c8a8d33587449a68ca98fd9cbb172b821d3e2a334f4b9595b739b_prof);

        
        $__internal_fcbb91c391a0f0662e3c0c2b84c06a98d9a1d3b237c256b577cd59eae463cc95->leave($__internal_fcbb91c391a0f0662e3c0c2b84c06a98d9a1d3b237c256b577cd59eae463cc95_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/var/www/html/symfony-stg/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
