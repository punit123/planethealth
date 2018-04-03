<?php

/* common/developer.twig */
class __TwigTemplate_78edc155d568362a08fd5d389cbbbc3c4e43b6a84f14dda66ccf8182f0ccf7ed extends Twig_Template
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
        echo "<div id=\"modal-developer\" class=\"modal fade\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\"><i class=\"fa fa-cog\"></i> ";
        // line 5
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h5>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
      </div>
      <div class=\"modal-body\">
        <table class=\"table table-bordered\">
          <thead>
            <tr>
              <td>";
        // line 12
        echo (isset($context["column_component"]) ? $context["column_component"] : null);
        echo "</td>
              <td style=\"width: 150px;\">";
        // line 13
        echo (isset($context["entry_cache"]) ? $context["entry_cache"] : null);
        echo "</td>
              <td class=\"text-right\" style=\"width: 1px;\">";
        // line 14
        echo (isset($context["column_action"]) ? $context["column_action"] : null);
        echo "</td>
            </tr>
          </thead>
          <tr>
            <td>";
        // line 18
        echo (isset($context["entry_theme"]) ? $context["entry_theme"] : null);
        echo "</td>
            <td>
              <div class=\"btn-group btn-group-toggle\" data-toggle=\"buttons\">";
        // line 20
        if ((isset($context["developer_theme"]) ? $context["developer_theme"] : null)) {
            // line 21
            echo "                  <label class=\"btn btn-success active\" ";
            if ( !(isset($context["eval"]) ? $context["eval"] : null)) {
                echo "disabled=\"disabled\"";
            }
            echo "> <input type=\"radio\" name=\"developer_theme\" value=\"1\" autocomplete=\"off\" ";
            if ( !(isset($context["eval"]) ? $context["eval"] : null)) {
                echo "disabled=\"disabled\"";
            }
            echo " checked/>
                    ";
            // line 22
            echo (isset($context["button_on"]) ? $context["button_on"] : null);
            echo "
                  </label>
                ";
        } else {
            // line 25
            echo "                  <label class=\"btn btn-success\" ";
            if ( !(isset($context["eval"]) ? $context["eval"] : null)) {
                echo "disabled=\"disabled\"";
            }
            echo "> <input type=\"radio\" name=\"developer_theme\" value=\"1\" autocomplete=\"off\" ";
            if ( !(isset($context["eval"]) ? $context["eval"] : null)) {
                echo "disabled=\"disabled\"";
            }
            echo "/>
                    ";
            // line 26
            echo (isset($context["button_on"]) ? $context["button_on"] : null);
            echo "
                  </label>
                ";
        }
        // line 29
        echo "                ";
        if ( !(isset($context["developer_theme"]) ? $context["developer_theme"] : null)) {
            // line 30
            echo "                  <label class=\"btn btn-danger active\" ";
            if ( !(isset($context["eval"]) ? $context["eval"] : null)) {
                echo "disabled=\"disabled\"";
            }
            echo "> <input type=\"radio\" name=\"developer_theme\" value=\"0\" autocomplete=\"off\" ";
            if ( !(isset($context["eval"]) ? $context["eval"] : null)) {
                echo "disabled=\"disabled\"";
            }
            echo " checked/>
                    ";
            // line 31
            echo (isset($context["button_off"]) ? $context["button_off"] : null);
            echo "
                  </label>
                ";
        } else {
            // line 34
            echo "                  <label class=\"btn btn-danger\" ";
            if ( !(isset($context["eval"]) ? $context["eval"] : null)) {
                echo "disabled=\"disabled\"";
            }
            echo "> <input type=\"radio\" name=\"developer_theme\" value=\"0\" autocomplete=\"off\" ";
            if ( !(isset($context["eval"]) ? $context["eval"] : null)) {
                echo "disabled=\"disabled\"";
            }
            echo "/>
                    ";
            // line 35
            echo (isset($context["button_off"]) ? $context["button_off"] : null);
            echo "
                  </label>
                ";
        }
        // line 37
        echo "</div>
            </td>
            <td class=\"text-right\"><button type=\"button\" value=\"theme\" data-toggle=\"tooltip\" title=\"";
        // line 39
        echo (isset($context["button_refresh"]) ? $context["button_refresh"] : null);
        echo "\" class=\"btn btn-warning\"><i class=\"fa fa-refresh\"></i></button></td>
          </tr>
          <tr>
            <td>";
        // line 42
        echo (isset($context["entry_sass"]) ? $context["entry_sass"] : null);
        echo "</td>
            <td>
              <div class=\"btn-group btn-group-toggle\" data-toggle=\"buttons\">";
        // line 44
        if ((isset($context["developer_sass"]) ? $context["developer_sass"] : null)) {
            // line 45
            echo "                  <label class=\"btn btn-success active\">
                    <input type=\"radio\" name=\"developer_sass\" value=\"1\" autocomplete=\"off\" checked> ";
            // line 46
            echo (isset($context["button_on"]) ? $context["button_on"] : null);
            echo "
                  </label>
                ";
        } else {
            // line 49
            echo "                  <label class=\"btn btn-success\"><input type=\"radio\" name=\"developer_sass\" value=\"1\" autocomplete=\"off\">
                    ";
            // line 50
            echo (isset($context["button_on"]) ? $context["button_on"] : null);
            echo "</label>
                ";
        }
        // line 52
        echo "                ";
        if ( !(isset($context["developer_sass"]) ? $context["developer_sass"] : null)) {
            // line 53
            echo "                  <label class=\"btn btn-danger active\"><input type=\"radio\" name=\"developer_sass\" value=\"0\" autocomplete=\"off\" checked>
                    ";
            // line 54
            echo (isset($context["button_off"]) ? $context["button_off"] : null);
            echo "</label>
                ";
        } else {
            // line 56
            echo "                  <label class=\"btn btn-danger\"><input type=\"radio\" name=\"developer_sass\" value=\"0\" autocomplete=\"off\">
                    ";
            // line 57
            echo (isset($context["button_off"]) ? $context["button_off"] : null);
            echo "</label>
                ";
        }
        // line 58
        echo "</div>
            </td>
            <td class=\"text-right\"><button type=\"button\" value=\"sass\" data-toggle=\"tooltip\" title=\"";
        // line 60
        echo (isset($context["button_refresh"]) ? $context["button_refresh"] : null);
        echo "\" class=\"btn btn-warning\"><i class=\"fa fa-refresh\"></i></button></td>
          </tr>
        </table>


      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('input[name=\\'developer_theme\\'], input[name=\\'developer_sass\\']').on('change', function() {
\t\$.ajax({
\t\turl: 'index.php?route=common/developer/edit&user_token=";
        // line 72
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "',
\t\ttype: 'post',
\t\tdata: \$('input[name=\\'developer_theme\\']:checked, input[name=\\'developer_sass\\']:checked'),
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$('input[name=\\'developer_theme\\'], input[name=\\'developer_sass\\']').prop('disabled', true);
\t\t},
\t\tcomplete: function() {
\t\t\t\$('input[name=\\'developer_theme\\'], input[name=\\'developer_sass\\']').prop('disabled', false);
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible').remove();

\t\t\tif (json['error']) {
\t\t\t\t\$('#modal-developer .modal-body').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error']['warning'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
\t\t\t}

\t\t\tif (json['success']) {
\t\t\t\t\$('#modal-developer .modal-body').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
\t\t\t}
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});

\$('#modal-developer table button').on('click', function() {
\tvar element = this;

\t\$.ajax({
\t\turl: 'index.php?route=common/developer/' + \$(element).attr('value') + '&user_token=";
        // line 103
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "',
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
\t\t\t\t\$('#modal-developer .modal-body').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error']['warning'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
\t\t\t}

\t\t\tif (json['success']) {
\t\t\t\t\$('#modal-developer .modal-body').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
\t\t\t}
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});
//--></script>
";
    }

    public function getTemplateName()
    {
        return "common/developer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  234 => 103,  200 => 72,  185 => 60,  181 => 58,  176 => 57,  173 => 56,  168 => 54,  165 => 53,  162 => 52,  157 => 50,  154 => 49,  148 => 46,  145 => 45,  143 => 44,  138 => 42,  132 => 39,  128 => 37,  122 => 35,  111 => 34,  105 => 31,  94 => 30,  91 => 29,  85 => 26,  74 => 25,  68 => 22,  57 => 21,  55 => 20,  50 => 18,  43 => 14,  39 => 13,  35 => 12,  25 => 5,  19 => 1,);
    }
}
/* <div id="modal-developer" class="modal fade">*/
/*   <div class="modal-dialog">*/
/*     <div class="modal-content">*/
/*       <div class="modal-header">*/
/*         <h5 class="modal-title"><i class="fa fa-cog"></i> {{ heading_title }}</h5>*/
/*         <button type="button" class="close" data-dismiss="modal">&times;</button>*/
/*       </div>*/
/*       <div class="modal-body">*/
/*         <table class="table table-bordered">*/
/*           <thead>*/
/*             <tr>*/
/*               <td>{{ column_component }}</td>*/
/*               <td style="width: 150px;">{{ entry_cache }}</td>*/
/*               <td class="text-right" style="width: 1px;">{{ column_action }}</td>*/
/*             </tr>*/
/*           </thead>*/
/*           <tr>*/
/*             <td>{{ entry_theme }}</td>*/
/*             <td>*/
/*               <div class="btn-group btn-group-toggle" data-toggle="buttons">{% if developer_theme %}*/
/*                   <label class="btn btn-success active" {% if not eval %}disabled="disabled"{% endif %}> <input type="radio" name="developer_theme" value="1" autocomplete="off" {% if not eval %}disabled="disabled"{% endif %} checked/>*/
/*                     {{ button_on }}*/
/*                   </label>*/
/*                 {% else %}*/
/*                   <label class="btn btn-success" {% if not eval %}disabled="disabled"{% endif %}> <input type="radio" name="developer_theme" value="1" autocomplete="off" {% if not eval %}disabled="disabled"{% endif %}/>*/
/*                     {{ button_on }}*/
/*                   </label>*/
/*                 {% endif %}*/
/*                 {% if not developer_theme %}*/
/*                   <label class="btn btn-danger active" {% if not eval %}disabled="disabled"{% endif %}> <input type="radio" name="developer_theme" value="0" autocomplete="off" {% if not eval %}disabled="disabled"{% endif %} checked/>*/
/*                     {{ button_off }}*/
/*                   </label>*/
/*                 {% else %}*/
/*                   <label class="btn btn-danger" {% if not eval %}disabled="disabled"{% endif %}> <input type="radio" name="developer_theme" value="0" autocomplete="off" {% if not eval %}disabled="disabled"{% endif %}/>*/
/*                     {{ button_off }}*/
/*                   </label>*/
/*                 {% endif %}</div>*/
/*             </td>*/
/*             <td class="text-right"><button type="button" value="theme" data-toggle="tooltip" title="{{ button_refresh }}" class="btn btn-warning"><i class="fa fa-refresh"></i></button></td>*/
/*           </tr>*/
/*           <tr>*/
/*             <td>{{ entry_sass }}</td>*/
/*             <td>*/
/*               <div class="btn-group btn-group-toggle" data-toggle="buttons">{% if developer_sass %}*/
/*                   <label class="btn btn-success active">*/
/*                     <input type="radio" name="developer_sass" value="1" autocomplete="off" checked> {{ button_on }}*/
/*                   </label>*/
/*                 {% else %}*/
/*                   <label class="btn btn-success"><input type="radio" name="developer_sass" value="1" autocomplete="off">*/
/*                     {{ button_on }}</label>*/
/*                 {% endif %}*/
/*                 {% if not developer_sass %}*/
/*                   <label class="btn btn-danger active"><input type="radio" name="developer_sass" value="0" autocomplete="off" checked>*/
/*                     {{ button_off }}</label>*/
/*                 {% else %}*/
/*                   <label class="btn btn-danger"><input type="radio" name="developer_sass" value="0" autocomplete="off">*/
/*                     {{ button_off }}</label>*/
/*                 {% endif %}</div>*/
/*             </td>*/
/*             <td class="text-right"><button type="button" value="sass" data-toggle="tooltip" title="{{ button_refresh }}" class="btn btn-warning"><i class="fa fa-refresh"></i></button></td>*/
/*           </tr>*/
/*         </table>*/
/* */
/* */
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* <script type="text/javascript"><!--*/
/* $('input[name=\'developer_theme\'], input[name=\'developer_sass\']').on('change', function() {*/
/* 	$.ajax({*/
/* 		url: 'index.php?route=common/developer/edit&user_token={{ user_token }}',*/
/* 		type: 'post',*/
/* 		data: $('input[name=\'developer_theme\']:checked, input[name=\'developer_sass\']:checked'),*/
/* 		dataType: 'json',*/
/* 		beforeSend: function() {*/
/* 			$('input[name=\'developer_theme\'], input[name=\'developer_sass\']').prop('disabled', true);*/
/* 		},*/
/* 		complete: function() {*/
/* 			$('input[name=\'developer_theme\'], input[name=\'developer_sass\']').prop('disabled', false);*/
/* 		},*/
/* 		success: function(json) {*/
/* 			$('.alert-dismissible').remove();*/
/* */
/* 			if (json['error']) {*/
/* 				$('#modal-developer .modal-body').prepend('<div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> ' + json['error']['warning'] + ' <button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/* 			}*/
/* */
/* 			if (json['success']) {*/
/* 				$('#modal-developer .modal-body').prepend('<div class="alert alert-success alert-dismissible"><i class="fa fa-check-circle"></i> ' + json['success'] + ' <button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/* 			}*/
/* 		},*/
/* 		error: function(xhr, ajaxOptions, thrownError) {*/
/* 			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 		}*/
/* 	});*/
/* });*/
/* */
/* $('#modal-developer table button').on('click', function() {*/
/* 	var element = this;*/
/* */
/* 	$.ajax({*/
/* 		url: 'index.php?route=common/developer/' + $(element).attr('value') + '&user_token={{ user_token }}',*/
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
/* 				$('#modal-developer .modal-body').prepend('<div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> ' + json['error']['warning'] + ' <button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/* 			}*/
/* */
/* 			if (json['success']) {*/
/* 				$('#modal-developer .modal-body').prepend('<div class="alert alert-success alert-dismissible"><i class="fa fa-check-circle"></i> ' + json['success'] + ' <button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/* 			}*/
/* 		},*/
/* 		error: function(xhr, ajaxOptions, thrownError) {*/
/* 			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 		}*/
/* 	});*/
/* });*/
/* //--></script>*/
/* */
