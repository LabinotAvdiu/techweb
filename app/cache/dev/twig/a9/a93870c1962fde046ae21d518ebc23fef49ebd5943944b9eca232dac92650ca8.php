<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_7daebeaf83eb4a1d5a46a2423d7d0b13071f40230fc1c2c968343a5af725a0e8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5f9399c86a4542050e8db706427084d20b7a3a959abcbf9e2cf1920a92798b44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f9399c86a4542050e8db706427084d20b7a3a959abcbf9e2cf1920a92798b44->enter($__internal_5f9399c86a4542050e8db706427084d20b7a3a959abcbf9e2cf1920a92798b44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5f9399c86a4542050e8db706427084d20b7a3a959abcbf9e2cf1920a92798b44->leave($__internal_5f9399c86a4542050e8db706427084d20b7a3a959abcbf9e2cf1920a92798b44_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_112666de0520f293d33a60546b99a36d5b605658b765805d9359f2c89ff1ae7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_112666de0520f293d33a60546b99a36d5b605658b765805d9359f2c89ff1ae7f->enter($__internal_112666de0520f293d33a60546b99a36d5b605658b765805d9359f2c89ff1ae7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_112666de0520f293d33a60546b99a36d5b605658b765805d9359f2c89ff1ae7f->leave($__internal_112666de0520f293d33a60546b99a36d5b605658b765805d9359f2c89ff1ae7f_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_013ba7bdeeadd1252c38dba66bc098ff6d3f8672d6be2919ec21c1a55a60fd29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_013ba7bdeeadd1252c38dba66bc098ff6d3f8672d6be2919ec21c1a55a60fd29->enter($__internal_013ba7bdeeadd1252c38dba66bc098ff6d3f8672d6be2919ec21c1a55a60fd29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_013ba7bdeeadd1252c38dba66bc098ff6d3f8672d6be2919ec21c1a55a60fd29->leave($__internal_013ba7bdeeadd1252c38dba66bc098ff6d3f8672d6be2919ec21c1a55a60fd29_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_cbbdec9561240bac75cff5d979dd7050fd6c8f70a4526a6310b230b7f6e323b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbbdec9561240bac75cff5d979dd7050fd6c8f70a4526a6310b230b7f6e323b7->enter($__internal_cbbdec9561240bac75cff5d979dd7050fd6c8f70a4526a6310b230b7f6e323b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_cbbdec9561240bac75cff5d979dd7050fd6c8f70a4526a6310b230b7f6e323b7->leave($__internal_cbbdec9561240bac75cff5d979dd7050fd6c8f70a4526a6310b230b7f6e323b7_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/home/labxone/Documents/PHP_Avance_II_Techweb/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
