<?php

/* marketplace/cron.twig */
class __TwigTemplate_fda8b5b4f1a72a08dc423b2cc0c1a8c4f8fd5acbd8fa584033cf8de598c09985 extends Twig_Template
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
        echo (isset($context["button_delete"]) ? $context["button_delete"] : null);
        echo "\" class=\"btn btn-danger\" onclick=\"confirm('";
        echo (isset($context["text_confirm"]) ? $context["text_confirm"] : null);
        echo "') ? \$('#form-cron').submit() : false;\"><i class=\"fa fa-trash-o\"></i></button>
      </div>
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
        echo "    ";
        if ((isset($context["success"]) ? $context["success"] : null)) {
            // line 25
            echo "      <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo (isset($context["success"]) ? $context["success"] : null);
            echo "
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
      </div>
    ";
        }
        // line 29
        echo "    <div class=\"card mb-3\">
      <div class=\"card-header\"><i class=\"fa fa-question-circle\"></i> ";
        // line 30
        echo (isset($context["text_instruction"]) ? $context["text_instruction"] : null);
        echo "</div>
      <div class=\"card-body\">
        <p>";
        // line 32
        echo (isset($context["text_cron_1"]) ? $context["text_cron_1"] : null);
        echo "</p>
        <p>";
        // line 33
        echo (isset($context["text_cron_2"]) ? $context["text_cron_2"] : null);
        echo "</p>
        <div class=\"form-group\">
          <div class=\"input-group\">
            <div class=\"input-group-prepend\">
              <span class=\"input-group-text\">";
        // line 37
        echo (isset($context["entry_cron"]) ? $context["entry_cron"] : null);
        echo "</span>
            </div>
            <input type=\"text\" value=\"wget &quot;";
        // line 39
        echo (isset($context["cron"]) ? $context["cron"] : null);
        echo "&quot; --read-timeout=5400\" id=\"input-cron\" class=\"form-control\"/>
            <div class=\"input-group-append\">
              <button type=\"button\" id=\"button-copy\" data-toggle=\"tooltip\" title=\"";
        // line 41
        echo (isset($context["button_copy"]) ? $context["button_copy"] : null);
        echo "\" class=\"btn btn-light\"><i class=\"fa fa-copy\"></i></button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class=\"card\">
      <div class=\"card-header\"><i class=\"fa fa-list\"></i> ";
        // line 48
        echo (isset($context["text_list"]) ? $context["text_list"] : null);
        echo "</div>
      <div class=\"card-body\">
        <form action=\"";
        // line 50
        echo (isset($context["delete"]) ? $context["delete"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-cron\">
          <div class=\"table-responsive\">
            <table class=\"table table-bordered table-hover\">
              <thead>
                <tr>
                  <td style=\"width: 1px;\" class=\"text-center\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').trigger('click');\"/></td>
                  <td class=\"text-left\">";
        // line 56
        if (((isset($context["sort"]) ? $context["sort"] : null) == "code")) {
            echo "<a href=\"";
            echo (isset($context["sort_code"]) ? $context["sort_code"] : null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, (isset($context["order"]) ? $context["order"] : null));
            echo "\">";
            echo (isset($context["column_code"]) ? $context["column_code"] : null);
            echo "</a>";
        } else {
            echo "<a href=\"";
            echo (isset($context["sort_code"]) ? $context["sort_code"] : null);
            echo "\">";
            echo (isset($context["column_code"]) ? $context["column_code"] : null);
            echo "</a>";
        }
        echo "</td>
                  <td class=\"text-left\">";
        // line 57
        if (((isset($context["sort"]) ? $context["sort"] : null) == "cycle")) {
            echo "<a href=\"";
            echo (isset($context["sort_cycle"]) ? $context["sort_cycle"] : null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, (isset($context["order"]) ? $context["order"] : null));
            echo "\">";
            echo (isset($context["column_cycle"]) ? $context["column_cycle"] : null);
            echo "</a>";
        } else {
            echo "<a href=\"";
            echo (isset($context["sort_cycle"]) ? $context["sort_cycle"] : null);
            echo "\">";
            echo (isset($context["column_cycle"]) ? $context["column_cycle"] : null);
            echo "</a>";
        }
        echo "</td>
                  <td class=\"text-left\">";
        // line 58
        if (((isset($context["sort"]) ? $context["sort"] : null) == "action")) {
            echo "<a href=\"";
            echo (isset($context["sort_action"]) ? $context["sort_action"] : null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, (isset($context["order"]) ? $context["order"] : null));
            echo "\">";
            echo (isset($context["column_action"]) ? $context["column_action"] : null);
            echo "</a>";
        } else {
            echo "<a href=\"";
            echo (isset($context["sort_action"]) ? $context["sort_action"] : null);
            echo "\">";
            echo (isset($context["column_action"]) ? $context["column_action"] : null);
            echo "</a>";
        }
        echo "</td>
                  <td class=\"text-left\">";
        // line 59
        if (((isset($context["sort"]) ? $context["sort"] : null) == "status")) {
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
        // line 60
        if (((isset($context["sort"]) ? $context["sort"] : null) == "date_added")) {
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
                  <td class=\"text-left\">";
        // line 61
        if (((isset($context["sort"]) ? $context["sort"] : null) == "date_modified")) {
            echo "<a href=\"";
            echo (isset($context["sort_date_modified"]) ? $context["sort_date_modified"] : null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, (isset($context["order"]) ? $context["order"] : null));
            echo "\">";
            echo (isset($context["column_date_modified"]) ? $context["column_date_modified"] : null);
            echo "</a>";
        } else {
            echo "<a href=\"";
            echo (isset($context["sort_date_modified"]) ? $context["sort_date_modified"] : null);
            echo "\">";
            echo (isset($context["column_date_modified"]) ? $context["column_date_modified"] : null);
            echo "</a>";
        }
        echo "</td>
                  <td class=\"text-right\">";
        // line 62
        echo (isset($context["column_action"]) ? $context["column_action"] : null);
        echo "</td>
                </tr>
              </thead>
              <tbody>
                ";
        // line 66
        if ((isset($context["crons"]) ? $context["crons"] : null)) {
            // line 67
            echo "                  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["crons"]) ? $context["crons"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["cron"]) {
                // line 68
                echo "                    <tr>
                      <td class=\"text-center\">";
                // line 69
                if (twig_in_filter($this->getAttribute($context["cron"], "cron_id", array()), (isset($context["selected"]) ? $context["selected"] : null))) {
                    // line 70
                    echo "                          <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo $this->getAttribute($context["cron"], "cron_id", array());
                    echo "\" checked=\"checked\"/>
                        ";
                } else {
                    // line 72
                    echo "                          <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo $this->getAttribute($context["cron"], "cron_id", array());
                    echo "\"/>
                        ";
                }
                // line 73
                echo "</td>
                      <td class=\"text-left\">";
                // line 74
                echo $this->getAttribute($context["cron"], "code", array());
                echo "</td>
                      <td class=\"text-left\">";
                // line 75
                echo $this->getAttribute($context["cron"], "cycle", array());
                echo "</td>
                      <td class=\"text-left\">";
                // line 76
                echo $this->getAttribute($context["cron"], "action", array());
                echo "</td>
                      <td class=\"text-left\">";
                // line 77
                echo $this->getAttribute($context["cron"], "status", array());
                echo "</td>
                      <td class=\"text-left\">";
                // line 78
                echo $this->getAttribute($context["cron"], "date_added", array());
                echo "</td>
                      <td class=\"text-left\">";
                // line 79
                echo $this->getAttribute($context["cron"], "date_modified", array());
                echo "</td>
                      <td class=\"text-right\">
                        <button type=\"button\" value=\"";
                // line 81
                echo $this->getAttribute($context["cron"], "cron_id", array());
                echo "\" data-toggle=\"tooltip\" data-title=\"";
                echo (isset($context["button_run"]) ? $context["button_run"] : null);
                echo "\" class=\"btn btn-warning\"><i class=\"fa fa-play\"></i></button>
                        ";
                // line 82
                if ( !$this->getAttribute($context["cron"], "enabled", array())) {
                    // line 83
                    echo "                          <button type=\"button\" value=\"";
                    echo $this->getAttribute($context["cron"], "cron_id", array());
                    echo "\" data-toggle=\"tooltip\" data-title=\"";
                    echo (isset($context["button_enable"]) ? $context["button_enable"] : null);
                    echo "\" class=\"btn btn-success\"><i class=\"fa fa-plus-circle\"></i></button>
                        ";
                } else {
                    // line 85
                    echo "                          <button type=\"button\" value=\"";
                    echo $this->getAttribute($context["cron"], "cron_id", array());
                    echo "\" data-toggle=\"tooltip\" data-title=\"";
                    echo (isset($context["button_disable"]) ? $context["button_disable"] : null);
                    echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button>
                        ";
                }
                // line 86
                echo "</td>
                    </tr>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cron'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 89
            echo "                ";
        } else {
            // line 90
            echo "                  <tr>
                    <td class=\"text-center\" colspan=\"8\">";
            // line 91
            echo (isset($context["text_no_results"]) ? $context["text_no_results"] : null);
            echo "</td>
                  </tr>
                ";
        }
        // line 94
        echo "              </tbody>
            </table>
          </div>
        </form>
        <div class=\"row\">
          <div class=\"col-sm-6 text-left\">";
        // line 99
        echo (isset($context["pagination"]) ? $context["pagination"] : null);
        echo "</div>
          <div class=\"col-sm-6 text-right\">";
        // line 100
        echo (isset($context["results"]) ? $context["results"] : null);
        echo "</div>
        </div>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('#button-copy').on('click', function() {
\t\$('#input-cron').select();

\tdocument.execCommand('copy');
});

\$('#form-cron .btn-warning').on('click', function() {
\tvar element = this;

\t\$.ajax({
\t\turl: 'index.php?route=marketplace/cron/run&user_token=";
        // line 117
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&cron_id=' + \$(element).val(),
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
\t\t\t\t\$('#content > .container-fluid').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
\t\t\t}

\t\t\tif (json['success']) {
\t\t\t\t\$('#content > .container-fluid').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
\t\t\t}
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});

\$('#form-cron').on('click', '.btn-success', function() {
\tvar element = this;

\t\$.ajax({
\t\turl: 'index.php?route=marketplace/cron/enable&user_token=";
        // line 146
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&cron_id=' + \$(element).val(),
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
\t\t\t\t\$('#content > .container-fluid').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
\t\t\t}

\t\t\tif (json['success']) {
\t\t\t\t\$('#content > .container-fluid').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');

\t\t\t\t\$(element).replaceWith('<button type=\"button\" value=\"' + \$(element).val() + '\" data-toggle=\"tooltip\" data-title=\"";
        // line 164
        echo (isset($context["button_disable"]) ? $context["button_disable"] : null);
        echo "\"  class=\"btn btn-success\"><i class=\"fa fa-minus-circle\"></i></button>');
\t\t\t}
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});

\$('#form-cron').on('click', '.btn-danger', function() {
\tvar element = this;

\t\$.ajax({
\t\turl: 'index.php?route=marketplace/cron/disable&user_token=";
        // line 177
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&cron_id=' + \$(element).val(),
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
\t\t\t\t\$('#content > .container-fluid').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
\t\t\t}

\t\t\tif (json['success']) {
\t\t\t\t\$('#content > .container-fluid').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');

\t\t\t\t\$(element).replaceWith('<button type=\"button\" value=\"' + \$(element).val() + '\" data-toggle=\"tooltip\" data-title=\"";
        // line 195
        echo (isset($context["button_enable"]) ? $context["button_enable"] : null);
        echo "\"  class=\"btn btn-success\"><i class=\"fa fa-plus-circle\"></i></button>');
\t\t\t}
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});
//--></script>
";
        // line 204
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "marketplace/cron.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  481 => 204,  469 => 195,  448 => 177,  432 => 164,  411 => 146,  379 => 117,  359 => 100,  355 => 99,  348 => 94,  342 => 91,  339 => 90,  336 => 89,  328 => 86,  320 => 85,  312 => 83,  310 => 82,  304 => 81,  299 => 79,  295 => 78,  291 => 77,  287 => 76,  283 => 75,  279 => 74,  276 => 73,  270 => 72,  264 => 70,  262 => 69,  259 => 68,  254 => 67,  252 => 66,  245 => 62,  227 => 61,  209 => 60,  191 => 59,  173 => 58,  155 => 57,  137 => 56,  128 => 50,  123 => 48,  113 => 41,  108 => 39,  103 => 37,  96 => 33,  92 => 32,  87 => 30,  84 => 29,  76 => 25,  73 => 24,  65 => 20,  63 => 19,  56 => 14,  45 => 12,  41 => 11,  35 => 8,  28 => 6,  19 => 1,);
    }
}
/* {{ header }}{{ column_left }}*/
/* <div id="content">*/
/*   <div class="page-header">*/
/*     <div class="container-fluid">*/
/*       <div class="pull-right">*/
/*         <button type="button" data-toggle="tooltip" title="{{ button_delete }}" class="btn btn-danger" onclick="confirm('{{ text_confirm }}') ? $('#form-cron').submit() : false;"><i class="fa fa-trash-o"></i></button>*/
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
/*   <div class="container-fluid">*/
/*     {% if error_warning %}*/
/*       <div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> {{ error_warning }}*/
/*         <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*       </div>*/
/*     {% endif %}*/
/*     {% if success %}*/
/*       <div class="alert alert-success alert-dismissible"><i class="fa fa-check-circle"></i> {{ success }}*/
/*         <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*       </div>*/
/*     {% endif %}*/
/*     <div class="card mb-3">*/
/*       <div class="card-header"><i class="fa fa-question-circle"></i> {{ text_instruction }}</div>*/
/*       <div class="card-body">*/
/*         <p>{{ text_cron_1 }}</p>*/
/*         <p>{{ text_cron_2 }}</p>*/
/*         <div class="form-group">*/
/*           <div class="input-group">*/
/*             <div class="input-group-prepend">*/
/*               <span class="input-group-text">{{ entry_cron }}</span>*/
/*             </div>*/
/*             <input type="text" value="wget &quot;{{ cron }}&quot; --read-timeout=5400" id="input-cron" class="form-control"/>*/
/*             <div class="input-group-append">*/
/*               <button type="button" id="button-copy" data-toggle="tooltip" title="{{ button_copy }}" class="btn btn-light"><i class="fa fa-copy"></i></button>*/
/*             </div>*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*     <div class="card">*/
/*       <div class="card-header"><i class="fa fa-list"></i> {{ text_list }}</div>*/
/*       <div class="card-body">*/
/*         <form action="{{ delete }}" method="post" enctype="multipart/form-data" id="form-cron">*/
/*           <div class="table-responsive">*/
/*             <table class="table table-bordered table-hover">*/
/*               <thead>*/
/*                 <tr>*/
/*                   <td style="width: 1px;" class="text-center"><input type="checkbox" onclick="$('input[name*=\'selected\']').trigger('click');"/></td>*/
/*                   <td class="text-left">{% if sort == 'code' %}<a href="{{ sort_code }}" class="{{ order|lower }}">{{ column_code }}</a>{% else %}<a href="{{ sort_code }}">{{ column_code }}</a>{% endif %}</td>*/
/*                   <td class="text-left">{% if sort == 'cycle' %}<a href="{{ sort_cycle }}" class="{{ order|lower }}">{{ column_cycle }}</a>{% else %}<a href="{{ sort_cycle }}">{{ column_cycle }}</a>{% endif %}</td>*/
/*                   <td class="text-left">{% if sort == 'action' %}<a href="{{ sort_action }}" class="{{ order|lower }}">{{ column_action }}</a>{% else %}<a href="{{ sort_action }}">{{ column_action }}</a>{% endif %}</td>*/
/*                   <td class="text-left">{% if sort == 'status' %}<a href="{{ sort_status }}" class="{{ order|lower }}">{{ column_status }}</a>{% else %}<a href="{{ sort_status }}">{{ column_status }}</a>{% endif %}</td>*/
/*                   <td class="text-left">{% if sort == 'date_added' %}<a href="{{ sort_date_added }}" class="{{ order|lower }}">{{ column_date_added }}</a>{% else %}<a href="{{ sort_date_added }}">{{ column_date_added }}</a>{% endif %}</td>*/
/*                   <td class="text-left">{% if sort == 'date_modified' %}<a href="{{ sort_date_modified }}" class="{{ order|lower }}">{{ column_date_modified }}</a>{% else %}<a href="{{ sort_date_modified }}">{{ column_date_modified }}</a>{% endif %}</td>*/
/*                   <td class="text-right">{{ column_action }}</td>*/
/*                 </tr>*/
/*               </thead>*/
/*               <tbody>*/
/*                 {% if crons %}*/
/*                   {% for cron in crons %}*/
/*                     <tr>*/
/*                       <td class="text-center">{% if cron.cron_id in selected %}*/
/*                           <input type="checkbox" name="selected[]" value="{{ cron.cron_id }}" checked="checked"/>*/
/*                         {% else %}*/
/*                           <input type="checkbox" name="selected[]" value="{{ cron.cron_id }}"/>*/
/*                         {% endif %}</td>*/
/*                       <td class="text-left">{{ cron.code }}</td>*/
/*                       <td class="text-left">{{ cron.cycle }}</td>*/
/*                       <td class="text-left">{{ cron.action }}</td>*/
/*                       <td class="text-left">{{ cron.status }}</td>*/
/*                       <td class="text-left">{{ cron.date_added }}</td>*/
/*                       <td class="text-left">{{ cron.date_modified }}</td>*/
/*                       <td class="text-right">*/
/*                         <button type="button" value="{{ cron.cron_id }}" data-toggle="tooltip" data-title="{{ button_run }}" class="btn btn-warning"><i class="fa fa-play"></i></button>*/
/*                         {% if not cron.enabled %}*/
/*                           <button type="button" value="{{ cron.cron_id }}" data-toggle="tooltip" data-title="{{ button_enable }}" class="btn btn-success"><i class="fa fa-plus-circle"></i></button>*/
/*                         {% else %}*/
/*                           <button type="button" value="{{ cron.cron_id }}" data-toggle="tooltip" data-title="{{ button_disable }}" class="btn btn-danger"><i class="fa fa-minus-circle"></i></button>*/
/*                         {% endif %}</td>*/
/*                     </tr>*/
/*                   {% endfor %}*/
/*                 {% else %}*/
/*                   <tr>*/
/*                     <td class="text-center" colspan="8">{{ text_no_results }}</td>*/
/*                   </tr>*/
/*                 {% endif %}*/
/*               </tbody>*/
/*             </table>*/
/*           </div>*/
/*         </form>*/
/*         <div class="row">*/
/*           <div class="col-sm-6 text-left">{{ pagination }}</div>*/
/*           <div class="col-sm-6 text-right">{{ results }}</div>*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* <script type="text/javascript"><!--*/
/* $('#button-copy').on('click', function() {*/
/* 	$('#input-cron').select();*/
/* */
/* 	document.execCommand('copy');*/
/* });*/
/* */
/* $('#form-cron .btn-warning').on('click', function() {*/
/* 	var element = this;*/
/* */
/* 	$.ajax({*/
/* 		url: 'index.php?route=marketplace/cron/run&user_token={{ user_token }}&cron_id=' + $(element).val(),*/
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
/* 				$('#content > .container-fluid').prepend('<div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> ' + json['error'] + ' <button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/* 			}*/
/* */
/* 			if (json['success']) {*/
/* 				$('#content > .container-fluid').prepend('<div class="alert alert-success alert-dismissible"><i class="fa fa-check-circle"></i> ' + json['success'] + ' <button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/* 			}*/
/* 		},*/
/* 		error: function(xhr, ajaxOptions, thrownError) {*/
/* 			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 		}*/
/* 	});*/
/* });*/
/* */
/* $('#form-cron').on('click', '.btn-success', function() {*/
/* 	var element = this;*/
/* */
/* 	$.ajax({*/
/* 		url: 'index.php?route=marketplace/cron/enable&user_token={{ user_token }}&cron_id=' + $(element).val(),*/
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
/* 				$('#content > .container-fluid').prepend('<div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> ' + json['error'] + ' <button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/* 			}*/
/* */
/* 			if (json['success']) {*/
/* 				$('#content > .container-fluid').prepend('<div class="alert alert-success alert-dismissible"><i class="fa fa-check-circle"></i> ' + json['success'] + ' <button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/* */
/* 				$(element).replaceWith('<button type="button" value="' + $(element).val() + '" data-toggle="tooltip" data-title="{{ button_disable }}"  class="btn btn-success"><i class="fa fa-minus-circle"></i></button>');*/
/* 			}*/
/* 		},*/
/* 		error: function(xhr, ajaxOptions, thrownError) {*/
/* 			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 		}*/
/* 	});*/
/* });*/
/* */
/* $('#form-cron').on('click', '.btn-danger', function() {*/
/* 	var element = this;*/
/* */
/* 	$.ajax({*/
/* 		url: 'index.php?route=marketplace/cron/disable&user_token={{ user_token }}&cron_id=' + $(element).val(),*/
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
/* 				$('#content > .container-fluid').prepend('<div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> ' + json['error'] + ' <button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/* 			}*/
/* */
/* 			if (json['success']) {*/
/* 				$('#content > .container-fluid').prepend('<div class="alert alert-success alert-dismissible"><i class="fa fa-check-circle"></i> ' + json['success'] + ' <button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/* */
/* 				$(element).replaceWith('<button type="button" value="' + $(element).val() + '" data-toggle="tooltip" data-title="{{ button_enable }}"  class="btn btn-success"><i class="fa fa-plus-circle"></i></button>');*/
/* 			}*/
/* 		},*/
/* 		error: function(xhr, ajaxOptions, thrownError) {*/
/* 			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 		}*/
/* 	});*/
/* });*/
/* //--></script>*/
/* {{ footer }}*/
/* */
