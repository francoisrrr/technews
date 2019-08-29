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

/* components/_menu.html.twig */
class __TwigTemplate_c4de6bfeaceaba2edc5682fd3c9d8e5cd4f385d7eafc8a5f671d3fcc54ad6ede extends \Twig\Template
{
    private $source;

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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/_menu.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/_menu.html.twig"));

        // line 1
        echo "<!--menu mobile-->
<nav class=\"menu-res hidden-lg hidden-md \">
    <div class=\"menu-res-inner\">
        <ul>
            <li><a href=\"index.html\">HOME</a></li>
            <li><a href=\"business.html\">BUSINESS</a></li>
            <li><a href=\"computing.html\"> COMPUTING</a></li>
            <li><a href=\"tech.html\">TECH</a></li>
        </ul>
    </div>
</nav>
<div class=\"page\">
    <div class=\"container\">
        <!--header-->
        <header class=\"header\">
            <div class=\"row\">
                <div class=\"col-md-3 col-sm-4 col-xs-12\">
                    <a href=\"#\" class=\"logo\">
                        <img alt=\"Logo\" src=\"images/logo.png\" />
                    </a>
                </div>
            </div>
        </header>
        <!--menu-->
        <nav class=\"menu font-heading\">
            <div class=\"menu-icon hidden-lg hidden-md\">
                <i class=\"fa fa-navicon\"></i>
                <span>MENU</span>
            </div>
            <ul class=\"hidden-sm hidden-xs\">
                <li>
                    <a href=\"index.html\">Accueil </a>
                </li>
                <li>
                    <a href=\"business.html\">Business</a>
                </li>
                <li>
                    <a href=\"computing.html\">Computing</a>
                </li>
                <li>
                    <a href=\"tech.html\">Tech </a>
                </li>
            </ul>
            <div class=\"search-icon\">
                <div class=\"search-icon-inner\">
                    <i class=\"fa fa-search\"></i>
                </div>
                <div class=\"search-box\">
                    <input type=\"text\" placeholder=\"Rechercher...\" />
                    <button>Lancer</button>
                </div>
            </div>
        </nav>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "components/_menu.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!--menu mobile-->
<nav class=\"menu-res hidden-lg hidden-md \">
    <div class=\"menu-res-inner\">
        <ul>
            <li><a href=\"index.html\">HOME</a></li>
            <li><a href=\"business.html\">BUSINESS</a></li>
            <li><a href=\"computing.html\"> COMPUTING</a></li>
            <li><a href=\"tech.html\">TECH</a></li>
        </ul>
    </div>
</nav>
<div class=\"page\">
    <div class=\"container\">
        <!--header-->
        <header class=\"header\">
            <div class=\"row\">
                <div class=\"col-md-3 col-sm-4 col-xs-12\">
                    <a href=\"#\" class=\"logo\">
                        <img alt=\"Logo\" src=\"images/logo.png\" />
                    </a>
                </div>
            </div>
        </header>
        <!--menu-->
        <nav class=\"menu font-heading\">
            <div class=\"menu-icon hidden-lg hidden-md\">
                <i class=\"fa fa-navicon\"></i>
                <span>MENU</span>
            </div>
            <ul class=\"hidden-sm hidden-xs\">
                <li>
                    <a href=\"index.html\">Accueil </a>
                </li>
                <li>
                    <a href=\"business.html\">Business</a>
                </li>
                <li>
                    <a href=\"computing.html\">Computing</a>
                </li>
                <li>
                    <a href=\"tech.html\">Tech </a>
                </li>
            </ul>
            <div class=\"search-icon\">
                <div class=\"search-icon-inner\">
                    <i class=\"fa fa-search\"></i>
                </div>
                <div class=\"search-box\">
                    <input type=\"text\" placeholder=\"Rechercher...\" />
                    <button>Lancer</button>
                </div>
            </div>
        </nav>", "components/_menu.html.twig", "C:\\xampp\\htdocs\\techNews\\templates\\components\\_menu.html.twig");
    }
}
