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

/* tt_safira_houseware3/template/plaza/page_section/header/header3.twig */
class __TwigTemplate_726d0697695451105befdba3310c239e8c6324d8ca0fba3faf391d8c1d359625 extends \Twig\Template
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
        echo "<div id=\"header\" >\t
\t
\t<header class=\"scroll-fix \">
\t\t<div class=\"header-middle\">\t
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"box-inner\">
\t\t\t\t\t<div class=\"box-inner-inner\">
\t\t\t\t\t\t<div class=\"col-logo\">
\t\t\t\t\t\t\t";
        // line 9
        echo ($context["position3"] ?? null);
        echo "\t\t\t\t
\t\t\t\t\t\t\t<div id=\"logo\">
\t\t\t\t\t\t\t";
        // line 11
        if (($context["logo"] ?? null)) {
            echo "<a href=\"";
            echo ($context["home"] ?? null);
            echo "\"><img src=\"";
            echo ($context["logo"] ?? null);
            echo "\" title=\"";
            echo ($context["name"] ?? null);
            echo "\" alt=\"";
            echo ($context["name"] ?? null);
            echo "\" class=\"img-responsive\" /></a>";
        } else {
            // line 12
            echo "\t\t\t\t\t\t\t  <h1><a href=\"";
            echo ($context["home"] ?? null);
            echo "\">";
            echo ($context["name"] ?? null);
            echo "</a></h1>
\t\t\t\t\t\t\t  ";
        }
        // line 14
        echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-hoz\">
\t\t\t\t\t\t";
        // line 17
        echo ($context["position2"] ?? null);
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"col-cart\">
\t\t\t\t\t\t\t<div class=\"inner\">
\t\t\t\t\t\t\t\t<a href=\"";
        // line 22
        echo ($context["compare"] ?? null);
        echo "\" class=\"compare-header\" ></a>
\t\t\t\t\t\t\t\t<a href=\"";
        // line 23
        echo ($context["wishlist"] ?? null);
        echo "\" id=\"wishlist-total\" ><span>";
        echo ($context["text_wishlist"] ?? null);
        echo "</span></a>
\t\t\t\t\t\t\t\t";
        // line 24
        if (($context["header_cart"] ?? null)) {
            echo ($context["cart"] ?? null);
        }
        // line 25
        echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"header-bottom\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"container-inner\">
\t\t\t\t\t<div class=\"col-ver\">
\t\t\t\t\t\t";
        // line 36
        echo ($context["position1"] ?? null);
        echo "
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-search\">
\t\t\t\t\t\t";
        // line 39
        echo ($context["search"] ?? null);
        echo "
\t\t\t\t\t</div>
\t\t\t\t\t<div id=\"top\">
\t\t\t\t\t\t<ul class=\"box-top\">
\t\t\t\t\t\t\t<li class=\"currency\">
\t\t\t\t\t\t\t";
        // line 44
        if (($context["header_currency"] ?? null)) {
            // line 45
            echo "\t\t\t\t\t\t\t  ";
            echo ($context["currency"] ?? null);
            echo "
\t\t\t\t\t\t\t";
        }
        // line 47
        echo "\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"language\">
\t\t\t\t\t\t\t";
        // line 49
        echo ($context["language"] ?? null);
        echo "
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li id=\"top-links\" class=\"nav header-dropdown\">
\t\t\t\t\t\t\t  <ul class=\"list-inline\">
\t\t\t\t\t\t\t\t<li class=\"dropdown\"><a href=\"";
        // line 53
        echo ($context["account"] ?? null);
        echo "\" title=\"";
        echo ($context["text_account"] ?? null);
        echo "\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"ion-android-person icons\"></i> <span class=\"hidden-xs\">";
        echo ($context["text_account"] ?? null);
        echo "</span> <i class=\"icon-right ion-ios-arrow-down\"></i></a>
\t\t\t\t\t\t\t\t  <ul class=\"dropdown-menu dropdown-menu-right pt-account\">
\t\t\t\t\t\t\t\t\t";
        // line 55
        if (($context["logged"] ?? null)) {
            // line 56
            echo "\t\t\t\t\t\t\t\t\t<li><a href=\"";
            echo ($context["account"] ?? null);
            echo "\">";
            echo ($context["text_account"] ?? null);
            echo "</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"";
            // line 57
            echo ($context["order"] ?? null);
            echo "\">";
            echo ($context["text_order"] ?? null);
            echo "</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"";
            // line 58
            echo ($context["transaction"] ?? null);
            echo "\">";
            echo ($context["text_transaction"] ?? null);
            echo "</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"";
            // line 59
            echo ($context["download"] ?? null);
            echo "\">";
            echo ($context["text_download"] ?? null);
            echo "</a></li>
\t\t\t\t\t\t\t\t\t<li><a id=\"pt-logout-link\" href=\"";
            // line 60
            echo ($context["logout"] ?? null);
            echo "\">";
            echo ($context["text_logout"] ?? null);
            echo "</a></li>
\t\t\t\t\t\t\t\t\t";
        } else {
            // line 62
            echo "\t\t\t\t\t\t\t\t\t<li><a id=\"pt-register-link\" href=\"";
            echo ($context["register"] ?? null);
            echo "\">";
            echo ($context["text_register"] ?? null);
            echo "</a></li>
\t\t\t\t\t\t\t\t\t<li><a id=\"pt-login-link\" href=\"";
            // line 63
            echo ($context["login"] ?? null);
            echo "\">";
            echo ($context["text_login"] ?? null);
            echo "</a></li>
\t\t\t\t\t\t\t\t\t";
        }
        // line 65
        echo "\t\t\t\t\t\t\t\t  </ul>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t  </ul>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</header>
</div>";
    }

    public function getTemplateName()
    {
        return "tt_safira_houseware3/template/plaza/page_section/header/header3.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  202 => 65,  195 => 63,  188 => 62,  181 => 60,  175 => 59,  169 => 58,  163 => 57,  156 => 56,  154 => 55,  145 => 53,  138 => 49,  134 => 47,  128 => 45,  126 => 44,  118 => 39,  112 => 36,  99 => 25,  95 => 24,  89 => 23,  85 => 22,  77 => 17,  72 => 14,  64 => 12,  52 => 11,  47 => 9,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "tt_safira_houseware3/template/plaza/page_section/header/header3.twig", "");
    }
}
