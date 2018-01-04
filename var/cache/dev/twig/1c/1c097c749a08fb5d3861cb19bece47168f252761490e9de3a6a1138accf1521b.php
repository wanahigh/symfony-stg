<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_f2e5f7d285c1ec21a9cdac9f7a76c29aefe33a2d081a618f2c921d6a5545a252 extends Twig_Template
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
        $__internal_9d10b0b79fc240638eceb518d5718e2ae3d848371040e6432b8859307dd9c800 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d10b0b79fc240638eceb518d5718e2ae3d848371040e6432b8859307dd9c800->enter($__internal_9d10b0b79fc240638eceb518d5718e2ae3d848371040e6432b8859307dd9c800_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_b98bfcec7725aa98fcd55243186b5cd783eced5d4526e187fe515d29a83873d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b98bfcec7725aa98fcd55243186b5cd783eced5d4526e187fe515d29a83873d2->enter($__internal_b98bfcec7725aa98fcd55243186b5cd783eced5d4526e187fe515d29a83873d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()), "exception" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })()), "toarray", array()))));
        echo "
";
        
        $__internal_9d10b0b79fc240638eceb518d5718e2ae3d848371040e6432b8859307dd9c800->leave($__internal_9d10b0b79fc240638eceb518d5718e2ae3d848371040e6432b8859307dd9c800_prof);

        
        $__internal_b98bfcec7725aa98fcd55243186b5cd783eced5d4526e187fe515d29a83873d2->leave($__internal_b98bfcec7725aa98fcd55243186b5cd783eced5d4526e187fe515d29a83873d2_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "TwigBundle:Exception:exception.json.twig", "/var/www/html/symfony-stg/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
