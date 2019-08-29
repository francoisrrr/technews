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

/* components/_sidebar.html.twig */
class __TwigTemplate_7adb68c93709b0a449d8330ef4a14fc20878529328aada80614dc8b08256e85a extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/_sidebar.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/_sidebar.html.twig"));

        // line 1
        echo "<!--colright-->
<div class=\"col-md-4 col-sm-12\">

    ";
        // line 4
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 5
            echo "        <h3 class=\"text-center\">
            Bonjour ";
            // line 6
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 6, $this->source); })()), "user", []), "prenom", []), "html", null, true);
            echo "
        </h3>

        <ul class=\"list-group\">
            ";
            // line 10
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_AUTEUR")) {
                // line 11
                echo "                <li class=\"list-group-item\">
                    <a href=\"";
                // line 12
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_add");
                echo "\">
                        Rédiger un Article
                    </a>
                </li>
            ";
            }
            // line 17
            echo "        </ul>

    ";
        }
        // line 20
        echo "    <!--tab popular-->
    <ul role=\"tablist\" class=\"tab-popular\">
        <li class=\"active\">
            <a href=\"#tab1\" role=\"tab\" data-toggle=\"tab\">
                DERNI&Egrave;RE PUBLICATIONS
            </a>
        </li>
    </ul>
    <div class=\"tab-content\">
        <div role=\"tabpanel\" class=\"tab-pane active\" id=\"tab1\">
            <ul class=\"list-news-popular\">
                ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 31, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 32
            echo "                <li>
                    <a href=\"#\">
                        <img alt=\"\" src=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/product/" . twig_get_attribute($this->env, $this->source, $context["article"], "featuredImage", []))), "html", null, true);
            echo "\">
                    </a>
                    <h3><a href=\"#\">";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "titre", []), "html", null, true);
            echo "</a></h3>
                    <div class=\"meta-post\">
                        <a href=\"#\">
                            ";
            // line 39
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["article"], "membre", []), "nom", []) . " ") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["article"], "membre", []), "prenom", [])), "html", null, true);
            echo "
                        </a>
                        <em></em>
                        <span>
\t\t\t\t\t\t\t";
            // line 43
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "dateCreation", []), "d/m/Y"), "html", null, true);
            echo "
\t\t\t\t\t\t</span>
                    </div>
                </li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "            </ul>

        </div>
    </div>

    <!-- subcribe box-->
    <div class=\"subcribe-box\">
        <h3>NEWSLETTER</h3>
        <p>Inscrivez-vous pour recevoir nos dernières publications.</p>
        <input type=\"text\" placeholder=\"Votre Email...\" />
        <button class=\"my-btn\">Je m'inscris</button>
    </div>
    <!-- connect us-->
    <div class=\"connect-us\">
        <div class=\"widget-title\">
\t\t\t<span>
\t\t\t\tSUIVEZ-NOUS
\t\t\t</span>
        </div>
        <ul class=\"list-social-icon\">
            <li>
                <a href=\"#\" class=\"facebook\">
                    <i class=\"fa fa-facebook\"></i>
                </a>
            </li>
            <li>
                <a href=\"#\" class=\"twitter\">
                    <i class=\"fa fa-twitter\"></i>
                </a>
            </li>
            <li>
                <a href=\"#\" class=\"google\">
                    <i class=\"fa fa-google\"></i>
                </a>
            </li>
            <li>
                <a href=\"#\" class=\"youtube\">
                    <i class=\"fa fa-youtube-play\"></i>
                </a>
            </li>
            <li>
                <a href=\"#\" class=\"pinterest\">
                    <i class=\"fa fa-pinterest-p\"></i>
                </a>
            </li>
            <li>
                <a href=\"#\" class=\"rss\">
                    <i class=\"fa fa-rss\"></i>
                </a>
            </li>
        </ul>
    </div>

    <!-- special post-->
    <div class=\"connect-us\">
        <div class=\"widget-title\">
\t\t\t<span>
\t\t\t\tEn Avant
\t\t\t</span>
        </div>

        <div class=\"list-special\">
            ";
        // line 110
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["special"]) || array_key_exists("special", $context) ? $context["special"] : (function () { throw new RuntimeError('Variable "special" does not exist.', 110, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 111
            echo "            <article class=\"news-two-large\">
                <a href=\"#\">
                    <img alt=\"\" src=\"";
            // line 113
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/product/" . twig_get_attribute($this->env, $this->source, $context["article"], "featuredImage", []))), "html", null, true);
            echo "\">
                </a>
                <h3><a href=\"#\">";
            // line 115
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "titre", []), "html", null, true);
            echo "</a></h3>
                <div class=\"meta-post\">
                    <a href=\"#\">
                        ";
            // line 118
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["article"], "membre", []), "nom", []) . " ") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["article"], "membre", []), "prenom", [])), "html", null, true);
            echo "
                    </a>
                    <em></em>
                    <span>
