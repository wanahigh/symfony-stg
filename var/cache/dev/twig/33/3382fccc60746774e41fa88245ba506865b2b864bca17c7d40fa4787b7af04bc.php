<?php

/* bootstrap_4_horizontal_layout.html.twig */
class __TwigTemplate_8d7fcd98b65c17273b362718c20707063b3a001f37f0603458fb958ba92b28c2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("bootstrap_4_layout.html.twig", "bootstrap_4_horizontal_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."bootstrap_4_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_label' => array($this, 'block_form_label'),
                'form_label_class' => array($this, 'block_form_label_class'),
                'form_row' => array($this, 'block_form_row'),
                'fieldset_form_row' => array($this, 'block_fieldset_form_row'),
                'submit_row' => array($this, 'block_submit_row'),
                'reset_row' => array($this, 'block_reset_row'),
                'form_group_class' => array($this, 'block_form_group_class'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_516c0dd628c02f32f25112c36fb4e0903431fd1614b44782454f1f186fff296e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_516c0dd628c02f32f25112c36fb4e0903431fd1614b44782454f1f186fff296e->enter($__internal_516c0dd628c02f32f25112c36fb4e0903431fd1614b44782454f1f186fff296e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_4_horizontal_layout.html.twig"));

        $__internal_e35610cad622e024351198464c037c3d56b95fc7c4a97ba82da9ad40ec8797a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e35610cad622e024351198464c037c3d56b95fc7c4a97ba82da9ad40ec8797a5->enter($__internal_e35610cad622e024351198464c037c3d56b95fc7c4a97ba82da9ad40ec8797a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_4_horizontal_layout.html.twig"));

        // line 2
        echo "
";
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('form_label', $context, $blocks);
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('form_label_class', $context, $blocks);
        // line 20
        echo "
";
        // line 22
        echo "
";
        // line 23
        $this->displayBlock('form_row', $context, $blocks);
        // line 36
        echo "
";
        // line 37
        $this->displayBlock('fieldset_form_row', $context, $blocks);
        // line 48
        echo "
";
        // line 49
        $this->displayBlock('submit_row', $context, $blocks);
        // line 57
        echo "
";
        // line 58
        $this->displayBlock('reset_row', $context, $blocks);
        // line 66
        echo "
";
        // line 67
        $this->displayBlock('form_group_class', $context, $blocks);
        // line 70
        echo "
";
        // line 71
        $this->displayBlock('checkbox_row', $context, $blocks);
        
        $__internal_516c0dd628c02f32f25112c36fb4e0903431fd1614b44782454f1f186fff296e->leave($__internal_516c0dd628c02f32f25112c36fb4e0903431fd1614b44782454f1f186fff296e_prof);

        
        $__internal_e35610cad622e024351198464c037c3d56b95fc7c4a97ba82da9ad40ec8797a5->leave($__internal_e35610cad622e024351198464c037c3d56b95fc7c4a97ba82da9ad40ec8797a5_prof);

    }

    // line 5
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_60642e8008ef8ef03831b0496dfb0551591757db0d3e1b9a241f5bdadff1421d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60642e8008ef8ef03831b0496dfb0551591757db0d3e1b9a241f5bdadff1421d->enter($__internal_60642e8008ef8ef03831b0496dfb0551591757db0d3e1b9a241f5bdadff1421d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_a3963a9777c86313c9f84de5fa66edef80634000a9efba9adcf0cd69790af92e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3963a9777c86313c9f84de5fa66edef80634000a9efba9adcf0cd69790af92e->enter($__internal_a3963a9777c86313c9f84de5fa66edef80634000a9efba9adcf0cd69790af92e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 6
        if (((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 6, $this->getSourceContext()); })()) === false)) {
            // line 7
            echo "<div class=\"";
            $this->displayBlock("form_label_class", $context, $blocks);
            echo "\"></div>";
        } else {
            // line 9
            if (( !array_key_exists("expanded", $context) ||  !(isset($context["expanded"]) || array_key_exists("expanded", $context) ? $context["expanded"] : (function () { throw new Twig_Error_Runtime('Variable "expanded" does not exist.', 9, $this->getSourceContext()); })()))) {
                // line 10
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 10, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " col-form-label"))));
            }
            // line 12
            $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 12, $this->getSourceContext()); })()), array("class" => twig_trim_filter(((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") .             $this->renderBlock("form_label_class", $context, $blocks)))));
            // line 13
            $this->displayParentBlock("form_label", $context, $blocks);
        }
        
        $__internal_a3963a9777c86313c9f84de5fa66edef80634000a9efba9adcf0cd69790af92e->leave($__internal_a3963a9777c86313c9f84de5fa66edef80634000a9efba9adcf0cd69790af92e_prof);

        
        $__internal_60642e8008ef8ef03831b0496dfb0551591757db0d3e1b9a241f5bdadff1421d->leave($__internal_60642e8008ef8ef03831b0496dfb0551591757db0d3e1b9a241f5bdadff1421d_prof);

    }

    // line 17
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_74875be07a9ab8c5b88a4cb6487540e0ec3199196d502d2cc5c638945de67983 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74875be07a9ab8c5b88a4cb6487540e0ec3199196d502d2cc5c638945de67983->enter($__internal_74875be07a9ab8c5b88a4cb6487540e0ec3199196d502d2cc5c638945de67983_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_e5935ab4af464cf8723d9b51b95ec6fec5e37d033a267dfd152b4dbcc930a8b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5935ab4af464cf8723d9b51b95ec6fec5e37d033a267dfd152b4dbcc930a8b4->enter($__internal_e5935ab4af464cf8723d9b51b95ec6fec5e37d033a267dfd152b4dbcc930a8b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 18
        echo "col-sm-2";
        
        $__internal_e5935ab4af464cf8723d9b51b95ec6fec5e37d033a267dfd152b4dbcc930a8b4->leave($__internal_e5935ab4af464cf8723d9b51b95ec6fec5e37d033a267dfd152b4dbcc930a8b4_prof);

        
        $__internal_74875be07a9ab8c5b88a4cb6487540e0ec3199196d502d2cc5c638945de67983->leave($__internal_74875be07a9ab8c5b88a4cb6487540e0ec3199196d502d2cc5c638945de67983_prof);

    }

    // line 23
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_b5f09ff779f7cf0ba33b4bb224dbaef6ba3632f4e2aeb1b5a022ad6f54d97bde = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5f09ff779f7cf0ba33b4bb224dbaef6ba3632f4e2aeb1b5a022ad6f54d97bde->enter($__internal_b5f09ff779f7cf0ba33b4bb224dbaef6ba3632f4e2aeb1b5a022ad6f54d97bde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_7c75fe1cddfd6479be3957e91f450f253c5977b8fe14f41603f2ea99c39cf6d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c75fe1cddfd6479be3957e91f450f253c5977b8fe14f41603f2ea99c39cf6d0->enter($__internal_7c75fe1cddfd6479be3957e91f450f253c5977b8fe14f41603f2ea99c39cf6d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 24
        if ((array_key_exists("expanded", $context) && (isset($context["expanded"]) || array_key_exists("expanded", $context) ? $context["expanded"] : (function () { throw new Twig_Error_Runtime('Variable "expanded" does not exist.', 24, $this->getSourceContext()); })()))) {
            // line 25
            $this->displayBlock("fieldset_form_row", $context, $blocks);
        } else {
            // line 27
            echo "<div class=\"form-group row";
            if ((( !(isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new Twig_Error_Runtime('Variable "compound" does not exist.', 27, $this->getSourceContext()); })()) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter((isset($context["force_error"]) || array_key_exists("force_error", $context) ? $context["force_error"] : (function () { throw new Twig_Error_Runtime('Variable "force_error" does not exist.', 27, $this->getSourceContext()); })()), false)) : (false))) &&  !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 27, $this->getSourceContext()); })()))) {
                echo " is-invalid";
            }
            echo "\">";
            // line 28
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 28, $this->getSourceContext()); })()), 'label');
            // line 29
            echo "<div class=\"";
            $this->displayBlock("form_group_class", $context, $blocks);
            echo "\">";
            // line 30
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 30, $this->getSourceContext()); })()), 'widget');
            // line 31
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 31, $this->getSourceContext()); })()), 'errors');
            // line 32
            echo "</div>
    ";
            // line 33
            echo "</div>";
        }
        
        $__internal_7c75fe1cddfd6479be3957e91f450f253c5977b8fe14f41603f2ea99c39cf6d0->leave($__internal_7c75fe1cddfd6479be3957e91f450f253c5977b8fe14f41603f2ea99c39cf6d0_prof);

        
        $__internal_b5f09ff779f7cf0ba33b4bb224dbaef6ba3632f4e2aeb1b5a022ad6f54d97bde->leave($__internal_b5f09ff779f7cf0ba33b4bb224dbaef6ba3632f4e2aeb1b5a022ad6f54d97bde_prof);

    }

    // line 37
    public function block_fieldset_form_row($context, array $blocks = array())
    {
        $__internal_0ecb3e5b3da3ca827fcede607dcb918f24b9b73643494faa901a3f0f91292a7a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ecb3e5b3da3ca827fcede607dcb918f24b9b73643494faa901a3f0f91292a7a->enter($__internal_0ecb3e5b3da3ca827fcede607dcb918f24b9b73643494faa901a3f0f91292a7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_form_row"));

        $__internal_a01c431c33fae3bc5e42a37da4e0599b2a21a95754ec16622e25635549cd7082 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a01c431c33fae3bc5e42a37da4e0599b2a21a95754ec16622e25635549cd7082->enter($__internal_a01c431c33fae3bc5e42a37da4e0599b2a21a95754ec16622e25635549cd7082_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_form_row"));

        // line 38
        echo "<fieldset class=\"form-group\">
        <div class=\"row";
        // line 39
        if ((( !(isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new Twig_Error_Runtime('Variable "compound" does not exist.', 39, $this->getSourceContext()); })()) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter((isset($context["force_error"]) || array_key_exists("force_error", $context) ? $context["force_error"] : (function () { throw new Twig_Error_Runtime('Variable "force_error" does not exist.', 39, $this->getSourceContext()); })()), false)) : (false))) &&  !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 39, $this->getSourceContext()); })()))) {
            echo " is-invalid";
        }
        echo "\">";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 40, $this->getSourceContext()); })()), 'label');
        // line 41
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 42, $this->getSourceContext()); })()), 'widget');
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 43, $this->getSourceContext()); })()), 'errors');
        // line 44
        echo "</div>
        </div>
