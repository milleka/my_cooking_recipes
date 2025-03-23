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

/* themes/theme__100222/theme__100222/templates/block.html.twig */
class __TwigTemplate_bcd4bfae435967c13ae7ef524a1e92ef extends Template
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
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 2
        $context["classes"] = ["block", ("block-" . \Drupal\Component\Utility\Html::getClass(CoreExtension::getAttribute($this->env, $this->source,         // line 4
($context["configuration"] ?? null), "provider", [], "any", false, false, true, 4))), ("block-" . \Drupal\Component\Utility\Html::getClass(        // line 5
($context["plugin_id"] ?? null)))];
        // line 8
        $context["theme_path"] = ($this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl(($context["node"] ?? null)) . $this->extensions['Drupal\Core\Template\TwigExtension']->getActiveThemePath());
        yield " 
 ";
        // line 9
        if ((((((((((((((((((((((((((((((((((((((((((($context["region"] ?? null) == "leftfooterarea") && (($context["style_leftfooterarea"] ?? null) == 0)) || ((($context["region"] ?? null) == "centerfooterarea") && (($context["style_centerfooterarea"] ?? null) == 0))) || ((($context["region"] ?? null) == "rightfooterarea") && (($context["style_rightfooterarea"] ?? null) == 0))) || ((        // line 10
($context["region"] ?? null) == "headerabovecolumn1") && (($context["style_headerabovecolumn1"] ?? null) == 0))) || ((        // line 11
($context["region"] ?? null) == "headerabovecolumn2") && (($context["style_headerabovecolumn2"] ?? null) == 0))) || ((        // line 12
($context["region"] ?? null) == "headerabovecolumn3") && (($context["style_headerabovecolumn3"] ?? null) == 0))) || ((        // line 13
($context["region"] ?? null) == "headerabovecolumn4") && (($context["style_headerabovecolumn4"] ?? null) == 0))) || ((        // line 14
($context["region"] ?? null) == "headerbelowcolumn1") && (($context["style_headerbelowcolumn1"] ?? null) == 0))) || ((        // line 15
($context["region"] ?? null) == "headerbelowcolumn2") && (($context["style_headerbelowcolumn2"] ?? null) == 0))) || ((        // line 16
($context["region"] ?? null) == "headerbelowcolumn3") && (($context["style_headerbelowcolumn3"] ?? null) == 0))) || ((        // line 17
($context["region"] ?? null) == "headerbelowcolumn4") && (($context["style_headerbelowcolumn4"] ?? null) == 0))) || ((        // line 18
($context["region"] ?? null) == "headershape00") && (($context["style_headershape00"] ?? null) == 0))) || ((        // line 19
($context["region"] ?? null) == "menuabovecolumn1") && (($context["style_menuabovecolumn1"] ?? null) == 0))) || ((        // line 20
($context["region"] ?? null) == "menuabovecolumn2") && (($context["style_menuabovecolumn2"] ?? null) == 0))) || ((        // line 21
($context["region"] ?? null) == "menuabovecolumn3") && (($context["style_menuabovecolumn3"] ?? null) == 0))) || ((        // line 22
($context["region"] ?? null) == "menuabovecolumn4") && (($context["style_menuabovecolumn4"] ?? null) == 0))) || ((        // line 23
($context["region"] ?? null) == "menubelowcolumn1") && (($context["style_menubelowcolumn1"] ?? null) == 0))) || ((        // line 24
($context["region"] ?? null) == "menubelowcolumn2") && (($context["style_menubelowcolumn2"] ?? null) == 0))) || ((        // line 25
($context["region"] ?? null) == "menubelowcolumn3") && (($context["style_menubelowcolumn3"] ?? null) == 0))) || ((        // line 26
($context["region"] ?? null) == "menubelowcolumn4") && (($context["style_menubelowcolumn4"] ?? null) == 0))) || ((        // line 27
($context["region"] ?? null) == "contenttopcolumn1") && (($context["style_contenttopcolumn1"] ?? null) == 0))) || ((        // line 28
($context["region"] ?? null) == "contenttopcolumn2") && (($context["style_contenttopcolumn2"] ?? null) == 0))) || ((        // line 29
($context["region"] ?? null) == "contenttopcolumn3") && (($context["style_contenttopcolumn3"] ?? null) == 0))) || ((        // line 30
($context["region"] ?? null) == "contenttopcolumn4") && (($context["style_contenttopcolumn4"] ?? null) == 0))) || ((        // line 31
($context["region"] ?? null) == "contentbottomcolumn1") && (($context["style_contentbottomcolumn1"] ?? null) == 0))) || ((        // line 32
($context["region"] ?? null) == "contentbottomcolumn2") && (($context["style_contentbottomcolumn2"] ?? null) == 0))) || ((        // line 33
($context["region"] ?? null) == "contentbottomcolumn3") && (($context["style_contentbottomcolumn3"] ?? null) == 0))) || ((        // line 34
($context["region"] ?? null) == "contentbottomcolumn4") && (($context["style_contentbottomcolumn4"] ?? null) == 0))) || ((        // line 35
($context["region"] ?? null) == "footerabovecolumn1") && (($context["style_footerabovecolumn1"] ?? null) == 0))) || ((        // line 36
($context["region"] ?? null) == "footerabovecolumn2") && (($context["style_footerabovecolumn2"] ?? null) == 0))) || ((        // line 37
($context["region"] ?? null) == "footerabovecolumn3") && (($context["style_footerabovecolumn3"] ?? null) == 0))) || ((        // line 38
($context["region"] ?? null) == "footerabovecolumn4") && (($context["style_footerabovecolumn4"] ?? null) == 0))) || ((        // line 39
($context["region"] ?? null) == "footercellcolumn1") && (($context["style_footercellcolumn1"] ?? null) == 0))) || ((        // line 40
($context["region"] ?? null) == "footercellcolumn2") && (($context["style_footercellcolumn2"] ?? null) == 0))) || ((        // line 41
($context["region"] ?? null) == "footercellcolumn3") && (($context["style_footercellcolumn3"] ?? null) == 0))) || ((        // line 42
($context["region"] ?? null) == "footercellcolumn4") && (($context["style_footercellcolumn4"] ?? null) == 0))) || ((        // line 43
($context["region"] ?? null) == "footerbelowcolumn1") && (($context["style_footerbelowcolumn1"] ?? null) == 0))) || ((        // line 44
($context["region"] ?? null) == "footerbelowcolumn2") && (($context["style_footerbelowcolumn2"] ?? null) == 0))) || ((        // line 45
($context["region"] ?? null) == "footerbelowcolumn3") && (($context["style_footerbelowcolumn3"] ?? null) == 0))) || ((        // line 46
($context["region"] ?? null) == "footerbelowcolumn4") && (($context["style_footerbelowcolumn4"] ?? null) == 0)))) {
            // line 47
            yield " 
\t";
            // line 48
            if ((($context["region"] ?? null) == "sidebar_first")) {
                yield " 
<div class= \"ttr_sidebar_left_padding\" >
";
            } else {
                // line 50
                yield " 
";
                // line 51
                if ((($context["region"] ?? null) == "sidebar_second")) {
                    yield " 
<div class= \"ttr_sidebar_right_padding\" >
";
                }
                // line 53
                yield " 
";
            }
            // line 54
            yield " 
";
            // line 55
            if (CoreExtension::inFilter("shape", ($context["region"] ?? null))) {
                // line 56
                yield "<div";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", ["ttr_shapes"], "method", false, false, true, 56), "html", null, true);
                yield "> 
";
            } else {
                // line 57
                yield " 
";
                // line 58
                if (CoreExtension::inFilter("footercellcolumn", ($context["region"] ?? null))) {
                    // line 59
                    yield "<div";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", ["ttr_footer_block"], "method", false, false, true, 59), "html", null, true);
                    yield "> 
";
                } else {
                    // line 60
                    yield " 
<div";
                    // line 61
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", ["ttr_block"], "method", false, false, true, 61), "html", null, true);
                    yield "> 
";
                }
                // line 62
                yield " 
";
            }
            // line 63
            yield " 
<div class=\"margin_collapsetop\"></div> 
";
            // line 65
            if (($context["label"] ?? null)) {
                yield " 
<div class=\"ttr_block_header\"> 
";
                // line 67
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["title_prefix"] ?? null), "html", null, true);
                yield " 
