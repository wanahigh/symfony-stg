<?php

/* TwigBundle::layout.html.twig */
class __TwigTemplate_7ce3313fea54364f4070b51c9740b13232d09a650f71ef5be1ee83cc2540ee32 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0b5d03adcee2c54d00b9a34745d35663659b98f0fcdb05dfc6d2e070e7396b77 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b5d03adcee2c54d00b9a34745d35663659b98f0fcdb05dfc6d2e070e7396b77->enter($__internal_0b5d03adcee2c54d00b9a34745d35663659b98f0fcdb05dfc6d2e070e7396b77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

        $__internal_ebdee20ec17679b55c33c1b3ba1b11a61e0ed2f2810ff937a652d1f8b8a004ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebdee20ec17679b55c33c1b3ba1b11a61e0ed2f2810ff937a652d1f8b8a004ac->enter($__internal_ebdee20ec17679b55c33c1b3ba1b11a61e0ed2f2810ff937a652d1f8b8a004ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_0b5d03adcee2c54d00b9a34745d35663659b98f0fcdb05dfc6d2e070e7396b77->leave($__internal_0b5d03adcee2c54d00b9a34745d35663659b98f0fcdb05dfc6d2e070e7396b77_prof);

        
        $__internal_ebdee20ec17679b55c33c1b3ba1b11a61e0ed2f2810ff937a652d1f8b8a004ac->leave($__internal_ebdee20ec17679b55c33c1b3ba1b11a61e0ed2f2810ff937a652d1f8b8a004ac_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_2ee41c251db5c8ce389f49829c036271163f25fd4db85e9bf22d154a5a992965 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ee41c251db5c8ce389f49829c036271163f25fd4db85e9bf22d154a5a992965->enter($__internal_2ee41c251db5c8ce389f49829c036271163f25fd4db85e9bf22d154a5a992965_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e5d59e7d8c090365815b4590b715f5f2688be4c465950f3312699f71d7c05150 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5d59e7d8c090365815b4590b715f5f2688be4c465950f3312699f71d7c05150->enter($__internal_e5d59e7d8c090365815b4590b715f5f2688be4c465950f3312699f71d7c05150_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_e5d59e7d8c090365815b4590b715f5f2688be4c465950f3312699f71d7c05150->leave($__internal_e5d59e7d8c090365815b4590b715f5f2688be4c465950f3312699f71d7c05150_prof);

        
        $__internal_2ee41c251db5c8ce389f49829c036271163f25fd4db85e9bf22d154a5a992965->leave($__internal_2ee41c251db5c8ce389f49829c036271163f25fd4db85e9bf22d154a5a992965_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_61dafcce9e3d5946ce4212288ab85d8fceb78bc05e9d533038dacda4e07ce94d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61dafcce9e3d5946ce4212288ab85d8fceb78bc05e9d533038dacda4e07ce94d->enter($__internal_61dafcce9e3d5946ce4212288ab85d8fceb78bc05e9d533038dacda4e07ce94d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_150c134a27e254501182376fd46ded8d5fef4b5353d85af830d2ad3d5fa63ae6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_150c134a27e254501182376fd46ded8d5fef4b5353d85af830d2ad3d5fa63ae6->enter($__internal_150c134a27e254501182376fd46ded8d5fef4b5353d85af830d2ad3d5fa63ae6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_150c134a27e254501182376fd46ded8d5fef4b5353d85af830d2ad3d5fa63ae6->leave($__internal_150c134a27e254501182376fd46ded8d5fef4b5353d85af830d2ad3d5fa63ae6_prof);

        
        $__internal_61dafcce9e3d5946ce4212288ab85d8fceb78bc05e9d533038dacda4e07ce94d->leave($__internal_61dafcce9e3d5946ce4212288ab85d8fceb78bc05e9d533038dacda4e07ce94d_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_2d78f4cb49475c7bce1f00ba433d7b4ee934d11d7b50de914e793b1a4523bc34 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d78f4cb49475c7bce1f00ba433d7b4ee934d11d7b50de914e793b1a4523bc34->enter($__internal_2d78f4cb49475c7bce1f00ba433d7b4ee934d11d7b50de914e793b1a4523bc34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_197e3999497f60dd5523e6ce260eecdb76d53b6a81cafbc5b5d7d3b77477f4e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_197e3999497f60dd5523e6ce260eecdb76d53b6a81cafbc5b5d7d3b77477f4e9->enter($__internal_197e3999497f60dd5523e6ce260eecdb76d53b6a81cafbc5b5d7d3b77477f4e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_197e3999497f60dd5523e6ce260eecdb76d53b6a81cafbc5b5d7d3b77477f4e9->leave($__internal_197e3999497f60dd5523e6ce260eecdb76d53b6a81cafbc5b5d7d3b77477f4e9_prof);

        
        $__internal_2d78f4cb49475c7bce1f00ba433d7b4ee934d11d7b50de914e793b1a4523bc34->leave($__internal_2d78f4cb49475c7bce1f00ba433d7b4ee934d11d7b50de914e793b1a4523bc34_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "TwigBundle::layout.html.twig", "/var/www/html/symfony-stg/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
