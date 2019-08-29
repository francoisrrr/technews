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
class __TwigTemplate_d4fe789891a21a01132d21a89f395e8d9a7180fb713fc5abe1209b431c1c88c4 extends \Twig\Template
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
            </li>
            ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 8, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 9
            echo "            <li>
                <a href=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("default_categorie", ["slug" => twig_get_attribute($this->env, $this->source,             // line 11
$context["categorie"], "slug", [])]), "html", null, true);
            // line 12
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categorie"], "nom", []), "html", null, true);
            echo " </a>
            </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "
            ";
        // line 16
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 17
            echo "                <li>
                    <a href=\"";
            // line 18
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("membre_deconnexion");
            echo "\">Deconnexion</a>
                </li>
            ";
        } else {
            // line 21
            echo "                <li>
                    <a href=\"";
            // line 22
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("membre_connexion");
            echo "\">Connexion</a>
                </li>
                <li>
                    <a href=\"";
            // line 25
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("membre_inscription");
            echo "\">Inscription</a>
                </li>
            ";
        }
        // line 28
        echo "        </ul>
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
        // line 38
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
        // line 51
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\">Accueil </a>
                </li>
                ";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 53, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 54
            echo "                <li>
                    <a href=\"";
            // line 55
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("default_categorie", ["slug" => twig_get_attribute($this->env, $this->source,             // line 56
$context["categorie"], "slug", [])]), "html", null, true);
            // line 57
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categorie"], "nom", []), "html", null, true);
            echo " </a>
                </li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "                ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 61
            echo "                    <li>
                        <a href=\"";
            // line 62
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("membre_deconnexion");
            echo "\">Deconnexion</a>
                    </li>
                ";
        } else {
            // line 65
            echo "                    <li>
                        <a href=\"";
            // line 66
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("membre_connexion");
            echo "\">Connexion</a>
                    </li>
                    <li>
                        <a href=\"";
            // line 69
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("membre_inscription");
            echo "\">Inscription</a>
                    </li>
                ";
        }
        // line 72
        echo "            </ul>
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
        return array (  182 => 72,  176 => 69,  170 => 66,  167 => 65,  161 => 62,  158 => 61,  155 => 60,  145 => 57,  143 => 56,  142 => 55,  139 => 54,  135 => 53,  130 => 51,  114 => 38,  102 => 28,  96 => 25,  90 => 22,  87 => 21,  81 => 18,  78 => 17,  76 => 16,  73 => 15,  63 => 12,  61 => 11,  60 => 10,  57 => 9,  53 => 8,  48 => 6,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!--menu mobile-->
<nav class=\"menu-res hidden-lg hidden-md \">
    <div class=\"menu-res-inner\">
        <ul>
            <li>
                <a href=\"{{ path('index') }}\">Accueil </a>
            </li>
            {% for categorie in categories  %}
            <li>
                <a href=\"{{ path('default_categorie', {
                    'slug' : categorie.slug
                }) }}\">{{ categorie.nom }} </a>
            </li>
            {% endfor %}

            {% if is_granted('IS_AUTHENTICATED_FULLY') %}
                <li>
                    <a href=\"{{ path('membre_deconnexion') }}\">Deconnexion</a>
                </li>
            {% else %}
                <li>
                    <a href=\"{{ path('membre_connexion') }}\">Connexion</a>
                </li>
                <li>
                    <a href=\"{{ path('membre_inscription') }}\">Inscription</a>
                </li>
            {% endif %}
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
                </li>
                {% for categorie in categories  %}
                <li>
                    <a href=\"{{ path('default_categorie', {
                        'slug' : categorie.slug
                    }) }}\">{{ categorie.nom }} </a>
                </li>
                {% endfor %}
                {% if is_granted('IS_AUTHENTICATED_FULLY') %}
                    <li>
                        <a href=\"{{ path('membre_deconnexion') }}\">Deconnexion</a>
                    </li>
                {% else %}
                    <li>
                        <a href=\"{{ path('membre_connexion') }}\">Connexion</a>
                    </li>
                    <li>
                        <a href=\"{{ path('membre_inscription') }}\">Inscription</a>
                    </li>
                {% endif %}
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
