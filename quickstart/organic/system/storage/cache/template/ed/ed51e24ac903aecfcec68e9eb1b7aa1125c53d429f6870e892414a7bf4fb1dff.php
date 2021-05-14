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

/* tt_safira3/template/plaza/module/ptproducts/content.twig */
class __TwigTemplate_f8342ca620a81a37fefa274a8d6e266d736fc9eff74064cb75fac0e71889f9d3 extends \Twig\Template
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
        if ((($context["layout_type"] ?? null) == "grid")) {
            // line 2
            echo "    ";
            // line 3
            echo "\t<div class=\"grid-style\">
\t\t<div class=\"product-item\">\t
\t\t\t<div class=\"image ";
            // line 5
            if (($context["rotate_image"] ?? null)) {
                echo "rotate-image-container";
            }
            echo "\">
\t\t\t\t<a href=\"";
            // line 6
            echo ($context["href"] ?? null);
            echo "\">
\t\t\t\t\t";
            // line 7
            if (($context["rotate_image"] ?? null)) {
                // line 8
                echo "\t\t\t\t\t\t<img ";
                if (($context["lazy_load"] ?? null)) {
                    echo " src=\"";
                    echo ($context["loader_img"] ?? null);
                    echo "\" data-src=\"";
                    echo ($context["rotate_image"] ?? null);
                    echo "\" width=\"";
                    echo ($context["img_width"] ?? null);
                    echo "\" height=\"";
                    echo ($context["img_height"] ?? null);
                    echo "\" ";
                } else {
                    echo " src=\"";
                    echo ($context["rotate_image"] ?? null);
                    echo "\" ";
                }
                echo "  alt=\"";
                echo ($context["name"] ?? null);
                echo "\" title=\"";
                echo ($context["name"] ?? null);
                echo "\" class=\"img-responsive img-rotate-image ";
                if (($context["lazy_load"] ?? null)) {
                    echo " lazyload ";
                }
                echo "\" />
\t\t\t\t\t";
            }
            // line 10
            echo "\t\t\t\t\t<img ";
            if (($context["lazy_load"] ?? null)) {
                echo " src=\"";
                echo ($context["loader_img"] ?? null);
                echo "\" data-src=\"";
                echo ($context["thumb"] ?? null);
                echo "\" width=\"";
                echo ($context["img_width"] ?? null);
                echo "\" height=\"";
                echo ($context["img_height"] ?? null);
                echo "\" ";
            } else {
                echo " src=\"";
                echo ($context["thumb"] ?? null);
                echo "\" ";
            }
            echo " alt=\"";
            echo ($context["name"] ?? null);
            echo "\" title=\"";
            echo ($context["name"] ?? null);
            echo "\" class=\"";
            if (($context["lazy_load"] ?? null)) {
                echo " lazyload ";
            }
            echo " img-responsive img-mod-";
            echo ($context["section_id"] ?? null);
            echo "-";
            echo ($context["product_id"] ?? null);
            echo "\" />
\t\t\t\t\t";
            // line 11
            if (($context["swatches_images"] ?? null)) {
                // line 12
                echo "\t\t\t\t\t\t<input type=\"hidden\" value=\"";
                echo ($context["thumb"] ?? null);
                echo "\" class=\"img-default-";
                echo ($context["section_id"] ?? null);
                echo "-";
                echo ($context["product_id"] ?? null);
                echo "\" />
\t\t\t\t\t\t";
                // line 13
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["swatches_images"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["s_image"]) {
                    // line 14
                    echo "\t\t\t\t\t\t\t<input type=\"hidden\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["s_image"], "image", [], "any", false, false, false, 14);
                    echo "\" class=\"img-swatch-";
                    echo ($context["section_id"] ?? null);
                    echo "-";
                    echo ($context["product_id"] ?? null);
                    echo "-";
                    echo twig_get_attribute($this->env, $this->source, $context["s_image"], "product_option_value_id", [], "any", false, false, false, 14);
                    echo "\" />
\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s_image'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 16
                echo "\t\t\t\t\t";
            }
            // line 17
            echo "\t\t\t\t</a>
\t\t\t\t";
            // line 18
            if ((((($context["show_cart"] ?? null) || ($context["show_wishlist"] ?? null)) || ($context["show_compare"] ?? null)) || ($context["show_quickview"] ?? null))) {
                // line 19
                echo "\t\t\t\t\t<div class=\"button-group\">
\t\t\t\t\t\t<div class=\"inner\">
\t\t\t\t\t\t\t";
                // line 21
                if (($context["show_cart"] ?? null)) {
                    // line 22
                    echo "\t\t\t\t\t\t\t\t<button type=\"button\" class=\"button-cart\" onclick=\"cart.add('";
                    echo ($context["product_id"] ?? null);
                    echo "');\" title=\"";
                    echo ($context["button_cart"] ?? null);
                    echo "\"><span>";
                    echo ($context["button_cart"] ?? null);
                    echo "</span></button>
\t\t\t\t\t\t\t";
                }
                // line 24
                echo "\t\t\t\t\t\t\t";
                if (($context["show_quickview"] ?? null)) {
                    // line 25
                    echo "\t\t\t\t\t\t\t\t<button type=\"button\" title=\"";
                    echo ($context["button_quickview"] ?? null);
                    echo "\" class=\"button-quickview\" onclick=\"ptquickview.ajaxView('";
                    echo ($context["href"] ?? null);
                    echo "')\"><span>";
                    echo ($context["button_quickview"] ?? null);
                    echo "</span></button>
\t\t\t\t\t\t\t";
                }
                // line 27
                echo "\t\t\t\t\t\t\t";
                if (($context["show_wishlist"] ?? null)) {
                    // line 28
                    echo "\t\t\t\t\t\t\t\t<button type=\"button\"  title=\"";
                    echo ($context["button_wishlist"] ?? null);
                    echo "\" class=\"button-wishlist\" onclick=\"wishlist.add('";
                    echo ($context["product_id"] ?? null);
                    echo "');\"><span>";
                    echo ($context["button_wishlist"] ?? null);
                    echo "</span></button>
\t\t\t\t\t\t\t";
                }
                // line 30
                echo "\t\t\t\t\t\t\t";
                if (($context["show_compare"] ?? null)) {
                    // line 31
                    echo "\t\t\t\t\t\t\t\t<button type=\"button\"  title=\"";
                    echo ($context["button_compare"] ?? null);
                    echo "\" class=\"button-compare\" onclick=\"compare.add('";
                    echo ($context["product_id"] ?? null);
                    echo "');\"><span>";
                    echo ($context["button_compare"] ?? null);
                    echo "</span></button>
\t\t\t\t\t\t\t";
                }
                // line 33
                echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
            }
            // line 36
            echo "\t\t\t\t";
            if ((($context["show_countdown"] ?? null) && ($context["date_end"] ?? null))) {
                // line 37
                echo "\t\t\t\t\t<p class=\"text-countdown\">";
                echo ($context["text_countdown"] ?? null);
                echo "</p>
\t\t\t\t\t<div class=\"countdown-box countdown-product-";
                // line 38
                echo ($context["product_id"] ?? null);
                echo "\" data-id=\"";
                echo ($context["product_id"] ?? null);
                echo "\" data-date=\"";
                echo ($context["date_end"] ?? null);
                echo "\">
\t\t\t\t\t\t<div class=\"inner\">
\t\t\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t\t\t<b class=\"day\"></b><span>";
                // line 41
                echo ($context["text_days"] ?? null);
                echo "</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t\t\t<b class=\"hour\"></b><span>";
                // line 44
                echo ($context["text_hours"] ?? null);
                echo "</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t\t\t<b class=\"min\"></b><span>";
                // line 47
                echo ($context["text_mins"] ?? null);
                echo "</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t\t\t<b class=\"sec\"></b><span>";
                // line 50
                echo ($context["text_secs"] ?? null);
                echo "</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
            }
            // line 55
            echo "\t\t\t</div>
\t\t\t<div class=\"caption\">
\t\t\t\t
\t\t\t\t";
            // line 58
            if ((($context["show_label"] ?? null) && (($context["special"] ?? null) || ($context["is_new"] ?? null)))) {
                // line 59
                echo "\t\t\t\t\t<div class=\"box-label\">
\t\t\t\t\t\t";
                // line 60
                if (($context["special"] ?? null)) {
                    // line 61
                    echo "\t\t\t\t\t\t\t<div><span class=\"pro-label sale\">";
                    echo ($context["text_sale"] ?? null);
                    echo "</span></div>
\t\t\t\t\t\t";
                }
                // line 63
                echo "\t\t\t\t\t\t";
                if (($context["is_new"] ?? null)) {
                    // line 64
                    echo "\t\t\t\t\t\t\t<div><span class=\"pro-label new\">";
                    echo ($context["text_new"] ?? null);
                    echo "</span></div>
\t\t\t\t\t\t";
                }
                // line 66
                echo "\t\t\t\t\t</div>
\t\t\t\t";
            }
            // line 68
            echo "\t\t\t\t
\t\t\t\t";
            // line 69
            if (($context["options"] ?? null)) {
                // line 70
                echo "\t\t\t\t\t<div class=\"category-options product-options\">
\t\t\t\t\t";
                // line 71
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                    // line 72
                    echo "\t\t\t\t\t\t<ul class=\"ul-swatches-colors\">
\t\t\t\t\t\t\t";
                    // line 73
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 73));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 74
                        echo "\t\t\t\t\t\t\t\t<li class=\"swatches-options\">
\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" onclick=\"swatches.changeModuleSwatches(\$(this));\" title=\"";
                        // line 75
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 75);
                        echo "\"
