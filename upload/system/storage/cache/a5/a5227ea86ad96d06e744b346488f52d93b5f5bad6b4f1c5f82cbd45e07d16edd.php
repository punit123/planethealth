<?php

/* report/report.twig */
class __TwigTemplate_771dc5f7cb31b3f003d07531b3a068d55f74bf6124da6a6b224245f95a8c2ab2 extends Twig_Template
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
        echo (isset($context["button_filter"]) ? $context["button_filter"] : null);
        echo "\" onclick=\"\$('#filter-report').toggleClass('d-none');\" class=\"btn btn-light d-md-none d-lg-none\"><i class=\"fa fa-filter\"></i></button>
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
    <div class=\"card mb-3\">
      <div class=\"card-header\"><i class=\"fa fa-bar-chart\"></i>";
        // line 20
        echo (isset($context["text_type"]) ? $context["text_type"] : null);
        echo "</div>
      <div class=\"card-body\">
        <div class=\"card\">
          <div class=\"card-body bg-light\">
            <div class=\"input-group\">
              <select name=\"report\" onchange=\"location = this.value;\" class=\"form-control\">
                ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reports"]) ? $context["reports"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["report"]) {
            // line 27
            echo "                  ";
            if (((isset($context["code"]) ? $context["code"] : null) == $this->getAttribute($context["report"], "code", array()))) {
                // line 28
                echo "                    <option value=\"";
                echo $this->getAttribute($context["report"], "href", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["report"], "text", array());
                echo "</option>
                  ";
            } else {
                // line 30
                echo "                    <option value=\"";
                echo $this->getAttribute($context["report"], "href", array());
                echo "\">";
                echo $this->getAttribute($context["report"], "text", array());
                echo "</option>
                  ";
            }
            // line 32
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['report'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "              </select>
              <div class=\"input-group-append\"><span class=\"input-group-text\"><i class=\"fa fa-filter\"></i>&nbsp;";
        // line 34
        echo (isset($context["text_filter"]) ? $context["text_filter"] : null);
        echo "</span></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div>";
        // line 40
        echo (isset($context["report"]) ? $context["report"] : null);
        echo "</div>
  </div>
</div>
";
        // line 43
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "report/report.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 43,  112 => 40,  103 => 34,  100 => 33,  94 => 32,  86 => 30,  78 => 28,  75 => 27,  71 => 26,  62 => 20,  54 => 14,  43 => 12,  39 => 11,  33 => 8,  28 => 6,  19 => 1,);
    }
}
/* {{ header }}{{ column_left }}*/
/* <div id="content">*/
/*   <div class="page-header">*/
/*     <div class="container-fluid">*/
/*       <div class="pull-right">*/
/*         <button type="button" data-toggle="tooltip" title="{{ button_filter }}" onclick="$('#filter-report').toggleClass('d-none');" class="btn btn-light d-md-none d-lg-none"><i class="fa fa-filter"></i></button>*/
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
/*     <div class="card mb-3">*/
/*       <div class="card-header"><i class="fa fa-bar-chart"></i>{{ text_type }}</div>*/
/*       <div class="card-body">*/
/*         <div class="card">*/
/*           <div class="card-body bg-light">*/
/*             <div class="input-group">*/
/*               <select name="report" onchange="location = this.value;" class="form-control">*/
/*                 {% for report in reports %}*/
/*                   {% if code == report.code %}*/
/*                     <option value="{{ report.href }}" selected="selected">{{ report.text }}</option>*/
/*                   {% else %}*/
/*                     <option value="{{ report.href }}">{{ report.text }}</option>*/
/*                   {% endif %}*/
/*                 {% endfor %}*/
/*               </select>*/
/*               <div class="input-group-append"><span class="input-group-text"><i class="fa fa-filter"></i>&nbsp;{{ text_filter }}</span></div>*/
/*             </div>*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*     <div>{{ report }}</div>*/
/*   </div>*/
/* </div>*/
/* {{ footer }}*/
/* */
