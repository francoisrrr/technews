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
class __TwigTemplate_40641bf1fce0d92014e515ddd9c36b0c0cc7a3c59c17d4bb2dc443e90b525d90 extends \Twig\Template
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
            <li>
                <a href=\"";
        // line 6
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\">Accueil </a>
            </li>                <li>
                <a href=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("default_categorie", ["slug" => "motocyclette"]);
        // line 10
        echo "\">Motocyclette </a>
            </li>
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
                        <img alt=\"Logo\" src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo.png"), "html", null, true);
        echo "\" />
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
                    <a href=\"";
        // line 35
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\">Accueil </a>
                </li>                <li>
                    <a href=\"";
        // line 37
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("default_categorie", ["slug" => "motocyclette"]);
        // line 39
        echo "\">Motocyclette </a>
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

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 39,  90 => 37,  85 => 35,  69 => 22,  55 => 10,  53 => 8,  48 => 6,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!--menu mobile-->
<nav class=\"menu-res hidden-lg hidden-md \">
    <div class=\"menu-res-inner\">
        <ul>
            <li>
                <a href=\"{{ path('index') }}\">Accueil </a>
            </li>                <li>
                <a href=\"{{ path('default_categorie', {
                    'slug' : 'motocyclette'
                }) }}\">Motocyclette </a>
            </li>
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
                        <img alt=\"Logo\" src=\"{{ asset('images/logo.png')}}\" />
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
                    <a href=\"{{ path('index') }}\">Accueil </a>
                </li>                <li>
                    <a href=\"{{ path('default_categorie', {
                        'slug' : 'motocyclette'
                    }) }}\">Motocyclette </a>
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