\t\t\t\t\t\t\t\t\t   style=\"";
                        // line 76
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 76)) {
                            echo " width: 12px; height: 12px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tbackground-image: url('";
                            // line 77
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 77);
                            echo "') ";
                        }
                        echo "\"
\t\t\t\t\t\t\t\t\t   data-module-id=\"";
                        // line 78
                        echo ($context["section_id"] ?? null);
                        echo "\"
\t\t\t\t\t\t\t\t\t   data-product-id=\"";
                        // line 79
                        echo ($context["product_id"] ?? null);
                        echo "\"
\t\t\t\t\t\t\t\t\t   data-product-option-value-id=\"";
                        // line 80
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 80);
                        echo "\">";
                        if ( !twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 80)) {
                            echo " ";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 80);
                            echo " ";
                        }
                        echo "</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 83
                    echo "\t\t\t\t\t\t</ul>
\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 85
                echo "\t\t\t\t\t</div>
\t\t\t\t";
            }
            // line 87
            echo "\t\t\t\t
\t\t\t\t<h4><a href=\"";
            // line 88
            echo ($context["href"] ?? null);
            echo "\">";
            echo ($context["name"] ?? null);
            echo "</a></h4>
\t\t\t\t";
            // line 89
            if (($context["manufacturer"] ?? null)) {
                // line 90
                echo "\t\t\t\t\t<p class=\"manufacture-product\">
\t\t\t\t\t\t<a href=\"";
                // line 91
                echo ($context["manufacturer_href"] ?? null);
                echo "\">";
                echo ($context["manufacturer"] ?? null);
                echo "</a>
\t\t\t\t\t</p>
\t\t\t\t";
            }
            // line 94
            echo "\t\t\t\t";
            if ((($context["show_price"] ?? null) && ($context["price"] ?? null))) {
                // line 95
                echo "\t\t\t\t\t<p class=\"price\">
\t\t\t\t\t\t";
                // line 96
                if ( !($context["special"] ?? null)) {
                    // line 97
                    echo "\t\t\t\t\t\t\t";
                    echo ($context["price"] ?? null);
                    echo "
\t\t\t\t\t\t";
                } else {
                    // line 99
                    echo "\t\t\t\t\t\t\t<span class=\"price-new\">";
                    echo ($context["special"] ?? null);
                    echo "</span> <span class=\"price-old\">";
                    echo ($context["price"] ?? null);
                    echo "</span>
\t\t\t\t\t\t";
                }
                // line 101
                echo "\t\t\t\t\t\t";
                if (($context["tax"] ?? null)) {
                    // line 102
                    echo "\t\t\t\t\t\t\t<span class=\"price-tax\">";
                    echo ($context["text_tax"] ?? null);
                    echo " ";
                    echo ($context["tax"] ?? null);
                    echo "</span>
\t\t\t\t\t\t";
                }
                // line 104
                echo "\t\t\t\t\t</p>
\t\t\t\t";
            }
            // line 106
            echo "\t\t\t\t
