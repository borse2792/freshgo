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

/* freshgo/template/product/product.twig */
class __TwigTemplate_330763dc5e70bbcc56210d41869ab0e39aee85d46ba425542d737956c167d7a5 extends \Twig\Template
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
<div id=\"product-product\" class=\"container\">

  <div class=\"row\">";
        // line 13
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 14
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 15
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 16
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 17
            echo "    ";
            $context["class"] = "col-sm-8 col-md-9 col-xs-12";
            // line 18
            echo "    ";
        } else {
            // line 19
            echo "    ";
            $context["class"] = "col-xs-12";
            // line 20
            echo "    ";
        }
        // line 21
        echo "
    <div id=\"content\" class=\"";
        // line 22
        echo ($context["class"] ?? null);
        echo "\">";
        echo ($context["content_top"] ?? null);
        echo "
       <div class=\"productbg\">
      <div class=\"row\">
        ";
        // line 25
        if ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 26
            echo "        ";
            $context["class"] = "col-sm-6 col-lg-5 col-md-6 col-xs-12 proimg sticky";
            // line 27
            echo "        ";
        } else {
            // line 28
            echo "        ";
            $context["class"] = "col-sm-6 col-lg-5 col-md-6 col-xs-12 proimg sticky";
            // line 29
            echo "        ";
        }
        // line 30
        echo "        <div class=\"";
        echo ($context["class"] ?? null);
        echo "\"> 
        ";
        // line 31
        if ((($context["thumb"] ?? null) || ($context["images"] ?? null))) {
            // line 32
            echo "                        <ul class=\"thumbnails\">
                            ";
            // line 33
            if (($context["thumb"] ?? null)) {
                // line 34
                echo "                            <li><a class=\"thumbnail\" href=\"";
                echo ($context["popup"] ?? null);
                echo "\" title=\"";
                echo ($context["heading_title"] ?? null);
                echo "\">
                                    <img data-zoom-image=\"";
                // line 35
                echo ($context["popup"] ?? null);
                echo "\" src=\"";
                echo ($context["thumb"] ?? null);
                echo "\" id=\"zoom_03\" class=\"img-responsive center-block\" alt=\"image\">
                                </a>
                            </li>
                            ";
            }
            // line 39
            echo "                            ";
            if (($context["images"] ?? null)) {
                // line 40
                echo "                            <div class=\"row\">
                            <li id=\"gallery_01\" class=\"owl-carousel\">
                                ";
                // line 42
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["images"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                    // line 43
                    echo "                                <a data-zoom-image=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["image"], "popup", [], "any", false, false, false, 43);
                    echo "\" data-image=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["image"], "popup", [], "any", false, false, false, 43);
                    echo "\"  href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["image"], "popup", [], "any", false, false, false, 43);
                    echo "\" class=\"col-xs-12\">
                                    <img src=\"";
                    // line 44
                    echo twig_get_attribute($this->env, $this->source, $context["image"], "thumb", [], "any", false, false, false, 44);
                    echo "\" class=\"img-responsive center-block\" alt=\"additional image\">
                                </a>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 47
                echo "                            </li>
                            </div>
                            ";
            }
            // line 50
            echo "                        </ul>
          ";
        }
        // line 52
        echo "        </div>
        ";
        // line 53
        if ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 54
            echo "        ";
            $context["class"] = "col-lg-7 col-md-6 col-xs-12 col-sm-6";
            // line 55
            echo "        ";
        } else {
            // line 56
            echo "        ";
            $context["class"] = "col-lg-7 col-md-6 col-xs-12 col-sm-6";
            // line 57
            echo "        ";
        }
        // line 58
        echo "        <div class=\"";
        echo ($context["class"] ?? null);
        echo " pro-content\">
          <h1>";
        // line 59
        echo ($context["heading_title"] ?? null);
        echo "</h1><hr class=\"producthr\">
          ";
        // line 60
        if (($context["review_status"] ?? null)) {
            // line 61
            echo "          <div class=\"rating\">
            <li>";
            // line 62
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 63
                echo "              ";
                if ((($context["rating"] ?? null) < $context["i"])) {
                    echo "<span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i></span>";
                } else {
                    echo "<span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-1x\"></i><i class=\"fa fa-star-o fa-stack-1x\"></i></span>";
                }
                // line 64
                echo "              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo " 
            </li>
            <li class=\"proreview\">
              <a id=\"ratecount\" href=\"\" onclick=\"\$('a[href=\\'#tab-review\\']').trigger('click'); return false;\">";
            // line 67
            echo ($context["reviews"] ?? null);
            echo "</a>
            </li>
            <li>
              <a id=\"ratep\" href=\"#rt\" onclick=\"\$('a[href=\\'#tab-review\\']').trigger('click'); return false;\">";
            // line 70
            echo ($context["text_write"] ?? null);
            echo "</a>
            </li>
          </div>
          ";
        }
        // line 74
        echo "          <hr class=\"producthr\">
          <div class=\"pro_count\">
            <div class=\"row rless\">
              <div class=\"col-lg-6 col-md-12 col-sm-12 col-xs-12 cless product-price\">
               ";
        // line 78
        if (($context["price"] ?? null)) {
            // line 79
            echo "          <ul class=\"list-unstyled\">
          
            ";
            // line 81
            if ( !($context["special"] ?? null)) {
                // line 82
                echo "            <li>
              <h2 data-update='price-";
                // line 83
                echo ($context["product_id"] ?? null);
                echo "' class=\"price\" >";
                echo ($context["price"] ?? null);
                echo "</h2>
            </li>
            ";
            } else {
                // line 86
                echo "            
            <li class=\"text-decor-bold\">
              <h2 data-update='price-";
                // line 88
                echo ($context["product_id"] ?? null);
                echo "' class=\"price-new\">";
                echo ($context["special"] ?? null);
                echo "</h2>
            </li>
            <li style=\"text-decoration: line-through;\" data-update='price-";
                // line 90
                echo ($context["product_id"] ?? null);
                echo "' class=\"price-old\"><span>";
                echo ($context["price"] ?? null);
                echo "</span></li>
            ";
            }
            // line 92
            echo "            <div class=\"protax\">
            ";
            // line 93
            if (($context["tax"] ?? null)) {
                // line 94
                echo "            <li>";
                echo ($context["text_tax"] ?? null);
                echo "</li>
            <li data-update='price-tax-";
                // line 95
                echo ($context["product_id"] ?? null);
                echo "' class=\"price-tax\">";
                echo ($context["tax"] ?? null);
                echo "</li>
            ";
            }
            // line 97
            echo "            </div>
            ";
            // line 98
            if (($context["points"] ?? null)) {
                // line 99
                echo "            <li>";
                echo ($context["text_points"] ?? null);
                echo " ";
                echo ($context["points"] ?? null);
                echo "</li>
            ";
            }
            // line 101
            echo "


            ";
            // line 104
            if (($context["discounts"] ?? null)) {
                // line 105
                echo "            
           
            ";
            }
            // line 108
            echo "          </ul>
          ";
        }
        // line 110
        echo "              </div>
              <div class=\"col-lg-6 col-md-12 col-sm-12 col-xs-12 cless product-timer text-right\">
                ";
        // line 113
        echo "                ";
        if ((($context["special"] ?? null) && (($context["end_date"] ?? null) != 0))) {
            // line 114
            echo "                  <div claas=\"wb_countdown\">
                    <div data-date=\"";
            // line 115
            echo ($context["end_date"] ?? null);
            echo "\" class=\"wb_product_countdown\">
                      <div class=\"product_count wb_countdown_days\">
                        <span class=\"wb_countdown_days_digit\"></span>
                        <p>";
            // line 118
            echo ($context["count_day"] ?? null);
            echo "</p>
                      </div>
                      <div class=\"product_count wb_countdown_hours\">
                        <span class=\"wb_countdown_hours_digit\"></span>
                        <p>";
            // line 122
            echo ($context["count_hour"] ?? null);
            echo "</p>
                      </div>
                      <div class=\"product_count wb_countdown_minutes\">
                        <span class=\"wb_countdown_minutes_digit\"></span>
                        <p>";
            // line 126
            echo ($context["count_min"] ?? null);
            echo "</p>
                      </div>
                      <div class=\"product_count wb_countdown_seconds\">
                        <span class=\"wb_countdown_seconds_digit\"></span>
                        <p>";
            // line 130
            echo ($context["count_sec"] ?? null);
            echo "</p>
                      </div>
                    </div>
                  </div>
                ";
        }
        // line 135
        echo "               
              </div>
            </div>
          </div>
          <hr class=\"producthr\">
           <ul class=\"list-unstyled\">
            <div class=\"row rless\">
              <div class=\"col-md-8 col-sm-8 col-xs-12 cless prod-detail\">
                ";
        // line 143
        if (($context["manufacturer"] ?? null)) {
            // line 144
            echo "                <li><span class=\"text-decor\">";
            echo ($context["text_manufacturer"] ?? null);
            echo "</span><a href=\"";
            echo ($context["manufacturers"] ?? null);
            echo "\" class=\"textdeb\">";
            echo ($context["manufacturer"] ?? null);
            echo "</a></li>
                ";
        }
        // line 146
        echo "                <li><span class=\"text-decor\">";
        echo ($context["text_model"] ?? null);
        echo "</span> ";
        echo ($context["model"] ?? null);
        echo "</li>
                ";
        // line 147
        if (($context["reward"] ?? null)) {
            // line 148
            echo "                <li><span class=\"text-decor\">";
            echo ($context["text_reward"] ?? null);
            echo "</span> ";
            echo ($context["reward"] ?? null);
            echo "</li>
                ";
        }
        // line 150
        echo "                ";
        // line 151
        echo "                <li class=\"stock_bg\"><span class=\"text-decor\">";
        echo ($context["text_stock"] ?? null);
        echo "</span>  
                  ";
        // line 152
        if ((($context["stock"] ?? null) == "In Stock")) {
            // line 153
            echo "                    <span class=\"bg-success\">
                  ";
        } elseif ((        // line 154
($context["stock"] ?? null) == "Pre-Order")) {
            // line 155
            echo "                    <span class=\"bg-danger\">
                  ";
        } elseif ((        // line 156
($context["stock"] ?? null) == "2-3 Days")) {
            // line 157
            echo "                    <span class=\"bg-warning\">
                  ";
        } else {
            // line 159
            echo "                    <span class=\"bg-red\">
                  ";
        }
        // line 160
        echo ($context["stock"] ?? null);
        echo "
                    </span>
                </li>
                <li><span class=\"text-decor\">";
        // line 163
        echo ($context["text_stock_count"] ?? null);
        echo "</span> ";
        echo ($context["quantity"] ?? null);
        echo "</li>
              </div>
              ";
        // line 166
        echo "              <div class=\"col-md-4 col-sm-4 col-xs-12 cless prod-image text-right hidden-xs\">
                ";
        // line 167
        if (((($context["manufacturer_logo"] ?? null) && ($context["manufacturer_url"] ?? null)) && ($context["manufacturer_name"] ?? null))) {
            // line 168
            echo "                  <a href=\"";
            echo ($context["manufacturers"] ?? null);
            echo "\"><img src=\"";
            echo ($context["manufacturer_logo"] ?? null);
            echo "\" alt=\"";
            echo ($context["manufacturer_name"] ?? null);
            echo "\" title=\"";
            echo ($context["manufacturer_name"] ?? null);
            echo "\"></a>
                ";
        }
        // line 170
        echo "              </div>
              ";
        // line 172
        echo "            </div>
          </ul> 
         
          <div id=\"product\"><div class=\"webi-main\"> ";
        // line 175
        if (($context["options"] ?? null)) {
            // line 176
            echo "        
            <h3>";
            // line 177
            echo ($context["text_option"] ?? null);
            echo "</h3>
             ";
            // line 178
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["discounts"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["discount"]) {
                // line 179
                echo "            <li class=\"pro-discou\">";
                echo twig_get_attribute($this->env, $this->source, $context["discount"], "quantity", [], "any", false, false, false, 179);
                echo ($context["text_discount"] ?? null);
                echo twig_get_attribute($this->env, $this->source, $context["discount"], "price", [], "any", false, false, false, 179);
                echo "</li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['discount'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 181
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 182
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 182) == "select")) {
                    // line 183
                    echo "            <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 183)) {
                        echo " required ";
                    }
                    echo "\">
              <label class=\"control-label\" for=\"input-option";
                    // line 184
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 184);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 184);
                    echo "</label>
              <select name=\"option[";
                    // line 185
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 185);
                    echo "]\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 185);
                    echo "\" class=\"webi-option-select form-control\">
                <option value=\"\">";
                    // line 186
                    echo ($context["text_select"] ?? null);
                    echo "</option>
                ";
                    // line 187
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 187));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 188
                        echo "                <option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 188);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 188);
                        echo "
                ";
                        // line 189
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 189)) {
                            // line 190
                            echo "                (";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 190);
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 190);
                            echo ")
                ";
                        }
                        // line 191
                        echo " </option>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 193
                    echo "              </select>
            </div>
            ";
                }
                // line 196
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 196) == "radio")) {
                    // line 197
                    echo "            <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 197)) {
                        echo " required ";
                    }
                    echo "\">
              <label class=\"control-label text-decorop\">";
                    // line 198
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 198);
                    echo "</label>
              <div id=\"input-option";
                    // line 199
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 199);
                    echo "\" class=\"custom-radio\"> ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 199));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 200
                        echo "                <div class=\"radio\">
                  <label class=\"color-option\">
                    <input class=\"webi-option-click\" type=\"radio\" name=\"option[";
                        // line 202
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 202);
                        echo "]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 202);
                        echo "\" />
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
                        echo "                  
                    <span>";
                        // line 204
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 204);
                        echo "<span>
                    ";
                        // line 205
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 205)) {
                            // line 206
                            echo "                    (";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 206);
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 206);
                            echo ")
                    ";
                        }
                        // line 207
                        echo " </label>
                </div>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 209
                    echo " </div>
            </div>
            ";
                }
                // line 212
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 212) == "checkbox")) {
                    // line 213
                    echo "            <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 213)) {
                        echo " required ";
                    }
                    echo " checkbox_input\">
              <label class=\"control-label text-decorop\">";
                    // line 214
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 214);
                    echo "</label>
              <div id=\"input-option";
                    // line 215
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 215);
                    echo "\"> ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 215));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 216
                        echo "                <div class=\"checkbox\">
                  <label class=\"size-option\">
                    <input class=\"webi-option-click\" type=\"checkbox\"  name=\"option[";
                        // line 218
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 218);
                        echo "][]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 218);
                        echo "\" />
                    ";
                        // line 219
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 219)) {
                            echo " <img src=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 219);
                            echo "\" alt=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 219);
                            echo " ";
                            if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 219)) {
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 219);
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 219);
                                echo " ";
                            }
                            echo "\" class=\"img-thumbnail\" /> ";
                        }
                        // line 220
                        echo "                    <span>";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 220);
                        echo "</span>
                    ";
                        // line 221
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 221)) {
                            // line 222
                            echo "                    ";
                            // line 223
                            echo "                    ";
                        }
                        echo " </label>
                </div>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 225
                    echo " </div>
            </div>
            ";
                }
                // line 228
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 228) == "text")) {
                    // line 229
                    echo "            <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 229)) {
                        echo " required ";
                    }
                    echo "\">
              <label class=\"control-label text-decorop\" for=\"input-option";
                    // line 230
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 230);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 230);
                    echo "</label>
              <input type=\"text\" name=\"option[";
                    // line 231
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 231);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 231);
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 231);
                    echo "\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 231);
                    echo "\" class=\"form-control\" />
            </div>
            ";
                }
                // line 234
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 234) == "textarea")) {
                    // line 235
                    echo "            <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 235)) {
                        echo " required ";
                    }
                    echo "\">
              <label class=\"control-label\" for=\"input-option";
                    // line 236
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 236);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 236);
                    echo "</label>
              <textarea name=\"option[";
                    // line 237
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 237);
                    echo "]\" rows=\"5\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 237);
                    echo "\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 237);
                    echo "\" class=\"form-control\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 237);
                    echo "</textarea>
            </div>
            ";
                }
                // line 240
                echo "           
            ";
                // line 241
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 241) == "date")) {
                    // line 242
                    echo "            <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 242)) {
                        echo " required ";
                    }
                    echo "\">
              <label class=\"control-label\" for=\"input-option";
                    // line 243
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 243);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 243);
                    echo "</label>
              <div class=\"input-group date\">
                <input type=\"text\" name=\"option[";
                    // line 245
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 245);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 245);
                    echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 245);
                    echo "\" class=\"form-control\" />
                <span class=\"input-group-btn\">
                <button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
            </div>
            ";
                }
                // line 251
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 251) == "datetime")) {
                    // line 252
                    echo "            <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 252)) {
                        echo " required ";
                    }
                    echo "\">
              <label class=\"control-label\" for=\"input-option";
                    // line 253
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 253);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 253);
                    echo "</label>
              <div class=\"input-group datetime\">
                <input type=\"text\" name=\"option[";
                    // line 255
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 255);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 255);
                    echo "\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 255);
                    echo "\" class=\"form-control\" />
                <span class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
            </div>
            ";
                }
                // line 261
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 261) == "time")) {
                    // line 262
                    echo "            <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 262)) {
                        echo " required ";
                    }
                    echo "\">
              <label class=\"control-label\" for=\"input-option";
                    // line 263
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 263);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 263);
                    echo "</label>
              <div class=\"input-group time\">
                <input type=\"text\" name=\"option[";
                    // line 265
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 265);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 265);
                    echo "\" data-date-format=\"HH:mm\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 265);
                    echo "\" class=\"form-control\" />
                <span class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
            </div>
            ";
                }
                // line 271
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 272
            echo "            ";
        }
        // line 273
        echo "            ";
        if (($context["recurrings"] ?? null)) {
            // line 274
            echo "            <hr>
            <h3>";
            // line 275
            echo ($context["text_payment_recurring"] ?? null);
            echo "</h3>
            <div class=\"form-group required\">
              <select name=\"recurring_id\" class=\"form-control\">
                <option value=\"\">";
            // line 278
            echo ($context["text_select"] ?? null);
            echo "</option>
                ";
            // line 279
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["recurrings"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["recurring"]) {
                // line 280
                echo "                <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["recurring"], "recurring_id", [], "any", false, false, false, 280);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["recurring"], "name", [], "any", false, false, false, 280);
                echo "</option>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recurring'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 282
            echo "              </select>
              <div class=\"help-block\" id=\"recurring-description\"></div>
            </div>
            ";
        }
        // line 286
        echo "             <div class=\"form-group pro-qty\">
              <div class=\"row\">
                ";
        // line 291
        echo "                <div class=\"col-lg-5 col-md-12 col-sm-12 col-xs-12 op-box qty-plus-minus\">
                  <button type=\"button\" class=\"form-control pull-left btn-number btnminus\" disabled=\"disabled\" data-type=\"minus\" data-field=\"quantity\">
                    <span class=\"glyphicon glyphicon-minus\"></span>
                  </button>
                  <input id=\"input-quantity\" type=\"text\" name=\"quantity\" value=\"";
        // line 295
        echo ($context["minimum"] ?? null);
        echo "\" size=\"2\" id=\"input-quantity\" class=\"form-control input-number pull-left\" />
                  <input type=\"hidden\" name=\"product_id\" value=\"";
        // line 296
        echo ($context["product_id"] ?? null);
        echo "\" />
                  <button type=\"button\" class=\"form-control pull-left btn-number btnplus\" data-type=\"plus\" data-field=\"quantity\">
                    <span class=\"glyphicon glyphicon-plus\"></span>
                  </button>
                </div>
                <div class=\"col-lg-7 col-md-12 col-sm-12 col-xs-12 product-btn text-right\">
                  <button type=\"button\" id=\"button-cart\" data-loading-text=\"";
        // line 302
        echo ($context["text_loading"] ?? null);
        echo "\" class=\"btn pcrt add-to-cart btn-primary\">";
        echo ($context["button_cart"] ?? null);
        echo "</button>
                  <button type=\"button\" class=\"btn pcrt btn-primary\" onclick=\"wishlist.add('";
        // line 303
        echo ($context["product_id"] ?? null);
        echo "');\"><svg width=\"18px\" height=\"17px\"><use xlink:href=\"#heart\" /></svg>";
        echo "</button>
                  <button type=\"button\" class=\"btn pcrt  btn-primary\" onclick=\"compare.add('";
        // line 304
        echo ($context["product_id"] ?? null);
        echo "');\" ><svg width=\"18px\" height=\"17px\"><use xlink:href=\"#compare\"/></svg>";
        echo "</button>
                </div>
              </div>
            </div>
            ";
        // line 308
        if ((($context["minimum"] ?? null) > 1)) {
            // line 309
            echo "            <div class=\"alert alert-info\"><i class=\"fa fa-info-circle\"></i> ";
            echo ($context["text_minimum"] ?? null);
            echo "</div>
            ";
        }
        // line 310
        echo "</div></div>
          </div>
      </div>
<div class=\"product-tab\">
      <ul class=\"nav nav-tabs\">
            <li class=\"active\"><a href=\"#tab-description\" data-toggle=\"tab\">";
        // line 315
        echo ($context["tab_description"] ?? null);
        echo "</a></li>
            ";
        // line 316
        if (($context["attribute_groups"] ?? null)) {
            // line 317
            echo "            <li><a href=\"#tab-specification\" data-toggle=\"tab\">";
            echo ($context["tab_attribute"] ?? null);
            echo "</a></li>
            ";
        }
        // line 319
        echo "            ";
        if (($context["review_status"] ?? null)) {
            // line 320
            echo "            <li><a href=\"#tab-review\" data-toggle=\"tab\">";
            echo ($context["tab_review"] ?? null);
            echo "</a></li>
            ";
        }
        // line 322
        echo "          </ul>
          <div class=\"tab-content\">
            <div class=\"tab-pane active\" id=\"tab-description\">";
        // line 324
        echo ($context["description"] ?? null);
        echo "</div>
            ";
        // line 325
        if (($context["attribute_groups"] ?? null)) {
            // line 326
            echo "            <div class=\"tab-pane\" id=\"tab-specification\">
              <table class=\"table table-bordered\">
                ";
            // line 328
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["attribute_groups"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["attribute_group"]) {
                // line 329
                echo "                <thead>
                  <tr>
                    <td colspan=\"2\"><strong>";
                // line 331
                echo twig_get_attribute($this->env, $this->source, $context["attribute_group"], "name", [], "any", false, false, false, 331);
                echo "</strong></td>
                  </tr>
                </thead>
                <tbody>
                ";
                // line 335
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["attribute_group"], "attribute", [], "any", false, false, false, 335));
                foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
                    // line 336
                    echo "                <tr>
                  <td>";
                    // line 337
                    echo twig_get_attribute($this->env, $this->source, $context["attribute"], "name", [], "any", false, false, false, 337);
                    echo "</td>
                  <td>";
                    // line 338
                    echo twig_get_attribute($this->env, $this->source, $context["attribute"], "text", [], "any", false, false, false, 338);
                    echo "</td>
                </tr>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 341
                echo "                  </tbody>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 343
            echo "              </table>
            </div>
            ";
        }
        // line 346
        echo "            ";
        if (($context["review_status"] ?? null)) {
            // line 347
            echo "            <div class=\"tab-pane\" id=\"tab-review\">
              <form class=\"\" id=\"form-review\">
                <div id=\"review\"></div>
                <h2 class=\"co-heading\">";
            // line 350
            echo ($context["text_write"] ?? null);
            echo "</h2>
                ";
            // line 351
            if (($context["review_guest"] ?? null)) {
                // line 352
                echo "                <div class=\"form-group required row\">
                  <div class=\"col-sm-12\">
                    <label class=\"control-label\" for=\"input-name\">";
                // line 354
                echo ($context["entry_name"] ?? null);
                echo "</label>
                    <input type=\"text\" name=\"name\" value=\"";
                // line 355
                echo ($context["customer_name"] ?? null);
                echo "\" id=\"input-name\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group required row\">
                  <div class=\"col-sm-12\">
                    <label class=\"control-label\" for=\"input-review\">";
                // line 360
                echo ($context["entry_review"] ?? null);
                echo "</label>
                    <textarea name=\"text\" rows=\"5\" id=\"input-review\" class=\"form-control\"></textarea>
                    <!-- <div class=\"help-block\">";
                // line 362
                echo ($context["text_note"] ?? null);
                echo "</div> -->
                  </div>
                </div>
                <div class=\"form-group required\">

                  <div class=\"radi\">
                                          <label class=\"control-label\" for=\"input-review\">";
                // line 368
                echo ($context["entry_rating"] ?? null);
                echo "</label>
                  <div class=\"form-rating\">

                      <div class=\"form-rating-container pull-left\">
                        <input id=\"rating-5\" type=\"radio\" name=\"rating\" value=\"5\" />
                        <label class=\"fa fa-stack pull-right\" for=\"rating-5\">
                          <i class=\"fa fa-star fa-stack-1x\"></i>
                          <i class=\"fa fa-star-o fa-stack-1x\"></i>
                        </label>
                        <input id=\"rating-4\" type=\"radio\" name=\"rating\" value=\"4\" />
                        <label class=\"fa fa-stack pull-right\" for=\"rating-4\">
                          <i class=\"fa fa-star fa-stack-1x\"></i>
                          <i class=\"fa fa-star-o fa-stack-1x\"></i>
                        </label>
                        <input id=\"rating-3\" type=\"radio\" name=\"rating\" value=\"3\" />
                        <label class=\"fa fa-stack pull-right\" for=\"rating-3\">
                          <i class=\"fa fa-star fa-stack-1x\"></i>
                          <i class=\"fa fa-star-o fa-stack-1x\"></i>
                        </label>
                        <input id=\"rating-2\" type=\"radio\" name=\"rating\" value=\"2\" />
                        <label class=\"fa fa-stack pull-right\" for=\"rating-2\">
                          <i class=\"fa fa-star fa-stack-1x\"></i>
                          <i class=\"fa fa-star-o fa-stack-1x\"></i>
                        </label>
                        <input id=\"rating-1\" type=\"radio\" name=\"rating\" value=\"1\" />
                        <label class=\"fa fa-stack pull-right\" for=\"rating-1\">
                          <i class=\"fa fa-star fa-stack-1x\"></i>
                          <i class=\"fa fa-star-o fa-stack-1x\"></i>
                        </label>
                      </div>
                    </div></div>
                </div>

                ";
                // line 401
                echo ($context["captcha"] ?? null);
                echo "
                <div class=\"buttons clearfix\">
                  <div class=\"pull-right\">
                    <button type=\"button\" id=\"button-review\" data-loading-text=\"";
                // line 404
                echo ($context["text_loading"] ?? null);
                echo "\" class=\"btn btn-primary\">";
                echo ($context["button_continue"] ?? null);
                echo "</button>
                  </div>
                </div>
                ";
            } else {
                // line 408
                echo "                ";
                echo ($context["text_login"] ?? null);
                echo "
                ";
            }
            // line 410
            echo "              </form>
            </div>
            ";
        }
        // line 412
        echo "</div>
            </div>
