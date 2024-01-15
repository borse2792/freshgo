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

/* freshgo/template/extension/module/bestseller.twig */
class __TwigTemplate_a65ededc376c7227ab98bcdcd36306a66213f375ea56ff9ce79cc18b1d70fe5c extends \Twig\Template
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
        echo "<div class=\"tab-pane\" id=\"bestseller\">
<div class=\"row rless\">
  ";
        // line 3
        $context["temp"] = 0;
        // line 4
        $context["setCol"] = 2;
        // line 5
        echo "  <div id=\"best\" class=\"owl-theme owl-carousel\">
 ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 7
            echo "
  ";
            // line 8
            $context["temp"] = (($context["temp"] ?? null) + 1);
            // line 9
            echo "        ";
            if (((($context["temp"] ?? null) % ($context["setCol"] ?? null)) == 1)) {
                // line 10
                echo "            <div class=\"multi-row\">
        ";
            }
            // line 12
            echo "  <div class=\"product-layout col-xs-12 cless\">
    <div class=\"product-thumb transition\">
      <div class=\"image\"><a href=\"";
            // line 14
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 14);
            echo "\"><img src=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 14);
            echo "\" alt=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 14);
            echo "\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 14);
            echo "\" class=\"img-responsive center-block\" /></a>
          <!-- Images Start -->
                        ";
            // line 16
            $context["t"] = 0;
            // line 17
            echo "                          ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "webi_images", [], "any", false, false, false, 17));
            foreach ($context['_seq'] as $context["_key"] => $context["webi_image"]) {
                // line 18
                echo "                          ";
                if ((($context["t"] ?? null) == 0)) {
                    // line 19
                    echo "                           <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 19);
                    echo "\"><img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["webi_image"], "popup", [], "any", false, false, false, 19);
                    echo "\" class=\"img-responsive second-img\" alt=\"hover image\"/></a>
                          ";
                    // line 20
                    $context["t"] = (($context["t"] ?? null) + 1);
                    // line 21
                    echo "                          ";
                }
                // line 22
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['webi_image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "        <!-- Images End -->
        
        ";
            // line 25
            if (twig_get_attribute($this->env, $this->source, $context["product"], "is_new", [], "any", false, false, false, 25)) {
                echo "<span class=\"new\">";
                echo ($context["pro_new"] ?? null);
                echo "</span>";
            }
            // line 26
            echo "
          ";
            // line 27
            if (twig_get_attribute($this->env, $this->source, $context["product"], "tag_per", [], "any", false, false, false, 27)) {
                // line 28
                echo "        <span class=\"sale\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "tag_per", [], "any", false, false, false, 28);
                echo "%</span>
        ";
            }
            // line 30
            echo "
      <div class=\"btn-quickview\">
        <button type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 32
            echo ($context["button_wishlist"] ?? null);
            echo "\" onclick=\"wishlist.add('";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 32);
            echo "');\"><svg><use xlink:href=\"#heart\" /></svg></button>
      </div>

      

      </div>

     <div class=\"caption text-left\">
       <div class=\"bran\">
                <span>";
            // line 41
            echo ($context["Brand_title"] ?? null);
            echo " ";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "manufacturer", [], "any", false, false, false, 41);
            echo "</span>
        </div>
         <div class=\"model\">
                <span>";
            // line 44
            echo ($context["model_title"] ?? null);
            echo " ";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "model", [], "any", false, false, false, 44);
            echo "</span>
        </div>
          <h4 class=\"protitle\"><a href=\"";
            // line 46
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 46);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 46);
            echo "</a></h4>
        <div class=\"opbtn\">
       ";
            // line 49
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 49)) {
                // line 50
                echo "          ";
                // line 51
                echo "           ";
                // line 56
                echo "          ";
                // line 57
                echo "          <p class=\"price\">
            ";
                // line 58
                if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 58)) {
                    // line 59
                    echo "            <span data-update='price-";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 59);
                    echo "' class=\"price\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 59);
                    echo "</span>
            ";
                } else {
                    // line 61
                    echo "            <span data-update='price-new-";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 61);
                    echo "' class=\"price-new\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 61);
                    echo "</span> <span data-update='price-";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 61);
                    echo "' class=\"price-old\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 61);
                    echo "</span>
            ";
                }
                // line 63
                echo "           
          </p>
        ";
                // line 66
                echo "        ";
            }
            // line 67
            echo "         ";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 67)) {
                // line 68
                echo "        
          <div class=\"rating comments_note wb-list-product-reviews\">
          
          <span class=\"rate-tot\">";
                // line 71
                echo twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 71);
                echo " <i class=\"fa fa-star emstar\"></i></span>(";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "tab_review", [], "any", false, false, false, 71);
                echo ")
       
        </div>";
            } else {
                // line 74
                echo "          <div class=\"rating comments_note wb-list-product-reviews\">
       
            <span class=\"rate-tot\">";
                // line 76
                echo twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 76);
                echo " <i class=\"fa fa-star emstar\"></i></span>(";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "tab_review", [], "any", false, false, false, 76);
                echo ")
           
       
        </div>
        ";
            }
            // line 81
            echo "        </div>
        <div class=\"protax\">
          ";
            // line 83
            if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 83)) {
                // line 84
                echo "            <span class=\"price-tax\">";
                echo ($context["text_tax"] ?? null);
                echo "</span>
            <span data-update='price-tax-";
                // line 85
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 85);
                echo "' class=\"price-tax\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 85);
                echo "</span>
            ";
            }
            // line 87
            echo "            </div>
       

      <div class=\"button-group\">
          
          <button type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 92
            echo ($context["button_compare"] ?? null);
            echo "\" onclick=\"compare.add('";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 92);
            echo "');\"><svg><use xlink:href=\"#compare\"/></svg></button>
          <div data-toggle=\"tooltip\" title=\"Quickview\"  class=\"bquickv\"></div>
      </div>
      ";
            // line 96
            echo "      <div class=\"webi-main\">
        ";
            // line 97
            if (twig_get_attribute($this->env, $this->source, $context["product"], "options", [], "any", false, false, false, 97)) {
                // line 98
                echo "          <input type=\"hidden\" name=\"product_id\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 98);
                echo "\"/>
          ";
                // line 99
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "options", [], "any", false, false, false, 99));
                foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                    // line 100
                    echo "            ";
                    if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 100) == "checkbox")) {
                        // line 101
                        echo "            <div class=\"form-group";
                        if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 101)) {
                            echo " required ";
                        }
                        echo " checkbox_input\">
              <label class=\"control-label\">";
                        // line 102
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 102);
                        echo "</label>
              <div id=\"input-option";
                        // line 103
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 103);
                        echo "\"> 
                ";
                        // line 104
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 104));
                        foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                            // line 105
                            echo "                <div class=\"checkbox\">
                  <label class=\"size-option\">
                    ";
                            // line 107
                            if (twig_get_attribute($this->env, $this->source, $context["option_value"], "raw_price", [], "any", false, false, false, 107)) {
                                // line 108
                                echo "                      ";
                                $context["raw_price"] = twig_get_attribute($this->env, $this->source, $context["option_value"], "raw_price", [], "any", false, false, false, 108);
                                // line 109
                                echo "                    ";
                            } else {
                                // line 110
                                echo "                      ";
                                $context["raw_price"] = 0;
                                // line 111
                                echo "                    ";
                            }
                            // line 112
                            echo "                    <input class=\"webi-option-click\" type=\"checkbox\" name=\"option[";
                            echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 112);
                            echo "][]\" value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 112);
                            echo "\" data-rawPrice=";
                            echo ($context["raw_price"] ?? null);
                            echo " />
                    ";
                            // line 113
                            if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 113)) {
                                echo " <img src=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 113);
                                echo "\" alt=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 113);
                                echo " ";
                                if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 113)) {
                                    echo " ";
                                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 113);
                                    echo " ";
                                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 113);
                                    echo " ";
                                }
                                echo "\" class=\"img-thumbnail\" /> ";
                            }
                            // line 114
                            echo "                     <span>";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 114);
                            echo "</span>
                    ";
                            // line 115
                            if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 115)) {
                                // line 116
                                echo "                    ";
                                // line 117
                                echo "                    ";
                            }
                            echo " </label>
                </div>
                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 120
                        echo "              </div>
            </div>
            ";
                    }
                    // line 123
                    echo "            ";
                    if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 123) == "select")) {
                        // line 124
                        echo "            <div class=\"form-group";
                        if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 124)) {
                            echo " required ";
                        }
                        echo "\">
              <label class=\"control-label\" for=\"input-option";
                        // line 125
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 125);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 125);
                        echo "</label>
              <select name=\"option[";
                        // line 126
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 126);
                        echo "]\" id=\"input-option";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 126);
                        echo "\" class=\"webi-option-select form-control\">
                <option value=\"\">";
                        // line 127
                        echo ($context["text_select"] ?? null);
                        echo "</option>
                ";
                        // line 128
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 128));
                        foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                            // line 129
                            echo "                  <option value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 129);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 129);
                            echo "
                    ";
                            // line 130
                            if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 130)) {
                                // line 131
                                echo "                      (";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 131);
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 131);
                                echo ")
                    ";
                            }
                            // line 132
                            echo " 
                  </option>
                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 135
                        echo "              </select>
            </div>
            ";
                    }
                    // line 138
                    echo "            ";
                    if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 138) == "radio")) {
                        // line 139
                        echo "            <div class=\"form-group";
                        if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 139)) {
                            echo " required ";
                        }
                        echo "\">
              <label class=\"control-label\">";
                        // line 140
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 140);
                        echo "</label>
              <div id=\"input-option";
                        // line 141
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 141);
                        echo "\" class=\"custom-radio\"> ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 141));
                        foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                            // line 142
                            echo "                <div class=\"radio\">
                  <label class=\"color-option\">
                    <input class=\"webi-option-click\" type=\"radio\" name=\"option[";
                            // line 144
                            echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 144);
                            echo "]\" value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 144);
                            echo "\" />
                    ";
                            // line 145
                            if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 145)) {
                                echo " <img src=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 145);
                                echo "\" alt=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 145);
                                echo " ";
                                if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 145)) {
                                    echo " ";
                                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 145);
                                    echo " ";
                                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 145);
                                    echo " ";
                                }
                                echo "\" class=\"img-thumbnail\" /> ";
                            }
                            echo "                  
                    <span>";
                            // line 146
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 146);
                            echo "<span>
                    ";
                            // line 147
                            if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 147)) {
                                // line 148
                                echo "                    (";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 148);
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 148);
                                echo ")
                    ";
                            }
                            // line 149
                            echo " </label>
                </div>
                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 151
                        echo " </div>
            </div>
            ";
                    }
                    // line 154
                    echo "           
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 156
                echo "        ";
            }
            // line 157
            echo "      </div>
      ";
            // line 159
            echo "
