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

/* article/homepage.html.twig */
class __TwigTemplate_c7f7415dfba55f009bf3f1702ad2d2d26accdefe2e79bec007729b6cb2b394e7 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "article/homepage.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "article/homepage.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "article/homepage.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"container\">
        <div class=\"row\">
            <!-- Article List -->

            <div class=\"col-sm-12 col-md-8\">

                <!-- H1 Article -->
                <a class=\"main-article-link\" href=\"#\">
                    <div class=\"main-article mb-5 pb-3\">
                        <img src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/meteor-shower.jpg"), "html", null, true);
        echo "\" alt=\"meteor shower\">
                        <h1 class=\"text-center mt-2\">Ursid Meteor Shower: <br>Healthier than a regular shower?</h1>
                    </div>
                </a>

                <!-- Supporting Articles -->
                ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 19, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 20
            echo "                <div class=\"article-container my-1\">
                    <a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_show", ["slug" => twig_get_attribute($this->env, $this->source, $context["article"], "slug", [], "any", false, false, false, 21)]), "html", null, true);
            echo "\">
                        <img class=\"article-img\" src=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->extensions['Liip\ImagineBundle\Templating\FilterExtension']->filter(twig_get_attribute($this->env, $this->source, $context["article"], "imagePath", [], "any", false, false, false, 22), "squared_thumbnail_small"), "html", null, true);
            echo "\">
                        <div class=\"article-title d-inline-block pl-3 align-middle\">
                            <span>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "title", [], "any", false, false, false, 24), "html", null, true);
            echo "</span>
                            <small>(";
            // line 25
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "nonDeletedComments", [], "any", false, false, false, 25)), "html", null, true);
            echo " comments)</small>
                            <br>
                            ";
            // line 27
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["article"], "tags", [], "any", false, false, false, 27));
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 28
                echo "                                <small>
                                    <span class=\"badge badge-light\">";
                // line 29
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tag"], "name", [], "any", false, false, false, 29), "html", null, true);
                echo "</span>
                                </small>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "                            <br>
                            <span class=\"align-left article-details\"><img class=\"article-author-img rounded-circle\" src=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/alien-profile.png"), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "author", [], "any", false, false, false, 33), "html", null, true);
            echo " </span>
                            <span class=\"pl-5 article-details float-right\"> ";
            // line 34
            echo ((twig_get_attribute($this->env, $this->source, $context["article"], "publishedAt", [], "any", false, false, false, 34)) ? ($this->extensions['Knp\Bundle\TimeBundle\Twig\Extension\TimeExtension']->diff(twig_get_attribute($this->env, $this->source, $context["article"], "publishedAt", [], "any", false, false, false, 34))) : (""));
            echo "</span>
                        </div>
                    </a>
                </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "            </div>

            <!-- Right bar ad space -->

            <div class=\"col-sm-12 col-md-4 text-center\">
                <div class=\"ad-space mx-auto mt-1 pb-2 pt-2\">
                    <img class=\"advertisement-img\" src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/space-ice.png"), "html", null, true);
        echo "\">
                    <p><span class=\"advertisement-text\">New:</span> Space Ice Cream!</p>
                    <button class=\"btn btn-info\">Buy Now!</button>
                </div>

                <div class=\"quote-space pb-2 pt-2 px-5\">
                    <h3 class=\"text-center pb-3\">Trending Quotes</h3>
                    <p><i class=\"fa fa-comment\"></i> \"Our two greatest problems are gravity and paperwork. We can lick gravity, but sometimes the paperwork is overwhelming.\" <br>— <a href=\"https://en.wikipedia.org/wiki/Wernher_von_Braun\">Wernher von Braun, Rocket Engineer</a></p>

                    <p class=\"pt-4\"><i class=\"fa fa-comment\"></i> \"Let's face it, space is a risky business. I always considered every launch a barely controlled explosion.\" <br>— <a href=\"https://en.wikipedia.org/wiki/Aaron_Cohen_(Deputy_NASA_administrator)\">Aaron Cohen, NASA Administrator</a></p>

                    <p class=\"pt-4\"><i class=\"fa fa-comment\"></i> \"If offered a seat on a rocket ship, don't ask what seat. Just get on.\"<br>— <a href=\"https://en.wikipedia.org/wiki/Christa_McAuliffe\">Christa McAuliffe, Challenger Astronaut</a>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "article/homepage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 45,  149 => 39,  138 => 34,  132 => 33,  129 => 32,  120 => 29,  117 => 28,  113 => 27,  108 => 25,  104 => 24,  99 => 22,  95 => 21,  92 => 20,  88 => 19,  79 => 13,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
    <div class=\"container\">
        <div class=\"row\">
            <!-- Article List -->

            <div class=\"col-sm-12 col-md-8\">

                <!-- H1 Article -->
                <a class=\"main-article-link\" href=\"#\">
                    <div class=\"main-article mb-5 pb-3\">
                        <img src=\"{{ asset('build/images/meteor-shower.jpg') }}\" alt=\"meteor shower\">
                        <h1 class=\"text-center mt-2\">Ursid Meteor Shower: <br>Healthier than a regular shower?</h1>
                    </div>
                </a>

                <!-- Supporting Articles -->
                {% for article in articles %}
                <div class=\"article-container my-1\">
                    <a href=\"{{ path('article_show', {slug: article.slug}) }}\">
                        <img class=\"article-img\" src=\"{{ article.imagePath|imagine_filter('squared_thumbnail_small') }}\">
                        <div class=\"article-title d-inline-block pl-3 align-middle\">
                            <span>{{ article.title }}</span>
                            <small>({{ article.nonDeletedComments|length }} comments)</small>
                            <br>
                            {% for tag in article.tags %}
                                <small>
                                    <span class=\"badge badge-light\">{{ tag.name }}</span>
                                </small>
                            {% endfor %}
                            <br>
                            <span class=\"align-left article-details\"><img class=\"article-author-img rounded-circle\" src=\"{{ asset('build/images/alien-profile.png') }}\"> {{ article.author }} </span>
                            <span class=\"pl-5 article-details float-right\"> {{ article.publishedAt ? article.publishedAt|ago }}</span>
                        </div>
                    </a>
                </div>
                {% endfor %}
            </div>

            <!-- Right bar ad space -->

            <div class=\"col-sm-12 col-md-4 text-center\">
                <div class=\"ad-space mx-auto mt-1 pb-2 pt-2\">
                    <img class=\"advertisement-img\" src=\"{{ asset('build/images/space-ice.png') }}\">
                    <p><span class=\"advertisement-text\">New:</span> Space Ice Cream!</p>
                    <button class=\"btn btn-info\">Buy Now!</button>
                </div>

                <div class=\"quote-space pb-2 pt-2 px-5\">
                    <h3 class=\"text-center pb-3\">Trending Quotes</h3>
                    <p><i class=\"fa fa-comment\"></i> \"Our two greatest problems are gravity and paperwork. We can lick gravity, but sometimes the paperwork is overwhelming.\" <br>— <a href=\"https://en.wikipedia.org/wiki/Wernher_von_Braun\">Wernher von Braun, Rocket Engineer</a></p>

                    <p class=\"pt-4\"><i class=\"fa fa-comment\"></i> \"Let's face it, space is a risky business. I always considered every launch a barely controlled explosion.\" <br>— <a href=\"https://en.wikipedia.org/wiki/Aaron_Cohen_(Deputy_NASA_administrator)\">Aaron Cohen, NASA Administrator</a></p>

                    <p class=\"pt-4\"><i class=\"fa fa-comment\"></i> \"If offered a seat on a rocket ship, don't ask what seat. Just get on.\"<br>— <a href=\"https://en.wikipedia.org/wiki/Christa_McAuliffe\">Christa McAuliffe, Challenger Astronaut</a>
                </div>
            </div>
        </div>
    </div>
{% endblock %}
", "article/homepage.html.twig", "/app/templates/article/homepage.html.twig");
    }
}
