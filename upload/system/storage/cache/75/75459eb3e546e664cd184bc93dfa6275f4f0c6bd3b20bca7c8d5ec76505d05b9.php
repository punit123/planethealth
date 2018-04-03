<?php

/* marketplace/extension.twig */
class __TwigTemplate_a26ff446a298435f9304d25b0f6e82104284f9c61f7d981d5aa365f9160abe07 extends Twig_Template
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
      <h1>";
        // line 5
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
      <nav aria-label=\"breadcrumb\">
        <ol class=\"breadcrumb\">
          ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 9
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
        // line 11
        echo "        </ol>
      </nav>
    </div>
  </div>
  <div class=\"container-fluid\">
    <div class=\"card\">
      <div class=\"card-header\"><i class=\"fa fa-puzzle-piece\"></i> ";
        // line 17
        echo (isset($context["text_list"]) ? $context["text_list"] : null);
        echo "</div>
      <div class=\"card-body\">
        <fieldset>
          <legend>";
        // line 20
        echo (isset($context["text_type"]) ? $context["text_type"] : null);
        echo "</legend>
          <div class=\"card bg-light\">
            <div class=\"card-body\">
              <div class=\"input-group\">
                <select name=\"type\" class=\"form-control\">
                  ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 26
            echo "                    ";
            if (((isset($context["type"]) ? $context["type"] : null) == $this->getAttribute($context["category"], "code", array()))) {
                // line 27
                echo "                      <option value=\"";
                echo $this->getAttribute($context["category"], "href", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["category"], "text", array());
                echo "</option>
                    ";
            } else {
                // line 29
                echo "                      <option value=\"";
                echo $this->getAttribute($context["category"], "href", array());
                echo "\">";
                echo $this->getAttribute($context["category"], "text", array());
                echo "</option>
                    ";
            }
            // line 31
            echo "                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "                </select>
                <div class=\"input-group-append\">
                  <span class=\"input-group-text\"><i class=\"fa fa-filter\"></i>&nbsp;";
        // line 34
        echo (isset($context["text_filter"]) ? $context["text_filter"] : null);
        echo "</span>
                </div>
              </div>
            </div>
          </div>
        </fieldset>
        <div id=\"extension\"></div>
      </div>
    </div>
  </div>
