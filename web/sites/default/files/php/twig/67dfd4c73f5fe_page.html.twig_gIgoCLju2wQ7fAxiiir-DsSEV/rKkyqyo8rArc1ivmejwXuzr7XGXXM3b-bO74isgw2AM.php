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

/* themes/vani/templates/layout/page.html.twig */
class __TwigTemplate_e7e6cbf7657665ef9e507dccc589cec5 extends Template
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
        // line 52
        yield from $this->loadTemplate("@vani/template-parts/header.html.twig", "themes/vani/templates/layout/page.html.twig", 52)->unwrap()->yield($context);
        // line 53
        yield "<div id=\"main-wrapper\" class=\"main-wrapper\">
  <div class=\"container\">
  <div class=\"main-container\">
    <main id=\"main\" class=\"page-content\">
      <a id=\"main-content\" tabindex=\"-1\"></a>";
        // line 58
        yield "      ";
        yield from $this->loadTemplate("@vani/template-parts/content_top.html.twig", "themes/vani/templates/layout/page.html.twig", 58)->unwrap()->yield($context);
        // line 59
        yield "      <div class=\"node-content\">
        ";
        // line 60
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 60), "html", null, true);
        yield "
      </div>
      ";
        // line 62
        yield from $this->loadTemplate("@vani/template-parts/content_bottom.html.twig", "themes/vani/templates/layout/page.html.twig", 62)->unwrap()->yield($context);
        // line 63
        yield "    </main>
    ";
        // line 64
        yield from $this->loadTemplate("@vani/template-parts/sidebar_left.html.twig", "themes/vani/templates/layout/page.html.twig", 64)->unwrap()->yield($context);
        // line 65
        yield "    ";
        yield from $this->loadTemplate("@vani/template-parts/sidebar_right.html.twig", "themes/vani/templates/layout/page.html.twig", 65)->unwrap()->yield($context);
        // line 66
        yield "  </div> ";
        // line 67
        yield "  </div> ";
        // line 68
        yield "</div>";
        // line 69
        yield from $this->loadTemplate("@vani/template-parts/footer.html.twig", "themes/vani/templates/layout/page.html.twig", 69)->unwrap()->yield($context);
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["page"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/vani/templates/layout/page.html.twig";
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
        return array (  79 => 69,  77 => 68,  75 => 67,  73 => 66,  70 => 65,  68 => 64,  65 => 63,  63 => 62,  58 => 60,  55 => 59,  52 => 58,  46 => 53,  44 => 52,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/vani/templates/layout/page.html.twig", "C:\\wamp64\\www\\my_cooking_recipes\\web\\themes\\vani\\templates\\layout\\page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["include" => 52];
        static $filters = ["escape" => 60];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['include'],
                ['escape'],
                [],
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
