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

/* cars/create.html.twig */
class __TwigTemplate_a6e28cbf3fa4dac33e0753b4f5e50a5b43526b1113cf042ec950bf6e458529ad extends Template
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
        yield "<!DOCTYPE html>
<html>
<head>
    <title>Ajouter une Nouvelle Voiture</title>
</head>
<body>
    <h2>Ajouter une Nouvelle Voiture</h2>
    <form method=\"POST\" action=\"/car/create\">
        <label for=\"make\">Marque:</label>
        <input type=\"text\" name=\"make\" required>
        <label for=\"model\">Modèle:</label>
        <input type=\"text\" name=\"model\" required>
        <label for=\"year\">Année:</label>
        <input type=\"number\" name=\"year\" required>
        <button type=\"submit\">Ajouter</button>
    </form>
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
        return "cars/create.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array ();
    }

    public function getSourceContext()
    {
        return new Source("", "cars/create.html.twig", "C:\\Users\\maxim\\OneDrive\\Bureau\\ParkEfrei\\templates\\cars\\create.html.twig");
    }
}
