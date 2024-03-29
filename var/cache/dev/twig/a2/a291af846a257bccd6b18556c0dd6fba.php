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

/* partials/_nav.html.twig */
class __TwigTemplate_2c37e10738b1c9f42214e8f2ca2b5664 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/_nav.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/_nav.html.twig"));

        // line 1
        echo "<nav class=\"navbar navbar-expand-lg fixed-top navbar-scroll\">
\t<div class=\"container\">
\t\t<a href=\"";
        // line 3
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo "\"><img src=\"https://i.ibb.co/Yh04Xs0/H-2-removebg-preview.png\" height=\"150\" alt=\"\" loading=\"lazy\"/></a>
\t\t<button class=\"navbar-toggler ps-0\" type=\"button\" data-mdb-toggle=\"collapse\" data-mdb-target=\"#navbarExample01\" aria-controls=\"navbarExample01\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t<span class=\"navbar-toggler-icon d-flex justify-content-start align-items-center\">
\t\t\t\t<i class=\"fas fa-bars\"></i>
\t\t\t</span>
\t\t</button>
\t\t<div class=\"collapse navbar-collapse\" id=\"navbarExample01\">
\t\t\t<ul class=\"navbar-nav ms-auto mb-2 mb-lg-0\">
\t\t\t\t<li class=\"nav-item active\">
\t\t\t\t\t<a class=\"nav-link mt-1\" aria-current=\"page\" href=\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo "\">Accueil</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item active\">
\t\t\t\t\t<a class=\"nav-link mt-1\" aria-current=\"page\" href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_mention");
        echo "\">Mentions</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item active\">
\t\t\t\t\t<a class=\"nav-link mt-1\" aria-current=\"page\" href=\"";
        // line 18
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_product");
        echo "\">Produits</a>
\t\t\t\t</li>

\t\t\t\t";
        // line 21
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 22
            echo "
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link mt-1\" href=\"";
            // line 24
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_product_index");
            echo "\">Gestion produits</a>
\t\t\t\t\t</li>
\t\t\t\t";
        }
        // line 27
        echo "
\t\t\t\t";
        // line 28
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER"))) {
            // line 29
            echo "\t\t\t\t\t<li class=\"nav-item active\">
\t\t\t\t\t\t<a class=\"btn btn-grad\" aria-current=\"page\" href=\"";
            // line 30
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile");
            echo "\">Profil</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"btn btn-grad\" href=\"";
            // line 33
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Déconnexion</a>
\t\t\t\t\t</li>

\t\t\t\t";
        } else {
            // line 37
            echo "\t\t\t\t\t<li class=\"nav-item marginLeft\">
\t\t\t\t\t\t<a class=\"btn btn-grad\" aria-current=\"page\" href=\"";
            // line 38
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">Connexion</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\" btn btn-grad\" href=\"";
            // line 41
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            echo "\">Inscription</a>
\t\t\t\t\t</li>
\t\t\t\t";
        }
        // line 44
        echo "\t\t\t</ul>
\t\t</div>
\t</div>
</nav>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "partials/_nav.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  125 => 44,  119 => 41,  113 => 38,  110 => 37,  103 => 33,  97 => 30,  94 => 29,  92 => 28,  89 => 27,  83 => 24,  79 => 22,  77 => 21,  71 => 18,  65 => 15,  59 => 12,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav class=\"navbar navbar-expand-lg fixed-top navbar-scroll\">
\t<div class=\"container\">
\t\t<a href=\"{{ path('app_home') }}\"><img src=\"https://i.ibb.co/Yh04Xs0/H-2-removebg-preview.png\" height=\"150\" alt=\"\" loading=\"lazy\"/></a>
\t\t<button class=\"navbar-toggler ps-0\" type=\"button\" data-mdb-toggle=\"collapse\" data-mdb-target=\"#navbarExample01\" aria-controls=\"navbarExample01\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t<span class=\"navbar-toggler-icon d-flex justify-content-start align-items-center\">
\t\t\t\t<i class=\"fas fa-bars\"></i>
\t\t\t</span>
\t\t</button>
\t\t<div class=\"collapse navbar-collapse\" id=\"navbarExample01\">
\t\t\t<ul class=\"navbar-nav ms-auto mb-2 mb-lg-0\">
\t\t\t\t<li class=\"nav-item active\">
\t\t\t\t\t<a class=\"nav-link mt-1\" aria-current=\"page\" href=\"{{ path('app_home') }}\">Accueil</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item active\">
\t\t\t\t\t<a class=\"nav-link mt-1\" aria-current=\"page\" href=\"{{ path('app_mention') }}\">Mentions</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item active\">
\t\t\t\t\t<a class=\"nav-link mt-1\" aria-current=\"page\" href=\"{{ path('app_product') }}\">Produits</a>
\t\t\t\t</li>

\t\t\t\t{% if is_granted('ROLE_ADMIN') %}

\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link mt-1\" href=\"{{ path('app_product_index') }}\">Gestion produits</a>
\t\t\t\t\t</li>
\t\t\t\t{% endif %}

\t\t\t\t{% if is_granted('ROLE_ADMIN') or is_granted('ROLE_USER') %}
\t\t\t\t\t<li class=\"nav-item active\">
\t\t\t\t\t\t<a class=\"btn btn-grad\" aria-current=\"page\" href=\"{{ path('app_profile') }}\">Profil</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"btn btn-grad\" href=\"{{ path('app_logout') }}\">Déconnexion</a>
\t\t\t\t\t</li>

\t\t\t\t{% else %}
\t\t\t\t\t<li class=\"nav-item marginLeft\">
\t\t\t\t\t\t<a class=\"btn btn-grad\" aria-current=\"page\" href=\"{{ path('app_login') }}\">Connexion</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\" btn btn-grad\" href=\"{{ path('app_register') }}\">Inscription</a>
\t\t\t\t\t</li>
\t\t\t\t{% endif %}
\t\t\t</ul>
\t\t</div>
\t</div>
</nav>
", "partials/_nav.html.twig", "C:\\Users\\utilisateur\\Downloads\\hero_hideout-main\\hero_hideout-main\\hero_hideout-main\\templates\\partials\\_nav.html.twig");
    }
}
