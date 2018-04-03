<?php

/* customer/customer_form.twig */
class __TwigTemplate_1c36cb975e44fa0175fd2ede13a385792c4b3cebf3d361a2f74aa351bb5aeb0c extends Twig_Template
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
        <button type=\"submit\" form=\"form-customer\" data-toggle=\"tooltip\" title=\"";
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
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-customer\">
          <ul class=\"nav nav-tabs\">
            <li class=\"nav-item\"><a href=\"#tab-general\" data-toggle=\"tab\" class=\"nav-link active\">";
        // line 29
        echo (isset($context["tab_general"]) ? $context["tab_general"] : null);
        echo "</a></li>
            ";
        // line 30
        if ((isset($context["customer_id"]) ? $context["customer_id"] : null)) {
            // line 31
            echo "              <li class=\"nav-item\"><a href=\"#tab-history\" data-toggle=\"tab\" class=\"nav-link\">";
            echo (isset($context["tab_history"]) ? $context["tab_history"] : null);
            echo "</a></li>
              <li class=\"nav-item\"><a href=\"#tab-transaction\" data-toggle=\"tab\" class=\"nav-link\">";
            // line 32
            echo (isset($context["tab_transaction"]) ? $context["tab_transaction"] : null);
            echo "</a></li>
              <li class=\"nav-item\"><a href=\"#tab-reward\" data-toggle=\"tab\" class=\"nav-link\">";
            // line 33
            echo (isset($context["tab_reward"]) ? $context["tab_reward"] : null);
            echo "</a></li>
              <li class=\"nav-item\"><a href=\"#tab-ip\" data-toggle=\"tab\" class=\"nav-link\">";
            // line 34
            echo (isset($context["tab_ip"]) ? $context["tab_ip"] : null);
            echo "</a></li>
            ";
        }
        // line 36
        echo "          </ul>
          <div class=\"tab-content\">
            <div class=\"tab-pane active\" id=\"tab-general\">
              <div class=\"row\">
                <div class=\"col-sm-2\">
                  <ul class=\"nav nav-pills flex-column\" id=\"address\">
                    <li class=\"nav-item\"><a href=\"#tab-customer\" data-toggle=\"tab\" class=\"nav-link active\">";
        // line 42
        echo (isset($context["tab_general"]) ? $context["tab_general"] : null);
        echo "</a></li>
                    ";
        // line 43
        $context["address_row"] = 1;
        // line 44
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["addresses"]) ? $context["addresses"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["address"]) {
            // line 45
            echo "                      <li class=\"nav-item\"><a href=\"#tab-address";
            echo (isset($context["address_row"]) ? $context["address_row"] : null);
            echo "\" data-toggle=\"tab\" class=\"nav-link\"><i class=\"fa fa-minus-circle\" onclick=\"\$('#address li:first-child a').tab('show'); \$('#address a[href=\\'#tab-address";
            echo (isset($context["address_row"]) ? $context["address_row"] : null);
            echo "\\']').parent().remove(); \$('#tab-address";
            echo (isset($context["address_row"]) ? $context["address_row"] : null);
            echo "').remove();\"></i> ";
            echo (isset($context["tab_address"]) ? $context["tab_address"] : null);
            echo " ";
            echo (isset($context["address_row"]) ? $context["address_row"] : null);
            echo "</a></li>
                      ";
            // line 46
            $context["address_row"] = ((isset($context["address_row"]) ? $context["address_row"] : null) + 1);
            // line 47
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['address'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "                    <li class=\"nav-item\"><a href=\"#\" id=\"address-add\" class=\"nav-link\"><i class=\"fa fa-plus-circle\"></i> ";
        echo (isset($context["button_address_add"]) ? $context["button_address_add"] : null);
        echo "</a></li>
                  </ul>
                </div>
                <div class=\"col-sm-10\">
                  <div class=\"tab-content\">
                    <div class=\"tab-pane active\" id=\"tab-customer\">
                      <fieldset>
                        <legend>";
        // line 55
        echo (isset($context["text_account"]) ? $context["text_account"] : null);
        echo "</legend>
                        <div class=\"form-group row\">
                          <label class=\"col-sm-2 col-form-label\" for=\"input-customer-group\">";
        // line 57
        echo (isset($context["entry_customer_group"]) ? $context["entry_customer_group"] : null);
        echo "</label>
                          <div class=\"col-sm-10\">
                            <select name=\"customer_group_id\" id=\"input-customer-group\" class=\"form-control\">
                              ";
        // line 60
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["customer_groups"]) ? $context["customer_groups"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 61
            echo "                                ";
            if (($this->getAttribute($context["customer_group"], "customer_group_id", array()) == (isset($context["customer_group_id"]) ? $context["customer_group_id"] : null))) {
                // line 62
                echo "                                  <option value=\"";
                echo $this->getAttribute($context["customer_group"], "customer_group_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["customer_group"], "name", array());
                echo "</option>
                                ";
            } else {
                // line 64
                echo "                                  <option value=\"";
                echo $this->getAttribute($context["customer_group"], "customer_group_id", array());
                echo "\">";
                echo $this->getAttribute($context["customer_group"], "name", array());
                echo "</option>
                                ";
            }
            // line 66
            echo "                              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "                            </select>
                          </div>
                        </div>
                        <div class=\"form-group row required\">
                          <label class=\"col-sm-2 col-form-label\" for=\"input-firstname\">";
        // line 71
        echo (isset($context["entry_firstname"]) ? $context["entry_firstname"] : null);
        echo "</label>
                          <div class=\"col-sm-10\">
                            <input type=\"text\" name=\"firstname\" value=\"";
        // line 73
        echo (isset($context["firstname"]) ? $context["firstname"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_firstname"]) ? $context["entry_firstname"] : null);
        echo "\" id=\"input-firstname\" class=\"form-control\"/>
                            ";
        // line 74
        if ((isset($context["error_firstname"]) ? $context["error_firstname"] : null)) {
            // line 75
            echo "                              <div class=\"invalid-tooltip\">";
            echo (isset($context["error_firstname"]) ? $context["error_firstname"] : null);
            echo "</div>
                            ";
        }
        // line 76
        echo "</div>
                        </div>
                        <div class=\"form-group row required\">
                          <label class=\"col-sm-2 col-form-label\" for=\"input-lastname\">";
        // line 79
        echo (isset($context["entry_lastname"]) ? $context["entry_lastname"] : null);
        echo "</label>
                          <div class=\"col-sm-10\">
                            <input type=\"text\" name=\"lastname\" value=\"";
        // line 81
        echo (isset($context["lastname"]) ? $context["lastname"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_lastname"]) ? $context["entry_lastname"] : null);
        echo "\" id=\"input-lastname\" class=\"form-control\"/>
                            ";
        // line 82
        if ((isset($context["error_lastname"]) ? $context["error_lastname"] : null)) {
            // line 83
            echo "                              <div class=\"invalid-tooltip\">";
            echo (isset($context["error_lastname"]) ? $context["error_lastname"] : null);
            echo "</div>
                            ";
        }
        // line 84
        echo "</div>
                        </div>
                        <div class=\"form-group row required\">
                          <label class=\"col-sm-2 col-form-label\" for=\"input-email\">";
        // line 87
        echo (isset($context["entry_email"]) ? $context["entry_email"] : null);
        echo "</label>
                          <div class=\"col-sm-10\">
                            <input type=\"text\" name=\"email\" value=\"";
        // line 89
        echo (isset($context["email"]) ? $context["email"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_email"]) ? $context["entry_email"] : null);
        echo "\" id=\"input-email\" class=\"form-control\"/>
                            ";
        // line 90
        if ((isset($context["error_email"]) ? $context["error_email"] : null)) {
            // line 91
            echo "                              <div class=\"invalid-tooltip\">";
            echo (isset($context["error_email"]) ? $context["error_email"] : null);
            echo "</div>
                            ";
        }
        // line 92
        echo "</div>
                        </div>
                        <div class=\"form-group row required\">
                          <label class=\"col-sm-2 col-form-label\" for=\"input-telephone\">";
        // line 95
        echo (isset($context["entry_telephone"]) ? $context["entry_telephone"] : null);
        echo "</label>
                          <div class=\"col-sm-10\">
                            <input type=\"text\" name=\"telephone\" value=\"";
        // line 97
        echo (isset($context["telephone"]) ? $context["telephone"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_telephone"]) ? $context["entry_telephone"] : null);
        echo "\" id=\"input-telephone\" class=\"form-control\"/>
                            ";
        // line 98
        if ((isset($context["error_telephone"]) ? $context["error_telephone"] : null)) {
            // line 99
            echo "                              <div class=\"invalid-tooltip\">";
            echo (isset($context["error_telephone"]) ? $context["error_telephone"] : null);
            echo "</div>
                            ";
        }
        // line 100
        echo "</div>
                        </div>
                        ";
        // line 102
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["custom_fields"]) ? $context["custom_fields"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
            // line 103
            echo "                          ";
            if (($this->getAttribute($context["custom_field"], "location", array()) == "account")) {
                // line 104
                echo "                            ";
                if (($this->getAttribute($context["custom_field"], "type", array()) == "select")) {
                    // line 105
                    echo "                              <div class=\"form-group row custom-field custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" data-sort=\"";
                    echo $this->getAttribute($context["custom_field"], "sort_order", array());
                    echo "\">
                                <label class=\"col-sm-2 col-form-label\" for=\"input-custom-field";
                    // line 106
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
                                <div class=\"col-sm-10\">
                                  <select name=\"custom_field[";
                    // line 108
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" id=\"input-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-control\">
                                    <option value=\"\">";
                    // line 109
                    echo (isset($context["text_select"]) ? $context["text_select"] : null);
                    echo "</option>
                                    ";
                    // line 110
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["custom_field"], "custom_field_value", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 111
                        echo "                                      ";
                        if (($this->getAttribute((isset($context["account_custom_field"]) ? $context["account_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array") && ($this->getAttribute($context["custom_field_value"], "custom_field_value_id", array()) == $this->getAttribute((isset($context["account_custom_field"]) ? $context["account_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")))) {
                            // line 112
                            echo "                                        <option value=\"";
                            echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                            echo "\" selected=\"selected\">";
                            echo $this->getAttribute($context["custom_field_value"], "name", array());
                            echo "</option>
                                      ";
                        } else {
                            // line 114
                            echo "                                        <option value=\"";
                            echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                            echo "\">";
                            echo $this->getAttribute($context["custom_field_value"], "name", array());
                            echo "</option>
                                      ";
                        }
                        // line 116
                        echo "                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 117
                    echo "                                  </select>
                                  ";
                    // line 118
                    if ($this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                        // line 119
                        echo "                                    <div class=\"invalid-tooltip\">";
                        echo $this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                        echo "</div>
                                  ";
                    }
                    // line 120
                    echo "</div>
                              </div>
                            ";
                }
                // line 123
                echo "
                            ";
                // line 124
                if (($this->getAttribute($context["custom_field"], "type", array()) == "radio")) {
                    // line 125
                    echo "                              <div class=\"form-group row custom-field custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" data-sort=\"";
                    echo $this->getAttribute($context["custom_field"], "sort_order", array());
                    echo "\">
                                <label class=\"col-sm-2 col-form-label\">";
                    // line 126
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
                                <div class=\"col-sm-10\">
                                  <div> ";
                    // line 128
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["custom_field"], "custom_field_value", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 129
                        echo "                                      <div class=\"radio\"> ";
                        if (($this->getAttribute((isset($context["account_custom_field"]) ? $context["account_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array") && ($this->getAttribute($context["custom_field_value"], "custom_field_value_id", array()) == $this->getAttribute((isset($context["account_custom_field"]) ? $context["account_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")))) {
                            // line 130
                            echo "                                          <label> <input type=\"radio\" name=\"custom_field[";
                            echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                            echo "]\" value=\"";
                            echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                            echo "\" checked=\"checked\"/>
                                            ";
                            // line 131
                            echo $this->getAttribute($context["custom_field_value"], "name", array());
                            echo "</label>
                                        ";
                        } else {
                            // line 133
                            echo "                                          <label> <input type=\"radio\" name=\"custom_field[";
                            echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                            echo "]\" value=\"";
                            echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                            echo "\"/>
                                            ";
                            // line 134
                            echo $this->getAttribute($context["custom_field_value"], "name", array());
                            echo "</label>
                                        ";
                        }
                        // line 135
                        echo "</div>
                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 136
                    echo " </div>
                                  ";
                    // line 137
                    if ($this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                        // line 138
                        echo "                                    <div class=\"invalid-tooltip\">";
                        echo $this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                        echo "</div>
                                  ";
                    }
                    // line 139
                    echo "</div>
                              </div>
                            ";
                }
                // line 142
                echo "                            ";
                if (($this->getAttribute($context["custom_field"], "type", array()) == "checkbox")) {
                    // line 143
                    echo "                              <div class=\"form-group row custom-field custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" data-sort=\"";
                    echo $this->getAttribute($context["custom_field"], "sort_order", array());
                    echo "\">
                                <label class=\"col-sm-2 col-form-label\">";
                    // line 144
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
                                <div class=\"col-sm-10\">
                                  <div> ";
                    // line 146
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["custom_field"], "custom_field_value", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 147
                        echo "                                      <div class=\"checkbox\">";
                        if (($this->getAttribute((isset($context["account_custom_field"]) ? $context["account_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array") && twig_in_filter($this->getAttribute($context["custom_field_value"], "custom_field_value_id", array()), $this->getAttribute((isset($context["account_custom_field"]) ? $context["account_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")))) {
                            // line 148
                            echo "                                          <label> <input type=\"checkbox\" name=\"custom_field[";
                            echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                            echo "][]\" value=\"";
                            echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                            echo "\" checked=\"checked\"/>
                                            ";
                            // line 149
                            echo $this->getAttribute($context["custom_field_value"], "name", array());
                            echo "</label>
                                        ";
                        } else {
                            // line 151
                            echo "                                          <label> <input type=\"checkbox\" name=\"custom_field[";
                            echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                            echo "][]\" value=\"";
                            echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                            echo "\"/>
                                            ";
                            // line 152
                            echo $this->getAttribute($context["custom_field_value"], "name", array());
                            echo "</label>
                                        ";
                        }
                        // line 153
                        echo "</div>
                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 154
                    echo "</div>
                                  ";
                    // line 155
                    if ($this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                        // line 156
                        echo "                                    <div class=\"invalid-tooltip\">";
                        echo $this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                        echo "</div>
                                  ";
                    }
                    // line 157
                    echo "</div>
                              </div>
                            ";
                }
                // line 160
                echo "                            ";
                if (($this->getAttribute($context["custom_field"], "type", array()) == "text")) {
                    // line 161
                    echo "                              <div class=\"form-group row custom-field custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" data-sort=\"";
                    echo $this->getAttribute($context["custom_field"], "sort_order", array());
                    echo "\">
                                <label class=\"col-sm-2 col-form-label\" for=\"input-custom-field";
                    // line 162
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
                                <div class=\"col-sm-10\">
                                  <input type=\"text\" name=\"custom_field[";
                    // line 164
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" value=\"";
                    echo (($this->getAttribute((isset($context["account_custom_field"]) ? $context["account_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) ? ($this->getAttribute((isset($context["account_custom_field"]) ? $context["account_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) : ($this->getAttribute($context["custom_field"], "value", array())));
                    echo "\" placeholder=\"";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "\" id=\"input-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-control\"/>
                                  ";
                    // line 165
                    if ($this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                        // line 166
                        echo "                                    <div class=\"invalid-tooltip\">";
                        echo $this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                        echo "</div>
                                  ";
                    }
                    // line 167
                    echo "</div>
                              </div>
                            ";
                }
                // line 170
                echo "                            ";
                if (($this->getAttribute($context["custom_field"], "type", array()) == "textarea")) {
                    // line 171
                    echo "                              <div class=\"form-group row custom-field custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" data-sort=\"";
                    echo $this->getAttribute($context["custom_field"], "sort_order", array());
                    echo "\">
                                <label class=\"col-sm-2 col-form-label\" for=\"input-custom-field";
                    // line 172
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
                                <div class=\"col-sm-10\">
                                  <textarea name=\"custom_field[";
                    // line 174
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" rows=\"5\" placeholder=\"";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "\" id=\"input-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-control\">";
                    echo (($this->getAttribute((isset($context["account_custom_field"]) ? $context["account_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) ? ($this->getAttribute((isset($context["account_custom_field"]) ? $context["account_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) : ($this->getAttribute($context["custom_field"], "value", array())));
                    echo "</textarea>
                                  ";
                    // line 175
                    if ($this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                        // line 176
                        echo "                                    <div class=\"invalid-tooltip\">";
                        echo $this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                        echo "</div>
                                  ";
                    }
                    // line 177
                    echo "</div>
                              </div>
                            ";
                }
                // line 180
                echo "                            ";
                if (($this->getAttribute($context["custom_field"], "type", array()) == "file")) {
                    // line 181
                    echo "                              <div class=\"form-group row custom-field custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" data-sort=\"";
                    echo $this->getAttribute($context["custom_field"], "sort_order", array());
                    echo "\">
                                <label class=\"col-sm-2 col-form-label\">";
                    // line 182
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
                                <div class=\"col-sm-10\">
                                  <button type=\"button\" id=\"button-custom-field";
                    // line 184
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" data-loading-text=\"";
                    echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
                    echo "\" class=\"btn btn-light\"><i class=\"fa fa-upload\"></i> ";
                    echo (isset($context["button_upload"]) ? $context["button_upload"] : null);
                    echo "</button>
                                  <input type=\"hidden\" name=\"custom_field[";
                    // line 185
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" value=\"";
                    echo (($this->getAttribute((isset($context["account_custom_field"]) ? $context["account_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) ? ($this->getAttribute((isset($context["account_custom_field"]) ? $context["account_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) : (""));
                    echo "\" id=\"input-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\"/>
                                  ";
                    // line 186
                    if ($this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                        // line 187
                        echo "                                    <div class=\"invalid-tooltip\">";
                        echo $this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                        echo "</div>
                                  ";
                    }
                    // line 188
                    echo "</div>
                              </div>
                            ";
                }
                // line 191
                echo "                            ";
                if (($this->getAttribute($context["custom_field"], "type", array()) == "date")) {
                    // line 192
                    echo "                              <div class=\"form-group row custom-field custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" data-sort=\"";
                    echo $this->getAttribute($context["custom_field"], "sort_order", array());
                    echo "\">
                                <label class=\"col-sm-2 col-form-label\" for=\"input-custom-field";
                    // line 193
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
                                <div class=\"col-sm-10\">
                                  <div class=\"input-group date\">
                                    <input type=\"text\" name=\"custom_field[";
                    // line 196
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" value=\"";
                    echo (($this->getAttribute((isset($context["account_custom_field"]) ? $context["account_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) ? ($this->getAttribute((isset($context["account_custom_field"]) ? $context["account_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) : ($this->getAttribute($context["custom_field"], "value", array())));
                    echo "\" placeholder=\"";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "\" data-date-format=\"YYYY-MM-DD\" data-locale=\"";
                    echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
                    echo "\" id=\"input-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-control\"/>
                                    <div class=\"input-group-append\">
                                      <button type=\"button\" class=\"btn btn-light\"><i class=\"fa fa-calendar\"></i></button>
                                    </div>
                                  </div>
                                  ";
                    // line 201
                    if ($this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                        // line 202
                        echo "                                    <div class=\"invalid-tooltip\">";
                        echo $this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                        echo "</div>
                                  ";
                    }
                    // line 203
                    echo "</div>
                              </div>
                            ";
                }
                // line 206
                echo "                            ";
                if (($this->getAttribute($context["custom_field"], "type", array()) == "time")) {
                    // line 207
                    echo "                              <div class=\"form-group row custom-field custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" data-sort=\"";
                    echo $this->getAttribute($context["custom_field"], "sort_order", array());
                    echo "\">
                                <label class=\"col-sm-2 col-form-label\" for=\"input-custom-field";
                    // line 208
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
                                <div class=\"col-sm-10\">
                                  <div class=\"input-group time\">
                                    <input type=\"text\" name=\"custom_field[";
                    // line 211
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" value=\"";
                    echo (($this->getAttribute((isset($context["account_custom_field"]) ? $context["account_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) ? ($this->getAttribute((isset($context["account_custom_field"]) ? $context["account_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) : ($this->getAttribute($context["custom_field"], "value", array())));
                    echo "\" placeholder=\"";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "\" data-date-format=\"HH:mm\" data-locale=\"";
                    echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
                    echo "\" id=\"input-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-control\"/>
                                    <div class=\"input-group-append\">
                                      <button type=\"button\" class=\"btn btn-light\"><i class=\"fa fa-calendar\"></i></button>
                                    </div>
                                  </div>
                                  ";
                    // line 216
                    if ($this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                        // line 217
                        echo "                                    <div class=\"invalid-tooltip\">";
                        echo $this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                        echo "</div>
                                  ";
                    }
                    // line 218
                    echo "</div>
                              </div>
                            ";
                }
                // line 221
                echo "                            ";
                if (($this->getAttribute($context["custom_field"], "type", array()) == "datetime")) {
                    // line 222
                    echo "                              <div class=\"form-group row custom-field custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" data-sort=\"";
                    echo $this->getAttribute($context["custom_field"], "sort_order", array());
                    echo "\">
                                <label class=\"col-sm-2 col-form-label\" for=\"input-custom-field";
                    // line 223
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
                                <div class=\"col-sm-10\">
                                  <div class=\"input-group datetime\">
                                    <input type=\"text\" name=\"custom_field[";
                    // line 226
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" value=\"";
                    echo (($this->getAttribute((isset($context["account_custom_field"]) ? $context["account_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) ? ($this->getAttribute((isset($context["account_custom_field"]) ? $context["account_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) : ($this->getAttribute($context["custom_field"], "value", array())));
                    echo "\" placeholder=\"";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "\" data-date-format=\"YYYY-MM-DD HH:mm\" data-locale=\"";
                    echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
                    echo "\" id=\"input-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-control\"/>
                                    <div class=\"input-group-append\">
                                      <button type=\"button\" class=\"btn btn-light\"><i class=\"fa fa-calendar\"></i></button>
                                    </div>
                                  </div>
                                  ";
                    // line 231
                    if ($this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                        // line 232
                        echo "                                    <div class=\"invalid-tooltip\">";
                        echo $this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                        echo "</div>
                                  ";
                    }
                    // line 233
                    echo "</div>
                              </div>
                            ";
                }
                // line 236
                echo "                          ";
            }
            // line 237
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 238
        echo "                      </fieldset>
                      <fieldset>
                        <legend>";
        // line 240
        echo (isset($context["text_password"]) ? $context["text_password"] : null);
        echo "</legend>
                        <div class=\"form-group row required\">
                          <label class=\"col-sm-2 col-form-label\" for=\"input-password\">";
        // line 242
        echo (isset($context["entry_password"]) ? $context["entry_password"] : null);
        echo "</label>
                          <div class=\"col-sm-10\">
                            <input type=\"password\" name=\"password\" value=\"";
        // line 244
        echo (isset($context["password"]) ? $context["password"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_password"]) ? $context["entry_password"] : null);
        echo "\" id=\"input-password\" class=\"form-control\" autocomplete=\"off\"/>
                            ";
        // line 245
        if ((isset($context["error_password"]) ? $context["error_password"] : null)) {
            // line 246
            echo "                              <div class=\"invalid-tooltip\">";
            echo (isset($context["error_password"]) ? $context["error_password"] : null);
            echo "</div>
                            ";
        }
        // line 247
        echo "</div>
                        </div>
                        <div class=\"form-group row required\">
                          <label class=\"col-sm-2 col-form-label\" for=\"input-confirm\">";
        // line 250
        echo (isset($context["entry_confirm"]) ? $context["entry_confirm"] : null);
        echo "</label>
                          <div class=\"col-sm-10\">
                            <input type=\"password\" name=\"confirm\" value=\"";
        // line 252
        echo (isset($context["confirm"]) ? $context["confirm"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_confirm"]) ? $context["entry_confirm"] : null);
        echo "\" autocomplete=\"off\" id=\"input-confirm\" class=\"form-control\"/>
                            ";
        // line 253
        if ((isset($context["error_confirm"]) ? $context["error_confirm"] : null)) {
            // line 254
            echo "                              <div class=\"invalid-tooltip\">";
            echo (isset($context["error_confirm"]) ? $context["error_confirm"] : null);
            echo "</div>
                            ";
        }
        // line 255
        echo "</div>
                        </div>
                      </fieldset>
                      <fieldset>
                        <legend>";
        // line 259
        echo (isset($context["text_other"]) ? $context["text_other"] : null);
        echo "</legend>
                        <div class=\"form-group row\">
                          <label class=\"col-sm-2 col-form-label\" for=\"input-newsletter\">";
        // line 261
        echo (isset($context["entry_newsletter"]) ? $context["entry_newsletter"] : null);
        echo "</label>
                          <div class=\"col-sm-10\">
                            <select name=\"newsletter\" id=\"input-newsletter\" class=\"form-control\">
                              ";
        // line 264
        if ((isset($context["newsletter"]) ? $context["newsletter"] : null)) {
            // line 265
            echo "                                <option value=\"1\" selected=\"selected\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                                <option value=\"0\">";
            // line 266
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                              ";
        } else {
            // line 268
            echo "                                <option value=\"1\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                                <option value=\"0\" selected=\"selected\">";
            // line 269
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                              ";
        }
        // line 271
        echo "                            </select>
                          </div>
                        </div>
                        <div class=\"form-group row\">
                          <label class=\"col-sm-2 col-form-label\" for=\"input-status\">";
        // line 275
        echo (isset($context["entry_status"]) ? $context["entry_status"] : null);
        echo "</label>
                          <div class=\"col-sm-10\">
                            <select name=\"status\" id=\"input-status\" class=\"form-control\">
                              ";
        // line 278
        if ((isset($context["status"]) ? $context["status"] : null)) {
            // line 279
            echo "                                <option value=\"1\" selected=\"selected\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                                <option value=\"0\">";
            // line 280
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                              ";
        } else {
            // line 282
            echo "                                <option value=\"1\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                                <option value=\"0\" selected=\"selected\">";
            // line 283
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                              ";
        }
        // line 285
        echo "                            </select>
                          </div>
                        </div>
                        <div class=\"form-group row\">
                          <label class=\"col-sm-2 col-form-label\" for=\"input-safe\">";
        // line 289
        echo (isset($context["entry_safe"]) ? $context["entry_safe"] : null);
        echo "</label>
                          <div class=\"col-sm-10\">
                            <select name=\"safe\" id=\"input-safe\" class=\"form-control\">
                              ";
        // line 292
        if ((isset($context["safe"]) ? $context["safe"] : null)) {
            // line 293
            echo "                                <option value=\"1\" selected=\"selected\">";
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "</option>
                                <option value=\"0\">";
            // line 294
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "</option>
                              ";
        } else {
            // line 296
            echo "                                <option value=\"1\">";
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "</option>
                                <option value=\"0\" selected=\"selected\">";
            // line 297
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "</option>
                              ";
        }
        // line 299
        echo "                            </select>
                          </div>
                        </div>
                      </fieldset>
                    </div>
                    ";
        // line 304
        $context["address_row"] = 1;
        // line 305
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["addresses"]) ? $context["addresses"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["address"]) {
            // line 306
            echo "                      <div class=\"tab-pane\" id=\"tab-address";
            echo (isset($context["address_row"]) ? $context["address_row"] : null);
            echo "\">
                        <input type=\"hidden\" name=\"address[";
            // line 307
            echo (isset($context["address_row"]) ? $context["address_row"] : null);
            echo "][address_id]\" value=\"";
            echo $this->getAttribute($context["address"], "address_id", array());
            echo "\"/>
                        <div class=\"form-group row required\">
                          <label class=\"col-sm-2 col-form-label\" for=\"input-firstname";
            // line 309
            echo (isset($context["address_row"]) ? $context["address_row"] : null);
            echo "\">";
            echo (isset($context["entry_firstname"]) ? $context["entry_firstname"] : null);
            echo "</label>
                          <div class=\"col-sm-10\">
                            <input type=\"text\" name=\"address[";
            // line 311
            echo (isset($context["address_row"]) ? $context["address_row"] : null);
            echo "][firstname]\" value=\"";
            echo $this->getAttribute($context["address"], "firstname", array());
            echo "\" placeholder=\"";
            echo (isset($context["entry_firstname"]) ? $context["entry_firstname"] : null);
            echo "\" id=\"input-firstname";
            echo (isset($context["address_row"]) ? $context["address_row"] : null);
            echo "\" class=\"form-control\"/>
                            ";
            // line 312
            if ($this->getAttribute($this->getAttribute((isset($context["error_address"]) ? $context["error_address"] : null), (isset($context["address_row"]) ? $context["address_row"] : null), array(), "array"), "firstname", array())) {
                // line 313
                echo "                              <div class=\"invalid-tooltip\">";
                echo $this->getAttribute($this->getAttribute((isset($context["error_address"]) ? $context["error_address"] : null), (isset($context["address_row"]) ? $context["address_row"] : null), array(), "array"), "firstname", array());
                echo "</div>
                            ";
            }
            // line 314
            echo "</div>
                        </div>
                        <div class=\"form-group row required\">
                          <label class=\"col-sm-2 col-form-label\" for=\"input-lastname";
            // line 317
            echo (isset($context["address_row"]) ? $context["address_row"] : null);
            echo "\">";
            echo (isset($context["entry_lastname"]) ? $context["entry_lastname"] : null);
            echo "</label>
                          <div class=\"col-sm-10\">
                            <input type=\"text\" name=\"address[";
            // line 319
            echo (isset($context["address_row"]) ? $context["address_row"] : null);
            echo "][lastname]\" value=\"";
            echo $this->getAttribute($context["address"], "lastname", array());
            echo "\" placeholder=\"";
            echo (isset($context["entry_lastname"]) ? $context["entry_lastname"] : null);
            echo "\" id=\"input-lastname";
            echo (isset($context["address_row"]) ? $context["address_row"] : null);
            echo "\" class=\"form-control\"/>
                            ";
            // line 320
            if ($this->getAttribute($this->getAttribute((isset($context["error_address"]) ? $context["error_address"] : null), (isset($context["address_row"]) ? $context["address_row"] : null), array(), "array"), "lastname", array())) {
                // line 321
                echo "                              <div class=\"invalid-tooltip\">";
                echo $this->getAttribute($this->getAttribute((isset($context["error_address"]) ? $context["error_address"] : null), (isset($context["address_row"]) ? $context["address_row"] : null), array(), "array"), "lastname", array());
                echo "</div>
                            ";
            }
            // line 322
            echo "</div>
                        </div>
                        <div class=\"form-group row\">
                          <label class=\"col-sm-2 col-form-label\" for=\"input-company";
            // line 325
            echo (isset($context["address_row"]) ? $context["address_row"] : null);
            echo "\">";
            echo (isset($context["entry_company"]) ? $context["entry_company"] : null);
            echo "</label>
                          <div class=\"col-sm-10\">
                            <input type=\"text\" name=\"address[";
            // line 327
            echo (isset($context["address_row"]) ? $context["address_row"] : null);
            echo "][company]\" value=\"";
            echo $this->getAttribute($context["address"], "company", array());
            echo "\" placeholder=\"";
            echo (isset($context["entry_company"]) ? $context["entry_company"] : null);
            echo "\" id=\"input-company";
            echo (isset($context["address_row"]) ? $context["address_row"] : null);
            echo "\" class=\"form-control\"/>
                          </div>
                        </div>
                        <div class=\"form-group row required\">
                          <label class=\"col-sm-2 col-form-label\" for=\"input-address-1";
            // line 331
            echo (isset($context["address_row"]) ? $context["address_row"] : null);
            echo "\">";
            echo (isset($context["entry_address_1"]) ? $context["entry_address_1"] : null);
            echo "</label>
                          <div class=\"col-sm-10\">
                            <input type=\"text\" name=\"address[";
            // line 333
            echo (isset($context["address_row"]) ? $context["address_row"] : null);
            echo "][address_1]\" value=\"";
            echo $this->getAttribute($context["address"], "address_1", array());
            echo "\" placeholder=\"";
            echo (isset($context["entry_address_1"]) ? $context["entry_address_1"] : null);
            echo "\" id=\"input-address-1";
            echo (isset($context["address_row"]) ? $context["address_row"] : null);
            echo "\" class=\"form-control\"/>
                            ";
            // line 334
            if ($this->getAttribute($this->getAttribute((isset($context["error_address"]) ? $context["error_address"] : null), (isset($context["address_row"]) ? $context["address_row"] : null), array(), "array"), "address_1", array())) {
                // line 335
                echo "                              <div class=\"invalid-tooltip\">";
                echo $this->getAttribute($this->getAttribute((isset($context["error_address"]) ? $context["error_address"] : null), (isset($context["address_row"]) ? $context["address_row"] : null), array(), "array"), "address_1", array());
                echo "</div>
                            ";
            }
            // line 336
            echo "</div>
                        </div>
                        <div class=\"form-group row\">
                          <label class=\"col-sm-2 col-form-label\" for=\"input-address-2";
            // line 339
            echo (isset($context["address_row"]) ? $context["address_row"] : null);
            echo "\">";
            echo (isset($context["entry_address_2"]) ? $context["entry_address_2"] : null);
            echo "</label>
                          <div class=\"col-sm-10\">
                            <input type=\"text\" name=\"address[";
            // line 341
            echo (isset($context["address_row"]) ? $context["address_row"] : null);
            echo "][address_2]\" value=\"";
            echo $this->getAttribute($context["address"], "address_2", array());
            echo "\" placeholder=\"";
            echo (isset($context["entry_address_2"]) ? $context["entry_address_2"] : null);
            echo "\" id=\"input-address-2";
            echo (isset($context["address_row"]) ? $context["address_row"] : null);
            echo "\" class=\"form-control\"/>
                          </div>
                        </div>
                        <div class=\"form-group row required\">
                          <label class=\"col-sm-2 col-form-label\" for=\"input-city";
            // line 345
            echo (isset($context["address_row"]) ? $context["address_row"] : null);
            echo "\">";
            echo (isset($context["entry_city"]) ? $context["entry_city"] : null);
            echo "</label>
                          <div class=\"col-sm-10\">
                            <input type=\"text\" name=\"address[";
            // line 347
            echo (isset($context["address_row"]) ? $context["address_row"] : null);
            echo "][city]\" value=\"";
            echo $this->getAttribute($context["address"], "city", array());
            echo "\" placeholder=\"";
            echo (isset($context["entry_city"]) ? $context["entry_city"] : null);
            echo "\" id=\"input-city";
            echo (isset($context["address_row"]) ? $context["address_row"] : null);
            echo "\" class=\"form-control\"/>
                            ";
            // line 348
            if ($this->getAttribute($this->getAttribute((isset($context["error_address"]) ? $context["error_address"] : null), (isset($context["address_row"]) ? $context["address_row"] : null), array(), "array"), "city", array())) {
                // line 349
                echo "                              <div class=\"invalid-tooltip\">";
                echo $this->getAttribute($this->getAttribute((isset($context["error_address"]) ? $context["error_address"] : null), (isset($context["address_row"]) ? $context["address_row"] : null), array(), "array"), "city", array());
                echo "</div>
                            ";
            }
            // line 350
            echo "</div>
                        </div>
                        <div class=\"form-group row required\">
                          <label class=\"col-sm-2 col-form-label\" for=\"input-postcode";
            // line 353
            echo (isset($context["address_row"]) ? $context["address_row"] : null);
            echo "\">";
            echo (isset($context["entry_postcode"]) ? $context["entry_postcode"] : null);
            echo "</label>
                          <div class=\"col-sm-10\">
                            <input type=\"text\" name=\"address[";
            // line 355
            echo (isset($context["address_row"]) ? $context["address_row"] : null);
            echo "][postcode]\" value=\"";
            echo $this->getAttribute($context["address"], "postcode", array());
            echo "\" placeholder=\"";
            echo (isset($context["entry_postcode"]) ? $context["entry_postcode"] : null);
            echo "\" id=\"input-postcode";
            echo (isset($context["address_row"]) ? $context["address_row"] : null);
            echo "\" class=\"form-control\"/>
                            ";
            // line 356
            if ($this->getAttribute($this->getAttribute((isset($context["error_address"]) ? $context["error_address"] : null), (isset($context["address_row"]) ? $context["address_row"] : null), array(), "array"), "postcode", array())) {
                // line 357
                echo "                              <div class=\"invalid-tooltip\">";
                echo $this->getAttribute($this->getAttribute((isset($context["error_address"]) ? $context["error_address"] : null), (isset($context["address_row"]) ? $context["address_row"] : null), array(), "array"), "postcode", array());
                echo "</div>
                            ";
            }
            // line 358
            echo "</div>
                        </div>
                        <div class=\"form-group row required\">
                          <label class=\"col-sm-2 col-form-label\" for=\"input-country";
            // line 361
            echo (isset($context["address_row"]) ? $context["address_row"] : null);
            echo "\">";
            echo (isset($context["entry_country"]) ? $context["entry_country"] : null);
            echo "</label>
                          <div class=\"col-sm-10\">
                            <select name=\"address[";
            // line 363
            echo (isset($context["address_row"]) ? $context["address_row"] : null);
            echo "][country_id]\" id=\"input-country";
            echo (isset($context["address_row"]) ? $context["address_row"] : null);
            echo "\" onchange=\"country(this, '";
            echo (isset($context["address_row"]) ? $context["address_row"] : null);
            echo "', '";
            echo $this->getAttribute($context["address"], "zone_id", array());
            echo "');\" class=\"form-control\">
                              <option value=\"\">";
            // line 364
            echo (isset($context["text_select"]) ? $context["text_select"] : null);
            echo "</option>
                              ";
            // line 365
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["countries"]) ? $context["countries"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
                // line 366
                echo "                                ";
                if (($this->getAttribute($context["country"], "country_id", array()) == $this->getAttribute($context["address"], "country_id", array()))) {
                    // line 367
                    echo "                                  <option value=\"";
                    echo $this->getAttribute($context["country"], "country_id", array());
                    echo "\" selected=\"selected\">";
                    echo $this->getAttribute($context["country"], "name", array());
                    echo "</option>
                                ";
                } else {
                    // line 369
                    echo "                                  <option value=\"";
                    echo $this->getAttribute($context["country"], "country_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["country"], "name", array());
                    echo "</option>
                                ";
                }
                // line 371
                echo "                              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 372
            echo "                            </select>
                            ";
            // line 373
            if ($this->getAttribute($this->getAttribute((isset($context["error_address"]) ? $context["error_address"] : null), (isset($context["address_row"]) ? $context["address_row"] : null), array(), "array"), "country", array())) {
                // line 374
                echo "                              <div class=\"invalid-tooltip\">";
                echo $this->getAttribute($this->getAttribute((isset($context["error_address"]) ? $context["error_address"] : null), (isset($context["address_row"]) ? $context["address_row"] : null), array(), "array"), "country", array());
                echo "</div>
                            ";
            }
            // line 375
            echo "</div>
                        </div>
                        <div class=\"form-group row required\">
                          <label class=\"col-sm-2 col-form-label\" for=\"input-zone";
            // line 378
            echo (isset($context["address_row"]) ? $context["address_row"] : null);
            echo "\">";
            echo (isset($context["entry_zone"]) ? $context["entry_zone"] : null);
            echo "</label>
                          <div class=\"col-sm-10\">
                            <select name=\"address[";
            // line 380
            echo (isset($context["address_row"]) ? $context["address_row"] : null);
            echo "][zone_id]\" id=\"input-zone";
            echo (isset($context["address_row"]) ? $context["address_row"] : null);
            echo "\" class=\"form-control\"> </select>
                            ";
            // line 381
            if ($this->getAttribute($this->getAttribute((isset($context["error_address"]) ? $context["error_address"] : null), (isset($context["address_row"]) ? $context["address_row"] : null), array(), "array"), "zone", array())) {
                // line 382
                echo "                              <div class=\"invalid-tooltip\">";
                echo $this->getAttribute($this->getAttribute((isset($context["error_address"]) ? $context["error_address"] : null), (isset($context["address_row"]) ? $context["address_row"] : null), array(), "array"), "zone", array());
                echo "</div>
                            ";
            }
            // line 383
            echo "</div>
                        </div>
                        ";
            // line 385
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["custom_fields"]) ? $context["custom_fields"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
                // line 386
                echo "                          ";
                if (($this->getAttribute($context["custom_field"], "location", array()) == "address")) {
                    // line 387
                    echo "                            ";
                    if (($this->getAttribute($context["custom_field"], "type", array()) == "select")) {
                        // line 388
                        echo "                              <div class=\"form-group row custom-field custom-field";
                        echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                        echo "\" data-sort=\"";
                        echo ($this->getAttribute($context["custom_field"], "sort_order", array()) + 1);
                        echo "\">
                                <label class=\"col-sm-2 col-form-label\" for=\"input-address";
                        // line 389
                        echo (isset($context["address_row"]) ? $context["address_row"] : null);
                        echo "-custom-field";
                        echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                        echo "\">";
                        echo $this->getAttribute($context["custom_field"], "name", array());
                        echo "</label>
                                <div class=\"col-sm-10\">
                                  <select name=\"address[";
                        // line 391
                        echo (isset($context["address_row"]) ? $context["address_row"] : null);
                        echo "][custom_field][";
                        echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                        echo "]\" id=\"input-address";
                        echo (isset($context["address_row"]) ? $context["address_row"] : null);
                        echo "-custom-field";
                        echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                        echo "\" class=\"form-control\">
                                    <option value=\"\">";
                        // line 392
                        echo (isset($context["text_select"]) ? $context["text_select"] : null);
                        echo "</option>
                                    ";
                        // line 393
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["custom_field"], "custom_field_value", array()));
                        foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                            // line 394
                            echo "                                      ";
                            if (($this->getAttribute($this->getAttribute($context["address"], "custom_field", array()), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array") && ($this->getAttribute($context["custom_field_value"], "custom_field_value_id", array()) == $this->getAttribute($this->getAttribute($context["address"], "custom_field", array()), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")))) {
                                // line 395
                                echo "                                        <option value=\"";
                                echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                                echo "\" selected=\"selected\">";
                                echo $this->getAttribute($context["custom_field_value"], "name", array());
                                echo "</option>
                                      ";
                            } else {
                                // line 397
                                echo "                                        <option value=\"";
                                echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                                echo "\">";
                                echo $this->getAttribute($context["custom_field_value"], "name", array());
                                echo "</option>
                                      ";
                            }
                            // line 399
                            echo "                                    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 400
                        echo "                                  </select>
                                  ";
                        // line 401
                        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["error_address"]) ? $context["error_address"] : null), (isset($context["address_row"]) ? $context["address_row"] : null), array(), "array"), "custom_field", array(), "array"), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                            // line 402
                            echo "                                    <div class=\"invalid-tooltip\">";
                            echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["error_address"]) ? $context["error_address"] : null), (isset($context["address_row"]) ? $context["address_row"] : null), array(), "array"), "custom_field", array()), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                            echo "</div>
                                  ";
                        }
                        // line 403
                        echo "</div>
                              </div>
                            ";
                    }
                    // line 406
                    echo "                            ";
                    if (($this->getAttribute($context["custom_field"], "type", array()) == "radio")) {
                        // line 407
                        echo "                              <div class=\"form-group row custom-field custom-field";
                        echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                        echo "\" data-sort=\"";
                        echo ($this->getAttribute($context["custom_field"], "sort_order", array()) + 1);
                        echo "\">
                                <label class=\"col-sm-2 col-form-label\">";
                        // line 408
                        echo $this->getAttribute($context["custom_field"], "name", array());
                        echo "</label>
                                <div class=\"col-sm-10\">
                                  <div> ";
                        // line 410
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["custom_field"], "custom_field_value", array()));
                        foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                            // line 411
                            echo "                                      <div class=\"radio\"> ";
                            if (($this->getAttribute($this->getAttribute($context["address"], "custom_field", array()), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array") && ($this->getAttribute($context["custom_field_value"], "custom_field_value_id", array()) == $this->getAttribute($this->getAttribute($context["address"], "custom_field", array()), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")))) {
                                // line 412
                                echo "                                          <label> <input type=\"radio\" name=\"address[";
                                echo (isset($context["address_row"]) ? $context["address_row"] : null);
                                echo "][custom_field][";
                                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                                echo "]\" value=\"";
                                echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                                echo "\" checked=\"checked\"/>
                                            ";
                                // line 413
                                echo $this->getAttribute($context["custom_field_value"], "name", array());
                                echo "</label>
                                        ";
                            } else {
                                // line 415
                                echo "                                          <label> <input type=\"radio\" name=\"address[";
                                echo (isset($context["address_row"]) ? $context["address_row"] : null);
                                echo "][custom_field][";
                                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                                echo "]\" value=\"";
                                echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                                echo "\"/>
                                            ";
                                // line 416
                                echo $this->getAttribute($context["custom_field_value"], "name", array());
                                echo "</label>
                                        ";
                            }
                            // line 417
                            echo "</div>
                                    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 418
                        echo " </div>
                                  ";
                        // line 419
                        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["error_address"]) ? $context["error_address"] : null), (isset($context["address_row"]) ? $context["address_row"] : null), array(), "array"), "custom_field", array()), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                            // line 420
                            echo "                                    <div class=\"invalid-tooltip\">";
                            echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["error_address"]) ? $context["error_address"] : null), (isset($context["address_row"]) ? $context["address_row"] : null), array(), "array"), "custom_field", array()), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                            echo "</div>
                                  ";
                        }
                        // line 421
                        echo "</div>
                              </div>
                            ";
                    }
                    // line 424
                    echo "                            ";
                    if (($this->getAttribute($context["custom_field"], "type", array()) == "checkbox")) {
                        // line 425
                        echo "                              <div class=\"form-group row custom-field custom-field";
                        echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                        echo "\" data-sort=\"";
                        echo ($this->getAttribute($context["custom_field"], "sort_order", array()) + 1);
                        echo "\">
                                <label class=\"col-sm-2 col-form-label\">";
                        // line 426
                        echo $this->getAttribute($context["custom_field"], "name", array());
                        echo "</label>
                                <div class=\"col-sm-10\">
                                  <div> ";
                        // line 428
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["custom_field"], "custom_field_value", array()));
                        foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                            // line 429
                            echo "                                      <div class=\"checkbox\"> ";
                            if (($this->getAttribute($this->getAttribute($context["address"], "custom_field", array()), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array") && twig_in_filter($this->getAttribute($context["custom_field_value"], "custom_field_value_id", array()), $this->getAttribute($this->getAttribute($context["address"], "custom_field", array()), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")))) {
                                // line 430
                                echo "                                          <label> <input type=\"checkbox\" name=\"address[";
                                echo (isset($context["address_row"]) ? $context["address_row"] : null);
                                echo "][custom_field][";
                                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                                echo "][]\" value=\"";
                                echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                                echo "\" checked=\"checked\"/>
                                            ";
                                // line 431
                                echo $this->getAttribute($context["custom_field_value"], "name", array());
                                echo "</label>
                                        ";
                            } else {
                                // line 433
                                echo "                                          <label> <input type=\"checkbox\" name=\"address[";
                                echo (isset($context["address_row"]) ? $context["address_row"] : null);
                                echo "][custom_field][";
                                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                                echo "][]\" value=\"";
                                echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                                echo "\"/>
                                            ";
                                // line 434
                                echo $this->getAttribute($context["custom_field_value"], "name", array());
                                echo "</label>
                                        ";
                            }
                            // line 435
                            echo "</div>
                                    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 436
                        echo " </div>
                                  ";
                        // line 437
                        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["error_address"]) ? $context["error_address"] : null), (isset($context["address_row"]) ? $context["address_row"] : null), array(), "array"), "custom_field", array(), "array"), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                            // line 438
                            echo "                                    <div class=\"invalid-tooltip\">";
                            echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["error_address"]) ? $context["error_address"] : null), (isset($context["address_row"]) ? $context["address_row"] : null), array(), "array"), "custom_field", array()), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                            echo "</div>
                                  ";
                        }
                        // line 439
                        echo "</div>
                              </div>
                            ";
                    }
                    // line 442
                    echo "                            ";
                    if (($this->getAttribute($context["custom_field"], "type", array()) == "text")) {
                        // line 443
                        echo "                              <div class=\"form-group row custom-field custom-field";
                        echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                        echo "\" data-sort=\"";
                        echo ($this->getAttribute($context["custom_field"], "sort_order", array()) + 1);
                        echo "\">
                                <label class=\"col-sm-2 col-form-label\" for=\"input-address";
                        // line 444
                        echo (isset($context["address_row"]) ? $context["address_row"] : null);
                        echo "-custom-field";
                        echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                        echo "\">";
                        echo $this->getAttribute($context["custom_field"], "name", array());
                        echo "</label>
                                <div class=\"col-sm-10\">
                                  <input type=\"text\" name=\"address[";
                        // line 446
                        echo (isset($context["address_row"]) ? $context["address_row"] : null);
                        echo "][custom_field][";
                        echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                        echo "]\" value=\"";
                        echo (($this->getAttribute($this->getAttribute($context["address"], "custom_field", array()), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) ? ($this->getAttribute($this->getAttribute($context["address"], "custom_field", array()), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) : ($this->getAttribute($context["custom_field"], "value", array())));
                        echo "\" placeholder=\"";
                        echo $this->getAttribute($context["custom_field"], "name", array());
                        echo "\" id=\"input-address";
                        echo (isset($context["address_row"]) ? $context["address_row"] : null);
                        echo "-custom-field";
                        echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                        echo "\" class=\"form-control\"/>
                                  ";
                        // line 447
                        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["error_address"]) ? $context["error_address"] : null), (isset($context["address_row"]) ? $context["address_row"] : null), array(), "array"), "custom_field", array(), "array"), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                            // line 448
                            echo "                                    <div class=\"invalid-tooltip\">";
                            echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["error_address"]) ? $context["error_address"] : null), (isset($context["address_row"]) ? $context["address_row"] : null), array(), "array"), "custom_field", array()), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                            echo "</div>
                                  ";
                        }
                        // line 449
                        echo "</div>
                              </div>
                            ";
                    }
                    // line 452
                    echo "                            ";
                    if (($this->getAttribute($context["custom_field"], "type", array()) == "textarea")) {
                        // line 453
                        echo "                              <div class=\"form-group row custom-field custom-field";
                        echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                        echo "\" data-sort=\"";
                        echo ($this->getAttribute($context["custom_field"], "sort_order", array()) + 1);
                        echo "\">
                                <label class=\"col-sm-2 col-form-label\" for=\"input-address";
                        // line 454
                        echo (isset($context["address_row"]) ? $context["address_row"] : null);
                        echo "-custom-field";
                        echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                        echo "\">";
                        echo $this->getAttribute($context["custom_field"], "name", array());
                        echo "</label>
                                <div class=\"col-sm-10\">
                                  <textarea name=\"address[";
                        // line 456
                        echo (isset($context["address_row"]) ? $context["address_row"] : null);
                        echo "][custom_field][";
                        echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                        echo "]\" rows=\"5\" placeholder=\"";
                        echo $this->getAttribute($context["custom_field"], "name", array());
                        echo "\" id=\"input-address";
                        echo (isset($context["address_row"]) ? $context["address_row"] : null);
                        echo "-custom-field";
                        echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                        echo "\" class=\"form-control\">";
                        echo (($this->getAttribute($this->getAttribute($context["address"], "custom_field", array()), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) ? ($this->getAttribute($this->getAttribute($context["address"], "custom_field", array()), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) : ($this->getAttribute($context["custom_field"], "value", array())));
                        echo "</textarea>
                                  ";
                        // line 457
                        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["error_address"]) ? $context["error_address"] : null), (isset($context["address_row"]) ? $context["address_row"] : null), array(), "array"), "custom_field", array(), "array"), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                            // line 458
                            echo "                                    <div class=\"invalid-tooltip\">";
                            echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["error_address"]) ? $context["error_address"] : null), (isset($context["address_row"]) ? $context["address_row"] : null), array(), "array"), "custom_field", array()), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                            echo "</div>
                                  ";
                        }
                        // line 459
                        echo "</div>
                              </div>
                            ";
                    }
                    // line 462
                    echo "                            ";
                    if (($this->getAttribute($context["custom_field"], "type", array()) == "file")) {
                        // line 463
                        echo "                              <div class=\"form-group row custom-field custom-field";
                        echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                        echo "\" data-sort=\"";
                        echo ($this->getAttribute($context["custom_field"], "sort_order", array()) + 1);
                        echo "\">
                                <label class=\"col-sm-2 col-form-label\">";
                        // line 464
                        echo $this->getAttribute($context["custom_field"], "name", array());
                        echo "</label>
                                <div class=\"col-sm-10\">
                                  <button type=\"button\" id=\"button-address";
                        // line 466
                        echo (isset($context["address_row"]) ? $context["address_row"] : null);
                        echo "-custom-field";
                        echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                        echo "\" data-loading-text=\"";
                        echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
                        echo "\" class=\"btn btn-light\"><i class=\"fa fa-upload\"></i> ";
                        echo (isset($context["button_upload"]) ? $context["button_upload"] : null);
                        echo "</button>
                                  <input type=\"hidden\" name=\"address[";
                        // line 467
                        echo (isset($context["address_row"]) ? $context["address_row"] : null);
                        echo "][custom_field][";
                        echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                        echo "]\" value=\"";
                        echo (($this->getAttribute($this->getAttribute($context["address"], "custom_field", array()), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) ? ($this->getAttribute($this->getAttribute($context["address"], "custom_field", array()), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) : (""));
                        echo "\"/>
                                  ";
                        // line 468
                        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["error_address"]) ? $context["error_address"] : null), (isset($context["address_row"]) ? $context["address_row"] : null), array(), "array"), "custom_field", array(), "array"), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                            // line 469
                            echo "                                    <div class=\"invalid-tooltip\">";
                            echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["error_address"]) ? $context["error_address"] : null), (isset($context["address_row"]) ? $context["address_row"] : null), array(), "array"), "custom_field", array()), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                            echo "</div>
                                  ";
                        }
                        // line 470
                        echo "</div>
                              </div>
                            ";
                    }
                    // line 473
                    echo "                            ";
                    if (($this->getAttribute($context["custom_field"], "type", array()) == "date")) {
                        // line 474
                        echo "                              <div class=\"form-group row custom-field custom-field";
                        echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                        echo "\" data-sort=\"";
                        echo ($this->getAttribute($context["custom_field"], "sort_order", array()) + 1);
                        echo "\">
                                <label class=\"col-sm-2 col-form-label\" for=\"input-address";
                        // line 475
                        echo (isset($context["address_row"]) ? $context["address_row"] : null);
                        echo "-custom-field";
                        echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                        echo "\">";
                        echo $this->getAttribute($context["custom_field"], "name", array());
                        echo "</label>
                                <div class=\"col-sm-10\">
                                  <div class=\"input-group date\">
                                    <input type=\"text\" name=\"address[";
                        // line 478
                        echo (isset($context["address_row"]) ? $context["address_row"] : null);
                        echo "][custom_field][";
                        echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                        echo "]\" value=\"";
                        echo (($this->getAttribute($this->getAttribute($context["address"], "custom_field", array()), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) ? ($this->getAttribute($this->getAttribute($context["address"], "custom_field", array()), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) : ($this->getAttribute($context["custom_field"], "value", array())));
                        echo "\" placeholder=\"";
                        echo $this->getAttribute($context["custom_field"], "name", array());
                        echo "\" data-date-format=\"YYYY-MM-DD\" data-locale=\"";
                        echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
                        echo "\" id=\"input-address";
                        echo (isset($context["address_row"]) ? $context["address_row"] : null);
                        echo "-custom-field";
                        echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                        echo "\" class=\"form-control\"/>
                                    <div class=\"input-group-append\">
                                      <button type=\"button\" class=\"btn btn-light\"><i class=\"fa fa-calendar\"></i></button>
                                    </div>
                                  </div>
                                  ";
                        // line 483
                        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["error_address"]) ? $context["error_address"] : null), (isset($context["address_row"]) ? $context["address_row"] : null), array(), "array"), "custom_field", array(), "array"), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                            // line 484
                            echo "                                    <div class=\"invalid-tooltip\">";
                            echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["error_address"]) ? $context["error_address"] : null), (isset($context["address_row"]) ? $context["address_row"] : null), array(), "array"), "custom_field", array()), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                            echo "</div>
                                  ";
                        }
                        // line 485
                        echo "</div>
                              </div>
                            ";
                    }
                    // line 488
                    echo "                            ";
                    if (($this->getAttribute($context["custom_field"], "type", array()) == "time")) {
                        // line 489
                        echo "                              <div class=\"form-group row custom-field custom-field";
                        echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                        echo "\" data-sort=\"";
                        echo ($this->getAttribute($context["custom_field"], "sort_order", array()) + 1);
                        echo "\">
                                <label class=\"col-sm-2 col-form-label\" for=\"input-address";
                        // line 490
                        echo (isset($context["address_row"]) ? $context["address_row"] : null);
                        echo "-custom-field";
                        echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                        echo "\">";
                        echo $this->getAttribute($context["custom_field"], "name", array());
                        echo "</label>
                                <div class=\"col-sm-10\">
                                  <div class=\"input-group time\">
                                    <input type=\"text\" name=\"address[";
                        // line 493
                        echo (isset($context["address_row"]) ? $context["address_row"] : null);
                        echo "][custom_field][";
                        echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                        echo "]\" value=\"";
                        echo (($this->getAttribute($this->getAttribute($context["address"], "custom_field", array()), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) ? ($this->getAttribute($this->getAttribute($context["address"], "custom_field", array()), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) : ($this->getAttribute($context["custom_field"], "value", array())));
                        echo "\" placeholder=\"";
                        echo $this->getAttribute($context["custom_field"], "name", array());
                        echo "\" data-date-format=\"HH:mm\" data-locale=\"";
                        echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
                        echo "\" id=\"input-address";
                        echo (isset($context["address_row"]) ? $context["address_row"] : null);
                        echo "-custom-field";
                        echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                        echo "\" class=\"form-control\"/>
                                    <div class=\"input-group-append\">
                                      <button type=\"button\" class=\"btn btn-light\"><i class=\"fa fa-calendar\"></i></button>
                                    </div>
                                  </div>
                                  ";
                        // line 498
                        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["error_address"]) ? $context["error_address"] : null), (isset($context["address_row"]) ? $context["address_row"] : null), array(), "array"), "custom_field", array(), "array"), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                            // line 499
                            echo "                                    <div class=\"invalid-tooltip\">";
                            echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["error_address"]) ? $context["error_address"] : null), (isset($context["address_row"]) ? $context["address_row"] : null), array(), "array"), "custom_field", array()), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                            echo "</div>
                                  ";
                        }
                        // line 500
                        echo "</div>
                              </div>
                            ";
                    }
                    // line 503
                    echo "                            ";
                    if (($this->getAttribute($context["custom_field"], "type", array()) == "datetime")) {
                        // line 504
                        echo "                              <div class=\"form-group row custom-field custom-field";
                        echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                        echo "\" data-sort=\"";
                        echo ($this->getAttribute($context["custom_field"], "sort_order", array()) + 1);
                        echo "\">
                                <label class=\"col-sm-2 col-form-label\" for=\"input-address";
                        // line 505
                        echo (isset($context["address_row"]) ? $context["address_row"] : null);
                        echo "-custom-field";
                        echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                        echo "\">";
                        echo $this->getAttribute($context["custom_field"], "name", array());
                        echo "</label>
                                <div class=\"col-sm-10\">
                                  <div class=\"input-group datetime\">
                                    <input type=\"text\" name=\"address[";
                        // line 508
                        echo (isset($context["address_row"]) ? $context["address_row"] : null);
                        echo "][custom_field][";
                        echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                        echo "]\" value=\"";
                        echo (($this->getAttribute($this->getAttribute($context["address"], "custom_field", array()), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) ? ($this->getAttribute($this->getAttribute($context["address"], "custom_field", array()), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) : ($this->getAttribute($context["custom_field"], "value", array())));
                        echo "\" placeholder=\"";
                        echo $this->getAttribute($context["custom_field"], "name", array());
                        echo "\" data-date-format=\"YYYY-MM-DD HH:mm\" data-locale=\"";
                        echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
                        echo "\" id=\"input-address";
                        echo (isset($context["address_row"]) ? $context["address_row"] : null);
                        echo "-custom-field";
                        echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                        echo "\" class=\"form-control\"/>
                                    <div class=\"input-group-append\">
                                      <button type=\"button\" class=\"btn btn-light\"><i class=\"fa fa-calendar\"></i></button>
                                    </div>
                                  </div>
                                  ";
                        // line 513
                        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["error_address"]) ? $context["error_address"] : null), (isset($context["address_row"]) ? $context["address_row"] : null), array(), "array"), "custom_field", array(), "array"), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                            // line 514
                            echo "                                    <div class=\"invalid-tooltip\">";
                            echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["error_address"]) ? $context["error_address"] : null), (isset($context["address_row"]) ? $context["address_row"] : null), array(), "array"), "custom_field", array()), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                            echo "</div>
                                  ";
                        }
                        // line 515
                        echo "</div>
                              </div>
                            ";
                    }
                    // line 518
                    echo "                          ";
                }
                // line 519
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 520
            echo "                        <div class=\"form-group row\">
                          <label class=\"col-sm-2 col-form-label\">";
            // line 521
            echo (isset($context["entry_default"]) ? $context["entry_default"] : null);
            echo "</label>
                          <div class=\"col-sm-10\">
                            <label class=\"radio\">";
            // line 523
            if ((($this->getAttribute($context["address"], "address_id", array()) == (isset($context["address_id"]) ? $context["address_id"] : null)) ||  !(isset($context["addresses"]) ? $context["addresses"] : null))) {
                // line 524
                echo "                                <input type=\"radio\" name=\"address[";
                echo (isset($context["address_row"]) ? $context["address_row"] : null);
                echo "][default]\" value=\"";
                echo (isset($context["address_row"]) ? $context["address_row"] : null);
                echo "\" checked=\"checked\"/>
                              ";
            } else {
                // line 526
                echo "                                <input type=\"radio\" name=\"address[";
                echo (isset($context["address_row"]) ? $context["address_row"] : null);
                echo "][default]\" value=\"";
                echo (isset($context["address_row"]) ? $context["address_row"] : null);
                echo "\"/>
                              ";
            }
            // line 527
            echo "</label>
                          </div>
                        </div>
                      </div>
                      ";
            // line 531
            $context["address_row"] = ((isset($context["address_row"]) ? $context["address_row"] : null) + 1);
            // line 532
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['address'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 533
        echo "                  </div>
                </div>
              </div>
            </div>
            ";
        // line 537
        if ((isset($context["customer_id"]) ? $context["customer_id"] : null)) {
            // line 538
            echo "              <div class=\"tab-pane\" id=\"tab-history\">
                <fieldset>
                  <legend>";
            // line 540
            echo (isset($context["text_history"]) ? $context["text_history"] : null);
            echo "</legend>
                  <div id=\"history\"></div>
                </fieldset>
                <br/>
                <fieldset>
                  <legend>";
            // line 545
            echo (isset($context["text_history_add"]) ? $context["text_history_add"] : null);
            echo "</legend>
                  <div class=\"form-group row\">
                    <label class=\"col-sm-2 col-form-label\" for=\"input-comment\">";
            // line 547
            echo (isset($context["entry_comment"]) ? $context["entry_comment"] : null);
            echo "</label>
                    <div class=\"col-sm-10\">
                      <textarea name=\"comment\" rows=\"8\" placeholder=\"";
            // line 549
            echo (isset($context["entry_comment"]) ? $context["entry_comment"] : null);
            echo "\" id=\"input-comment\" class=\"form-control\"></textarea>
                    </div>
                  </div>
                </fieldset>
                <div class=\"text-right\">
                  <button id=\"button-history\" data-loading-text=\"";
            // line 554
            echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
            echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i> ";
            echo (isset($context["button_history_add"]) ? $context["button_history_add"] : null);
            echo "</button>
                </div>
              </div>
              <div class=\"tab-pane\" id=\"tab-transaction\">
                <fieldset>
                  <legend>";
            // line 559
            echo (isset($context["text_transaction"]) ? $context["text_transaction"] : null);
            echo "</legend>
                  <div id=\"transaction\"></div>
                </fieldset>
                <br/>
                <fieldset>
                  <legend>";
            // line 564
            echo (isset($context["text_transaction_add"]) ? $context["text_transaction_add"] : null);
            echo "</legend>
                  <div class=\"form-group row\">
                    <label class=\"col-sm-2 col-form-label\" for=\"input-transaction-description\">";
            // line 566
            echo (isset($context["entry_description"]) ? $context["entry_description"] : null);
            echo "</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"description\" value=\"\" placeholder=\"";
            // line 568
            echo (isset($context["entry_description"]) ? $context["entry_description"] : null);
            echo "\" id=\"input-transaction-description\" class=\"form-control\"/>
                    </div>
                  </div>
                  <div class=\"form-group row\">
                    <label class=\"col-sm-2 col-form-label\" for=\"input-amount\">";
            // line 572
            echo (isset($context["entry_amount"]) ? $context["entry_amount"] : null);
            echo "</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"amount\" value=\"\" placeholder=\"";
            // line 574
            echo (isset($context["entry_amount"]) ? $context["entry_amount"] : null);
            echo "\" id=\"input-amount\" class=\"form-control\"/>
                    </div>
                  </div>
                </fieldset>
                <div class=\"text-right\">
                  <button type=\"button\" id=\"button-transaction\" data-loading-text=\"";
            // line 579
            echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
            echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i> ";
            echo (isset($context["button_transaction_add"]) ? $context["button_transaction_add"] : null);
            echo "</button>
                </div>
              </div>
              <div class=\"tab-pane\" id=\"tab-reward\">
                <fieldset>
                  <legend>";
            // line 584
            echo (isset($context["text_reward"]) ? $context["text_reward"] : null);
            echo "</legend>
                  <div id=\"reward\"></div>
                </fieldset>
                <br/>
                <fieldset>
                  <legend>";
            // line 589
            echo (isset($context["text_reward_add"]) ? $context["text_reward_add"] : null);
            echo "</legend>
                  <div class=\"form-group row\">
                    <label class=\"col-sm-2 col-form-label\" for=\"input-reward-description\">";
            // line 591
            echo (isset($context["entry_description"]) ? $context["entry_description"] : null);
            echo "</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"description\" value=\"\" placeholder=\"";
            // line 593
            echo (isset($context["entry_description"]) ? $context["entry_description"] : null);
            echo "\" id=\"input-reward-description\" class=\"form-control\"/>
                    </div>
                  </div>
                  <div class=\"form-group row\">
                    <label class=\"col-sm-2 col-form-label\" for=\"input-points\">";
            // line 597
            echo (isset($context["entry_points"]) ? $context["entry_points"] : null);
            echo "</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"points\" value=\"\" placeholder=\"";
            // line 599
            echo (isset($context["entry_points"]) ? $context["entry_points"] : null);
            echo "\" id=\"input-points\" class=\"form-control\"/>
                      <small class=\"form-text text-muted\">";
            // line 600
            echo (isset($context["help_points"]) ? $context["help_points"] : null);
            echo "</small>
                    </div>
                  </div>
                </fieldset>
                <div class=\"text-right\">
                  <button type=\"button\" id=\"button-reward\" data-loading-text=\"";
            // line 605
            echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
            echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i> ";
            echo (isset($context["button_reward_add"]) ? $context["button_reward_add"] : null);
            echo "</button>
                </div>
              </div>
            ";
        }
        // line 609
        echo "            <div class=\"tab-pane\" id=\"tab-ip\">
              <fieldset>
                <legend>";
        // line 611
        echo (isset($context["text_ip"]) ? $context["text_ip"] : null);
        echo "</legend>
                <div id=\"ip\"></div>
              </fieldset>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('select[name=\\'customer_group_id\\']').on('change', function() {
\t\$.ajax({
\t\turl: 'index.php?route=customer/customer/customfield&user_token=";
        // line 624
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&customer_group_id=' + this.value,
\t\tdataType: 'json',
\t\tsuccess: function(json) {
\t\t\t\$('.custom-field').hide();
\t\t\t\$('.custom-field').removeClass('required');

\t\t\tfor (i = 0; i < json.length; i++) {
\t\t\t\tcustom_field = json[i];

\t\t\t\t\$('.custom-field' + custom_field['custom_field_id']).show();

\t\t\t\tif (custom_field['required']) {
\t\t\t\t\t\$('.custom-field' + custom_field['custom_field_id']).addClass('required');
\t\t\t\t}
\t\t\t}
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});

\$('select[name=\\'customer_group_id\\']').trigger('change');
//--></script>
<script type=\"text/javascript\"><!--
var address_row = ";
        // line 649
        echo (isset($context["address_row"]) ? $context["address_row"] : null);
        echo ";

\$('#address-add').on('click', function(e) {
\te.preventDefault();

\thtml = '<div class=\"tab-pane\" id=\"tab-address' + address_row + '\">';
\thtml += '  <input type=\"hidden\" name=\"address[' + address_row + '][address_id]\" value=\"\" />';

\thtml += '  <div class=\"form-group row required\">';
\thtml += '    <label class=\"col-sm-2 col-form-label\" for=\"input-firstname' + address_row + '\">";
        // line 658
        echo (isset($context["entry_firstname"]) ? $context["entry_firstname"] : null);
        echo "</label>';
\thtml += '    <div class=\"col-sm-10\"><input type=\"text\" name=\"address[' + address_row + '][firstname]\" value=\"\" placeholder=\"";
        // line 659
        echo (isset($context["entry_firstname"]) ? $context["entry_firstname"] : null);
        echo "\" id=\"input-firstname' + address_row + '\" class=\"form-control\" /></div>';
\thtml += '  </div>';

\thtml += '  <div class=\"form-group row required\">';
\thtml += '    <label class=\"col-sm-2 col-form-label\" for=\"input-lastname' + address_row + '\">";
        // line 663
        echo (isset($context["entry_lastname"]) ? $context["entry_lastname"] : null);
        echo "</label>';
\thtml += '    <div class=\"col-sm-10\"><input type=\"text\" name=\"address[' + address_row + '][lastname]\" value=\"\" placeholder=\"";
        // line 664
        echo (isset($context["entry_lastname"]) ? $context["entry_lastname"] : null);
        echo "\" id=\"input-lastname' + address_row + '\" class=\"form-control\" /></div>';
\thtml += '  </div>';

\thtml += '  <div class=\"form-group row\">';
\thtml += '    <label class=\"col-sm-2 col-form-label\" for=\"input-company' + address_row + '\">";
        // line 668
        echo (isset($context["entry_company"]) ? $context["entry_company"] : null);
        echo "</label>';
\thtml += '    <div class=\"col-sm-10\"><input type=\"text\" name=\"address[' + address_row + '][company]\" value=\"\" placeholder=\"";
        // line 669
        echo (isset($context["entry_company"]) ? $context["entry_company"] : null);
        echo "\" id=\"input-company' + address_row + '\" class=\"form-control\" /></div>';
\thtml += '  </div>';

\thtml += '  <div class=\"form-group row required\">';
\thtml += '    <label class=\"col-sm-2 col-form-label\" for=\"input-address-1' + address_row + '\">";
        // line 673
        echo (isset($context["entry_address_1"]) ? $context["entry_address_1"] : null);
        echo "</label>';
\thtml += '    <div class=\"col-sm-10\"><input type=\"text\" name=\"address[' + address_row + '][address_1]\" value=\"\" placeholder=\"";
        // line 674
        echo (isset($context["entry_address_1"]) ? $context["entry_address_1"] : null);
        echo "\" id=\"input-address-1' + address_row + '\" class=\"form-control\" /></div>';
\thtml += '  </div>';

\thtml += '  <div class=\"form-group row\">';
\thtml += '    <label class=\"col-sm-2 col-form-label\" for=\"input-address-2' + address_row + '\">";
        // line 678
        echo (isset($context["entry_address_2"]) ? $context["entry_address_2"] : null);
        echo "</label>';
\thtml += '    <div class=\"col-sm-10\"><input type=\"text\" name=\"address[' + address_row + '][address_2]\" value=\"\" placeholder=\"";
        // line 679
        echo (isset($context["entry_address_2"]) ? $context["entry_address_2"] : null);
        echo "\" id=\"input-address-2' + address_row + '\" class=\"form-control\" /></div>';
\thtml += '  </div>';

\thtml += '  <div class=\"form-group row required\">';
\thtml += '    <label class=\"col-sm-2 col-form-label\" for=\"input-city' + address_row + '\">";
        // line 683
        echo (isset($context["entry_city"]) ? $context["entry_city"] : null);
        echo "</label>';
\thtml += '    <div class=\"col-sm-10\"><input type=\"text\" name=\"address[' + address_row + '][city]\" value=\"\" placeholder=\"";
        // line 684
        echo (isset($context["entry_city"]) ? $context["entry_city"] : null);
        echo "\" id=\"input-city' + address_row + '\" class=\"form-control\" /></div>';
\thtml += '  </div>';

\thtml += '  <div class=\"form-group row required\">';
\thtml += '    <label class=\"col-sm-2 col-form-label\" for=\"input-postcode' + address_row + '\">";
        // line 688
        echo (isset($context["entry_postcode"]) ? $context["entry_postcode"] : null);
        echo "</label>';
\thtml += '    <div class=\"col-sm-10\"><input type=\"text\" name=\"address[' + address_row + '][postcode]\" value=\"\" placeholder=\"";
        // line 689
        echo (isset($context["entry_postcode"]) ? $context["entry_postcode"] : null);
        echo "\" id=\"input-postcode' + address_row + '\" class=\"form-control\" /></div>';
\thtml += '  </div>';

\thtml += '  <div class=\"form-group row required\">';
\thtml += '    <label class=\"col-sm-2 col-form-label\" for=\"input-country' + address_row + '\">";
        // line 693
        echo (isset($context["entry_country"]) ? $context["entry_country"] : null);
        echo "</label>';
\thtml += '    <div class=\"col-sm-10\"><select name=\"address[' + address_row + '][country_id]\" id=\"input-country' + address_row + '\" onchange=\"country(this, \\'' + address_row + '\\', \\'0\\');\" class=\"form-control\">';
\thtml += '         <option value=\"\">";
        // line 695
        echo (isset($context["text_select"]) ? $context["text_select"] : null);
        echo "</option>';
  ";
        // line 696
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["countries"]) ? $context["countries"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 697
            echo "\thtml += '         <option value=\"";
            echo $this->getAttribute($context["country"], "country_id", array());
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["country"], "name", array()), "js");
            echo "</option>';
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 699
        echo "\thtml += '      </select></div>';
\thtml += '  </div>';

\thtml += '  <div class=\"form-group row required\">';
\thtml += '    <label class=\"col-sm-2 col-form-label\" for=\"input-zone' + address_row + '\">";
        // line 703
        echo (isset($context["entry_zone"]) ? $context["entry_zone"] : null);
        echo "</label>';
\thtml += '    <div class=\"col-sm-10\"><select name=\"address[' + address_row + '][zone_id]\" id=\"input-zone' + address_row + '\" class=\"form-control\"><option value=\"\">";
        // line 704
        echo (isset($context["text_none"]) ? $context["text_none"] : null);
        echo "</option></select></div>';
\thtml += '  </div>';

\t// Custom Fields
  ";
        // line 708
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["custom_fields"]) ? $context["custom_fields"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
            // line 709
            echo "  ";
            if (($this->getAttribute($context["custom_field"], "location", array()) == "address")) {
                // line 710
                echo "  ";
                if (($this->getAttribute($context["custom_field"], "type", array()) == "select")) {
                    // line 711
                    echo "
\thtml += '  <div class=\"form-group row custom-field custom-field";
                    // line 712
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" data-sort=\"";
                    echo ($this->getAttribute($context["custom_field"], "sort_order", array()) + 1);
                    echo "\">';
\thtml += '  \t\t<label class=\"col-sm-2 col-form-label\" for=\"input-address' + address_row + '-custom-field";
                    // line 713
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["custom_field"], "name", array()), "js");
                    echo "</label>';
\thtml += '  \t\t<div class=\"col-sm-10\">';
\thtml += '  \t\t  <select name=\"address[' + address_row + '][custom_field][";
                    // line 715
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" id=\"input-address' + address_row + '-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-control\">';
\thtml += '  \t\t\t<option value=\"\">";
                    // line 716
                    echo (isset($context["text_select"]) ? $context["text_select"] : null);
                    echo "</option>';

  ";
                    // line 718
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["custom_field"], "custom_field_value", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 719
                        echo "\thtml += '  \t\t\t<option value=\"";
                        echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["custom_field"], "name", array()), "js");
                        echo "</option>';
  ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 721
                    echo "
\thtml += '  \t\t  </select>';
\thtml += '  \t\t</div>';
\thtml += '  \t  </div>';
  ";
                }
                // line 726
                echo "
  ";
                // line 727
                if (($this->getAttribute($context["custom_field"], "type", array()) == "radio")) {
                    // line 728
                    echo "\thtml += '  \t  <div class=\"form-group row custom-field custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\">';
\thtml += '  \t\t<label class=\"col-sm-2 col-form-label\">";
                    // line 729
                    echo twig_escape_filter($this->env, $this->getAttribute($context["custom_field"], "name", array()), "js");
                    echo "</label>';
\thtml += '  \t\t<div class=\"col-sm-10\">';
\thtml += '  \t\t  <div>';

  ";
                    // line 733
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["custom_field"], "custom_field_value", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 734
                        echo "\thtml += '  \t\t\t<div class=\"radio\"><label><input type=\"radio\" name=\"address[' + address_row + '][custom_field][";
                        echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                        echo "]\" value=\"";
                        echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                        echo "\" /> ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["custom_field_value"], "name", array()), "js");
                        echo "</label></div>';
  ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 736
                    echo "
\thtml += '\t\t  </div>';
\thtml += '\t\t</div>';
\thtml += '\t  </div>';
  ";
                }
                // line 741
                echo "
  ";
                // line 742
                if (($this->getAttribute($context["custom_field"], "type", array()) == "checkbox")) {
                    // line 743
                    echo "\thtml += '\t  <div class=\"form-group row custom-field custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" data-sort=\"";
                    echo ($this->getAttribute($context["custom_field"], "sort_order", array()) + 1);
                    echo "\">';
\thtml += '\t\t<label class=\"col-sm-2 col-form-label\">";
                    // line 744
                    echo twig_escape_filter($this->env, $this->getAttribute($context["custom_field"], "name", array()), "js");
                    echo "</label>';
\thtml += '\t\t<div class=\"col-sm-10\">';
\thtml += '\t\t  <div>';

  ";
                    // line 748
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["custom_field"], "custom_field_value", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 749
                        echo "\thtml += '\t\t\t<div class=\"checkbox\"><label><input type=\"checkbox\" name=\"address[";
                        echo (isset($context["address_row"]) ? $context["address_row"] : null);
                        echo "][custom_field][";
                        echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                        echo "][]\" value=\"";
                        echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                        echo "\" /> ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["custom_field_value"], "name", array()), "js");
                        echo "</label></div>';
  ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 751
                    echo "
\thtml += '\t\t  </div>';
\thtml += '\t\t</div>';
\thtml += '\t  </div>';
  ";
                }
                // line 756
                echo "
  ";
                // line 757
                if (($this->getAttribute($context["custom_field"], "type", array()) == "text")) {
                    // line 758
                    echo "\thtml += '\t  <div class=\"form-group row custom-field custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" data-sort=\"";
                    echo ($this->getAttribute($context["custom_field"], "sort_order", array()) + 1);
                    echo "\">';
\thtml += '\t\t<label class=\"col-sm-2 col-form-label\" for=\"input-address' + address_row + '-custom-field";
                    // line 759
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["custom_field"], "name", array()), "js");
                    echo "</label>';
