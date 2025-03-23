<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* themes/theme__100222/theme__100222/templates/page--node.html.twig */
class __TwigTemplate_457f8a43843d2e1e36f13f7668740096 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        $context["theme_path"] = (($context["base_path"] ?? null) . $this->extensions['Drupal\Core\Template\TwigExtension']->getActiveThemePath());
        // line 2
        $context["theme_path1"] = (($context["theme_path"] ?? null) . "/content");
        // line 3
        yield "<div class=\"ttr_banner_menu\">
";
        // line 5
        if ((((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "menuabovecolumn1", [], "any", false, false, true, 5) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "menuabovecolumn2", [], "any", false, false, true, 5)) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "menuabovecolumn3", [], "any", false, false, true, 5)) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "menuabovecolumn4", [], "any", false, false, true, 5))) {
            // line 7
            yield "<div class=\"ttr_banner_menu_inner_above_widget_container\">
<div class=\"ttr_banner_menu_inner_above0 container row\">
";
            // line 9
            $context["showcolumn"] = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "menuabovecolumn1", [], "any", false, false, true, 9);
            // line 10
            if (($context["showcolumn"] ?? null)) {
                // line 11
                yield "<div class=\"cell1 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\">
<div class=\"menuabovecolumn1\">
";
                // line 13
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "menuabovecolumn1", [], "any", false, false, true, 13), "html", null, true);
                yield "
</div>
</div>
";
            } else {
                // line 17
                yield "<div class=\"cell1 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\"  style=\"background-color:transparent;\">
 
</div>
";
            }
            // line 21
            yield "<div class=\" visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
";
            // line 22
            $context["showcolumn"] = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "menuabovecolumn2", [], "any", false, false, true, 22);
            // line 23
            if (($context["showcolumn"] ?? null)) {
                // line 24
                yield "<div class=\"cell2 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\">
<div class=\"menuabovecolumn2\">
";
                // line 26
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "menuabovecolumn2", [], "any", false, false, true, 26), "html", null, true);
                yield "
</div>
</div>
";
            } else {
                // line 30
                yield "<div class=\"cell2 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\"  style=\"background-color:transparent;\">
 
</div>
";
            }
            // line 34
            yield "<div class=\" visible-md-block d-md-block visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
";
            // line 35
            $context["showcolumn"] = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "menuabovecolumn3", [], "any", false, false, true, 35);
            // line 36
            if (($context["showcolumn"] ?? null)) {
                // line 37
                yield "<div class=\"cell3 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\">
<div class=\"menuabovecolumn3\">
";
                // line 39
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "menuabovecolumn3", [], "any", false, false, true, 39), "html", null, true);
                yield "
</div>
</div>
";
            } else {
                // line 43
                yield "<div class=\"cell3 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\"  style=\"background-color:transparent;\">
 
</div>
";
            }
            // line 47
            yield "<div class=\" visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
";
            // line 48
            $context["showcolumn"] = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "menuabovecolumn4", [], "any", false, false, true, 48);
            // line 49
            if (($context["showcolumn"] ?? null)) {
                // line 50
                yield "<div class=\"cell4 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\">
<div class=\"menuabovecolumn4\">
";
                // line 52
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "menuabovecolumn4", [], "any", false, false, true, 52), "html", null, true);
                yield "
</div>
</div>
";
            } else {
                // line 56
                yield "<div class=\"cell4 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\"  style=\"background-color:transparent;\">
 
</div>
";
            }
            // line 60
            yield "<div class=\" visible-lg-block d-xl-block d-lg-block visible-md-block d-md-block visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
<div class=\" visible-lg-block d-xl-block d-lg-block visible-md-block d-md-block visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
</div>
</div>
<div style=\"clear: both;\"></div>
";
        }
        // line 66
        yield "</div>
<div id=\"ttr_menu\"> 
<div class=\"margin_collapsetop\"></div>
<nav class=\"navbar-default navbar-expand-md navbar\">
<div id=\"ttr_menu_inner_in\"> 
<div class=\"ttr_menu_element_alignment container\">
<div class=\"ttr_images_container\">
</div>
<div id=\"navigationmenu\">
<div class=\"navbar-header\">
<button id=\"nav-expander\" data-target=\".navbar-collapse\" data-toggle=\"collapse\" class=\"navbar-toggle\" type=\"button\">
<span class=\"ttr_menu_toggle_button\">
<span class=\"sr-only\">
</span>
<span class=\"icon-bar\">
</span>
<span class=\"icon-bar\">
</span>
<span class=\"icon-bar\">
</span>
</span>
<span class=\"ttr_menu_button_text\">
Menu
</span>
</button>
</div>
<div class=\"menu-center collapse navbar-collapse\">
";
        // line 93
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 93), "html", null, true);
        yield "
</div>
<div class=\"ttr_images_container\">
<div class=\"ttr_menu_logo\">
<a href=\"\">
<img src=\"";
        // line 98
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (($context["theme_path"] ?? null) . "/menulogo.png"), "html", null, true);
        yield "\" alt=\"";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Home"));
        yield "\"class=\"\" />