\t\t\t\t";
            // line 107
            if ((($context["show_description"] ?? null) && ($context["description"] ?? null))) {
                // line 108
                echo "\t\t\t\t\t<p class=\"product-description\">";
                echo ($context["description"] ?? null);
                echo "</p>
\t\t\t\t";
            }
            // line 110
            echo "\t\t\t\t<a class=\"button-view-more\" href=\"";
            echo ($context["href"] ?? null);
            echo "\" target=\"_blank\">";
            echo ($context["text_viewmore"] ?? null);
            echo "</a>
\t\t\t</div>
\t\t</div>
\t</div>
";
        }
        // line 115
        echo "
";
        // line 116
        if ((($context["layout_type"] ?? null) == "list")) {
            // line 117
            echo "    ";
            // line 118
            echo "\t<div class=\"list-style\">
\t\t<div class=\"product-item\">\t
\t\t\t<div class=\"image ";
            // line 120
            if (($context["rotate_image"] ?? null)) {
                echo "rotate-image-container";
            }
            echo "\">
\t\t\t\t";
            // line 121
            if ((($context["show_label"] ?? null) && (($context["special"] ?? null) || ($context["is_new"] ?? null)))) {
                // line 122
                echo "\t\t\t\t\t<div class=\"box-label\">
\t\t\t\t\t\t";
                // line 123
                if (($context["special"] ?? null)) {
                    // line 124
                    echo "\t\t\t\t\t\t\t<div><span class=\"pro-label sale\">";
                    echo ($context["text_sale"] ?? null);
                    echo "</span></div>
\t\t\t\t\t\t";
                }
                // line 126
                echo "\t\t\t\t\t\t";
                if (($context["is_new"] ?? null)) {
                    // line 127
                    echo "\t\t\t\t\t\t\t<div><span class=\"pro-label new\">";
                    echo ($context["text_new"] ?? null);
                    echo "</span></div>
\t\t\t\t\t\t";
                }
                // line 129
                echo "\t\t\t\t\t</div>
\t\t\t\t";
            }
            // line 131
            echo "\t\t\t\t<a href=\"";
            echo ($context["href"] ?? null);
            echo "\">
\t\t\t\t\t";
            // line 132
            if (($context["rotate_image"] ?? null)) {
                // line 133
                echo "\t\t\t\t\t\t<img ";
                if (($context["lazy_load"] ?? null)) {
                    echo " src=\"";
                    echo ($context["loader_img"] ?? null);
                    echo "\" data-src=\"";
                    echo ($context["rotate_image"] ?? null);
                    echo "\" width=\"";
                    echo ($context["img_width"] ?? null);
                    echo "\" height=\"";
                    echo ($context["img_height"] ?? null);
                    echo "\" ";
                } else {
                    echo " src=\"";
                    echo ($context["rotate_image"] ?? null);
                    echo "\" ";
                }
                echo "  alt=\"";
                echo ($context["name"] ?? null);
                echo "\" title=\"";
                echo ($context["name"] ?? null);
                echo "\" class=\"img-responsive img-rotate-image ";
                if (($context["lazy_load"] ?? null)) {
                    echo " lazyload ";
                }
                echo "\" />
\t\t\t\t\t";
            }
            // line 135
            echo "\t\t\t\t\t<img ";
            if (($context["lazy_load"] ?? null)) {
                echo " src=\"";
                echo ($context["loader_img"] ?? null);
                echo "\" data-src=\"";
                echo ($context["thumb"] ?? null);
                echo "\" width=\"";
                echo ($context["img_width"] ?? null);
                echo "\" height=\"";
                echo ($context["img_height"] ?? null);
                echo "\" ";
            } else {
                echo " src=\"";
                echo ($context["thumb"] ?? null);
                echo "\" ";
            }
            echo " alt=\"";
            echo ($context["name"] ?? null);
            echo "\" title=\"";
            echo ($context["name"] ?? null);
            echo "\" class=\"";
            if (($context["lazy_load"] ?? null)) {
                echo " lazyload ";
            }
            echo " img-responsive img-mod-";
            echo ($context["section_id"] ?? null);
            echo "-";
            echo ($context["product_id"] ?? null);
            echo "\" />
\t\t\t\t\t";
            // line 136
            if (($context["swatches_images"] ?? null)) {
                // line 137
                echo "\t\t\t\t\t\t<input type=\"hidden\" value=\"";
                echo ($context["thumb"] ?? null);
                echo "\" class=\"img-default-";
                echo ($context["section_id"] ?? null);
                echo "-";
                echo ($context["product_id"] ?? null);
                echo "\" />
\t\t\t\t\t\t";
                // line 138
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["swatches_images"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["s_image"]) {
                    // line 139
                    echo "\t\t\t\t\t\t\t<input type=\"hidden\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["s_image"], "image", [], "any", false, false, false, 139);
                    echo "\" class=\"img-swatch-";
                    echo ($context["section_id"] ?? null);
                    echo "-";
                    echo ($context["product_id"] ?? null);
                    echo "-";
                    echo twig_get_attribute($this->env, $this->source, $context["s_image"], "product_option_value_id", [], "any", false, false, false, 139);
                    echo "\" />
\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s_image'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 141
                echo "\t\t\t\t\t";
            }
            // line 142
            echo "\t\t\t\t</a>
\t\t\t</div>
\t\t\t<div class=\"caption\">
\t\t\t\t<div class=\"inner\">
\t\t\t\t";
            // line 146
            if (($context["options"] ?? null)) {
                // line 147
                echo "\t\t\t\t\t<div class=\"category-options product-options\">
\t\t\t\t\t";
                // line 148
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                    // line 149
                    echo "\t\t\t\t\t\t<ul class=\"ul-swatches-colors\">
\t\t\t\t\t\t\t";
                    // line 150
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 150));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 151
                        echo "\t\t\t\t\t\t\t\t<li class=\"swatches-options\">
\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" onclick=\"swatches.changeModuleSwatches(\$(this));\" title=\"";
                        // line 152
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 152);
                        echo "\"
