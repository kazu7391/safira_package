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

/* tt_safira_medical1/template/plaza/page_section/header/header1.twig */
class __TwigTemplate_b44f09de721cf408d22e09b3f4901caf9a75137f541608631c729c7a8df69458 extends \Twig\Template
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
\t\t\t\t
\t\t\t\t<li class=\"header-email\"><p><span>";
        // line 7
        echo ($context["email"] ?? null);
        echo "</span></p></li>
\t\t\t</ul>
\t\t\t<ul class=\"box-top box-top-right pull-right\">
\t\t\t\t<li><a href=\"";
        // line 10
        echo ($context["contact"] ?? null);
        echo "\" title=\"";
        echo ($context["text_store_locator"] ?? null);
        echo "\"><i class=\"ion-ios-location-outline icons\"></i> <span class=\"hidden-xs\">";
        echo ($context["text_store_locator"] ?? null);
        echo "</span></a></li>
\t\t\t\t<!--li><a href=\"";
        // line 11
        echo ($context["checkout"] ?? null);
        echo "\" title=\"";
        echo ($context["text_checkout"] ?? null);
        echo "\"><i class=\"icon-trophy icons\"></i> <span class=\"hidden-xs\">";
        echo ($context["text_checkout"] ?? null);
        echo "</span></a></li-->
\t\t\t\t<li class=\"currency\">
\t\t\t\t";
        // line 13
        if (($context["header_currency"] ?? null)) {
            // line 14
            echo "\t\t\t\t  ";
            echo ($context["currency"] ?? null);
            echo "
\t\t\t\t";
        }
        // line 16
        echo "\t\t\t\t</li>
\t\t\t\t<li class=\"language\">
\t\t\t\t";
        // line 18
        echo ($context["language"] ?? null);
        echo "
\t\t\t\t</li>
\t\t\t\t<li id=\"top-links\" class=\"nav header-dropdown\">
\t\t\t\t  <ul class=\"list-inline\">
\t\t\t\t\t<li class=\"dropdown\"><a href=\"";
        // line 22
        echo ($context["account"] ?? null);
        echo "\" title=\"";
        echo ($context["text_account"] ?? null);
        echo "\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"ion-android-person icons\"></i> <span class=\"hidden-xs\">";
        echo ($context["text_account"] ?? null);
        echo "</span> <i class=\"icon-right ion-ios-arrow-down\"></i></a>
\t\t\t\t\t  <ul class=\"dropdown-menu dropdown-menu-right pt-account\">
\t\t\t\t\t\t";
        // line 24
        if (($context["logged"] ?? null)) {
            // line 25
            echo "\t\t\t\t\t\t<li><a href=\"";
            echo ($context["account"] ?? null);
            echo "\">";
            echo ($context["text_account"] ?? null);
            echo "</a></li>
\t\t\t\t\t\t<li><a href=\"";
            // line 26
            echo ($context["order"] ?? null);
            echo "\">";
            echo ($context["text_order"] ?? null);
            echo "</a></li>
\t\t\t\t\t\t<li><a href=\"";
            // line 27
            echo ($context["transaction"] ?? null);
            echo "\">";
            echo ($context["text_transaction"] ?? null);
            echo "</a></li>
\t\t\t\t\t\t<li><a href=\"";
            // line 28
            echo ($context["download"] ?? null);
            echo "\">";
            echo ($context["text_download"] ?? null);
            echo "</a></li>
\t\t\t\t\t\t<li><a id=\"pt-logout-link\" href=\"";
            // line 29
            echo ($context["logout"] ?? null);
            echo "\">";
            echo ($context["text_logout"] ?? null);
            echo "</a></li>
\t\t\t\t\t\t";
        } else {
            // line 31
            echo "\t\t\t\t\t\t<li><a id=\"pt-register-link\" href=\"";
            echo ($context["register"] ?? null);
            echo "\">";
            echo ($context["text_register"] ?? null);
            echo "</a></li>
\t\t\t\t\t\t<li><a id=\"pt-login-link\" href=\"";
            // line 32
            echo ($context["login"] ?? null);
            echo "\">";
            echo ($context["text_login"] ?? null);
            echo "</a></li>
\t\t\t\t\t\t";
        }
        // line 34
        echo "\t\t\t\t\t  </ul>
\t\t\t\t\t</li>
\t\t\t\t  </ul>
\t\t\t\t</li>
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
\t\t\t\t\t\t<ul class=\"box-links\">
\t\t\t\t\t\t\t<li class=\"currency\">
\t\t\t\t\t\t\t";
        // line 51
        if (($context["header_currency"] ?? null)) {
            // line 52
            echo "\t\t\t\t\t\t\t  ";
            echo ($context["currency"] ?? null);
            echo "
\t\t\t\t\t\t\t";
        }
        // line 54
        echo "\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"language\">