</a>
</div>
</div>
</div>
</div>
</div>
</nav>
</div>
<div class=\"ttr_banner_menu\">
";
        // line 109
        if ((((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "menubelowcolumn1", [], "any", false, false, true, 109) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "menubelowcolumn2", [], "any", false, false, true, 109)) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "menubelowcolumn3", [], "any", false, false, true, 109)) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "menubelowcolumn4", [], "any", false, false, true, 109))) {
            // line 111
            yield "<div class=\"ttr_banner_menu_inner_below_widget_container\">
<div class=\"ttr_banner_menu_inner_below0 container row\">
";
            // line 113
            $context["showcolumn"] = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "menubelowcolumn1", [], "any", false, false, true, 113);
            // line 114
            if (($context["showcolumn"] ?? null)) {
                // line 115
                yield "<div class=\"cell1 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\">
<div class=\"menubelowcolumn1\">
";
                // line 117
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "menubelowcolumn1", [], "any", false, false, true, 117), "html", null, true);
                yield "
</div>
</div>
";
            } else {
                // line 121
                yield "<div class=\"cell1 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\"  style=\"background-color:transparent;\">
 
</div>
";
            }
            // line 125
            yield "<div class=\" visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
";
            // line 126
            $context["showcolumn"] = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "menubelowcolumn2", [], "any", false, false, true, 126);
            // line 127
            if (($context["showcolumn"] ?? null)) {
                // line 128
                yield "<div class=\"cell2 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\">
<div class=\"menubelowcolumn2\">
";
                // line 130
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "menubelowcolumn2", [], "any", false, false, true, 130), "html", null, true);
                yield "
</div>
</div>
";
            } else {
                // line 134
                yield "<div class=\"cell2 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\"  style=\"background-color:transparent;\">
 
</div>
";
            }
            // line 138
            yield "<div class=\" visible-md-block d-md-block visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
";
            // line 139
            $context["showcolumn"] = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "menubelowcolumn3", [], "any", false, false, true, 139);
            // line 140
            if (($context["showcolumn"] ?? null)) {
                // line 141
                yield "<div class=\"cell3 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\">
<div class=\"menubelowcolumn3\">
";
                // line 143
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "menubelowcolumn3", [], "any", false, false, true, 143), "html", null, true);
                yield "
</div>
</div>
";
            } else {
                // line 147
                yield "<div class=\"cell3 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\"  style=\"background-color:transparent;\">
 
</div>
";
            }
            // line 151
            yield "<div class=\" visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
";
            // line 152
            $context["showcolumn"] = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "menubelowcolumn4", [], "any", false, false, true, 152);
            // line 153
            if (($context["showcolumn"] ?? null)) {
                // line 154
                yield "<div class=\"cell4 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\">
<div class=\"menubelowcolumn4\">
";
                // line 156
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "menubelowcolumn4", [], "any", false, false, true, 156), "html", null, true);
                yield "
</div>
</div>
";
            } else {
                // line 160
                yield "<div class=\"cell4 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\"  style=\"background-color:transparent;\">
 
</div>
";
            }
            // line 164
            yield "<div class=\" visible-lg-block d-xl-block d-lg-block visible-md-block d-md-block visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
<div class=\" visible-lg-block d-xl-block d-lg-block visible-md-block d-md-block visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
</div>
</div>
<div style=\"clear: both;\"></div>
";
        }
        // line 170
        yield "</div>
<div class=\"ttr_banner_header\">
";
        // line 173
        if ((((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "headerabovecolumn1", [], "any", false, false, true, 173) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "headerabovecolumn2", [], "any", false, false, true, 173)) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "headerabovecolumn3", [], "any", false, false, true, 173)) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "headerabovecolumn4", [], "any", false, false, true, 173))) {
            // line 175
            yield "<div class=\"ttr_banner_header_inner_above_widget_container\">
<div class=\"ttr_banner_header_inner_above0 container row\">
";
            // line 177
            $context["showcolumn"] = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "headerabovecolumn1", [], "any", false, false, true, 177);
            // line 178
            if (($context["showcolumn"] ?? null)) {
                // line 179
                yield "<div class=\"cell1 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\">
<div class=\"headerabovecolumn1\">
";
                // line 181
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "headerabovecolumn1", [], "any", false, false, true, 181), "html", null, true);
                yield "
</div>
</div>
";
            } else {
                // line 185
                yield "<div class=\"cell1 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\"  style=\"background-color:transparent;\">
 
</div>
";
            }
            // line 189
            yield "<div class=\" visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
";
            // line 190
            $context["showcolumn"] = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "headerabovecolumn2", [], "any", false, false, true, 190);
            // line 191
            if (($context["showcolumn"] ?? null)) {
                // line 192
                yield "<div class=\"cell2 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\">
<div class=\"headerabovecolumn2\">
";
                // line 194
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "headerabovecolumn2", [], "any", false, false, true, 194), "html", null, true);
                yield "
</div>
</div>
";
            } else {
                // line 198
                yield "<div class=\"cell2 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\"  style=\"background-color:transparent;\">
 
</div>
";
            }
            // line 202
            yield "<div class=\" visible-md-block d-md-block visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
";
            // line 203
            $context["showcolumn"] = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "headerabovecolumn3", [], "any", false, false, true, 203);
            // line 204
            if (($context["showcolumn"] ?? null)) {
                // line 205
                yield "<div class=\"cell3 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\">
<div class=\"headerabovecolumn3\">
";
                // line 207
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "headerabovecolumn3", [], "any", false, false, true, 207), "html", null, true);
                yield "
</div>
</div>
";
            } else {
                // line 211
                yield "<div class=\"cell3 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\"  style=\"background-color:transparent;\">
 
</div>
";
            }
            // line 215
            yield "<div class=\" visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
";
            // line 216
            $context["showcolumn"] = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "headerabovecolumn4", [], "any", false, false, true, 216);
            // line 217
            if (($context["showcolumn"] ?? null)) {
                // line 218
                yield "<div class=\"cell4 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\">
<div class=\"headerabovecolumn4\">
";
                // line 220
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "headerabovecolumn4", [], "any", false, false, true, 220), "html", null, true);
                yield "
