<?php

/* marketing/contact.twig */
class __TwigTemplate_d1b744a838ed7b982b7c5b7cdab6313564f41c426d29b4aedccdeb7ac541d283 extends Twig_Template
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
        <button id=\"button-send\" data-loading-text=\"";
        // line 6
        echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo (isset($context["button_send"]) ? $context["button_send"] : null);
        echo "\" class=\"btn btn-primary\" onclick=\"send('index.php?route=marketing/contact/send&user_token=";
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "');\"><i class=\"fa fa-envelope\"></i></button>
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
    <div class=\"card\">
      <div class=\"card-header\"><i class=\"fa fa-envelope\"></i> ";
        // line 20
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</div>
      <div class=\"card-body\">
        <form>
          <div class=\"form-group row\">
            <label class=\"col-sm-2 col-form-label\" for=\"input-store\">";
        // line 24
        echo (isset($context["entry_store"]) ? $context["entry_store"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"store_id\" id=\"input-store\" class=\"form-control\">
                <option value=\"0\">";
        // line 27
        echo (isset($context["text_default"]) ? $context["text_default"] : null);
        echo "</option>
                ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["stores"]) ? $context["stores"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 29
            echo "                  <option value=\"";
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "\">";
            echo $this->getAttribute($context["store"], "name", array());
            echo "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "              </select>
            </div>
          </div>
          <div class=\"form-group row\">
            <label class=\"col-sm-2 col-form-label\" for=\"input-to\">";
        // line 35
        echo (isset($context["entry_to"]) ? $context["entry_to"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"to\" id=\"input-to\" class=\"form-control\">
                <option value=\"newsletter\">";
        // line 38
        echo (isset($context["text_newsletter"]) ? $context["text_newsletter"] : null);
        echo "</option>
                <option value=\"customer_all\">";
        // line 39
        echo (isset($context["text_customer_all"]) ? $context["text_customer_all"] : null);
        echo "</option>
                <option value=\"customer_group\">";
        // line 40
        echo (isset($context["text_customer_group"]) ? $context["text_customer_group"] : null);
        echo "</option>
                <option value=\"customer\">";
        // line 41
        echo (isset($context["text_customer"]) ? $context["text_customer"] : null);
        echo "</option>
                <option value=\"affiliate_all\">";
        // line 42
        echo (isset($context["text_affiliate_all"]) ? $context["text_affiliate_all"] : null);
        echo "</option>
                <option value=\"affiliate\">";
        // line 43
        echo (isset($context["text_affiliate"]) ? $context["text_affiliate"] : null);
        echo "</option>
                <option value=\"product\">";
        // line 44
        echo (isset($context["text_product"]) ? $context["text_product"] : null);
        echo "</option>
              </select>
            </div>
          </div>
          <div class=\"form-group row to\" id=\"to-customer-group\">
            <label class=\"col-sm-2 col-form-label\" for=\"input-customer-group\">";
        // line 49
        echo (isset($context["entry_customer_group"]) ? $context["entry_customer_group"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"customer_group_id\" id=\"input-customer-group\" class=\"form-control\">
                ";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["customer_groups"]) ? $context["customer_groups"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 53
            echo "                  <option value=\"";
            echo $this->getAttribute($context["customer_group"], "customer_group_id", array());
            echo "\">";
            echo $this->getAttribute($context["customer_group"], "name", array());
            echo "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "              </select>
            </div>
          </div>
          <div class=\"form-group row to\" id=\"to-customer\">
            <label class=\"col-sm-2 col-form-label\" for=\"input-customer\">";
        // line 59
        echo (isset($context["entry_customer"]) ? $context["entry_customer"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"customers\" value=\"\" placeholder=\"";
        // line 61
        echo (isset($context["entry_customer"]) ? $context["entry_customer"] : null);
        echo "\" id=\"input-customer\" class=\"form-control\"/>
              <div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"></div>
              <small class=\"form-text text-muted\">";
        // line 63
        echo (isset($context["help_customer"]) ? $context["help_customer"] : null);
        echo "</small>
            </div>
          </div>
          <div class=\"form-group row to\" id=\"to-affiliate\">
            <label class=\"col-sm-2 col-form-label\" for=\"input-affiliate\">";
        // line 67
        echo (isset($context["entry_affiliate"]) ? $context["entry_affiliate"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"affiliates\" value=\"\" placeholder=\"";
        // line 69
        echo (isset($context["entry_affiliate"]) ? $context["entry_affiliate"] : null);
        echo "\" id=\"input-affiliate\" class=\"form-control\"/>
              <div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"></div>
              <small class=\"form-text text-muted\">";
        // line 71
        echo (isset($context["help_affiliate"]) ? $context["help_affiliate"] : null);
        echo "</small>
            </div>
          </div>
          <div class=\"form-group row to\" id=\"to-product\">
            <label class=\"col-sm-2 col-form-label\" for=\"input-product\">";
        // line 75
        echo (isset($context["entry_product"]) ? $context["entry_product"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"products\" value=\"\" placeholder=\"";
        // line 77
        echo (isset($context["entry_product"]) ? $context["entry_product"] : null);
        echo "\" id=\"input-product\" class=\"form-control\"/>
              <div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"></div>
              <small class=\"form-text text-muted\">";
        // line 79
        echo (isset($context["help_product"]) ? $context["help_product"] : null);
        echo "</small>
            </div>
          </div>
          <div class=\"form-group row required\">
            <label class=\"col-sm-2 col-form-label\" for=\"input-subject\">";
        // line 83
        echo (isset($context["entry_subject"]) ? $context["entry_subject"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"subject\" value=\"\" placeholder=\"";
        // line 85
        echo (isset($context["entry_subject"]) ? $context["entry_subject"] : null);
        echo "\" id=\"input-subject\" class=\"form-control\"/>
            </div>
          </div>
          <div class=\"form-group row required\">
            <label class=\"col-sm-2 col-form-label\" for=\"input-message\">";
        // line 89
        echo (isset($context["entry_message"]) ? $context["entry_message"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <textarea name=\"message\" placeholder=\"";
        // line 91
        echo (isset($context["entry_message"]) ? $context["entry_message"] : null);
        echo "\" id=\"input-message\" data-toggle=\"summernote\" data-lang=\"";
        echo (isset($context["summernote"]) ? $context["summernote"] : null);
        echo "\" class=\"form-control\"></textarea>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('select[name=\\'to\\']').on('change', function() {
\t\$('.to').hide();

\t\$('#to-' + this.value.replace('_', '-')).show();
});

\$('select[name=\\'to\\']').trigger('change');
//--></script>
<script type=\"text/javascript\"><!--
// Customers
\$('input[name=\\'customers\\']').autocomplete({
\t'source': function(request, response) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=customer/customer/autocomplete&user_token=";
        // line 113
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
\t\t\t},
\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t}
\t\t});
\t},
\t'select': function(item) {
\t\t\$('input[name=\\'customers\\']').val('');

\t\t\$('#input-customer' + item['value']).remove();

\t\t\$('#input-customer').parent().find('.well').append('<div id=\"customer' + item['value'] + '\"><i class=\"fa fa-minus-circle\"></i> ' + item['label'] + '<input type=\"hidden\" name=\"customer[]\" value=\"' + item['value'] + '\" /></div>');
\t}
});

\$('#input-customer').parent().find('.well').delegate('.fa-minus-circle', 'click', function() {
\t\$(this).parent().remove();
});

// Affiliates
\$('input[name=\\'affiliates\\']').autocomplete({
\t'source': function(request, response) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=customer/customer/autocomplete&user_token=";
        // line 145
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&filter_name=' + encodeURIComponent(request) + '&filter_affiliate=1',
\t\t\tdataType: 'json',
\t\t\tsuccess: function(json) {
\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\treturn {
\t\t\t\t\t\tlabel: item['name'],
\t\t\t\t\t\tvalue: item['customer_id']
\t\t\t\t\t}
\t\t\t\t}));
\t\t\t},
\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t}
\t\t});
\t},
\t'select': function(item) {
\t\t\$('input[name=\\'affiliates\\']').val('');

\t\t\$('#input-affiliate' + item['value']).remove();

\t\t\$('#input-affiliate').parent().find('.well').append('<div id=\"affiliate' + item['value'] + '\"><i class=\"fa fa-minus-circle\"></i> ' + item['label'] + '<input type=\"hidden\" name=\"affiliate[]\" value=\"' + item['value'] + '\" /></div>');
\t}
});

\$('#input-affiliate').parent().find('.well').delegate('.fa-minus-circle', 'click', function() {
\t\$(this).parent().remove();
});

// Products
\$('input[name=\\'products\\']').autocomplete({
\t'source': function(request, response) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=catalog/product/autocomplete&user_token=";
        // line 177
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&filter_name=' + encodeURIComponent(request),
\t\t\tdataType: 'json',
\t\t\tsuccess: function(json) {
\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\treturn {
\t\t\t\t\t\tlabel: item['name'],
\t\t\t\t\t\tvalue: item['product_id']
\t\t\t\t\t}
\t\t\t\t}));
\t\t\t},
\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t}
\t\t});
\t},
\t'select': function(item) {
\t\t\$('input[name=\\'products\\']').val('');

\t\t\$('#input-product' + item['value']).remove();

\t\t\$('#input-product').parent().find('.well').append('<div id=\"product' + item['value'] + '\"><i class=\"fa fa-minus-circle\"></i> ' + item['label'] + '<input type=\"hidden\" name=\"product[]\" value=\"' + item['value'] + '\" /></div>');
\t}
});

