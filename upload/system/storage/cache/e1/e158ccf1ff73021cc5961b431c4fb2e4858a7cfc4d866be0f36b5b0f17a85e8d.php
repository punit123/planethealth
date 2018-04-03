<?php

/* common/login.twig */
class __TwigTemplate_5d744d9673e579c4b7f48223c615d0e50d8bf7573a9673b0ac01e998b14c5229 extends Twig_Template
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
<div id=\"content\">
  <div class=\"container-fluid\">
    <br/>
    <br/>
    <div class=\"row\">
      <div class=\"offset-sm-4 col-sm-4\">
        <div class=\"card\">
          <div class=\"card-header\"><i class=\"fa fa-lock\"></i> ";
        // line 9
        echo (isset($context["text_login"]) ? $context["text_login"] : null);
        echo "</div>
          <div class=\"card-body\">
            ";
        // line 11
        if ((isset($context["success"]) ? $context["success"] : null)) {
            // line 12
            echo "              <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo (isset($context["success"]) ? $context["success"] : null);
            echo "
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
              </div>
            ";
        }
        // line 16
        echo "            ";
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            // line 17
            echo "              <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
              </div>
            ";
        }
        // line 21
        echo "            <form action=\"";
        echo (isset($context["action"]) ? $context["action"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\">
              <div class=\"form-group\">
                <label class=\"col-form-label\" for=\"input-username\">";
        // line 23
        echo (isset($context["entry_username"]) ? $context["entry_username"] : null);
        echo "</label>
                <div class=\"input-group\">
                  <div class=\"input-group-prepend\">
                    <span class=\"input-group-text\"><i class=\"fa fa-user\"></i></span>
                  </div>
                  <input type=\"text\" name=\"username\" value=\"";
        // line 28
        echo (isset($context["username"]) ? $context["username"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_username"]) ? $context["entry_username"] : null);
        echo "\" id=\"input-username\" class=\"form-control\"/>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-form-label\" for=\"input-password\">";
        // line 32
        echo (isset($context["entry_password"]) ? $context["entry_password"] : null);
        echo "</label>
                <div class=\"input-group mb-2\">
                  <div class=\"input-group-prepend\">
                    <span class=\"input-group-text\"><i class=\"fa fa-lock\"></i></span>
                  </div>
                  <input type=\"password\" name=\"password\" value=\"";
        // line 37
        echo (isset($context["password"]) ? $context["password"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_password"]) ? $context["entry_password"] : null);
        echo "\" id=\"input-password\" class=\"form-control\"/>
                </div>
                ";
        // line 39
        if ((isset($context["forgotten"]) ? $context["forgotten"] : null)) {
            // line 40
            echo "                  <div class=\"form-text\"><a href=\"";
            echo (isset($context["forgotten"]) ? $context["forgotten"] : null);
            echo "\">";
            echo (isset($context["text_forgotten"]) ? $context["text_forgotten"] : null);
            echo "</a></div>
                ";
        }
        // line 42
        echo "              </div>
              <div class=\"text-right\">
                <button type=\"submit\" class=\"btn btn-primary\"><i class=\"fa fa-key\"></i> ";
        // line 44
        echo (isset($context["button_login"]) ? $context["button_login"] : null);
        echo "</button>
              </div>
              ";
        // line 46
        if ((isset($context["redirect"]) ? $context["redirect"] : null)) {
            // line 47
            echo "                <input type=\"hidden\" name=\"redirect\" value=\"";
            echo (isset($context["redirect"]) ? $context["redirect"] : null);
            echo "\"/>
              ";
        }
        // line 49
        echo "            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
";
        // line 56
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "common/login.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 56,  121 => 49,  115 => 47,  113 => 46,  108 => 44,  104 => 42,  96 => 40,  94 => 39,  87 => 37,  79 => 32,  70 => 28,  62 => 23,  56 => 21,  48 => 17,  45 => 16,  37 => 12,  35 => 11,  30 => 9,  19 => 1,);
    }
}
/* {{ header }}*/
/* <div id="content">*/
/*   <div class="container-fluid">*/
/*     <br/>*/
/*     <br/>*/
/*     <div class="row">*/
/*       <div class="offset-sm-4 col-sm-4">*/
/*         <div class="card">*/
/*           <div class="card-header"><i class="fa fa-lock"></i> {{ text_login }}</div>*/
/*           <div class="card-body">*/
/*             {% if success %}*/
/*               <div class="alert alert-success alert-dismissible"><i class="fa fa-check-circle"></i> {{ success }}*/
/*                 <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*               </div>*/
/*             {% endif %}*/
/*             {% if error_warning %}*/
/*               <div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> {{ error_warning }}*/
/*                 <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*               </div>*/
/*             {% endif %}*/
/*             <form action="{{ action }}" method="post" enctype="multipart/form-data">*/
/*               <div class="form-group">*/
/*                 <label class="col-form-label" for="input-username">{{ entry_username }}</label>*/
/*                 <div class="input-group">*/
/*                   <div class="input-group-prepend">*/
/*                     <span class="input-group-text"><i class="fa fa-user"></i></span>*/
/*                   </div>*/
/*                   <input type="text" name="username" value="{{ username }}" placeholder="{{ entry_username }}" id="input-username" class="form-control"/>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-form-label" for="input-password">{{ entry_password }}</label>*/
/*                 <div class="input-group mb-2">*/
/*                   <div class="input-group-prepend">*/
/*                     <span class="input-group-text"><i class="fa fa-lock"></i></span>*/
/*                   </div>*/
/*                   <input type="password" name="password" value="{{ password }}" placeholder="{{ entry_password }}" id="input-password" class="form-control"/>*/
/*                 </div>*/
/*                 {% if forgotten %}*/
/*                   <div class="form-text"><a href="{{ forgotten }}">{{ text_forgotten }}</a></div>*/
/*                 {% endif %}*/
/*               </div>*/
/*               <div class="text-right">*/
/*                 <button type="submit" class="btn btn-primary"><i class="fa fa-key"></i> {{ button_login }}</button>*/
/*               </div>*/
/*               {% if redirect %}*/
/*                 <input type="hidden" name="redirect" value="{{ redirect }}"/>*/
/*               {% endif %}*/
/*             </form>*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* {{ footer }}*/
/* */
