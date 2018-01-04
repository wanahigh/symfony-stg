<?php

/* bootstrap_base_layout.html.twig */
class __TwigTemplate_5978f5bc9e3d5a2ac881655888227bc371a92e71793c7b529500a6d85982d2c7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("form_div_layout.html.twig", "bootstrap_base_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'textarea_widget' => array($this, 'block_textarea_widget'),
                'money_widget' => array($this, 'block_money_widget'),
                'percent_widget' => array($this, 'block_percent_widget'),
                'datetime_widget' => array($this, 'block_datetime_widget'),
                'date_widget' => array($this, 'block_date_widget'),
                'time_widget' => array($this, 'block_time_widget'),
                'dateinterval_widget' => array($this, 'block_dateinterval_widget'),
                'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
                'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
                'choice_label' => array($this, 'block_choice_label'),
                'checkbox_label' => array($this, 'block_checkbox_label'),
                'radio_label' => array($this, 'block_radio_label'),
                'button_row' => array($this, 'block_button_row'),
                'choice_row' => array($this, 'block_choice_row'),
                'date_row' => array($this, 'block_date_row'),
                'time_row' => array($this, 'block_time_row'),
                'datetime_row' => array($this, 'block_datetime_row'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_395e677d18cc9c5c3b9e3d884f6438e31c5510f4d7fa218b2694bbd998ee95b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_395e677d18cc9c5c3b9e3d884f6438e31c5510f4d7fa218b2694bbd998ee95b2->enter($__internal_395e677d18cc9c5c3b9e3d884f6438e31c5510f4d7fa218b2694bbd998ee95b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_base_layout.html.twig"));

        $__internal_c782b6ce95b5fce3594d466729c4450c75a08558d602c4ce33ea01fa8be6695c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c782b6ce95b5fce3594d466729c4450c75a08558d602c4ce33ea01fa8be6695c->enter($__internal_c782b6ce95b5fce3594d466729c4450c75a08558d602c4ce33ea01fa8be6695c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_base_layout.html.twig"));

        // line 2
        echo "
";
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 9
        echo "
";
        // line 10
        $this->displayBlock('money_widget', $context, $blocks);
        // line 27
        echo "
";
        // line 28
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 34
        echo "
";
        // line 35
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 48
        echo "
";
        // line 49
        $this->displayBlock('date_widget', $context, $blocks);
        // line 67
        echo "
";
        // line 68
        $this->displayBlock('time_widget', $context, $blocks);
        // line 83
        $this->displayBlock('dateinterval_widget', $context, $blocks);
        // line 121
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 125
        echo "
";
        // line 126
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 145
        echo "
";
        // line 147
        echo "
";
        // line 148
        $this->displayBlock('choice_label', $context, $blocks);
        // line 153
        echo "
";
        // line 154
        $this->displayBlock('checkbox_label', $context, $blocks);
        // line 157
        echo "
";
        // line 158
        $this->displayBlock('radio_label', $context, $blocks);
        // line 161
        echo "
";
        // line 163
        echo "
";
        // line 164
        $this->displayBlock('button_row', $context, $blocks);
        // line 169
        echo "
";
        // line 170
        $this->displayBlock('choice_row', $context, $blocks);
        // line 174
        echo "
";
        // line 175
        $this->displayBlock('date_row', $context, $blocks);
        // line 179
        echo "
";
        // line 180
        $this->displayBlock('time_row', $context, $blocks);
        // line 184
        echo "
";
        // line 185
        $this->displayBlock('datetime_row', $context, $blocks);
        
        $__internal_395e677d18cc9c5c3b9e3d884f6438e31c5510f4d7fa218b2694bbd998ee95b2->leave($__internal_395e677d18cc9c5c3b9e3d884f6438e31c5510f4d7fa218b2694bbd998ee95b2_prof);

        
        $__internal_c782b6ce95b5fce3594d466729c4450c75a08558d602c4ce33ea01fa8be6695c->leave($__internal_c782b6ce95b5fce3594d466729c4450c75a08558d602c4ce33ea01fa8be6695c_prof);

    }

    // line 5
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_7ef298c7e232066e72761b1ab47d1813cf279759cde57289e99397e2f6e962e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ef298c7e232066e72761b1ab47d1813cf279759cde57289e99397e2f6e962e4->enter($__internal_7ef298c7e232066e72761b1ab47d1813cf279759cde57289e99397e2f6e962e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_09a8f6e92e51fe6e6054302cd5489f2ba092ec386a8ba5d856afee21bf8b7804 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09a8f6e92e51fe6e6054302cd5489f2ba092ec386a8ba5d856afee21bf8b7804->enter($__internal_09a8f6e92e51fe6e6054302cd5489f2ba092ec386a8ba5d856afee21bf8b7804_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 6
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 6, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 7
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_09a8f6e92e51fe6e6054302cd5489f2ba092ec386a8ba5d856afee21bf8b7804->leave($__internal_09a8f6e92e51fe6e6054302cd5489f2ba092ec386a8ba5d856afee21bf8b7804_prof);

        
        $__internal_7ef298c7e232066e72761b1ab47d1813cf279759cde57289e99397e2f6e962e4->leave($__internal_7ef298c7e232066e72761b1ab47d1813cf279759cde57289e99397e2f6e962e4_prof);

    }

    // line 10
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_31678df74f89785ba9cc4a3e5c61f21534ec8cc8c83f1cd2f7290b51476c129b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31678df74f89785ba9cc4a3e5c61f21534ec8cc8c83f1cd2f7290b51476c129b->enter($__internal_31678df74f89785ba9cc4a3e5c61f21534ec8cc8c83f1cd2f7290b51476c129b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_2707ab889f00845c2bc1332827e729fbd058bd491cfe1f9a3f3c1d26e6762500 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2707ab889f00845c2bc1332827e729fbd058bd491cfe1f9a3f3c1d26e6762500->enter($__internal_2707ab889f00845c2bc1332827e729fbd058bd491cfe1f9a3f3c1d26e6762500_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 11
        $context["prepend"] =  !(is_string($__internal_9bc24332705309e65ca502e89821456aec97a6455d7ea727d0d47395659b4a5a = (isset($context["money_pattern"]) || array_key_exists("money_pattern", $context) ? $context["money_pattern"] : (function () { throw new Twig_Error_Runtime('Variable "money_pattern" does not exist.', 11, $this->getSourceContext()); })())) && is_string($__internal_49fdd122c242fb5a7fa5c9816e374326aa894aa7eb421cea7837afd97f02c69f = "{{") && ('' === $__internal_49fdd122c242fb5a7fa5c9816e374326aa894aa7eb421cea7837afd97f02c69f || 0 === strpos($__internal_9bc24332705309e65ca502e89821456aec97a6455d7ea727d0d47395659b4a5a, $__internal_49fdd122c242fb5a7fa5c9816e374326aa894aa7eb421cea7837afd97f02c69f)));
        // line 12
        echo "    ";
        $context["append"] =  !(is_string($__internal_27bc38282a59ece7b528af03e1a8de9b89671f87c043519b1010415401b7c730 = (isset($context["money_pattern"]) || array_key_exists("money_pattern", $context) ? $context["money_pattern"] : (function () { throw new Twig_Error_Runtime('Variable "money_pattern" does not exist.', 12, $this->getSourceContext()); })())) && is_string($__internal_1c77dd0ae1fca90d7c4e72f7d50e84391e5435c9037b8a7b5f956484198e8fc9 = "}}") && ('' === $__internal_1c77dd0ae1fca90d7c4e72f7d50e84391e5435c9037b8a7b5f956484198e8fc9 || $__internal_1c77dd0ae1fca90d7c4e72f7d50e84391e5435c9037b8a7b5f956484198e8fc9 === substr($__internal_27bc38282a59ece7b528af03e1a8de9b89671f87c043519b1010415401b7c730, -strlen($__internal_1c77dd0ae1fca90d7c4e72f7d50e84391e5435c9037b8a7b5f956484198e8fc9))));
        // line 13
        echo "    ";
        if (((isset($context["prepend"]) || array_key_exists("prepend", $context) ? $context["prepend"] : (function () { throw new Twig_Error_Runtime('Variable "prepend" does not exist.', 13, $this->getSourceContext()); })()) || (isset($context["append"]) || array_key_exists("append", $context) ? $context["append"] : (function () { throw new Twig_Error_Runtime('Variable "append" does not exist.', 13, $this->getSourceContext()); })()))) {
            // line 14
            echo "        <div class=\"input-group";
            echo twig_escape_filter($this->env, ((array_key_exists("group_class", $context)) ? (_twig_default_filter((isset($context["group_class"]) || array_key_exists("group_class", $context) ? $context["group_class"] : (function () { throw new Twig_Error_Runtime('Variable "group_class" does not exist.', 14, $this->getSourceContext()); })()), "")) : ("")), "html", null, true);
            echo "\">
            ";
            // line 15
            if ((isset($context["prepend"]) || array_key_exists("prepend", $context) ? $context["prepend"] : (function () { throw new Twig_Error_Runtime('Variable "prepend" does not exist.', 15, $this->getSourceContext()); })())) {
                // line 16
                echo "                <span class=\"input-group-addon\">";
                echo twig_escape_filter($this->env, twig_replace_filter((isset($context["money_pattern"]) || array_key_exists("money_pattern", $context) ? $context["money_pattern"] : (function () { throw new Twig_Error_Runtime('Variable "money_pattern" does not exist.', 16, $this->getSourceContext()); })()), array("{{ widget }}" => "")), "html", null, true);
                echo "</span>
            ";
            }
            // line 18
            $this->displayBlock("form_widget_simple", $context, $blocks);
            // line 19
            if ((isset($context["append"]) || array_key_exists("append", $context) ? $context["append"] : (function () { throw new Twig_Error_Runtime('Variable "append" does not exist.', 19, $this->getSourceContext()); })())) {
                // line 20
                echo "                <span class=\"input-group-addon\">";
                echo twig_escape_filter($this->env, twig_replace_filter((isset($context["money_pattern"]) || array_key_exists("money_pattern", $context) ? $context["money_pattern"] : (function () { throw new Twig_Error_Runtime('Variable "money_pattern" does not exist.', 20, $this->getSourceContext()); })()), array("{{ widget }}" => "")), "html", null, true);
                echo "</span>
            ";
            }
            // line 22
            echo "        </div>
    ";
        } else {
            // line 24
            $this->displayBlock("form_widget_simple", $context, $blocks);
        }
        
        $__internal_2707ab889f00845c2bc1332827e729fbd058bd491cfe1f9a3f3c1d26e6762500->leave($__internal_2707ab889f00845c2bc1332827e729fbd058bd491cfe1f9a3f3c1d26e6762500_prof);

        
        $__internal_31678df74f89785ba9cc4a3e5c61f21534ec8cc8c83f1cd2f7290b51476c129b->leave($__internal_31678df74f89785ba9cc4a3e5c61f21534ec8cc8c83f1cd2f7290b51476c129b_prof);

    }

    // line 28
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_1e36cbc99599dd36dbd5f74b53332096ab47ad6b67be8b8d330769af364378a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e36cbc99599dd36dbd5f74b53332096ab47ad6b67be8b8d330769af364378a9->enter($__internal_1e36cbc99599dd36dbd5f74b53332096ab47ad6b67be8b8d330769af364378a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_bc6d4bcbeb46a0d9b439c7f165e40dffedd6f8f1e2ca432e52451019d606de85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc6d4bcbeb46a0d9b439c7f165e40dffedd6f8f1e2ca432e52451019d606de85->enter($__internal_bc6d4bcbeb46a0d9b439c7f165e40dffedd6f8f1e2ca432e52451019d606de85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 29
        echo "<div class=\"input-group\">";
        // line 30
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 31
        echo "<span class=\"input-group-addon\">%</span>
    </div>";
        
        $__internal_bc6d4bcbeb46a0d9b439c7f165e40dffedd6f8f1e2ca432e52451019d606de85->leave($__internal_bc6d4bcbeb46a0d9b439c7f165e40dffedd6f8f1e2ca432e52451019d606de85_prof);

        
        $__internal_1e36cbc99599dd36dbd5f74b53332096ab47ad6b67be8b8d330769af364378a9->leave($__internal_1e36cbc99599dd36dbd5f74b53332096ab47ad6b67be8b8d330769af364378a9_prof);

    }

    // line 35
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_ab7607f3c7cd80a03e6abe0bfc55080db4656688ccd2d3ce4298cb13f8026ce0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab7607f3c7cd80a03e6abe0bfc55080db4656688ccd2d3ce4298cb13f8026ce0->enter($__internal_ab7607f3c7cd80a03e6abe0bfc55080db4656688ccd2d3ce4298cb13f8026ce0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_a22217f9683808b9449766e0ed12ae5035a7f7259f2a2ed08b454fa0c370da84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a22217f9683808b9449766e0ed12ae5035a7f7259f2a2ed08b454fa0c370da84->enter($__internal_a22217f9683808b9449766e0ed12ae5035a7f7259f2a2ed08b454fa0c370da84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 36
        if (((isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 36, $this->getSourceContext()); })()) == "single_text")) {
            // line 37
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 39
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 39, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 40
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 41
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 41, $this->getSourceContext()); })()), "date", array()), 'errors');
            // line 42
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 42, $this->getSourceContext()); })()), "time", array()), 'errors');
            // line 43
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 43, $this->getSourceContext()); })()), "date", array()), 'widget', array("datetime" => true));
            // line 44
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 44, $this->getSourceContext()); })()), "time", array()), 'widget', array("datetime" => true));
            // line 45
            echo "</div>";
        }
        
        $__internal_a22217f9683808b9449766e0ed12ae5035a7f7259f2a2ed08b454fa0c370da84->leave($__internal_a22217f9683808b9449766e0ed12ae5035a7f7259f2a2ed08b454fa0c370da84_prof);

        
        $__internal_ab7607f3c7cd80a03e6abe0bfc55080db4656688ccd2d3ce4298cb13f8026ce0->leave($__internal_ab7607f3c7cd80a03e6abe0bfc55080db4656688ccd2d3ce4298cb13f8026ce0_prof);

    }

    // line 49
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_e4cfff4ef094655b13ca3cad45b35649adf40506124ae761364a31b8b01ddf75 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4cfff4ef094655b13ca3cad45b35649adf40506124ae761364a31b8b01ddf75->enter($__internal_e4cfff4ef094655b13ca3cad45b35649adf40506124ae761364a31b8b01ddf75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_9d4d7bffcf8b427bb832dca1e786acb0c6fbc32e1b93ca2dc56a4bbb87b57e45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d4d7bffcf8b427bb832dca1e786acb0c6fbc32e1b93ca2dc56a4bbb87b57e45->enter($__internal_9d4d7bffcf8b427bb832dca1e786acb0c6fbc32e1b93ca2dc56a4bbb87b57e45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 50
        if (((isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 50, $this->getSourceContext()); })()) == "single_text")) {
            // line 51
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 53
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 53, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 54
            if (( !array_key_exists("datetime", $context) ||  !(isset($context["datetime"]) || array_key_exists("datetime", $context) ? $context["datetime"] : (function () { throw new Twig_Error_Runtime('Variable "datetime" does not exist.', 54, $this->getSourceContext()); })()))) {
                // line 55
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 57
            echo twig_replace_filter((isset($context["date_pattern"]) || array_key_exists("date_pattern", $context) ? $context["date_pattern"] : (function () { throw new Twig_Error_Runtime('Variable "date_pattern" does not exist.', 57, $this->getSourceContext()); })()), array("{{ year }}" =>             // line 58
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 58, $this->getSourceContext()); })()), "year", array()), 'widget'), "{{ month }}" =>             // line 59
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 59, $this->getSourceContext()); })()), "month", array()), 'widget'), "{{ day }}" =>             // line 60
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 60, $this->getSourceContext()); })()), "day", array()), 'widget')));
            // line 62
            if (( !array_key_exists("datetime", $context) ||  !(isset($context["datetime"]) || array_key_exists("datetime", $context) ? $context["datetime"] : (function () { throw new Twig_Error_Runtime('Variable "datetime" does not exist.', 62, $this->getSourceContext()); })()))) {
                // line 63
                echo "</div>";
            }
        }
        
        $__internal_9d4d7bffcf8b427bb832dca1e786acb0c6fbc32e1b93ca2dc56a4bbb87b57e45->leave($__internal_9d4d7bffcf8b427bb832dca1e786acb0c6fbc32e1b93ca2dc56a4bbb87b57e45_prof);

        
        $__internal_e4cfff4ef094655b13ca3cad45b35649adf40506124ae761364a31b8b01ddf75->leave($__internal_e4cfff4ef094655b13ca3cad45b35649adf40506124ae761364a31b8b01ddf75_prof);

    }

    // line 68
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_6084808578f7211c589677ef0c304fb6e622204e208d9f30f300af078602c2ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6084808578f7211c589677ef0c304fb6e622204e208d9f30f300af078602c2ac->enter($__internal_6084808578f7211c589677ef0c304fb6e622204e208d9f30f300af078602c2ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_73609fc0550431e8663d2a6fad2d1020c796fb316ff19fcc7a00f17fe61f072d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73609fc0550431e8663d2a6fad2d1020c796fb316ff19fcc7a00f17fe61f072d->enter($__internal_73609fc0550431e8663d2a6fad2d1020c796fb316ff19fcc7a00f17fe61f072d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 69
        if (((isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 69, $this->getSourceContext()); })()) == "single_text")) {
            // line 70
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 72
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 72, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 73
            if (( !array_key_exists("datetime", $context) || (false == (isset($context["datetime"]) || array_key_exists("datetime", $context) ? $context["datetime"] : (function () { throw new Twig_Error_Runtime('Variable "datetime" does not exist.', 73, $this->getSourceContext()); })())))) {
                // line 74
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 76
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 76, $this->getSourceContext()); })()), "hour", array()), 'widget');
            if ((isset($context["with_minutes"]) || array_key_exists("with_minutes", $context) ? $context["with_minutes"] : (function () { throw new Twig_Error_Runtime('Variable "with_minutes" does not exist.', 76, $this->getSourceContext()); })())) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 76, $this->getSourceContext()); })()), "minute", array()), 'widget');
            }
            if ((isset($context["with_seconds"]) || array_key_exists("with_seconds", $context) ? $context["with_seconds"] : (function () { throw new Twig_Error_Runtime('Variable "with_seconds" does not exist.', 76, $this->getSourceContext()); })())) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 76, $this->getSourceContext()); })()), "second", array()), 'widget');
            }
            // line 77
            if (( !array_key_exists("datetime", $context) || (false == (isset($context["datetime"]) || array_key_exists("datetime", $context) ? $context["datetime"] : (function () { throw new Twig_Error_Runtime('Variable "datetime" does not exist.', 77, $this->getSourceContext()); })())))) {
                // line 78
                echo "</div>";
            }
        }
        
        $__internal_73609fc0550431e8663d2a6fad2d1020c796fb316ff19fcc7a00f17fe61f072d->leave($__internal_73609fc0550431e8663d2a6fad2d1020c796fb316ff19fcc7a00f17fe61f072d_prof);

        
        $__internal_6084808578f7211c589677ef0c304fb6e622204e208d9f30f300af078602c2ac->leave($__internal_6084808578f7211c589677ef0c304fb6e622204e208d9f30f300af078602c2ac_prof);

    }

    // line 83
    public function block_dateinterval_widget($context, array $blocks = array())
    {
        $__internal_c22eb1f43de0e11bfc4779a555201407fbdf4cc9d915ae25bc71934e60b5347c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c22eb1f43de0e11bfc4779a555201407fbdf4cc9d915ae25bc71934e60b5347c->enter($__internal_c22eb1f43de0e11bfc4779a555201407fbdf4cc9d915ae25bc71934e60b5347c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        $__internal_0b13a20a67cf1b096d852309354078f9ad09e676f36af0b35e0d029c9b12858e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b13a20a67cf1b096d852309354078f9ad09e676f36af0b35e0d029c9b12858e->enter($__internal_0b13a20a67cf1b096d852309354078f9ad09e676f36af0b35e0d029c9b12858e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        // line 84
        if (((isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 84, $this->getSourceContext()); })()) == "single_text")) {
            // line 85
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 87
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 87, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 88
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 89
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 89, $this->getSourceContext()); })()), 'errors');
            // line 90
            echo "<div class=\"table-responsive\">
                <table class=\"table ";
            // line 91
            echo twig_escape_filter($this->env, ((array_key_exists("table_class", $context)) ? (_twig_default_filter((isset($context["table_class"]) || array_key_exists("table_class", $context) ? $context["table_class"] : (function () { throw new Twig_Error_Runtime('Variable "table_class" does not exist.', 91, $this->getSourceContext()); })()), "table-bordered table-condensed table-striped")) : ("table-bordered table-condensed table-striped")), "html", null, true);
            echo "\">
                    <thead>
                    <tr>";
            // line 94
            if ((isset($context["with_years"]) || array_key_exists("with_years", $context) ? $context["with_years"] : (function () { throw new Twig_Error_Runtime('Variable "with_years" does not exist.', 94, $this->getSourceContext()); })())) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 94, $this->getSourceContext()); })()), "years", array()), 'label');
                echo "</th>";
            }
            // line 95
            if ((isset($context["with_months"]) || array_key_exists("with_months", $context) ? $context["with_months"] : (function () { throw new Twig_Error_Runtime('Variable "with_months" does not exist.', 95, $this->getSourceContext()); })())) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 95, $this->getSourceContext()); })()), "months", array()), 'label');
                echo "</th>";
            }
            // line 96
            if ((isset($context["with_weeks"]) || array_key_exists("with_weeks", $context) ? $context["with_weeks"] : (function () { throw new Twig_Error_Runtime('Variable "with_weeks" does not exist.', 96, $this->getSourceContext()); })())) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 96, $this->getSourceContext()); })()), "weeks", array()), 'label');
                echo "</th>";
            }
            // line 97
            if ((isset($context["with_days"]) || array_key_exists("with_days", $context) ? $context["with_days"] : (function () { throw new Twig_Error_Runtime('Variable "with_days" does not exist.', 97, $this->getSourceContext()); })())) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 97, $this->getSourceContext()); })()), "days", array()), 'label');
                echo "</th>";
            }
            // line 98
            if ((isset($context["with_hours"]) || array_key_exists("with_hours", $context) ? $context["with_hours"] : (function () { throw new Twig_Error_Runtime('Variable "with_hours" does not exist.', 98, $this->getSourceContext()); })())) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 98, $this->getSourceContext()); })()), "hours", array()), 'label');
                echo "</th>";
            }
            // line 99
            if ((isset($context["with_minutes"]) || array_key_exists("with_minutes", $context) ? $context["with_minutes"] : (function () { throw new Twig_Error_Runtime('Variable "with_minutes" does not exist.', 99, $this->getSourceContext()); })())) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 99, $this->getSourceContext()); })()), "minutes", array()), 'label');
                echo "</th>";
            }
            // line 100
            if ((isset($context["with_seconds"]) || array_key_exists("with_seconds", $context) ? $context["with_seconds"] : (function () { throw new Twig_Error_Runtime('Variable "with_seconds" does not exist.', 100, $this->getSourceContext()); })())) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 100, $this->getSourceContext()); })()), "seconds", array()), 'label');
                echo "</th>";
            }
            // line 101
            echo "</tr>
                    </thead>
                    <tbody>
                    <tr>";
            // line 105
            if ((isset($context["with_years"]) || array_key_exists("with_years", $context) ? $context["with_years"] : (function () { throw new Twig_Error_Runtime('Variable "with_years" does not exist.', 105, $this->getSourceContext()); })())) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 105, $this->getSourceContext()); })()), "years", array()), 'widget');
                echo "</td>";
            }
            // line 106
            if ((isset($context["with_months"]) || array_key_exists("with_months", $context) ? $context["with_months"] : (function () { throw new Twig_Error_Runtime('Variable "with_months" does not exist.', 106, $this->getSourceContext()); })())) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 106, $this->getSourceContext()); })()), "months", array()), 'widget');
                echo "</td>";
            }
            // line 107
            if ((isset($context["with_weeks"]) || array_key_exists("with_weeks", $context) ? $context["with_weeks"] : (function () { throw new Twig_Error_Runtime('Variable "with_weeks" does not exist.', 107, $this->getSourceContext()); })())) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 107, $this->getSourceContext()); })()), "weeks", array()), 'widget');
                echo "</td>";
            }
            // line 108
            if ((isset($context["with_days"]) || array_key_exists("with_days", $context) ? $context["with_days"] : (function () { throw new Twig_Error_Runtime('Variable "with_days" does not exist.', 108, $this->getSourceContext()); })())) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 108, $this->getSourceContext()); })()), "days", array()), 'widget');
                echo "</td>";
            }
            // line 109
            if ((isset($context["with_hours"]) || array_key_exists("with_hours", $context) ? $context["with_hours"] : (function () { throw new Twig_Error_Runtime('Variable "with_hours" does not exist.', 109, $this->getSourceContext()); })())) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 109, $this->getSourceContext()); })()), "hours", array()), 'widget');
                echo "</td>";
            }
            // line 110
            if ((isset($context["with_minutes"]) || array_key_exists("with_minutes", $context) ? $context["with_minutes"] : (function () { throw new Twig_Error_Runtime('Variable "with_minutes" does not exist.', 110, $this->getSourceContext()); })())) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 110, $this->getSourceContext()); })()), "minutes", array()), 'widget');
                echo "</td>";
            }
            // line 111
            if ((isset($context["with_seconds"]) || array_key_exists("with_seconds", $context) ? $context["with_seconds"] : (function () { throw new Twig_Error_Runtime('Variable "with_seconds" does not exist.', 111, $this->getSourceContext()); })())) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 111, $this->getSourceContext()); })()), "seconds", array()), 'widget');
                echo "</td>";
            }
            // line 112
            echo "</tr>
                    </tbody>
                </table>
            </div>";
            // line 116
            if ((isset($context["with_invert"]) || array_key_exists("with_invert", $context) ? $context["with_invert"] : (function () { throw new Twig_Error_Runtime('Variable "with_invert" does not exist.', 116, $this->getSourceContext()); })())) {
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 116, $this->getSourceContext()); })()), "invert", array()), 'widget');
            }
            // line 117
            echo "</div>";
        }
        
        $__internal_0b13a20a67cf1b096d852309354078f9ad09e676f36af0b35e0d029c9b12858e->leave($__internal_0b13a20a67cf1b096d852309354078f9ad09e676f36af0b35e0d029c9b12858e_prof);

        
        $__internal_c22eb1f43de0e11bfc4779a555201407fbdf4cc9d915ae25bc71934e60b5347c->leave($__internal_c22eb1f43de0e11bfc4779a555201407fbdf4cc9d915ae25bc71934e60b5347c_prof);

    }

    // line 121
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_0c7dbab7ca6750fd11f6ada3e2bb3a129b67371dd3632d2d5af0d7ee298ff83f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c7dbab7ca6750fd11f6ada3e2bb3a129b67371dd3632d2d5af0d7ee298ff83f->enter($__internal_0c7dbab7ca6750fd11f6ada3e2bb3a129b67371dd3632d2d5af0d7ee298ff83f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_981680a343990734c49cfd92989e05d4e6d78c125ae9ec702bb67a7726e4a593 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_981680a343990734c49cfd92989e05d4e6d78c125ae9ec702bb67a7726e4a593->enter($__internal_981680a343990734c49cfd92989e05d4e6d78c125ae9ec702bb67a7726e4a593_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 122
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 122, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 123
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        
        $__internal_981680a343990734c49cfd92989e05d4e6d78c125ae9ec702bb67a7726e4a593->leave($__internal_981680a343990734c49cfd92989e05d4e6d78c125ae9ec702bb67a7726e4a593_prof);

        
        $__internal_0c7dbab7ca6750fd11f6ada3e2bb3a129b67371dd3632d2d5af0d7ee298ff83f->leave($__internal_0c7dbab7ca6750fd11f6ada3e2bb3a129b67371dd3632d2d5af0d7ee298ff83f_prof);

    }

    // line 126
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_fc8bb5230bf21ad78dfda057c30a27aa7d509b583c2f2af44f998c18f132ea19 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc8bb5230bf21ad78dfda057c30a27aa7d509b583c2f2af44f998c18f132ea19->enter($__internal_fc8bb5230bf21ad78dfda057c30a27aa7d509b583c2f2af44f998c18f132ea19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_5869ab0ce690d0c6c172308aa9a173be541d30eae50d71e4da4272f9b83e3b44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5869ab0ce690d0c6c172308aa9a173be541d30eae50d71e4da4272f9b83e3b44->enter($__internal_5869ab0ce690d0c6c172308aa9a173be541d30eae50d71e4da4272f9b83e3b44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 127
        if (twig_in_filter("-inline", ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")))) {
            // line 128
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 128, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 129
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => ((twig_get_attribute($this->env, $this->getSourceContext(),                 // line 130
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 131
(isset($context["choice_translation_domain"]) || array_key_exists("choice_translation_domain", $context) ? $context["choice_translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "choice_translation_domain" does not exist.', 131, $this->getSourceContext()); })())));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 135
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 136
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 136, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 137
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => ((twig_get_attribute($this->env, $this->getSourceContext(),                 // line 138
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 139
(isset($context["choice_translation_domain"]) || array_key_exists("choice_translation_domain", $context) ? $context["choice_translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "choice_translation_domain" does not exist.', 139, $this->getSourceContext()); })())));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 142
            echo "</div>";
        }
        
        $__internal_5869ab0ce690d0c6c172308aa9a173be541d30eae50d71e4da4272f9b83e3b44->leave($__internal_5869ab0ce690d0c6c172308aa9a173be541d30eae50d71e4da4272f9b83e3b44_prof);

        
        $__internal_fc8bb5230bf21ad78dfda057c30a27aa7d509b583c2f2af44f998c18f132ea19->leave($__internal_fc8bb5230bf21ad78dfda057c30a27aa7d509b583c2f2af44f998c18f132ea19_prof);

    }

    // line 148
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_389bb8c68d1d708ed2a28242fa58137b46b0955f1de181cd52966244331d2795 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_389bb8c68d1d708ed2a28242fa58137b46b0955f1de181cd52966244331d2795->enter($__internal_389bb8c68d1d708ed2a28242fa58137b46b0955f1de181cd52966244331d2795_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_50cfbee9580f1955679d5db381b5eb08fa2a6eeadec93bda0841243e1191fc57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50cfbee9580f1955679d5db381b5eb08fa2a6eeadec93bda0841243e1191fc57->enter($__internal_50cfbee9580f1955679d5db381b5eb08fa2a6eeadec93bda0841243e1191fc57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 150
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 150, $this->getSourceContext()); })()), array("class" => twig_trim_filter(twig_replace_filter(((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 151
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_50cfbee9580f1955679d5db381b5eb08fa2a6eeadec93bda0841243e1191fc57->leave($__internal_50cfbee9580f1955679d5db381b5eb08fa2a6eeadec93bda0841243e1191fc57_prof);

        
        $__internal_389bb8c68d1d708ed2a28242fa58137b46b0955f1de181cd52966244331d2795->leave($__internal_389bb8c68d1d708ed2a28242fa58137b46b0955f1de181cd52966244331d2795_prof);

    }

    // line 154
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_b8b93c0443a69a4dbbbf3f5caf886a9226d6f2f6c54fe5128ac41c2a9847c593 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8b93c0443a69a4dbbbf3f5caf886a9226d6f2f6c54fe5128ac41c2a9847c593->enter($__internal_b8b93c0443a69a4dbbbf3f5caf886a9226d6f2f6c54fe5128ac41c2a9847c593_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_3f12f98780abde11aa8e5063bdd001d8886cf1c713bf8464048d8df8e7f16a9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f12f98780abde11aa8e5063bdd001d8886cf1c713bf8464048d8df8e7f16a9d->enter($__internal_3f12f98780abde11aa8e5063bdd001d8886cf1c713bf8464048d8df8e7f16a9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 155
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_3f12f98780abde11aa8e5063bdd001d8886cf1c713bf8464048d8df8e7f16a9d->leave($__internal_3f12f98780abde11aa8e5063bdd001d8886cf1c713bf8464048d8df8e7f16a9d_prof);

        
        $__internal_b8b93c0443a69a4dbbbf3f5caf886a9226d6f2f6c54fe5128ac41c2a9847c593->leave($__internal_b8b93c0443a69a4dbbbf3f5caf886a9226d6f2f6c54fe5128ac41c2a9847c593_prof);

    }

    // line 158
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_a1e2a32c121a8a3409092bdd4ae6275e182cb9669c6a2afb79f89d7d75cb28f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1e2a32c121a8a3409092bdd4ae6275e182cb9669c6a2afb79f89d7d75cb28f9->enter($__internal_a1e2a32c121a8a3409092bdd4ae6275e182cb9669c6a2afb79f89d7d75cb28f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_a8e7ec9a54c1b17411377e108b82fbab06f2d4e4ca397de78ddbf178383de963 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8e7ec9a54c1b17411377e108b82fbab06f2d4e4ca397de78ddbf178383de963->enter($__internal_a8e7ec9a54c1b17411377e108b82fbab06f2d4e4ca397de78ddbf178383de963_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 159
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_a8e7ec9a54c1b17411377e108b82fbab06f2d4e4ca397de78ddbf178383de963->leave($__internal_a8e7ec9a54c1b17411377e108b82fbab06f2d4e4ca397de78ddbf178383de963_prof);

        
        $__internal_a1e2a32c121a8a3409092bdd4ae6275e182cb9669c6a2afb79f89d7d75cb28f9->leave($__internal_a1e2a32c121a8a3409092bdd4ae6275e182cb9669c6a2afb79f89d7d75cb28f9_prof);

    }

    // line 164
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_b539bc6f5e4dd7ff01bf33c186b36ab0d4650c85ee72e5dab25002a2f42ffd2f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b539bc6f5e4dd7ff01bf33c186b36ab0d4650c85ee72e5dab25002a2f42ffd2f->enter($__internal_b539bc6f5e4dd7ff01bf33c186b36ab0d4650c85ee72e5dab25002a2f42ffd2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_c49b4f52acd0586811c861b2aea0d897ef199e9e02b249f15cc66051c7477e11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c49b4f52acd0586811c861b2aea0d897ef199e9e02b249f15cc66051c7477e11->enter($__internal_c49b4f52acd0586811c861b2aea0d897ef199e9e02b249f15cc66051c7477e11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 165
        echo "<div class=\"form-group\">";
        // line 166
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 166, $this->getSourceContext()); })()), 'widget');
        // line 167
        echo "</div>";
        
        $__internal_c49b4f52acd0586811c861b2aea0d897ef199e9e02b249f15cc66051c7477e11->leave($__internal_c49b4f52acd0586811c861b2aea0d897ef199e9e02b249f15cc66051c7477e11_prof);

        
        $__internal_b539bc6f5e4dd7ff01bf33c186b36ab0d4650c85ee72e5dab25002a2f42ffd2f->leave($__internal_b539bc6f5e4dd7ff01bf33c186b36ab0d4650c85ee72e5dab25002a2f42ffd2f_prof);

    }

    // line 170
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_8c14ba92c6b133a1ccf0b099ea75c4ffe731d6296ed6464c12e834181f5f3e2e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c14ba92c6b133a1ccf0b099ea75c4ffe731d6296ed6464c12e834181f5f3e2e->enter($__internal_8c14ba92c6b133a1ccf0b099ea75c4ffe731d6296ed6464c12e834181f5f3e2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_03ca7833a0cc89df47155092daa34da16c2d384408150b8073daec602aff66cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03ca7833a0cc89df47155092daa34da16c2d384408150b8073daec602aff66cb->enter($__internal_03ca7833a0cc89df47155092daa34da16c2d384408150b8073daec602aff66cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 171
        $context["force_error"] = true;
        // line 172
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_03ca7833a0cc89df47155092daa34da16c2d384408150b8073daec602aff66cb->leave($__internal_03ca7833a0cc89df47155092daa34da16c2d384408150b8073daec602aff66cb_prof);

        
        $__internal_8c14ba92c6b133a1ccf0b099ea75c4ffe731d6296ed6464c12e834181f5f3e2e->leave($__internal_8c14ba92c6b133a1ccf0b099ea75c4ffe731d6296ed6464c12e834181f5f3e2e_prof);

    }

    // line 175
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_0bb742083b523756ff95984789b8ea70dba60ae6e04eb07989d14740b13a560e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0bb742083b523756ff95984789b8ea70dba60ae6e04eb07989d14740b13a560e->enter($__internal_0bb742083b523756ff95984789b8ea70dba60ae6e04eb07989d14740b13a560e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_94a92de6076b458bd568528b68d842071c77c1daeb4dedae92da8d383d17ef4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94a92de6076b458bd568528b68d842071c77c1daeb4dedae92da8d383d17ef4e->enter($__internal_94a92de6076b458bd568528b68d842071c77c1daeb4dedae92da8d383d17ef4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 176
        $context["force_error"] = true;
        // line 177
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_94a92de6076b458bd568528b68d842071c77c1daeb4dedae92da8d383d17ef4e->leave($__internal_94a92de6076b458bd568528b68d842071c77c1daeb4dedae92da8d383d17ef4e_prof);

        
        $__internal_0bb742083b523756ff95984789b8ea70dba60ae6e04eb07989d14740b13a560e->leave($__internal_0bb742083b523756ff95984789b8ea70dba60ae6e04eb07989d14740b13a560e_prof);

    }

    // line 180
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_96fb7014c742054c16ce0139613ff113e5bfdd1499cf2dc0702bb16e578e5393 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96fb7014c742054c16ce0139613ff113e5bfdd1499cf2dc0702bb16e578e5393->enter($__internal_96fb7014c742054c16ce0139613ff113e5bfdd1499cf2dc0702bb16e578e5393_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_abf5405afc5507a016766c6dd42ba95f75b2af2c16d599beb271e562581af8fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abf5405afc5507a016766c6dd42ba95f75b2af2c16d599beb271e562581af8fe->enter($__internal_abf5405afc5507a016766c6dd42ba95f75b2af2c16d599beb271e562581af8fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 181
        $context["force_error"] = true;
        // line 182
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_abf5405afc5507a016766c6dd42ba95f75b2af2c16d599beb271e562581af8fe->leave($__internal_abf5405afc5507a016766c6dd42ba95f75b2af2c16d599beb271e562581af8fe_prof);

        
        $__internal_96fb7014c742054c16ce0139613ff113e5bfdd1499cf2dc0702bb16e578e5393->leave($__internal_96fb7014c742054c16ce0139613ff113e5bfdd1499cf2dc0702bb16e578e5393_prof);

    }

    // line 185
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_2fa0f74494f990ad3b4b2323c6f077132e54accae8010420d79563fe29bc05f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2fa0f74494f990ad3b4b2323c6f077132e54accae8010420d79563fe29bc05f1->enter($__internal_2fa0f74494f990ad3b4b2323c6f077132e54accae8010420d79563fe29bc05f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_0b4efba12320f36037f03b60e9ab802c503a6024658fb46428e38d96b984117a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b4efba12320f36037f03b60e9ab802c503a6024658fb46428e38d96b984117a->enter($__internal_0b4efba12320f36037f03b60e9ab802c503a6024658fb46428e38d96b984117a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 186
        $context["force_error"] = true;
        // line 187
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_0b4efba12320f36037f03b60e9ab802c503a6024658fb46428e38d96b984117a->leave($__internal_0b4efba12320f36037f03b60e9ab802c503a6024658fb46428e38d96b984117a_prof);

        
        $__internal_2fa0f74494f990ad3b4b2323c6f077132e54accae8010420d79563fe29bc05f1->leave($__internal_2fa0f74494f990ad3b4b2323c6f077132e54accae8010420d79563fe29bc05f1_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_base_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  745 => 187,  743 => 186,  734 => 185,  724 => 182,  722 => 181,  713 => 180,  703 => 177,  701 => 176,  692 => 175,  682 => 172,  680 => 171,  671 => 170,  661 => 167,  659 => 166,  657 => 165,  648 => 164,  638 => 159,  629 => 158,  619 => 155,  610 => 154,  600 => 151,  598 => 150,  589 => 148,  578 => 142,  572 => 139,  571 => 138,  570 => 137,  566 => 136,  562 => 135,  555 => 131,  554 => 130,  553 => 129,  549 => 128,  547 => 127,  538 => 126,  528 => 123,  526 => 122,  517 => 121,  506 => 117,  502 => 116,  497 => 112,  491 => 111,  485 => 110,  479 => 109,  473 => 108,  467 => 107,  461 => 106,  455 => 105,  450 => 101,  444 => 100,  438 => 99,  432 => 98,  426 => 97,  420 => 96,  414 => 95,  408 => 94,  403 => 91,  400 => 90,  398 => 89,  394 => 88,  392 => 87,  389 => 85,  387 => 84,  378 => 83,  366 => 78,  364 => 77,  354 => 76,  349 => 74,  347 => 73,  345 => 72,  342 => 70,  340 => 69,  331 => 68,  319 => 63,  317 => 62,  315 => 60,  314 => 59,  313 => 58,  312 => 57,  307 => 55,  305 => 54,  303 => 53,  300 => 51,  298 => 50,  289 => 49,  278 => 45,  276 => 44,  274 => 43,  272 => 42,  270 => 41,  266 => 40,  264 => 39,  261 => 37,  259 => 36,  250 => 35,  239 => 31,  237 => 30,  235 => 29,  226 => 28,  215 => 24,  211 => 22,  205 => 20,  203 => 19,  201 => 18,  195 => 16,  193 => 15,  188 => 14,  185 => 13,  182 => 12,  180 => 11,  171 => 10,  161 => 7,  159 => 6,  150 => 5,  140 => 185,  137 => 184,  135 => 180,  132 => 179,  130 => 175,  127 => 174,  125 => 170,  122 => 169,  120 => 164,  117 => 163,  114 => 161,  112 => 158,  109 => 157,  107 => 154,  104 => 153,  102 => 148,  99 => 147,  96 => 145,  94 => 126,  91 => 125,  89 => 121,  87 => 83,  85 => 68,  82 => 67,  80 => 49,  77 => 48,  75 => 35,  72 => 34,  70 => 28,  67 => 27,  65 => 10,  62 => 9,  60 => 5,  57 => 4,  54 => 2,  14 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"form_div_layout.html.twig\" %}

{# Widgets #}

{% block textarea_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) %}
    {{- parent() -}}
{%- endblock textarea_widget %}

{% block money_widget -%}
    {% set prepend = not (money_pattern starts with '{{') %}
    {% set append = not (money_pattern ends with '}}') %}
    {% if prepend or append %}
        <div class=\"input-group{{ group_class|default('') }}\">
            {% if prepend %}
                <span class=\"input-group-addon\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
            {% endif %}
            {{- block('form_widget_simple') -}}
            {% if append %}
                <span class=\"input-group-addon\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
            {% endif %}
        </div>
    {% else %}
        {{- block('form_widget_simple') -}}
    {% endif %}
{%- endblock money_widget %}

{% block percent_widget -%}
    <div class=\"input-group\">
        {{- block('form_widget_simple') -}}
        <span class=\"input-group-addon\">%</span>
    </div>
{%- endblock percent_widget %}

{% block datetime_widget -%}
    {%- if widget == 'single_text' -%}
        {{- block('form_widget_simple') -}}
    {%- else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form.date) -}}
            {{- form_errors(form.time) -}}
            {{- form_widget(form.date, { datetime: true } ) -}}
            {{- form_widget(form.time, { datetime: true } ) -}}
        </div>
    {%- endif -%}
{%- endblock datetime_widget %}

{% block date_widget -%}
    {%- if widget == 'single_text' -%}
        {{- block('form_widget_simple') -}}
    {%- else -%}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        {%- if datetime is not defined or not datetime -%}
            <div {{ block('widget_container_attributes') -}}>
        {%- endif %}
            {{- date_pattern|replace({
                '{{ year }}': form_widget(form.year),
                '{{ month }}': form_widget(form.month),
                '{{ day }}': form_widget(form.day),
            })|raw -}}
        {%- if datetime is not defined or not datetime -%}
            </div>
        {%- endif -%}
    {%- endif -%}
{%- endblock date_widget %}

{% block time_widget -%}
    {%- if widget == 'single_text' -%}
        {{- block('form_widget_simple') -}}
    {%- else -%}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        {%- if datetime is not defined or false == datetime -%}
            <div {{ block('widget_container_attributes') -}}>
        {%- endif -%}
        {{- form_widget(form.hour) }}{% if with_minutes %}:{{ form_widget(form.minute) }}{% endif %}{% if with_seconds %}:{{ form_widget(form.second) }}{% endif %}
        {%- if datetime is not defined or false == datetime -%}
            </div>
        {%- endif -%}
    {%- endif -%}
{%- endblock time_widget %}

{%- block dateinterval_widget -%}
    {%- if widget == 'single_text' -%}
        {{- block('form_widget_simple') -}}
    {%- else -%}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form) -}}
            <div class=\"table-responsive\">
                <table class=\"table {{ table_class|default('table-bordered table-condensed table-striped') }}\">
                    <thead>
                    <tr>
                        {%- if with_years %}<th>{{ form_label(form.years) }}</th>{% endif -%}
                        {%- if with_months %}<th>{{ form_label(form.months) }}</th>{% endif -%}
                        {%- if with_weeks %}<th>{{ form_label(form.weeks) }}</th>{% endif -%}
                        {%- if with_days %}<th>{{ form_label(form.days) }}</th>{% endif -%}
                        {%- if with_hours %}<th>{{ form_label(form.hours) }}</th>{% endif -%}
                        {%- if with_minutes %}<th>{{ form_label(form.minutes) }}</th>{% endif -%}
                        {%- if with_seconds %}<th>{{ form_label(form.seconds) }}</th>{% endif -%}
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        {%- if with_years %}<td>{{ form_widget(form.years) }}</td>{% endif -%}
                        {%- if with_months %}<td>{{ form_widget(form.months) }}</td>{% endif -%}
                        {%- if with_weeks %}<td>{{ form_widget(form.weeks) }}</td>{% endif -%}
                        {%- if with_days %}<td>{{ form_widget(form.days) }}</td>{% endif -%}
                        {%- if with_hours %}<td>{{ form_widget(form.hours) }}</td>{% endif -%}
                        {%- if with_minutes %}<td>{{ form_widget(form.minutes) }}</td>{% endif -%}
                        {%- if with_seconds %}<td>{{ form_widget(form.seconds) }}</td>{% endif -%}
                    </tr>
                    </tbody>
                </table>
            </div>
            {%- if with_invert %}{{ form_widget(form.invert) }}{% endif -%}
        </div>
    {%- endif -%}
{%- endblock dateinterval_widget -%}

{% block choice_widget_collapsed -%}
    {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) -%}
    {{- parent() -}}
{%- endblock choice_widget_collapsed %}

{% block choice_widget_expanded -%}
    {%- if '-inline' in label_attr.class|default('') -%}
        {%- for child in form %}
            {{- form_widget(child, {
                parent_label_class: label_attr.class|default(''),
                translation_domain: choice_translation_domain,
            }) -}}
        {% endfor -%}
    {%- else -%}
        <div {{ block('widget_container_attributes') }}>
            {%- for child in form %}
                {{- form_widget(child, {
                    parent_label_class: label_attr.class|default(''),
                    translation_domain: choice_translation_domain,
                }) -}}
            {%- endfor -%}
        </div>
    {%- endif -%}
{%- endblock choice_widget_expanded %}

{# Labels #}

{% block choice_label -%}
    {# remove the checkbox-inline and radio-inline class, it's only useful for embed labels #}
    {%- set label_attr = label_attr|merge({class: label_attr.class|default('')|replace({'checkbox-inline': '', 'radio-inline': ''})|trim}) -%}
    {{- block('form_label') -}}
{% endblock choice_label %}

{% block checkbox_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock checkbox_label %}

{% block radio_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock radio_label %}

{# Rows #}

{% block button_row -%}
    <div class=\"form-group\">
        {{- form_widget(form) -}}
    </div>
{%- endblock button_row %}

{% block choice_row -%}
    {%- set force_error = true -%}
    {{- block('form_row') -}}
{%- endblock choice_row %}

{% block date_row -%}
    {%- set force_error = true -%}
    {{- block('form_row') -}}
{%- endblock date_row %}

{% block time_row -%}
    {%- set force_error = true -%}
    {{- block('form_row') -}}
{%- endblock time_row %}

{% block datetime_row -%}
    {%- set force_error = true -%}
    {{- block('form_row') -}}
{%- endblock datetime_row %}
", "bootstrap_base_layout.html.twig", "/var/www/html/symfony-stg/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/bootstrap_base_layout.html.twig");
    }
}