</div>
</div>
";
            } else {
                // line 224
                yield "<div class=\"cell4 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\"  style=\"background-color:transparent;\">
 
</div>
";
            }
            // line 228
            yield "<div class=\" visible-lg-block d-xl-block d-lg-block visible-md-block d-md-block visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
<div class=\" visible-lg-block d-xl-block d-lg-block visible-md-block d-md-block visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
</div>
</div>
<div style=\"clear: both;\"></div>
";
        }
        // line 234
        yield "</div>
<header id=\"ttr_header\">
<div class=\"margin_collapsetop\"></div>
<div id=\"ttr_header_inner\">
<div class=\"ttr_header_element_alignment container\">
<div class=\"ttr_images_container\">
</div>
</div>
";
        // line 242
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 242), "html", null, true);
        yield " 
<div class=\"ttr_images_container\">
";
        // line 245
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "headershape00", [], "any", false, false, true, 245)) {
            // line 247
            $context["showcolumn"] = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "headershape00", [], "any", false, false, true, 247);
            // line 248
            if (($context["showcolumn"] ?? null)) {
                // line 249
                yield "<div class=\"ttr_headershape01\">
";
                // line 250
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "headershape00", [], "any", false, false, true, 250), "html", null, true);
                yield "
</div>
";
            }
        }
        // line 254
        yield "<a href=\"http://www.facebook.com/TemplateToaster\" class=\"ttr_header_facebook \" target=\"_self\">
</a>
<a href=\"https://www.linkedin.com/company/templatetoaster/\" class=\"ttr_header_linkedin \" target=\"_self\">
</a>
<a href=\"http://twitter.com/templatetoaster\" class=\"ttr_header_twitter \" target=\"_self\">
</a>
<a href=\"https://plus.google.com/+TemplateToaster\" class=\"ttr_header_instagram \" target=\"https://plus.google.com/+TemplateToaster\">
</a>
<a href=\"https://www.youtube.com/templatetoaster\" class=\"ttr_header_youtube \" target=\"https://www.youtube.com/templatetoaster\">
</a>
</div>
</div>
</header>
<div class=\"ttr_banner_header\">
";
        // line 269
        if ((((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "headerbelowcolumn1", [], "any", false, false, true, 269) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "headerbelowcolumn2", [], "any", false, false, true, 269)) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "headerbelowcolumn3", [], "any", false, false, true, 269)) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "headerbelowcolumn4", [], "any", false, false, true, 269))) {
            // line 271
            yield "<div class=\"ttr_banner_header_inner_below_widget_container\">
<div class=\"ttr_banner_header_inner_below0 container row\">
";
            // line 273
            $context["showcolumn"] = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "headerbelowcolumn1", [], "any", false, false, true, 273);
            // line 274
            if (($context["showcolumn"] ?? null)) {
                // line 275
                yield "<div class=\"cell1 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\">
<div class=\"headerbelowcolumn1\">
";
                // line 277
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "headerbelowcolumn1", [], "any", false, false, true, 277), "html", null, true);
                yield "
</div>
</div>
";
            } else {
                // line 281
                yield "<div class=\"cell1 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\"  style=\"background-color:transparent;\">
 
</div>
";
            }
            // line 285
            yield "<div class=\" visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
";
            // line 286
            $context["showcolumn"] = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "headerbelowcolumn2", [], "any", false, false, true, 286);
            // line 287
            if (($context["showcolumn"] ?? null)) {
                // line 288
                yield "<div class=\"cell2 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\">
<div class=\"headerbelowcolumn2\">
";
                // line 290
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "headerbelowcolumn2", [], "any", false, false, true, 290), "html", null, true);
                yield "
</div>
</div>
";
            } else {
                // line 294
                yield "<div class=\"cell2 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\"  style=\"background-color:transparent;\">
 
</div>
";
            }
            // line 298
            yield "<div class=\" visible-md-block d-md-block visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
";
            // line 299
            $context["showcolumn"] = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "headerbelowcolumn3", [], "any", false, false, true, 299);
            // line 300
            if (($context["showcolumn"] ?? null)) {
                // line 301
                yield "<div class=\"cell3 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\">
<div class=\"headerbelowcolumn3\">
";
                // line 303
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "headerbelowcolumn3", [], "any", false, false, true, 303), "html", null, true);
                yield "
</div>
</div>
";
            } else {
                // line 307
                yield "<div class=\"cell3 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\"  style=\"background-color:transparent;\">
 
</div>
";
            }
            // line 311
            yield "<div class=\" visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
";
            // line 312
            $context["showcolumn"] = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "headerbelowcolumn4", [], "any", false, false, true, 312);
            // line 313
            if (($context["showcolumn"] ?? null)) {
                // line 314
                yield "<div class=\"cell4 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\">
<div class=\"headerbelowcolumn4\">
";
                // line 316
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "headerbelowcolumn4", [], "any", false, false, true, 316), "html", null, true);
                yield "
</div>
</div>
";
            } else {
                // line 320
                yield "<div class=\"cell4 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\"  style=\"background-color:transparent;\">
 
</div>
";
            }
            // line 324
            yield "<div class=\" visible-lg-block d-xl-block d-lg-block visible-md-block d-md-block visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
<div class=\" visible-lg-block d-xl-block d-lg-block visible-md-block d-md-block visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
</div>
</div>
<div style=\"clear: both;\"></div>
";
        }
        // line 330
        yield "</div>
