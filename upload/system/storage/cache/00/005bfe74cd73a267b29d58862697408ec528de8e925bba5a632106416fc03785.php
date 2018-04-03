<?php

/* extension/dashboard/recent_info.twig */
class __TwigTemplate_dd5020090c5dc89e1d67c2d9cea5bb627cd08dddb583a132cb9772a8ec026e9b extends Twig_Template
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
  <div class=\"card-header\"><i class=\"fa fa-shopping-cart\"></i> ";
        // line 2
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</div>
  <div class=\"table-responsive\">
    <table class=\"table\">
      <thead>
        <tr>
          <td class=\"text-right\">";
        // line 7
        echo (isset($context["column_order_id"]) ? $context["column_order_id"] : null);
        echo "</td>
          <td>";
        // line 8
        echo (isset($context["column_customer"]) ? $context["column_customer"] : null);
        echo "</td>
          <td>";
        // line 9
        echo (isset($context["column_status"]) ? $context["column_status"] : null);
        echo "</td>
          <td>";
        // line 10
        echo (isset($context["column_date_added"]) ? $context["column_date_added"] : null);
        echo "</td>
          <td class=\"text-right\">";
        // line 11
        echo (isset($context["column_total"]) ? $context["column_total"] : null);
        echo "</td>
          <td class=\"text-right\">";
        // line 12
        echo (isset($context["column_action"]) ? $context["column_action"] : null);
        echo "</td>
        </tr>
      </thead>
      <tbody>
        ";
        // line 16
        if ((isset($context["orders"]) ? $context["orders"] : null)) {
            // line 17
            echo "          ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["orders"]) ? $context["orders"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
                // line 18
                echo "            <tr>
              <td class=\"text-right\">";
                // line 19
                echo $this->getAttribute($context["order"], "order_id", array());
                echo "</td>
              <td>";
                // line 20
                echo $this->getAttribute($context["order"], "customer", array());
                echo "</td>
              <td>";
                // line 21
                echo $this->getAttribute($context["order"], "status", array());
                echo "</td>
              <td>";
                // line 22
                echo $this->getAttribute($context["order"], "date_added", array());
                echo "</td>
              <td class=\"text-right\">";
                // line 23
                echo $this->getAttribute($context["order"], "total", array());
                echo "</td>
              <td class=\"text-right\"><a href=\"";
                // line 24
                echo $this->getAttribute($context["order"], "view", array());
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo (isset($context["button_view"]) ? $context["button_view"] : null);
                echo "\" class=\"btn btn-info\"><i class=\"fa fa-eye\"></i></a></td>
            </tr>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "        ";
        } else {
            // line 28
            echo "          <tr>
            <td class=\"text-center\" colspan=\"6\">";
            // line 29
            echo (isset($context["text_no_results"]) ? $context["text_no_results"] : null);
            echo "</td>
          </tr>
        ";
        }
        // line 32
        echo "      </tbody>
    </table>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "extension/dashboard/recent_info.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 32,  104 => 29,  101 => 28,  98 => 27,  87 => 24,  83 => 23,  79 => 22,  75 => 21,  71 => 20,  67 => 19,  64 => 18,  59 => 17,  57 => 16,  50 => 12,  46 => 11,  42 => 10,  38 => 9,  34 => 8,  30 => 7,  22 => 2,  19 => 1,);
    }
}
/* <div class="card mb-3">*/
/*   <div class="card-header"><i class="fa fa-shopping-cart"></i> {{ heading_title }}</div>*/
/*   <div class="table-responsive">*/
/*     <table class="table">*/
/*       <thead>*/
/*         <tr>*/
/*           <td class="text-right">{{ column_order_id }}</td>*/
/*           <td>{{ column_customer }}</td>*/
/*           <td>{{ column_status }}</td>*/
/*           <td>{{ column_date_added }}</td>*/
/*           <td class="text-right">{{ column_total }}</td>*/
/*           <td class="text-right">{{ column_action }}</td>*/
/*         </tr>*/
/*       </thead>*/
/*       <tbody>*/
/*         {% if orders %}*/
/*           {% for order in orders %}*/
/*             <tr>*/
/*               <td class="text-right">{{ order.order_id }}</td>*/
/*               <td>{{ order.customer }}</td>*/
/*               <td>{{ order.status }}</td>*/
/*               <td>{{ order.date_added }}</td>*/
/*               <td class="text-right">{{ order.total }}</td>*/
/*               <td class="text-right"><a href="{{ order.view }}" data-toggle="tooltip" title="{{ button_view }}" class="btn btn-info"><i class="fa fa-eye"></i></a></td>*/
/*             </tr>*/
/*           {% endfor %}*/
/*         {% else %}*/
/*           <tr>*/
/*             <td class="text-center" colspan="6">{{ text_no_results }}</td>*/
/*           </tr>*/
/*         {% endif %}*/
/*       </tbody>*/
/*     </table>*/
/*   </div>*/
/* </div>*/
/* */
