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

/* film/index.html.twig */
class __TwigTemplate_f00d1f1cfb16d680bbefe4e859703e81e273473c97a39e00754d02333b0a40d4 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "film/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "film/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "film/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Film index";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h2 style='text-align:center;margin:3%;margin-top:3%'>Application Symfony 4.4 Deploy with Heroku By SCHIAPPAPIETRE Jérémy MT4</h2>
    <div style='border:2px solid #818181;border-radius:2%;width :40%; height:18em; text-align:center;margin-left:30%;background-color:#F5F5F5'>
        <p style='margin:3%'>Filtrer :</p>
        <p >Nom du film : <a href=\"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("film_title_asc");
        echo "\" class='btn btn-success'>Ordre Croissant</a>   <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("film_title_desc");
        echo "\" class='btn btn-danger'>Ordre Décroissant</a></p><br>
        <p>Genre du film : <a href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("film_category_asc");
        echo "\"class='btn btn-success'>Ordre Croissant</a>   <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("film_category_desc");
        echo "\" class='btn btn-danger'>Ordre Décroissant</a></p><br>
        <p>Nombre de location : <a href=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("film_rental_asc");
        echo "\" class='btn btn-success'>Ordre Croissant</a>   <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("film_rental_desc");
        echo "\" class='btn btn-danger'>Ordre Décroissant</a></p><br>
    </div>

    <table class=\"table\" class=\"table table-striped\" style='margin:0 auto;width:70%;margin-top:3%'>
        <thead>
            <tr>
<<<<<<< HEAD
                <th>Titre</th>
                <th>Prix Location</th>
                <th>Classement</th>
                <th>Catégorie</th>
                <th>Nombre de Location</th>
=======
                <th>Id</th>
                <th>Title</th>
                <th>Rental_rate</th>
                <th>Rental_duration</th>
                <th>Rating</th>
>>>>>>> 27233243cc0fcb6d31493205d6fa6d8a52dce839
            </tr>
        </thead>
        <tbody>
        ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["films"]) || array_key_exists("films", $context) ? $context["films"] : (function () { throw new RuntimeError('Variable "films" does not exist.', 33, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["film"]) {
            // line 34
            echo "            <tr>
                <td>";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["film"], "title", [], "any", false, false, false, 35), "html", null, true);
            echo "</td>
                <td>";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["film"], "rental_rate", [], "any", false, false, false, 36), "html", null, true);
            echo "</td>
                <td>";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["film"], "rating", [], "any", false, false, false, 37), "html", null, true);
            echo "</td>
<<<<<<< HEAD
                <td>";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["film"], "name", [], "any", false, false, false, 39), "html", null, true);
            echo "</td>
                <td>";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["film"], "rental_number", [], "any", false, false, false, 40), "html", null, true);
            echo "</td>
                <td>
            
                </td>
=======
              
>>>>>>> 27233243cc0fcb6d31493205d6fa6d8a52dce839
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 49
            echo "            <tr>
                <td colspan=\"5\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['film'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "        </tbody>
    </table>
    ";
        // line 55
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["films"]) || array_key_exists("films", $context) ? $context["films"] : (function () { throw new RuntimeError('Variable "films" does not exist.', 55, $this->source); })()));
        echo "

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "film/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  184 => 55,  180 => 53,  171 => 49,  157 => 40,  153 => 39,  148 => 37,  144 => 36,  140 => 35,  137 => 34,  132 => 33,  105 => 11,  99 => 10,  93 => 9,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Film index{% endblock %}

{% block body %}
    <h2 style='text-align:center;margin:3%;margin-top:3%'>Application Symfony 4.4 Deploy with Heroku By SCHIAPPAPIETRE Jérémy MT4</h2>
    <div style='border:2px solid #818181;border-radius:2%;width :40%; height:18em; text-align:center;margin-left:30%;background-color:#F5F5F5'>
        <p style='margin:3%'>Filtrer :</p>
        <p >Nom du film : <a href=\"{{ path('film_title_asc') }}\" class='btn btn-success'>Ordre Croissant</a>   <a href=\"{{ path('film_title_desc')}}\" class='btn btn-danger'>Ordre Décroissant</a></p><br>
        <p>Genre du film : <a href=\"{{ path('film_category_asc') }}\"class='btn btn-success'>Ordre Croissant</a>   <a href=\"{{ path('film_category_desc') }}\" class='btn btn-danger'>Ordre Décroissant</a></p><br>
        <p>Nombre de location : <a href=\"{{ path('film_rental_asc') }}\" class='btn btn-success'>Ordre Croissant</a>   <a href=\"{{ path('film_rental_desc') }}\" class='btn btn-danger'>Ordre Décroissant</a></p><br>
    </div>

    <table class=\"table\" class=\"table table-striped\" style='margin:0 auto;width:70%;margin-top:3%'>
        <thead>
            <tr>
<<<<<<< HEAD
                <th>Titre</th>
                <th>Prix Location</th>
                <th>Classement</th>
                <th>Catégorie</th>
                <th>Nombre de Location</th>
=======
                <th>Id</th>
                <th>Title</th>
                <th>Rental_rate</th>
                <th>Rental_duration</th>
                <th>Rating</th>
>>>>>>> 27233243cc0fcb6d31493205d6fa6d8a52dce839
            </tr>
        </thead>
        <tbody>
        {% for film in films %}
            <tr>
                <td>{{ film.title }}</td>
                <td>{{ film.rental_rate }}</td>
                <td>{{ film.rating }}</td>
<<<<<<< HEAD
                <td>{{ film.name }}</td>
                <td>{{ film.rental_number }}</td>
                <td>
            
                </td>
=======
              
>>>>>>> 27233243cc0fcb6d31493205d6fa6d8a52dce839
            </tr>
        {% else %}
            <tr>
                <td colspan=\"5\">no records found</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
    {{knp_pagination_render(films)}}

{% endblock %}
", "film/index.html.twig", "D:\\xamppNEW\\htdocs\\sakilaa\\filmmMT4\\templates\\film\\index.html.twig");
    }
}
