<?php

/* default/template/common/search.twig */
class __TwigTemplate_00b897d2467228efbfa569ae6456b66ccc739deb7970ffc5c5dadd1d0a8aee75 extends Twig_Template
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
<div id=\"search\" class=\"input-group mb-3\">
  <input type=\"text\" name=\"search\" value=\"";
        // line 3
        echo (isset($context["search"]) ? $context["search"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["text_search"]) ? $context["text_search"] : null);
        echo "\" class=\"form-control\" aria-label=\"search\">
  <div class=\"input-group-append\">
    <button type=\"button\" class=\"btn btn-default btn-lg\"><i class=\"fa fa-search\"></i></button>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "default/template/common/search.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 3,  19 => 1,);
    }
}
/* */
/* <div id="search" class="input-group mb-3">*/
/*   <input type="text" name="search" value="{{ search }}" placeholder="{{ text_search }}" class="form-control" aria-label="search">*/
/*   <div class="input-group-append">*/
/*     <button type="button" class="btn btn-default btn-lg"><i class="fa fa-search"></i></button>*/
/*   </div>*/
/* </div>*/
/* */
