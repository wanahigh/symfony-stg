<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_e3040e2d0bcad0f14b4df089fbdd1d4c6111b29268adf5a637d56cacba2ccbe7 extends Twig_Template
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
        $__internal_81f84b21b70d9996228d6a52bf3e8e1a0fe395e7c831c13248e6721d1e5316a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81f84b21b70d9996228d6a52bf3e8e1a0fe395e7c831c13248e6721d1e5316a6->enter($__internal_81f84b21b70d9996228d6a52bf3e8e1a0fe395e7c831c13248e6721d1e5316a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_1fe4e083a63c492f2c97c572655fa73d5d9432602b900763a577d7fddeda35b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fe4e083a63c492f2c97c572655fa73d5d9432602b900763a577d7fddeda35b4->enter($__internal_1fe4e083a63c492f2c97c572655fa73d5d9432602b900763a577d7fddeda35b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_81f84b21b70d9996228d6a52bf3e8e1a0fe395e7c831c13248e6721d1e5316a6->leave($__internal_81f84b21b70d9996228d6a52bf3e8e1a0fe395e7c831c13248e6721d1e5316a6_prof);

        
        $__internal_1fe4e083a63c492f2c97c572655fa73d5d9432602b900763a577d7fddeda35b4->leave($__internal_1fe4e083a63c492f2c97c572655fa73d5d9432602b900763a577d7fddeda35b4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "/var/www/html/symfony-stg/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget_expanded.html.php");
    }
}
