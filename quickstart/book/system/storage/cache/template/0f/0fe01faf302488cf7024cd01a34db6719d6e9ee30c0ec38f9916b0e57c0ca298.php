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

/* tt_safira_book1/template/plaza/module/ptproducts.twig */
class __TwigTemplate_86cdee7e215a15f1a3e6348fbfeb4245fcd9bddb91159081439ac5b2f2d3feef extends \Twig\Template
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
        echo "
<div class=\"products-container ";
        // line 2
        echo ($context["layout_classname"] ?? null);
        echo " ";
        if ((($context["module_type"] ?? null) == "multi_tabs")) {
            echo "tabs-product";
        }
        echo " ";
        if (( !($context["title"] ?? null) &&  !($context["module_des"] ?? null))) {
            echo "module-no-title";
        }
        echo "\">
\t";
        // line 3
        if ((($context["title"] ?? null) || ($context["module_des"] ?? null))) {
            echo "\t
\t\t<div class=\"block-title\">
\t\t\t";
            // line 5
            if (($context["title"] ?? null)) {
                // line 6
                echo "\t\t\t<div class=\"title\"><span>";
                echo ((($context["title"] ?? null)) ? (($context["title"] ?? null)) : (($context["module_product_title"] ?? null)));
                echo "</span></div>
\t\t\t";
            }
            // line 8
            echo "\t\t\t";
            if (($context["module_des"] ?? null)) {
                // line 9
                echo "\t\t\t\t";
                echo ($context["module_des"] ?? null);
                echo "
\t\t\t";
            }
            // line 11
            echo "\t\t\t
\t\t</div>
\t";
        }
        // line 14
        echo "\t";
        if ((($context["module_type"] ?? null) == "multi_tabs")) {
            // line 15
            echo "\t\t<div class=\"tabs-style\">
\t\t\t<ul class=\"nav nav-tabs\">
\t\t\t\t";
            // line 17
            $context["tab_count"] = 0;
            // line 18
            echo "\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["tabs"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["tab"]) {
                // line 19
                echo "\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"javascript:void(0);\" data-tab=\"#tab-product-";
                // line 20
                echo ($context["module_id"] ?? null);
                echo "-";
                echo ($context["tab_count"] ?? null);
                echo "\">
\t\t\t\t\t\t\t";
                // line 21
                if (twig_get_attribute($this->env, $this->source, $context["tab"], "title_image", [], "any", false, false, false, 21)) {
                    // line 22
                    echo "\t\t\t\t\t\t\t\t<div class=\"image-thumb\">
\t\t\t\t\t\t\t\t\t<span>
                                        ";
                    // line 24
                    if (($context["lazy_load"] ?? null)) {
                        // line 25
                        echo "                                            <img class=\"lazyload\" src=\"";
                        echo ($context["loader_img"] ?? null);
                        echo "\" data-src=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["tab"], "title_image", [], "any", false, false, false, 25);
                        echo "\" alt=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["tab"], "title", [], "any", false, false, false, 25);
                        echo "\" />
                                        ";
                    } else {
                        // line 27
                        echo "                                            <img src=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["tab"], "title_image", [], "any", false, false, false, 27);
                        echo "\" alt=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["tab"], "title", [], "any", false, false, false, 27);
                        echo "\" />
                                        ";
                    }
                    // line 29
                    echo "                                    </span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                }
                // line 32
                echo "\t\t\t\t\t\t\t<span>";
                echo twig_get_attribute($this->env, $this->source, $context["tab"], "title", [], "any", false, false, false, 32);
                echo "</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t";
                // line 35
                $context["tab_count"] = (($context["tab_count"] ?? null) + 1);
                // line 36
                echo "\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tab'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo "\t\t\t</ul>
\t\t</div>
\t";
        }
        // line 40
        echo "    <div class=\"pt-content\">
        ";
        // line 42
        echo "        ";
        if ((($context["module_type"] ?? null) == "single_tab")) {
            // line 43
            echo "            ";
            if (($context["single_products"] ?? null)) {
                // line 44
                echo "                ";
                if ((($context["layout_type"] ?? null) == "slider")) {
                    // line 45
                    echo "                    <div class=\"swiper-viewport\">
                        <div class=\"swiper-container single-slides-";
                    // line 46
                    echo ($context["module_id"] ?? null);
                    echo "\">
                            <div class=\"swiper-wrapper\">
                                ";
                    // line 48
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["single_products"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                        // line 49
                        echo "                                <div class=\"product-thumb transition swiper-slide\">
                                    ";
                        // line 50
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "html", [], "any", false, false, false, 50);
                        echo "
                                </div>
                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 53
                    echo "                            </div>
                        </div>
                        ";
                    // line 55
                    if (twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "pagination", [], "any", false, false, false, 55)) {
                        // line 56
                        echo "                            <div class=\"swiper-pagination single-slides-pagination-";
                        echo ($context["module_id"] ?? null);
                        echo "\"></div>
                        ";
                    }
                    // line 58
                    echo "
                        ";
                    // line 59
                    if (twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "navigation", [], "any", false, false, false, 59)) {
                        // line 60
                        echo "                            <div class=\"swiper-pager\">
                                <div class=\"swiper-button-next swiper-button-next-";
                        // line 61
                        echo ($context["module_id"] ?? null);
                        echo "\"></div>
                                <div class=\"swiper-button-prev swiper-button-prev-";
                        // line 62
                        echo ($context["module_id"] ?? null);
                        echo "\"></div>
                            </div>
                        ";
                    }
                    // line 65
                    echo "                    </div>
                ";
                }
                // line 67
                echo "
                ";
                // line 68
                if ((($context["layout_type"] ?? null) == "large_item")) {
                    // line 69
                    echo "                    <div class=\"box-large-item\">
                        <div class=\"col col-large-item\">
                            <div class=\"fproduct-content\">
                                <div class=\"product-thumb\">
                                    ";
                    // line 73
                    echo twig_get_attribute($this->env, $this->source, ($context["single_first_product"] ?? null), "large_html", [], "any", false, false, false, 73);
                    echo "
                                </div>
                            </div>
                        </div>
\t\t\t\t\t\t<div class=\"col col-muti-items\">
                            <div class=\"swiper-viewport\">
                                <div class=\"swiper-container single-slides-";
                    // line 79
                    echo ($context["module_id"] ?? null);
                    echo "\">
                                    <div class=\"swiper-wrapper\">
                                        ";
                    // line 81
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["single_products_except_first"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                        // line 82
                        echo "                                            <div class=\"product-thumb transition swiper-slide\">
                                                ";
                        // line 83
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "html", [], "any", false, false, false, 83);
                        echo "
                                            </div>
                                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 86
                    echo "                                    </div>
                                </div>
                                ";
                    // line 88
                    if (twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "pagination", [], "any", false, false, false, 88)) {
                        // line 89
                        echo "                                    <div class=\"swiper-pagination single-slides-pagination-";
                        echo ($context["module_id"] ?? null);
                        echo "\"></div>
                                ";
                    }
                    // line 91
                    echo "
                                ";
                    // line 92
                    if (twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "navigation", [], "any", false, false, false, 92)) {
                        // line 93
                        echo "                                    <div class=\"swiper-pager\">
                                        <div class=\"swiper-button-next swiper-button-next-";
                        // line 94
                        echo ($context["module_id"] ?? null);
                        echo "\"></div>
                                        <div class=\"swiper-button-prev swiper-button-prev-";
                        // line 95
                        echo ($context["module_id"] ?? null);
                        echo "\"></div>
                                    </div>
                                ";
                    }
                    // line 98
                    echo "                            </div>
                        </div>
