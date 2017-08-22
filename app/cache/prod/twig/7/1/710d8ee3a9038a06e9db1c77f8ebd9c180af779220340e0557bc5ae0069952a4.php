<?php

/* ClassroomBundle:ClassroomManage:index.html.twig */
class __TwigTemplate_710d8ee3a9038a06e9db1c77f8ebd9c180af779220340e0557bc5ae0069952a4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ClassroomBundle:ClassroomManage:layout.html.twig", "ClassroomBundle:ClassroomManage:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ClassroomBundle:ClassroomManage:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 5
        $context["side_nav"] = "main";
        // line 6
        $context["script_controller"] = "classroombundle/controller/classroom/index";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "科室管理 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 8
    public function block_main($context, array $blocks = array())
    {
        // line 9
        echo "
";
        // line 10
        $context["unsetted"] = "";
        // line 11
        echo "
<div class=\"panel panel-default panel-col\">
  <div class=\"panel-body\">
    ";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "flash_messages", array(), "method"), "html", null, true);
        echo "
    <div class=\"row\">
      <div class=\"col-md-4\">
        <div class=\"well\">
          <h4>设置</h4>
          <table class=\"table\">
            <tr>
              <td>简介</td>
              ";
        // line 22
        if ( !$this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "about", array())) {
            // line 23
            echo "                <td>
                  <a class=\"btn btn-danger btn-xs pull-right\" href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_manage_set_info", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()))), "html", null, true);
            echo "\">
                    未设置 <i class=\"glyphicon glyphicon-circle-arrow-right\"></i>
                  </a>
                </td>
                ";
            // line 28
            $context["unsetted"] = ((isset($context["unsetted"]) ? $context["unsetted"] : null) . ",简介");
            // line 29
            echo "              ";
        } else {
            // line 30
            echo "                <td>
                  <i class=\"glyphicon glyphicon-ok-sign pull-right text-success\"></i>
                </td>
              ";
        }
        // line 34
        echo "            </tr>
            <tr>
              <td>图片</td>
              ";
        // line 37
        if ( !$this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "smallPicture", array())) {
            // line 38
            echo "                <td>
                  <a class=\"btn btn-danger btn-xs pull-right\" href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_manage_set_picture", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()))), "html", null, true);
            echo "\">
                    未设置 <i class=\"glyphicon glyphicon-circle-arrow-right\"></i>
                  </a>
                </td>
                ";
            // line 43
            $context["unsetted"] = ((isset($context["unsetted"]) ? $context["unsetted"] : null) . ",图片");
            // line 44
            echo "              ";
        } else {
            // line 45
            echo "                <td>
                  <i class=\"glyphicon glyphicon-ok-sign pull-right text-success\"></i>
                </td>
              ";
        }
        // line 49
        echo "            </tr>
            ";
        // line 71
        echo "          </table>
        </div>
      </div>
      <div class=\"col-md-4\">
        <div class=\"well\">
          <h4>课程</h4>
          <table class=\"table\">
            <tr>
              <td>课程数</td>
              <td>
                <a class=\"btn btn-";
        // line 81
        if (($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "courseNum", array()) > 0)) {
            echo "info";
        } else {
            echo "danger";
        }
        echo " btn-xs pull-right\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_manage_courses", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()))), "html", null, true);
        echo "\">
                  ";
        // line 82
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "courseNum", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "courseNum", array()), 0)) : (0)), "html", null, true);
        echo " <i class=\"glyphicon glyphicon-circle-arrow-right\"></i>
                </a>
              </td>
              ";
        // line 85
        if (($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "courseNum", array()) == 0)) {
            // line 86
            echo "                ";
            $context["unsetted"] = ((isset($context["unsetted"]) ? $context["unsetted"] : null) . ",课程");
            // line 87
            echo "              ";
        }
        // line 88
        echo "            </tr>
            <tr>
              <td>课时数</td>
              <td><span class=\"label label-default pull-right\">";
        // line 91
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "lessonNum", array()), "html", null, true);
        echo "</span></td>
            </tr>
          </table>
        </div>
      </div>
      ";
        // line 122
        echo "     ";
        // line 185
        echo "  </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "ClassroomBundle:ClassroomManage:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 185,  168 => 122,  160 => 91,  155 => 88,  152 => 87,  149 => 86,  147 => 85,  141 => 82,  131 => 81,  119 => 71,  116 => 49,  110 => 45,  107 => 44,  105 => 43,  98 => 39,  95 => 38,  93 => 37,  88 => 34,  82 => 30,  79 => 29,  77 => 28,  70 => 24,  67 => 23,  65 => 22,  54 => 14,  49 => 11,  47 => 10,  44 => 9,  41 => 8,  34 => 3,  30 => 1,  28 => 6,  26 => 5,  11 => 1,);
    }
}