";
        // line 46
        echo "</fieldset>";
        
        $__internal_a01c431c33fae3bc5e42a37da4e0599b2a21a95754ec16622e25635549cd7082->leave($__internal_a01c431c33fae3bc5e42a37da4e0599b2a21a95754ec16622e25635549cd7082_prof);

        
        $__internal_0ecb3e5b3da3ca827fcede607dcb918f24b9b73643494faa901a3f0f91292a7a->leave($__internal_0ecb3e5b3da3ca827fcede607dcb918f24b9b73643494faa901a3f0f91292a7a_prof);

    }

    // line 49
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_448999d5b0c1fc13d2b8fc9b701c646fdbf0eeb6a553a5312d2e140e9072d6cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_448999d5b0c1fc13d2b8fc9b701c646fdbf0eeb6a553a5312d2e140e9072d6cf->enter($__internal_448999d5b0c1fc13d2b8fc9b701c646fdbf0eeb6a553a5312d2e140e9072d6cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        $__internal_755536c793ac60d0c89a8b877f4919830373ebe5c2dd3f2756c89d11abcb0645 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_755536c793ac60d0c89a8b877f4919830373ebe5c2dd3f2756c89d11abcb0645->enter($__internal_755536c793ac60d0c89a8b877f4919830373ebe5c2dd3f2756c89d11abcb0645_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        // line 50
        echo "<div class=\"form-group row\">";
        // line 51
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 52
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 53, $this->getSourceContext()); })()), 'widget');
        // line 54
        echo "</div>";
        // line 55
        echo "</div>";
        
        $__internal_755536c793ac60d0c89a8b877f4919830373ebe5c2dd3f2756c89d11abcb0645->leave($__internal_755536c793ac60d0c89a8b877f4919830373ebe5c2dd3f2756c89d11abcb0645_prof);

        
        $__internal_448999d5b0c1fc13d2b8fc9b701c646fdbf0eeb6a553a5312d2e140e9072d6cf->leave($__internal_448999d5b0c1fc13d2b8fc9b701c646fdbf0eeb6a553a5312d2e140e9072d6cf_prof);

    }

    // line 58
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_0ef506381e0e9838ef5f38ac63a86cbea4dc416e1481353d0476345fd79ad85b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ef506381e0e9838ef5f38ac63a86cbea4dc416e1481353d0476345fd79ad85b->enter($__internal_0ef506381e0e9838ef5f38ac63a86cbea4dc416e1481353d0476345fd79ad85b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        $__internal_304072069bdd6cebd83cf7d6b70886c80b7abd771a59eb794c0efb93eabea700 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_304072069bdd6cebd83cf7d6b70886c80b7abd771a59eb794c0efb93eabea700->enter($__internal_304072069bdd6cebd83cf7d6b70886c80b7abd771a59eb794c0efb93eabea700_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        // line 59
        echo "<div class=\"form-group row\">";
        // line 60
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 61
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 62, $this->getSourceContext()); })()), 'widget');
        // line 63
        echo "</div>";
        // line 64
        echo "</div>";
        
        $__internal_304072069bdd6cebd83cf7d6b70886c80b7abd771a59eb794c0efb93eabea700->leave($__internal_304072069bdd6cebd83cf7d6b70886c80b7abd771a59eb794c0efb93eabea700_prof);

        
        $__internal_0ef506381e0e9838ef5f38ac63a86cbea4dc416e1481353d0476345fd79ad85b->leave($__internal_0ef506381e0e9838ef5f38ac63a86cbea4dc416e1481353d0476345fd79ad85b_prof);

    }

    // line 67
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_a4f732188999d0f629eda8599eef48dda0f05c8f2a9bb7c420a1a7953d2d634f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4f732188999d0f629eda8599eef48dda0f05c8f2a9bb7c420a1a7953d2d634f->enter($__internal_a4f732188999d0f629eda8599eef48dda0f05c8f2a9bb7c420a1a7953d2d634f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_ddb85cf8c93ed95be969cf0602523068adc72788bfeeab2a8a62fda85e454a4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ddb85cf8c93ed95be969cf0602523068adc72788bfeeab2a8a62fda85e454a4c->enter($__internal_ddb85cf8c93ed95be969cf0602523068adc72788bfeeab2a8a62fda85e454a4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 68
        echo "col-sm-10";
        
        $__internal_ddb85cf8c93ed95be969cf0602523068adc72788bfeeab2a8a62fda85e454a4c->leave($__internal_ddb85cf8c93ed95be969cf0602523068adc72788bfeeab2a8a62fda85e454a4c_prof);

        
        $__internal_a4f732188999d0f629eda8599eef48dda0f05c8f2a9bb7c420a1a7953d2d634f->leave($__internal_a4f732188999d0f629eda8599eef48dda0f05c8f2a9bb7c420a1a7953d2d634f_prof);

    }

    // line 71
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_08a5dcbc2276ac9294b5ab858d4feab12c9820121da738bef94011d209137cfd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08a5dcbc2276ac9294b5ab858d4feab12c9820121da738bef94011d209137cfd->enter($__internal_08a5dcbc2276ac9294b5ab858d4feab12c9820121da738bef94011d209137cfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_7abab520121d7d7eb829f84e643fe8e28b3d5203c3b15437276da615b78b9d07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7abab520121d7d7eb829f84e643fe8e28b3d5203c3b15437276da615b78b9d07->enter($__internal_7abab520121d7d7eb829f84e643fe8e28b3d5203c3b15437276da615b78b9d07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 72
        echo "<div class=\"form-group row\">";
        // line 73
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 74
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 75
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 75, $this->getSourceContext()); })()), 'widget');
        // line 76
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 76, $this->getSourceContext()); })()), 'errors');
        // line 77
        echo "</div>";
        // line 78
        echo "</div>";
        
        $__internal_7abab520121d7d7eb829f84e643fe8e28b3d5203c3b15437276da615b78b9d07->leave($__internal_7abab520121d7d7eb829f84e643fe8e28b3d5203c3b15437276da615b78b9d07_prof);

        
        $__internal_08a5dcbc2276ac9294b5ab858d4feab12c9820121da738bef94011d209137cfd->leave($__internal_08a5dcbc2276ac9294b5ab858d4feab12c9820121da738bef94011d209137cfd_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_4_horizontal_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  347 => 78,  345 => 77,  343 => 76,  341 => 75,  337 => 74,  333 => 73,  331 => 72,  322 => 71,  312 => 68,  303 => 67,  293 => 64,  291 => 63,  289 => 62,  285 => 61,  281 => 60,  279 => 59,  270 => 58,  260 => 55,  258 => 54,  256 => 53,  252 => 52,  248 => 51,  246 => 50,  237 => 49,  227 => 46,  223 => 44,  221 => 43,  219 => 42,  215 => 41,  213 => 40,  208 => 39,  205 => 38,  196 => 37,  185 => 33,  182 => 32,  180 => 31,  178 => 30,  174 => 29,  172 => 28,  166 => 27,  163 => 25,  161 => 24,  152 => 23,  142 => 18,  133 => 17,  122 => 13,  120 => 12,  117 => 10,  115 => 9,  110 => 7,  108 => 6,  99 => 5,  89 => 71,  86 => 70,  84 => 67,  81 => 66,  79 => 58,  76 => 57,  74 => 49,  71 => 48,  69 => 37,  66 => 36,  64 => 23,  61 => 22,  58 => 20,  56 => 17,  53 => 16,  51 => 5,  48 => 4,  45 => 2,  14 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"bootstrap_4_layout.html.twig\" %}

{# Labels #}

{% block form_label -%}
    {%- if label is same as(false) -%}
        <div class=\"{{ block('form_label_class') }}\"></div>
    {%- else -%}
        {%- if expanded is not defined or not expanded -%}
            {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' col-form-label')|trim}) -%}
        {%- endif -%}
        {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ block('form_label_class'))|trim}) -%}
        {{- parent() -}}
    {%- endif -%}
{%- endblock form_label %}

