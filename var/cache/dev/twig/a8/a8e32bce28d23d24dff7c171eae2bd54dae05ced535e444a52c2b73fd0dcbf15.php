<?php

/* MaterializeBundle:Materialize:js.html.twig */
class __TwigTemplate_ac1c76023f3b3cd13e0f280c68a7a6e9dd9d25185f66c9742e16511508b932b5 extends Twig_Template
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
        $__internal_4b72a197cfb614b274208e758e83c4bc1a99d248fd75b616ecbd4df750ecaee7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b72a197cfb614b274208e758e83c4bc1a99d248fd75b616ecbd4df750ecaee7->enter($__internal_4b72a197cfb614b274208e758e83c4bc1a99d248fd75b616ecbd4df750ecaee7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MaterializeBundle:Materialize:js.html.twig"));

        $__internal_2d96eba7fa23dbbc2e4cdc78596022ad6a89a31ae613e4ec2aea40d4eb890f46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d96eba7fa23dbbc2e4cdc78596022ad6a89a31ae613e4ec2aea40d4eb890f46->enter($__internal_2d96eba7fa23dbbc2e4cdc78596022ad6a89a31ae613e4ec2aea40d4eb890f46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MaterializeBundle:Materialize:js.html.twig"));

        // line 1
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "895c7d6_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_895c7d6_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/materialize.min_materialize.min_1.js");
            // line 2
            echo "<script";
            if ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["materialize"]) || array_key_exists("materialize", $context) ? $context["materialize"] : (function () { throw new Twig_Error_Runtime('Variable "materialize" does not exist.', 2, $this->getSourceContext()); })()), "html5", array()) == false)) {
                echo " type=\"text/javascript\"";
            }
            echo " src=\"https://cdnjs.cloudflare.com/ajax/libs/materialize/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["materialize"]) || array_key_exists("materialize", $context) ? $context["materialize"] : (function () { throw new Twig_Error_Runtime('Variable "materialize" does not exist.', 2, $this->getSourceContext()); })()), "version", array()), "html", null, true);
            echo "/js/materialize.min.js\"";
            if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["materialize"]) || array_key_exists("materialize", $context) ? $context["materialize"] : (function () { throw new Twig_Error_Runtime('Variable "materialize" does not exist.', 2, $this->getSourceContext()); })()), "async", array())) {
                echo " async=\"async\"";
            }
            echo "></script>
<script>window.jQuery || document.write('<script";
            // line 3
            if ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["materialize"]) || array_key_exists("materialize", $context) ? $context["materialize"] : (function () { throw new Twig_Error_Runtime('Variable "materialize" does not exist.', 3, $this->getSourceContext()); })()), "html5", array()) == false)) {
                echo " type=\"text/javascript\"";
            }
            echo " src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["materialize"]) || array_key_exists("materialize", $context) ? $context["materialize"] : (function () { throw new Twig_Error_Runtime('Variable "materialize" does not exist.', 3, $this->getSourceContext()); })()), "local_cdn", array()), "html", null, true);
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 3, $this->getSourceContext()); })()), "html", null, true);
            echo "\"";
            if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["materialize"]) || array_key_exists("materialize", $context) ? $context["materialize"] : (function () { throw new Twig_Error_Runtime('Variable "materialize" does not exist.', 3, $this->getSourceContext()); })()), "async", array())) {
                echo " async=\"async\"";
            }
            echo ">\\x3C/script>');</script>";
        } else {
            // asset "895c7d6"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_895c7d6") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/materialize.min.js");
            // line 2
            echo "<script";
            if ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["materialize"]) || array_key_exists("materialize", $context) ? $context["materialize"] : (function () { throw new Twig_Error_Runtime('Variable "materialize" does not exist.', 2, $this->getSourceContext()); })()), "html5", array()) == false)) {
                echo " type=\"text/javascript\"";
            }
            echo " src=\"https://cdnjs.cloudflare.com/ajax/libs/materialize/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["materialize"]) || array_key_exists("materialize", $context) ? $context["materialize"] : (function () { throw new Twig_Error_Runtime('Variable "materialize" does not exist.', 2, $this->getSourceContext()); })()), "version", array()), "html", null, true);
            echo "/js/materialize.min.js\"";
            if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["materialize"]) || array_key_exists("materialize", $context) ? $context["materialize"] : (function () { throw new Twig_Error_Runtime('Variable "materialize" does not exist.', 2, $this->getSourceContext()); })()), "async", array())) {
                echo " async=\"async\"";
            }
            echo "></script>
