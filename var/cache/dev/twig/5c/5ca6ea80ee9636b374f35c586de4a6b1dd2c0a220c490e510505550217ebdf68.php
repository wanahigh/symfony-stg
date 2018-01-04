<?php

/* AcmeActeurBundle:Default:index.html.twig */
class __TwigTemplate_d02d99378e006d37d576a5ca5d728ff7ec3a3e5fb404cf93cbb99f12d74013e3 extends Twig_Template
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
        $__internal_43f3d11a18f151c81ecdc5b8191238d54d1fc466a016aa0cba425df18af95147 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43f3d11a18f151c81ecdc5b8191238d54d1fc466a016aa0cba425df18af95147->enter($__internal_43f3d11a18f151c81ecdc5b8191238d54d1fc466a016aa0cba425df18af95147_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AcmeActeurBundle:Default:index.html.twig"));

        $__internal_92c80bbac341755372cb229b36c111100b2128c68a42cc2c6bb70e8b04a9c695 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92c80bbac341755372cb229b36c111100b2128c68a42cc2c6bb70e8b04a9c695->enter($__internal_92c80bbac341755372cb229b36c111100b2128c68a42cc2c6bb70e8b04a9c695_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AcmeActeurBundle:Default:index.html.twig"));

        // line 1
        echo "
<meta charset=\"UTF-8\" />
<meta charset=\"UTF-8\" />
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">
<!-- Compiled and minified CSS -->
<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css\">
<!-- Compiled and minified JavaScript -->
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js\"></script>

<div class=\"navbar-fixed\">
    <nav>
        <div class=\"nav-wrapper blue\">
            <a href=\"/accueil\" class=\"brand-logo center\">Logo</a>
            <ul class=\"left hide-on-med-and-down\">
                <li><a href=\"/Filiale\">La Filiaire</a></li>
                <li><a href=\"/Work\">Les Travaux</a></li>
                <li><a href=\"/acteur\">Les Acteurs</a></li>
                <li><a href=\"/entity_advert\">L'actu</a></li>
                <li><a href=\"/contact\">Contacts</a></li>
                <div class=\"chip pink   \">
                    ";
        // line 21
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 22
            echo "                    ";
            // line 23
            echo "                    ";
            // line 24
            echo "                    <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">Déconnexion</a>
                    ";
        } else {
            // line 26
            echo "                    <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">Connexion</a>
                    ";
        }
        // line 27
        echo "</li>
                </div>
            </ul>
        </div>
    </nav>
</div>";
        // line 36
        echo "

<h1>hello world</h1>";
        // line 47
        echo "

<footer class=\"page-footer blue\">
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
";
        
        $__internal_43f3d11a18f151c81ecdc5b8191238d54d1fc466a016aa0cba425df18af95147->leave($__internal_43f3d11a18f151c81ecdc5b8191238d54d1fc466a016aa0cba425df18af95147_prof);

        
        $__internal_92c80bbac341755372cb229b36c111100b2128c68a42cc2c6bb70e8b04a9c695->leave($__internal_92c80bbac341755372cb229b36c111100b2128c68a42cc2c6bb70e8b04a9c695_prof);

    }

    public function getTemplateName()
    {
        return "AcmeActeurBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 47,  72 => 36,  65 => 27,  59 => 26,  53 => 24,  51 => 23,  49 => 22,  47 => 21,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("
<meta charset=\"UTF-8\" />
<meta charset=\"UTF-8\" />
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">
<!-- Compiled and minified CSS -->
<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css\">
<!-- Compiled and minified JavaScript -->
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js\"></script>

<div class=\"navbar-fixed\">
    <nav>
        <div class=\"nav-wrapper blue\">
            <a href=\"/accueil\" class=\"brand-logo center\">Logo</a>
            <ul class=\"left hide-on-med-and-down\">
                <li><a href=\"/Filiale\">La Filiaire</a></li>
                <li><a href=\"/Work\">Les Travaux</a></li>
                <li><a href=\"/acteur\">Les Acteurs</a></li>
                <li><a href=\"/entity_advert\">L'actu</a></li>
                <li><a href=\"/contact\">Contacts</a></li>
                <div class=\"chip pink   \">
                    {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
                    {#{{ app.user.username }}#}
                    {##}
                    <a href=\"{{ path('fos_user_security_logout') }}\">Déconnexion</a>
                    {% else %}
                    <a href=\"{{ path('fos_user_security_login') }}\">Connexion</a>
                    {% endif %}</li>
                </div>
            </ul>
        </div>
    </nav>
</div>


{#------------------------------------------HEADER END---------------------------------------------------------------    #}


<h1>hello world</h1>







    {#-------------------------------------------FOOTER BEGIN---------------------------------------------------    #}


<footer class=\"page-footer blue\">
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
", "AcmeActeurBundle:Default:index.html.twig", "/var/www/html/symfony-stg/src/Acme/ActeurBundle/Resources/views/Default/index.html.twig");
    }
}
