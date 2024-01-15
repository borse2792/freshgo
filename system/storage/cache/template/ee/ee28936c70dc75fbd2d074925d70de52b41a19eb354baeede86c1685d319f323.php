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

/* freshgo/template/extension/module/featured.twig */
class __TwigTemplate_b7ad6a3d46df7c58f032dfb6e3e8bd18c28e1c605f22f7a436b56d77f8423253 extends \Twig\Template
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
        echo "<div class=\"pro-img\">
<div class=\"tab-content container protabcont\">
  <div class=\"tab-head\">
    <h1 class=\"heading  text-center\"><span>";
        // line 4
        echo ($context["head_title"] ?? null);
        echo "</span></h1>
  <ul class=\"nav nav-tabs pro-tab text-center\">
      <li class=\"active\"><a href=\"#featurep\" data-toggle=\"tab\">";
        // line 6
        echo ($context["fea_title"] ?? null);
        echo "</a></li>
      <li><a href=\"#bestseller\" data-toggle=\"tab\">";
        // line 7
        echo ($context["best_title"] ?? null);
        echo "</a></li>
      <li><a href=\"#latestp\" data-toggle=\"tab\">";
        // line 8
        echo ($context["latest_title"] ?? null);
        echo "</a></li>
</ul>
</div>
<div class=\"tab-pane active\" id=\"featurep\">
<div class=\"row rless\">
  ";
        // line 13
        $context["temp"] = 0;
        // line 14
        $context["setCol"] = 2;
        // line 15
        echo "  <div id=\"feature\" class=\"owl-theme owl-carousel\">
 ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 17
            echo "
 ";
            // line 18
            $context["temp"] = (($context["temp"] ?? null) + 1);
            // line 19
            echo "        ";
            if (((($context["temp"] ?? null) % ($context["setCol"] ?? null)) == 1)) {
                // line 20
                echo "            <div class=\"multi-row\">
        ";
            }
            // line 22
            echo "
  <div class=\"product-layout col-xs-12 cless\">
    <div class=\"product-thumb transition\">
      <div class=\"image\"><a href=\"";
            // line 25
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 25);
            echo "\"><img src=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 25);
            echo "\" alt=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 25);
            echo "\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 25);
            echo "\" class=\"img-responsive center-block\" /></a>
          <!-- Images Start -->
          ";
            // line 27
            $context["t"] = 0;
            // line 28
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "more_images", [], "any", false, false, false, 28));
            foreach ($context['_seq'] as $context["_key"] => $context["more_image"]) {
                // line 29
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["more_image"]);
                foreach ($context['_seq'] as $context["_key"] => $context["pop"]) {
                    // line 30
                    echo "            ";
                    if ((($context["t"] ?? null) == 0)) {
                        // line 31
                        echo "              <a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 31);
                        echo "\"><img src=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["pop"], "popup_more", [], "any", false, false, false, 31);
                        echo "\" class=\"img-responsive second-img\" alt=\"hover image\"/></a>
            ";
                        // line 32
                        $context["t"] = (($context["t"] ?? null) + 1);
                        // line 33
                        echo "              ";
                    }
                    // line 34
                    echo "
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pop'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 36
                echo "          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['more_image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo "          <!-- End -->

        ";
            // line 39
            if (twig_get_attribute($this->env, $this->source, $context["product"], "is_new", [], "any", false, false, false, 39)) {
                echo "<span class=\"new\">";
                echo ($context["pro_new"] ?? null);
                echo "</span>";
            }
            // line 40
            echo "
        ";
            // line 41
            if (twig_get_attribute($this->env, $this->source, $context["product"], "tag_per", [], "any", false, false, false, 41)) {
                // line 42
                echo "          <span class=\"sale\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "tag_per", [], "any", false, false, false, 42);
                echo "%</span>
        ";
            }
            // line 44
            echo "
       ";
            // line 50
            echo "        <div class=\"btn-quickview\">
        <button type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 51
            echo ($context["button_wishlist"] ?? null);
            echo "\" onclick=\"wishlist.add('";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 51);
            echo "');\"><svg><use xlink:href=\"#heart\" /></svg></button>
      </div>

      </div>

      <div class=\"caption text-left\">

       <div class=\"bran\">
                <span>";
            // line 59
            echo ($context["Brand_title"] ?? null);
            echo " ";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "manufacturer", [], "any", false, false, false, 59);
            echo "</span>
        </div>
         <div class=\"model\">
                <span>";
            // line 62
            echo ($context["model_title"] ?? null);
            echo " ";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "model", [], "any", false, false, false, 62);
            echo "</span>
        </div>
        <h4 class=\"protitle\"><a href=\"";
            // line 64
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 64);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 64);
            echo "</a></h4>
        <div class=\"opbtn\">
        ";
            // line 67
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 67)) {
                // line 68
                echo "          ";
                // line 69
                echo "           ";
                // line 74
                echo "          ";
                // line 75
                echo "          <p class=\"price\">
            ";
                // line 76
                if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 76)) {
                    // line 77
                    echo "            <span data-update='price-";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 77);
                    echo "' class=\"price\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 77);
                    echo "</span>
            ";
                } else {
                    // line 79
                    echo "            <span data-update='price-new-";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 79);
                    echo "' class=\"price-new\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 79);
                    echo "</span> <span data-update='price-";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 79);
                    echo "' class=\"price-old\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 79);
                    echo "</span>
            ";
                }
                // line 81
                echo "           
          </p>
        ";
                // line 84
                echo "        ";
            }
            // line 85
            echo "         ";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 85)) {
                // line 86
                echo "        
          <div class=\"rating comments_note wb-list-product-reviews\">
          
          <span class=\"rate-tot\">";
                // line 89
                echo twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 89);
                echo " <i class=\"fa fa-star emstar\"></i></span>(";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "tab_review", [], "any", false, false, false, 89);
                echo ")
       
        </div>";
            } else {
                // line 92
                echo "          <div class=\"rating comments_note wb-list-product-reviews\">
       
            <span class=\"rate-tot\">";
                // line 94
                echo twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 94);
                echo " <i class=\"fa fa-star emstar\"></i></span>(";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "tab_review", [], "any", false, false, false, 94);
                echo ")
           
       
        </div>
        ";
            }
            // line 99
            echo "        </div>
        <div class=\"protax\">
          ";
            // line 101
            if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 101)) {
                // line 102
                echo "            <span class=\"price-tax\">";
                echo ($context["text_tax"] ?? null);
                echo "</span>
            <span data-update='price-tax-";
                // line 103
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 103);
                echo "' class=\"price-tax\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 103);
                echo "</span>
            ";
            }
            // line 105
            echo "            </div>
       

      <div class=\"button-group\">
          
          <button type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 110
            echo ($context["button_compare"] ?? null);
            echo "\" onclick=\"compare.add('";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 110);
            echo "');\"><svg><use xlink:href=\"#compare\"/></svg></button>
          <div data-toggle=\"tooltip\" title=\"Quickview\"  class=\"bquickv\"></div>
      </div>

  ";
            // line 115
            echo "      <div class=\"webi-main\">
        ";
            // line 116
            if (twig_get_attribute($this->env, $this->source, $context["product"], "options", [], "any", false, false, false, 116)) {
                // line 117
                echo "          <input type=\"hidden\" name=\"product_id\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 117);
                echo "\"/>
          ";
                // line 118
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "options", [], "any", false, false, false, 118));
                foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                    // line 119
                    echo "            ";
                    if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 119) == "checkbox")) {
                        // line 120
                        echo "            <div class=\"form-group";
                        if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 120)) {
                            echo " required ";
                        }
                        echo " checkbox_input\">
              <label class=\"control-label\">";
                        // line 121
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 121);
                        echo "</label>
              <div id=\"input-option";
                        // line 122
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 122);
                        echo "\"> 
                ";
                        // line 123
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 123));
                        foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                            // line 124
                            echo "                <div class=\"checkbox\">
                  <label class=\"size-option\">
                    ";
                            // line 126
                            if (twig_get_attribute($this->env, $this->source, $context["option_value"], "raw_price", [], "any", false, false, false, 126)) {
                                // line 127
                                echo "                      ";
                                $context["raw_price"] = twig_get_attribute($this->env, $this->source, $context["option_value"], "raw_price", [], "any", false, false, false, 127);
                                // line 128
                                echo "                    ";
                            } else {
                                // line 129
                                echo "                      ";
                                $context["raw_price"] = 0;
                                // line 130
                                echo "                    ";
                            }
                            // line 131
                            echo "                    <input class=\"webi-option-click\" type=\"checkbox\" name=\"option[";
                            echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 131);
                            echo "][]\" value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 131);
                            echo "\" data-rawPrice=";
                            echo ($context["raw_price"] ?? null);
                            echo " />
                    ";
                            // line 132
                            if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 132)) {
                                echo " <img src=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 132);
                                echo "\" alt=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 132);
                                echo " ";
                                if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 132)) {
                                    echo " ";
                                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 132);
                                    echo " ";
                                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 132);
                                    echo " ";
                                }
                                echo "\" class=\"img-thumbnail\" /> ";
                            }
                            // line 133
                            echo "                     <span>";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 133);
                            echo "</span>
                    ";
                            // line 134
                            if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 134)) {
                                // line 135
                                echo "                    ";
                                // line 136
                                echo "                    ";
                            }
                            echo " </label>
                </div>
                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 139
                        echo "              </div>
            </div>
            ";
                    }
                    // line 142
                    echo "            ";
                    if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 142) == "select")) {
                        // line 143
                        echo "            <div class=\"form-group";
                        if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 143)) {
                            echo " required ";
                        }
                        echo "\">
              <label class=\"control-label\" for=\"input-option";
                        // line 144
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 144);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 144);
                        echo "</label>
              <select name=\"option[";
                        // line 145
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 145);
                        echo "]\" id=\"input-option";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 145);
                        echo "\" class=\"webi-option-select form-control\">
                <option value=\"\">";
                        // line 146
                        echo ($context["text_select"] ?? null);
                        echo "</option>
                ";
                        // line 147
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 147));
                        foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                            // line 148
                            echo "                  <option value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 148);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 148);
                            echo "
                    ";
                            // line 149
                            if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 149)) {
                                // line 150
                                echo "                      (";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 150);
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 150);
                                echo ")
                    ";
                            }
                            // line 151
                            echo " 
                  </option>
                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 154
                        echo "              </select>
            </div>
            ";
                    }
                    // line 157
                    echo "            ";
                    if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 157) == "radio")) {
                        // line 158
                        echo "            <div class=\"form-group";
                        if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 158)) {
                            echo " required ";
                        }
                        echo "\">
              <label class=\"control-label\">";
                        // line 159
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 159);
                        echo "</label>
              <div id=\"input-option";
                        // line 160
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 160);
                        echo "\" class=\"custom-radio\"> ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 160));
                        foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                            // line 161
                            echo "                <div class=\"radio\">
                  <label class=\"color-option\">
                    <input class=\"webi-option-click\" type=\"radio\" name=\"option[";
                            // line 163
                            echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 163);
                            echo "]\" value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 163);
                            echo "\" />
                    ";
                            // line 164
                            if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 164)) {
                                echo " <img src=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 164);
                                echo "\" alt=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 164);
                                echo " ";
                                if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 164)) {
                                    echo " ";
                                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 164);
                                    echo " ";
                                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 164);
                                    echo " ";
                                }
                                echo "\" class=\"img-thumbnail\" /> ";
                            }
                            echo "                  
                    <span>";
                            // line 165
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 165);
                            echo "<span>
                    ";
                            // line 166
                            if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 166)) {
                                // line 167
                                echo "                    (";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 167);
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 167);
                                echo ")
                    ";
                            }
                            // line 168
                            echo " </label>
                </div>
                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 170
                        echo " </div>
            </div>
            ";
                    }
                    // line 173
                    echo "           
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 175
                echo "        ";
            }
            // line 176
            echo "      </div>
      ";
            // line 178
            echo "
 