\t\t\t\t\t\t
                    </div>
                ";
                }
                // line 103
                echo "
                ";
                // line 104
                if ((($context["layout_type"] ?? null) == "image")) {
                    // line 105
                    echo "                    <div class=\"box-large-image\">
                        <div class=\"col col-large-image\">
                            <div class=\"image-content\">
                                ";
                    // line 108
                    if (($context["single_image_link"] ?? null)) {
                        // line 109
                        echo "\t\t\t\t\t\t\t\t\t<div class=\"pt-block\">
\t\t\t\t\t\t\t\t\t\t<div class=\"image\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                        // line 111
                        echo ($context["single_image_link"] ?? null);
                        echo "\">
                                                ";
                        // line 112
                        if (($context["lazy_load"] ?? null)) {
                            // line 113
                            echo "                                                    <img class=\"lazyload\" src=\"";
                            echo ($context["loader_img"] ?? null);
                            echo "\" data-src=\"";
                            echo ($context["single_image"] ?? null);
                            echo "\" alt=\"\" />
                                                ";
                        } else {
                            // line 115
                            echo "                                                    <img src=\"";
                            echo ($context["single_image"] ?? null);
                            echo "\" alt=\"\" />
                                                ";
                        }
                        // line 117
                        echo "\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
                                ";
                    } else {
                        // line 121
                        echo "                                    ";
                        if (($context["lazy_load"] ?? null)) {
                            // line 122
                            echo "                                        <img class=\"lazyload\" src=\"";
                            echo ($context["loader_img"] ?? null);
                            echo "\" data-src=\"";
                            echo ($context["single_image"] ?? null);
                            echo "\" alt=\"\" />
                                    ";
                        } else {
                            // line 124
                            echo "                                        <img src=\"";
                            echo ($context["single_image"] ?? null);
                            echo "\" alt=\"\" />
                                    ";
                        }
                        // line 126
                        echo "                                ";
                    }
                    // line 127
                    echo "                            </div>
                        </div>
                        <div class=\"col col-muti-items\">
                            <div class=\"swiper-viewport\">
                                <div class=\"swiper-container single-slides-";
                    // line 131
                    echo ($context["module_id"] ?? null);
                    echo "\">
                                    <div class=\"swiper-wrapper\">
                                        ";
                    // line 133
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["single_products"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                        // line 134
                        echo "                                            <div class=\"product-thumb transition swiper-slide\">
                                                ";
                        // line 135
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "html", [], "any", false, false, false, 135);
                        echo "
                                            </div>
                                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 138
                    echo "                                    </div>
                                </div>
                                ";
                    // line 140
                    if (twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "pagination", [], "any", false, false, false, 140)) {
                        // line 141
                        echo "                                    <div class=\"swiper-pagination single-slides-pagination-";
                        echo ($context["module_id"] ?? null);
                        echo "\"></div>
                                ";
                    }
                    // line 143
                    echo "
                                ";
                    // line 144
                    if (twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "navigation", [], "any", false, false, false, 144)) {
                        // line 145
                        echo "                                    <div class=\"swiper-pager\">
                                        <div class=\"swiper-button-next swiper-button-next-";
                        // line 146
                        echo ($context["module_id"] ?? null);
                        echo "\"></div>
                                        <div class=\"swiper-button-prev swiper-button-prev-";
                        // line 147
                        echo ($context["module_id"] ?? null);
                        echo "\"></div>
                                    </div>
                                ";
                    }
                    // line 150
                    echo "                            </div>
                        </div>
                    </div>
                ";
                }
                // line 154
                echo "
                <script>
                    var product_slides_";
                // line 156
                echo ($context["module_id"] ?? null);
                echo " = \$(\".single-slides-";
                echo ($context["module_id"] ?? null);
                echo "\").swiper({
                        spaceBetween:0,
                        ";
                // line 158
                if (twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "pagination", [], "any", false, false, false, 158)) {
                    // line 159
                    echo "                        pagination: '.single-slides-pagination-";
                    echo ($context["module_id"] ?? null);
                    echo "',
                        paginationClickable: true,
                        ";
                }
                // line 162
                echo "                        ";
                if (twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "navigation", [], "any", false, false, false, 162)) {
                    // line 163
                    echo "                        nextButton: '.swiper-button-next-";
                    echo ($context["module_id"] ?? null);
                    echo "',
                        prevButton: '.swiper-button-prev-";
                    // line 164
                    echo ($context["module_id"] ?? null);
                    echo "',
                        ";
                }
                // line 166
                echo "                        speed: ";
                if (twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "speed", [], "any", false, false, false, 166)) {
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "speed", [], "any", false, false, false, 166);
                    echo " ";
                } else {
                    echo " 500 ";
                }
                echo ",
