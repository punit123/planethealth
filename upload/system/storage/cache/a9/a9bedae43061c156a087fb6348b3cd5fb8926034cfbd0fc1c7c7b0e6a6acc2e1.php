<?php

/* extension/module/featured.twig */
class __TwigTemplate_9da4305fb7452553adca5433593b56ba8e31f64c40effef8dc3b219a4bf8dc23 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo (isset($context["header"]) ? $context["header"] : null);
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"pull-right\">
        <button type=\"submit\" form=\"form-module\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo (isset($context["button_save"]) ? $context["button_save"] : null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
        <a href=\"";
        // line 7
        echo (isset($context["cancel"]) ? $context["cancel"] : null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo (isset($context["button_cancel"]) ? $context["button_cancel"] : null);
        echo "\" class=\"btn btn-light\"><i class=\"fa fa-reply\"></i></a></div>
      <h1>";
        // line 8
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
      <nav aria-label=\"breadcrumb\">
        <ol class=\"breadcrumb\">
          ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 12
            echo "            <li class=\"breadcrumb-item\"><a href=\"";
            echo $this->getAttribute($context["breadcrumb"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["breadcrumb"], "text", array());
            echo "</a></li>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "        </ol>
      </nav>
    </div>
  </div>
  <div class=\"container-fluid\">
    ";
        // line 19
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            // line 20
            echo "      <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
      </div>
    ";
        }
        // line 24
        echo "    <div class=\"card\">
      <div class=\"card-header\"><i class=\"fa fa-pencil\"></i> ";
        // line 25
        echo (isset($context["text_edit"]) ? $context["text_edit"] : null);
        echo "</div>
      <div class=\"card-body\">
        <form action=\"";
        // line 27
        echo (isset($context["action"]) ? $context["action"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-module\">
          <div class=\"form-group row\">
            <label class=\"col-sm-2 col-form-label\" for=\"input-name\">";
        // line 29
        echo (isset($context["entry_name"]) ? $context["entry_name"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"name\" value=\"";
        // line 31
        echo (isset($context["name"]) ? $context["name"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_name"]) ? $context["entry_name"] : null);
        echo "\" id=\"input-name\" class=\"form-control\"/>
              ";
        // line 32
        if ((isset($context["error_name"]) ? $context["error_name"] : null)) {
            // line 33
            echo "                <div class=\"invalid-tooltip\">";
            echo (isset($context["error_name"]) ? $context["error_name"] : null);
            echo "</div>
              ";
        }
        // line 35
        echo "            </div>
          </div>
          <div class=\"form-group row\">
            <label class=\"col-sm-2 col-form-label\" for=\"input-product\">";
        // line 38
        echo (isset($context["entry_product"]) ? $context["entry_product"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"product_name\" value=\"\" placeholder=\"";
        // line 40
        echo (isset($context["entry_product"]) ? $context["entry_product"] : null);
        echo "\" id=\"input-product\" class=\"form-control\"/>
              <div id=\"featured-product\" class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 43
            echo "                  <div id=\"featured-product";
            echo $this->getAttribute($context["product"], "product_id", array());
            echo "\"><i class=\"fa fa-minus-circle\"></i> ";
            echo $this->getAttribute($context["product"], "name", array());
            echo "
                    <input type=\"hidden\" name=\"product[]\" value=\"";
            // line 44
            echo $this->getAttribute($context["product"], "product_id", array());
            echo "\"/>
                  </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "              </div>
              <small class=\"form-text text-muted\">";
        // line 48
        echo (isset($context["help_product"]) ? $context["help_product"] : null);
        echo "</small>
            </div>
          </div>
          <div class=\"form-group row\">
            <label class=\"col-sm-2 col-form-label\" for=\"input-limit\">";
        // line 52
        echo (isset($context["entry_limit"]) ? $context["entry_limit"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"limit\" value=\"";
        // line 54
        echo (isset($context["limit"]) ? $context["limit"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_limit"]) ? $context["entry_limit"] : null);
        echo "\" id=\"input-limit\" class=\"form-control\"/>
            </div>
          </div>
          <div class=\"form-group row\">
            <label class=\"col-sm-2 col-form-label\" for=\"input-width\">";
        // line 58
        echo (isset($context["entry_width"]) ? $context["entry_width"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"width\" value=\"";
        // line 60
        echo (isset($context["width"]) ? $context["width"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_width"]) ? $context["entry_width"] : null);
        echo "\" id=\"input-width\" class=\"form-control\"/>
              ";
        // line 61
        if ((isset($context["error_width"]) ? $context["error_width"] : null)) {
            // line 62
            echo "                <div class=\"invalid-tooltip\">";
            echo (isset($context["error_width"]) ? $context["error_width"] : null);
            echo "</div>
              ";
        }
        // line 64
        echo "            </div>
          </div>
          <div class=\"form-group row\">
            <label class=\"col-sm-2 col-form-label\" for=\"input-height\">";
        // line 67
        echo (isset($context["entry_height"]) ? $context["entry_height"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"height\" value=\"";
        // line 69
        echo (isset($context["height"]) ? $context["height"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_height"]) ? $context["entry_height"] : null);
        echo "\" id=\"input-height\" class=\"form-control\"/>
              ";
        // line 70
        if ((isset($context["error_height"]) ? $context["error_height"] : null)) {
            // line 71
            echo "                <div class=\"invalid-tooltip\">";
            echo (isset($context["error_height"]) ? $context["error_height"] : null);
            echo "</div>
              ";
        }
        // line 73
        echo "            </div>
          </div>
          <div class=\"form-group row\">
            <label class=\"col-sm-2 col-form-label\" for=\"input-status\">";
        // line 76
        echo (isset($context["entry_status"]) ? $context["entry_status"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"status\" id=\"input-status\" class=\"form-control\">
                ";
        // line 79
        if ((isset($context["status"]) ? $context["status"] : null)) {
            // line 80
            echo "                  <option value=\"1\" selected=\"selected\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                  <option value=\"0\">";
            // line 81
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                ";
        } else {
            // line 83
            echo "                  <option value=\"1\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                  <option value=\"0\" selected=\"selected\">";
            // line 84
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                ";
        }
        // line 86
        echo "              </select>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <script type=\"text/javascript\"><!--
  \$('input[name=\\'product_name\\']').autocomplete({
\t  source: function(request, response) {
\t\t  \$.ajax({
\t\t\t  url: 'index.php?route=catalog/product/autocomplete&user_token=";
        // line 97
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&filter_name=' + encodeURIComponent(request),
\t\t\t  dataType: 'json',
\t\t\t  success: function(json) {
\t\t\t\t  response(\$.map(json, function(item) {
\t\t\t\t\t  return {
\t\t\t\t\t\t  label: item['name'],
\t\t\t\t\t\t  value: item['product_id']
\t\t\t\t\t  }
\t\t\t\t  }));
\t\t\t  }
\t\t  });
\t  },
\t  select: function(item) {
\t\t  \$('input[name=\\'product_name\\']').val('');

\t\t  \$('#featured-product' + item['value']).remove();

\t\t  \$('#featured-product').append('<div id=\"featured-product' + item['value'] + '\"><i class=\"fa fa-minus-circle\"></i> ' + item['label'] + '<input type=\"hidden\" name=\"product[]\" value=\"' + item['value'] + '\" /></div>');
\t  }
  });

  \$('#featured-product').delegate('.fa-minus-circle', 'click', function() {
\t  \$(this).parent().remove();
  });
  //--></script>
</div>
";
        // line 123
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "extension/module/featured.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  285 => 123,  256 => 97,  243 => 86,  238 => 84,  233 => 83,  228 => 81,  223 => 80,  221 => 79,  215 => 76,  210 => 73,  204 => 71,  202 => 70,  196 => 69,  191 => 67,  186 => 64,  180 => 62,  178 => 61,  172 => 60,  167 => 58,  158 => 54,  153 => 52,  146 => 48,  143 => 47,  134 => 44,  127 => 43,  123 => 42,  118 => 40,  113 => 38,  108 => 35,  102 => 33,  100 => 32,  94 => 31,  89 => 29,  84 => 27,  79 => 25,  76 => 24,  68 => 20,  66 => 19,  59 => 14,  48 => 12,  44 => 11,  38 => 8,  32 => 7,  28 => 6,  19 => 1,);
    }
}
/* {{ header }}{{ column_left }}*/
/* <div id="content">*/
/*   <div class="page-header">*/
/*     <div class="container-fluid">*/
/*       <div class="pull-right">*/
/*         <button type="submit" form="form-module" data-toggle="tooltip" title="{{ button_save }}" class="btn btn-primary"><i class="fa fa-save"></i></button>*/
/*         <a href="{{ cancel }}" data-toggle="tooltip" title="{{ button_cancel }}" class="btn btn-light"><i class="fa fa-reply"></i></a></div>*/
/*       <h1>{{ heading_title }}</h1>*/
/*       <nav aria-label="breadcrumb">*/
/*         <ol class="breadcrumb">*/
/*           {% for breadcrumb in breadcrumbs %}*/
/*             <li class="breadcrumb-item"><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*           {% endfor %}*/
/*         </ol>*/
/*       </nav>*/
/*     </div>*/
/*   </div>*/
/*   <div class="container-fluid">*/
/*     {% if error_warning %}*/
/*       <div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> {{ error_warning }}*/
/*         <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*       </div>*/
/*     {% endif %}*/
/*     <div class="card">*/
/*       <div class="card-header"><i class="fa fa-pencil"></i> {{ text_edit }}</div>*/
/*       <div class="card-body">*/
/*         <form action="{{ action }}" method="post" enctype="multipart/form-data" id="form-module">*/
/*           <div class="form-group row">*/
/*             <label class="col-sm-2 col-form-label" for="input-name">{{ entry_name }}</label>*/
/*             <div class="col-sm-10">*/
/*               <input type="text" name="name" value="{{ name }}" placeholder="{{ entry_name }}" id="input-name" class="form-control"/>*/
/*               {% if error_name %}*/
/*                 <div class="invalid-tooltip">{{ error_name }}</div>*/
/*               {% endif %}*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group row">*/
/*             <label class="col-sm-2 col-form-label" for="input-product">{{ entry_product }}</label>*/
/*             <div class="col-sm-10">*/
/*               <input type="text" name="product_name" value="" placeholder="{{ entry_product }}" id="input-product" class="form-control"/>*/
/*               <div id="featured-product" class="form-control" style="height: 150px; overflow: auto;">*/
/*                 {% for product in products %}*/
/*                   <div id="featured-product{{ product.product_id }}"><i class="fa fa-minus-circle"></i> {{ product.name }}*/
/*                     <input type="hidden" name="product[]" value="{{ product.product_id }}"/>*/
/*                   </div>*/
/*                 {% endfor %}*/
/*               </div>*/
/*               <small class="form-text text-muted">{{ help_product }}</small>*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group row">*/
/*             <label class="col-sm-2 col-form-label" for="input-limit">{{ entry_limit }}</label>*/
/*             <div class="col-sm-10">*/
/*               <input type="text" name="limit" value="{{ limit }}" placeholder="{{ entry_limit }}" id="input-limit" class="form-control"/>*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group row">*/
/*             <label class="col-sm-2 col-form-label" for="input-width">{{ entry_width }}</label>*/
/*             <div class="col-sm-10">*/
/*               <input type="text" name="width" value="{{ width }}" placeholder="{{ entry_width }}" id="input-width" class="form-control"/>*/
/*               {% if error_width %}*/
/*                 <div class="invalid-tooltip">{{ error_width }}</div>*/
/*               {% endif %}*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group row">*/
/*             <label class="col-sm-2 col-form-label" for="input-height">{{ entry_height }}</label>*/
/*             <div class="col-sm-10">*/
/*               <input type="text" name="height" value="{{ height }}" placeholder="{{ entry_height }}" id="input-height" class="form-control"/>*/
/*               {% if error_height %}*/
/*                 <div class="invalid-tooltip">{{ error_height }}</div>*/
/*               {% endif %}*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group row">*/
/*             <label class="col-sm-2 col-form-label" for="input-status">{{ entry_status }}</label>*/
/*             <div class="col-sm-10">*/
/*               <select name="status" id="input-status" class="form-control">*/
/*                 {% if status %}*/
/*                   <option value="1" selected="selected">{{ text_enabled }}</option>*/
/*                   <option value="0">{{ text_disabled }}</option>*/
/*                 {% else %}*/
/*                   <option value="1">{{ text_enabled }}</option>*/
/*                   <option value="0" selected="selected">{{ text_disabled }}</option>*/
/*                 {% endif %}*/
/*               </select>*/
/*             </div>*/
/*           </div>*/
/*         </form>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/*   <script type="text/javascript"><!--*/
/*   $('input[name=\'product_name\']').autocomplete({*/
/* 	  source: function(request, response) {*/
/* 		  $.ajax({*/
/* 			  url: 'index.php?route=catalog/product/autocomplete&user_token={{ user_token }}&filter_name=' + encodeURIComponent(request),*/
/* 			  dataType: 'json',*/
/* 			  success: function(json) {*/
/* 				  response($.map(json, function(item) {*/
/* 					  return {*/
/* 						  label: item['name'],*/
/* 						  value: item['product_id']*/
/* 					  }*/
/* 				  }));*/
/* 			  }*/
/* 		  });*/
/* 	  },*/
/* 	  select: function(item) {*/
/* 		  $('input[name=\'product_name\']').val('');*/
/* */
/* 		  $('#featured-product' + item['value']).remove();*/
/* */
/* 		  $('#featured-product').append('<div id="featured-product' + item['value'] + '"><i class="fa fa-minus-circle"></i> ' + item['label'] + '<input type="hidden" name="product[]" value="' + item['value'] + '" /></div>');*/
/* 	  }*/
/*   });*/
/* */
/*   $('#featured-product').delegate('.fa-minus-circle', 'click', function() {*/
/* 	  $(this).parent().remove();*/
/*   });*/
/*   //--></script>*/
/* </div>*/
/* {{ footer }}*/
/* */
