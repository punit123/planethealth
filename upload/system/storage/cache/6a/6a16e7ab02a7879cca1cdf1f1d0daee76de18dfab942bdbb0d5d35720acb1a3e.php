<?php

/* extension/report/customer_transaction_info.twig */
class __TwigTemplate_c0985c5cd09e70a6a2b50c006c49d99b57a1769632f11288b5dde9dddd6940e2 extends Twig_Template
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
        echo "<div class=\"row\">
  <div id=\"filter-report\" class=\"col-md-3 order-md-9 col-sm-12 d-none d-md-block\">
    <div class=\"card\">
      <div class=\"card-header\"><i class=\"fa fa-filter\"></i> ";
        // line 4
        echo (isset($context["text_filter"]) ? $context["text_filter"] : null);
        echo "</div>
      <div class=\"card-body\">
        <div class=\"form-group\">
          <label class=\"col-form-label\" for=\"input-date-start\">";
        // line 7
        echo (isset($context["entry_date_start"]) ? $context["entry_date_start"] : null);
        echo "</label>
          <div class=\"input-group date\">
            <input type=\"text\" name=\"filter_date_start\" value=\"";
        // line 9
        echo (isset($context["filter_date_start"]) ? $context["filter_date_start"] : null);
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
        <div class=\"form-group\">
          <label class=\"col-form-label\" for=\"input-customer\">";
        // line 16
        echo (isset($context["entry_customer"]) ? $context["entry_customer"] : null);
        echo "</label> <input type=\"text\" name=\"filter_customer\" value=\"";
        echo (isset($context["filter_customer"]) ? $context["filter_customer"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_customer"]) ? $context["entry_customer"] : null);
        echo "\" id=\"input-customer\" class=\"form-control\"/>
        </div>
        <div class=\"form-group\">
          <label class=\"col-form-label\" for=\"input-date-end\">";
        // line 19
        echo (isset($context["entry_date_end"]) ? $context["entry_date_end"] : null);
        echo "</label>
          <div class=\"input-group date\">
            <input type=\"text\" name=\"filter_date_end\" value=\"";
        // line 21
        echo (isset($context["filter_date_end"]) ? $context["filter_date_end"] : null);
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
        <div class=\"form-group text-right\">
          <button type=\"button\" id=\"button-filter\" class=\"btn btn-light\"><i class=\"fa fa-filter\"></i> ";
        // line 28
        echo (isset($context["button_filter"]) ? $context["button_filter"] : null);
        echo "</button>
        </div>
      </div>
    </div>
  </div>
  <div class=\"col-md-9 col-sm-12\">
    <div class=\"card\">
      <div class=\"card-header\"><i class=\"fa fa-bar-chart\"></i> ";
        // line 35
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</div>
      <div class=\"card-body\">
        <div class=\"table-responsive\">
          <table class=\"table table-bordered\">
            <thead>
              <tr>
                <td class=\"text-left\">";
        // line 41
        echo (isset($context["column_customer"]) ? $context["column_customer"] : null);
        echo "</td>
                <td class=\"text-left\">";
        // line 42
        echo (isset($context["column_email"]) ? $context["column_email"] : null);
        echo "</td>
                <td class=\"text-left\">";
        // line 43
        echo (isset($context["column_customer_group"]) ? $context["column_customer_group"] : null);
        echo "</td>
                <td class=\"text-left\">";
        // line 44
        echo (isset($context["column_status"]) ? $context["column_status"] : null);
        echo "</td>
                <td class=\"text-right\">";
        // line 45
        echo (isset($context["column_total"]) ? $context["column_total"] : null);
        echo "</td>
                <td class=\"text-right\">";
        // line 46
        echo (isset($context["column_action"]) ? $context["column_action"] : null);
        echo "</td>
              </tr>
            </thead>
            <tbody>

              ";
        // line 51
        if ((isset($context["customers"]) ? $context["customers"] : null)) {
            // line 52
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["customers"]) ? $context["customers"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["customer"]) {
                // line 53
                echo "                  <tr>
                    <td class=\"text-left\">";
                // line 54
                echo $this->getAttribute($context["customer"], "customer", array());
                echo "</td>
                    <td class=\"text-left\">";
                // line 55
                echo $this->getAttribute($context["customer"], "email", array());
                echo "</td>
                    <td class=\"text-left\">";
                // line 56
                echo $this->getAttribute($context["customer"], "customer_group", array());
                echo "</td>
                    <td class=\"text-left\">";
                // line 57
                echo $this->getAttribute($context["customer"], "status", array());
                echo "</td>
                    <td class=\"text-right\">";
                // line 58
                echo $this->getAttribute($context["customer"], "total", array());
                echo "</td>
                    <td class=\"text-right\"><a href=\"";
                // line 59
                echo $this->getAttribute($context["customer"], "edit", array());
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo (isset($context["button_edit"]) ? $context["button_edit"] : null);
                echo "\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\"></i></a></td>
                  </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 62
            echo "              ";
        } else {
            // line 63
            echo "                <tr>
                  <td class=\"text-center\" colspan=\"6\">";
            // line 64
            echo (isset($context["text_no_results"]) ? $context["text_no_results"] : null);
            echo "</td>
                </tr>
              ";
        }
        // line 67
        echo "            </tbody>

          </table>
        </div>
        <div class=\"row\">
          <div class=\"col-sm-6 text-left\">";
        // line 72
        echo (isset($context["pagination"]) ? $context["pagination"] : null);
        echo "</div>
          <div class=\"col-sm-6 text-right\">";
        // line 73
        echo (isset($context["results"]) ? $context["results"] : null);
        echo "</div>
        </div>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('#button-filter').on('click', function() {
\tvar url = '';

\tvar filter_customer = \$('input[name=\\'filter_customer\\']').val();

\tif (filter_customer) {
\t\turl += '&filter_customer=' + encodeURIComponent(filter_customer);
\t}

\tvar filter_date_start = \$('input[name=\\'filter_date_start\\']').val();

\tif (filter_date_start) {
\t\turl += '&filter_date_start=' + encodeURIComponent(filter_date_start);
\t}

\tvar filter_date_end = \$('input[name=\\'filter_date_end\\']').val();

\tif (filter_date_end) {
\t\turl += '&filter_date_end=' + encodeURIComponent(filter_date_end);
\t}

\tlocation = 'index.php?route=report/report&code=customer_transaction&user_token=";
        // line 101
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "' + url;
});
//--></script>
<script type=\"text/javascript\"><!--
\$('.date').datetimepicker();
//--></script>
<script type=\"text/javascript\"><!--
\$('input[name=\\'filter_customer\\']').autocomplete({
\t'source': function(request, response) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=customer/customer/autocomplete&user_token=";
        // line 111
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&filter_name=' + encodeURIComponent(request),
\t\t\tdataType: 'json',
\t\t\tsuccess: function(json) {
\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\treturn {
\t\t\t\t\t\tlabel: item['name'],
\t\t\t\t\t\tvalue: item['customer_id']
\t\t\t\t\t}
\t\t\t\t}));
\t\t\t}
\t\t});
\t},
\t'select': function(item) {
\t\t\$('input[name=\\'filter_customer\\']').val(item['label']);
\t}
});
//--></script>";
    }

    public function getTemplateName()
    {
        return "extension/report/customer_transaction_info.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  233 => 111,  220 => 101,  189 => 73,  185 => 72,  178 => 67,  172 => 64,  169 => 63,  166 => 62,  155 => 59,  151 => 58,  147 => 57,  143 => 56,  139 => 55,  135 => 54,  132 => 53,  127 => 52,  125 => 51,  117 => 46,  113 => 45,  109 => 44,  105 => 43,  101 => 42,  97 => 41,  88 => 35,  78 => 28,  64 => 21,  59 => 19,  49 => 16,  35 => 9,  30 => 7,  24 => 4,  19 => 1,);
    }
}
/* <div class="row">*/
/*   <div id="filter-report" class="col-md-3 order-md-9 col-sm-12 d-none d-md-block">*/
/*     <div class="card">*/
/*       <div class="card-header"><i class="fa fa-filter"></i> {{ text_filter }}</div>*/
/*       <div class="card-body">*/
/*         <div class="form-group">*/
/*           <label class="col-form-label" for="input-date-start">{{ entry_date_start }}</label>*/
/*           <div class="input-group date">*/
/*             <input type="text" name="filter_date_start" value="{{ filter_date_start }}" placeholder="{{ entry_date_start }}" data-date-format="YYYY-MM-DD" data-locale="{{ datepicker }}" id="input-date-start" class="form-control"/>*/
/*             <div class="input-group-append">*/
/*               <button type="button" class="btn btn-light"><i class="fa fa-calendar"></i></button>*/
/*             </div>*/
/*           </div>*/
/*         </div>*/
/*         <div class="form-group">*/
/*           <label class="col-form-label" for="input-customer">{{ entry_customer }}</label> <input type="text" name="filter_customer" value="{{ filter_customer }}" placeholder="{{ entry_customer }}" id="input-customer" class="form-control"/>*/
/*         </div>*/
/*         <div class="form-group">*/
/*           <label class="col-form-label" for="input-date-end">{{ entry_date_end }}</label>*/
/*           <div class="input-group date">*/
/*             <input type="text" name="filter_date_end" value="{{ filter_date_end }}" placeholder="{{ entry_date_end }}" data-date-format="YYYY-MM-DD" data-locale="{{ datepicker }}" id="input-date-end" class="form-control"/>*/
/*             <div class="input-group-append">*/
/*               <button type="button" class="btn btn-light"><i class="fa fa-calendar"></i></button>*/
/*             </div>*/
/*           </div>*/
/*         </div>*/
/*         <div class="form-group text-right">*/
/*           <button type="button" id="button-filter" class="btn btn-light"><i class="fa fa-filter"></i> {{ button_filter }}</button>*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/*   <div class="col-md-9 col-sm-12">*/
/*     <div class="card">*/
/*       <div class="card-header"><i class="fa fa-bar-chart"></i> {{ heading_title }}</div>*/
/*       <div class="card-body">*/
/*         <div class="table-responsive">*/
/*           <table class="table table-bordered">*/
/*             <thead>*/
/*               <tr>*/
/*                 <td class="text-left">{{ column_customer }}</td>*/
/*                 <td class="text-left">{{ column_email }}</td>*/
/*                 <td class="text-left">{{ column_customer_group }}</td>*/
/*                 <td class="text-left">{{ column_status }}</td>*/
/*                 <td class="text-right">{{ column_total }}</td>*/
/*                 <td class="text-right">{{ column_action }}</td>*/
/*               </tr>*/
/*             </thead>*/
/*             <tbody>*/
/* */
/*               {% if customers %}*/
/*                 {% for customer in customers %}*/
/*                   <tr>*/
/*                     <td class="text-left">{{ customer.customer }}</td>*/
/*                     <td class="text-left">{{ customer.email }}</td>*/
/*                     <td class="text-left">{{ customer.customer_group }}</td>*/
/*                     <td class="text-left">{{ customer.status }}</td>*/
/*                     <td class="text-right">{{ customer.total }}</td>*/
/*                     <td class="text-right"><a href="{{ customer.edit }}" data-toggle="tooltip" title="{{ button_edit }}" class="btn btn-primary"><i class="fa fa-pencil"></i></a></td>*/
/*                   </tr>*/
/*                 {% endfor %}*/
/*               {% else %}*/
/*                 <tr>*/
/*                   <td class="text-center" colspan="6">{{ text_no_results }}</td>*/
/*                 </tr>*/
/*               {% endif %}*/
/*             </tbody>*/
/* */
/*           </table>*/
/*         </div>*/
/*         <div class="row">*/
/*           <div class="col-sm-6 text-left">{{ pagination }}</div>*/
/*           <div class="col-sm-6 text-right">{{ results }}</div>*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* <script type="text/javascript"><!--*/
/* $('#button-filter').on('click', function() {*/
/* 	var url = '';*/
/* */
/* 	var filter_customer = $('input[name=\'filter_customer\']').val();*/
/* */
/* 	if (filter_customer) {*/
/* 		url += '&filter_customer=' + encodeURIComponent(filter_customer);*/
/* 	}*/
/* */
/* 	var filter_date_start = $('input[name=\'filter_date_start\']').val();*/
/* */
/* 	if (filter_date_start) {*/
/* 		url += '&filter_date_start=' + encodeURIComponent(filter_date_start);*/
/* 	}*/
/* */
/* 	var filter_date_end = $('input[name=\'filter_date_end\']').val();*/
/* */
/* 	if (filter_date_end) {*/
/* 		url += '&filter_date_end=' + encodeURIComponent(filter_date_end);*/
/* 	}*/
/* */
/* 	location = 'index.php?route=report/report&code=customer_transaction&user_token={{ user_token }}' + url;*/
/* });*/
/* //--></script>*/
/* <script type="text/javascript"><!--*/
/* $('.date').datetimepicker();*/
/* //--></script>*/
/* <script type="text/javascript"><!--*/
/* $('input[name=\'filter_customer\']').autocomplete({*/
/* 	'source': function(request, response) {*/
/* 		$.ajax({*/
/* 			url: 'index.php?route=customer/customer/autocomplete&user_token={{ user_token }}&filter_name=' + encodeURIComponent(request),*/
/* 			dataType: 'json',*/
/* 			success: function(json) {*/
/* 				response($.map(json, function(item) {*/
/* 					return {*/
/* 						label: item['name'],*/
/* 						value: item['customer_id']*/
/* 					}*/
/* 				}));*/
/* 			}*/
/* 		});*/
/* 	},*/
/* 	'select': function(item) {*/
/* 		$('input[name=\'filter_customer\']').val(item['label']);*/
/* 	}*/
/* });*/
/* //--></script>*/