\t\t\t\t\t\tpreloadImages: false,
\t\t\t\t\t\twatchSlidesVisibility: true,
                        slidesPerView: ";
                // line 169
                echo twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "item_desktop", [], "any", false, false, false, 169);
                echo ",
                        slidesPerColumn: ";
                // line 170
                echo twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "row_desktop", [], "any", false, false, false, 170);
                echo ",
                        breakpoints: {
\t\t\t\t\t\t\t1499: {
\t\t\t\t\t\t\t\tslidesPerView: ";
                // line 173
                echo twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "item_laptop", [], "any", false, false, false, 173);
                echo ",
\t\t\t\t\t\t\t\tslidesPerColumn: ";
                // line 174
                echo twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "row_laptop", [], "any", false, false, false, 174);
                echo "
\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t1199: {
\t\t\t\t\t\t\t\tslidesPerView: ";
                // line 177
                echo twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "item_tablet", [], "any", false, false, false, 177);
                echo ",
\t\t\t\t\t\t\t\tslidesPerColumn: ";
                // line 178
                echo twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "row_tablet", [], "any", false, false, false, 178);
                echo "
\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t991: {
\t\t\t\t\t\t\t\tslidesPerView: ";
                // line 181
                echo twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "item_s_tablet", [], "any", false, false, false, 181);
                echo ",
