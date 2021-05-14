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

/* tt_safira4/template/plaza/module/ptproducts/content.twig */
class __TwigTemplate_8a7741fa64ed68d0e42e64c8434fb62ce3434faa369897fe90aae56e60b64c38 extends \Twig\Template
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
                    echo " src=\"data:image/svg+xml,%20%3Csvg%20viewBox%3D%220%200%20224%20156%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E\" data-src=\"";
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
                echo " src=\"data:image/svg+xml,%20%3Csvg%20viewBox%3D%220%200%20224%20156%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E\" data-src=\"";
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
            echo "\t\t\t</div>
\t\t\t<div class=\"caption\">
\t\t\t\t
\t\t\t\t";
            // line 39
            if ((($context["show_label"] ?? null) && (($context["special"] ?? null) || ($context["is_new"] ?? null)))) {
                // line 40
                echo "\t\t\t\t\t<div class=\"box-label\">
\t\t\t\t\t\t";
                // line 41
                if (($context["special"] ?? null)) {
                    // line 42
                    echo "\t\t\t\t\t\t\t<div><span class=\"pro-label sale\">";
                    echo ($context["text_sale"] ?? null);
                    echo "</span></div>
\t\t\t\t\t\t";
                }
                // line 44
                echo "\t\t\t\t\t\t";
                if (($context["is_new"] ?? null)) {
                    // line 45
                    echo "\t\t\t\t\t\t\t<div><span class=\"pro-label new\">";
                    echo ($context["text_new"] ?? null);
                    echo "</span></div>
\t\t\t\t\t\t";
                }
                // line 47
                echo "\t\t\t\t\t</div>
\t\t\t\t";
            }
            // line 49
            echo "\t\t\t\t
\t\t\t\t";
            // line 50
            if (($context["options"] ?? null)) {
                // line 51
                echo "\t\t\t\t\t<div class=\"category-options product-options\">
\t\t\t\t\t";
                // line 52
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                    // line 53
                    echo "\t\t\t\t\t\t<ul class=\"ul-swatches-colors\">
\t\t\t\t\t\t\t";
                    // line 54
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 54));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 55
                        echo "\t\t\t\t\t\t\t\t<li class=\"swatches-options\">
\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" onclick=\"swatches.changeModuleSwatches(\$(this));\" title=\"";
                        // line 56
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 56);
                        echo "\"
\t\t\t\t\t\t\t\t\t   style=\"";
                        // line 57
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 57)) {
                            echo " width: 12px; height: 12px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tbackground-image: url('";
                            // line 58
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 58);
                            echo "') ";
                        }
                        echo "\"
\t\t\t\t\t\t\t\t\t   data-module-id=\"";
                        // line 59
                        echo ($context["section_id"] ?? null);
                        echo "\"
\t\t\t\t\t\t\t\t\t   data-product-id=\"";
                        // line 60
                        echo ($context["product_id"] ?? null);
                        echo "\"
\t\t\t\t\t\t\t\t\t   data-product-option-value-id=\"";
                        // line 61
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 61);
                        echo "\">";
                        if ( !twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 61)) {
                            echo " ";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 61);
                            echo " ";
                        }
                        echo "</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 64
                    echo "\t\t\t\t\t\t</ul>
\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 66
                echo "\t\t\t\t\t</div>
\t\t\t\t";
            }
            // line 68
            echo "\t\t\t\t
\t\t\t\t<h4><a href=\"";
            // line 69
            echo ($context["href"] ?? null);
            echo "\">";
            echo ($context["name"] ?? null);
            echo "</a></h4>