\t\t\t\t\t\t\t";
        // line 56
        echo ($context["language"] ?? null);
        echo "
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li id=\"top-links\" class=\"nav header-dropdown\">
\t\t\t\t\t\t\t  <ul class=\"list-inline\">
\t\t\t\t\t\t\t\t<li class=\"dropdown\"><a href=\"";
        // line 60
        echo ($context["account"] ?? null);
        echo "\" title=\"";
        echo ($context["text_account"] ?? null);
        echo "\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"ion-android-person icons\"></i> <span class=\"hidden-xs\">";
        echo ($context["text_account"] ?? null);
        echo "</span> <i class=\"icon-right ion-ios-arrow-down\"></i></a>
\t\t\t\t\t\t\t\t  <ul class=\"dropdown-menu dropdown-menu-right pt-account\">
\t\t\t\t\t\t\t\t\t";
        // line 62
        if (($context["logged"] ?? null)) {
            // line 63
            echo "\t\t\t\t\t\t\t\t\t<li><a href=\"";
            echo ($context["account"] ?? null);
            echo "\">";
            echo ($context["text_account"] ?? null);
            echo "</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"";
            // line 64
            echo ($context["order"] ?? null);
            echo "\">";
            echo ($context["text_order"] ?? null);
            echo "</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"";
            // line 65
            echo ($context["transaction"] ?? null);
            echo "\">";
            echo ($context["text_transaction"] ?? null);
            echo "</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"";
            // line 66
            echo ($context["download"] ?? null);
            echo "\">";
            echo ($context["text_download"] ?? null);
            echo "</a></li>
\t\t\t\t\t\t\t\t\t<li><a id=\"pt-logout-link\" href=\"";
            // line 67
            echo ($context["logout"] ?? null);
            echo "\">";
            echo ($context["text_logout"] ?? null);
            echo "</a></li>
\t\t\t\t\t\t\t\t\t";
        } else {
            // line 69
            echo "\t\t\t\t\t\t\t\t\t<li><a id=\"pt-register-link\" href=\"";
            echo ($context["register"] ?? null);
            echo "\">";
            echo ($context["text_register"] ?? null);
            echo "</a></li>
\t\t\t\t\t\t\t\t\t<li><a id=\"pt-login-link\" href=\"";
            // line 70
            echo ($context["login"] ?? null);
            echo "\">";
            echo ($context["text_login"] ?? null);
            echo "</a></li>
\t\t\t\t\t\t\t\t\t";
        }
        // line 72
        echo "\t\t\t\t\t\t\t\t  </ul>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t  </ul>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<div class=\"col-logo\">
\t\t\t\t\t\t\t";
        // line 78
        echo ($context["position3"] ?? null);
        echo "\t\t\t\t
\t\t\t\t\t\t\t<div id=\"logo\">
\t\t\t\t\t\t\t";
        // line 80
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
            // line 81
            echo "\t\t\t\t\t\t\t  <h1><a href=\"";
            echo ($context["home"] ?? null);
            echo "\">";
            echo ($context["name"] ?? null);
            echo "</a></h1>
\t\t\t\t\t\t\t  ";
        }
        // line 83
        echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"col-cart\">
\t\t\t\t\t\t\t<div class=\"inner\">
\t\t\t\t\t\t\t\t<a href=\"";
        // line 89
        echo ($context["compare"] ?? null);
        echo "\" class=\"compare-header\" ></a>
\t\t\t\t\t\t\t\t<a href=\"";
        // line 90
        echo ($context["wishlist"] ?? null);
        echo "\" id=\"wishlist-total\" ><span>";
        echo ($context["text_wishlist"] ?? null);
        echo "</span></a>
\t\t\t\t\t\t\t\t";
        // line 91
        if (($context["header_cart"] ?? null)) {
            echo ($context["cart"] ?? null);
        }
        // line 92
        echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-search\">
\t\t\t\t\t\t";
        // line 96
        echo ($context["search"] ?? null);
        echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"header-bottom\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"inner\">
\t\t\t\t\t";
        // line 104
        echo ($context["position2"] ?? null);
        echo "
\t\t\t\t\t<div class=\"header-phone\">
\t\t\t\t\t\t<div class=\"inner\">
\t\t\t\t\t\t\t<div class=\"inner-inner\">
\t\t\t\t\t\t\t\t<p>";
        // line 108
        echo ($context["text_call_us"] ?? null);
        echo "</p>
\t\t\t\t\t\t\t\t<span>";
        // line 109
        echo ($context["telephone"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</header>
</div>";
    }

    public function getTemplateName()
    {
        return "tt_safira_medical1/template/plaza/page_section/header/header1.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  329 => 109,  325 => 108,  318 => 104,  307 => 96,  301 => 92,  297 => 91,  291 => 90,  287 => 89,  279 => 83,  271 => 81,  259 => 80,  254 => 78,  246 => 72,  239 => 70,  232 => 69,  225 => 67,  219 => 66,  213 => 65,  207 => 64,  200 => 63,  198 => 62,  189 => 60,  182 => 56,  178 => 54,  172 => 52,  170 => 51,  150 => 38,  144 => 34,  137 => 32,  130 => 31,  123 => 29,  117 => 28,  111 => 27,  105 => 26,  98 => 25,  96 => 24,  87 => 22,  80 => 18,  76 => 16,  70 => 14,  68 => 13,  59 => 11,  51 => 10,  45 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "tt_safira_medical1/template/plaza/page_section/header/header1.twig", "");
    }
}