<h3 ";
                // line 68
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", ["ttr_block_heading"], "method", false, false, true, 68), "html", null, true);
                yield "> 
";
                // line 69
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["label"] ?? null), "html", null, true);
                yield " </h3> 
";
                // line 70
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["title_suffix"] ?? null), "html", null, true);
                yield " 
";
            } else {
                // line 71
                yield " 
<div class=\"ttr_block_without_header\"> 
";
            }
            // line 73
            yield " 
</div> 
";
            // line 75
            if (CoreExtension::inFilter("shape", ($context["region"] ?? null))) {
                yield " 
";
                // line 76
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["content"] ?? null), "html", null, true);
                yield " 
";
            } else {
                // line 77
                yield " 
";
                // line 78
                if (CoreExtension::inFilter("footercellcolumn", ($context["region"] ?? null))) {
                    // line 79
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["content"] ?? null), "html", null, true);
                    yield "
";
                } else {
                    // line 81
                    yield "<div class = \"ttr_block_content\"> 
";
                    // line 82
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["content"] ?? null), "html", null, true);
                    yield "
</div> 
";
                }
            }
            // line 86
            yield "<div class=\"margin_collapsetop\"></div>
</div>
";
        } else {
            // line 88
            yield " 
<div";
            // line 89
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 89), "html", null, true);
            yield "> 