\t\t\t\t\t\t\t\t\t   style=\"";
                        // line 153
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 153)) {
                            echo " width: 12px; height: 12px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tbackground-image: url('";
                            // line 154
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 154);
                            echo "') ";
                        }
                        echo "\"
\t\t\t\t\t\t\t\t\t   data-module-id=\"";
                        // line 155
                        echo ($context["section_id"] ?? null);
                        echo "\"
\t\t\t\t\t\t\t\t\t   data-product-id=\"";
                        // line 156
                        echo ($context["product_id"] ?? null);
                        echo "\"
\t\t\t\t\t\t\t\t\t   data-product-option-value-id=\"";
                        // line 157
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 157);
                        echo "\">";
                        if ( !twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 157)) {
                            echo " ";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 157);
                            echo " ";
                        }
                        echo "</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 160
                    echo "\t\t\t\t\t\t</ul>
\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 162
                echo "\t\t\t\t\t</div>
\t\t\t\t";
            }
            // line 164
            echo "\t\t\t\t
\t\t\t\t<h4><a href=\"";
            // line 165
            echo ($context["href"] ?? null);
            echo "\">";
            echo ($context["name"] ?? null);
            echo "</a></h4>
\t\t\t\t";
            // line 166
            if (($context["manufacturer"] ?? null)) {
                // line 167
                echo "\t\t\t\t\t<p class=\"manufacture-product\">
\t\t\t\t\t\t<a href=\"";
                // line 168
                echo ($context["manufacturer_href"] ?? null);
                echo "\">";
                echo ($context["manufacturer"] ?? null);
                echo "</a>
\t\t\t\t\t</p>
\t\t\t\t";
            }
            // line 171
            echo "\t\t\t\t";
            if ((($context["show_price"] ?? null) && ($context["price"] ?? null))) {
                // line 172
                echo "\t\t\t\t\t<p class=\"price\">
\t\t\t\t\t\t";
                // line 173
                if ( !($context["special"] ?? null)) {
                    // line 174
                    echo "\t\t\t\t\t\t\t";
                    echo ($context["price"] ?? null);
                    echo "
\t\t\t\t\t\t";
                } else {
                    // line 176
                    echo "\t\t\t\t\t\t\t<span class=\"price-new\">";
                    echo ($context["special"] ?? null);
                    echo "</span> <span class=\"price-old\">";
                    echo ($context["price"] ?? null);
                    echo "</span>
\t\t\t\t\t\t";
                }
                // line 178
                echo "\t\t\t\t\t\t";
                if (($context["tax"] ?? null)) {
                    // line 179
                    echo "\t\t\t\t\t\t\t<span class=\"price-tax\">";
                    echo ($context["text_tax"] ?? null);
                    echo " ";
                    echo ($context["tax"] ?? null);
                    echo "</span>
\t\t\t\t\t\t";
                }
                // line 181
                echo "\t\t\t\t\t</p>
\t\t\t\t";
            }
            // line 183
            echo "\t\t\t\t";
            if ((($context["show_description"] ?? null) && ($context["description"] ?? null))) {
                // line 184
                echo "\t\t\t\t\t<p class=\"product-description\">";
                echo ($context["description"] ?? null);
                echo "</p>
\t\t\t\t";
            }
            // line 186
            echo "\t\t\t\t";
            if ((($context["show_countdown"] ?? null) && ($context["date_end"] ?? null))) {
                // line 187
                echo "\t\t\t\t\t<p class=\"text-countdown\">";
                echo ($context["text_countdown"] ?? null);
                echo "</p>
\t\t\t\t\t<div class=\"countdown-box countdown-product-";
                // line 188
                echo ($context["product_id"] ?? null);
                echo "\" data-id=\"";
                echo ($context["product_id"] ?? null);
                echo "\" data-date=\"";
                echo ($context["date_end"] ?? null);
                echo "\">
\t\t\t\t\t\t<div class=\"inner\">
\t\t\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t\t\t<b class=\"day\"></b><span>";
                // line 191
                echo ($context["text_days"] ?? null);
                echo "</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t\t\t<b class=\"hour\"></b><span>";
                // line 194
                echo ($context["text_hours"] ?? null);
                echo "</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t\t\t<b class=\"min\"></b><span>";
                // line 197
                echo ($context["text_mins"] ?? null);
                echo "</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t\t\t<b class=\"sec\"></b><span>";
                // line 200
                echo ($context["text_secs"] ?? null);
                echo "</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
            }
            // line 205
            echo "\t\t\t\t";
            if ((((($context["show_cart"] ?? null) || ($context["show_wishlist"] ?? null)) || ($context["show_compare"] ?? null)) || ($context["show_quickview"] ?? null))) {
                // line 206
                echo "\t\t\t\t\t<div class=\"button-group\">
\t\t\t\t\t\t<div class=\"inner\">
\t\t\t\t\t\t\t";
                // line 208
                if (($context["show_cart"] ?? null)) {
                    // line 209
                    echo "\t\t\t\t\t\t\t\t<button type=\"button\" class=\"button-cart\" onclick=\"cart.add('";
                    echo ($context["product_id"] ?? null);
                    echo "');\" title=\"";
                    echo ($context["button_cart"] ?? null);
                    echo "\"><span>";
                    echo ($context["button_cart"] ?? null);
                    echo "</span></button>
\t\t\t\t\t\t\t";
                }
                // line 211
                echo "\t\t\t\t\t\t\t";
                if (($context["show_quickview"] ?? null)) {
                    // line 212
                    echo "\t\t\t\t\t\t\t\t<button type=\"button\" title=\"";
                    echo ($context["button_quickview"] ?? null);
                    echo "\" class=\"button-quickview\" onclick=\"ptquickview.ajaxView('";
                    echo ($context["href"] ?? null);
                    echo "')\"><span>";
                    echo ($context["button_quickview"] ?? null);
                    echo "</span></button>
\t\t\t\t\t\t\t";
                }
                // line 214
                echo "\t\t\t\t\t\t\t";
                if (($context["show_wishlist"] ?? null)) {
                    // line 215
                    echo "\t\t\t\t\t\t\t\t<button type=\"button\"  title=\"";
                    echo ($context["button_wishlist"] ?? null);
                    echo "\" class=\"button-wishlist\" onclick=\"wishlist.add('";
                    echo ($context["product_id"] ?? null);
                    echo "');\"><span>";
                    echo ($context["button_wishlist"] ?? null);
                    echo "</span></button>
\t\t\t\t\t\t\t";
                }
                // line 217
                echo "\t\t\t\t\t\t\t";
                if (($context["show_compare"] ?? null)) {
                    // line 218
                    echo "\t\t\t\t\t\t\t\t<button type=\"button\"  title=\"";
                    echo ($context["button_compare"] ?? null);
                    echo "\" class=\"button-compare\" onclick=\"compare.add('";
                    echo ($context["product_id"] ?? null);
                    echo "');\"><span>";
                    echo ($context["button_compare"] ?? null);
                    echo "</span></button>
\t\t\t\t\t\t\t";
                }
                // line 220
                echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
            }
            // line 223
            echo "\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
