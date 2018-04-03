<?php

/* default/template/checkout/checkout.twig */
class __TwigTemplate_c55804056ecbb8d8a636617234002d4c9f04c4d4703e5cf76e5ce9d4048720b1 extends Twig_Template
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
        echo "
<div id=\"checkout-checkout\" class=\"container\">
  <ul class=\"breadcrumb\">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 5
            echo "    <li><a href=\"";
            echo $this->getAttribute($context["breadcrumb"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["breadcrumb"], "text", array());
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "  </ul>
  ";
        // line 8
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            // line 9
            echo "  <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
  </div>
  ";
        }
        // line 13
        echo "  <div class=\"row\">";
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "
    ";
        // line 14
        if (((isset($context["column_left"]) ? $context["column_left"] : null) && (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 15
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 16
            echo "    ";
        } elseif (((isset($context["column_left"]) ? $context["column_left"] : null) || (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 17
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 18
            echo "    ";
        } else {
            // line 19
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 20
            echo "    ";
        }
        // line 21
        echo "    <div id=\"content\" class=\"";
        echo (isset($context["class"]) ? $context["class"] : null);
        echo "\">";
        echo (isset($context["content_top"]) ? $context["content_top"] : null);
        echo "
      <h1>";
        // line 22
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
      <div id=\"accordion\">
        <div class=\"card\">
          <div class=\"card-header card-primary\" id=\"heading-checkout-option\">
            <h4>";
        // line 26
        echo (isset($context["text_checkout_option"]) ? $context["text_checkout_option"] : null);
        echo "</h4>
          </div>
          <div id=\"collapse-checkout-option\" class=\"collapse\" aria-labelledby=\"heading-checkout-option\" data-parent=\"#accordion\">
            <div class=\"card-body\"></div>
          </div>
        </div>

        <div class=\"card\">
        ";
        // line 34
        if (( !(isset($context["logged"]) ? $context["logged"] : null) && ((isset($context["account"]) ? $context["account"] : null) != "guest"))) {
            // line 35
            echo "          <div class=\"card-header card-primary\" id=\"heading-payment-address\">
            <h4>";
            // line 36
            echo (isset($context["text_checkout_account"]) ? $context["text_checkout_account"] : null);
            echo "</h4>
          </div>
          <div id=\"collapse-payment-address\" class=\"collapse\" aria-labelledby=\"heading-payment-address\" data-parent=\"#accordion\">
            <div class=\"card-body\"></div>
          </div>
        ";
        } else {
            // line 42
            echo "          <div class=\"card-header card-primary\" id=\"heading-payment-address\">
            <h4>";
            // line 43
            echo (isset($context["text_checkout_account"]) ? $context["text_checkout_account"] : null);
            echo "</h4>
          </div>
          <div id=\"collapse-payment-address\" class=\"collapse show\" aria-labelledby=\"heading-payment-address\" data-parent=\"#accordion\">
            <div class=\"card-body\"></div>
          </div>
        ";
        }
        // line 49
        echo "        </div>

        ";
        // line 51
        if ((isset($context["shipping_required"]) ? $context["shipping_required"] : null)) {
            // line 52
            echo "        <div class=\"card\">
          <div class=\"card-header card-primary\" id=\"heading-shipping-address\">
            <h4>";
            // line 54
            echo (isset($context["text_checkout_shipping_address"]) ? $context["text_checkout_shipping_address"] : null);
            echo "</h4>
          </div>
          <div id=\"collapse-shipping-address\" class=\"collapse\" aria-labelledby=\"heading-shipping-address\" data-parent=\"#accordion\">
            <div class=\"card-body\"></div>
          </div>
        </div>
        <div class=\"card\">
          <div class=\"card-header card-primary\" id=\"heading-shipping-method\">
            <h4>";
            // line 62
            echo (isset($context["text_checkout_shipping_method"]) ? $context["text_checkout_shipping_method"] : null);
            echo "</h4>
          </div>
          <div id=\"collapse-shipping-method\" class=\"collapse\" aria-labelledby=\"heading-shipping-method\" data-parent=\"#accordion\">
            <div class=\"card-body\"></div>
          </div>
        </div>

        ";
        }
        // line 70
        echo "        <div class=\"card\">
          <div class=\"card-header card-primary\" id=\"heading-payment-method\">
            <h4>";
        // line 72
        echo (isset($context["text_checkout_payment_method"]) ? $context["text_checkout_payment_method"] : null);
        echo "</h4>
          </div>
          <div id=\"collapse-payment-method\" class=\"collapse\" aria-labelledby=\"heading-payment-method\" data-parent=\"#accordion\">
            <div class=\"card-body\"></div>
          </div>
        </div>
        <div class=\"card\">
          <div class=\"card-header card-primary\" id=\"heading-checkout-confirm\">
            <h4>";
        // line 80
        echo (isset($context["text_checkout_confirm"]) ? $context["text_checkout_confirm"] : null);
        echo "</h4>
          </div>
          <div id=\"collapse-checkout-confirm\" class=\"collapse\" aria-labelledby=\"heading-payment-method\" data-parent=\"#accordion\">
            <div class=\"card-body\"></div>
          </div>
        </div>

      </div>
      ";
        // line 88
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "</div>
    ";
        // line 89
        echo (isset($context["column_right"]) ? $context["column_right"] : null);
        echo "</div>
</div>
<script type=\"text/javascript\"><!--
    \$(document).on('change', 'input[name=\\'account\\']', function() {
        if (\$('#collapse-payment-address').parent().find('h4 > *').is('a')) {
          if (this.value == 'register') {
            \$('#collapse-payment-address').parent().find('h4').html('<a href=\"#collapse-payment-address\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
        // line 95
        echo (isset($context["text_checkout_account"]) ? $context["text_checkout_account"] : null);
        echo " <i class=\"fa fa-caret-down\"></i></a>');
          } else {
            \$('#collapse-payment-address').parent().find('h4').html('<a href=\"#collapse-payment-address\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
        // line 97
        echo (isset($context["text_checkout_payment_address"]) ? $context["text_checkout_payment_address"] : null);
        echo " <i class=\"fa fa-caret-down\"></i></a>');
          }
        } else {
          if (this.value == 'register') {
            \$('#collapse-payment-address').parent().find('h4').html('";
        // line 101
        echo (isset($context["text_checkout_account"]) ? $context["text_checkout_account"] : null);
        echo "');
          } else {
            \$('#collapse-payment-address').parent().find('h4').html('";
        // line 103
        echo (isset($context["text_checkout_payment_address"]) ? $context["text_checkout_payment_address"] : null);
        echo "');
          }
        }
    });

    ";
        // line 108
        if ( !(isset($context["logged"]) ? $context["logged"] : null)) {
            // line 109
            echo "    \$(document).ready(function() {
        \$.ajax({
          url: 'index.php?route=checkout/login',
          dataType: 'html',
          success: function(html) {
            \$('#collapse-checkout-option .card-body').html(html);
            \$('#heading-checkout-option').parent().find('h4').html('<a href=\"#collapse-checkout-option\" data-toggle=\"collapse\" aria-expanded=\"true\" aria-controls=\"collapse-checkout-option\">";
            // line 115
            echo (isset($context["text_checkout_option"]) ? $context["text_checkout_option"] : null);
            echo " <i class=\"fa fa-caret-down\"></i></a>');
            \$('a[href=\\'#heading-checkout-option\\']').trigger('click');
            \$('#collapse-checkout-option').collapse();
          },
          error: function(xhr, ajaxOptions, thrownError) {
            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
          }
        });
    });
    ";
        } else {
            // line 125
            echo "    \$(document).ready(function() {
      \$.ajax({
        url: 'index.php?route=checkout/payment_address',
        dataType: 'html',
        success: function(html) {
          \$('#collapse-payment-address .card-body').html(html);
          \$('#heading-payment-address').parent().find('h4').html('<a href=\"#collapse-payment-address\" data-toggle=\"collapse\" aria-expanded=\"true\" aria-controls=\"collapse-payment-address\">";
            // line 131
            echo (isset($context["text_checkout_payment_address"]) ? $context["text_checkout_payment_address"] : null);
            echo " <i class=\"fa fa-caret-down\"></i></a>');
          \$('a[href=\\'#collapse-payment-address\\']').trigger('click');
        },
        error: function(xhr, ajaxOptions, thrownError) {
          alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
      });
    });
    ";
        }
        // line 140
        echo "
    // Checkout
    \$(document).delegate('#button-account', 'click', function() {
      \$.ajax({
        url: 'index.php?route=checkout/' + \$('input[name=\\'account\\']:checked').val(),
        dataType: 'html',
        beforeSend: function() {
          \$('#button-account').button('loading');
        },
        complete: function() {
           \$('#button-account').button('reset');
        },
        success: function(html) {
          \$('.alert-dismissible, .text-danger').remove();
          \$('.form-group').removeClass('has-error');
          \$('#collapse-payment-address .card-body').html(html);

          if (\$('input[name=\\'account\\']:checked').val() == 'register') {
          \t\$('#heading-payment-address').parent().find('h4').html('<a href=\"#collapse-payment-address\" data-toggle=\"collapse\" aria-expanded=\"true\" aria-controls=\"collapse-payment-address\">";
        // line 158
        echo (isset($context["text_checkout_account"]) ? $context["text_checkout_account"] : null);
        echo " <i class=\"fa fa-caret-down\"></i></a>');
          } else {
          \t\$('#heading-payment-address').parent().find('h4').html('<a href=\"#collapse-payment-address\" data-toggle=\"collapse\" aria-expanded=\"true\" aria-controls=\"collapse-payment-address\">";
        // line 160
        echo (isset($context["text_checkout_payment_address"]) ? $context["text_checkout_payment_address"] : null);
        echo " <i class=\"fa fa-caret-down\"></i></a>');
          }
          \$('a[href=\\'#collapse-payment-address\\']').trigger('click');

        },
        error: function(xhr, ajaxOptions, thrownError) {
          alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
      });
    });

    // Login
    \$(document).delegate('#button-login', 'click', function() {
        \$.ajax({
          url: 'index.php?route=checkout/login/save',
          type: 'post',
          data: \$('#collapse-checkout-option :input'),
          dataType: 'json',
          beforeSend: function() {
            \$('#button-login').button('loading');
          },
          complete: function() {
            \$('#button-login').button('reset');
          },
          success: function(json) {
            \$('.alert-dismissible, .text-danger').remove();
            \$('.form-group').removeClass('has-error');
            if (json['redirect']) {
              location = json['redirect'];
            } else if (json['error']) {
              \$('#collapse-checkout-option .card-body').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error']['warning'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
              // Highlight any found errors
              \$('input[name=\\'email\\']').parent().addClass('has-error');
              \$('input[name=\\'password\\']').parent().addClass('has-error');
            }
          },
          error: function(xhr, ajaxOptions, thrownError) {
            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
          }
        });
    });

    // Register
    \$(document).delegate('#button-register', 'click', function() {
        \$.ajax({
            url: 'index.php?route=checkout/register/save',
            type: 'post',
            data: \$('#collapse-payment-address input[type=\\'text\\'], #collapse-payment-address input[type=\\'date\\'], #collapse-payment-address input[type=\\'datetime-local\\'], #collapse-payment-address input[type=\\'time\\'], #collapse-payment-address input[type=\\'password\\'], #collapse-payment-address input[type=\\'hidden\\'], #collapse-payment-address input[type=\\'checkbox\\']:checked, #collapse-payment-address input[type=\\'radio\\']:checked, #collapse-payment-address textarea, #collapse-payment-address select'),
            dataType: 'json',
            beforeSend: function() {
        \t\t\t\$('#button-register').button('loading');
        \t\t},
            success: function(json) {
                \$('.alert-dismissible, .text-danger').remove();
                \$('.form-group').removeClass('has-error');

                if (json['redirect']) {
                    location = json['redirect'];
                } else if (json['error']) {
                  \$('#button-register').button('reset');

                  if (json['error']['warning']) {
                      \$('#collapse-payment-address .card-body').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error']['warning'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
                  }

          \t\t\t\tfor (i in json['error']) {
          \t\t\t\t\tvar element = \$('#input-payment-' + i.replace('_', '-'));

          \t\t\t\t\tif (\$(element).parent().hasClass('input-group')) {
          \t\t\t\t\t\t\$(element).parent().after('<div class=\"text-danger\">' + json['error'][i] + '</div>');
          \t\t\t\t\t} else {
          \t\t\t\t\t\t\$(element).after('<div class=\"text-danger\">' + json['error'][i] + '</div>');
          \t\t\t\t\t}
          \t\t\t\t}

          \t\t\t\t// Highlight any found errors
          \t\t\t\t\$('.text-danger').parent().addClass('has-error');
                } else {
                    ";
        // line 238
        if ((isset($context["shipping_required"]) ? $context["shipping_required"] : null)) {
            // line 239
            echo "                    var shipping_address = \$('#payment-address input[name=\\'shipping_address\\']:checked').prop('value');

                    if (shipping_address) {
                        \$.ajax({
                            url: 'index.php?route=checkout/shipping_method',
                            dataType: 'html',
                            success: function(html) {
    \t                         // Add the shipping address
                              \$.ajax({
                                url: 'index.php?route=checkout/shipping_address',
                                dataType: 'html',
                                success: function(html) {
                                  \$('#collapse-shipping-address .card-body').html(html);

                \t\t\t\t\t\t\t\t\t\$('#heading-shipping-address').parent().find('h4').html('<a href=\"#collapse-shipping-address\" data-toggle=\"collapse\" aria-expanded=\"true\" aria-controls=\"collapse-shipping-address\">";
            // line 253
            echo (isset($context["text_checkout_shipping_address"]) ? $context["text_checkout_shipping_address"] : null);
            echo " <i class=\"fa fa-caret-down\"></i></a>');
                                },
                                error: function(xhr, ajaxOptions, thrownError) {
                                    alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                                }
                              });

    \t\t                     \$('#collapse-shipping-method .card-body').html(html);

                \t\t\t\t\t\t\t\$('#heading-shipping-method').parent().find('h4').html('<a href=\"#collapse-shipping-method\" data-toggle=\"collapse\" aria-expanded=\"true\" aria-controls=\"collapse-shipping-method\">";
            // line 262
            echo (isset($context["text_checkout_shipping_method"]) ? $context["text_checkout_shipping_method"] : null);
            echo " <i class=\"fa fa-caret-down\"></i></a>');

                 \t\t\t\t\t\t\t\$('a[href=\\'#collapse-shipping-method\\']').trigger('click');

                \t\t\t\t\t\t\t\$('#collapse-shipping-method').parent().find('h4').html('";
            // line 266
            echo (isset($context["text_checkout_shipping_method"]) ? $context["text_checkout_shipping_method"] : null);
            echo "');
                \t\t\t\t\t\t\t\$('#collapse-payment-method').parent().find('h4').html('";
            // line 267
            echo (isset($context["text_checkout_payment_method"]) ? $context["text_checkout_payment_method"] : null);
            echo "');
                \t\t\t\t\t\t\t\$('#collapse-checkout-confirm').parent().find('h4').html('";
            // line 268
            echo (isset($context["text_checkout_confirm"]) ? $context["text_checkout_confirm"] : null);
            echo "');
                            },
                            error: function(xhr, ajaxOptions, thrownError) {
                              alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                            }
                        });
                    } else {
                        \$.ajax({
                            url: 'index.php?route=checkout/shipping_address',
                            dataType: 'html',
                            success: function(html) {
                                \$('#collapse-shipping-address .card-body').html(html);

                  \t\t\t\t\t\t\t\$('#heading-shipping-address').parent().find('h4').html('<a href=\"#collapse-shipping-address\" data-toggle=\"collapse\" aria-expanded=\"true\" aria-controls=\"collapse-shipping-address\">";
            // line 281
            echo (isset($context["text_checkout_shipping_address"]) ? $context["text_checkout_shipping_address"] : null);
            echo " <i class=\"fa fa-caret-down\"></i></a>');

                  \t\t\t\t\t\t\t\$('a[href=\\'#collapse-shipping-address\\']').trigger('click');

                  \t\t\t\t\t\t\t\$('#heading-shipping-method').parent().find('h4').html('";
            // line 285
            echo (isset($context["text_checkout_shipping_method"]) ? $context["text_checkout_shipping_method"] : null);
            echo "');
                  \t\t\t\t\t\t\t\$('#heading-payment-method').parent().find('h4').html('";
            // line 286
            echo (isset($context["text_checkout_payment_method"]) ? $context["text_checkout_payment_method"] : null);
            echo "');
                  \t\t\t\t\t\t\t\$('#heading-checkout-confirm').parent().find('h4').html('";
            // line 287
            echo (isset($context["text_checkout_confirm"]) ? $context["text_checkout_confirm"] : null);
            echo "');
                            },
                            error: function(xhr, ajaxOptions, thrownError) {
                                alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                            }
                        });
                    }
                    ";
        } else {
            // line 295
            echo "                    \$.ajax({
                        url: 'index.php?route=checkout/payment_method',
                        dataType: 'html',
                        success: function(html) {
                            \$('#collapse-payment-method .card-body').html(html);
                \t\t\t\t\t\t\$('#heading-payment-method').parent().find('h4').html('<a href=\"#collapse-payment-method\" data-toggle=\"collapse\" aria-expanded=\"true\" aria-controls=\"collapse-payment-method\">";
            // line 300
            echo (isset($context["text_checkout_payment_method"]) ? $context["text_checkout_payment_method"] : null);
            echo " <i class=\"fa fa-caret-down\"></i></a>');
                \t\t\t\t\t\t\$('#heading-checkout-confirm').parent().find('h4').html('";
            // line 301
            echo (isset($context["text_checkout_confirm"]) ? $context["text_checkout_confirm"] : null);
            echo "');
                        },
                        error: function(xhr, ajaxOptions, thrownError) {
                            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                        }
                    });
                    ";
        }
        // line 308
        echo "
                    \$.ajax({
                        url: 'index.php?route=checkout/payment_address',
                        dataType: 'html',
                        complete: function() {
                          \$('#button-register').button('reset');
                        },
                        success: function(html) {
                          \$('#collapse-payment-address .card-body').html(html);
              \t\t\t\t\t\t\$('#heading-payment-address').parent().find('h4').html('<a  href=\"#collapse-payment-address\" data-toggle=\"collapse\" aria-expanded=\"true\" aria-controls=\"collapse-payment-address\">";
        // line 317
        echo (isset($context["text_checkout_payment_address"]) ? $context["text_checkout_payment_address"] : null);
        echo " <i class=\"fa fa-caret-down\"></i></a>');
                        },
                        error: function(xhr, ajaxOptions, thrownError) {
                          alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                        }
                    });
                }
            },
            error: function(xhr, ajaxOptions, thrownError) {
                alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
            }
        });
    });

    // Payment Address
    \$(document).delegate('#button-payment-address', 'click', function() {
        \$.ajax({
            url: 'index.php?route=checkout/payment_address/save',
            type: 'post',
            data: \$('#collapse-payment-address input[type=\\'text\\'], #collapse-payment-address input[type=\\'date\\'], #collapse-payment-address input[type=\\'datetime-local\\'], #collapse-payment-address input[type=\\'time\\'], #collapse-payment-address input[type=\\'password\\'], #collapse-payment-address input[type=\\'checkbox\\']:checked, #collapse-payment-address input[type=\\'radio\\']:checked, #collapse-payment-address input[type=\\'hidden\\'], #collapse-payment-address textarea, #collapse-payment-address select'),
            dataType: 'json',
            beforeSend: function() {
            \t \$('#button-payment-address').button('loading');
    \t      },
            complete: function() {
    \t\t       \$('#button-payment-address').button('reset');
            },
            success: function(json) {
               \$('.alert-dismissible, .text-danger').remove();
               \$('.form-group').removeClass('has-error');

                if (json['redirect']) {
                    location = json['redirect'];
                } else if (json['error']) {
                    if (json['error']['warning']) {
                        \$('#collapse-payment-address .card-body').prepend('<div class=\"alert alert-warning alert-dismissible\">' + json['error']['warning'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
                    }

                    for (i in json['error']) {
                    var element = \$('#input-payment-' + i.replace('_', '-'));

                    if (\$(element).parent().hasClass('input-group')) {
                    \$(element).parent().after('<div class=\"text-danger\">' + json['error'][i] + '</div>');
                    } else {
                    \$(element).after('<div class=\"text-danger\">' + json['error'][i] + '</div>');
                    }
                    }

                    // Highlight any found errors
                    \$('.text-danger').parent().parent().addClass('has-error');
                } else {
                    ";
        // line 368
        if ((isset($context["shipping_required"]) ? $context["shipping_required"] : null)) {
            // line 369
            echo "                    \$.ajax({
                        url: 'index.php?route=checkout/shipping_address',
                        dataType: 'html',
                        success: function(html) {
                            \$('#collapse-shipping-address .card-body').html(html);

                \t\t\t\t\t\t\$('#collapse-shipping-address').parent().find('h4').html('<a href=\"#collapse-shipping-address\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
            // line 375
            echo (isset($context["text_checkout_shipping_address"]) ? $context["text_checkout_shipping_address"] : null);
            echo " <i class=\"fa fa-caret-down\"></i></a>');

                \t\t\t\t\t\t\$('a[href=\\'#collapse-shipping-address\\']').trigger('click');

                \t\t\t\t\t\t\$('#collapse-shipping-method').parent().find('h4').html('";
            // line 379
            echo (isset($context["text_checkout_shipping_method"]) ? $context["text_checkout_shipping_method"] : null);
            echo "');
                \t\t\t\t\t\t\$('#collapse-payment-method').parent().find('h4').html('";
            // line 380
            echo (isset($context["text_checkout_payment_method"]) ? $context["text_checkout_payment_method"] : null);
            echo "');
                \t\t\t\t\t\t\$('#collapse-checkout-confirm').parent().find('h4').html('";
            // line 381
            echo (isset($context["text_checkout_confirm"]) ? $context["text_checkout_confirm"] : null);
            echo "');
                        },
                        error: function(xhr, ajaxOptions, thrownError) {
                            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                        }
                    }).done(function() {
            \t\t\t\t\t\$.ajax({
            \t\t\t\t\t\turl: 'index.php?route=checkout/payment_address',
            \t\t\t\t\t\tdataType: 'html',
            \t\t\t\t\t\tsuccess: function(html) {
            \t\t\t\t\t\t\t\$('#collapse-payment-address .card-body').html(html);
            \t\t\t\t\t\t},
            \t\t\t\t\t\terror: function(xhr, ajaxOptions, thrownError) {
            \t\t\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
            \t\t\t\t\t\t}
            \t\t\t\t\t});
            \t\t\t\t});
                    ";
        } else {
            // line 399
            echo "                    \$.ajax({
                        url: 'index.php?route=checkout/payment_method',
                        dataType: 'html',
                        success: function(html) {
                          \$('#collapse-payment-method .card-body').html(html);

              \t\t\t\t\t\t\$('#collapse-payment-method').parent().find('h4').html('<a href=\"#collapse-payment-method\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
            // line 405
            echo (isset($context["text_checkout_payment_method"]) ? $context["text_checkout_payment_method"] : null);
            echo " <i class=\"fa fa-caret-down\"></i></a>');

              \t\t\t\t\t\t\$('a[href=\\'#collapse-payment-method\\']').trigger('click');

              \t\t\t\t\t\t\$('#collapse-checkout-confirm').parent().find('h4').html('";
            // line 409
            echo (isset($context["text_checkout_confirm"]) ? $context["text_checkout_confirm"] : null);
            echo "');
                        },
                        error: function(xhr, ajaxOptions, thrownError) {
                            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                        }
                    }).done(function() {
          \t\t\t\t\t\$.ajax({
          \t\t\t\t\t\turl: 'index.php?route=checkout/payment_address',
          \t\t\t\t\t\tdataType: 'html',
          \t\t\t\t\t\tsuccess: function(html) {
          \t\t\t\t\t\t\t\$('#collapse-payment-address .card-body').html(html);
          \t\t\t\t\t\t},
          \t\t\t\t\t\terror: function(xhr, ajaxOptions, thrownError) {
          \t\t\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
          \t\t\t\t\t\t}
          \t\t\t\t\t});
          \t\t\t\t});
                  ";
        }
        // line 427
        echo "                }
            },
            error: function(xhr, ajaxOptions, thrownError) {
                alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
            }
        });
    });

// Shipping Address
\$(document).delegate('#button-shipping-address', 'click', function() {
    \$.ajax({
        url: 'index.php?route=checkout/shipping_address/save',
        type: 'post',
        data: \$('#collapse-shipping-address input[type=\\'text\\'], #collapse-shipping-address input[type=\\'date\\'], #collapse-shipping-address input[type=\\'datetime-local\\'], #collapse-shipping-address input[type=\\'time\\'], #collapse-shipping-address input[type=\\'password\\'], #collapse-shipping-address input[type=\\'checkbox\\']:checked, #collapse-shipping-address input[type=\\'radio\\']:checked, #collapse-shipping-address textarea, #collapse-shipping-address select'),
        dataType: 'json',
        beforeSend: function() {
\t\t\t\$('#button-shipping-address').button('loading');
\t    },
        success: function(json) {
            \$('.alert-dismissible, .text-danger').remove();
\t\t\t\$('.form-group').removeClass('has-error');

            if (json['redirect']) {
                location = json['redirect'];
            } else if (json['error']) {
                \$('#button-shipping-address').button('reset');

                if (json['error']['warning']) {
                    \$('#collapse-shipping-address .card-body').prepend('<div class=\"alert alert-warning alert-dismissible\">' + json['error']['warning'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
                }

\t\t\t\tfor (i in json['error']) {
\t\t\t\t\tvar element = \$('#input-shipping-' + i.replace('_', '-'));

\t\t\t\t\tif (\$(element).parent().hasClass('input-group')) {
\t\t\t\t\t\t\$(element).parent().after('<div class=\"text-danger\">' + json['error'][i] + '</div>');
\t\t\t\t\t} else {
\t\t\t\t\t\t\$(element).after('<div class=\"text-danger\">' + json['error'][i] + '</div>');
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\t// Highlight any found errors
\t\t\t\t\$('.text-danger').parent().parent().addClass('has-error');
            } else {
                \$.ajax({
                    url: 'index.php?route=checkout/shipping_method',
                    dataType: 'html',
                    complete: function() {
                        \$('#button-shipping-address').button('reset');
                    },
                    success: function(html) {
                        \$('#collapse-shipping-method .card-body').html(html);

\t\t\t\t\t\t\$('#collapse-shipping-method').parent().find('h4').html('<a href=\"#collapse-shipping-method\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
        // line 480
        echo (isset($context["text_checkout_shipping_method"]) ? $context["text_checkout_shipping_method"] : null);
        echo " <i class=\"fa fa-caret-down\"></i></a>');

\t\t\t\t\t\t\$('a[href=\\'#collapse-shipping-method\\']').trigger('click');

\t\t\t\t\t\t\$('#collapse-payment-method').parent().find('h4').html('";
        // line 484
        echo (isset($context["text_checkout_payment_method"]) ? $context["text_checkout_payment_method"] : null);
        echo "');
\t\t\t\t\t\t\$('#collapse-checkout-confirm').parent().find('h4').html('";
        // line 485
        echo (isset($context["text_checkout_confirm"]) ? $context["text_checkout_confirm"] : null);
        echo "');

                        \$.ajax({
                            url: 'index.php?route=checkout/shipping_address',
                            dataType: 'html',
                            success: function(html) {
                                \$('#collapse-shipping-address .card-body').html(html);
                            },
                            error: function(xhr, ajaxOptions, thrownError) {
                                alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                            }
                        });
                    },
                    error: function(xhr, ajaxOptions, thrownError) {
                        alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                    }
                }).done(function() {
\t\t\t\t\t\$.ajax({
\t\t\t\t\t\turl: 'index.php?route=checkout/payment_address',
\t\t\t\t\t\tdataType: 'html',
\t\t\t\t\t\tsuccess: function(html) {
\t\t\t\t\t\t\t\$('#collapse-payment-address .card-body').html(html);
\t\t\t\t\t\t},
\t\t\t\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t\t\t}
\t\t\t\t\t});
\t\t\t\t});
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

// Guest
\$(document).delegate('#button-guest', 'click', function() {
    \$.ajax({
        url: 'index.php?route=checkout/guest/save',
        type: 'post',
        data: \$('#collapse-payment-address input[type=\\'text\\'], #collapse-payment-address input[type=\\'date\\'], #collapse-payment-address input[type=\\'datetime-local\\'], #collapse-payment-address input[type=\\'time\\'], #collapse-payment-address input[type=\\'checkbox\\']:checked, #collapse-payment-address input[type=\\'radio\\']:checked, #collapse-payment-address input[type=\\'hidden\\'], #collapse-payment-address textarea, #collapse-payment-address select'),
        dataType: 'json',
        beforeSend: function() {
       \t\t\$('#button-guest').button('loading');
\t    },
        success: function(json) {
            \$('.alert-dismissible, .text-danger').remove();
\t\t\t\$('.form-group').removeClass('has-error');

            if (json['redirect']) {
                location = json['redirect'];
            } else if (json['error']) {
                \$('#button-guest').button('reset');

                if (json['error']['warning']) {
                    \$('#collapse-payment-address .card-body').prepend('<div class=\"alert alert-warning alert-dismissible\">' + json['error']['warning'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
                }

\t\t\t\tfor (i in json['error']) {
\t\t\t\t\tvar element = \$('#input-payment-' + i.replace('_', '-'));

\t\t\t\t\tif (\$(element).parent().hasClass('input-group')) {
\t\t\t\t\t\t\$(element).parent().after('<div class=\"text-danger\">' + json['error'][i] + '</div>');
\t\t\t\t\t} else {
\t\t\t\t\t\t\$(element).after('<div class=\"text-danger\">' + json['error'][i] + '</div>');
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\t// Highlight any found errors
\t\t\t\t\$('.text-danger').parent().addClass('has-error');
            } else {
                ";
        // line 557
        if ((isset($context["shipping_required"]) ? $context["shipping_required"] : null)) {
            // line 558
            echo "                var shipping_address = \$('#collapse-payment-address input[name=\\'shipping_address\\']:checked').prop('value');

                if (shipping_address) {
                    \$.ajax({
                        url: 'index.php?route=checkout/shipping_method',
                        dataType: 'html',
                        complete: function() {
                            \$('#button-guest').button('reset');
                        },
                        success: function(html) {
\t\t\t\t\t\t\t// Add the shipping address
                            \$.ajax({
                                url: 'index.php?route=checkout/guest_shipping',
                                dataType: 'html',
                                success: function(html) {
                                    \$('#collapse-shipping-address .card-body').html(html);

\t\t\t\t\t\t\t\t\t\$('#collapse-shipping-address').parent().find('h4').html('<a href=\"#collapse-shipping-address\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
            // line 575
            echo (isset($context["text_checkout_shipping_address"]) ? $context["text_checkout_shipping_address"] : null);
            echo " <i class=\"fa fa-caret-down\"></i></a>');
                                },
                                error: function(xhr, ajaxOptions, thrownError) {
                                    alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                                }
                            });

\t\t\t\t\t\t    \$('#collapse-shipping-method .card-body').html(html);

\t\t\t\t\t\t\t\$('#collapse-shipping-method').parent().find('h4').html('<a href=\"#collapse-shipping-method\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
            // line 584
            echo (isset($context["text_checkout_shipping_method"]) ? $context["text_checkout_shipping_method"] : null);
            echo " <i class=\"fa fa-caret-down\"></i></a>');

\t\t\t\t\t\t\t\$('a[href=\\'#collapse-shipping-method\\']').trigger('click');

\t\t\t\t\t\t\t\$('#collapse-payment-method').parent().find('h4').html('";
            // line 588
            echo (isset($context["text_checkout_payment_method"]) ? $context["text_checkout_payment_method"] : null);
            echo "');
\t\t\t\t\t\t\t\$('#collapse-checkout-confirm').parent().find('h4').html('";
            // line 589
            echo (isset($context["text_checkout_confirm"]) ? $context["text_checkout_confirm"] : null);
            echo "');
                        },
                        error: function(xhr, ajaxOptions, thrownError) {
                            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                        }
                    });
                } else {
                    \$.ajax({
                        url: 'index.php?route=checkout/guest_shipping',
                        dataType: 'html',
                        complete: function() {
                            \$('#button-guest').button('reset');
                        },
                        success: function(html) {
                            \$('#collapse-shipping-address .card-body').html(html);

\t\t\t\t\t\t\t\$('#collapse-shipping-address').parent().find('h4').html('<a href=\"#collapse-shipping-address\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
            // line 605
            echo (isset($context["text_checkout_shipping_address"]) ? $context["text_checkout_shipping_address"] : null);
            echo " <i class=\"fa fa-caret-down\"></i></a>');

\t\t\t\t\t\t\t\$('a[href=\\'#collapse-shipping-address\\']').trigger('click');

\t\t\t\t\t\t\t\$('#collapse-shipping-method').parent().find('h4').html('";
            // line 609
            echo (isset($context["text_checkout_shipping_method"]) ? $context["text_checkout_shipping_method"] : null);
            echo "');
\t\t\t\t\t\t\t\$('#collapse-payment-method').parent().find('h4').html('";
            // line 610
            echo (isset($context["text_checkout_payment_method"]) ? $context["text_checkout_payment_method"] : null);
            echo "');
\t\t\t\t\t\t\t\$('#collapse-checkout-confirm').parent().find('h4').html('";
            // line 611
            echo (isset($context["text_checkout_confirm"]) ? $context["text_checkout_confirm"] : null);
            echo "');
                        },
                        error: function(xhr, ajaxOptions, thrownError) {
                            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                        }
                    });
                }
                ";
        } else {
            // line 619
            echo "                \$.ajax({
                    url: 'index.php?route=checkout/payment_method',
                    dataType: 'html',
                    complete: function() {
                        \$('#button-guest').button('reset');
                    },
                    success: function(html) {
                        \$('#collapse-payment-method .card-body').html(html);

\t\t\t\t\t\t\$('#collapse-payment-method').parent().find('h4').html('<a href=\"#collapse-payment-method\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
            // line 628
            echo (isset($context["text_checkout_payment_method"]) ? $context["text_checkout_payment_method"] : null);
            echo " <i class=\"fa fa-caret-down\"></i></a>');

\t\t\t\t\t\t\$('a[href=\\'#collapse-payment-method\\']').trigger('click');

\t\t\t\t\t\t\$('#collapse-checkout-confirm').parent().find('h4').html('";
            // line 632
            echo (isset($context["text_checkout_confirm"]) ? $context["text_checkout_confirm"] : null);
            echo "');
                    },
                    error: function(xhr, ajaxOptions, thrownError) {
                        alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                    }
                });
                ";
        }
        // line 639
        echo "            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

// Guest Shipping
\$(document).delegate('#button-guest-shipping', 'click', function() {
    \$.ajax({
        url: 'index.php?route=checkout/guest_shipping/save',
        type: 'post',
        data: \$('#collapse-shipping-address input[type=\\'text\\'], #collapse-shipping-address input[type=\\'date\\'], #collapse-shipping-address input[type=\\'datetime-local\\'], #collapse-shipping-address input[type=\\'time\\'], #collapse-shipping-address input[type=\\'password\\'], #collapse-shipping-address input[type=\\'checkbox\\']:checked, #collapse-shipping-address input[type=\\'radio\\']:checked, #collapse-shipping-address textarea, #collapse-shipping-address select'),
        dataType: 'json',
        beforeSend: function() {
        \t\$('#button-guest-shipping').button('loading');
\t\t},
        success: function(json) {
            \$('.alert-dismissible, .text-danger').remove();
\t\t\t\$('.form-group').removeClass('has-error');

            if (json['redirect']) {
                location = json['redirect'];
            } else if (json['error']) {
                \$('#button-guest-shipping').button('reset');

                if (json['error']['warning']) {
                    \$('#collapse-shipping-address .card-body').prepend('<div class=\"alert alert-danger alert-dismissible\">' + json['error']['warning'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
                }

\t\t\t\tfor (i in json['error']) {
\t\t\t\t\tvar element = \$('#input-shipping-' + i.replace('_', '-'));

\t\t\t\t\tif (\$(element).parent().hasClass('input-group')) {
\t\t\t\t\t\t\$(element).parent().after('<div class=\"text-danger\">' + json['error'][i] + '</div>');
\t\t\t\t\t} else {
\t\t\t\t\t\t\$(element).after('<div class=\"text-danger\">' + json['error'][i] + '</div>');
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\t// Highlight any found errors
\t\t\t\t\$('.text-danger').parent().addClass('has-error');
            } else {
                \$.ajax({
                    url: 'index.php?route=checkout/shipping_method',
                    dataType: 'html',
                    complete: function() {
                        \$('#button-guest-shipping').button('reset');
                    },
                    success: function(html) {
                        \$('#collapse-shipping-method .card-body').html(html);

\t\t\t\t\t\t\$('#collapse-shipping-method').parent().find('h4').html('<a href=\"#collapse-shipping-method\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
        // line 692
        echo (isset($context["text_checkout_shipping_method"]) ? $context["text_checkout_shipping_method"] : null);
        echo " <i class=\"fa fa-caret-down\"></i>');

\t\t\t\t\t\t\$('a[href=\\'#collapse-shipping-method\\']').trigger('click');

\t\t\t\t\t\t\$('#collapse-payment-method').parent().find('h4').html('";
        // line 696
        echo (isset($context["text_checkout_payment_method"]) ? $context["text_checkout_payment_method"] : null);
        echo "');
\t\t\t\t\t\t\$('#collapse-checkout-confirm').parent().find('h4').html('";
        // line 697
        echo (isset($context["text_checkout_confirm"]) ? $context["text_checkout_confirm"] : null);
        echo "');
                    },
                    error: function(xhr, ajaxOptions, thrownError) {
                        alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                    }
                });
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$(document).delegate('#button-shipping-method', 'click', function() {
    \$.ajax({
        url: 'index.php?route=checkout/shipping_method/save',
        type: 'post',
        data: \$('#collapse-shipping-method input[type=\\'radio\\']:checked, #collapse-shipping-method textarea'),
        dataType: 'json',
        beforeSend: function() {
        \t\$('#button-shipping-method').button('loading');
\t\t},
        success: function(json) {
            \$('.alert-dismissible, .text-danger').remove();

            if (json['redirect']) {
                location = json['redirect'];
            } else if (json['error']) {
                \$('#button-shipping-method').button('reset');

                if (json['error']['warning']) {
                    \$('#collapse-shipping-method .card-body').prepend('<div class=\"alert alert-danger alert-dismissible\">' + json['error']['warning'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
                }
            } else {
                \$.ajax({
                    url: 'index.php?route=checkout/payment_method',
                    dataType: 'html',
                    complete: function() {
                        \$('#button-shipping-method').button('reset');
                    },
                    success: function(html) {
                        \$('#collapse-payment-method .card-body').html(html);

\t\t\t\t\t\t\$('#collapse-payment-method').parent().find('h4').html('<a href=\"#collapse-payment-method\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
        // line 741
        echo (isset($context["text_checkout_payment_method"]) ? $context["text_checkout_payment_method"] : null);
        echo " <i class=\"fa fa-caret-down\"></i></a>');

\t\t\t\t\t\t\$('a[href=\\'#collapse-payment-method\\']').trigger('click');

\t\t\t\t\t\t\$('#collapse-checkout-confirm').parent().find('h4').html('";
        // line 745
        echo (isset($context["text_checkout_confirm"]) ? $context["text_checkout_confirm"] : null);
        echo "');
                    },
                    error: function(xhr, ajaxOptions, thrownError) {
                        alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                    }
                });
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$(document).delegate('#button-payment-method', 'click', function() {
    \$.ajax({
        url: 'index.php?route=checkout/payment_method/save',
        type: 'post',
        data: \$('#collapse-payment-method input[type=\\'radio\\']:checked, #collapse-payment-method input[type=\\'checkbox\\']:checked, #collapse-payment-method textarea'),
        dataType: 'json',
        beforeSend: function() {
         \t\$('#button-payment-method').button('loading');
\t\t},
        success: function(json) {
            \$('.alert-dismissible, .text-danger').remove();

            if (json['redirect']) {
                location = json['redirect'];
            } else if (json['error']) {
                \$('#button-payment-method').button('reset');

                if (json['error']['warning']) {
                    \$('#collapse-payment-method .card-body').prepend('<div class=\"alert alert-danger alert-dismissible\">' + json['error']['warning'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
                }
            } else {
                \$.ajax({
                    url: 'index.php?route=checkout/confirm',
                    dataType: 'html',
                    complete: function() {
                        \$('#button-payment-method').button('reset');
                    },
                    success: function(html) {
                        \$('#collapse-checkout-confirm .card-body').html(html);

\t\t\t\t\t\t\$('#collapse-checkout-confirm').parent().find('h4').html('<a href=\"#collapse-checkout-confirm\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
        // line 789
        echo (isset($context["text_checkout_confirm"]) ? $context["text_checkout_confirm"] : null);
        echo " <i class=\"fa fa-caret-down\"></i></a>');

\t\t\t\t\t\t\$('a[href=\\'#collapse-checkout-confirm\\']').trigger('click');
\t\t\t\t\t},
                    error: function(xhr, ajaxOptions, thrownError) {
                        alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                    }
                });
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});
//--></script>
";
        // line 805
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "default/template/checkout/checkout.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1073 => 805,  1054 => 789,  1007 => 745,  1000 => 741,  953 => 697,  949 => 696,  942 => 692,  887 => 639,  877 => 632,  870 => 628,  859 => 619,  848 => 611,  844 => 610,  840 => 609,  833 => 605,  814 => 589,  810 => 588,  803 => 584,  791 => 575,  772 => 558,  770 => 557,  695 => 485,  691 => 484,  684 => 480,  629 => 427,  608 => 409,  601 => 405,  593 => 399,  572 => 381,  568 => 380,  564 => 379,  557 => 375,  549 => 369,  547 => 368,  493 => 317,  482 => 308,  472 => 301,  468 => 300,  461 => 295,  450 => 287,  446 => 286,  442 => 285,  435 => 281,  419 => 268,  415 => 267,  411 => 266,  404 => 262,  392 => 253,  376 => 239,  374 => 238,  293 => 160,  288 => 158,  268 => 140,  256 => 131,  248 => 125,  235 => 115,  227 => 109,  225 => 108,  217 => 103,  212 => 101,  205 => 97,  200 => 95,  191 => 89,  187 => 88,  176 => 80,  165 => 72,  161 => 70,  150 => 62,  139 => 54,  135 => 52,  133 => 51,  129 => 49,  120 => 43,  117 => 42,  108 => 36,  105 => 35,  103 => 34,  92 => 26,  85 => 22,  78 => 21,  75 => 20,  72 => 19,  69 => 18,  66 => 17,  63 => 16,  60 => 15,  58 => 14,  53 => 13,  45 => 9,  43 => 8,  40 => 7,  29 => 5,  25 => 4,  19 => 1,);
    }
}
/* {{ header }}*/
/* <div id="checkout-checkout" class="container">*/
/*   <ul class="breadcrumb">*/
/*     {% for breadcrumb in breadcrumbs %}*/
/*     <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*     {% endfor %}*/
/*   </ul>*/
/*   {% if error_warning %}*/
/*   <div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> {{ error_warning }}*/
/*     <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*   </div>*/
/*   {% endif %}*/
/*   <div class="row">{{ column_left }}*/
/*     {% if column_left and column_right %}*/
/*     {% set class = 'col-sm-6' %}*/
/*     {% elseif column_left or column_right %}*/
/*     {% set class = 'col-sm-9' %}*/
/*     {% else %}*/
/*     {% set class = 'col-sm-12' %}*/
/*     {% endif %}*/
/*     <div id="content" class="{{ class }}">{{ content_top }}*/
/*       <h1>{{ heading_title }}</h1>*/
/*       <div id="accordion">*/
/*         <div class="card">*/
/*           <div class="card-header card-primary" id="heading-checkout-option">*/
/*             <h4>{{ text_checkout_option }}</h4>*/
/*           </div>*/
/*           <div id="collapse-checkout-option" class="collapse" aria-labelledby="heading-checkout-option" data-parent="#accordion">*/
/*             <div class="card-body"></div>*/
/*           </div>*/
/*         </div>*/
/* */
/*         <div class="card">*/
/*         {% if not logged and account != 'guest' %}*/
/*           <div class="card-header card-primary" id="heading-payment-address">*/
/*             <h4>{{ text_checkout_account }}</h4>*/
/*           </div>*/
/*           <div id="collapse-payment-address" class="collapse" aria-labelledby="heading-payment-address" data-parent="#accordion">*/
/*             <div class="card-body"></div>*/
/*           </div>*/
/*         {% else %}*/
/*           <div class="card-header card-primary" id="heading-payment-address">*/
/*             <h4>{{ text_checkout_account }}</h4>*/
/*           </div>*/
/*           <div id="collapse-payment-address" class="collapse show" aria-labelledby="heading-payment-address" data-parent="#accordion">*/
/*             <div class="card-body"></div>*/
/*           </div>*/
/*         {% endif %}*/
/*         </div>*/
/* */
/*         {% if shipping_required %}*/
/*         <div class="card">*/
/*           <div class="card-header card-primary" id="heading-shipping-address">*/
/*             <h4>{{ text_checkout_shipping_address }}</h4>*/
/*           </div>*/
/*           <div id="collapse-shipping-address" class="collapse" aria-labelledby="heading-shipping-address" data-parent="#accordion">*/
/*             <div class="card-body"></div>*/
/*           </div>*/
/*         </div>*/
/*         <div class="card">*/
/*           <div class="card-header card-primary" id="heading-shipping-method">*/
/*             <h4>{{ text_checkout_shipping_method }}</h4>*/
/*           </div>*/
/*           <div id="collapse-shipping-method" class="collapse" aria-labelledby="heading-shipping-method" data-parent="#accordion">*/
/*             <div class="card-body"></div>*/
/*           </div>*/
/*         </div>*/
/* */
/*         {% endif %}*/
/*         <div class="card">*/
/*           <div class="card-header card-primary" id="heading-payment-method">*/
/*             <h4>{{ text_checkout_payment_method }}</h4>*/
/*           </div>*/
/*           <div id="collapse-payment-method" class="collapse" aria-labelledby="heading-payment-method" data-parent="#accordion">*/
/*             <div class="card-body"></div>*/
/*           </div>*/
/*         </div>*/
/*         <div class="card">*/
/*           <div class="card-header card-primary" id="heading-checkout-confirm">*/
/*             <h4>{{ text_checkout_confirm }}</h4>*/
/*           </div>*/
/*           <div id="collapse-checkout-confirm" class="collapse" aria-labelledby="heading-payment-method" data-parent="#accordion">*/
/*             <div class="card-body"></div>*/
/*           </div>*/
/*         </div>*/
/* */
/*       </div>*/
/*       {{ content_bottom }}</div>*/
/*     {{ column_right }}</div>*/
/* </div>*/
/* <script type="text/javascript"><!--*/
/*     $(document).on('change', 'input[name=\'account\']', function() {*/
/*         if ($('#collapse-payment-address').parent().find('h4 > *').is('a')) {*/
/*           if (this.value == 'register') {*/
/*             $('#collapse-payment-address').parent().find('h4').html('<a href="#collapse-payment-address" data-toggle="collapse" data-parent="#accordion" class="accordion-toggle">{{ text_checkout_account }} <i class="fa fa-caret-down"></i></a>');*/
/*           } else {*/
/*             $('#collapse-payment-address').parent().find('h4').html('<a href="#collapse-payment-address" data-toggle="collapse" data-parent="#accordion" class="accordion-toggle">{{ text_checkout_payment_address }} <i class="fa fa-caret-down"></i></a>');*/
/*           }*/
/*         } else {*/
/*           if (this.value == 'register') {*/
/*             $('#collapse-payment-address').parent().find('h4').html('{{ text_checkout_account }}');*/
/*           } else {*/
/*             $('#collapse-payment-address').parent().find('h4').html('{{ text_checkout_payment_address }}');*/
/*           }*/
/*         }*/
/*     });*/
/* */
/*     {% if not logged %}*/
/*     $(document).ready(function() {*/
/*         $.ajax({*/
/*           url: 'index.php?route=checkout/login',*/
/*           dataType: 'html',*/
/*           success: function(html) {*/
/*             $('#collapse-checkout-option .card-body').html(html);*/
/*             $('#heading-checkout-option').parent().find('h4').html('<a href="#collapse-checkout-option" data-toggle="collapse" aria-expanded="true" aria-controls="collapse-checkout-option">{{ text_checkout_option }} <i class="fa fa-caret-down"></i></a>');*/
/*             $('a[href=\'#heading-checkout-option\']').trigger('click');*/
/*             $('#collapse-checkout-option').collapse();*/
/*           },*/
/*           error: function(xhr, ajaxOptions, thrownError) {*/
/*             alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*           }*/
/*         });*/
/*     });*/
/*     {% else %}*/
/*     $(document).ready(function() {*/
/*       $.ajax({*/
/*         url: 'index.php?route=checkout/payment_address',*/
/*         dataType: 'html',*/
/*         success: function(html) {*/
/*           $('#collapse-payment-address .card-body').html(html);*/
/*           $('#heading-payment-address').parent().find('h4').html('<a href="#collapse-payment-address" data-toggle="collapse" aria-expanded="true" aria-controls="collapse-payment-address">{{ text_checkout_payment_address }} <i class="fa fa-caret-down"></i></a>');*/
/*           $('a[href=\'#collapse-payment-address\']').trigger('click');*/
/*         },*/
/*         error: function(xhr, ajaxOptions, thrownError) {*/
/*           alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*         }*/
/*       });*/
/*     });*/
/*     {% endif %}*/
/* */
/*     // Checkout*/
/*     $(document).delegate('#button-account', 'click', function() {*/
/*       $.ajax({*/
/*         url: 'index.php?route=checkout/' + $('input[name=\'account\']:checked').val(),*/
/*         dataType: 'html',*/
/*         beforeSend: function() {*/
/*           $('#button-account').button('loading');*/
/*         },*/
/*         complete: function() {*/
/*            $('#button-account').button('reset');*/
/*         },*/
/*         success: function(html) {*/
/*           $('.alert-dismissible, .text-danger').remove();*/
/*           $('.form-group').removeClass('has-error');*/
/*           $('#collapse-payment-address .card-body').html(html);*/
/* */
/*           if ($('input[name=\'account\']:checked').val() == 'register') {*/
/*           	$('#heading-payment-address').parent().find('h4').html('<a href="#collapse-payment-address" data-toggle="collapse" aria-expanded="true" aria-controls="collapse-payment-address">{{ text_checkout_account }} <i class="fa fa-caret-down"></i></a>');*/
/*           } else {*/
/*           	$('#heading-payment-address').parent().find('h4').html('<a href="#collapse-payment-address" data-toggle="collapse" aria-expanded="true" aria-controls="collapse-payment-address">{{ text_checkout_payment_address }} <i class="fa fa-caret-down"></i></a>');*/
/*           }*/
/*           $('a[href=\'#collapse-payment-address\']').trigger('click');*/
/* */
/*         },*/
/*         error: function(xhr, ajaxOptions, thrownError) {*/
/*           alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*         }*/
/*       });*/
/*     });*/
/* */
/*     // Login*/
/*     $(document).delegate('#button-login', 'click', function() {*/
/*         $.ajax({*/
/*           url: 'index.php?route=checkout/login/save',*/
/*           type: 'post',*/
/*           data: $('#collapse-checkout-option :input'),*/
/*           dataType: 'json',*/
/*           beforeSend: function() {*/
/*             $('#button-login').button('loading');*/
/*           },*/
/*           complete: function() {*/
/*             $('#button-login').button('reset');*/
/*           },*/
/*           success: function(json) {*/
/*             $('.alert-dismissible, .text-danger').remove();*/
/*             $('.form-group').removeClass('has-error');*/
/*             if (json['redirect']) {*/
/*               location = json['redirect'];*/
/*             } else if (json['error']) {*/
/*               $('#collapse-checkout-option .card-body').prepend('<div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> ' + json['error']['warning'] + '<button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/*               // Highlight any found errors*/
/*               $('input[name=\'email\']').parent().addClass('has-error');*/
/*               $('input[name=\'password\']').parent().addClass('has-error');*/
/*             }*/
/*           },*/
/*           error: function(xhr, ajaxOptions, thrownError) {*/
/*             alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*           }*/
/*         });*/
/*     });*/
/* */
/*     // Register*/
/*     $(document).delegate('#button-register', 'click', function() {*/
/*         $.ajax({*/
/*             url: 'index.php?route=checkout/register/save',*/
/*             type: 'post',*/
/*             data: $('#collapse-payment-address input[type=\'text\'], #collapse-payment-address input[type=\'date\'], #collapse-payment-address input[type=\'datetime-local\'], #collapse-payment-address input[type=\'time\'], #collapse-payment-address input[type=\'password\'], #collapse-payment-address input[type=\'hidden\'], #collapse-payment-address input[type=\'checkbox\']:checked, #collapse-payment-address input[type=\'radio\']:checked, #collapse-payment-address textarea, #collapse-payment-address select'),*/
/*             dataType: 'json',*/
/*             beforeSend: function() {*/
/*         			$('#button-register').button('loading');*/
/*         		},*/
/*             success: function(json) {*/
/*                 $('.alert-dismissible, .text-danger').remove();*/
/*                 $('.form-group').removeClass('has-error');*/
/* */
/*                 if (json['redirect']) {*/
/*                     location = json['redirect'];*/
/*                 } else if (json['error']) {*/
/*                   $('#button-register').button('reset');*/
/* */
/*                   if (json['error']['warning']) {*/
/*                       $('#collapse-payment-address .card-body').prepend('<div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> ' + json['error']['warning'] + '<button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/*                   }*/
/* */
/*           				for (i in json['error']) {*/
/*           					var element = $('#input-payment-' + i.replace('_', '-'));*/
/* */
/*           					if ($(element).parent().hasClass('input-group')) {*/
/*           						$(element).parent().after('<div class="text-danger">' + json['error'][i] + '</div>');*/
/*           					} else {*/
/*           						$(element).after('<div class="text-danger">' + json['error'][i] + '</div>');*/
/*           					}*/
/*           				}*/
/* */
/*           				// Highlight any found errors*/
/*           				$('.text-danger').parent().addClass('has-error');*/
/*                 } else {*/
/*                     {% if shipping_required %}*/
/*                     var shipping_address = $('#payment-address input[name=\'shipping_address\']:checked').prop('value');*/
/* */
/*                     if (shipping_address) {*/
/*                         $.ajax({*/
/*                             url: 'index.php?route=checkout/shipping_method',*/
/*                             dataType: 'html',*/
/*                             success: function(html) {*/
/*     	                         // Add the shipping address*/
/*                               $.ajax({*/
/*                                 url: 'index.php?route=checkout/shipping_address',*/
/*                                 dataType: 'html',*/
/*                                 success: function(html) {*/
/*                                   $('#collapse-shipping-address .card-body').html(html);*/
/* */
/*                 									$('#heading-shipping-address').parent().find('h4').html('<a href="#collapse-shipping-address" data-toggle="collapse" aria-expanded="true" aria-controls="collapse-shipping-address">{{ text_checkout_shipping_address }} <i class="fa fa-caret-down"></i></a>');*/
/*                                 },*/
/*                                 error: function(xhr, ajaxOptions, thrownError) {*/
/*                                     alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*                                 }*/
/*                               });*/
/* */
/*     		                     $('#collapse-shipping-method .card-body').html(html);*/
/* */
/*                 							$('#heading-shipping-method').parent().find('h4').html('<a href="#collapse-shipping-method" data-toggle="collapse" aria-expanded="true" aria-controls="collapse-shipping-method">{{ text_checkout_shipping_method }} <i class="fa fa-caret-down"></i></a>');*/
/* */
/*                  							$('a[href=\'#collapse-shipping-method\']').trigger('click');*/
/* */
/*                 							$('#collapse-shipping-method').parent().find('h4').html('{{ text_checkout_shipping_method }}');*/
/*                 							$('#collapse-payment-method').parent().find('h4').html('{{ text_checkout_payment_method }}');*/
/*                 							$('#collapse-checkout-confirm').parent().find('h4').html('{{ text_checkout_confirm }}');*/
/*                             },*/
/*                             error: function(xhr, ajaxOptions, thrownError) {*/
/*                               alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*                             }*/
/*                         });*/
/*                     } else {*/
/*                         $.ajax({*/
/*                             url: 'index.php?route=checkout/shipping_address',*/
/*                             dataType: 'html',*/
/*                             success: function(html) {*/
/*                                 $('#collapse-shipping-address .card-body').html(html);*/
/* */
/*                   							$('#heading-shipping-address').parent().find('h4').html('<a href="#collapse-shipping-address" data-toggle="collapse" aria-expanded="true" aria-controls="collapse-shipping-address">{{ text_checkout_shipping_address }} <i class="fa fa-caret-down"></i></a>');*/
/* */
/*                   							$('a[href=\'#collapse-shipping-address\']').trigger('click');*/
/* */
/*                   							$('#heading-shipping-method').parent().find('h4').html('{{ text_checkout_shipping_method }}');*/
/*                   							$('#heading-payment-method').parent().find('h4').html('{{ text_checkout_payment_method }}');*/
/*                   							$('#heading-checkout-confirm').parent().find('h4').html('{{ text_checkout_confirm }}');*/
/*                             },*/
/*                             error: function(xhr, ajaxOptions, thrownError) {*/
/*                                 alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*                             }*/
/*                         });*/
/*                     }*/
/*                     {% else %}*/
/*                     $.ajax({*/
/*                         url: 'index.php?route=checkout/payment_method',*/
/*                         dataType: 'html',*/
/*                         success: function(html) {*/
/*                             $('#collapse-payment-method .card-body').html(html);*/
/*                 						$('#heading-payment-method').parent().find('h4').html('<a href="#collapse-payment-method" data-toggle="collapse" aria-expanded="true" aria-controls="collapse-payment-method">{{ text_checkout_payment_method }} <i class="fa fa-caret-down"></i></a>');*/
/*                 						$('#heading-checkout-confirm').parent().find('h4').html('{{ text_checkout_confirm }}');*/
/*                         },*/
/*                         error: function(xhr, ajaxOptions, thrownError) {*/
/*                             alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*                         }*/
/*                     });*/
/*                     {% endif %}*/
/* */
/*                     $.ajax({*/
/*                         url: 'index.php?route=checkout/payment_address',*/
/*                         dataType: 'html',*/
/*                         complete: function() {*/
/*                           $('#button-register').button('reset');*/
/*                         },*/
/*                         success: function(html) {*/
/*                           $('#collapse-payment-address .card-body').html(html);*/
/*               						$('#heading-payment-address').parent().find('h4').html('<a  href="#collapse-payment-address" data-toggle="collapse" aria-expanded="true" aria-controls="collapse-payment-address">{{ text_checkout_payment_address }} <i class="fa fa-caret-down"></i></a>');*/
/*                         },*/
/*                         error: function(xhr, ajaxOptions, thrownError) {*/
/*                           alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*                         }*/
/*                     });*/
/*                 }*/
/*             },*/
/*             error: function(xhr, ajaxOptions, thrownError) {*/
/*                 alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*             }*/
/*         });*/
/*     });*/
/* */
/*     // Payment Address*/
/*     $(document).delegate('#button-payment-address', 'click', function() {*/
/*         $.ajax({*/
/*             url: 'index.php?route=checkout/payment_address/save',*/
/*             type: 'post',*/
/*             data: $('#collapse-payment-address input[type=\'text\'], #collapse-payment-address input[type=\'date\'], #collapse-payment-address input[type=\'datetime-local\'], #collapse-payment-address input[type=\'time\'], #collapse-payment-address input[type=\'password\'], #collapse-payment-address input[type=\'checkbox\']:checked, #collapse-payment-address input[type=\'radio\']:checked, #collapse-payment-address input[type=\'hidden\'], #collapse-payment-address textarea, #collapse-payment-address select'),*/
/*             dataType: 'json',*/
/*             beforeSend: function() {*/
/*             	 $('#button-payment-address').button('loading');*/
/*     	      },*/
/*             complete: function() {*/
/*     		       $('#button-payment-address').button('reset');*/
/*             },*/
/*             success: function(json) {*/
/*                $('.alert-dismissible, .text-danger').remove();*/
/*                $('.form-group').removeClass('has-error');*/
/* */
/*                 if (json['redirect']) {*/
/*                     location = json['redirect'];*/
/*                 } else if (json['error']) {*/
/*                     if (json['error']['warning']) {*/
/*                         $('#collapse-payment-address .card-body').prepend('<div class="alert alert-warning alert-dismissible">' + json['error']['warning'] + '<button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/*                     }*/
/* */
/*                     for (i in json['error']) {*/
/*                     var element = $('#input-payment-' + i.replace('_', '-'));*/
/* */
/*                     if ($(element).parent().hasClass('input-group')) {*/
/*                     $(element).parent().after('<div class="text-danger">' + json['error'][i] + '</div>');*/
/*                     } else {*/
/*                     $(element).after('<div class="text-danger">' + json['error'][i] + '</div>');*/
/*                     }*/
/*                     }*/
/* */
/*                     // Highlight any found errors*/
/*                     $('.text-danger').parent().parent().addClass('has-error');*/
/*                 } else {*/
/*                     {% if shipping_required %}*/
/*                     $.ajax({*/
/*                         url: 'index.php?route=checkout/shipping_address',*/
/*                         dataType: 'html',*/
/*                         success: function(html) {*/
/*                             $('#collapse-shipping-address .card-body').html(html);*/
/* */
/*                 						$('#collapse-shipping-address').parent().find('h4').html('<a href="#collapse-shipping-address" data-toggle="collapse" data-parent="#accordion" class="accordion-toggle">{{ text_checkout_shipping_address }} <i class="fa fa-caret-down"></i></a>');*/
/* */
/*                 						$('a[href=\'#collapse-shipping-address\']').trigger('click');*/
/* */
/*                 						$('#collapse-shipping-method').parent().find('h4').html('{{ text_checkout_shipping_method }}');*/
/*                 						$('#collapse-payment-method').parent().find('h4').html('{{ text_checkout_payment_method }}');*/
/*                 						$('#collapse-checkout-confirm').parent().find('h4').html('{{ text_checkout_confirm }}');*/
/*                         },*/
/*                         error: function(xhr, ajaxOptions, thrownError) {*/
/*                             alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*                         }*/
/*                     }).done(function() {*/
/*             					$.ajax({*/
/*             						url: 'index.php?route=checkout/payment_address',*/
/*             						dataType: 'html',*/
/*             						success: function(html) {*/
/*             							$('#collapse-payment-address .card-body').html(html);*/
/*             						},*/
/*             						error: function(xhr, ajaxOptions, thrownError) {*/
/*             							alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*             						}*/
/*             					});*/
/*             				});*/
/*                     {% else %}*/
/*                     $.ajax({*/
/*                         url: 'index.php?route=checkout/payment_method',*/
/*                         dataType: 'html',*/
/*                         success: function(html) {*/
/*                           $('#collapse-payment-method .card-body').html(html);*/
/* */
/*               						$('#collapse-payment-method').parent().find('h4').html('<a href="#collapse-payment-method" data-toggle="collapse" data-parent="#accordion" class="accordion-toggle">{{ text_checkout_payment_method }} <i class="fa fa-caret-down"></i></a>');*/
/* */
/*               						$('a[href=\'#collapse-payment-method\']').trigger('click');*/
/* */
/*               						$('#collapse-checkout-confirm').parent().find('h4').html('{{ text_checkout_confirm }}');*/
/*                         },*/
/*                         error: function(xhr, ajaxOptions, thrownError) {*/
/*                             alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*                         }*/
/*                     }).done(function() {*/
/*           					$.ajax({*/
/*           						url: 'index.php?route=checkout/payment_address',*/
/*           						dataType: 'html',*/
/*           						success: function(html) {*/
/*           							$('#collapse-payment-address .card-body').html(html);*/
/*           						},*/
/*           						error: function(xhr, ajaxOptions, thrownError) {*/
/*           							alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*           						}*/
/*           					});*/
/*           				});*/
/*                   {% endif %}*/
/*                 }*/
/*             },*/
/*             error: function(xhr, ajaxOptions, thrownError) {*/
/*                 alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*             }*/
/*         });*/
/*     });*/
/* */
/* // Shipping Address*/
/* $(document).delegate('#button-shipping-address', 'click', function() {*/
/*     $.ajax({*/
/*         url: 'index.php?route=checkout/shipping_address/save',*/
/*         type: 'post',*/
/*         data: $('#collapse-shipping-address input[type=\'text\'], #collapse-shipping-address input[type=\'date\'], #collapse-shipping-address input[type=\'datetime-local\'], #collapse-shipping-address input[type=\'time\'], #collapse-shipping-address input[type=\'password\'], #collapse-shipping-address input[type=\'checkbox\']:checked, #collapse-shipping-address input[type=\'radio\']:checked, #collapse-shipping-address textarea, #collapse-shipping-address select'),*/
/*         dataType: 'json',*/
/*         beforeSend: function() {*/
/* 			$('#button-shipping-address').button('loading');*/
/* 	    },*/
/*         success: function(json) {*/
/*             $('.alert-dismissible, .text-danger').remove();*/
/* 			$('.form-group').removeClass('has-error');*/
/* */
/*             if (json['redirect']) {*/
/*                 location = json['redirect'];*/
/*             } else if (json['error']) {*/
/*                 $('#button-shipping-address').button('reset');*/
/* */
/*                 if (json['error']['warning']) {*/
/*                     $('#collapse-shipping-address .card-body').prepend('<div class="alert alert-warning alert-dismissible">' + json['error']['warning'] + '<button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/*                 }*/
/* */
/* 				for (i in json['error']) {*/
/* 					var element = $('#input-shipping-' + i.replace('_', '-'));*/
/* */
/* 					if ($(element).parent().hasClass('input-group')) {*/
/* 						$(element).parent().after('<div class="text-danger">' + json['error'][i] + '</div>');*/
/* 					} else {*/
/* 						$(element).after('<div class="text-danger">' + json['error'][i] + '</div>');*/
/* 					}*/
/* 				}*/
/* */
/* 				// Highlight any found errors*/
/* 				$('.text-danger').parent().parent().addClass('has-error');*/
/*             } else {*/
/*                 $.ajax({*/
/*                     url: 'index.php?route=checkout/shipping_method',*/
/*                     dataType: 'html',*/
/*                     complete: function() {*/
/*                         $('#button-shipping-address').button('reset');*/
/*                     },*/
/*                     success: function(html) {*/
/*                         $('#collapse-shipping-method .card-body').html(html);*/
/* */
/* 						$('#collapse-shipping-method').parent().find('h4').html('<a href="#collapse-shipping-method" data-toggle="collapse" data-parent="#accordion" class="accordion-toggle">{{ text_checkout_shipping_method }} <i class="fa fa-caret-down"></i></a>');*/
/* */
/* 						$('a[href=\'#collapse-shipping-method\']').trigger('click');*/
/* */
/* 						$('#collapse-payment-method').parent().find('h4').html('{{ text_checkout_payment_method }}');*/
/* 						$('#collapse-checkout-confirm').parent().find('h4').html('{{ text_checkout_confirm }}');*/
/* */
/*                         $.ajax({*/
/*                             url: 'index.php?route=checkout/shipping_address',*/
/*                             dataType: 'html',*/
/*                             success: function(html) {*/
/*                                 $('#collapse-shipping-address .card-body').html(html);*/
/*                             },*/
/*                             error: function(xhr, ajaxOptions, thrownError) {*/
/*                                 alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*                             }*/
/*                         });*/
/*                     },*/
/*                     error: function(xhr, ajaxOptions, thrownError) {*/
/*                         alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*                     }*/
/*                 }).done(function() {*/
/* 					$.ajax({*/
/* 						url: 'index.php?route=checkout/payment_address',*/
/* 						dataType: 'html',*/
/* 						success: function(html) {*/
/* 							$('#collapse-payment-address .card-body').html(html);*/
/* 						},*/
/* 						error: function(xhr, ajaxOptions, thrownError) {*/
/* 							alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 						}*/
/* 					});*/
/* 				});*/
/*             }*/
/*         },*/
/*         error: function(xhr, ajaxOptions, thrownError) {*/
/*             alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*         }*/
/*     });*/
/* });*/
/* */
/* // Guest*/
/* $(document).delegate('#button-guest', 'click', function() {*/
/*     $.ajax({*/
/*         url: 'index.php?route=checkout/guest/save',*/
/*         type: 'post',*/
/*         data: $('#collapse-payment-address input[type=\'text\'], #collapse-payment-address input[type=\'date\'], #collapse-payment-address input[type=\'datetime-local\'], #collapse-payment-address input[type=\'time\'], #collapse-payment-address input[type=\'checkbox\']:checked, #collapse-payment-address input[type=\'radio\']:checked, #collapse-payment-address input[type=\'hidden\'], #collapse-payment-address textarea, #collapse-payment-address select'),*/
/*         dataType: 'json',*/
/*         beforeSend: function() {*/
/*        		$('#button-guest').button('loading');*/
/* 	    },*/
/*         success: function(json) {*/
/*             $('.alert-dismissible, .text-danger').remove();*/
/* 			$('.form-group').removeClass('has-error');*/
/* */
/*             if (json['redirect']) {*/
/*                 location = json['redirect'];*/
/*             } else if (json['error']) {*/
/*                 $('#button-guest').button('reset');*/
/* */
/*                 if (json['error']['warning']) {*/
/*                     $('#collapse-payment-address .card-body').prepend('<div class="alert alert-warning alert-dismissible">' + json['error']['warning'] + '<button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/*                 }*/
/* */
/* 				for (i in json['error']) {*/
/* 					var element = $('#input-payment-' + i.replace('_', '-'));*/
/* */
/* 					if ($(element).parent().hasClass('input-group')) {*/
/* 						$(element).parent().after('<div class="text-danger">' + json['error'][i] + '</div>');*/
/* 					} else {*/
/* 						$(element).after('<div class="text-danger">' + json['error'][i] + '</div>');*/
/* 					}*/
/* 				}*/
/* */
/* 				// Highlight any found errors*/
/* 				$('.text-danger').parent().addClass('has-error');*/
/*             } else {*/
/*                 {% if shipping_required %}*/
/*                 var shipping_address = $('#collapse-payment-address input[name=\'shipping_address\']:checked').prop('value');*/
/* */
/*                 if (shipping_address) {*/
/*                     $.ajax({*/
/*                         url: 'index.php?route=checkout/shipping_method',*/
/*                         dataType: 'html',*/
/*                         complete: function() {*/
/*                             $('#button-guest').button('reset');*/
/*                         },*/
/*                         success: function(html) {*/
/* 							// Add the shipping address*/
/*                             $.ajax({*/
/*                                 url: 'index.php?route=checkout/guest_shipping',*/
/*                                 dataType: 'html',*/
/*                                 success: function(html) {*/
/*                                     $('#collapse-shipping-address .card-body').html(html);*/
/* */
/* 									$('#collapse-shipping-address').parent().find('h4').html('<a href="#collapse-shipping-address" data-toggle="collapse" data-parent="#accordion" class="accordion-toggle">{{ text_checkout_shipping_address }} <i class="fa fa-caret-down"></i></a>');*/
/*                                 },*/
/*                                 error: function(xhr, ajaxOptions, thrownError) {*/
/*                                     alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*                                 }*/
/*                             });*/
/* */
/* 						    $('#collapse-shipping-method .card-body').html(html);*/
/* */
/* 							$('#collapse-shipping-method').parent().find('h4').html('<a href="#collapse-shipping-method" data-toggle="collapse" data-parent="#accordion" class="accordion-toggle">{{ text_checkout_shipping_method }} <i class="fa fa-caret-down"></i></a>');*/
/* */
/* 							$('a[href=\'#collapse-shipping-method\']').trigger('click');*/
/* */
/* 							$('#collapse-payment-method').parent().find('h4').html('{{ text_checkout_payment_method }}');*/
/* 							$('#collapse-checkout-confirm').parent().find('h4').html('{{ text_checkout_confirm }}');*/
/*                         },*/
/*                         error: function(xhr, ajaxOptions, thrownError) {*/
/*                             alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*                         }*/
/*                     });*/
/*                 } else {*/
/*                     $.ajax({*/
/*                         url: 'index.php?route=checkout/guest_shipping',*/
/*                         dataType: 'html',*/
/*                         complete: function() {*/
/*                             $('#button-guest').button('reset');*/
/*                         },*/
/*                         success: function(html) {*/
/*                             $('#collapse-shipping-address .card-body').html(html);*/
/* */
/* 							$('#collapse-shipping-address').parent().find('h4').html('<a href="#collapse-shipping-address" data-toggle="collapse" data-parent="#accordion" class="accordion-toggle">{{ text_checkout_shipping_address }} <i class="fa fa-caret-down"></i></a>');*/
/* */
/* 							$('a[href=\'#collapse-shipping-address\']').trigger('click');*/
/* */
/* 							$('#collapse-shipping-method').parent().find('h4').html('{{ text_checkout_shipping_method }}');*/
/* 							$('#collapse-payment-method').parent().find('h4').html('{{ text_checkout_payment_method }}');*/
/* 							$('#collapse-checkout-confirm').parent().find('h4').html('{{ text_checkout_confirm }}');*/
/*                         },*/
/*                         error: function(xhr, ajaxOptions, thrownError) {*/
/*                             alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*                         }*/
/*                     });*/
/*                 }*/
/*                 {% else %}*/
/*                 $.ajax({*/
/*                     url: 'index.php?route=checkout/payment_method',*/
/*                     dataType: 'html',*/
/*                     complete: function() {*/
/*                         $('#button-guest').button('reset');*/
/*                     },*/
/*                     success: function(html) {*/
/*                         $('#collapse-payment-method .card-body').html(html);*/
/* */
/* 						$('#collapse-payment-method').parent().find('h4').html('<a href="#collapse-payment-method" data-toggle="collapse" data-parent="#accordion" class="accordion-toggle">{{ text_checkout_payment_method }} <i class="fa fa-caret-down"></i></a>');*/
/* */
/* 						$('a[href=\'#collapse-payment-method\']').trigger('click');*/
/* */
/* 						$('#collapse-checkout-confirm').parent().find('h4').html('{{ text_checkout_confirm }}');*/
/*                     },*/
/*                     error: function(xhr, ajaxOptions, thrownError) {*/
/*                         alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*                     }*/
/*                 });*/
/*                 {% endif %}*/
/*             }*/
/*         },*/
/*         error: function(xhr, ajaxOptions, thrownError) {*/
/*             alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*         }*/
/*     });*/
/* });*/
/* */
/* // Guest Shipping*/
/* $(document).delegate('#button-guest-shipping', 'click', function() {*/
/*     $.ajax({*/
/*         url: 'index.php?route=checkout/guest_shipping/save',*/
/*         type: 'post',*/
/*         data: $('#collapse-shipping-address input[type=\'text\'], #collapse-shipping-address input[type=\'date\'], #collapse-shipping-address input[type=\'datetime-local\'], #collapse-shipping-address input[type=\'time\'], #collapse-shipping-address input[type=\'password\'], #collapse-shipping-address input[type=\'checkbox\']:checked, #collapse-shipping-address input[type=\'radio\']:checked, #collapse-shipping-address textarea, #collapse-shipping-address select'),*/
/*         dataType: 'json',*/
/*         beforeSend: function() {*/
/*         	$('#button-guest-shipping').button('loading');*/
/* 		},*/
/*         success: function(json) {*/
/*             $('.alert-dismissible, .text-danger').remove();*/
/* 			$('.form-group').removeClass('has-error');*/
/* */
/*             if (json['redirect']) {*/
/*                 location = json['redirect'];*/
/*             } else if (json['error']) {*/
/*                 $('#button-guest-shipping').button('reset');*/
/* */
/*                 if (json['error']['warning']) {*/
/*                     $('#collapse-shipping-address .card-body').prepend('<div class="alert alert-danger alert-dismissible">' + json['error']['warning'] + '<button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/*                 }*/
/* */
/* 				for (i in json['error']) {*/
/* 					var element = $('#input-shipping-' + i.replace('_', '-'));*/
/* */
/* 					if ($(element).parent().hasClass('input-group')) {*/
/* 						$(element).parent().after('<div class="text-danger">' + json['error'][i] + '</div>');*/
/* 					} else {*/
/* 						$(element).after('<div class="text-danger">' + json['error'][i] + '</div>');*/
/* 					}*/
/* 				}*/
/* */
/* 				// Highlight any found errors*/
/* 				$('.text-danger').parent().addClass('has-error');*/
/*             } else {*/
/*                 $.ajax({*/
/*                     url: 'index.php?route=checkout/shipping_method',*/
/*                     dataType: 'html',*/
/*                     complete: function() {*/
/*                         $('#button-guest-shipping').button('reset');*/
/*                     },*/
/*                     success: function(html) {*/
/*                         $('#collapse-shipping-method .card-body').html(html);*/
/* */
/* 						$('#collapse-shipping-method').parent().find('h4').html('<a href="#collapse-shipping-method" data-toggle="collapse" data-parent="#accordion" class="accordion-toggle">{{ text_checkout_shipping_method }} <i class="fa fa-caret-down"></i>');*/
/* */
/* 						$('a[href=\'#collapse-shipping-method\']').trigger('click');*/
/* */
/* 						$('#collapse-payment-method').parent().find('h4').html('{{ text_checkout_payment_method }}');*/
/* 						$('#collapse-checkout-confirm').parent().find('h4').html('{{ text_checkout_confirm }}');*/
/*                     },*/
/*                     error: function(xhr, ajaxOptions, thrownError) {*/
/*                         alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*                     }*/
/*                 });*/
/*             }*/
/*         },*/
/*         error: function(xhr, ajaxOptions, thrownError) {*/
/*             alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*         }*/
/*     });*/
/* });*/
/* */
/* $(document).delegate('#button-shipping-method', 'click', function() {*/
/*     $.ajax({*/
/*         url: 'index.php?route=checkout/shipping_method/save',*/
/*         type: 'post',*/
/*         data: $('#collapse-shipping-method input[type=\'radio\']:checked, #collapse-shipping-method textarea'),*/
/*         dataType: 'json',*/
/*         beforeSend: function() {*/
/*         	$('#button-shipping-method').button('loading');*/
/* 		},*/
/*         success: function(json) {*/
/*             $('.alert-dismissible, .text-danger').remove();*/
/* */
/*             if (json['redirect']) {*/
/*                 location = json['redirect'];*/
/*             } else if (json['error']) {*/
/*                 $('#button-shipping-method').button('reset');*/
/* */
/*                 if (json['error']['warning']) {*/
/*                     $('#collapse-shipping-method .card-body').prepend('<div class="alert alert-danger alert-dismissible">' + json['error']['warning'] + '<button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/*                 }*/
/*             } else {*/
/*                 $.ajax({*/
/*                     url: 'index.php?route=checkout/payment_method',*/
/*                     dataType: 'html',*/
/*                     complete: function() {*/
/*                         $('#button-shipping-method').button('reset');*/
/*                     },*/
/*                     success: function(html) {*/
/*                         $('#collapse-payment-method .card-body').html(html);*/
/* */
/* 						$('#collapse-payment-method').parent().find('h4').html('<a href="#collapse-payment-method" data-toggle="collapse" data-parent="#accordion" class="accordion-toggle">{{ text_checkout_payment_method }} <i class="fa fa-caret-down"></i></a>');*/
/* */
/* 						$('a[href=\'#collapse-payment-method\']').trigger('click');*/
/* */
/* 						$('#collapse-checkout-confirm').parent().find('h4').html('{{ text_checkout_confirm }}');*/
/*                     },*/
/*                     error: function(xhr, ajaxOptions, thrownError) {*/
/*                         alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*                     }*/
/*                 });*/
/*             }*/
/*         },*/
/*         error: function(xhr, ajaxOptions, thrownError) {*/
/*             alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*         }*/
/*     });*/
/* });*/
/* */
/* $(document).delegate('#button-payment-method', 'click', function() {*/
/*     $.ajax({*/
/*         url: 'index.php?route=checkout/payment_method/save',*/
/*         type: 'post',*/
/*         data: $('#collapse-payment-method input[type=\'radio\']:checked, #collapse-payment-method input[type=\'checkbox\']:checked, #collapse-payment-method textarea'),*/
/*         dataType: 'json',*/
/*         beforeSend: function() {*/
/*          	$('#button-payment-method').button('loading');*/
/* 		},*/
/*         success: function(json) {*/
/*             $('.alert-dismissible, .text-danger').remove();*/
/* */
/*             if (json['redirect']) {*/
/*                 location = json['redirect'];*/
/*             } else if (json['error']) {*/
/*                 $('#button-payment-method').button('reset');*/
/* */
/*                 if (json['error']['warning']) {*/
/*                     $('#collapse-payment-method .card-body').prepend('<div class="alert alert-danger alert-dismissible">' + json['error']['warning'] + '<button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/*                 }*/
/*             } else {*/
/*                 $.ajax({*/
/*                     url: 'index.php?route=checkout/confirm',*/
/*                     dataType: 'html',*/
/*                     complete: function() {*/
/*                         $('#button-payment-method').button('reset');*/
/*                     },*/
/*                     success: function(html) {*/
/*                         $('#collapse-checkout-confirm .card-body').html(html);*/
/* */
/* 						$('#collapse-checkout-confirm').parent().find('h4').html('<a href="#collapse-checkout-confirm" data-toggle="collapse" data-parent="#accordion" class="accordion-toggle">{{ text_checkout_confirm }} <i class="fa fa-caret-down"></i></a>');*/
/* */
/* 						$('a[href=\'#collapse-checkout-confirm\']').trigger('click');*/
/* 					},*/
/*                     error: function(xhr, ajaxOptions, thrownError) {*/
/*                         alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*                     }*/
/*                 });*/
/*             }*/
/*         },*/
/*         error: function(xhr, ajaxOptions, thrownError) {*/
/*             alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*         }*/
/*     });*/
/* });*/
/* //--></script>*/
/* {{ footer }}*/
/* */
