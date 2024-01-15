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

/* freshgo/template/product/category.twig */
class __TwigTemplate_1c5d0845568e688adea77b3dd4c3558e12292b147e58d4e07d9f79ba7daa9d07 extends \Twig\Template
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
<div class=\"breadbg\">
  <div class=\"container\">
    <div class=\"row\">
      <ul class=\"breadcrumb\">
    ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 7
            echo "    <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 7);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 7);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "    </ul>
  </div>
</div>
</div>
<div id=\"product-category\" class=\"container cleft\">
  <div class=\"row\">";
        // line 14
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 15
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 16
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 17
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 18
            echo "    ";
            $context["class"] = "col-sm-8 col-md-9  col-xs-12 colright";
            // line 19
            echo "    ";
        } else {
            // line 20
            echo "    ";
            $context["class"] = "col-xs-12";
            // line 21
            echo "    ";
        }
        // line 22
        echo "    <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">";
        echo ($context["content_top"] ?? null);
        echo "
      ";
        // line 23
        if ((($context["thumb"] ?? null) || ($context["description"] ?? null))) {
            // line 24
            echo "      <div class=\"cate-top row hidden-xs\"> 
         <h2>";
            // line 25
            echo ($context["heading_title"] ?? null);
            echo "</h2>
         <div class=\"row\">
        <div class=\"col-md-5 col-lg-2 hidden-sm\">
          ";
            // line 28
            if (($context["thumb"] ?? null)) {
                // line 29
                echo "          <img src=\"";
                echo ($context["thumb"] ?? null);
                echo "\" alt=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" title=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" class=\"img-responsive center-block\" />
        ";
            }
            // line 31
            echo "        </div>
        <div class=\"col-md-7 col-sm-12 col-lg-10 col-xs-12\">
         ";
            // line 33
            if (($context["description"] ?? null)) {
                // line 34
                echo "          ";
                echo ($context["description"] ?? null);
                echo "
        ";
            }
            // line 36
            echo "      </div>
      </div>
    </div>
      ";
        }
        // line 40
        echo "
      <div class=\"appres\"></div>
    <div class=\"refines\">
      <h3>";
        // line 43
        echo ($context["text_refine"] ?? null);
        echo "</h3>
      ";
        // line 44
        if ((twig_length_filter($this->env, ($context["categories"] ?? null)) <= 5)) {
            // line 45
            echo "          <ul class=\"list-unstyled list-inline\">
            ";
            // line 46
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 47
                echo "            <li><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 47);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 47);
                echo "</a></li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 49
            echo "          </ul>
      ";
        } else {
            // line 51
            echo "      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_array_batch(($context["categories"] ?? null), twig_round((twig_length_filter($this->env, ($context["categories"] ?? null)) / 4), 1, "ceil")));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 52
                echo "          <ul class=\"list-unstyled list-inline\">
            ";
                // line 53
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["category"]);
                foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                    // line 54
                    echo "            <li><a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 54);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 54);
                    echo "</a></li>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 56
                echo "          </ul>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            echo "      ";
        }
        // line 59
        echo "    </div>
    
      ";
        // line 61
        if (($context["products"] ?? null)) {
            // line 62
            echo "      <div class=\"row cate-border\">
            <div class=\"col-md-2 col-sm-3 col-xs-4 lgrid\">
                <div class=\"btn-group-sm\">
                    <button type=\"button\" id=\"list-view\" class=\"btn listgridbtn\" data-toggle=\"tooltip\" title=\"";
            // line 65
            echo ($context["button_list"] ?? null);
            echo "\">
                     <svg width=\"20px\" height=\"20px\"><use xlink:href=\"#clist\"></use> </svg>
                    </button>
                    <button type=\"button\" id=\"grid-view\" class=\"btn listgridbtn\" data-toggle=\"tooltip\" title=\"";
            // line 68
            echo ($context["button_grid"] ?? null);
            echo "\">
                       <svg width=\"18px\" height=\"18px\"><use xlink:href=\"#cgrid\"></use> </svg>
                    </button>
                </div>
            </div>
            <div class=\"col-lg-4 col-md-5 col-sm-6 col-xs-8 hidden-md hidden-sm ct\">
                <a href=\"";
            // line 74
            echo ($context["compare"] ?? null);
            echo "\" id=\"compare-total\" class=\"btn btn-link\">";
            echo ($context["text_compare"] ?? null);
            echo "</a>
            </div>
            <div class=\"col-lg-3 col-md-5 col-xs-4 col-sm-5 catesort\">
                <div class=\"input-group input-group-sm select-input\">
                    <label class=\"input-group-addon\" for=\"input-sort\">";
            // line 78
            echo ($context["text_sort"] ?? null);
            echo "</label>
                  
                    <select id=\"input-sort\" class=\"form-control\" onchange=\"location = this.value;\">
                        ";
            // line 81
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["sorts"]);
            foreach ($context['_seq'] as $context["_key"] => $context["sorts"]) {
                // line 82
                echo "                            ";
                if ((twig_get_attribute($this->env, $this->source, $context["sorts"], "value", [], "any", false, false, false, 82) == sprintf("%s-%s", ($context["sort"] ?? null), ($context["order"] ?? null)))) {
                    // line 83
                    echo "                                <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 83);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 83);
                    echo "</option>
                            ";
                } else {
                    // line 85
                    echo "                                <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 85);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 85);
                    echo "</option>
                            ";
                }
                // line 87
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sorts'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 88
            echo "                    </select>
                </div>
            </div>
            <div class=\"col-lg-3 col-md-5 col-xs-4 col-sm-4 catesort\">
                <div class=\"input-group input-group-sm select-input\">
                    <label class=\"input-group-addon\" for=\"input-limit\">";
            // line 93
            echo ($context["text_limit"] ?? null);
            echo "</label>
                    <select id=\"input-limit\" class=\"form-control\" onchange=\"location = this.value;\">
                        ";
            // line 95
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["limits"]);
            foreach ($context['_seq'] as $context["_key"] => $context["limits"]) {
                // line 96
                echo "                            ";
                if ((twig_get_attribute($this->env, $this->source, $context["limits"], "value", [], "any", false, false, false, 96) == ($context["limit"] ?? null))) {
                    // line 97
                    echo "                                <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "href", [], "any", false, false, false, 97);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 97);
                    echo "</option>
                            ";
                } else {
                    // line 99
                    echo "                                <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "href", [], "any", false, false, false, 99);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 99);
                    echo "</option>
                            ";
                }
                // line 101
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['limits'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 102
            echo "                    </select>
                </div>
            </div>
        </div>
      <div class=\"row cpagerow\"> ";
            // line 106
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 107
                echo "        <div class=\"product-layout product-list col-xs-12\">
          <div class=\"product-thumb transition\">
      <div class=\"image\"><a href=\"";
                // line 109
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 109);
                echo "\"><img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 109);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 109);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 109);
                echo "\" class=\"img-responsive center-block\" /></a>
               <!-- Images Start -->
                        ";
                // line 111
                $context["t"] = 0;
                // line 112
                echo "                          ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "webi_images", [], "any", false, false, false, 112));
                foreach ($context['_seq'] as $context["_key"] => $context["webi_image"]) {
                    // line 113
                    echo "                          ";
                    if ((($context["t"] ?? null) == 0)) {
                        // line 114
                        echo "                           <a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 114);
                        echo "\"><img src=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["webi_image"], "popup", [], "any", false, false, false, 114);
                        echo "\" class=\"img-responsive second-img\" alt=\"hover image\"/></a>
                          ";
                        // line 115
                        $context["t"] = (($context["t"] ?? null) + 1);
                        // line 116
                        echo "                          ";
                    }
                    // line 117
                    echo "                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['webi_image'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 118
                echo "        <!-- Images End -->
       
       ";
                // line 120
                if (twig_get_attribute($this->env, $this->source, $context["product"], "is_new", [], "any", false, false, false, 120)) {
                    echo "<span class=\"new\">";
                    echo ($context["pro_new"] ?? null);
                    echo "</span>";
                }
                // line 121
                echo "
          ";
                // line 122
                if (twig_get_attribute($this->env, $this->source, $context["product"], "tag_per", [], "any", false, false, false, 122)) {
                    // line 123
                    echo "        <span class=\"sale\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "tag_per", [], "any", false, false, false, 123);
                    echo "%</span>
        ";
                }
                // line 125
                echo "
          <div class=\"btn-quickview\">
        <button type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 127
                echo ($context["button_wishlist"] ?? null);
                echo "\" onclick=\"wishlist.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 127);
                echo "');\"><svg><use xlink:href=\"#heart\" /></svg></button>
      </div>

      </div>

      <div class=\"caption text-left\">
        <div class=\"bran\">
                <span>";
                // line 134
                echo ($context["Brand_title"] ?? null);
                echo " ";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "manufacturer", [], "any", false, false, false, 134);
                echo "</span>
        </div>
        <div class=\"model\">
                <span>";
                // line 137
                echo ($context["model_title"] ?? null);
                echo " ";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "model", [], "any", false, false, false, 137);
                echo "</span>
        </div>
         <h4 class=\"protitle\"><a href=\"";
                // line 139
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 139);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 139);
                echo "</a></h4>
              <p class=\"catlist-des\">";
                // line 140
                echo twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 140);
                echo "</p>
        <div class=\"opbtn\">
        ";
                // line 142
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 142)) {
                    // line 143
                    echo "        <div class=\"price\">
          ";
                    // line 144
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 144)) {
                        // line 145
                        echo "          ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 145);
                        echo "
          ";
                    } else {
                        // line 147
                        echo "          <span class=\"price-new\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 147);
                        echo "</span> <span class=\"price-old\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 147);
                        echo "</span>
          ";
                    }
                    // line 149
                    echo "         ";
                    // line 152
                    echo "        </div>
        ";
                }
                // line 154
                echo "          ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 154)) {
                    // line 155
                    echo "        
          <div class=\"rating comments_note wb-list-product-reviews\">
          
          <span class=\"rate-tot\">";
                    // line 158
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 158);
                    echo " <i class=\"fa fa-star emstar\"></i></span>(";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "tab_review", [], "any", false, false, false, 158);
                    echo ")
       
        </div>";
                } else {
                    // line 161
                    echo "          <div class=\"rating comments_note wb-list-product-reviews\">
       
            <span class=\"rate-tot\">";
                    // line 163
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 163);
                    echo " <i class=\"fa fa-star emstar\"></i></span>(";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "tab_review", [], "any", false, false, false, 163);
                    echo ")
           
       
        </div>
        ";
                }
                // line 168
                echo "        </div>
        <div class=\"protax\">
          ";
                // line 170
                if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 170)) {
                    // line 171
                    echo "            <span class=\"price-tax\">";
                    echo ($context["text_tax"] ?? null);
                    echo "</span>
            <span data-update='price-tax-";
                    // line 172
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 172);
                    echo "' class=\"price-tax\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 172);
                    echo "</span>
            ";
                }
                // line 174
                echo "            </div>
        

   
       

       <div class=\"button-group\">
          
          <button type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 182
                echo ($context["button_compare"] ?? null);
                echo "\" onclick=\"compare.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 182);
                echo "');\"><svg><use xlink:href=\"#compare\"/></svg></button>
          <div data-toggle=\"tooltip\" title=\"Quickview\"  class=\"bquickv\"></div>
      </div>
      ";
                // line 186
                echo "      <div class=\"webi-main\">
        ";
                // line 187
                if (twig_get_attribute($this->env, $this->source, $context["product"], "options", [], "any", false, false, false, 187)) {
                    // line 188
                    echo "          <input type=\"hidden\" name=\"product_id\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 188);
                    echo "\"/>
          ";
                    // line 189
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "options", [], "any", false, false, false, 189));
                    foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                        // line 190
                        echo "            ";
                        if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 190) == "checkbox")) {
                            // line 191
                            echo "            <div class=\"form-group";
                            if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 191)) {
                                echo " required ";
                            }
                            echo " checkbox_input\">
              <label class=\"control-label\">";
                            // line 192
                            echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 192);
                            echo "</label>
              <div id=\"input-option";
                            // line 193
                            echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 193);
                            echo "\"> 
                ";
                            // line 194
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 194));
                            foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                                // line 195
                                echo "                <div class=\"checkbox\">
                  <label class=\"size-option\">
                    ";
                                // line 197
                                if (twig_get_attribute($this->env, $this->source, $context["option_value"], "raw_price", [], "any", false, false, false, 197)) {
                                    // line 198
                                    echo "                      ";
                                    $context["raw_price"] = twig_get_attribute($this->env, $this->source, $context["option_value"], "raw_price", [], "any", false, false, false, 198);
                                    // line 199
                                    echo "                    ";
                                } else {
                                    // line 200
                                    echo "                      ";
                                    $context["raw_price"] = 0;
                                    // line 201
                                    echo "                    ";
                                }
                                // line 202
                                echo "                    <input class=\"webi-option-click\" type=\"checkbox\" name=\"option[";
                                echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 202);
                                echo "][]\" value=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 202);
                                echo "\" data-rawPrice=";
                                echo ($context["raw_price"] ?? null);
                                echo " />
                    ";
                                // line 203
                                if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 203)) {
                                    echo " <img src=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 203);
                                    echo "\" alt=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 203);
                                    echo " ";
                                    if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 203)) {
                                        echo " ";
                                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 203);
                                        echo " ";
                                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 203);
                                        echo " ";
                                    }
                                    echo "\" class=\"img-thumbnail\" /> ";
                                }
                                // line 204
                                echo "                     <span>";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 204);
                                echo "</span>
                    ";
                                // line 205
                                if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 205)) {
                                    // line 206
                                    echo "                    ";
                                    // line 207
                                    echo "                    ";
                                }
                                echo " </label>
                </div>
                ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 210
                            echo "              </div>
            </div>
            ";
                        }
                        // line 213
                        echo "            ";
                        if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 213) == "select")) {
                            // line 214
                            echo "            <div class=\"form-group";
                            if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 214)) {
                                echo " required ";
                            }
                            echo "\">
              <label class=\"control-label\" for=\"input-option";
                            // line 215
                            echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 215);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 215);
                            echo "</label>
              <select name=\"option[";
                            // line 216
                            echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 216);
                            echo "]\" id=\"input-option";
                            echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 216);
                            echo "\" class=\"webi-option-select form-control\">
                <option value=\"\">";
                            // line 217
                            echo ($context["text_select"] ?? null);
                            echo "</option>
                ";
                            // line 218
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 218));
                            foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                                // line 219
                                echo "                  <option value=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 219);
                                echo "\">";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 219);
                                echo "
                    ";
                                // line 220
                                if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 220)) {
                                    // line 221
                                    echo "                      (";
                                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 221);
                                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 221);
                                    echo ")
                    ";
                                }
                                // line 222
                                echo " 
                  </option>
                ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 225
                            echo "              </select>
            </div>
            ";
                        }
                        // line 228
                        echo "            ";
                        if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 228) == "radio")) {
                            // line 229
                            echo "            <div class=\"form-group";
                            if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 229)) {
                                echo " required ";
                            }
                            echo "\">
              <label class=\"control-label\">";
                            // line 230
                            echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 230);
                            echo "</label>
              <div id=\"input-option";
                            // line 231
                            echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 231);
                            echo "\" class=\"custom-radio\"> ";
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 231));
                            foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                                // line 232
                                echo "                <div class=\"radio\">
                  <label class=\"color-option\">
                    <input class=\"webi-option-click\" type=\"radio\" name=\"option[";
                                // line 234
                                echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 234);
                                echo "]\" value=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 234);
                                echo "\" />
                    ";
                                // line 235
                                if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 235)) {
                                    echo " <img src=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 235);
                                    echo "\" alt=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 235);
                                    echo " ";
                                    if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 235)) {
                                        echo " ";
                                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 235);
                                        echo " ";
                                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 235);
                                        echo " ";
                                    }
                                    echo "\" class=\"img-thumbnail\" /> ";
                                }
                                echo "                  
                    <span>";
                                // line 236
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 236);
                                echo "<span>
                    ";
                                // line 237
                                if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 237)) {
                                    // line 238
                                    echo "                    (";
                                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 238);
                                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 238);
                                    echo ")
                    ";
                                }
                                // line 239
                                echo " </label>
                </div>
                ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 241
                            echo " </div>
            </div>
            ";
                        }
                        // line 244
                        echo "           
          ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 246
                    echo "        ";
                }
                // line 247
                echo "      </div>
      ";
                // line 249
                echo "

     <div class=\"form-group homeaddq\">
          <div class=\"homeqt\">
            <span class=\"qty\">";
                // line 253
                echo ($context["Qty"] ?? null);
                echo "</span>
             <input class=\"addhqty\" type=\"text\" value=\"1\" size=\"2\" min=\"1\" max=\"999\" id=\"input-quantity-";
                // line 254
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 254);
                echo "\" class=\"form-control input-number pull-left\" />
             <div class=\"homeqtinner\">
              <button type=\"button\" onclick=\"qty.plus('";
                // line 256
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 256);
                echo "')\" class=\"form-control btn-number btnplus\">
           
              <i class=\"fa fa-angle-up\"></i>
            </button>
           
             <button type=\"button\" onclick=\"qty.minus('";
                // line 261
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 261);
                echo "')\" class=\"form-control  btn-number btnminus dis-";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 261);
                echo "\" disabled=\"disabled\">
             <i class=\"fa fa-angle-down\"></i>
            </button>
            </div>
          </div>
           ";
                // line 266
                if (twig_get_attribute($this->env, $this->source, $context["product"], "options", [], "any", false, false, false, 266)) {
                    // line 267
                    echo "          <input type=\"hidden\" name=\"product_id\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 267);
                    echo "\"/>
          <button type=\"button\" class=\"webi-cart\" ><svg><use xlink:href=\"#hcart\"></use></svg>
          <span class=\"hidden-xs hidden-sm hidden-md\">";
                    // line 269
                    echo ($context["button_cart"] ?? null);
                    echo "</span></button>
        ";
                } else {
                    // line 271
                    echo "          <button type=\"button\" onclick=\"cart.add('";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 271);
                    echo "');\"><svg><use xlink:href=\"#hcart\"></use></svg>
           <span class=\"hidden-xs hidden-sm hidden-md\">";
                    // line 272
                    echo ($context["button_cart"] ?? null);
                    echo "</span></button>
        ";
                }
                // line 274
                echo "          <input type=\"hidden\" name=\"hid-qty-msg\" value=\"";
                echo ($context["atleast_cart"] ?? null);
                echo "\">
        </div>

      </div>



    </div>
        </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 283
            echo " </div>
      <div class=\"row pagi\">
        <div class=\"col-sm-6 col-xs-6 text-left\">";
            // line 285
            echo ($context["pagination"] ?? null);
            echo "</div>
        <div class=\"col-sm-6 col-xs-6 text-right tot\">";
            // line 286
            echo ($context["results"] ?? null);
            echo "</div>
      </div>
      ";
        }
        // line 289
        echo "      ";
        if (( !($context["categories"] ?? null) &&  !($context["products"] ?? null))) {
            // line 290
            echo "      <p>";
            echo ($context["ctext_empty"] ?? null);
            echo "</p>
      <div class=\"buttons\">
        <div class=\"pull-right\"><a href=\"";
            // line 292
            echo ($context["continue"] ?? null);
            echo "\" class=\"btn btn-primary\">";
            echo ($context["button_continue"] ?? null);
            echo "</a></div>
      </div>
      ";
        }
        // line 295
        echo "      </div>
    ";
        // line 296
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
";
        // line 298
        echo ($context["content_bottom"] ?? null);
        echo "
