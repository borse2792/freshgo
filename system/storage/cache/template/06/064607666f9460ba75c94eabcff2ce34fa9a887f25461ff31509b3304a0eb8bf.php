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

/* freshgo/template/extension/module/latest.twig */
class __TwigTemplate_8fd533c70e14f5059c5aaf12c6dbd429974142532b5a62904964ee978d557e33 extends \Twig\Template
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
        echo "<div class=\"tab-pane\" id=\"latestp\">
<div class=\"row rless\">
    ";
        // line 3
        $context["temp"] = 0;
        // line 4
        $context["setCol"] = 2;
        // line 5
        echo "  <div id=\"latest\" class=\"owl-theme owl-carousel\">
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
            // line 39
            echo ($context["Brand_title"] ?? null);
            echo " ";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "manufacturer", [], "any", false, false, false, 39);
            echo "</span>
        </div>
        <div class=\"model\">
                <span>";
            // line 42
            echo ($context["model_title"] ?? null);
            echo " ";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "model", [], "any", false, false, false, 42);
            echo "</span>
        </div>
        <h4 class=\"protitle\"><a href=\"";
            // line 44
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 44);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 44);
            echo "</a></h4>
      <div class=\"opbtn\">
       ";
            // line 47
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 47)) {
                // line 48
                echo "          ";
                // line 49
                echo "           ";
                // line 54
                echo "          ";
                // line 55
                echo "          <p class=\"price\">
            ";
                // line 56
                if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 56)) {
                    // line 57
                    echo "            <span data-update='price-";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 57);
                    echo "' class=\"price\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 57);
                    echo "</span>
            ";
                } else {
                    // line 59
                    echo "            <span data-update='price-new-";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 59);
                    echo "' class=\"price-new\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 59);
                    echo "</span> <span data-update='price-";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 59);
                    echo "' class=\"price-old\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 59);
                    echo "</span>
            ";
                }
                // line 61
                echo "            
          </p>
        ";
                // line 64
                echo "        ";
            }
            // line 65
            echo "         ";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 65)) {
                // line 66
                echo "        
          <div class=\"rating comments_note wb-list-product-reviews\">
          
          <span class=\"rate-tot\">";
                // line 69
                echo twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 69);
                echo " <i class=\"fa fa-star emstar\"></i></span>(";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "tab_review", [], "any", false, false, false, 69);
                echo ")
       
        </div>";
            } else {
                // line 72
                echo "          <div class=\"rating comments_note wb-list-product-reviews\">
       
            <span class=\"rate-tot\">";
                // line 74
                echo twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 74);
                echo " <i class=\"fa fa-star emstar\"></i></span>(";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "tab_review", [], "any", false, false, false, 74);
                echo ")
           
       
        </div>
        ";
            }
            // line 79
            echo "        </div>

        <div class=\"protax\">
          ";
            // line 82
            if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 82)) {
                // line 83
                echo "            <span class=\"price-tax\">";
                echo ($context["text_tax"] ?? null);
                echo "</span>
            <span data-update='price-tax-";
                // line 84
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 84);
                echo "' class=\"price-tax\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 84);
                echo "</span>
            ";
            }
            // line 86
            echo "            </div>
       

      <div class=\"button-group\">
          
          <button type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 91
            echo ($context["button_compare"] ?? null);
            echo "\" onclick=\"compare.add('";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 91);
            echo "');\"><svg><use xlink:href=\"#compare\"/></svg></button>
          <div data-toggle=\"tooltip\" title=\"Quickview\"  class=\"bquickv\"></div>
      </div>
      ";
            // line 95
            echo "      <div class=\"webi-main\">
        ";
            // line 96
            if (twig_get_attribute($this->env, $this->source, $context["product"], "options", [], "any", false, false, false, 96)) {
                // line 97
                echo "          <input type=\"hidden\" name=\"product_id\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 97);
                echo "\"/>
          ";
                // line 98
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "options", [], "any", false, false, false, 98));
                foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                    // line 99
                    echo "            ";
                    if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 99) == "checkbox")) {
                        // line 100
                        echo "            <div class=\"form-group";
                        if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 100)) {
                            echo " required ";
                        }
                        echo " checkbox_input\">
              <label class=\"control-label\">";
                        // line 101
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 101);
                        echo "</label>
              <div id=\"input-option";
                        // line 102
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 102);
                        echo "\"> 
                ";
                        // line 103
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 103));
                        foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                            // line 104
                            echo "                <div class=\"checkbox\">
                  <label class=\"size-option\">
                    ";
                            // line 106
                            if (twig_get_attribute($this->env, $this->source, $context["option_value"], "raw_price", [], "any", false, false, false, 106)) {
                                // line 107
                                echo "                      ";
                                $context["raw_price"] = twig_get_attribute($this->env, $this->source, $context["option_value"], "raw_price", [], "any", false, false, false, 107);
                                // line 108
                                echo "                    ";
                            } else {
                                // line 109
                                echo "                      ";
                                $context["raw_price"] = 0;
                                // line 110
                                echo "                    ";
                            }
                            // line 111
                            echo "                    <input class=\"webi-option-click\" type=\"checkbox\" name=\"option[";
                            echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 111);
                            echo "][]\" value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 111);
                            echo "\" data-rawPrice=";
                            echo ($context["raw_price"] ?? null);
                            echo " />
                    ";
                            // line 112
                            if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 112)) {
                                echo " <img src=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 112);
                                echo "\" alt=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 112);
                                echo " ";
                                if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 112)) {
                                    echo " ";
                                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 112);
                                    echo " ";
                                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 112);
                                    echo " ";
                                }
                                echo "\" class=\"img-thumbnail\" /> ";
                            }
                            // line 113
                            echo "                     <span>";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 113);
                            echo "</span>
                    ";
                            // line 114
                            if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 114)) {
                                // line 115
                                echo "                    ";
                                // line 116
                                echo "                    ";
                            }
                            echo " </label>
                </div>
                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 119
                        echo "              </div>
            </div>
            ";
                    }
                    // line 122
                    echo "            ";
                    if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 122) == "select")) {
                        // line 123
                        echo "            <div class=\"form-group";
                        if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 123)) {
                            echo " required ";
                        }
                        echo "\">
              <label class=\"control-label\" for=\"input-option";
                        // line 124
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 124);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 124);
                        echo "</label>
              <select name=\"option[";
                        // line 125
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 125);
                        echo "]\" id=\"input-option";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 125);
                        echo "\" class=\"webi-option-select form-control\">
                <option value=\"\">";
                        // line 126
                        echo ($context["text_select"] ?? null);
                        echo "</option>
                ";
                        // line 127
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 127));
                        foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                            // line 128
                            echo "                  <option value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 128);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 128);
                            echo "
                    ";
                            // line 129
                            if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 129)) {
                                // line 130
                                echo "                      (";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 130);
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 130);
                                echo ")
                    ";
                            }
                            // line 131
                            echo " 
                  </option>
                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 134
                        echo "              </select>
            </div>
            ";
                    }
                    // line 137
                    echo "            ";
                    if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 137) == "radio")) {
                        // line 138
                        echo "            <div class=\"form-group";
                        if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 138)) {
                            echo " required ";
                        }
                        echo "\">
              <label class=\"control-label\">";
                        // line 139
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 139);
                        echo "</label>
              <div id=\"input-option";
                        // line 140
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 140);
                        echo "\" class=\"custom-radio\"> ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 140));
                        foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                            // line 141
                            echo "                <div class=\"radio\">
                  <label class=\"color-option\">
                    <input class=\"webi-option-click\" type=\"radio\" name=\"option[";
                            // line 143
                            echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 143);
                            echo "]\" value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 143);
                            echo "\" />
                    ";
                            // line 144
                            if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 144)) {
                                echo " <img src=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 144);
                                echo "\" alt=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 144);
                                echo " ";
                                if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 144)) {
                                    echo " ";
                                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 144);
                                    echo " ";
                                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 144);
                                    echo " ";
                                }
                                echo "\" class=\"img-thumbnail\" /> ";
                            }
                            echo "                  
                    <span>";
                            // line 145
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 145);
                            echo "<span>
                    ";
                            // line 146
                            if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 146)) {
                                // line 147
                                echo "                    (";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 147);
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 147);
                                echo ")
                    ";
                            }
                            // line 148
                            echo " </label>
                </div>
                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 150
                        echo " </div>
            </div>
            ";
                    }
                    // line 153
                    echo "           
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 155
                echo "        ";
            }
            // line 156
            echo "      </div>
      ";
            // line 158
            echo "      <div class=\"form-group homeaddq\">
          <div class=\"homeqt\">
            <span class=\"qty\">";
            // line 160
            echo ($context["Qty"] ?? null);
            echo "</span>
             <input class=\"addhqty\" type=\"text\" value=\"1\" size=\"2\" min=\"1\" max=\"999\" id=\"input-quantity-";
            // line 161
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 161);
            echo "\" class=\"form-control input-number pull-left\" />
             <div class=\"homeqtinner\">
              <button type=\"button\" onclick=\"qty.plus('";
            // line 163
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 163);
            echo "')\" class=\"form-control btn-number btnplus\">
           
              <i class=\"fa fa-angle-up\"></i>
            </button>
           
             <button type=\"button\" onclick=\"qty.minus('";
            // line 168
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 168);
            echo "')\" class=\"form-control  btn-number btnminus dis-";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 168);
            echo "\" disabled=\"disabled\">
             <i class=\"fa fa-angle-down\"></i>
            </button>
            </div>
          </div>
             ";
            // line 173
            if (twig_get_attribute($this->env, $this->source, $context["product"], "options", [], "any", false, false, false, 173)) {
                // line 174
                echo "          <input type=\"hidden\" name=\"product_id\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 174);
                echo "\"/>
          <button type=\"button\" class=\"webi-cart\" ><svg><use xlink:href=\"#hcart\"></use></svg>
          <span class=\"hidden-xs hidden-sm hidden-md\">";
                // line 176
                echo ($context["button_cart"] ?? null);
                echo "</span></button>
        ";
            } else {
                // line 178
                echo "          <button type=\"button\" onclick=\"cart.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 178);
                echo "');\"><svg><use xlink:href=\"#hcart\"></use></svg>
           <span class=\"hidden-xs hidden-sm hidden-md\">";
                // line 179
                echo ($context["button_cart"] ?? null);
                echo "</span></button>
        ";
            }
            // line 181
            echo "          <input type=\"hidden\" name=\"hid-qty-msg\" value=\"";
            echo ($context["atleast_cart"] ?? null);
            echo "\">
        </div>
        
      </div>
      
    </div>
  </div>

    ";
            // line 189
            if (((($context["temp"] ?? null) % ($context["setCol"] ?? null)) == 0)) {
                // line 190
                echo "            </div>
        ";
            }
            // line 192
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 193
        echo "     ";
        if (((twig_length_filter($this->env, ($context["products"] ?? null)) % ($context["setCol"] ?? null)) != 0)) {
            // line 194
            echo "    <!-- <h1>hii</h1> -->
        </div>
        ";
        }
        // line 197
        echo "

      </div>
    </div>