<div class=\"margin_collapsetop\"></div>
<div id=\"ttr_page\" class=\"container\">
<div id=\"ttr_content_and_sidebar_container\">
<div id=\"ttr_content\">
";
        // line 335
        $context["type"] = CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "getType", [], "any", false, false, true, 335);
        // line 336
        if ((($context["type"] ?? null) == "page")) {
            // line 337
            yield "<div id=\"ttr_html_content_margin\" class=\"container-fluid\">
";
        } else {
            // line 339
            yield "<div id=\"ttr_content_margin\" class=\"container-fluid\">
";
        }
        // line 341
        yield "<div class=\"margin_collapsetop\"></div>
";
        // line 342
        if (($context["breadcrumb"] ?? null)) {
            // line 343
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["breadcrumb"] ?? null), "html", null, true);
            yield "
";
        }
        // line 346
        if ((((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "contenttopcolumn1", [], "any", false, false, true, 346) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "contenttopcolumn2", [], "any", false, false, true, 346)) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "contenttopcolumn3", [], "any", false, false, true, 346)) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "contenttopcolumn4", [], "any", false, false, true, 346))) {
            // line 348
            yield "<div class=\"ttr_topcolumn_widget_container\">
<div class=\"contenttopcolumn0 row\">
";
            // line 350
            $context["showcolumn"] = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "contenttopcolumn1", [], "any", false, false, true, 350);
            // line 351
            if (($context["showcolumn"] ?? null)) {
                // line 352
                yield "<div class=\"cell1 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\">
<div class=\"topcolumn1\">
";
                // line 354
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "contenttopcolumn1", [], "any", false, false, true, 354), "html", null, true);
                yield "
</div>
</div>
";
            } else {
                // line 358
                yield "<div class=\"cell1 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\"  style=\"background-color:transparent;\">
 
</div>
";
            }
            // line 362
            yield "<div class=\" visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
";
            // line 363
            $context["showcolumn"] = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "contenttopcolumn2", [], "any", false, false, true, 363);
            // line 364
            if (($context["showcolumn"] ?? null)) {
                // line 365
                yield "<div class=\"cell2 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\">
<div class=\"topcolumn2\">
";
                // line 367
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "contenttopcolumn2", [], "any", false, false, true, 367), "html", null, true);
                yield "
</div>
</div>
";
            } else {
                // line 371
                yield "<div class=\"cell2 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\"  style=\"background-color:transparent;\">
 
</div>
";
            }
            // line 375
            yield "<div class=\" visible-md-block d-md-block visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
";
            // line 376
            $context["showcolumn"] = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "contenttopcolumn3", [], "any", false, false, true, 376);
            // line 377
            if (($context["showcolumn"] ?? null)) {
                // line 378
                yield "<div class=\"cell3 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\">
<div class=\"topcolumn3\">
";
                // line 380
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "contenttopcolumn3", [], "any", false, false, true, 380), "html", null, true);
                yield "
</div>
</div>
";
            } else {
                // line 384
                yield "<div class=\"cell3 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\"  style=\"background-color:transparent;\">
 
</div>
";
            }
            // line 388
            yield "<div class=\" visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
";
            // line 389
            $context["showcolumn"] = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "contenttopcolumn4", [], "any", false, false, true, 389);
            // line 390
            if (($context["showcolumn"] ?? null)) {
                // line 391
                yield "<div class=\"cell4 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\">
<div class=\"topcolumn4\">
";
                // line 393
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "contenttopcolumn4", [], "any", false, false, true, 393), "html", null, true);
                yield "
</div>
</div>
";
            } else {
                // line 397
                yield "<div class=\"cell4 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\"  style=\"background-color:transparent;\">
 
</div>
";
            }
            // line 401
            yield "<div class=\" visible-lg-block d-xl-block d-lg-block visible-md-block d-md-block visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
<div class=\" visible-lg-block d-xl-block d-lg-block visible-md-block d-md-block visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
</div>
</div>
<div style=\"clear: both;\"></div>
";
        }
        // line 407
        yield "<div style=\"clear:both;\">
</div>
";
        // line 409
        if (($context["tabs"] ?? null)) {
            // line 410
            yield "<div style=\"clear:both;\" class=\"tabs\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["tabs"] ?? null), "html", null, true);
            yield "</div>
";
        }
        // line 412
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 412), "html", null, true);
        yield "
";
        // line 413
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "messages", [], "any", false, false, true, 413), "html", null, true);
        yield "
";
        // line 414
        if (($context["action_links"] ?? null)) {
            // line 415
            yield "<ul class=\"action-links\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["action_links"] ?? null), "html", null, true);
            yield "</ul>";
        }
        // line 416
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 416), "html", null, true);
        yield "
";
        // line 418
        if ((((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "contentbottomcolumn1", [], "any", false, false, true, 418) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "contentbottomcolumn2", [], "any", false, false, true, 418)) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "contentbottomcolumn3", [], "any", false, false, true, 418)) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "contentbottomcolumn4", [], "any", false, false, true, 418))) {
            // line 420
            yield "<div class=\"ttr_bottomcolumn_widget_container\">
<div class=\"contentbottomcolumn0 row\">
";
            // line 422
            $context["showcolumn"] = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "contentbottomcolumn1", [], "any", false, false, true, 422);
            // line 423
            if (($context["showcolumn"] ?? null)) {
                // line 424
                yield "<div class=\"cell1 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\">
<div class=\"bottomcolumn1\">
";
                // line 426
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "contentbottomcolumn1", [], "any", false, false, true, 426), "html", null, true);
                yield "
