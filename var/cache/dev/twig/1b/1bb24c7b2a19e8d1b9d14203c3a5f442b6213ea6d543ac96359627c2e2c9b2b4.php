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
class __TwigTemplate_93dac745267744bf466da7dea32a8f7163ee1b26c788c3b1fce71f300f02f26c extends \Twig\Template
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
                <li>
                    <a href=\"#\">
                        <img alt=\"\" src=\"images/product/8.jpg\">
                    </a>
                    <h3><a href=\"#\">Netflix Speeds Jumped 51% This Year</a></h3>
                    <div class=\"meta-post\">
                        <a href=\"#\">
                            Ashley Ford

                        </a>
                        <em></em>
                        <span>
\t\t\t\t\t\t\t24 Aug  2016
\t\t\t\t\t\t</span>
                    </div>
                </li>
                <li>
                    <a href=\"#\">
                        <img alt=\"\" src=\"images/product/9.jpg\">
                    </a>
                    <h3><a href=\"#\">Uber wants to build planes to beat city traffic</a></h3>
                    <div class=\"meta-post\">
                        <a href=\"#\">
                            Karla\tWalters
                        </a>
                        <em></em>
                        <span>
\t\t\t\t\t\t\t04 Sep  2016
\t\t\t\t\t\t</span>
                    </div>
                </li>
                <li>
                    <a href=\"#\">
                        <img alt=\"\" src=\"images/product/10.jpg\">
                    </a>
                    <h3><a href=\"#\">Apple reportedly prototyping their Amazon Echo competitor</a></h3>
                    <div class=\"meta-post\">
                        <a href=\"#\">
                            Super User
                        </a>
                        <em></em>
                        <span>
\t\t\t\t\t\t\t01 Sep  2016
\t\t\t\t\t\t</span>
                    </div>
                </li>
                <li>
                    <a href=\"#\">
                        <img alt=\"\" src=\"images/product/11.jpg\">
                    </a>
                    <h3><a href=\"#\">Watch out: That USB stick in your mailbox might be infected</a></h3>
                    <div class=\"meta-post\">
                        <a href=\"#\">
                            Sue\tBenson
                        </a>
                        <em></em>
                        <span>
\t\t\t\t\t\t\t27 Aug  2016
\t\t\t\t\t\t</span>
                    </div>
                </li>
                <li>
                    <a href=\"#\">
                        <img alt=\"\" src=\"images/product/13.jpg\">
                    </a>
                    <h3><a href=\"#\">Tumblr brings Apple’s ‘Live Photos’ to the web</a></h3>
                    <div class=\"meta-post\">
                        <a href=\"#\">
                            Super User
                        </a>
                        <em></em>
                        <span>
\t\t\t\t\t\t\t15 Sep 2016
\t\t\t\t\t\t</span>
                    </div>
                </li>
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
            <article class=\"news-two-large\">
                <a href=\"#\">
                    <img alt=\"\" src=\"images/product/4.jpg\">
                </a>
                <h3><a href=\"#\">Six big ways MacOS Sierra is going to change your Apple experience</a></h3>
                <div class=\"meta-post\">
                    <a href=\"#\">
                        Sue\tBenson
                    </a>
                    <em></em>
                    <span>
\t\t\t\t\t\t23 Sep 2016
\t\t\t\t\t</span>
                </div>

            </article>
        </div>
    </div>
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "components/_sidebar.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  41 => 1,);
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
                <li>
                    <a href=\"#\">
                        <img alt=\"\" src=\"images/product/8.jpg\">
                    </a>
                    <h3><a href=\"#\">Netflix Speeds Jumped 51% This Year</a></h3>
                    <div class=\"meta-post\">
                        <a href=\"#\">
                            Ashley Ford

                        </a>
                        <em></em>
                        <span>
\t\t\t\t\t\t\t24 Aug  2016
\t\t\t\t\t\t</span>
                    </div>
                </li>
                <li>
                    <a href=\"#\">
                        <img alt=\"\" src=\"images/product/9.jpg\">
                    </a>
                    <h3><a href=\"#\">Uber wants to build planes to beat city traffic</a></h3>
                    <div class=\"meta-post\">
                        <a href=\"#\">
                            Karla\tWalters
                        </a>
                        <em></em>
                        <span>
\t\t\t\t\t\t\t04 Sep  2016
\t\t\t\t\t\t</span>
                    </div>
                </li>
                <li>
                    <a href=\"#\">
                        <img alt=\"\" src=\"images/product/10.jpg\">
                    </a>
                    <h3><a href=\"#\">Apple reportedly prototyping their Amazon Echo competitor</a></h3>
                    <div class=\"meta-post\">
                        <a href=\"#\">
                            Super User
                        </a>
                        <em></em>
                        <span>
\t\t\t\t\t\t\t01 Sep  2016
\t\t\t\t\t\t</span>
                    </div>
                </li>
                <li>
                    <a href=\"#\">
                        <img alt=\"\" src=\"images/product/11.jpg\">
                    </a>
                    <h3><a href=\"#\">Watch out: That USB stick in your mailbox might be infected</a></h3>
                    <div class=\"meta-post\">
                        <a href=\"#\">
                            Sue\tBenson
                        </a>
                        <em></em>
                        <span>
\t\t\t\t\t\t\t27 Aug  2016
\t\t\t\t\t\t</span>
                    </div>
                </li>
                <li>
                    <a href=\"#\">
                        <img alt=\"\" src=\"images/product/13.jpg\">
                    </a>
                    <h3><a href=\"#\">Tumblr brings Apple’s ‘Live Photos’ to the web</a></h3>
                    <div class=\"meta-post\">
                        <a href=\"#\">
                            Super User
                        </a>
                        <em></em>
                        <span>
\t\t\t\t\t\t\t15 Sep 2016
\t\t\t\t\t\t</span>
                    </div>
                </li>
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
            <article class=\"news-two-large\">
                <a href=\"#\">
                    <img alt=\"\" src=\"images/product/4.jpg\">
                </a>
                <h3><a href=\"#\">Six big ways MacOS Sierra is going to change your Apple experience</a></h3>
                <div class=\"meta-post\">
                    <a href=\"#\">
                        Sue\tBenson
                    </a>
                    <em></em>
                    <span>
\t\t\t\t\t\t23 Sep 2016
\t\t\t\t\t</span>
                </div>

            </article>
        </div>
    </div>
</div>", "components/_sidebar.html.twig", "C:\\xampp\\htdocs\\techNews\\templates\\components\\_sidebar.html.twig");
    }
}