";
        // line 299
        echo ($context["footer"] ?? null);
        echo " 
";
    }

    public function getTemplateName()
    {
        return "freshgo/template/product/category.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  890 => 299,  886 => 298,  881 => 296,  878 => 295,  870 => 292,  864 => 290,  861 => 289,  855 => 286,  851 => 285,  847 => 283,  830 => 274,  825 => 272,  820 => 271,  815 => 269,  809 => 267,  807 => 266,  797 => 261,  789 => 256,  784 => 254,  780 => 253,  774 => 249,  771 => 247,  768 => 246,  761 => 244,  756 => 241,  748 => 239,  741 => 238,  739 => 237,  735 => 236,  717 => 235,  711 => 234,  707 => 232,  701 => 231,  697 => 230,  690 => 229,  687 => 228,  682 => 225,  674 => 222,  667 => 221,  665 => 220,  658 => 219,  654 => 218,  650 => 217,  644 => 216,  638 => 215,  631 => 214,  628 => 213,  623 => 210,  613 => 207,  611 => 206,  609 => 205,  604 => 204,  588 => 203,  579 => 202,  576 => 201,  573 => 200,  570 => 199,  567 => 198,  565 => 197,  561 => 195,  557 => 194,  553 => 193,  549 => 192,  542 => 191,  539 => 190,  535 => 189,  530 => 188,  528 => 187,  525 => 186,  517 => 182,  507 => 174,  500 => 172,  495 => 171,  493 => 170,  489 => 168,  479 => 163,  475 => 161,  467 => 158,  462 => 155,  459 => 154,  455 => 152,  453 => 149,  445 => 147,  439 => 145,  437 => 144,  434 => 143,  432 => 142,  427 => 140,  421 => 139,  414 => 137,  406 => 134,  394 => 127,  390 => 125,  384 => 123,  382 => 122,  379 => 121,  373 => 120,  369 => 118,  363 => 117,  360 => 116,  358 => 115,  351 => 114,  348 => 113,  343 => 112,  341 => 111,  330 => 109,  326 => 107,  322 => 106,  316 => 102,  310 => 101,  302 => 99,  294 => 97,  291 => 96,  287 => 95,  282 => 93,  275 => 88,  269 => 87,  261 => 85,  253 => 83,  250 => 82,  246 => 81,  240 => 78,  231 => 74,  222 => 68,  216 => 65,  211 => 62,  209 => 61,  205 => 59,  202 => 58,  195 => 56,  184 => 54,  180 => 53,  177 => 52,  172 => 51,  168 => 49,  157 => 47,  153 => 46,  150 => 45,  148 => 44,  144 => 43,  139 => 40,  133 => 36,  127 => 34,  125 => 33,  121 => 31,  111 => 29,  109 => 28,  103 => 25,  100 => 24,  98 => 23,  91 => 22,  88 => 21,  85 => 20,  82 => 19,  79 => 18,  76 => 17,  73 => 16,  71 => 15,  67 => 14,  60 => 9,  49 => 7,  45 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "freshgo/template/product/category.twig", "");
    }
}