";
        }
        // line 228
        echo "
";
        // line 229
        if ((($context["layout_type"] ?? null) == "other")) {
            // line 230
            echo "    ";
            // line 231
            echo "\t<div class=\"other-style\">
\t\t<div class=\"product-item\">\t
\t\t\t
\t\t\t<div class=\"image ";
            // line 234
            if (($context["rotate_image"] ?? null)) {
                echo "rotate-image-container";
            }
            echo "\">
\t\t\t\t";
            // line 235
            if ((($context["show_label"] ?? null) && (($context["special"] ?? null) || ($context["is_new"] ?? null)))) {
                // line 236
                echo "\t\t\t\t\t<div class=\"box-label\">
\t\t\t\t\t\t";
                // line 237
                if (($context["special"] ?? null)) {
                    // line 238
                    echo "\t\t\t\t\t\t\t<div><span class=\"pro-label sale\">";
                    echo ($context["text_sale"] ?? null);
                    echo "</span></div>
\t\t\t\t\t\t";
                }
                // line 240
                echo "\t\t\t\t\t\t";
                if (($context["is_new"] ?? null)) {
                    // line 241
                    echo "\t\t\t\t\t\t\t<div><span class=\"pro-label new\">";
                    echo ($context["text_new"] ?? null);
                    echo "</span></div>
\t\t\t\t\t\t";
                }
                // line 243
                echo "\t\t\t\t\t</div>
\t\t\t\t";
            }
            // line 245
            echo "\t\t\t\t<a href=\"";
            echo ($context["href"] ?? null);
            echo "\">
\t\t\t\t\t";
            // line 246
            if (($context["rotate_image"] ?? null)) {
                // line 247
                echo "\t\t\t\t\t\t<img ";
                if (($context["lazy_load"] ?? null)) {
                    echo " src=\"";
                    echo ($context["loader_img"] ?? null);
                    echo "\" data-src=\"";
                    echo ($context["rotate_image"] ?? null);
                    echo "\" width=\"";
                    echo ($context["img_width"] ?? null);
                    echo "\" height=\"";
                    echo ($context["img_height"] ?? null);
                    echo "\" ";
                } else {
                    echo " src=\"";
                    echo ($context["rotate_image"] ?? null);
                    echo "\" ";
                }
                echo "  alt=\"";
                echo ($context["name"] ?? null);
                echo "\" title=\"";
                echo ($context["name"] ?? null);
                echo "\" class=\"img-responsive img-rotate-image ";
                if (($context["lazy_load"] ?? null)) {
                    echo " lazyload ";
                }
                echo "\" />
\t\t\t\t\t";
            }
            // line 249
            echo "\t\t\t\t\t<img ";
            if (($context["lazy_load"] ?? null)) {
                echo " src=\"";
                echo ($context["loader_img"] ?? null);
                echo "\" data-src=\"";
                echo ($context["thumb"] ?? null);
                echo "\" width=\"";
                echo ($context["img_width"] ?? null);
                echo "\" height=\"";
                echo ($context["img_height"] ?? null);
                echo "\" ";
            } else {
                echo " src=\"";
                echo ($context["thumb"] ?? null);
                echo "\" ";
            }
            echo " alt=\"";
            echo ($context["name"] ?? null);
            echo "\" title=\"";
            echo ($context["name"] ?? null);
            echo "\" class=\"";
            if (($context["lazy_load"] ?? null)) {
                echo " lazyload ";
            }
            echo " img-responsive img-mod-";
            echo ($context["section_id"] ?? null);
            echo "-";
            echo ($context["product_id"] ?? null);
            echo "\" />
\t\t\t\t\t";
            // line 250
            if (($context["swatches_images"] ?? null)) {
                // line 251
                echo "\t\t\t\t\t\t<input type=\"hidden\" value=\"";
                echo ($context["thumb"] ?? null);
                echo "\" class=\"img-default-";
                echo ($context["section_id"] ?? null);
                echo "-";
                echo ($context["product_id"] ?? null);
                echo "\" />
\t\t\t\t\t\t";
                // line 252
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["swatches_images"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["s_image"]) {
                    // line 253
                    echo "\t\t\t\t\t\t\t<input type=\"hidden\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["s_image"], "image", [], "any", false, false, false, 253);
                    echo "\" class=\"img-swatch-";
                    echo ($context["section_id"] ?? null);
                    echo "-";
                    echo ($context["product_id"] ?? null);
                    echo "-";
                    echo twig_get_attribute($this->env, $this->source, $context["s_image"], "product_option_value_id", [], "any", false, false, false, 253);
                    echo "\" />
\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s_image'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 255
                echo "\t\t\t\t\t";
            }
            // line 256
            echo "\t\t\t\t</a>
\t\t\t</div>
\t\t\t<div class=\"caption\">
\t\t\t\t";
            // line 259
            if (($context["options"] ?? null)) {
                // line 260
                echo "\t\t\t\t\t<div class=\"category-options product-options\">
\t\t\t\t\t";
                // line 261
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                    // line 262
                    echo "\t\t\t\t\t\t<ul class=\"ul-swatches-colors\">
\t\t\t\t\t\t\t";
                    // line 263
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 263));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 264
                        echo "\t\t\t\t\t\t\t\t<li class=\"swatches-options\">
\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" onclick=\"swatches.changeModuleSwatches(\$(this));\" title=\"";
                        // line 265
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 265);
                        echo "\"
