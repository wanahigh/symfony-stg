<?php

/* ::base.html.twig */
class __TwigTemplate_f730996ba527fc75a64d778230829803558ac95d9eb17456f0d60bb68f57f2aa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d360123a72b28b515e663bd2d4d6764e201839d94c1664cee9e6661acc29f0fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d360123a72b28b515e663bd2d4d6764e201839d94c1664cee9e6661acc29f0fe->enter($__internal_d360123a72b28b515e663bd2d4d6764e201839d94c1664cee9e6661acc29f0fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_20b6eae63df9157d9f923682105b49470c56bbf2943d89de9338350f858560cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20b6eae63df9157d9f923682105b49470c56bbf2943d89de9338350f858560cf->enter($__internal_20b6eae63df9157d9f923682105b49470c56bbf2943d89de9338350f858560cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">

    ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 14
        echo "


</head>
<body>

<div class=\"navbar-fixed\">
<nav class=\"nav-extended white\">
    <div class=\"nav-wrapper\">
        <a href=\"#!\" class=\"brand-logo\"><img src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("../../../images/logo-filiere-spmeca-01.png"), "html", null, true);
        echo "\"  /></a>
        <ul class=\"right hide-on-med-and-down\">
            <li><a href=\"/Filiale\">La Filiaire</a></li>
            <li><a href=\"/Work\">Les Travaux</a></li>
            <li><a href=\"/entity_actor\">Les Acteurs</a></li>
            <li><a href=\"/entity_advert\">L'actu</a></li>
            <li><a href=\"/contact\">Contacts</a></li>
            <div class=\"chip black\">
                ";
        // line 31
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 32
            echo "                ";
            // line 33
            echo "
                <a href=\"";
            // line 34
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">Déconnexion</a>
                ";
        } else {
            // line 36
            echo "                <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">Connexion</a>
                ";
        }
        // line 37
        echo "</li>
            </div>
        </ul>
    </div>
    <div class=\"nav-content\">
        <span class=\"nav-title\">Title</span>
        <a class=\"btn-floating btn-large halfway-fab waves-effect waves-light teal\">
            <i class=\"material-icons\">add</i>
        </a>
    </div>
</nav>
        </div>
<style>
    .page-footer
    {
        margin-top:25%;
    }
</style>



";
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 58, $this->getSourceContext()); })()), "session", array()), "flashBag", array()), "all", array()));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 59
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 60
                echo "        <div class=\"";
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo "\">
            ";
                // line 61
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["message"], array(), "FOSUserBundle"), "html", null, true);
                echo "
        </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        $this->displayBlock('body', $context, $blocks);
        // line 66
        echo "
<footer class=\"page-footer #00e676 green accent-3\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col l6 s12\">
                <h5 class=\"white-text\">Footer Content</h5>
                <p class=\"grey-text text-lighten-4\">You can use rows and columns here to organize your footer content.</p>
            </div>
            <div class=\"col l4 offset-l2 s12\">
                <h5 class=\"white-text\">Links</h5>
                <ul>
                    <li><a class=\"grey-text text-lighten-3\" href=\"#!\">Link 1</a></li>
                    <li><a class=\"grey-text text-lighten-3\" href=\"#!\">Link 2</a></li>
                    <li><a class=\"grey-text text-lighten-3\" href=\"#!\">Link 3</a></li>
                    <li><a class=\"grey-text text-lighten-3\" href=\"#!\">Link 4</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class=\"footer-copyright\">
        <div class=\"container\">
            © 2014 Copyright Text

            <a class=\"grey-text text-lighten-4 right\" href=\"#!\">More Links</a>
        </div>
    </div>
</footer>";
        // line 94
        echo "<style>.preloader-background {
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: #eee;

        position: fixed;
        z-index: 100;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
    }</style>



<div class=\"preloader-background\">
    <div class=\"preloader-wrapper big active\">
        <div class=\"spinner-layer spinner-blue-only\">
            <div class=\"circle-clipper left\">
                <div class=\"circle\"></div>
            </div>
            <div class=\"gap-patch\">
                <div class=\"circle\"></div>
            </div>
            <div class=\"circle-clipper right\">
                <div class=\"circle\"></div>
            </div>
        </div>
    </div>
</div>


<script>document.addEventListener(\"DOMContentLoaded\", function(){
        \$('.preloader-background').delay(1700).fadeOut('fast');

        \$('.preloader-wrapper')
            .delay(1700)
            .fadeOut();
    });</script>