";
            // line 90
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["title_prefix"] ?? null), "html", null, true);
            yield " 
";
            // line 91
            if (($context["label"] ?? null)) {
                yield " 
<h2";
                // line 92
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["title_attributes"] ?? null), "html", null, true);
                yield ">";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["label"] ?? null), "html", null, true);
                yield "</h2> 
";
            }
            // line 93
            yield " 
";
            // line 94
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["title_suffix"] ?? null), "html", null, true);
            yield " 
";
            // line 95
            yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
            // line 99
            yield " 
</div> 
";
        }
        // line 101
        yield " 
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["configuration", "plugin_id", "node", "region", "style_leftfooterarea", "style_centerfooterarea", "style_rightfooterarea", "style_headerabovecolumn1", "style_headerabovecolumn2", "style_headerabovecolumn3", "style_headerabovecolumn4", "style_headerbelowcolumn1", "style_headerbelowcolumn2", "style_headerbelowcolumn3", "style_headerbelowcolumn4", "style_headershape00", "style_menuabovecolumn1", "style_menuabovecolumn2", "style_menuabovecolumn3", "style_menuabovecolumn4", "style_menubelowcolumn1", "style_menubelowcolumn2", "style_menubelowcolumn3", "style_menubelowcolumn4", "style_contenttopcolumn1", "style_contenttopcolumn2", "style_contenttopcolumn3", "style_contenttopcolumn4", "style_contentbottomcolumn1", "style_contentbottomcolumn2", "style_contentbottomcolumn3", "style_contentbottomcolumn4", "style_footerabovecolumn1", "style_footerabovecolumn2", "style_footerabovecolumn3", "style_footerabovecolumn4", "style_footercellcolumn1", "style_footercellcolumn2", "style_footercellcolumn3", "style_footercellcolumn4", "style_footerbelowcolumn1", "style_footerbelowcolumn2", "style_footerbelowcolumn3", "style_footerbelowcolumn4", "attributes", "label", "title_prefix", "title_attributes", "title_suffix", "content", "content_attributes"]);        yield from [];
    }

    // line 95
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield " 
<div";
        // line 96
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content_attributes"] ?? null), "addClass", ["content"], "method", false, false, true, 96), "html", null, true);
        yield "> 
";
        // line 97
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["content"] ?? null), "html", null, true);
        yield " 
</div> 
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/theme__100222/theme__100222/templates/block.html.twig";
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
        return array (  273 => 97,  269 => 96,  260 => 95,  253 => 101,  248 => 99,  246 => 95,  242 => 94,  239 => 93,  232 => 92,  228 => 91,  224 => 90,  220 => 89,  217 => 88,  212 => 86,  205 => 82,  202 => 81,  197 => 79,  195 => 78,  192 => 77,  187 => 76,  183 => 75,  179 => 73,  174 => 71,  169 => 70,  165 => 69,  161 => 68,  157 => 67,  152 => 65,  148 => 63,  144 => 62,  139 => 61,  136 => 60,  130 => 59,  128 => 58,  125 => 57,  119 => 56,  117 => 55,  114 => 54,  110 => 53,  104 => 51,  101 => 50,  95 => 48,  92 => 47,  90 => 46,  89 => 45,  88 => 44,  87 => 43,  86 => 42,  85 => 41,  84 => 40,  83 => 39,  82 => 38,  81 => 37,  80 => 36,  79 => 35,  78 => 34,  77 => 33,  76 => 32,  75 => 31,  74 => 30,  73 => 29,  72 => 28,  71 => 27,  70 => 26,  69 => 25,  68 => 24,  67 => 23,  66 => 22,  65 => 21,  64 => 20,  63 => 19,  62 => 18,  61 => 17,  60 => 16,  59 => 15,  58 => 14,  57 => 13,  56 => 12,  55 => 11,  54 => 10,  53 => 9,  49 => 8,  47 => 5,  46 => 4,  45 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/theme__100222/theme__100222/templates/block.html.twig", "C:\\wamp64\\www\\my_cooking_recipes\\web\\themes\\theme__100222\\theme__100222\\templates\\block.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 2, "if" => 9, "block" => 95];
        static $filters = ["clean_class" => 4, "escape" => 56];
        static $functions = ["file_url" => 8, "active_theme_path" => 8];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'block'],
                ['clean_class', 'escape'],
                ['file_url', 'active_theme_path'],
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
