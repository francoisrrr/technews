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

/* components/_footer.html.twig */
class __TwigTemplate_2233cdc96cab72ce8b5a26a49d85b6aff7fc7732fadd3453f0b6bfb2e26e8165 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/_footer.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/_footer.html.twig"));

        // line 1
        echo "</div>
</div>
<!--footer-->
<footer class=\"footer\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-4  col-sm-4 col-xs-12\">
                <div class=\"about\">
                    <a href=\"#\" class=\"logo\">
                        <img alt=\"\" src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo_footer.png"), "html", null, true);
        echo "\" />
                    </a>
                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form</p>
                </div>
            </div>
            <div class=\"col-md-3 col-md-offset-1 col-sm-4 col-xs-12\">
                <h3>NOS CATEGORIES</h3>
                <ul class=\"list-category\">
                    <li>
                        <a href=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\">Accueil </a>
                    </li>
                    ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 21, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 22
            echo "                        <li>
                            <a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("default_categorie", ["slug" => twig_get_attribute($this->env, $this->source,             // line 24
$context["categorie"], "slug", [])]), "html", null, true);
            // line 25
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categorie"], "nom", []), "html", null, true);
            echo " </a>
                        </li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "                </ul>
            </div>
            <div class=\"col-md-3 col-md-offset-1 col-sm-4 col-xs-12\">
                <h3>RECHERCHE PAR TAGS</h3>

                <div class=\"list-tags\">
                    <a href=\"#\">iPhone 7</a>
                    <a href=\"#\">News</a>
                    <a href=\"#\">Sport</a>
                    <a href=\"#\">Apple</a>
                    <a href=\"#\">Alcatel</a>
                    <a href=\"#\">Pixi 4</a>
                    <a href=\"#\">Elon Musk </a>
                    <a href=\"#\">Smart phone</a>
                    <a href=\"#\">Nexus</a>
                    <a href=\"#\">Canvas</a>

                </div>
            </div>
        </div>
        <!--All right-->
        <div class=\"allright\">
            <div class=\"row\">
                <div class=\"col-sm-6 col-xs-12\">
                    <p> © 2017 <a href=\"#\">TECH NEWS</a>. All rights reserved.</p>
                </div>

                <div class=\"col-sm-6 col-xs-12\">
                    <ul class=\"list-social-icon list-social-icon-footer\">
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
            </div>
        </div>
    </div>
</footer>
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "components/_footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 28,  79 => 25,  77 => 24,  76 => 23,  73 => 22,  69 => 21,  64 => 19,  52 => 10,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("</div>
</div>
<!--footer-->
<footer class=\"footer\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-4  col-sm-4 col-xs-12\">
                <div class=\"about\">
                    <a href=\"#\" class=\"logo\">
                        <img alt=\"\" src=\"{{ asset('images/logo_footer.png') }}\" />
                    </a>
                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form</p>
                </div>
            </div>
            <div class=\"col-md-3 col-md-offset-1 col-sm-4 col-xs-12\">
                <h3>NOS CATEGORIES</h3>
                <ul class=\"list-category\">
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
                </ul>
            </div>
            <div class=\"col-md-3 col-md-offset-1 col-sm-4 col-xs-12\">
                <h3>RECHERCHE PAR TAGS</h3>

                <div class=\"list-tags\">
                    <a href=\"#\">iPhone 7</a>
                    <a href=\"#\">News</a>
                    <a href=\"#\">Sport</a>
                    <a href=\"#\">Apple</a>
                    <a href=\"#\">Alcatel</a>
                    <a href=\"#\">Pixi 4</a>
                    <a href=\"#\">Elon Musk </a>
                    <a href=\"#\">Smart phone</a>
                    <a href=\"#\">Nexus</a>
                    <a href=\"#\">Canvas</a>

                </div>
            </div>
        </div>
        <!--All right-->
        <div class=\"allright\">
            <div class=\"row\">
                <div class=\"col-sm-6 col-xs-12\">
                    <p> © 2017 <a href=\"#\">TECH NEWS</a>. All rights reserved.</p>
                </div>

                <div class=\"col-sm-6 col-xs-12\">
                    <ul class=\"list-social-icon list-social-icon-footer\">
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
            </div>
        </div>
    </div>
</footer>
</div>", "components/_footer.html.twig", "C:\\xampp\\htdocs\\techNews\\templates\\components\\_footer.html.twig");
    }
}