</div>
</div>
";
            } else {
                // line 430
                yield "<div class=\"cell1 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\"  style=\"background-color:transparent;\">
 
</div>
";
            }
            // line 434
            yield "<div class=\" visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
";
            // line 435
            $context["showcolumn"] = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "contentbottomcolumn2", [], "any", false, false, true, 435);
            // line 436
            if (($context["showcolumn"] ?? null)) {
                // line 437
                yield "<div class=\"cell2 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\">
<div class=\"bottomcolumn2\">
";
                // line 439
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "contentbottomcolumn2", [], "any", false, false, true, 439), "html", null, true);
                yield "
</div>
</div>
";
            } else {
                // line 443
                yield "<div class=\"cell2 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\"  style=\"background-color:transparent;\">
 
</div>
";
            }
            // line 447
            yield "<div class=\" visible-md-block d-md-block visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
";
            // line 448
            $context["showcolumn"] = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "contentbottomcolumn3", [], "any", false, false, true, 448);
            // line 449
            if (($context["showcolumn"] ?? null)) {
                // line 450
                yield "<div class=\"cell3 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\">
<div class=\"bottomcolumn3\">
";
                // line 452
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "contentbottomcolumn3", [], "any", false, false, true, 452), "html", null, true);
                yield "
</div>
</div>
";
            } else {
                // line 456
                yield "<div class=\"cell3 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\"  style=\"background-color:transparent;\">
 
</div>
";
            }
            // line 460
            yield "<div class=\" visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
";
            // line 461
            $context["showcolumn"] = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "contentbottomcolumn4", [], "any", false, false, true, 461);
            // line 462
            if (($context["showcolumn"] ?? null)) {
                // line 463
                yield "<div class=\"cell4 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\">
<div class=\"bottomcolumn4\">
";
                // line 465
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "contentbottomcolumn4", [], "any", false, false, true, 465), "html", null, true);
                yield "
</div>
</div>
";
            } else {
                // line 469
                yield "<div class=\"cell4 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\"  style=\"background-color:transparent;\">
 
</div>
";
            }
            // line 473
            yield "<div class=\" visible-lg-block d-xl-block d-lg-block visible-md-block d-md-block visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
<div class=\" visible-lg-block d-xl-block d-lg-block visible-md-block d-md-block visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
</div>
</div>
<div style=\"clear: both;\"></div>
";
        }
        // line 479
        yield "<div class=\"margin_collapsetop\"></div>
</div> 
</div> 
<div style=\"clear:both;\">
</div>
</div>
</div>
<div class=\"footer-widget-area\">
<div class=\"footer-widget-area_left_border_image\">
<div class=\"footer-widget-area_right_border_image\">
<div class=\"footer-widget-area_inner\">
";
        // line 491
        if ((((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footerabovecolumn1", [], "any", false, false, true, 491) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footerabovecolumn2", [], "any", false, false, true, 491)) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footerabovecolumn3", [], "any", false, false, true, 491)) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footerabovecolumn4", [], "any", false, false, true, 491))) {
            // line 493
            yield "<div class=\"ttr_footer-widget-area_inner_above_widget_container\">
<div class=\"ttr_footer-widget-area_inner_above0 container row\">
";
            // line 495
            $context["showcolumn"] = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footerabovecolumn1", [], "any", false, false, true, 495);
            // line 496
            if (($context["showcolumn"] ?? null)) {
                // line 497
                yield "<div class=\"cell1 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\">
<div class=\"footerabovecolumn1\">
";
                // line 499
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footerabovecolumn1", [], "any", false, false, true, 499), "html", null, true);
                yield "
</div>
</div>
";
            } else {
                // line 503
                yield "<div class=\"cell1 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\"  style=\"background-color:transparent;\">
 
</div>
";
            }
            // line 507
            yield "<div class=\" visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
";
            // line 508
            $context["showcolumn"] = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footerabovecolumn2", [], "any", false, false, true, 508);
            // line 509
            if (($context["showcolumn"] ?? null)) {
                // line 510
                yield "<div class=\"cell2 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\">
<div class=\"footerabovecolumn2\">
";
                // line 512
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footerabovecolumn2", [], "any", false, false, true, 512), "html", null, true);
                yield "
</div>
</div>
";
            } else {
                // line 516
                yield "<div class=\"cell2 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\"  style=\"background-color:transparent;\">
 
</div>
";
            }
            // line 520
            yield "<div class=\" visible-md-block d-md-block visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
";
            // line 521
            $context["showcolumn"] = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footerabovecolumn3", [], "any", false, false, true, 521);
            // line 522
            if (($context["showcolumn"] ?? null)) {
                // line 523
                yield "<div class=\"cell3 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\">
<div class=\"footerabovecolumn3\">
";
                // line 525
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footerabovecolumn3", [], "any", false, false, true, 525), "html", null, true);
                yield "
</div>
</div>
";
            } else {
                // line 529
                yield "<div class=\"cell3 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\"  style=\"background-color:transparent;\">
 
</div>
";
            }
            // line 533
            yield "<div class=\" visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
";
            // line 534
            $context["showcolumn"] = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footerabovecolumn4", [], "any", false, false, true, 534);
            // line 535
            if (($context["showcolumn"] ?? null)) {
                // line 536
                yield "<div class=\"cell4 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\">
<div class=\"footerabovecolumn4\">
";
                // line 538
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footerabovecolumn4", [], "any", false, false, true, 538), "html", null, true);
                yield "
</div>
</div>
";
            } else {
                // line 542
                yield "<div class=\"cell4 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\"  style=\"background-color:transparent;\">
 
</div>
";
            }
            // line 546
            yield "<div class=\" visible-lg-block d-xl-block d-lg-block visible-md-block d-md-block visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
<div class=\" visible-lg-block d-xl-block d-lg-block visible-md-block d-md-block visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
</div>
</div>
<div style=\"clear: both;\"></div>
";
        }
        // line 552
        yield "</div>
