<?php

/* marketing/marketing_list.twig */
class __TwigTemplate_a1769c63a68ee3d51d38d5b5579ddd38dddb6d8fa135a1e67ca9f133e25bf6a9 extends Twig_Template
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
        <button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo (isset($context["button_filter"]) ? $context["button_filter"] : null);
        echo "\" onclick=\"\$('#filter-marketing').toggleClass('d-none');\" class=\"btn btn-light d-md-none\"><i class=\"fa fa-filter\"></i></button>
        <a href=\"";
        // line 7
        echo (isset($context["add"]) ? $context["add"] : null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo (isset($context["button_add"]) ? $context["button_add"] : null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus\"></i></a>
        <button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 8
        echo (isset($context["button_delete"]) ? $context["button_delete"] : null);
        echo "\" class=\"btn btn-danger\" onclick=\"confirm('";
        echo (isset($context["text_confirm"]) ? $context["text_confirm"] : null);
        echo "') ? \$('#form-marketing').submit() : false;\"><i class=\"fa fa-trash-o\"></i></button>
      </div>
      <h1>";
        // line 10
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
      <nav aria-label=\"breadcrumb\">
        <ol class=\"breadcrumb\">
          ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 14
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
        // line 16
        echo "        </ol>
      </nav>
    </div>
  </div>
  <div class=\"container-fluid\">";
        // line 20
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            // line 21
            echo "      <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
      </div>
    ";
        }
        // line 25
        echo "    ";
        if ((isset($context["success"]) ? $context["success"] : null)) {
            // line 26
            echo "      <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo (isset($context["success"]) ? $context["success"] : null);
            echo "
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
      </div>
    ";
        }
        // line 30
        echo "    <div class=\"row\">
      <div id=\"filter-marketing\" class=\"col-md-3 col-sm-12 order-md-9 d-none d-md-block\">
        <div class=\"card\">
          <div class=\"card-header\"><i class=\"fa fa-filter\"></i> ";
        // line 33
        echo (isset($context["text_filter"]) ? $context["text_filter"] : null);
        echo "</div>
          <div class=\"card-body\">
            <div class=\"form-group\">
              <label class=\"col-form-label\" for=\"input-name\">";
        // line 36
        echo (isset($context["entry_name"]) ? $context["entry_name"] : null);
        echo "</label> <input type=\"text\" name=\"filter_name\" value=\"";
        echo (isset($context["filter_name"]) ? $context["filter_name"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_name"]) ? $context["entry_name"] : null);
        echo "\" id=\"input-name\" class=\"form-control\"/>
            </div>
            <div class=\"form-group\">
              <label class=\"col-form-label\" for=\"input-code\">";
        // line 39
        echo (isset($context["entry_code"]) ? $context["entry_code"] : null);
        echo "</label> <input type=\"text\" name=\"filter_code\" value=\"";
        echo (isset($context["filter_code"]) ? $context["filter_code"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_code"]) ? $context["entry_code"] : null);
        echo "\" id=\"input-code\" class=\"form-control\"/>
            </div>
            <div class=\"form-group\">
              <label class=\"col-form-label\" for=\"input-date-added\">";
        // line 42
        echo (isset($context["entry_date_added"]) ? $context["entry_date_added"] : null);
        echo "</label>
              <div class=\"input-group date\">
                <input type=\"text\" name=\"filter_date_added\" value=\"";
        // line 44
        echo (isset($context["filter_date_added"]) ? $context["filter_date_added"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_date_added"]) ? $context["entry_date_added"] : null);
        echo "\" data-date-format=\"YYYY-MM-DD\" data-locale=\"";
        echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
        echo "\" class=\"form-control\"/>
                <div class=\"input-group-append\">
                  <button type=\"button\" class=\"btn btn-light\"><i class=\"fa fa-calendar\"></i></button>
                </div>
              </div>
            </div>
            <div class=\"form-group text-right\">
              <button type=\"button\" id=\"button-filter\" class=\"btn btn-light\"><i class=\"fa fa-filter\"></i> ";
        // line 51
        echo (isset($context["button_filter"]) ? $context["button_filter"] : null);
        echo "</button>
            </div>
          </div>
        </div>
      </div>
      <div class=\"col-md-9 col-sm-12\">
        <div class=\"card\">
          <div class=\"card-header\"><i class=\"fa fa-list\"></i> ";
        // line 58
        echo (isset($context["text_list"]) ? $context["text_list"] : null);
        echo "</div>
          <div class=\"card-body\">
            <form action=\"";
        // line 60
        echo (isset($context["delete"]) ? $context["delete"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-marketing\">
              <div class=\"table-responsive\">
                <table class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td style=\"width: 1px;\" class=\"text-center\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').trigger('click');\"/></td>
                      <td class=\"text-left\">";
        // line 66
        if (((isset($context["sort"]) ? $context["sort"] : null) == "m.name")) {
            echo " <a href=\"";
            echo (isset($context["sort_name"]) ? $context["sort_name"] : null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, (isset($context["order"]) ? $context["order"] : null));
            echo "\">";
            echo (isset($context["column_name"]) ? $context["column_name"] : null);
            echo "</a> ";
        } else {
            echo " <a href=\"";
            echo (isset($context["sort_name"]) ? $context["sort_name"] : null);
            echo "\">";
            echo (isset($context["column_name"]) ? $context["column_name"] : null);
            echo "</a> ";
        }
        echo "</td>
                      <td class=\"text-left\">";
        // line 67
        if (((isset($context["sort"]) ? $context["sort"] : null) == "m.code")) {
            echo " <a href=\"";
            echo (isset($context["sort_code"]) ? $context["sort_code"] : null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, (isset($context["order"]) ? $context["order"] : null));
            echo "\">";
            echo (isset($context["column_code"]) ? $context["column_code"] : null);
            echo "</a> ";
        } else {
            echo " <a href=\"";
            echo (isset($context["sort_code"]) ? $context["sort_code"] : null);
            echo "\">";
            echo (isset($context["column_code"]) ? $context["column_code"] : null);
            echo "</a> ";
        }
        echo "</td>
                      <td class=\"text-right\">";
        // line 68
        echo (isset($context["column_clicks"]) ? $context["column_clicks"] : null);
        echo "</td>
                      <td class=\"text-right\">";
        // line 69
        echo (isset($context["column_orders"]) ? $context["column_orders"] : null);
        echo "</td>
                      <td class=\"text-left\">";
        // line 70
        if (((isset($context["sort"]) ? $context["sort"] : null) == "m.date_added")) {
            echo " <a href=\"";
            echo (isset($context["sort_date_added"]) ? $context["sort_date_added"] : null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, (isset($context["order"]) ? $context["order"] : null));
            echo "\">";
            echo (isset($context["column_date_added"]) ? $context["column_date_added"] : null);
            echo "</a> ";
        } else {
            echo " <a href=\"";
            echo (isset($context["sort_date_added"]) ? $context["sort_date_added"] : null);
            echo "\">";
            echo (isset($context["column_date_added"]) ? $context["column_date_added"] : null);
            echo "</a> ";
        }
        echo "</td>
                      <td class=\"text-right\">";
        // line 71
        echo (isset($context["column_action"]) ? $context["column_action"] : null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>
                    ";
        // line 75
        if ((isset($context["marketings"]) ? $context["marketings"] : null)) {
            // line 76
            echo "                      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["marketings"]) ? $context["marketings"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["marketing"]) {
                // line 77
                echo "                        <tr>
                          <td class=\"text-center\">";
                // line 78
                if (twig_in_filter($this->getAttribute($context["marketing"], "marketing_id", array()), (isset($context["selected"]) ? $context["selected"] : null))) {
                    // line 79
                    echo "                              <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo $this->getAttribute($context["marketing"], "marketing_id", array());
                    echo "\" checked=\"checked\"/>
                            ";
                } else {
                    // line 81
                    echo "                              <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo $this->getAttribute($context["marketing"], "marketing_id", array());
                    echo "\"/>
                            ";
                }
                // line 82
                echo "</td>
                          <td class=\"text-left\">";
                // line 83
                echo $this->getAttribute($context["marketing"], "name", array());
                echo "</td>
                          <td class=\"text-left\">";
                // line 84
                echo $this->getAttribute($context["marketing"], "code", array());
                echo "</td>
                          <td class=\"text-right\">";
                // line 85
                echo $this->getAttribute($context["marketing"], "clicks", array());
                echo "</td>
                          <td class=\"text-right\">";
                // line 86
                echo $this->getAttribute($context["marketing"], "orders", array());
                echo "</td>
                          <td class=\"text-left\">";
                // line 87
                echo $this->getAttribute($context["marketing"], "date_added", array());
                echo "</td>
                          <td class=\"text-right\"><a href=\"";
                // line 88
                echo $this->getAttribute($context["marketing"], "edit", array());
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo (isset($context["button_edit"]) ? $context["button_edit"] : null);
                echo "\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\"></i></a></td>
                        </tr>
                      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['marketing'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 91
            echo "                    ";
        } else {
            // line 92
            echo "                      <tr>
                        <td class=\"text-center\" colspan=\"8\">";
            // line 93
            echo (isset($context["text_no_results"]) ? $context["text_no_results"] : null);
            echo "</td>
                      </tr>
                    ";
        }
        // line 96
        echo "                  </tbody>
                </table>
              </div>
            </form>
            <div class=\"row\">
              <div class=\"col-sm-6 text-left\">";
        // line 101
        echo (isset($context["pagination"]) ? $context["pagination"] : null);
        echo "</div>
              <div class=\"col-sm-6 text-right\">";
        // line 102
        echo (isset($context["results"]) ? $context["results"] : null);
        echo "</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('#button-filter').on('click', function() {
\turl = 'index.php?route=marketing/marketing&user_token=";
        // line 112
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "';

\tvar filter_name = \$('input[name=\\'filter_name\\']').val();

\tif (filter_name) {
\t\turl += '&filter_name=' + encodeURIComponent(filter_name);
\t}

\tvar filter_code = \$('input[name=\\'filter_code\\']').val();

\tif (filter_code) {
\t\turl += '&filter_code=' + encodeURIComponent(filter_code);
\t}

\tvar filter_date_added = \$('input[name=\\'filter_date_added\\']').val();

\tif (filter_date_added) {
\t\turl += '&filter_date_added=' + encodeURIComponent(filter_date_added);
\t}

\tlocation = url;
});
//--></script>
<script type=\"text/javascript\"><!--
\$('.date').datetimepicker();
//--></script>
";
        // line 138
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "marketing/marketing_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  359 => 138,  330 => 112,  317 => 102,  313 => 101,  306 => 96,  300 => 93,  297 => 92,  294 => 91,  283 => 88,  279 => 87,  275 => 86,  271 => 85,  267 => 84,  263 => 83,  260 => 82,  254 => 81,  248 => 79,  246 => 78,  243 => 77,  238 => 76,  236 => 75,  229 => 71,  211 => 70,  207 => 69,  203 => 68,  185 => 67,  167 => 66,  158 => 60,  153 => 58,  143 => 51,  129 => 44,  124 => 42,  114 => 39,  104 => 36,  98 => 33,  93 => 30,  85 => 26,  82 => 25,  74 => 21,  72 => 20,  66 => 16,  55 => 14,  51 => 13,  45 => 10,  38 => 8,  32 => 7,  28 => 6,  19 => 1,);
    }
}
/* {{ header }}{{ column_left }}*/
/* <div id="content">*/
/*   <div class="page-header">*/
/*     <div class="container-fluid">*/
/*       <div class="pull-right">*/
/*         <button type="button" data-toggle="tooltip" title="{{ button_filter }}" onclick="$('#filter-marketing').toggleClass('d-none');" class="btn btn-light d-md-none"><i class="fa fa-filter"></i></button>*/
/*         <a href="{{ add }}" data-toggle="tooltip" title="{{ button_add }}" class="btn btn-primary"><i class="fa fa-plus"></i></a>*/
/*         <button type="button" data-toggle="tooltip" title="{{ button_delete }}" class="btn btn-danger" onclick="confirm('{{ text_confirm }}') ? $('#form-marketing').submit() : false;"><i class="fa fa-trash-o"></i></button>*/
/*       </div>*/
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
/*   <div class="container-fluid">{% if error_warning %}*/
/*       <div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> {{ error_warning }}*/
/*         <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*       </div>*/
/*     {% endif %}*/
/*     {% if success %}*/
/*       <div class="alert alert-success alert-dismissible"><i class="fa fa-check-circle"></i> {{ success }}*/
/*         <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*       </div>*/
/*     {% endif %}*/
/*     <div class="row">*/
/*       <div id="filter-marketing" class="col-md-3 col-sm-12 order-md-9 d-none d-md-block">*/
/*         <div class="card">*/
/*           <div class="card-header"><i class="fa fa-filter"></i> {{ text_filter }}</div>*/
/*           <div class="card-body">*/
/*             <div class="form-group">*/
/*               <label class="col-form-label" for="input-name">{{ entry_name }}</label> <input type="text" name="filter_name" value="{{ filter_name }}" placeholder="{{ entry_name }}" id="input-name" class="form-control"/>*/
/*             </div>*/
/*             <div class="form-group">*/
/*               <label class="col-form-label" for="input-code">{{ entry_code }}</label> <input type="text" name="filter_code" value="{{ filter_code }}" placeholder="{{ entry_code }}" id="input-code" class="form-control"/>*/
/*             </div>*/
/*             <div class="form-group">*/
/*               <label class="col-form-label" for="input-date-added">{{ entry_date_added }}</label>*/
/*               <div class="input-group date">*/
/*                 <input type="text" name="filter_date_added" value="{{ filter_date_added }}" placeholder="{{ entry_date_added }}" data-date-format="YYYY-MM-DD" data-locale="{{ datepicker }}" class="form-control"/>*/
/*                 <div class="input-group-append">*/
/*                   <button type="button" class="btn btn-light"><i class="fa fa-calendar"></i></button>*/
/*                 </div>*/
/*               </div>*/
/*             </div>*/
/*             <div class="form-group text-right">*/
/*               <button type="button" id="button-filter" class="btn btn-light"><i class="fa fa-filter"></i> {{ button_filter }}</button>*/
/*             </div>*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/*       <div class="col-md-9 col-sm-12">*/
/*         <div class="card">*/
/*           <div class="card-header"><i class="fa fa-list"></i> {{ text_list }}</div>*/
/*           <div class="card-body">*/
/*             <form action="{{ delete }}" method="post" enctype="multipart/form-data" id="form-marketing">*/
/*               <div class="table-responsive">*/
/*                 <table class="table table-bordered table-hover">*/
/*                   <thead>*/
/*                     <tr>*/
/*                       <td style="width: 1px;" class="text-center"><input type="checkbox" onclick="$('input[name*=\'selected\']').trigger('click');"/></td>*/
/*                       <td class="text-left">{% if sort == 'm.name' %} <a href="{{ sort_name }}" class="{{ order|lower }}">{{ column_name }}</a> {% else %} <a href="{{ sort_name }}">{{ column_name }}</a> {% endif %}</td>*/
/*                       <td class="text-left">{% if sort == 'm.code' %} <a href="{{ sort_code }}" class="{{ order|lower }}">{{ column_code }}</a> {% else %} <a href="{{ sort_code }}">{{ column_code }}</a> {% endif %}</td>*/
/*                       <td class="text-right">{{ column_clicks }}</td>*/
/*                       <td class="text-right">{{ column_orders }}</td>*/
/*                       <td class="text-left">{% if sort == 'm.date_added' %} <a href="{{ sort_date_added }}" class="{{ order|lower }}">{{ column_date_added }}</a> {% else %} <a href="{{ sort_date_added }}">{{ column_date_added }}</a> {% endif %}</td>*/
/*                       <td class="text-right">{{ column_action }}</td>*/
/*                     </tr>*/
/*                   </thead>*/
/*                   <tbody>*/
/*                     {% if marketings %}*/
/*                       {% for marketing in marketings %}*/
/*                         <tr>*/
/*                           <td class="text-center">{% if marketing.marketing_id in selected %}*/
/*                               <input type="checkbox" name="selected[]" value="{{ marketing.marketing_id }}" checked="checked"/>*/
/*                             {% else %}*/
/*                               <input type="checkbox" name="selected[]" value="{{ marketing.marketing_id }}"/>*/
/*                             {% endif %}</td>*/
/*                           <td class="text-left">{{ marketing.name }}</td>*/
/*                           <td class="text-left">{{ marketing.code }}</td>*/
/*                           <td class="text-right">{{ marketing.clicks }}</td>*/
/*                           <td class="text-right">{{ marketing.orders }}</td>*/
/*                           <td class="text-left">{{ marketing.date_added }}</td>*/
/*                           <td class="text-right"><a href="{{ marketing.edit }}" data-toggle="tooltip" title="{{ button_edit }}" class="btn btn-primary"><i class="fa fa-pencil"></i></a></td>*/
/*                         </tr>*/
/*                       {% endfor %}*/
/*                     {% else %}*/
/*                       <tr>*/
/*                         <td class="text-center" colspan="8">{{ text_no_results }}</td>*/
/*                       </tr>*/
/*                     {% endif %}*/
/*                   </tbody>*/
/*                 </table>*/
/*               </div>*/
/*             </form>*/
/*             <div class="row">*/
/*               <div class="col-sm-6 text-left">{{ pagination }}</div>*/
/*               <div class="col-sm-6 text-right">{{ results }}</div>*/
/*             </div>*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* <script type="text/javascript"><!--*/
/* $('#button-filter').on('click', function() {*/
/* 	url = 'index.php?route=marketing/marketing&user_token={{ user_token }}';*/
/* */
/* 	var filter_name = $('input[name=\'filter_name\']').val();*/
/* */
/* 	if (filter_name) {*/
/* 		url += '&filter_name=' + encodeURIComponent(filter_name);*/
/* 	}*/
/* */
/* 	var filter_code = $('input[name=\'filter_code\']').val();*/
/* */
/* 	if (filter_code) {*/
/* 		url += '&filter_code=' + encodeURIComponent(filter_code);*/
/* 	}*/
/* */
/* 	var filter_date_added = $('input[name=\'filter_date_added\']').val();*/
/* */
/* 	if (filter_date_added) {*/
/* 		url += '&filter_date_added=' + encodeURIComponent(filter_date_added);*/
/* 	}*/
/* */
/* 	location = url;*/
/* });*/
/* //--></script>*/
/* <script type="text/javascript"><!--*/
/* $('.date').datetimepicker();*/
/* //--></script>*/
/* {{ footer }}*/
