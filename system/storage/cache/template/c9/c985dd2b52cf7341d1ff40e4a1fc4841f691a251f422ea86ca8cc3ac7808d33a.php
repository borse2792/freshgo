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

/* freshgo/template/common/search.twig */
class __TwigTemplate_3774f22c4d860628804440020309d7d6b1ec87a941f042c98703c1d7e95ac262 extends \Twig\Template
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
        echo "<li id=\"search\" class=\"desktop-search d-inline-block\">
<div class=\"d-search\">
\t<button id=\"search_toggle\" class=\"search-toggle\" data-toggle=\"collapse\" onclick=\"openSearch()\">
        <svg><use xlink:href=\"#hsearch\" /></svg>
\t</button>
</div>
<div id=\"search\" class=\"wbSearch\">
<div id=\"search_block_top\">
\t<select id=\"madebyhand-search-category\">
      <option value=\"0\">";
        // line 10
        echo ($context["text_category"] ?? null);
        echo "</option>
      ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category_1"]) {
            // line 12
            echo "        ";
            if ((twig_get_attribute($this->env, $this->source, $context["category_1"], "category_id", [], "any", false, false, false, 12) == ($context["category_id"] ?? null))) {
                // line 13
                echo "          <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["category_1"], "category_id", [], "any", false, false, false, 13);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["category_1"], "name", [], "any", false, false, false, 13);
                echo "</option>
        ";
            } else {
                // line 15
                echo "          <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["category_1"], "category_id", [], "any", false, false, false, 15);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["category_1"], "name", [], "any", false, false, false, 15);
                echo "</option>
        ";
            }
            // line 17
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category_1"], "children", [], "any", false, false, false, 17));
            foreach ($context['_seq'] as $context["_key"] => $context["category_2"]) {
                // line 18
                echo "          ";
                if ((twig_get_attribute($this->env, $this->source, $context["category_2"], "category_id", [], "any", false, false, false, 18) == ($context["category_id"] ?? null))) {
                    // line 19
                    echo "            <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category_2"], "category_id", [], "any", false, false, false, 19);
                    echo "\" selected=\"selected\">&nbsp;&nbsp;&nbsp;&nbsp;";
                    echo twig_get_attribute($this->env, $this->source, $context["category_2"], "name", [], "any", false, false, false, 19);
                    echo "</option>
          ";
                } else {
                    // line 21
                    echo "            <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category_2"], "category_id", [], "any", false, false, false, 21);
                    echo "\">&nbsp;&nbsp;&nbsp;&nbsp;";
                    echo twig_get_attribute($this->env, $this->source, $context["category_2"], "name", [], "any", false, false, false, 21);
                    echo "</option>
          ";
                }
                // line 23
                echo "          ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category_2"], "children", [], "any", false, false, false, 23));
                foreach ($context['_seq'] as $context["_key"] => $context["category_3"]) {
                    // line 24
                    echo "            ";
                    if ((twig_get_attribute($this->env, $this->source, $context["category_3"], "category_id", [], "any", false, false, false, 24) == ($context["category_id"] ?? null))) {
                        // line 25
                        echo "              <option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["category_3"], "category_id", [], "any", false, false, false, 25);
                        echo "\" selected=\"selected\">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                        // line 26
                        echo twig_get_attribute($this->env, $this->source, $context["category_3"], "name", [], "any", false, false, false, 26);
                        echo "
              </option>
            ";
                    } else {
                        // line 29
                        echo "              <option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["category_3"], "category_id", [], "any", false, false, false, 29);
                        echo "\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                        echo twig_get_attribute($this->env, $this->source, $context["category_3"], "name", [], "any", false, false, false, 29);
                        echo "</option>
            ";
                    }
                    // line 31
                    echo "          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_3'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 32
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_2'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_1'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "    </select>
<div class=\"input-group\">
\t<input type=\"text\" name=\"search\" value=\"";
        // line 36
        echo ($context["search"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["text_search"] ?? null);
        echo "\" class=\"search_query form-control input-lg madebyhand-search\" />
    <div class=\"input-group-btn\">
    \t<button type=\"button\" class=\"btn btn-primary btn-lg\"><i class=\"fa fa-search  hidden-sm hidden-md hidden-lg\"></i><span class=\"hidden-xs\">";
        // line 38
        echo ($context["text_search"] ?? null);
        echo "</span></button>
  \t\t<a href=\"javascript:void(0)\" class=\"closebtn close-nav\" onclick=\"closeSearch()\"><i class=\"fa fa-close\"></i></a>
  \t</div>
  <!-- madebyhand Search Start  -->
        <div class=\"madebyhand-search text-left\">
          <div class=\"madebyhand-search-loader\" style=\"display: none;\"><div class=\"loaders\"></div></div><!-- Add Loader -->
          <div class=\"madebyhand-search-result\"><!-- search results --></div>
        </div>
        <!-- madebyhand Search End  -->
</div>
</div>
</div>
</li>";
    }

    public function getTemplateName()
    {
        return "freshgo/template/common/search.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 38,  148 => 36,  144 => 34,  138 => 33,  132 => 32,  126 => 31,  118 => 29,  112 => 26,  107 => 25,  104 => 24,  99 => 23,  91 => 21,  83 => 19,  80 => 18,  75 => 17,  67 => 15,  59 => 13,  56 => 12,  52 => 11,  48 => 10,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "freshgo/template/common/search.twig", "");
    }
}
