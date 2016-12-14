<?php

/* base.html.twig */
class __TwigTemplate_376fa15d0bce452d98362600005a6a4b61a30cbd5fbbda9cc83dfbe757a9e655 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0ffc2937de3ef876a3a257d9630548d71ca4aaed0521ad741980a7d51395f1d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ffc2937de3ef876a3a257d9630548d71ca4aaed0521ad741980a7d51395f1d6->enter($__internal_0ffc2937de3ef876a3a257d9630548d71ca4aaed0521ad741980a7d51395f1d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_0ffc2937de3ef876a3a257d9630548d71ca4aaed0521ad741980a7d51395f1d6->leave($__internal_0ffc2937de3ef876a3a257d9630548d71ca4aaed0521ad741980a7d51395f1d6_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_61275ce7f076169ef569fb872b467e8611cdd0a621acb148a950323a803db1d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61275ce7f076169ef569fb872b467e8611cdd0a621acb148a950323a803db1d3->enter($__internal_61275ce7f076169ef569fb872b467e8611cdd0a621acb148a950323a803db1d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_61275ce7f076169ef569fb872b467e8611cdd0a621acb148a950323a803db1d3->leave($__internal_61275ce7f076169ef569fb872b467e8611cdd0a621acb148a950323a803db1d3_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_38ba18839c94a7046352ec85cdddcf8f177ebdc8c4f9c21282f98b79ab0c943d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38ba18839c94a7046352ec85cdddcf8f177ebdc8c4f9c21282f98b79ab0c943d->enter($__internal_38ba18839c94a7046352ec85cdddcf8f177ebdc8c4f9c21282f98b79ab0c943d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_38ba18839c94a7046352ec85cdddcf8f177ebdc8c4f9c21282f98b79ab0c943d->leave($__internal_38ba18839c94a7046352ec85cdddcf8f177ebdc8c4f9c21282f98b79ab0c943d_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_d563639cf82f5018912ad17cf7f37fd1b1c4120ff9e30149c39152a8b67e869a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d563639cf82f5018912ad17cf7f37fd1b1c4120ff9e30149c39152a8b67e869a->enter($__internal_d563639cf82f5018912ad17cf7f37fd1b1c4120ff9e30149c39152a8b67e869a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_d563639cf82f5018912ad17cf7f37fd1b1c4120ff9e30149c39152a8b67e869a->leave($__internal_d563639cf82f5018912ad17cf7f37fd1b1c4120ff9e30149c39152a8b67e869a_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_272e5bbe7e706d4c5567293043e475875ce6a73a22c872edffe0f9be981b2e6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_272e5bbe7e706d4c5567293043e475875ce6a73a22c872edffe0f9be981b2e6f->enter($__internal_272e5bbe7e706d4c5567293043e475875ce6a73a22c872edffe0f9be981b2e6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_272e5bbe7e706d4c5567293043e475875ce6a73a22c872edffe0f9be981b2e6f->leave($__internal_272e5bbe7e706d4c5567293043e475875ce6a73a22c872edffe0f9be981b2e6f_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/home/labxone/Documents/PHP_Avance_II_Techweb/app/Resources/views/base.html.twig");
    }
}
