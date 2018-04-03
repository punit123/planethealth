<?php

/* default/template/extension/total/coupon.twig */
class __TwigTemplate_ff08f4a15d00758955fd6db2d5173df1e2887d20684aa1d96fd9facddfb94e92 extends Twig_Template
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
        echo "<div class=\"card\">
  <div class=\"card-header card-primary\" id=\"collapse-coupon-title\">
    <h4 class=\"mb-0\">
      <a role=\"button\" data-toggle=\"collapse\" data-target=\"#collapse-coupon\" aria-expanded=\"true\" aria-controls=\"collapse-coupon\">
        ";
        // line 5
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo " <i class=\"fa fa-caret-down\"></i>
      </a>
    </h4>
  </div>

  <div id=\"collapse-coupon\" class=\"collapse\" aria-labelledby=\"collapse-coupon-title\" data-parent=\"#accordion\">
    <div class=\"card-body\">
      <div class=\"row\">
        <label class=\"col-md-2 col-form-label\" for=\"input-coupon\">";
        // line 13
        echo (isset($context["entry_coupon"]) ? $context["entry_coupon"] : null);
        echo "</label>
        <div class=\"col-md-10\">
          <div class=\"input-group\">
            <input type=\"text\" name=\"coupon\" value=\"";
        // line 16
        echo (isset($context["coupon"]) ? $context["coupon"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_coupon"]) ? $context["entry_coupon"] : null);
        echo "\" id=\"input-coupon\" class=\"form-control\" />
            <div class=\"input-group-append\">
              <input type=\"button\" value=\"";
        // line 18
        echo (isset($context["button_coupon"]) ? $context["button_coupon"] : null);
        echo "\" id=\"button-coupon\" data-loading-text=\"";
        echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
        echo "\"  class=\"btn btn-primary\" />
            </div>
          </div>
        </div>
      </div>

      <script type=\"text/javascript\"><!--
          \$('#button-coupon').on('click', function() {
            \$.ajax({
              url: 'index.php?route=extension/total/coupon/coupon',
              type: 'post',
              data: 'coupon=' + encodeURIComponent(\$('input[name=\\'coupon\\']').val()),
              dataType: 'json',
              beforeSend: function() {
                \$('#button-coupon').button('loading');
              },
              complete: function() {
                \$('#button-coupon').button('reset');
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
          //-->
        </script>
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "default/template/extension/total/coupon.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 18,  42 => 16,  36 => 13,  25 => 5,  19 => 1,);
    }
}
/* <div class="card">*/
/*   <div class="card-header card-primary" id="collapse-coupon-title">*/
/*     <h4 class="mb-0">*/
/*       <a role="button" data-toggle="collapse" data-target="#collapse-coupon" aria-expanded="true" aria-controls="collapse-coupon">*/
/*         {{ heading_title }} <i class="fa fa-caret-down"></i>*/
/*       </a>*/
/*     </h4>*/
/*   </div>*/
/* */
/*   <div id="collapse-coupon" class="collapse" aria-labelledby="collapse-coupon-title" data-parent="#accordion">*/
/*     <div class="card-body">*/
/*       <div class="row">*/
/*         <label class="col-md-2 col-form-label" for="input-coupon">{{ entry_coupon }}</label>*/
/*         <div class="col-md-10">*/
/*           <div class="input-group">*/
/*             <input type="text" name="coupon" value="{{ coupon }}" placeholder="{{ entry_coupon }}" id="input-coupon" class="form-control" />*/
/*             <div class="input-group-append">*/
/*               <input type="button" value="{{ button_coupon }}" id="button-coupon" data-loading-text="{{ text_loading }}"  class="btn btn-primary" />*/
/*             </div>*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/* */
/*       <script type="text/javascript"><!--*/
/*           $('#button-coupon').on('click', function() {*/
/*             $.ajax({*/
/*               url: 'index.php?route=extension/total/coupon/coupon',*/
/*               type: 'post',*/
/*               data: 'coupon=' + encodeURIComponent($('input[name=\'coupon\']').val()),*/
/*               dataType: 'json',*/
/*               beforeSend: function() {*/
/*                 $('#button-coupon').button('loading');*/
/*               },*/
/*               complete: function() {*/
/*                 $('#button-coupon').button('reset');*/
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
/*           //-->*/
/*         </script>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* */