</div>
";
        // line 45
        if ((isset($context["categories"]) ? $context["categories"] : null)) {
            // line 46
            echo "  <script type=\"text/javascript\"><!--
  \$('select[name=\"type\"]').on('change', function() {
\t  \$.ajax({
\t\t  url: \$('select[name=\"type\"]').val(),
\t\t  dataType: 'html',
\t\t  beforeSend: function() {
\t\t\t  \$('.fa-filter').addClass('fa-circle-o-notch fa-spin');
\t\t\t  \$('.fa-filter').removeClass('fa-filter');
\t\t\t  \$('select[name=\\'type\\']').prop('disabled', true);
\t\t  },
\t\t  complete: function() {
\t\t\t  \$('.fa-circle-o-notch').addClass('fa-filter');
\t\t\t  \$('.fa-circle-o-notch').removeClass('fa-circle-o-notch fa-spin');
\t\t\t  \$('select[name=\\'type\\']').prop('disabled', false);
\t\t  },
\t\t  success: function(html) {
\t\t\t  \$('#extension').html(html);
\t\t  },
\t\t  error: function(xhr, ajaxOptions, thrownError) {
\t\t\t  alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t  }
\t  });
  });

  \$('select[name=\"type\"]').trigger('change');

  \$('#extension').on('click', '.btn-success', function(e) {
\t  e.preventDefault();

\t  var element = this;

\t  \$.ajax({
\t\t  url: \$(element).attr('href'),
\t\t  dataType: 'html',
\t\t  beforeSend: function() {
\t\t\t  \$(element).button('loading');
\t\t  },
\t\t  complete: function() {
\t\t\t  \$(element).button('reset');
\t\t  },
\t\t  success: function(html) {
\t\t\t  \$('#extension').html(html);
\t\t  },
\t\t  error: function(xhr, ajaxOptions, thrownError) {
\t\t\t  alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t  }
\t  });
  });

  \$('#extension').on('click', '.btn-danger, .btn-warning', function(e) {
\t  e.preventDefault();

\t  if (confirm('";
            // line 98
            echo (isset($context["text_confirm"]) ? $context["text_confirm"] : null);
            echo "')) {
\t\t  var element = this;

\t\t  \$.ajax({
\t\t\t  url: \$(element).attr('href'),
\t\t\t  dataType: 'html',
\t\t\t  beforeSend: function() {
\t\t\t\t  \$(element).button('loading');
\t\t\t  },
\t\t\t  complete: function() {
\t\t\t\t  \$(element).button('reset');
\t\t\t  },
\t\t\t  success: function(html) {
\t\t\t\t  \$('#extension').html(html);
\t\t\t  },
\t\t\t  error: function(xhr, ajaxOptions, thrownError) {
\t\t\t\t  alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t  }
\t\t  });
\t  }
  });
  //--></script>
";
        }
        // line 121
        echo "
";
        // line 122
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "marketplace/extension.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  202 => 122,  199 => 121,  173 => 98,  119 => 46,  117 => 45,  103 => 34,  99 => 32,  93 => 31,  85 => 29,  77 => 27,  74 => 26,  70 => 25,  62 => 20,  56 => 17,  48 => 11,  37 => 9,  33 => 8,  27 => 5,  19 => 1,);
    }
}
/* {{ header }}{{ column_left }}*/
/* <div id="content">*/
/*   <div class="page-header">*/
/*     <div class="container-fluid">*/
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
/*     <div class="card">*/
/*       <div class="card-header"><i class="fa fa-puzzle-piece"></i> {{ text_list }}</div>*/
/*       <div class="card-body">*/
/*         <fieldset>*/
/*           <legend>{{ text_type }}</legend>*/
/*           <div class="card bg-light">*/
/*             <div class="card-body">*/
/*               <div class="input-group">*/
/*                 <select name="type" class="form-control">*/
/*                   {% for category in categories %}*/
/*                     {% if type == category.code %}*/
/*                       <option value="{{ category.href }}" selected="selected">{{ category.text }}</option>*/
/*                     {% else %}*/
/*                       <option value="{{ category.href }}">{{ category.text }}</option>*/
/*                     {% endif %}*/
/*                   {% endfor %}*/
/*                 </select>*/
/*                 <div class="input-group-append">*/
/*                   <span class="input-group-text"><i class="fa fa-filter"></i>&nbsp;{{ text_filter }}</span>*/
/*                 </div>*/
/*               </div>*/
/*             </div>*/
/*           </div>*/
/*         </fieldset>*/
/*         <div id="extension"></div>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* {% if categories %}*/
/*   <script type="text/javascript"><!--*/
/*   $('select[name="type"]').on('change', function() {*/
/* 	  $.ajax({*/
/* 		  url: $('select[name="type"]').val(),*/
/* 		  dataType: 'html',*/
/* 		  beforeSend: function() {*/
/* 			  $('.fa-filter').addClass('fa-circle-o-notch fa-spin');*/
/* 			  $('.fa-filter').removeClass('fa-filter');*/
/* 			  $('select[name=\'type\']').prop('disabled', true);*/
/* 		  },*/
/* 		  complete: function() {*/
/* 			  $('.fa-circle-o-notch').addClass('fa-filter');*/
/* 			  $('.fa-circle-o-notch').removeClass('fa-circle-o-notch fa-spin');*/
/* 			  $('select[name=\'type\']').prop('disabled', false);*/
/* 		  },*/
/* 		  success: function(html) {*/
/* 			  $('#extension').html(html);*/
/* 		  },*/
/* 		  error: function(xhr, ajaxOptions, thrownError) {*/
/* 			  alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 		  }*/
/* 	  });*/
/*   });*/
/* */
/*   $('select[name="type"]').trigger('change');*/
/* */
/*   $('#extension').on('click', '.btn-success', function(e) {*/
/* 	  e.preventDefault();*/
/* */
/* 	  var element = this;*/
/* */
/* 	  $.ajax({*/
/* 		  url: $(element).attr('href'),*/
/* 		  dataType: 'html',*/
/* 		  beforeSend: function() {*/
/* 			  $(element).button('loading');*/
/* 		  },*/
/* 		  complete: function() {*/
/* 			  $(element).button('reset');*/
/* 		  },*/
/* 		  success: function(html) {*/
/* 			  $('#extension').html(html);*/
/* 		  },*/
/* 		  error: function(xhr, ajaxOptions, thrownError) {*/
/* 			  alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 		  }*/
/* 	  });*/
/*   });*/
/* */
/*   $('#extension').on('click', '.btn-danger, .btn-warning', function(e) {*/
/* 	  e.preventDefault();*/
/* */
/* 	  if (confirm('{{ text_confirm }}')) {*/
/* 		  var element = this;*/
/* */
/* 		  $.ajax({*/
/* 			  url: $(element).attr('href'),*/
/* 			  dataType: 'html',*/
/* 			  beforeSend: function() {*/
/* 				  $(element).button('loading');*/
/* 			  },*/
/* 			  complete: function() {*/
/* 				  $(element).button('reset');*/
/* 			  },*/
/* 			  success: function(html) {*/
/* 				  $('#extension').html(html);*/
/* 			  },*/
/* 			  error: function(xhr, ajaxOptions, thrownError) {*/
/* 				  alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 			  }*/
/* 		  });*/
/* 	  }*/
/*   });*/
/*   //--></script>*/
/* {% endif %}*/
/* */
/* {{ footer }}*/
/* */
