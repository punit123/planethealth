<?php

/* marketplace/marketplace_list.twig */
class __TwigTemplate_9ae66b16b7491ed5146a5989e3ba1d27eaa71fcc49622a2f5e327fa5c87429db extends Twig_Template
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
      <div class=\"pull-right\">";
        // line 5
        if ( !(isset($context["error_signature"]) ? $context["error_signature"] : null)) {
            // line 6
            echo "          <button type=\"button\" id=\"button-opencart\" data-toggle=\"tooltip\" title=\"";
            echo (isset($context["button_opencart"]) ? $context["button_opencart"] : null);
            echo "\" class=\"btn btn-info\"><i class=\"fa fa-cog\"></i></button>
        ";
        } else {
            // line 8
            echo "          <button type=\"button\" id=\"button-opencart\" data-toggle=\"tooltip\" title=\"";
            echo (isset($context["error_signature"]) ? $context["error_signature"] : null);
            echo "\" data-placement=\"left\" class=\"btn btn-danger\"><i class=\"fa fa-exclamation-triangle\"></i></button>
        ";
        }
        // line 9
        echo "</div>
      <h1>";
        // line 10
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
      <nav aria-label=\"breadcrumb\">
        <ol class=\"breadcrumb\">
          ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 14
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
        // line 16
        echo "        </ol>
      </nav>
    </div>
  </div>
  <div class=\"container-fluid\">
    <div class=\"card\">
      <div class=\"card-header\"><i class=\"fa fa-puzzle-piece\"></i> ";
        // line 22
        echo (isset($context["text_list"]) ? $context["text_list"] : null);
        echo "</div>
      <div class=\"card-body\">
        <div class=\"card bg-light\">
          <div class=\"card-body\">
            <div id=\"extension-filter\" class=\"input-group\">
              <input type=\"text\" name=\"filter_search\" value=\"";
        // line 27
        echo (isset($context["filter_search"]) ? $context["filter_search"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["text_search"]) ? $context["text_search"] : null);
        echo "\" class=\"form-control\"/>
              <div class=\"input-group-append dropdown\">
                ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 30
            echo "                  ";
            if (($this->getAttribute($context["category"], "value", array()) == (isset($context["filter_category"]) ? $context["filter_category"] : null))) {
                // line 31
                echo "                    <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle dropdown-toggle-split\" data-toggle=\"dropdown\">";
                echo (isset($context["text_category"]) ? $context["text_category"] : null);
                echo " (";
                echo $this->getAttribute($context["category"], "text", array());
                echo ") <span class=\"caret\"></span></button>
                  ";
            }
            // line 33
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "                <div class=\"dropdown-menu dropdown-menu-right\">
                  ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 36
            echo "                    <a href=\"";
            echo $this->getAttribute($context["category"], "href", array());
            echo "\" class=\"dropdown-item\">";
            echo $this->getAttribute($context["category"], "text", array());
            echo "</a>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "                </div>
              </div>
              <div class=\"input-group-append\">
                <button type=\"button\" id=\"button-filter\" class=\"btn btn-primary\"><i class=\"fa fa-filter\"></i></button>
              </div>
            </div>
            <input type=\"hidden\" name=\"filter_category_id\" value=\"";
        // line 44
        echo (isset($context["filter_category_id"]) ? $context["filter_category_id"] : null);
        echo "\" class=\"form-control\"/> <input type=\"hidden\" name=\"filter_download_id\" value=\"";
        echo (isset($context["filter_download_id"]) ? $context["filter_download_id"] : null);
        echo "\" class=\"form-control\"/> <input type=\"hidden\" name=\"filter_rating\" value=\"";
        echo (isset($context["filter_rating"]) ? $context["filter_rating"] : null);
        echo "\" class=\"form-control\"/> <input type=\"hidden\" name=\"filter_license\" value=\"";
        echo (isset($context["filter_license"]) ? $context["filter_license"] : null);
        echo "\" class=\"form-control\"/> <input type=\"hidden\" name=\"filter_partner\" value=\"";
        echo (isset($context["filter_partner"]) ? $context["filter_partner"] : null);
        echo "\" class=\"form-control\"/> <input type=\"hidden\" name=\"sort\" value=\"";
        echo (isset($context["sort"]) ? $context["sort"] : null);
        echo "\" class=\"form-control\"/>
          </div>
        </div>
        <br>
        <div class=\"row mb-4\">
          <div class=\"col-sm-9 col-xs-7\">
            <div class=\"btn-group\">";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["licenses"]) ? $context["licenses"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["license"]) {
            // line 51
            echo "                ";
            if (($this->getAttribute($context["license"], "value", array()) == (isset($context["filter_license"]) ? $context["filter_license"] : null))) {
                echo "<a href=\"";
                echo $this->getAttribute($context["license"], "href", array());
                echo "\" class=\"btn btn-light active\">";
                echo $this->getAttribute($context["license"], "text", array());
                echo "</a>";
            } else {
                echo "<a href=\"";
                echo $this->getAttribute($context["license"], "href", array());
                echo "\" class=\"btn btn-light\">";
                echo $this->getAttribute($context["license"], "text", array());
                echo "</a>";
            }
            // line 52
            echo "              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['license'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "</div>
          </div>
          <div class=\"col-sm-3 col-xs-5\">
            <div class=\"input-group pull-right\">
              <div class=\"input-group-prepend\"><span class=\"input-group-text\"><i class=\"fa fa-sort-amount-asc\"></i></span></div>
              <select onchange=\"location = this.value;\" class=\"form-control\">
                ";
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["sorts"]);
        foreach ($context['_seq'] as $context["_key"] => $context["sorts"]) {
            // line 59
            echo "                  ";
            if (($this->getAttribute($context["sorts"], "value", array()) == (isset($context["sort"]) ? $context["sort"] : null))) {
                // line 60
                echo "                    <option value=\"";
                echo $this->getAttribute($context["sorts"], "href", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["sorts"], "text", array());
                echo "</option>
                  ";
            } else {
                // line 62
                echo "                    <option value=\"";
                echo $this->getAttribute($context["sorts"], "href", array());
                echo "\">";
                echo $this->getAttribute($context["sorts"], "text", array());
                echo "</option>
                  ";
            }
            // line 64
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sorts'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "              </select>
            </div>
          </div>
        </div>
        <div id=\"extension-list\">
          ";
        // line 70
        if ((isset($context["promotions"]) ? $context["promotions"] : null)) {
            // line 71
            echo "            <h3>Featured</h3>
            <div class=\"row\">
              ";
            // line 73
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["promotions"]) ? $context["promotions"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
                // line 74
                echo "                ";
                if ($context["extension"]) {
                    // line 75
                    echo "                  <div class=\"col-lg-3 col-md-4 col-sm-6 col-12\">
                    <section>
                      <div class=\"extension-preview text-center\"><a href=\"";
                    // line 77
                    echo $this->getAttribute($context["extension"], "href", array());
                    echo "\">
                          <div class=\"extension-description\"></div>
                          <img src=\"";
                    // line 79
                    echo $this->getAttribute($context["extension"], "image", array());
                    echo "\" alt=\"";
                    echo $this->getAttribute($context["extension"], "name", array());
                    echo "\" title=\"";
                    echo $this->getAttribute($context["extension"], "name", array());
                    echo "\" class=\"img-responsive\"/></a></div>
                      <div class=\"extension-name\">
                        <h4><a href=\"";
                    // line 81
                    echo $this->getAttribute($context["extension"], "href", array());
                    echo "\">";
                    echo $this->getAttribute($context["extension"], "name", array());
                    echo "</a></h4>
                        ";
                    // line 82
                    echo $this->getAttribute($context["extension"], "price", array());
                    echo "</div>
                      <div class=\"extension-rate\">
                        <div class=\"row\">
                          <div class=\"col-xs-6\">";
                    // line 85
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 86
                        echo "                              ";
                        if (($this->getAttribute($context["extension"], "rating", array()) >= $context["i"])) {
                            echo "<i class=\"fa fa-star\"></i>";
                        } else {
                            echo "<i class=\"fa fa-star-o\"></i>";
                        }
                        // line 87
                        echo "                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    echo "</div>
                          <div class=\"col-xs-6\">
                            <div class=\"text-right\">";
                    // line 89
                    echo $this->getAttribute($context["extension"], "rating_total", array());
                    echo " ";
                    echo (isset($context["text_reviews"]) ? $context["text_reviews"] : null);
                    echo "</div>
                          </div>
                        </div>
                      </div>
                    </section>
                  </div>
                ";
                }
                // line 96
                echo "              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 97
            echo "            </div>
            <hr/>
          ";
        }
        // line 100
        echo "          ";
        if ((isset($context["extensions"]) ? $context["extensions"] : null)) {
            // line 101
            echo "            <div class=\"row\">
              ";
            // line 102
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["extensions"]) ? $context["extensions"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
                // line 103
                echo "                ";
                if ($context["extension"]) {
                    // line 104
                    echo "                  <div class=\"col-lg-3 col-md-4 col-sm-6 col-12\">
                    <section>
                      <div class=\"extension-preview text-center\"><a href=\"";
                    // line 106
                    echo $this->getAttribute($context["extension"], "href", array());
                    echo "\">
                          <div class=\"extension-description\"></div>
                          <img src=\"";
                    // line 108
                    echo $this->getAttribute($context["extension"], "image", array());
                    echo "\" alt=\"";
                    echo $this->getAttribute($context["extension"], "name", array());
                    echo "\" title=\"";
                    echo $this->getAttribute($context["extension"], "name", array());
                    echo "\" class=\"img-fluid\"/></a></div>
                      <div class=\"extension-name\">
                        <h4><a href=\"";
                    // line 110
                    echo $this->getAttribute($context["extension"], "href", array());
                    echo "\">";
                    echo $this->getAttribute($context["extension"], "name", array());
                    echo "</a></h4>
                        ";
                    // line 111
                    echo $this->getAttribute($context["extension"], "price", array());
                    echo "</div>
                      <div class=\"extension-rate\">
                        <div class=\"row\">
                          <div class=\"col-6\">";
                    // line 114
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 115
                        echo "                              ";
                        if (($this->getAttribute($context["extension"], "rating", array()) >= $context["i"])) {
                            echo "<i class=\"fa fa-star\"></i>";
                        } else {
                            echo "<i class=\"fa fa-star-o\"></i>";
                        }
                        // line 116
                        echo "                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    echo "</div>
                          <div class=\"col-6\">
                            <div class=\"text-right\">";
                    // line 118
                    echo $this->getAttribute($context["extension"], "rating_total", array());
                    echo " ";
                    echo (isset($context["text_reviews"]) ? $context["text_reviews"] : null);
                    echo "</div>
                          </div>
                        </div>
                      </div>
                    </section>
                  </div>
                ";
                }
                // line 125
                echo "              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "</div>
          ";
        } else {
            // line 127
            echo "            <p class=\"text-center\">";
            echo (isset($context["text_no_results"]) ? $context["text_no_results"] : null);
            echo "</p>
          ";
        }
        // line 129
        echo "        </div>
        <div class=\"row\">
          <div class=\"col-sm-12 text-center\">";
        // line 131
        echo (isset($context["pagination"]) ? $context["pagination"] : null);
        echo "</div>
        </div>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('#button-opencart').on('click', function(e) {
\t\$('#modal-opencart').remove();

\t\$.ajax({
\t\turl: 'index.php?route=marketplace/api&user_token=";
        // line 142
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "',
\t\tdataType: 'html',
\t\tbeforeSend: function() {
\t\t\t\$('#button-opencart').button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#button-opencart').button('reset');
\t\t},
\t\tsuccess: function(html) {
\t\t\t\$('body').append(html);

\t\t\t\$('#modal-opencart').modal('show');
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});
//--></script>
<script type=\"text/javascript\"><!--
\$('#button-filter').on('click', function(e) {
\tvar url = 'index.php?route=marketplace/marketplace&user_token=";
        // line 163
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "';

\tvar input = \$('#extension-filter :input');

\tfor (i = 0; i < input.length; i++) {
\t\tif (\$(input[i]).val() != '' && \$(input[i]).val() != null) {
\t\t\turl += '&' + \$(input[i]).attr('name') + '=' + \$(input[i]).val()
\t\t}
\t}

\tlocation = url;
});

\$('input[name=\"filter_search\"]').keydown(function(e) {
\tif (e.keyCode == 13) {
\t\te.preventDefault();

\t\t\$('#button-filter').trigger('click');
\t}
});
//--></script>
";
        // line 184
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "marketplace/marketplace_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  464 => 184,  440 => 163,  416 => 142,  402 => 131,  398 => 129,  392 => 127,  383 => 125,  371 => 118,  362 => 116,  355 => 115,  351 => 114,  345 => 111,  339 => 110,  330 => 108,  325 => 106,  321 => 104,  318 => 103,  314 => 102,  311 => 101,  308 => 100,  303 => 97,  297 => 96,  285 => 89,  276 => 87,  269 => 86,  265 => 85,  259 => 82,  253 => 81,  244 => 79,  239 => 77,  235 => 75,  232 => 74,  228 => 73,  224 => 71,  222 => 70,  215 => 65,  209 => 64,  201 => 62,  193 => 60,  190 => 59,  186 => 58,  173 => 52,  158 => 51,  154 => 50,  135 => 44,  127 => 38,  116 => 36,  112 => 35,  109 => 34,  103 => 33,  95 => 31,  92 => 30,  88 => 29,  81 => 27,  73 => 22,  65 => 16,  54 => 14,  50 => 13,  44 => 10,  41 => 9,  35 => 8,  29 => 6,  27 => 5,  19 => 1,);
    }
}
/* {{ header }}{{ column_left }}*/
/* <div id="content">*/
/*   <div class="page-header">*/
/*     <div class="container-fluid">*/
/*       <div class="pull-right">{% if not error_signature %}*/
/*           <button type="button" id="button-opencart" data-toggle="tooltip" title="{{ button_opencart }}" class="btn btn-info"><i class="fa fa-cog"></i></button>*/
/*         {% else %}*/
/*           <button type="button" id="button-opencart" data-toggle="tooltip" title="{{ error_signature }}" data-placement="left" class="btn btn-danger"><i class="fa fa-exclamation-triangle"></i></button>*/
/*         {% endif %}</div>*/
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
/*         <div class="card bg-light">*/
/*           <div class="card-body">*/
/*             <div id="extension-filter" class="input-group">*/
/*               <input type="text" name="filter_search" value="{{ filter_search }}" placeholder="{{ text_search }}" class="form-control"/>*/
/*               <div class="input-group-append dropdown">*/
/*                 {% for category in categories %}*/
/*                   {% if category.value == filter_category %}*/
/*                     <button type="button" class="btn btn-outline-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown">{{ text_category }} ({{ category.text }}) <span class="caret"></span></button>*/
/*                   {% endif %}*/
/*                 {% endfor %}*/
/*                 <div class="dropdown-menu dropdown-menu-right">*/
/*                   {% for category in categories %}*/
/*                     <a href="{{ category.href }}" class="dropdown-item">{{ category.text }}</a>*/
/*                   {% endfor %}*/
/*                 </div>*/
/*               </div>*/
/*               <div class="input-group-append">*/
/*                 <button type="button" id="button-filter" class="btn btn-primary"><i class="fa fa-filter"></i></button>*/
/*               </div>*/
/*             </div>*/
/*             <input type="hidden" name="filter_category_id" value="{{ filter_category_id }}" class="form-control"/> <input type="hidden" name="filter_download_id" value="{{ filter_download_id }}" class="form-control"/> <input type="hidden" name="filter_rating" value="{{ filter_rating }}" class="form-control"/> <input type="hidden" name="filter_license" value="{{ filter_license }}" class="form-control"/> <input type="hidden" name="filter_partner" value="{{ filter_partner }}" class="form-control"/> <input type="hidden" name="sort" value="{{ sort }}" class="form-control"/>*/
/*           </div>*/
/*         </div>*/
/*         <br>*/
/*         <div class="row mb-4">*/
/*           <div class="col-sm-9 col-xs-7">*/
/*             <div class="btn-group">{% for license in licenses %}*/
/*                 {% if license.value == filter_license %}<a href="{{ license.href }}" class="btn btn-light active">{{ license.text }}</a>{% else %}<a href="{{ license.href }}" class="btn btn-light">{{ license.text }}</a>{% endif %}*/
/*               {% endfor %}</div>*/
/*           </div>*/
/*           <div class="col-sm-3 col-xs-5">*/
/*             <div class="input-group pull-right">*/
/*               <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-sort-amount-asc"></i></span></div>*/
/*               <select onchange="location = this.value;" class="form-control">*/
/*                 {% for sorts in sorts %}*/
/*                   {% if sorts.value == sort %}*/
/*                     <option value="{{ sorts.href }}" selected="selected">{{ sorts.text }}</option>*/
/*                   {% else %}*/
/*                     <option value="{{ sorts.href }}">{{ sorts.text }}</option>*/
/*                   {% endif %}*/
/*                 {% endfor %}*/
/*               </select>*/
/*             </div>*/
/*           </div>*/
/*         </div>*/
/*         <div id="extension-list">*/
/*           {% if promotions %}*/
/*             <h3>Featured</h3>*/
/*             <div class="row">*/
/*               {% for extension in promotions %}*/
/*                 {% if extension %}*/
/*                   <div class="col-lg-3 col-md-4 col-sm-6 col-12">*/
/*                     <section>*/
/*                       <div class="extension-preview text-center"><a href="{{ extension.href }}">*/
/*                           <div class="extension-description"></div>*/
/*                           <img src="{{ extension.image }}" alt="{{ extension.name }}" title="{{ extension.name }}" class="img-responsive"/></a></div>*/
/*                       <div class="extension-name">*/
/*                         <h4><a href="{{ extension.href }}">{{ extension.name }}</a></h4>*/
/*                         {{ extension.price }}</div>*/
/*                       <div class="extension-rate">*/
/*                         <div class="row">*/
/*                           <div class="col-xs-6">{% for i in 1..5 %}*/
/*                               {% if extension.rating >= i %}<i class="fa fa-star"></i>{% else %}<i class="fa fa-star-o"></i>{% endif %}*/
/*                             {% endfor %}</div>*/
/*                           <div class="col-xs-6">*/
/*                             <div class="text-right">{{ extension.rating_total }} {{ text_reviews }}</div>*/
/*                           </div>*/
/*                         </div>*/
/*                       </div>*/
/*                     </section>*/
/*                   </div>*/
/*                 {% endif %}*/
/*               {% endfor %}*/
/*             </div>*/
/*             <hr/>*/
/*           {% endif %}*/
/*           {% if extensions %}*/
/*             <div class="row">*/
/*               {% for extension in extensions %}*/
/*                 {% if extension %}*/
/*                   <div class="col-lg-3 col-md-4 col-sm-6 col-12">*/
/*                     <section>*/
/*                       <div class="extension-preview text-center"><a href="{{ extension.href }}">*/
/*                           <div class="extension-description"></div>*/
/*                           <img src="{{ extension.image }}" alt="{{ extension.name }}" title="{{ extension.name }}" class="img-fluid"/></a></div>*/
/*                       <div class="extension-name">*/
/*                         <h4><a href="{{ extension.href }}">{{ extension.name }}</a></h4>*/
/*                         {{ extension.price }}</div>*/
/*                       <div class="extension-rate">*/
/*                         <div class="row">*/
/*                           <div class="col-6">{% for i in 1..5 %}*/
/*                               {% if extension.rating >= i %}<i class="fa fa-star"></i>{% else %}<i class="fa fa-star-o"></i>{% endif %}*/
/*                             {% endfor %}</div>*/
/*                           <div class="col-6">*/
/*                             <div class="text-right">{{ extension.rating_total }} {{ text_reviews }}</div>*/
/*                           </div>*/
/*                         </div>*/
/*                       </div>*/
/*                     </section>*/
/*                   </div>*/
/*                 {% endif %}*/
/*               {% endfor %}</div>*/
/*           {% else %}*/
/*             <p class="text-center">{{ text_no_results }}</p>*/
/*           {% endif %}*/
/*         </div>*/
/*         <div class="row">*/
/*           <div class="col-sm-12 text-center">{{ pagination }}</div>*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* <script type="text/javascript"><!--*/
/* $('#button-opencart').on('click', function(e) {*/
/* 	$('#modal-opencart').remove();*/
/* */
/* 	$.ajax({*/
/* 		url: 'index.php?route=marketplace/api&user_token={{ user_token }}',*/
/* 		dataType: 'html',*/
/* 		beforeSend: function() {*/
/* 			$('#button-opencart').button('loading');*/
/* 		},*/
/* 		complete: function() {*/
/* 			$('#button-opencart').button('reset');*/
/* 		},*/
/* 		success: function(html) {*/
/* 			$('body').append(html);*/
/* */
/* 			$('#modal-opencart').modal('show');*/
/* 		},*/
/* 		error: function(xhr, ajaxOptions, thrownError) {*/
/* 			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 		}*/
/* 	});*/
/* });*/
/* //--></script>*/
/* <script type="text/javascript"><!--*/
/* $('#button-filter').on('click', function(e) {*/
/* 	var url = 'index.php?route=marketplace/marketplace&user_token={{ user_token }}';*/
/* */
/* 	var input = $('#extension-filter :input');*/
/* */
/* 	for (i = 0; i < input.length; i++) {*/
/* 		if ($(input[i]).val() != '' && $(input[i]).val() != null) {*/
/* 			url += '&' + $(input[i]).attr('name') + '=' + $(input[i]).val()*/
/* 		}*/
/* 	}*/
/* */
/* 	location = url;*/
/* });*/
/* */
/* $('input[name="filter_search"]').keydown(function(e) {*/
/* 	if (e.keyCode == 13) {*/
/* 		e.preventDefault();*/
/* */
/* 		$('#button-filter').trigger('click');*/
/* 	}*/
/* });*/
/* //--></script>*/
/* {{ footer }}*/
/* */
