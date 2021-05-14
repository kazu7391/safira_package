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

/* plaza/module/ptcontrolpanel.twig */
class __TwigTemplate_d56b380ca0178beaf01bb17b953831caedb3b88e03374df38eea6e121a40515a extends \Twig\Template
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
        echo ($context["header"] ?? null);
        echo ($context["column_left"] ?? null);
        echo "
<div id=\"content\">
    <div class=\"page-header\">
        <div class=\"container-fluid\">
            <div class=\"pull-right\">
                <button type=\"submit\" form=\"form-ptcontrolpanel\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_save"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
                <a href=\"";
        // line 7
        echo ($context["cancel"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_cancel"] ?? null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a></div>
            <h1>";
        // line 8
        echo ($context["heading_title"] ?? null);
        echo "</h1>
            <ul class=\"breadcrumb theme-option-breadcrumb\">
                ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 11
            echo "                    <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 11);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 11);
            echo "</a></li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "            </ul>
        </div>
    </div>
    <div class=\"container-fluid\">
        ";
        // line 17
        if (($context["error_warning"] ?? null)) {
            // line 18
            echo "            <div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
            </div>
        ";
        }
        // line 22
        echo "        ";
        if (($context["error_load_file"] ?? null)) {
            // line 23
            echo "            <div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_load_file"] ?? null);
            echo "
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
            </div>
        ";
        }
        // line 27
        echo "        ";
        if (($context["success"] ?? null)) {
            // line 28
            echo "            <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
            </div>
        ";
        }
        // line 32
        echo "        <div class=\"row\">
            <div class=\"col-md-3 col-sm-12\">
                <div class=\"theme-option-container\">
                    <div class=\"panel panel-default\">
                        <div class=\"panel-heading\">
                            <h3 class=\"panel-title\">";
        // line 37
        echo ($context["text_dashboard_menu"] ?? null);
        echo "</h3>
                        </div>
                        <ul class=\"nav nav-tabs menu-sections pt-dashboard-menu\">
                            ";
        // line 40
        $context["i"] = 0;
        // line 41
        echo "                            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["plaza_menus"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
            // line 42
            echo "                                ";
            if (twig_get_attribute($this->env, $this->source, $context["menu"], "child", [], "any", false, false, false, 42)) {
                // line 43
                echo "                                    <li ";
                if (twig_get_attribute($this->env, $this->source, $context["menu"], "active", [], "any", false, false, false, 43)) {
                    echo " class=\"active\" ";
                }
                echo ">
                                        <a href=\"#ptcollapse_";
                // line 44
                echo ($context["i"] ?? null);
                echo "\" data-toggle=\"collapse\" class=\"parent ";
                if ( !twig_get_attribute($this->env, $this->source, $context["menu"], "active", [], "any", false, false, false, 44)) {
                    echo " collapsed ";
                }
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["menu"], "title", [], "any", false, false, false, 44);
                echo "</a>
                                        <ul id=\"ptcollapse_";
                // line 45
                echo ($context["i"] ?? null);
                echo "\" class=\"collapse ";
                if (twig_get_attribute($this->env, $this->source, $context["menu"], "active", [], "any", false, false, false, 45)) {
                    echo " in ";
                }
                echo "\">
                                            ";
                // line 46
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["menu"], "child", [], "any", false, false, false, 46));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 47
                    echo "                                                <li ";
                    if (twig_get_attribute($this->env, $this->source, $context["item"], "active", [], "any", false, false, false, 47)) {
                        echo " class=\"active\" ";
                    }
                    echo "><a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, false, 47);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 47);
                    echo "</a></li>
                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 49
                echo "                                        </ul>
                                    </li>
                                ";
            } else {
                // line 52
                echo "                                    <li ";
                if (twig_get_attribute($this->env, $this->source, $context["menu"], "active", [], "any", false, false, false, 52)) {
                    echo " class=\"active\" ";
                }
                echo "><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["menu"], "url", [], "any", false, false, false, 52);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["menu"], "title", [], "any", false, false, false, 52);
                echo "</a></li>
                                ";
            }
            // line 54
            echo "                                ";
            $context["i"] = (($context["i"] ?? null) + 1);
            // line 55
            echo "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "                        </ul>
                    </div>
                </div>
            </div>
            <div class=\"col-md-9 col-sm-12\">
                <div class=\"theme-option-container\">
                    <div class=\"panel panel-default\">
                        <div class=\"panel-heading\">
                            <h3 class=\"panel-title\"><i class=\"fa fa-magic\"></i> ";
        // line 64
        echo ($context["text_edit"] ?? null);
        echo "</h3>
                            <div class=\"panel-select\">
                                <select id=\"input-store\" class=\"form-control\">
                                    ";
        // line 67
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 68
            echo "                                        <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 68);
            echo "\" ";
            if ((twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 68) == 0)) {
                echo "selected=\"selected\"";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 68);
            echo "</option>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "                                </select>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-md-3 col-left\">
                                <ul class=\"nav nav-tabs menu-sections\">
                                    <li class=\"active\"><a href=\"#tab-general\" data-toggle=\"tab\"><i class=\"fa fa-tachometer\" aria-hidden=\"true\"></i>";
        // line 76
        echo ($context["tab_general"] ?? null);
        echo "</a></li>
                                    <li><a href=\"#tab-skin\" data-toggle=\"tab\"><i class=\"fa fa-eye\" aria-hidden=\"true\"></i>";
        // line 77
        echo ($context["tab_skin"] ?? null);
        echo "</a></li>
                                    <li><a href=\"#tab-font\" data-toggle=\"tab\"><i class=\"fa fa-font\" aria-hidden=\"true\"></i>";
        // line 78
        echo ($context["tab_font"] ?? null);
        echo "</a></li>
                                    <li><a href=\"#tab-catalog\" data-toggle=\"tab\"><i class=\"fa fa-shopping-bag\" aria-hidden=\"true\"></i>";
        // line 79
        echo ($context["tab_catalog"] ?? null);
        echo "</a></li>
                                    <li><a href=\"#tab-product\" data-toggle=\"tab\"><i class=\"fa fa-cube\" aria-hidden=\"true\"></i>";
        // line 80
        echo ($context["tab_product"] ?? null);
        echo "</a></li>
                                    <li><a href=\"#tab-category\" data-toggle=\"tab\"><i class=\"fa fa-tags\" aria-hidden=\"true\"></i>";
        // line 81
        echo ($context["tab_category"] ?? null);
        echo "</a></li>
                                    <li><a href=\"#tab-advance\" data-toggle=\"tab\"><i class=\"fa fa-fire\" aria-hidden=\"true\"></i>";
        // line 82
        echo ($context["tab_advance"] ?? null);
        echo "</a></li>
                                </ul>
                            </div>
                            <div class=\"col-md-9 col-right\">
                                <div class=\"panel-body\">
                                    <form action=\"";
        // line 87
        echo ($context["action_import"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-data\" class=\"form-horizontal\">
                                        <input type=\"hidden\" name=\"file\" />
                                    </form>
                                    <form action=\"";
        // line 90
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-ptcontrolpanel\" class=\"form-horizontal\">
                                        <input type=\"hidden\" name=\"module_ptcontrolpanel_status\" value=\"1\" />
                                        <div class=\"tab-content\">
                                            <div class=\"tab-pane active\" id=\"tab-general\">
                                                ";
        // line 94
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 95
            echo "                                                    <div class=\"frm-field frm-field-";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 95);
            echo "\">
                                                        <div class=\"form-group\">
                                                            <label class=\"col-sm-4 control-label\">";
            // line 97
            echo ($context["entry_responsive"] ?? null);
            echo "</label>
                                                            <div class=\"col-sm-6\">
                                                                <select name=\"module_ptcontrolpanel_responsive_type[";
            // line 99
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 99);
            echo "]\" class=\"form-control\">
                                                                    <option value=\"responsive\" ";
            // line 100
            if (((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["module_ptcontrolpanel_responsive_type"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 100)] ?? null) : null) == "responsive")) {
                echo " selected=\"selected\" ";
            }
            echo ">";
            echo ($context["text_responsive_layout"] ?? null);
            echo "</option>
                                                                    <option value=\"specified\" ";
            // line 101
            if (((($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["module_ptcontrolpanel_responsive_type"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 101)] ?? null) : null) == "specified")) {
                echo " selected=\"selected\" ";
            }
            echo ">";
            echo ($context["text_specified_layout"] ?? null);
            echo "</option>
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <div class=\"form-group\">
                                                            <label class=\"col-sm-4 control-label\">";
            // line 107
            echo ($context["entry_lazy_load"] ?? null);
            echo "</label>
                                                            <div class=\"col-sm-6\">
                                                                <input type=\"hidden\" name=\"module_ptcontrolpanel_lazy_load[";
            // line 109
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 109);
            echo "]\" value=\"0\" />
                                                                <input type=\"checkbox\" class=\"ckb-switch\" name=\"module_ptcontrolpanel_lazy_load[";
            // line 110
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 110);
            echo "]\"
                                                                       data-toggle=\"toggle\" data-on=\"";
            // line 111
            echo ($context["text_enabled"] ?? null);
            echo "\" data-off=\"";
            echo ($context["text_disabled"] ?? null);
            echo "\" data-width=\"100\" data-height=\"36\"
                                                                        ";
            // line 112
            if ((($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["module_ptcontrolpanel_lazy_load"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 112)] ?? null) : null)) {
                echo " value=\"1\" checked ";
            } else {
                echo " value=\"0\" ";
            }
            echo ">
                                                            </div>
                                                        </div>

                                                        <div class=\"form-group\">
                                                            <label class=\"col-sm-4 control-label\">";
            // line 117
            echo ($context["entry_minify_js"] ?? null);
            echo "</label>
                                                            <div class=\"col-sm-6\">
                                                                <input type=\"hidden\" name=\"module_ptcontrolpanel_minify_js[";
            // line 119
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 119);
            echo "]\" value=\"0\" />
                                                                <input type=\"checkbox\" class=\"ckb-switch\" name=\"module_ptcontrolpanel_minify_js[";
            // line 120
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 120);
            echo "]\"
                                                                       data-toggle=\"toggle\" data-on=\"";
            // line 121
            echo ($context["text_enabled"] ?? null);
            echo "\" data-off=\"";
            echo ($context["text_disabled"] ?? null);
            echo "\" data-width=\"100\" data-height=\"36\"
                                                                        ";
            // line 122
            if ((($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["module_ptcontrolpanel_minify_js"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 122)] ?? null) : null)) {
                echo " value=\"1\" checked ";
            } else {
                echo " value=\"0\" ";
            }
            echo ">
                                                            </div>
                                                        </div>

                                                        <div class=\"form-group\">
                                                            <label class=\"col-sm-4 control-label\">";
            // line 127
            echo ($context["entry_minify_css"] ?? null);
            echo "</label>
                                                            <div class=\"col-sm-6\">
                                                                <input type=\"hidden\" name=\"module_ptcontrolpanel_minify_css[";
            // line 129
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 129);
            echo "]\" value=\"0\" />
                                                                <input type=\"checkbox\" class=\"ckb-switch\" name=\"module_ptcontrolpanel_minify_css[";
            // line 130
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 130);
            echo "]\"
                                                                       data-toggle=\"toggle\" data-on=\"";
            // line 131
            echo ($context["text_enabled"] ?? null);
            echo "\" data-off=\"";
            echo ($context["text_disabled"] ?? null);
            echo "\" data-width=\"100\" data-height=\"36\"
                                                                        ";
            // line 132
            if ((($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = ($context["module_ptcontrolpanel_minify_css"] ?? null)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 132)] ?? null) : null)) {
                echo " value=\"1\" checked ";
            } else {
                echo " value=\"0\" ";
            }
            echo ">
                                                            </div>
                                                        </div>

                                                        <div class=\"form-group\">
                                                            <label class=\"col-sm-4 control-label\">";
            // line 137
            echo ($context["entry_sticky_header"] ?? null);
            echo "</label>
                                                            <div class=\"col-sm-6\">
                                                                <input type=\"hidden\" name=\"module_ptcontrolpanel_sticky_header[";
            // line 139
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 139);
            echo "]\" value=\"0\" />
                                                                <input type=\"checkbox\" class=\"ckb-switch\" name=\"module_ptcontrolpanel_sticky_header[";
            // line 140
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 140);
            echo "]\"
                                                                       data-toggle=\"toggle\" data-on=\"";
            // line 141
            echo ($context["text_enabled"] ?? null);
            echo "\" data-off=\"";
            echo ($context["text_disabled"] ?? null);
            echo "\" data-width=\"100\" data-height=\"36\"
                                                                        ";
            // line 142
            if ((($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = ($context["module_ptcontrolpanel_sticky_header"] ?? null)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 142)] ?? null) : null)) {
                echo " value=\"1\" checked ";
            } else {
                echo " value=\"0\" ";
            }
            echo ">
                                                            </div>
                                                        </div>

                                                        <div class=\"form-group\">
                                                            <label class=\"col-sm-4 control-label\">";
            // line 147
            echo ($context["entry_scroll_top"] ?? null);
            echo "</label>
                                                            <div class=\"col-sm-6\">
                                                                <input type=\"hidden\" name=\"module_ptcontrolpanel_scroll_top[";
            // line 149
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 149);
            echo "]\" value=\"0\" />
                                                                <input type=\"checkbox\" class=\"ckb-switch\" name=\"module_ptcontrolpanel_scroll_top[";
            // line 150
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 150);
            echo "]\"
                                                                       data-toggle=\"toggle\" data-on=\"";
            // line 151
            echo ($context["text_enabled"] ?? null);
            echo "\" data-off=\"";
            echo ($context["text_disabled"] ?? null);
            echo "\" data-width=\"100\" data-height=\"36\"
                                                                        ";
            // line 152
            if ((($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = ($context["module_ptcontrolpanel_scroll_top"] ?? null)) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 152)] ?? null) : null)) {
                echo " value=\"1\" checked ";
            } else {
                echo " value=\"0\" ";
            }
            echo ">
                                                            </div>
                                                        </div>

                                                        <div class=\"form-group\">
                                                            <label class=\"col-sm-4 control-label\">";
            // line 157
            echo ($context["entry_loader_image"] ?? null);
            echo "</label>
                                                            <div class=\"col-sm-6\">
                                                                <a href=\"\" id=\"thumb-image";
            // line 159
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 159);
            echo "\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
            echo (($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = ($context["thumb"] ?? null)) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 159)] ?? null) : null);
            echo "\" alt=\"\" title=\"\"  /></a>
                                                                <input type=\"hidden\" id=\"input-image";
            // line 160
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 160);
            echo "\" name=\"module_ptcontrolpanel_loader_img[";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 160);
            echo "]\" value=\"";
            echo (($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = ($context["module_ptcontrolpanel_loader_img"] ?? null)) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 160)] ?? null) : null);
            echo "\" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 165
        echo "                                            </div>

                                            <div class=\"tab-pane\" id=\"tab-skin\">
                                                ";
        // line 168
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 169
            echo "                                                    <div class=\"frm-field frm-field-";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 169);
            echo "\">
                                                        <ul class=\"nav nav-tabs hoz-ul-sections\">
                                                            <li class=\"active\"><a href=\"#tab-layout-";
            // line 171
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 171);
            echo "\" data-toggle=\"tab\">";
            echo ($context["tab_layout"] ?? null);
            echo "</a></li>
                                                            <li><a href=\"#tab-header-";
            // line 172
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 172);
            echo "\" data-toggle=\"tab\">";
            echo ($context["tab_header"] ?? null);
            echo "</a></li>
                                                        </ul>

                                                        <div class=\"tab-content child-content\">
                                                            <div class=\"tab-pane active\" id=\"tab-layout-";
            // line 176
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 176);
            echo "\">
                                                                <div class=\"form-group\">
                                                                    ";
            // line 178
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["layouts"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["layout"]) {
                // line 179
                echo "                                                                        <div class=\"col-sm-6 box-skin ";
                if ((($context["theme_directory"] ?? null) == twig_get_attribute($this->env, $this->source, $context["layout"], "directory", [], "any", false, false, false, 179))) {
                    echo " active ";
                }
                echo "\">
                                                                            <input type=\"hidden\" value=\"";
                // line 180
                echo twig_get_attribute($this->env, $this->source, $context["layout"], "database", [], "any", false, false, false, 180);
                echo "\" />
                                                                            <img src=\"";
                // line 181
                echo twig_get_attribute($this->env, $this->source, $context["layout"], "preview", [], "any", false, false, false, 181);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["layout"], "title", [], "any", false, false, false, 181);
                echo "\" />
                                                                            <p class=\"title\">";
                // line 182
                echo twig_get_attribute($this->env, $this->source, $context["layout"], "title", [], "any", false, false, false, 182);
                echo "</p>
                                                                            ";
                // line 183
                if ((($context["theme_directory"] ?? null) == twig_get_attribute($this->env, $this->source, $context["layout"], "directory", [], "any", false, false, false, 183))) {
                    // line 184
                    echo "                                                                                <span class=\"btn-default status\">";
                    echo ($context["button_activated"] ?? null);
                    echo "</span>
                                                                            ";
                } else {
                    // line 186
                    echo "                                                                                <button type=\"button\" class=\"btn btn-primary btn-theme-option button-import\" onclick=\"skin_import('";
                    echo twig_get_attribute($this->env, $this->source, $context["layout"], "database", [], "any", false, false, false, 186);
                    echo "')\">";
                    echo ($context["button_activate"] ?? null);
                    echo "</button>
                                                                            ";
                }
                // line 188
                echo "                                                                        </div>
                                                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layout'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 190
            echo "                                                                </div>
                                                            </div>

                                                            <div class=\"tab-pane\" id=\"tab-header-";
            // line 193
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 193);
            echo "\">
                                                                <div class=\"form-group\">
                                                                    ";
            // line 195
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["headers"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["header"]) {
                // line 196
                echo "                                                                        <div class=\"col-sm-12 header-option\">
                                                                            <input class=\"rd-header-option\" type=\"radio\" name=\"module_ptcontrolpanel_header_layout[";
                // line 197
                echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 197);
                echo "]\"
                                                                                   value=\"";
                // line 198
                echo twig_get_attribute($this->env, $this->source, $context["header"], "value", [], "any", false, false, false, 198);
                echo "\" id=\"header-option-";
                echo twig_get_attribute($this->env, $this->source, $context["header"], "value", [], "any", false, false, false, 198);
                echo "\" ";
                if (((($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = ($context["module_ptcontrolpanel_header_layout"] ?? null)) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 198)] ?? null) : null) == twig_get_attribute($this->env, $this->source, $context["header"], "value", [], "any", false, false, false, 198))) {
                    echo " checked=\"checked\" ";
                }
                echo " />
                                                                            <label class=\"lb-header-option ";
                // line 199
                if (((($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 = ($context["module_ptcontrolpanel_header_layout"] ?? null)) && is_array($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9) || $__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 instanceof ArrayAccess ? ($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 199)] ?? null) : null) == twig_get_attribute($this->env, $this->source, $context["header"], "value", [], "any", false, false, false, 199))) {
                    echo " active ";
                }
                echo "\" for=\"header-option-";
                echo twig_get_attribute($this->env, $this->source, $context["header"], "value", [], "any", false, false, false, 199);
                echo "\">
                                                                                <img class=\"img-responsive\" src=\"";
                // line 200
                echo twig_get_attribute($this->env, $this->source, $context["header"], "preview", [], "any", false, false, false, 200);
                echo "\" alt=\"";
                echo ($context["entry_header"] ?? null);
                echo " ";
                echo twig_get_attribute($this->env, $this->source, $context["header"], "value", [], "any", false, false, false, 200);
                echo "\" />
                                                                            </label>
                                                                            <p class=\"title\">";
                // line 202
                echo ($context["entry_header"] ?? null);
                echo " ";
                echo twig_get_attribute($this->env, $this->source, $context["header"], "value", [], "any", false, false, false, 202);
                echo "</p>
                                                                        </div>
                                                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['header'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 205
            echo "                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 210
        echo "                                            </div>

                                            <div class=\"tab-pane\" id=\"tab-font\">
                                                ";
        // line 213
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 214
            echo "                                                    <div class=\"frm-field frm-field-";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 214);
            echo "\">
                                                        <ul class=\"nav nav-tabs hoz-ul-sections\">
                                                            <li class=\"active\"><a href=\"#tab-body-";
            // line 216
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 216);
            echo "\" data-toggle=\"tab\">";
            echo ($context["tab_body"] ?? null);
            echo "</a></li>
                                                            <li><a href=\"#tab-header-";
            // line 217
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 217);
            echo "\" data-toggle=\"tab\">";
            echo ($context["tab_heading"] ?? null);
            echo "</a></li>
                                                            <li><a href=\"#tab-link-";
            // line 218
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 218);
            echo "\" data-toggle=\"tab\">";
            echo ($context["tab_link"] ?? null);
            echo "</a></li>
                                                            <li><a href=\"#tab-button-";
            // line 219
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 219);
            echo "\" data-toggle=\"tab\">";
            echo ($context["tab_button"] ?? null);
            echo "</a></li>
                                                        </ul>

                                                        <div class=\"tab-content child-content\">
                                                            <div class=\"tab-pane active\" id=\"tab-body-";
            // line 223
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 223);
            echo "\">
                                                                <div class=\"form-group\">
                                                                    <div class=\"col-sm-3\"></div>
                                                                    <div class=\"col-sm-6\">
                                                                        <p class=\"font-body-demo-";
            // line 227
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 227);
            echo " font-demo\">A B C D E F G H I J K L M N O P Q R S T U V W X Y Z <br />
                                                                            a b c d e f g h i j k l m n o p q r s t u v w x y z <br />
                                                                            0 1 2 3 4 5 6 7 8 9</p>
                                                                    </div>
                                                                </div>

                                                                <div class=\"form-group font-control\">
                                                                    <label class=\"col-sm-3 control-label\">";
            // line 234
            echo ($context["entry_global_font"] ?? null);
            echo "</label>
                                                                    <div class=\"col-sm-6\">
                                                                        <select class=\"form-control\" name=\"module_ptcontrolpanel_body_font_family_id[";
            // line 236
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 236);
            echo "]\" onchange=\"chooseBodyFont(this.value, ";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 236);
            echo ")\">
                                                                            <option value=\"10000\" ";
            // line 237
            if (((($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae = ($context["module_ptcontrolpanel_body_font_family_id"] ?? null)) && is_array($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae) || $__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae instanceof ArrayAccess ? ($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 237)] ?? null) : null) == 10000)) {
                echo " selected=\"selected\" ";
            }
            echo ">";
            echo ($context["text_choose_font"] ?? null);
            echo "</option>
                                                                            ";
            // line 238
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["fonts"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["font"]) {
                // line 239
                echo "                                                                                <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["font"], "id", [], "any", false, false, false, 239);
                echo "\" ";
                if (((($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f = ($context["module_ptcontrolpanel_body_font_family_id"] ?? null)) && is_array($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f) || $__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f instanceof ArrayAccess ? ($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 239)] ?? null) : null) == twig_get_attribute($this->env, $this->source, $context["font"], "id", [], "any", false, false, false, 239))) {
                    echo " selected=\"selected\" ";
                }
                // line 240
                echo "                                                                                        id=\"body-font-";
                echo twig_get_attribute($this->env, $this->source, $context["font"], "id", [], "any", false, false, false, 240);
                echo "\" data-family=\"";
                echo twig_get_attribute($this->env, $this->source, $context["font"], "family", [], "any", false, false, false, 240);
                echo "\" data-family-val=\"";
                echo twig_get_attribute($this->env, $this->source, $context["font"], "family_val", [], "any", false, false, false, 240);
                echo "\"
                                                                                        data-variants=\"";
                // line 241
                echo twig_get_attribute($this->env, $this->source, $context["font"], "variants", [], "any", false, false, false, 241);
                echo "\" data-subsets=\"";
                echo twig_get_attribute($this->env, $this->source, $context["font"], "subsets", [], "any", false, false, false, 241);
                echo "\" data-category=\"";
                echo twig_get_attribute($this->env, $this->source, $context["font"], "category", [], "any", false, false, false, 241);
                echo "\">
                                                                                    ";
                // line 242
                echo twig_get_attribute($this->env, $this->source, $context["font"], "family", [], "any", false, false, false, 242);
                echo "
                                                                                </option>
                                                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['font'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 245
            echo "                                                                        </select>
                                                                    </div>
                                                                    <div class=\"col-sm-3\">
                                                                        <input type=\"checkbox\" id=\"body-font-disable\" name=\"module_ptcontrolpanel_body_font_disable[";
            // line 248
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 248);
            echo "]\" ";
            if ((($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 = ($context["module_ptcontrolpanel_body_font_disable"] ?? null)) && is_array($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40) || $__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 instanceof ArrayAccess ? ($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 248)] ?? null) : null)) {
                echo " checked=\"checked\" ";
            }
            echo " /> ";
            echo ($context["entry_font_disable"] ?? null);
            echo "
                                                                    </div>

                                                                    <input type=\"hidden\" id=\"body-font-family-name-";
            // line 251
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 251);
            echo "\" name=\"module_ptcontrolpanel_body_font_family_name[";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 251);
            echo "]\" value=\"";
            echo (($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f = ($context["module_ptcontrolpanel_body_font_family_name"] ?? null)) && is_array($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f) || $__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f instanceof ArrayAccess ? ($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 251)] ?? null) : null);
            echo "\" />
                                                                    <input type=\"hidden\" id=\"body-font-family-cate-";
            // line 252
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 252);
            echo "\" name=\"module_ptcontrolpanel_body_font_family_cate[";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 252);
            echo "]\" value=\"";
            echo (($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 = ($context["module_ptcontrolpanel_body_font_family_cate"] ?? null)) && is_array($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760) || $__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 instanceof ArrayAccess ? ($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 252)] ?? null) : null);
            echo "\" />
                                                                    <input type=\"hidden\" id=\"body-font-family-link-";
            // line 253
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 253);
            echo "\" name=\"module_ptcontrolpanel_body_font_family_link[";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 253);
            echo "]\" value=\"";
            echo (($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce = ($context["module_ptcontrolpanel_body_font_family_link"] ?? null)) && is_array($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce) || $__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce instanceof ArrayAccess ? ($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 253)] ?? null) : null);
            echo "\" />
                                                                </div>

                                                                <div class=\"form-group\">
                                                                    <label class=\"col-sm-3 control-label\">";
            // line 257
            echo ($context["entry_font_size"] ?? null);
            echo "</label>
                                                                    <div class=\"col-sm-6\">
                                                                        <input class=\"form-control\" type=\"text\" name=\"module_ptcontrolpanel_body_font_size[";
            // line 259
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 259);
            echo "]\" value=\"";
            echo (($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b = ($context["module_ptcontrolpanel_body_font_size"] ?? null)) && is_array($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b) || $__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b instanceof ArrayAccess ? ($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 259)] ?? null) : null);
            echo "\" />
                                                                    </div>
                                                                </div>

                                                                <div class=\"form-group\">
                                                                    <label class=\"col-sm-3 control-label\">";
            // line 264
            echo ($context["entry_font_weight"] ?? null);
            echo "</label>
                                                                    <div class=\"col-sm-6\">
                                                                        <select class=\"form-control\" id=\"body-font-weight-";
            // line 266
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 266);
            echo "\" name=\"module_ptcontrolpanel_body_font_weight[";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 266);
            echo "]\" onclick=\"chooseBodyWeight(this.value, ";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 266);
            echo ")\">
                                                                            <option value=\"300\" ";
            // line 267
            if (((($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c = ($context["module_ptcontrolpanel_body_font_weight"] ?? null)) && is_array($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c) || $__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c instanceof ArrayAccess ? ($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 267)] ?? null) : null) == "300")) {
                echo "selected=\"selected\"";
            }
            echo ">300</option>
                                                                            <option value=\"400\" ";
            // line 268
            if (((($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 = ($context["module_ptcontrolpanel_body_font_weight"] ?? null)) && is_array($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972) || $__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 instanceof ArrayAccess ? ($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 268)] ?? null) : null) == "400")) {
                echo "selected=\"selected\"";
            }
            echo ">400</option>
                                                                            <option value=\"500\" ";
            // line 269
            if (((($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 = ($context["module_ptcontrolpanel_body_font_weight"] ?? null)) && is_array($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216) || $__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 instanceof ArrayAccess ? ($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 269)] ?? null) : null) == "500")) {
                echo "selected=\"selected\"";
            }
            echo ">500</option>
                                                                            <option value=\"600\" ";
            // line 270
            if (((($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 = ($context["module_ptcontrolpanel_body_font_weight"] ?? null)) && is_array($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0) || $__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 instanceof ArrayAccess ? ($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 270)] ?? null) : null) == "600")) {
                echo "selected=\"selected\"";
            }
            echo ">600</option>
                                                                            <option value=\"700\" ";
            // line 271
            if (((($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c = ($context["module_ptcontrolpanel_body_font_weight"] ?? null)) && is_array($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c) || $__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c instanceof ArrayAccess ? ($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 271)] ?? null) : null) == "700")) {
                echo "selected=\"selected\"";
            }
            echo ">700</option>
                                                                        </select>
                                                                    </div>
                                                                </div>

                                                                <div class=\"form-group\">
                                                                    <label class=\"col-sm-3 control-label\">";
            // line 277
            echo ($context["entry_color"] ?? null);
            echo "</label>
                                                                    <div class=\"col-sm-3\">
                                                                        <input class=\"form-control jscolor\" type=\"text\" name=\"module_ptcontrolpanel_body_color[";
            // line 279
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 279);
            echo "]\" value=\"";
            echo (($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f = ($context["module_ptcontrolpanel_body_color"] ?? null)) && is_array($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f) || $__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f instanceof ArrayAccess ? ($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 279)] ?? null) : null);
            echo "\" />
                                                                    </div>
                                                                </div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
                                                                    <label class=\"col-sm-3 control-label\">";
            // line 284
            echo ($context["entry_primary_color"] ?? null);
            echo "</label>
                                                                    <div class=\"col-sm-3\">
                                                                        <input class=\"form-control jscolor\" type=\"text\" name=\"module_ptcontrolpanel_link_hover_color[";
            // line 286
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 286);
            echo "]\" value=\"";
            echo (($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc = ($context["module_ptcontrolpanel_link_hover_color"] ?? null)) && is_array($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc) || $__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc instanceof ArrayAccess ? ($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 286)] ?? null) : null);
            echo "\" />
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class=\"tab-pane\" id=\"tab-header-";
            // line 291
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 291);
            echo "\">
                                                                <div class=\"form-group\">
                                                                    <div class=\"col-sm-3\"></div>
                                                                    <div class=\"col-sm-6\">
                                                                        <p class=\"font-heading-demo-";
            // line 295
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 295);
            echo " font-demo\">A B C D E F G H I J K L M N O P Q R S T U V W X Y Z <br />
                                                                            a b c d e f g h i j k l m n o p q r s t u v w x y z <br />
                                                                            0 1 2 3 4 5 6 7 8 9</p>
                                                                    </div>
                                                                </div>

                                                                <div class=\"form-group font-control\">
                                                                    <label class=\"col-sm-3 control-label\">";
            // line 302
            echo ($context["entry_heading_font"] ?? null);
            echo "</label>
                                                                    <div class=\"col-sm-6\">
                                                                        <select class=\"form-control\" name=\"module_ptcontrolpanel_heading_font_family_id[";
            // line 304
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 304);
            echo "]\" onchange=\"chooseHeadingFont(this.value, ";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 304);
            echo ")\">
                                                                            <option value=\"10000\" ";
            // line 305
            if (((($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 = ($context["module_ptcontrolpanel_heading_font_family_id"] ?? null)) && is_array($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55) || $__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 instanceof ArrayAccess ? ($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 305)] ?? null) : null) == 10000)) {
                echo " selected=\"selected\" ";
            }
            echo ">";
            echo ($context["text_choose_font"] ?? null);
            echo "</option>
                                                                            ";
            // line 306
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["fonts"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["font"]) {
                // line 307
                echo "                                                                                <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["font"], "id", [], "any", false, false, false, 307);
                echo "\" ";
                if (((($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba = ($context["module_ptcontrolpanel_heading_font_family_id"] ?? null)) && is_array($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba) || $__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba instanceof ArrayAccess ? ($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 307)] ?? null) : null) == twig_get_attribute($this->env, $this->source, $context["font"], "id", [], "any", false, false, false, 307))) {
                    echo " selected=\"selected\" ";
                }
                // line 308
                echo "                                                                                        id=\"heading-font-";
                echo twig_get_attribute($this->env, $this->source, $context["font"], "id", [], "any", false, false, false, 308);
                echo "\" data-family=\"";
                echo twig_get_attribute($this->env, $this->source, $context["font"], "family", [], "any", false, false, false, 308);
                echo "\" data-family-val=\"";
                echo twig_get_attribute($this->env, $this->source, $context["font"], "family_val", [], "any", false, false, false, 308);
                echo "\"
                                                                                        data-variants=\"";
                // line 309
                echo twig_get_attribute($this->env, $this->source, $context["font"], "variants", [], "any", false, false, false, 309);
                echo "\" data-subsets=\"";
                echo twig_get_attribute($this->env, $this->source, $context["font"], "subsets", [], "any", false, false, false, 309);
                echo "\" data-category=\"";
                echo twig_get_attribute($this->env, $this->source, $context["font"], "category", [], "any", false, false, false, 309);
                echo "\">
                                                                                    ";
                // line 310
                echo twig_get_attribute($this->env, $this->source, $context["font"], "family", [], "any", false, false, false, 310);
                echo "
                                                                                </option>
                                                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['font'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 313
            echo "                                                                        </select>
                                                                    </div>

                                                                    <div class=\"col-sm-3\">
                                                                        <input type=\"checkbox\" id=\"heading-font-disable\" name=\"module_ptcontrolpanel_heading_font_disable[";
            // line 317
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 317);
            echo "]\" ";
            if ((($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78 = ($context["module_ptcontrolpanel_heading_font_disable"] ?? null)) && is_array($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78) || $__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78 instanceof ArrayAccess ? ($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 317)] ?? null) : null)) {
                echo " checked=\"checked\" ";
            }
            echo " /> ";
            echo ($context["entry_font_disable"] ?? null);
            echo "
                                                                    </div>

                                                                    <input type=\"hidden\" id=\"heading-font-family-name-";
            // line 320
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 320);
            echo "\" name=\"module_ptcontrolpanel_heading_font_family_name[";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 320);
            echo "]\" value=\"";
            echo (($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de = ($context["module_ptcontrolpanel_heading_font_family_name"] ?? null)) && is_array($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de) || $__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de instanceof ArrayAccess ? ($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 320)] ?? null) : null);
            echo "\" />
                                                                    <input type=\"hidden\" id=\"heading-font-family-cate-";
            // line 321
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 321);
            echo "\" name=\"module_ptcontrolpanel_heading_font_family_cate[";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 321);
            echo "]\" value=\"";
            echo (($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828 = ($context["module_ptcontrolpanel_heading_font_family_cate"] ?? null)) && is_array($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828) || $__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828 instanceof ArrayAccess ? ($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 321)] ?? null) : null);
            echo "\" />
                                                                    <input type=\"hidden\" id=\"heading-font-family-link-";
            // line 322
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 322);
            echo "\" name=\"module_ptcontrolpanel_heading_font_family_link[";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 322);
            echo "]\" value=\"";
            echo (($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd = ($context["module_ptcontrolpanel_heading_font_family_link"] ?? null)) && is_array($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd) || $__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd instanceof ArrayAccess ? ($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 322)] ?? null) : null);
            echo "\" />
                                                                </div>

                                                                <div class=\"form-group\">
                                                                    <label class=\"col-sm-3 control-label\">";
            // line 326
            echo ($context["entry_font_weight"] ?? null);
            echo "</label>
                                                                    <div class=\"col-sm-6\">
                                                                        <select class=\"form-control\" id=\"heading-font-weight-";
            // line 328
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 328);
            echo "\" name=\"module_ptcontrolpanel_heading_font_weight[";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 328);
            echo "]\" onchange=\"chooseHeadingWeight(this.value, ";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 328);
            echo ")\">
                                                                            <option value=\"300\" ";
            // line 329
            if (((($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6 = ($context["module_ptcontrolpanel_heading_font_weight"] ?? null)) && is_array($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6) || $__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6 instanceof ArrayAccess ? ($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 329)] ?? null) : null) == "300")) {
                echo "selected=\"selected\"";
            }
            echo ">300</option>
                                                                            <option value=\"400\" ";
            // line 330
            if (((($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855 = ($context["module_ptcontrolpanel_heading_font_weight"] ?? null)) && is_array($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855) || $__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855 instanceof ArrayAccess ? ($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 330)] ?? null) : null) == "400")) {
                echo "selected=\"selected\"";
            }
            echo ">400</option>
                                                                            <option value=\"500\" ";
            // line 331
            if (((($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b = ($context["module_ptcontrolpanel_heading_font_weight"] ?? null)) && is_array($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b) || $__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b instanceof ArrayAccess ? ($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 331)] ?? null) : null) == "500")) {
                echo "selected=\"selected\"";
            }
            echo ">500</option>
                                                                            <option value=\"600\" ";
            // line 332
            if (((($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f = ($context["module_ptcontrolpanel_heading_font_weight"] ?? null)) && is_array($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f) || $__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f instanceof ArrayAccess ? ($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 332)] ?? null) : null) == "600")) {
                echo "selected=\"selected\"";
            }
            echo ">600</option>
                                                                            <option value=\"700\" ";
            // line 333
            if (((($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0 = ($context["module_ptcontrolpanel_heading_font_weight"] ?? null)) && is_array($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0) || $__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0 instanceof ArrayAccess ? ($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 333)] ?? null) : null) == "700")) {
                echo "selected=\"selected\"";
            }
            echo ">700</option>
                                                                        </select>
                                                                    </div>
                                                                </div>

                                                                <div class=\"form-group\">
                                                                    <label class=\"col-sm-3 control-label\">";
            // line 339
            echo ($context["entry_color"] ?? null);
            echo "</label>
                                                                    <div class=\"col-sm-3\">
                                                                        <input class=\"form-control jscolor\" type=\"text\" name=\"module_ptcontrolpanel_heading_color[";
            // line 341
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 341);
            echo "]\" value=\"";
            echo (($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55 = ($context["module_ptcontrolpanel_heading_color"] ?? null)) && is_array($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55) || $__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55 instanceof ArrayAccess ? ($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 341)] ?? null) : null);
            echo "\" />
                                                                    </div>
                                                                </div>


                                                            </div>

                                                            <div class=\"tab-pane\" id=\"tab-link-";
            // line 348
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 348);
            echo "\">
                                                                <div class=\"form-group\">
                                                                    <label class=\"col-sm-4 control-label\">";
            // line 350
            echo ($context["entry_color"] ?? null);
            echo "</label>
                                                                    <div class=\"col-sm-3\">
                                                                        <input class=\"form-control jscolor\" type=\"text\" name=\"module_ptcontrolpanel_link_color[";
            // line 352
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 352);
            echo "]\" value=\"";
            echo (($__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a = ($context["module_ptcontrolpanel_link_color"] ?? null)) && is_array($__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a) || $__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a instanceof ArrayAccess ? ($__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 352)] ?? null) : null);
            echo "\" />
                                                                    </div>
                                                                </div>


                                                            </div>

                                                            <div class=\"tab-pane\" id=\"tab-button-";
            // line 359
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 359);
            echo "\">
                                                                <div class=\"form-group\">
                                                                    <label class=\"col-sm-4 control-label\">";
            // line 361
            echo ($context["entry_color"] ?? null);
            echo "</label>
                                                                    <div class=\"col-sm-3\">
                                                                        <input class=\"form-control jscolor\" type=\"text\" name=\"module_ptcontrolpanel_button_color[";
            // line 363
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 363);
            echo "]\" value=\"";
            echo (($__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88 = ($context["module_ptcontrolpanel_button_color"] ?? null)) && is_array($__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88) || $__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88 instanceof ArrayAccess ? ($__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 363)] ?? null) : null);
            echo "\" />
                                                                    </div>
                                                                </div>

                                                                <div class=\"form-group\">
                                                                    <label class=\"col-sm-4 control-label\">";
            // line 368
            echo ($context["entry_hover_color"] ?? null);
            echo "</label>
                                                                    <div class=\"col-sm-3\">
                                                                        <input class=\"form-control jscolor\" type=\"text\" name=\"module_ptcontrolpanel_button_hover_color[";
            // line 370
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 370);
            echo "]\" value=\"";
            echo (($__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758 = ($context["module_ptcontrolpanel_button_hover_color"] ?? null)) && is_array($__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758) || $__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758 instanceof ArrayAccess ? ($__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 370)] ?? null) : null);
            echo "\" />
                                                                    </div>
                                                                </div>

                                                                <div class=\"form-group\">
                                                                    <label class=\"col-sm-4 control-label\">";
            // line 375
            echo ($context["entry_bg_color"] ?? null);
            echo "</label>
                                                                    <div class=\"col-sm-3\">
                                                                        <input class=\"form-control jscolor\" type=\"text\" name=\"module_ptcontrolpanel_button_bg_color[";
            // line 377
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 377);
            echo "]\" value=\"";
            echo (($__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35 = ($context["module_ptcontrolpanel_button_bg_color"] ?? null)) && is_array($__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35) || $__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35 instanceof ArrayAccess ? ($__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 377)] ?? null) : null);
            echo "\" />
                                                                    </div>
                                                                </div>

                                                                <div class=\"form-group\">
                                                                    <label class=\"col-sm-4 control-label\">";
            // line 382
            echo ($context["entry_bg_hover_color"] ?? null);
            echo "</label>
                                                                    <div class=\"col-sm-3\">
                                                                        <input class=\"form-control jscolor\" type=\"text\" name=\"module_ptcontrolpanel_button_bg_hover_color[";
            // line 384
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 384);
            echo "]\" value=\"";
            echo (($__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b = ($context["module_ptcontrolpanel_button_bg_hover_color"] ?? null)) && is_array($__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b) || $__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b instanceof ArrayAccess ? ($__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 384)] ?? null) : null);
            echo "\" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 391
        echo "                                                <input type=\"hidden\" value=\"";
        echo ($context["entry_font_weight"] ?? null);
        echo "\" id=\"text-font-weight\" />
                                                <input type=\"hidden\" value=\"";
        // line 392
        echo ($context["entry_font_subset"] ?? null);
        echo "\" id=\"text-font-subset\" />
                                            </div>

                                            <div class=\"tab-pane\" id=\"tab-product\">
                                                ";
        // line 396
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 397
            echo "                                                    <div class=\"frm-field frm-field-";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 397);
            echo "\">
                                                        <div class=\"form-group\">
                                                            <label class=\"col-sm-4 control-label\" for=\"input-related-";
            // line 399
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 399);
            echo "\">";
            echo ($context["entry_related_pro"] ?? null);
            echo "</label>
                                                            <div class=\"col-sm-6\">
                                                                <input type=\"hidden\" name=\"module_ptcontrolpanel_related[";
            // line 401
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 401);
            echo "]\" value=\"0\" />
                                                                <input type=\"checkbox\" class=\"ckb-switch\" name=\"module_ptcontrolpanel_related[";
            // line 402
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 402);
            echo "]\" id=\"input-related-";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 402);
            echo "\"
                                                                       data-toggle=\"toggle\" data-on=\"";
            // line 403
            echo ($context["text_enabled"] ?? null);
            echo "\" data-off=\"";
            echo ($context["text_disabled"] ?? null);
            echo "\" data-width=\"100\" data-height=\"36\" data-store-id=\"";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 403);
            echo "\"
                                                                        ";
            // line 404
            if ((($__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae = ($context["module_ptcontrolpanel_related"] ?? null)) && is_array($__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae) || $__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae instanceof ArrayAccess ? ($__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 404)] ?? null) : null)) {
                echo " value=\"1\" checked ";
            } else {
                echo " value=\"0\" ";
            }
            echo ">
                                                            </div>
                                                        </div>

                                                        <div class=\"form-group\">
                                                            <label class=\"col-sm-4 control-label\" for=\"input-social-";
            // line 409
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 409);
            echo "\">";
            echo ($context["entry_social_icons"] ?? null);
            echo "</label>
                                                            <div class=\"col-sm-6\">
                                                                <input type=\"hidden\" name=\"module_ptcontrolpanel_social[";
            // line 411
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 411);
            echo "]\" value=\"0\" />
                                                                <input type=\"checkbox\" class=\"ckb-switch\" name=\"module_ptcontrolpanel_social[";
            // line 412
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 412);
            echo "]\" id=\"input-social-";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 412);
            echo "\"
                                                                       data-toggle=\"toggle\" data-on=\"";
            // line 413
            echo ($context["text_enabled"] ?? null);
            echo "\" data-off=\"";
            echo ($context["text_disabled"] ?? null);
            echo "\" data-width=\"100\" data-height=\"36\" data-store-id=\"";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 413);
            echo "\"
                                                                        ";
            // line 414
            if ((($__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54 = ($context["module_ptcontrolpanel_social"] ?? null)) && is_array($__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54) || $__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54 instanceof ArrayAccess ? ($__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 414)] ?? null) : null)) {
                echo " value=\"1\" checked ";
            } else {
                echo " value=\"0\" ";
            }
            echo ">
                                                            </div>
                                                        </div>

                                                        <div class=\"form-group\">
                                                            <label class=\"col-sm-4 control-label\" for=\"input-tax-";
            // line 419
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 419);
            echo "\">";
            echo ($context["entry_tax"] ?? null);
            echo "</label>
                                                            <div class=\"col-sm-6\">
                                                                <input type=\"hidden\" name=\"module_ptcontrolpanel_tax[";
            // line 421
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 421);
            echo "]\" value=\"0\" />
                                                                <input type=\"checkbox\" class=\"ckb-switch\" name=\"module_ptcontrolpanel_tax[";
            // line 422
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 422);
            echo "]\" id=\"input-tax-";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 422);
            echo "\"
                                                                       data-toggle=\"toggle\" data-on=\"";
            // line 423
            echo ($context["text_enabled"] ?? null);
            echo "\" data-off=\"";
            echo ($context["text_disabled"] ?? null);
            echo "\" data-width=\"100\" data-height=\"36\" data-store-id=\"";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 423);
            echo "\"
                                                                        ";
            // line 424
            if ((($__internal_d6ae6b41786cc4be7778386d06cb288c8e6ffd74e055cfed45d7a5c8854d0c8f = ($context["module_ptcontrolpanel_tax"] ?? null)) && is_array($__internal_d6ae6b41786cc4be7778386d06cb288c8e6ffd74e055cfed45d7a5c8854d0c8f) || $__internal_d6ae6b41786cc4be7778386d06cb288c8e6ffd74e055cfed45d7a5c8854d0c8f instanceof ArrayAccess ? ($__internal_d6ae6b41786cc4be7778386d06cb288c8e6ffd74e055cfed45d7a5c8854d0c8f[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 424)] ?? null) : null)) {
                echo " value=\"1\" checked ";
            } else {
                echo " value=\"0\" ";
            }
            echo ">
                                                            </div>
                                                        </div>

                                                        <div class=\"form-group\">
                                                            <label class=\"col-sm-4 control-label\" for=\"input-tags-";
            // line 429
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 429);
            echo "\">";
            echo ($context["entry_tags"] ?? null);
            echo "</label>
                                                            <div class=\"col-sm-6\">
                                                                <input type=\"hidden\" name=\"module_ptcontrolpanel_tags[";
            // line 431
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 431);
            echo "]\" value=\"0\" />
                                                                <input type=\"checkbox\" class=\"ckb-switch\" name=\"module_ptcontrolpanel_tags[";
            // line 432
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 432);
            echo "]\" id=\"input-tags-";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 432);
            echo "\"
                                                                       data-toggle=\"toggle\" data-on=\"";
            // line 433
            echo ($context["text_enabled"] ?? null);
            echo "\" data-off=\"";
            echo ($context["text_disabled"] ?? null);
            echo "\" data-width=\"100\" data-height=\"36\" data-store-id=\"";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 433);
            echo "\"
                                                                        ";
            // line 434
            if ((($__internal_1dcdec7ec31e102fbfe45103ea3599c92c8609311e43d40ca0d95d0369434327 = ($context["module_ptcontrolpanel_tags"] ?? null)) && is_array($__internal_1dcdec7ec31e102fbfe45103ea3599c92c8609311e43d40ca0d95d0369434327) || $__internal_1dcdec7ec31e102fbfe45103ea3599c92c8609311e43d40ca0d95d0369434327 instanceof ArrayAccess ? ($__internal_1dcdec7ec31e102fbfe45103ea3599c92c8609311e43d40ca0d95d0369434327[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 434)] ?? null) : null)) {
                echo " value=\"1\" checked ";
            } else {
                echo " value=\"0\" ";
            }
            echo ">
                                                            </div>
                                                        </div>

                                                        <div class=\"form-group\">
                                                            <label class=\"col-sm-4 control-label\" for=\"input-zoom-";
            // line 439
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 439);
            echo "\">";
            echo ($context["entry_use_zoom"] ?? null);
            echo "</label>
                                                            <div class=\"col-sm-6\">
                                                                <input type=\"hidden\" name=\"module_ptcontrolpanel_use_zoom[";
            // line 441
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 441);
            echo "]\" value=\"0\" />
                                                                <input type=\"checkbox\" class=\"ckb-switch zoom-status\" name=\"module_ptcontrolpanel_use_zoom[";
            // line 442
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 442);
            echo "]\" id=\"input-zoom-";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 442);
            echo "\"
                                                                       data-toggle=\"toggle\" data-on=\"";
            // line 443
            echo ($context["text_enabled"] ?? null);
            echo "\" data-off=\"";
            echo ($context["text_disabled"] ?? null);
            echo "\" data-width=\"100\" data-height=\"36\" data-store-id=\"";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 443);
            echo "\"
                                                                        ";
            // line 444
            if ((($__internal_891ba2f942018e94e4bfa8069988f305bbaad7f54a64aeee069787f1084a9412 = ($context["module_ptcontrolpanel_use_zoom"] ?? null)) && is_array($__internal_891ba2f942018e94e4bfa8069988f305bbaad7f54a64aeee069787f1084a9412) || $__internal_891ba2f942018e94e4bfa8069988f305bbaad7f54a64aeee069787f1084a9412 instanceof ArrayAccess ? ($__internal_891ba2f942018e94e4bfa8069988f305bbaad7f54a64aeee069787f1084a9412[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 444)] ?? null) : null)) {
                echo " value=\"1\" checked ";
            } else {
                echo " value=\"0\" ";
            }
            echo ">
                                                            </div>
                                                        </div>

                                                        <div class=\"form-group\">
                                                            <label class=\"col-sm-4 control-label\" for=\"input-zoom-type-";
            // line 449
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 449);
            echo "\">";
            echo ($context["entry_zoom_type"] ?? null);
            echo "</label>
                                                            <div class=\"col-sm-6\">
                                                                <select name=\"module_ptcontrolpanel_zoom_type[";
            // line 451
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 451);
            echo "]\" id=\"input-zoom-type-";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 451);
            echo "\" class=\"form-control\">
                                                                    <option value=\"outer\" ";
            // line 452
            if (((($__internal_694b5f53081640f33aab1567e85e28c247e6a7c4674010716df6de8eae4819e9 = ($context["module_ptcontrolpanel_zoom_type"] ?? null)) && is_array($__internal_694b5f53081640f33aab1567e85e28c247e6a7c4674010716df6de8eae4819e9) || $__internal_694b5f53081640f33aab1567e85e28c247e6a7c4674010716df6de8eae4819e9 instanceof ArrayAccess ? ($__internal_694b5f53081640f33aab1567e85e28c247e6a7c4674010716df6de8eae4819e9[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 452)] ?? null) : null) == "outer")) {
                echo "selected=\"selected\"";
            }
            echo ">";
            echo ($context["text_outside"] ?? null);
            echo "</option>
                                                                    <option value=\"inner\" ";
            // line 453
            if (((($__internal_91b272a21580197773f482962c8b92637a641a749832ee390d7d386a58d1912e = ($context["module_ptcontrolpanel_zoom_type"] ?? null)) && is_array($__internal_91b272a21580197773f482962c8b92637a641a749832ee390d7d386a58d1912e) || $__internal_91b272a21580197773f482962c8b92637a641a749832ee390d7d386a58d1912e instanceof ArrayAccess ? ($__internal_91b272a21580197773f482962c8b92637a641a749832ee390d7d386a58d1912e[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 453)] ?? null) : null) == "inner")) {
                echo "selected=\"selected\"";
            }
            echo ">";
            echo ($context["text_inside"] ?? null);
            echo "</option>
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <div class=\"form-group\">
                                                            <label class=\"col-sm-4 control-label\" for=\"input-zoom-space-";
            // line 459
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 459);
            echo "\">";
            echo ($context["entry_zoom_space"] ?? null);
            echo "</label>
                                                            <div class=\"col-sm-6\">
                                                                <input type=\"text\" id=\"input-zoom-space-";
            // line 461
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 461);
            echo "\" class=\"form-control\" name=\"module_ptcontrolpanel_zoom_space[";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 461);
            echo "]\" value=\"";
            echo (($__internal_7f8d0071642f16d6b4720f8eef58ffd71faf0c4d7a772c0eb6842d5e9d901ca5 = ($context["module_ptcontrolpanel_zoom_space"] ?? null)) && is_array($__internal_7f8d0071642f16d6b4720f8eef58ffd71faf0c4d7a772c0eb6842d5e9d901ca5) || $__internal_7f8d0071642f16d6b4720f8eef58ffd71faf0c4d7a772c0eb6842d5e9d901ca5 instanceof ArrayAccess ? ($__internal_7f8d0071642f16d6b4720f8eef58ffd71faf0c4d7a772c0eb6842d5e9d901ca5[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 461)] ?? null) : null);
            echo "\" placeholder=\"";
            echo ($context["text_zoom_space"] ?? null);
            echo "\" />
                                                            </div>
                                                        </div>
                                                        <div class=\"form-group\">
                                                            <label class=\"col-sm-4 control-label\" for=\"input-zoom-title-";
            // line 465
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 465);
            echo "\">";
            echo ($context["entry_zoom_title"] ?? null);
            echo "</label>
                                                            <div class=\"col-sm-6\">
                                                                <input type=\"hidden\" name=\"module_ptcontrolpanel_zoom_title[";
            // line 467
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 467);
            echo "]\" value=\"0\" />
                                                                <input type=\"checkbox\" class=\"ckb-switch\" name=\"module_ptcontrolpanel_zoom_title[";
            // line 468
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 468);
            echo "]\" id=\"input-zoom-title-";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 468);
            echo "\"
                                                                       data-toggle=\"toggle\" data-on=\"";
            // line 469
            echo ($context["text_enabled"] ?? null);
            echo "\" data-off=\"";
            echo ($context["text_disabled"] ?? null);
            echo "\" data-width=\"100\" data-height=\"36\" data-store-id=\"";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 469);
            echo "\"
                                                                        ";
            // line 470
            if ((($__internal_0aa0713b35e28227396d65db75a1a4277b081ff4e08585143330919af9d1bf0a = ($context["module_ptcontrolpanel_zoom_title"] ?? null)) && is_array($__internal_0aa0713b35e28227396d65db75a1a4277b081ff4e08585143330919af9d1bf0a) || $__internal_0aa0713b35e28227396d65db75a1a4277b081ff4e08585143330919af9d1bf0a instanceof ArrayAccess ? ($__internal_0aa0713b35e28227396d65db75a1a4277b081ff4e08585143330919af9d1bf0a[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 470)] ?? null) : null)) {
                echo " value=\"1\" checked ";
            } else {
                echo " value=\"0\" ";
            }
            echo ">
                                                            </div>
                                                        </div>

                                                        <div class=\"form-group\">
                                                            <label class=\"col-sm-4 control-label\" for=\"input-swatches-";
            // line 475
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 475);
            echo "\">";
            echo ($context["entry_use_swatches"] ?? null);
            echo "</label>
                                                            <div class=\"col-sm-6\">
                                                                <input type=\"hidden\" name=\"module_ptcontrolpanel_use_swatches[";
            // line 477
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 477);
            echo "]\" value=\"0\" />
                                                                <input type=\"checkbox\" class=\"ckb-switch\" name=\"module_ptcontrolpanel_use_swatches[";
            // line 478
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 478);
            echo "]\" id=\"input-swatches-";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 478);
            echo "\"
                                                                       data-toggle=\"toggle\" data-on=\"";
            // line 479
            echo ($context["text_enabled"] ?? null);
            echo "\" data-off=\"";
            echo ($context["text_disabled"] ?? null);
            echo "\" data-width=\"100\" data-height=\"36\" data-store-id=\"";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 479);
            echo "\"
                                                                        ";
            // line 480
            if ((($__internal_51b47659448148079c55eb5fc84ce5e7b27c8ff1fadeba243d0bf4a59f102eb4 = ($context["module_ptcontrolpanel_use_swatches"] ?? null)) && is_array($__internal_51b47659448148079c55eb5fc84ce5e7b27c8ff1fadeba243d0bf4a59f102eb4) || $__internal_51b47659448148079c55eb5fc84ce5e7b27c8ff1fadeba243d0bf4a59f102eb4 instanceof ArrayAccess ? ($__internal_51b47659448148079c55eb5fc84ce5e7b27c8ff1fadeba243d0bf4a59f102eb4[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 480)] ?? null) : null)) {
                echo " value=\"1\" checked ";
            } else {
                echo " value=\"0\" ";
            }
            echo ">
                                                            </div>
                                                        </div>

                                                        <div class=\"form-group\">
                                                            <label class=\"col-sm-4 control-label\" for=\"input-dimension-";
            // line 485
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 485);
            echo "\">";
            echo ($context["entry_icon_swatches"] ?? null);
            echo "</label>
                                                            <div class=\"col-sm-3\">
                                                                <input type=\"text\" value=\"";
            // line 487
            echo (($__internal_7954abe9e82b868b32e99deec50bc82d0cf006d569340d1981c528f484e4306d = ($context["module_ptcontrolpanel_swatches_width"] ?? null)) && is_array($__internal_7954abe9e82b868b32e99deec50bc82d0cf006d569340d1981c528f484e4306d) || $__internal_7954abe9e82b868b32e99deec50bc82d0cf006d569340d1981c528f484e4306d instanceof ArrayAccess ? ($__internal_7954abe9e82b868b32e99deec50bc82d0cf006d569340d1981c528f484e4306d[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 487)] ?? null) : null);
            echo "\" name=\"module_ptcontrolpanel_swatches_width[";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 487);
            echo "]\" placeholder=\"";
            echo ($context["entry_width"] ?? null);
            echo "\" class=\"form-control\" />
                                                            </div>
                                                            <div class=\"col-sm-3\">
                                                                <input type=\"text\" value=\"";
            // line 490
            echo (($__internal_edc3933374aa0ae65dd90505a315fe17c24a986a5b064b0f4774e7dc68df29b5 = ($context["module_ptcontrolpanel_swatches_height"] ?? null)) && is_array($__internal_edc3933374aa0ae65dd90505a315fe17c24a986a5b064b0f4774e7dc68df29b5) || $__internal_edc3933374aa0ae65dd90505a315fe17c24a986a5b064b0f4774e7dc68df29b5 instanceof ArrayAccess ? ($__internal_edc3933374aa0ae65dd90505a315fe17c24a986a5b064b0f4774e7dc68df29b5[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 490)] ?? null) : null);
            echo "\" name=\"module_ptcontrolpanel_swatches_height[";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 490);
            echo "]\" placeholder=\"";
            echo ($context["entry_height"] ?? null);
            echo "\" class=\"form-control\" />
                                                            </div>
                                                        </div>

                                                        <div class=\"form-group\">
                                                            <label class=\"col-sm-4 control-label\" for=\"input-color-option-";
            // line 495
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 495);
            echo "\">";
            echo ($context["entry_color_option"] ?? null);
            echo "</label>
                                                            <div class=\"col-sm-6\">
                                                                <select name=\"module_ptcontrolpanel_swatches_option[";
            // line 497
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 497);
            echo "]\" id=\"input-color-option-";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 497);
            echo "\" class=\"form-control\">
                                                                    ";
            // line 498
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 499
                echo "                                                                        ";
                if (((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 499) == "select") || (twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 499) == "radio"))) {
                    // line 500
                    echo "                                                                            <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "option_id", [], "any", false, false, false, 500);
                    echo "\" ";
                    if (((($__internal_78a78e2af552daad30f9bd5ea90c17811faa9f63aaaf1d1d527de70902fe2a7a = ($context["module_ptcontrolpanel_swatches_option"] ?? null)) && is_array($__internal_78a78e2af552daad30f9bd5ea90c17811faa9f63aaaf1d1d527de70902fe2a7a) || $__internal_78a78e2af552daad30f9bd5ea90c17811faa9f63aaaf1d1d527de70902fe2a7a instanceof ArrayAccess ? ($__internal_78a78e2af552daad30f9bd5ea90c17811faa9f63aaaf1d1d527de70902fe2a7a[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 500)] ?? null) : null) == twig_get_attribute($this->env, $this->source, $context["option"], "option_id", [], "any", false, false, false, 500))) {
                        echo " selected=\"selected\" ";
                    }
                    echo ">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 500);
                    echo "</option>
                                                                        ";
                }
                // line 502
                echo "                                                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 503
            echo "                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 508
        echo "                                            </div>

                                            <div class=\"tab-pane\" id=\"tab-category\">
                                                ";
        // line 511
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 512
            echo "                                                    <div class=\"frm-field frm-field-";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 512);
            echo "\">
                                                        <div class=\"form-group\">
                                                            <label class=\"col-sm-4 control-label\" for=\"input-category-image-";
            // line 514
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 514);
            echo "\">";
            echo ($context["entry_category_image"] ?? null);
            echo "</label>
                                                            <div class=\"col-sm-6\">
                                                                <input type=\"hidden\" name=\"module_ptcontrolpanel_category_image[";
            // line 516
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 516);
            echo "]\" value=\"0\" />
                                                                <input type=\"checkbox\" class=\"ckb-switch\" name=\"module_ptcontrolpanel_category_image[";
            // line 517
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 517);
            echo "]\" id=\"input-category-image-";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 517);
            echo "\"
                                                                       data-toggle=\"toggle\" data-on=\"";
            // line 518
            echo ($context["text_enabled"] ?? null);
            echo "\" data-off=\"";
            echo ($context["text_disabled"] ?? null);
            echo "\" data-width=\"100\" data-height=\"36\" data-store-id=\"";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 518);
            echo "\"
                                                                        ";
            // line 519
            if ((($__internal_68329f830f66b3d66aa25264abe6d152d460842b92be66836c0d8febb9fe46da = ($context["module_ptcontrolpanel_category_image"] ?? null)) && is_array($__internal_68329f830f66b3d66aa25264abe6d152d460842b92be66836c0d8febb9fe46da) || $__internal_68329f830f66b3d66aa25264abe6d152d460842b92be66836c0d8febb9fe46da instanceof ArrayAccess ? ($__internal_68329f830f66b3d66aa25264abe6d152d460842b92be66836c0d8febb9fe46da[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 519)] ?? null) : null)) {
                echo " value=\"1\" checked ";
            } else {
                echo " value=\"0\" ";
            }
            echo ">
                                                            </div>
                                                        </div>

                                                        <div class=\"form-group\">
                                                            <label class=\"col-sm-4 control-label\" for=\"input-category-des-";
            // line 524
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 524);
            echo "\">";
            echo ($context["entry_category_des"] ?? null);
            echo "</label>
                                                            <div class=\"col-sm-6\">
                                                                <input type=\"hidden\" name=\"module_ptcontrolpanel_category_description[";
            // line 526
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 526);
            echo "]\" value=\"0\" />
                                                                <input type=\"checkbox\" class=\"ckb-switch\" name=\"module_ptcontrolpanel_category_description[";
            // line 527
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 527);
            echo "]\" id=\"input-category-des-";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 527);
            echo "\"
                                                                       data-toggle=\"toggle\" data-on=\"";
            // line 528
            echo ($context["text_enabled"] ?? null);
            echo "\" data-off=\"";
            echo ($context["text_disabled"] ?? null);
            echo "\" data-width=\"100\" data-height=\"36\" data-store-id=\"";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 528);
            echo "\"
                                                                        ";
            // line 529
            if ((($__internal_0c0a6bc8299d1416ae3339265b194ff43aaec7fc209979ab91c947804ef09b38 = ($context["module_ptcontrolpanel_category_description"] ?? null)) && is_array($__internal_0c0a6bc8299d1416ae3339265b194ff43aaec7fc209979ab91c947804ef09b38) || $__internal_0c0a6bc8299d1416ae3339265b194ff43aaec7fc209979ab91c947804ef09b38 instanceof ArrayAccess ? ($__internal_0c0a6bc8299d1416ae3339265b194ff43aaec7fc209979ab91c947804ef09b38[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 529)] ?? null) : null)) {
                echo " value=\"1\" checked ";
            } else {
                echo " value=\"0\" ";
            }
            echo ">
                                                            </div>
                                                        </div>

                                                        <div class=\"form-group\">
                                                            <label class=\"col-sm-4 control-label\" for=\"input-category-sub-";
            // line 534
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 534);
            echo "\">";
            echo ($context["entry_sub_category"] ?? null);
            echo "</label>
                                                            <div class=\"col-sm-6\">
                                                                <input type=\"hidden\" name=\"module_ptcontrolpanel_sub_category[";
            // line 536
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 536);
            echo "]\" value=\"0\" />
                                                                <input type=\"checkbox\" class=\"ckb-switch\" name=\"module_ptcontrolpanel_sub_category[";
            // line 537
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 537);
            echo "]\" id=\"input-category-sub-";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 537);
            echo "\"
                                                                       data-toggle=\"toggle\" data-on=\"";
            // line 538
            echo ($context["text_enabled"] ?? null);
            echo "\" data-off=\"";
            echo ($context["text_disabled"] ?? null);
            echo "\" data-width=\"100\" data-height=\"36\" data-store-id=\"";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 538);
            echo "\"
                                                                        ";
            // line 539
            if ((($__internal_c5373d6c112ec7cfa0d260a8ea49b75af689c74c186cb9e1d12f91be2f3451ec = ($context["module_ptcontrolpanel_sub_category"] ?? null)) && is_array($__internal_c5373d6c112ec7cfa0d260a8ea49b75af689c74c186cb9e1d12f91be2f3451ec) || $__internal_c5373d6c112ec7cfa0d260a8ea49b75af689c74c186cb9e1d12f91be2f3451ec instanceof ArrayAccess ? ($__internal_c5373d6c112ec7cfa0d260a8ea49b75af689c74c186cb9e1d12f91be2f3451ec[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 539)] ?? null) : null)) {
                echo " value=\"1\" checked ";
            } else {
                echo " value=\"0\" ";
            }
            echo ">
                                                            </div>
                                                        </div>

                                                        <div class=\"form-group\">
                                                            <label class=\"col-sm-4 control-label\" for=\"input-filter-";
            // line 544
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 544);
            echo "\">";
            echo ($context["entry_filter"] ?? null);
            echo "</label>
                                                            <div class=\"col-sm-2\">
                                                                <input type=\"hidden\" name=\"module_ptcontrolpanel_use_filter[";
            // line 546
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 546);
            echo "]\" value=\"0\" />
                                                                <input type=\"checkbox\" class=\"ckb-switch\" name=\"module_ptcontrolpanel_use_filter[";
            // line 547
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 547);
            echo "]\" id=\"input-filter-";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 547);
            echo "\"
                                                                       data-toggle=\"toggle\" data-on=\"";
            // line 548
            echo ($context["text_enabled"] ?? null);
            echo "\" data-off=\"";
            echo ($context["text_disabled"] ?? null);
            echo "\" data-width=\"100\" data-height=\"36\" data-store-id=\"";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 548);
            echo "\"
                                                                        ";
            // line 549
            if ((($__internal_a13b5858c5824edc0cf555cffe22c4f90468c22ef1115c74916647af2c9b8574 = ($context["module_ptcontrolpanel_use_filter"] ?? null)) && is_array($__internal_a13b5858c5824edc0cf555cffe22c4f90468c22ef1115c74916647af2c9b8574) || $__internal_a13b5858c5824edc0cf555cffe22c4f90468c22ef1115c74916647af2c9b8574 instanceof ArrayAccess ? ($__internal_a13b5858c5824edc0cf555cffe22c4f90468c22ef1115c74916647af2c9b8574[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 549)] ?? null) : null)) {
                echo " value=\"1\" checked ";
            } else {
                echo " value=\"0\" ";
            }
            echo ">
                                                            </div>
                                                            <label class=\"col-sm-2 control-label\">";
            // line 551
            echo ($context["entry_position"] ?? null);
            echo "</label>
                                                            <div class=\"col-sm-2\">
                                                                <select name=\"module_ptcontrolpanel_filter_position[";
            // line 553
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 553);
            echo "]\" class=\"form-control\">
                                                                    <option value=\"left\" ";
            // line 554
            if (((($__internal_8273200462706e912633c1bd12ca5fc5736d038390c29954112cb78d56c3075c = ($context["module_ptcontrolpanel_filter_position"] ?? null)) && is_array($__internal_8273200462706e912633c1bd12ca5fc5736d038390c29954112cb78d56c3075c) || $__internal_8273200462706e912633c1bd12ca5fc5736d038390c29954112cb78d56c3075c instanceof ArrayAccess ? ($__internal_8273200462706e912633c1bd12ca5fc5736d038390c29954112cb78d56c3075c[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 554)] ?? null) : null) == "left")) {
                echo " selected=\"selected\" ";
            }
            echo ">";
            echo ($context["text_left"] ?? null);
            echo "</option>
                                                                    <option value=\"right\" ";
            // line 555
            if (((($__internal_ba7685baed7d294d6f9f021c094359707afc43c727e6a2d19ff1d176796bbda0 = ($context["module_ptcontrolpanel_filter_position"] ?? null)) && is_array($__internal_ba7685baed7d294d6f9f021c094359707afc43c727e6a2d19ff1d176796bbda0) || $__internal_ba7685baed7d294d6f9f021c094359707afc43c727e6a2d19ff1d176796bbda0 instanceof ArrayAccess ? ($__internal_ba7685baed7d294d6f9f021c094359707afc43c727e6a2d19ff1d176796bbda0[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 555)] ?? null) : null) == "right")) {
                echo " selected=\"selected\" ";
            }
            echo ">";
            echo ($context["text_right"] ?? null);
            echo "</option>
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <div class=\"form-group\">
                                                            <label class=\"col-sm-4 control-label\" for=\"input-cquickview-";
            // line 561
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 561);
            echo "\">";
            echo ($context["entry_quickview"] ?? null);
            echo "</label>
                                                            <div class=\"col-sm-6\">
                                                                <input type=\"hidden\" name=\"module_ptcontrolpanel_cate_quickview[";
            // line 563
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 563);
            echo "]\" value=\"0\" />
                                                                <input type=\"checkbox\" class=\"ckb-switch\" name=\"module_ptcontrolpanel_cate_quickview[";
            // line 564
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 564);
            echo "]\" id=\"input-cquickview-";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 564);
            echo "\"
                                                                       data-toggle=\"toggle\" data-on=\"";
            // line 565
            echo ($context["text_enabled"] ?? null);
            echo "\" data-off=\"";
            echo ($context["text_disabled"] ?? null);
            echo "\" data-width=\"100\" data-height=\"36\" data-store-id=\"";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 565);
            echo "\"
                                                                        ";
            // line 566
            if ((($__internal_101f955954d09941874d68c1bc31b2171b1313930c7c7163a30d4c0951b92adc = ($context["module_ptcontrolpanel_cate_quickview"] ?? null)) && is_array($__internal_101f955954d09941874d68c1bc31b2171b1313930c7c7163a30d4c0951b92adc) || $__internal_101f955954d09941874d68c1bc31b2171b1313930c7c7163a30d4c0951b92adc instanceof ArrayAccess ? ($__internal_101f955954d09941874d68c1bc31b2171b1313930c7c7163a30d4c0951b92adc[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 566)] ?? null) : null)) {
                echo " value=\"1\" checked ";
            } else {
                echo " value=\"0\" ";
            }
            echo ">
                                                            </div>
                                                        </div>

                                                        <div class=\"form-group\">
                                                            <label class=\"col-sm-4 control-label\" for=\"input-image-effect-";
            // line 571
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 571);
            echo "\">";
            echo ($context["entry_img_effect"] ?? null);
            echo "</label>
                                                            <div class=\"col-sm-6\">
                                                                <select name=\"module_ptcontrolpanel_img_effect[";
            // line 573
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 573);
            echo "]\" id=\"input-image-effect-";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 573);
            echo "\" class=\"form-control\">
                                                                    <option value=\"none\" ";
            // line 574
            if (((($__internal_d19b8970b34a70cf90f25bc70d063a8b0fc361c2ffc373a6176195b465bc0ccd = ($context["module_ptcontrolpanel_img_effect"] ?? null)) && is_array($__internal_d19b8970b34a70cf90f25bc70d063a8b0fc361c2ffc373a6176195b465bc0ccd) || $__internal_d19b8970b34a70cf90f25bc70d063a8b0fc361c2ffc373a6176195b465bc0ccd instanceof ArrayAccess ? ($__internal_d19b8970b34a70cf90f25bc70d063a8b0fc361c2ffc373a6176195b465bc0ccd[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 574)] ?? null) : null) == "none")) {
                echo "selected=\"selected\" ";
            }
            echo ">";
            echo ($context["text_none"] ?? null);
            echo "</option>
                                                                    <option value=\"hover\" ";
            // line 575
            if (((($__internal_7f22f462d0a079e9b28d4dd0209cce239cda0d0c81b8f79d4d6355c3a5eedc81 = ($context["module_ptcontrolpanel_img_effect"] ?? null)) && is_array($__internal_7f22f462d0a079e9b28d4dd0209cce239cda0d0c81b8f79d4d6355c3a5eedc81) || $__internal_7f22f462d0a079e9b28d4dd0209cce239cda0d0c81b8f79d4d6355c3a5eedc81 instanceof ArrayAccess ? ($__internal_7f22f462d0a079e9b28d4dd0209cce239cda0d0c81b8f79d4d6355c3a5eedc81[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 575)] ?? null) : null) == "hover")) {
                echo "selected=\"selected\" ";
            }
            echo ">";
            echo ($context["text_hover_img"] ?? null);
            echo "</option>
                                                                    <option value=\"swatches\" ";
            // line 576
            if (((($__internal_08d357d6c6cc179c7eaa6aa16ae7c13336efbc0aa5669c58d46cab7f2ce96007 = ($context["module_ptcontrolpanel_img_effect"] ?? null)) && is_array($__internal_08d357d6c6cc179c7eaa6aa16ae7c13336efbc0aa5669c58d46cab7f2ce96007) || $__internal_08d357d6c6cc179c7eaa6aa16ae7c13336efbc0aa5669c58d46cab7f2ce96007 instanceof ArrayAccess ? ($__internal_08d357d6c6cc179c7eaa6aa16ae7c13336efbc0aa5669c58d46cab7f2ce96007[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 576)] ?? null) : null) == "swatches")) {
                echo "selected=\"selected\" ";
            }
            echo ">";
            echo ($context["text_swatches_img"] ?? null);
            echo "</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class=\"form-group\">
                                                            <label class=\"col-sm-4 control-label\">";
            // line 581
            echo ($context["entry_icon_swatches"] ?? null);
            echo "</label>
                                                            <div class=\"col-sm-3\">
                                                                <input type=\"text\" value=\"";
            // line 583
            echo (($__internal_6d2de8847ca935d43c4b17225dc2537ff47d9b1c0e614e4fed558aa26b7f934d = ($context["module_ptcontrolpanel_cate_swatches_width"] ?? null)) && is_array($__internal_6d2de8847ca935d43c4b17225dc2537ff47d9b1c0e614e4fed558aa26b7f934d) || $__internal_6d2de8847ca935d43c4b17225dc2537ff47d9b1c0e614e4fed558aa26b7f934d instanceof ArrayAccess ? ($__internal_6d2de8847ca935d43c4b17225dc2537ff47d9b1c0e614e4fed558aa26b7f934d[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 583)] ?? null) : null);
            echo "\" name=\"module_ptcontrolpanel_cate_swatches_width[";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 583);
            echo "]\" placeholder=\"";
            echo ($context["entry_width"] ?? null);
            echo "\" class=\"form-control\" />
                                                            </div>
                                                            <div class=\"col-sm-3\">
                                                                <input type=\"text\" value=\"";
            // line 586
            echo (($__internal_14ec589d07a85756e12acaaf8d41cc27621a5a03ce9e1c2835143b81f89a8dba = ($context["module_ptcontrolpanel_cate_swatches_height"] ?? null)) && is_array($__internal_14ec589d07a85756e12acaaf8d41cc27621a5a03ce9e1c2835143b81f89a8dba) || $__internal_14ec589d07a85756e12acaaf8d41cc27621a5a03ce9e1c2835143b81f89a8dba instanceof ArrayAccess ? ($__internal_14ec589d07a85756e12acaaf8d41cc27621a5a03ce9e1c2835143b81f89a8dba[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 586)] ?? null) : null);
            echo "\" name=\"module_ptcontrolpanel_cate_swatches_height[";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 586);
            echo "]\" placeholder=\"";
            echo ($context["entry_height"] ?? null);
            echo "\" class=\"form-control\" />
                                                            </div>
                                                        </div>

                                                        <div class=\"form-group\">
                                                            <label class=\"col-sm-4 control-label\" for=\"input-view-";
            // line 591
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 591);
            echo "\">";
            echo ($context["entry_advance_view"] ?? null);
            echo "</label>
                                                            <div class=\"col-sm-6\">
                                                                <input type=\"hidden\" name=\"module_ptcontrolpanel_advance_view[";
            // line 593
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 593);
            echo "]\" value=\"0\" />
                                                                <input type=\"checkbox\" class=\"ckb-switch\" name=\"module_ptcontrolpanel_advance_view[";
            // line 594
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 594);
            echo "]\" id=\"input-view-";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 594);
            echo "\"
                                                                       data-toggle=\"toggle\" data-on=\"";
            // line 595
            echo ($context["text_enabled"] ?? null);
            echo "\" data-off=\"";
            echo ($context["text_disabled"] ?? null);
            echo "\" data-width=\"100\" data-height=\"36\" data-store-id=\"";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 595);
            echo "\"
                                                                        ";
            // line 596
            if ((($__internal_15cadc33e29273b0be5cf970bdbb25fb0d962f226cb329dfeb89075c4a503f49 = ($context["module_ptcontrolpanel_advance_view"] ?? null)) && is_array($__internal_15cadc33e29273b0be5cf970bdbb25fb0d962f226cb329dfeb89075c4a503f49) || $__internal_15cadc33e29273b0be5cf970bdbb25fb0d962f226cb329dfeb89075c4a503f49 instanceof ArrayAccess ? ($__internal_15cadc33e29273b0be5cf970bdbb25fb0d962f226cb329dfeb89075c4a503f49[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 596)] ?? null) : null)) {
                echo " value=\"1\" checked ";
            } else {
                echo " value=\"0\" ";
            }
            echo ">
                                                            </div>
                                                        </div>
                                                        <div class=\"form-group\">
                                                            <label class=\"col-sm-4 control-label\" for=\"input-default-view-";
            // line 600
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 600);
            echo "\">";
            echo ($context["entry_default_view"] ?? null);
            echo "</label>
                                                            <div class=\"col-sm-3\">
                                                                <select name=\"module_ptcontrolpanel_default_view[";
            // line 602
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 602);
            echo "]\" id=\"input-default-view-";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 602);
            echo "\" class=\"form-control\">
                                                                    <option value=\"list\" ";
            // line 603
            if (((($__internal_fdffc6d7d2105180aa5315b58ff859ceee4ece5e5b7b2601a851c7a60a10d639 = ($context["module_ptcontrolpanel_default_view"] ?? null)) && is_array($__internal_fdffc6d7d2105180aa5315b58ff859ceee4ece5e5b7b2601a851c7a60a10d639) || $__internal_fdffc6d7d2105180aa5315b58ff859ceee4ece5e5b7b2601a851c7a60a10d639 instanceof ArrayAccess ? ($__internal_fdffc6d7d2105180aa5315b58ff859ceee4ece5e5b7b2601a851c7a60a10d639[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 603)] ?? null) : null) == "list")) {
                echo " selected=\"selected\" ";
            }
            echo ">";
            echo ($context["text_list"] ?? null);
            echo "</option>
                                                                    <option value=\"grid\" ";
            // line 604
            if (((($__internal_d3425701b9a0a8a13b32495933a7425cc5de4c0e5eb576b5e6202e761600efaf = ($context["module_ptcontrolpanel_default_view"] ?? null)) && is_array($__internal_d3425701b9a0a8a13b32495933a7425cc5de4c0e5eb576b5e6202e761600efaf) || $__internal_d3425701b9a0a8a13b32495933a7425cc5de4c0e5eb576b5e6202e761600efaf instanceof ArrayAccess ? ($__internal_d3425701b9a0a8a13b32495933a7425cc5de4c0e5eb576b5e6202e761600efaf[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 604)] ?? null) : null) == "grid")) {
                echo " selected=\"selected\" ";
            }
            echo ">";
            echo ($context["text_grid"] ?? null);
            echo "</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class=\"form-group\">
                                                            <label class=\"col-sm-4 control-label\" for=\"input-row-";
            // line 609
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 609);
            echo "\">";
            echo ($context["entry_product_row"] ?? null);
            echo "</label>
                                                            <div class=\"col-sm-3\">
                                                                <select name=\"module_ptcontrolpanel_product_row[";
            // line 611
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 611);
            echo "]\" id=\"input-row-";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 611);
            echo "\" class=\"form-control\">
                                                                    <option value=\"2\" ";
            // line 612
            if (((($__internal_aee130853742ef3e066bee9d5b201f026709112632574a72409cce5c24f44921 = ($context["module_ptcontrolpanel_product_row"] ?? null)) && is_array($__internal_aee130853742ef3e066bee9d5b201f026709112632574a72409cce5c24f44921) || $__internal_aee130853742ef3e066bee9d5b201f026709112632574a72409cce5c24f44921 instanceof ArrayAccess ? ($__internal_aee130853742ef3e066bee9d5b201f026709112632574a72409cce5c24f44921[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 612)] ?? null) : null) == "2")) {
                echo " selected=\"selected\" ";
            }
            echo ">2</option>
                                                                    <option value=\"3\" ";
            // line 613
            if (((($__internal_34bfc9d3bb99a6e1ea80e9e1e16e70ac03c16465a14de0faf0a7d7df04205a7a = ($context["module_ptcontrolpanel_product_row"] ?? null)) && is_array($__internal_34bfc9d3bb99a6e1ea80e9e1e16e70ac03c16465a14de0faf0a7d7df04205a7a) || $__internal_34bfc9d3bb99a6e1ea80e9e1e16e70ac03c16465a14de0faf0a7d7df04205a7a instanceof ArrayAccess ? ($__internal_34bfc9d3bb99a6e1ea80e9e1e16e70ac03c16465a14de0faf0a7d7df04205a7a[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 613)] ?? null) : null) == "3")) {
                echo " selected=\"selected\" ";
            }
            echo ">3</option>
                                                                    <option value=\"4\" ";
            // line 614
            if (((($__internal_975fa751a8f688c78873ea77782d85542baaefa8277fb1ae2e9b2a7d8eed4ca4 = ($context["module_ptcontrolpanel_product_row"] ?? null)) && is_array($__internal_975fa751a8f688c78873ea77782d85542baaefa8277fb1ae2e9b2a7d8eed4ca4) || $__internal_975fa751a8f688c78873ea77782d85542baaefa8277fb1ae2e9b2a7d8eed4ca4 instanceof ArrayAccess ? ($__internal_975fa751a8f688c78873ea77782d85542baaefa8277fb1ae2e9b2a7d8eed4ca4[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 614)] ?? null) : null) == "4")) {
                echo " selected=\"selected\" ";
            }
            echo ">4</option>

                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 621
        echo "                                            </div>

                                            <div class=\"tab-pane\" id=\"tab-catalog\">
                                                ";
        // line 624
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 625
            echo "                                                    <div class=\"frm-field frm-field-";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 625);
            echo "\">
                                                        <ul class=\"nav nav-tabs hoz-ul-sections\">
                                                            <li class=\"active\"><a href=\"#tab-cheader-";
            // line 627
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 627);
            echo "\" data-toggle=\"tab\">";
            echo ($context["tab_header"] ?? null);
            echo "</a></li>
                                                            <li><a href=\"#tab-product-";
            // line 628
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 628);
            echo "\" data-toggle=\"tab\">";
            echo ($context["tab_product"] ?? null);
            echo "</a></li>
                                                            <li><a href=\"#tab-category-";
            // line 629
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 629);
            echo "\" data-toggle=\"tab\">";
            echo ($context["tab_product_listing"] ?? null);
            echo "</a></li>
                                                        </ul>

                                                        <div class=\"tab-content child-content\">
                                                            <div class=\"tab-pane active\" id=\"tab-cheader-";
            // line 633
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 633);
            echo "\">
                                                                <div class=\"form-group\">
                                                                    <label class=\"col-sm-4 control-label\" for=\"input-header-cart-";
            // line 635
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 635);
            echo "\">";
            echo ($context["entry_cart"] ?? null);
            echo "</label>
                                                                    <div class=\"col-sm-6\">
                                                                        <input type=\"hidden\" name=\"module_ptcontrolpanel_header_cart[";
            // line 637
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 637);
            echo "]\" value=\"0\" />
                                                                        <input type=\"checkbox\" class=\"ckb-switch\" name=\"module_ptcontrolpanel_header_cart[";
            // line 638
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 638);
            echo "]\" id=\"input-header-cart-";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 638);
            echo "\"
                                                                               data-toggle=\"toggle\" data-on=\"";
            // line 639
            echo ($context["text_enabled"] ?? null);
            echo "\" data-off=\"";
            echo ($context["text_disabled"] ?? null);
            echo "\" data-width=\"100\" data-height=\"36\" data-store-id=\"";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 639);
            echo "\"
                                                                                ";
            // line 640
            if ((($__internal_3a29dd8c635325e3d124a8a60682c8c1d72c8f81204e952bf98350c9fabbc985 = ($context["module_ptcontrolpanel_header_cart"] ?? null)) && is_array($__internal_3a29dd8c635325e3d124a8a60682c8c1d72c8f81204e952bf98350c9fabbc985) || $__internal_3a29dd8c635325e3d124a8a60682c8c1d72c8f81204e952bf98350c9fabbc985 instanceof ArrayAccess ? ($__internal_3a29dd8c635325e3d124a8a60682c8c1d72c8f81204e952bf98350c9fabbc985[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 640)] ?? null) : null)) {
                echo " value=\"1\" checked ";
            } else {
                echo " value=\"0\" ";
            }
            echo ">
                                                                    </div>
                                                                </div>

                                                                <div class=\"form-group\">
                                                                    <label class=\"col-sm-4 control-label\" for=\"input-header-currency-";
            // line 645
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 645);
            echo "\">";
            echo ($context["entry_currency"] ?? null);
            echo "</label>
                                                                    <div class=\"col-sm-6\">
                                                                        <input type=\"hidden\" name=\"module_ptcontrolpanel_header_currency[";
            // line 647
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 647);
            echo "]\" value=\"0\" />
                                                                        <input type=\"checkbox\" class=\"ckb-switch\" name=\"module_ptcontrolpanel_header_currency[";
            // line 648
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 648);
            echo "]\" id=\"input-header-currency-";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 648);
            echo "\"
                                                                               data-toggle=\"toggle\" data-on=\"";
            // line 649
            echo ($context["text_enabled"] ?? null);
            echo "\" data-off=\"";
            echo ($context["text_disabled"] ?? null);
            echo "\" data-width=\"100\" data-height=\"36\" data-store-id=\"";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 649);
            echo "\"
                                                                                ";
            // line 650
            if ((($__internal_245fa8e4b1f2520e359eeb249916824c4d6f6fcce189eedb4956fb1747c4eb51 = ($context["module_ptcontrolpanel_header_currency"] ?? null)) && is_array($__internal_245fa8e4b1f2520e359eeb249916824c4d6f6fcce189eedb4956fb1747c4eb51) || $__internal_245fa8e4b1f2520e359eeb249916824c4d6f6fcce189eedb4956fb1747c4eb51 instanceof ArrayAccess ? ($__internal_245fa8e4b1f2520e359eeb249916824c4d6f6fcce189eedb4956fb1747c4eb51[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 650)] ?? null) : null)) {
                echo " value=\"1\" checked ";
            } else {
                echo " value=\"0\" ";
            }
            echo ">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class=\"tab-pane\" id=\"tab-product-";
            // line 655
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 655);
            echo "\">
                                                                <div class=\"form-group\">
                                                                    <label class=\"col-sm-4 control-label\" for=\"input-product-price-";
            // line 657
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 657);
            echo "\">";
            echo ($context["entry_show_price"] ?? null);
            echo "</label>
                                                                    <div class=\"col-sm-6\">
                                                                        <input type=\"hidden\" name=\"module_ptcontrolpanel_product_price[";
            // line 659
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 659);
            echo "]\" value=\"0\" />
                                                                        <input type=\"checkbox\" class=\"ckb-switch\" name=\"module_ptcontrolpanel_product_price[";
            // line 660
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 660);
            echo "]\" id=\"input-product-price-";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 660);
            echo "\"
                                                                               data-toggle=\"toggle\" data-on=\"";
            // line 661
            echo ($context["text_enabled"] ?? null);
            echo "\" data-off=\"";
            echo ($context["text_disabled"] ?? null);
            echo "\" data-width=\"100\" data-height=\"36\" data-store-id=\"";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 661);
            echo "\"
                                                                                ";
            // line 662
            if ((($__internal_9e80f0131faf7c30fa2ce2a767187df174f9da8bcbd50f87a692ce0bfaa1635a = ($context["module_ptcontrolpanel_product_price"] ?? null)) && is_array($__internal_9e80f0131faf7c30fa2ce2a767187df174f9da8bcbd50f87a692ce0bfaa1635a) || $__internal_9e80f0131faf7c30fa2ce2a767187df174f9da8bcbd50f87a692ce0bfaa1635a instanceof ArrayAccess ? ($__internal_9e80f0131faf7c30fa2ce2a767187df174f9da8bcbd50f87a692ce0bfaa1635a[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 662)] ?? null) : null)) {
                echo " value=\"1\" checked ";
            } else {
                echo " value=\"0\" ";
            }
            echo ">
                                                                    </div>
                                                                </div>

                                                                <div class=\"form-group\">
                                                                    <label class=\"col-sm-4 control-label\" for=\"input-product-cart-";
            // line 667
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 667);
            echo "\">";
            echo ($context["entry_show_cart"] ?? null);
            echo "</label>
                                                                    <div class=\"col-sm-6\">
                                                                        <input type=\"hidden\" name=\"module_ptcontrolpanel_product_cart[";
            // line 669
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 669);
            echo "]\" value=\"0\" />
                                                                        <input type=\"checkbox\" class=\"ckb-switch\" name=\"module_ptcontrolpanel_product_cart[";
            // line 670
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 670);
            echo "]\" id=\"input-product-cart-";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 670);
            echo "\"
                                                                               data-toggle=\"toggle\" data-on=\"";
            // line 671
            echo ($context["text_enabled"] ?? null);
            echo "\" data-off=\"";
            echo ($context["text_disabled"] ?? null);
            echo "\" data-width=\"100\" data-height=\"36\" data-store-id=\"";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 671);
            echo "\"
                                                                                ";
            // line 672
            if ((($__internal_451826e8bdee9d18aea0e33bdc5ff98645a3591151f15890bdcbf323f991d762 = ($context["module_ptcontrolpanel_product_cart"] ?? null)) && is_array($__internal_451826e8bdee9d18aea0e33bdc5ff98645a3591151f15890bdcbf323f991d762) || $__internal_451826e8bdee9d18aea0e33bdc5ff98645a3591151f15890bdcbf323f991d762 instanceof ArrayAccess ? ($__internal_451826e8bdee9d18aea0e33bdc5ff98645a3591151f15890bdcbf323f991d762[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 672)] ?? null) : null)) {
                echo " value=\"1\" checked ";
            } else {
                echo " value=\"0\" ";
            }
            echo ">
                                                                    </div>
                                                                </div>

                                                                <div class=\"form-group\">
                                                                    <label class=\"col-sm-4 control-label\" for=\"input-product-wishlist-";
            // line 677
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 677);
            echo "\">";
            echo ($context["entry_show_wishlist"] ?? null);
            echo "</label>
                                                                    <div class=\"col-sm-6\">
                                                                        <input type=\"hidden\" name=\"module_ptcontrolpanel_product_wishlist[";
            // line 679
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 679);
            echo "]\" value=\"0\" />
                                                                        <input type=\"checkbox\" class=\"ckb-switch\" name=\"module_ptcontrolpanel_product_wishlist[";
            // line 680
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 680);
            echo "]\" id=\"input-product-wishlist-";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 680);
            echo "\"
                                                                               data-toggle=\"toggle\" data-on=\"";
            // line 681
            echo ($context["text_enabled"] ?? null);
            echo "\" data-off=\"";
            echo ($context["text_disabled"] ?? null);
            echo "\" data-width=\"100\" data-height=\"36\" data-store-id=\"";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 681);
            echo "\"
                                                                                ";
            // line 682
            if ((($__internal_1d091d83c8b124c871d72f3d4f6fd41a4ee9660a12b13118ed628d413c8f7053 = ($context["module_ptcontrolpanel_product_wishlist"] ?? null)) && is_array($__internal_1d091d83c8b124c871d72f3d4f6fd41a4ee9660a12b13118ed628d413c8f7053) || $__internal_1d091d83c8b124c871d72f3d4f6fd41a4ee9660a12b13118ed628d413c8f7053 instanceof ArrayAccess ? ($__internal_1d091d83c8b124c871d72f3d4f6fd41a4ee9660a12b13118ed628d413c8f7053[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 682)] ?? null) : null)) {
                echo " value=\"1\" checked ";
            } else {
                echo " value=\"0\" ";
            }
            echo ">
                                                                    </div>
                                                                </div>

                                                                <div class=\"form-group\">
                                                                    <label class=\"col-sm-4 control-label\" for=\"input-product-compare-";
            // line 687
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 687);
            echo "\">";
            echo ($context["entry_show_compare"] ?? null);
            echo "</label>
                                                                    <div class=\"col-sm-6\">
                                                                        <input type=\"hidden\" name=\"module_ptcontrolpanel_product_compare[";
            // line 689
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 689);
            echo "]\" value=\"0\" />
                                                                        <input type=\"checkbox\" class=\"ckb-switch\" name=\"module_ptcontrolpanel_product_compare[";
            // line 690
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 690);
            echo "]\" id=\"input-product-compare-";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 690);
            echo "\"
                                                                               data-toggle=\"toggle\" data-on=\"";
            // line 691
            echo ($context["text_enabled"] ?? null);
            echo "\" data-off=\"";
            echo ($context["text_disabled"] ?? null);
            echo "\" data-width=\"100\" data-height=\"36\" data-store-id=\"";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 691);
            echo "\"
                                                                                ";
            // line 692
            if ((($__internal_65ca6abbb047147adc36adc2b2eee31db7dcbf18e71e872be20ddfaa1118c70c = ($context["module_ptcontrolpanel_product_compare"] ?? null)) && is_array($__internal_65ca6abbb047147adc36adc2b2eee31db7dcbf18e71e872be20ddfaa1118c70c) || $__internal_65ca6abbb047147adc36adc2b2eee31db7dcbf18e71e872be20ddfaa1118c70c instanceof ArrayAccess ? ($__internal_65ca6abbb047147adc36adc2b2eee31db7dcbf18e71e872be20ddfaa1118c70c[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 692)] ?? null) : null)) {
                echo " value=\"1\" checked ";
            } else {
                echo " value=\"0\" ";
            }
            echo ">
                                                                    </div>
                                                                </div>

                                                                <div class=\"form-group\">
                                                                    <label class=\"col-sm-4 control-label\" for=\"input-product-options-";
            // line 697
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 697);
            echo "\">";
            echo ($context["entry_show_options"] ?? null);
            echo "</label>
                                                                    <div class=\"col-sm-6\">
                                                                        <input type=\"hidden\" name=\"module_ptcontrolpanel_product_options[";
            // line 699
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 699);
            echo "]\" value=\"0\" />
                                                                        <input type=\"checkbox\" class=\"ckb-switch\" name=\"module_ptcontrolpanel_product_options[";
            // line 700
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 700);
            echo "]\" id=\"input-product-options-";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 700);
            echo "\"
                                                                               data-toggle=\"toggle\" data-on=\"";
            // line 701
            echo ($context["text_enabled"] ?? null);
            echo "\" data-off=\"";
            echo ($context["text_disabled"] ?? null);
            echo "\" data-width=\"100\" data-height=\"36\" data-store-id=\"";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 701);
            echo "\"
                                                                                ";
            // line 702
            if ((($__internal_161aee9a7f672339d6d858e64e1de832e33321400f3f2381c16bf9c6d2fbcc9c = ($context["module_ptcontrolpanel_product_options"] ?? null)) && is_array($__internal_161aee9a7f672339d6d858e64e1de832e33321400f3f2381c16bf9c6d2fbcc9c) || $__internal_161aee9a7f672339d6d858e64e1de832e33321400f3f2381c16bf9c6d2fbcc9c instanceof ArrayAccess ? ($__internal_161aee9a7f672339d6d858e64e1de832e33321400f3f2381c16bf9c6d2fbcc9c[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 702)] ?? null) : null)) {
                echo " value=\"1\" checked ";
            } else {
                echo " value=\"0\" ";
            }
            echo ">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class=\"tab-pane\" id=\"tab-category-";
            // line 706
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 706);
            echo "\">
                                                                <div class=\"form-group\">
                                                                    <label class=\"col-sm-4 control-label\" for=\"input-category-price-";
            // line 708
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 708);
            echo "\">";
            echo ($context["entry_show_price"] ?? null);
            echo "</label>
                                                                    <div class=\"col-sm-6\">
                                                                        <input type=\"hidden\" name=\"module_ptcontrolpanel_category_price[";
            // line 710
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 710);
            echo "]\" value=\"0\" />
                                                                        <input type=\"checkbox\" class=\"ckb-switch\" name=\"module_ptcontrolpanel_category_price[";
            // line 711
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 711);
            echo "]\" id=\"input-category-price-";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 711);
            echo "\"
                                                                               data-toggle=\"toggle\" data-on=\"";
            // line 712
            echo ($context["text_enabled"] ?? null);
            echo "\" data-off=\"";
            echo ($context["text_disabled"] ?? null);
            echo "\" data-width=\"100\" data-height=\"36\" data-store-id=\"";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 712);
            echo "\"
                                                                                ";
            // line 713
            if ((($__internal_c8e66b28fe4788d592082dfe3aeeaa036a7caf1017aa84d9002984c1f4fbc030 = ($context["module_ptcontrolpanel_category_price"] ?? null)) && is_array($__internal_c8e66b28fe4788d592082dfe3aeeaa036a7caf1017aa84d9002984c1f4fbc030) || $__internal_c8e66b28fe4788d592082dfe3aeeaa036a7caf1017aa84d9002984c1f4fbc030 instanceof ArrayAccess ? ($__internal_c8e66b28fe4788d592082dfe3aeeaa036a7caf1017aa84d9002984c1f4fbc030[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 713)] ?? null) : null)) {
                echo " value=\"1\" checked ";
            } else {
                echo " value=\"0\" ";
            }
            echo ">
                                                                    </div>
                                                                </div>

                                                                <div class=\"form-group\">
                                                                    <label class=\"col-sm-4 control-label\" for=\"input-category-cart-";
            // line 718
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 718);
            echo "\">";
            echo ($context["entry_show_cart"] ?? null);
            echo "</label>
                                                                    <div class=\"col-sm-6\">
                                                                        <input type=\"hidden\" name=\"module_ptcontrolpanel_category_cart[";
            // line 720
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 720);
            echo "]\" value=\"0\" />
                                                                        <input type=\"checkbox\" class=\"ckb-switch\" name=\"module_ptcontrolpanel_category_cart[";
            // line 721
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 721);
            echo "]\" id=\"input-category-cart-";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 721);
            echo "\"
                                                                               data-toggle=\"toggle\" data-on=\"";
            // line 722
            echo ($context["text_enabled"] ?? null);
            echo "\" data-off=\"";
            echo ($context["text_disabled"] ?? null);
            echo "\" data-width=\"100\" data-height=\"36\" data-store-id=\"";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 722);
            echo "\"
                                                                                ";
            // line 723
            if ((($__internal_039139496843b11bef2e1873734e0f4e6f0334f99b26b9202f2107aca1929bb8 = ($context["module_ptcontrolpanel_category_cart"] ?? null)) && is_array($__internal_039139496843b11bef2e1873734e0f4e6f0334f99b26b9202f2107aca1929bb8) || $__internal_039139496843b11bef2e1873734e0f4e6f0334f99b26b9202f2107aca1929bb8 instanceof ArrayAccess ? ($__internal_039139496843b11bef2e1873734e0f4e6f0334f99b26b9202f2107aca1929bb8[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 723)] ?? null) : null)) {
                echo " value=\"1\" checked ";
            } else {
                echo " value=\"0\" ";
            }
            echo ">
                                                                    </div>
                                                                </div>

                                                                <div class=\"form-group\">
                                                                    <label class=\"col-sm-4 control-label\" for=\"input-category-wishlist-";
            // line 728
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 728);
            echo "\">";
            echo ($context["entry_show_wishlist"] ?? null);
            echo "</label>
                                                                    <div class=\"col-sm-6\">
                                                                        <input type=\"hidden\" name=\"module_ptcontrolpanel_category_wishlist[";
            // line 730
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 730);
            echo "]\" value=\"0\" />
                                                                        <input type=\"checkbox\" class=\"ckb-switch\" name=\"module_ptcontrolpanel_category_wishlist[";
            // line 731
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 731);
            echo "]\" id=\"input-category-wishlist-";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 731);
            echo "\"
                                                                               data-toggle=\"toggle\" data-on=\"";
            // line 732
            echo ($context["text_enabled"] ?? null);
            echo "\" data-off=\"";
            echo ($context["text_disabled"] ?? null);
            echo "\" data-width=\"100\" data-height=\"36\" data-store-id=\"";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 732);
            echo "\"
                                                                                ";
            // line 733
            if ((($__internal_925e03cbc484a83726b2283dd3b53369cf62a514035d11f764f348b039e42e86 = ($context["module_ptcontrolpanel_category_wishlist"] ?? null)) && is_array($__internal_925e03cbc484a83726b2283dd3b53369cf62a514035d11f764f348b039e42e86) || $__internal_925e03cbc484a83726b2283dd3b53369cf62a514035d11f764f348b039e42e86 instanceof ArrayAccess ? ($__internal_925e03cbc484a83726b2283dd3b53369cf62a514035d11f764f348b039e42e86[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 733)] ?? null) : null)) {
                echo " value=\"1\" checked ";
            } else {
                echo " value=\"0\" ";
            }
            echo ">
                                                                    </div>
                                                                </div>

                                                                <div class=\"form-group\">
                                                                    <label class=\"col-sm-4 control-label\" for=\"input-category-compare-";
            // line 738
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 738);
            echo "\">";
            echo ($context["entry_show_compare"] ?? null);
            echo "</label>
                                                                    <div class=\"col-sm-6\">
                                                                        <input type=\"hidden\" name=\"module_ptcontrolpanel_category_compare[";
            // line 740
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 740);
            echo "]\" value=\"0\" />
                                                                        <input type=\"checkbox\" class=\"ckb-switch\" name=\"module_ptcontrolpanel_category_compare[";
            // line 741
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 741);
            echo "]\" id=\"input-category-compare-";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 741);
            echo "\"
                                                                               data-toggle=\"toggle\" data-on=\"";
            // line 742
            echo ($context["text_enabled"] ?? null);
            echo "\" data-off=\"";
            echo ($context["text_disabled"] ?? null);
            echo "\" data-width=\"100\" data-height=\"36\" data-store-id=\"";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 742);
            echo "\"
                                                                                ";
            // line 743
            if ((($__internal_1851fce5e10e004219a620bc4ec54e0dce7d95e3cc5df26b354b442a89edf2a9 = ($context["module_ptcontrolpanel_category_compare"] ?? null)) && is_array($__internal_1851fce5e10e004219a620bc4ec54e0dce7d95e3cc5df26b354b442a89edf2a9) || $__internal_1851fce5e10e004219a620bc4ec54e0dce7d95e3cc5df26b354b442a89edf2a9 instanceof ArrayAccess ? ($__internal_1851fce5e10e004219a620bc4ec54e0dce7d95e3cc5df26b354b442a89edf2a9[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 743)] ?? null) : null)) {
                echo " value=\"1\" checked ";
            } else {
                echo " value=\"0\" ";
            }
            echo ">
                                                                    </div>
                                                                </div>

                                                                <div class=\"form-group\">
                                                                    <label class=\"col-sm-4 control-label\" for=\"input-category-prodes-";
            // line 748
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 748);
            echo "\">";
            echo ($context["entry_product_des"] ?? null);
            echo "</label>
                                                                    <div class=\"col-sm-6\">
                                                                        <input type=\"hidden\" name=\"module_ptcontrolpanel_category_prodes[";
            // line 750
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 750);
            echo "]\" value=\"0\" />
                                                                        <input type=\"checkbox\" class=\"ckb-switch\" name=\"module_ptcontrolpanel_category_prodes[";
            // line 751
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 751);
            echo "]\" id=\"input-category-prodes-";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 751);
            echo "\"
                                                                               data-toggle=\"toggle\" data-on=\"";
            // line 752
            echo ($context["text_enabled"] ?? null);
            echo "\" data-off=\"";
            echo ($context["text_disabled"] ?? null);
            echo "\" data-width=\"100\" data-height=\"36\" data-store-id=\"";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 752);
            echo "\"
                                                                                ";
            // line 753
            if ((($__internal_7f8b6b79c000ace681a97eb4e372ecbf3824a243268aa8909f315967b09890ac = ($context["module_ptcontrolpanel_category_prodes"] ?? null)) && is_array($__internal_7f8b6b79c000ace681a97eb4e372ecbf3824a243268aa8909f315967b09890ac) || $__internal_7f8b6b79c000ace681a97eb4e372ecbf3824a243268aa8909f315967b09890ac instanceof ArrayAccess ? ($__internal_7f8b6b79c000ace681a97eb4e372ecbf3824a243268aa8909f315967b09890ac[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 753)] ?? null) : null)) {
                echo " value=\"1\" checked ";
            } else {
                echo " value=\"0\" ";
            }
            echo ">
                                                                    </div>
                                                                </div>

                                                                <div class=\"form-group\">
                                                                    <label class=\"col-sm-4 control-label\" for=\"input-category-label-";
            // line 758
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 758);
            echo "\">";
            echo ($context["entry_label"] ?? null);
            echo "</label>
                                                                    <div class=\"col-sm-6\">
                                                                        <input type=\"hidden\" name=\"module_ptcontrolpanel_category_label[";
            // line 760
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 760);
            echo "]\" value=\"0\" />
                                                                        <input type=\"checkbox\" class=\"ckb-switch\" name=\"module_ptcontrolpanel_category_label[";
            // line 761
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 761);
            echo "]\" id=\"input-category-label-";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 761);
            echo "\"
                                                                               data-toggle=\"toggle\" data-on=\"";
            // line 762
            echo ($context["text_enabled"] ?? null);
            echo "\" data-off=\"";
            echo ($context["text_disabled"] ?? null);
            echo "\" data-width=\"100\" data-height=\"36\" data-store-id=\"";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 762);
            echo "\"
                                                                                ";
            // line 763
            if ((($__internal_f729ba442740d3f6c098998c72ec6936b2f5c5d7642933047145361560991768 = ($context["module_ptcontrolpanel_category_label"] ?? null)) && is_array($__internal_f729ba442740d3f6c098998c72ec6936b2f5c5d7642933047145361560991768) || $__internal_f729ba442740d3f6c098998c72ec6936b2f5c5d7642933047145361560991768 instanceof ArrayAccess ? ($__internal_f729ba442740d3f6c098998c72ec6936b2f5c5d7642933047145361560991768[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 763)] ?? null) : null)) {
                echo " value=\"1\" checked ";
            } else {
                echo " value=\"0\" ";
            }
            echo ">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 770
        echo "                                            </div>

                                            <div class=\"tab-pane\" id=\"tab-advance\">
                                                ";
        // line 773
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 774
            echo "                                                    <div class=\"frm-field frm-field-";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 774);
            echo "\">
                                                        <div class=\"form-group\">
                                                            <label class=\"col-sm-3 control-label\" for=\"input-theme\">";
            // line 776
            echo ($context["entry_custom_css"] ?? null);
            echo "</label>
                                                            <div class=\"col-sm-9\">
                                                                <textarea class=\"form-control code-area\" rows=\"15\" name=\"module_ptcontrolpanel_custom_css[";
            // line 778
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 778);
            echo "]\">";
            echo (($__internal_9092e96c712a0a0873eb67a677c52108ea03891525ad69649382158e33697b57 = ($context["module_ptcontrolpanel_custom_css"] ?? null)) && is_array($__internal_9092e96c712a0a0873eb67a677c52108ea03891525ad69649382158e33697b57) || $__internal_9092e96c712a0a0873eb67a677c52108ea03891525ad69649382158e33697b57 instanceof ArrayAccess ? ($__internal_9092e96c712a0a0873eb67a677c52108ea03891525ad69649382158e33697b57[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 778)] ?? null) : null);
            echo "</textarea>
                                                            </div>
                                                        </div>

                                                        <div class=\"form-group\">
                                                            <label class=\"col-sm-3 control-label\" for=\"input-theme\">";
            // line 783
            echo ($context["entry_custom_js"] ?? null);
            echo "</label>
                                                            <div class=\"col-sm-9\">
                                                                <textarea class=\"form-control code-area\" rows=\"15\" name=\"module_ptcontrolpanel_custom_js[";
            // line 785
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 785);
            echo "]\">";
            echo (($__internal_fd5cc34776dcec03d7489322c0a0c72f1de5a01209896acc469d764bdcfe2898 = ($context["module_ptcontrolpanel_custom_js"] ?? null)) && is_array($__internal_fd5cc34776dcec03d7489322c0a0c72f1de5a01209896acc469d764bdcfe2898) || $__internal_fd5cc34776dcec03d7489322c0a0c72f1de5a01209896acc469d764bdcfe2898 instanceof ArrayAccess ? ($__internal_fd5cc34776dcec03d7489322c0a0c72f1de5a01209896acc469d764bdcfe2898[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 785)] ?? null) : null);
            echo "</textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 790
        echo "                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class=\"body-stylesheet-link\"></div>