\thtml += '\t\t<div class=\"col-sm-10\">';
\thtml += '\t\t  <input type=\"text\" name=\"address[' + address_row + '][custom_field][";
                    // line 761
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["custom_field"], "value", array()), "js");
                    echo "\" placeholder=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["custom_field_value"]) ? $context["custom_field_value"] : null), "name", array()), "js");
                    echo "\" id=\"input-address' + address_row + '-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-control\" />';
\thtml += '\t\t</div>';
\thtml += '\t  </div>';
  ";
                }
                // line 765
                echo "
  ";
                // line 766
                if (($this->getAttribute($context["custom_field"], "type", array()) == "textarea")) {
                    // line 767
                    echo "\thtml += '\t  <div class=\"form-group row custom-field custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" data-sort=\"";
                    echo ($this->getAttribute($context["custom_field"], "sort_order", array()) + 1);
                    echo "\">';
\thtml += '\t\t<label class=\"col-sm-2 col-form-label\" for=\"input-address' + address_row + '-custom-field";
                    // line 768
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["custom_field"], "name", array()), "js");
                    echo "</label>';
\thtml += '\t\t<div class=\"col-sm-10\">';
\thtml += '\t\t  <textarea name=\"address[' + address_row + '][custom_field][";
                    // line 770
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" rows=\"5\" placeholder=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["custom_field_value"]) ? $context["custom_field_value"] : null), "name", array()), "js");
                    echo "\" id=\"input-address' + address_row + '-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-control\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["custom_field"], "value", array()), "js");
                    echo "</textarea>';
