<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* profile/profile.html.twig */
class __TwigTemplate_4d5a1419f4e4aad9952eef1efe5bca6c extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile/profile.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile/profile.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "profile/profile.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Profile";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        yield "    ";
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
    <link rel=\"stylesheet\" href=\"";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style-profile.css"), "html", null, true);
        yield "\">
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 10
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 11
        yield "    <div class=\"container-fluid vh-100 d-flex flex-column\">
        <!-- Header -->
        <div class=\"d-flex justify-content-between align-items-center py-3\">
            <h1 class=\"text-danger\">Profile</h1>
            <a href=\"";
        // line 15
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tinder");
        yield "\" class=\"text-decoration-none fw-bold tinder-link\">Tinder</a>
        </div>

        <!-- Contenido principal -->
        <div class=\"main-layout flex-grow-1 d-flex flex-column justify-content-center align-items-center\">
            ";
        // line 20
        if ( !(null === (isset($context["usuario"]) || array_key_exists("usuario", $context) ? $context["usuario"] : (function () { throw new RuntimeError('Variable "usuario" does not exist.', 20, $this->source); })()))) {
            // line 21
            yield "                <div class=\"profile-content card shadow p-4 d-flex flex-md-row flex-column align-items-center gap-4\">
                    <!-- Imagen del perfil -->
                    <img src=\"";
            // line 23
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["usuario"]) || array_key_exists("usuario", $context) ? $context["usuario"] : (function () { throw new RuntimeError('Variable "usuario" does not exist.', 23, $this->source); })()), "imagePath", [], "any", false, false, false, 23))), "html", null, true);
            yield "\"
                         class=\"rounded shadow profile-img\"
                         alt=\"profile image\"
                         data-bs-toggle=\"modal\" data-bs-target=\"#imageModal\">

                    <!-- Información del perfil -->
                    <div class=\"profile-information\">
                        <h2 class=\"text-primary\">";
            // line 30
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["usuario"]) || array_key_exists("usuario", $context) ? $context["usuario"] : (function () { throw new RuntimeError('Variable "usuario" does not exist.', 30, $this->source); })()), "name", [], "any", false, false, false, 30), "html", null, true);
            yield "</h2>
                        <p class=\"text-muted\"><strong>Gender:</strong> ";
            // line 31
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["usuario"]) || array_key_exists("usuario", $context) ? $context["usuario"] : (function () { throw new RuntimeError('Variable "usuario" does not exist.', 31, $this->source); })()), "gender", [], "any", false, false, false, 31), "html", null, true);
            yield "</p>
                        <p class=\"text-muted\"><strong>Age:</strong> ";
            // line 32
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["usuario"]) || array_key_exists("usuario", $context) ? $context["usuario"] : (function () { throw new RuntimeError('Variable "usuario" does not exist.', 32, $this->source); })()), "age", [], "any", false, false, false, 32), "html", null, true);
            yield "</p>
                        <p class=\"text-muted\">";
            // line 33
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["usuario"]) || array_key_exists("usuario", $context) ? $context["usuario"] : (function () { throw new RuntimeError('Variable "usuario" does not exist.', 33, $this->source); })()), "description", [], "any", false, false, false, 33), "html", null, true);
            yield "</p>
                    </div>
                </div>
            ";
        } else {
            // line 37
            yield "                <div class=\"alert alert-warning text-center mt-4\" role=\"alert\">
                    No se ha encontrado el usuario.
                </div>
            ";
        }
        // line 41
        yield "
            <!-- Acciones del perfil -->
            <div class=\"profile-actions mt-4 d-flex gap-3\">
                <button id=\"edit\" class=\"btn btn-primary\" onclick=\"window.location.href='";
        // line 44
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile_edit");
        yield "'\">
                    Edit
                </button>
                <form method=\"post\" action=\"";
        // line 47
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile_remove");
        yield "\" onsubmit=\"return confirm('¿Estás seguro de que deseas eliminar tu cuenta?');\">
                    <button type=\"submit\" id=\"remove\" class=\"btn btn-danger\">Remove</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal de la imagen -->
    <div class=\"modal fade\" id=\"imageModal\" tabindex=\"-1\" aria-labelledby=\"imageModalLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-dialog-centered\">
            <div class=\"modal-content bg-transparent border-0\">
                <div class=\"modal-body d-flex justify-content-center\">
                    <img src=\"";
        // line 59
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["usuario"]) || array_key_exists("usuario", $context) ? $context["usuario"] : (function () { throw new RuntimeError('Variable "usuario" does not exist.', 59, $this->source); })()), "imagePath", [], "any", false, false, false, 59))), "html", null, true);
        yield "\" class=\"img-fluid rounded shadow-lg\" alt=\"profile image\">
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "profile/profile.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  213 => 59,  198 => 47,  192 => 44,  187 => 41,  181 => 37,  174 => 33,  170 => 32,  166 => 31,  162 => 30,  152 => 23,  148 => 21,  146 => 20,  138 => 15,  132 => 11,  119 => 10,  106 => 7,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Profile{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"{{ asset('css/style-profile.css') }}\">
{% endblock %}