\$('#input-product').parent().find('.well').delegate('.fa-minus-circle', 'click', function() {
\t\$(this).parent().remove();
});

function send(url) {
\t\$.ajax({
\t\turl: url,
\t\ttype: 'post',
\t\tdata: \$('#content select, #content input, #content textarea'),
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$('#button-send').button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#button-send').button('reset');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible, .invalid-tooltip').remove();

\t\t\tif (json['error']) {
\t\t\t\tif (json['error']['warning']) {
\t\t\t\t\t\$('#content > .container-fluid').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error']['warning'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
\t\t\t\t}

\t\t\t\tif (json['error']['email']) {
\t\t\t\t\t\$('#content > .container-fluid').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error']['email'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
\t\t\t\t}

\t\t\t\tif (json['error']['subject']) {
\t\t\t\t\t\$('input[name=\\'subject\\']').after('<div class=\"invalid-tooltip d-block\">' + json['error']['subject'] + '</div>');
\t\t\t\t}

\t\t\t\tif (json['error']['message']) {
\t\t\t\t\t\$('textarea[name=\\'message\\']').after('<div class=\"invalid-tooltip d-block\">' + json['error']['message'] + '</div>');
\t\t\t\t}
\t\t\t}

\t\t\tif (json['success']) {
\t\t\t\t\$('#content > .container-fluid').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i>  ' + json['success'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
\t\t\t}

\t\t\tif (json['next']) {
\t\t\t\tsend(json['next']);
\t\t\t}
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
}

//--></script>
";
        // line 253
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "marketing/contact.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  418 => 253,  339 => 177,  304 => 145,  269 => 113,  242 => 91,  237 => 89,  230 => 85,  225 => 83,  218 => 79,  213 => 77,  208 => 75,  201 => 71,  196 => 69,  191 => 67,  184 => 63,  179 => 61,  174 => 59,  168 => 55,  157 => 53,  153 => 52,  147 => 49,  139 => 44,  135 => 43,  131 => 42,  127 => 41,  123 => 40,  119 => 39,  115 => 38,  109 => 35,  103 => 31,  92 => 29,  88 => 28,  84 => 27,  78 => 24,  71 => 20,  63 => 14,  52 => 12,  48 => 11,  42 => 8,  36 => 7,  28 => 6,  19 => 1,);
    }
}
/* {{ header }}{{ column_left }}*/
/* <div id="content">*/
/*   <div class="page-header">*/
/*     <div class="container-fluid">*/
/*       <div class="pull-right">*/
/*         <button id="button-send" data-loading-text="{{ text_loading }}" data-toggle="tooltip" title="{{ button_send }}" class="btn btn-primary" onclick="send('index.php?route=marketing/contact/send&user_token={{ user_token }}');"><i class="fa fa-envelope"></i></button>*/
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
/*     <div class="card">*/
/*       <div class="card-header"><i class="fa fa-envelope"></i> {{ heading_title }}</div>*/
/*       <div class="card-body">*/
/*         <form>*/
/*           <div class="form-group row">*/
/*             <label class="col-sm-2 col-form-label" for="input-store">{{ entry_store }}</label>*/
/*             <div class="col-sm-10">*/
/*               <select name="store_id" id="input-store" class="form-control">*/
/*                 <option value="0">{{ text_default }}</option>*/
/*                 {% for store in stores %}*/
/*                   <option value="{{ store.store_id }}">{{ store.name }}</option>*/
/*                 {% endfor %}*/
/*               </select>*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group row">*/
/*             <label class="col-sm-2 col-form-label" for="input-to">{{ entry_to }}</label>*/
/*             <div class="col-sm-10">*/
/*               <select name="to" id="input-to" class="form-control">*/
/*                 <option value="newsletter">{{ text_newsletter }}</option>*/
/*                 <option value="customer_all">{{ text_customer_all }}</option>*/
/*                 <option value="customer_group">{{ text_customer_group }}</option>*/
/*                 <option value="customer">{{ text_customer }}</option>*/
/*                 <option value="affiliate_all">{{ text_affiliate_all }}</option>*/
/*                 <option value="affiliate">{{ text_affiliate }}</option>*/
/*                 <option value="product">{{ text_product }}</option>*/
/*               </select>*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group row to" id="to-customer-group">*/
/*             <label class="col-sm-2 col-form-label" for="input-customer-group">{{ entry_customer_group }}</label>*/
/*             <div class="col-sm-10">*/
/*               <select name="customer_group_id" id="input-customer-group" class="form-control">*/
/*                 {% for customer_group in customer_groups %}*/
/*                   <option value="{{ customer_group.customer_group_id }}">{{ customer_group.name }}</option>*/
/*                 {% endfor %}*/
/*               </select>*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group row to" id="to-customer">*/
/*             <label class="col-sm-2 col-form-label" for="input-customer">{{ entry_customer }}</label>*/
/*             <div class="col-sm-10">*/
/*               <input type="text" name="customers" value="" placeholder="{{ entry_customer }}" id="input-customer" class="form-control"/>*/
/*               <div class="well well-sm" style="height: 150px; overflow: auto;"></div>*/
/*               <small class="form-text text-muted">{{ help_customer }}</small>*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group row to" id="to-affiliate">*/
/*             <label class="col-sm-2 col-form-label" for="input-affiliate">{{ entry_affiliate }}</label>*/
/*             <div class="col-sm-10">*/
/*               <input type="text" name="affiliates" value="" placeholder="{{ entry_affiliate }}" id="input-affiliate" class="form-control"/>*/
/*               <div class="well well-sm" style="height: 150px; overflow: auto;"></div>*/
/*               <small class="form-text text-muted">{{ help_affiliate }}</small>*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group row to" id="to-product">*/
/*             <label class="col-sm-2 col-form-label" for="input-product">{{ entry_product }}</label>*/
/*             <div class="col-sm-10">*/
/*               <input type="text" name="products" value="" placeholder="{{ entry_product }}" id="input-product" class="form-control"/>*/
/*               <div class="well well-sm" style="height: 150px; overflow: auto;"></div>*/
/*               <small class="form-text text-muted">{{ help_product }}</small>*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group row required">*/
/*             <label class="col-sm-2 col-form-label" for="input-subject">{{ entry_subject }}</label>*/
/*             <div class="col-sm-10">*/
/*               <input type="text" name="subject" value="" placeholder="{{ entry_subject }}" id="input-subject" class="form-control"/>*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group row required">*/
/*             <label class="col-sm-2 col-form-label" for="input-message">{{ entry_message }}</label>*/
/*             <div class="col-sm-10">*/
/*               <textarea name="message" placeholder="{{ entry_message }}" id="input-message" data-toggle="summernote" data-lang="{{ summernote }}" class="form-control"></textarea>*/
/*             </div>*/
/*           </div>*/
/*         </form>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* <script type="text/javascript"><!--*/
/* $('select[name=\'to\']').on('change', function() {*/
/* 	$('.to').hide();*/
/* */
/* 	$('#to-' + this.value.replace('_', '-')).show();*/
/* });*/
/* */
/* $('select[name=\'to\']').trigger('change');*/
/* //--></script>*/
/* <script type="text/javascript"><!--*/
/* // Customers*/
/* $('input[name=\'customers\']').autocomplete({*/
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
/* 			},*/
/* 			error: function(xhr, ajaxOptions, thrownError) {*/
/* 				alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 			}*/
/* 		});*/
/* 	},*/
/* 	'select': function(item) {*/
/* 		$('input[name=\'customers\']').val('');*/
/* */
/* 		$('#input-customer' + item['value']).remove();*/
/* */
/* 		$('#input-customer').parent().find('.well').append('<div id="customer' + item['value'] + '"><i class="fa fa-minus-circle"></i> ' + item['label'] + '<input type="hidden" name="customer[]" value="' + item['value'] + '" /></div>');*/
/* 	}*/
/* });*/
/* */
/* $('#input-customer').parent().find('.well').delegate('.fa-minus-circle', 'click', function() {*/
/* 	$(this).parent().remove();*/
/* });*/
/* */
/* // Affiliates*/
/* $('input[name=\'affiliates\']').autocomplete({*/
/* 	'source': function(request, response) {*/
/* 		$.ajax({*/
/* 			url: 'index.php?route=customer/customer/autocomplete&user_token={{ user_token }}&filter_name=' + encodeURIComponent(request) + '&filter_affiliate=1',*/
/* 			dataType: 'json',*/
/* 			success: function(json) {*/
/* 				response($.map(json, function(item) {*/
/* 					return {*/
/* 						label: item['name'],*/
/* 						value: item['customer_id']*/
/* 					}*/
/* 				}));*/
/* 			},*/
/* 			error: function(xhr, ajaxOptions, thrownError) {*/
/* 				alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 			}*/
/* 		});*/
/* 	},*/
/* 	'select': function(item) {*/
/* 		$('input[name=\'affiliates\']').val('');*/
/* */
/* 		$('#input-affiliate' + item['value']).remove();*/
/* */
/* 		$('#input-affiliate').parent().find('.well').append('<div id="affiliate' + item['value'] + '"><i class="fa fa-minus-circle"></i> ' + item['label'] + '<input type="hidden" name="affiliate[]" value="' + item['value'] + '" /></div>');*/
/* 	}*/
/* });*/
/* */
/* $('#input-affiliate').parent().find('.well').delegate('.fa-minus-circle', 'click', function() {*/
/* 	$(this).parent().remove();*/
/* });*/
/* */
/* // Products*/
/* $('input[name=\'products\']').autocomplete({*/
/* 	'source': function(request, response) {*/
/* 		$.ajax({*/
/* 			url: 'index.php?route=catalog/product/autocomplete&user_token={{ user_token }}&filter_name=' + encodeURIComponent(request),*/
/* 			dataType: 'json',*/
/* 			success: function(json) {*/
/* 				response($.map(json, function(item) {*/
/* 					return {*/
/* 						label: item['name'],*/
/* 						value: item['product_id']*/
/* 					}*/
/* 				}));*/
/* 			},*/
/* 			error: function(xhr, ajaxOptions, thrownError) {*/
/* 				alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 			}*/
/* 		});*/
/* 	},*/
/* 	'select': function(item) {*/
/* 		$('input[name=\'products\']').val('');*/
/* */
/* 		$('#input-product' + item['value']).remove();*/
/* */
/* 		$('#input-product').parent().find('.well').append('<div id="product' + item['value'] + '"><i class="fa fa-minus-circle"></i> ' + item['label'] + '<input type="hidden" name="product[]" value="' + item['value'] + '" /></div>');*/
/* 	}*/
/* });*/
/* */
/* $('#input-product').parent().find('.well').delegate('.fa-minus-circle', 'click', function() {*/
/* 	$(this).parent().remove();*/
/* });*/
/* */
/* function send(url) {*/
/* 	$.ajax({*/
/* 		url: url,*/
/* 		type: 'post',*/
/* 		data: $('#content select, #content input, #content textarea'),*/
/* 		dataType: 'json',*/
/* 		beforeSend: function() {*/
/* 			$('#button-send').button('loading');*/
/* 		},*/
/* 		complete: function() {*/
/* 			$('#button-send').button('reset');*/
/* 		},*/
/* 		success: function(json) {*/
/* 			$('.alert-dismissible, .invalid-tooltip').remove();*/
/* */
/* 			if (json['error']) {*/
/* 				if (json['error']['warning']) {*/
/* 					$('#content > .container-fluid').prepend('<div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> ' + json['error']['warning'] + ' <button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/* 				}*/
/* */
/* 				if (json['error']['email']) {*/
/* 					$('#content > .container-fluid').prepend('<div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> ' + json['error']['email'] + ' <button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/* 				}*/
/* */
/* 				if (json['error']['subject']) {*/
/* 					$('input[name=\'subject\']').after('<div class="invalid-tooltip d-block">' + json['error']['subject'] + '</div>');*/
/* 				}*/
/* */
/* 				if (json['error']['message']) {*/
/* 					$('textarea[name=\'message\']').after('<div class="invalid-tooltip d-block">' + json['error']['message'] + '</div>');*/
/* 				}*/
/* 			}*/
/* */
/* 			if (json['success']) {*/
/* 				$('#content > .container-fluid').prepend('<div class="alert alert-success alert-dismissible"><i class="fa fa-check-circle"></i>  ' + json['success'] + ' <button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/* 			}*/
/* */
/* 			if (json['next']) {*/
/* 				send(json['next']);*/
/* 			}*/
/* 		},*/
/* 		error: function(xhr, ajaxOptions, thrownError) {*/
/* 			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 		}*/
/* 	});*/
/* }*/
/* */
/* //--></script>*/
/* {{ footer }}*/
