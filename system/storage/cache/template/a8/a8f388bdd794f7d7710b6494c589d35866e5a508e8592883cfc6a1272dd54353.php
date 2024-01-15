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

/* freshgo/template/extension/module/webinewsletter/default.twig */
class __TwigTemplate_a7286265c36e6e19ffc560104d217f338ab77d0d3ed160d6d6362bb1f18826d5 extends \Twig\Template
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
        echo "<div class=\"newsl webi-newsletter ";
        echo ($context["prefix"] ?? null);
        echo "\" id=\"newsletter_";
        echo ($context["id"] ?? null);
        echo "\" data-mode=\"";
        echo ($context["mode"] ?? null);
        echo "\">
\t\t<form id=\"formNewLestter\" method=\"post\" action=\"";
        // line 2
        echo ($context["action"] ?? null);
        echo "\" class=\"formNewLestter\" ";
        if ( !twig_test_empty(($context["banner"] ?? null))) {
            echo " style=\"background-image: url('";
            echo ($context["banner"] ?? null);
            echo "')\" ";
        }
        echo ">
\t\t\t<div class=\"inner row\">
\t\t\t\t\t
\t\t\t\t<div id=\"newsletter\">
\t\t\t\t\t<div class=\"\"><h5>";
        // line 6
        echo ($context["entry_sign_up_for_newsletter"] ?? null);
        echo "</h5></div>
\t\t\t\t<div class=\"\"><div class=\"input-group\">
\t\t\t\t\t<input type=\"text\" class=\"form-control input-md inputNew\" ";
        // line 8
        if ( !array_key_exists("customer_email", $context)) {
            echo " onblur=\"javascript:if(this.value=='')this.value='";
            echo ($context["default_input_text"] ?? null);
            echo "';\" onfocus=\"javascript:if(this.value=='";
            echo ($context["default_input_text"] ?? null);
            echo "')this.value='';\"";
        }
        echo " value=\"";
        echo ((($context["customer_email"] ?? null)) ? (($context["customer_email"] ?? null)) : (($context["default_input_text"] ?? null)));
        echo "\" size=\"18\" name=\"email\" placeholder=\"Your email address\">
\t\t\t\t
\t\t\t\t\t<div class=\"input-group-btn\"><button type=\"submit\" name=\"submitNewsletter\" class=\"newsbtn btn btn-primary\">";
        // line 10
        echo ($context["button_subscribe"] ?? null);
        echo "</button></div>
\t\t\t\t\t</div>
\t\t\t\t\t<input type=\"hidden\" value=\"1\" name=\"action\">
\t\t\t\t<div class=\"valid\"></div>
\t\t\t\t</div>
\t\t\t\t<div class=\"description-top\">
\t\t\t\t\t\t";
        // line 16
        echo ($context["description"] ?? null);
        echo "
\t\t\t\t</div>
\t\t\t\t 
\t\t\t</div>
\t\t</div>
\t\t</form>
</div>

<script type=\"text/javascript\"><!--
\$(\"#newsletter_";
        // line 25
        echo ($context["id"] ?? null);
        echo "\").webiNewsletter().work(  '";
        echo ($context["valid_email"] ?? null);
        echo "' );
--></script>";
    }

    public function getTemplateName()
    {
        return "freshgo/template/extension/module/webinewsletter/default.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 25,  86 => 16,  77 => 10,  64 => 8,  59 => 6,  46 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "freshgo/template/extension/module/webinewsletter/default.twig", "");
    }
}
