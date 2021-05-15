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

/* admin/modify-page.html.twig */
class __TwigTemplate_21c2b4eb75bcf2be667731935ab44d4746ba91ec3b3698f3f7aefffeb5ea7685 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/modify-page.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/modify-page.html.twig"));

        $this->parent = $this->loadTemplate("admin.html.twig", "admin/modify-page.html.twig", 1);
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

        echo "Modifier une page";
        
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
    <h2>Modifier une page</h2>
    <ul class=\"nav nav-tabs\">
        <li class=\"active\"><a href=\"#content-page\">Contenu</a></li>
        <li><a href=\"#content-seo\">SEO</a></li>
    </ul>
    ";
        // line 13
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), 'form_start');
        echo "
        <div id=\"content-page\" class=\"tab-pane active\">
            ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "page_title", [], "any", false, false, false, 15), 'row', ["value" => (isset($context["pageName"]) || array_key_exists("pageName", $context) ? $context["pageName"] : (function () { throw new RuntimeError('Variable "pageName" does not exist.', 15, $this->source); })())]);
        echo "
            ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "page_nav_position", [], "any", false, false, false, 16), 'row', ["value" => (isset($context["pageNavPosition"]) || array_key_exists("pageNavPosition", $context) ? $context["pageNavPosition"] : (function () { throw new RuntimeError('Variable "pageNavPosition" does not exist.', 16, $this->source); })())]);
        echo "
            ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "page_nav_index", [], "any", false, false, false, 17), 'row', ["value" => (isset($context["pageNavIndex"]) || array_key_exists("pageNavIndex", $context) ? $context["pageNavIndex"] : (function () { throw new RuntimeError('Variable "pageNavIndex" does not exist.', 17, $this->source); })())]);
        echo "
            ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "page_url", [], "any", false, false, false, 18), 'row', ["value" => (isset($context["pageSlug"]) || array_key_exists("pageSlug", $context) ? $context["pageSlug"] : (function () { throw new RuntimeError('Variable "pageSlug" does not exist.', 18, $this->source); })())]);
        echo "
            ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "page_content", [], "any", false, false, false, 19), 'row', ["value" => (isset($context["dataFile"]) || array_key_exists("dataFile", $context) ? $context["dataFile"] : (function () { throw new RuntimeError('Variable "dataFile" does not exist.', 19, $this->source); })())]);
        echo "
        </div>
        <div id=\"content-seo\" class=\"tab-pane\">
            ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "page_meta_title", [], "any", false, false, false, 22), 'row', ["value" => (isset($context["pageMetaTitle"]) || array_key_exists("pageMetaTitle", $context) ? $context["pageMetaTitle"] : (function () { throw new RuntimeError('Variable "pageMetaTitle" does not exist.', 22, $this->source); })())]);
        echo "
            ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "page_meta_desc", [], "any", false, false, false, 23), 'row', ["value" => (isset($context["pageMetaDesc"]) || array_key_exists("pageMetaDesc", $context) ? $context["pageMetaDesc"] : (function () { throw new RuntimeError('Variable "pageMetaDesc" does not exist.', 23, $this->source); })())]);
        echo "
        </div>
        ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "page_submit", [], "any", false, false, false, 25), 'row');
        echo "
    ";
        // line 26
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), 'form_end');
        echo "
    <p><a href=\" ";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 27, $this->source); })()), "request", [], "any", false, false, false, 27), "schemeAndHttpHost", [], "any", false, false, false, 27), "html", null, true);
        echo "/fr/";
        echo twig_escape_filter($this->env, (isset($context["pageSlug"]) || array_key_exists("pageSlug", $context) ? $context["pageSlug"] : (function () { throw new RuntimeError('Variable "pageSlug" does not exist.', 27, $this->source); })()), "html", null, true);
        echo " \" target=\"_blank\" rel=\"noopener\">Voir la page</a></p>
</section>

";
        // line 30
        if ((((0 === twig_compare((isset($context["pageSlug"]) || array_key_exists("pageSlug", $context) ? $context["pageSlug"] : (function () { throw new RuntimeError('Variable "pageSlug" does not exist.', 30, $this->source); })()), "index")) || (0 === twig_compare((isset($context["pageSlug"]) || array_key_exists("pageSlug", $context) ? $context["pageSlug"] : (function () { throw new RuntimeError('Variable "pageSlug" does not exist.', 30, $this->source); })()), "mentions-legales"))) || (0 === twig_compare((isset($context["pageSlug"]) || array_key_exists("pageSlug", $context) ? $context["pageSlug"] : (function () { throw new RuntimeError('Variable "pageSlug" does not exist.', 30, $this->source); })()), "politique-de-confidentialite")))) {
            // line 31
            echo "    <script src=\"https://code.jquery.com/jquery-3.6.0.slim.min.js\"></script>
    <script>
        \$(\"#add_pages_page_url\").attr(\"type\", \"hidden\");
        \$(\"label[for=add_pages_page_url]\").addClass(\"hidden\");
    </script>
";
        }
        // line 37
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/modify-page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 37,  151 => 31,  149 => 30,  141 => 27,  137 => 26,  133 => 25,  128 => 23,  124 => 22,  118 => 19,  114 => 18,  110 => 17,  106 => 16,  102 => 15,  97 => 13,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin.html.twig' %}

{% block title %}Modifier une page{% endblock %}

{% block body %}

<section class=\"bloc1\">
    <h2>Modifier une page</h2>
    <ul class=\"nav nav-tabs\">
        <li class=\"active\"><a href=\"#content-page\">Contenu</a></li>
        <li><a href=\"#content-seo\">SEO</a></li>
    </ul>
    {{ form_start(form) }}
        <div id=\"content-page\" class=\"tab-pane active\">
            {{ form_row(form.page_title, { value: pageName } ) }}
            {{ form_row(form.page_nav_position, { value: pageNavPosition}) }}
            {{ form_row(form.page_nav_index, { value: pageNavIndex }) }}
            {{ form_row(form.page_url, { value: pageSlug }) }}
            {{ form_row(form.page_content, { value: dataFile }) }}
        </div>
        <div id=\"content-seo\" class=\"tab-pane\">
            {{ form_row(form.page_meta_title, { value: pageMetaTitle }) }}
            {{ form_row(form.page_meta_desc, { value: pageMetaDesc }) }}
        </div>
        {{ form_row(form.page_submit) }}
    {{ form_end(form) }}
    <p><a href=\" {{ app.request.schemeAndHttpHost }}/fr/{{ pageSlug }} \" target=\"_blank\" rel=\"noopener\">Voir la page</a></p>
</section>

{% if (pageSlug == \"index\") or (pageSlug == \"mentions-legales\") or (pageSlug == \"politique-de-confidentialite\") %}
    <script src=\"https://code.jquery.com/jquery-3.6.0.slim.min.js\"></script>
    <script>
        \$(\"#add_pages_page_url\").attr(\"type\", \"hidden\");
        \$(\"label[for=add_pages_page_url]\").addClass(\"hidden\");
    </script>
{% endif %}

{% endblock %}", "admin/modify-page.html.twig", "/Users/kevinrifa/Documents/Creative_Eye_Studio/cms-projects/templates/admin/modify-page.html.twig");
    }
}
