<?php

/* design/layout_form.twig */
class __TwigTemplate_5eaaaddf1f0cc714bb87cd68b04a9bb6567dfaca5b8bb5323d29637c4aa22a82 extends Twig_Template
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
        <button type=\"submit\" form=\"form-layout\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo (isset($context["button_save"]) ? $context["button_save"] : null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
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
    ";
        // line 19
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            // line 20
            echo "      <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
      </div>
    ";
        }
        // line 24
        echo "    <div class=\"card\">
      <div class=\"card-header\"><i class=\"fa fa-pencil\"></i> ";
        // line 25
        echo (isset($context["text_form"]) ? $context["text_form"] : null);
        echo "</div>
      <div class=\"card-body\">
        <form action=\"";
        // line 27
        echo (isset($context["action"]) ? $context["action"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-layout\">
          <fieldset>
            <legend>";
        // line 29
        echo (isset($context["text_route"]) ? $context["text_route"] : null);
        echo "</legend>
            <div class=\"form-group row required\">
              <label class=\"col-sm-2 col-form-label\" for=\"input-name\">";
        // line 31
        echo (isset($context["entry_name"]) ? $context["entry_name"] : null);
        echo "</label>
              <div class=\"col-sm-10\">
                <input type=\"text\" name=\"name\" value=\"";
        // line 33
        echo (isset($context["name"]) ? $context["name"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_name"]) ? $context["entry_name"] : null);
        echo "\" id=\"input-name\" class=\"form-control\"/>
                ";
        // line 34
        if ((isset($context["error_name"]) ? $context["error_name"] : null)) {
            // line 35
            echo "                  <div class=\"invalid-tooltip\">";
            echo (isset($context["error_name"]) ? $context["error_name"] : null);
            echo "</div>
                ";
        }
        // line 37
        echo "              </div>
            </div>
            <table id=\"route\" class=\"table table-striped table-bordered table-hover\">
              <thead>
                <tr>
                  <td class=\"text-left\">";
        // line 42
        echo (isset($context["entry_store"]) ? $context["entry_store"] : null);
        echo "</td>
                  <td class=\"text-left\">";
        // line 43
        echo (isset($context["entry_route"]) ? $context["entry_route"] : null);
        echo "</td>
                  <td></td>
                </tr>
              </thead>
              <tbody>
                ";
        // line 48
        $context["route_row"] = 0;
        // line 49
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["layout_routes"]) ? $context["layout_routes"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["layout_route"]) {
            // line 50
            echo "                  <tr id=\"route-row";
            echo (isset($context["route_row"]) ? $context["route_row"] : null);
            echo "\">
                    <td class=\"text-left\"><select name=\"layout_route[";
            // line 51
            echo (isset($context["route_row"]) ? $context["route_row"] : null);
            echo "][store_id]\" class=\"form-control\">
                        <option value=\"0\">";
            // line 52
            echo (isset($context["text_default"]) ? $context["text_default"] : null);
            echo "</option>
                        ";
            // line 53
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["stores"]) ? $context["stores"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
                // line 54
                echo "                          ";
                if (($this->getAttribute($context["store"], "store_id", array()) == $this->getAttribute($context["layout_route"], "store_id", array()))) {
                    // line 55
                    echo "                            <option value=\"";
                    echo $this->getAttribute($context["store"], "store_id", array());
                    echo "\" selected=\"selected\">";
                    echo $this->getAttribute($context["store"], "name", array());
                    echo "</option>
                          ";
                } else {
                    // line 57
                    echo "                            <option value=\"";
                    echo $this->getAttribute($context["store"], "store_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["store"], "name", array());
                    echo "</option>
                          ";
                }
                // line 59
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 60
            echo "                      </select></td>
                    <td class=\"text-left\"><input type=\"text\" name=\"layout_route[";
            // line 61
            echo (isset($context["route_row"]) ? $context["route_row"] : null);
            echo "][route]\" value=\"";
            echo $this->getAttribute($context["layout_route"], "route", array());
            echo "\" placeholder=\"";
            echo (isset($context["entry_route"]) ? $context["entry_route"] : null);
            echo "\" class=\"form-control\"/></td>
                    <td class=\"text-left\"><button type=\"button\" onclick=\"\$('#route-row";
            // line 62
            echo (isset($context["route_row"]) ? $context["route_row"] : null);
            echo "').remove();\" data-toggle=\"tooltip\" title=\"";
            echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>
                  </tr>
                  ";
            // line 64
            $context["route_row"] = ((isset($context["route_row"]) ? $context["route_row"] : null) + 1);
            // line 65
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layout_route'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "              </tbody>
              <tfoot>
                <tr>
                  <td colspan=\"2\"></td>
                  <td class=\"text-left\"><button type=\"button\" onclick=\"addRoute();\" data-toggle=\"tooltip\" title=\"";
        // line 70
        echo (isset($context["button_route_add"]) ? $context["button_route_add"] : null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button></td>
                </tr>
              </tfoot>
            </table>
          </fieldset>
          <fieldset>
            <legend>";
        // line 76
        echo (isset($context["text_module"]) ? $context["text_module"] : null);
        echo "</legend>
            ";
        // line 77
        $context["module_row"] = 0;
        // line 78
        echo "            <div class=\"row\">
              <div class=\"col-lg-3 col-md-4 col-sm-12\">
                <table id=\"module-column-left\" class=\"table table-striped table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-center\">";
        // line 83
        echo (isset($context["text_column_left"]) ? $context["text_column_left"] : null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>
                    ";
        // line 87
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["layout_modules"]) ? $context["layout_modules"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["layout_module"]) {
            // line 88
            echo "                      ";
            if (($this->getAttribute($context["layout_module"], "position", array()) == "column_left")) {
                // line 89
                echo "                        <tr id=\"module-row";
                echo (isset($context["module_row"]) ? $context["module_row"] : null);
                echo "\">
                          <td class=\"text-left\">
                            <div class=\"input-group input-group-sm\">
                              <select name=\"layout_module[";
                // line 92
                echo (isset($context["module_row"]) ? $context["module_row"] : null);
                echo "][code]\" class=\"form-control input-sm\">
                                ";
                // line 93
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["extensions"]) ? $context["extensions"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
                    // line 94
                    echo "                                  <optgroup label=\"";
                    echo $this->getAttribute($context["extension"], "name", array());
                    echo "\">
                                    ";
                    // line 95
                    if ( !$this->getAttribute($context["extension"], "module", array())) {
                        // line 96
                        echo "                                      ";
                        if (($this->getAttribute($context["extension"], "code", array()) == $this->getAttribute($context["layout_module"], "code", array()))) {
                            // line 97
                            echo "                                        <option value=\"";
                            echo $this->getAttribute($context["extension"], "code", array());
                            echo "\" selected=\"selected\">";
                            echo $this->getAttribute($context["extension"], "name", array());
                            echo "</option>
                                      ";
                        } else {
                            // line 99
                            echo "                                        <option value=\"";
                            echo $this->getAttribute($context["extension"], "code", array());
                            echo "\">";
                            echo $this->getAttribute($context["extension"], "name", array());
                            echo "</option>
                                      ";
                        }
                        // line 101
                        echo "                                    ";
                    } else {
                        // line 102
                        echo "                                      ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["extension"], "module", array()));
                        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                            // line 103
                            echo "                                        ";
                            if (($this->getAttribute($context["module"], "code", array()) == $this->getAttribute($context["layout_module"], "code", array()))) {
                                // line 104
                                echo "                                          <option value=\"";
                                echo $this->getAttribute($context["module"], "code", array());
                                echo "\" selected=\"selected\">";
                                echo $this->getAttribute($context["module"], "name", array());
                                echo "</option>
                                        ";
                            } else {
                                // line 106
                                echo "                                          <option value=\"";
                                echo $this->getAttribute($context["module"], "code", array());
                                echo "\">";
                                echo $this->getAttribute($context["module"], "name", array());
                                echo "</option>
                                        ";
                            }
                            // line 108
                            echo "                                      ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 109
                        echo "                                    ";
                    }
                    // line 110
                    echo "                                  </optgroup>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 112
                echo "                              </select>
                              <input type=\"hidden\" name=\"layout_module[";
                // line 113
                echo (isset($context["module_row"]) ? $context["module_row"] : null);
                echo "][position]\" value=\"";
                echo $this->getAttribute($context["layout_module"], "position", array());
                echo "\"/>
                              <input type=\"hidden\" name=\"layout_module[";
                // line 114
                echo (isset($context["module_row"]) ? $context["module_row"] : null);
                echo "][sort_order]\" value=\"";
                echo $this->getAttribute($context["layout_module"], "sort_order", array());
                echo "\"/>
                              <div class=\"input-group-append\">
                                <button type=\"button\" value=\"\" data-toggle=\"tooltip\" title=\"";
                // line 116
                echo (isset($context["button_edit"]) ? $context["button_edit"] : null);
                echo "\" class=\"btn btn-primary btn-sm\"><i class=\"fa fa-pencil fa-fw\"></i></button>
                                <button type=\"button\" onclick=\"\$('#module-row";
                // line 117
                echo (isset($context["module_row"]) ? $context["module_row"] : null);
                echo "').remove();\" data-toggle=\"tooltip\" title=\"";
                echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
                echo "\" class=\"btn btn-danger btn-sm\"><i class=\"fa fa fa-minus-circle fa-fw\"></i></button>
                              </div>
                            </div>
                          </td>
                        </tr>
                        ";
                // line 122
                $context["module_row"] = ((isset($context["module_row"]) ? $context["module_row"] : null) + 1);
                // line 123
                echo "                      ";
            }
            // line 124
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layout_module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 125
        echo "                  </tbody>
                  <tfoot>
                    <tr>
                      <td class=\"text-left\">
                        <div class=\"input-group input-group-sm\">
                          <select class=\"form-control input-sm\">
                            <option value=\"\"></option>
                            ";
        // line 132
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["extensions"]) ? $context["extensions"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
            // line 133
            echo "                              <optgroup label=\"";
            echo $this->getAttribute($context["extension"], "name", array());
            echo "\">
                                ";
            // line 134
            if ( !$this->getAttribute($context["extension"], "module", array())) {
                // line 135
                echo "                                  <option value=\"";
                echo $this->getAttribute($context["extension"], "code", array());
                echo "\">";
                echo $this->getAttribute($context["extension"], "name", array());
                echo "</option>
                                ";
            } else {
                // line 137
                echo "                                  ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["extension"], "module", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                    // line 138
                    echo "                                    <option value=\"";
                    echo $this->getAttribute($context["module"], "code", array());
                    echo "\">";
                    echo $this->getAttribute($context["module"], "name", array());
                    echo "</option>
                                  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 140
                echo "                                ";
            }
            // line 141
            echo "                              </optgroup>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 143
        echo "                          </select>
                          <div class=\"input-group-append\">
                            <button type=\"button\" onclick=\"addModule('column-left');\" data-toggle=\"tooltip\" title=\"";
        // line 145
        echo (isset($context["button_module_add"]) ? $context["button_module_add"] : null);
        echo "\" class=\"btn btn-primary btn-sm\"><i class=\"fa fa-plus-circle fa-fw\"></i></button>
                          </div>
                        </div>
                      </td>
                    </tr>
                  </tfoot>
                </table>
              </div>
              <div class=\"col-lg-6 col-md-4 col-sm-12\">
                <table id=\"module-content-top\" class=\"table table-striped table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-center\">";
        // line 157
        echo (isset($context["text_content_top"]) ? $context["text_content_top"] : null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>
                    ";
        // line 161
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["layout_modules"]) ? $context["layout_modules"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["layout_module"]) {
            // line 162
            echo "                      ";
            if (($this->getAttribute($context["layout_module"], "position", array()) == "content_top")) {
                // line 163
                echo "                        <tr id=\"module-row";
                echo (isset($context["module_row"]) ? $context["module_row"] : null);
                echo "\">
                          <td class=\"text-left\">
                            <div class=\"input-group input-group-sm\">
                              <select name=\"layout_module[";
                // line 166
                echo (isset($context["module_row"]) ? $context["module_row"] : null);
                echo "][code]\" class=\"form-control input-sm\">
                                ";
                // line 167
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["extensions"]) ? $context["extensions"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
                    // line 168
                    echo "                                  <optgroup label=\"";
                    echo $this->getAttribute($context["extension"], "name", array());
                    echo "\">
                                    ";
                    // line 169
                    if ( !$this->getAttribute($context["extension"], "module", array())) {
                        // line 170
                        echo "                                      ";
                        if (($this->getAttribute($context["extension"], "code", array()) == $this->getAttribute($context["layout_module"], "code", array()))) {
                            // line 171
                            echo "                                        <option value=\"";
                            echo $this->getAttribute($context["extension"], "code", array());
                            echo "\" selected=\"selected\">";
                            echo $this->getAttribute($context["extension"], "name", array());
                            echo "</option>
                                      ";
                        } else {
                            // line 173
                            echo "                                        <option value=\"";
                            echo $this->getAttribute($context["extension"], "code", array());
                            echo "\">";
                            echo $this->getAttribute($context["extension"], "name", array());
                            echo "</option>
                                      ";
                        }
                        // line 175
                        echo "                                    ";
                    } else {
                        // line 176
                        echo "                                      ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["extension"], "module", array()));
                        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                            // line 177
                            echo "                                        ";
                            if (($this->getAttribute($context["module"], "code", array()) == $this->getAttribute($context["layout_module"], "code", array()))) {
                                // line 178
                                echo "                                          <option value=\"";
                                echo $this->getAttribute($context["module"], "code", array());
                                echo "\" selected=\"selected\">";
                                echo $this->getAttribute($context["module"], "name", array());
                                echo "</option>
                                        ";
                            } else {
                                // line 180
                                echo "                                          <option value=\"";
                                echo $this->getAttribute($context["module"], "code", array());
                                echo "\">";
                                echo $this->getAttribute($context["module"], "name", array());
                                echo "</option>
                                        ";
                            }
                            // line 182
                            echo "                                      ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 183
                        echo "                                    ";
                    }
                    // line 184
                    echo "                                  </optgroup>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 186
                echo "                              </select>
                              <input type=\"hidden\" name=\"layout_module[";
                // line 187
                echo (isset($context["module_row"]) ? $context["module_row"] : null);
                echo "][position]\" value=\"";
                echo $this->getAttribute($context["layout_module"], "position", array());
                echo "\"/>
                              <input type=\"hidden\" name=\"layout_module[";
                // line 188
                echo (isset($context["module_row"]) ? $context["module_row"] : null);
                echo "][sort_order]\" value=\"";
                echo $this->getAttribute($context["layout_module"], "sort_order", array());
                echo "\"/>
                              <div class=\"input-group-append\">
                                <button type=\"button\" value=\"\" data-toggle=\"tooltip\" title=\"";
                // line 190
                echo (isset($context["button_edit"]) ? $context["button_edit"] : null);
                echo "\" class=\"btn btn-primary btn-sm\"><i class=\"fa fa-pencil fa-fw\"></i></button>
                                <button type=\"button\" onclick=\"\$('#module-row";
                // line 191
                echo (isset($context["module_row"]) ? $context["module_row"] : null);
                echo "').remove();\" data-toggle=\"tooltip\" title=\"";
                echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
                echo "\" class=\"btn btn-danger btn-sm\"><i class=\"fa fa fa-minus-circle fa-fw\"></i></button>
                              </div>
                            </div>
                          </td>
                        </tr>
                        ";
                // line 196
                $context["module_row"] = ((isset($context["module_row"]) ? $context["module_row"] : null) + 1);
                // line 197
                echo "                      ";
            }
            // line 198
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layout_module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 199
        echo "                  </tbody>
                  <tfoot>
                    <tr>
                      <td class=\"text-left\">
                        <div class=\"input-group input-group-sm\">
                          <select class=\"form-control input-sm\">
                            <option value=\"\"></option>
                            ";
        // line 206
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["extensions"]) ? $context["extensions"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
            // line 207
            echo "                              <optgroup label=\"";
            echo $this->getAttribute($context["extension"], "name", array());
            echo "\">
                                ";
            // line 208
            if ( !$this->getAttribute($context["extension"], "module", array())) {
                // line 209
                echo "                                  <option value=\"";
                echo $this->getAttribute($context["extension"], "code", array());
                echo "\">";
                echo $this->getAttribute($context["extension"], "name", array());
                echo "</option>
                                ";
            } else {
                // line 211
                echo "                                  ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["extension"], "module", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                    // line 212
                    echo "                                    <option value=\"";
                    echo $this->getAttribute($context["module"], "code", array());
                    echo "\">";
                    echo $this->getAttribute($context["module"], "name", array());
                    echo "</option>
                                  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 214
                echo "                                ";
            }
            // line 215
            echo "                              </optgroup>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 217
        echo "                          </select>
                          <div class=\"input-group-append\">
                            <button type=\"button\" onclick=\"addModule('content-top');\" data-toggle=\"tooltip\" title=\"";
        // line 219
        echo (isset($context["button_module_add"]) ? $context["button_module_add"] : null);
        echo "\" class=\"btn btn-primary btn-sm\"><i class=\"fa fa-plus-circle fa-fw\"></i></button>
                          </div>
                        </div>
                      </td>
                    </tr>
                  </tfoot>
                </table>
                <table id=\"module-content-bottom\" class=\"table table-striped table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-center\">";
        // line 229
        echo (isset($context["text_content_bottom"]) ? $context["text_content_bottom"] : null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>
                    ";
        // line 233
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["layout_modules"]) ? $context["layout_modules"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["layout_module"]) {
            // line 234
            echo "                      ";
            if (($this->getAttribute($context["layout_module"], "position", array()) == "content_bottom")) {
                // line 235
                echo "                        <tr id=\"module-row";
                echo (isset($context["module_row"]) ? $context["module_row"] : null);
                echo "\">
                          <td class=\"text-left\">
                            <div class=\"input-group input-group-sm\">
                              <select name=\"layout_module[";
                // line 238
                echo (isset($context["module_row"]) ? $context["module_row"] : null);
                echo "][code]\" class=\"form-control input-sm\">
                                ";
                // line 239
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["extensions"]) ? $context["extensions"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
                    // line 240
                    echo "                                  <optgroup label=\"";
                    echo $this->getAttribute($context["extension"], "name", array());
                    echo "\">
                                    ";
                    // line 241
                    if ( !$this->getAttribute($context["extension"], "module", array())) {
                        // line 242
                        echo "                                      ";
                        if (($this->getAttribute($context["extension"], "code", array()) == $this->getAttribute($context["layout_module"], "code", array()))) {
                            // line 243
                            echo "                                        <option value=\"";
                            echo $this->getAttribute($context["extension"], "code", array());
                            echo "\" selected=\"selected\">";
                            echo $this->getAttribute($context["extension"], "name", array());
                            echo "</option>
                                      ";
                        } else {
                            // line 245
                            echo "                                        <option value=\"";
                            echo $this->getAttribute($context["extension"], "code", array());
                            echo "\">";
                            echo $this->getAttribute($context["extension"], "name", array());
                            echo "</option>
                                      ";
                        }
                        // line 247
                        echo "                                    ";
                    } else {
                        // line 248
                        echo "                                      ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["extension"], "module", array()));
                        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                            // line 249
                            echo "                                        ";
                            if (($this->getAttribute($context["module"], "code", array()) == $this->getAttribute($context["layout_module"], "code", array()))) {
                                // line 250
                                echo "                                          <option value=\"";
                                echo $this->getAttribute($context["module"], "code", array());
                                echo "\" selected=\"selected\">";
                                echo $this->getAttribute($context["module"], "name", array());
                                echo "</option>
                                        ";
                            } else {
                                // line 252
                                echo "                                          <option value=\"";
                                echo $this->getAttribute($context["module"], "code", array());
                                echo "\">";
                                echo $this->getAttribute($context["module"], "name", array());
                                echo "</option>
                                        ";
                            }
                            // line 254
                            echo "                                      ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 255
                        echo "                                    ";
                    }
                    // line 256
                    echo "                                  </optgroup>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 258
                echo "                              </select>
                              <input type=\"hidden\" name=\"layout_module[";
                // line 259
                echo (isset($context["module_row"]) ? $context["module_row"] : null);
                echo "][position]\" value=\"";
                echo $this->getAttribute($context["layout_module"], "position", array());
                echo "\"/>
                              <input type=\"hidden\" name=\"layout_module[";
                // line 260
                echo (isset($context["module_row"]) ? $context["module_row"] : null);
                echo "][sort_order]\" value=\"";
                echo $this->getAttribute($context["layout_module"], "sort_order", array());
                echo "\"/>
                              <div class=\"input-group-append\">
                                <a href=\"\" data-toggle=\"tooltip\" title=\"";
                // line 262
                echo (isset($context["button_edit"]) ? $context["button_edit"] : null);
                echo "\" class=\"btn btn-primary btn-sm\"><i class=\"fa fa-pencil fa-fw\"></i></a>
                                <button type=\"button\" onclick=\"\$('#module-row";
                // line 263
                echo (isset($context["module_row"]) ? $context["module_row"] : null);
                echo "').remove();\" data-toggle=\"tooltip\" title=\"";
                echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
                echo "\" class=\"btn btn-danger btn-sm\"><i class=\"fa fa fa-minus-circle fa-fw\"></i></button>
                              </div>
                            </div>
                          </td>
                        </tr>
                        ";
                // line 268
                $context["module_row"] = ((isset($context["module_row"]) ? $context["module_row"] : null) + 1);
                // line 269
                echo "                      ";
            }
            // line 270
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layout_module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 271
        echo "                  </tbody>
                  <tfoot>
                    <tr>
                      <td class=\"text-left\">
                        <div class=\"input-group input-group-sm\">
                          <select class=\"form-control input-sm\">
                            <option value=\"\"></option>
                            ";
        // line 278
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["extensions"]) ? $context["extensions"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
            // line 279
            echo "                              <optgroup label=\"";
            echo $this->getAttribute($context["extension"], "name", array());
            echo "\">
                                ";
            // line 280
            if ( !$this->getAttribute($context["extension"], "module", array())) {
                // line 281
                echo "                                  <option value=\"";
                echo $this->getAttribute($context["extension"], "code", array());
                echo "\">";
                echo $this->getAttribute($context["extension"], "name", array());
                echo "</option>
                                ";
            } else {
                // line 283
                echo "                                  ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["extension"], "module", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                    // line 284
                    echo "                                    <option value=\"";
                    echo $this->getAttribute($context["module"], "code", array());
                    echo "\">";
                    echo $this->getAttribute($context["module"], "name", array());
                    echo "</option>
                                  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 286
                echo "                                ";
            }
            // line 287
            echo "                              </optgroup>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 289
        echo "                          </select>
                          <div class=\"input-group-append\">
                            <button type=\"button\" onclick=\"addModule('content-bottom');\" data-toggle=\"tooltip\" title=\"";
        // line 291
        echo (isset($context["button_module_add"]) ? $context["button_module_add"] : null);
        echo "\" class=\"btn btn-primary btn-sm\"><i class=\"fa fa-plus-circle fa-fw\"></i></button>
                          </div>
                        </div>
                      </td>
                    </tr>
                  </tfoot>
                </table>
              </div>
              <div class=\"col-lg-3 col-md-4 col-sm-12\">
                <table id=\"module-column-right\" class=\"table table-striped table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-center\">";
        // line 303
        echo (isset($context["text_column_right"]) ? $context["text_column_right"] : null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>
                    ";
        // line 307
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["layout_modules"]) ? $context["layout_modules"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["layout_module"]) {
            // line 308
            echo "                      ";
            if (($this->getAttribute($context["layout_module"], "position", array()) == "column_right")) {
                // line 309
                echo "                        <tr id=\"module-row";
                echo (isset($context["module_row"]) ? $context["module_row"] : null);
                echo "\">
                          <td class=\"text-left\">
                            <div class=\"input-group input-group-sm\">
                              <select name=\"layout_module[";
                // line 312
                echo (isset($context["module_row"]) ? $context["module_row"] : null);
                echo "][code]\" class=\"form-control input-sm\">
                                ";
                // line 313
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["extensions"]) ? $context["extensions"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
                    // line 314
                    echo "                                  <optgroup label=\"";
                    echo $this->getAttribute($context["extension"], "name", array());
                    echo "\">
                                    ";
                    // line 315
                    if ( !$this->getAttribute($context["extension"], "module", array())) {
                        // line 316
                        echo "                                      ";
                        if (($this->getAttribute($context["extension"], "code", array()) == $this->getAttribute($context["layout_module"], "code", array()))) {
                            // line 317
                            echo "                                        <option value=\"";
                            echo $this->getAttribute($context["extension"], "code", array());
                            echo "\" selected=\"selected\">";
                            echo $this->getAttribute($context["extension"], "name", array());
                            echo "</option>
                                      ";
                        } else {
                            // line 319
                            echo "                                        <option value=\"";
                            echo $this->getAttribute($context["extension"], "code", array());
                            echo "\">";
                            echo $this->getAttribute($context["extension"], "name", array());
                            echo "</option>
                                      ";
                        }
                        // line 321
                        echo "                                    ";
                    } else {
                        // line 322
                        echo "                                      ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["extension"], "module", array()));
                        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                            // line 323
                            echo "                                        ";
                            if (($this->getAttribute($context["module"], "code", array()) == $this->getAttribute($context["layout_module"], "code", array()))) {
                                // line 324
                                echo "                                          <option value=\"";
                                echo $this->getAttribute($context["module"], "code", array());
                                echo "\" selected=\"selected\">";
                                echo $this->getAttribute($context["module"], "name", array());
                                echo "</option>
                                        ";
                            } else {
                                // line 326
                                echo "                                          <option value=\"";
                                echo $this->getAttribute($context["module"], "code", array());
                                echo "\">";
                                echo $this->getAttribute($context["module"], "name", array());
                                echo "</option>
                                        ";
                            }
                            // line 328
                            echo "                                      ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 329
                        echo "                                    ";
                    }
                    // line 330
                    echo "                                  </optgroup>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 332
                echo "                              </select>
                              <input type=\"hidden\" name=\"layout_module[";
                // line 333
                echo (isset($context["module_row"]) ? $context["module_row"] : null);
                echo "][position]\" value=\"";
                echo $this->getAttribute($context["layout_module"], "position", array());
                echo "\"/>
                              <input type=\"hidden\" name=\"layout_module[";
                // line 334
                echo (isset($context["module_row"]) ? $context["module_row"] : null);
                echo "][sort_order]\" value=\"";
                echo $this->getAttribute($context["layout_module"], "sort_order", array());
                echo "\"/>
                              <div class=\"input-group-append\">
                                <a href=\"\" data-toggle=\"tooltip\" title=\"";
                // line 336
                echo (isset($context["button_edit"]) ? $context["button_edit"] : null);
                echo "\" class=\"btn btn-primary btn-sm\"><i class=\"fa fa-pencil fa-fw\"></i></a>
                                <button type=\"button\" onclick=\"\$('#module-row";
                // line 337
                echo (isset($context["module_row"]) ? $context["module_row"] : null);
                echo "').remove();\" data-toggle=\"tooltip\" title=\"";
                echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
                echo "\" class=\"btn btn-danger btn-sm\"><i class=\"fa fa fa-minus-circle fa-fw\"></i></button>
                              </div>
                            </div>
                          </td>
                        </tr>
                        ";
                // line 342
                $context["module_row"] = ((isset($context["module_row"]) ? $context["module_row"] : null) + 1);
                // line 343
                echo "                      ";
            }
            // line 344
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layout_module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 345
        echo "                  </tbody>
                  <tfoot>
                    <tr>
                      <td class=\"text-left\">
                        <div class=\"input-group input-group-sm\">
                          <select class=\"form-control input-sm\">
                            <option value=\"\"></option>
                            ";
        // line 352
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["extensions"]) ? $context["extensions"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
            // line 353
            echo "                              <optgroup label=\"";
            echo $this->getAttribute($context["extension"], "name", array());
            echo "\">
                                ";
            // line 354
            if ( !$this->getAttribute($context["extension"], "module", array())) {
                // line 355
                echo "                                  <option value=\"";
                echo $this->getAttribute($context["extension"], "code", array());
                echo "\">";
                echo $this->getAttribute($context["extension"], "name", array());
                echo "</option>
                                ";
            } else {
                // line 357
                echo "                                  ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["extension"], "module", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                    // line 358
                    echo "                                    <option value=\"";
                    echo $this->getAttribute($context["module"], "code", array());
                    echo "\">";
                    echo $this->getAttribute($context["module"], "name", array());
                    echo "</option>
                                  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 360
                echo "                                ";
            }
            // line 361
            echo "                              </optgroup>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 363
        echo "                          </select>
                          <div class=\"input-group-append\">
                            <button type=\"button\" onclick=\"addModule('column-right');\" data-toggle=\"tooltip\" title=\"";
        // line 365
        echo (isset($context["button_module_add"]) ? $context["button_module_add"] : null);
        echo "\" class=\"btn btn-primary btn-sm\"><i class=\"fa fa-plus-circle fa-fw\"></i></button>
                          </div>
                        </div>
                      </td>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>
          </fieldset>
        </form>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
var route_row = ";
        // line 381
        echo (isset($context["route_row"]) ? $context["route_row"] : null);
        echo ";

function addRoute() {
\thtml = '<tr id=\"route-row' + route_row + '\">';
\thtml += '  <td class=\"text-left\"><select name=\"layout_route[' + route_row + '][store_id]\" class=\"form-control\">';
\thtml += '  <option value=\"0\">";
        // line 386
        echo (isset($context["text_default"]) ? $context["text_default"] : null);
        echo "</option>';
  ";
        // line 387
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["stores"]) ? $context["stores"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 388
            echo "\thtml += '<option value=\"";
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["store"], "name", array()), "js");
            echo "</option>';
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 390
        echo "\thtml += '  </select></td>';
\thtml += '  <td class=\"text-left\"><input type=\"text\" name=\"layout_route[' + route_row + '][route]\" value=\"\" placeholder=\"";
        // line 391
        echo (isset($context["entry_route"]) ? $context["entry_route"] : null);
        echo "\" class=\"form-control\" /></td>';
\thtml += '  <td class=\"text-left\"><button type=\"button\" onclick=\"\$(\\'#route-row' + route_row + '\\').remove();\" data-toggle=\"tooltip\" title=\"";
        // line 392
        echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>';
\thtml += '</tr>';

\t\$('#route tbody').append(html);

\troute_row++;
}

var module_row = ";
        // line 400
        echo (isset($context["module_row"]) ? $context["module_row"] : null);
        echo ";

function addModule(type) {
\tif (\$('#module-' + type + ' tfoot select').val()) {
      html = '<tr id=\"module-row' + module_row + '\">';
      html += '  <td class=\"text-left\"><div class=\"input-group input-group-sm\">';
      html += '    <select name=\"layout_module[' + module_row + '][code]\" class=\"form-control input-sm\">';
    ";
        // line 407
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["extensions"]) ? $context["extensions"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
            // line 408
            echo "      html += '    <optgroup label=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["extension"], "name", array()), "js");
            echo "\">';
    ";
            // line 409
            if ( !$this->getAttribute($context["extension"], "module", array())) {
                // line 410
                echo "      html += '      <option value=\"";
                echo $this->getAttribute($context["extension"], "code", array());
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["extension"], "name", array()), "js");
                echo "</option>';
    ";
            } else {
                // line 412
                echo "    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["extension"], "module", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                    // line 413
                    echo "      html += '      <option value=\"";
                    echo $this->getAttribute($context["module"], "code", array());
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["module"], "name", array()), "js");
                    echo "</option>';
    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 415
                echo "    ";
            }
            // line 416
            echo "      html += '    </optgroup>';
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 418
        echo "      html += '  </select>';
      html += '  <input type=\"hidden\" name=\"layout_module[' + module_row + '][position]\" value=\"' + type.replace('-', '_') + '\" />';
      html += '  <input type=\"hidden\" name=\"layout_module[' + module_row + '][sort_order]\" value=\"\" />';
      html += '  <div class=\"input-group-append\"><a href=\"\" data-toggle=\"tooltip\" title=\"";
        // line 421
        echo (isset($context["button_edit"]) ? $context["button_edit"] : null);
        echo "\" class=\"btn btn-primary btn-sm\"><i class=\"fa fa-pencil fa-fw\"></i></a><button type=\"button\" onclick=\"\$(\\'#module-row' + module_row + '\\').remove();\" data-toggle=\"tooltip\" title=\"";
        echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
        echo "\" class=\"btn btn-danger btn-sm\"><i class=\"fa fa-minus-circle fa-fw\"></i></button></div>';
      html += '  </div></td>';
      html += '</tr>';

      \$('#module-' + type + ' tbody').append(html);

      \$('#module-' + type + ' tbody select[name=\\'layout_module[' + module_row + '][code]\\']').val(\$('#module-' + type + ' tfoot select').val());

      \$('#module-' + type + ' select[name*=\\'code\\']').trigger('change');

      \$('#module-' + type + ' tbody input[name*=\\'sort_order\\']').each(function(i, element) {
          \$(element).val(i);
      });

\t  module_row++;
\t} else {
      alert('";
        // line 437
        echo (isset($context["error_module"]) ? $context["error_module"] : null);
        echo "');
    }
}

\$('#module-column-left, #module-column-right, #module-content-top, #module-content-bottom').delegate('select[name*=\\'code\\']', 'change', function() {
\tvar part = this.value.split('.');

\tif (!part[1]) {
\t\t\$(this).parent().find('a').attr('href', 'index.php?route=extension/module/' + part[0] + '&user_token=";
        // line 445
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "');
\t} else {
\t\t\$(this).parent().find('a').attr('href', 'index.php?route=extension/module/' + part[0] + '&user_token=";
        // line 447
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&module_id=' + part[1]);
\t}
});

\$('#module-column-left, #module-column-right, #module-content-top, #module-content-bottom').trigger('change');
//--></script>
";
        // line 453
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "design/layout_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1236 => 453,  1227 => 447,  1222 => 445,  1211 => 437,  1190 => 421,  1185 => 418,  1178 => 416,  1175 => 415,  1164 => 413,  1159 => 412,  1151 => 410,  1149 => 409,  1144 => 408,  1140 => 407,  1130 => 400,  1119 => 392,  1115 => 391,  1112 => 390,  1101 => 388,  1097 => 387,  1093 => 386,  1085 => 381,  1066 => 365,  1062 => 363,  1055 => 361,  1052 => 360,  1041 => 358,  1036 => 357,  1028 => 355,  1026 => 354,  1021 => 353,  1017 => 352,  1008 => 345,  1002 => 344,  999 => 343,  997 => 342,  987 => 337,  983 => 336,  976 => 334,  970 => 333,  967 => 332,  960 => 330,  957 => 329,  951 => 328,  943 => 326,  935 => 324,  932 => 323,  927 => 322,  924 => 321,  916 => 319,  908 => 317,  905 => 316,  903 => 315,  898 => 314,  894 => 313,  890 => 312,  883 => 309,  880 => 308,  876 => 307,  869 => 303,  854 => 291,  850 => 289,  843 => 287,  840 => 286,  829 => 284,  824 => 283,  816 => 281,  814 => 280,  809 => 279,  805 => 278,  796 => 271,  790 => 270,  787 => 269,  785 => 268,  775 => 263,  771 => 262,  764 => 260,  758 => 259,  755 => 258,  748 => 256,  745 => 255,  739 => 254,  731 => 252,  723 => 250,  720 => 249,  715 => 248,  712 => 247,  704 => 245,  696 => 243,  693 => 242,  691 => 241,  686 => 240,  682 => 239,  678 => 238,  671 => 235,  668 => 234,  664 => 233,  657 => 229,  644 => 219,  640 => 217,  633 => 215,  630 => 214,  619 => 212,  614 => 211,  606 => 209,  604 => 208,  599 => 207,  595 => 206,  586 => 199,  580 => 198,  577 => 197,  575 => 196,  565 => 191,  561 => 190,  554 => 188,  548 => 187,  545 => 186,  538 => 184,  535 => 183,  529 => 182,  521 => 180,  513 => 178,  510 => 177,  505 => 176,  502 => 175,  494 => 173,  486 => 171,  483 => 170,  481 => 169,  476 => 168,  472 => 167,  468 => 166,  461 => 163,  458 => 162,  454 => 161,  447 => 157,  432 => 145,  428 => 143,  421 => 141,  418 => 140,  407 => 138,  402 => 137,  394 => 135,  392 => 134,  387 => 133,  383 => 132,  374 => 125,  368 => 124,  365 => 123,  363 => 122,  353 => 117,  349 => 116,  342 => 114,  336 => 113,  333 => 112,  326 => 110,  323 => 109,  317 => 108,  309 => 106,  301 => 104,  298 => 103,  293 => 102,  290 => 101,  282 => 99,  274 => 97,  271 => 96,  269 => 95,  264 => 94,  260 => 93,  256 => 92,  249 => 89,  246 => 88,  242 => 87,  235 => 83,  228 => 78,  226 => 77,  222 => 76,  213 => 70,  207 => 66,  201 => 65,  199 => 64,  192 => 62,  184 => 61,  181 => 60,  175 => 59,  167 => 57,  159 => 55,  156 => 54,  152 => 53,  148 => 52,  144 => 51,  139 => 50,  134 => 49,  132 => 48,  124 => 43,  120 => 42,  113 => 37,  107 => 35,  105 => 34,  99 => 33,  94 => 31,  89 => 29,  84 => 27,  79 => 25,  76 => 24,  68 => 20,  66 => 19,  59 => 14,  48 => 12,  44 => 11,  38 => 8,  32 => 7,  28 => 6,  19 => 1,);
    }
}
/* {{ header }}{{ column_left }}*/
/* <div id="content">*/
/*   <div class="page-header">*/
/*     <div class="container-fluid">*/
/*       <div class="pull-right">*/
/*         <button type="submit" form="form-layout" data-toggle="tooltip" title="{{ button_save }}" class="btn btn-primary"><i class="fa fa-save"></i></button>*/
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
/*     {% if error_warning %}*/
/*       <div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> {{ error_warning }}*/
/*         <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*       </div>*/
/*     {% endif %}*/
/*     <div class="card">*/
/*       <div class="card-header"><i class="fa fa-pencil"></i> {{ text_form }}</div>*/
/*       <div class="card-body">*/
/*         <form action="{{ action }}" method="post" enctype="multipart/form-data" id="form-layout">*/
/*           <fieldset>*/
/*             <legend>{{ text_route }}</legend>*/
/*             <div class="form-group row required">*/
/*               <label class="col-sm-2 col-form-label" for="input-name">{{ entry_name }}</label>*/
/*               <div class="col-sm-10">*/
/*                 <input type="text" name="name" value="{{ name }}" placeholder="{{ entry_name }}" id="input-name" class="form-control"/>*/
/*                 {% if error_name %}*/
/*                   <div class="invalid-tooltip">{{ error_name }}</div>*/
/*                 {% endif %}*/
/*               </div>*/
/*             </div>*/
/*             <table id="route" class="table table-striped table-bordered table-hover">*/
/*               <thead>*/
/*                 <tr>*/
/*                   <td class="text-left">{{ entry_store }}</td>*/
/*                   <td class="text-left">{{ entry_route }}</td>*/
/*                   <td></td>*/
/*                 </tr>*/
/*               </thead>*/
/*               <tbody>*/
/*                 {% set route_row = 0 %}*/
/*                 {% for layout_route in layout_routes %}*/
/*                   <tr id="route-row{{ route_row }}">*/
/*                     <td class="text-left"><select name="layout_route[{{ route_row }}][store_id]" class="form-control">*/
/*                         <option value="0">{{ text_default }}</option>*/
/*                         {% for store in stores %}*/
/*                           {% if store.store_id == layout_route.store_id %}*/
/*                             <option value="{{ store.store_id }}" selected="selected">{{ store.name }}</option>*/
/*                           {% else %}*/
/*                             <option value="{{ store.store_id }}">{{ store.name }}</option>*/
/*                           {% endif %}*/
/*                         {% endfor %}*/
/*                       </select></td>*/
/*                     <td class="text-left"><input type="text" name="layout_route[{{ route_row }}][route]" value="{{ layout_route.route }}" placeholder="{{ entry_route }}" class="form-control"/></td>*/
/*                     <td class="text-left"><button type="button" onclick="$('#route-row{{ route_row }}').remove();" data-toggle="tooltip" title="{{ button_remove }}" class="btn btn-danger"><i class="fa fa-minus-circle"></i></button></td>*/
/*                   </tr>*/
/*                   {% set route_row = route_row + 1 %}*/
/*                 {% endfor %}*/
/*               </tbody>*/
/*               <tfoot>*/
/*                 <tr>*/
/*                   <td colspan="2"></td>*/
/*                   <td class="text-left"><button type="button" onclick="addRoute();" data-toggle="tooltip" title="{{ button_route_add }}" class="btn btn-primary"><i class="fa fa-plus-circle"></i></button></td>*/
/*                 </tr>*/
/*               </tfoot>*/
/*             </table>*/
/*           </fieldset>*/
/*           <fieldset>*/
/*             <legend>{{ text_module }}</legend>*/
/*             {% set module_row = 0 %}*/
/*             <div class="row">*/
/*               <div class="col-lg-3 col-md-4 col-sm-12">*/
/*                 <table id="module-column-left" class="table table-striped table-bordered table-hover">*/
/*                   <thead>*/
/*                     <tr>*/
/*                       <td class="text-center">{{ text_column_left }}</td>*/
/*                     </tr>*/
/*                   </thead>*/
/*                   <tbody>*/
/*                     {% for layout_module in layout_modules %}*/
/*                       {% if layout_module.position == 'column_left' %}*/
/*                         <tr id="module-row{{ module_row }}">*/
/*                           <td class="text-left">*/
/*                             <div class="input-group input-group-sm">*/
/*                               <select name="layout_module[{{ module_row }}][code]" class="form-control input-sm">*/
/*                                 {% for extension in extensions %}*/
/*                                   <optgroup label="{{ extension.name }}">*/
/*                                     {% if not extension.module %}*/
/*                                       {% if extension.code == layout_module.code %}*/
/*                                         <option value="{{ extension.code }}" selected="selected">{{ extension.name }}</option>*/
/*                                       {% else %}*/
/*                                         <option value="{{ extension.code }}">{{ extension.name }}</option>*/
/*                                       {% endif %}*/
/*                                     {% else %}*/
/*                                       {% for module in extension.module %}*/
/*                                         {% if module.code == layout_module.code %}*/
/*                                           <option value="{{ module.code }}" selected="selected">{{ module.name }}</option>*/
/*                                         {% else %}*/
/*                                           <option value="{{ module.code }}">{{ module.name }}</option>*/
/*                                         {% endif %}*/
/*                                       {% endfor %}*/
/*                                     {% endif %}*/
/*                                   </optgroup>*/
/*                                 {% endfor %}*/
/*                               </select>*/
/*                               <input type="hidden" name="layout_module[{{ module_row }}][position]" value="{{ layout_module.position }}"/>*/
/*                               <input type="hidden" name="layout_module[{{ module_row }}][sort_order]" value="{{ layout_module.sort_order }}"/>*/
/*                               <div class="input-group-append">*/
/*                                 <button type="button" value="" data-toggle="tooltip" title="{{ button_edit }}" class="btn btn-primary btn-sm"><i class="fa fa-pencil fa-fw"></i></button>*/
/*                                 <button type="button" onclick="$('#module-row{{ module_row }}').remove();" data-toggle="tooltip" title="{{ button_remove }}" class="btn btn-danger btn-sm"><i class="fa fa fa-minus-circle fa-fw"></i></button>*/
/*                               </div>*/
/*                             </div>*/
/*                           </td>*/
/*                         </tr>*/
/*                         {% set module_row = module_row + 1 %}*/
/*                       {% endif %}*/
/*                     {% endfor %}*/
/*                   </tbody>*/
/*                   <tfoot>*/
/*                     <tr>*/
/*                       <td class="text-left">*/
/*                         <div class="input-group input-group-sm">*/
/*                           <select class="form-control input-sm">*/
/*                             <option value=""></option>*/
/*                             {% for extension in extensions %}*/
/*                               <optgroup label="{{ extension.name }}">*/
/*                                 {% if not extension.module %}*/
/*                                   <option value="{{ extension.code }}">{{ extension.name }}</option>*/
/*                                 {% else %}*/
/*                                   {% for module in extension.module %}*/
/*                                     <option value="{{ module.code }}">{{ module.name }}</option>*/
/*                                   {% endfor %}*/
/*                                 {% endif %}*/
/*                               </optgroup>*/
/*                             {% endfor %}*/
/*                           </select>*/
/*                           <div class="input-group-append">*/
/*                             <button type="button" onclick="addModule('column-left');" data-toggle="tooltip" title="{{ button_module_add }}" class="btn btn-primary btn-sm"><i class="fa fa-plus-circle fa-fw"></i></button>*/
/*                           </div>*/
/*                         </div>*/
/*                       </td>*/
/*                     </tr>*/
/*                   </tfoot>*/
/*                 </table>*/
/*               </div>*/
/*               <div class="col-lg-6 col-md-4 col-sm-12">*/
/*                 <table id="module-content-top" class="table table-striped table-bordered table-hover">*/
/*                   <thead>*/
/*                     <tr>*/
/*                       <td class="text-center">{{ text_content_top }}</td>*/
/*                     </tr>*/
/*                   </thead>*/
/*                   <tbody>*/
/*                     {% for layout_module in layout_modules %}*/
/*                       {% if layout_module.position == 'content_top' %}*/
/*                         <tr id="module-row{{ module_row }}">*/
/*                           <td class="text-left">*/
/*                             <div class="input-group input-group-sm">*/
/*                               <select name="layout_module[{{ module_row }}][code]" class="form-control input-sm">*/
/*                                 {% for extension in extensions %}*/
/*                                   <optgroup label="{{ extension.name }}">*/
/*                                     {% if not extension.module %}*/
/*                                       {% if extension.code == layout_module.code %}*/
/*                                         <option value="{{ extension.code }}" selected="selected">{{ extension.name }}</option>*/
/*                                       {% else %}*/
/*                                         <option value="{{ extension.code }}">{{ extension.name }}</option>*/
/*                                       {% endif %}*/
/*                                     {% else %}*/
/*                                       {% for module in extension.module %}*/
/*                                         {% if module.code == layout_module.code %}*/
/*                                           <option value="{{ module.code }}" selected="selected">{{ module.name }}</option>*/
/*                                         {% else %}*/
/*                                           <option value="{{ module.code }}">{{ module.name }}</option>*/
/*                                         {% endif %}*/
/*                                       {% endfor %}*/
/*                                     {% endif %}*/
/*                                   </optgroup>*/
/*                                 {% endfor %}*/
/*                               </select>*/
/*                               <input type="hidden" name="layout_module[{{ module_row }}][position]" value="{{ layout_module.position }}"/>*/
/*                               <input type="hidden" name="layout_module[{{ module_row }}][sort_order]" value="{{ layout_module.sort_order }}"/>*/
/*                               <div class="input-group-append">*/
/*                                 <button type="button" value="" data-toggle="tooltip" title="{{ button_edit }}" class="btn btn-primary btn-sm"><i class="fa fa-pencil fa-fw"></i></button>*/
/*                                 <button type="button" onclick="$('#module-row{{ module_row }}').remove();" data-toggle="tooltip" title="{{ button_remove }}" class="btn btn-danger btn-sm"><i class="fa fa fa-minus-circle fa-fw"></i></button>*/
/*                               </div>*/
/*                             </div>*/
/*                           </td>*/
/*                         </tr>*/
/*                         {% set module_row = module_row + 1 %}*/
/*                       {% endif %}*/
/*                     {% endfor %}*/
/*                   </tbody>*/
/*                   <tfoot>*/
/*                     <tr>*/
/*                       <td class="text-left">*/
/*                         <div class="input-group input-group-sm">*/
/*                           <select class="form-control input-sm">*/
/*                             <option value=""></option>*/
/*                             {% for extension in extensions %}*/
/*                               <optgroup label="{{ extension.name }}">*/
/*                                 {% if not extension.module %}*/
/*                                   <option value="{{ extension.code }}">{{ extension.name }}</option>*/
/*                                 {% else %}*/
/*                                   {% for module in extension.module %}*/
/*                                     <option value="{{ module.code }}">{{ module.name }}</option>*/
/*                                   {% endfor %}*/
/*                                 {% endif %}*/
/*                               </optgroup>*/
/*                             {% endfor %}*/
/*                           </select>*/
/*                           <div class="input-group-append">*/
/*                             <button type="button" onclick="addModule('content-top');" data-toggle="tooltip" title="{{ button_module_add }}" class="btn btn-primary btn-sm"><i class="fa fa-plus-circle fa-fw"></i></button>*/
/*                           </div>*/
/*                         </div>*/
/*                       </td>*/
/*                     </tr>*/
/*                   </tfoot>*/
/*                 </table>*/
/*                 <table id="module-content-bottom" class="table table-striped table-bordered table-hover">*/
/*                   <thead>*/
/*                     <tr>*/
/*                       <td class="text-center">{{ text_content_bottom }}</td>*/
/*                     </tr>*/
/*                   </thead>*/
/*                   <tbody>*/
/*                     {% for layout_module in layout_modules %}*/
/*                       {% if layout_module.position == 'content_bottom' %}*/
/*                         <tr id="module-row{{ module_row }}">*/
/*                           <td class="text-left">*/
/*                             <div class="input-group input-group-sm">*/
/*                               <select name="layout_module[{{ module_row }}][code]" class="form-control input-sm">*/
/*                                 {% for extension in extensions %}*/
/*                                   <optgroup label="{{ extension.name }}">*/
/*                                     {% if not extension.module %}*/
/*                                       {% if extension.code == layout_module.code %}*/
/*                                         <option value="{{ extension.code }}" selected="selected">{{ extension.name }}</option>*/
/*                                       {% else %}*/
/*                                         <option value="{{ extension.code }}">{{ extension.name }}</option>*/
/*                                       {% endif %}*/
/*                                     {% else %}*/
/*                                       {% for module in extension.module %}*/
/*                                         {% if module.code == layout_module.code %}*/
/*                                           <option value="{{ module.code }}" selected="selected">{{ module.name }}</option>*/
/*                                         {% else %}*/
/*                                           <option value="{{ module.code }}">{{ module.name }}</option>*/
/*                                         {% endif %}*/
/*                                       {% endfor %}*/
/*                                     {% endif %}*/
/*                                   </optgroup>*/
/*                                 {% endfor %}*/
/*                               </select>*/
/*                               <input type="hidden" name="layout_module[{{ module_row }}][position]" value="{{ layout_module.position }}"/>*/
/*                               <input type="hidden" name="layout_module[{{ module_row }}][sort_order]" value="{{ layout_module.sort_order }}"/>*/
/*                               <div class="input-group-append">*/
/*                                 <a href="" data-toggle="tooltip" title="{{ button_edit }}" class="btn btn-primary btn-sm"><i class="fa fa-pencil fa-fw"></i></a>*/
/*                                 <button type="button" onclick="$('#module-row{{ module_row }}').remove();" data-toggle="tooltip" title="{{ button_remove }}" class="btn btn-danger btn-sm"><i class="fa fa fa-minus-circle fa-fw"></i></button>*/
/*                               </div>*/
/*                             </div>*/
/*                           </td>*/
/*                         </tr>*/
/*                         {% set module_row = module_row + 1 %}*/
/*                       {% endif %}*/
/*                     {% endfor %}*/
/*                   </tbody>*/
/*                   <tfoot>*/
/*                     <tr>*/
/*                       <td class="text-left">*/
/*                         <div class="input-group input-group-sm">*/
/*                           <select class="form-control input-sm">*/
/*                             <option value=""></option>*/
/*                             {% for extension in extensions %}*/
/*                               <optgroup label="{{ extension.name }}">*/
/*                                 {% if not extension.module %}*/
/*                                   <option value="{{ extension.code }}">{{ extension.name }}</option>*/
/*                                 {% else %}*/
/*                                   {% for module in extension.module %}*/
/*                                     <option value="{{ module.code }}">{{ module.name }}</option>*/
/*                                   {% endfor %}*/
/*                                 {% endif %}*/
/*                               </optgroup>*/
/*                             {% endfor %}*/
/*                           </select>*/
/*                           <div class="input-group-append">*/
/*                             <button type="button" onclick="addModule('content-bottom');" data-toggle="tooltip" title="{{ button_module_add }}" class="btn btn-primary btn-sm"><i class="fa fa-plus-circle fa-fw"></i></button>*/
/*                           </div>*/
/*                         </div>*/
/*                       </td>*/
/*                     </tr>*/
/*                   </tfoot>*/
/*                 </table>*/
/*               </div>*/
/*               <div class="col-lg-3 col-md-4 col-sm-12">*/
/*                 <table id="module-column-right" class="table table-striped table-bordered table-hover">*/
/*                   <thead>*/
/*                     <tr>*/
/*                       <td class="text-center">{{ text_column_right }}</td>*/
/*                     </tr>*/
/*                   </thead>*/
/*                   <tbody>*/
/*                     {% for layout_module in layout_modules %}*/
/*                       {% if layout_module.position == 'column_right' %}*/
/*                         <tr id="module-row{{ module_row }}">*/
/*                           <td class="text-left">*/
/*                             <div class="input-group input-group-sm">*/
/*                               <select name="layout_module[{{ module_row }}][code]" class="form-control input-sm">*/
/*                                 {% for extension in extensions %}*/
/*                                   <optgroup label="{{ extension.name }}">*/
/*                                     {% if not extension.module %}*/
/*                                       {% if extension.code == layout_module.code %}*/
/*                                         <option value="{{ extension.code }}" selected="selected">{{ extension.name }}</option>*/
/*                                       {% else %}*/
/*                                         <option value="{{ extension.code }}">{{ extension.name }}</option>*/
/*                                       {% endif %}*/
/*                                     {% else %}*/
/*                                       {% for module in extension.module %}*/
/*                                         {% if module.code == layout_module.code %}*/
/*                                           <option value="{{ module.code }}" selected="selected">{{ module.name }}</option>*/
/*                                         {% else %}*/
/*                                           <option value="{{ module.code }}">{{ module.name }}</option>*/
/*                                         {% endif %}*/
/*                                       {% endfor %}*/
/*                                     {% endif %}*/
/*                                   </optgroup>*/
/*                                 {% endfor %}*/
/*                               </select>*/
/*                               <input type="hidden" name="layout_module[{{ module_row }}][position]" value="{{ layout_module.position }}"/>*/
/*                               <input type="hidden" name="layout_module[{{ module_row }}][sort_order]" value="{{ layout_module.sort_order }}"/>*/
/*                               <div class="input-group-append">*/
/*                                 <a href="" data-toggle="tooltip" title="{{ button_edit }}" class="btn btn-primary btn-sm"><i class="fa fa-pencil fa-fw"></i></a>*/
/*                                 <button type="button" onclick="$('#module-row{{ module_row }}').remove();" data-toggle="tooltip" title="{{ button_remove }}" class="btn btn-danger btn-sm"><i class="fa fa fa-minus-circle fa-fw"></i></button>*/
/*                               </div>*/
/*                             </div>*/
/*                           </td>*/
/*                         </tr>*/
/*                         {% set module_row = module_row + 1 %}*/
/*                       {% endif %}*/
/*                     {% endfor %}*/
/*                   </tbody>*/
/*                   <tfoot>*/
/*                     <tr>*/
/*                       <td class="text-left">*/
/*                         <div class="input-group input-group-sm">*/
/*                           <select class="form-control input-sm">*/
/*                             <option value=""></option>*/
/*                             {% for extension in extensions %}*/
/*                               <optgroup label="{{ extension.name }}">*/
/*                                 {% if not extension.module %}*/
/*                                   <option value="{{ extension.code }}">{{ extension.name }}</option>*/
/*                                 {% else %}*/
/*                                   {% for module in extension.module %}*/
/*                                     <option value="{{ module.code }}">{{ module.name }}</option>*/
/*                                   {% endfor %}*/
/*                                 {% endif %}*/
/*                               </optgroup>*/
/*                             {% endfor %}*/
/*                           </select>*/
/*                           <div class="input-group-append">*/
/*                             <button type="button" onclick="addModule('column-right');" data-toggle="tooltip" title="{{ button_module_add }}" class="btn btn-primary btn-sm"><i class="fa fa-plus-circle fa-fw"></i></button>*/
/*                           </div>*/
/*                         </div>*/
/*                       </td>*/
/*                     </tr>*/
/*                   </tfoot>*/
/*                 </table>*/
/*               </div>*/
/*             </div>*/
/*           </fieldset>*/
/*         </form>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* <script type="text/javascript"><!--*/
/* var route_row = {{ route_row }};*/
/* */
/* function addRoute() {*/
/* 	html = '<tr id="route-row' + route_row + '">';*/
/* 	html += '  <td class="text-left"><select name="layout_route[' + route_row + '][store_id]" class="form-control">';*/
/* 	html += '  <option value="0">{{ text_default }}</option>';*/
/*   {% for store in stores %}*/
/* 	html += '<option value="{{ store.store_id }}">{{ store.name|escape('js') }}</option>';*/
/*   {% endfor %}*/
/* 	html += '  </select></td>';*/
/* 	html += '  <td class="text-left"><input type="text" name="layout_route[' + route_row + '][route]" value="" placeholder="{{ entry_route }}" class="form-control" /></td>';*/
/* 	html += '  <td class="text-left"><button type="button" onclick="$(\'#route-row' + route_row + '\').remove();" data-toggle="tooltip" title="{{ button_remove }}" class="btn btn-danger"><i class="fa fa-minus-circle"></i></button></td>';*/
/* 	html += '</tr>';*/
/* */
/* 	$('#route tbody').append(html);*/
/* */
/* 	route_row++;*/
/* }*/
/* */
/* var module_row = {{ module_row }};*/
/* */
/* function addModule(type) {*/
/* 	if ($('#module-' + type + ' tfoot select').val()) {*/
/*       html = '<tr id="module-row' + module_row + '">';*/
/*       html += '  <td class="text-left"><div class="input-group input-group-sm">';*/
/*       html += '    <select name="layout_module[' + module_row + '][code]" class="form-control input-sm">';*/
/*     {% for extension in extensions %}*/
/*       html += '    <optgroup label="{{ extension.name|escape('js') }}">';*/
/*     {% if not extension.module %}*/
/*       html += '      <option value="{{ extension.code }}">{{ extension.name|escape('js') }}</option>';*/
/*     {% else %}*/
/*     {% for module in extension.module %}*/
/*       html += '      <option value="{{ module.code }}">{{ module.name|escape('js') }}</option>';*/
/*     {% endfor %}*/
/*     {% endif %}*/
/*       html += '    </optgroup>';*/
/*     {% endfor %}*/
/*       html += '  </select>';*/
/*       html += '  <input type="hidden" name="layout_module[' + module_row + '][position]" value="' + type.replace('-', '_') + '" />';*/
/*       html += '  <input type="hidden" name="layout_module[' + module_row + '][sort_order]" value="" />';*/
/*       html += '  <div class="input-group-append"><a href="" data-toggle="tooltip" title="{{ button_edit }}" class="btn btn-primary btn-sm"><i class="fa fa-pencil fa-fw"></i></a><button type="button" onclick="$(\'#module-row' + module_row + '\').remove();" data-toggle="tooltip" title="{{ button_remove }}" class="btn btn-danger btn-sm"><i class="fa fa-minus-circle fa-fw"></i></button></div>';*/
/*       html += '  </div></td>';*/
/*       html += '</tr>';*/
/* */
/*       $('#module-' + type + ' tbody').append(html);*/
/* */
/*       $('#module-' + type + ' tbody select[name=\'layout_module[' + module_row + '][code]\']').val($('#module-' + type + ' tfoot select').val());*/
/* */
/*       $('#module-' + type + ' select[name*=\'code\']').trigger('change');*/
/* */
/*       $('#module-' + type + ' tbody input[name*=\'sort_order\']').each(function(i, element) {*/
/*           $(element).val(i);*/
/*       });*/
/* */
/* 	  module_row++;*/
/* 	} else {*/
/*       alert('{{ error_module }}');*/
/*     }*/
/* }*/
/* */
/* $('#module-column-left, #module-column-right, #module-content-top, #module-content-bottom').delegate('select[name*=\'code\']', 'change', function() {*/
/* 	var part = this.value.split('.');*/
/* */
/* 	if (!part[1]) {*/
/* 		$(this).parent().find('a').attr('href', 'index.php?route=extension/module/' + part[0] + '&user_token={{ user_token }}');*/
/* 	} else {*/
/* 		$(this).parent().find('a').attr('href', 'index.php?route=extension/module/' + part[0] + '&user_token={{ user_token }}&module_id=' + part[1]);*/
/* 	}*/
/* });*/
/* */
/* $('#module-column-left, #module-column-right, #module-content-top, #module-content-bottom').trigger('change');*/
/* //--></script>*/
/* {{ footer }}*/
