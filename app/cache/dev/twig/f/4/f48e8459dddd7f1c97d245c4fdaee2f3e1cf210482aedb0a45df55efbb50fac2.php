<?php

/* SensioDistributionBundle::Configurator/form.html.twig */
class __TwigTemplate_f48e8459dddd7f1c97d245c4fdaee2f3e1cf210482aedb0a45df55efbb50fac2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("form_div_layout.html.twig", "SensioDistributionBundle::Configurator/form.html.twig", 1);
        $this->blocks = array(
            'form_rows' => array($this, 'block_form_rows'),
            'form_row' => array($this, 'block_form_row'),
            'form_label' => array($this, 'block_form_label'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "form_div_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f907ad49cd6e9678b11262c6b6d42a425ce4061d4d45a894c1dd53a90cd21b51 = $this->env->getExtension("native_profiler");
        $__internal_f907ad49cd6e9678b11262c6b6d42a425ce4061d4d45a894c1dd53a90cd21b51->enter($__internal_f907ad49cd6e9678b11262c6b6d42a425ce4061d4d45a894c1dd53a90cd21b51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle::Configurator/form.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f907ad49cd6e9678b11262c6b6d42a425ce4061d4d45a894c1dd53a90cd21b51->leave($__internal_f907ad49cd6e9678b11262c6b6d42a425ce4061d4d45a894c1dd53a90cd21b51_prof);

    }

    // line 3
    public function block_form_rows($context, array $blocks = array())
    {
        $__internal_7ef9a8b0de00c8bdd820762f2b026cde4cda4813e76e6e5cee01138aa81b8e77 = $this->env->getExtension("native_profiler");
        $__internal_7ef9a8b0de00c8bdd820762f2b026cde4cda4813e76e6e5cee01138aa81b8e77->enter($__internal_7ef9a8b0de00c8bdd820762f2b026cde4cda4813e76e6e5cee01138aa81b8e77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_rows"));

        // line 4
        echo "    <div class=\"symfony-form-errors\">
        ";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
    </div>
    ";
        // line 7
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 8
            echo "        ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'row');
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_7ef9a8b0de00c8bdd820762f2b026cde4cda4813e76e6e5cee01138aa81b8e77->leave($__internal_7ef9a8b0de00c8bdd820762f2b026cde4cda4813e76e6e5cee01138aa81b8e77_prof);

    }

    // line 12
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_4bcdcdbd014bf32c1e3f3a53945d60076368e96b595c2a03f0082c53c14f9bed = $this->env->getExtension("native_profiler");
        $__internal_4bcdcdbd014bf32c1e3f3a53945d60076368e96b595c2a03f0082c53c14f9bed->enter($__internal_4bcdcdbd014bf32c1e3f3a53945d60076368e96b595c2a03f0082c53c14f9bed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 13
        echo "    <div class=\"symfony-form-row\">
        ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label');
        echo "
        <div class=\"symfony-form-field\">
            ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
            <div class=\"symfony-form-errors\">
                ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_4bcdcdbd014bf32c1e3f3a53945d60076368e96b595c2a03f0082c53c14f9bed->leave($__internal_4bcdcdbd014bf32c1e3f3a53945d60076368e96b595c2a03f0082c53c14f9bed_prof);

    }

    // line 24
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_678250744ec2a8403a4be4312a2cad2195838174f7ddaa0023b697564a2104e8 = $this->env->getExtension("native_profiler");
        $__internal_678250744ec2a8403a4be4312a2cad2195838174f7ddaa0023b697564a2104e8->enter($__internal_678250744ec2a8403a4be4312a2cad2195838174f7ddaa0023b697564a2104e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 25
        echo "    ";
        if (twig_test_empty((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")))) {
            // line 26
            echo "        ";
            $context["label"] = $this->env->getExtension('form')->humanize((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")));
            // line 27
            echo "    ";
        }
        // line 28
        echo "    <label for=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\">
        ";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"))), "html", null, true);
        echo "
        ";
        // line 30
        if ((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required"))) {
            // line 31
            echo "            <span class=\"symfony-form-required\" title=\"This field is required\">*</span>
        ";
        }
        // line 33
        echo "    </label>
";
        
        $__internal_678250744ec2a8403a4be4312a2cad2195838174f7ddaa0023b697564a2104e8->leave($__internal_678250744ec2a8403a4be4312a2cad2195838174f7ddaa0023b697564a2104e8_prof);

    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle::Configurator/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 33,  125 => 31,  123 => 30,  119 => 29,  114 => 28,  111 => 27,  108 => 26,  105 => 25,  99 => 24,  87 => 18,  82 => 16,  77 => 14,  74 => 13,  68 => 12,  54 => 8,  50 => 7,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
