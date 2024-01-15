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

/* freshgo/template/extension/module/slideshow.twig */
class __TwigTemplate_0ed8a05f86336d0719c7eda92f0d808e02261bf2360a9b3cf95f90cb94f1b8f3 extends \Twig\Template
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
        echo "<div class=\"row\">
<div class=\"slidepad\">
<div class=\"homeslider-container s-panel\">
<div class=\"loader wrloader\"></div>
<div id=\"slideshow";
        // line 5
        echo ($context["module"] ?? null);
        echo "\" class=\"slideshow slider-for\">
    ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["banners"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
            // line 7
            echo "        <div class=\"\">
      <div class=\"slideimg\">
        ";
            // line 9
            if (twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 9)) {
                // line 10
                echo "          <a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 10);
                echo "\"><img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 10);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "title", [], "any", false, false, false, 10);
                echo "\" class=\"img-responsive center-block\" /></a>";
            } else {
                echo "<img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 10);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "title", [], "any", false, false, false, 10);
                echo "\" class=\"img-responsive center-block\" />
        ";
            }
            // line 12
            echo "       </div>
      <div class=\"slidertext\">
      <div class=\"slideff\">
         <div class=\"slidesmall\">
        ";
            // line 16
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "description", [], "any", false, false, false, 16);
            echo "
        <a href=\"";
            // line 17
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 17);
            echo "\" class=\"btn btn-primary\">";
            echo ($context["shop_now"] ?? null);
            echo "</a>
      </div>
      </div>
      </div>
    </div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "
</div>
</div>
</div>
</div>

<script type=\"text/javascript\">
  \$(document).ready(function () {
    \$('.slider-for').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,
        dots: false,
        autoplay: true,
        autoplaySpeed: 5000,
        fade: true
    });

});
</script>";
    }

    public function getTemplateName()
    {
        return "freshgo/template/extension/module/slideshow.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 23,  83 => 17,  79 => 16,  73 => 12,  57 => 10,  55 => 9,  51 => 7,  47 => 6,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "freshgo/template/extension/module/slideshow.twig", "");
    }
}