\t\t\t\t\t\t\t\tslidesPerColumn: ";
                // line 182
                echo twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "row_s_tablet", [], "any", false, false, false, 182);
                echo "
\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t767: {
\t\t\t\t\t\t\t\tslidesPerView: ";
                // line 185
                echo twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "item_mobile", [], "any", false, false, false, 185);
                echo ",
\t\t\t\t\t\t\t\tslidesPerColumn: ";
                // line 186
                echo twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "row_mobile", [], "any", false, false, false, 186);
                echo "
\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t567: {
\t\t\t\t\t\t\t\tslidesPerView: ";
                // line 189
                echo twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "item_s_mobile", [], "any", false, false, false, 189);
                echo ",
\t\t\t\t\t\t\t\tslidesPerColumn: ";
                // line 190
                echo twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "row_s_mobile", [], "any", false, false, false, 190);
                echo "
\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t359: {
\t\t\t\t\t\t\t\tslidesPerView: 1
\t\t\t\t\t\t\t}
\t\t\t\t\t\t},
                        autoplay: ";
                // line 196
                if (twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "auto", [], "any", false, false, false, 196)) {
                    echo " 500 ";
                } else {
                    echo " false ";
                }
                echo ",
                        loop: false
                    });
\t\t\t\t\t
                </script>
            ";
            } else {
                // line 202
                echo "                <p class=\"txt-empty\">";
                echo ($context["text_empty"] ?? null);
                echo "</p>
            ";
            }
            // line 204
            echo "        ";
        }
        // line 205
        echo "
        ";
        // line 207
        echo "        ";
        if ((($context["module_type"] ?? null) == "multi_tabs")) {
            // line 208
            echo "        <div class=\"product-tabs-section\">
            <div class=\"tab-content product-tabs-content\">
                ";
            // line 210
            $context["tab_count"] = 0;
            // line 211
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["tabs"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["tab"]) {
                // line 212
                echo "                    <div class=\"tab-product\" id=\"tab-product-";
                echo ($context["module_id"] ?? null);
                echo "-";
                echo ($context["tab_count"] ?? null);
                echo "\">
                        ";
                // line 213
                if (twig_get_attribute($this->env, $this->source, $context["tab"], "products", [], "any", false, false, false, 213)) {
                    // line 214
                    echo "                            ";
                    if ((($context["layout_type"] ?? null) == "slider")) {
                        // line 215
                        echo "                                <div class=\"swiper-viewport\">
                                    <div id=\"";
                        // line 216
                        echo ($context["module_id"] ?? null);
                        echo "-";
                        echo ($context["tab_count"] ?? null);
                        echo "-products-container\" class=\"multi-slides-";
                        echo ($context["module_id"] ?? null);
                        echo "-";
                        echo ($context["tab_count"] ?? null);
                        echo " swiper-container\">
                                        <div class=\"swiper-wrapper\">
                                            ";
                        // line 218
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["tab"], "products", [], "any", false, false, false, 218));
                        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                            // line 219
                            echo "                                                <div class=\"product-thumb transition swiper-slide\">
                                                    ";
                            // line 220
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "html", [], "any", false, false, false, 220);
                            echo "
                                                </div>
                                            ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 223
                        echo "                                        </div>
                                    </div>
                                    ";
                        // line 225
                        if (twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "pagination", [], "any", false, false, false, 225)) {
                            // line 226
                            echo "                                        <div class=\"swiper-pagination multi-slides-pagination-";
                            echo ($context["module_id"] ?? null);
                            echo "-";
                            echo ($context["tab_count"] ?? null);
                            echo "\"></div>
                                    ";
                        }
                        // line 228
                        echo "
                                    ";
                        // line 229
                        if (twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "navigation", [], "any", false, false, false, 229)) {
                            // line 230
                            echo "                                        <div class=\"swiper-pager\">
                                            <div class=\"swiper-button-next swiper-button-next-";
                            // line 231
                            echo ($context["module_id"] ?? null);
                            echo "-";
                            echo ($context["tab_count"] ?? null);
                            echo "\"></div>
                                            <div class=\"swiper-button-prev swiper-button-prev-";
                            // line 232
                            echo ($context["module_id"] ?? null);
                            echo "-";
                            echo ($context["tab_count"] ?? null);
                            echo "\"></div>
                                        </div>
                                    ";
                        }
                        // line 235
                        echo "                                </div>
                            ";
                    }
                    // line 237
                    echo "
                            ";
                    // line 238
                    if ((($context["layout_type"] ?? null) == "large_item")) {
                        // line 239
                        echo "                                
\t\t\t\t\t\t\t\t<div class=\"box-large-item\">
                                    <div class=\"col col-large-item\">
                                        <div class=\"fproduct-content\">
                                            <div class=\"product-thumb\">
                                                ";
                        // line 244
                        echo twig_get_attribute($this->env, $this->source, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = $context["tab"]) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["first_product"] ?? null) : null), "large_html", [], "any", false, false, false, 244);
                        echo "
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col col-muti-items\">
                                        <div class=\"swiper-viewport\">
                                            <div id=\"";
                        // line 250
                        echo ($context["module_id"] ?? null);
                        echo "-";
                        echo ($context["tab_count"] ?? null);
                        echo "-products-container\" class=\"multi-slides-";
                        echo ($context["module_id"] ?? null);
                        echo "-";
                        echo ($context["tab_count"] ?? null);
                        echo " swiper-container\">
                                                <div class=\"swiper-wrapper\">
                                                    ";
                        // line 252
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["tab"], "products_except_first", [], "any", false, false, false, 252));
                        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                            // line 253
                            echo "                                                        <div class=\"product-thumb transition swiper-slide\">
                                                            ";
                            // line 254
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "html", [], "any", false, false, false, 254);
                            echo "
                                                        </div>
                                                    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 257
                        echo "                                                </div>
                                            </div>
                                            ";
                        // line 259
                        if (twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "pagination", [], "any", false, false, false, 259)) {
                            // line 260
                            echo "                                                <div class=\"swiper-pagination multi-slides-pagination-";
                            echo ($context["module_id"] ?? null);
                            echo "-";
                            echo ($context["tab_count"] ?? null);
                            echo "\"></div>
                                            ";
                        }
                        // line 262
                        echo "
                                            ";
                        // line 263
                        if (twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "navigation", [], "any", false, false, false, 263)) {
                            // line 264
                            echo "                                                <div class=\"swiper-pager\">
                                                    <div class=\"swiper-button-next swiper-button-next-";
                            // line 265
                            echo ($context["module_id"] ?? null);
                            echo "-";
                            echo ($context["tab_count"] ?? null);
                            echo "\"></div>
                                                    <div class=\"swiper-button-prev swiper-button-prev-";
                            // line 266
                            echo ($context["module_id"] ?? null);
                            echo "-";
                            echo ($context["tab_count"] ?? null);
                            echo "\"></div>
                                                </div>
                                            ";
                        }
                        // line 269
                        echo "                                        </div>
                                    </div>
