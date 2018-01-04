<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_1330a169cab74ce0960df48e8afe8f147a558b99857889f7f42901e74057d4ba extends Twig_Template
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
        $__internal_fede985c6053da997e1d01abc88cc5445c2ec95975991d708316d0b88594ff68 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fede985c6053da997e1d01abc88cc5445c2ec95975991d708316d0b88594ff68->enter($__internal_fede985c6053da997e1d01abc88cc5445c2ec95975991d708316d0b88594ff68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_993c74c59a50bcec7d8f90cd3a2ef8d27520334ff6fd7645ca8f3ff9df5ac323 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_993c74c59a50bcec7d8f90cd3a2ef8d27520334ff6fd7645ca8f3ff9df5ac323->enter($__internal_993c74c59a50bcec7d8f90cd3a2ef8d27520334ff6fd7645ca8f3ff9df5ac323_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_fede985c6053da997e1d01abc88cc5445c2ec95975991d708316d0b88594ff68->leave($__internal_fede985c6053da997e1d01abc88cc5445c2ec95975991d708316d0b88594ff68_prof);

        
        $__internal_993c74c59a50bcec7d8f90cd3a2ef8d27520334ff6fd7645ca8f3ff9df5ac323->leave($__internal_993c74c59a50bcec7d8f90cd3a2ef8d27520334ff6fd7645ca8f3ff9df5ac323_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
", "TwigBundle:Exception:exception.rdf.twig", "/var/www/html/symfony-stg/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