<div class=\"heading-stylesheet-link\"></div>
<script type=\"text/javascript\">
    \$(document).ready(function () {
        \$('.frm-field').hide();
        \$('.frm-field-0').show();

        \$('#input-store').change(function () {
            \$('.frm-field').hide();
            var store = \$(this).val();
            \$('.frm-field-' + store).show();
        });


        \$('.toggle.btn').on('click', function () {
            var ckb_status = parseInt(\$(this).find('.ckb-switch').val());
            if(ckb_status == 1) {
                \$(this).find('.ckb-switch').val('0');
            } else {
                \$(this).find('.ckb-switch').val('1');
            }
        });

        ";
        // line 825
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 826
            echo "            /* Body */
            var body_font_css_link_";
            // line 827
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 827);
            echo " = \$('#body-font-family-link-";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 827);
            echo "').val();
            var body_font_stylesheet_link_";
            // line 828
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 828);
            echo " = '<link href=\"' + body_font_css_link_";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 828);
            echo " + '\" rel=\"stylesheet\">';
            var body_family_";
            // line 829
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 829);
            echo " =  \$('#body-font-family-name-";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 829);
            echo "').val();
            var body_category_";
            // line 830
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 830);
            echo " =  \$('#body-font-family-cate-";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 830);
            echo "').val();
            var body_font_weight";
            // line 831
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 831);
            echo " = \$('#body-font-weight-";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 831);
            echo "').val();

            \$('.body-stylesheet-link').append(body_font_stylesheet_link_";
            // line 833
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 833);
            echo ");
            \$('.font-body-demo-";
            // line 834
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 834);
            echo "').css(\"font-family\", \"'\" + body_family_";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 834);
            echo " + \"', \" + body_category_";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 834);
            echo ");
            \$('.font-body-demo-";
            // line 835
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 835);
            echo "').css(\"font-weight\", body_font_weight";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 835);
            echo ");

            /* Heading */
            var heading_font_css_link_";
            // line 838
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 838);
            echo " = \$('#heading-font-family-link-";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 838);
            echo "').val();
            var heading_font_stylesheet_link_";
            // line 839
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 839);
            echo " = '<link href=\"' + heading_font_css_link_";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 839);
            echo " + '\" rel=\"stylesheet\">';
            var heading_family_";
            // line 840
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 840);
            echo " =  \$('#heading-font-family-name-";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 840);
            echo "').val();
            var heading_category_";
            // line 841
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 841);
            echo " =  \$('#heading-font-family-cate-";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 841);
            echo "').val();
            var heading_font_weight";
            // line 842
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 842);
            echo " = \$('#heading-font-weight-";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 842);
            echo "').val();

            \$('.heading-stylesheet-link').append(heading_font_stylesheet_link_";
            // line 844
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 844);
            echo ");
            \$('.font-heading-demo-";
            // line 845
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 845);
            echo "').css(\"font-family\", \"'\" + heading_family_";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 845);
            echo " + \"', \" + heading_category_";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 845);
            echo ");
            \$('.font-heading-demo-";
            // line 846
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 846);
            echo "').css(\"font-weight\", heading_font_weight";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 846);
            echo ");
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 848
        echo "    });

    function chooseBodyFont(id, store_id) {
        var family = \$(\"#body-font-\" + id).data('family');
        var family_val = \$(\"#body-font-\" + id).data('family-val');
        var variants = \$(\"#body-font-\" + id).data('variants');
        var subsets = \$(\"#body-font-\" + id).data('subsets');
        var category = \$(\"#body-font-\" + id).data('category');

        var font_css_link = 'https://fonts.googleapis.com/css?family=' + family_val + \":\" + variants + '&subset=' + subsets;
        var font_stylesheet_link = '<link href=\"' + font_css_link + '\" rel=\"stylesheet\">';

        \$('.body-stylesheet-link').append(font_stylesheet_link);

        \$('#body-font-family-name-' + store_id).val(family);
        \$('#body-font-family-cate-' + store_id).val(category);
        \$('#body-font-family-link-' + store_id).val(font_css_link);

        \$('.font-body-demo-' + store_id).css(\"font-family\", \"'\" + family + \"', \" + category);
    }

    function chooseBodyWeight(value, store_id) {
        \$('.font-body-demo-' + store_id).css(\"font-weight\", value);
    }

    function chooseHeadingFont(id, store_id) {
        var family = \$(\"#heading-font-\" + id).data('family');
        var family_val = \$(\"#heading-font-\" + id).data('family-val');
        var variants = \$(\"#heading-font-\" + id).data('variants');
        var subsets = \$(\"#heading-font-\" + id).data('subsets');
        var category = \$(\"#heading-font-\" + id).data('category');

        var font_css_link = 'https://fonts.googleapis.com/css?family=' + family_val + \":\" + variants + '&subset=' + subsets;
        var font_stylesheet_link = '<link href=\"' + font_css_link + '\" rel=\"stylesheet\">';

        \$('.heading-stylesheet-link').append(font_stylesheet_link);

        \$('#heading-font-family-name-' + store_id).val(family);
        \$('#heading-font-family-cate-' + store_id).val(category);
        \$('#heading-font-family-link-' + store_id).val(font_css_link);

        \$('.font-heading-demo-' + store_id).css(\"font-family\", \"'\" + family + \"', \" + category);
    }

    function chooseHeadingWeight(value, store_id) {
        \$('.font-heading-demo-' + store_id).css(\"font-weight\", value);
    }

    function skin_import(database) {
        \$('#form-data input[name=\\'file\\']').val(database);

        \$('#form-data').submit();
    }

    \$('input[class=\\'rd-header-option\\']').on('change', function () {
        var header_chosen = \$(this).attr('id');
        \$('.lb-header-option').removeClass('active');
        \$('#' + header_chosen).closest('.header-option').find('.lb-header-option').addClass('active');
    });
</script>
";
        // line 908
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "plaza/module/ptcontrolpanel.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  2805 => 908,  2743 => 848,  2733 => 846,  2725 => 845,  2721 => 844,  2714 => 842,  2708 => 841,  2702 => 840,  2696 => 839,  2690 => 838,  2682 => 835,  2674 => 834,  2670 => 833,  2663 => 831,  2657 => 830,  2651 => 829,  2645 => 828,  2639 => 827,  2636 => 826,  2632 => 825,  2595 => 790,  2582 => 785,  2577 => 783,  2567 => 778,  2562 => 776,  2556 => 774,  2552 => 773,  2547 => 770,  2530 => 763,  2522 => 762,  2516 => 761,  2512 => 760,  2505 => 758,  2493 => 753,  2485 => 752,  2479 => 751,  2475 => 750,  2468 => 748,  2456 => 743,  2448 => 742,  2442 => 741,  2438 => 740,  2431 => 738,  2419 => 733,  2411 => 732,  2405 => 731,  2401 => 730,  2394 => 728,  2382 => 723,  2374 => 722,  2368 => 721,  2364 => 720,  2357 => 718,  2345 => 713,  2337 => 712,  2331 => 711,  2327 => 710,  2320 => 708,  2315 => 706,  2304 => 702,  2296 => 701,  2290 => 700,  2286 => 699,  2279 => 697,  2267 => 692,  2259 => 691,  2253 => 690,  2249 => 689,  2242 => 687,  2230 => 682,  2222 => 681,  2216 => 680,  2212 => 679,  2205 => 677,  2193 => 672,  2185 => 671,  2179 => 670,  2175 => 669,  2168 => 667,  2156 => 662,  2148 => 661,  2142 => 660,  2138 => 659,  2131 => 657,  2126 => 655,  2114 => 650,  2106 => 649,  2100 => 648,  2096 => 647,  2089 => 645,  2077 => 640,  2069 => 639,  2063 => 638,  2059 => 637,  2052 => 635,  2047 => 633,  2038 => 629,  2032 => 628,  2026 => 627,  2020 => 625,  2016 => 624,  2011 => 621,  1996 => 614,  1990 => 613,  1984 => 612,  1978 => 611,  1971 => 609,  1959 => 604,  1951 => 603,  1945 => 602,  1938 => 600,  1927 => 596,  1919 => 595,  1913 => 594,  1909 => 593,  1902 => 591,  1890 => 586,  1880 => 583,  1875 => 581,  1863 => 576,  1855 => 575,  1847 => 574,  1841 => 573,  1834 => 571,  1822 => 566,  1814 => 565,  1808 => 564,  1804 => 563,  1797 => 561,  1784 => 555,  1776 => 554,  1772 => 553,  1767 => 551,  1758 => 549,  1750 => 548,  1744 => 547,  1740 => 546,  1733 => 544,  1721 => 539,  1713 => 538,  1707 => 537,  1703 => 536,  1696 => 534,  1684 => 529,  1676 => 528,  1670 => 527,  1666 => 526,  1659 => 524,  1647 => 519,  1639 => 518,  1633 => 517,  1629 => 516,  1622 => 514,  1616 => 512,  1612 => 511,  1607 => 508,  1597 => 503,  1591 => 502,  1579 => 500,  1576 => 499,  1572 => 498,  1566 => 497,  1559 => 495,  1547 => 490,  1537 => 487,  1530 => 485,  1518 => 480,  1510 => 479,  1504 => 478,  1500 => 477,  1493 => 475,  1481 => 470,  1473 => 469,  1467 => 468,  1463 => 467,  1456 => 465,  1443 => 461,  1436 => 459,  1423 => 453,  1415 => 452,  1409 => 451,  1402 => 449,  1390 => 444,  1382 => 443,  1376 => 442,  1372 => 441,  1365 => 439,  1353 => 434,  1345 => 433,  1339 => 432,  1335 => 431,  1328 => 429,  1316 => 424,  1308 => 423,  1302 => 422,  1298 => 421,  1291 => 419,  1279 => 414,  1271 => 413,  1265 => 412,  1261 => 411,  1254 => 409,  1242 => 404,  1234 => 403,  1228 => 402,  1224 => 401,  1217 => 399,  1211 => 397,  1207 => 396,  1200 => 392,  1195 => 391,  1180 => 384,  1175 => 382,  1165 => 377,  1160 => 375,  1150 => 370,  1145 => 368,  1135 => 363,  1130 => 361,  1125 => 359,  1113 => 352,  1108 => 350,  1103 => 348,  1091 => 341,  1086 => 339,  1075 => 333,  1069 => 332,  1063 => 331,  1057 => 330,  1051 => 329,  1043 => 328,  1038 => 326,  1027 => 322,  1019 => 321,  1011 => 320,  999 => 317,  993 => 313,  984 => 310,  976 => 309,  967 => 308,  960 => 307,  956 => 306,  948 => 305,  942 => 304,  937 => 302,  927 => 295,  920 => 291,  910 => 286,  905 => 284,  895 => 279,  890 => 277,  879 => 271,  873 => 270,  867 => 269,  861 => 268,  855 => 267,  847 => 266,  842 => 264,  832 => 259,  827 => 257,  816 => 253,  808 => 252,  800 => 251,  788 => 248,  783 => 245,  774 => 242,  766 => 241,  757 => 240,  750 => 239,  746 => 238,  738 => 237,  732 => 236,  727 => 234,  717 => 227,  710 => 223,  701 => 219,  695 => 218,  689 => 217,  683 => 216,  677 => 214,  673 => 213,  668 => 210,  658 => 205,  647 => 202,  638 => 200,  630 => 199,  620 => 198,  616 => 197,  613 => 196,  609 => 195,  604 => 193,  599 => 190,  592 => 188,  584 => 186,  578 => 184,  576 => 183,  572 => 182,  566 => 181,  562 => 180,  555 => 179,  551 => 178,  546 => 176,  537 => 172,  531 => 171,  525 => 169,  521 => 168,  516 => 165,  501 => 160,  495 => 159,  490 => 157,  478 => 152,  472 => 151,  468 => 150,  464 => 149,  459 => 147,  447 => 142,  441 => 141,  437 => 140,  433 => 139,  428 => 137,  416 => 132,  410 => 131,  406 => 130,  402 => 129,  397 => 127,  385 => 122,  379 => 121,  375 => 120,  371 => 119,  366 => 117,  354 => 112,  348 => 111,  344 => 110,  340 => 109,  335 => 107,  322 => 101,  314 => 100,  310 => 99,  305 => 97,  299 => 95,  295 => 94,  288 => 90,  282 => 87,  274 => 82,  270 => 81,  266 => 80,  262 => 79,  258 => 78,  254 => 77,  250 => 76,  242 => 70,  227 => 68,  223 => 67,  217 => 64,  207 => 56,  201 => 55,  198 => 54,  186 => 52,  181 => 49,  166 => 47,  162 => 46,  154 => 45,  144 => 44,  137 => 43,  134 => 42,  129 => 41,  127 => 40,  121 => 37,  114 => 32,  106 => 28,  103 => 27,  95 => 23,  92 => 22,  84 => 18,  82 => 17,  76 => 13,  65 => 11,  61 => 10,  56 => 8,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "plaza/module/ptcontrolpanel.twig", "");
    }
}
