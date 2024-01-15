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

/* freshgo/template/extension/module/wbocproduct.twig */
class __TwigTemplate_191fa8dacd540f330ab3b72d87f1f89b74ce8da91c18e2fd0d29867ae13b5846 extends \Twig\Template
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
        echo "<div class=\"oc-bg\">
<div class=\"timerpro container\">
<h1 class=\"heading text-center\"><span>";
        // line 3
        echo ($context["heading_title"] ?? null);
        echo "</span></h1>
<div class=\"row rless\"> 
<div class=\"count-bag\">
  <div id=\"count\" class=\"owl-theme owl-carousel\">
  ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 8
            echo "  <div class=\"product-layout col-xs-12 cless\">
    <div class=\"product-thumb transition\">

      <div class=\"image\">
  
        <a href=\"";
            // line 13
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 13);
            echo "\"><img src=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 13);
            echo "\" alt=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 13);
            echo "\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 13);
            echo "\" class=\"img-responsive center-block\" /></a>

         ";
            // line 15
            if (twig_get_attribute($this->env, $this->source, $context["product"], "is_new", [], "any", false, false, false, 15)) {
                echo "<span class=\"new\">";
                echo ($context["pro_new"] ?? null);
                echo "</span>";
            }
            // line 16
            echo "
          <!-- ";
            // line 17
            if (twig_get_attribute($this->env, $this->source, $context["product"], "tag_per", [], "any", false, false, false, 17)) {
                // line 18
                echo "        <span class=\"sale\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "tag_per", [], "any", false, false, false, 18);
                echo "%</span>
        ";
            }
            // line 19
            echo " -->

        ";
            // line 21
            if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 21)) {
                // line 22
                echo "          ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 22)) {
                    // line 23
                    echo "             <!--   <span class=\"reduce-price\">";
                    echo ($context["pro_sale"] ?? null);
                    echo "</span> -->
          ";
                }
                // line 25
                echo "      ";
            }
            // line 26
            echo "  
     <div class=\"btn-quickview\">
        <button type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 28
            echo ($context["button_wishlist"] ?? null);
            echo "\" onclick=\"wishlist.add('";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 28);
            echo "');\"><svg><use xlink:href=\"#heart\" /></svg></button>
      </div>
      </div>
     
      <div class=\"caption\">

          <div class=\"bran\">
                <span>";
            // line 35
            echo ($context["Brand_title"] ?? null);
            echo " ";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "manufacturer", [], "any", false, false, false, 35);
            echo "</span>
        </div>
        <div class=\"model\">
                <span>";
            // line 38
            echo ($context["model_title"] ?? null);
            echo " ";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "model", [], "any", false, false, false, 38);
            echo "</span>
        </div>
        <h4 class=\"protitle\"><a href=\"";
            // line 40
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 40);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 40);
            echo "</a></h4>
         <div class=\"opbtn\">
       ";
            // line 43
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 43)) {
                // line 44
                echo "          ";
                // line 45
                echo "           ";
                // line 50
                echo "          ";
                // line 51
                echo "          <p class=\"price\">
            ";
                // line 52
                if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 52)) {
                    // line 53
                    echo "            <span data-update='price-";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 53);
                    echo "' class=\"price\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 53);
                    echo "</span>
            ";
                } else {
                    // line 55
                    echo "            <span data-update='price-new-";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 55);
                    echo "' class=\"price-new\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 55);
                    echo "</span> <span data-update='price-";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 55);
                    echo "' class=\"price-old\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 55);
                    echo "</span>
            ";
                }
                // line 57
                echo "         
          </p>
        ";
                // line 60
                echo "        ";
            }
            // line 61
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 61)) {
                // line 62
                echo "        
          <div class=\"rating comments_note wb-list-product-reviews\">
          
          <span class=\"rate-tot\">";
                // line 65
                echo twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 65);
                echo " <i class=\"fa fa-star emstar\"></i></span>(";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "tab_review", [], "any", false, false, false, 65);
                echo ")
       
        </div>";
            } else {
                // line 68
                echo "          <div class=\"rating comments_note wb-list-product-reviews\">
       
            <span class=\"rate-tot\">";
                // line 70
                echo twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 70);
                echo " <i class=\"fa fa-star emstar\"></i></span>(";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "tab_review", [], "any", false, false, false, 70);
                echo ")
           
       
        </div>
        ";
            }
            // line 75
            echo "        </div>
        <div class=\"protax\">
          ";
            // line 77
            if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 77)) {
                // line 78
                echo "            <span class=\"price-tax\">";
                echo ($context["text_tax"] ?? null);
                echo "</span>
            <span data-update='price-tax-";
                // line 79
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 79);
                echo "' class=\"price-tax\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 79);
                echo "</span>
            ";
            }
            // line 81
            echo "            </div>
        ";
            // line 83
            echo "    
      <div class=\"all-timer\">
          ";
            // line 85
            if (twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "countdown", [], "any", false, false, false, 85)) {
                echo "<div id=\"Countdown";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 85);
                echo "\" class=\"box-timer\"></div> ";
            }
            echo " 
         ";
            // line 87
            echo "      </div>
       <div class=\"button-group\">
          
          <button type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 90
            echo ($context["button_compare"] ?? null);
            echo "\" onclick=\"compare.add('";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 90);
            echo "');\"><svg><use xlink:href=\"#compare\"/></svg></button>
          <div data-toggle=\"tooltip\" title=\"Quickview\"  class=\"bquickv\"></div>
      </div>
      ";
            // line 94
            echo "      <div class=\"webi-main\">
        ";
            // line 95
            if (twig_get_attribute($this->env, $this->source, $context["product"], "options", [], "any", false, false, false, 95)) {
                // line 96
                echo "          <input type=\"hidden\" name=\"product_id\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 96);
                echo "\"/>
          ";
                // line 97
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "options", [], "any", false, false, false, 97));
                foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                    // line 98
                    echo "            ";
                    if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 98) == "checkbox")) {
                        // line 99
                        echo "            <div class=\"form-group";
                        if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 99)) {
                            echo " required ";
                        }
                        echo " checkbox_input\">
              <label class=\"control-label\">";
                        // line 100
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 100);
                        echo "</label>
              <div id=\"input-option";
                        // line 101
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 101);
                        echo "\"> 
                ";
                        // line 102
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 102));
                        foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                            // line 103
                            echo "                <div class=\"checkbox\">
                  <label class=\"size-option\">
                    ";
                            // line 105
                            if (twig_get_attribute($this->env, $this->source, $context["option_value"], "raw_price", [], "any", false, false, false, 105)) {
                                // line 106
                                echo "                      ";
                                $context["raw_price"] = twig_get_attribute($this->env, $this->source, $context["option_value"], "raw_price", [], "any", false, false, false, 106);
                                // line 107
                                echo "                    ";
                            } else {
                                // line 108
                                echo "                      ";
                                $context["raw_price"] = 0;
                                // line 109
                                echo "                    ";
                            }
                            // line 110
                            echo "                    <input class=\"webi-option-click\" type=\"checkbox\" name=\"option[";
                            echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 110);
                            echo "][]\" value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 110);
                            echo "\" data-rawPrice=";
                            echo ($context["raw_price"] ?? null);
                            echo " />
                    ";
                            // line 111
                            if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 111)) {
                                echo " <img src=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 111);
                                echo "\" alt=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 111);
                                echo " ";
                                if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 111)) {
                                    echo " ";
                                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 111);
                                    echo " ";
                                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 111);
                                    echo " ";
                                }
                                echo "\" class=\"img-thumbnail\" /> ";
                            }
                            // line 112
                            echo "                     <span>";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 112);
                            echo "</span>
                    ";
                            // line 113
                            if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 113)) {
                                // line 114
                                echo "                    ";
                                // line 115
                                echo "                    ";
                            }
                            echo " </label>
                </div>
                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 118
                        echo "              </div>
            </div>
            ";
                    }
                    // line 121
                    echo "            ";
                    if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 121) == "select")) {
                        // line 122
                        echo "            <div class=\"form-group";
                        if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 122)) {
                            echo " required ";
                        }
                        echo "\">
              <label class=\"control-label\" for=\"input-option";
                        // line 123
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 123);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 123);
                        echo "</label>
              <select name=\"option[";
                        // line 124
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 124);
                        echo "]\" id=\"input-option";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 124);
                        echo "\" class=\"webi-option-select form-control\">
                <option value=\"\">";
                        // line 125
                        echo ($context["text_select"] ?? null);
                        echo "</option>
                ";
                        // line 126
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 126));
                        foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                            // line 127
                            echo "                  <option value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 127);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 127);
                            echo "
                    ";
                            // line 128
                            if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 128)) {
                                // line 129
                                echo "                      (";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 129);
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 129);
                                echo ")
                    ";
                            }
                            // line 130
                            echo " 
                  </option>
                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 133
                        echo "              </select>
            </div>
            ";
                    }
                    // line 136
                    echo "            ";
                    if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 136) == "radio")) {
                        // line 137
                        echo "            <div class=\"form-group";
                        if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 137)) {
                            echo " required ";
                        }
                        echo "\">
              <label class=\"control-label\">";
                        // line 138
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 138);
                        echo "</label>
              <div id=\"input-option";
                        // line 139
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 139);
                        echo "\" class=\"custom-radio\"> ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 139));
                        foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                            // line 140
                            echo "                <div class=\"radio\">
                  <label class=\"color-option\">
                    <input class=\"webi-option-click\" type=\"radio\" name=\"option[";
                            // line 142
                            echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 142);
                            echo "]\" value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 142);
                            echo "\" />
                    ";
                            // line 143
                            if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 143)) {
                                echo " <img src=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 143);
                                echo "\" alt=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 143);
                                echo " ";
                                if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 143)) {
                                    echo " ";
                                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 143);
                                    echo " ";
                                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 143);
                                    echo " ";
                                }
                                echo "\" class=\"img-thumbnail\" /> ";
                            }
                            echo "                  
                    <span>";
                            // line 144
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 144);
                            echo "<span>
                    ";
                            // line 145
                            if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 145)) {
                                // line 146
                                echo "                    (";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 146);
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 146);
                                echo ")
                    ";
                            }
                            // line 147
                            echo " </label>
                </div>
                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 149
                        echo " </div>
            </div>
            ";
                    }
                    // line 152
                    echo "           
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 154
                echo "        ";
            }
            // line 155
            echo "      </div>
      ";
            // line 157
            echo "      <div class=\"form-group homeaddq\">
          <div class=\"homeqt\">
            <span class=\"qty\">";
            // line 159
            echo ($context["Qty"] ?? null);
            echo "</span>
             <input class=\"addhqty\" type=\"text\" value=\"1\" size=\"2\" min=\"1\" max=\"999\" id=\"input-quantity-";
            // line 160
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 160);
            echo "\" class=\"form-control input-number pull-left\" />
             <div class=\"homeqtinner\">
              <button type=\"button\" onclick=\"qty.plus('";
            // line 162
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 162);
            echo "')\" class=\"form-control btn-number btnplus\">
           
              <i class=\"fa fa-angle-up\"></i>
            </button>
           
             <button type=\"button\" onclick=\"qty.minus('";
            // line 167
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 167);
            echo "')\" class=\"form-control  btn-number btnminus dis-";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 167);
            echo "\" disabled=\"disabled\">
             <i class=\"fa fa-angle-down\"></i>
            </button>
            </div>
          </div>
         ";
            // line 172
            if (twig_get_attribute($this->env, $this->source, $context["product"], "options", [], "any", false, false, false, 172)) {
                // line 173
                echo "          <input type=\"hidden\" name=\"product_id\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 173);
                echo "\"/>
          <button type=\"button\" class=\"webi-cart\" ><svg><use xlink:href=\"#hcart\"></use></svg>
          <span class=\"hidden-xs hidden-sm hidden-md\">";
                // line 175
                echo ($context["button_cart"] ?? null);
                echo "</span></button>
        ";
            } else {
                // line 177
                echo "          <button type=\"button\" onclick=\"cart.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 177);
                echo "');\"><svg><use xlink:href=\"#hcart\"></use></svg>
           <span class=\"hidden-xs hidden-sm hidden-md\">";
                // line 178
                echo ($context["button_cart"] ?? null);
                echo "</span></button>
        ";
            }
            // line 180
            echo "          <input type=\"hidden\" name=\"hid-qty-msg\" value=\"";
            echo ($context["atleast_cart"] ?? null);
            echo "\">
        </div>

      </div>

       
    

   ";
            // line 188
            if (twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 188)) {
                // line 189
                echo "            <script type=\"text/javascript\">
                (function(\$){
                    \$('#Countdown";
                // line 191
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 191);
                echo "').countdown({
                        until: new Date(";
                // line 192
                echo twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 192), "Y");
                echo ", ";
                echo twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 192), "m");
                echo "-1, ";
                echo twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 192), "d");
                echo ", ";
                echo twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 192), "H");
                echo ", ";
                echo twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 192), "i");
                echo ", ";
                echo twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 192), "s");
                echo "),
                        labels: ['Years', 'Months', 'Weeks', 'Days', 'Hrs', 'Mins', 'Secs'],
                        labels1: ['Year', 'Month', 'Week', 'Day', 'Hr', 'Min', 'Sec'],
                    });
                    //\$('#Countdown<?php echo \$product['product_id'];?>').countdown('pause');
               }(jQuery));
            </script>
            ";
            }
            // line 200
            echo "            </div>
    </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 203
        echo "

  
   </div>
