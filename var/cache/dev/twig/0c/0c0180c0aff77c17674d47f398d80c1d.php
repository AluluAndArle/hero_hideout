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

/* partials/_footer.html.twig */
class __TwigTemplate_538c58d6414d90797f5c7e6bb9dc6830 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/_footer.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/_footer.html.twig"));

        // line 1
        echo "  <footer class=\"text-center text-white pb-4\">
    <div class=\"container\">
      <section>
        <div class=\"row text-center d-flex justify-content-center pt-5\">
          <div class=\"col-md-2\">
            <h6 class=\"text-uppercase font-weight-bold\">
              <a href=\"";
        // line 7
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo "\" class=\"text-white\">Accueil</a>
            </h6>
          </div>
          <div class=\"col-md-2\">
            <h6 class=\"text-uppercase font-weight-bold\">
              <a href=\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_product");
        echo "\" class=\"text-white\">Produits</a>
            </h6>
          </div>
          <div class=\"col-md-2\">
            <h6 class=\"text-uppercase font-weight-bold\">
              <a href=\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_mention");
        echo "\" class=\"text-white\">Mention</a>
            </h6>
          </div>

        </div>
      </section>

      <hr>

      <section>
        <div class=\"row d-flex justify-content-center\">
          <div class=\"col-lg-8\">
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt
              distinctio earum repellat quaerat voluptatibus placeat nam,
              commodi optio pariatur est quia magnam eum harum corrupti
              dicta, aliquam sequi voluptate quas.
            </p>
          </div>
        </div>
      </section>

      <section class=\"text-center mb-5\">
        <a href=\"https://github.com/AluluAndArle/hero_hideout\" class=\"text-white me-4\">
          <i class=\"fab fa-github\"></i>
        </a>
      </section>
    </div>

  </footer>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "partials/_footer.html.twig";
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
        return array (  67 => 17,  59 => 12,  51 => 7,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("  <footer class=\"text-center text-white pb-4\">
    <div class=\"container\">
      <section>
        <div class=\"row text-center d-flex justify-content-center pt-5\">
          <div class=\"col-md-2\">
            <h6 class=\"text-uppercase font-weight-bold\">
              <a href=\"{{path('app_home')}}\" class=\"text-white\">Accueil</a>
            </h6>
          </div>
          <div class=\"col-md-2\">
            <h6 class=\"text-uppercase font-weight-bold\">
              <a href=\"{{path('app_product')}}\" class=\"text-white\">Produits</a>
            </h6>
          </div>
          <div class=\"col-md-2\">
            <h6 class=\"text-uppercase font-weight-bold\">
              <a href=\"{{path('app_mention')}}\" class=\"text-white\">Mention</a>
            </h6>
          </div>

        </div>
      </section>

      <hr>

      <section>
        <div class=\"row d-flex justify-content-center\">
          <div class=\"col-lg-8\">
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt
              distinctio earum repellat quaerat voluptatibus placeat nam,
              commodi optio pariatur est quia magnam eum harum corrupti
              dicta, aliquam sequi voluptate quas.
            </p>
          </div>
        </div>
      </section>

      <section class=\"text-center mb-5\">
        <a href=\"https://github.com/AluluAndArle/hero_hideout\" class=\"text-white me-4\">
          <i class=\"fab fa-github\"></i>
        </a>
      </section>
    </div>

  </footer>", "partials/_footer.html.twig", "C:\\Users\\utilisateur\\Downloads\\hero_hideout-main\\hero_hideout-main\\hero_hideout-main\\templates\\partials\\_footer.html.twig");
    }
}