\t\t\t\t";
            // line 70
            if (($context["manufacturer"] ?? null)) {
                // line 71
                echo "\t\t\t\t\t<p class=\"manufacture-product\">
\t\t\t\t\t\t<a href=\"";
                // line 72
                echo ($context["manufacturer_href"] ?? null);
                echo "\">";
                echo ($context["manufacturer"] ?? null);
                echo "</a>
\t\t\t\t\t</p>
\t\t\t\t";
            }
            // line 75
            echo "\t\t\t\t";
            if ((($context["show_price"] ?? null) && ($context["price"] ?? null))) {
                // line 76
                echo "\t\t\t\t\t<p class=\"price\">
\t\t\t\t\t\t";
                // line 77
                if ( !($context["special"] ?? null)) {
                    // line 78
                    echo "\t\t\t\t\t\t\t";
                    echo ($context["price"] ?? null);
                    echo "
\t\t\t\t\t\t";
                } else {
                    // line 80
                    echo "\t\t\t\t\t\t\t<span class=\"price-new\">";
                    echo ($context["special"] ?? null);
                    echo "</span> <span class=\"price-old\">";
                    echo ($context["price"] ?? null);
                    echo "</span>
\t\t\t\t\t\t";
                }
                // line 82
                echo "\t\t\t\t\t\t";
                if (($context["tax"] ?? null)) {
                    // line 83
                    echo "\t\t\t\t\t\t\t<span class=\"price-tax\">";
                    echo ($context["text_tax"] ?? null);
                    echo " ";
                    echo ($context["tax"] ?? null);
                    echo "</span>
\t\t\t\t\t\t";
                }
                // line 85
                echo "\t\t\t\t\t</p>
\t\t\t\t";
            }
            // line 87
            echo "\t\t\t\t
\t\t\t\t";
            // line 88
            if ((($context["show_description"] ?? null) && ($context["description"] ?? null))) {
                // line 89
                echo "\t\t\t\t\t<p class=\"product-description\">";
                echo ($context["description"] ?? null);
                echo "</p>
\t\t\t\t";
            }
            // line 91
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
        // line 96
        echo "
";
        // line 97
        if ((($context["layout_type"] ?? null) == "list")) {
            // line 98
            echo "    ";
            // line 99
            echo "\t<div class=\"list-style\">
\t\t<div class=\"product-item\">\t
\t\t\t<div class=\"image ";
            // line 101
            if (($context["rotate_image"] ?? null)) {
                echo "rotate-image-container";
            }
            echo "\">
\t\t\t\t";
            // line 102
            if ((($context["show_label"] ?? null) && (($context["special"] ?? null) || ($context["is_new"] ?? null)))) {
                // line 103
                echo "\t\t\t\t\t<div class=\"box-label\">
\t\t\t\t\t\t";
                // line 104
                if (($context["special"] ?? null)) {
                    // line 105
                    echo "\t\t\t\t\t\t\t<div><span class=\"pro-label sale\">";
                    echo ($context["text_sale"] ?? null);
                    echo "</span></div>
\t\t\t\t\t\t";
                }
                // line 107
                echo "\t\t\t\t\t\t";
                if (($context["is_new"] ?? null)) {
                    // line 108
                    echo "\t\t\t\t\t\t\t<div><span class=\"pro-label new\">";
                    echo ($context["text_new"] ?? null);
                    echo "</span></div>
\t\t\t\t\t\t";
                }
                // line 110
                echo "\t\t\t\t\t</div>
\t\t\t\t";
            }
            // line 112
            echo "\t\t\t\t<a href=\"";
            echo ($context["href"] ?? null);
            echo "\">
\t\t\t\t\t";
            // line 113
            if (($context["rotate_image"] ?? null)) {
                // line 114
                echo "\t\t\t\t\t\t<img ";
                if (($context["lazy_load"] ?? null)) {
                    echo " src=\"data:image/svg+xml,%20%3Csvg%20viewBox%3D%220%200%20224%20156%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E\" data-src=\"";
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
            // line 116
            echo "\t\t\t\t\t<img ";
            if (($context["lazy_load"] ?? null)) {
                echo " src=\"data:image/svg+xml,%20%3Csvg%20viewBox%3D%220%200%20224%20156%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E\" data-src=\"";
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
            // line 117
            if (($context["swatches_images"] ?? null)) {
                // line 118
                echo "\t\t\t\t\t\t<input type=\"hidden\" value=\"";
                echo ($context["thumb"] ?? null);
                echo "\" class=\"img-default-";
                echo ($context["section_id"] ?? null);
                echo "-";
                echo ($context["product_id"] ?? null);
                echo "\" />
\t\t\t\t\t\t";
                // line 119
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["swatches_images"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["s_image"]) {
                    // line 120
                    echo "\t\t\t\t\t\t\t<input type=\"hidden\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["s_image"], "image", [], "any", false, false, false, 120);
                    echo "\" class=\"img-swatch-";
                    echo ($context["section_id"] ?? null);
                    echo "-";
                    echo ($context["product_id"] ?? null);
                    echo "-";
                    echo twig_get_attribute($this->env, $this->source, $context["s_image"], "product_option_value_id", [], "any", false, false, false, 120);
                    echo "\" />
\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s_image'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 122
                echo "\t\t\t\t\t";
            }
            // line 123
            echo "\t\t\t\t</a>
\t\t\t</div>
\t\t\t<div class=\"caption\">
\t\t\t\t<div class=\"inner\">
\t\t\t\t";
            // line 127
            if (($context["options"] ?? null)) {
                // line 128
                echo "\t\t\t\t\t<div class=\"category-options product-options\">
\t\t\t\t\t";
                // line 129
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                    // line 130
                    echo "\t\t\t\t\t\t<ul class=\"ul-swatches-colors\">
\t\t\t\t\t\t\t";
                    // line 131
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 131));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 132
                        echo "\t\t\t\t\t\t\t\t<li class=\"swatches-options\">
\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" onclick=\"swatches.changeModuleSwatches(\$(this));\" title=\"";
                        // line 133
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 133);
                        echo "\"
\t\t\t\t\t\t\t\t\t   style=\"";
                        // line 134
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 134)) {
                            echo " width: 12px; height: 12px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tbackground-image: url('";
                            // line 135
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 135);
                            echo "') ";
                        }
                        echo "\"
