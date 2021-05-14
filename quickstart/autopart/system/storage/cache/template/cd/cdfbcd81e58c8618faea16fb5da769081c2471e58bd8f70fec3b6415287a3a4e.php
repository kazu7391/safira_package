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

/* tt_safira_sportswear1/template/plaza/page_section/header/header1.twig */
class __TwigTemplate_0671c296b645bab323570b26e33d4e897e756d629ef5d1b5807f5c6b9a468ef3 extends \Twig\Template
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
\t<nav id=\"top\" >
\t  <div class=\"container\">
\t\t<div class=\"box-inner\">
\t\t\t<ul class=\"box-top box-top-left pull-left\">
\t\t\t\t<li><a href=\"";
        // line 6
        echo ($context["contact"] ?? null);
        echo "\" title=\"";
        echo ($context["text_store_locator"] ?? null);
        echo "\"><i class=\"ion-ios-location-outline icons\"></i> <span class=\"hidden-xs\">";
        echo ($context["text_store_locator"] ?? null);
        echo "</span></a></li>
\t\t\t\t<!--li><a href=\"";
        // line 7
        echo ($context["checkout"] ?? null);
        echo "\" title=\"";
        echo ($context["text_checkout"] ?? null);
        echo "\"><i class=\"icon-trophy icons\"></i> <span class=\"hidden-xs\">";
        echo ($context["text_checkout"] ?? null);
        echo "</span></a></li-->
\t\t\t\t<li class=\"currency\">
\t\t\t\t";
        // line 9
        if (($context["header_currency"] ?? null)) {
            // line 10
            echo "\t\t\t\t  ";
            echo ($context["currency"] ?? null);
            echo "
\t\t\t\t";
        }
        // line 12
        echo "\t\t\t\t</li>
\t\t\t\t<li class=\"language\">
\t\t\t\t";
        // line 14
        echo ($context["language"] ?? null);
        echo "
\t\t\t\t</li>
\t\t\t\t<li id=\"top-links\" class=\"nav header-dropdown\">
\t\t\t\t  <ul class=\"list-inline\">
\t\t\t\t\t<li class=\"dropdown\"><a href=\"";
        // line 18
        echo ($context["account"] ?? null);
        echo "\" title=\"";
        echo ($context["text_account"] ?? null);
        echo "\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"ion-android-person icons\"></i> <span class=\"hidden-xs\">";
        echo ($context["text_account"] ?? null);
        echo "</span> <i class=\"icon-right ion-ios-arrow-down\"></i></a>
\t\t\t\t\t  <ul class=\"dropdown-menu dropdown-menu-right pt-account\">
\t\t\t\t\t\t";
        // line 20
        if (($context["logged"] ?? null)) {
            // line 21
            echo "\t\t\t\t\t\t<li><a href=\"";
            echo ($context["account"] ?? null);
            echo "\">";
            echo ($context["text_account"] ?? null);
            echo "</a></li>
\t\t\t\t\t\t<li><a href=\"";
            // line 22
            echo ($context["order"] ?? null);
            echo "\">";
            echo ($context["text_order"] ?? null);
            echo "</a></li>
\t\t\t\t\t\t<li><a href=\"";
            // line 23
            echo ($context["transaction"] ?? null);
            echo "\">";
            echo ($context["text_transaction"] ?? null);
            echo "</a></li>
\t\t\t\t\t\t<li><a href=\"";
            // line 24
            echo ($context["download"] ?? null);
            echo "\">";
            echo ($context["text_download"] ?? null);
            echo "</a></li>
\t\t\t\t\t\t<li><a id=\"pt-logout-link\" href=\"";
            // line 25
            echo ($context["logout"] ?? null);
            echo "\">";
            echo ($context["text_logout"] ?? null);
            echo "</a></li>
\t\t\t\t\t\t";
        } else {
            // line 27
            echo "\t\t\t\t\t\t<li><a id=\"pt-register-link\" href=\"";
            echo ($context["register"] ?? null);
            echo "\">";
            echo ($context["text_register"] ?? null);
            echo "</a></li>
\t\t\t\t\t\t<li><a id=\"pt-login-link\" href=\"";
            // line 28
            echo ($context["login"] ?? null);
            echo "\">";
            echo ($context["text_login"] ?? null);
            echo "</a></li>
\t\t\t\t\t\t";
        }
        // line 30
        echo "\t\t\t\t\t  </ul>
