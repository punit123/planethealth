<?php

/* default/template/common/menu.twig */
class __TwigTemplate_aff606679606b046bc093e41aa19e07ab869ae00ca3f87e047cb05cda0586619 extends Twig_Template
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

";
        // line 3
        if ((isset($context["categories"]) ? $context["categories"] : null)) {
            // line 4
            echo "
<div class=\"container\">
  <nav id=\"menu\" class=\"navbar navbar-expand-lg navbar-light bg-primary\">
    <div id=\"category\" class=\"d-block d-sm-block d-lg-none\">";
            // line 7
            echo (isset($context["text_category"]) ? $context["text_category"] : null);
            echo "</div>
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#narbar-menu\" aria-controls=\"narbar-menu\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
      <i class=\"fa fa-bars\"></i>
    </button>
    <div class=\"collapse navbar-collapse\" id=\"narbar-menu\">
      <ul class=\"navbar-nav\">
        ";
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 14
                echo "        ";
                if ($this->getAttribute($context["category"], "children", array())) {
                    // line 15
                    echo "        <li class=\"nav-item dropdown\"><a href=\"";
                    echo $this->getAttribute($context["category"], "href", array());
                    echo "\" class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\">";
                    echo $this->getAttribute($context["category"], "name", array());
                    echo "</a>
          <div class=\"dropdown-menu\">
            <div class=\"dropdown-inner\"> ";
                    // line 17
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_array_batch($this->getAttribute($context["category"], "children", array()), (twig_length_filter($this->env, $this->getAttribute($context["category"], "children", array())) / twig_round($this->getAttribute($context["category"], "column", array()), 1, "ceil"))));
                    foreach ($context['_seq'] as $context["_key"] => $context["children"]) {
                        // line 18
                        echo "              <ul class=\"list-unstyled\">
                ";
                        // line 19
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($context["children"]);
                        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                            // line 20
                            echo "                <li><a href=\"";
                            echo $this->getAttribute($context["child"], "href", array());
                            echo "\" class=\"nav-link\">";
                            echo $this->getAttribute($context["child"], "name", array());
                            echo "</a></li>
                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 22
                        echo "              </ul>
              ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['children'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 23
                    echo "</div>
            <a href=\"";
                    // line 24
                    echo $this->getAttribute($context["category"], "href", array());
                    echo "\" class=\"see-all\">";
                    echo (isset($context["text_all"]) ? $context["text_all"] : null);
                    echo " ";
                    echo $this->getAttribute($context["category"], "name", array());
                    echo "</a> </div>
        </li>
        ";
                } else {
                    // line 27
                    echo "        <li class=\"nav-item\"><a href=\"";
                    echo $this->getAttribute($context["category"], "href", array());
                    echo "\" class=\"nav-link\">";
                    echo $this->getAttribute($context["category"], "name", array());
                    echo "</a></li>
        ";
                }
                // line 29
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "

      </ul>
    </div>
  </nav>

</div>
";
        }
    }

    public function getTemplateName()
    {
        return "default/template/common/menu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 30,  104 => 29,  96 => 27,  86 => 24,  83 => 23,  76 => 22,  65 => 20,  61 => 19,  58 => 18,  54 => 17,  46 => 15,  43 => 14,  39 => 13,  30 => 7,  25 => 4,  23 => 3,  19 => 1,);
    }
}
/* */
/* */
/* {% if categories %}*/
/* */
/* <div class="container">*/
/*   <nav id="menu" class="navbar navbar-expand-lg navbar-light bg-primary">*/
/*     <div id="category" class="d-block d-sm-block d-lg-none">{{ text_category }}</div>*/
/*     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#narbar-menu" aria-controls="narbar-menu" aria-expanded="false" aria-label="Toggle navigation">*/
/*       <i class="fa fa-bars"></i>*/
/*     </button>*/
/*     <div class="collapse navbar-collapse" id="narbar-menu">*/
/*       <ul class="navbar-nav">*/
/*         {% for category in categories %}*/
/*         {% if category.children %}*/
/*         <li class="nav-item dropdown"><a href="{{ category.href }}" class="nav-link dropdown-toggle" data-toggle="dropdown">{{ category.name }}</a>*/
/*           <div class="dropdown-menu">*/
/*             <div class="dropdown-inner"> {% for children in category.children|batch(category.children|length / category.column|round(1, 'ceil')) %}*/
/*               <ul class="list-unstyled">*/
/*                 {% for child in children %}*/
/*                 <li><a href="{{ child.href }}" class="nav-link">{{ child.name }}</a></li>*/
/*                 {% endfor %}*/
/*               </ul>*/
/*               {% endfor %}</div>*/
/*             <a href="{{ category.href }}" class="see-all">{{ text_all }} {{ category.name }}</a> </div>*/
/*         </li>*/
/*         {% else %}*/
/*         <li class="nav-item"><a href="{{ category.href }}" class="nav-link">{{ category.name }}</a></li>*/
/*         {% endif %}*/
/*         {% endfor %}*/
/* */
/* */
/*       </ul>*/
/*     </div>*/
/*   </nav>*/
/* */
/* </div>*/
/* {% endif %}*/
/* */
