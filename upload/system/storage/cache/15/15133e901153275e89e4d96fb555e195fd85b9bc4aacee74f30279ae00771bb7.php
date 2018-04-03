<?php

/* extension/report/sale_coupon_info.twig */
class __TwigTemplate_2ff70fb91e22d50b7629c9d09730ad87113b106149b5751ed25f938706e0d0b4 extends Twig_Template
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
  <div id=\"filter-report\" class=\"col-md-3 col-sm-12 order-md-9 d-none d-md-block\">
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
          <label class=\"col-form-label\" for=\"input-date-end\">";
        // line 16
        echo (isset($context["entry_date_end"]) ? $context["entry_date_end"] : null);
        echo "</label>
          <div class=\"input-group date\">
            <input type=\"text\" name=\"filter_date_end\" value=\"";
        // line 18
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
        // line 25
        echo (isset($context["button_filter"]) ? $context["button_filter"] : null);
        echo "</button>
        </div>
      </div>
    </div>
  </div>
  <div class=\"col-md-9 col-sm-12\">
    <div class=\"card\">
      <div class=\"card-header\"><i class=\"fa fa-bar-chart\"></i> ";
        // line 32
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</div>
      <div class=\"card-body\">
        <div class=\"table-responsive\">
          <table class=\"table table-bordered\">
            <thead>
              <tr>
                <td class=\"text-left\">";
        // line 38
        echo (isset($context["column_name"]) ? $context["column_name"] : null);
        echo "</td>
                <td class=\"text-left\">";
        // line 39
        echo (isset($context["column_code"]) ? $context["column_code"] : null);
        echo "</td>
                <td class=\"text-right\">";
        // line 40
        echo (isset($context["column_orders"]) ? $context["column_orders"] : null);
        echo "</td>
                <td class=\"text-right\">";
        // line 41
        echo (isset($context["column_total"]) ? $context["column_total"] : null);
        echo "</td>
                <td class=\"text-right\">";
        // line 42
        echo (isset($context["column_action"]) ? $context["column_action"] : null);
        echo "</td>
              </tr>
            </thead>
            <tbody>
              ";
        // line 46
        if ((isset($context["coupons"]) ? $context["coupons"] : null)) {
            // line 47
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["coupons"]) ? $context["coupons"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["coupon"]) {
                // line 48
                echo "                  <tr>
                    <td class=\"text-left\">";
                // line 49
                echo $this->getAttribute($context["coupon"], "name", array());
                echo "</td>
                    <td class=\"text-left\">";
                // line 50
                echo $this->getAttribute($context["coupon"], "code", array());
                echo "</td>
                    <td class=\"text-right\">";
                // line 51
                echo $this->getAttribute($context["coupon"], "orders", array());
                echo "</td>
                    <td class=\"text-right\">";
                // line 52
                echo $this->getAttribute($context["coupon"], "total", array());
                echo "</td>
                    <td class=\"text-right\"><a href=\"";
                // line 53
                echo $this->getAttribute($context["coupon"], "edit", array());
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo (isset($context["button_edit"]) ? $context["button_edit"] : null);
                echo "\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\"></i></a></td>
                  </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['coupon'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 56
            echo "              ";
        } else {
            // line 57
            echo "                <tr>
                  <td class=\"text-center\" colspan=\"6\">";
            // line 58
            echo (isset($context["text_no_results"]) ? $context["text_no_results"] : null);
            echo "</td>
                </tr>
              ";
        }
        // line 61
        echo "            </tbody>
          </table>
        </div>
        <div class=\"row\">
          <div class=\"col-sm-6 text-left\">";
        // line 65
        echo (isset($context["pagination"]) ? $context["pagination"] : null);
        echo "</div>
          <div class=\"col-sm-6 text-right\">";
        // line 66
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

\tvar filter_date_start = \$('input[name=\\'filter_date_start\\']').val();

\tif (filter_date_start) {
\t\turl += '&filter_date_start=' + encodeURIComponent(filter_date_start);
\t}

\tvar filter_date_end = \$('input[name=\\'filter_date_end\\']').val();

\tif (filter_date_end) {
\t\turl += '&filter_date_end=' + encodeURIComponent(filter_date_end);
\t}

\tlocation = 'index.php?route=report/report&code=sale_coupon&user_token=";
        // line 88
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "' + url;
});
//--></script>
<script type=\"text/javascript\"><!--
\$('.date').datetimepicker();
//--></script>";
    }

    public function getTemplateName()
    {
        return "extension/report/sale_coupon_info.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  194 => 88,  169 => 66,  165 => 65,  159 => 61,  153 => 58,  150 => 57,  147 => 56,  136 => 53,  132 => 52,  128 => 51,  124 => 50,  120 => 49,  117 => 48,  112 => 47,  110 => 46,  103 => 42,  99 => 41,  95 => 40,  91 => 39,  87 => 38,  78 => 32,  68 => 25,  54 => 18,  49 => 16,  35 => 9,  30 => 7,  24 => 4,  19 => 1,);
    }
}
/* <div class="row">*/
/*   <div id="filter-report" class="col-md-3 col-sm-12 order-md-9 d-none d-md-block">*/
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
/*                 <td class="text-left">{{ column_name }}</td>*/
/*                 <td class="text-left">{{ column_code }}</td>*/
/*                 <td class="text-right">{{ column_orders }}</td>*/
/*                 <td class="text-right">{{ column_total }}</td>*/
/*                 <td class="text-right">{{ column_action }}</td>*/
/*               </tr>*/
/*             </thead>*/
/*             <tbody>*/
/*               {% if coupons %}*/
/*                 {% for coupon in coupons %}*/
/*                   <tr>*/
/*                     <td class="text-left">{{ coupon.name }}</td>*/
/*                     <td class="text-left">{{ coupon.code }}</td>*/
/*                     <td class="text-right">{{ coupon.orders }}</td>*/
/*                     <td class="text-right">{{ coupon.total }}</td>*/
/*                     <td class="text-right"><a href="{{ coupon.edit }}" data-toggle="tooltip" title="{{ button_edit }}" class="btn btn-primary"><i class="fa fa-pencil"></i></a></td>*/
/*                   </tr>*/
/*                 {% endfor %}*/
/*               {% else %}*/
/*                 <tr>*/
/*                   <td class="text-center" colspan="6">{{ text_no_results }}</td>*/
/*                 </tr>*/
/*               {% endif %}*/
/*             </tbody>*/
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
/* 	location = 'index.php?route=report/report&code=sale_coupon&user_token={{ user_token }}' + url;*/
/* });*/
/* //--></script>*/
/* <script type="text/javascript"><!--*/
/* $('.date').datetimepicker();*/
/* //--></script>*/
