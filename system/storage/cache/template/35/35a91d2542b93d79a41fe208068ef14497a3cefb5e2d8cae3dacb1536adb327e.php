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

/* freshgo/template/extension/module/wbofferbanner.twig */
class __TwigTemplate_a8428de19319d79a8fe25ac72af7b77d470e4cbbc54dc5038abc55ec8facd345 extends \Twig\Template
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
        echo "<div class=\"offbg container\">
<div class=\"offrow row rless\">
\t\t\t";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["banners"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
            // line 4
            echo "\t\t\t
\t\t\t\t<div class=\"col-sm-6 col-xs-12  offbanner cless\">
\t\t\t\t\t<div class=\"beffect\">
\t\t\t\t  ";
            // line 7
            if (twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 7)) {
                // line 8
                echo "\t\t\t\t  \t<a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 8);
                echo "\">
\t\t\t\t  \t\t<img src=\"";
                // line 9
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 9);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "title", [], "any", false, false, false, 9);
                echo "\" class=\"img-responsive\" />
\t\t\t\t  \t</a>
\t\t\t\t  ";
            } else {
                // line 12
                echo "\t\t\t\t  \t<img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 12);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "title", [], "any", false, false, false, 12);
                echo "\" class=\"img-responsive\" />";
            }
            // line 13
            echo "\t\t\t\t  </div>
\t\t\t
\t\t\t\t<div class=\"off-text\">
\t\t\t  <span class=\"off-title\">";
            // line 16
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "description", [], "any", false, false, false, 16);
            echo "</span>
\t\t\t</div>
\t\t\t\t</div>
\t\t\t  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "</div>
</div>";
    }

    public function getTemplateName()
    {
        return "freshgo/template/extension/module/wbofferbanner.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 20,  77 => 16,  72 => 13,  65 => 12,  57 => 9,  52 => 8,  50 => 7,  45 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "freshgo/template/extension/module/wbofferbanner.twig", "");
    }
}