\t\t\t\t\t\t\t\t\t   data-module-id=\"";
                        // line 136
                        echo ($context["section_id"] ?? null);
                        echo "\"
\t\t\t\t\t\t\t\t\t   data-product-id=\"";
                        // line 137
                        echo ($context["product_id"] ?? null);
                        echo "\"
\t\t\t\t\t\t\t\t\t   data-product-option-value-id=\"";
                        // line 138
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 138);
                        echo "\">";
                        if ( !twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 138)) {
                            echo " ";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 138);
                            echo " ";
                        }
                        echo "</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 141
                    echo "\t\t\t\t\t\t</ul>
\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 143
                echo "\t\t\t\t\t</div>
\t\t\t\t";
            }
            // line 145
            echo "\t\t\t\t
\t\t\t\t<h4><a href=\"";
            // line 146
            echo ($context["href"] ?? null);
            echo "\">";
            echo ($context["name"] ?? null);
            echo "</a></h4>
\t\t\t\t";
            // line 147
            if (($context["manufacturer"] ?? null)) {
                // line 148
                echo "\t\t\t\t\t<p class=\"manufacture-product\">
\t\t\t\t\t\t<a href=\"";
                // line 149
                echo ($context["manufacturer_href"] ?? null);
                echo "\">";
                echo ($context["manufacturer"] ?? null);
                echo "</a>
\t\t\t\t\t</p>
\t\t\t\t";
            }
            // line 152
            echo "\t\t\t\t";
            if (($context["rating"] ?? null)) {
                // line 153
                echo "\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t";
                // line 154
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 155
                    echo "\t\t\t\t\t\t\t";
                    if ((($context["rating"] ?? null) < $context["i"])) {
                        // line 156
                        echo "\t\t\t\t\t\t\t\t<span class=\"icon-ratings\"><i class=\"icon-rating icon-rating-o\"></i></span>
\t\t\t\t\t\t\t";
                    } else {
                        // line 158
                        echo "\t\t\t\t\t\t\t\t<span class=\"icon-ratings\"><i class=\"icon-rating icon-rating-x\"></i></span>
\t\t\t\t\t\t\t";
                    }
                    // line 160
                    echo "\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 161
                echo "\t\t\t\t\t</div>
\t\t\t\t";
            }
            // line 163
            echo "\t\t\t\t";
            if ((($context["show_price"] ?? null) && ($context["price"] ?? null))) {
                // line 164
                echo "\t\t\t\t\t<p class=\"price\">
\t\t\t\t\t\t";
                // line 165
                if ( !($context["special"] ?? null)) {
                    // line 166
                    echo "\t\t\t\t\t\t\t";
                    echo ($context["price"] ?? null);
                    echo "
\t\t\t\t\t\t";
                } else {
                    // line 168
                    echo "\t\t\t\t\t\t\t<span class=\"price-new\">";
                    echo ($context["special"] ?? null);
                    echo "</span> <span class=\"price-old\">";
                    echo ($context["price"] ?? null);
                    echo "</span>
\t\t\t\t\t\t";
                }
                // line 170
                echo "\t\t\t\t\t\t";
                if (($context["tax"] ?? null)) {
                    // line 171
                    echo "\t\t\t\t\t\t\t<span class=\"price-tax\">";
                    echo ($context["text_tax"] ?? null);
                    echo " ";
                    echo ($context["tax"] ?? null);
                    echo "</span>
\t\t\t\t\t\t";
                }
                // line 173
                echo "\t\t\t\t\t</p>
\t\t\t\t";
            }
            // line 175
            echo "\t\t\t\t";
            if ((($context["show_description"] ?? null) && ($context["description"] ?? null))) {
                // line 176
                echo "\t\t\t\t\t<p class=\"product-description\">";
                echo ($context["description"] ?? null);
                echo "</p>
\t\t\t\t";
            }
            // line 178
            echo "\t\t\t\t";
            if ((($context["show_countdown"] ?? null) && ($context["date_end"] ?? null))) {
                // line 179
                echo "\t\t\t\t\t<p class=\"text-countdown\">";
                echo ($context["text_countdown"] ?? null);
                echo "</p>
\t\t\t\t\t<div class=\"countdown-box countdown-product-";
                // line 180
                echo ($context["product_id"] ?? null);
                echo "\" data-id=\"";
                echo ($context["product_id"] ?? null);
                echo "\" data-date=\"";
                echo ($context["date_end"] ?? null);
                echo "\">
\t\t\t\t\t\t<div class=\"inner\">
\t\t\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t\t\t<b class=\"day\"></b><span>";
                // line 183
                echo ($context["text_days"] ?? null);
                echo "</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t\t\t<b class=\"hour\"></b><span>";
                // line 186
                echo ($context["text_hours"] ?? null);
                echo "</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t\t\t<b class=\"min\"></b><span>";
                // line 189
                echo ($context["text_mins"] ?? null);
                echo "</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t\t\t<b class=\"sec\"></b><span>";
                // line 192
                echo ($context["text_secs"] ?? null);
                echo "</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
            }
            // line 197
            echo "\t\t\t\t";
            if ((((($context["show_cart"] ?? null) || ($context["show_wishlist"] ?? null)) || ($context["show_compare"] ?? null)) || ($context["show_quickview"] ?? null))) {
                // line 198
                echo "\t\t\t\t\t<div class=\"button-group\">
\t\t\t\t\t\t<div class=\"inner\">
\t\t\t\t\t\t\t";
                // line 200
                if (($context["show_cart"] ?? null)) {
                    // line 201
                    echo "\t\t\t\t\t\t\t\t<button type=\"button\" class=\"button-cart\" onclick=\"cart.add('";
                    echo ($context["product_id"] ?? null);
                    echo "');\" title=\"";
                    echo ($context["button_cart"] ?? null);
                    echo "\"><span>";
                    echo ($context["button_cart"] ?? null);
                    echo "</span></button>
\t\t\t\t\t\t\t";
                }
                // line 203
                echo "\t\t\t\t\t\t\t";
                if (($context["show_wishlist"] ?? null)) {
                    // line 204
                    echo "\t\t\t\t\t\t\t\t<button type=\"button\"  title=\"";
                    echo ($context["button_wishlist"] ?? null);
                    echo "\" class=\"button-wishlist\" onclick=\"wishlist.add('";
                    echo ($context["product_id"] ?? null);
                    echo "');\"><span>";
                    echo ($context["button_wishlist"] ?? null);
                    echo "</span></button>
\t\t\t\t\t\t\t";
                }
                // line 206
                echo "\t\t\t\t\t\t\t";
                if (($context["show_compare"] ?? null)) {
                    // line 207
                    echo "\t\t\t\t\t\t\t\t<button type=\"button\"  title=\"";
                    echo ($context["button_compare"] ?? null);
                    echo "\" class=\"button-compare\" onclick=\"compare.add('";
                    echo ($context["product_id"] ?? null);
                    echo "');\"><span>";
                    echo ($context["button_compare"] ?? null);
                    echo "</span></button>
\t\t\t\t\t\t\t";
                }
                // line 209
                echo "\t\t\t\t\t\t\t";
                if (($context["show_quickview"] ?? null)) {
                    // line 210
                    echo "\t\t\t\t\t\t\t\t<button type=\"button\" title=\"";
                    echo ($context["button_quickview"] ?? null);
                    echo "\" class=\"button-quickview\" onclick=\"ptquickview.ajaxView('";
                    echo ($context["href"] ?? null);
                    echo "')\"><span>";
                    echo ($context["button_quickview"] ?? null);
                    echo "</span></button>
\t\t\t\t\t\t\t";
                }
                // line 212
                echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
            }
            // line 215
            echo "\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
