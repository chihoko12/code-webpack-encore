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

/* article_admin/_form.html.twig */
class __TwigTemplate_563fbf6f9c8e45ec0a3a4b6a7cdeb62781f6a2f1cf83d43400c89941e3ee1afe extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "article_admin/_form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "article_admin/_form.html.twig"));

        // line 1
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["articleForm"]) || array_key_exists("articleForm", $context) ? $context["articleForm"] : (function () { throw new RuntimeError('Variable "articleForm" does not exist.', 1, $this->source); })()), 'form_start');
        echo "
    ";
        // line 2
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["articleForm"]) || array_key_exists("articleForm", $context) ? $context["articleForm"] : (function () { throw new RuntimeError('Variable "articleForm" does not exist.', 2, $this->source); })()), "title", [], "any", false, false, false, 2), 'row', ["label" => "Article title"]);
        // line 4
        echo "

    <div class=\"row\">
        <div class=\"col-sm-9\">
            ";
        // line 8
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["articleForm"]) || array_key_exists("articleForm", $context) ? $context["articleForm"] : (function () { throw new RuntimeError('Variable "articleForm" does not exist.', 8, $this->source); })()), "imageFile", [], "any", false, false, false, 8), 'row', ["attr" => ["placeholder" => "Select an article image"]]);
        // line 12
        echo "
        </div>
        <div class=\"col-sm-3\">
            ";
        // line 15
        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["articleForm"] ?? null), "vars", [], "any", false, true, false, 15), "data", [], "any", false, true, false, 15), "imageFilename", [], "any", true, true, false, 15)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["articleForm"] ?? null), "vars", [], "any", false, true, false, 15), "data", [], "any", false, true, false, 15), "imageFilename", [], "any", false, false, false, 15))) : (""))) {
            // line 16
            echo "                <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->getUploadedAssetPath(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["articleForm"]) || array_key_exists("articleForm", $context) ? $context["articleForm"] : (function () { throw new RuntimeError('Variable "articleForm" does not exist.', 16, $this->source); })()), "vars", [], "any", false, false, false, 16), "data", [], "any", false, false, false, 16), "imagePath", [], "any", false, false, false, 16)), "html", null, true);
            echo "\" target=\"_blank\">
                    <img src=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->extensions['Liip\ImagineBundle\Templating\FilterExtension']->filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["articleForm"]) || array_key_exists("articleForm", $context) ? $context["articleForm"] : (function () { throw new RuntimeError('Variable "articleForm" does not exist.', 17, $this->source); })()), "vars", [], "any", false, false, false, 17), "data", [], "any", false, false, false, 17), "imagePath", [], "any", false, false, false, 17), "squared_thumbnail_small"), "html", null, true);
            echo "\" height=\"100\">
                </a>
            ";
        }
        // line 20
        echo "        </div>
    </div>

    ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["articleForm"]) || array_key_exists("articleForm", $context) ? $context["articleForm"] : (function () { throw new RuntimeError('Variable "articleForm" does not exist.', 23, $this->source); })()), "author", [], "any", false, false, false, 23), 'row');
        echo "
    ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["articleForm"]) || array_key_exists("articleForm", $context) ? $context["articleForm"] : (function () { throw new RuntimeError('Variable "articleForm" does not exist.', 24, $this->source); })()), "location", [], "any", false, false, false, 24), 'row', ["attr" => ["data-specific-location-url" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_article_location_select"), "class" => "js-article-form-location"]]);
        // line 29
        echo "
    <div class=\"js-specific-location-target\">
        ";
        // line 31
        if (twig_get_attribute($this->env, $this->source, ($context["articleForm"] ?? null), "specificLocationName", [], "any", true, true, false, 31)) {
            // line 32
            echo "            ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["articleForm"]) || array_key_exists("articleForm", $context) ? $context["articleForm"] : (function () { throw new RuntimeError('Variable "articleForm" does not exist.', 32, $this->source); })()), "specificLocationName", [], "any", false, false, false, 32), 'row');
            echo "
        ";
        }
        // line 34
        echo "    </div>
    ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["articleForm"]) || array_key_exists("articleForm", $context) ? $context["articleForm"] : (function () { throw new RuntimeError('Variable "articleForm" does not exist.', 35, $this->source); })()), "content", [], "any", false, false, false, 35), 'row');
        echo "
    ";
        // line 36
        if (twig_get_attribute($this->env, $this->source, ($context["articleForm"] ?? null), "publishedAt", [], "any", true, true, false, 36)) {
            // line 37
            echo "        ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["articleForm"]) || array_key_exists("articleForm", $context) ? $context["articleForm"] : (function () { throw new RuntimeError('Variable "articleForm" does not exist.', 37, $this->source); })()), "publishedAt", [], "any", false, false, false, 37), 'row');
            echo "
    ";
        }
        // line 39
        echo "
    <button type=\"submit\" class=\"btn btn-primary\">";
        // line 40
        echo twig_escape_filter($this->env, (isset($context["button_text"]) || array_key_exists("button_text", $context) ? $context["button_text"] : (function () { throw new RuntimeError('Variable "button_text" does not exist.', 40, $this->source); })()), "html", null, true);
        echo "</button>
";
        // line 41
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["articleForm"]) || array_key_exists("articleForm", $context) ? $context["articleForm"] : (function () { throw new RuntimeError('Variable "articleForm" does not exist.', 41, $this->source); })()), 'form_end');
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "article_admin/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 41,  116 => 40,  113 => 39,  107 => 37,  105 => 36,  101 => 35,  98 => 34,  92 => 32,  90 => 31,  86 => 29,  84 => 24,  80 => 23,  75 => 20,  69 => 17,  64 => 16,  62 => 15,  57 => 12,  55 => 8,  49 => 4,  47 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ form_start(articleForm) }}
    {{ form_row(articleForm.title, {
        label: 'Article title'
    }) }}

    <div class=\"row\">
        <div class=\"col-sm-9\">
            {{ form_row(articleForm.imageFile, {
                attr: {
                    'placeholder': 'Select an article image'
                }
            }) }}
        </div>
        <div class=\"col-sm-3\">
            {% if articleForm.vars.data.imageFilename|default %}
                <a href=\"{{ uploaded_asset(articleForm.vars.data.imagePath) }}\" target=\"_blank\">
                    <img src=\"{{ articleForm.vars.data.imagePath|imagine_filter('squared_thumbnail_small') }}\" height=\"100\">
                </a>
            {% endif %}
        </div>
    </div>

    {{ form_row(articleForm.author) }}
    {{ form_row(articleForm.location, {
        attr: {
            'data-specific-location-url': path('admin_article_location_select'),
            'class': 'js-article-form-location'
        }
    }) }}
    <div class=\"js-specific-location-target\">
        {%  if articleForm.specificLocationName is defined %}
            {{ form_row(articleForm.specificLocationName) }}
        {% endif %}
    </div>
    {{ form_row(articleForm.content) }}
    {% if articleForm.publishedAt is defined %}
        {{ form_row(articleForm.publishedAt) }}
    {% endif %}

    <button type=\"submit\" class=\"btn btn-primary\">{{ button_text }}</button>
{{ form_end(articleForm) }}
", "article_admin/_form.html.twig", "/app/templates/article_admin/_form.html.twig");
    }
}
