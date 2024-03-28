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
  <div class=\"container\">
   <a href=\"";
        // line 3
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo "\"><img src=\"https://i.ibb.co/Yh04Xs0/H-2-removebg-preview.png\" height=\"150\" alt=\"\"
      loading=\"lazy\" /></a>
    <button class=\"navbar-toggler ps-0\" type=\"button\" data-mdb-toggle=\"collapse\" data-mdb-target=\"#navbarExample01\"
      aria-controls=\"navbarExample01\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
      <span class=\"navbar-toggler-icon d-flex justify-content-start align-items-center\">
        <i class=\"fas fa-bars\"></i>
      </span>
    </button>
    <div class=\"collapse navbar-collapse\" id=\"navbarExample01\">
      
      <ul class=\"navbar-nav ms-auto mb-2 mb-lg-0\">
        <li class=\"nav-item active\">
          <a class=\"nav-link mt-1\" aria-current=\"page\" href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo "\">Accueil</a>
        </li>
                <li class=\"nav-item active\">
          <a class=\"nav-link mt-1\" aria-current=\"page\" href=\"";
        // line 18
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_product");
        echo "\">Produits</a>
        </li>
       



            ";
        // line 24
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 25
            echo "                <li class=\"nav-item\">
                     <a class=\"nav-link mt-1\" href=\"";
            // line 26
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_product_index");
            echo "\">Gestion produits</a>
                </li>
                 ";
            // line 28
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
                // line 29
                echo "        <li class=\"nav-item\">
            <a class=\"btn btn-grad\" href=\"";
                // line 30
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
                echo "\">Logout</a>
        </li>
        ";
            }
            // line 33
            echo "        
        ";
        } else {
            // line 35
            echo "        <li class=\"nav-item marginLeft\">
          <a class=\"btn btn-grad\" aria-current=\"page\" href=\"";
            // line 36
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">Login</a>
        </li>
        <li class=\"nav-item\">
            <a class=\" btn btn-grad\" href=\"";
            // line 39
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            echo "\">Register</a>
        </li> 
       

        ";
        }
        // line 44
        echo "

      </ul>

    </div>
  </div>
</nav>";
        
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
        return array (  119 => 44,  111 => 39,  105 => 36,  102 => 35,  98 => 33,  92 => 30,  89 => 29,  87 => 28,  82 => 26,  79 => 25,  77 => 24,  68 => 18,  62 => 15,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav class=\"navbar navbar-expand-lg fixed-top navbar-scroll\">
  <div class=\"container\">
   <a href=\"{{path('app_home')}}\"><img src=\"https://i.ibb.co/Yh04Xs0/H-2-removebg-preview.png\" height=\"150\" alt=\"\"
      loading=\"lazy\" /></a>
    <button class=\"navbar-toggler ps-0\" type=\"button\" data-mdb-toggle=\"collapse\" data-mdb-target=\"#navbarExample01\"
      aria-controls=\"navbarExample01\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
      <span class=\"navbar-toggler-icon d-flex justify-content-start align-items-center\">
        <i class=\"fas fa-bars\"></i>
      </span>
    </button>
    <div class=\"collapse navbar-collapse\" id=\"navbarExample01\">
      
      <ul class=\"navbar-nav ms-auto mb-2 mb-lg-0\">
        <li class=\"nav-item active\">
          <a class=\"nav-link mt-1\" aria-current=\"page\" href=\"{{path('app_home')}}\">Accueil</a>
        </li>
                <li class=\"nav-item active\">
          <a class=\"nav-link mt-1\" aria-current=\"page\" href=\"{{path('app_product')}}\">Produits</a>
        </li>
       



            {% if is_granted('ROLE_ADMIN') %}
                <li class=\"nav-item\">
                     <a class=\"nav-link mt-1\" href=\"{{path('app_product_index')}}\">Gestion produits</a>
                </li>
                 {% if is_granted('ROLE_USER') %}
        <li class=\"nav-item\">
            <a class=\"btn btn-grad\" href=\"{{path('app_logout')}}\">Logout</a>
        </li>
        {% endif %}
        
        {% else %}
        <li class=\"nav-item marginLeft\">
          <a class=\"btn btn-grad\" aria-current=\"page\" href=\"{{path('app_login')}}\">Login</a>
        </li>
        <li class=\"nav-item\">
            <a class=\" btn btn-grad\" href=\"{{path('app_register')}}\">Register</a>
        </li> 
       

        {% endif %}


      </ul>

    </div>
  </div>
</nav>", "partials/_nav.html.twig", "C:\\Users\\utilisateur\\Downloads\\hero_hideout\\templates\\partials\\_nav.html.twig");
    }
}
