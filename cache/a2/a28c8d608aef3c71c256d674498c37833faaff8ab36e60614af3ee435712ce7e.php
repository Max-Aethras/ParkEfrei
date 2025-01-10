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

/* cars/list.html.twig */
class __TwigTemplate_ef3693dc13c28a0c3b1503dde5c7a12b9d67b077fdd384035af72f2dfe61377b extends Template
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
        // line 1
        yield "<!DOCTYPE html>
<html>
<head>
    <title>Liste des Voitures</title>
    <link rel=\"stylesheet\" href=\"/styles.css\">
</head>
<body>
    <h2>Liste des Voitures</h2>
    <ul>
    ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["cars"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["car"]) {
            // line 11
            yield "        <li>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["car"], "make", [], "any", false, false, false, 11), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["car"], "model", [], "any", false, false, false, 11), "html", null, true);
            yield " (";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["car"], "year", [], "any", false, false, false, 11), "html", null, true);
            yield ")</li>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 13
            yield "        <li>Aucune voiture trouvée.</li> <!-- Message si aucune voiture n'est disponible -->
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['car'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        yield "    </ul>
    <a href=\"/car/create\">Ajouter une nouvelle voiture</a>
</body>
</html>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "cars/list.html.twig";
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
        return array (  73 => 15,  66 => 13,  54 => 11,  49 => 10,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "cars/list.html.twig", "C:\\Users\\maxim\\OneDrive\\Bureau\\ParkEfrei\\templates\\cars\\list.html.twig");
    }
}
