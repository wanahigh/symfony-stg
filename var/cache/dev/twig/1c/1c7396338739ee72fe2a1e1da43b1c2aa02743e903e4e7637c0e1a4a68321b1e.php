<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_56b9def7a33f4ecd4fe3d23e4ed6d4e79b90ec07133d19bf808826e018b9bff6 extends Twig_Template
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
        $__internal_1c110f4c5251b541e9df7036b7935dddf7c33cb45a097540b0fb5807d1cb2dbd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c110f4c5251b541e9df7036b7935dddf7c33cb45a097540b0fb5807d1cb2dbd->enter($__internal_1c110f4c5251b541e9df7036b7935dddf7c33cb45a097540b0fb5807d1cb2dbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_896c8154803b97e9e9fac19650a2b224341c09c97beef070c4fba111f94ba132 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_896c8154803b97e9e9fac19650a2b224341c09c97beef070c4fba111f94ba132->enter($__internal_896c8154803b97e9e9fac19650a2b224341c09c97beef070c4fba111f94ba132_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_1c110f4c5251b541e9df7036b7935dddf7c33cb45a097540b0fb5807d1cb2dbd->leave($__internal_1c110f4c5251b541e9df7036b7935dddf7c33cb45a097540b0fb5807d1cb2dbd_prof);

        
        $__internal_896c8154803b97e9e9fac19650a2b224341c09c97beef070c4fba111f94ba132->leave($__internal_896c8154803b97e9e9fac19650a2b224341c09c97beef070c4fba111f94ba132_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "TwigBundle:Exception:exception.atom.twig", "/var/www/html/symfony-stg/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
