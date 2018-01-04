<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_7511c90e6c7e16a7eae76101f7b732d8f72fcf5907cf9f2c160420776a589744 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_95bf7a7cc1fd6e0534f8edfc1b3e8cbb71a183543a961bf7a3d3ea1edd507e7c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95bf7a7cc1fd6e0534f8edfc1b3e8cbb71a183543a961bf7a3d3ea1edd507e7c->enter($__internal_95bf7a7cc1fd6e0534f8edfc1b3e8cbb71a183543a961bf7a3d3ea1edd507e7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $__internal_3bdcb26c2083e8cd3462abe636705d7efa6649c8476328772d41004f6def9a9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3bdcb26c2083e8cd3462abe636705d7efa6649c8476328772d41004f6def9a9d->enter($__internal_3bdcb26c2083e8cd3462abe636705d7efa6649c8476328772d41004f6def9a9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_95bf7a7cc1fd6e0534f8edfc1b3e8cbb71a183543a961bf7a3d3ea1edd507e7c->leave($__internal_95bf7a7cc1fd6e0534f8edfc1b3e8cbb71a183543a961bf7a3d3ea1edd507e7c_prof);

        
        $__internal_3bdcb26c2083e8cd3462abe636705d7efa6649c8476328772d41004f6def9a9d->leave($__internal_3bdcb26c2083e8cd3462abe636705d7efa6649c8476328772d41004f6def9a9d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3d9733618c9ebea4266c903c938029b20b0adcd3018b522d76313beb86056b85 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d9733618c9ebea4266c903c938029b20b0adcd3018b522d76313beb86056b85->enter($__internal_3d9733618c9ebea4266c903c938029b20b0adcd3018b522d76313beb86056b85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_8321207039d4158fdee753aac206db17845c46453a417dcc9afaf3de353d50a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8321207039d4158fdee753aac206db17845c46453a417dcc9afaf3de353d50a5->enter($__internal_8321207039d4158fdee753aac206db17845c46453a417dcc9afaf3de353d50a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_8321207039d4158fdee753aac206db17845c46453a417dcc9afaf3de353d50a5->leave($__internal_8321207039d4158fdee753aac206db17845c46453a417dcc9afaf3de353d50a5_prof);

        
        $__internal_3d9733618c9ebea4266c903c938029b20b0adcd3018b522d76313beb86056b85->leave($__internal_3d9733618c9ebea4266c903c938029b20b0adcd3018b522d76313beb86056b85_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Group/list_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:list.html.twig", "/var/www/html/symfony-stg/vendor/friendsofsymfony/user-bundle/Resources/views/Group/list.html.twig");
    }
}