</div>
 </div>
</div>
</div>
<script type=\"text/javascript\">
   (function(\$){
    \$(\"#count\").owlCarousel({
    itemsCustom : [
    [0, 1],
    [400, 1],
    [576,2],
    [768, 3],
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
        return "freshgo/template/extension/module/wbocproduct.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  614 => 203,  606 => 200,  585 => 192,  581 => 191,  577 => 189,  575 => 188,  563 => 180,  558 => 178,  553 => 177,  548 => 175,  542 => 173,  540 => 172,  530 => 167,  522 => 162,  517 => 160,  513 => 159,  509 => 157,  506 => 155,  503 => 154,  496 => 152,  491 => 149,  483 => 147,  476 => 146,  474 => 145,  470 => 144,  452 => 143,  446 => 142,  442 => 140,  436 => 139,  432 => 138,  425 => 137,  422 => 136,  417 => 133,  409 => 130,  402 => 129,  400 => 128,  393 => 127,  389 => 126,  385 => 125,  379 => 124,  373 => 123,  366 => 122,  363 => 121,  358 => 118,  348 => 115,  346 => 114,  344 => 113,  339 => 112,  323 => 111,  314 => 110,  311 => 109,  308 => 108,  305 => 107,  302 => 106,  300 => 105,  296 => 103,  292 => 102,  288 => 101,  284 => 100,  277 => 99,  274 => 98,  270 => 97,  265 => 96,  263 => 95,  260 => 94,  252 => 90,  247 => 87,  239 => 85,  235 => 83,  232 => 81,  225 => 79,  220 => 78,  218 => 77,  214 => 75,  204 => 70,  200 => 68,  192 => 65,  187 => 62,  184 => 61,  181 => 60,  177 => 57,  165 => 55,  157 => 53,  155 => 52,  152 => 51,  150 => 50,  148 => 45,  146 => 44,  143 => 43,  136 => 40,  129 => 38,  121 => 35,  109 => 28,  105 => 26,  102 => 25,  96 => 23,  93 => 22,  91 => 21,  87 => 19,  81 => 18,  79 => 17,  76 => 16,  70 => 15,  59 => 13,  52 => 8,  48 => 7,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "freshgo/template/extension/module/wbocproduct.twig", "");
    }
}