<script>
    // Initialize collapse button
    \$(\".button-collapse\").sideNav();
    // Initialize collapsible (uncomment the line below if you use the dropdown variation)
    //\$('.collapsible').collapsible();

</script>



";
        // line 144
        $this->displayBlock('javascripts', $context, $blocks);
        // line 147
        echo "



</body>
</html>";
        
        $__internal_d360123a72b28b515e663bd2d4d6764e201839d94c1664cee9e6661acc29f0fe->leave($__internal_d360123a72b28b515e663bd2d4d6764e201839d94c1664cee9e6661acc29f0fe_prof);

        
        $__internal_20b6eae63df9157d9f923682105b49470c56bbf2943d89de9338350f858560cf->leave($__internal_20b6eae63df9157d9f923682105b49470c56bbf2943d89de9338350f858560cf_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a0d05cb92110a4bd2e2e75cea50f772f6187625a3979ee17d34effa104f94c72 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0d05cb92110a4bd2e2e75cea50f772f6187625a3979ee17d34effa104f94c72->enter($__internal_a0d05cb92110a4bd2e2e75cea50f772f6187625a3979ee17d34effa104f94c72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_4e10d4c97b17597c42be0fff8f314ef847a84e16d675600a47b5737fd0df63ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e10d4c97b17597c42be0fff8f314ef847a84e16d675600a47b5737fd0df63ca->enter($__internal_4e10d4c97b17597c42be0fff8f314ef847a84e16d675600a47b5737fd0df63ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "        <script src=";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("https://code.jquery.com/jquery-3.2.1.js"), "html", null, true);
        echo " integrity=\"sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=\" crossorigin=\"anonymous\"></script>
        <script src=";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"), "html", null, true);
        echo "></script>
         <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">
        <link rel=\"stylesheet\" href=";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css"), "html", null, true);
        echo ">
        <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("../../../css/style.css"), "html", null, true);
        echo "\">