</div>
</div>
</div>
<div class=\"margin_collapsetop\"></div>
<footer id=\"ttr_footer\">
<div class=\"margin_collapsetop\"></div>
 <div id=\"ttr_footer_inner\">
";
        // line 561
        if ((((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footercellcolumn1", [], "any", false, false, true, 561) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footercellcolumn2", [], "any", false, false, true, 561)) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footercellcolumn3", [], "any", false, false, true, 561)) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footercellcolumn4", [], "any", false, false, true, 561))) {
            // line 563
            yield "<div class=\"ttr_footer-widget-cell_inner_widget_container\">
<div class=\"ttr_footer-widget-cell_inner0 container row\">
";
            // line 565
            $context["showcolumn"] = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footercellcolumn1", [], "any", false, false, true, 565);
            // line 566
            if (($context["showcolumn"] ?? null)) {
                // line 567
                yield "<div class=\"cell1 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\">
<div class=\"footercellcolumn1\">
";
                // line 569
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footercellcolumn1", [], "any", false, false, true, 569), "html", null, true);
                yield "
</div>
</div>
";
            } else {
                // line 573
                yield "<div class=\"cell1 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\"  style=\"background-color:transparent;\">
 
</div>
";
            }
            // line 577
            yield "<div class=\" visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
";
            // line 578
            $context["showcolumn"] = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footercellcolumn2", [], "any", false, false, true, 578);
            // line 579
            if (($context["showcolumn"] ?? null)) {
                // line 580
                yield "<div class=\"cell2 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\">
<div class=\"footercellcolumn2\">
";
                // line 582
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footercellcolumn2", [], "any", false, false, true, 582), "html", null, true);
                yield "
</div>
</div>
";
            } else {
                // line 586
                yield "<div class=\"cell2 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\"  style=\"background-color:transparent;\">
 
</div>
";
            }
            // line 590
            yield "<div class=\" visible-md-block d-md-block visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
";
            // line 591
            $context["showcolumn"] = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footercellcolumn3", [], "any", false, false, true, 591);
            // line 592
            if (($context["showcolumn"] ?? null)) {
                // line 593
                yield "<div class=\"cell3 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\">
<div class=\"footercellcolumn3\">
";
                // line 595
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footercellcolumn3", [], "any", false, false, true, 595), "html", null, true);
                yield "
</div>
</div>
";
            } else {
                // line 599
                yield "<div class=\"cell3 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\"  style=\"background-color:transparent;\">
 
</div>
";
            }
            // line 603
            yield "<div class=\" visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
";
            // line 604
            $context["showcolumn"] = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footercellcolumn4", [], "any", false, false, true, 604);
            // line 605
            if (($context["showcolumn"] ?? null)) {
                // line 606
                yield "<div class=\"cell4 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\">
<div class=\"footercellcolumn4\">
";
                // line 608
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footercellcolumn4", [], "any", false, false, true, 608), "html", null, true);
                yield "
</div>
</div>
";
            } else {
                // line 612
                yield "<div class=\"cell4 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\"  style=\"background-color:transparent;\">
 
</div>
";
            }
            // line 616
            yield "<div class=\" visible-lg-block d-xl-block d-lg-block visible-md-block d-md-block visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
<div class=\" visible-lg-block d-xl-block d-lg-block visible-md-block d-md-block visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
</div>
</div>
<div style=\"clear: both;\"></div>
";
        }
        // line 622
        yield "<div id=\"ttr_footer_top_for_widgets\">
<div  class=\"ttr_footer_top_for_widgets_inner\">
";
        // line 624
        if (((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "leftfooterarea", [], "any", false, false, true, 624) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "centerfooterarea", [], "any", false, false, true, 624)) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "rightfooterarea", [], "any", false, false, true, 624))) {
            // line 625
            yield "<div class=\"footer-widget-area_fixed row\">
<div style=\"margin:0 auto;\"></div>
";
            // line 627
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "leftfooterarea", [], "any", false, false, true, 627)) {
                // line 628
                yield "<div  id=\"first\" class=\"widget-area col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12 col-12\">
";
                // line 629
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "leftfooterarea", [], "any", false, false, true, 629), "html", null, true);
                yield "
</div>
<div class=\" visible-xs d-block\" style=\"clear:both;\"></div>
";
            } else {
                // line 633
                yield "<div  id=\"first\" class=\"widget-area  col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12 col-12\">
 
</div>
<div class=\" visible-xs d-block\"></div>
";
            }
            // line 638
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "centerfooterarea", [], "any", false, false, true, 638)) {
                // line 639
                yield "<div  id=\"second\" class=\"widget-area  col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12 col-12\">
";
                // line 640
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "centerfooterarea", [], "any", false, false, true, 640), "html", null, true);
                yield "
</div>
<div class=\" visible-xs d-block\" style=\"clear:both;\"></div>
";
            } else {
                // line 644
                yield "<div  id=\"second\" class=\"widget-area  col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12 col-12\">
 
</div>
<div class=\" visible-xs d-block\" style=\"clear:both;\"></div>
";
            }
            // line 649
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "rightfooterarea", [], "any", false, false, true, 649)) {
                // line 650
                yield "<div  id=\"third\" class=\"widget-area  col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12 col-12\">
";
                // line 651
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "rightfooterarea", [], "any", false, false, true, 651), "html", null, true);
                yield "