\t\t\t\t\t\t\t\t\t
                                </div>
                            ";
                    }
                    // line 274
                    echo "
                            ";
                    // line 275
                    if ((($context["layout_type"] ?? null) == "image")) {
                        // line 276
                        echo "\t\t\t\t\t\t\t
                            <div class=\"box-large-image\">
                                <div class=\"col col-large-image\">
                                    <div class=\"image-content\">
                                        ";
                        // line 280
                        if ((($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = twig_get_attribute($this->env, $this->source, $context["tab"], "image", [], "any", false, false, false, 280)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["link"] ?? null) : null)) {
                            // line 281
                            echo "                                            <div class=\"pt-block\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                            // line 283
                            echo (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = twig_get_attribute($this->env, $this->source, $context["tab"], "image", [], "any", false, false, false, 283)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["link"] ?? null) : null);
                            echo "\">
                                                        ";
                            // line 284
                            if (($context["lazy_load"] ?? null)) {
                                // line 285
                                echo "                                                            <img class=\"lazyload\" src=\"";
                                echo ($context["loader_img"] ?? null);
                                echo "\" data-src=\"";
                                echo (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = twig_get_attribute($this->env, $this->source, $context["tab"], "image", [], "any", false, false, false, 285)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002["src"] ?? null) : null);
                                echo "\" alt=\"";
                                echo (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = twig_get_attribute($this->env, $this->source, $context["tab"], "image", [], "any", false, false, false, 285)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4["link"] ?? null) : null);
                                echo "\" />
                                                        ";
                            } else {
                                // line 287
                                echo "                                                            <img src=\"";
                                echo (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = twig_get_attribute($this->env, $this->source, $context["tab"], "image", [], "any", false, false, false, 287)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666["src"] ?? null) : null);
                                echo "\" alt=\"";
                                echo (($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = twig_get_attribute($this->env, $this->source, $context["tab"], "image", [], "any", false, false, false, 287)) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e["link"] ?? null) : null);
                                echo "\" />
                                                        ";
                            }
                            // line 289
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
                                        ";
                        } else {
                            // line 293
                            echo "                                            ";
                            if (($context["lazy_load"] ?? null)) {
                                // line 294
                                echo "                                                <img class=\"lazyload\" src=\"";
                                echo ($context["loader_img"] ?? null);
                                echo "\" data-src=\"";
                                echo (($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = twig_get_attribute($this->env, $this->source, $context["tab"], "image", [], "any", false, false, false, 294)) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52["src"] ?? null) : null);
                                echo "\" alt=\"";
                                echo (($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = twig_get_attribute($this->env, $this->source, $context["tab"], "image", [], "any", false, false, false, 294)) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136["link"] ?? null) : null);
                                echo "\" />
                                            ";
                            } else {
                                // line 296
                                echo "                                                <img src=\"";
                                echo (($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = twig_get_attribute($this->env, $this->source, $context["tab"], "image", [], "any", false, false, false, 296)) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386["src"] ?? null) : null);
                                echo "\" alt=\"";
                                echo (($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 = twig_get_attribute($this->env, $this->source, $context["tab"], "image", [], "any", false, false, false, 296)) && is_array($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9) || $__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 instanceof ArrayAccess ? ($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9["link"] ?? null) : null);
                                echo "\" />
                                            ";
                            }
                            // line 298
                            echo "                                        ";
                        }
                        // line 299
                        echo "                                    </div>
                                </div>