\t\t\t\t\t\t\t\t\t   style=\"";
                        // line 266
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 266)) {
                            echo " width: 12px; height: 12px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tbackground-image: url('";
                            // line 267
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 267);
                            echo "') ";
                        }
                        echo "\"
\t\t\t\t\t\t\t\t\t   data-module-id=\"";
                        // line 268
                        echo ($context["section_id"] ?? null);
                        echo "\"
\t\t\t\t\t\t\t\t\t   data-product-id=\"";
                        // line 269
                        echo ($context["product_id"] ?? null);
                        echo "\"
\t\t\t\t\t\t\t\t\t   data-product-option-value-id=\"";
                        // line 270
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 270);
                        echo "\">";
                        if ( !twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 270)) {
                            echo " ";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 270);
                            echo " ";
                        }
                        echo "</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 273
                    echo "\t\t\t\t\t\t</ul>
\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 275
                echo "\t\t\t\t\t</div>
\t\t\t\t";
            }
            // line 277
            echo "\t\t\t\t<h4><a href=\"";
            echo ($context["href"] ?? null);
            echo "\">";
            echo ($context["name"] ?? null);
            echo "</a></h4>
\t\t\t\t";
            // line 278
            if (($context["manufacturer"] ?? null)) {
                // line 279
                echo "\t\t\t\t\t<p class=\"manufacture-product\">
\t\t\t\t\t\t<a href=\"";
                // line 280
                echo ($context["manufacturer_href"] ?? null);
                echo "\">";
                echo ($context["manufacturer"] ?? null);
                echo "</a>
\t\t\t\t\t</p>
\t\t\t\t";
            }
            // line 283
            echo "\t\t\t\t";
            if ((($context["show_price"] ?? null) && ($context["price"] ?? null))) {
                // line 284
                echo "\t\t\t\t\t<p class=\"price\">
\t\t\t\t\t\t";
                // line 285
                if ( !($context["special"] ?? null)) {
                    // line 286
                    echo "\t\t\t\t\t\t\t";
                    echo ($context["price"] ?? null);
                    echo "
\t\t\t\t\t\t";
                } else {
                    // line 288
                    echo "\t\t\t\t\t\t\t<span class=\"price-new\">";
                    echo ($context["special"] ?? null);
                    echo "</span> <span class=\"price-old\">";
                    echo ($context["price"] ?? null);
                    echo "</span>
\t\t\t\t\t\t";
                }
                // line 290
                echo "\t\t\t\t\t\t";
                if (($context["tax"] ?? null)) {
                    // line 291
                    echo "\t\t\t\t\t\t\t<span class=\"price-tax\">";
                    echo ($context["text_tax"] ?? null);
                    echo " ";
                    echo ($context["tax"] ?? null);
                    echo "</span>
\t\t\t\t\t\t";
                }
                // line 293
                echo "\t\t\t\t\t</p>
\t\t\t\t";
            }
            // line 295
            echo "\t\t\t\t