\t\t\t\t\t\t";
            // line 122
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "dateCreation", []), "d/m/Y"), "html", null, true);
            echo "
\t\t\t\t\t</span>
                </div>
            </article>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 127
        echo "        </div>
    </div>
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "components/_sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  227 => 127,  216 => 122,  209 => 118,  203 => 115,  198 => 113,  194 => 111,  190 => 110,  126 => 48,  115 => 43,  108 => 39,  102 => 36,  97 => 34,  93 => 32,  89 => 31,  76 => 20,  71 => 17,  63 => 12,  60 => 11,  58 => 10,  51 => 6,  48 => 5,  46 => 4,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!--colright-->
<div class=\"col-md-4 col-sm-12\">

    {% if is_granted('IS_AUTHENTICATED_FULLY') %}
        <h3 class=\"text-center\">
            Bonjour {{ app.user.prenom }}
        </h3>

        <ul class=\"list-group\">
            {% if is_granted('ROLE_AUTEUR') %}
                <li class=\"list-group-item\">
                    <a href=\"{{ path('article_add') }}\">
                        Rédiger un Article
                    </a>
                </li>
            {% endif %}
        </ul>

    {% endif %}
    <!--tab popular-->
    <ul role=\"tablist\" class=\"tab-popular\">
        <li class=\"active\">
            <a href=\"#tab1\" role=\"tab\" data-toggle=\"tab\">
                DERNI&Egrave;RE PUBLICATIONS
            </a>
        </li>
    </ul>
    <div class=\"tab-content\">
        <div role=\"tabpanel\" class=\"tab-pane active\" id=\"tab1\">
            <ul class=\"list-news-popular\">
                {% for article in articles %}
                <li>
                    <a href=\"#\">
                        <img alt=\"\" src=\"{{ asset('images/product/'~article.featuredImage)}}\">
                    </a>
                    <h3><a href=\"#\">{{ article.titre }}</a></h3>
                    <div class=\"meta-post\">
                        <a href=\"#\">
                            {{ article.membre.nom ~' '~ article.membre.prenom }}
                        </a>
                        <em></em>
                        <span>
\t\t\t\t\t\t\t{{ article.dateCreation | date('d/m/Y') }}
\t\t\t\t\t\t</span>
                    </div>
                </li>
                {% endfor %}
            </ul>

        </div>
    </div>

    <!-- subcribe box-->
    <div class=\"subcribe-box\">
        <h3>NEWSLETTER</h3>
        <p>Inscrivez-vous pour recevoir nos dernières publications.</p>
        <input type=\"text\" placeholder=\"Votre Email...\" />
        <button class=\"my-btn\">Je m'inscris</button>
    </div>
    <!-- connect us-->
    <div class=\"connect-us\">
        <div class=\"widget-title\">
\t\t\t<span>
\t\t\t\tSUIVEZ-NOUS
\t\t\t</span>
        </div>
        <ul class=\"list-social-icon\">
            <li>
                <a href=\"#\" class=\"facebook\">
                    <i class=\"fa fa-facebook\"></i>
                </a>
            </li>
            <li>
                <a href=\"#\" class=\"twitter\">
                    <i class=\"fa fa-twitter\"></i>
                </a>
            </li>
            <li>
                <a href=\"#\" class=\"google\">
                    <i class=\"fa fa-google\"></i>
                </a>
            </li>
            <li>
                <a href=\"#\" class=\"youtube\">
                    <i class=\"fa fa-youtube-play\"></i>
                </a>
            </li>
            <li>
                <a href=\"#\" class=\"pinterest\">
                    <i class=\"fa fa-pinterest-p\"></i>
                </a>
            </li>
            <li>
                <a href=\"#\" class=\"rss\">
                    <i class=\"fa fa-rss\"></i>
                </a>
            </li>
        </ul>
    </div>

    <!-- special post-->
    <div class=\"connect-us\">
        <div class=\"widget-title\">
\t\t\t<span>
\t\t\t\tEn Avant
\t\t\t</span>
        </div>

        <div class=\"list-special\">
            {% for article in special %}
            <article class=\"news-two-large\">
                <a href=\"#\">
                    <img alt=\"\" src=\"{{ asset('images/product/'~article.featuredImage)}}\">
                </a>
                <h3><a href=\"#\">{{ article.titre }}</a></h3>
                <div class=\"meta-post\">
                    <a href=\"#\">
                        {{ article.membre.nom ~' '~ article.membre.prenom }}
                    </a>
                    <em></em>
                    <span>
\t\t\t\t\t\t{{ article.dateCreation | date('d/m/Y') }}
\t\t\t\t\t</span>
                </div>
            </article>
            {% endfor %}
        </div>
    </div>
</div>", "components/_sidebar.html.twig", "C:\\xampp\\htdocs\\techNews\\templates\\components\\_sidebar.html.twig");
    }
}