\t\t\t\t\t\t\t\t<div class=\"col col-muti-items\">
                                    <div class=\"swiper-viewport\">
                                        <div id=\"";
                        // line 303
                        echo ($context["module_id"] ?? null);
                        echo "-";
                        echo ($context["tab_count"] ?? null);
                        echo "-products-container\" class=\"multi-slides-";
                        echo ($context["module_id"] ?? null);
                        echo "-";
                        echo ($context["tab_count"] ?? null);
                        echo " swiper-container\">
                                            <div class=\"swiper-wrapper\">
                                                ";
                        // line 305
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["tab"], "products", [], "any", false, false, false, 305));
                        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                            // line 306
                            echo "                                                    <div class=\"product-thumb transition swiper-slide\">
                                                        ";
                            // line 307
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "html", [], "any", false, false, false, 307);
                            echo "
                                                    </div>
                                                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 310
                        echo "                                            </div>
                                        </div>
                                        ";
                        // line 312
                        if (twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "pagination", [], "any", false, false, false, 312)) {
                            // line 313
                            echo "                                            <div class=\"swiper-pagination multi-slides-pagination-";
                            echo ($context["module_id"] ?? null);
                            echo "-";
                            echo ($context["tab_count"] ?? null);
                            echo "\"></div>
                                        ";
                        }
                        // line 315
                        echo "
                                        ";
                        // line 316
                        if (twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "navigation", [], "any", false, false, false, 316)) {
                            // line 317
                            echo "                                            <div class=\"swiper-pager\">
                                                <div class=\"swiper-button-next swiper-button-next-";
                            // line 318
                            echo ($context["module_id"] ?? null);
                            echo "-";
                            echo ($context["tab_count"] ?? null);
                            echo "\"></div>
                                                <div class=\"swiper-button-prev swiper-button-prev-";
                            // line 319
                            echo ($context["module_id"] ?? null);
                            echo "-";
                            echo ($context["tab_count"] ?? null);
                            echo "\"></div>
                                            </div>
                                        ";
                        }
                        // line 322
                        echo "                                    </div>
                                </div>