\thtml += '\t\t</div>';
\thtml += '\t  </div>';
  ";
                }
                // line 774
                echo "
  ";
                // line 775
                if (($this->getAttribute($context["custom_field"], "type", array()) == "file")) {
                    // line 776
                    echo "\thtml += '\t  <div class=\"form-group row custom-field custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" data-sort=\"";
                    echo ($this->getAttribute($context["custom_field"], "sort_order", array()) + 1);
                    echo "\">';
\thtml += '\t\t<label class=\"col-sm-2 col-form-label\">";
                    // line 777
                    echo twig_escape_filter($this->env, $this->getAttribute($context["custom_field"], "name", array()), "js");
                    echo "</label>';
\thtml += '\t\t<div class=\"col-sm-10\">';
\thtml += '\t\t  <button type=\"button\" id=\"button-address' + address_row + '-custom-field";
                    // line 779
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" data-loading-text=\"";
                    echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
                    echo "\" class=\"btn btn-light\"><i class=\"fa fa-upload\"></i> ";
                    echo (isset($context["button_upload"]) ? $context["button_upload"] : null);
                    echo "</button>';
\thtml += '\t\t  <input type=\"hidden\" name=\"address[' + address_row + '][";
                    // line 780
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" value=\"\" id=\"input-address' + address_row + '-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" />';
\thtml += '\t\t</div>';
\thtml += '\t  </div>';
  ";
                }
                // line 784
                echo "
  ";
                // line 785
                if (($this->getAttribute($context["custom_field"], "type", array()) == "date")) {
                    // line 786
                    echo "\thtml += '\t  <div class=\"form-group row custom-field custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" data-sort=\"";
                    echo ($this->getAttribute($context["custom_field"], "sort_order", array()) + 1);
                    echo "\">';
\thtml += '\t\t<label class=\"col-sm-2 col-form-label\" for=\"input-address' + address_row + '-custom-field";
                    // line 787
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["custom_field"], "name", array()), "js");
                    echo "</label>';
