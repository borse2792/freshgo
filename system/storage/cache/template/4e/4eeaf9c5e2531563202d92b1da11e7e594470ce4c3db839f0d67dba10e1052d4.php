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

/* freshgo/template/extension/module/wbcategorynew.twig */
class __TwigTemplate_c299fcf98c00087e74d6d7fc4b55a9b35ba833176951e4c94066576a99f1c5c6 extends \Twig\Template
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
        echo "<div class=\"container\">
<div class=\"homecategory row\">
 <h1 class=\"heading text-center\"><span>";
        // line 3
        echo ($context["cheading_title"] ?? null);
        echo "</span></h1> 
    <div id=\"cat-img\" class=\"owl-carousel owl-theme\">
        ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 6
            echo "            ";
            if ((twig_get_attribute($this->env, $this->source, $context["category"], "category_id", [], "any", false, false, false, 6) == ($context["category_id"] ?? null))) {
                // line 7
                echo "                <div class=\"block-cat-wr col-xs-12 cless\">
                    <div class=\"categorybr\">
                    <a href=\"";
                // line 9
                echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 9);
                echo "\">
                        ";
                // line 10
                if (twig_get_attribute($this->env, $this->source, $context["category"], "image_name", [], "any", false, false, false, 10)) {
                    // line 11
                    echo "                            <img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "image_name", [], "any", false, false, false, 11);
                    echo "\" class=\"img-responsive center-block\" alt=\"\">
                        ";
                } else {
                    // line 13
                    echo "                            <img src=\"image/no_image.png\" class=\"img-responsive center-block\" alt=\"\">
                        ";
                }
                // line 15
                echo "                        <div class=\"catcontent text-right\">
                            <h2><span>";
                // line 16
                echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 16);
                echo "</span></h2>
                     
                        </div>
                    </a>
                    </div>
                </div>
            ";
            } else {
                // line 23
                echo "                <div class=\"block-cat-wr col-xs-12 cless\">
                    <div class=\"categorybr\">
                         <div class=\"catimg\">
                    <a href=\"";
                // line 26
                echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 26);
                echo "\">
                        ";
                // line 27
                if (twig_get_attribute($this->env, $this->source, $context["category"], "image_name", [], "any", false, false, false, 27)) {
                    // line 28
                    echo "                           <img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "image_name", [], "any", false, false, false, 28);
                    echo "\" class=\"img-responsive center-block\" alt=\"\">
                        ";
                } else {
                    // line 30
                    echo "                            <img src=\"image/no_image.png\" class=\"img-responsive center-block\" alt=\"\">
                        ";
                }
                // line 32
                echo "                    </div>
                        <div class=\"catcontent\">
                            <h2><span>";
                // line 34
                echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 34);
                echo "</span></h2>
                          
                        </div>
                    </a>
                    </div>
                </div>
            ";
            }
            // line 41
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "    </div>     
</div>
</div>
<script type=\"text/javascript\">
 \$(document).ready(function() {
    \$(\"#cat-img\").owlCarousel({
    itemsCustom : [
    [0, 1],
    [320, 2],
    [576, 3],
    [768, 4],
    [992, 4],
    [1200, 5],
    [1410, 6]
    ],
      // autoPlay: 6000,
       autoPlay: true,
      navigationText: ['<i class=\"fa fa-angle-left\"></i>', '<i class=\"fa fa-angle-right\"></i>'],
      navigation : false,
      pagination:false
    });
});
</script>";
    }

    public function getTemplateName()
    {
        return "freshgo/template/extension/module/wbcategorynew.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 42,  121 => 41,  111 => 34,  107 => 32,  103 => 30,  97 => 28,  95 => 27,  91 => 26,  86 => 23,  76 => 16,  73 => 15,  69 => 13,  63 => 11,  61 => 10,  57 => 9,  53 => 7,  50 => 6,  46 => 5,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "freshgo/template/extension/module/wbcategorynew.twig", "");
    }
}