";
        }
        // line 220
        echo "
";
        // line 221
        if ((($context["layout_type"] ?? null) == "other")) {
            // line 222
            echo "    ";
            // line 223
            echo "\t<div class=\"other-style\">
\t\t<div class=\"product-item\">\t
\t\t\t
\t\t\t<div class=\"image ";
            // line 226
            if (($context["rotate_image"] ?? null)) {
                echo "rotate-image-container";
            }
            echo "\">
\t\t\t\t";
            // line 227
            if ((($context["show_label"] ?? null) && (($context["special"] ?? null) || ($context["is_new"] ?? null)))) {
                // line 228
                echo "\t\t\t\t\t<div class=\"box-label\">
\t\t\t\t\t\t";
                // line 229
                if (($context["special"] ?? null)) {
                    // line 230
                    echo "\t\t\t\t\t\t\t<div><span class=\"pro-label sale\">";
                    echo ($context["text_sale"] ?? null);
                    echo "</span></div>
\t\t\t\t\t\t";
                }
                // line 232
                echo "\t\t\t\t\t\t";
                if (($context["is_new"] ?? null)) {
                    // line 233
                    echo "\t\t\t\t\t\t\t<div><span class=\"pro-label new\">";
                    echo ($context["text_new"] ?? null);
                    echo "</span></div>
\t\t\t\t\t\t";
                }
                // line 235
                echo "\t\t\t\t\t</div>
\t\t\t\t";
            }
            // line 237
            echo "\t\t\t\t<a href=\"";
            echo ($context["href"] ?? null);
            echo "\">
\t\t\t\t\t";
            // line 238
            if (($context["rotate_image"] ?? null)) {
                // line 239
                echo "\t\t\t\t\t\t<img ";
                if (($context["lazy_load"] ?? null)) {
                    echo " src=\"data:image/svg+xml,%20%3Csvg%20viewBox%3D%220%200%20224%20156%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E\" data-src=\"";
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
            // line 241
            echo "\t\t\t\t\t<img ";
            if (($context["lazy_load"] ?? null)) {
                echo " src=\"data:image/svg+xml,%20%3Csvg%20viewBox%3D%220%200%20224%20156%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E\" data-src=\"";
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
            // line 242
            if (($context["swatches_images"] ?? null)) {
                // line 243
                echo "\t\t\t\t\t\t<input type=\"hidden\" value=\"";
                echo ($context["thumb"] ?? null);
                echo "\" class=\"img-default-";
                echo ($context["section_id"] ?? null);
                echo "-";
                echo ($context["product_id"] ?? null);
                echo "\" />
\t\t\t\t\t\t";
                // line 244
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["swatches_images"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["s_image"]) {
                    // line 245
                    echo "\t\t\t\t\t\t\t<input type=\"hidden\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["s_image"], "image", [], "any", false, false, false, 245);
                    echo "\" class=\"img-swatch-";
                    echo ($context["section_id"] ?? null);
                    echo "-";
                    echo ($context["product_id"] ?? null);
                    echo "-";
                    echo twig_get_attribute($this->env, $this->source, $context["s_image"], "product_option_value_id", [], "any", false, false, false, 245);
                    echo "\" />
\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s_image'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 247
                echo "\t\t\t\t\t";
            }
            // line 248
            echo "\t\t\t\t</a>
\t\t\t</div>
\t\t\t<div class=\"caption\">
\t\t\t\t";
            // line 251
            if (($context["options"] ?? null)) {
                // line 252
                echo "\t\t\t\t\t<div class=\"category-options product-options\">
\t\t\t\t\t";
                // line 253
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                    // line 254
                    echo "\t\t\t\t\t\t<ul class=\"ul-swatches-colors\">
\t\t\t\t\t\t\t";
                    // line 255
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 255));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 256
                        echo "\t\t\t\t\t\t\t\t<li class=\"swatches-options\">
\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" onclick=\"swatches.changeModuleSwatches(\$(this));\" title=\"";
                        // line 257
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 257);
                        echo "\"
\t\t\t\t\t\t\t\t\t   style=\"";
                        // line 258
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 258)) {
                            echo " width: 12px; height: 12px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tbackground-image: url('";
                            // line 259
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 259);
                            echo "') ";
                        }
                        echo "\"
