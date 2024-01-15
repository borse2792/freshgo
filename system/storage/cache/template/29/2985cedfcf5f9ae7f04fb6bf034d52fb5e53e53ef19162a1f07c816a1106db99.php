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

/* freshgo/template/extension/module/html.twig */
class __TwigTemplate_482dc0a411c882568af5e4da68ef348c57fca8a3c52a8b2a881872dedd95b284 extends \Twig\Template
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
        echo "<div>";
        if (($context["heading_title"] ?? null)) {
            // line 2
            echo " <h1 class=\"heading text-center\"><span>";
            echo ($context["heading_title"] ?? null);
            echo "</span></h1>
  ";
        }
        // line 4
        echo "  ";
        echo ($context["html"] ?? null);
        echo "</div>

<script type=\"text/javascript\">
(function(\$){
\$(\"#testi\").owlCarousel({
    itemsCustom : [
    [0, 1],
    [992, 1]
    ],
      autoPlay: false,
      navigationText: ['<i class=\"fa fa-angle-left\"></i>', '<i class=\"fa fa-angle-right\"></i>'],
      navigation : false,
      pagination:true
    });
    }(jQuery));

  </script>";
    }

    public function getTemplateName()
    {
        return "freshgo/template/extension/module/html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 4,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "freshgo/template/extension/module/html.twig", "");
    }
}
