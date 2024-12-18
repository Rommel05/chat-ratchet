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

/* page/tinder.html.twig */
class __TwigTemplate_d4842a8cb4a9f24d7bbbea7642d922b3 extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "page/tinder.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "page/tinder.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "page/tinder.html.twig", 1);
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

        yield "Tinder";
        
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style-tinder.css"), "html", null, true);
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
        yield "    <div id=\"content\" class=\"container-fluid vh-100 d-flex flex-column\">
        <!-- Header con botones -->

        <div class=\"header-buttons d-flex justify-content-between align-items-center py-3\">
            <button class=\"btn btn-outline-danger\" onclick=\"window.location.href='";
        // line 15
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile");
        yield "'\">Profile</button>
            <button class=\"btn btn-outline-danger\" onclick=\"window.location.href='";
        // line 16
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_match");
        yield "'\">Match</button>
            <button class=\"btn btn-outline-danger\" onclick=\"window.location.href='";
        // line 17
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_likes");
        yield "'\">Likes</button>
            <button class=\"btn btn-outline-danger\" onclick=\"window.location.href='";
        // line 18
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        yield "'\">Logout</button>
        </div>

        <!-- Contenido principal -->
        <div class=\"main-layout flex-grow-1 d-flex flex-column justify-content-center align-items-center\">
            <header class=\"text-center mb-4\">
                <h1 class=\"display-4 text-danger\">Tinder</h1>
            </header>

            <div class=\"main-content w-100 d-flex justify-content-center align-items-center\">
                ";
        // line 28
        if ( !(null === (isset($context["usuario"]) || array_key_exists("usuario", $context) ? $context["usuario"] : (function () { throw new RuntimeError('Variable "usuario" does not exist.', 28, $this->source); })()))) {
            // line 29
            yield "                    <div class=\"user-profile d-flex align-items-center\">
                        <!-- Imagen del perfil -->
                        <img src=\"";
            // line 31
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["usuario"]) || array_key_exists("usuario", $context) ? $context["usuario"] : (function () { throw new RuntimeError('Variable "usuario" does not exist.', 31, $this->source); })()), "imagePath", [], "any", false, false, false, 31))), "html", null, true);
            yield "\"
                             class=\"profile-img shadow rounded\"
                             alt=\"profile image\">

                        <!-- Información del perfil -->
                        <div class=\"info-card d-flex flex-column justify-content-center\">
                            <h2 class=\"user-name\">";
            // line 37
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["usuario"]) || array_key_exists("usuario", $context) ? $context["usuario"] : (function () { throw new RuntimeError('Variable "usuario" does not exist.', 37, $this->source); })()), "name", [], "any", false, false, false, 37), "html", null, true);
            yield "</h2>
                            <p class=\"user-gender\">";
            // line 38
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["usuario"]) || array_key_exists("usuario", $context) ? $context["usuario"] : (function () { throw new RuntimeError('Variable "usuario" does not exist.', 38, $this->source); })()), "gender", [], "any", false, false, false, 38), "html", null, true);
            yield "</p>
                            <p class=\"user-description\">";
            // line 39
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["usuario"]) || array_key_exists("usuario", $context) ? $context["usuario"] : (function () { throw new RuntimeError('Variable "usuario" does not exist.', 39, $this->source); })()), "description", [], "any", false, false, false, 39), "html", null, true);
            yield "</p>
                            <p class=\"user-age\"><strong>Age:</strong> ";
            // line 40
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["usuario"]) || array_key_exists("usuario", $context) ? $context["usuario"] : (function () { throw new RuntimeError('Variable "usuario" does not exist.', 40, $this->source); })()), "age", [], "any", false, false, false, 40), "html", null, true);
            yield "</p>

                            <!-- Botones de acción -->
                            <div class=\"action-buttons d-flex justify-content-around mt-3\">
                                <button id=\"button-unlike\" class=\"btn btn-secondary\">Unlike</button>
                                <button id=\"button-like\" class=\"btn btn-primary\">Like</button>
                            </div>
                        </div>
                    </div>
                ";
        } else {
            // line 50
            yield "                    <!-- Mensaje si no hay usuarios -->
                    <div class=\"alert alert-warning text-center\" role=\"alert\">
                        No se han encontrado más usuarios.
                    </div>
                ";
        }
        // line 55
        yield "            </div>
        </div>
    </div>

    ";
        // line 59
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 60
        yield "        <script src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/script.js"), "html", null, true);
        yield "\"></script>
        <script>
            window.onload = () => {
                let userBId = ";
        // line 63
        yield (((isset($context["usuario"]) || array_key_exists("usuario", $context) ? $context["usuario"] : (function () { throw new RuntimeError('Variable "usuario" does not exist.', 63, $this->source); })())) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["usuario"]) || array_key_exists("usuario", $context) ? $context["usuario"] : (function () { throw new RuntimeError('Variable "usuario" does not exist.', 63, $this->source); })()), "id", [], "any", false, false, false, 63), "html", null, true)) : ("null"));
        yield "

                if (userBId) {
                    let like = document.getElementById('button-like');
                    let unlike = document.getElementById('button-unlike');

                    /*like.addEventListener('click', () => {
                        fetch(`/like/\${userBId}`, { method: 'POST' })
                            .then(() => window.location.reload());
                    });

                    unlike.addEventListener(\"click\", () => {
                        fetch(`/unlike/\${userBId}`, { method: 'POST' })
                            .then(() => window.location.reload());
                    });*/

                    like.addEventListener('click', () => {
                        window.location.assign(`/like/\${userBId}`);
                    });

                    unlike.addEventListener(\"click\", () => {
                        window.location.assign(`/unlike/\${userBId}`);
                    })

                }
            }
        </script>
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
        return "page/tinder.html.twig";
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
        return array (  247 => 63,  240 => 60,  217 => 59,  211 => 55,  204 => 50,  191 => 40,  187 => 39,  183 => 38,  179 => 37,  170 => 31,  166 => 29,  164 => 28,  151 => 18,  147 => 17,  143 => 16,  139 => 15,  133 => 11,  120 => 10,  107 => 7,  102 => 6,  89 => 5,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Tinder{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"{{ asset('css/style-tinder.css') }}\">
{% endblock %}

{% block body %}
    <div id=\"content\" class=\"container-fluid vh-100 d-flex flex-column\">
        <!-- Header con botones -->

        <div class=\"header-buttons d-flex justify-content-between align-items-center py-3\">
            <button class=\"btn btn-outline-danger\" onclick=\"window.location.href='{{ path('app_profile') }}'\">Profile</button>
            <button class=\"btn btn-outline-danger\" onclick=\"window.location.href='{{ path('app_match') }}'\">Match</button>
            <button class=\"btn btn-outline-danger\" onclick=\"window.location.href='{{ path('app_likes') }}'\">Likes</button>
            <button class=\"btn btn-outline-danger\" onclick=\"window.location.href='{{ path('app_logout') }}'\">Logout</button>
        </div>

        <!-- Contenido principal -->
        <div class=\"main-layout flex-grow-1 d-flex flex-column justify-content-center align-items-center\">
            <header class=\"text-center mb-4\">
                <h1 class=\"display-4 text-danger\">Tinder</h1>
            </header>

            <div class=\"main-content w-100 d-flex justify-content-center align-items-center\">
                {% if usuario is not null %}
                    <div class=\"user-profile d-flex align-items-center\">
                        <!-- Imagen del perfil -->
                        <img src=\"{{ asset('images/' ~ usuario.imagePath) }}\"
                             class=\"profile-img shadow rounded\"
                             alt=\"profile image\">

                        <!-- Información del perfil -->
                        <div class=\"info-card d-flex flex-column justify-content-center\">
                            <h2 class=\"user-name\">{{ usuario.name }}</h2>
                            <p class=\"user-gender\">{{ usuario.gender }}</p>
                            <p class=\"user-description\">{{ usuario.description }}</p>
                            <p class=\"user-age\"><strong>Age:</strong> {{ usuario.age }}</p>

                            <!-- Botones de acción -->
                            <div class=\"action-buttons d-flex justify-content-around mt-3\">
                                <button id=\"button-unlike\" class=\"btn btn-secondary\">Unlike</button>
                                <button id=\"button-like\" class=\"btn btn-primary\">Like</button>
                            </div>
                        </div>
                    </div>
                {% else %}
                    <!-- Mensaje si no hay usuarios -->
                    <div class=\"alert alert-warning text-center\" role=\"alert\">
                        No se han encontrado más usuarios.
                    </div>
                {% endif %}
            </div>
        </div>
    </div>

    {% block javascripts %}
        <script src=\"{{ asset('js/script.js') }}\"></script>
        <script>
            window.onload = () => {
                let userBId = {{ usuario ? usuario.id : 'null' }}

                if (userBId) {
                    let like = document.getElementById('button-like');
                    let unlike = document.getElementById('button-unlike');

                    /*like.addEventListener('click', () => {
                        fetch(`/like/\${userBId}`, { method: 'POST' })
                            .then(() => window.location.reload());
                    });

                    unlike.addEventListener(\"click\", () => {
                        fetch(`/unlike/\${userBId}`, { method: 'POST' })
                            .then(() => window.location.reload());
                    });*/

                    like.addEventListener('click', () => {
                        window.location.assign(`/like/\${userBId}`);
                    });

                    unlike.addEventListener(\"click\", () => {
                        window.location.assign(`/unlike/\${userBId}`);
                    })

                }
            }
        </script>
    {% endblock %}
{% endblock %}", "page/tinder.html.twig", "/home/alumno/Documentos/symfony/symfony-tinder/app/templates/page/tinder.html.twig");
    }
}