\t\t\t\t\t\t\t\t\t   data-module-id=\"";
                        // line 260
                        echo ($context["section_id"] ?? null);
                        echo "\"
\t\t\t\t\t\t\t\t\t   data-product-id=\"";
                        // line 261
                        echo ($context["product_id"] ?? null);
                        echo "\"
\t\t\t\t\t\t\t\t\t   data-product-option-value-id=\"";
                        // line 262
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 262);
                        echo "\">";
                        if ( !twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 262)) {
                            echo " ";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 262);
                            echo " ";
                        }
                        echo "</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 265
                    echo "\t\t\t\t\t\t</ul>
\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 267
                echo "\t\t\t\t\t</div>
\t\t\t\t";
            }
            // line 269
            echo "\t\t\t\t<h4><a href=\"";
            echo ($context["href"] ?? null);
            echo "\">";
            echo ($context["name"] ?? null);
            echo "</a></h4>
\t\t\t\t";
            // line 270
            if (($context["manufacturer"] ?? null)) {
                // line 271
                echo "\t\t\t\t\t<p class=\"manufacture-product\">
\t\t\t\t\t\t<a href=\"";
                // line 272
                echo ($context["manufacturer_href"] ?? null);
                echo "\">";
                echo ($context["manufacturer"] ?? null);
                echo "</a>
\t\t\t\t\t</p>
\t\t\t\t";
            }
            // line 275
            echo "\t\t\t\t";
            if ((($context["show_price"] ?? null) && ($context["price"] ?? null))) {
                // line 276
                echo "\t\t\t\t\t<p class=\"price\">
\t\t\t\t\t\t";
                // line 277
                if ( !($context["special"] ?? null)) {
                    // line 278
                    echo "\t\t\t\t\t\t\t";
                    echo ($context["price"] ?? null);
                    echo "
\t\t\t\t\t\t";
                } else {
                    // line 280
                    echo "\t\t\t\t\t\t\t<span class=\"price-new\">";
                    echo ($context["special"] ?? null);
                    echo "</span> <span class=\"price-old\">";
                    echo ($context["price"] ?? null);
                    echo "</span>
\t\t\t\t\t\t";
                }
                // line 282
                echo "\t\t\t\t\t\t";
                if (($context["tax"] ?? null)) {
                    // line 283
                    echo "\t\t\t\t\t\t\t<span class=\"price-tax\">";
                    echo ($context["text_tax"] ?? null);
                    echo " ";
                    echo ($context["tax"] ?? null);
                    echo "</span>
\t\t\t\t\t\t";
                }
                // line 285
                echo "\t\t\t\t\t</p>
\t\t\t\t";
            }
            // line 287
            echo "\t\t\t\t