</div>
</div>
</div>
<script type=\"text/javascript\">
   (function(\$){
    \$(\"#latest\").owlCarousel({
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
        return "freshgo/template/extension/module/latest.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  606 => 197,  601 => 194,  598 => 193,  592 => 192,  588 => 190,  586 => 189,  574 => 181,  569 => 179,  564 => 178,  559 => 176,  553 => 174,  551 => 173,  541 => 168,  533 => 163,  528 => 161,  524 => 160,  520 => 158,  517 => 156,  514 => 155,  507 => 153,  502 => 150,  494 => 148,  487 => 147,  485 => 146,  481 => 145,  463 => 144,  457 => 143,  453 => 141,  447 => 140,  443 => 139,  436 => 138,  433 => 137,  428 => 134,  420 => 131,  413 => 130,  411 => 129,  404 => 128,  400 => 127,  396 => 126,  390 => 125,  384 => 124,  377 => 123,  374 => 122,  369 => 119,  359 => 116,  357 => 115,  355 => 114,  350 => 113,  334 => 112,  325 => 111,  322 => 110,  319 => 109,  316 => 108,  313 => 107,  311 => 106,  307 => 104,  303 => 103,  299 => 102,  295 => 101,  288 => 100,  285 => 99,  281 => 98,  276 => 97,  274 => 96,  271 => 95,  263 => 91,  256 => 86,  249 => 84,  244 => 83,  242 => 82,  237 => 79,  227 => 74,  223 => 72,  215 => 69,  210 => 66,  207 => 65,  204 => 64,  200 => 61,  188 => 59,  180 => 57,  178 => 56,  175 => 55,  173 => 54,  171 => 49,  169 => 48,  166 => 47,  159 => 44,  152 => 42,  144 => 39,  132 => 32,  128 => 30,  122 => 28,  120 => 27,  117 => 26,  111 => 25,  107 => 23,  101 => 22,  98 => 21,  96 => 20,  89 => 19,  86 => 18,  81 => 17,  79 => 16,  68 => 14,  64 => 12,  60 => 10,  57 => 9,  55 => 8,  52 => 7,  48 => 6,  45 => 5,  43 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "freshgo/template/extension/module/latest.twig", "");
    }
}
