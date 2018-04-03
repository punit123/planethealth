<?php

/* common/dashboard.twig */
class __TwigTemplate_653e33883f62ed6b4de932b86ba6ab08ff75eafd07b633d0bda33cb0368ea125 extends Twig_Template
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
        <button type=\"button\" id=\"button-setting\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo (isset($context["button_developer"]) ? $context["button_developer"] : null);
        echo "\" data-loading-text=\"";
        echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
        echo "\" class=\"btn btn-info\"><i class=\"fa fa-cog\"></i></button>
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
  <div class=\"container-fluid\">";
        // line 18
        if ((isset($context["error_install"]) ? $context["error_install"] : null)) {
            // line 19
            echo "      <div class=\"alert alert-danger alert-dismissible\">
        <button type=\"button\" class=\"close pull-right\" data-dismiss=\"alert\">&times;</button>
        <i class=\"fa fa-exclamation-circle\"></i> ";
            // line 21
            echo (isset($context["error_install"]) ? $context["error_install"] : null);
            echo "</div>
    ";
        }
        // line 23
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rows"]) ? $context["rows"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 24
            echo "      <div class=\"row\">";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["row"]);
            foreach ($context['_seq'] as $context["_key"] => $context["dashboard_1"]) {
                // line 25
                echo "          ";
                $context["class"] = sprintf("col-lg-%s %s", $this->getAttribute($context["dashboard_1"], "width", array()), "col-md-3 col-sm-6");
                // line 26
                echo "          ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["row"]);
                foreach ($context['_seq'] as $context["_key"] => $context["dashboard_2"]) {
                    // line 27
                    echo "            ";
                    if (($this->getAttribute($context["dashboard_2"], "width", array()) > 3)) {
                        // line 28
                        echo "              ";
                        $context["class"] = sprintf("col-lg-%s %s", $this->getAttribute($context["dashboard_1"], "width", array()), "col-md-12 col-sm-12");
                        // line 29
                        echo "            ";
                    }
                    // line 30
                    echo "          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dashboard_2'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 31
                echo "          <div class=\"";
                echo (isset($context["class"]) ? $context["class"] : null);
                echo "\">";
                echo $this->getAttribute($context["dashboard_1"], "output", array());
                echo "</div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dashboard_1'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "</div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "</div>
  ";
        // line 34
        echo (isset($context["security"]) ? $context["security"] : null);
        echo "</div>
<script type=\"text/javascript\"><!--
\$('#button-setting').on('click', function() {
\t\$.ajax({
\t\turl: 'index.php?route=common/developer&user_token=";
        // line 38
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "',
\t\tdataType: 'html',
\t\tbeforeSend: function() {
\t\t\t\$('#button-setting').button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#button-setting').button('reset');
\t\t},
\t\tsuccess: function(html) {
\t\t\t\$('#modal-developer').remove();

\t\t\t\$('body').prepend(html);

\t\t\t\$('#modal-developer').modal('show');
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});
//--></script>
";
        // line 59
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "common/dashboard.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 59,  134 => 38,  127 => 34,  124 => 33,  117 => 32,  106 => 31,  100 => 30,  97 => 29,  94 => 28,  91 => 27,  86 => 26,  83 => 25,  78 => 24,  73 => 23,  68 => 21,  64 => 19,  62 => 18,  56 => 14,  45 => 12,  41 => 11,  35 => 8,  28 => 6,  19 => 1,);
    }
}
/* {{ header }}{{ column_left }}*/
/* <div id="content">*/
/*   <div class="page-header">*/
/*     <div class="container-fluid">*/
/*       <div class="pull-right">*/
/*         <button type="button" id="button-setting" data-toggle="tooltip" title="{{ button_developer }}" data-loading-text="{{ text_loading }}" class="btn btn-info"><i class="fa fa-cog"></i></button>*/
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
/*   <div class="container-fluid">{% if error_install %}*/
/*       <div class="alert alert-danger alert-dismissible">*/
/*         <button type="button" class="close pull-right" data-dismiss="alert">&times;</button>*/
/*         <i class="fa fa-exclamation-circle"></i> {{ error_install }}</div>*/
/*     {% endif %}*/
/*     {% for row in rows %}*/
/*       <div class="row">{% for dashboard_1 in row %}*/
/*           {% set class = 'col-lg-%s %s'|format(dashboard_1.width, 'col-md-3 col-sm-6') %}*/
/*           {% for dashboard_2 in row %}*/
/*             {% if dashboard_2.width > 3 %}*/
/*               {% set class = 'col-lg-%s %s'|format(dashboard_1.width, 'col-md-12 col-sm-12') %}*/
/*             {% endif %}*/
/*           {% endfor %}*/
/*           <div class="{{ class }}">{{ dashboard_1.output }}</div>*/
/*         {% endfor %}</div>*/
/*     {% endfor %}</div>*/
/*   {{ security }}</div>*/
/* <script type="text/javascript"><!--*/
/* $('#button-setting').on('click', function() {*/
/* 	$.ajax({*/
/* 		url: 'index.php?route=common/developer&user_token={{ user_token }}',*/
/* 		dataType: 'html',*/
/* 		beforeSend: function() {*/
/* 			$('#button-setting').button('loading');*/
/* 		},*/
/* 		complete: function() {*/
/* 			$('#button-setting').button('reset');*/
/* 		},*/
/* 		success: function(html) {*/
/* 			$('#modal-developer').remove();*/
/* */
/* 			$('body').prepend(html);*/
/* */
/* 			$('#modal-developer').modal('show');*/
/* 		},*/
/* 		error: function(xhr, ajaxOptions, thrownError) {*/
/* 			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 		}*/
/* 	});*/
/* });*/
/* //--></script>*/
/* {{ footer }}*/
