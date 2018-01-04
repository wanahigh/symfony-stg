<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_1a4f30941e0cfd2a64cea2f7a61ce1dfa3edb8548dd657b2ee3cb1105a0ab4db extends Twig_Template
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
        $__internal_2c4b8e9a9e204ae3130a656cbda41725641bc692a2c20d8897bfca2593fb7d2b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c4b8e9a9e204ae3130a656cbda41725641bc692a2c20d8897bfca2593fb7d2b->enter($__internal_2c4b8e9a9e204ae3130a656cbda41725641bc692a2c20d8897bfca2593fb7d2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_0186ca3699d5552ed62edb847540b9d1848db666d1f1030464b36b82fa976c24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0186ca3699d5552ed62edb847540b9d1848db666d1f1030464b36b82fa976c24->enter($__internal_0186ca3699d5552ed62edb847540b9d1848db666d1f1030464b36b82fa976c24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 4, $this->getSourceContext()); })());
        echo " ";
        echo (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 4, $this->getSourceContext()); })());
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_2c4b8e9a9e204ae3130a656cbda41725641bc692a2c20d8897bfca2593fb7d2b->leave($__internal_2c4b8e9a9e204ae3130a656cbda41725641bc692a2c20d8897bfca2593fb7d2b_prof);

        
        $__internal_0186ca3699d5552ed62edb847540b9d1848db666d1f1030464b36b82fa976c24->leave($__internal_0186ca3699d5552ed62edb847540b9d1848db666d1f1030464b36b82fa976c24_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "TwigBundle:Exception:error.txt.twig", "/var/www/html/symfony-stg/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}