\thtml += '\t\t<div class=\"col-sm-10\">';
\thtml += '\t\t  <div class=\"input-group date\"><input type=\"text\" name=\"address[' + address_row + '][custom_field][";
                    // line 789
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["custom_field"], "value", array()), "js");
                    echo "\" placeholder=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["custom_field"], "name", array()), "js");
                    echo " data-date-format=\"YYYY-MM-DD\" id=\"input-address' + address_row + '-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-control\" /><div class=\"input-group-append\"><button type=\"button\" class=\"btn btn-light\"><i class=\"fa fa-calendar\"></i></button></div></div>';
\thtml += '\t\t</div>';
\thtml += '\t  </div>';
  ";
                }
                // line 793
                echo "
  ";
                // line 794
                if (($this->getAttribute($context["custom_field"], "type", array()) == "time")) {
                    // line 795
                    echo "\thtml += '\t  <div class=\"form-group custom-field custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" data-sort=\"";
                    echo ($this->getAttribute($context["custom_field"], "sort_order", array()) + 1);
                    echo "\">';
\thtml += '\t\t<label class=\"col-sm-2 col-form-label\" for=\"input-address' + address_row + '-custom-field";
                    // line 796
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["custom_field"], "name", array()), "js");
                    echo "</label>';
\thtml += '\t\t<div class=\"col-sm-10\">';
\thtml += '\t\t  <div class=\"input-group time\"><input type=\"text\" name=\"address[' + address_row + '][custom_field][";
                    // line 798
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["custom_field"], "value", array()), "js");
                    echo "\" placeholder=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["custom_field"], "name", array()), "js");
                    echo "\" data-date-format=\"HH:mm\" id=\"input-address' + address_row + '-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-control\" /><div class=\"input-group-append\"><button type=\"button\" class=\"btn btn-light\"><i class=\"fa fa-calendar\"></i></button></div></div>';
\thtml += '\t\t</div>';
\thtml += '\t  </div>';
  ";
                }
                // line 802
                echo "
  ";
                // line 803
                if (($this->getAttribute($context["custom_field"], "type", array()) == "datetime")) {
                    // line 804
                    echo "\thtml += '\t  <div class=\"form-group row custom-field custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" data-sort=\"";
                    echo ($this->getAttribute($context["custom_field"], "sort_order", array()) + 1);
                    echo "\">';
\thtml += '\t\t<label class=\"col-sm-2 col-form-label\" for=\"input-address' + address_row + '-custom-field";
                    // line 805
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["custom_field"], "name", array()), "js");
                    echo "</label>';
\thtml += '\t\t<div class=\"col-sm-10\">';
\thtml += '\t\t  <div class=\"input-group datetime\"><input type=\"text\" name=\"address[' + address_row + '][custom_field][";
                    // line 807
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["custom_field"], "value", array()), "js");
                    echo "\" placeholder=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["custom_field"], "name", array()), "js");
                    echo "\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-address' + address_row + '-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-control\" /><div class=\"input-group-append\"><button type=\"button\" class=\"btn btn-light\"><i class=\"fa fa-calendar\"></i></button></div></div>';
\thtml += '\t\t</div>';
\thtml += '\t  </div>';
  ";
                }
                // line 811
                echo "
  ";
            }
            // line 813
            echo "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 814
        echo "
\thtml += '  <div class=\"form-group row\">';
\thtml += '    <label class=\"col-sm-2 col-form-label\">";
        // line 816
        echo (isset($context["entry_default"]) ? $context["entry_default"] : null);
        echo "</label>';
\thtml += '    <div class=\"col-sm-10\"><label class=\"radio\"><input type=\"radio\" name=\"address[' + address_row + '][default]\" value=\"1\" /></label></div>';
\thtml += '  </div>';

\thtml += '</div>';

\t\$('#tab-general .tab-content').append(html);

\t\$('select[name=\\'customer_group_id\\']').trigger('change');

\t\$('select[name=\\'address[' + address_row + '][country_id]\\']').trigger('change');

\t\$('#address-add').parent().before('<li class=\"nav-item\"><a href=\"#tab-address' + address_row + '\" data-toggle=\"tab\" class=\"nav-link\"><i class=\"fa fa-minus-circle\" onclick=\"\$(\\'#address a:first\\').tab(\\'show\\'); \$(\\'a[href=\\\\\\'#tab-address' + address_row + '\\\\\\']\\').parent().remove(); \$(\\'#tab-address' + address_row + '\\').remove();\"></i> ";
        // line 828
        echo (isset($context["tab_address"]) ? $context["tab_address"] : null);
        echo " ' + address_row + '</a></li>');

\t\$('#address a[href=\\'#tab-address' + address_row + '\\']').tab('show');

\t\$('.date').datetimepicker();
\t\$('.time').datetimepicker();
\t\$('.datetime').datetimepicker();

\t\$('#tab-address' + address_row + ' .form-group[data-sort]').detach().each(function() {
\t\tif (\$(this).attr('data-sort') >= 0 && \$(this).attr('data-sort') <= \$('#tab-address' + address_row + ' .form-group').length) {
\t\t\t\$('#tab-address' + address_row + ' .form-group').eq(\$(this).attr('data-sort')).before(this);
\t\t}

\t\tif (\$(this).attr('data-sort') > \$('#tab-address' + address_row + ' .form-group').length) {
\t\t\t\$('#tab-address' + address_row + ' .form-group:last').after(this);
\t\t}

\t\tif (\$(this).attr('data-sort') < -\$('#tab-address' + address_row + ' .form-group').length) {
\t\t\t\$('#tab-address' + address_row + ' .form-group:first').before(this);
\t\t}
\t});

\taddress_row++;
});

