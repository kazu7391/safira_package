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

/* tt_safira4/template/plaza/module/pttestimonial.twig */
class __TwigTemplate_43c33962e5a129724f53f06db331a81cea6a828a9eabcc161d09e2f534c11949 extends \Twig\Template
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
        echo "<div class=\"testimonial-module\">
    <div class=\"block-title\">
        <h3><span>";
        // line 3
        echo ($context["title"] ?? null);
        echo "</span></h3>
    </div>
    <div class=\"swiper-viewport\">
        <div class=\"swiper-container testimonial-slides gallery-top\">
\t\t\t<div class=\"swiper-wrapper\">
                ";
        // line 8
        $context["i"] = 0;
        // line 9
        echo "\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["testimonials"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["testimonial"]) {
            // line 10
            echo "                    <div class=\"testimonial-content swiper-slide\">
                        <div class=\"testimonial-box\">
                            <div class=\"testimonial-images testimonial-images-";
            // line 12
            echo ($context["i"] ?? null);
            echo "\">
                                <a href=\"javascript:void(0);\" onclick=\"testimonialGoToSlide(";
            // line 13
            echo ($context["i"] ?? null);
            echo ")\">
                                    ";
            // line 14
            if (($context["lazy_load"] ?? null)) {
                // line 15
                echo "                                        <img class=\"lazyload\" src=\"";
                echo ($context["loader_img"] ?? null);
                echo "\" data-src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["testimonial"], "image", [], "any", false, false, false, 15);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["testimonial"], "customer_name", [], "any", false, false, false, 15);
                echo "\" />
                                    ";
            } else {
                // line 17
                echo "                                        <img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["testimonial"], "image", [], "any", false, false, false, 17);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["testimonial"], "customer_name", [], "any", false, false, false, 17);
                echo "\" />
                                    ";
            }
            // line 19
            echo "                                </a>
                            </div>
                            <p>";
            // line 21
            echo twig_get_attribute($this->env, $this->source, $context["testimonial"], "content", [], "any", false, false, false, 21);
            echo "</p>
                            <span class=\"testimonial-author\">";
            // line 22
            echo twig_get_attribute($this->env, $this->source, $context["testimonial"], "customer_name", [], "any", false, false, false, 22);
            echo "</span>
                        </div>
                    </div>
                    ";
            // line 25
            $context["i"] = (($context["i"] ?? null) + 1);
            // line 26
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['testimonial'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "\t\t\t</div>
\t\t</div>
        ";
        // line 29
        if (twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "pagination", [], "any", false, false, false, 29)) {
            // line 30
            echo "            <div class=\"swiper-pagination testimonial-pagination\"></div>
        ";
        }
        // line 32
        echo "
        ";
        // line 33
        if (twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "navigation", [], "any", false, false, false, 33)) {
            // line 34
            echo "            <div class=\"swiper-pager\">
                <div class=\"swiper-button-next swiper-testimonial-button-next\"></div>
                <div class=\"swiper-button-prev swiper-testimonial-button-prev\"></div>
            </div>
        ";
        }
        // line 39
        echo "    </div>
</div>

<script type=\"text/javascript\">
    var testimonial_slides = \$(\".testimonial-slides\").swiper({
        spaceBetween: 20,
        ";
        // line 45
        if (twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "pagination", [], "any", false, false, false, 45)) {
            // line 46
            echo "        pagination: '.testimonial-pagination',
        paginationClickable: true,
        ";
        }
        // line 49
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "navigation", [], "any", false, false, false, 49)) {
            // line 50
            echo "        nextButton: '.swiper-testimonial-button-next',
        prevButton: '.swiper-testimonial-button-prev',
        ";
        }
        // line 53
        echo "        speed: ";
        if (twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "speed", [], "any", false, false, false, 53)) {
            echo " ";
            echo twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "speed", [], "any", false, false, false, 53);
            echo " ";
        } else {
            echo " 300 ";
        }
        echo ",
        slidesPerView: 1,
        slidesPerColumn: 1,
        autoplay: ";
        // line 56
        if (twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "auto", [], "any", false, false, false, 56)) {
            echo " 3000 ";
        } else {
            echo " false ";
        }
        echo ",
        loop: false
    });

    \$(\".gallery-thumbs\").swiper({
        spaceBetween: 0,
        slidesPerView: ";
        // line 62
        echo twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "items", [], "any", false, false, false, 62);
        echo ",
        slidesPerColumn: ";
        // line 63
        echo twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "rows", [], "any", false, false, false, 63);
        echo ",
        loop: false,
    });
\t\$('.testimonial-images-1').addClass('active');
    function testimonialGoToSlide(index) {
        testimonial_slides.slideTo(index);
\t\t\$('.testimonial-images').removeClass('active');
\t\t\$('.testimonial-images-'+ index).addClass('active');
    }
</script>";
    }

    public function getTemplateName()
    {
        return "tt_safira4/template/plaza/module/pttestimonial.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 63,  181 => 62,  168 => 56,  155 => 53,  150 => 50,  147 => 49,  142 => 46,  140 => 45,  132 => 39,  125 => 34,  123 => 33,  120 => 32,  116 => 30,  114 => 29,  110 => 27,  104 => 26,  102 => 25,  96 => 22,  92 => 21,  88 => 19,  80 => 17,  70 => 15,  68 => 14,  64 => 13,  60 => 12,  56 => 10,  51 => 9,  49 => 8,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "tt_safira4/template/plaza/module/pttestimonial.twig", "");
    }
}