</div>
<div class=\" visible-lg visible-md visible-sm visible-xs d-xl-block d-lg-block d-md-block d-sm-block d-block\" style=\"clear:both;\"></div>
";
            } else {
                // line 655
                yield "<div  id=\"third\" class=\"widget-area  col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12 col-12\">
 
</div>
<div class=\" visible-lg visible-md visible-sm visible-xs d-xl-block d-lg-block d-md-block d-sm-block d-block\" style=\"clear:both;\"></div>
";
            }
            // line 660
            yield "</div>
";
        }
        // line 662
        yield "</div>
</div>
<div class=\"ttr_footer_bottom_footer\">
<div class=\"ttr_footer_bottom_footer_inner\">
<div class=\"ttr_footer_element_alignment container\">
</div>
<div id=\"ttr_footer_designed_by_links\">
<a href=\"http://templatetoaster.com\" target=\"_self\"> Drupal Theme </a>
<span id=\"ttr_footer_designed_by\"> Designed With TemplateToaster </span>
</div>
";
        // line 672
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["feed_icons"] ?? null), "html", null, true);
        yield "
<a href=\"http://www.facebook.com/TemplateToaster\" class=\"ttr_footer_facebook \" target=\"_self\" >
</a>
<a href=\"https://www.linkedin.com/company/templatetoaster/\" class=\"ttr_footer_linkedin \" target=\"_self\" >
</a>
<a href=\"http://twitter.com/templatetoaster\" class=\"ttr_footer_twitter \" target=\"_self\" >
</a>
<a href=\"https://plus.google.com/+TemplateToaster\" class=\"ttr_footer_instagram \" target=\"_self\" >
</a>
<a href=\"https://www.youtube.com/templatetoaster\" class=\"ttr_footer_youtube \" target=\"_self\" >
</a>
</div>
</div>
</div>
</footer>
<div class=\"margin_collapsetop\"></div>
<div class=\"footer-widget-area\">
";
        // line 690
        if ((((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footerbelowcolumn1", [], "any", false, false, true, 690) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footerbelowcolumn2", [], "any", false, false, true, 690)) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footerbelowcolumn3", [], "any", false, false, true, 690)) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footerbelowcolumn4", [], "any", false, false, true, 690))) {
            // line 692
            yield "<div class=\"ttr_footer-widget-area_inner_below_widget_container\">
<div class=\"ttr_footer-widget-area_inner_below0 container row\">
";
            // line 694
            $context["showcolumn"] = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footerbelowcolumn1", [], "any", false, false, true, 694);
            // line 695
            if (($context["showcolumn"] ?? null)) {
                // line 696
                yield "<div class=\"cell1 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\">
<div class=\"footerbelowcolumn1\">
";
                // line 698
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footerbelowcolumn1", [], "any", false, false, true, 698), "html", null, true);
                yield "
</div>
</div>
";
            } else {
                // line 702
                yield "<div class=\"cell1 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\"  style=\"background-color:transparent;\">
 
</div>
";
            }
            // line 706
            yield "<div class=\" visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
";
            // line 707
            $context["showcolumn"] = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footerbelowcolumn2", [], "any", false, false, true, 707);
            // line 708
            if (($context["showcolumn"] ?? null)) {
                // line 709
                yield "<div class=\"cell2 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\">
<div class=\"footerbelowcolumn2\">
";
                // line 711
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footerbelowcolumn2", [], "any", false, false, true, 711), "html", null, true);
                yield "
</div>
</div>
";
            } else {
                // line 715
                yield "<div class=\"cell2 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\"  style=\"background-color:transparent;\">
 
</div>
";
            }
            // line 719
            yield "<div class=\" visible-md-block d-md-block visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
";
            // line 720
            $context["showcolumn"] = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footerbelowcolumn3", [], "any", false, false, true, 720);
            // line 721
            if (($context["showcolumn"] ?? null)) {
                // line 722
                yield "<div class=\"cell3 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\">
<div class=\"footerbelowcolumn3\">
";
                // line 724
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footerbelowcolumn3", [], "any", false, false, true, 724), "html", null, true);
                yield "
</div>
</div>
";
            } else {
                // line 728
                yield "<div class=\"cell3 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\"  style=\"background-color:transparent;\">
 
</div>
";
            }
            // line 732
            yield "<div class=\" visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
";
            // line 733
            $context["showcolumn"] = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footerbelowcolumn4", [], "any", false, false, true, 733);
            // line 734
            if (($context["showcolumn"] ?? null)) {
                // line 735
                yield "<div class=\"cell4 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\">
<div class=\"footerbelowcolumn4\">
";
                // line 737
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footerbelowcolumn4", [], "any", false, false, true, 737), "html", null, true);
                yield "
</div>
</div>
";
            } else {
                // line 741
                yield "<div class=\"cell4 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\"  style=\"background-color:transparent;\">
 
</div>
";
            }
            // line 745
            yield "<div class=\" visible-lg-block d-xl-block d-lg-block visible-md-block d-md-block visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
<div class=\" visible-lg-block d-xl-block d-lg-block visible-md-block d-md-block visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
</div>
</div>
<div style=\"clear: both;\"></div>
";
        }
        // line 751
        yield "</div>