\t\t\t\t";
            // line 288
            if ((($context["show_description"] ?? null) && ($context["description"] ?? null))) {
                // line 289
                echo "\t\t\t\t\t<p>";
                echo ($context["description"] ?? null);
                echo "</p>
\t\t\t\t";
            }
            // line 291
            echo "\t\t\t\t";
            if ((($context["show_countdown"] ?? null) && ($context["date_end"] ?? null))) {
                // line 292
                echo "\t\t\t\t\t<p class=\"text-countdown\">";
                echo ($context["text_countdown"] ?? null);
                echo "</p>
\t\t\t\t\t<div class=\"countdown-box countdown-product-";
                // line 293
                echo ($context["product_id"] ?? null);
                echo "\" data-id=\"";
                echo ($context["product_id"] ?? null);
                echo "\" data-date=\"";
                echo ($context["date_end"] ?? null);
                echo "\">
\t\t\t\t\t\t<div class=\"inner\">
\t\t\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t\t\t<b class=\"day\"></b><span>";
                // line 296
                echo ($context["text_days"] ?? null);
                echo "</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t\t\t<b class=\"hour\"></b><span>";
                // line 299
                echo ($context["text_hours"] ?? null);
                echo "</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t\t\t<b class=\"min\"></b><span>";
                // line 302
                echo ($context["text_mins"] ?? null);
                echo "</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t\t\t<b class=\"sec\"></b><span>";
                // line 305
                echo ($context["text_secs"] ?? null);
                echo "</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
            }
            // line 310
            echo "\t\t\t\t";
            if ((((($context["show_cart"] ?? null) || ($context["show_wishlist"] ?? null)) || ($context["show_compare"] ?? null)) || ($context["show_quickview"] ?? null))) {
                // line 311
                echo "\t\t\t\t\t<div class=\"button-group\">
\t\t\t\t\t\t<div class=\"inner\">
\t\t\t\t\t\t\t";
                // line 313
                if (($context["show_cart"] ?? null)) {
                    // line 314
                    echo "\t\t\t\t\t\t\t\t<button type=\"button\" class=\"button-cart\" onclick=\"cart.add('";
                    echo ($context["product_id"] ?? null);
                    echo "');\" title=\"";
                    echo ($context["button_cart"] ?? null);
                    echo "\"><span>";
                    echo ($context["button_cart"] ?? null);
                    echo "</span></button>
\t\t\t\t\t\t\t";
                }
                // line 316
                echo "\t\t\t\t\t\t\t";
                if (($context["show_quickview"] ?? null)) {
                    // line 317
                    echo "\t\t\t\t\t\t\t\t<button type=\"button\" title=\"";
                    echo ($context["button_quickview"] ?? null);
                    echo "\" class=\"button-quickview\" onclick=\"ptquickview.ajaxView('";
                    echo ($context["href"] ?? null);
                    echo "')\"><span>";
                    echo ($context["button_quickview"] ?? null);
                    echo "</span></button>
\t\t\t\t\t\t\t";
                }
                // line 319
                echo "\t\t\t\t\t\t\t";
                if (($context["show_wishlist"] ?? null)) {
                    // line 320
                    echo "\t\t\t\t\t\t\t\t<button type=\"button\"  title=\"";
                    echo ($context["button_wishlist"] ?? null);
                    echo "\" class=\"button-wishlist\" onclick=\"wishlist.add('";
                    echo ($context["product_id"] ?? null);
                    echo "');\"><span>";
                    echo ($context["button_wishlist"] ?? null);
                    echo "</span></button>
\t\t\t\t\t\t\t";
                }
                // line 322
                echo "\t\t\t\t\t\t\t";
                if (($context["show_compare"] ?? null)) {
                    // line 323
                    echo "\t\t\t\t\t\t\t\t<button type=\"button\"  title=\"";
                    echo ($context["button_compare"] ?? null);
                    echo "\" class=\"button-compare\" onclick=\"compare.add('";
                    echo ($context["product_id"] ?? null);
                    echo "');\"><span>";
                    echo ($context["button_compare"] ?? null);
                    echo "</span></button>
\t\t\t\t\t\t\t";
                }
                // line 325
                echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
            }
            // line 328
            echo "\t\t\t</div>
