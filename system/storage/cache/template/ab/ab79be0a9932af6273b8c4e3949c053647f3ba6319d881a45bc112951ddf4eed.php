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

/* freshgo/template/checkout/cart.twig */
class __TwigTemplate_c8cd6b4243b1f0779973f31f40d6e34636ceb1c22377abdd3b59803c2765388d extends \Twig\Template
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
        echo ($context["header"] ?? null);
        echo "
<div class=\"container\">
    <div class=\"row\">
      <ul class=\"breadcrumb\">
    ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 6
            echo "    <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 6);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 6);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "    </ul>
  </div>
</div>
<div id=\"checkout-cart\" class=\"container\">
  ";
        // line 12
        if (($context["attention"] ?? null)) {
            // line 13
            echo "  <div class=\"alert alert-info\"><i class=\"fa fa-info-circle\"></i> ";
            echo ($context["attention"] ?? null);
            echo "
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
  </div>
  ";
        }
        // line 17
        echo " ";
        if (($context["success"] ?? null)) {
            // line 18
            echo "  <div class=\"a-one\"><div class=\"alert alert-success alert-dismissible alertsuc\"><svg width=\"20px\" height=\"20px\"> <use xlink:href=\"#successi\"></use></svg> ";
            echo ($context["success"] ?? null);
            echo "
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
  </div></div>
  ";
        }
        // line 22
        echo "  ";
        if (($context["error_warning"] ?? null)) {
            // line 23
            echo "  <!-- <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
  </div> -->
   <div class=\"a-one\"><div class=\"alert alert-danger alert-dismissible alertsuc\"><svg width=\"20px\" height=\"20px\"> <use xlink:href=\"#successi\"></use></svg> ";
            // line 26
            echo ($context["error_warning"] ?? null);
            echo "
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
  </div></div>
  ";
        }
        // line 30
        echo "  <div class=\"row\">
    ";
        // line 31
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 32
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 33
            echo "    ";
            $context["class"] = "col-lg-8 col-sm-5 col-md-6 col-xs-12";
            // line 34
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 35
            echo "    ";
            $context["class"] = "col-sm-8 col-lg-10 col-md-9 col-xs-12";
            // line 36
            echo "    ";
        } else {
            // line 37
            echo "    ";
            $context["class"] = "col-xs-12 acpage";
            // line 38
            echo "    ";
        }
        // line 39
        echo "    <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">
  ";
        // line 40
        echo ($context["content_top"] ?? null);
        echo "
      <div class=\"infobg\">
        
      <h1>";
        // line 43
        echo ($context["heading_title"] ?? null);
        echo "
        ";
        // line 44
        if (($context["weight"] ?? null)) {
            // line 45
            echo "        &nbsp;(";
            echo ($context["weight"] ?? null);
            echo ")
        ";
        }
        // line 46
        echo " </h1>
      <form action=\"";
        // line 47
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\">
        ";
        // line 103
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 104
            echo "          <div class=\"allcart\">
            <div class=\"cart-img\">
              ";
            // line 106
            if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 106)) {
                echo " <a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 106);
                echo "\"><img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 106);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 106);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 106);
                echo "\" class=\"img-thumbnail\" /></a> ";
            }
            // line 107
            echo "            </div>
            <div class=\"cart-des\">
                <a class=\"cart-des-name\" href=\"";
            // line 109
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 109);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 109);
            echo "</a> ";
            if ( !twig_get_attribute($this->env, $this->source, $context["product"], "stock", [], "any", false, false, false, 109)) {
                echo " <span class=\"text-danger\">***</span> ";
            }
            // line 110
            echo "                ";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 110)) {
                // line 111
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 111));
                foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                    echo " <br />
                <small>";
                    // line 112
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 112);
                    echo ": ";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 112);
                    echo "</small> ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 113
                echo "                ";
            }
            // line 114
            echo "                ";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "reward", [], "any", false, false, false, 114)) {
                echo " <br />
                <small>";
                // line 115
                echo twig_get_attribute($this->env, $this->source, $context["product"], "reward", [], "any", false, false, false, 115);
                echo "</small> ";
            }
            // line 116
            echo "                ";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "recurring", [], "any", false, false, false, 116)) {
                echo " <br />
                <span class=\"label label-info\">";
                // line 117
                echo ($context["text_recurring_item"] ?? null);
                echo "</span> <small>";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "recurring", [], "any", false, false, false, 117);
                echo "</small> ";
            }
            // line 118
            echo "                <div>";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "model", [], "any", false, false, false, 118);
            echo "</div>
                <div class=\"price\">";
            // line 119
            echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 119);
            echo "</div>
                <div class=\"input-group btn-block\" style=\"max-width: 200px;\">
                  <input type=\"text\" name=\"quantity[";
            // line 121
            echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 121);
            echo "]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 121);
            echo "\" size=\"1\" class=\"form-control\" />
                  <span class=\"input-group-btn cartpsp\">
                  <button type=\"submit\" data-toggle=\"tooltip\" title=\"";
            // line 123
            echo ($context["button_update"] ?? null);
            echo "\" class=\"btn btn-danger cbt\"><i class=\"fa fa-refresh\"></i></button>
                  <button type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 124
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger cbt\" onclick=\"cart.remove('";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 124);
            echo "');\"><i class=\"fa fa-times-circle\"></i></button>
                  </span>
                </div>
            </div>
            <button type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 128
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"pull-right cart-re\" onclick=\"cart.remove('";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 128);
            echo "');\"><i class=\"fa fa-trash-o\"></i></button>
          </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 131
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["vouchers"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["voucher"]) {
            // line 132
            echo "            <div class=\"allcart\">
              <div class=\"cart-des\">
                <div>";
            // line 134
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "description", [], "any", false, false, false, 134);
            echo "</div>
                <div class=\"text-left\"><div class=\"input-group btn-block\" style=\"max-width: 200px;\">
                    <input type=\"text\" name=\"\" value=\"1\" size=\"1\" disabled=\"disabled\" class=\"form-control\" />
                    <span class=\"input-group-btn cartpsp\">
                    <button type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 138
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\" onclick=\"voucher.remove('";
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "key", [], "any", false, false, false, 138);
            echo "');\"><i class=\"fa fa-times-circle\"></i></button>
                    </span></div>
                </div>
                <div class=\"text-right\">";
            // line 141
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 141);
            echo "</div>
              </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 145
        echo "      </form>
      ";
        // line 146
        if (($context["modules"] ?? null)) {
            // line 147
            echo "      <h1>";
            echo ($context["text_next"] ?? null);
            echo "</h1>
      <p>";
            // line 148
            echo ($context["text_next_choice"] ?? null);
            echo "</p>
      <div class=\"panel-group\" id=\"accordion\"> ";
            // line 149
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["modules"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                // line 150
                echo "        ";
                echo $context["module"];
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 151
            echo " </div>
      ";
        }
        // line 152
        echo " <br />
      <div class=\"row\">
        <div class=\"col-lg-8 col-xs-12 col-md-6\"></div>
        <div class=\"col-lg-4 col-xs-12 col-sm-12 col-md-6\">
          <table class=\"table table-bordered\">
            ";
        // line 157
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["totals"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 158
            echo "            <tr>
              <td class=\"text-right\"><strong>";
            // line 159
            echo twig_get_attribute($this->env, $this->source, $context["total"], "title", [], "any", false, false, false, 159);
            echo ":</strong></td>
              <td class=\"text-right\">";
            // line 160
            echo twig_get_attribute($this->env, $this->source, $context["total"], "text", [], "any", false, false, false, 160);
            echo "</td>
            </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 163
        echo "          </table>
        </div>
      </div>
      <div class=\"buttons clearfix\">
        <div class=\"pull-left\"><a href=\"";
        // line 167
        echo ($context["continue"] ?? null);
        echo "\" class=\"btn btn-primary\">";
        echo ($context["button_shopping"] ?? null);
        echo "</a></div>
        <div class=\"pull-right\"><a href=\"";
        // line 168
        echo ($context["checkout"] ?? null);
        echo "\" class=\"btn btn-primary\">";
        echo ($context["button_checkout"] ?? null);
        echo "</a></div>
      </div>
      </div></div>
    ";
        // line 171
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
";
        // line 173
        echo ($context["content_bottom"] ?? null);
        echo "
";
        // line 174
        echo ($context["footer"] ?? null);
        echo " ";
    }

    public function getTemplateName()
    {
        return "freshgo/template/checkout/cart.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  397 => 174,  393 => 173,  388 => 171,  380 => 168,  374 => 167,  368 => 163,  359 => 160,  355 => 159,  352 => 158,  348 => 157,  341 => 152,  337 => 151,  328 => 150,  324 => 149,  320 => 148,  315 => 147,  313 => 146,  310 => 145,  300 => 141,  292 => 138,  285 => 134,  281 => 132,  276 => 131,  265 => 128,  256 => 124,  252 => 123,  245 => 121,  240 => 119,  235 => 118,  229 => 117,  224 => 116,  220 => 115,  215 => 114,  212 => 113,  203 => 112,  196 => 111,  193 => 110,  185 => 109,  181 => 107,  169 => 106,  165 => 104,  160 => 103,  156 => 47,  153 => 46,  147 => 45,  145 => 44,  141 => 43,  135 => 40,  130 => 39,  127 => 38,  124 => 37,  121 => 36,  118 => 35,  115 => 34,  112 => 33,  110 => 32,  106 => 31,  103 => 30,  96 => 26,  89 => 23,  86 => 22,  78 => 18,  75 => 17,  67 => 13,  65 => 12,  59 => 8,  48 => 6,  44 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "freshgo/template/checkout/cart.twig", "");
    }
}