{% block form_label_class -%}
col-sm-2
{%- endblock form_label_class %}

{# Rows #}

{% block form_row -%}
    {%- if expanded is defined and expanded -%}
        {{ block('fieldset_form_row') }}
    {%- else -%}
        <div class=\"form-group row{% if (not compound or force_error|default(false)) and not valid %} is-invalid{% endif %}\">
            {{- form_label(form) -}}
            <div class=\"{{ block('form_group_class') }}\">
                {{- form_widget(form) -}}
                {{- form_errors(form) -}}
            </div>
    {##}</div>
    {%- endif -%}
{%- endblock form_row %}

{% block fieldset_form_row -%}
    <fieldset class=\"form-group\">
        <div class=\"row{% if (not compound or force_error|default(false)) and not valid %} is-invalid{% endif %}\">
            {{- form_label(form) -}}
            <div class=\"{{ block('form_group_class') }}\">
                {{- form_widget(form) -}}
                {{- form_errors(form) -}}
            </div>
        </div>
{##}</fieldset>
{%- endblock fieldset_form_row %}

{% block submit_row -%}
    <div class=\"form-group row\">{#--#}
        <div class=\"{{ block('form_label_class') }}\"></div>{#--#}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
        </div>{#--#}
    </div>
{%- endblock submit_row %}

{% block reset_row -%}
    <div class=\"form-group row\">{#--#}
        <div class=\"{{ block('form_label_class') }}\"></div>{#--#}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
        </div>{#--#}
    </div>
{%- endblock reset_row %}

{% block form_group_class -%}
col-sm-10
{%- endblock form_group_class %}

{% block checkbox_row -%}
    <div class=\"form-group row\">{#--#}
        <div class=\"{{ block('form_label_class') }}\"></div>{#--#}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
            {{- form_errors(form) -}}
        </div>{#--#}
    </div>
{%- endblock checkbox_row %}
", "bootstrap_4_horizontal_layout.html.twig", "/var/www/html/symfony-stg/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/bootstrap_4_horizontal_layout.html.twig");
    }
}
