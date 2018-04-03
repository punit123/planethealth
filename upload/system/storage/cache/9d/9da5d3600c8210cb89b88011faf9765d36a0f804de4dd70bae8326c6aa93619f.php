<?php

/* default/template/extension/total/voucher.twig */
class __TwigTemplate_935af51d42aa5f37ce0e89555f2b3ef23eab46fa895b5a780c2e909db40e5e46 extends Twig_Template
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
        echo "
<div class=\"card\">
  <div class=\"card-header card-primary\" id=\"collapse-voucher-title\">
    <h4 class=\"mb-0\">
      <a role=\"button\" data-toggle=\"collapse\" data-target=\"#collapse-voucher\" aria-expanded=\"true\" aria-controls=\"collapse-voucher\">
        ";
        // line 6
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo " <i class=\"fa fa-caret-down\"></i>
      </a>
    </h4>
  </div>

  <div id=\"collapse-voucher\" class=\"collapse\" aria-labelledby=\"collapse-voucher-title\" data-parent=\"#accordion\">
    <div class=\"card-body\">
      <div class=\"row\">
        <label class=\"col-sm-2 col-form-label\" for=\"input-voucher\">";
        // line 14
        echo (isset($context["entry_voucher"]) ? $context["entry_voucher"] : null);
        echo "</label>
        <div class=\"col-md-10\">
          <div class=\"input-group\">
            <input type=\"text\" name=\"voucher\" value=\"";
        // line 17
        echo (isset($context["voucher"]) ? $context["voucher"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_voucher"]) ? $context["entry_voucher"] : null);
        echo "\" id=\"input-voucher\" class=\"form-control\" />
            <div class=\"input-group-append\">
              <input type=\"submit\" value=\"";
        // line 19
        echo (isset($context["button_voucher"]) ? $context["button_voucher"] : null);
        echo "\" id=\"button-voucher\" data-loading-text=\"";
        echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
        echo "\"  class=\"btn btn-primary\" />
            </div>
          </div>
        </div>
        <script type=\"text/javascript\"><!--
          \$('#button-voucher').on('click', function() {
            \$.ajax({
              url: 'index.php?route=extension/total/voucher/voucher',
              type: 'post',
              data: 'voucher=' + encodeURIComponent(\$('input[name=\\'voucher\\']').val()),
              dataType: 'json',
              beforeSend: function() {
                \$('#button-voucher').button('loading');
              },
              complete: function() {
                \$('#button-voucher').button('reset');
              },
              success: function(json) {
                \$('.alert-dismissible').remove();

                if (json['error']) {
                  \$('.breadcrumb').after('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');

                  \$('html, body').animate({ scrollTop: 0 }, 'slow');
                }

                if (json['redirect']) {
                  location = json['redirect'];
                }
              },
              error: function(xhr, ajaxOptions, thrownError) {
                alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
              }
            });
          });
        //--></script>
      </div>
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "default/template/extension/total/voucher.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 19,  43 => 17,  37 => 14,  26 => 6,  19 => 1,);
    }
}
/* */
/* <div class="card">*/
/*   <div class="card-header card-primary" id="collapse-voucher-title">*/
/*     <h4 class="mb-0">*/
/*       <a role="button" data-toggle="collapse" data-target="#collapse-voucher" aria-expanded="true" aria-controls="collapse-voucher">*/
/*         {{ heading_title }} <i class="fa fa-caret-down"></i>*/
/*       </a>*/
/*     </h4>*/
/*   </div>*/
/* */
/*   <div id="collapse-voucher" class="collapse" aria-labelledby="collapse-voucher-title" data-parent="#accordion">*/
/*     <div class="card-body">*/
/*       <div class="row">*/
/*         <label class="col-sm-2 col-form-label" for="input-voucher">{{ entry_voucher }}</label>*/
/*         <div class="col-md-10">*/
/*           <div class="input-group">*/
/*             <input type="text" name="voucher" value="{{ voucher }}" placeholder="{{ entry_voucher }}" id="input-voucher" class="form-control" />*/
/*             <div class="input-group-append">*/
/*               <input type="submit" value="{{ button_voucher }}" id="button-voucher" data-loading-text="{{ text_loading }}"  class="btn btn-primary" />*/
/*             </div>*/
/*           </div>*/
/*         </div>*/
/*         <script type="text/javascript"><!--*/
/*           $('#button-voucher').on('click', function() {*/
/*             $.ajax({*/
/*               url: 'index.php?route=extension/total/voucher/voucher',*/
/*               type: 'post',*/
/*               data: 'voucher=' + encodeURIComponent($('input[name=\'voucher\']').val()),*/
/*               dataType: 'json',*/
/*               beforeSend: function() {*/
/*                 $('#button-voucher').button('loading');*/
/*               },*/
/*               complete: function() {*/
/*                 $('#button-voucher').button('reset');*/
/*               },*/
/*               success: function(json) {*/
/*                 $('.alert-dismissible').remove();*/
/* */
/*                 if (json['error']) {*/
/*                   $('.breadcrumb').after('<div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> ' + json['error'] + '<button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/* */
/*                   $('html, body').animate({ scrollTop: 0 }, 'slow');*/
/*                 }*/
/* */
/*                 if (json['redirect']) {*/
/*                   location = json['redirect'];*/
/*                 }*/
/*               },*/
/*               error: function(xhr, ajaxOptions, thrownError) {*/
/*                 alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*               }*/
/*             });*/
/*           });*/
/*         //--></script>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* */
