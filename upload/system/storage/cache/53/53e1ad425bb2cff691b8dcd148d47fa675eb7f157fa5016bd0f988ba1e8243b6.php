<?php

/* customer/customer_list.twig */
class __TwigTemplate_acda979a28ba72e532ad384beaa96573a8503b8fac516242e4f2aeb2e47f708f extends Twig_Template
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
        echo "\" onclick=\"\$('#filter-customer').toggleClass('d-none');\" class=\"btn btn-light d-md-none d-lg-none\"><i class=\"fa fa-filter\"></i></button>
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
        echo "') ? \$('#form-customer').submit() : false;\"><i class=\"fa fa-trash-o\"></i></button>
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
      <div id=\"filter-customer\" class=\"col-md-3 col-sm-12 order-md-9 d-none d-md-block\">
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
              <label class=\"col-form-label\" for=\"input-email\">";
        // line 39
        echo (isset($context["entry_email"]) ? $context["entry_email"] : null);
        echo "</label> <input type=\"text\" name=\"filter_email\" value=\"";
        echo (isset($context["filter_email"]) ? $context["filter_email"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_email"]) ? $context["entry_email"] : null);
        echo "\" id=\"input-email\" class=\"form-control\"/>
            </div>
            <div class=\"form-group\">
              <label class=\"col-form-label\" for=\"input-customer-group\">";
        // line 42
        echo (isset($context["entry_customer_group"]) ? $context["entry_customer_group"] : null);
        echo "</label> <select name=\"filter_customer_group_id\" id=\"input-customer-group\" class=\"form-control\">
                <option value=\"\"></option>
                ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["customer_groups"]) ? $context["customer_groups"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 45
            echo "                  ";
            if (($this->getAttribute($context["customer_group"], "customer_group_id", array()) == (isset($context["filter_customer_group_id"]) ? $context["filter_customer_group_id"] : null))) {
                // line 46
                echo "                    <option value=\"";
                echo $this->getAttribute($context["customer_group"], "customer_group_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["customer_group"], "name", array());
                echo "</option>
                  ";
            } else {
                // line 48
                echo "                    <option value=\"";
                echo $this->getAttribute($context["customer_group"], "customer_group_id", array());
                echo "\">";
                echo $this->getAttribute($context["customer_group"], "name", array());
                echo "</option>
                  ";
            }
            // line 50
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "              </select>
            </div>
            <div class=\"form-group\">
              <label class=\"col-form-label\" for=\"input-status\">";
        // line 54
        echo (isset($context["entry_status"]) ? $context["entry_status"] : null);
        echo "</label> <select name=\"filter_status\" id=\"input-status\" class=\"form-control\">
                <option value=\"\"></option>
                ";
        // line 56
        if (((isset($context["filter_status"]) ? $context["filter_status"] : null) == "1")) {
            // line 57
            echo "                  <option value=\"1\" selected=\"selected\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                ";
        } else {
            // line 59
            echo "                  <option value=\"1\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                ";
        }
        // line 61
        echo "                ";
        if (((isset($context["filter_status"]) ? $context["filter_status"] : null) == "0")) {
            // line 62
            echo "                  <option value=\"0\" selected=\"selected\">";
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                ";
        } else {
            // line 64
            echo "                  <option value=\"0\">";
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                ";
        }
        // line 66
        echo "              </select>
            </div>
            <div class=\"form-group\">
              <label class=\"col-form-label\" for=\"input-ip\">";
        // line 69
        echo (isset($context["entry_ip"]) ? $context["entry_ip"] : null);
        echo "</label> <input type=\"text\" name=\"filter_ip\" value=\"";
        echo (isset($context["filter_ip"]) ? $context["filter_ip"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_ip"]) ? $context["entry_ip"] : null);
        echo "\" id=\"input-ip\" class=\"form-control\"/>
            </div>
            <div class=\"form-group\">
              <label class=\"col-form-label\" for=\"input-date-added\">";
        // line 72
        echo (isset($context["entry_date_added"]) ? $context["entry_date_added"] : null);
        echo "</label>
              <div class=\"input-group date\">
                <input type=\"text\" name=\"filter_date_added\" value=\"";
        // line 74
        echo (isset($context["filter_date_added"]) ? $context["filter_date_added"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_date_added"]) ? $context["entry_date_added"] : null);
        echo "\" data-date-format=\"YYYY-MM-DD\" data-locale=\"";
        echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
        echo "\" id=\"input-date-added\" class=\"form-control\"/>
                <div class=\"input-group-append\">
                  <button type=\"button\" class=\"btn btn-light\"><i class=\"fa fa-calendar\"></i></button>
                </div>
              </div>
            </div>
            <div class=\"form-group text-right\">
              <button type=\"button\" id=\"button-filter\" class=\"btn btn-light\"><i class=\"fa fa-filter\"></i> ";
        // line 81
        echo (isset($context["button_filter"]) ? $context["button_filter"] : null);
        echo "</button>
            </div>
          </div>
        </div>
      </div>
      <div class=\"col-md-9 col-sm-12\">
        <div class=\"card\">
          <div class=\"card-header\"><i class=\"fa fa-list\"></i> ";
        // line 88
        echo (isset($context["text_list"]) ? $context["text_list"] : null);
        echo "</div>
          <div class=\"card-body\">
            <form action=\"";
        // line 90
        echo (isset($context["delete"]) ? $context["delete"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-customer\">
              <div class=\"table-responsive\">
                <table class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td style=\"width: 1px;\" class=\"text-center\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').trigger('click');\"/></td>
                      <td class=\"text-left\">";
        // line 96
        if (((isset($context["sort"]) ? $context["sort"] : null) == "name")) {
            echo "<a href=\"";
            echo (isset($context["sort_name"]) ? $context["sort_name"] : null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, (isset($context["order"]) ? $context["order"] : null));
            echo "\">";
            echo (isset($context["column_name"]) ? $context["column_name"] : null);
            echo "</a>";
        } else {
            echo "<a href=\"";
            echo (isset($context["sort_name"]) ? $context["sort_name"] : null);
            echo "\">";
            echo (isset($context["column_name"]) ? $context["column_name"] : null);
            echo "</a>";
        }
        echo "</td>
                      <td class=\"text-left\">";
        // line 97
        if (((isset($context["sort"]) ? $context["sort"] : null) == "c.email")) {
            echo "<a href=\"";
            echo (isset($context["sort_email"]) ? $context["sort_email"] : null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, (isset($context["order"]) ? $context["order"] : null));
            echo "\">";
            echo (isset($context["column_email"]) ? $context["column_email"] : null);
            echo "</a>";
        } else {
            echo "<a href=\"";
            echo (isset($context["sort_email"]) ? $context["sort_email"] : null);
            echo "\">";
            echo (isset($context["column_email"]) ? $context["column_email"] : null);
            echo "</a>";
        }
        echo "</td>
                      <td class=\"text-left\">";
        // line 98
        if (((isset($context["sort"]) ? $context["sort"] : null) == "customer_group")) {
            echo "<a href=\"";
            echo (isset($context["sort_customer_group"]) ? $context["sort_customer_group"] : null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, (isset($context["order"]) ? $context["order"] : null));
            echo "\">";
            echo (isset($context["column_customer_group"]) ? $context["column_customer_group"] : null);
            echo "</a> ";
        } else {
            echo " <a href=\"";
            echo (isset($context["sort_customer_group"]) ? $context["sort_customer_group"] : null);
            echo "\">";
            echo (isset($context["column_customer_group"]) ? $context["column_customer_group"] : null);
            echo "</a>";
        }
        echo "</td>
                      <td class=\"text-left\">";
        // line 99
        if (((isset($context["sort"]) ? $context["sort"] : null) == "c.status")) {
            echo "<a href=\"";
            echo (isset($context["sort_status"]) ? $context["sort_status"] : null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, (isset($context["order"]) ? $context["order"] : null));
            echo "\">";
            echo (isset($context["column_status"]) ? $context["column_status"] : null);
            echo "</a>";
        } else {
            echo "<a href=\"";
            echo (isset($context["sort_status"]) ? $context["sort_status"] : null);
            echo "\">";
            echo (isset($context["column_status"]) ? $context["column_status"] : null);
            echo "</a>";
        }
        echo "</td>
                      <td class=\"text-left\">";
        // line 100
        if (((isset($context["sort"]) ? $context["sort"] : null) == "c.ip")) {
            echo "<a href=\"";
            echo (isset($context["sort_ip"]) ? $context["sort_ip"] : null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, (isset($context["order"]) ? $context["order"] : null));
            echo "\">";
            echo (isset($context["column_ip"]) ? $context["column_ip"] : null);
            echo "</a>";
        } else {
            echo "<a href=\"";
            echo (isset($context["sort_ip"]) ? $context["sort_ip"] : null);
            echo "\">";
            echo (isset($context["column_ip"]) ? $context["column_ip"] : null);
            echo "</a>";
        }
        echo "</td>
                      <td class=\"text-left\">";
        // line 101
        if (((isset($context["sort"]) ? $context["sort"] : null) == "c.date_added")) {
            echo "<a href=\"";
            echo (isset($context["sort_date_added"]) ? $context["sort_date_added"] : null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, (isset($context["order"]) ? $context["order"] : null));
            echo "\">";
            echo (isset($context["column_date_added"]) ? $context["column_date_added"] : null);
            echo "</a>";
        } else {
            echo "<a href=\"";
            echo (isset($context["sort_date_added"]) ? $context["sort_date_added"] : null);
            echo "\">";
            echo (isset($context["column_date_added"]) ? $context["column_date_added"] : null);
            echo "</a>";
        }
        echo "</td>
                      <td class=\"text-right\">";
        // line 102
        echo (isset($context["column_action"]) ? $context["column_action"] : null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>
                    ";
        // line 106
        if ((isset($context["customers"]) ? $context["customers"] : null)) {
            // line 107
            echo "                      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["customers"]) ? $context["customers"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["customer"]) {
                // line 108
                echo "                        <tr>
                          <td class=\"text-center\">";
                // line 109
                if (twig_in_filter($this->getAttribute($context["customer"], "customer_id", array()), (isset($context["selected"]) ? $context["selected"] : null))) {
                    // line 110
                    echo "                              <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo $this->getAttribute($context["customer"], "customer_id", array());
                    echo "\" checked=\"checked\"/>
                            ";
                } else {
                    // line 112
                    echo "                              <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo $this->getAttribute($context["customer"], "customer_id", array());
                    echo "\"/>
                            ";
                }
                // line 113
                echo "</td>
                          <td class=\"text-left\">";
                // line 114
                echo $this->getAttribute($context["customer"], "name", array());
                echo "</td>
                          <td class=\"text-left\">";
                // line 115
                echo $this->getAttribute($context["customer"], "email", array());
                echo "</td>
                          <td class=\"text-left\">";
                // line 116
                echo $this->getAttribute($context["customer"], "customer_group", array());
                echo "</td>
                          <td class=\"text-left\">";
                // line 117
                echo $this->getAttribute($context["customer"], "status", array());
                echo "</td>
                          <td class=\"text-left\">";
                // line 118
                echo $this->getAttribute($context["customer"], "ip", array());
                echo "</td>
                          <td class=\"text-left\">";
                // line 119
                echo $this->getAttribute($context["customer"], "date_added", array());
                echo "</td>
                          <td class=\"text-right\">
                            <div class=\"btn-group\">
                              <a href=\"";
                // line 122
                echo $this->getAttribute($context["customer"], "edit", array());
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo (isset($context["button_edit"]) ? $context["button_edit"] : null);
                echo "\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\"></i></a>
                              <button type=\"button\" data-toggle=\"dropdown\" class=\"btn btn-primary dropdown-toggle dropdown-toggle-split\"><span class=\"caret\"></span></button>
                              <div class=\"dropdown-menu dropdown-menu-right\">
                                <h6 class=\"dropdown-header\">";
                // line 125
                echo (isset($context["text_option"]) ? $context["text_option"] : null);
                echo "</h6>
                                ";
                // line 126
                if ($this->getAttribute($context["customer"], "unlock", array())) {
                    // line 127
                    echo "                                  <a href=\"";
                    echo $this->getAttribute($context["customer"], "unlock", array());
                    echo "\" class=\"dropdown-item\"><i class=\"fa fa-unlock\"></i> ";
                    echo (isset($context["text_unlock"]) ? $context["text_unlock"] : null);
                    echo "</a>
                                ";
                } else {
                    // line 129
                    echo "                                  <a href=\"#\" class=\"dropdown-item disabled\"><i class=\"fa fa-unlock\"></i> ";
                    echo (isset($context["text_unlock"]) ? $context["text_unlock"] : null);
                    echo "</a>
                                ";
                }
                // line 131
                echo "                                <div class=\"divider\"></div>
                                <h6 class=\"dropdown-header\">";
                // line 132
                echo (isset($context["text_login"]) ? $context["text_login"] : null);
                echo "</h6>
                                ";
                // line 133
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["customer"], "store", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
                    // line 134
                    echo "                                  <a href=\"";
                    echo $this->getAttribute($context["store"], "href", array());
                    echo "\" target=\"_blank\" class=\"dropdown-item\"><i class=\"fa fa-lock\"></i> ";
                    echo $this->getAttribute($context["store"], "name", array());
                    echo "</a>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 136
                echo "                              </div>
                            </div>
                          </td>
                        </tr>
                      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 141
            echo "                    ";
        } else {
            // line 142
            echo "                      <tr>
                        <td class=\"text-center\" colspan=\"8\">";
            // line 143
            echo (isset($context["text_no_results"]) ? $context["text_no_results"] : null);
            echo "</td>
                      </tr>
                    ";
        }
        // line 146
        echo "                  </tbody>
                </table>
              </div>
            </form>
            <div class=\"row\">
              <div class=\"col-sm-6 text-left\">";
        // line 151
        echo (isset($context["pagination"]) ? $context["pagination"] : null);
        echo "</div>
              <div class=\"col-sm-6 text-right\">";
        // line 152
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
\turl = 'index.php?route=customer/customer&user_token=";
        // line 162
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "';

\tvar filter_name = \$('input[name=\\'filter_name\\']').val();

\tif (filter_name) {
\t\turl += '&filter_name=' + encodeURIComponent(filter_name);
\t}

\tvar filter_email = \$('input[name=\\'filter_email\\']').val();

\tif (filter_email) {
\t\turl += '&filter_email=' + encodeURIComponent(filter_email);
\t}

\tvar filter_customer_group_id = \$('select[name=\\'filter_customer_group_id\\']').val();

\tif (filter_customer_group_id !== '') {
\t\turl += '&filter_customer_group_id=' + encodeURIComponent(filter_customer_group_id);
\t}

\tvar filter_status = \$('select[name=\\'filter_status\\']').val();

\tif (filter_status !== '') {
\t\turl += '&filter_status=' + encodeURIComponent(filter_status);
\t}

\tvar filter_ip = \$('input[name=\\'filter_ip\\']').val();

\tif (filter_ip) {
\t\turl += '&filter_ip=' + encodeURIComponent(filter_ip);
\t}

\tvar filter_date_added = \$('input[name=\\'filter_date_added\\']').val();

\tif (filter_date_added) {
\t\turl += '&filter_date_added=' + encodeURIComponent(filter_date_added);
\t}

\tlocation = url;
});
//--></script>
<script type=\"text/javascript\"><!--
\$('input[name=\\'filter_name\\']').autocomplete({
\t'source': function(request, response) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=customer/customer/autocomplete&user_token=";
        // line 207
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
\t\t\$('input[name=\\'filter_name\\']').val(item['label']);
\t}
});
\$('input[name=\\'filter_email\\']').autocomplete({
\t'source': function(request, response) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=customer/customer/autocomplete&user_token=";
        // line 226
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&filter_email=' + encodeURIComponent(request),
\t\t\tdataType: 'json',
\t\t\tsuccess: function(json) {
\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\treturn {
\t\t\t\t\t\tlabel: item['email'],
\t\t\t\t\t\tvalue: item['customer_id']
\t\t\t\t\t}
\t\t\t\t}));
\t\t\t}
\t\t});
\t},
\t'select': function(item) {
\t\t\$('input[name=\\'filter_email\\']').val(item['label']);
\t}
});
//--></script>
<script type=\"text/javascript\"><!--
\$('.date').datetimepicker();
//--></script>
";
        // line 246
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo " ";
    }

    public function getTemplateName()
    {
        return "customer/customer_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  612 => 246,  589 => 226,  567 => 207,  519 => 162,  506 => 152,  502 => 151,  495 => 146,  489 => 143,  486 => 142,  483 => 141,  473 => 136,  462 => 134,  458 => 133,  454 => 132,  451 => 131,  445 => 129,  437 => 127,  435 => 126,  431 => 125,  423 => 122,  417 => 119,  413 => 118,  409 => 117,  405 => 116,  401 => 115,  397 => 114,  394 => 113,  388 => 112,  382 => 110,  380 => 109,  377 => 108,  372 => 107,  370 => 106,  363 => 102,  345 => 101,  327 => 100,  309 => 99,  291 => 98,  273 => 97,  255 => 96,  246 => 90,  241 => 88,  231 => 81,  217 => 74,  212 => 72,  202 => 69,  197 => 66,  191 => 64,  185 => 62,  182 => 61,  176 => 59,  170 => 57,  168 => 56,  163 => 54,  158 => 51,  152 => 50,  144 => 48,  136 => 46,  133 => 45,  129 => 44,  124 => 42,  114 => 39,  104 => 36,  98 => 33,  93 => 30,  85 => 26,  82 => 25,  74 => 21,  72 => 20,  66 => 16,  55 => 14,  51 => 13,  45 => 10,  38 => 8,  32 => 7,  28 => 6,  19 => 1,);
    }
}
/* {{ header }}{{ column_left }}*/
/* <div id="content">*/
/*   <div class="page-header">*/
/*     <div class="container-fluid">*/
/*       <div class="pull-right">*/
/*         <button type="button" data-toggle="tooltip" title="{{ button_filter }}" onclick="$('#filter-customer').toggleClass('d-none');" class="btn btn-light d-md-none d-lg-none"><i class="fa fa-filter"></i></button>*/
/*         <a href="{{ add }}" data-toggle="tooltip" title="{{ button_add }}" class="btn btn-primary"><i class="fa fa-plus"></i></a>*/
/*         <button type="button" data-toggle="tooltip" title="{{ button_delete }}" class="btn btn-danger" onclick="confirm('{{ text_confirm }}') ? $('#form-customer').submit() : false;"><i class="fa fa-trash-o"></i></button>*/
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
/*       <div id="filter-customer" class="col-md-3 col-sm-12 order-md-9 d-none d-md-block">*/
/*         <div class="card">*/
/*           <div class="card-header"><i class="fa fa-filter"></i> {{ text_filter }}</div>*/
/*           <div class="card-body">*/
/*             <div class="form-group">*/
/*               <label class="col-form-label" for="input-name">{{ entry_name }}</label> <input type="text" name="filter_name" value="{{ filter_name }}" placeholder="{{ entry_name }}" id="input-name" class="form-control"/>*/
/*             </div>*/
/*             <div class="form-group">*/
/*               <label class="col-form-label" for="input-email">{{ entry_email }}</label> <input type="text" name="filter_email" value="{{ filter_email }}" placeholder="{{ entry_email }}" id="input-email" class="form-control"/>*/
/*             </div>*/
/*             <div class="form-group">*/
/*               <label class="col-form-label" for="input-customer-group">{{ entry_customer_group }}</label> <select name="filter_customer_group_id" id="input-customer-group" class="form-control">*/
/*                 <option value=""></option>*/
/*                 {% for customer_group in customer_groups %}*/
/*                   {% if customer_group.customer_group_id == filter_customer_group_id %}*/
/*                     <option value="{{ customer_group.customer_group_id }}" selected="selected">{{ customer_group.name }}</option>*/
/*                   {% else %}*/
/*                     <option value="{{ customer_group.customer_group_id }}">{{ customer_group.name }}</option>*/
/*                   {% endif %}*/
/*                 {% endfor %}*/
/*               </select>*/
/*             </div>*/
/*             <div class="form-group">*/
/*               <label class="col-form-label" for="input-status">{{ entry_status }}</label> <select name="filter_status" id="input-status" class="form-control">*/
/*                 <option value=""></option>*/
/*                 {% if filter_status == '1' %}*/
/*                   <option value="1" selected="selected">{{ text_enabled }}</option>*/
/*                 {% else %}*/
/*                   <option value="1">{{ text_enabled }}</option>*/
/*                 {% endif %}*/
/*                 {% if filter_status == '0' %}*/
/*                   <option value="0" selected="selected">{{ text_disabled }}</option>*/
/*                 {% else %}*/
/*                   <option value="0">{{ text_disabled }}</option>*/
/*                 {% endif %}*/
/*               </select>*/
/*             </div>*/
/*             <div class="form-group">*/
/*               <label class="col-form-label" for="input-ip">{{ entry_ip }}</label> <input type="text" name="filter_ip" value="{{ filter_ip }}" placeholder="{{ entry_ip }}" id="input-ip" class="form-control"/>*/
/*             </div>*/
/*             <div class="form-group">*/
/*               <label class="col-form-label" for="input-date-added">{{ entry_date_added }}</label>*/
/*               <div class="input-group date">*/
/*                 <input type="text" name="filter_date_added" value="{{ filter_date_added }}" placeholder="{{ entry_date_added }}" data-date-format="YYYY-MM-DD" data-locale="{{ datepicker }}" id="input-date-added" class="form-control"/>*/
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
/*             <form action="{{ delete }}" method="post" enctype="multipart/form-data" id="form-customer">*/
/*               <div class="table-responsive">*/
/*                 <table class="table table-bordered table-hover">*/
/*                   <thead>*/
/*                     <tr>*/
/*                       <td style="width: 1px;" class="text-center"><input type="checkbox" onclick="$('input[name*=\'selected\']').trigger('click');"/></td>*/
/*                       <td class="text-left">{% if sort == 'name' %}<a href="{{ sort_name }}" class="{{ order|lower }}">{{ column_name }}</a>{% else %}<a href="{{ sort_name }}">{{ column_name }}</a>{% endif %}</td>*/
/*                       <td class="text-left">{% if sort == 'c.email' %}<a href="{{ sort_email }}" class="{{ order|lower }}">{{ column_email }}</a>{% else %}<a href="{{ sort_email }}">{{ column_email }}</a>{% endif %}</td>*/
/*                       <td class="text-left">{% if sort == 'customer_group' %}<a href="{{ sort_customer_group }}" class="{{ order|lower }}">{{ column_customer_group }}</a> {% else %} <a href="{{ sort_customer_group }}">{{ column_customer_group }}</a>{% endif %}</td>*/
/*                       <td class="text-left">{% if sort == 'c.status' %}<a href="{{ sort_status }}" class="{{ order|lower }}">{{ column_status }}</a>{% else %}<a href="{{ sort_status }}">{{ column_status }}</a>{% endif %}</td>*/
/*                       <td class="text-left">{% if sort == 'c.ip' %}<a href="{{ sort_ip }}" class="{{ order|lower }}">{{ column_ip }}</a>{% else %}<a href="{{ sort_ip }}">{{ column_ip }}</a>{% endif %}</td>*/
/*                       <td class="text-left">{% if sort == 'c.date_added' %}<a href="{{ sort_date_added }}" class="{{ order|lower }}">{{ column_date_added }}</a>{% else %}<a href="{{ sort_date_added }}">{{ column_date_added }}</a>{% endif %}</td>*/
/*                       <td class="text-right">{{ column_action }}</td>*/
/*                     </tr>*/
/*                   </thead>*/
/*                   <tbody>*/
/*                     {% if customers %}*/
/*                       {% for customer in customers %}*/
/*                         <tr>*/
/*                           <td class="text-center">{% if customer.customer_id in selected %}*/
/*                               <input type="checkbox" name="selected[]" value="{{ customer.customer_id }}" checked="checked"/>*/
/*                             {% else %}*/
/*                               <input type="checkbox" name="selected[]" value="{{ customer.customer_id }}"/>*/
/*                             {% endif %}</td>*/
/*                           <td class="text-left">{{ customer.name }}</td>*/
/*                           <td class="text-left">{{ customer.email }}</td>*/
/*                           <td class="text-left">{{ customer.customer_group }}</td>*/
/*                           <td class="text-left">{{ customer.status }}</td>*/
/*                           <td class="text-left">{{ customer.ip }}</td>*/
/*                           <td class="text-left">{{ customer.date_added }}</td>*/
/*                           <td class="text-right">*/
/*                             <div class="btn-group">*/
/*                               <a href="{{ customer.edit }}" data-toggle="tooltip" title="{{ button_edit }}" class="btn btn-primary"><i class="fa fa-pencil"></i></a>*/
/*                               <button type="button" data-toggle="dropdown" class="btn btn-primary dropdown-toggle dropdown-toggle-split"><span class="caret"></span></button>*/
/*                               <div class="dropdown-menu dropdown-menu-right">*/
/*                                 <h6 class="dropdown-header">{{ text_option }}</h6>*/
/*                                 {% if customer.unlock %}*/
/*                                   <a href="{{ customer.unlock }}" class="dropdown-item"><i class="fa fa-unlock"></i> {{ text_unlock }}</a>*/
/*                                 {% else %}*/
/*                                   <a href="#" class="dropdown-item disabled"><i class="fa fa-unlock"></i> {{ text_unlock }}</a>*/
/*                                 {% endif %}*/
/*                                 <div class="divider"></div>*/
/*                                 <h6 class="dropdown-header">{{ text_login }}</h6>*/
/*                                 {% for store in customer.store %}*/
/*                                   <a href="{{ store.href }}" target="_blank" class="dropdown-item"><i class="fa fa-lock"></i> {{ store.name }}</a>*/
/*                                 {% endfor %}*/
/*                               </div>*/
/*                             </div>*/
/*                           </td>*/
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
/* 	url = 'index.php?route=customer/customer&user_token={{ user_token }}';*/
/* */
/* 	var filter_name = $('input[name=\'filter_name\']').val();*/
/* */
/* 	if (filter_name) {*/
/* 		url += '&filter_name=' + encodeURIComponent(filter_name);*/
/* 	}*/
/* */
/* 	var filter_email = $('input[name=\'filter_email\']').val();*/
/* */
/* 	if (filter_email) {*/
/* 		url += '&filter_email=' + encodeURIComponent(filter_email);*/
/* 	}*/
/* */
/* 	var filter_customer_group_id = $('select[name=\'filter_customer_group_id\']').val();*/
/* */
/* 	if (filter_customer_group_id !== '') {*/
/* 		url += '&filter_customer_group_id=' + encodeURIComponent(filter_customer_group_id);*/
/* 	}*/
/* */
/* 	var filter_status = $('select[name=\'filter_status\']').val();*/
/* */
/* 	if (filter_status !== '') {*/
/* 		url += '&filter_status=' + encodeURIComponent(filter_status);*/
/* 	}*/
/* */
/* 	var filter_ip = $('input[name=\'filter_ip\']').val();*/
/* */
/* 	if (filter_ip) {*/
/* 		url += '&filter_ip=' + encodeURIComponent(filter_ip);*/
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
/* $('input[name=\'filter_name\']').autocomplete({*/
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
/* 		$('input[name=\'filter_name\']').val(item['label']);*/
/* 	}*/
/* });*/
/* $('input[name=\'filter_email\']').autocomplete({*/
/* 	'source': function(request, response) {*/
/* 		$.ajax({*/
/* 			url: 'index.php?route=customer/customer/autocomplete&user_token={{ user_token }}&filter_email=' + encodeURIComponent(request),*/
/* 			dataType: 'json',*/
/* 			success: function(json) {*/
/* 				response($.map(json, function(item) {*/
/* 					return {*/
/* 						label: item['email'],*/
/* 						value: item['customer_id']*/
/* 					}*/
/* 				}));*/
/* 			}*/
/* 		});*/
/* 	},*/
/* 	'select': function(item) {*/
/* 		$('input[name=\'filter_email\']').val(item['label']);*/
/* 	}*/
/* });*/
/* //--></script>*/
/* <script type="text/javascript"><!--*/
/* $('.date').datetimepicker();*/
/* //--></script>*/
/* {{ footer }} */
