<?php

/* category/index.html.twig */
class __TwigTemplate_838602a9b371dab59a6efb9d5d0f660e64165c6ac226f2c8bcb0714cae49b8d5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "category/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_50997c9d02fcd41e1d125c85defa5679654316a78b7ad07cfe88e015d8cf1179 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50997c9d02fcd41e1d125c85defa5679654316a78b7ad07cfe88e015d8cf1179->enter($__internal_50997c9d02fcd41e1d125c85defa5679654316a78b7ad07cfe88e015d8cf1179_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "category/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_50997c9d02fcd41e1d125c85defa5679654316a78b7ad07cfe88e015d8cf1179->leave($__internal_50997c9d02fcd41e1d125c85defa5679654316a78b7ad07cfe88e015d8cf1179_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8e98032377d18fa82ba48bd26c58fae8d2cef1c3ad39512c473eb4a6cf88ae88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e98032377d18fa82ba48bd26c58fae8d2cef1c3ad39512c473eb4a6cf88ae88->enter($__internal_8e98032377d18fa82ba48bd26c58fae8d2cef1c3ad39512c473eb4a6cf88ae88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Categories list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 16
            echo "            <tr>
                <td><a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("category_show", array("id" => $this->getAttribute($context["category"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("category_show", array("id" => $this->getAttribute($context["category"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("category_edit", array("id" => $this->getAttribute($context["category"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("category_new");
        echo "\">Create a new category</a>
        </li>
    </ul>
";
        
        $__internal_8e98032377d18fa82ba48bd26c58fae8d2cef1c3ad39512c473eb4a6cf88ae88->leave($__internal_8e98032377d18fa82ba48bd26c58fae8d2cef1c3ad39512c473eb4a6cf88ae88_prof);

    }

    public function getTemplateName()
    {
        return "category/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 36,  91 => 31,  79 => 25,  73 => 22,  66 => 18,  60 => 17,  57 => 16,  53 => 15,  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Categories list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for category in categories %}
            <tr>
                <td><a href=\"{{ path('category_show', { 'id': category.id }) }}\">{{ category.id }}</a></td>
                <td>{{ category.name }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('category_show', { 'id': category.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('category_edit', { 'id': category.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('category_new') }}\">Create a new category</a>
        </li>
    </ul>
{% endblock %}
", "category/index.html.twig", "/home/labxone/Documents/PHP_Avance_II_Techweb/app/Resources/views/category/index.html.twig");
    }
}
