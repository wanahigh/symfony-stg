<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_5d7c52b042a9614a586935af9f0cc22e4a59faf3a2ebf87e0caf7ef6ff29244d extends Twig_Template
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
        $__internal_50a9a864d582a5f5dc30ce6e3aa3e0b5a71c71eac418f919681b733d41a3b541 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50a9a864d582a5f5dc30ce6e3aa3e0b5a71c71eac418f919681b733d41a3b541->enter($__internal_50a9a864d582a5f5dc30ce6e3aa3e0b5a71c71eac418f919681b733d41a3b541_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_c7efcf9b9f0cbdd12a8fa9965aed975673b00ab74576ba494a7d6ecbacd4e9d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7efcf9b9f0cbdd12a8fa9965aed975673b00ab74576ba494a7d6ecbacd4e9d0->enter($__internal_c7efcf9b9f0cbdd12a8fa9965aed975673b00ab74576ba494a7d6ecbacd4e9d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 3, $this->getSourceContext()); })()), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 3, $this->getSourceContext()); })()), "html", null, true);
        echo "\" />
";
        
        $__internal_50a9a864d582a5f5dc30ce6e3aa3e0b5a71c71eac418f919681b733d41a3b541->leave($__internal_50a9a864d582a5f5dc30ce6e3aa3e0b5a71c71eac418f919681b733d41a3b541_prof);

        
        $__internal_c7efcf9b9f0cbdd12a8fa9965aed975673b00ab74576ba494a7d6ecbacd4e9d0->leave($__internal_c7efcf9b9f0cbdd12a8fa9965aed975673b00ab74576ba494a7d6ecbacd4e9d0_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "TwigBundle:Exception:error.xml.twig", "/var/www/html/symfony-stg/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.xml.twig");
    }
}
