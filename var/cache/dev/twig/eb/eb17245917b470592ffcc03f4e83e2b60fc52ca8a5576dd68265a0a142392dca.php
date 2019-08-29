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
class __TwigTemplate_1d6943960eaf75268bde63155f059a0b60174a577e779a03192693cddb06efe1 extends \Twig\Template
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
                ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 14, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 15
            echo "                <li>
                    <a href=\"#\">
                        <img alt=\"\" src=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/product/" . twig_get_attribute($this->env, $this->source, $context["article"], "featuredImage", []))), "html", null, true);
            echo "\">
                    </a>
                    <h3><a href=\"#\">";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "titre", []), "html", null, true);
            echo "</a></h3>
                    <div class=\"meta-post\">
                        <a href=\"#\">
                            ";
            // line 22
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["article"], "membre", []), "nom", []) . " ") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["article"], "membre", []), "prenom", [])), "html", null, true);
            echo "
                        </a>
                        <em></em>
                        <span>
\t\t\t\t\t\t\t";
            // line 26
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
        // line 31
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
        // line 93
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["special"]) || array_key_exists("special", $context) ? $context["special"] : (function () { throw new RuntimeError('Variable "special" does not exist.', 93, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 94
            echo "            <article class=\"news-two-large\">
                <a href=\"#\">
                    <img alt=\"\" src=\"";
            // line 96
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/product/" . twig_get_attribute($this->env, $this->source, $context["article"], "featuredImage", []))), "html", null, true);
            echo "\">
                </a>
                <h3><a href=\"#\">";
            // line 98
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "titre", []), "html", null, true);
            echo "</a></h3>
                <div class=\"meta-post\">
                    <a href=\"#\">
                        ";
            // line 101
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["article"], "membre", []), "nom", []) . " ") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["article"], "membre", []), "prenom", [])), "html", null, true);
            echo "
                    </a>
                    <em></em>
                    <span>
\t\t\t\t\t\t";
            // line 105
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
        // line 110
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
        return array (  194 => 110,  183 => 105,  176 => 101,  170 => 98,  165 => 96,  161 => 94,  157 => 93,  93 => 31,  82 => 26,  75 => 22,  69 => 19,  64 => 17,  60 => 15,  56 => 14,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!--colright-->
<div class=\"col-md-4 col-sm-12\">
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
