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
        $__internal_3794f66de3a444f4568d4524140b56d8d254d76069bfa1e695a41b3b1b1e8d18 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3794f66de3a444f4568d4524140b56d8d254d76069bfa1e695a41b3b1b1e8d18->enter($__internal_3794f66de3a444f4568d4524140b56d8d254d76069bfa1e695a41b3b1b1e8d18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_c2d6cfe3d409a41f04927eabdcc0bb058bf31b79172504aa51e56d57956a8ffe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2d6cfe3d409a41f04927eabdcc0bb058bf31b79172504aa51e56d57956a8ffe->enter($__internal_c2d6cfe3d409a41f04927eabdcc0bb058bf31b79172504aa51e56d57956a8ffe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
            <li><a class=\"hover\" href=\"/Filiale\">La Filiaire</a></li>
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
        <span class=\"nav-title\"></span>
    </div>
</nav>
</div>




";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 50, $this->getSourceContext()); })()), "session", array()), "flashBag", array()), "all", array()));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 51
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 52
                echo "        <div class=\"";
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo "\">
            ";
                // line 53
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
        // line 57
        $this->displayBlock('body', $context, $blocks);
        // line 58
        echo "
<footer class=\"page-footer black\">
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
        // line 90
        echo "<div class=\"preloader-background\">
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
        // line 124
        $this->displayBlock('javascripts', $context, $blocks);
        // line 127
        echo "



</body>
</html>";
        
        $__internal_3794f66de3a444f4568d4524140b56d8d254d76069bfa1e695a41b3b1b1e8d18->leave($__internal_3794f66de3a444f4568d4524140b56d8d254d76069bfa1e695a41b3b1b1e8d18_prof);

        
        $__internal_c2d6cfe3d409a41f04927eabdcc0bb058bf31b79172504aa51e56d57956a8ffe->leave($__internal_c2d6cfe3d409a41f04927eabdcc0bb058bf31b79172504aa51e56d57956a8ffe_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9f7a77106d02c28fa45b69f232505c581f4dc76949a041898e8263d8444137dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f7a77106d02c28fa45b69f232505c581f4dc76949a041898e8263d8444137dd->enter($__internal_9f7a77106d02c28fa45b69f232505c581f4dc76949a041898e8263d8444137dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_f708969b11f4c7835ef36341149f3c31062cd626c579f337da290772283b2644 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f708969b11f4c7835ef36341149f3c31062cd626c579f337da290772283b2644->enter($__internal_f708969b11f4c7835ef36341149f3c31062cd626c579f337da290772283b2644_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_f708969b11f4c7835ef36341149f3c31062cd626c579f337da290772283b2644->leave($__internal_f708969b11f4c7835ef36341149f3c31062cd626c579f337da290772283b2644_prof);

        
        $__internal_9f7a77106d02c28fa45b69f232505c581f4dc76949a041898e8263d8444137dd->leave($__internal_9f7a77106d02c28fa45b69f232505c581f4dc76949a041898e8263d8444137dd_prof);

    }

    // line 57
    public function block_body($context, array $blocks = array())
    {
        $__internal_ad6c3be7c4e40512019b7b44c244c9e286d0b88e3899750b569827688114d488 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad6c3be7c4e40512019b7b44c244c9e286d0b88e3899750b569827688114d488->enter($__internal_ad6c3be7c4e40512019b7b44c244c9e286d0b88e3899750b569827688114d488_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1972b4c530198d4020a489727b4610dcd6966da063bd332ef4e7612efba2033a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1972b4c530198d4020a489727b4610dcd6966da063bd332ef4e7612efba2033a->enter($__internal_1972b4c530198d4020a489727b4610dcd6966da063bd332ef4e7612efba2033a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_1972b4c530198d4020a489727b4610dcd6966da063bd332ef4e7612efba2033a->leave($__internal_1972b4c530198d4020a489727b4610dcd6966da063bd332ef4e7612efba2033a_prof);

        
        $__internal_ad6c3be7c4e40512019b7b44c244c9e286d0b88e3899750b569827688114d488->leave($__internal_ad6c3be7c4e40512019b7b44c244c9e286d0b88e3899750b569827688114d488_prof);

    }

    // line 124
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_914ab283c362d72ec54d73bbd19127a3612f668dcea145d737adc9b6e25ef23f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_914ab283c362d72ec54d73bbd19127a3612f668dcea145d737adc9b6e25ef23f->enter($__internal_914ab283c362d72ec54d73bbd19127a3612f668dcea145d737adc9b6e25ef23f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_867476d5368fcd085a6e74bac934f5db30a2965a48bb72a6ebc929af1d9eb762 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_867476d5368fcd085a6e74bac934f5db30a2965a48bb72a6ebc929af1d9eb762->enter($__internal_867476d5368fcd085a6e74bac934f5db30a2965a48bb72a6ebc929af1d9eb762_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 125
        echo "
";
        
        $__internal_867476d5368fcd085a6e74bac934f5db30a2965a48bb72a6ebc929af1d9eb762->leave($__internal_867476d5368fcd085a6e74bac934f5db30a2965a48bb72a6ebc929af1d9eb762_prof);

        
        $__internal_914ab283c362d72ec54d73bbd19127a3612f668dcea145d737adc9b6e25ef23f->leave($__internal_914ab283c362d72ec54d73bbd19127a3612f668dcea145d737adc9b6e25ef23f_prof);

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
        return array (  264 => 125,  255 => 124,  238 => 57,  226 => 12,  222 => 11,  217 => 9,  212 => 8,  203 => 7,  188 => 127,  186 => 124,  150 => 90,  122 => 58,  120 => 57,  107 => 53,  102 => 52,  97 => 51,  93 => 50,  78 => 37,  72 => 36,  67 => 34,  64 => 33,  62 => 32,  60 => 31,  49 => 23,  38 => 14,  36 => 7,  28 => 1,);
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
            <li><a class=\"hover\" href=\"/Filiale\">La Filiaire</a></li>
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
        <span class=\"nav-title\"></span>
    </div>
</nav>
</div>




{% for type, messages in app.session.flashBag.all %}
    {% for message in messages %}
        <div class=\"{{ type }}\">
            {{ message|trans({}, 'FOSUserBundle') }}
        </div>
    {% endfor %}
{% endfor %}
{% block body %}{% endblock %}

<footer class=\"page-footer black\">
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