</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["base_path", "page", "node", "breadcrumb", "tabs", "action_links", "feed_icons"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/theme__100222/theme__100222/templates/page--node.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  1303 => 751,  1295 => 745,  1289 => 741,  1282 => 737,  1278 => 735,  1276 => 734,  1274 => 733,  1271 => 732,  1265 => 728,  1258 => 724,  1254 => 722,  1252 => 721,  1250 => 720,  1247 => 719,  1241 => 715,  1234 => 711,  1230 => 709,  1228 => 708,  1226 => 707,  1223 => 706,  1217 => 702,  1210 => 698,  1206 => 696,  1204 => 695,  1202 => 694,  1198 => 692,  1196 => 690,  1176 => 672,  1164 => 662,  1160 => 660,  1153 => 655,  1146 => 651,  1143 => 650,  1141 => 649,  1134 => 644,  1127 => 640,  1124 => 639,  1122 => 638,  1115 => 633,  1108 => 629,  1105 => 628,  1103 => 627,  1099 => 625,  1097 => 624,  1093 => 622,  1085 => 616,  1079 => 612,  1072 => 608,  1068 => 606,  1066 => 605,  1064 => 604,  1061 => 603,  1055 => 599,  1048 => 595,  1044 => 593,  1042 => 592,  1040 => 591,  1037 => 590,  1031 => 586,  1024 => 582,  1020 => 580,  1018 => 579,  1016 => 578,  1013 => 577,  1007 => 573,  1000 => 569,  996 => 567,  994 => 566,  992 => 565,  988 => 563,  986 => 561,  976 => 552,  968 => 546,  962 => 542,  955 => 538,  951 => 536,  949 => 535,  947 => 534,  944 => 533,  938 => 529,  931 => 525,  927 => 523,  925 => 522,  923 => 521,  920 => 520,  914 => 516,  907 => 512,  903 => 510,  901 => 509,  899 => 508,  896 => 507,  890 => 503,  883 => 499,  879 => 497,  877 => 496,  875 => 495,  871 => 493,  869 => 491,  856 => 479,  848 => 473,  842 => 469,  835 => 465,  831 => 463,  829 => 462,  827 => 461,  824 => 460,  818 => 456,  811 => 452,  807 => 450,  805 => 449,  803 => 448,  800 => 447,  794 => 443,  787 => 439,  783 => 437,  781 => 436,  779 => 435,  776 => 434,  770 => 430,  763 => 426,  759 => 424,  757 => 423,  755 => 422,  751 => 420,  749 => 418,  745 => 416,  740 => 415,  738 => 414,  734 => 413,  730 => 412,  724 => 410,  722 => 409,  718 => 407,  710 => 401,  704 => 397,  697 => 393,  693 => 391,  691 => 390,  689 => 389,  686 => 388,  680 => 384,  673 => 380,  669 => 378,  667 => 377,  665 => 376,  662 => 375,  656 => 371,  649 => 367,  645 => 365,  643 => 364,  641 => 363,  638 => 362,  632 => 358,  625 => 354,  621 => 352,  619 => 351,  617 => 350,  613 => 348,  611 => 346,  606 => 343,  604 => 342,  601 => 341,  597 => 339,  593 => 337,  591 => 336,  589 => 335,  582 => 330,  574 => 324,  568 => 320,  561 => 316,  557 => 314,  555 => 313,  553 => 312,  550 => 311,  544 => 307,  537 => 303,  533 => 301,  531 => 300,  529 => 299,  526 => 298,  520 => 294,  513 => 290,  509 => 288,  507 => 287,  505 => 286,  502 => 285,  496 => 281,  489 => 277,  485 => 275,  483 => 274,  481 => 273,  477 => 271,  475 => 269,  459 => 254,  452 => 250,  449 => 249,  447 => 248,  445 => 247,  443 => 245,  438 => 242,  428 => 234,  420 => 228,  414 => 224,  407 => 220,  403 => 218,  401 => 217,  399 => 216,  396 => 215,  390 => 211,  383 => 207,  379 => 205,  377 => 204,  375 => 203,  372 => 202,  366 => 198,  359 => 194,  355 => 192,  353 => 191,  351 => 190,  348 => 189,  342 => 185,  335 => 181,  331 => 179,  329 => 178,  327 => 177,  323 => 175,  321 => 173,  317 => 170,  309 => 164,  303 => 160,  296 => 156,  292 => 154,  290 => 153,  288 => 152,  285 => 151,  279 => 147,  272 => 143,  268 => 141,  266 => 140,  264 => 139,  261 => 138,  255 => 134,  248 => 130,  244 => 128,  242 => 127,  240 => 126,  237 => 125,  231 => 121,  224 => 117,  220 => 115,  218 => 114,  216 => 113,  212 => 111,  210 => 109,  195 => 98,  187 => 93,  158 => 66,  150 => 60,  144 => 56,  137 => 52,  133 => 50,  131 => 49,  129 => 48,  126 => 47,  120 => 43,  113 => 39,  109 => 37,  107 => 36,  105 => 35,  102 => 34,  96 => 30,  89 => 26,  85 => 24,  83 => 23,  81 => 22,  78 => 21,  72 => 17,  65 => 13,  61 => 11,  59 => 10,  57 => 9,  53 => 7,  51 => 5,  48 => 3,  46 => 2,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/theme__100222/theme__100222/templates/page--node.html.twig", "C:\\wamp64\\www\\my_cooking_recipes\\web\\themes\\theme__100222\\theme__100222\\templates\\page--node.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 1, "if" => 5];
        static $filters = ["escape" => 13, "t" => 98];
        static $functions = ["active_theme_path" => 1];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['escape', 't'],
                ['active_theme_path'],
                $this->source
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
