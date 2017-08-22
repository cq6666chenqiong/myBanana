<?php

/* ClassroomBundle:ClassroomAdmin:table-tr.html.twig */
class __TwigTemplate_12ceaa51da9864a0fe346df5aa7ddf9a7bab45edaa2c5a9927f7408c51d3711c extends Twig_Template
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
        $context["admin_macro"] = $this->loadTemplate("TopxiaAdminBundle::macro.html.twig", "ClassroomBundle:ClassroomAdmin:table-tr.html.twig", 1);
        // line 2
        echo "<tr id=\"classroom-table-tr-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()), "html", null, true);
        echo "\">
    <td>";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()), "html", null, true);
        echo "</td>

    <td>
    <strong>  
      <a target=\"_blank\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_manage", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "title", array()), "html", null, true);
        echo "</a>
    </strong>
    <br>
        ";
        // line 16
        echo "    </td>

    <td>
    ";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classroomCoursesNum"]) ? $context["classroomCoursesNum"] : null), $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()), array(), "array"), "html", null, true);
        echo "

    ";
        // line 21
        if (($this->getAttribute((isset($context["classroomCoursesNum"]) ? $context["classroomCoursesNum"] : null), $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()), array(), "array") > 0)) {
            // line 22
            echo "    <strong>  
      <a target=\"_blank\" href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_manage_courses", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()))), "html", null, true);
            echo "\">详情</a>
    </strong>
    ";
        }
        // line 26
        echo "    </td>
     ";
        // line 54
        echo "    <td>
    ";
        // line 55
        if (($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "status", array()) == "published")) {
            // line 56
            echo "    <span style=\"color: #090;\">已发布</span>
    ";
        } elseif (($this->getAttribute(        // line 57
(isset($context["classroom"]) ? $context["classroom"] : null), "status", array()) == "closed")) {
            // line 58
            echo "    
    <span style=\"color: #900;\">已关闭</span>
    ";
        } else {
            // line 61
            echo "    未发布
    ";
        }
        // line 63
        echo "    </td>

    <td>

  <div class=\"btn-group\">

    <button type=\"button\" class=\"btn btn-default btn-sm dropdown-toggle\" data-toggle=\"dropdown\">
      编辑
      <span class=\"caret\"></span>
    </button>

 <ul class=\"dropdown-menu\">
       <li><a href=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_manage", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()))), "html", null, true);
        echo "\" target=\"_blank\"><span class=\"glyphicon glyphicon-edit\"></span> 管理科室";
        echo "</a></li>
        ";
        // line 83
        echo "       ";
        if (($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "status", array()) == "published")) {
            // line 84
            echo "       <li><a href=\"javascript:\" class=\"close-classroom\" title=\"关闭";
            echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), "科室"), "html", null, true);
            echo "(";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "title", array()), "html", null, true);
            echo ")\" data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_classroom_close", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()))), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-off\"></span> 关闭科室";
            echo "</a></li>

     ";
            // line 87
            echo "
       ";
        } else {
            // line 89
            echo "       <li><a href=\"javascript:\" class=\"open-classroom\" title=\"发布";
            echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), "科室"), "html", null, true);
            echo "(";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "title", array()), "html", null, true);
            echo ")\" data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_classroom_open", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()))), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-ok\"></span>发布科室";
            echo "</a></li>

       ";
        }
        // line 92
        echo "
       ";
        // line 93
        if (($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "status", array()) == "draft")) {
            // line 94
            echo "      <li><a href=\"javascript:\" class=\"delete-classroom\" title=\"删除";
            echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), "科室"), "html", null, true);
            echo "(";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "title", array()), "html", null, true);
            echo ")\" data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_classroom_delete", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()))), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-remove\"></span> 删除科室 ";
            echo "</a></li>
      ";
        }
        // line 96
        echo "  </div>
 </td>
</tr>";
    }

    public function getTemplateName()
    {
        return "ClassroomBundle:ClassroomAdmin:table-tr.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 96,  138 => 94,  136 => 93,  133 => 92,  121 => 89,  117 => 87,  106 => 84,  103 => 83,  98 => 75,  84 => 63,  80 => 61,  75 => 58,  73 => 57,  70 => 56,  68 => 55,  65 => 54,  62 => 26,  56 => 23,  53 => 22,  51 => 21,  46 => 19,  41 => 16,  33 => 7,  26 => 3,  21 => 2,  19 => 1,);
    }
}