//--></script>
<script type=\"text/javascript\"><!--
function country(element, index, zone_id) {
\t\$.ajax({
\t\turl: 'index.php?route=localisation/country/country&user_token=";
        // line 857
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&country_id=' + element.value,
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$('select[name=\\'address[' + index + '][country_id]\\']').prop('disabled', true);
\t\t},
\t\tcomplete: function() {
\t\t\t\$('select[name=\\'address[' + index + '][country_id]\\']').prop('disabled', false);
\t\t},
\t\tsuccess: function(json) {
\t\t\tif (json['postcode_required'] == '1') {
\t\t\t\t\$('input[name=\\'address[' + index + '][postcode]\\']').parent().parent().addClass('required');
\t\t\t} else {
\t\t\t\t\$('input[name=\\'address[' + index + '][postcode]\\']').parent().parent().removeClass('required');
\t\t\t}

\t\t\thtml = '<option value=\"\">";
        // line 872
        echo (isset($context["text_select"]) ? $context["text_select"] : null);
        echo "</option>';

\t\t\tif (json['zone'] && json['zone'] != '') {
\t\t\t\tfor (i = 0; i < json['zone'].length; i++) {
\t\t\t\t\thtml += '<option value=\"' + json['zone'][i]['zone_id'] + '\"';

\t\t\t\t\tif (json['zone'][i]['zone_id'] == zone_id) {
\t\t\t\t\t\thtml += ' selected=\"selected\"';
\t\t\t\t\t}

\t\t\t\t\thtml += '>' + json['zone'][i]['name'] + '</option>';
\t\t\t\t}
\t\t\t} else {
\t\t\t\thtml += '<option value=\"0\">";
        // line 885
        echo (isset($context["text_none"]) ? $context["text_none"] : null);
        echo "</option>';
\t\t\t}

\t\t\t\$('select[name=\\'address[' + index + '][zone_id]\\']').html(html);
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
}

\$('select[name\$=\\'[country_id]\\']').trigger('change');
//--></script>
<script type=\"text/javascript\"><!--
\$('#history').delegate('.pagination a', 'click', function(e) {
\te.preventDefault();

\t\$('#history').load(this.href);
});

\$('#history').load('index.php?route=customer/customer/history&user_token=";
        // line 905
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&customer_id=";
        echo (isset($context["customer_id"]) ? $context["customer_id"] : null);
        echo "');

\$('#button-history').on('click', function(e) {
\te.preventDefault();

\t\$.ajax({
\t\turl: 'index.php?route=customer/customer/addhistory&user_token=";
        // line 911
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&customer_id=";
        echo (isset($context["customer_id"]) ? $context["customer_id"] : null);
        echo "',
\t\ttype: 'post',
\t\tdataType: 'json',
\t\tdata: 'comment=' + encodeURIComponent(\$('#tab-history textarea[name=\\'comment\\']').val()),
\t\tbeforeSend: function() {
\t\t\t\$('#button-history').button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#button-history').button('reset');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible').remove();

\t\t\tif (json['error']) {
\t\t\t\t\$('#tab-history').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
\t\t\t}

\t\t\tif (json['success']) {
\t\t\t\t\$('#tab-history').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');

\t\t\t\t\$('#history').load('index.php?route=customer/customer/history&user_token=";
        // line 931
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&customer_id=";
        echo (isset($context["customer_id"]) ? $context["customer_id"] : null);
        echo "');

\t\t\t\t\$('#tab-history textarea[name=\\'comment\\']').val('');
\t\t\t}
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});
//--></script>
<script type=\"text/javascript\"><!--
\$('#transaction').delegate('.pagination a', 'click', function(e) {
\te.preventDefault();

\t\$('#transaction').load(this.href);
});

\$('#transaction').load('index.php?route=customer/customer/transaction&user_token=";
        // line 949
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&customer_id=";
        echo (isset($context["customer_id"]) ? $context["customer_id"] : null);
        echo "');

\$('#button-transaction').on('click', function(e) {
\te.preventDefault();

\t\$.ajax({
\t\turl: 'index.php?route=customer/customer/addtransaction&user_token=";
        // line 955
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&customer_id=";
        echo (isset($context["customer_id"]) ? $context["customer_id"] : null);
        echo "',
\t\ttype: 'post',
\t\tdataType: 'json',
\t\tdata: 'description=' + encodeURIComponent(\$('#tab-transaction input[name=\\'description\\']').val()) + '&amount=' + encodeURIComponent(\$('#tab-transaction input[name=\\'amount\\']').val()),
\t\tbeforeSend: function() {
\t\t\t\$('#button-transaction').button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#button-transaction').button('reset');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible').remove();

\t\t\tif (json['error']) {
\t\t\t\t\$('#tab-transaction').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
\t\t\t}

\t\t\tif (json['success']) {
\t\t\t\t\$('#tab-transaction').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');

\t\t\t\t\$('#transaction').load('index.php?route=customer/customer/transaction&user_token=";
        // line 975
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&customer_id=";
        echo (isset($context["customer_id"]) ? $context["customer_id"] : null);
        echo "');

\t\t\t\t\$('#tab-transaction input[name=\\'amount\\']').val('');
\t\t\t\t\$('#tab-transaction input[name=\\'description\\']').val('');
\t\t\t}
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});
//--></script>
<script type=\"text/javascript\"><!--
\$('#reward').delegate('.pagination a', 'click', function(e) {
\te.preventDefault();

\t\$('#reward').load(this.href);
});

\$('#reward').load('index.php?route=customer/customer/reward&user_token=";
        // line 994
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&customer_id=";
        echo (isset($context["customer_id"]) ? $context["customer_id"] : null);
        echo "');

\$('#button-reward').on('click', function(e) {
\te.preventDefault();

\t\$.ajax({
\t\turl: 'index.php?route=customer/customer/addreward&user_token=";
        // line 1000
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&customer_id=";
        echo (isset($context["customer_id"]) ? $context["customer_id"] : null);
        echo "',
\t\ttype: 'post',
\t\tdataType: 'json',
\t\tdata: 'description=' + encodeURIComponent(\$('#tab-reward input[name=\\'description\\']').val()) + '&points=' + encodeURIComponent(\$('#tab-reward input[name=\\'points\\']').val()),
\t\tbeforeSend: function() {
\t\t\t\$('#button-reward').button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#button-reward').button('reset');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible').remove();

\t\t\tif (json['error']) {
\t\t\t\t\$('#tab-reward').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
\t\t\t}

\t\t\tif (json['success']) {
\t\t\t\t\$('#tab-reward').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');

\t\t\t\t\$('#reward').load('index.php?route=customer/customer/reward&user_token=";
        // line 1020
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&customer_id=";
        echo (isset($context["customer_id"]) ? $context["customer_id"] : null);
        echo "');

\t\t\t\t\$('#tab-reward input[name=\\'points\\']').val('');
\t\t\t\t\$('#tab-reward input[name=\\'description\\']').val('');
\t\t\t}
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});

\$('#ip').delegate('.pagination a', 'click', function(e) {
\te.preventDefault();

\t\$('#ip').load(this.href);
});

\$('#ip').load('index.php?route=customer/customer/ip&user_token=";
        // line 1038
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&customer_id=";
        echo (isset($context["customer_id"]) ? $context["customer_id"] : null);
        echo "');

\$('#content').delegate('button[id^=\\'button-custom-field\\'], button[id^=\\'button-address\\']', 'click', function() {
\tvar element = this;

\t\$('#form-upload').remove();

\t\$('body').prepend('<form enctype=\"multipart/form-data\" id=\"form-upload\" style=\"display: none;\"><input type=\"file\" name=\"file\" /></form>');

\t\$('#form-upload input[name=\\'file\\']').trigger('click');

\tif (typeof timer != 'undefined') {
\t\tclearInterval(timer);
\t}

\ttimer = setInterval(function() {
\t\tif (\$('#form-upload input[name=\\'file\\']').val() != '') {
\t\t\tclearInterval(timer);

\t\t\t\$.ajax({
\t\t\t\turl: 'index.php?route=tool/upload/upload&user_token=";
        // line 1058
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "',
\t\t\t\ttype: 'post',
\t\t\t\tdataType: 'json',
\t\t\t\tdata: new FormData(\$('#form-upload')[0]),
\t\t\t\tcache: false,
\t\t\t\tcontentType: false,
\t\t\t\tprocessData: false,
\t\t\t\tbeforeSend: function() {
\t\t\t\t\t\$(element).button('loading');
\t\t\t\t},
\t\t\t\tcomplete: function() {
\t\t\t\t\t\$(element).button('reset');
\t\t\t\t},
\t\t\t\tsuccess: function(json) {
\t\t\t\t\t\$(element).parent().find('.invalid-tooltip').remove();

\t\t\t\t\tif (json['error']) {
\t\t\t\t\t\t\$(element).parent().find('input[type=\\'hidden\\']').after('<div class=\"invalid-tooltip d-block\">' + json['error'] + '</div>');
\t\t\t\t\t}

\t\t\t\t\tif (json['success']) {
\t\t\t\t\t\talert(json['success']);
\t\t\t\t\t}

\t\t\t\t\tif (json['code']) {
\t\t\t\t\t\t\$(element).parent().find('input[type=\\'hidden\\']').val(json['code']);
\t\t\t\t\t}
\t\t\t\t},
\t\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t}
\t\t\t});
\t\t}
\t}, 500);
});

\$('.date').datetimepicker();
\$('.time').datetimepicker();
\$('.datetime').datetimepicker();

// Sort the custom fields
";
        // line 1099
        $context["address_row"] = 1;
        // line 1100
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["addresses"]) ? $context["addresses"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["address"]) {
            // line 1101
            echo "\$('#tab-address";
            echo (isset($context["address_row"]) ? $context["address_row"] : null);
            echo " .form-group[data-sort]').detach().each(function() {
\tif (\$(this).attr('data-sort') >= 0 && \$(this).attr('data-sort') <= \$('#tab-address";
            // line 1102
            echo (isset($context["address_row"]) ? $context["address_row"] : null);
            echo " .form-group').length) {
\t\t\$('#tab-address";
            // line 1103
            echo (isset($context["address_row"]) ? $context["address_row"] : null);
            echo " .form-group').eq(\$(this).attr('data-sort')).before(this);
\t}

\tif (\$(this).attr('data-sort') > \$('#tab-address";
            // line 1106
            echo (isset($context["address_row"]) ? $context["address_row"] : null);
            echo " .form-group').length) {
\t\t\$('#tab-address";
            // line 1107
            echo (isset($context["address_row"]) ? $context["address_row"] : null);
            echo " .form-group:last').after(this);
\t}

\tif (\$(this).attr('data-sort') < -\$('#tab-address";
            // line 1110
            echo (isset($context["address_row"]) ? $context["address_row"] : null);
            echo " .form-group').length) {
\t\t\$('#tab-address";
            // line 1111
            echo (isset($context["address_row"]) ? $context["address_row"] : null);
            echo " .form-group:first').before(this);
\t}
});
";
            // line 1114
            $context["address_row"] = ((isset($context["address_row"]) ? $context["address_row"] : null) + 1);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['address'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1116
        echo "
\$('#tab-customer .form-group[data-sort]').detach().each(function() {
\tif (\$(this).attr('data-sort') >= 0 && \$(this).attr('data-sort') <= \$('#tab-customer .form-group').length) {
\t\t\$('#tab-customer .form-group').eq(\$(this).attr('data-sort')).before(this);
\t}

\tif (\$(this).attr('data-sort') > \$('#tab-customer .form-group').length) {
\t\t\$('#tab-customer .form-group:last').after(this);
\t}

\tif (\$(this).attr('data-sort') < -\$('#tab-customer .form-group').length) {
\t\t\$('#tab-customer .form-group:first').before(this);
\t}
});
//--></script>
<script type=\"text/javascript\"><!--
\$('input[name=\\'payment\\']').on('change', function() {
\t\$('.payment').hide();

\t\$('#payment-' + this.value).show();
});

\$('input[name=\\'payment\\']:checked').trigger('change');
//--></script>
";
        // line 1140
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "customer/customer_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  2943 => 1140,  2917 => 1116,  2911 => 1114,  2905 => 1111,  2901 => 1110,  2895 => 1107,  2891 => 1106,  2885 => 1103,  2881 => 1102,  2876 => 1101,  2872 => 1100,  2870 => 1099,  2826 => 1058,  2801 => 1038,  2778 => 1020,  2753 => 1000,  2742 => 994,  2718 => 975,  2693 => 955,  2682 => 949,  2659 => 931,  2634 => 911,  2623 => 905,  2600 => 885,  2584 => 872,  2566 => 857,  2534 => 828,  2519 => 816,  2515 => 814,  2509 => 813,  2505 => 811,  2492 => 807,  2485 => 805,  2478 => 804,  2476 => 803,  2473 => 802,  2460 => 798,  2453 => 796,  2446 => 795,  2444 => 794,  2441 => 793,  2428 => 789,  2421 => 787,  2414 => 786,  2412 => 785,  2409 => 784,  2400 => 780,  2392 => 779,  2387 => 777,  2380 => 776,  2378 => 775,  2375 => 774,  2362 => 770,  2355 => 768,  2348 => 767,  2346 => 766,  2343 => 765,  2330 => 761,  2323 => 759,  2316 => 758,  2314 => 757,  2311 => 756,  2304 => 751,  2289 => 749,  2285 => 748,  2278 => 744,  2271 => 743,  2269 => 742,  2266 => 741,  2259 => 736,  2246 => 734,  2242 => 733,  2235 => 729,  2230 => 728,  2228 => 727,  2225 => 726,  2218 => 721,  2207 => 719,  2203 => 718,  2198 => 716,  2192 => 715,  2185 => 713,  2179 => 712,  2176 => 711,  2173 => 710,  2170 => 709,  2166 => 708,  2159 => 704,  2155 => 703,  2149 => 699,  2138 => 697,  2134 => 696,  2130 => 695,  2125 => 693,  2118 => 689,  2114 => 688,  2107 => 684,  2103 => 683,  2096 => 679,  2092 => 678,  2085 => 674,  2081 => 673,  2074 => 669,  2070 => 668,  2063 => 664,  2059 => 663,  2052 => 659,  2048 => 658,  2036 => 649,  2008 => 624,  1992 => 611,  1988 => 609,  1979 => 605,  1971 => 600,  1967 => 599,  1962 => 597,  1955 => 593,  1950 => 591,  1945 => 589,  1937 => 584,  1927 => 579,  1919 => 574,  1914 => 572,  1907 => 568,  1902 => 566,  1897 => 564,  1889 => 559,  1879 => 554,  1871 => 549,  1866 => 547,  1861 => 545,  1853 => 540,  1849 => 538,  1847 => 537,  1841 => 533,  1835 => 532,  1833 => 531,  1827 => 527,  1819 => 526,  1811 => 524,  1809 => 523,  1804 => 521,  1801 => 520,  1795 => 519,  1792 => 518,  1787 => 515,  1781 => 514,  1779 => 513,  1759 => 508,  1749 => 505,  1742 => 504,  1739 => 503,  1734 => 500,  1728 => 499,  1726 => 498,  1706 => 493,  1696 => 490,  1689 => 489,  1686 => 488,  1681 => 485,  1675 => 484,  1673 => 483,  1653 => 478,  1643 => 475,  1636 => 474,  1633 => 473,  1628 => 470,  1622 => 469,  1620 => 468,  1612 => 467,  1602 => 466,  1597 => 464,  1590 => 463,  1587 => 462,  1582 => 459,  1576 => 458,  1574 => 457,  1560 => 456,  1551 => 454,  1544 => 453,  1541 => 452,  1536 => 449,  1530 => 448,  1528 => 447,  1514 => 446,  1505 => 444,  1498 => 443,  1495 => 442,  1490 => 439,  1484 => 438,  1482 => 437,  1479 => 436,  1472 => 435,  1467 => 434,  1458 => 433,  1453 => 431,  1444 => 430,  1441 => 429,  1437 => 428,  1432 => 426,  1425 => 425,  1422 => 424,  1417 => 421,  1411 => 420,  1409 => 419,  1406 => 418,  1399 => 417,  1394 => 416,  1385 => 415,  1380 => 413,  1371 => 412,  1368 => 411,  1364 => 410,  1359 => 408,  1352 => 407,  1349 => 406,  1344 => 403,  1338 => 402,  1336 => 401,  1333 => 400,  1327 => 399,  1319 => 397,  1311 => 395,  1308 => 394,  1304 => 393,  1300 => 392,  1290 => 391,  1281 => 389,  1274 => 388,  1271 => 387,  1268 => 386,  1264 => 385,  1260 => 383,  1254 => 382,  1252 => 381,  1246 => 380,  1239 => 378,  1234 => 375,  1228 => 374,  1226 => 373,  1223 => 372,  1217 => 371,  1209 => 369,  1201 => 367,  1198 => 366,  1194 => 365,  1190 => 364,  1180 => 363,  1173 => 361,  1168 => 358,  1162 => 357,  1160 => 356,  1150 => 355,  1143 => 353,  1138 => 350,  1132 => 349,  1130 => 348,  1120 => 347,  1113 => 345,  1100 => 341,  1093 => 339,  1088 => 336,  1082 => 335,  1080 => 334,  1070 => 333,  1063 => 331,  1050 => 327,  1043 => 325,  1038 => 322,  1032 => 321,  1030 => 320,  1020 => 319,  1013 => 317,  1008 => 314,  1002 => 313,  1000 => 312,  990 => 311,  983 => 309,  976 => 307,  971 => 306,  966 => 305,  964 => 304,  957 => 299,  952 => 297,  947 => 296,  942 => 294,  937 => 293,  935 => 292,  929 => 289,  923 => 285,  918 => 283,  913 => 282,  908 => 280,  903 => 279,  901 => 278,  895 => 275,  889 => 271,  884 => 269,  879 => 268,  874 => 266,  869 => 265,  867 => 264,  861 => 261,  856 => 259,  850 => 255,  844 => 254,  842 => 253,  836 => 252,  831 => 250,  826 => 247,  820 => 246,  818 => 245,  812 => 244,  807 => 242,  802 => 240,  798 => 238,  792 => 237,  789 => 236,  784 => 233,  778 => 232,  776 => 231,  760 => 226,  752 => 223,  745 => 222,  742 => 221,  737 => 218,  731 => 217,  729 => 216,  713 => 211,  705 => 208,  698 => 207,  695 => 206,  690 => 203,  684 => 202,  682 => 201,  666 => 196,  658 => 193,  651 => 192,  648 => 191,  643 => 188,  637 => 187,  635 => 186,  627 => 185,  619 => 184,  614 => 182,  607 => 181,  604 => 180,  599 => 177,  593 => 176,  591 => 175,  581 => 174,  574 => 172,  567 => 171,  564 => 170,  559 => 167,  553 => 166,  551 => 165,  541 => 164,  534 => 162,  527 => 161,  524 => 160,  519 => 157,  513 => 156,  511 => 155,  508 => 154,  501 => 153,  496 => 152,  489 => 151,  484 => 149,  477 => 148,  474 => 147,  470 => 146,  465 => 144,  458 => 143,  455 => 142,  450 => 139,  444 => 138,  442 => 137,  439 => 136,  432 => 135,  427 => 134,  420 => 133,  415 => 131,  408 => 130,  405 => 129,  401 => 128,  396 => 126,  389 => 125,  387 => 124,  384 => 123,  379 => 120,  373 => 119,  371 => 118,  368 => 117,  362 => 116,  354 => 114,  346 => 112,  343 => 111,  339 => 110,  335 => 109,  329 => 108,  322 => 106,  315 => 105,  312 => 104,  309 => 103,  305 => 102,  301 => 100,  295 => 99,  293 => 98,  287 => 97,  282 => 95,  277 => 92,  271 => 91,  269 => 90,  263 => 89,  258 => 87,  253 => 84,  247 => 83,  245 => 82,  239 => 81,  234 => 79,  229 => 76,  223 => 75,  221 => 74,  215 => 73,  210 => 71,  204 => 67,  198 => 66,  190 => 64,  182 => 62,  179 => 61,  175 => 60,  169 => 57,  164 => 55,  153 => 48,  147 => 47,  145 => 46,  132 => 45,  127 => 44,  125 => 43,  121 => 42,  113 => 36,  108 => 34,  104 => 33,  100 => 32,  95 => 31,  93 => 30,  89 => 29,  84 => 27,  79 => 25,  76 => 24,  68 => 20,  66 => 19,  59 => 14,  48 => 12,  44 => 11,  38 => 8,  32 => 7,  28 => 6,  19 => 1,);
    }
}
/* {{ header }}{{ column_left }}*/
/* <div id="content">*/
/*   <div class="page-header">*/
/*     <div class="container-fluid">*/
/*       <div class="pull-right">*/
/*         <button type="submit" form="form-customer" data-toggle="tooltip" title="{{ button_save }}" class="btn btn-primary"><i class="fa fa-save"></i></button>*/
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
/*         <form action="{{ action }}" method="post" enctype="multipart/form-data" id="form-customer">*/
/*           <ul class="nav nav-tabs">*/
/*             <li class="nav-item"><a href="#tab-general" data-toggle="tab" class="nav-link active">{{ tab_general }}</a></li>*/
/*             {% if customer_id %}*/
/*               <li class="nav-item"><a href="#tab-history" data-toggle="tab" class="nav-link">{{ tab_history }}</a></li>*/
/*               <li class="nav-item"><a href="#tab-transaction" data-toggle="tab" class="nav-link">{{ tab_transaction }}</a></li>*/
/*               <li class="nav-item"><a href="#tab-reward" data-toggle="tab" class="nav-link">{{ tab_reward }}</a></li>*/
/*               <li class="nav-item"><a href="#tab-ip" data-toggle="tab" class="nav-link">{{ tab_ip }}</a></li>*/
/*             {% endif %}*/
/*           </ul>*/
/*           <div class="tab-content">*/
/*             <div class="tab-pane active" id="tab-general">*/
/*               <div class="row">*/
/*                 <div class="col-sm-2">*/
/*                   <ul class="nav nav-pills flex-column" id="address">*/
/*                     <li class="nav-item"><a href="#tab-customer" data-toggle="tab" class="nav-link active">{{ tab_general }}</a></li>*/
/*                     {% set address_row = 1 %}*/
/*                     {% for address in addresses %}*/
/*                       <li class="nav-item"><a href="#tab-address{{ address_row }}" data-toggle="tab" class="nav-link"><i class="fa fa-minus-circle" onclick="$('#address li:first-child a').tab('show'); $('#address a[href=\'#tab-address{{ address_row }}\']').parent().remove(); $('#tab-address{{ address_row }}').remove();"></i> {{ tab_address }} {{ address_row }}</a></li>*/
/*                       {% set address_row = address_row + 1 %}*/
/*                     {% endfor %}*/
/*                     <li class="nav-item"><a href="#" id="address-add" class="nav-link"><i class="fa fa-plus-circle"></i> {{ button_address_add }}</a></li>*/
/*                   </ul>*/
/*                 </div>*/
/*                 <div class="col-sm-10">*/
/*                   <div class="tab-content">*/
/*                     <div class="tab-pane active" id="tab-customer">*/
/*                       <fieldset>*/
/*                         <legend>{{ text_account }}</legend>*/
/*                         <div class="form-group row">*/
/*                           <label class="col-sm-2 col-form-label" for="input-customer-group">{{ entry_customer_group }}</label>*/
/*                           <div class="col-sm-10">*/
/*                             <select name="customer_group_id" id="input-customer-group" class="form-control">*/
/*                               {% for customer_group in customer_groups %}*/
/*                                 {% if customer_group.customer_group_id == customer_group_id %}*/
/*                                   <option value="{{ customer_group.customer_group_id }}" selected="selected">{{ customer_group.name }}</option>*/
/*                                 {% else %}*/
/*                                   <option value="{{ customer_group.customer_group_id }}">{{ customer_group.name }}</option>*/
/*                                 {% endif %}*/
/*                               {% endfor %}*/
/*                             </select>*/
/*                           </div>*/
/*                         </div>*/
/*                         <div class="form-group row required">*/
/*                           <label class="col-sm-2 col-form-label" for="input-firstname">{{ entry_firstname }}</label>*/
/*                           <div class="col-sm-10">*/
/*                             <input type="text" name="firstname" value="{{ firstname }}" placeholder="{{ entry_firstname }}" id="input-firstname" class="form-control"/>*/
/*                             {% if error_firstname %}*/
/*                               <div class="invalid-tooltip">{{ error_firstname }}</div>*/
/*                             {% endif %}</div>*/
/*                         </div>*/
/*                         <div class="form-group row required">*/
/*                           <label class="col-sm-2 col-form-label" for="input-lastname">{{ entry_lastname }}</label>*/
/*                           <div class="col-sm-10">*/
/*                             <input type="text" name="lastname" value="{{ lastname }}" placeholder="{{ entry_lastname }}" id="input-lastname" class="form-control"/>*/
/*                             {% if error_lastname %}*/
/*                               <div class="invalid-tooltip">{{ error_lastname }}</div>*/
/*                             {% endif %}</div>*/
/*                         </div>*/
/*                         <div class="form-group row required">*/
/*                           <label class="col-sm-2 col-form-label" for="input-email">{{ entry_email }}</label>*/
/*                           <div class="col-sm-10">*/
/*                             <input type="text" name="email" value="{{ email }}" placeholder="{{ entry_email }}" id="input-email" class="form-control"/>*/
/*                             {% if error_email %}*/
/*                               <div class="invalid-tooltip">{{ error_email }}</div>*/
/*                             {% endif %}</div>*/
/*                         </div>*/
/*                         <div class="form-group row required">*/
/*                           <label class="col-sm-2 col-form-label" for="input-telephone">{{ entry_telephone }}</label>*/
/*                           <div class="col-sm-10">*/
/*                             <input type="text" name="telephone" value="{{ telephone }}" placeholder="{{ entry_telephone }}" id="input-telephone" class="form-control"/>*/
/*                             {% if error_telephone %}*/
/*                               <div class="invalid-tooltip">{{ error_telephone }}</div>*/
/*                             {% endif %}</div>*/
/*                         </div>*/
/*                         {% for custom_field in custom_fields %}*/
/*                           {% if custom_field.location == 'account' %}*/
/*                             {% if custom_field.type == 'select' %}*/
/*                               <div class="form-group row custom-field custom-field{{ custom_field.custom_field_id }}" data-sort="{{ custom_field.sort_order }}">*/
/*                                 <label class="col-sm-2 col-form-label" for="input-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/*                                 <div class="col-sm-10">*/
/*                                   <select name="custom_field[{{ custom_field.custom_field_id }}]" id="input-custom-field{{ custom_field.custom_field_id }}" class="form-control">*/
/*                                     <option value="">{{ text_select }}</option>*/
/*                                     {% for custom_field_value in custom_field.custom_field_value %}*/
/*                                       {% if account_custom_field[custom_field.custom_field_id] and custom_field_value.custom_field_value_id == account_custom_field[custom_field.custom_field_id] %}*/
/*                                         <option value="{{ custom_field_value.custom_field_value_id }}" selected="selected">{{ custom_field_value.name }}</option>*/
/*                                       {% else %}*/
/*                                         <option value="{{ custom_field_value.custom_field_value_id }}">{{ custom_field_value.name }}</option>*/
/*                                       {% endif %}*/
/*                                     {% endfor %}*/
/*                                   </select>*/
/*                                   {% if error_custom_field[custom_field.custom_field_id] %}*/
/*                                     <div class="invalid-tooltip">{{ error_custom_field[custom_field.custom_field_id] }}</div>*/
/*                                   {% endif %}</div>*/
/*                               </div>*/
/*                             {% endif %}*/
/* */
/*                             {% if custom_field.type == 'radio' %}*/
/*                               <div class="form-group row custom-field custom-field{{ custom_field.custom_field_id }}" data-sort="{{ custom_field.sort_order }}">*/
/*                                 <label class="col-sm-2 col-form-label">{{ custom_field.name }}</label>*/
/*                                 <div class="col-sm-10">*/
/*                                   <div> {% for custom_field_value in custom_field.custom_field_value %}*/
/*                                       <div class="radio"> {% if account_custom_field[custom_field.custom_field_id] and custom_field_value.custom_field_value_id == account_custom_field[custom_field.custom_field_id] %}*/
/*                                           <label> <input type="radio" name="custom_field[{{ custom_field.custom_field_id }}]" value="{{ custom_field_value.custom_field_value_id }}" checked="checked"/>*/
/*                                             {{ custom_field_value.name }}</label>*/
/*                                         {% else %}*/
/*                                           <label> <input type="radio" name="custom_field[{{ custom_field.custom_field_id }}]" value="{{ custom_field_value.custom_field_value_id }}"/>*/
/*                                             {{ custom_field_value.name }}</label>*/
/*                                         {% endif %}</div>*/
/*                                     {% endfor %} </div>*/
/*                                   {% if error_custom_field[custom_field.custom_field_id] %}*/
/*                                     <div class="invalid-tooltip">{{ error_custom_field[custom_field.custom_field_id] }}</div>*/
/*                                   {% endif %}</div>*/
/*                               </div>*/
/*                             {% endif %}*/
/*                             {% if custom_field.type == 'checkbox' %}*/
/*                               <div class="form-group row custom-field custom-field{{ custom_field.custom_field_id }}" data-sort="{{ custom_field.sort_order }}">*/
/*                                 <label class="col-sm-2 col-form-label">{{ custom_field.name }}</label>*/
/*                                 <div class="col-sm-10">*/
/*                                   <div> {% for custom_field_value in custom_field.custom_field_value %}*/
/*                                       <div class="checkbox">{% if account_custom_field[custom_field.custom_field_id] and custom_field_value.custom_field_value_id in account_custom_field[custom_field.custom_field_id] %}*/
/*                                           <label> <input type="checkbox" name="custom_field[{{ custom_field.custom_field_id }}][]" value="{{ custom_field_value.custom_field_value_id }}" checked="checked"/>*/
/*                                             {{ custom_field_value.name }}</label>*/
/*                                         {% else %}*/
/*                                           <label> <input type="checkbox" name="custom_field[{{ custom_field.custom_field_id }}][]" value="{{ custom_field_value.custom_field_value_id }}"/>*/
/*                                             {{ custom_field_value.name }}</label>*/
/*                                         {% endif %}</div>*/
/*                                     {% endfor %}</div>*/
/*                                   {% if error_custom_field[custom_field.custom_field_id] %}*/
/*                                     <div class="invalid-tooltip">{{ error_custom_field[custom_field.custom_field_id] }}</div>*/
/*                                   {% endif %}</div>*/
/*                               </div>*/
/*                             {% endif %}*/
/*                             {% if custom_field.type == 'text' %}*/
/*                               <div class="form-group row custom-field custom-field{{ custom_field.custom_field_id }}" data-sort="{{ custom_field.sort_order }}">*/
/*                                 <label class="col-sm-2 col-form-label" for="input-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/*                                 <div class="col-sm-10">*/
/*                                   <input type="text" name="custom_field[{{ custom_field.custom_field_id }}]" value="{{ account_custom_field[custom_field.custom_field_id] ? account_custom_field[custom_field.custom_field_id] : custom_field.value }}" placeholder="{{ custom_field.name }}" id="input-custom-field{{ custom_field.custom_field_id }}" class="form-control"/>*/
/*                                   {% if error_custom_field[custom_field.custom_field_id] %}*/
/*                                     <div class="invalid-tooltip">{{ error_custom_field[custom_field.custom_field_id] }}</div>*/
/*                                   {% endif %}</div>*/
/*                               </div>*/
/*                             {% endif %}*/
/*                             {% if custom_field.type == 'textarea' %}*/
/*                               <div class="form-group row custom-field custom-field{{ custom_field.custom_field_id }}" data-sort="{{ custom_field.sort_order }}">*/
/*                                 <label class="col-sm-2 col-form-label" for="input-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/*                                 <div class="col-sm-10">*/
/*                                   <textarea name="custom_field[{{ custom_field.custom_field_id }}]" rows="5" placeholder="{{ custom_field.name }}" id="input-custom-field{{ custom_field.custom_field_id }}" class="form-control">{{ account_custom_field[custom_field.custom_field_id] ? account_custom_field[custom_field.custom_field_id] : custom_field.value }}</textarea>*/
/*                                   {% if error_custom_field[custom_field.custom_field_id] %}*/
/*                                     <div class="invalid-tooltip">{{ error_custom_field[custom_field.custom_field_id] }}</div>*/
/*                                   {% endif %}</div>*/
/*                               </div>*/
/*                             {% endif %}*/
/*                             {% if custom_field.type == 'file' %}*/
/*                               <div class="form-group row custom-field custom-field{{ custom_field.custom_field_id }}" data-sort="{{ custom_field.sort_order }}">*/
/*                                 <label class="col-sm-2 col-form-label">{{ custom_field.name }}</label>*/
/*                                 <div class="col-sm-10">*/
/*                                   <button type="button" id="button-custom-field{{ custom_field.custom_field_id }}" data-loading-text="{{ text_loading }}" class="btn btn-light"><i class="fa fa-upload"></i> {{ button_upload }}</button>*/
/*                                   <input type="hidden" name="custom_field[{{ custom_field.custom_field_id }}]" value="{{ account_custom_field[custom_field.custom_field_id] ? account_custom_field[custom_field.custom_field_id] }}" id="input-custom-field{{ custom_field.custom_field_id }}"/>*/
/*                                   {% if error_custom_field[custom_field.custom_field_id] %}*/
/*                                     <div class="invalid-tooltip">{{ error_custom_field[custom_field.custom_field_id] }}</div>*/
/*                                   {% endif %}</div>*/
/*                               </div>*/
/*                             {% endif %}*/
/*                             {% if custom_field.type == 'date' %}*/
/*                               <div class="form-group row custom-field custom-field{{ custom_field.custom_field_id }}" data-sort="{{ custom_field.sort_order }}">*/
/*                                 <label class="col-sm-2 col-form-label" for="input-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/*                                 <div class="col-sm-10">*/
/*                                   <div class="input-group date">*/
/*                                     <input type="text" name="custom_field[{{ custom_field.custom_field_id }}]" value="{{ account_custom_field[custom_field.custom_field_id] ? account_custom_field[custom_field.custom_field_id] : custom_field.value }}" placeholder="{{ custom_field.name }}" data-date-format="YYYY-MM-DD" data-locale="{{ datepicker }}" id="input-custom-field{{ custom_field.custom_field_id }}" class="form-control"/>*/
/*                                     <div class="input-group-append">*/
/*                                       <button type="button" class="btn btn-light"><i class="fa fa-calendar"></i></button>*/
/*                                     </div>*/
/*                                   </div>*/
/*                                   {% if error_custom_field[custom_field.custom_field_id] %}*/
/*                                     <div class="invalid-tooltip">{{ error_custom_field[custom_field.custom_field_id] }}</div>*/
/*                                   {% endif %}</div>*/
/*                               </div>*/
/*                             {% endif %}*/
/*                             {% if custom_field.type == 'time' %}*/
/*                               <div class="form-group row custom-field custom-field{{ custom_field.custom_field_id }}" data-sort="{{ custom_field.sort_order }}">*/
/*                                 <label class="col-sm-2 col-form-label" for="input-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/*                                 <div class="col-sm-10">*/
/*                                   <div class="input-group time">*/
/*                                     <input type="text" name="custom_field[{{ custom_field.custom_field_id }}]" value="{{ account_custom_field[custom_field.custom_field_id] ? account_custom_field[custom_field.custom_field_id] : custom_field.value }}" placeholder="{{ custom_field.name }}" data-date-format="HH:mm" data-locale="{{ datepicker }}" id="input-custom-field{{ custom_field.custom_field_id }}" class="form-control"/>*/
/*                                     <div class="input-group-append">*/
/*                                       <button type="button" class="btn btn-light"><i class="fa fa-calendar"></i></button>*/
/*                                     </div>*/
/*                                   </div>*/
/*                                   {% if error_custom_field[custom_field.custom_field_id] %}*/
/*                                     <div class="invalid-tooltip">{{ error_custom_field[custom_field.custom_field_id] }}</div>*/
/*                                   {% endif %}</div>*/
/*                               </div>*/
/*                             {% endif %}*/
/*                             {% if custom_field.type == 'datetime' %}*/
/*                               <div class="form-group row custom-field custom-field{{ custom_field.custom_field_id }}" data-sort="{{ custom_field.sort_order }}">*/
/*                                 <label class="col-sm-2 col-form-label" for="input-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/*                                 <div class="col-sm-10">*/
/*                                   <div class="input-group datetime">*/
/*                                     <input type="text" name="custom_field[{{ custom_field.custom_field_id }}]" value="{{ account_custom_field[custom_field.custom_field_id] ? account_custom_field[custom_field.custom_field_id] : custom_field.value }}" placeholder="{{ custom_field.name }}" data-date-format="YYYY-MM-DD HH:mm" data-locale="{{ datepicker }}" id="input-custom-field{{ custom_field.custom_field_id }}" class="form-control"/>*/
/*                                     <div class="input-group-append">*/
/*                                       <button type="button" class="btn btn-light"><i class="fa fa-calendar"></i></button>*/
/*                                     </div>*/
/*                                   </div>*/
/*                                   {% if error_custom_field[custom_field.custom_field_id] %}*/
/*                                     <div class="invalid-tooltip">{{ error_custom_field[custom_field.custom_field_id] }}</div>*/
/*                                   {% endif %}</div>*/
/*                               </div>*/
/*                             {% endif %}*/
/*                           {% endif %}*/
/*                         {% endfor %}*/
/*                       </fieldset>*/
/*                       <fieldset>*/
/*                         <legend>{{ text_password }}</legend>*/
/*                         <div class="form-group row required">*/
/*                           <label class="col-sm-2 col-form-label" for="input-password">{{ entry_password }}</label>*/
/*                           <div class="col-sm-10">*/
/*                             <input type="password" name="password" value="{{ password }}" placeholder="{{ entry_password }}" id="input-password" class="form-control" autocomplete="off"/>*/
/*                             {% if error_password %}*/
/*                               <div class="invalid-tooltip">{{ error_password }}</div>*/
/*                             {% endif %}</div>*/
/*                         </div>*/
/*                         <div class="form-group row required">*/
/*                           <label class="col-sm-2 col-form-label" for="input-confirm">{{ entry_confirm }}</label>*/
/*                           <div class="col-sm-10">*/
/*                             <input type="password" name="confirm" value="{{ confirm }}" placeholder="{{ entry_confirm }}" autocomplete="off" id="input-confirm" class="form-control"/>*/
/*                             {% if error_confirm %}*/
/*                               <div class="invalid-tooltip">{{ error_confirm }}</div>*/
/*                             {% endif %}</div>*/
/*                         </div>*/
/*                       </fieldset>*/
/*                       <fieldset>*/
/*                         <legend>{{ text_other }}</legend>*/
/*                         <div class="form-group row">*/
/*                           <label class="col-sm-2 col-form-label" for="input-newsletter">{{ entry_newsletter }}</label>*/
/*                           <div class="col-sm-10">*/
/*                             <select name="newsletter" id="input-newsletter" class="form-control">*/
/*                               {% if newsletter %}*/
/*                                 <option value="1" selected="selected">{{ text_enabled }}</option>*/
/*                                 <option value="0">{{ text_disabled }}</option>*/
/*                               {% else %}*/
/*                                 <option value="1">{{ text_enabled }}</option>*/
/*                                 <option value="0" selected="selected">{{ text_disabled }}</option>*/
/*                               {% endif %}*/
/*                             </select>*/
/*                           </div>*/
/*                         </div>*/
/*                         <div class="form-group row">*/
/*                           <label class="col-sm-2 col-form-label" for="input-status">{{ entry_status }}</label>*/
/*                           <div class="col-sm-10">*/
/*                             <select name="status" id="input-status" class="form-control">*/
/*                               {% if status %}*/
/*                                 <option value="1" selected="selected">{{ text_enabled }}</option>*/
/*                                 <option value="0">{{ text_disabled }}</option>*/
/*                               {% else %}*/
/*                                 <option value="1">{{ text_enabled }}</option>*/
/*                                 <option value="0" selected="selected">{{ text_disabled }}</option>*/
/*                               {% endif %}*/
/*                             </select>*/
/*                           </div>*/
/*                         </div>*/
/*                         <div class="form-group row">*/
/*                           <label class="col-sm-2 col-form-label" for="input-safe">{{ entry_safe }}</label>*/
/*                           <div class="col-sm-10">*/
/*                             <select name="safe" id="input-safe" class="form-control">*/
/*                               {% if safe %}*/
/*                                 <option value="1" selected="selected">{{ text_yes }}</option>*/
/*                                 <option value="0">{{ text_no }}</option>*/
/*                               {% else %}*/
/*                                 <option value="1">{{ text_yes }}</option>*/
/*                                 <option value="0" selected="selected">{{ text_no }}</option>*/
/*                               {% endif %}*/
/*                             </select>*/
/*                           </div>*/
/*                         </div>*/
/*                       </fieldset>*/
/*                     </div>*/
/*                     {% set address_row = 1 %}*/
/*                     {% for address in addresses %}*/
/*                       <div class="tab-pane" id="tab-address{{ address_row }}">*/
/*                         <input type="hidden" name="address[{{ address_row }}][address_id]" value="{{ address.address_id }}"/>*/
/*                         <div class="form-group row required">*/
/*                           <label class="col-sm-2 col-form-label" for="input-firstname{{ address_row }}">{{ entry_firstname }}</label>*/
/*                           <div class="col-sm-10">*/
/*                             <input type="text" name="address[{{ address_row }}][firstname]" value="{{ address.firstname }}" placeholder="{{ entry_firstname }}" id="input-firstname{{ address_row }}" class="form-control"/>*/
/*                             {% if error_address[address_row].firstname %}*/
/*                               <div class="invalid-tooltip">{{ error_address[address_row].firstname }}</div>*/
/*                             {% endif %}</div>*/
/*                         </div>*/
/*                         <div class="form-group row required">*/
/*                           <label class="col-sm-2 col-form-label" for="input-lastname{{ address_row }}">{{ entry_lastname }}</label>*/
/*                           <div class="col-sm-10">*/
/*                             <input type="text" name="address[{{ address_row }}][lastname]" value="{{ address.lastname }}" placeholder="{{ entry_lastname }}" id="input-lastname{{ address_row }}" class="form-control"/>*/
/*                             {% if error_address[address_row].lastname %}*/
/*                               <div class="invalid-tooltip">{{ error_address[address_row].lastname }}</div>*/
/*                             {% endif %}</div>*/
/*                         </div>*/
/*                         <div class="form-group row">*/
/*                           <label class="col-sm-2 col-form-label" for="input-company{{ address_row }}">{{ entry_company }}</label>*/
/*                           <div class="col-sm-10">*/
/*                             <input type="text" name="address[{{ address_row }}][company]" value="{{ address.company }}" placeholder="{{ entry_company }}" id="input-company{{ address_row }}" class="form-control"/>*/
/*                           </div>*/
/*                         </div>*/
/*                         <div class="form-group row required">*/
/*                           <label class="col-sm-2 col-form-label" for="input-address-1{{ address_row }}">{{ entry_address_1 }}</label>*/
/*                           <div class="col-sm-10">*/
/*                             <input type="text" name="address[{{ address_row }}][address_1]" value="{{ address.address_1 }}" placeholder="{{ entry_address_1 }}" id="input-address-1{{ address_row }}" class="form-control"/>*/
/*                             {% if error_address[address_row].address_1 %}*/
/*                               <div class="invalid-tooltip">{{ error_address[address_row].address_1 }}</div>*/
/*                             {% endif %}</div>*/
/*                         </div>*/
/*                         <div class="form-group row">*/
/*                           <label class="col-sm-2 col-form-label" for="input-address-2{{ address_row }}">{{ entry_address_2 }}</label>*/
/*                           <div class="col-sm-10">*/
/*                             <input type="text" name="address[{{ address_row }}][address_2]" value="{{ address.address_2 }}" placeholder="{{ entry_address_2 }}" id="input-address-2{{ address_row }}" class="form-control"/>*/
/*                           </div>*/
/*                         </div>*/
/*                         <div class="form-group row required">*/
/*                           <label class="col-sm-2 col-form-label" for="input-city{{ address_row }}">{{ entry_city }}</label>*/
/*                           <div class="col-sm-10">*/
/*                             <input type="text" name="address[{{ address_row }}][city]" value="{{ address.city }}" placeholder="{{ entry_city }}" id="input-city{{ address_row }}" class="form-control"/>*/
/*                             {% if error_address[address_row].city %}*/
/*                               <div class="invalid-tooltip">{{ error_address[address_row].city }}</div>*/
/*                             {% endif %}</div>*/
/*                         </div>*/
/*                         <div class="form-group row required">*/
/*                           <label class="col-sm-2 col-form-label" for="input-postcode{{ address_row }}">{{ entry_postcode }}</label>*/
/*                           <div class="col-sm-10">*/
/*                             <input type="text" name="address[{{ address_row }}][postcode]" value="{{ address.postcode }}" placeholder="{{ entry_postcode }}" id="input-postcode{{ address_row }}" class="form-control"/>*/
/*                             {% if error_address[address_row].postcode %}*/
/*                               <div class="invalid-tooltip">{{ error_address[address_row].postcode }}</div>*/
/*                             {% endif %}</div>*/
/*                         </div>*/
/*                         <div class="form-group row required">*/
/*                           <label class="col-sm-2 col-form-label" for="input-country{{ address_row }}">{{ entry_country }}</label>*/
/*                           <div class="col-sm-10">*/
/*                             <select name="address[{{ address_row }}][country_id]" id="input-country{{ address_row }}" onchange="country(this, '{{ address_row }}', '{{ address.zone_id }}');" class="form-control">*/
/*                               <option value="">{{ text_select }}</option>*/
/*                               {% for country in countries %}*/
/*                                 {% if country.country_id == address.country_id %}*/
/*                                   <option value="{{ country.country_id }}" selected="selected">{{ country.name }}</option>*/
/*                                 {% else %}*/
/*                                   <option value="{{ country.country_id }}">{{ country.name }}</option>*/
/*                                 {% endif %}*/
/*                               {% endfor %}*/
/*                             </select>*/
/*                             {% if error_address[address_row].country %}*/
/*                               <div class="invalid-tooltip">{{ error_address[address_row].country }}</div>*/
/*                             {% endif %}</div>*/
/*                         </div>*/
/*                         <div class="form-group row required">*/
/*                           <label class="col-sm-2 col-form-label" for="input-zone{{ address_row }}">{{ entry_zone }}</label>*/
/*                           <div class="col-sm-10">*/
/*                             <select name="address[{{ address_row }}][zone_id]" id="input-zone{{ address_row }}" class="form-control"> </select>*/
/*                             {% if error_address[address_row].zone %}*/
/*                               <div class="invalid-tooltip">{{ error_address[address_row].zone }}</div>*/
/*                             {% endif %}</div>*/
/*                         </div>*/
/*                         {% for custom_field in custom_fields %}*/
/*                           {% if custom_field.location == 'address' %}*/
/*                             {% if custom_field.type == 'select' %}*/
/*                               <div class="form-group row custom-field custom-field{{ custom_field.custom_field_id }}" data-sort="{{ custom_field.sort_order + 1 }}">*/
/*                                 <label class="col-sm-2 col-form-label" for="input-address{{ address_row }}-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/*                                 <div class="col-sm-10">*/
/*                                   <select name="address[{{ address_row }}][custom_field][{{ custom_field.custom_field_id }}]" id="input-address{{ address_row }}-custom-field{{ custom_field.custom_field_id }}" class="form-control">*/
/*                                     <option value="">{{ text_select }}</option>*/
/*                                     {% for custom_field_value in custom_field.custom_field_value %}*/
/*                                       {% if address.custom_field[custom_field.custom_field_id] and custom_field_value.custom_field_value_id == address.custom_field[custom_field.custom_field_id] %}*/
/*                                         <option value="{{ custom_field_value.custom_field_value_id }}" selected="selected">{{ custom_field_value.name }}</option>*/
/*                                       {% else %}*/
/*                                         <option value="{{ custom_field_value.custom_field_value_id }}">{{ custom_field_value.name }}</option>*/
/*                                       {% endif %}*/
/*                                     {% endfor %}*/
/*                                   </select>*/
/*                                   {% if error_address[address_row]['custom_field'][custom_field.custom_field_id] %}*/
/*                                     <div class="invalid-tooltip">{{ error_address[address_row].custom_field[custom_field.custom_field_id] }}</div>*/
/*                                   {% endif %}</div>*/
/*                               </div>*/
/*                             {% endif %}*/
/*                             {% if custom_field.type == 'radio' %}*/
/*                               <div class="form-group row custom-field custom-field{{ custom_field.custom_field_id }}" data-sort="{{ custom_field.sort_order + 1 }}">*/
/*                                 <label class="col-sm-2 col-form-label">{{ custom_field.name }}</label>*/
/*                                 <div class="col-sm-10">*/
/*                                   <div> {% for custom_field_value in custom_field.custom_field_value %}*/
/*                                       <div class="radio"> {% if address.custom_field[custom_field.custom_field_id] and custom_field_value.custom_field_value_id == address.custom_field[custom_field.custom_field_id] %}*/
/*                                           <label> <input type="radio" name="address[{{ address_row }}][custom_field][{{ custom_field.custom_field_id }}]" value="{{ custom_field_value.custom_field_value_id }}" checked="checked"/>*/
/*                                             {{ custom_field_value.name }}</label>*/
/*                                         {% else %}*/
/*                                           <label> <input type="radio" name="address[{{ address_row }}][custom_field][{{ custom_field.custom_field_id }}]" value="{{ custom_field_value.custom_field_value_id }}"/>*/
/*                                             {{ custom_field_value.name }}</label>*/
/*                                         {% endif %}</div>*/
/*                                     {% endfor %} </div>*/
/*                                   {% if error_address[address_row].custom_field[custom_field.custom_field_id] %}*/
/*                                     <div class="invalid-tooltip">{{ error_address[address_row].custom_field[custom_field.custom_field_id] }}</div>*/
/*                                   {% endif %}</div>*/
/*                               </div>*/
/*                             {% endif %}*/
/*                             {% if custom_field.type == 'checkbox' %}*/
/*                               <div class="form-group row custom-field custom-field{{ custom_field.custom_field_id }}" data-sort="{{ custom_field.sort_order + 1 }}">*/
/*                                 <label class="col-sm-2 col-form-label">{{ custom_field.name }}</label>*/
/*                                 <div class="col-sm-10">*/
/*                                   <div> {% for custom_field_value in custom_field.custom_field_value %}*/
/*                                       <div class="checkbox"> {% if address.custom_field[custom_field.custom_field_id] and custom_field_value.custom_field_value_id in address.custom_field[custom_field.custom_field_id] %}*/
/*                                           <label> <input type="checkbox" name="address[{{ address_row }}][custom_field][{{ custom_field.custom_field_id }}][]" value="{{ custom_field_value.custom_field_value_id }}" checked="checked"/>*/
/*                                             {{ custom_field_value.name }}</label>*/
/*                                         {% else %}*/
/*                                           <label> <input type="checkbox" name="address[{{ address_row }}][custom_field][{{ custom_field.custom_field_id }}][]" value="{{ custom_field_value.custom_field_value_id }}"/>*/
/*                                             {{ custom_field_value.name }}</label>*/
/*                                         {% endif %}</div>*/
/*                                     {% endfor %} </div>*/
/*                                   {% if error_address[address_row]['custom_field'][custom_field.custom_field_id] %}*/
/*                                     <div class="invalid-tooltip">{{ error_address[address_row].custom_field[custom_field.custom_field_id] }}</div>*/
/*                                   {% endif %}</div>*/
/*                               </div>*/
/*                             {% endif %}*/
/*                             {% if custom_field.type == 'text' %}*/
/*                               <div class="form-group row custom-field custom-field{{ custom_field.custom_field_id }}" data-sort="{{ custom_field.sort_order + 1 }}">*/
/*                                 <label class="col-sm-2 col-form-label" for="input-address{{ address_row }}-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/*                                 <div class="col-sm-10">*/
/*                                   <input type="text" name="address[{{ address_row }}][custom_field][{{ custom_field.custom_field_id }}]" value="{{ address.custom_field[custom_field.custom_field_id] ? address.custom_field[custom_field.custom_field_id] : custom_field.value }}" placeholder="{{ custom_field.name }}" id="input-address{{ address_row }}-custom-field{{ custom_field.custom_field_id }}" class="form-control"/>*/
/*                                   {% if error_address[address_row]['custom_field'][custom_field.custom_field_id] %}*/
/*                                     <div class="invalid-tooltip">{{ error_address[address_row].custom_field[custom_field.custom_field_id] }}</div>*/
/*                                   {% endif %}</div>*/
/*                               </div>*/
/*                             {% endif %}*/
/*                             {% if custom_field.type == 'textarea' %}*/
/*                               <div class="form-group row custom-field custom-field{{ custom_field.custom_field_id }}" data-sort="{{ custom_field.sort_order + 1 }}">*/
/*                                 <label class="col-sm-2 col-form-label" for="input-address{{ address_row }}-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/*                                 <div class="col-sm-10">*/
/*                                   <textarea name="address[{{ address_row }}][custom_field][{{ custom_field.custom_field_id }}]" rows="5" placeholder="{{ custom_field.name }}" id="input-address{{ address_row }}-custom-field{{ custom_field.custom_field_id }}" class="form-control">{{ address.custom_field[custom_field.custom_field_id] ? address.custom_field[custom_field.custom_field_id] : custom_field.value }}</textarea>*/
/*                                   {% if error_address[address_row]['custom_field'][custom_field.custom_field_id] %}*/
/*                                     <div class="invalid-tooltip">{{ error_address[address_row].custom_field[custom_field.custom_field_id] }}</div>*/
/*                                   {% endif %}</div>*/
/*                               </div>*/
/*                             {% endif %}*/
/*                             {% if custom_field.type == 'file' %}*/
/*                               <div class="form-group row custom-field custom-field{{ custom_field.custom_field_id }}" data-sort="{{ custom_field.sort_order + 1 }}">*/
/*                                 <label class="col-sm-2 col-form-label">{{ custom_field.name }}</label>*/
/*                                 <div class="col-sm-10">*/
/*                                   <button type="button" id="button-address{{ address_row }}-custom-field{{ custom_field.custom_field_id }}" data-loading-text="{{ text_loading }}" class="btn btn-light"><i class="fa fa-upload"></i> {{ button_upload }}</button>*/
/*                                   <input type="hidden" name="address[{{ address_row }}][custom_field][{{ custom_field.custom_field_id }}]" value="{{ address.custom_field[custom_field.custom_field_id] ? address.custom_field[custom_field.custom_field_id] }}"/>*/
/*                                   {% if error_address[address_row]['custom_field'][custom_field.custom_field_id] %}*/
/*                                     <div class="invalid-tooltip">{{ error_address[address_row].custom_field[custom_field.custom_field_id] }}</div>*/
/*                                   {% endif %}</div>*/
/*                               </div>*/
/*                             {% endif %}*/
/*                             {% if custom_field.type == 'date' %}*/
/*                               <div class="form-group row custom-field custom-field{{ custom_field.custom_field_id }}" data-sort="{{ custom_field.sort_order + 1 }}">*/
/*                                 <label class="col-sm-2 col-form-label" for="input-address{{ address_row }}-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/*                                 <div class="col-sm-10">*/
/*                                   <div class="input-group date">*/
/*                                     <input type="text" name="address[{{ address_row }}][custom_field][{{ custom_field.custom_field_id }}]" value="{{ address.custom_field[custom_field.custom_field_id] ? address.custom_field[custom_field.custom_field_id] : custom_field.value }}" placeholder="{{ custom_field.name }}" data-date-format="YYYY-MM-DD" data-locale="{{ datepicker }}" id="input-address{{ address_row }}-custom-field{{ custom_field.custom_field_id }}" class="form-control"/>*/
/*                                     <div class="input-group-append">*/
/*                                       <button type="button" class="btn btn-light"><i class="fa fa-calendar"></i></button>*/
/*                                     </div>*/
/*                                   </div>*/
/*                                   {% if error_address[address_row]['custom_field'][custom_field.custom_field_id] %}*/
/*                                     <div class="invalid-tooltip">{{ error_address[address_row].custom_field[custom_field.custom_field_id] }}</div>*/
/*                                   {% endif %}</div>*/
/*                               </div>*/
/*                             {% endif %}*/
/*                             {% if custom_field.type == 'time' %}*/
/*                               <div class="form-group row custom-field custom-field{{ custom_field.custom_field_id }}" data-sort="{{ custom_field.sort_order + 1 }}">*/
/*                                 <label class="col-sm-2 col-form-label" for="input-address{{ address_row }}-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/*                                 <div class="col-sm-10">*/
/*                                   <div class="input-group time">*/
/*                                     <input type="text" name="address[{{ address_row }}][custom_field][{{ custom_field.custom_field_id }}]" value="{{ address.custom_field[custom_field.custom_field_id] ? address.custom_field[custom_field.custom_field_id] : custom_field.value }}" placeholder="{{ custom_field.name }}" data-date-format="HH:mm" data-locale="{{ datepicker }}" id="input-address{{ address_row }}-custom-field{{ custom_field.custom_field_id }}" class="form-control"/>*/
/*                                     <div class="input-group-append">*/
/*                                       <button type="button" class="btn btn-light"><i class="fa fa-calendar"></i></button>*/
/*                                     </div>*/
/*                                   </div>*/
/*                                   {% if error_address[address_row]['custom_field'][custom_field.custom_field_id] %}*/
/*                                     <div class="invalid-tooltip">{{ error_address[address_row].custom_field[custom_field.custom_field_id] }}</div>*/
/*                                   {% endif %}</div>*/
/*                               </div>*/
/*                             {% endif %}*/
/*                             {% if custom_field.type == 'datetime' %}*/
/*                               <div class="form-group row custom-field custom-field{{ custom_field.custom_field_id }}" data-sort="{{ custom_field.sort_order + 1 }}">*/
/*                                 <label class="col-sm-2 col-form-label" for="input-address{{ address_row }}-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/*                                 <div class="col-sm-10">*/
/*                                   <div class="input-group datetime">*/
/*                                     <input type="text" name="address[{{ address_row }}][custom_field][{{ custom_field.custom_field_id }}]" value="{{ address.custom_field[custom_field.custom_field_id] ? address.custom_field[custom_field.custom_field_id] : custom_field.value }}" placeholder="{{ custom_field.name }}" data-date-format="YYYY-MM-DD HH:mm" data-locale="{{ datepicker }}" id="input-address{{ address_row }}-custom-field{{ custom_field.custom_field_id }}" class="form-control"/>*/
/*                                     <div class="input-group-append">*/
/*                                       <button type="button" class="btn btn-light"><i class="fa fa-calendar"></i></button>*/
/*                                     </div>*/
/*                                   </div>*/
/*                                   {% if error_address[address_row]['custom_field'][custom_field.custom_field_id] %}*/
/*                                     <div class="invalid-tooltip">{{ error_address[address_row].custom_field[custom_field.custom_field_id] }}</div>*/
/*                                   {% endif %}</div>*/
/*                               </div>*/
/*                             {% endif %}*/
/*                           {% endif %}*/
/*                         {% endfor %}*/
/*                         <div class="form-group row">*/
/*                           <label class="col-sm-2 col-form-label">{{ entry_default }}</label>*/
/*                           <div class="col-sm-10">*/
/*                             <label class="radio">{% if address.address_id == address_id or not addresses %}*/
/*                                 <input type="radio" name="address[{{ address_row }}][default]" value="{{ address_row }}" checked="checked"/>*/
/*                               {% else %}*/
/*                                 <input type="radio" name="address[{{ address_row }}][default]" value="{{ address_row }}"/>*/
/*                               {% endif %}</label>*/
/*                           </div>*/
/*                         </div>*/
/*                       </div>*/
/*                       {% set address_row = address_row + 1 %}*/
/*                     {% endfor %}*/
/*                   </div>*/
/*                 </div>*/
/*               </div>*/
/*             </div>*/
/*             {% if customer_id %}*/
/*               <div class="tab-pane" id="tab-history">*/
/*                 <fieldset>*/
/*                   <legend>{{ text_history }}</legend>*/
/*                   <div id="history"></div>*/
/*                 </fieldset>*/
/*                 <br/>*/
/*                 <fieldset>*/
/*                   <legend>{{ text_history_add }}</legend>*/
/*                   <div class="form-group row">*/
/*                     <label class="col-sm-2 col-form-label" for="input-comment">{{ entry_comment }}</label>*/
/*                     <div class="col-sm-10">*/
/*                       <textarea name="comment" rows="8" placeholder="{{ entry_comment }}" id="input-comment" class="form-control"></textarea>*/
/*                     </div>*/
/*                   </div>*/
/*                 </fieldset>*/
/*                 <div class="text-right">*/
/*                   <button id="button-history" data-loading-text="{{ text_loading }}" class="btn btn-primary"><i class="fa fa-plus-circle"></i> {{ button_history_add }}</button>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="tab-pane" id="tab-transaction">*/
/*                 <fieldset>*/
/*                   <legend>{{ text_transaction }}</legend>*/
/*                   <div id="transaction"></div>*/
/*                 </fieldset>*/
/*                 <br/>*/
/*                 <fieldset>*/
/*                   <legend>{{ text_transaction_add }}</legend>*/
/*                   <div class="form-group row">*/
/*                     <label class="col-sm-2 col-form-label" for="input-transaction-description">{{ entry_description }}</label>*/
/*                     <div class="col-sm-10">*/
/*                       <input type="text" name="description" value="" placeholder="{{ entry_description }}" id="input-transaction-description" class="form-control"/>*/
/*                     </div>*/
/*                   </div>*/
/*                   <div class="form-group row">*/
/*                     <label class="col-sm-2 col-form-label" for="input-amount">{{ entry_amount }}</label>*/
/*                     <div class="col-sm-10">*/
/*                       <input type="text" name="amount" value="" placeholder="{{ entry_amount }}" id="input-amount" class="form-control"/>*/
/*                     </div>*/
/*                   </div>*/
/*                 </fieldset>*/
/*                 <div class="text-right">*/
/*                   <button type="button" id="button-transaction" data-loading-text="{{ text_loading }}" class="btn btn-primary"><i class="fa fa-plus-circle"></i> {{ button_transaction_add }}</button>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="tab-pane" id="tab-reward">*/
/*                 <fieldset>*/
/*                   <legend>{{ text_reward }}</legend>*/
/*                   <div id="reward"></div>*/
/*                 </fieldset>*/
/*                 <br/>*/
/*                 <fieldset>*/
/*                   <legend>{{ text_reward_add }}</legend>*/
/*                   <div class="form-group row">*/
/*                     <label class="col-sm-2 col-form-label" for="input-reward-description">{{ entry_description }}</label>*/
/*                     <div class="col-sm-10">*/
/*                       <input type="text" name="description" value="" placeholder="{{ entry_description }}" id="input-reward-description" class="form-control"/>*/
/*                     </div>*/
/*                   </div>*/
/*                   <div class="form-group row">*/
/*                     <label class="col-sm-2 col-form-label" for="input-points">{{ entry_points }}</label>*/
/*                     <div class="col-sm-10">*/
/*                       <input type="text" name="points" value="" placeholder="{{ entry_points }}" id="input-points" class="form-control"/>*/
/*                       <small class="form-text text-muted">{{ help_points }}</small>*/
/*                     </div>*/
/*                   </div>*/
/*                 </fieldset>*/
/*                 <div class="text-right">*/
/*                   <button type="button" id="button-reward" data-loading-text="{{ text_loading }}" class="btn btn-primary"><i class="fa fa-plus-circle"></i> {{ button_reward_add }}</button>*/
/*                 </div>*/
/*               </div>*/
/*             {% endif %}*/
/*             <div class="tab-pane" id="tab-ip">*/
/*               <fieldset>*/
/*                 <legend>{{ text_ip }}</legend>*/
/*                 <div id="ip"></div>*/
/*               </fieldset>*/
/*             </div>*/
/*           </div>*/
/*         </form>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* <script type="text/javascript"><!--*/
/* $('select[name=\'customer_group_id\']').on('change', function() {*/
/* 	$.ajax({*/
/* 		url: 'index.php?route=customer/customer/customfield&user_token={{ user_token }}&customer_group_id=' + this.value,*/
/* 		dataType: 'json',*/
/* 		success: function(json) {*/
/* 			$('.custom-field').hide();*/
/* 			$('.custom-field').removeClass('required');*/
/* */
/* 			for (i = 0; i < json.length; i++) {*/
/* 				custom_field = json[i];*/
/* */
/* 				$('.custom-field' + custom_field['custom_field_id']).show();*/
/* */
/* 				if (custom_field['required']) {*/
/* 					$('.custom-field' + custom_field['custom_field_id']).addClass('required');*/
/* 				}*/
/* 			}*/
/* 		},*/
/* 		error: function(xhr, ajaxOptions, thrownError) {*/
/* 			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 		}*/
/* 	});*/
/* });*/
/* */
/* $('select[name=\'customer_group_id\']').trigger('change');*/
/* //--></script>*/
/* <script type="text/javascript"><!--*/
/* var address_row = {{ address_row }};*/
/* */
/* $('#address-add').on('click', function(e) {*/
/* 	e.preventDefault();*/
/* */
/* 	html = '<div class="tab-pane" id="tab-address' + address_row + '">';*/
/* 	html += '  <input type="hidden" name="address[' + address_row + '][address_id]" value="" />';*/
/* */
/* 	html += '  <div class="form-group row required">';*/
/* 	html += '    <label class="col-sm-2 col-form-label" for="input-firstname' + address_row + '">{{ entry_firstname }}</label>';*/
/* 	html += '    <div class="col-sm-10"><input type="text" name="address[' + address_row + '][firstname]" value="" placeholder="{{ entry_firstname }}" id="input-firstname' + address_row + '" class="form-control" /></div>';*/
/* 	html += '  </div>';*/
/* */
/* 	html += '  <div class="form-group row required">';*/
/* 	html += '    <label class="col-sm-2 col-form-label" for="input-lastname' + address_row + '">{{ entry_lastname }}</label>';*/
/* 	html += '    <div class="col-sm-10"><input type="text" name="address[' + address_row + '][lastname]" value="" placeholder="{{ entry_lastname }}" id="input-lastname' + address_row + '" class="form-control" /></div>';*/
/* 	html += '  </div>';*/
/* */
/* 	html += '  <div class="form-group row">';*/
/* 	html += '    <label class="col-sm-2 col-form-label" for="input-company' + address_row + '">{{ entry_company }}</label>';*/
/* 	html += '    <div class="col-sm-10"><input type="text" name="address[' + address_row + '][company]" value="" placeholder="{{ entry_company }}" id="input-company' + address_row + '" class="form-control" /></div>';*/
/* 	html += '  </div>';*/
/* */
/* 	html += '  <div class="form-group row required">';*/
/* 	html += '    <label class="col-sm-2 col-form-label" for="input-address-1' + address_row + '">{{ entry_address_1 }}</label>';*/
/* 	html += '    <div class="col-sm-10"><input type="text" name="address[' + address_row + '][address_1]" value="" placeholder="{{ entry_address_1 }}" id="input-address-1' + address_row + '" class="form-control" /></div>';*/
/* 	html += '  </div>';*/
/* */
/* 	html += '  <div class="form-group row">';*/
/* 	html += '    <label class="col-sm-2 col-form-label" for="input-address-2' + address_row + '">{{ entry_address_2 }}</label>';*/
/* 	html += '    <div class="col-sm-10"><input type="text" name="address[' + address_row + '][address_2]" value="" placeholder="{{ entry_address_2 }}" id="input-address-2' + address_row + '" class="form-control" /></div>';*/
/* 	html += '  </div>';*/
/* */
/* 	html += '  <div class="form-group row required">';*/
/* 	html += '    <label class="col-sm-2 col-form-label" for="input-city' + address_row + '">{{ entry_city }}</label>';*/
/* 	html += '    <div class="col-sm-10"><input type="text" name="address[' + address_row + '][city]" value="" placeholder="{{ entry_city }}" id="input-city' + address_row + '" class="form-control" /></div>';*/
/* 	html += '  </div>';*/
/* */
/* 	html += '  <div class="form-group row required">';*/
/* 	html += '    <label class="col-sm-2 col-form-label" for="input-postcode' + address_row + '">{{ entry_postcode }}</label>';*/
/* 	html += '    <div class="col-sm-10"><input type="text" name="address[' + address_row + '][postcode]" value="" placeholder="{{ entry_postcode }}" id="input-postcode' + address_row + '" class="form-control" /></div>';*/
/* 	html += '  </div>';*/
/* */
/* 	html += '  <div class="form-group row required">';*/
/* 	html += '    <label class="col-sm-2 col-form-label" for="input-country' + address_row + '">{{ entry_country }}</label>';*/
/* 	html += '    <div class="col-sm-10"><select name="address[' + address_row + '][country_id]" id="input-country' + address_row + '" onchange="country(this, \'' + address_row + '\', \'0\');" class="form-control">';*/
/* 	html += '         <option value="">{{ text_select }}</option>';*/
/*   {% for country in countries %}*/
/* 	html += '         <option value="{{ country.country_id }}">{{ country.name|escape('js') }}</option>';*/
/*   {% endfor %}*/
/* 	html += '      </select></div>';*/
/* 	html += '  </div>';*/
/* */
/* 	html += '  <div class="form-group row required">';*/
/* 	html += '    <label class="col-sm-2 col-form-label" for="input-zone' + address_row + '">{{ entry_zone }}</label>';*/
/* 	html += '    <div class="col-sm-10"><select name="address[' + address_row + '][zone_id]" id="input-zone' + address_row + '" class="form-control"><option value="">{{ text_none }}</option></select></div>';*/
/* 	html += '  </div>';*/
/* */
/* 	// Custom Fields*/
/*   {% for custom_field in custom_fields %}*/
/*   {% if custom_field.location == 'address' %}*/
/*   {% if custom_field.type == 'select' %}*/
/* */
/* 	html += '  <div class="form-group row custom-field custom-field{{ custom_field.custom_field_id }}" data-sort="{{ custom_field.sort_order + 1 }}">';*/
/* 	html += '  		<label class="col-sm-2 col-form-label" for="input-address' + address_row + '-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name|e('js') }}</label>';*/
/* 	html += '  		<div class="col-sm-10">';*/
/* 	html += '  		  <select name="address[' + address_row + '][custom_field][{{ custom_field.custom_field_id }}]" id="input-address' + address_row + '-custom-field{{ custom_field.custom_field_id }}" class="form-control">';*/
/* 	html += '  			<option value="">{{ text_select }}</option>';*/
/* */
/*   {% for custom_field_value in custom_field.custom_field_value %}*/
/* 	html += '  			<option value="{{ custom_field_value.custom_field_value_id }}">{{ custom_field.name|e('js') }}</option>';*/
/*   {% endfor %}*/
/* */
/* 	html += '  		  </select>';*/
/* 	html += '  		</div>';*/
/* 	html += '  	  </div>';*/
/*   {% endif %}*/
/* */
/*   {% if custom_field.type == 'radio' %}*/
/* 	html += '  	  <div class="form-group row custom-field custom-field{{ custom_field.custom_field_id }}">';*/
/* 	html += '  		<label class="col-sm-2 col-form-label">{{ custom_field.name|e('js') }}</label>';*/
/* 	html += '  		<div class="col-sm-10">';*/
/* 	html += '  		  <div>';*/
/* */
/*   {% for custom_field_value in custom_field.custom_field_value %}*/
/* 	html += '  			<div class="radio"><label><input type="radio" name="address[' + address_row + '][custom_field][{{ custom_field.custom_field_id }}]" value="{{ custom_field_value.custom_field_value_id }}" /> {{ custom_field_value.name|e('js') }}</label></div>';*/
/*   {% endfor %}*/
/* */
/* 	html += '		  </div>';*/
/* 	html += '		</div>';*/
/* 	html += '	  </div>';*/
/*   {% endif %}*/
/* */
/*   {% if custom_field.type == 'checkbox' %}*/
/* 	html += '	  <div class="form-group row custom-field custom-field{{ custom_field.custom_field_id }}" data-sort="{{ custom_field.sort_order + 1 }}">';*/
/* 	html += '		<label class="col-sm-2 col-form-label">{{ custom_field.name|e('js') }}</label>';*/
/* 	html += '		<div class="col-sm-10">';*/
/* 	html += '		  <div>';*/
/* */
/*   {% for custom_field_value in custom_field.custom_field_value %}*/
/* 	html += '			<div class="checkbox"><label><input type="checkbox" name="address[{{ address_row }}][custom_field][{{ custom_field.custom_field_id }}][]" value="{{ custom_field_value.custom_field_value_id }}" /> {{ custom_field_value.name|e('js') }}</label></div>';*/
/*   {% endfor %}*/
/* */
/* 	html += '		  </div>';*/
/* 	html += '		</div>';*/
/* 	html += '	  </div>';*/
/*   {% endif %}*/
/* */
/*   {% if custom_field.type == 'text' %}*/
/* 	html += '	  <div class="form-group row custom-field custom-field{{ custom_field.custom_field_id }}" data-sort="{{ custom_field.sort_order + 1 }}">';*/
/* 	html += '		<label class="col-sm-2 col-form-label" for="input-address' + address_row + '-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name|e('js') }}</label>';*/
/* 	html += '		<div class="col-sm-10">';*/
/* 	html += '		  <input type="text" name="address[' + address_row + '][custom_field][{{ custom_field.custom_field_id }}]" value="{{ custom_field.value|e('js') }}" placeholder="{{ custom_field_value.name|e('js') }}" id="input-address' + address_row + '-custom-field{{ custom_field.custom_field_id }}" class="form-control" />';*/
/* 	html += '		</div>';*/
/* 	html += '	  </div>';*/
/*   {% endif %}*/
/* */
/*   {% if custom_field.type == 'textarea' %}*/
/* 	html += '	  <div class="form-group row custom-field custom-field{{ custom_field.custom_field_id }}" data-sort="{{ custom_field.sort_order + 1 }}">';*/
/* 	html += '		<label class="col-sm-2 col-form-label" for="input-address' + address_row + '-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name|e('js') }}</label>';*/
/* 	html += '		<div class="col-sm-10">';*/
/* 	html += '		  <textarea name="address[' + address_row + '][custom_field][{{ custom_field.custom_field_id }}]" rows="5" placeholder="{{ custom_field_value.name|e('js') }}" id="input-address' + address_row + '-custom-field{{ custom_field.custom_field_id }}" class="form-control">{{ custom_field.value|e('js') }}</textarea>';*/
/* 	html += '		</div>';*/
/* 	html += '	  </div>';*/
/*   {% endif %}*/
/* */
/*   {% if custom_field.type == 'file' %}*/
/* 	html += '	  <div class="form-group row custom-field custom-field{{ custom_field.custom_field_id }}" data-sort="{{ custom_field.sort_order + 1 }}">';*/
/* 	html += '		<label class="col-sm-2 col-form-label">{{ custom_field.name|e('js') }}</label>';*/
/* 	html += '		<div class="col-sm-10">';*/
/* 	html += '		  <button type="button" id="button-address' + address_row + '-custom-field{{ custom_field.custom_field_id }}" data-loading-text="{{ text_loading }}" class="btn btn-light"><i class="fa fa-upload"></i> {{ button_upload }}</button>';*/
/* 	html += '		  <input type="hidden" name="address[' + address_row + '][{{ custom_field.custom_field_id }}]" value="" id="input-address' + address_row + '-custom-field{{ custom_field.custom_field_id }}" />';*/
/* 	html += '		</div>';*/
/* 	html += '	  </div>';*/
/*   {% endif %}*/
/* */
/*   {% if custom_field.type == 'date' %}*/
/* 	html += '	  <div class="form-group row custom-field custom-field{{ custom_field.custom_field_id }}" data-sort="{{ custom_field.sort_order + 1 }}">';*/
/* 	html += '		<label class="col-sm-2 col-form-label" for="input-address' + address_row + '-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name|e('js') }}</label>';*/
/* 	html += '		<div class="col-sm-10">';*/
/* 	html += '		  <div class="input-group date"><input type="text" name="address[' + address_row + '][custom_field][{{ custom_field.custom_field_id }}]" value="{{ custom_field.value|e('js') }}" placeholder="{{ custom_field.name|e('js') }} data-date-format="YYYY-MM-DD" id="input-address' + address_row + '-custom-field{{ custom_field.custom_field_id }}" class="form-control" /><div class="input-group-append"><button type="button" class="btn btn-light"><i class="fa fa-calendar"></i></button></div></div>';*/
/* 	html += '		</div>';*/
/* 	html += '	  </div>';*/
/*   {% endif %}*/
/* */
/*   {% if custom_field.type == 'time' %}*/
/* 	html += '	  <div class="form-group custom-field custom-field{{ custom_field.custom_field_id }}" data-sort="{{ custom_field.sort_order + 1 }}">';*/
/* 	html += '		<label class="col-sm-2 col-form-label" for="input-address' + address_row + '-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name|e('js') }}</label>';*/
/* 	html += '		<div class="col-sm-10">';*/
/* 	html += '		  <div class="input-group time"><input type="text" name="address[' + address_row + '][custom_field][{{ custom_field.custom_field_id }}]" value="{{ custom_field.value|e('js') }}" placeholder="{{ custom_field.name|e('js') }}" data-date-format="HH:mm" id="input-address' + address_row + '-custom-field{{ custom_field.custom_field_id }}" class="form-control" /><div class="input-group-append"><button type="button" class="btn btn-light"><i class="fa fa-calendar"></i></button></div></div>';*/
/* 	html += '		</div>';*/
/* 	html += '	  </div>';*/
/*   {% endif %}*/
/* */
/*   {% if custom_field.type == 'datetime' %}*/
/* 	html += '	  <div class="form-group row custom-field custom-field{{ custom_field.custom_field_id }}" data-sort="{{ custom_field.sort_order + 1 }}">';*/
/* 	html += '		<label class="col-sm-2 col-form-label" for="input-address' + address_row + '-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name|e('js') }}</label>';*/
/* 	html += '		<div class="col-sm-10">';*/
/* 	html += '		  <div class="input-group datetime"><input type="text" name="address[' + address_row + '][custom_field][{{ custom_field.custom_field_id }}]" value="{{ custom_field.value|e('js') }}" placeholder="{{ custom_field.name|e('js') }}" data-date-format="YYYY-MM-DD HH:mm" id="input-address' + address_row + '-custom-field{{ custom_field.custom_field_id }}" class="form-control" /><div class="input-group-append"><button type="button" class="btn btn-light"><i class="fa fa-calendar"></i></button></div></div>';*/
/* 	html += '		</div>';*/
/* 	html += '	  </div>';*/
/*   {% endif %}*/
/* */
/*   {% endif %}*/
/*   {% endfor %}*/
/* */
/* 	html += '  <div class="form-group row">';*/
/* 	html += '    <label class="col-sm-2 col-form-label">{{ entry_default }}</label>';*/
/* 	html += '    <div class="col-sm-10"><label class="radio"><input type="radio" name="address[' + address_row + '][default]" value="1" /></label></div>';*/
/* 	html += '  </div>';*/
/* */
/* 	html += '</div>';*/
/* */
/* 	$('#tab-general .tab-content').append(html);*/
/* */
/* 	$('select[name=\'customer_group_id\']').trigger('change');*/
/* */
/* 	$('select[name=\'address[' + address_row + '][country_id]\']').trigger('change');*/
/* */
/* 	$('#address-add').parent().before('<li class="nav-item"><a href="#tab-address' + address_row + '" data-toggle="tab" class="nav-link"><i class="fa fa-minus-circle" onclick="$(\'#address a:first\').tab(\'show\'); $(\'a[href=\\\'#tab-address' + address_row + '\\\']\').parent().remove(); $(\'#tab-address' + address_row + '\').remove();"></i> {{ tab_address }} ' + address_row + '</a></li>');*/
/* */
/* 	$('#address a[href=\'#tab-address' + address_row + '\']').tab('show');*/
/* */
/* 	$('.date').datetimepicker();*/
/* 	$('.time').datetimepicker();*/
/* 	$('.datetime').datetimepicker();*/
/* */
/* 	$('#tab-address' + address_row + ' .form-group[data-sort]').detach().each(function() {*/
/* 		if ($(this).attr('data-sort') >= 0 && $(this).attr('data-sort') <= $('#tab-address' + address_row + ' .form-group').length) {*/
/* 			$('#tab-address' + address_row + ' .form-group').eq($(this).attr('data-sort')).before(this);*/
/* 		}*/
/* */
/* 		if ($(this).attr('data-sort') > $('#tab-address' + address_row + ' .form-group').length) {*/
/* 			$('#tab-address' + address_row + ' .form-group:last').after(this);*/
/* 		}*/
/* */
/* 		if ($(this).attr('data-sort') < -$('#tab-address' + address_row + ' .form-group').length) {*/
/* 			$('#tab-address' + address_row + ' .form-group:first').before(this);*/
/* 		}*/
/* 	});*/
/* */
/* 	address_row++;*/
/* });*/
/* */
/* //--></script>*/
/* <script type="text/javascript"><!--*/
/* function country(element, index, zone_id) {*/
/* 	$.ajax({*/
/* 		url: 'index.php?route=localisation/country/country&user_token={{ user_token }}&country_id=' + element.value,*/
/* 		dataType: 'json',*/
/* 		beforeSend: function() {*/
/* 			$('select[name=\'address[' + index + '][country_id]\']').prop('disabled', true);*/
/* 		},*/
/* 		complete: function() {*/
/* 			$('select[name=\'address[' + index + '][country_id]\']').prop('disabled', false);*/
/* 		},*/
/* 		success: function(json) {*/
/* 			if (json['postcode_required'] == '1') {*/
/* 				$('input[name=\'address[' + index + '][postcode]\']').parent().parent().addClass('required');*/
/* 			} else {*/
/* 				$('input[name=\'address[' + index + '][postcode]\']').parent().parent().removeClass('required');*/
/* 			}*/
/* */
/* 			html = '<option value="">{{ text_select }}</option>';*/
/* */
/* 			if (json['zone'] && json['zone'] != '') {*/
/* 				for (i = 0; i < json['zone'].length; i++) {*/
/* 					html += '<option value="' + json['zone'][i]['zone_id'] + '"';*/
/* */
/* 					if (json['zone'][i]['zone_id'] == zone_id) {*/
/* 						html += ' selected="selected"';*/
/* 					}*/
/* */
/* 					html += '>' + json['zone'][i]['name'] + '</option>';*/
/* 				}*/
/* 			} else {*/
/* 				html += '<option value="0">{{ text_none }}</option>';*/
/* 			}*/
/* */
/* 			$('select[name=\'address[' + index + '][zone_id]\']').html(html);*/
/* 		},*/
/* 		error: function(xhr, ajaxOptions, thrownError) {*/
/* 			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 		}*/
/* 	});*/
/* }*/
/* */
/* $('select[name$=\'[country_id]\']').trigger('change');*/
/* //--></script>*/
/* <script type="text/javascript"><!--*/
/* $('#history').delegate('.pagination a', 'click', function(e) {*/
/* 	e.preventDefault();*/
/* */
/* 	$('#history').load(this.href);*/
/* });*/
/* */
/* $('#history').load('index.php?route=customer/customer/history&user_token={{ user_token }}&customer_id={{ customer_id }}');*/
/* */
/* $('#button-history').on('click', function(e) {*/
/* 	e.preventDefault();*/
/* */
/* 	$.ajax({*/
/* 		url: 'index.php?route=customer/customer/addhistory&user_token={{ user_token }}&customer_id={{ customer_id }}',*/
/* 		type: 'post',*/
/* 		dataType: 'json',*/
/* 		data: 'comment=' + encodeURIComponent($('#tab-history textarea[name=\'comment\']').val()),*/
/* 		beforeSend: function() {*/
/* 			$('#button-history').button('loading');*/
/* 		},*/
/* 		complete: function() {*/
/* 			$('#button-history').button('reset');*/
/* 		},*/
/* 		success: function(json) {*/
/* 			$('.alert-dismissible').remove();*/
/* */
/* 			if (json['error']) {*/
/* 				$('#tab-history').prepend('<div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> ' + json['error'] + ' <button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/* 			}*/
/* */
/* 			if (json['success']) {*/
/* 				$('#tab-history').prepend('<div class="alert alert-success alert-dismissible"><i class="fa fa-check-circle"></i> ' + json['success'] + ' <button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/* */
/* 				$('#history').load('index.php?route=customer/customer/history&user_token={{ user_token }}&customer_id={{ customer_id }}');*/
/* */
/* 				$('#tab-history textarea[name=\'comment\']').val('');*/
/* 			}*/
/* 		},*/
/* 		error: function(xhr, ajaxOptions, thrownError) {*/
/* 			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 		}*/
/* 	});*/
/* });*/
/* //--></script>*/
/* <script type="text/javascript"><!--*/
/* $('#transaction').delegate('.pagination a', 'click', function(e) {*/
/* 	e.preventDefault();*/
/* */
/* 	$('#transaction').load(this.href);*/
/* });*/
/* */
/* $('#transaction').load('index.php?route=customer/customer/transaction&user_token={{ user_token }}&customer_id={{ customer_id }}');*/
/* */
/* $('#button-transaction').on('click', function(e) {*/
/* 	e.preventDefault();*/
/* */
/* 	$.ajax({*/
/* 		url: 'index.php?route=customer/customer/addtransaction&user_token={{ user_token }}&customer_id={{ customer_id }}',*/
/* 		type: 'post',*/
/* 		dataType: 'json',*/
/* 		data: 'description=' + encodeURIComponent($('#tab-transaction input[name=\'description\']').val()) + '&amount=' + encodeURIComponent($('#tab-transaction input[name=\'amount\']').val()),*/
/* 		beforeSend: function() {*/
/* 			$('#button-transaction').button('loading');*/
/* 		},*/
/* 		complete: function() {*/
/* 			$('#button-transaction').button('reset');*/
/* 		},*/
/* 		success: function(json) {*/
/* 			$('.alert-dismissible').remove();*/
/* */
/* 			if (json['error']) {*/
/* 				$('#tab-transaction').prepend('<div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> ' + json['error'] + ' <button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/* 			}*/
/* */
/* 			if (json['success']) {*/
/* 				$('#tab-transaction').prepend('<div class="alert alert-success alert-dismissible"><i class="fa fa-check-circle"></i> ' + json['success'] + ' <button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/* */
/* 				$('#transaction').load('index.php?route=customer/customer/transaction&user_token={{ user_token }}&customer_id={{ customer_id }}');*/
/* */
/* 				$('#tab-transaction input[name=\'amount\']').val('');*/
/* 				$('#tab-transaction input[name=\'description\']').val('');*/
/* 			}*/
/* 		},*/
/* 		error: function(xhr, ajaxOptions, thrownError) {*/
/* 			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 		}*/
/* 	});*/
/* });*/
/* //--></script>*/
/* <script type="text/javascript"><!--*/
/* $('#reward').delegate('.pagination a', 'click', function(e) {*/
/* 	e.preventDefault();*/
/* */
/* 	$('#reward').load(this.href);*/
/* });*/
/* */
/* $('#reward').load('index.php?route=customer/customer/reward&user_token={{ user_token }}&customer_id={{ customer_id }}');*/
/* */
/* $('#button-reward').on('click', function(e) {*/
/* 	e.preventDefault();*/
/* */
/* 	$.ajax({*/
/* 		url: 'index.php?route=customer/customer/addreward&user_token={{ user_token }}&customer_id={{ customer_id }}',*/
/* 		type: 'post',*/
/* 		dataType: 'json',*/
/* 		data: 'description=' + encodeURIComponent($('#tab-reward input[name=\'description\']').val()) + '&points=' + encodeURIComponent($('#tab-reward input[name=\'points\']').val()),*/
/* 		beforeSend: function() {*/
/* 			$('#button-reward').button('loading');*/
/* 		},*/
/* 		complete: function() {*/
/* 			$('#button-reward').button('reset');*/
/* 		},*/
/* 		success: function(json) {*/
/* 			$('.alert-dismissible').remove();*/
/* */
/* 			if (json['error']) {*/
/* 				$('#tab-reward').prepend('<div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> ' + json['error'] + ' <button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/* 			}*/
/* */
/* 			if (json['success']) {*/
/* 				$('#tab-reward').prepend('<div class="alert alert-success alert-dismissible"><i class="fa fa-check-circle"></i> ' + json['success'] + ' <button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/* */
/* 				$('#reward').load('index.php?route=customer/customer/reward&user_token={{ user_token }}&customer_id={{ customer_id }}');*/
/* */
/* 				$('#tab-reward input[name=\'points\']').val('');*/
/* 				$('#tab-reward input[name=\'description\']').val('');*/
/* 			}*/
/* 		},*/
/* 		error: function(xhr, ajaxOptions, thrownError) {*/
/* 			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 		}*/
/* 	});*/
/* });*/
/* */
/* $('#ip').delegate('.pagination a', 'click', function(e) {*/
/* 	e.preventDefault();*/
/* */
/* 	$('#ip').load(this.href);*/
/* });*/
/* */
/* $('#ip').load('index.php?route=customer/customer/ip&user_token={{ user_token }}&customer_id={{ customer_id }}');*/
/* */
/* $('#content').delegate('button[id^=\'button-custom-field\'], button[id^=\'button-address\']', 'click', function() {*/
/* 	var element = this;*/
/* */
/* 	$('#form-upload').remove();*/
/* */
/* 	$('body').prepend('<form enctype="multipart/form-data" id="form-upload" style="display: none;"><input type="file" name="file" /></form>');*/
/* */
/* 	$('#form-upload input[name=\'file\']').trigger('click');*/
/* */
/* 	if (typeof timer != 'undefined') {*/
/* 		clearInterval(timer);*/
/* 	}*/
/* */
/* 	timer = setInterval(function() {*/
/* 		if ($('#form-upload input[name=\'file\']').val() != '') {*/
/* 			clearInterval(timer);*/
/* */
/* 			$.ajax({*/
/* 				url: 'index.php?route=tool/upload/upload&user_token={{ user_token }}',*/
/* 				type: 'post',*/
/* 				dataType: 'json',*/
/* 				data: new FormData($('#form-upload')[0]),*/
/* 				cache: false,*/
/* 				contentType: false,*/
/* 				processData: false,*/
/* 				beforeSend: function() {*/
/* 					$(element).button('loading');*/
/* 				},*/
/* 				complete: function() {*/
/* 					$(element).button('reset');*/
/* 				},*/
/* 				success: function(json) {*/
/* 					$(element).parent().find('.invalid-tooltip').remove();*/
/* */
/* 					if (json['error']) {*/
/* 						$(element).parent().find('input[type=\'hidden\']').after('<div class="invalid-tooltip d-block">' + json['error'] + '</div>');*/
/* 					}*/
/* */
/* 					if (json['success']) {*/
/* 						alert(json['success']);*/
/* 					}*/
/* */
/* 					if (json['code']) {*/
/* 						$(element).parent().find('input[type=\'hidden\']').val(json['code']);*/
/* 					}*/
/* 				},*/
/* 				error: function(xhr, ajaxOptions, thrownError) {*/
/* 					alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 				}*/
/* 			});*/
/* 		}*/
/* 	}, 500);*/
/* });*/
/* */
/* $('.date').datetimepicker();*/
/* $('.time').datetimepicker();*/
/* $('.datetime').datetimepicker();*/
/* */
/* // Sort the custom fields*/
/* {% set address_row = 1 %}*/
/* {% for address in addresses %}*/
/* $('#tab-address{{ address_row }} .form-group[data-sort]').detach().each(function() {*/
/* 	if ($(this).attr('data-sort') >= 0 && $(this).attr('data-sort') <= $('#tab-address{{ address_row }} .form-group').length) {*/
/* 		$('#tab-address{{ address_row }} .form-group').eq($(this).attr('data-sort')).before(this);*/
/* 	}*/
/* */
/* 	if ($(this).attr('data-sort') > $('#tab-address{{ address_row }} .form-group').length) {*/
/* 		$('#tab-address{{ address_row }} .form-group:last').after(this);*/
/* 	}*/
/* */
/* 	if ($(this).attr('data-sort') < -$('#tab-address{{ address_row }} .form-group').length) {*/
/* 		$('#tab-address{{ address_row }} .form-group:first').before(this);*/
/* 	}*/
/* });*/
/* {% set address_row = address_row + 1 %}*/
/* {% endfor %}*/
/* */
/* $('#tab-customer .form-group[data-sort]').detach().each(function() {*/
/* 	if ($(this).attr('data-sort') >= 0 && $(this).attr('data-sort') <= $('#tab-customer .form-group').length) {*/
/* 		$('#tab-customer .form-group').eq($(this).attr('data-sort')).before(this);*/
/* 	}*/
/* */
/* 	if ($(this).attr('data-sort') > $('#tab-customer .form-group').length) {*/
/* 		$('#tab-customer .form-group:last').after(this);*/
/* 	}*/
/* */
/* 	if ($(this).attr('data-sort') < -$('#tab-customer .form-group').length) {*/
/* 		$('#tab-customer .form-group:first').before(this);*/
/* 	}*/
/* });*/
/* //--></script>*/
/* <script type="text/javascript"><!--*/
/* $('input[name=\'payment\']').on('change', function() {*/
/* 	$('.payment').hide();*/
/* */
/* 	$('#payment-' + this.value).show();*/
/* });*/
/* */
/* $('input[name=\'payment\']:checked').trigger('change');*/
/* //--></script>*/
/* {{ footer }}*/
