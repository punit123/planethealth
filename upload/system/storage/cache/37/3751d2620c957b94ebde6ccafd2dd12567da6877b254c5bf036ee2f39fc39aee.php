<?php

/* marketing/coupon_form.twig */
class __TwigTemplate_5e0b6db4adc423b7d8e29978016b0b990c1a1bf24390a8414816ad4ca6711d32 extends Twig_Template
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
        <button type=\"submit\" form=\"form-coupon\" data-toggle=\"tooltip\" title=\"";
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
        echo (isset($context["text_form"]) ? $context["text_form"] : null);
        echo "</div>
      <div class=\"card-body\">
        <form action=\"";
        // line 27
        echo (isset($context["action"]) ? $context["action"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-coupon\">
          <ul class=\"nav nav-tabs\">
            <li class=\"nav-item\"><a href=\"#tab-general\" data-toggle=\"tab\" class=\"nav-link active\">";
        // line 29
        echo (isset($context["tab_general"]) ? $context["tab_general"] : null);
        echo "</a></li>
            ";
        // line 30
        if ((isset($context["coupon_id"]) ? $context["coupon_id"] : null)) {
            // line 31
            echo "              <li class=\"nav-item\"><a href=\"#tab-history\" data-toggle=\"tab\" class=\"nav-link\">";
            echo (isset($context["tab_history"]) ? $context["tab_history"] : null);
            echo "</a></li>
            ";
        }
        // line 33
        echo "          </ul>
          <div class=\"tab-content\">
            <div class=\"tab-pane active\" id=\"tab-general\">
              <div class=\"form-group row required\">
                <label class=\"col-sm-2 col-form-label\" for=\"input-name\">";
        // line 37
        echo (isset($context["entry_name"]) ? $context["entry_name"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"name\" value=\"";
        // line 39
        echo (isset($context["name"]) ? $context["name"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_name"]) ? $context["entry_name"] : null);
        echo "\" id=\"input-name\" class=\"form-control\"/>
                  ";
        // line 40
        if ((isset($context["error_name"]) ? $context["error_name"] : null)) {
            // line 41
            echo "                    <div class=\"invalid-tooltip\">";
            echo (isset($context["error_name"]) ? $context["error_name"] : null);
            echo "</div>
                  ";
        }
        // line 42
        echo "</div>
              </div>
              <div class=\"form-group row required\">
                <label class=\"col-sm-2 col-form-label\" for=\"input-code\">";
        // line 45
        echo (isset($context["entry_code"]) ? $context["entry_code"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"code\" value=\"";
        // line 47
        echo (isset($context["code"]) ? $context["code"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_code"]) ? $context["entry_code"] : null);
        echo "\" id=\"input-code\" class=\"form-control\"/>
                  <small class=\"form-text text-muted\">";
        // line 48
        echo (isset($context["help_code"]) ? $context["help_code"] : null);
        echo "</small>
                  ";
        // line 49
        if ((isset($context["error_code"]) ? $context["error_code"] : null)) {
            // line 50
            echo "                    <div class=\"invalid-tooltip\">";
            echo (isset($context["error_code"]) ? $context["error_code"] : null);
            echo "</div>
                  ";
        }
        // line 51
        echo "</div>
              </div>
              <div class=\"form-group row\">
                <label class=\"col-sm-2 col-form-label\" for=\"input-type\">";
        // line 54
        echo (isset($context["entry_type"]) ? $context["entry_type"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"type\" id=\"input-type\" class=\"form-control\">
                    ";
        // line 57
        if (((isset($context["type"]) ? $context["type"] : null) == "P")) {
            // line 58
            echo "                      <option value=\"P\" selected=\"selected\">";
            echo (isset($context["text_percent"]) ? $context["text_percent"] : null);
            echo "</option>
                    ";
        } else {
            // line 60
            echo "                      <option value=\"P\">";
            echo (isset($context["text_percent"]) ? $context["text_percent"] : null);
            echo "</option>
                    ";
        }
        // line 62
        echo "                    ";
        if (((isset($context["type"]) ? $context["type"] : null) == "F")) {
            // line 63
            echo "                      <option value=\"F\" selected=\"selected\">";
            echo (isset($context["text_amount"]) ? $context["text_amount"] : null);
            echo "</option>
                    ";
        } else {
            // line 65
            echo "                      <option value=\"F\">";
            echo (isset($context["text_amount"]) ? $context["text_amount"] : null);
            echo "</option>
                    ";
        }
        // line 67
        echo "                  </select>
                  <small class=\"form-text text-muted\">";
        // line 68
        echo (isset($context["help_type"]) ? $context["help_type"] : null);
        echo "</small>
                </div>
              </div>
              <div class=\"form-group row\">
                <label class=\"col-sm-2 col-form-label\" for=\"input-discount\">";
        // line 72
        echo (isset($context["entry_discount"]) ? $context["entry_discount"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"discount\" value=\"";
        // line 74
        echo (isset($context["discount"]) ? $context["discount"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_discount"]) ? $context["entry_discount"] : null);
        echo "\" id=\"input-discount\" class=\"form-control\"/>
                </div>
              </div>
              <div class=\"form-group row\">
                <label class=\"col-sm-2 col-form-label\" for=\"input-total\">";
        // line 78
        echo (isset($context["entry_total"]) ? $context["entry_total"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"total\" value=\"";
        // line 80
        echo (isset($context["total"]) ? $context["total"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_total"]) ? $context["entry_total"] : null);
        echo "\" id=\"input-total\" class=\"form-control\"/>
                  <small class=\"form-text text-muted\">";
        // line 81
        echo (isset($context["help_total"]) ? $context["help_total"] : null);
        echo "</small>
                </div>
              </div>
              <div class=\"form-group row\">
                <label class=\"col-sm-2 col-form-label\">";
        // line 85
        echo (isset($context["entry_logged"]) ? $context["entry_logged"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <label class=\"radio-inline\">";
        // line 87
        if ((isset($context["logged"]) ? $context["logged"] : null)) {
            // line 88
            echo "                      <input type=\"radio\" name=\"logged\" value=\"1\" checked=\"checked\"/>
                      ";
            // line 89
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                    ";
        } else {
            // line 91
            echo "                      <input type=\"radio\" name=\"logged\" value=\"1\"/>
                      ";
            // line 92
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                    ";
        }
        // line 93
        echo " </label> <label class=\"radio-inline\"> ";
        if ( !(isset($context["logged"]) ? $context["logged"] : null)) {
            // line 94
            echo "                      <input type=\"radio\" name=\"logged\" value=\"0\" checked=\"checked\"/>
                      ";
            // line 95
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                    ";
        } else {
            // line 97
            echo "                      <input type=\"radio\" name=\"logged\" value=\"0\"/>
                      ";
            // line 98
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                    ";
        }
        // line 99
        echo "</label>
                  <small class=\"form-text text-muted\">";
        // line 100
        echo (isset($context["help_logged"]) ? $context["help_logged"] : null);
        echo "</small>
                </div>
              </div>
              <div class=\"form-group row\">
                <label class=\"col-sm-2 col-form-label\">";
        // line 104
        echo (isset($context["entry_shipping"]) ? $context["entry_shipping"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <label class=\"radio-inline\">";
        // line 106
        if ((isset($context["shipping"]) ? $context["shipping"] : null)) {
            // line 107
            echo "                      <input type=\"radio\" name=\"shipping\" value=\"1\" checked=\"checked\"/>
                      ";
            // line 108
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                    ";
        } else {
            // line 110
            echo "                      <input type=\"radio\" name=\"shipping\" value=\"1\"/>
                      ";
            // line 111
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                    ";
        }
        // line 112
        echo "</label> <label class=\"radio-inline\"> ";
        if ( !(isset($context["shipping"]) ? $context["shipping"] : null)) {
            // line 113
            echo "                      <input type=\"radio\" name=\"shipping\" value=\"0\" checked=\"checked\"/>
                      ";
            // line 114
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                    ";
        } else {
            // line 116
            echo "                      <input type=\"radio\" name=\"shipping\" value=\"0\"/>
                      ";
            // line 117
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                    ";
        }
        // line 118
        echo "</label>
                </div>
              </div>
              <div class=\"form-group row\">
                <label class=\"col-sm-2 col-form-label\" for=\"input-product\">";
        // line 122
        echo (isset($context["entry_product"]) ? $context["entry_product"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"product\" value=\"\" placeholder=\"";
        // line 124
        echo (isset($context["entry_product"]) ? $context["entry_product"] : null);
        echo "\" id=\"input-product\" class=\"form-control\"/>
                  <div id=\"coupon-product\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"> ";
        // line 125
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["coupon_product"]);
        foreach ($context['_seq'] as $context["_key"] => $context["coupon_product"]) {
            // line 126
            echo "                      <div id=\"coupon-product";
            echo $this->getAttribute($context["coupon_product"], "product_id", array());
            echo "\"><i class=\"fa fa-minus-circle\"></i> ";
            echo $this->getAttribute($context["coupon_product"], "name", array());
            echo "
                        <input type=\"hidden\" name=\"coupon_product[]\" value=\"";
            // line 127
            echo $this->getAttribute($context["coupon_product"], "product_id", array());
            echo "\"/>
                      </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['coupon_product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 129
        echo "</div>
                  <small class=\"form-text text-muted\">";
        // line 130
        echo (isset($context["help_product"]) ? $context["help_product"] : null);
        echo "</small>
                </div>
              </div>
              <div class=\"form-group row\">
                <label class=\"col-sm-2 col-form-label\" for=\"input-category\">";
        // line 134
        echo (isset($context["entry_category"]) ? $context["entry_category"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"category\" value=\"\" placeholder=\"";
        // line 136
        echo (isset($context["entry_category"]) ? $context["entry_category"] : null);
        echo "\" id=\"input-category\" class=\"form-control\"/>
                  <div id=\"coupon-category\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"> ";
        // line 137
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["coupon_category"]);
        foreach ($context['_seq'] as $context["_key"] => $context["coupon_category"]) {
            // line 138
            echo "                      <div id=\"coupon-category";
            echo $this->getAttribute($context["coupon_category"], "category_id", array());
            echo "\"><i class=\"fa fa-minus-circle\"></i> ";
            echo $this->getAttribute($context["coupon_category"], "name", array());
            echo "
                        <input type=\"hidden\" name=\"coupon_category[]\" value=\"";
            // line 139
            echo $this->getAttribute($context["coupon_category"], "category_id", array());
            echo "\"/>
                      </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['coupon_category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 141
        echo "</div>
                  <small class=\"form-text text-muted\">";
        // line 142
        echo (isset($context["help_category"]) ? $context["help_category"] : null);
        echo "</small>
                </div>
              </div>
              <div class=\"form-group row\">
                <label class=\"col-sm-2 col-form-label\" for=\"input-date-start\">";
        // line 146
        echo (isset($context["entry_date_start"]) ? $context["entry_date_start"] : null);
        echo "</label>
                <div class=\"col-sm-3\">
                  <div class=\"input-group date\">
                    <input type=\"text\" name=\"date_start\" value=\"";
        // line 149
        echo (isset($context["date_start"]) ? $context["date_start"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_date_start"]) ? $context["entry_date_start"] : null);
        echo "\" data-date-format=\"YYYY-MM-DD\" data-locale=\"";
        echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
        echo "\" id=\"input-date-start\" class=\"form-control\"/>
                    <div class=\"input-group-append\">
                      <button type=\"button\" class=\"btn btn-light\"><i class=\"fa fa-calendar\"></i></button>
                    </div>
                  </div>
                </div>
              </div>
              <div class=\"form-group row\">
                <label class=\"col-sm-2 col-form-label\" for=\"input-date-end\">";
        // line 157
        echo (isset($context["entry_date_end"]) ? $context["entry_date_end"] : null);
        echo "</label>
                <div class=\"col-sm-3\">
                  <div class=\"input-group date\">
                    <input type=\"text\" name=\"date_end\" value=\"";
        // line 160
        echo (isset($context["date_end"]) ? $context["date_end"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_date_end"]) ? $context["entry_date_end"] : null);
        echo "\" data-date-format=\"YYYY-MM-DD\" data-locale=\"";
        echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
        echo "\" id=\"input-date-end\" class=\"form-control\"/>
                    <div class=\"input-group-append\">
                      <button type=\"button\" class=\"btn btn-light\"><i class=\"fa fa-calendar\"></i></button>
                    </div>
                  </div>
                </div>
              </div>
              <div class=\"form-group row\">
                <label class=\"col-sm-2 col-form-label\" for=\"input-uses-total\">";
        // line 168
        echo (isset($context["entry_uses_total"]) ? $context["entry_uses_total"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"uses_total\" value=\"";
        // line 170
        echo (isset($context["uses_total"]) ? $context["uses_total"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_uses_total"]) ? $context["entry_uses_total"] : null);
        echo "\" id=\"input-uses-total\" class=\"form-control\"/>
                  <small class=\"form-text text-muted\">";
        // line 171
        echo (isset($context["help_uses_total"]) ? $context["help_uses_total"] : null);
        echo "</small>
                </div>
              </div>
              <div class=\"form-group row\">
                <label class=\"col-sm-2 col-form-label\" for=\"input-uses-customer\">";
        // line 175
        echo (isset($context["entry_uses_customer"]) ? $context["entry_uses_customer"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"uses_customer\" value=\"";
        // line 177
        echo (isset($context["uses_customer"]) ? $context["uses_customer"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_uses_customer"]) ? $context["entry_uses_customer"] : null);
        echo "\" id=\"input-uses-customer\" class=\"form-control\"/>
                  <small class=\"form-text text-muted\">";
        // line 178
        echo (isset($context["help_uses_customer"]) ? $context["help_uses_customer"] : null);
        echo "</small>
                </div>
              </div>
              <div class=\"form-group row\">
                <label class=\"col-sm-2 col-form-label\" for=\"input-status\">";
        // line 182
        echo (isset($context["entry_status"]) ? $context["entry_status"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"status\" id=\"input-status\" class=\"form-control\">
                    ";
        // line 185
        if ((isset($context["status"]) ? $context["status"] : null)) {
            // line 186
            echo "                      <option value=\"1\" selected=\"selected\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                      <option value=\"0\">";
            // line 187
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                    ";
        } else {
            // line 189
            echo "                      <option value=\"1\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                      <option value=\"0\" selected=\"selected\">";
            // line 190
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                    ";
        }
        // line 192
        echo "                  </select>
                </div>
              </div>
            </div>
            ";
        // line 196
        if ((isset($context["coupon_id"]) ? $context["coupon_id"] : null)) {
            // line 197
            echo "              <div class=\"tab-pane\" id=\"tab-history\">
                <fieldset>
                  <legend>";
            // line 199
            echo (isset($context["text_coupon"]) ? $context["text_coupon"] : null);
            echo "</legend>
                  <div id=\"history\"></div>
                </fieldset>
              </div>
            ";
        }
        // line 203
        echo "</div>
        </form>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('input[name=\\'product\\']').autocomplete({
\t'source': function(request, response) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=catalog/product/autocomplete&user_token=";
        // line 213
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&filter_name=' + encodeURIComponent(request),
\t\t\tdataType: 'json',
\t\t\tsuccess: function(json) {
\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\treturn {
\t\t\t\t\t\tlabel: item['name'],
\t\t\t\t\t\tvalue: item['product_id']
\t\t\t\t\t}
\t\t\t\t}));
\t\t\t}
\t\t});
\t},
\t'select': function(item) {
\t\t\$('input[name=\\'product\\']').val('');

\t\t\$('#coupon-product' + item['value']).remove();

\t\t\$('#coupon-product').append('<div id=\"coupon-product' + item['value'] + '\"><i class=\"fa fa-minus-circle\"></i> ' + item['label'] + '<input type=\"hidden\" name=\"coupon_product[]\" value=\"' + item['value'] + '\" /></div>');
\t}
});

\$('#coupon-product').delegate('.fa-minus-circle', 'click', function() {
\t\$(this).parent().remove();
});

// Category
\$('input[name=\\'category\\']').autocomplete({
\t'source': function(request, response) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=catalog/category/autocomplete&user_token=";
        // line 242
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&filter_name=' + encodeURIComponent(request),
\t\t\tdataType: 'json',
\t\t\tsuccess: function(json) {
\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\treturn {
\t\t\t\t\t\tlabel: item['name'],
\t\t\t\t\t\tvalue: item['category_id']
\t\t\t\t\t}
\t\t\t\t}));
\t\t\t}
\t\t});
\t},
\t'select': function(item) {
\t\t\$('input[name=\\'category\\']').val('');

\t\t\$('#coupon-category' + item['value']).remove();

\t\t\$('#coupon-category').append('<div id=\"coupon-category' + item['value'] + '\"><i class=\"fa fa-minus-circle\"></i> ' + item['label'] + '<input type=\"hidden\" name=\"coupon_category[]\" value=\"' + item['value'] + '\" /></div>');
\t}
});

\$('#coupon-category').delegate('.fa-minus-circle', 'click', function() {
\t\$(this).parent().remove();
});
//--></script>
";
        // line 267
        if ((isset($context["coupon_id"]) ? $context["coupon_id"] : null)) {
            // line 268
            echo "  <script type=\"text/javascript\"><!--
  \$('#history').delegate('.pagination a', 'click', function(e) {
\t  e.preventDefault();

\t  \$('#history').load(this.href);
  });

  \$('#history').load('index.php?route=marketing/coupon/history&user_token=";
            // line 275
            echo (isset($context["user_token"]) ? $context["user_token"] : null);
            echo "&coupon_id=";
            echo (isset($context["coupon_id"]) ? $context["coupon_id"] : null);
            echo "');
  //--></script>
";
        }
        // line 278
        echo "<script type=\"text/javascript\"><!--
\$('.date').datetimepicker();
//--></script>
";
        // line 281
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "marketing/coupon_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  636 => 281,  631 => 278,  623 => 275,  614 => 268,  612 => 267,  584 => 242,  552 => 213,  540 => 203,  532 => 199,  528 => 197,  526 => 196,  520 => 192,  515 => 190,  510 => 189,  505 => 187,  500 => 186,  498 => 185,  492 => 182,  485 => 178,  479 => 177,  474 => 175,  467 => 171,  461 => 170,  456 => 168,  441 => 160,  435 => 157,  420 => 149,  414 => 146,  407 => 142,  404 => 141,  395 => 139,  388 => 138,  384 => 137,  380 => 136,  375 => 134,  368 => 130,  365 => 129,  356 => 127,  349 => 126,  345 => 125,  341 => 124,  336 => 122,  330 => 118,  325 => 117,  322 => 116,  317 => 114,  314 => 113,  311 => 112,  306 => 111,  303 => 110,  298 => 108,  295 => 107,  293 => 106,  288 => 104,  281 => 100,  278 => 99,  273 => 98,  270 => 97,  265 => 95,  262 => 94,  259 => 93,  254 => 92,  251 => 91,  246 => 89,  243 => 88,  241 => 87,  236 => 85,  229 => 81,  223 => 80,  218 => 78,  209 => 74,  204 => 72,  197 => 68,  194 => 67,  188 => 65,  182 => 63,  179 => 62,  173 => 60,  167 => 58,  165 => 57,  159 => 54,  154 => 51,  148 => 50,  146 => 49,  142 => 48,  136 => 47,  131 => 45,  126 => 42,  120 => 41,  118 => 40,  112 => 39,  107 => 37,  101 => 33,  95 => 31,  93 => 30,  89 => 29,  84 => 27,  79 => 25,  76 => 24,  68 => 20,  66 => 19,  59 => 14,  48 => 12,  44 => 11,  38 => 8,  32 => 7,  28 => 6,  19 => 1,);
    }
}
/* {{ header }}{{ column_left }}*/
/* <div id="content">*/
/*   <div class="page-header">*/
/*     <div class="container-fluid">*/
/*       <div class="pull-right">*/
/*         <button type="submit" form="form-coupon" data-toggle="tooltip" title="{{ button_save }}" class="btn btn-primary"><i class="fa fa-save"></i></button>*/
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
/*       <div class="card-header"><i class="fa fa-pencil"></i> {{ text_form }}</div>*/
/*       <div class="card-body">*/
/*         <form action="{{ action }}" method="post" enctype="multipart/form-data" id="form-coupon">*/
/*           <ul class="nav nav-tabs">*/
/*             <li class="nav-item"><a href="#tab-general" data-toggle="tab" class="nav-link active">{{ tab_general }}</a></li>*/
/*             {% if coupon_id %}*/
/*               <li class="nav-item"><a href="#tab-history" data-toggle="tab" class="nav-link">{{ tab_history }}</a></li>*/
/*             {% endif %}*/
/*           </ul>*/
/*           <div class="tab-content">*/
/*             <div class="tab-pane active" id="tab-general">*/
/*               <div class="form-group row required">*/
/*                 <label class="col-sm-2 col-form-label" for="input-name">{{ entry_name }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="name" value="{{ name }}" placeholder="{{ entry_name }}" id="input-name" class="form-control"/>*/
/*                   {% if error_name %}*/
/*                     <div class="invalid-tooltip">{{ error_name }}</div>*/
/*                   {% endif %}</div>*/
/*               </div>*/
/*               <div class="form-group row required">*/
/*                 <label class="col-sm-2 col-form-label" for="input-code">{{ entry_code }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="code" value="{{ code }}" placeholder="{{ entry_code }}" id="input-code" class="form-control"/>*/
/*                   <small class="form-text text-muted">{{ help_code }}</small>*/
/*                   {% if error_code %}*/
/*                     <div class="invalid-tooltip">{{ error_code }}</div>*/
/*                   {% endif %}</div>*/
/*               </div>*/
/*               <div class="form-group row">*/
/*                 <label class="col-sm-2 col-form-label" for="input-type">{{ entry_type }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <select name="type" id="input-type" class="form-control">*/
/*                     {% if type == 'P' %}*/
/*                       <option value="P" selected="selected">{{ text_percent }}</option>*/
/*                     {% else %}*/
/*                       <option value="P">{{ text_percent }}</option>*/
/*                     {% endif %}*/
/*                     {% if type == 'F' %}*/
/*                       <option value="F" selected="selected">{{ text_amount }}</option>*/
/*                     {% else %}*/
/*                       <option value="F">{{ text_amount }}</option>*/
/*                     {% endif %}*/
/*                   </select>*/
/*                   <small class="form-text text-muted">{{ help_type }}</small>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group row">*/
/*                 <label class="col-sm-2 col-form-label" for="input-discount">{{ entry_discount }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="discount" value="{{ discount }}" placeholder="{{ entry_discount }}" id="input-discount" class="form-control"/>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group row">*/
/*                 <label class="col-sm-2 col-form-label" for="input-total">{{ entry_total }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="total" value="{{ total }}" placeholder="{{ entry_total }}" id="input-total" class="form-control"/>*/
/*                   <small class="form-text text-muted">{{ help_total }}</small>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group row">*/
/*                 <label class="col-sm-2 col-form-label">{{ entry_logged }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <label class="radio-inline">{% if logged %}*/
/*                       <input type="radio" name="logged" value="1" checked="checked"/>*/
/*                       {{ text_yes }}*/
/*                     {% else %}*/
/*                       <input type="radio" name="logged" value="1"/>*/
/*                       {{ text_yes }}*/
/*                     {% endif %} </label> <label class="radio-inline"> {% if not logged %}*/
/*                       <input type="radio" name="logged" value="0" checked="checked"/>*/
/*                       {{ text_no }}*/
/*                     {% else %}*/
/*                       <input type="radio" name="logged" value="0"/>*/
/*                       {{ text_no }}*/
/*                     {% endif %}</label>*/
/*                   <small class="form-text text-muted">{{ help_logged }}</small>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group row">*/
/*                 <label class="col-sm-2 col-form-label">{{ entry_shipping }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <label class="radio-inline">{% if shipping %}*/
/*                       <input type="radio" name="shipping" value="1" checked="checked"/>*/
/*                       {{ text_yes }}*/
/*                     {% else %}*/
/*                       <input type="radio" name="shipping" value="1"/>*/
/*                       {{ text_yes }}*/
/*                     {% endif %}</label> <label class="radio-inline"> {% if not shipping %}*/
/*                       <input type="radio" name="shipping" value="0" checked="checked"/>*/
/*                       {{ text_no }}*/
/*                     {% else %}*/
/*                       <input type="radio" name="shipping" value="0"/>*/
/*                       {{ text_no }}*/
/*                     {% endif %}</label>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group row">*/
/*                 <label class="col-sm-2 col-form-label" for="input-product">{{ entry_product }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="product" value="" placeholder="{{ entry_product }}" id="input-product" class="form-control"/>*/
/*                   <div id="coupon-product" class="well well-sm" style="height: 150px; overflow: auto;"> {% for coupon_product in coupon_product %}*/
/*                       <div id="coupon-product{{ coupon_product.product_id }}"><i class="fa fa-minus-circle"></i> {{ coupon_product.name }}*/
/*                         <input type="hidden" name="coupon_product[]" value="{{ coupon_product.product_id }}"/>*/
/*                       </div>*/
/*                     {% endfor %}</div>*/
/*                   <small class="form-text text-muted">{{ help_product }}</small>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group row">*/
/*                 <label class="col-sm-2 col-form-label" for="input-category">{{ entry_category }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="category" value="" placeholder="{{ entry_category }}" id="input-category" class="form-control"/>*/
/*                   <div id="coupon-category" class="well well-sm" style="height: 150px; overflow: auto;"> {% for coupon_category in coupon_category %}*/
/*                       <div id="coupon-category{{ coupon_category.category_id }}"><i class="fa fa-minus-circle"></i> {{ coupon_category.name }}*/
/*                         <input type="hidden" name="coupon_category[]" value="{{ coupon_category.category_id }}"/>*/
/*                       </div>*/
/*                     {% endfor %}</div>*/
/*                   <small class="form-text text-muted">{{ help_category }}</small>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group row">*/
/*                 <label class="col-sm-2 col-form-label" for="input-date-start">{{ entry_date_start }}</label>*/
/*                 <div class="col-sm-3">*/
/*                   <div class="input-group date">*/
/*                     <input type="text" name="date_start" value="{{ date_start }}" placeholder="{{ entry_date_start }}" data-date-format="YYYY-MM-DD" data-locale="{{ datepicker }}" id="input-date-start" class="form-control"/>*/
/*                     <div class="input-group-append">*/
/*                       <button type="button" class="btn btn-light"><i class="fa fa-calendar"></i></button>*/
/*                     </div>*/
/*                   </div>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group row">*/
/*                 <label class="col-sm-2 col-form-label" for="input-date-end">{{ entry_date_end }}</label>*/
/*                 <div class="col-sm-3">*/
/*                   <div class="input-group date">*/
/*                     <input type="text" name="date_end" value="{{ date_end }}" placeholder="{{ entry_date_end }}" data-date-format="YYYY-MM-DD" data-locale="{{ datepicker }}" id="input-date-end" class="form-control"/>*/
/*                     <div class="input-group-append">*/
/*                       <button type="button" class="btn btn-light"><i class="fa fa-calendar"></i></button>*/
/*                     </div>*/
/*                   </div>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group row">*/
/*                 <label class="col-sm-2 col-form-label" for="input-uses-total">{{ entry_uses_total }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="uses_total" value="{{ uses_total }}" placeholder="{{ entry_uses_total }}" id="input-uses-total" class="form-control"/>*/
/*                   <small class="form-text text-muted">{{ help_uses_total }}</small>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group row">*/
/*                 <label class="col-sm-2 col-form-label" for="input-uses-customer">{{ entry_uses_customer }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="uses_customer" value="{{ uses_customer }}" placeholder="{{ entry_uses_customer }}" id="input-uses-customer" class="form-control"/>*/
/*                   <small class="form-text text-muted">{{ help_uses_customer }}</small>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group row">*/
/*                 <label class="col-sm-2 col-form-label" for="input-status">{{ entry_status }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <select name="status" id="input-status" class="form-control">*/
/*                     {% if status %}*/
/*                       <option value="1" selected="selected">{{ text_enabled }}</option>*/
/*                       <option value="0">{{ text_disabled }}</option>*/
/*                     {% else %}*/
/*                       <option value="1">{{ text_enabled }}</option>*/
/*                       <option value="0" selected="selected">{{ text_disabled }}</option>*/
/*                     {% endif %}*/
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/*             </div>*/
/*             {% if coupon_id %}*/
/*               <div class="tab-pane" id="tab-history">*/
/*                 <fieldset>*/
/*                   <legend>{{ text_coupon }}</legend>*/
/*                   <div id="history"></div>*/
/*                 </fieldset>*/
/*               </div>*/
/*             {% endif %}</div>*/
/*         </form>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* <script type="text/javascript"><!--*/
/* $('input[name=\'product\']').autocomplete({*/
/* 	'source': function(request, response) {*/
/* 		$.ajax({*/
/* 			url: 'index.php?route=catalog/product/autocomplete&user_token={{ user_token }}&filter_name=' + encodeURIComponent(request),*/
/* 			dataType: 'json',*/
/* 			success: function(json) {*/
/* 				response($.map(json, function(item) {*/
/* 					return {*/
/* 						label: item['name'],*/
/* 						value: item['product_id']*/
/* 					}*/
/* 				}));*/
/* 			}*/
/* 		});*/
/* 	},*/
/* 	'select': function(item) {*/
/* 		$('input[name=\'product\']').val('');*/
/* */
/* 		$('#coupon-product' + item['value']).remove();*/
/* */
/* 		$('#coupon-product').append('<div id="coupon-product' + item['value'] + '"><i class="fa fa-minus-circle"></i> ' + item['label'] + '<input type="hidden" name="coupon_product[]" value="' + item['value'] + '" /></div>');*/
/* 	}*/
/* });*/
/* */
/* $('#coupon-product').delegate('.fa-minus-circle', 'click', function() {*/
/* 	$(this).parent().remove();*/
/* });*/
/* */
/* // Category*/
/* $('input[name=\'category\']').autocomplete({*/
/* 	'source': function(request, response) {*/
/* 		$.ajax({*/
/* 			url: 'index.php?route=catalog/category/autocomplete&user_token={{ user_token }}&filter_name=' + encodeURIComponent(request),*/
/* 			dataType: 'json',*/
/* 			success: function(json) {*/
/* 				response($.map(json, function(item) {*/
/* 					return {*/
/* 						label: item['name'],*/
/* 						value: item['category_id']*/
/* 					}*/
/* 				}));*/
/* 			}*/
/* 		});*/
/* 	},*/
/* 	'select': function(item) {*/
/* 		$('input[name=\'category\']').val('');*/
/* */
/* 		$('#coupon-category' + item['value']).remove();*/
/* */
/* 		$('#coupon-category').append('<div id="coupon-category' + item['value'] + '"><i class="fa fa-minus-circle"></i> ' + item['label'] + '<input type="hidden" name="coupon_category[]" value="' + item['value'] + '" /></div>');*/
/* 	}*/
/* });*/
/* */
/* $('#coupon-category').delegate('.fa-minus-circle', 'click', function() {*/
/* 	$(this).parent().remove();*/
/* });*/
/* //--></script>*/
/* {% if coupon_id %}*/
/*   <script type="text/javascript"><!--*/
/*   $('#history').delegate('.pagination a', 'click', function(e) {*/
/* 	  e.preventDefault();*/
/* */
/* 	  $('#history').load(this.href);*/
/*   });*/
/* */
/*   $('#history').load('index.php?route=marketing/coupon/history&user_token={{ user_token }}&coupon_id={{ coupon_id }}');*/
/*   //--></script>*/
/* {% endif %}*/
/* <script type="text/javascript"><!--*/
/* $('.date').datetimepicker();*/
/* //--></script>*/
/* {{ footer }}*/
