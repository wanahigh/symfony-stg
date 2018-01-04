<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_7f0452b624374aebae399b2d44db3312893a9284768ffe779e1285b38d251e0d extends Twig_Template
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
        $__internal_bd051f3cd97e53dc54fc994657c75bf7af5b9987108cf5e58c033d574e0903d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd051f3cd97e53dc54fc994657c75bf7af5b9987108cf5e58c033d574e0903d1->enter($__internal_bd051f3cd97e53dc54fc994657c75bf7af5b9987108cf5e58c033d574e0903d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_6b71fe3a4eca5e005a86c30fa2d5d198b1d08e4e296670eb097df93746907138 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b71fe3a4eca5e005a86c30fa2d5d198b1d08e4e296670eb097df93746907138->enter($__internal_6b71fe3a4eca5e005a86c30fa2d5d198b1d08e4e296670eb097df93746907138_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php foreach (\$attr as \$k => \$v): ?>
<?php if ('placeholder' === \$k || 'title' === \$k): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (true === \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (false !== \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_bd051f3cd97e53dc54fc994657c75bf7af5b9987108cf5e58c033d574e0903d1->leave($__internal_bd051f3cd97e53dc54fc994657c75bf7af5b9987108cf5e58c033d574e0903d1_prof);

        
        $__internal_6b71fe3a4eca5e005a86c30fa2d5d198b1d08e4e296670eb097df93746907138->leave($__internal_6b71fe3a4eca5e005a86c30fa2d5d198b1d08e4e296670eb097df93746907138_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$attr as \$k => \$v): ?>
<?php if ('placeholder' === \$k || 'title' === \$k): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (true === \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (false !== \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/attributes.html.php", "/var/www/html/symfony-stg/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/attributes.html.php");
    }
}
