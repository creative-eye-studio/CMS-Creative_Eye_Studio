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

/* base.html.twig */
class __TwigTemplate_75904c184d759504a069e0ab2a7e8b24186374f258723d946c47e1d9d07464ef extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>
            ";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        // line 9
        echo "        </title>
        <meta name=\"description\" content=\"";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["meta_description"]) || array_key_exists("meta_description", $context) ? $context["meta_description"] : (function () { throw new RuntimeError('Variable "meta_description" does not exist.', 10, $this->source); })()), "html", null, true);
        echo "\" />
        ";
        // line 13
        echo "        ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 16
        echo "
        ";
        // line 17
        $this->displayBlock('javascripts', $context, $blocks);
        // line 20
        echo "    </head>
    <body>
        <header></header>
        <nav>
            <ul>
                ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["links"]) || array_key_exists("links", $context) ? $context["links"] : (function () { throw new RuntimeError('Variable "links" does not exist.', 25, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 26
            echo "                <li>
                    <a href=";
            // line 27
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("page_view", ["slug" => twig_get_attribute($this->env, $this->source, $context["link"], "slug", [], "any", false, false, false, 27)]), "html", null, true);
            echo ">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["link"], "name", [], "any", false, false, false, 27), "html", null, true);
            echo "</a>
                </li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "            </ul>
        </nav>
        ";
        // line 32
        $this->displayBlock('body', $context, $blocks);
<<<<<<< Updated upstream
        // line 39
        echo "    </body>
=======
        // line 36
        echo "        <!-- Footer -->
        <footer>
            <ul>
                ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["linksNavLegal"]) || array_key_exists("linksNavLegal", $context) ? $context["linksNavLegal"] : (function () { throw new RuntimeError('Variable "linksNavLegal" does not exist.', 39, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 40
            echo "                <li>
                    <a href=";
            // line 41
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("page_view", ["slug" => twig_get_attribute($this->env, $this->source, $context["link"], "slug", [], "any", false, false, false, 41)]), "html", null, true);
            echo ">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["link"], "name", [], "any", false, false, false, 41), "html", null, true);
            echo "</a>
                </li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "            </ul>
        </footer>
        ";
        // line 46
        $this->displayBlock('javascripts', $context, $blocks);
        // line 49
        echo "        <script type=\"text/javascript\" src=\"https://cdn.jsdelivr.net/npm/cookie-bar/cookiebar-latest.min.js?forceLang=fr&theme=altblack&tracking=1&thirdparty=1&always=1&hideDetailsBtn=1&showPolicyLink=1&privacyPage=%2Fpolitique-confidentialite\"></script>
    </body>
>>>>>>> Stashed changes
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 7
        echo "                ";
        echo twig_escape_filter($this->env, (isset($context["meta_title"]) || array_key_exists("meta_title", $context) ? $context["meta_title"] : (function () { throw new RuntimeError('Variable "meta_title" does not exist.', 7, $this->source); })()), "html", null, true);
        echo "
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 13
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 14
        echo "            ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("app");
        echo "
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 17
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 18
        echo "            ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("app");
        echo "
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

<<<<<<< Updated upstream
    // line 32
    public function block_body($context, array $blocks = [])
=======
    // line 46
    public function block_javascripts($context, array $blocks = [])
>>>>>>> Stashed changes
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

<<<<<<< Updated upstream
        // line 33
=======
        // line 47
>>>>>>> Stashed changes
        echo "            ";
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 33, $this->source); })()), "request", [], "any", false, false, false, 33), "attributes", [], "any", false, false, false, 33), "get", [0 => "_route"], "method", false, false, false, 33), "home"))) {
            // line 34
            echo "                ";
            $this->loadTemplate("front/website/index.html.twig", "base.html.twig", 34)->display($context);
            // line 35
            echo "            ";
        } elseif ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 35, $this->source); })()), "request", [], "any", false, false, false, 35), "attributes", [], "any", false, false, false, 35), "get", [0 => "_route"], "method", false, false, false, 35), "home"))) {
            // line 36
            echo "                ";
            $this->loadTemplate((("front/website/" . twig_get_attribute($this->env, $this->source, (isset($context["slugs"]) || array_key_exists("slugs", $context) ? $context["slugs"] : (function () { throw new RuntimeError('Variable "slugs" does not exist.', 36, $this->source); })()), "slug", [], "any", false, false, false, 36)) . ".html.twig"), "base.html.twig", 36)->display($context);
            // line 37
            echo "            ";
        }
        // line 38
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
<<<<<<< Updated upstream
        return array (  208 => 38,  205 => 37,  202 => 36,  199 => 35,  196 => 34,  193 => 33,  183 => 32,  170 => 18,  160 => 17,  147 => 14,  137 => 13,  124 => 7,  114 => 6,  102 => 39,  100 => 32,  96 => 30,  85 => 27,  82 => 26,  78 => 25,  71 => 20,  69 => 17,  66 => 16,  63 => 13,  59 => 10,  56 => 9,  54 => 6,  47 => 1,);
=======
        return array (  231 => 47,  221 => 46,  211 => 35,  208 => 34,  205 => 33,  202 => 32,  199 => 31,  196 => 30,  186 => 29,  173 => 14,  163 => 13,  150 => 7,  140 => 6,  127 => 49,  125 => 46,  121 => 44,  110 => 41,  107 => 40,  103 => 39,  98 => 36,  96 => 29,  92 => 27,  81 => 24,  78 => 23,  74 => 22,  66 => 16,  63 => 13,  59 => 10,  56 => 9,  54 => 6,  47 => 1,);
>>>>>>> Stashed changes
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>
            {% block title %}
                {{ meta_title }}
            {% endblock %}
        </title>
        <meta name=\"description\" content=\"{{ meta_description }}\" />
        {# Run `composer require symfony/webpack-encore-bundle`
           and uncomment the following Encore helpers to start using Symfony UX #}
        {% block stylesheets %}
            {{ encore_entry_link_tags('app') }}
        {% endblock %}

        {% block javascripts %}
            {{ encore_entry_script_tags('app') }}
        {% endblock %}
    </head>
    <body>
        <header></header>
        <nav>
            <ul>
                {% for link in links %}
                <li>
                    <a href={{ path('page_view', { slug: link.slug }) }}>{{link.name}}</a>
                </li>
                {% endfor %}
            </ul>
        </nav>
        {% block body %}
            {% if app.request.attributes.get('_route') == 'home' %}
                {% include \"front/website/index.html.twig\" %}
            {% elseif app.request.attributes.get('_route') != 'home' %}
                {% include \"front/website/#{slugs.slug}.html.twig\" %}
            {% endif %}
        {% endblock %}
<<<<<<< Updated upstream
=======
        <!-- Footer -->
        <footer>
            <ul>
                {% for link in linksNavLegal %}
                <li>
                    <a href={{ path('page_view', { slug: link.slug }) }}>{{link.name}}</a>
                </li>
                {% endfor %}
            </ul>
        </footer>
        {% block javascripts %}
            {{ encore_entry_script_tags('app') }}
        {% endblock %}
        <script type=\"text/javascript\" src=\"https://cdn.jsdelivr.net/npm/cookie-bar/cookiebar-latest.min.js?forceLang=fr&theme=altblack&tracking=1&thirdparty=1&always=1&hideDetailsBtn=1&showPolicyLink=1&privacyPage=%2Fpolitique-confidentialite\"></script>
>>>>>>> Stashed changes
    </body>
</html>
", "base.html.twig", "/Users/kevinrifa/Documents/Creative_Eye_Studio/cms-projects/templates/base.html.twig");
    }
}