\t\t\t\t\t\t\t\t
                            </div>
                            ";
                    }
                    // line 327
                    echo "
                            <script>
                                \$(\".multi-slides-";
                    // line 329
                    echo ($context["module_id"] ?? null);
                    echo "-";
                    echo ($context["tab_count"] ?? null);
                    echo "\").swiper({
                                    spaceBetween: 0,
                                    ";
                    // line 331
                    if (twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "pagination", [], "any", false, false, false, 331)) {
                        // line 332
                        echo "                                    pagination: '.multi-slides-pagination-";
                        echo ($context["module_id"] ?? null);
                        echo "-";
                        echo ($context["tab_count"] ?? null);
                        echo "',
                                    paginationClickable: true,
                                    ";
                    }
                    // line 335
                    echo "                                    ";
                    if (twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "navigation", [], "any", false, false, false, 335)) {
                        // line 336
                        echo "                                    nextButton: '.swiper-button-next-";
                        echo ($context["module_id"] ?? null);
                        echo "-";
                        echo ($context["tab_count"] ?? null);
                        echo "',
                                    prevButton: '.swiper-button-prev-";
                        // line 337
                        echo ($context["module_id"] ?? null);
                        echo "-";
                        echo ($context["tab_count"] ?? null);
                        echo "',
                                    ";
                    }
                    // line 339
                    echo "                                    speed: ";
                    if (twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "speed", [], "any", false, false, false, 339)) {
                        echo " ";
                        echo twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "speed", [], "any", false, false, false, 339);
                        echo " ";
                    } else {
                        echo " 500 ";
                    }
                    echo ",
\t\t\t\t\t\t\t\t\tpreloadImages: false,
\t\t\t\t\t\t\t\t\twatchSlidesVisibility: true,
                                    slidesPerView: ";
                    // line 342
                    echo twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "item_desktop", [], "any", false, false, false, 342);
                    echo ",
                                    slidesPerColumn: ";
                    // line 343
                    echo twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "row_desktop", [], "any", false, false, false, 343);
                    echo ",
                                    breakpoints: {
                                        1499: {
                                            slidesPerView: ";
                    // line 346
                    echo twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "item_laptop", [], "any", false, false, false, 346);
                    echo ",
                                            slidesPerColumn: ";
                    // line 347
                    echo twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "row_laptop", [], "any", false, false, false, 347);
                    echo "
                                        },
\t\t\t\t\t\t\t\t\t\t1199: {
                                            slidesPerView: ";
                    // line 350
                    echo twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "item_tablet", [], "any", false, false, false, 350);
                    echo ",
                                            slidesPerColumn: ";
                    // line 351
                    echo twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "row_tablet", [], "any", false, false, false, 351);
                    echo "
                                        },
                                        991: {
                                            slidesPerView: ";
                    // line 354
                    echo twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "item_s_tablet", [], "any", false, false, false, 354);
                    echo ",
                                            slidesPerColumn: ";
                    // line 355
                    echo twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "row_s_tablet", [], "any", false, false, false, 355);
                    echo "
                                        },
                                        767: {
                                            slidesPerView: ";
                    // line 358
                    echo twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "item_mobile", [], "any", false, false, false, 358);
                    echo ",
                                            slidesPerColumn: ";
                    // line 359
                    echo twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "row_mobile", [], "any", false, false, false, 359);
                    echo "
                                        },
                                        567: {
                                            slidesPerView: ";
                    // line 362
                    echo twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "item_s_mobile", [], "any", false, false, false, 362);
                    echo ",
                                            slidesPerColumn: ";
                    // line 363
                    echo twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "row_s_mobile", [], "any", false, false, false, 363);
                    echo "
                                        },
