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

/* front/website/mentions-legales.html.twig */
class __TwigTemplate_22f275c9ede43720b61035a2b70a415f25da529d130e799d0980de1c37cbd437 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/website/mentions-legales.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/website/mentions-legales.html.twig"));

        // line 1
        echo "<main>
<h1>Mentions l&eacute;gales du site</h1>
<!-- Éditeur du site -->

<section>
<h2>&Eacute;diteur du site</h2>
</section>
<!-- Concepteur du site -->

<section>
<h2>Concepteur&nbsp;du site&nbsp;</h2>
</section>
<!-- Hébergeur du site -->

<section>
<h2>H&eacute;bergeur du site&nbsp;</h2>
</section>

<p>&nbsp;</p>
</main>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "front/website/mentions-legales.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<main>
<h1>Mentions l&eacute;gales du site</h1>
<!-- Éditeur du site -->

<section>
<h2>&Eacute;diteur du site</h2>
</section>
<!-- Concepteur du site -->

<section>
<h2>Concepteur&nbsp;du site&nbsp;</h2>
</section>
<!-- Hébergeur du site -->

<section>
<h2>H&eacute;bergeur du site&nbsp;</h2>
</section>

<p>&nbsp;</p>
</main>", "front/website/mentions-legales.html.twig", "/Users/kevinrifa/Documents/Creative_Eye_Studio/cms-projects/templates/front/website/mentions-legales.html.twig");
    }
}
