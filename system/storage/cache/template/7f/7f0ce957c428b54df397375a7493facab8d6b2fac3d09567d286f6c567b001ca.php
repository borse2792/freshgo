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

/* freshgo/template/common/footer.twig */
class __TwigTemplate_a55c52de7d10fa8e2fb727ad34b2f500084c92ba197f8128e10fa572a866a238 extends \Twig\Template
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
        echo "<footer>

<div class=\"footer-top\">
  <div class=\"container\">
    <div class=\"\">
  ";
        // line 6
        echo ($context["ftop_full"] ?? null);
        echo "
</div>
</div>
</div>

    <div class=\"middle-footer\">
      <div class=\"container\">
        <div class=\"row\">
    ";
        // line 14
        echo ($context["footer_left"] ?? null);
        echo "
    

    ";
        // line 17
        if ((($context["footer_left"] ?? null) && ($context["footer_right"] ?? null))) {
            // line 18
            echo "    ";
            $context["class"] = "col-sm-8";
            // line 19
            echo "    ";
        } elseif ((($context["footer_left"] ?? null) || ($context["footer_right"] ?? null))) {
            // line 20
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 21
            echo "    ";
        } else {
            // line 22
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 23
            echo "    ";
        }
        // line 24
        echo "
      ";
        // line 25
        if (($context["informations"] ?? null)) {
            // line 26
            echo "      <div class=\"col-md-3 col-sm-3 col-xs-12 fborder\">
        <h5>";
            // line 27
            echo ($context["text_information"] ?? null);
            echo "
          <button type=\"button\" class=\"btn toggle collapsed\" data-toggle=\"collapse\" data-target=\"#info\"></button>
        </h5>
        <div id=\"info\" class=\"collapse footer-collapse\">
        <ul class=\"list-unstyled\">
         ";
            // line 32
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["informations"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
                // line 33
                echo "          <li><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "href", [], "any", false, false, false, 33);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 33);
                echo "</a></li>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "           <li><a href=\"";
            echo ($context["manufacturer"] ?? null);
            echo "\">";
            echo ($context["text_manufacturer"] ?? null);
            echo "</a></li>
        </ul>
        </div>
      </div>
      ";
        }
        // line 40
        echo "      <div class=\"col-md-3 col-sm-3 col-xs-12 fborder\">
        <h5>";
        // line 41
        echo ($context["text_account"] ?? null);
        echo "
          <button type=\"button\" class=\"btn toggle collapsed\" data-toggle=\"collapse\" data-target=\"#account\"></button>
        </h5>
        <div id=\"account\" class=\"collapse footer-collapse\">
        <ul class=\"list-unstyled lastb\">
          <li><a href=\"";
        // line 46
        echo ($context["account"] ?? null);
        echo "\">";
        echo ($context["text_account"] ?? null);
        echo "</a></li>
          <li><a href=\"";
        // line 47
        echo ($context["order"] ?? null);
        echo "\">";
        echo ($context["text_order"] ?? null);
        echo "</a></li>
          <li><a href=\"";
        // line 48
        echo ($context["wishlist"] ?? null);
        echo "\">";
        echo ($context["text_wishlist"] ?? null);
        echo "</a></li>
          <li><a href=\"";
        // line 49
        echo ($context["newsletter"] ?? null);
        echo "\">";
        echo ($context["text_newsletter"] ?? null);
        echo "</a></li>
          <li><a href=\"";
        // line 50
        echo ($context["special"] ?? null);
        echo "\">";
        echo ($context["text_special"] ?? null);
        echo "</a></li>
        </ul>
        </div>
      </div>

      <div class=\"col-md-3 col-sm-3 col-xs-12 fborder\">
        <h5>";
        // line 56
        echo ($context["text_service"] ?? null);
        echo "
          <button type=\"button\" class=\"btn  toggle collapsed\" data-toggle=\"collapse\" data-target=\"#service\"></button>
        </h5>
        <div id=\"service\" class=\"collapse footer-collapse\">
        <ul class=\"list-unstyled lastb\">
          <li><a href=\"";
        // line 61
        echo ($context["contact"] ?? null);
        echo "\">";
        echo ($context["text_contact"] ?? null);
        echo "</a></li>
          <li><a href=\"";
        // line 62
        echo ($context["return"] ?? null);
        echo "\">";
        echo ($context["text_return"] ?? null);
        echo "</a></li>
          <li><a href=\"";
        // line 63
        echo ($context["sitemap"] ?? null);
        echo "\">";
        echo ($context["text_sitemap"] ?? null);
        echo "</a></li>
          <li><a href=\"";
        // line 64
        echo ($context["voucher"] ?? null);
        echo "\">";
        echo ($context["text_voucher"] ?? null);
        echo "</a></li>
          <li><a href=\"";
        // line 65
        echo ($context["affiliate"] ?? null);
        echo "\">";
        echo ($context["text_affiliate"] ?? null);
        echo "</a></li>
        </ul>
        </div>
      </div>

</div>
</div>
</div>

<div class=\"container hidden-xs\">
  <div class=\"row footblink text-center\">
      ";
        // line 76
        echo ($context["fbottom_full"] ?? null);
        echo "
  </div>
</div>

<div class=\"copy text-center\">
  <div class=\"container\">
    <div class=\"row\">
      ";
        // line 83
        echo ($context["powered"] ?? null);
        echo "
      <ul class=\"list-inline list-unstyled foot-payment\">
      <li><a href=\"#\"><i class=\"fa fa-cc-mastercard\"></i></a></li>
      <li><a href=\"#\"><i class=\"fa fa-cc-visa\"></i></a></li>
      <li><a href=\"#\"><i class=\"fa fa-credit-card\"></i></a></li>
      <li><a href=\"#\"><i class=\"fa fa-cc-paypal\"></i></a></li>
      </ul>
    </div>
  </div>
</div>
</footer>
<a href=\"\" id=\"scroll\" title=\"Scroll to Top\" style=\"display: none;\">
<i class=\"fa fa-angle-double-up\"></i>
</a>

";
        // line 98
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 99
            echo "<script src=\"";
            echo $context["script"];
            echo "\" type=\"text/javascript\"></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 101
        echo "<!--
OpenCart is open source software and you are free to remove the powered by OpenCart if you want, but its generally accepted practise to make a small donation.
Please donate via PayPal to donate@opencart.com
//-->
</body></html>
";
    }

    public function getTemplateName()
    {
        return "freshgo/template/common/footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  258 => 101,  249 => 99,  245 => 98,  227 => 83,  217 => 76,  201 => 65,  195 => 64,  189 => 63,  183 => 62,  177 => 61,  169 => 56,  158 => 50,  152 => 49,  146 => 48,  140 => 47,  134 => 46,  126 => 41,  123 => 40,  112 => 35,  101 => 33,  97 => 32,  89 => 27,  86 => 26,  84 => 25,  81 => 24,  78 => 23,  75 => 22,  72 => 21,  69 => 20,  66 => 19,  63 => 18,  61 => 17,  55 => 14,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "freshgo/template/common/footer.twig", "");
    }
}