";
        
        $__internal_4e10d4c97b17597c42be0fff8f314ef847a84e16d675600a47b5737fd0df63ca->leave($__internal_4e10d4c97b17597c42be0fff8f314ef847a84e16d675600a47b5737fd0df63ca_prof);

        
        $__internal_a0d05cb92110a4bd2e2e75cea50f772f6187625a3979ee17d34effa104f94c72->leave($__internal_a0d05cb92110a4bd2e2e75cea50f772f6187625a3979ee17d34effa104f94c72_prof);

    }

    // line 65
    public function block_body($context, array $blocks = array())
    {
        $__internal_3ccc64a41dc1b0def973c9e65a7d42b35d97e8dcadbfb7e3b70199602c927582 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ccc64a41dc1b0def973c9e65a7d42b35d97e8dcadbfb7e3b70199602c927582->enter($__internal_3ccc64a41dc1b0def973c9e65a7d42b35d97e8dcadbfb7e3b70199602c927582_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b02d8cf0b5c6262c11f654b73edbb61dc4f16bebb4ae78bbe1d018d8aaecc4e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b02d8cf0b5c6262c11f654b73edbb61dc4f16bebb4ae78bbe1d018d8aaecc4e3->enter($__internal_b02d8cf0b5c6262c11f654b73edbb61dc4f16bebb4ae78bbe1d018d8aaecc4e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_b02d8cf0b5c6262c11f654b73edbb61dc4f16bebb4ae78bbe1d018d8aaecc4e3->leave($__internal_b02d8cf0b5c6262c11f654b73edbb61dc4f16bebb4ae78bbe1d018d8aaecc4e3_prof);

        
        $__internal_3ccc64a41dc1b0def973c9e65a7d42b35d97e8dcadbfb7e3b70199602c927582->leave($__internal_3ccc64a41dc1b0def973c9e65a7d42b35d97e8dcadbfb7e3b70199602c927582_prof);

    }

    // line 144
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_639667b81b9d1636667f6f808a34dbf2361aa801f63e856498f7f11c4c4be91b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_639667b81b9d1636667f6f808a34dbf2361aa801f63e856498f7f11c4c4be91b->enter($__internal_639667b81b9d1636667f6f808a34dbf2361aa801f63e856498f7f11c4c4be91b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_b2ac1bb0224099f5322c00dbaf9b9cdbb1f2e8039319f9d05f3db6955b7e9555 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2ac1bb0224099f5322c00dbaf9b9cdbb1f2e8039319f9d05f3db6955b7e9555->enter($__internal_b2ac1bb0224099f5322c00dbaf9b9cdbb1f2e8039319f9d05f3db6955b7e9555_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 145
        echo "
";
        
        $__internal_b2ac1bb0224099f5322c00dbaf9b9cdbb1f2e8039319f9d05f3db6955b7e9555->leave($__internal_b2ac1bb0224099f5322c00dbaf9b9cdbb1f2e8039319f9d05f3db6955b7e9555_prof);

        
        $__internal_639667b81b9d1636667f6f808a34dbf2361aa801f63e856498f7f11c4c4be91b->leave($__internal_639667b81b9d1636667f6f808a34dbf2361aa801f63e856498f7f11c4c4be91b_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  288 => 145,  279 => 144,  262 => 65,  250 => 12,  246 => 11,  241 => 9,  236 => 8,  227 => 7,  212 => 147,  210 => 144,  158 => 94,  130 => 66,  128 => 65,  115 => 61,  110 => 60,  105 => 59,  101 => 58,  78 => 37,  72 => 36,  67 => 34,  64 => 33,  62 => 32,  60 => 31,  49 => 23,  38 => 14,  36 => 7,  28 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">

    {% block stylesheets %}
        <script src={{ asset('https://code.jquery.com/jquery-3.2.1.js') }} integrity=\"sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=\" crossorigin=\"anonymous\"></script>
        <script src={{ asset('https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js') }}></script>
         <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">
        <link rel=\"stylesheet\" href={{ asset('https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css') }}>
        <link rel=\"stylesheet\" href=\"{{ asset('../../../css/style.css') }}\">
{% endblock %}



</head>
<body>

<div class=\"navbar-fixed\">
<nav class=\"nav-extended white\">
    <div class=\"nav-wrapper\">
        <a href=\"#!\" class=\"brand-logo\"><img src=\"{{ asset('../../../images/logo-filiere-spmeca-01.png') }}\"  /></a>
        <ul class=\"right hide-on-med-and-down\">
            <li><a href=\"/Filiale\">La Filiaire</a></li>
            <li><a href=\"/Work\">Les Travaux</a></li>
            <li><a href=\"/entity_actor\">Les Acteurs</a></li>
            <li><a href=\"/entity_advert\">L'actu</a></li>
            <li><a href=\"/contact\">Contacts</a></li>
            <div class=\"chip black\">
                {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
                {#{{ app.user.username }}#}

                <a href=\"{{ path('fos_user_security_logout') }}\">Déconnexion</a>
                {% else %}
                <a href=\"{{ path('fos_user_security_login') }}\">Connexion</a>
                {% endif %}</li>
            </div>
        </ul>
    </div>
    <div class=\"nav-content\">
        <span class=\"nav-title\">Title</span>
        <a class=\"btn-floating btn-large halfway-fab waves-effect waves-light teal\">
            <i class=\"material-icons\">add</i>
        </a>
    </div>
</nav>
        </div>
<style>
    .page-footer
    {
        margin-top:25%;
    }
</style>



{% for type, messages in app.session.flashBag.all %}
    {% for message in messages %}
        <div class=\"{{ type }}\">
            {{ message|trans({}, 'FOSUserBundle') }}
        </div>
    {% endfor %}
{% endfor %}
{% block body %}{% endblock %}

<footer class=\"page-footer #00e676 green accent-3\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col l6 s12\">
                <h5 class=\"white-text\">Footer Content</h5>
                <p class=\"grey-text text-lighten-4\">You can use rows and columns here to organize your footer content.</p>
            </div>
            <div class=\"col l4 offset-l2 s12\">
                <h5 class=\"white-text\">Links</h5>
                <ul>
                    <li><a class=\"grey-text text-lighten-3\" href=\"#!\">Link 1</a></li>
                    <li><a class=\"grey-text text-lighten-3\" href=\"#!\">Link 2</a></li>
                    <li><a class=\"grey-text text-lighten-3\" href=\"#!\">Link 3</a></li>
                    <li><a class=\"grey-text text-lighten-3\" href=\"#!\">Link 4</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class=\"footer-copyright\">
        <div class=\"container\">
            © 2014 Copyright Text

            <a class=\"grey-text text-lighten-4 right\" href=\"#!\">More Links</a>
        </div>
    </div>
</footer>
{#-------------------------------------------------------------------#}
<style>.preloader-background {
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: #eee;

        position: fixed;
        z-index: 100;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
    }</style>



<div class=\"preloader-background\">
    <div class=\"preloader-wrapper big active\">
        <div class=\"spinner-layer spinner-blue-only\">
            <div class=\"circle-clipper left\">
                <div class=\"circle\"></div>
            </div>
            <div class=\"gap-patch\">
                <div class=\"circle\"></div>
            </div>
            <div class=\"circle-clipper right\">
                <div class=\"circle\"></div>
            </div>
        </div>
    </div>
</div>


<script>document.addEventListener(\"DOMContentLoaded\", function(){
        \$('.preloader-background').delay(1700).fadeOut('fast');

        \$('.preloader-wrapper')
            .delay(1700)
            .fadeOut();
    });</script>
<script>
    // Initialize collapse button
    \$(\".button-collapse\").sideNav();
    // Initialize collapsible (uncomment the line below if you use the dropdown variation)
    //\$('.collapsible').collapsible();

</script>



{% block javascripts %}

{% endblock %}




</body>
</html>", "::base.html.twig", "/var/www/html/symfony-stg/app/Resources/views/base.html.twig");
    }
}