{% block body %}
    <div class=\"container-fluid vh-100 d-flex flex-column\">
        <!-- Header -->
        <div class=\"d-flex justify-content-between align-items-center py-3\">
            <h1 class=\"text-danger\">Profile</h1>
            <a href=\"{{ path('app_tinder') }}\" class=\"text-decoration-none fw-bold tinder-link\">Tinder</a>
        </div>

        <!-- Contenido principal -->
        <div class=\"main-layout flex-grow-1 d-flex flex-column justify-content-center align-items-center\">
            {% if usuario is not null %}
                <div class=\"profile-content card shadow p-4 d-flex flex-md-row flex-column align-items-center gap-4\">
                    <!-- Imagen del perfil -->
                    <img src=\"{{ asset('images/' ~ usuario.imagePath) }}\"
                         class=\"rounded shadow profile-img\"
                         alt=\"profile image\"
                         data-bs-toggle=\"modal\" data-bs-target=\"#imageModal\">

                    <!-- Información del perfil -->
                    <div class=\"profile-information\">
                        <h2 class=\"text-primary\">{{ usuario.name }}</h2>
                        <p class=\"text-muted\"><strong>Gender:</strong> {{ usuario.gender }}</p>
                        <p class=\"text-muted\"><strong>Age:</strong> {{ usuario.age }}</p>
                        <p class=\"text-muted\">{{ usuario.description }}</p>
                    </div>
                </div>
            {% else %}
                <div class=\"alert alert-warning text-center mt-4\" role=\"alert\">
                    No se ha encontrado el usuario.
                </div>
            {% endif %}

            <!-- Acciones del perfil -->
            <div class=\"profile-actions mt-4 d-flex gap-3\">
                <button id=\"edit\" class=\"btn btn-primary\" onclick=\"window.location.href='{{ path('app_profile_edit') }}'\">
                    Edit
                </button>
                <form method=\"post\" action=\"{{ path('app_profile_remove') }}\" onsubmit=\"return confirm('¿Estás seguro de que deseas eliminar tu cuenta?');\">
                    <button type=\"submit\" id=\"remove\" class=\"btn btn-danger\">Remove</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal de la imagen -->
    <div class=\"modal fade\" id=\"imageModal\" tabindex=\"-1\" aria-labelledby=\"imageModalLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-dialog-centered\">
            <div class=\"modal-content bg-transparent border-0\">
                <div class=\"modal-body d-flex justify-content-center\">
                    <img src=\"{{ asset('images/' ~ usuario.imagePath) }}\" class=\"img-fluid rounded shadow-lg\" alt=\"profile image\">
                </div>
            </div>
        </div>
    </div>
{% endblock %}", "profile/profile.html.twig", "/home/alumno/Documentos/symfony/symfony-tinder/app/templates/profile/profile.html.twig");
    }
}
