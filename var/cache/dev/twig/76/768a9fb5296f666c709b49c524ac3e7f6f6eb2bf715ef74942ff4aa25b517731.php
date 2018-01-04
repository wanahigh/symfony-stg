<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_a3a23ffd7a77790612c093acf1dcec462af2aa9adfa691ec2b780cea1dce4397 extends Twig_Template
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
        $__internal_360a6684ae2d9fdf827429e2bed5df159fd0cf5eb8cb58fda1e0d4624e4e33a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_360a6684ae2d9fdf827429e2bed5df159fd0cf5eb8cb58fda1e0d4624e4e33a4->enter($__internal_360a6684ae2d9fdf827429e2bed5df159fd0cf5eb8cb58fda1e0d4624e4e33a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_7a7df04bf57a2c8196c6ef94f2b16ec84d79ec9c88b24afb3035dc1fc9cbfac8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a7df04bf57a2c8196c6ef94f2b16ec84d79ec9c88b24afb3035dc1fc9cbfac8->enter($__internal_7a7df04bf57a2c8196c6ef94f2b16ec84d79ec9c88b24afb3035dc1fc9cbfac8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_360a6684ae2d9fdf827429e2bed5df159fd0cf5eb8cb58fda1e0d4624e4e33a4->leave($__internal_360a6684ae2d9fdf827429e2bed5df159fd0cf5eb8cb58fda1e0d4624e4e33a4_prof);

        
        $__internal_7a7df04bf57a2c8196c6ef94f2b16ec84d79ec9c88b24afb3035dc1fc9cbfac8->leave($__internal_7a7df04bf57a2c8196c6ef94f2b16ec84d79ec9c88b24afb3035dc1fc9cbfac8_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "/var/www/html/symfony-stg/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