<div class=\"form-group homeaddq\">
          <div class=\"homeqt\">
            <span class=\"qty\">";
            // line 162
            echo ($context["Qty"] ?? null);
            echo "</span>
             <input class=\"addhqty\" type=\"text\" value=\"1\" size=\"2\" min=\"1\" max=\"999\" id=\"input-quantity-";
            // line 163
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 163);
            echo "\" class=\"form-control input-number pull-left\" />
             <div class=\"homeqtinner\">
              <button type=\"button\" onclick=\"qty.plus('";
            // line 165
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 165);
            echo "')\" class=\"form-control btn-number btnplus\">
           
              <i class=\"fa fa-angle-up\"></i>
            </button>
           
             <button type=\"button\" onclick=\"qty.minus('";
            // line 170
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 170);
            echo "')\" class=\"form-control  btn-number btnminus dis-";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 170);
            echo "\" disabled=\"disabled\">
             <i class=\"fa fa-angle-down\"></i>
            </button>
            </div>
          </div>
            ";
            // line 175
            if (twig_get_attribute($this->env, $this->source, $context["product"], "options", [], "any", false, false, false, 175)) {
                // line 176
                echo "          <input type=\"hidden\" name=\"product_id\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 176);
                echo "\"/>
          <button type=\"button\" class=\"webi-cart\" ><svg><use xlink:href=\"#hcart\"></use></svg>
          <span class=\"hidden-xs hidden-sm hidden-md\">";
                // line 178
                echo ($context["button_cart"] ?? null);
                echo "</span></button>
        ";
            } else {
                // line 180
                echo "          <button type=\"button\" onclick=\"cart.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 180);
                echo "');\"><svg><use xlink:href=\"#hcart\"></use></svg>
           <span class=\"hidden-xs hidden-sm hidden-md\">";
                // line 181
                echo ($context["button_cart"] ?? null);
                echo "</span></button>
        ";
            }
            // line 183
            echo "          <input type=\"hidden\" name=\"hid-qty-msg\" value=\"";
            echo ($context["atleast_cart"] ?? null);
            echo "\">
        </div>
            
        
      </div>
      
    </div>
  </div>

   ";
            // line 192
            if (((($context["temp"] ?? null) % ($context["setCol"] ?? null)) == 0)) {
                // line 193
                echo "            </div>
        ";
            }
            // line 195
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 196
        echo "     ";
        if (((twig_length_filter($this->env, ($context["products"] ?? null)) % ($context["setCol"] ?? null)) != 0)) {
            // line 197
            echo "    <!-- <h1>hii</h1> -->
        </div>
        ";
        }
        // line 200
        echo "      </div>
    </div>
