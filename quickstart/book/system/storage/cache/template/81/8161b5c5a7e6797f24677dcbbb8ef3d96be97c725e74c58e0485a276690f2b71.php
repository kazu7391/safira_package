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

/* tt_safira_book3/template/common/footer.twig */
class __TwigTemplate_a79a33de4035c0038744f275575d18d02cf11c971fec412093bf904bbe3deb81 extends \Twig\Template
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
        echo "<footer>
\t<div class=\"footer-links\">  
\t  <div class=\"container\">
\t\t<div class=\"inner btn-group-vertical\">\t
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col col-sm-4 col-xs-12\">
\t\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t\t<div id=\"btnGroupVerticalDrop3\" data-toggle=\"dropdown\" class=\"dropdown-toggle title\">";
        // line 8
        echo ($context["text_shop_departments"] ?? null);
        echo "<i class=\"visible-xs ion-chevron-down\"></i></div>
\t\t\t\t\t\t<div class=\"dropdown-menu footer-content\" aria-labelledby=\"btnGroupVerticalDrop3\">
\t\t\t\t\t\t\t";
        // line 10
        echo ($context["position4"] ?? null);
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>\t
\t\t\t\t<div class=\"col col-sm-4 col-xs-12\">
\t\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t\t<div id=\"btnGroupVerticalDrop3\" data-toggle=\"dropdown\" class=\"dropdown-toggle title\">";
        // line 16
        echo ($context["text_service"] ?? null);
        echo "<i class=\"visible-xs ion-chevron-down\"></i></div>
\t\t\t\t\t\t<div class=\"dropdown-menu footer-content\" aria-labelledby=\"btnGroupVerticalDrop3\">
\t\t\t\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t\t\t  <li><a href=\"";
        // line 19
        echo ($context["sitemap"] ?? null);
        echo "\">";
        echo ($context["text_sitemap"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t  <!--li><a href=\"";
        // line 20
        echo ($context["account"] ?? null);
        echo "\">";
        echo ($context["text_account"] ?? null);
        echo "</a></li-->
\t\t\t\t\t\t\t  <!--li><a href=\"";
        // line 21
        echo ($context["order"] ?? null);
        echo "\">";
        echo ($context["text_order"] ?? null);
        echo "</a></li-->
\t\t\t\t\t\t\t  <!--li><a href=\"";
        // line 22
        echo ($context["wishlist"] ?? null);
        echo "\">";
        echo ($context["text_wishlist"] ?? null);
        echo "</a></li-->
\t\t\t\t\t\t\t  <li><a href=\"";
        // line 23
        echo ($context["manufacturer"] ?? null);
        echo "\">";
        echo ($context["text_manufacturer"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t  <li><a href=\"";
        // line 24
        echo ($context["voucher"] ?? null);
        echo "\">";
        echo ($context["text_voucher"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t  <li><a href=\"";
        // line 25
        echo ($context["affiliate"] ?? null);
        echo "\">";
        echo ($context["text_affiliate"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t  <li><a href=\"";
        // line 26
        echo ($context["special"] ?? null);
        echo "\">";
        echo ($context["text_special"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t  
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t\t<div id=\"btnGroupVerticalDrop2\" data-toggle=\"dropdown\" class=\"dropdown-toggle title\">";
        // line 32
        echo ($context["text_information"] ?? null);
        echo "<i class=\"visible-xs ion-chevron-down\"></i></div>
\t\t\t\t\t\t<div class=\"dropdown-menu footer-content footer-information\" aria-labelledby=\"btnGroupVerticalDrop2\">
\t\t\t\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t\t\t";
        // line 35
        if (($context["informations"] ?? null)) {
            // line 36
            echo "\t\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["informations"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
                // line 37
                echo "\t\t\t\t\t\t\t\t  <li><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "href", [], "any", false, false, false, 37);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 37);
                echo "</a></li>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            echo "\t\t\t\t\t\t\t";
        }
        // line 40
        echo "\t\t\t\t\t\t\t<!--li><a href=\"";
        echo ($context["contact"] ?? null);
        echo "\">";
        echo ($context["text_contact"] ?? null);
        echo "</a></li-->
\t\t\t\t\t\t\t<!--li><a href=\"";
        // line 41
        echo ($context["return"] ?? null);
        echo "\">";
        echo ($context["text_return"] ?? null);
        echo "</a></li-->
\t\t\t\t\t\t\t<!--li><a href=\"";
        // line 42
        echo ($context["newsletter"] ?? null);
        echo "\">";
        echo ($context["text_newsletter"] ?? null);
        echo "</a></li-->
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div class=\"col col-sm-4 col-xs-12\">
\t\t\t\t\t
\t\t\t\t\t<div class=\"btn-group \">
\t\t\t\t\t\t<div id=\"btnGroupVerticalDrop4\" data-toggle=\"dropdown\" class=\"dropdown-toggle title\">";
        // line 51
        echo ($context["text_newsletter"] ?? null);
        echo "<i class=\"visible-xs ion-chevron-down\"></i></div>
\t\t\t\t\t\t<div class=\"dropdown-menu footer-content\" aria-labelledby=\"btnGroupVerticalDrop4\">
\t\t\t\t\t\t\t";
        // line 53
        echo ($context["position5"] ?? null);
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"btn-group \">
\t\t\t\t\t\t<div id=\"btnGroupVerticalDrop4\" data-toggle=\"dropdown\" class=\"dropdown-toggle title\">";
        // line 57
        echo ($context["text_app"] ?? null);
        echo "<i class=\"visible-xs ion-chevron-down\"></i></div>
\t\t\t\t\t\t<div class=\"dropdown-menu footer-content\" aria-labelledby=\"btnGroupVerticalDrop4\">
\t\t\t\t\t\t\t";
        // line 59
        echo ($context["position6"] ?? null);
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t

\t\t\t</div>
\t\t</div>
\t  </div>
\t</div>
\t<div class=\"footer-copyright\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-6 col-sm-6 col-xs-12\">
\t\t\t\t\t";
        // line 73
        echo ($context["position7"] ?? null);
        echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-6 col-sm-6 col-xs-12\">
\t\t\t\t";
        // line 76
        echo ($context["position8"] ?? null);
        echo "
\t\t\t\t<p class=\"text-powered\">";
        // line 77
        echo ($context["powered"] ?? null);
        echo "</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</footer>
";
        // line 83
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 84
            echo "<script src=\"";
            echo $context["script"];
            echo "\" type=\"text/javascript\"></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 86
        echo "<!--
OpenCart is open source software and you are free to remove the powered by OpenCart if you want, but its generally accepted practise to make a small donation.
Please donate via PayPal to donate@opencart.com
//-->
</div></body></html>";
    }

    public function getTemplateName()
    {
        return "tt_safira_book3/template/common/footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  239 => 86,  230 => 84,  226 => 83,  217 => 77,  213 => 76,  207 => 73,  190 => 59,  185 => 57,  178 => 53,  173 => 51,  159 => 42,  153 => 41,  146 => 40,  143 => 39,  132 => 37,  127 => 36,  125 => 35,  119 => 32,  108 => 26,  102 => 25,  96 => 24,  90 => 23,  84 => 22,  78 => 21,  72 => 20,  66 => 19,  60 => 16,  51 => 10,  46 => 8,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "tt_safira_book3/template/common/footer.twig", "");
    }
}