<div class=\"form-group homeaddq\">
          <div class=\"homeqt\">
            <span class=\"qty\">";
            // line 184
            echo ($context["Qty"] ?? null);
            echo "</span>
             <input class=\"addhqty\" type=\"text\" value=\"1\" size=\"2\" min=\"1\" max=\"999\" id=\"input-quantity-";
            // line 185
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 185);
            echo "\" class=\"form-control input-number pull-left\" />
             <div class=\"homeqtinner\">
              <button type=\"button\" onclick=\"qty.plus('";
            // line 187
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 187);
            echo "')\" class=\"form-control btn-number btnplus\">
           
              <i class=\"fa fa-angle-up\"></i>
            </button>
           
             <button type=\"button\" onclick=\"qty.minus('";
            // line 192
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 192);
            echo "')\" class=\"form-control  btn-number btnminus dis-";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 192);
            echo "\" disabled=\"disabled\">
             <i class=\"fa fa-angle-down\"></i>
            </button>
            </div>
          </div>
            ";
            // line 197
            if (twig_get_attribute($this->env, $this->source, $context["product"], "options", [], "any", false, false, false, 197)) {
                // line 198
                echo "          <input type=\"hidden\" name=\"product_id\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 198);
                echo "\"/>
          <button type=\"button\" class=\"webi-cart\" ><svg><use xlink:href=\"#hcart\"></use></svg>
          <span class=\"hidden-xs hidden-sm hidden-md\">";
                // line 200
                echo ($context["button_cart"] ?? null);
                echo "</span></button>
        ";
            } else {
                // line 202
                echo "          <button type=\"button\" onclick=\"cart.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 202);
                echo "');\"><svg><use xlink:href=\"#hcart\"></use></svg>
           <span class=\"hidden-xs hidden-sm hidden-md\">";
                // line 203
                echo ($context["button_cart"] ?? null);
                echo "</span></button>
        ";
            }
            // line 205
            echo "          <input type=\"hidden\" name=\"hid-qty-msg\" value=\"";
            echo ($context["atleast_cart"] ?? null);
            echo "\">
        </div>


      </div>

    </div>
  </div>

