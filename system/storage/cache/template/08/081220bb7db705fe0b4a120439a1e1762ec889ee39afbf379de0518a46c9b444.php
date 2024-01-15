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

/* freshgo/template/extension/module/blogger.twig */
class __TwigTemplate_be000370402926e80b2dfc10c872564a5160e2e8afbaf13aa68f6db2c986da68 extends \Twig\Template
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
        echo "<div class=\"webi\">
<div class=\"blog_webi container\">
        <h1 class=\"heading  text-center\"><span>";
        // line 3
        echo ($context["heading_title"] ?? null);
        echo "</span></h1>
        <div class=\"box-content\">
            <div class=\"box-product row rless\">
                <div id=\"blog\" class=\"owl-carousel owl-theme\">
                ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["blogs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["blog"]) {
            // line 8
            echo "                    <div class=\"product-block col-xs-12 cless\">
                       <div class=\"blogshadow\">
                        ";
            // line 10
            if (twig_get_attribute($this->env, $this->source, $context["blog"], "image", [], "any", false, false, false, 10)) {
                // line 11
                echo "                            <div class=\"blog-left\">
                                <div class=\"webi-blog-image\">
                                    <img src=\"";
                // line 13
                echo twig_get_attribute($this->env, $this->source, $context["blog"], "image", [], "any", false, false, false, 13);
                echo "\" alt=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" title=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" class=\"img-responsive\" />
                                    <div class=\"blog-post-image-hover\"> </div>
                                    <div class=\"webi_post_hover\">
                                        <div class=\"blog-ic\">
                                        <a class=\"icon zoom\" title=\"Click to view Full Image \" href=\"";
                // line 17
                echo twig_get_attribute($this->env, $this->source, $context["blog"], "image", [], "any", false, false, false, 17);
                echo "\" data-lightbox=\"example-set\"><i class=\"fa fa-search\"></i></a>
                                        <a class=\"icon readmore_link\" title=\"all blog\" href=\"";
                // line 18
                echo ($context["all_blogs"] ?? null);
                echo "\"><i class=\"fa fa-link\"></i></a>
                                    </div>
                                    </div>
                                </div>
                                
                            </div>
                 <div class=\"date-time blogdt\"><span class=\"blogda\">";
                // line 24
                echo twig_get_attribute($this->env, $this->source, $context["blog"], "date_added", [], "any", false, false, false, 24);
                echo "</span><span class=\"blogmo\">";
                echo twig_get_attribute($this->env, $this->source, $context["blog"], "date_addedm", [], "any", false, false, false, 24);
                echo "</span>
                            </div>
                        <div class=\"blog-right text-left\">
                            <h4><a href=\"";
                // line 27
                echo twig_get_attribute($this->env, $this->source, $context["blog"], "href", [], "any", false, false, false, 27);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["blog"], "title", [], "any", false, false, false, 27);
                echo "</a></h4>
                           

                             <p>";
                // line 30
                echo twig_get_attribute($this->env, $this->source, $context["blog"], "description", [], "any", false, false, false, 30);
                echo "</p>
                           ";
                // line 40
                echo "
                        </div>
                               ";
            }
            // line 43
            echo "                    </div>
                </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['blog'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "                </div>
            </div>
        </div>
        <!--  <div class=\"buttons-see-all text-center\">
            <button type=\"button\" onclick=\"location='";
        // line 50
        echo ($context["all_blogs"] ?? null);
        echo "';\" class=\"btn btn-primary\">";
        echo ($context["button_all_blogs"] ?? null);
        echo "</button>
        </div> -->
    </div>
</div>
<script type=\"text/javascript\">
    (function(\$){
    \$(\"#blog\").owlCarousel({
    itemsCustom : [
    [0, 1],
    [600, 2],
    [768, 2],
    [992, 2],
    [1200, 3],
    [1410, 3]
    ],
      // autoPlay: 1000,
      navigationText: ['<i class=\"fa fa-angle-left\" aria-hidden=\"true\"></i>', '<i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i>'],
      navigation: true,
      pagination:false
    });
  }(jQuery));
</script>
";
    }

    public function getTemplateName()
    {
        return "freshgo/template/extension/module/blogger.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 50,  119 => 46,  111 => 43,  106 => 40,  102 => 30,  94 => 27,  86 => 24,  77 => 18,  73 => 17,  62 => 13,  58 => 11,  56 => 10,  52 => 8,  48 => 7,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "freshgo/template/extension/module/blogger.twig", "");
    }
}
