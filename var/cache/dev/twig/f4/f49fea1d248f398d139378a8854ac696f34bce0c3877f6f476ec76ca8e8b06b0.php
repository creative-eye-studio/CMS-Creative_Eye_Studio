<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* admin/pages-list.html.twig */
class __TwigTemplate_fc1be931e66e4e3d1151e2caffd157f164dd3ea473a0221b950b81e76ff8b1be extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/pages-list.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/pages-list.html.twig"));

        $this->parent = $this->loadTemplate("admin.html.twig", "admin/pages-list.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Pages du site";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
<section class=\"bloc1\">
    <p class=\"btn-add\">
        <a class=\"btn-link\" href=\"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_page");
        echo "\">Ajouter une page</a>
    </p>
    <h2>Liste des pages</h2>
    ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new RuntimeError('Variable "pages" does not exist.', 12, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 13
            echo "    <div class=\"line\">
        <p>";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["page"], "navindex", [], "any", false, false, false, 14), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["page"], "name", [], "any", false, false, false, 14), "html", null, true);
            echo "</p>
        <ul>
            ";
            // line 16
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["page"], "slug", [], "any", false, false, false, 16), "index"))) {
                // line 17
                echo "            <li>
                <a href=\" ";
                // line 18
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 18, $this->source); })()), "request", [], "any", false, false, false, 18), "schemeAndHttpHost", [], "any", false, false, false, 18), "html", null, true);
                echo "/fr/\" target=\"_blank\" rel=\"noopener\">Voir</a>
            </li>
            ";
            } elseif ((0 !== twig_compare(twig_get_attribute($this->env, $this->source,             // line 20
$context["page"], "slug", [], "any", false, false, false, 20), "index"))) {
                // line 21
                echo "            <li>
                <a href=\" ";
                // line 22
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 22, $this->source); })()), "request", [], "any", false, false, false, 22), "schemeAndHttpHost", [], "any", false, false, false, 22), "html", null, true);
                echo "/fr/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["page"], "slug", [], "any", false, false, false, 22), "html", null, true);
                echo "\" target=\"_blank\" rel=\"noopener\">Voir</a>
            </li>
            ";
            }
            // line 25
            echo "            <li>
                <a href=\" ";
            // line 26
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("modify_page", ["slug" => twig_get_attribute($this->env, $this->source, $context["page"], "slug", [], "any", false, false, false, 26)]), "html", null, true);
            echo " \">Modifier</a>
            </li>
            ";
            // line 28
            if (((-1 === twig_compare(twig_get_attribute($this->env, $this->source, $context["page"], "navindex", [], "any", false, false, false, 28), 100)) && (1 === twig_compare(twig_get_attribute($this->env, $this->source, $context["page"], "navindex", [], "any", false, false, false, 28), 0)))) {
                // line 29
                echo "            <li>
                <a href=\" ";
                // line 30
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_page", ["id" => twig_get_attribute($this->env, $this->source, $context["page"], "id", [], "any", false, false, false, 30)]), "html", null, true);
                echo " \">Supprimer</a>
            </li>
            ";
            }
            // line 33
            echo "        </ul>
    </div>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 36
            echo "        <p>Il n'y a pas encore de pages publiées !</p>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "</section>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/pages-list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 38,  163 => 36,  156 => 33,  150 => 30,  147 => 29,  145 => 28,  140 => 26,  137 => 25,  129 => 22,  126 => 21,  124 => 20,  119 => 18,  116 => 17,  114 => 16,  107 => 14,  104 => 13,  99 => 12,  93 => 9,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin.html.twig' %}

{% block title %}Pages du site{% endblock %}

{% block body %}

<section class=\"bloc1\">
    <p class=\"btn-add\">
        <a class=\"btn-link\" href=\"{{ path('add_page') }}\">Ajouter une page</a>
    </p>
    <h2>Liste des pages</h2>
    {% for page in pages %}
    <div class=\"line\">
        <p>{{ page.navindex }} - {{ page.name }}</p>
        <ul>
            {% if page.slug == \"index\" %}
            <li>
                <a href=\" {{ app.request.schemeAndHttpHost }}/fr/\" target=\"_blank\" rel=\"noopener\">Voir</a>
            </li>
            {% elseif page.slug != \"index\" %}
            <li>
                <a href=\" {{ app.request.schemeAndHttpHost }}/fr/{{ page.slug }}\" target=\"_blank\" rel=\"noopener\">Voir</a>
            </li>
            {% endif %}
            <li>
                <a href=\" {{ path('modify_page', { slug: page.slug } )}} \">Modifier</a>
            </li>
            {% if (page.navindex < 100) and (page.navindex > 0) %}
            <li>
                <a href=\" {{ path('delete_page', { id: page.id } )}} \">Supprimer</a>
            </li>
            {% endif %}
        </ul>
    </div>
    {% else %}
        <p>Il n'y a pas encore de pages publiées !</p>
    {% endfor %}
</section>

{% endblock %}", "admin/pages-list.html.twig", "/Users/kevinrifa/Documents/Creative_Eye_Studio/cms-projects/templates/admin/pages-list.html.twig");
    }
}