";
            // line 214
            if (((($context["temp"] ?? null) % ($context["setCol"] ?? null)) == 0)) {
                // line 215
                echo "            </div>
        ";
            }
            // line 217
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 218
        echo "     ";
        if (((twig_length_filter($this->env, ($context["products"] ?? null)) % ($context["setCol"] ?? null)) != 0)) {
            // line 219
            echo "    <!-- <h1>hii</h1> -->
        </div>
        ";
        }
        // line 222
        echo "
      </div>
    </div>
</div>

<script type=\"text/javascript\">
   (function(\$){
    \$(\"#feature\").owlCarousel({
    itemsCustom : [
    [0, 1],
    [320, 2],
    [600, 3],
    [992, 3],
    [1200, 4],
    [1410, 4]
    ],
      // autoPlay: 1000,
      navigationText: ['<i class=\"fa fa-angle-left\" aria-hidden=\"true\"></i>', '<i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i>'],
      navigation : true,
      pagination:false
    });
 }(jQuery));
</script>


";
    }

    public function getTemplateName()
    {
        return "freshgo/template/extension/module/featured.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  649 => 222,  644 => 219,  641 => 218,  635 => 217,  631 => 215,  629 => 214,  616 => 205,  611 => 203,  606 => 202,  601 => 200,  595 => 198,  593 => 197,  583 => 192,  575 => 187,  570 => 185,  566 => 184,  558 => 178,  555 => 176,  552 => 175,  545 => 173,  540 => 170,  532 => 168,  525 => 167,  523 => 166,  519 => 165,  501 => 164,  495 => 163,  491 => 161,  485 => 160,  481 => 159,  474 => 158,  471 => 157,  466 => 154,  458 => 151,  451 => 150,  449 => 149,  442 => 148,  438 => 147,  434 => 146,  428 => 145,  422 => 144,  415 => 143,  412 => 142,  407 => 139,  397 => 136,  395 => 135,  393 => 134,  388 => 133,  372 => 132,  363 => 131,  360 => 130,  357 => 129,  354 => 128,  351 => 127,  349 => 126,  345 => 124,  341 => 123,  337 => 122,  333 => 121,  326 => 120,  323 => 119,  319 => 118,  314 => 117,  312 => 116,  309 => 115,  300 => 110,  293 => 105,  286 => 103,  281 => 102,  279 => 101,  275 => 99,  265 => 94,  261 => 92,  253 => 89,  248 => 86,  245 => 85,  242 => 84,  238 => 81,  226 => 79,  218 => 77,  216 => 76,  213 => 75,  211 => 74,  209 => 69,  207 => 68,  204 => 67,  197 => 64,  190 => 62,  182 => 59,  169 => 51,  166 => 50,  163 => 44,  157 => 42,  155 => 41,  152 => 40,  146 => 39,  142 => 37,  136 => 36,  129 => 34,  126 => 33,  124 => 32,  117 => 31,  114 => 30,  109 => 29,  104 => 28,  102 => 27,  91 => 25,  86 => 22,  82 => 20,  79 => 19,  77 => 18,  74 => 17,  70 => 16,  67 => 15,  65 => 14,  63 => 13,  55 => 8,  51 => 7,  47 => 6,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "freshgo/template/extension/module/featured.twig", "");
    }
}