\t\t</div>
\t</div>
";
        }
    }

    public function getTemplateName()
    {
        return "tt_safira4/template/plaza/module/ptproducts/content.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1202 => 328,  1197 => 325,  1187 => 323,  1184 => 322,  1174 => 320,  1171 => 319,  1161 => 317,  1158 => 316,  1148 => 314,  1146 => 313,  1142 => 311,  1139 => 310,  1131 => 305,  1125 => 302,  1119 => 299,  1113 => 296,  1103 => 293,  1098 => 292,  1095 => 291,  1089 => 289,  1087 => 288,  1084 => 287,  1080 => 285,  1072 => 283,  1069 => 282,  1061 => 280,  1055 => 278,  1053 => 277,  1050 => 276,  1047 => 275,  1039 => 272,  1036 => 271,  1034 => 270,  1027 => 269,  1023 => 267,  1016 => 265,  1001 => 262,  997 => 261,  993 => 260,  987 => 259,  983 => 258,  979 => 257,  976 => 256,  972 => 255,  969 => 254,  965 => 253,  962 => 252,  960 => 251,  955 => 248,  952 => 247,  937 => 245,  933 => 244,  924 => 243,  922 => 242,  893 => 241,  867 => 239,  865 => 238,  860 => 237,  856 => 235,  850 => 233,  847 => 232,  841 => 230,  839 => 229,  836 => 228,  834 => 227,  828 => 226,  823 => 223,  821 => 222,  819 => 221,  816 => 220,  809 => 215,  804 => 212,  794 => 210,  791 => 209,  781 => 207,  778 => 206,  768 => 204,  765 => 203,  755 => 201,  753 => 200,  749 => 198,  746 => 197,  738 => 192,  732 => 189,  726 => 186,  720 => 183,  710 => 180,  705 => 179,  702 => 178,  696 => 176,  693 => 175,  689 => 173,  681 => 171,  678 => 170,  670 => 168,  664 => 166,  662 => 165,  659 => 164,  656 => 163,  652 => 161,  646 => 160,  642 => 158,  638 => 156,  635 => 155,  631 => 154,  628 => 153,  625 => 152,  617 => 149,  614 => 148,  612 => 147,  606 => 146,  603 => 145,  599 => 143,  592 => 141,  577 => 138,  573 => 137,  569 => 136,  563 => 135,  559 => 134,  555 => 133,  552 => 132,  548 => 131,  545 => 130,  541 => 129,  538 => 128,  536 => 127,  530 => 123,  527 => 122,  512 => 120,  508 => 119,  499 => 118,  497 => 117,  468 => 116,  442 => 114,  440 => 113,  435 => 112,  431 => 110,  425 => 108,  422 => 107,  416 => 105,  414 => 104,  411 => 103,  409 => 102,  403 => 101,  399 => 99,  397 => 98,  395 => 97,  392 => 96,  381 => 91,  375 => 89,  373 => 88,  370 => 87,  366 => 85,  358 => 83,  355 => 82,  347 => 80,  341 => 78,  339 => 77,  336 => 76,  333 => 75,  325 => 72,  322 => 71,  320 => 70,  314 => 69,  311 => 68,  307 => 66,  300 => 64,  285 => 61,  281 => 60,  277 => 59,  271 => 58,  267 => 57,  263 => 56,  260 => 55,  256 => 54,  253 => 53,  249 => 52,  246 => 51,  244 => 50,  241 => 49,  237 => 47,  231 => 45,  228 => 44,  222 => 42,  220 => 41,  217 => 40,  215 => 39,  210 => 36,  205 => 33,  195 => 31,  192 => 30,  182 => 28,  179 => 27,  169 => 25,  166 => 24,  156 => 22,  154 => 21,  150 => 19,  148 => 18,  145 => 17,  142 => 16,  127 => 14,  123 => 13,  114 => 12,  112 => 11,  83 => 10,  57 => 8,  55 => 7,  51 => 6,  45 => 5,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "tt_safira4/template/plaza/module/ptproducts/content.twig", "");
    }
}
