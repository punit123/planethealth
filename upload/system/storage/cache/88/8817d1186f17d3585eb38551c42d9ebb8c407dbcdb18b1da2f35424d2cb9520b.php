<?php

/* common/header.twig */
class __TwigTemplate_ad3a4617f264d2beb1bad158a658b5ed53e014a34cd8de105f997f93d2569388 extends Twig_Template
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
        echo "<!DOCTYPE html>
<html dir=\"";
        // line 2
        echo (isset($context["direction"]) ? $context["direction"] : null);
        echo "\" lang=\"";
        echo (isset($context["lang"]) ? $context["lang"] : null);
        echo "\">
<head>
  <meta charset=\"UTF-8\"/>
  <title>";
        // line 5
        echo (isset($context["title"]) ? $context["title"] : null);
        echo "</title>
  <base href=\"";
        // line 6
        echo (isset($context["base"]) ? $context["base"] : null);
        echo "\"/>
  ";
        // line 7
        if ((isset($context["description"]) ? $context["description"] : null)) {
            // line 8
            echo "    <meta name=\"description\" content=\"";
            echo (isset($context["description"]) ? $context["description"] : null);
            echo "\"/>
  ";
        }
        // line 10
        echo "  ";
        if ((isset($context["keywords"]) ? $context["keywords"] : null)) {
            // line 11
            echo "    <meta name=\"keywords\" content=\"";
            echo (isset($context["keywords"]) ? $context["keywords"] : null);
            echo "\"/>
  ";
        }
        // line 13
        echo "  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\"/>
  <link href=\"view/stylesheet/bootstrap.css\" type=\"text/css\" rel=\"stylesheet\"/>
  <link type=\"text/css\" href=\"view/stylesheet/stylesheet.css\" rel=\"stylesheet\" media=\"screen\"/>
  <link href=\"view/javascript/font-awesome/css/font-awesome.min.css\" type=\"text/css\" rel=\"stylesheet\"/>
  <link href=\"view/javascript/jquery/datetimepicker/bootstrap-datetimepicker.min.css\" type=\"text/css\" rel=\"stylesheet\" media=\"screen\"/>
  <script type=\"text/javascript\" src=\"view/javascript/jquery/jquery-3.3.1.min.js\"></script>
  <script type=\"text/javascript\" src=\"view/javascript/popper.min.js\"></script>
  <script type=\"text/javascript\" src=\"view/javascript/bootstrap/js/bootstrap.min.js\"></script>
  <script src=\"view/javascript/jquery/datetimepicker/moment/moment.min.js\" type=\"text/javascript\"></script>
  <script src=\"view/javascript/jquery/datetimepicker/moment/moment-with-locales.min.js\" type=\"text/javascript\"></script>
  <script src=\"view/javascript/jquery/datetimepicker/bootstrap-datetimepicker.min.js\" type=\"text/javascript\"></script>
  ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["styles"]) ? $context["styles"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 25
            echo "    <link type=\"text/css\" href=\"";
            echo $this->getAttribute($context["style"], "href", array());
            echo "\" rel=\"";
            echo $this->getAttribute($context["style"], "rel", array());
            echo "\" media=\"";
            echo $this->getAttribute($context["style"], "media", array());
            echo "\"/>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["links"]) ? $context["links"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 28
            echo "    <link href=\"";
            echo $this->getAttribute($context["link"], "href", array());
            echo "\" rel=\"";
            echo $this->getAttribute($context["link"], "rel", array());
            echo "\"/>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "  <script src=\"view/javascript/common.js\" type=\"text/javascript\"></script>
  ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["scripts"]) ? $context["scripts"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 32
            echo "    <script type=\"text/javascript\" src=\"";
            echo $context["script"];
            echo "\"></script>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "</head>
<body>
<div id=\"container\">
  <header id=\"header\" class=\"navbar navbar-expand navbar-light bg-light\">

    <div class=\"container-fluid\">
      <a href=\"";
        // line 40
        echo (isset($context["home"]) ? $context["home"] : null);
        echo "\" class=\"navbar-brand\"><img src=\"view/image/logo.png\" alt=\"";
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "\" title=\"";
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "\"/></a>
      <button type=\"button\" id=\"button-menu\" class=\"d-md-none navbar-toggler\"><span class=\"fa fa-bars\"></span></button>

      ";
        // line 43
        if ((isset($context["logged"]) ? $context["logged"] : null)) {
            // line 44
            echo "        <ul class=\"navbar-nav\">
          <li class=\"nav-item dropdown\">
            <a href=\"#\" data-toggle=\"dropdown\" class=\"nav-link dropdown-toggle\"><img src=\"";
            // line 46
            echo (isset($context["image"]) ? $context["image"] : null);
            echo "\" alt=\"";
            echo (isset($context["firstname"]) ? $context["firstname"] : null);
            echo " ";
            echo (isset($context["lastname"]) ? $context["lastname"] : null);
            echo "\" title=\"";
            echo (isset($context["username"]) ? $context["username"] : null);
            echo "\" id=\"user-profile\" class=\"rounded-circle\"/>&nbsp;&nbsp;<span class=\"d-none d-sm-inline-block\">";
            echo (isset($context["firstname"]) ? $context["firstname"] : null);
            echo " ";
            echo (isset($context["lastname"]) ? $context["lastname"] : null);
            echo "</span></a>
            <div class=\"dropdown-menu dropdown-menu-right\">
              <a href=\"";
            // line 48
            echo (isset($context["profile"]) ? $context["profile"] : null);
            echo "\" class=\"dropdown-item\"><i class=\"fa fa-user-circle-o fa-fw\"></i> ";
            echo (isset($context["text_profile"]) ? $context["text_profile"] : null);
            echo "</a>
              <div class=\"dropdown-divider\"></div>
              <h6 class=\"dropdown-header\">";
            // line 50
            echo (isset($context["text_store"]) ? $context["text_store"] : null);
            echo "</h6>
              ";
            // line 51
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["stores"]) ? $context["stores"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
                // line 52
                echo "                <a href=\"";
                echo $this->getAttribute($context["store"], "href", array());
                echo "\" target=\"_blank\" class=\"dropdown-item\">";
                echo $this->getAttribute($context["store"], "name", array());
                echo "</a>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 54
            echo "              <div class=\"dropdown-divider\"></div>
              <h6 class=\"dropdown-header\">";
            // line 55
            echo (isset($context["text_help"]) ? $context["text_help"] : null);
            echo "</h6>
              <a href=\"http://www.opencart.com\" target=\"_blank\" class=\"dropdown-item\"><i class=\"fa fa-opencart fa-fw\"></i> ";
            // line 56
            echo (isset($context["text_homepage"]) ? $context["text_homepage"] : null);
            echo "</a> <a href=\"http://docs.opencart.com\" target=\"_blank\" class=\"dropdown-item\"><i class=\"fa fa-file-text-o fa-fw\"></i> ";
            echo (isset($context["text_documentation"]) ? $context["text_documentation"] : null);
            echo "</a> <a href=\"http://forum.opencart.com\" target=\"_blank\" class=\"dropdown-item\"><i class=\"fa fa-comments-o fa-fw\"></i> ";
            echo (isset($context["text_support"]) ? $context["text_support"] : null);
            echo "</a>
            </div>

          </li>
          <li class=\"nav-item\"><a href=\"";
            // line 60
            echo (isset($context["logout"]) ? $context["logout"] : null);
            echo "\" class=\"nav-link\"><i class=\"fa fa-sign-out\"></i> <span class=\"d-none d-lg-inline-block\">";
            echo (isset($context["text_logout"]) ? $context["text_logout"] : null);
            echo "</span></a></li>
        </ul>



      ";
        }
        // line 66
        echo "

    </div>
  </header>
";
    }

    public function getTemplateName()
    {
        return "common/header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  211 => 66,  200 => 60,  189 => 56,  185 => 55,  182 => 54,  171 => 52,  167 => 51,  163 => 50,  156 => 48,  141 => 46,  137 => 44,  135 => 43,  125 => 40,  117 => 34,  108 => 32,  104 => 31,  101 => 30,  90 => 28,  85 => 27,  72 => 25,  68 => 24,  55 => 13,  49 => 11,  46 => 10,  40 => 8,  38 => 7,  34 => 6,  30 => 5,  22 => 2,  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html dir="{{ direction }}" lang="{{ lang }}">*/
/* <head>*/
/*   <meta charset="UTF-8"/>*/
/*   <title>{{ title }}</title>*/
/*   <base href="{{ base }}"/>*/
/*   {% if description %}*/
/*     <meta name="description" content="{{ description }}"/>*/
/*   {% endif %}*/
/*   {% if keywords %}*/
/*     <meta name="keywords" content="{{ keywords }}"/>*/
/*   {% endif %}*/
/*   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>*/
/*   <link href="view/stylesheet/bootstrap.css" type="text/css" rel="stylesheet"/>*/
/*   <link type="text/css" href="view/stylesheet/stylesheet.css" rel="stylesheet" media="screen"/>*/
/*   <link href="view/javascript/font-awesome/css/font-awesome.min.css" type="text/css" rel="stylesheet"/>*/
/*   <link href="view/javascript/jquery/datetimepicker/bootstrap-datetimepicker.min.css" type="text/css" rel="stylesheet" media="screen"/>*/
/*   <script type="text/javascript" src="view/javascript/jquery/jquery-3.3.1.min.js"></script>*/
/*   <script type="text/javascript" src="view/javascript/popper.min.js"></script>*/
/*   <script type="text/javascript" src="view/javascript/bootstrap/js/bootstrap.min.js"></script>*/
/*   <script src="view/javascript/jquery/datetimepicker/moment/moment.min.js" type="text/javascript"></script>*/
/*   <script src="view/javascript/jquery/datetimepicker/moment/moment-with-locales.min.js" type="text/javascript"></script>*/
/*   <script src="view/javascript/jquery/datetimepicker/bootstrap-datetimepicker.min.js" type="text/javascript"></script>*/
/*   {% for style in styles %}*/
/*     <link type="text/css" href="{{ style.href }}" rel="{{ style.rel }}" media="{{ style.media }}"/>*/
/*   {% endfor %}*/
/*   {% for link in links %}*/
/*     <link href="{{ link.href }}" rel="{{ link.rel }}"/>*/
/*   {% endfor %}*/
/*   <script src="view/javascript/common.js" type="text/javascript"></script>*/
/*   {% for script in scripts %}*/
/*     <script type="text/javascript" src="{{ script }}"></script>*/
/*   {% endfor %}*/
/* </head>*/
/* <body>*/
/* <div id="container">*/
/*   <header id="header" class="navbar navbar-expand navbar-light bg-light">*/
/* */
/*     <div class="container-fluid">*/
/*       <a href="{{ home }}" class="navbar-brand"><img src="view/image/logo.png" alt="{{ heading_title }}" title="{{ heading_title }}"/></a>*/
/*       <button type="button" id="button-menu" class="d-md-none navbar-toggler"><span class="fa fa-bars"></span></button>*/
/* */
/*       {% if logged %}*/
/*         <ul class="navbar-nav">*/
/*           <li class="nav-item dropdown">*/
/*             <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle"><img src="{{ image }}" alt="{{ firstname }} {{ lastname }}" title="{{ username }}" id="user-profile" class="rounded-circle"/>&nbsp;&nbsp;<span class="d-none d-sm-inline-block">{{ firstname }} {{ lastname }}</span></a>*/
/*             <div class="dropdown-menu dropdown-menu-right">*/
/*               <a href="{{ profile }}" class="dropdown-item"><i class="fa fa-user-circle-o fa-fw"></i> {{ text_profile }}</a>*/
/*               <div class="dropdown-divider"></div>*/
/*               <h6 class="dropdown-header">{{ text_store }}</h6>*/
/*               {% for store in stores %}*/
/*                 <a href="{{ store.href }}" target="_blank" class="dropdown-item">{{ store.name }}</a>*/
/*               {% endfor %}*/
/*               <div class="dropdown-divider"></div>*/
/*               <h6 class="dropdown-header">{{ text_help }}</h6>*/
/*               <a href="http://www.opencart.com" target="_blank" class="dropdown-item"><i class="fa fa-opencart fa-fw"></i> {{ text_homepage }}</a> <a href="http://docs.opencart.com" target="_blank" class="dropdown-item"><i class="fa fa-file-text-o fa-fw"></i> {{ text_documentation }}</a> <a href="http://forum.opencart.com" target="_blank" class="dropdown-item"><i class="fa fa-comments-o fa-fw"></i> {{ text_support }}</a>*/
/*             </div>*/
/* */
/*           </li>*/
/*           <li class="nav-item"><a href="{{ logout }}" class="nav-link"><i class="fa fa-sign-out"></i> <span class="d-none d-lg-inline-block">{{ text_logout }}</span></a></li>*/
/*         </ul>*/
/* */
/* */
/* */
/*       {% endif %}*/
/* */
/* */
/*     </div>*/
/*   </header>*/
/* */