\t\t\t\t\t\t\t\t\t\t359: {
\t\t\t\t\t\t\t\t\t\t\tslidesPerView: 1
\t\t\t\t\t\t\t\t\t\t}
                                    },
                                    autoplay: ";
                    // line 369
                    if (twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "auto", [], "any", false, false, false, 369)) {
                        echo " 500 ";
                    } else {
                        echo " false ";
                    }
                    echo ",
                                    loop: false
                                });
                            </script>
                        ";
                } else {
                    // line 374
                    echo "                            <p class=\"txt-empty\">";
                    echo ($context["text_empty"] ?? null);
                    echo "</p>
                        ";
                }
                // line 376
                echo "                    </div>
                    ";
                // line 377
                $context["tab_count"] = (($context["tab_count"] ?? null) + 1);
                // line 378
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tab'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 379
            echo "            </div>
        </div>
        <script>
            \$('.tabs-style .nav-tabs').each(function() {
\t\t\t\t\$(this).find('li').first().addClass('active');
\t\t\t});
\t\t\t
\t\t\t
            \$('.product-tabs-section .tab-content').each(function() {
\t\t\t\t\$(this).find('.tab-product').hide();
\t\t\t\t\$(this).find('.tab-product').first().show();
\t\t\t}); 
\t\t\t
            \$('.tabs-style .nav-tabs a').on('click', function () {
                \$(this).closest('ul').find('li').removeClass('active');
                \$(this).closest('li').addClass('active');

                var tab = \$(this).data('tab');
\t\t\t\t\$(tab).closest('.tab-content').find('.tab-product').hide();
                \$(tab).show();
            });
        </script>
        ";
        }
        // line 402
        echo "    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "tt_safira_book1/template/plaza/module/ptproducts.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1063 => 402,  1038 => 379,  1032 => 378,  1030 => 377,  1027 => 376,  1021 => 374,  1009 => 369,  1000 => 363,  996 => 362,  990 => 359,  986 => 358,  980 => 355,  976 => 354,  970 => 351,  966 => 350,  960 => 347,  956 => 346,  950 => 343,  946 => 342,  933 => 339,  926 => 337,  919 => 336,  916 => 335,  907 => 332,  905 => 331,  898 => 329,  894 => 327,  887 => 322,  879 => 319,  873 => 318,  870 => 317,  868 => 316,  865 => 315,  857 => 313,  855 => 312,  851 => 310,  842 => 307,  839 => 306,  835 => 305,  824 => 303,  818 => 299,  815 => 298,  807 => 296,  797 => 294,  794 => 293,  788 => 289,  780 => 287,  770 => 285,  768 => 284,  764 => 283,  760 => 281,  758 => 280,  752 => 276,  750 => 275,  747 => 274,  740 => 269,  732 => 266,  726 => 265,  723 => 264,  721 => 263,  718 => 262,  710 => 260,  708 => 259,  704 => 257,  695 => 254,  692 => 253,  688 => 252,  677 => 250,  668 => 244,  661 => 239,  659 => 238,  656 => 237,  652 => 235,  644 => 232,  638 => 231,  635 => 230,  633 => 229,  630 => 228,  622 => 226,  620 => 225,  616 => 223,  607 => 220,  604 => 219,  600 => 218,  589 => 216,  586 => 215,  583 => 214,  581 => 213,  574 => 212,  569 => 211,  567 => 210,  563 => 208,  560 => 207,  557 => 205,  554 => 204,  548 => 202,  535 => 196,  526 => 190,  522 => 189,  516 => 186,  512 => 185,  506 => 182,  502 => 181,  496 => 178,  492 => 177,  486 => 174,  482 => 173,  476 => 170,  472 => 169,  459 => 166,  454 => 164,  449 => 163,  446 => 162,  439 => 159,  437 => 158,  430 => 156,  426 => 154,  420 => 150,  414 => 147,  410 => 146,  407 => 145,  405 => 144,  402 => 143,  396 => 141,  394 => 140,  390 => 138,  381 => 135,  378 => 134,  374 => 133,  369 => 131,  363 => 127,  360 => 126,  354 => 124,  346 => 122,  343 => 121,  337 => 117,  331 => 115,  323 => 113,  321 => 112,  317 => 111,  313 => 109,  311 => 108,  306 => 105,  304 => 104,  301 => 103,  294 => 98,  288 => 95,  284 => 94,  281 => 93,  279 => 92,  276 => 91,  270 => 89,  268 => 88,  264 => 86,  255 => 83,  252 => 82,  248 => 81,  243 => 79,  234 => 73,  228 => 69,  226 => 68,  223 => 67,  219 => 65,  213 => 62,  209 => 61,  206 => 60,  204 => 59,  201 => 58,  195 => 56,  193 => 55,  189 => 53,  180 => 50,  177 => 49,  173 => 48,  168 => 46,  165 => 45,  162 => 44,  159 => 43,  156 => 42,  153 => 40,  148 => 37,  142 => 36,  140 => 35,  133 => 32,  128 => 29,  120 => 27,  110 => 25,  108 => 24,  104 => 22,  102 => 21,  96 => 20,  93 => 19,  88 => 18,  86 => 17,  82 => 15,  79 => 14,  74 => 11,  68 => 9,  65 => 8,  59 => 6,  57 => 5,  52 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "tt_safira_book1/template/plaza/module/ptproducts.twig", "");
    }
}
