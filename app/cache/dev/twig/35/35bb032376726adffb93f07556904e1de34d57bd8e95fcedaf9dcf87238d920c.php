<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_881c0f8620278a8b93b165b033cbaeb442923e956a6017ce2c5b8e661bad827c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_89c7be29bb807ba7689426593c0a2622c480279458b996a00c7ed9c89848b27e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89c7be29bb807ba7689426593c0a2622c480279458b996a00c7ed9c89848b27e->enter($__internal_89c7be29bb807ba7689426593c0a2622c480279458b996a00c7ed9c89848b27e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_89c7be29bb807ba7689426593c0a2622c480279458b996a00c7ed9c89848b27e->leave($__internal_89c7be29bb807ba7689426593c0a2622c480279458b996a00c7ed9c89848b27e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e846a988b268f378d2850467ddd8cc4e305b4a9ebd8d237b4aae92efb4b39a18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e846a988b268f378d2850467ddd8cc4e305b4a9ebd8d237b4aae92efb4b39a18->enter($__internal_e846a988b268f378d2850467ddd8cc4e305b4a9ebd8d237b4aae92efb4b39a18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_e846a988b268f378d2850467ddd8cc4e305b4a9ebd8d237b4aae92efb4b39a18->leave($__internal_e846a988b268f378d2850467ddd8cc4e305b4a9ebd8d237b4aae92efb4b39a18_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_c5e03325b5f2e5ce6bc794483385c032369f22933b4ea62e0a269a7629448b23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5e03325b5f2e5ce6bc794483385c032369f22933b4ea62e0a269a7629448b23->enter($__internal_c5e03325b5f2e5ce6bc794483385c032369f22933b4ea62e0a269a7629448b23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_c5e03325b5f2e5ce6bc794483385c032369f22933b4ea62e0a269a7629448b23->leave($__internal_c5e03325b5f2e5ce6bc794483385c032369f22933b4ea62e0a269a7629448b23_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_3964a9622ad2ba6822cbea0c6f9ccd2ecdcbc19e59b608f07d467e81a8be6c8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3964a9622ad2ba6822cbea0c6f9ccd2ecdcbc19e59b608f07d467e81a8be6c8d->enter($__internal_3964a9622ad2ba6822cbea0c6f9ccd2ecdcbc19e59b608f07d467e81a8be6c8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_3964a9622ad2ba6822cbea0c6f9ccd2ecdcbc19e59b608f07d467e81a8be6c8d->leave($__internal_3964a9622ad2ba6822cbea0c6f9ccd2ecdcbc19e59b608f07d467e81a8be6c8d_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/home/labxone/Documents/PHP_Avance_II_Techweb/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