</div>

<script type=\"text/javascript\">
   (function(\$){
    \$(\"#best\").owlCarousel({
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
</script>";
    }

    public function getTemplateName()
    {
        return "freshgo/template/extension/module/bestseller.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  609 => 200,  604 => 197,  601 => 196,  595 => 195,  591 => 193,  589 => 192,  576 => 183,  571 => 181,  566 => 180,  561 => 178,  555 => 176,  553 => 175,  543 => 170,  535 => 165,  530 => 163,  526 => 162,  521 => 159,  518 => 157,  515 => 156,  508 => 154,  503 => 151,  495 => 149,  488 => 148,  486 => 147,  482 => 146,  464 => 145,  458 => 144,  454 => 142,  448 => 141,  444 => 140,  437 => 139,  434 => 138,  429 => 135,  421 => 132,  414 => 131,  412 => 130,  405 => 129,  401 => 128,  397 => 127,  391 => 126,  385 => 125,  378 => 124,  375 => 123,  370 => 120,  360 => 117,  358 => 116,  356 => 115,  351 => 114,  335 => 113,  326 => 112,  323 => 111,  320 => 110,  317 => 109,  314 => 108,  312 => 107,  308 => 105,  304 => 104,  300 => 103,  296 => 102,  289 => 101,  286 => 100,  282 => 99,  277 => 98,  275 => 97,  272 => 96,  264 => 92,  257 => 87,  250 => 85,  245 => 84,  243 => 83,  239 => 81,  229 => 76,  225 => 74,  217 => 71,  212 => 68,  209 => 67,  206 => 66,  202 => 63,  190 => 61,  182 => 59,  180 => 58,  177 => 57,  175 => 56,  173 => 51,  171 => 50,  168 => 49,  161 => 46,  154 => 44,  146 => 41,  132 => 32,  128 => 30,  122 => 28,  120 => 27,  117 => 26,  111 => 25,  107 => 23,  101 => 22,  98 => 21,  96 => 20,  89 => 19,  86 => 18,  81 => 17,  79 => 16,  68 => 14,  64 => 12,  60 => 10,  57 => 9,  55 => 8,  52 => 7,  48 => 6,  45 => 5,  43 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "freshgo/template/extension/module/bestseller.twig", "");
    }
}
