<?php

/* user/api_form.twig */
class __TwigTemplate_0faa9b2cd607d0f75511298487f6fb9a43480b9d437555db34ce82115b61a872 extends Twig_Template
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
        <button type=\"submit\" form=\"form-api\" data-toggle=\"tooltip\" title=\"";
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
  <div class=\"container-fluid\">";
        // line 18
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            // line 19
            echo "      <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
      </div>
    ";
        }
        // line 23
        echo "    <div class=\"card\">
      <div class=\"card-header\"><i class=\"fa fa-pencil\"></i> ";
        // line 24
        echo (isset($context["text_form"]) ? $context["text_form"] : null);
        echo "</div>
      <div class=\"card-body\">
        <form action=\"";
        // line 26
        echo (isset($context["action"]) ? $context["action"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-api\">
          <ul class=\"nav nav-tabs\">
            <li class=\"nav-item\"><a href=\"#tab-general\" data-toggle=\"tab\" class=\"nav-link active\">";
        // line 28
        echo (isset($context["tab_general"]) ? $context["tab_general"] : null);
        echo "</a></li>
            <li class=\"nav-item\"><a href=\"#tab-ip\" data-toggle=\"tab\" class=\"nav-link\">";
        // line 29
        echo (isset($context["tab_ip"]) ? $context["tab_ip"] : null);
        echo "</a></li>
            <li class=\"nav-item\"><a href=\"#tab-session\" data-toggle=\"tab\" class=\"nav-link\">";
        // line 30
        echo (isset($context["tab_session"]) ? $context["tab_session"] : null);
        echo "</a></li>
          </ul>
          <div class=\"tab-content\">
            <div class=\"tab-pane active\" id=\"tab-general\">
              <div class=\"form-group row required\">
                <label class=\"col-sm-2 col-form-label\" for=\"input-username\">";
        // line 35
        echo (isset($context["entry_username"]) ? $context["entry_username"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"username\" value=\"";
        // line 37
        echo (isset($context["username"]) ? $context["username"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_username"]) ? $context["entry_username"] : null);
        echo "\" id=\"input-username\" class=\"form-control\"/>
                  ";
        // line 38
        if ((isset($context["error_username"]) ? $context["error_username"] : null)) {
            // line 39
            echo "                    <div class=\"invalid-tooltip\">";
            echo (isset($context["error_username"]) ? $context["error_username"] : null);
            echo "</div>
                  ";
        }
        // line 40
        echo "</div>
              </div>
              <div class=\"form-group row required\">
                <label class=\"col-sm-2 col-form-label\" for=\"input-key\">";
        // line 43
        echo (isset($context["entry_key"]) ? $context["entry_key"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <textarea name=\"key\" placeholder=\"";
        // line 45
        echo (isset($context["entry_key"]) ? $context["entry_key"] : null);
        echo "\" rows=\"5\" id=\"input-key\" class=\"form-control\">";
        echo (isset($context["key"]) ? $context["key"] : null);
        echo "</textarea>
                  <br/>
                  <button type=\"button\" id=\"button-generate\" class=\"btn btn-primary\"><i class=\"fa fa-refresh\"></i> ";
        // line 47
        echo (isset($context["button_generate"]) ? $context["button_generate"] : null);
        echo "</button>
                  ";
        // line 48
        if ((isset($context["error_key"]) ? $context["error_key"] : null)) {
            // line 49
            echo "                    <div class=\"invalid-tooltip\">";
            echo (isset($context["error_key"]) ? $context["error_key"] : null);
            echo "</div>
                  ";
        }
        // line 50
        echo "</div>
              </div>
              <div class=\"form-group row\">
                <label class=\"col-sm-2 col-form-label\" for=\"input-status\">";
        // line 53
        echo (isset($context["entry_status"]) ? $context["entry_status"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"status\" id=\"input-status\" class=\"form-control\">
                    ";
        // line 56
        if ((isset($context["status"]) ? $context["status"] : null)) {
            // line 57
            echo "                      <option value=\"0\">";
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                      <option value=\"1\" selected=\"selected\">";
            // line 58
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                    ";
        } else {
            // line 60
            echo "                      <option value=\"0\" selected=\"selected\">";
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                      <option value=\"1\">";
            // line 61
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                    ";
        }
        // line 63
        echo "                  </select>
                </div>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-ip\">
              <div class=\"alert alert-info\"><i class=\"fa fa-info-circle\"></i> ";
        // line 68
        echo (isset($context["text_ip"]) ? $context["text_ip"] : null);
        echo "</div>
              <div class=\"table-responsive\">
                <table id=\"ip\" class=\"table table-striped table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-left\">";
        // line 73
        echo (isset($context["entry_ip"]) ? $context["entry_ip"] : null);
        echo "</td>
                      <td class=\"text-left\"></td>
                    </tr>
                  </thead>
                  <tbody>

                    ";
        // line 79
        $context["ip_row"] = 0;
        // line 80
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["api_ips"]) ? $context["api_ips"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["api_ip"]) {
            // line 81
            echo "                      <tr id=\"ip-row";
            echo (isset($context["ip_row"]) ? $context["ip_row"] : null);
            echo "\">
                        <td class=\"text-left\"><input type=\"text\" name=\"api_ip[]\" value=\"";
            // line 82
            echo $context["api_ip"];
            echo "\" placeholder=\"";
            echo (isset($context["entry_ip"]) ? $context["entry_ip"] : null);
            echo "\" class=\"form-control\"/></td>
                        <td class=\"text-left\"><button type=\"button\" onclick=\"\$('#ip-row";
            // line 83
            echo (isset($context["ip_row"]) ? $context["ip_row"] : null);
            echo "').remove()\" data-toggle=\"tooltip\" title=\"";
            echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>
                      </tr>
                      ";
            // line 85
            $context["ip_row"] = ((isset($context["ip_row"]) ? $context["ip_row"] : null) + 1);
            // line 86
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['api_ip'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 87
        echo "                  </tbody>

                  <tfoot>
                    <tr>
                      <td></td>
                      <td class=\"text-left\"><button type=\"button\" onclick=\"addIp()\" data-toggle=\"tooltip\" title=\"";
        // line 92
        echo (isset($context["button_ip_add"]) ? $context["button_ip_add"] : null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button></td>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-session\">
              <div class=\"table-responsive\">
                <table id=\"session\" class=\"table table-striped table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-left\">";
        // line 103
        echo (isset($context["column_token"]) ? $context["column_token"] : null);
        echo "</td>
                      <td class=\"text-left\">";
        // line 104
        echo (isset($context["column_ip"]) ? $context["column_ip"] : null);
        echo "</td>
                      <td class=\"text-left\">";
        // line 105
        echo (isset($context["column_date_added"]) ? $context["column_date_added"] : null);
        echo "</td>
                      <td class=\"text-left\">";
        // line 106
        echo (isset($context["column_date_modified"]) ? $context["column_date_modified"] : null);
        echo "</td>
                      <td class=\"text-right\">";
        // line 107
        echo (isset($context["column_action"]) ? $context["column_action"] : null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>

                    ";
        // line 112
        if ((isset($context["api_sessions"]) ? $context["api_sessions"] : null)) {
            // line 113
            echo "                      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["api_sessions"]) ? $context["api_sessions"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["api_session"]) {
                // line 114
                echo "                        <tr>
                          <td class=\"text-left\">";
                // line 115
                echo $this->getAttribute($context["api_session"], "session_id", array());
                echo "</td>
                          <td class=\"text-left\">";
                // line 116
                echo $this->getAttribute($context["api_session"], "ip", array());
                echo "</td>
                          <td class=\"text-left\">";
                // line 117
                echo $this->getAttribute($context["api_session"], "date_added", array());
                echo "</td>
                          <td class=\"text-left\">";
                // line 118
                echo $this->getAttribute($context["api_session"], "date_modified", array());
                echo "</td>
                          <td class=\"text-right\"><button type=\"button\" value=\"";
                // line 119
                echo $this->getAttribute($context["api_session"], "api_session_id", array());
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
                echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>
                        </tr>
                      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['api_session'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 122
            echo "                    ";
        } else {
            // line 123
            echo "                      <tr>
                        <td class=\"text-center\" colspan=\"5\">";
            // line 124
            echo (isset($context["text_no_results"]) ? $context["text_no_results"] : null);
            echo "</td>
                      </tr>
                    ";
        }
        // line 127
        echo "                  </tbody>

                </table>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('#button-generate').on('click', function() {
\trand = '';

\tstring = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';

\tfor (i = 0; i < 256; i++) {
\t\trand += string[Math.floor(Math.random() * (string.length - 1))];
\t}

\t\$('#input-key').val(rand);
});
//--></script>
<script type=\"text/javascript\"><!--
var ip_row = ";
        // line 152
        echo (isset($context["ip_row"]) ? $context["ip_row"] : null);
        echo ";

function addIp() {
\thtml = '<tr id=\"ip-row' + ip_row + '\">';
\thtml += '  <td class=\"text-right\"><input type=\"text\" name=\"api_ip[]\" value=\"\" placeholder=\"";
        // line 156
        echo (isset($context["entry_ip"]) ? $context["entry_ip"] : null);
        echo "\" class=\"form-control\" /></td>';
\thtml += '  <td class=\"text-left\"><button type=\"button\" onclick=\"\$(\\'#ip-row' + ip_row + '\\').remove();\" data-toggle=\"tooltip\" title=\"";
        // line 157
        echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>';
\thtml += '</tr>';

\t\$('#ip tbody').append(html);

\tip_row++;
}

//--></script>
<script type=\"text/javascript\"><!--
\$('#session button').on('click', function(e) {
\te.preventDefault();

\tvar element = this;

\t\$.ajax({
\t\turl: 'index.php?route=user/api/deletesession&user_token=";
        // line 173
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&api_session_id=' + \$(element).val(),
\t\ttype: 'post',
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$(element).button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$(element).button('reset');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible').remove();

\t\t\tif (json['error']) {
\t\t\t\t\$('#tab-session').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
\t\t\t}

\t\t\tif (json['success']) {
\t\t\t\t\$('#tab-session').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');

\t\t\t\t\$(element).parent().parent().remove();
\t\t\t}
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});
//--></script>
";
        // line 201
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "user/api_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  424 => 201,  393 => 173,  374 => 157,  370 => 156,  363 => 152,  336 => 127,  330 => 124,  327 => 123,  324 => 122,  313 => 119,  309 => 118,  305 => 117,  301 => 116,  297 => 115,  294 => 114,  289 => 113,  287 => 112,  279 => 107,  275 => 106,  271 => 105,  267 => 104,  263 => 103,  249 => 92,  242 => 87,  236 => 86,  234 => 85,  227 => 83,  221 => 82,  216 => 81,  211 => 80,  209 => 79,  200 => 73,  192 => 68,  185 => 63,  180 => 61,  175 => 60,  170 => 58,  165 => 57,  163 => 56,  157 => 53,  152 => 50,  146 => 49,  144 => 48,  140 => 47,  133 => 45,  128 => 43,  123 => 40,  117 => 39,  115 => 38,  109 => 37,  104 => 35,  96 => 30,  92 => 29,  88 => 28,  83 => 26,  78 => 24,  75 => 23,  67 => 19,  65 => 18,  59 => 14,  48 => 12,  44 => 11,  38 => 8,  32 => 7,  28 => 6,  19 => 1,);
    }
}
/* {{ header }}{{ column_left }}*/
/* <div id="content">*/
/*   <div class="page-header">*/
/*     <div class="container-fluid">*/
/*       <div class="pull-right">*/
/*         <button type="submit" form="form-api" data-toggle="tooltip" title="{{ button_save }}" class="btn btn-primary"><i class="fa fa-save"></i></button>*/
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
/*   <div class="container-fluid">{% if error_warning %}*/
/*       <div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> {{ error_warning }}*/
/*         <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*       </div>*/
/*     {% endif %}*/
/*     <div class="card">*/
/*       <div class="card-header"><i class="fa fa-pencil"></i> {{ text_form }}</div>*/
/*       <div class="card-body">*/
/*         <form action="{{ action }}" method="post" enctype="multipart/form-data" id="form-api">*/
/*           <ul class="nav nav-tabs">*/
/*             <li class="nav-item"><a href="#tab-general" data-toggle="tab" class="nav-link active">{{ tab_general }}</a></li>*/
/*             <li class="nav-item"><a href="#tab-ip" data-toggle="tab" class="nav-link">{{ tab_ip }}</a></li>*/
/*             <li class="nav-item"><a href="#tab-session" data-toggle="tab" class="nav-link">{{ tab_session }}</a></li>*/
/*           </ul>*/
/*           <div class="tab-content">*/
/*             <div class="tab-pane active" id="tab-general">*/
/*               <div class="form-group row required">*/
/*                 <label class="col-sm-2 col-form-label" for="input-username">{{ entry_username }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="username" value="{{ username }}" placeholder="{{ entry_username }}" id="input-username" class="form-control"/>*/
/*                   {% if error_username %}*/
/*                     <div class="invalid-tooltip">{{ error_username }}</div>*/
/*                   {% endif %}</div>*/
/*               </div>*/
/*               <div class="form-group row required">*/
/*                 <label class="col-sm-2 col-form-label" for="input-key">{{ entry_key }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <textarea name="key" placeholder="{{ entry_key }}" rows="5" id="input-key" class="form-control">{{ key }}</textarea>*/
/*                   <br/>*/
/*                   <button type="button" id="button-generate" class="btn btn-primary"><i class="fa fa-refresh"></i> {{ button_generate }}</button>*/
/*                   {% if error_key %}*/
/*                     <div class="invalid-tooltip">{{ error_key }}</div>*/
/*                   {% endif %}</div>*/
/*               </div>*/
/*               <div class="form-group row">*/
/*                 <label class="col-sm-2 col-form-label" for="input-status">{{ entry_status }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <select name="status" id="input-status" class="form-control">*/
/*                     {% if status %}*/
/*                       <option value="0">{{ text_disabled }}</option>*/
/*                       <option value="1" selected="selected">{{ text_enabled }}</option>*/
/*                     {% else %}*/
/*                       <option value="0" selected="selected">{{ text_disabled }}</option>*/
/*                       <option value="1">{{ text_enabled }}</option>*/
/*                     {% endif %}*/
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/*             </div>*/
/*             <div class="tab-pane" id="tab-ip">*/
/*               <div class="alert alert-info"><i class="fa fa-info-circle"></i> {{ text_ip }}</div>*/
/*               <div class="table-responsive">*/
/*                 <table id="ip" class="table table-striped table-bordered table-hover">*/
/*                   <thead>*/
/*                     <tr>*/
/*                       <td class="text-left">{{ entry_ip }}</td>*/
/*                       <td class="text-left"></td>*/
/*                     </tr>*/
/*                   </thead>*/
/*                   <tbody>*/
/* */
/*                     {% set ip_row = 0 %}*/
/*                     {% for api_ip in api_ips %}*/
/*                       <tr id="ip-row{{ ip_row }}">*/
/*                         <td class="text-left"><input type="text" name="api_ip[]" value="{{ api_ip }}" placeholder="{{ entry_ip }}" class="form-control"/></td>*/
/*                         <td class="text-left"><button type="button" onclick="$('#ip-row{{ ip_row }}').remove()" data-toggle="tooltip" title="{{ button_remove }}" class="btn btn-danger"><i class="fa fa-minus-circle"></i></button></td>*/
/*                       </tr>*/
/*                       {% set ip_row = ip_row + 1 %}*/
/*                     {% endfor %}*/
/*                   </tbody>*/
/* */
/*                   <tfoot>*/
/*                     <tr>*/
/*                       <td></td>*/
/*                       <td class="text-left"><button type="button" onclick="addIp()" data-toggle="tooltip" title="{{ button_ip_add }}" class="btn btn-primary"><i class="fa fa-plus-circle"></i></button></td>*/
/*                     </tr>*/
/*                   </tfoot>*/
/*                 </table>*/
/*               </div>*/
/*             </div>*/
/*             <div class="tab-pane" id="tab-session">*/
/*               <div class="table-responsive">*/
/*                 <table id="session" class="table table-striped table-bordered table-hover">*/
/*                   <thead>*/
/*                     <tr>*/
/*                       <td class="text-left">{{ column_token }}</td>*/
/*                       <td class="text-left">{{ column_ip }}</td>*/
/*                       <td class="text-left">{{ column_date_added }}</td>*/
/*                       <td class="text-left">{{ column_date_modified }}</td>*/
/*                       <td class="text-right">{{ column_action }}</td>*/
/*                     </tr>*/
/*                   </thead>*/
/*                   <tbody>*/
/* */
/*                     {% if api_sessions %}*/
/*                       {% for api_session in api_sessions %}*/
/*                         <tr>*/
/*                           <td class="text-left">{{ api_session.session_id }}</td>*/
/*                           <td class="text-left">{{ api_session.ip }}</td>*/
/*                           <td class="text-left">{{ api_session.date_added }}</td>*/
/*                           <td class="text-left">{{ api_session.date_modified }}</td>*/
/*                           <td class="text-right"><button type="button" value="{{ api_session.api_session_id }}" data-toggle="tooltip" title="{{ button_remove }}" class="btn btn-danger"><i class="fa fa-minus-circle"></i></button></td>*/
/*                         </tr>*/
/*                       {% endfor %}*/
/*                     {% else %}*/
/*                       <tr>*/
/*                         <td class="text-center" colspan="5">{{ text_no_results }}</td>*/
/*                       </tr>*/
/*                     {% endif %}*/
/*                   </tbody>*/
/* */
/*                 </table>*/
/*               </div>*/
/*             </div>*/
/*           </div>*/
/*         </form>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* <script type="text/javascript"><!--*/
/* $('#button-generate').on('click', function() {*/
/* 	rand = '';*/
/* */
/* 	string = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';*/
/* */
/* 	for (i = 0; i < 256; i++) {*/
/* 		rand += string[Math.floor(Math.random() * (string.length - 1))];*/
/* 	}*/
/* */
/* 	$('#input-key').val(rand);*/
/* });*/
/* //--></script>*/
/* <script type="text/javascript"><!--*/
/* var ip_row = {{ ip_row }};*/
/* */
/* function addIp() {*/
/* 	html = '<tr id="ip-row' + ip_row + '">';*/
/* 	html += '  <td class="text-right"><input type="text" name="api_ip[]" value="" placeholder="{{ entry_ip }}" class="form-control" /></td>';*/
/* 	html += '  <td class="text-left"><button type="button" onclick="$(\'#ip-row' + ip_row + '\').remove();" data-toggle="tooltip" title="{{ button_remove }}" class="btn btn-danger"><i class="fa fa-minus-circle"></i></button></td>';*/
/* 	html += '</tr>';*/
/* */
/* 	$('#ip tbody').append(html);*/
/* */
/* 	ip_row++;*/
/* }*/
/* */
/* //--></script>*/
/* <script type="text/javascript"><!--*/
/* $('#session button').on('click', function(e) {*/
/* 	e.preventDefault();*/
/* */
/* 	var element = this;*/
/* */
/* 	$.ajax({*/
/* 		url: 'index.php?route=user/api/deletesession&user_token={{ user_token }}&api_session_id=' + $(element).val(),*/
/* 		type: 'post',*/
/* 		dataType: 'json',*/
/* 		beforeSend: function() {*/
/* 			$(element).button('loading');*/
/* 		},*/
/* 		complete: function() {*/
/* 			$(element).button('reset');*/
/* 		},*/
/* 		success: function(json) {*/
/* 			$('.alert-dismissible').remove();*/
/* */
/* 			if (json['error']) {*/
/* 				$('#tab-session').prepend('<div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> ' + json['error'] + ' <button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/* 			}*/
/* */
/* 			if (json['success']) {*/
/* 				$('#tab-session').prepend('<div class="alert alert-success alert-dismissible"><i class="fa fa-check-circle"></i> ' + json['success'] + ' <button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/* */
/* 				$(element).parent().parent().remove();*/
/* 			}*/
/* 		},*/
/* 		error: function(xhr, ajaxOptions, thrownError) {*/
/* 			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 		}*/
/* 	});*/
/* });*/
/* //--></script>*/
/* {{ footer }}*/