<!-- relatedproduct -->
      ";
        // line 415
        if (($context["products"] ?? null)) {
            // line 416
            echo "      <div class=\"relpro\">
      <h1 class=\"heading text-center\"><span>";
            // line 417
            echo ($context["text_related"] ?? null);
            echo "</span></h1>
      <div class=\"row xspspace rless\">
        <div id=\"related\" class=\"owl-carousel owl-theme\">
       ";
            // line 420
            $context["i"] = 0;
            // line 421
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 422
                echo "        ";
                if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
                    // line 423
                    echo "        ";
                    $context["class"] = "col-xs-8 col-sm-6";
                    // line 424
                    echo "        ";
                } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
                    // line 425
                    echo "        ";
                    $context["class"] = "col-xs-12";
                    // line 426
                    echo "        ";
                } else {
                    // line 427
                    echo "        ";
                    $context["class"] = "col-xs-12 col-sm-12";
                    // line 428
                    echo "        ";
                }
                // line 429
                echo "        <div class=\"";
                echo ($context["class"] ?? null);
                echo " product-layout col-xs-12 cless\">
         <div class=\"product-thumb transition\">
      <div class=\"image\"><a href=\"";
                // line 431
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 431);
                echo "\"><img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 431);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 431);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 431);
                echo "\" class=\"img-responsive center-block\" /></a>

      ";
                // line 433
                if (twig_get_attribute($this->env, $this->source, $context["product"], "is_new", [], "any", false, false, false, 433)) {
                    echo "<span class=\"new\">";
                    echo ($context["pro_new"] ?? null);
                    echo "</span>";
                }
                // line 434
                echo "
          ";
                // line 435
                if (twig_get_attribute($this->env, $this->source, $context["product"], "tag_per", [], "any", false, false, false, 435)) {
                    // line 436
                    echo "        <span class=\"sale\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "tag_per", [], "any", false, false, false, 436);
                    echo "%</span>
        ";
                }
                // line 438
                echo "
        <div class=\"btn-quickview\">
        <button type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 440
                echo ($context["button_wishlist"] ?? null);
                echo "\" onclick=\"wishlist.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 440);
                echo "');\"><svg><use xlink:href=\"#heart\" /></svg></button>
      </div>

      </div>
     <div class=\"caption text-left\">
      <div class=\"bran\">
                <span>";
                // line 446
                echo ($context["Brand_title"] ?? null);
                echo " ";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "manufacturer", [], "any", false, false, false, 446);
                echo "</span>
        </div>
        <div class=\"model\">
                <span>";
                // line 449
                echo ($context["model_title"] ?? null);
                echo " ";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "model", [], "any", false, false, false, 449);
                echo "</span>
        </div>
         <h4 class=\"protitle\"><a href=\"";
                // line 451
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 451);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 451);
                echo "</a></h4>
        <div class=\"opbtn\">
        ";
                // line 454
                echo "        ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 454)) {
                    // line 455
                    echo "          ";
                    // line 456
                    echo "           ";
                    // line 461
                    echo "          ";
                    // line 462
                    echo "          <p class=\"price\">
            ";
                    // line 463
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 463)) {
                        // line 464
                        echo "            <span data-update='price-";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 464);
                        echo "' class=\"price\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 464);
                        echo "</span>
            ";
                    } else {
                        // line 466
                        echo "            <span data-update='price-new-";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 466);
                        echo "' class=\"price-new\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 466);
                        echo "</span> <span data-update='price-";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 466);
                        echo "' class=\"price-old\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 466);
                        echo "</span>
            ";
                    }
                    // line 468
                    echo "           
          </p>
        ";
                    // line 471
                    echo "        ";
                }
                // line 472
                echo "          ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 472)) {
                    // line 473
                    echo "        
          <div class=\"rating comments_note wb-list-product-reviews\">
          
          <span class=\"rate-tot\">";
                    // line 476
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 476);
                    echo " <i class=\"fa fa-star emstar\"></i></span>(";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "tab_review", [], "any", false, false, false, 476);
                    echo ")
       
        </div>";
                } else {
                    // line 479
                    echo "          <div class=\"rating comments_note wb-list-product-reviews\">
       
            <span class=\"rate-tot\">";
                    // line 481
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 481);
                    echo " <i class=\"fa fa-star emstar\"></i></span>(";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "tab_review", [], "any", false, false, false, 481);
                    echo ")
           
       
        </div>
        ";
                }
                // line 486
                echo "        </div>
       
        <div class=\"protax\">
          ";
                // line 489
                if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 489)) {
                    // line 490
                    echo "            <span class=\"price-tax\">";
                    echo ($context["text_tax"] ?? null);
                    echo "</span>
            <span data-update='price-tax-";
                    // line 491
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 491);
                    echo "' class=\"price-tax\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 491);
                    echo "</span>
            ";
                }
                // line 493
                echo "            </div>
      <div class=\"button-group\">
          
          <button type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 496
                echo ($context["button_compare"] ?? null);
                echo "\" onclick=\"compare.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 496);
                echo "');\"><svg><use xlink:href=\"#compare\"/></svg></button>
          <div data-toggle=\"tooltip\" title=\"Quickview\"  class=\"bquickv\"></div>
      </div>
      ";
                // line 500
                echo "       <div class=\"webi-main\">
        ";
                // line 501
                if (twig_get_attribute($this->env, $this->source, $context["product"], "options", [], "any", false, false, false, 501)) {
                    // line 502
                    echo "          <input type=\"hidden\" name=\"product_id\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 502);
                    echo "\"/>
          ";
                    // line 503
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "options", [], "any", false, false, false, 503));
                    foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                        // line 504
                        echo "            ";
                        if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 504) == "checkbox")) {
                            // line 505
                            echo "            <div class=\"form-group";
                            if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 505)) {
                                echo " required ";
                            }
                            echo " checkbox_input\">
              <label class=\"control-label\">";
                            // line 506
                            echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 506);
                            echo "</label>
              <div id=\"input-option";
                            // line 507
                            echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 507);
                            echo "\"> 
                ";
                            // line 508
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 508));
                            foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                                // line 509
                                echo "                <div class=\"checkbox\">
                  <label class=\"size-option\">
                    ";
                                // line 511
                                if (twig_get_attribute($this->env, $this->source, $context["option_value"], "raw_price", [], "any", false, false, false, 511)) {
                                    // line 512
                                    echo "                      ";
                                    $context["raw_price"] = twig_get_attribute($this->env, $this->source, $context["option_value"], "raw_price", [], "any", false, false, false, 512);
                                    // line 513
                                    echo "                    ";
                                } else {
                                    // line 514
                                    echo "                      ";
                                    $context["raw_price"] = 0;
                                    // line 515
                                    echo "                    ";
                                }
                                // line 516
                                echo "                    <input class=\"webi-option-click\" type=\"checkbox\" name=\"option[";
                                echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 516);
                                echo "][]\" value=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 516);
                                echo "\" data-rawPrice=";
                                echo ($context["raw_price"] ?? null);
                                echo " />
                    ";
                                // line 517
                                if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 517)) {
                                    echo " <img src=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 517);
                                    echo "\" alt=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 517);
                                    echo " ";
                                    if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 517)) {
                                        echo " ";
                                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 517);
                                        echo " ";
                                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 517);
                                        echo " ";
                                    }
                                    echo "\" class=\"img-thumbnail\" /> ";
                                }
                                // line 518
                                echo "                     <span>";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 518);
                                echo "</span>
                    ";
                                // line 519
                                if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 519)) {
                                    // line 520
                                    echo "                    ";
                                    // line 521
                                    echo "                    ";
                                }
                                echo " </label>
                </div>
                ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 524
                            echo "              </div>
            </div>
            ";
                        }
                        // line 527
                        echo "            ";
                        if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 527) == "select")) {
                            // line 528
                            echo "            <div class=\"form-group";
                            if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 528)) {
                                echo " required ";
                            }
                            echo "\">
              <label class=\"control-label\" for=\"input-option";
                            // line 529
                            echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 529);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 529);
                            echo "</label>
              <select name=\"option[";
                            // line 530
                            echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 530);
                            echo "]\" id=\"input-option";
                            echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 530);
                            echo "\" class=\"webi-option-select form-control\">
                <option value=\"\">";
                            // line 531
                            echo ($context["text_select"] ?? null);
                            echo "</option>
                ";
                            // line 532
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 532));
                            foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                                // line 533
                                echo "                  <option value=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 533);
                                echo "\">";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 533);
                                echo "
                    ";
                                // line 534
                                if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 534)) {
                                    // line 535
                                    echo "                      (";
                                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 535);
                                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 535);
                                    echo ")
                    ";
                                }
                                // line 536
                                echo " 
                  </option>
                ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 539
                            echo "              </select>
            </div>
            ";
                        }
                        // line 542
                        echo "            ";
                        if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 542) == "radio")) {
                            // line 543
                            echo "            <div class=\"form-group";
                            if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 543)) {
                                echo " required ";
                            }
                            echo "\">
              <label class=\"control-label\">";
                            // line 544
                            echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 544);
                            echo "</label>
              <div id=\"input-option";
                            // line 545
                            echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 545);
                            echo "\" class=\"custom-radio\"> ";
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 545));
                            foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                                // line 546
                                echo "                <div class=\"radio\">
                  <label class=\"color-option\">
                    <input class=\"webi-option-click\" type=\"radio\" name=\"option[";
                                // line 548
                                echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 548);
                                echo "]\" value=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 548);
                                echo "\" />
                    ";
                                // line 549
                                if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 549)) {
                                    echo " <img src=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 549);
                                    echo "\" alt=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 549);
                                    echo " ";
                                    if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 549)) {
                                        echo " ";
                                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 549);
                                        echo " ";
                                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 549);
                                        echo " ";
                                    }
                                    echo "\" class=\"img-thumbnail\" /> ";
                                }
                                echo "                  
                    <span>";
                                // line 550
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 550);
                                echo "<span>
                    ";
                                // line 551
                                if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 551)) {
                                    // line 552
                                    echo "                    (";
                                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 552);
                                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 552);
                                    echo ")
                    ";
                                }
                                // line 553
                                echo " </label>
                </div>
                ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 555
                            echo " </div>
            </div>
            ";
                        }
                        // line 558
                        echo "           
          ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 560
                    echo "        ";
                }
                // line 561
                echo "      </div>
      ";
                // line 563
                echo "      <div class=\"form-group homeaddq\">
          <div class=\"homeqt\">
            <span class=\"qty\">";
                // line 565
                echo ($context["Qty"] ?? null);
                echo "</span>
             <input class=\"addhqty\" type=\"text\" value=\"1\" size=\"2\" min=\"1\" max=\"999\" id=\"input-quantity-";
                // line 566
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 566);
                echo "\" class=\"form-control input-number pull-left\" />
             <div class=\"homeqtinner\">
              <button type=\"button\" onclick=\"qty.plus('";
                // line 568
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 568);
                echo "')\" class=\"form-control btn-number btnplus\">
           
              <i class=\"fa fa-angle-up\"></i>
            </button>
           
             <button type=\"button\" onclick=\"qty.minus('";
                // line 573
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 573);
                echo "')\" class=\"form-control  btn-number btnminus dis-";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 573);
                echo "\" disabled=\"disabled\">
             <i class=\"fa fa-angle-down\"></i>
            </button>
            </div>
          </div>
          ";
                // line 578
                if (twig_get_attribute($this->env, $this->source, $context["product"], "options", [], "any", false, false, false, 578)) {
                    // line 579
                    echo "          <input type=\"hidden\" name=\"product_id\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 579);
                    echo "\"/>
          <button type=\"button\" class=\"webi-cart\" ><svg><use xlink:href=\"#hcart\"></use></svg>
          <span class=\"hidden-xs hidden-sm hidden-md\">";
                    // line 581
                    echo ($context["button_cart"] ?? null);
                    echo "</span></button>
        ";
                } else {
                    // line 583
                    echo "          <button type=\"button\" class=\"webi-cart\" onclick=\"cart.add('";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 583);
                    echo "');\"><svg><use xlink:href=\"#hcart\"></use></svg>
           <span class=\"hidden-xs hidden-sm hidden-md\">";
                    // line 584
                    echo ($context["button_cart"] ?? null);
                    echo "</span></button>
        ";
                }
                // line 586
                echo "          <input type=\"hidden\" name=\"hid-qty-msg\" value=\"";
                echo ($context["atleast_cart"] ?? null);
                echo "\">
        </div>
        
      </div>

    </div>
        </div>
        <!-- ";
                // line 593
                if (((($context["column_left"] ?? null) && ($context["column_right"] ?? null)) && (((($context["i"] ?? null) + 1) % 2) == 0))) {
                    // line 594
                    echo "        <div class=\"clearfix visible-md visible-sm\"></div>
        ";
                } elseif ((                // line 595
($context["column_left"] ?? null) || (($context["column_right"] ?? null) && (((($context["i"] ?? null) + 1) % 3) == 0)))) {
                    // line 596
                    echo "        <div class=\"clearfix visible-md\"></div>
        ";
                } elseif ((((                // line 597
($context["i"] ?? null) + 1) % 4) == 0)) {
                    // line 598
                    echo "        <div class=\"clearfix visible-md\"></div>
        ";
                }
                // line 599
                echo " -->
        ";
                // line 600
                $context["i"] = (($context["i"] ?? null) + 1);
                // line 601
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 602
            echo "        </div>
      </div>
    </div>
        ";
        }
        // line 606
        echo "        ";
        if (($context["tags"] ?? null)) {
            // line 607
            echo "        <p>";
            echo ($context["text_tags"] ?? null);
            echo "
        ";
            // line 608
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, twig_length_filter($this->env, ($context["tags"] ?? null))));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 609
                echo "        ";
                if (($context["i"] < (twig_length_filter($this->env, ($context["tags"] ?? null)) - 1))) {
                    echo " <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["tags"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[$context["i"]] ?? null) : null), "href", [], "any", false, false, false, 609);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["tags"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[$context["i"]] ?? null) : null), "tag", [], "any", false, false, false, 609);
                    echo "</a>,
        ";
                } else {
                    // line 610
                    echo " <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["tags"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[$context["i"]] ?? null) : null), "href", [], "any", false, false, false, 610);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["tags"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[$context["i"]] ?? null) : null), "tag", [], "any", false, false, false, 610);
                    echo "</a> ";
                }
                // line 611
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo " </p>
        ";
        }
        // line 613
        echo "      </div></div>
    ";
        // line 614
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
<script type=\"text/javascript\"><!--
\$('select[name=\\'recurring_id\\'], input[name=\"quantity\"]').change(function(){
  \$.ajax({
    url: 'index.php?route=product/product/getRecurringDescription',
    type: 'post',
    data: \$('input[name=\\'product_id\\'], input[name=\\'quantity\\'], select[name=\\'recurring_id\\']'),
    dataType: 'json',
    beforeSend: function() {
      \$('#recurring-description').html('');
    },
    success: function(json) {
      \$('.alert-dismissible, .text-danger').remove();

      if (json['success']) {
        \$('#recurring-description').html(json['success']);
      }
    }
  });
});
//--></script>
<script type=\"text/javascript\"><!--
\$('#button-cart').on('click', function() {
  \$.ajax({
    url: 'index.php?route=checkout/cart/add',
    type: 'post',
    data: \$('#product input[type=\\'text\\'], #product input[type=\\'hidden\\'], #product input[type=\\'radio\\']:checked, #product input[type=\\'checkbox\\']:checked, #product select, #product textarea'),
    dataType: 'json',
    beforeSend: function() {
      \$('#button-cart').button('loading');
    },
    complete: function() {
      \$('#button-cart').button('reset');
    },
    success: function(json) {
      \$('.alert-dismissible, .text-danger').remove();
      \$('.form-group').removeClass('has-error');

      if (json['error']) {
        if (json['error']['option']) {
          for (i in json['error']['option']) {
            var element = \$('#input-option' + i.replace('_', '-'));

            if (element.parent().hasClass('input-group')) {
              element.parent().after('<div class=\"text-danger\">' + json['error']['option'][i] + '</div>');
            } else {
              element.after('<div class=\"text-danger\">' + json['error']['option'][i] + '</div>');
            }
          }
        }

        if (json['error']['recurring']) {
          \$('select[name=\\'recurring_id\\']').after('<div class=\"text-danger\">' + json['error']['recurring'] + '</div>');
        }

        // Highlight any found errors
        \$('.text-danger').parent().addClass('has-error');
      }

      if (json['success']) {
        \$('#content').parent().before('<div class=\"a-one\"><div class=\"alert alert-success alert-dismissible alertsuc\"><svg width=\"20px\" height=\"20px\"> <use xlink:href=\"#successi\"></use> </svg> ' + json.success + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div></div>');
          setTimeout(function() {
              \$('#cart > button').html('<svg><use xlink:href=\"#hcart\"></use></svg><span id=\"cart-total\">' + json['total'] + '</span>')
          }, 100);
          \$('.a-one').delay(5000).fadeOut();
          \$('#cart > ul').load('index.php?route=common/cart/info ul li')
          \$(\"button.close\").click(function() {
              \$(\".a-one\").remove();
          })
      }
    },
        error: function(xhr, ajaxOptions, thrownError) {
            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
  });
});
//--></script> 
<script type=\"text/javascript\"><!--
\$('.date').datetimepicker({
  language: '";
        // line 694
        echo ($context["datepicker"] ?? null);
        echo "',
  pickTime: false
});

\$('.datetime').datetimepicker({
  language: '";
        // line 699
        echo ($context["datepicker"] ?? null);
        echo "',
  pickDate: true,
  pickTime: true
});

\$('.time').datetimepicker({
  language: '";
        // line 705
        echo ($context["datepicker"] ?? null);
        echo "',
  pickDate: false
});

\$('button[id^=\\'button-upload\\']').on('click', function() {
  var node = this;

  \$('#form-upload').remove();

  \$('body').prepend('<form enctype=\"multipart/form-data\" id=\"form-upload\" style=\"display: none;\"><input type=\"file\" name=\"file\" /></form>');

  \$('#form-upload input[name=\\'file\\']').trigger('click');

  if (typeof timer != 'undefined') {
      clearInterval(timer);
  }

  timer = setInterval(function() {
    if (\$('#form-upload input[name=\\'file\\']').val() != '') {
      clearInterval(timer);

      \$.ajax({
        url: 'index.php?route=tool/upload',
        type: 'post',
        dataType: 'json',
        data: new FormData(\$('#form-upload')[0]),
        cache: false,
        contentType: false,
        processData: false,
        beforeSend: function() {
          \$(node).button('loading');
        },
        complete: function() {
          \$(node).button('reset');
        },
        success: function(json) {
          \$('.text-danger').remove();

          if (json['error']) {
            \$(node).parent().find('input').after('<div class=\"text-danger\">' + json['error'] + '</div>');
          }

          if (json['success']) {
            alert(json['success']);

            \$(node).parent().find('input').val(json['code']);
          }
        },
        error: function(xhr, ajaxOptions, thrownError) {
          alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
      });
    }
  }, 500);
});
//--></script>
<!--for product quantity plus minus-->
<script type=\"text/javascript\">
    //plugin bootstrap minus and plus
    \$(document).ready(function() {
    \$('.btn-number').click(function(e){
    e.preventDefault();
    var fieldName = \$(this).attr('data-field');
    var type = \$(this).attr('data-type');
    var input = \$(\"input[name='\" + fieldName + \"']\");
    var currentVal = parseInt(input.val());
    if (!isNaN(currentVal)) {
    if (type == 'minus') {
    var minValue = parseInt(input.attr('min'));
    if (!minValue) minValue = 1;
    if (currentVal > minValue) {
    input.val(currentVal - 1).change();
    }
    if (parseInt(input.val()) == minValue) {
    \$(this).attr('disabled', true);
    }

    } else if (type == 'plus') {
    var maxValue = parseInt(input.attr('max'));
    if (!maxValue) maxValue = 999;
    if (currentVal < maxValue) {
    input.val(currentVal + 1).change();
    }
    if (parseInt(input.val()) == maxValue) {
    \$(this).attr('disabled', true);
    }

    }
    } else {
    input.val(0);
    }
    });
    \$('.input-number').focusin(function(){
    \$(this).data('oldValue', \$(this).val());
    });
    \$('.input-number').change(function() {

    var minValue = parseInt(\$(this).attr('min'));
    var maxValue = parseInt(\$(this).attr('max'));
    if (!minValue) minValue = 1;
    if (!maxValue) maxValue = 999;
    var valueCurrent = parseInt(\$(this).val());
    var name = \$(this).attr('name');
    if (valueCurrent >= minValue) {
    \$(\".btn-number[data-type='minus'][data-field='\" + name + \"']\").removeAttr('disabled')
    } else {
    alert('Sorry, the minimum value was reached');
    \$(this).val(\$(this).data('oldValue'));
    }
    if (valueCurrent <= maxValue) {
    \$(\".btn-number[data-type='plus'][data-field='\" + name + \"']\").removeAttr('disabled')
    } else {
    alert('Sorry, the maximum value was reached');
    \$(this).val(\$(this).data('oldValue'));
    }
    });
    \$(\".input-number\").keydown(function (e) {
    // Allow: backspace, delete, tab, escape, enter and .
    if (\$.inArray(e.keyCode, [46, 8, 9, 27, 13, 190]) !== - 1 ||
            // Allow: Ctrl+A
                    (e.keyCode == 65 && e.ctrlKey === true) ||
                    // Allow: home, end, left, right
                            (e.keyCode >= 35 && e.keyCode <= 39)) {
            // let it happen, don't do anything
            return;
            }
            // Ensure that it is a number and stop the keypress
            if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
            e.preventDefault();
            }
            });
    });
</script>

<script type=\"text/javascript\"><!--
\$('#review').delegate('.pagination a', 'click', function(e) {
    e.preventDefault();

    \$('#review').fadeOut('slow');

    \$('#review').load(this.href);

    \$('#review').fadeIn('slow');
});

\$('#review').load('index.php?route=product/product/review&product_id=";
        // line 850
        echo ($context["product_id"] ?? null);
        echo "');

\$('#button-review').on('click', function() {
  \$.ajax({
    url: 'index.php?route=product/product/write&product_id=";
        // line 854
        echo ($context["product_id"] ?? null);
        echo "',
    type: 'post',
    dataType: 'json',
    data: \$(\"#form-review\").serialize(),
    beforeSend: function() {
      \$('#button-review').button('loading');
    },
    complete: function() {
      \$('#button-review').button('reset');
    },
    success: function(json) {
      \$('.alert-dismissible').remove();

      if (json['error']) {
        \$('#review').after('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + '</div>');
      }

      if (json['success']) {
        \$('#review').after('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + '</div>');

        \$('input[name=\\'name\\']').val('');
        \$('textarea[name=\\'text\\']').val('');
        \$('input[name=\\'rating\\']:checked').prop('checked', false);
      }
    }
  });
});

\$(document).ready(function() {
  \$('.thumbnails').magnificPopup({
    type:'image',
    delegate: 'a',
    gallery: {
      enabled: true
    }
  });
});
//--></script>
<!-- related -->
<script type=\"text/javascript\">
    (function(\$){
    \$(\"#related\").owlCarousel({
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
<!-- related over -->
<!-- zoom product start -->
<!-- zoom product start -->
<script>
     if (jQuery(window).width() >= 1200){
        //initiate the plugin and pass the id of the div containing gallery images
            \$(\"#zoom_03\").elevateZoom({gallery:'gallery_01', cursor: 'pointer', galleryActiveClass: 'active', imageCrossfade: true, loadingIcon: ''});
        //pass the images to Fancybox
            \$(\"#zoom_03\").bind(\"click\", function (e) {
            var ez = \$('#zoom_03').data('elevateZoom');
            \$.fancybox(ez.getGalleryList());
            return false;
            });
    }
</script>
<!--ZOOM END-->

<!--slider for product-->
<script type=\"text/javascript\"><!--
\$('#gallery_01').owlCarousel({
  itemsCustom : [
        [0, 2],
        [320, 3],
        [600, 5],
        [768, 4],
        [992, 4],
        [1200, 4],
        [1410, 4]
        ],
   autoPlay: 1000,
  autoPlay: true,
  navigation: false,
  navigationText: ['<i class=\"fa fa-angle-left\" aria-hidden=\"true\"></i>', '<i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i>'],
  pagination: false
});
--></script>
<!--over slider for product-->
<script type=\"text/javascript\"><!--
// Webi Timer
\$( document ).ready(function() {
  \$('.wb_product_countdown').each(function() {

    \$.wbCountDownTimer(\$(this));
  }); 
});
\$.wbCountDownTimer = (function(event) {
  setInterval(function() {
    var countDownDate = new Date(\$(event).data(\"date\")).getTime();
    var now = new Date().getTime();
    var distance = countDownDate - now;
      \$(event).find('.wb_countdown_days .wb_countdown_days_digit').text(Math.floor(distance / (1000 * 60 * 60 * 24)));
      \$(event).find('.wb_countdown_hours .wb_countdown_hours_digit').text(Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)));
      \$(event).find('.wb_countdown_minutes .wb_countdown_minutes_digit').text(Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60)));
      \$(event).find('.wb_countdown_seconds .wb_countdown_seconds_digit').text(Math.floor((distance % (1000 * 60)) / 1000));
    if (distance < 0) {
      clearInterval(x);
      \$(event).text(\"EXPIRED\");
    }
}, 1000);
});
--></script>

";
        // line 973
        echo ($context["content_bottom"] ?? null);
        echo "
";
        // line 974
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "freshgo/template/product/product.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  2141 => 974,  2137 => 973,  2015 => 854,  2008 => 850,  1860 => 705,  1851 => 699,  1843 => 694,  1760 => 614,  1757 => 613,  1748 => 611,  1741 => 610,  1731 => 609,  1727 => 608,  1722 => 607,  1719 => 606,  1713 => 602,  1707 => 601,  1705 => 600,  1702 => 599,  1698 => 598,  1696 => 597,  1693 => 596,  1691 => 595,  1688 => 594,  1686 => 593,  1675 => 586,  1670 => 584,  1665 => 583,  1660 => 581,  1654 => 579,  1652 => 578,  1642 => 573,  1634 => 568,  1629 => 566,  1625 => 565,  1621 => 563,  1618 => 561,  1615 => 560,  1608 => 558,  1603 => 555,  1595 => 553,  1588 => 552,  1586 => 551,  1582 => 550,  1564 => 549,  1558 => 548,  1554 => 546,  1548 => 545,  1544 => 544,  1537 => 543,  1534 => 542,  1529 => 539,  1521 => 536,  1514 => 535,  1512 => 534,  1505 => 533,  1501 => 532,  1497 => 531,  1491 => 530,  1485 => 529,  1478 => 528,  1475 => 527,  1470 => 524,  1460 => 521,  1458 => 520,  1456 => 519,  1451 => 518,  1435 => 517,  1426 => 516,  1423 => 515,  1420 => 514,  1417 => 513,  1414 => 512,  1412 => 511,  1408 => 509,  1404 => 508,  1400 => 507,  1396 => 506,  1389 => 505,  1386 => 504,  1382 => 503,  1377 => 502,  1375 => 501,  1372 => 500,  1364 => 496,  1359 => 493,  1352 => 491,  1347 => 490,  1345 => 489,  1340 => 486,  1330 => 481,  1326 => 479,  1318 => 476,  1313 => 473,  1310 => 472,  1307 => 471,  1303 => 468,  1291 => 466,  1283 => 464,  1281 => 463,  1278 => 462,  1276 => 461,  1274 => 456,  1272 => 455,  1269 => 454,  1262 => 451,  1255 => 449,  1247 => 446,  1236 => 440,  1232 => 438,  1226 => 436,  1224 => 435,  1221 => 434,  1215 => 433,  1204 => 431,  1198 => 429,  1195 => 428,  1192 => 427,  1189 => 426,  1186 => 425,  1183 => 424,  1180 => 423,  1177 => 422,  1172 => 421,  1170 => 420,  1164 => 417,  1161 => 416,  1159 => 415,  1154 => 412,  1149 => 410,  1143 => 408,  1134 => 404,  1128 => 401,  1092 => 368,  1083 => 362,  1078 => 360,  1070 => 355,  1066 => 354,  1062 => 352,  1060 => 351,  1056 => 350,  1051 => 347,  1048 => 346,  1043 => 343,  1036 => 341,  1027 => 338,  1023 => 337,  1020 => 336,  1016 => 335,  1009 => 331,  1005 => 329,  1001 => 328,  997 => 326,  995 => 325,  991 => 324,  987 => 322,  981 => 320,  978 => 319,  972 => 317,  970 => 316,  966 => 315,  959 => 310,  953 => 309,  951 => 308,  943 => 304,  938 => 303,  932 => 302,  923 => 296,  919 => 295,  913 => 291,  909 => 286,  903 => 282,  892 => 280,  888 => 279,  884 => 278,  878 => 275,  875 => 274,  872 => 273,  869 => 272,  863 => 271,  850 => 265,  843 => 263,  836 => 262,  833 => 261,  820 => 255,  813 => 253,  806 => 252,  803 => 251,  790 => 245,  783 => 243,  776 => 242,  774 => 241,  771 => 240,  759 => 237,  753 => 236,  746 => 235,  743 => 234,  731 => 231,  725 => 230,  718 => 229,  715 => 228,  710 => 225,  700 => 223,  698 => 222,  696 => 221,  691 => 220,  675 => 219,  669 => 218,  665 => 216,  659 => 215,  655 => 214,  648 => 213,  645 => 212,  640 => 209,  632 => 207,  625 => 206,  623 => 205,  619 => 204,  601 => 203,  595 => 202,  591 => 200,  585 => 199,  581 => 198,  574 => 197,  571 => 196,  566 => 193,  559 => 191,  552 => 190,  550 => 189,  543 => 188,  539 => 187,  535 => 186,  529 => 185,  523 => 184,  516 => 183,  513 => 182,  508 => 181,  497 => 179,  493 => 178,  489 => 177,  486 => 176,  484 => 175,  479 => 172,  476 => 170,  464 => 168,  462 => 167,  459 => 166,  452 => 163,  446 => 160,  442 => 159,  438 => 157,  436 => 156,  433 => 155,  431 => 154,  428 => 153,  426 => 152,  421 => 151,  419 => 150,  411 => 148,  409 => 147,  402 => 146,  392 => 144,  390 => 143,  380 => 135,  372 => 130,  365 => 126,  358 => 122,  351 => 118,  345 => 115,  342 => 114,  339 => 113,  335 => 110,  331 => 108,  326 => 105,  324 => 104,  319 => 101,  311 => 99,  309 => 98,  306 => 97,  299 => 95,  294 => 94,  292 => 93,  289 => 92,  282 => 90,  275 => 88,  271 => 86,  263 => 83,  260 => 82,  258 => 81,  254 => 79,  252 => 78,  246 => 74,  239 => 70,  233 => 67,  223 => 64,  216 => 63,  212 => 62,  209 => 61,  207 => 60,  203 => 59,  198 => 58,  195 => 57,  192 => 56,  189 => 55,  186 => 54,  184 => 53,  181 => 52,  177 => 50,  172 => 47,  163 => 44,  154 => 43,  150 => 42,  146 => 40,  143 => 39,  134 => 35,  127 => 34,  125 => 33,  122 => 32,  120 => 31,  115 => 30,  112 => 29,  109 => 28,  106 => 27,  103 => 26,  101 => 25,  93 => 22,  90 => 21,  87 => 20,  84 => 19,  81 => 18,  78 => 17,  75 => 16,  72 => 15,  70 => 14,  66 => 13,  59 => 8,  48 => 6,  44 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "freshgo/template/product/product.twig", "");
    }
}