\t\t\t\t";
            // line 296
            if ((($context["show_description"] ?? null) && ($context["description"] ?? null))) {
                // line 297
                echo "\t\t\t\t\t<p>";
                echo ($context["description"] ?? null);
                echo "</p>
\t\t\t\t";
            }
            // line 299
            echo "\t\t\t\t";
            if ((($context["show_countdown"] ?? null) && ($context["date_end"] ?? null))) {
                // line 300
                echo "\t\t\t\t\t<p class=\"text-countdown\">";
                echo ($context["text_countdown"] ?? null);
                echo "</p>
\t\t\t\t\t<div class=\"countdown-box countdown-product-";
                // line 301
                echo ($context["product_id"] ?? null);
                echo "\" data-id=\"";
                echo ($context["product_id"] ?? null);
                echo "\" data-date=\"";
                echo ($context["date_end"] ?? null);
                echo "\">
\t\t\t\t\t\t<div class=\"inner\">
\t\t\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t\t\t<b class=\"day\"></b><span>";
                // line 304
                echo ($context["text_days"] ?? null);
                echo "</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t\t\t<b class=\"hour\"></b><span>";
                // line 307
                echo ($context["text_hours"] ?? null);
                echo "</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t\t\t<b class=\"min\"></b><span>";
                // line 310
                echo ($context["text_mins"] ?? null);
                echo "</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t\t\t<b class=\"sec\"></b><span>";
                // line 313
                echo ($context["text_secs"] ?? null);
                echo "</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
            }
            // line 318
            echo "\t\t\t\t";
            if ((((($context["show_cart"] ?? null) || ($context["show_wishlist"] ?? null)) || ($context["show_compare"] ?? null)) || ($context["show_quickview"] ?? null))) {
                // line 319
                echo "\t\t\t\t\t<div class=\"button-group\">
\t\t\t\t\t\t<div class=\"inner\">
\t\t\t\t\t\t\t";
                // line 321
                if (($context["show_cart"] ?? null)) {
                    // line 322
                    echo "\t\t\t\t\t\t\t\t<button type=\"button\" class=\"button-cart\" onclick=\"cart.add('";
                    echo ($context["product_id"] ?? null);
                    echo "');\" title=\"";
                    echo ($context["button_cart"] ?? null);
                    echo "\"><span>";
                    echo ($context["button_cart"] ?? null);
                    echo "</span></button>
\t\t\t\t\t\t\t";
                }
                // line 324
                echo "\t\t\t\t\t\t\t";
                if (($context["show_quickview"] ?? null)) {
                    // line 325
                    echo "\t\t\t\t\t\t\t\t<button type=\"button\" title=\"";
                    echo ($context["button_quickview"] ?? null);
                    echo "\" class=\"button-quickview\" onclick=\"ptquickview.ajaxView('";
                    echo ($context["href"] ?? null);
                    echo "')\"><span>";
                    echo ($context["button_quickview"] ?? null);
                    echo "</span></button>
\t\t\t\t\t\t\t";
                }
                // line 327
                echo "\t\t\t\t\t\t\t";
                if (($context["show_wishlist"] ?? null)) {
                    // line 328
                    echo "\t\t\t\t\t\t\t\t<button type=\"button\"  title=\"";
                    echo ($context["button_wishlist"] ?? null);
                    echo "\" class=\"button-wishlist\" onclick=\"wishlist.add('";
                    echo ($context["product_id"] ?? null);
                    echo "');\"><span>";
                    echo ($context["button_wishlist"] ?? null);
                    echo "</span></button>
\t\t\t\t\t\t\t";
                }
                // line 330
                echo "\t\t\t\t\t\t\t";
                if (($context["show_compare"] ?? null)) {
                    // line 331
                    echo "\t\t\t\t\t\t\t\t<button type=\"button\"  title=\"";
                    echo ($context["button_compare"] ?? null);
                    echo "\" class=\"button-compare\" onclick=\"compare.add('";
                    echo ($context["product_id"] ?? null);
                    echo "');\"><span>";
                    echo ($context["button_compare"] ?? null);
                    echo "</span></button>
\t\t\t\t\t\t\t";
                }
                // line 333
                echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
            }
            // line 336
            echo "\t\t\t</div>