\t\t\t\t\t</li>
\t\t\t\t  </ul>
\t\t\t\t</li>
\t\t\t\t
\t\t\t</ul>
\t\t\t<ul class=\"box-top box-top-right pull-right\">
\t\t\t\t<li class=\"header-email\"><p><span>";
        // line 37
        echo ($context["email"] ?? null);
        echo "</span></p></li>
\t\t\t\t<!--li><a href=\"";
        // line 38
        echo ($context["shopping_cart"] ?? null);
        echo "\" title=\"";
        echo ($context["text_shopping_cart"] ?? null);
        echo "\"><i class=\"fa fa-shopping-cart\"></i> <span>";
        echo ($context["text_shopping_cart"] ?? null);
        echo "</span></a></li-->
\t\t\t\t
\t\t\t</ul>
\t\t</div>
\t  </div>
\t</nav>
\t<header class=\"scroll-fix \">
\t\t<div class=\"header-middle\">\t
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"box-inner\">
\t\t\t\t\t<div class=\"box-inner-inner\">
\t\t\t\t\t\t<div class=\"col-logo\">
\t\t\t\t\t\t\t";
        // line 50
        echo ($context["position3"] ?? null);
        echo "\t\t\t\t
\t\t\t\t\t\t\t<div id=\"logo\">
\t\t\t\t\t\t\t";
        // line 52
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
            // line 53
            echo "\t\t\t\t\t\t\t  <h1><a href=\"";
            echo ($context["home"] ?? null);
            echo "\">";
            echo ($context["name"] ?? null);
            echo "</a></h1>
\t\t\t\t\t\t\t  ";
        }
        // line 55
        echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"header-phone\">
\t\t\t\t\t\t\t<div class=\"inner\">
\t\t\t\t\t\t\t\t<div class=\"inner-inner\">
\t\t\t\t\t\t\t\t\t<p>";
        // line 61
        echo ($context["text_call_us"] ?? null);
        echo "</p>
\t\t\t\t\t\t\t\t\t<span>";
        // line 62
        echo ($context["telephone"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-cart\">
\t\t\t\t\t\t\t<div class=\"inner\">
\t\t\t\t\t\t\t\t";
        // line 68
        echo ($context["search"] ?? null);
        echo "
\t\t\t\t\t\t\t\t<a href=\"";
        // line 69
        echo ($context["compare"] ?? null);
        echo "\" class=\"compare-header\" ></a>
\t\t\t\t\t\t\t\t<a href=\"";
        // line 70
        echo ($context["wishlist"] ?? null);
        echo "\" id=\"wishlist-total\" ><span>";
        echo ($context["text_wishlist"] ?? null);
        echo "</span></a>
\t\t\t\t\t\t\t\t";
        // line 71
        if (($context["header_cart"] ?? null)) {
            echo ($context["cart"] ?? null);
        }
        // line 72
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
\t\t\t\t\t";
        // line 82
        echo ($context["position2"] ?? null);
        echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</header>
</div>";
    }

    public function getTemplateName()
    {
        return "tt_safira_sportswear1/template/plaza/page_section/header/header1.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  245 => 82,  233 => 72,  229 => 71,  223 => 70,  219 => 69,  215 => 68,  206 => 62,  202 => 61,  194 => 55,  186 => 53,  174 => 52,  169 => 50,  150 => 38,  146 => 37,  137 => 30,  130 => 28,  123 => 27,  116 => 25,  110 => 24,  104 => 23,  98 => 22,  91 => 21,  89 => 20,  80 => 18,  73 => 14,  69 => 12,  63 => 10,  61 => 9,  52 => 7,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "tt_safira_sportswear1/template/plaza/page_section/header/header1.twig", "");
    }
}
