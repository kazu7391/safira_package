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

/* tt_safira1/template/plaza/module/ptstaticblock.twig */
class __TwigTemplate_35a2d11cc419610e69df59879ec492915ffb866537fb36cf23d2ead8ef5292e6 extends \Twig\Template
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
        if ((($context["title"] ?? null) && ($context["show_title"] ?? null))) {
            // line 2
            echo "\t<h2>";
            echo ($context["title"] ?? null);
            echo "</h2>
";
        }
        // line 4
        echo ($context["block_content"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "tt_safira1/template/plaza/module/ptstaticblock.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "tt_safira1/template/plaza/module/ptstaticblock.twig", "");
    }
}