<script>window.jQuery || document.write('<script";
            // line 3
            if ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["materialize"]) || array_key_exists("materialize", $context) ? $context["materialize"] : (function () { throw new Twig_Error_Runtime('Variable "materialize" does not exist.', 3, $this->getSourceContext()); })()), "html5", array()) == false)) {
                echo " type=\"text/javascript\"";
            }
            echo " src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["materialize"]) || array_key_exists("materialize", $context) ? $context["materialize"] : (function () { throw new Twig_Error_Runtime('Variable "materialize" does not exist.', 3, $this->getSourceContext()); })()), "local_cdn", array()), "html", null, true);
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 3, $this->getSourceContext()); })()), "html", null, true);
            echo "\"";
            if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["materialize"]) || array_key_exists("materialize", $context) ? $context["materialize"] : (function () { throw new Twig_Error_Runtime('Variable "materialize" does not exist.', 3, $this->getSourceContext()); })()), "async", array())) {
                echo " async=\"async\"";
            }
            echo ">\\x3C/script>');</script>";
        }
        unset($context["asset_url"]);
        // line 5
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "8b0f174_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_8b0f174_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/fonts/Material-Design-Icons_Material-Design-Icons_1.eot");
        } else {
            // asset "8b0f174"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_8b0f174") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/fonts/Material-Design-Icons.eot");
        }
        unset($context["asset_url"]);
        // line 6
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "8455630_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_8455630_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/fonts/Material-Design-Icons_Material-Design-Icons_1.svg");
        } else {
            // asset "8455630"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_8455630") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/fonts/Material-Design-Icons.svg");
        }
        unset($context["asset_url"]);
        // line 7
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "ff2385d_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_ff2385d_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/fonts/Material-Design-Icons_Material-Design-Icons_1.ttf");
        } else {
            // asset "ff2385d"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_ff2385d") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/fonts/Material-Design-Icons.ttf");
        }
        unset($context["asset_url"]);
        // line 8
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "dde2949_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_dde2949_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/fonts/Material-Design-Icons_Material-Design-Icons_1.woff");
        } else {
            // asset "dde2949"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_dde2949") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/fonts/Material-Design-Icons.woff");
        }
        unset($context["asset_url"]);
        // line 9
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "2877f38_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_2877f38_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/fonts/Material-Design-Icons_Material-Design-Icons_1.woff2");
        } else {
            // asset "2877f38"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_2877f38") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/fonts/Material-Design-Icons.woff2");
        }
        unset($context["asset_url"]);
        // line 10
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "430ad3c_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_430ad3c_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/materialize.min_materialize.min_1.css");
            // line 11
            echo "<script>(function (\$) {\$(function () {if (!window.Materialize) {\$('head').prepend('<link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["materialize"]) || array_key_exists("materialize", $context) ? $context["materialize"] : (function () { throw new Twig_Error_Runtime('Variable "materialize" does not exist.', 11, $this->getSourceContext()); })()), "local_cdn", array()), "html", null, true);
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 11, $this->getSourceContext()); })()), "html", null, true);
            echo "\">');}});})(window.jQuery);</script>";
        } else {
            // asset "430ad3c"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_430ad3c") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/materialize.min.css");
            echo "<script>(function (\$) {\$(function () {if (!window.Materialize) {\$('head').prepend('<link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["materialize"]) || array_key_exists("materialize", $context) ? $context["materialize"] : (function () { throw new Twig_Error_Runtime('Variable "materialize" does not exist.', 11, $this->getSourceContext()); })()), "local_cdn", array()), "html", null, true);
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 11, $this->getSourceContext()); })()), "html", null, true);
            echo "\">');}});})(window.jQuery);</script>";
        }
        unset($context["asset_url"]);
        
        $__internal_4b72a197cfb614b274208e758e83c4bc1a99d248fd75b616ecbd4df750ecaee7->leave($__internal_4b72a197cfb614b274208e758e83c4bc1a99d248fd75b616ecbd4df750ecaee7_prof);

        
        $__internal_2d96eba7fa23dbbc2e4cdc78596022ad6a89a31ae613e4ec2aea40d4eb890f46->leave($__internal_2d96eba7fa23dbbc2e4cdc78596022ad6a89a31ae613e4ec2aea40d4eb890f46_prof);

    }

    public function getTemplateName()
    {
        return "MaterializeBundle:Materialize:js.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 11,  129 => 10,  120 => 9,  111 => 8,  102 => 7,  93 => 6,  84 => 5,  70 => 3,  57 => 2,  42 => 3,  29 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{%- javascripts '%materialize.local_js%' output='js/materialize.min.js' -%}
<script{%- if materialize.html5 == false %} type=\"text/javascript\"{%- endif %} src=\"https://cdnjs.cloudflare.com/ajax/libs/materialize/{{- materialize.version -}}/js/materialize.min.js\"{%- if materialize.async %} async=\"async\"{%- endif -%}></script>
<script>window.jQuery || document.write('<script{%- if materialize.html5 == false %} type=\"text/javascript\"{%- endif %} src=\"{{- materialize.local_cdn -}}{{- asset_url -}}\"{%- if materialize.async %} async=\"async\"{%- endif -%}>\\x3C/script>');</script>
{%- endjavascripts -%}
{%- stylesheets '%materialize.local_fonts_dir%Material-Design-Icons.eot' output='fonts/Material-Design-Icons.eot' -%}{%- endstylesheets -%}
{%- stylesheets '%materialize.local_fonts_dir%Material-Design-Icons.svg' output='fonts/Material-Design-Icons.svg' -%}{%- endstylesheets -%}
{%- stylesheets '%materialize.local_fonts_dir%Material-Design-Icons.ttf' output='fonts/Material-Design-Icons.ttf' -%}{%- endstylesheets -%}
{%- stylesheets '%materialize.local_fonts_dir%Material-Design-Icons.woff' output='fonts/Material-Design-Icons.woff' -%}{%- endstylesheets -%}
{%- stylesheets '%materialize.local_fonts_dir%Material-Design-Icons.woff2' output='fonts/Material-Design-Icons.woff2' -%}{%- endstylesheets -%}
{%- stylesheets '%materialize.local_css%' output='css/materialize.min.css' -%}
<script>(function (\$) {\$(function () {if (!window.Materialize) {\$('head').prepend('<link rel=\"stylesheet\" href=\"{{- materialize.local_cdn -}}{{- asset_url -}}\">');}});})(window.jQuery);</script>
{%- endstylesheets -%}
", "MaterializeBundle:Materialize:js.html.twig", "/var/www/html/symfony-stg/vendor/evheniy/materialize-bundle/Evheniy/MaterializeBundle/Resources/views/Materialize/js.html.twig");
    }
}
