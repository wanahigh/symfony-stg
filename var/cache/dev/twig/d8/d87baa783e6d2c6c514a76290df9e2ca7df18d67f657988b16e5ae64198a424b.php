<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_daa9e7331f8aedf5752e48d507db70500fb6374407a20556accbc4bd52b1fb74 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_c3571384b952b09c14cb3e39b9e59c464445098d1a132093843041d6d4e9a0d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3571384b952b09c14cb3e39b9e59c464445098d1a132093843041d6d4e9a0d2->enter($__internal_c3571384b952b09c14cb3e39b9e59c464445098d1a132093843041d6d4e9a0d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_8811682f12e819a254bc6ad8aa6cfbc77c6a0f75ba64dc40f984eefc16c00ef6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8811682f12e819a254bc6ad8aa6cfbc77c6a0f75ba64dc40f984eefc16c00ef6->enter($__internal_8811682f12e819a254bc6ad8aa6cfbc77c6a0f75ba64dc40f984eefc16c00ef6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c3571384b952b09c14cb3e39b9e59c464445098d1a132093843041d6d4e9a0d2->leave($__internal_c3571384b952b09c14cb3e39b9e59c464445098d1a132093843041d6d4e9a0d2_prof);

        
        $__internal_8811682f12e819a254bc6ad8aa6cfbc77c6a0f75ba64dc40f984eefc16c00ef6->leave($__internal_8811682f12e819a254bc6ad8aa6cfbc77c6a0f75ba64dc40f984eefc16c00ef6_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_bad3dca91f544a87f525b1ddc98ac80b8475beac1e58b5400256c04c2b6517bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bad3dca91f544a87f525b1ddc98ac80b8475beac1e58b5400256c04c2b6517bc->enter($__internal_bad3dca91f544a87f525b1ddc98ac80b8475beac1e58b5400256c04c2b6517bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_03d8c86f7cc44a65ee30cef927e5094e048219d8f355ad7e0ab34fcbbeac9755 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03d8c86f7cc44a65ee30cef927e5094e048219d8f355ad7e0ab34fcbbeac9755->enter($__internal_03d8c86f7cc44a65ee30cef927e5094e048219d8f355ad7e0ab34fcbbeac9755_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_03d8c86f7cc44a65ee30cef927e5094e048219d8f355ad7e0ab34fcbbeac9755->leave($__internal_03d8c86f7cc44a65ee30cef927e5094e048219d8f355ad7e0ab34fcbbeac9755_prof);

        
        $__internal_bad3dca91f544a87f525b1ddc98ac80b8475beac1e58b5400256c04c2b6517bc->leave($__internal_bad3dca91f544a87f525b1ddc98ac80b8475beac1e58b5400256c04c2b6517bc_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_38c0065570a4fdeac5ad7f951c26aa3f507ea3243f74badbe6e0f817055a3255 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38c0065570a4fdeac5ad7f951c26aa3f507ea3243f74badbe6e0f817055a3255->enter($__internal_38c0065570a4fdeac5ad7f951c26aa3f507ea3243f74badbe6e0f817055a3255_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8f0ea15765d8f1c5b7bb9312dd5eb0af69ced688625207a30edd4ff088d6afc3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f0ea15765d8f1c5b7bb9312dd5eb0af69ced688625207a30edd4ff088d6afc3->enter($__internal_8f0ea15765d8f1c5b7bb9312dd5eb0af69ced688625207a30edd4ff088d6afc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_8f0ea15765d8f1c5b7bb9312dd5eb0af69ced688625207a30edd4ff088d6afc3->leave($__internal_8f0ea15765d8f1c5b7bb9312dd5eb0af69ced688625207a30edd4ff088d6afc3_prof);

        
        $__internal_38c0065570a4fdeac5ad7f951c26aa3f507ea3243f74badbe6e0f817055a3255->leave($__internal_38c0065570a4fdeac5ad7f951c26aa3f507ea3243f74badbe6e0f817055a3255_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_4dfe7a9eeea82d82f4fffd33d88d772d71a25608877c5fd5752a593b3179a047 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4dfe7a9eeea82d82f4fffd33d88d772d71a25608877c5fd5752a593b3179a047->enter($__internal_4dfe7a9eeea82d82f4fffd33d88d772d71a25608877c5fd5752a593b3179a047_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3274fe5b00ebee4dae1f44588944ccf4cbcbb61d265f37424bd19cb3d8c281d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3274fe5b00ebee4dae1f44588944ccf4cbcbb61d265f37424bd19cb3d8c281d8->enter($__internal_3274fe5b00ebee4dae1f44588944ccf4cbcbb61d265f37424bd19cb3d8c281d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_3274fe5b00ebee4dae1f44588944ccf4cbcbb61d265f37424bd19cb3d8c281d8->leave($__internal_3274fe5b00ebee4dae1f44588944ccf4cbcbb61d265f37424bd19cb3d8c281d8_prof);

        
        $__internal_4dfe7a9eeea82d82f4fffd33d88d772d71a25608877c5fd5752a593b3179a047->leave($__internal_4dfe7a9eeea82d82f4fffd33d88d772d71a25608877c5fd5752a593b3179a047_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "TwigBundle:Exception:exception_full.html.twig", "/var/www/html/symfony-stg/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
