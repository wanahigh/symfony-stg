<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_2afdcdc19ca76bf4f839e196c4b9682aeda5ee682ba798e979679349b409f7c3 extends Twig_Template
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
        $__internal_24bff4f1ba0ae8cd9711be68156dacc16154b9fc0753661812ac5bb8440d8a67 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24bff4f1ba0ae8cd9711be68156dacc16154b9fc0753661812ac5bb8440d8a67->enter($__internal_24bff4f1ba0ae8cd9711be68156dacc16154b9fc0753661812ac5bb8440d8a67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_ba2bf56f1ccd703ed17324a8234dc84818550df5bd05b34543c2960538912a6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba2bf56f1ccd703ed17324a8234dc84818550df5bd05b34543c2960538912a6f->enter($__internal_ba2bf56f1ccd703ed17324a8234dc84818550df5bd05b34543c2960538912a6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_24bff4f1ba0ae8cd9711be68156dacc16154b9fc0753661812ac5bb8440d8a67->leave($__internal_24bff4f1ba0ae8cd9711be68156dacc16154b9fc0753661812ac5bb8440d8a67_prof);

        
        $__internal_ba2bf56f1ccd703ed17324a8234dc84818550df5bd05b34543c2960538912a6f->leave($__internal_ba2bf56f1ccd703ed17324a8234dc84818550df5bd05b34543c2960538912a6f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "TwigBundle:Exception:exception.css.twig", "/var/www/html/symfony-stg/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
