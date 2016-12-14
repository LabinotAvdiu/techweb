<?php

/* project/index.html.twig */
class __TwigTemplate_ca82cfc4cdbf17ac87e8af1a697a27b10ae4294f75380e1067374b51dc3d7141 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "project/index.html.twig", 1);
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
        $__internal_9cec6d573ce3da7508c4c07db40f36f500787ac91dfabad1392db7d00b947d17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9cec6d573ce3da7508c4c07db40f36f500787ac91dfabad1392db7d00b947d17->enter($__internal_9cec6d573ce3da7508c4c07db40f36f500787ac91dfabad1392db7d00b947d17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "project/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9cec6d573ce3da7508c4c07db40f36f500787ac91dfabad1392db7d00b947d17->leave($__internal_9cec6d573ce3da7508c4c07db40f36f500787ac91dfabad1392db7d00b947d17_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ea1e01c33d0651eab5c5b0e4fef2e9e69590b65c9e1367ce74022b69fd22ffe2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea1e01c33d0651eab5c5b0e4fef2e9e69590b65c9e1367ce74022b69fd22ffe2->enter($__internal_ea1e01c33d0651eab5c5b0e4fef2e9e69590b65c9e1367ce74022b69fd22ffe2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Projects list</h1>

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
        $context['_seq'] = twig_ensure_traversable((isset($context["projects"]) ? $context["projects"] : $this->getContext($context, "projects")));
        foreach ($context['_seq'] as $context["_key"] => $context["project"]) {
            // line 16
            echo "            <tr>
                <td><a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("project_show", array("id" => $this->getAttribute($context["project"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["project"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["project"], "name", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("project_show", array("id" => $this->getAttribute($context["project"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("project_edit", array("id" => $this->getAttribute($context["project"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['project'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("project_new");
        echo "\">Create a new project</a>
        </li>
    </ul>
";
        
        $__internal_ea1e01c33d0651eab5c5b0e4fef2e9e69590b65c9e1367ce74022b69fd22ffe2->leave($__internal_ea1e01c33d0651eab5c5b0e4fef2e9e69590b65c9e1367ce74022b69fd22ffe2_prof);

    }

    public function getTemplateName()
    {
        return "project/index.html.twig";
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
    <h1>Projects list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for project in projects %}
            <tr>
                <td><a href=\"{{ path('project_show', { 'id': project.id }) }}\">{{ project.id }}</a></td>
                <td>{{ project.name }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('project_show', { 'id': project.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('project_edit', { 'id': project.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('project_new') }}\">Create a new project</a>
        </li>
    </ul>
{% endblock %}
", "project/index.html.twig", "/home/labxone/Documents/PHP_Avance_II_Techweb/app/Resources/views/project/index.html.twig");
    }
}
