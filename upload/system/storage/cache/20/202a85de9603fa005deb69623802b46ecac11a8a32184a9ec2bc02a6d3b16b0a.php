<?php

/* extension/dashboard/activity_info.twig */
class __TwigTemplate_5005f4407d87d073b86736efe1d11fc001d09b698f70df42f7eafff634e44e3f extends Twig_Template
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
        echo "<div class=\"card mb-3\">
  <div class=\"card-header\"><i class=\"fa fa-calendar\"></i> ";
        // line 2
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</div>
  <ul class=\"list-group\">
    ";
        // line 4
        if ((isset($context["activities"]) ? $context["activities"] : null)) {
            // line 5
            echo "      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["activities"]) ? $context["activities"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["activity"]) {
                // line 6
                echo "        <li class=\"list-group-item\">";
                echo $this->getAttribute($context["activity"], "comment", array());
                echo "
          <br/>
          <small class=\"text-muted\"><i class=\"fa fa-clock-o\"></i> ";
                // line 8
                echo $this->getAttribute($context["activity"], "date_added", array());
                echo "</small>
        </li>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['activity'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 11
            echo "    ";
        } else {
            // line 12
            echo "      <li class=\"list-group-item text-center\">";
            echo (isset($context["text_no_results"]) ? $context["text_no_results"] : null);
            echo "</li>
    ";
        }
        // line 14
        echo "  </ul>
</div>
";
    }

    public function getTemplateName()
    {
        return "extension/dashboard/activity_info.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 14,  52 => 12,  49 => 11,  40 => 8,  34 => 6,  29 => 5,  27 => 4,  22 => 2,  19 => 1,);
    }
}
/* <div class="card mb-3">*/
/*   <div class="card-header"><i class="fa fa-calendar"></i> {{ heading_title }}</div>*/
/*   <ul class="list-group">*/
/*     {% if activities %}*/
/*       {% for activity in activities %}*/
/*         <li class="list-group-item">{{ activity.comment }}*/
/*           <br/>*/
/*           <small class="text-muted"><i class="fa fa-clock-o"></i> {{ activity.date_added }}</small>*/
/*         </li>*/
/*       {% endfor %}*/
/*     {% else %}*/
/*       <li class="list-group-item text-center">{{ text_no_results }}</li>*/
/*     {% endif %}*/
/*   </ul>*/
/* </div>*/
/* */
