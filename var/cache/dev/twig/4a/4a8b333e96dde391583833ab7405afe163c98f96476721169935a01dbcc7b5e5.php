<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_05ff2a0d92ec2b1fb90f9fdf6e7e36915dc8393ee82c49b0cb8df51f2ed709fb extends Twig_Template
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
        $__internal_3e8fdcb31deefc09b460e9fbc434ea91ff0afcc25e3faab58a43a344049eb4f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e8fdcb31deefc09b460e9fbc434ea91ff0afcc25e3faab58a43a344049eb4f1->enter($__internal_3e8fdcb31deefc09b460e9fbc434ea91ff0afcc25e3faab58a43a344049eb4f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_eef23e49b206475a1bb925011d26056cad67fad27cf7b58421923d1825e214c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eef23e49b206475a1bb925011d26056cad67fad27cf7b58421923d1825e214c0->enter($__internal_eef23e49b206475a1bb925011d26056cad67fad27cf7b58421923d1825e214c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_3e8fdcb31deefc09b460e9fbc434ea91ff0afcc25e3faab58a43a344049eb4f1->leave($__internal_3e8fdcb31deefc09b460e9fbc434ea91ff0afcc25e3faab58a43a344049eb4f1_prof);

        
        $__internal_eef23e49b206475a1bb925011d26056cad67fad27cf7b58421923d1825e214c0->leave($__internal_eef23e49b206475a1bb925011d26056cad67fad27cf7b58421923d1825e214c0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/var/www/html/symfony-stg/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
