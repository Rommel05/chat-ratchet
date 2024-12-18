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
class __TwigTemplate_0bb529e8157e350feb627949ad7d9dc4 extends Template
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
            'stylesheet' => [$this, 'block_stylesheet'],
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

    // line 4
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheet(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 5
        yield "    <link rel=\"stylesheet\" href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style-tinder.css"), "html", null, true);
        yield "\">
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 8
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

        // line 9
        yield "    <header class=\"header\">
        <h1>Tinder</h1>
    </header>

    <nav class=\"navbar\">
        <ul class=\"navbar-list\">
            <li><a href=\"#\">Perfil</a></li>
            <li><a href=\"#\">Logout</a></li>
            <li><a href=\"";
        // line 17
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_likes");
        yield "\">Likes</a></li>
            <li><a href=\"";
        // line 18
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_match");
        yield "\">Matches</a></li>
            <li><a href=\"";
        // line 19
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_users");
        yield "\">Message</a></li>
        </ul>
    </nav>

    <div class=\"main-layout\">
        <div class=\"main-content\">
            ";
        // line 25
        if ( !(null === (isset($context["usuario"]) || array_key_exists("usuario", $context) ? $context["usuario"] : (function () { throw new RuntimeError('Variable "usuario" does not exist.', 25, $this->source); })()))) {
            // line 26
            yield "                <div class=\"profile-content\">
                    <img src=\"";
            // line 27
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["usuario"]) || array_key_exists("usuario", $context) ? $context["usuario"] : (function () { throw new RuntimeError('Variable "usuario" does not exist.', 27, $this->source); })()), "imagePath", [], "any", false, false, false, 27))), "html", null, true);
            yield "\" alt=\"profile image\" id=\"profile-image\">
                    <div class=\"profile-information\">
                        <h2>";
            // line 29
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["usuario"]) || array_key_exists("usuario", $context) ? $context["usuario"] : (function () { throw new RuntimeError('Variable "usuario" does not exist.', 29, $this->source); })()), "name", [], "any", false, false, false, 29), "html", null, true);
            yield "</h2>
                        <p>";
            // line 30
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["usuario"]) || array_key_exists("usuario", $context) ? $context["usuario"] : (function () { throw new RuntimeError('Variable "usuario" does not exist.', 30, $this->source); })()), "gender", [], "any", false, false, false, 30), "html", null, true);
            yield "</p>
                        <p>";
            // line 31
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["usuario"]) || array_key_exists("usuario", $context) ? $context["usuario"] : (function () { throw new RuntimeError('Variable "usuario" does not exist.', 31, $this->source); })()), "description", [], "any", false, false, false, 31), "html", null, true);
            yield "</p>
                        ";
            // line 33
            yield "                    </div>
                    <div class=\"profile-buttons\">
                        <button id=\"button-unlike\">Unlike</button>
                        <button id=\"button-like\">Like</button>
                    </div>
                </div>
            ";
        } else {
            // line 40
            yield "                <div class=\"profile-content\">
                    <p>No se han encontrado más usuarios con tus intereses</p>
                </div>
            ";
        }
        // line 44
        yield "        </div>
    </div>

    ";
        // line 47
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

        // line 48
        yield "        <script src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/script.js"), "html", null, true);
        yield "\"></script>
        <script>
            window.onload = () => {
                let userBId = ";
        // line 51
        yield (((isset($context["usuario"]) || array_key_exists("usuario", $context) ? $context["usuario"] : (function () { throw new RuntimeError('Variable "usuario" does not exist.', 51, $this->source); })())) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["usuario"]) || array_key_exists("usuario", $context) ? $context["usuario"] : (function () { throw new RuntimeError('Variable "usuario" does not exist.', 51, $this->source); })()), "id", [], "any", false, false, false, 51), "html", null, true)) : ("null"));
        yield "

                if (userBId) {
                    let like = document.getElementById('button-like');
                    let unlike = document.getElementById('button-unlike');

                    /*like.addEventListener('click', () => {
                        fetch(`/like/\${userBId}`, { method: 'POST' })
                            .then(() => window.location.reload());
                    });

                    unlike.addEventListener(\"click\", () => {
                        fetch(`/unlike/\${userBId}` , { method: 'POST' })
                            .then(() => window.location.reload());
                    })*/

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
        return array (  228 => 51,  221 => 48,  198 => 47,  193 => 44,  187 => 40,  178 => 33,  174 => 31,  170 => 30,  166 => 29,  161 => 27,  158 => 26,  156 => 25,  147 => 19,  143 => 18,  139 => 17,  129 => 9,  116 => 8,  102 => 5,  89 => 4,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Tinder{% endblock %}
{% block stylesheet %}
    <link rel=\"stylesheet\" href=\"{{ asset('css/style-tinder.css') }}\">
{% endblock %}

{% block body %}
    <header class=\"header\">
        <h1>Tinder</h1>
    </header>

    <nav class=\"navbar\">
        <ul class=\"navbar-list\">
            <li><a href=\"#\">Perfil</a></li>
            <li><a href=\"#\">Logout</a></li>
            <li><a href=\"{{ path('app_likes') }}\">Likes</a></li>
            <li><a href=\"{{ path('app_match') }}\">Matches</a></li>
            <li><a href=\"{{ path('app_users') }}\">Message</a></li>
        </ul>
    </nav>

    <div class=\"main-layout\">
        <div class=\"main-content\">
            {% if usuario is not null %}
                <div class=\"profile-content\">
                    <img src=\"{{ asset('images/' ~ usuario.imagePath) }}\" alt=\"profile image\" id=\"profile-image\">
                    <div class=\"profile-information\">
                        <h2>{{ usuario.name }}</h2>
                        <p>{{ usuario.gender }}</p>
                        <p>{{ usuario.description }}</p>
                        {# <p>{{ usuario.id }}</p> #}
                    </div>
                    <div class=\"profile-buttons\">
                        <button id=\"button-unlike\">Unlike</button>
                        <button id=\"button-like\">Like</button>
                    </div>
                </div>
            {% else %}
                <div class=\"profile-content\">
                    <p>No se han encontrado más usuarios con tus intereses</p>
                </div>
            {% endif %}
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
                        fetch(`/unlike/\${userBId}` , { method: 'POST' })
                            .then(() => window.location.reload());
                    })*/

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
{% endblock %}
", "page/tinder.html.twig", "/home/alumno/Documentos/symfony/symfony-tinder/app/templates/page/tinder.html.twig");
    }
}