\t\t</div>
\t</div>
";
        }
    }

    public function getTemplateName()
    {
        return "tt_safira3/template/plaza/module/ptproducts/content.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1227 => 336,  1222 => 333,  1212 => 331,  1209 => 330,  1199 => 328,  1196 => 327,  1186 => 325,  1183 => 324,  1173 => 322,  1171 => 321,  1167 => 319,  1164 => 318,  1156 => 313,  1150 => 310,  1144 => 307,  1138 => 304,  1128 => 301,  1123 => 300,  1120 => 299,  1114 => 297,  1112 => 296,  1109 => 295,  1105 => 293,  1097 => 291,  1094 => 290,  1086 => 288,  1080 => 286,  1078 => 285,  1075 => 284,  1072 => 283,  1064 => 280,  1061 => 279,  1059 => 278,  1052 => 277,  1048 => 275,  1041 => 273,  1026 => 270,  1022 => 269,  1018 => 268,  1012 => 267,  1008 => 266,  1004 => 265,  1001 => 264,  997 => 263,  994 => 262,  990 => 261,  987 => 260,  985 => 259,  980 => 256,  977 => 255,  962 => 253,  958 => 252,  949 => 251,  947 => 250,  916 => 249,  888 => 247,  886 => 246,  881 => 245,  877 => 243,  871 => 241,  868 => 240,  862 => 238,  860 => 237,  857 => 236,  855 => 235,  849 => 234,  844 => 231,  842 => 230,  840 => 229,  837 => 228,  830 => 223,  825 => 220,  815 => 218,  812 => 217,  802 => 215,  799 => 214,  789 => 212,  786 => 211,  776 => 209,  774 => 208,  770 => 206,  767 => 205,  759 => 200,  753 => 197,  747 => 194,  741 => 191,  731 => 188,  726 => 187,  723 => 186,  717 => 184,  714 => 183,  710 => 181,  702 => 179,  699 => 178,  691 => 176,  685 => 174,  683 => 173,  680 => 172,  677 => 171,  669 => 168,  666 => 167,  664 => 166,  658 => 165,  655 => 164,  651 => 162,  644 => 160,  629 => 157,  625 => 156,  621 => 155,  615 => 154,  611 => 153,  607 => 152,  604 => 151,  600 => 150,  597 => 149,  593 => 148,  590 => 147,  588 => 146,  582 => 142,  579 => 141,  564 => 139,  560 => 138,  551 => 137,  549 => 136,  518 => 135,  490 => 133,  488 => 132,  483 => 131,  479 => 129,  473 => 127,  470 => 126,  464 => 124,  462 => 123,  459 => 122,  457 => 121,  451 => 120,  447 => 118,  445 => 117,  443 => 116,  440 => 115,  429 => 110,  423 => 108,  421 => 107,  418 => 106,  414 => 104,  406 => 102,  403 => 101,  395 => 99,  389 => 97,  387 => 96,  384 => 95,  381 => 94,  373 => 91,  370 => 90,  368 => 89,  362 => 88,  359 => 87,  355 => 85,  348 => 83,  333 => 80,  329 => 79,  325 => 78,  319 => 77,  315 => 76,  311 => 75,  308 => 74,  304 => 73,  301 => 72,  297 => 71,  294 => 70,  292 => 69,  289 => 68,  285 => 66,  279 => 64,  276 => 63,  270 => 61,  268 => 60,  265 => 59,  263 => 58,  258 => 55,  250 => 50,  244 => 47,  238 => 44,  232 => 41,  222 => 38,  217 => 37,  214 => 36,  209 => 33,  199 => 31,  196 => 30,  186 => 28,  183 => 27,  173 => 25,  170 => 24,  160 => 22,  158 => 21,  154 => 19,  152 => 18,  149 => 17,  146 => 16,  131 => 14,  127 => 13,  118 => 12,  116 => 11,  85 => 10,  57 => 8,  55 => 7,  51 => 6,  45 => 5,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "tt_safira3/template/plaza/module/ptproducts/content.twig", "");
    }
}
