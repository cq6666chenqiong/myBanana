<?php

/* TopxiaWebBundle:CourseStudentManage:tr.html.twig */
class __TwigTemplate_acc141c9084bdd36e1dcd5997ccfcca74d1384fba2b331065dafe75d95ee3ed5 extends Twig_Template
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
        $context["web_macro"] = $this->loadTemplate("TopxiaWebBundle::macro.html.twig", "TopxiaWebBundle:CourseStudentManage:tr.html.twig", 1);
        // line 2
        echo "<tr id=\"student-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()), "html", null, true);
        echo "-tr\">
  <td class=\"media\" style=\"vertical-align: middle;\">
    ";
        // line 4
        echo $context["web_macro"]->getuser_avatar((isset($context["user"]) ? $context["user"] : null), "pull-left", "avatar-sm");
        echo "
  ";
        // line 6
        echo "    <a >";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "nickname", array()), "html", null, true);
        echo "</a>
      ";
        // line 7
        if ($this->getAttribute((isset($context["student"]) ? $context["student"] : null), "remark", array())) {
            // line 8
            echo "      <span class=\"text-muted text-sm\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["student"]) ? $context["student"] : null), "remark", array()), "html", null, true);
            echo "\">(";
            echo $this->env->getExtension('topxia_web_twig')->plainTextFilter($this->getAttribute((isset($context["student"]) ? $context["student"] : null), "remark", array()), 16);
            echo ")</span>
    ";
        }
        // line 10
        echo "    <div class=\"text-muted text-sm\">";
        echo "加入时间：";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["student"]) ? $context["student"] : null), "createdTime", array()), "Y-n-d H:i"), "html", null, true);
        echo "</div>
    ";
        // line 11
        if ((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "expiryDay", array()) > 0) && ($this->getAttribute((isset($context["student"]) ? $context["student"] : null), "deadline", array()) > 0))) {
            // line 12
            echo "        ";
            // line 13
            echo "      <div class=\"text-muted text-sm\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("有效期至："), "html", null, true);
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["student"]) ? $context["student"] : null), "deadline", array()), "Y-n-d H:i"), "html", null, true);
            echo " </div>
    ";
        }
        // line 15
        echo "  </td>

  <td style=\"vertical-align: middle;\">
    <div class=\"progress mvm\" title=\"已学";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["progress"]) ? $context["progress"] : null), "number", array()), "html", null, true);
        echo "课时\">
      <div class=\"progress-bar\" style=\"width: ";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["progress"]) ? $context["progress"] : null), "percent", array()), "html", null, true);
        echo "\">
      </div>
    </div>
  </td>

  <td style=\"vertical-align: middle;\">
    <div class=\"btn-group\">
      ";
        // line 31
        echo "      ";
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "isAdmin", array(), "method")) {
            // line 32
            echo "        <button class=\"btn btn-default btn-sm\" data-toggle=\"modal\" data-target=\"#modal\" data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_students_show", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "userId" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("查看资料"), "html", null, true);
            echo "</button>
      ";
        } elseif ($this->env->getExtension('topxia_web_twig')->getSetting("course.buy_fill_userinfo")) {
            // line 34
            echo "        <button class=\"btn btn-default btn-sm\" data-toggle=\"modal\" data-target=\"#modal\" data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_students_defined_show", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "userId" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("查看资料"), "html", null, true);
            echo "</button>
      ";
        }
        // line 36
        echo "      <a href=\"#\" type=\"button\" class=\"btn btn-default btn-sm dropdown-toggle\" data-toggle=\"dropdown\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("管理"), "html", null, true);
        echo "
        <span class=\"caret\"></span>
      </a>
      <ul class=\"dropdown-menu pull-right\">
        ";
        // line 53
        echo "        ";
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "isAdmin", array(), "method") || ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "isTeacher", array(), "method") && ((isset($context["isTeacherAuthManageStudent"]) ? $context["isTeacherAuthManageStudent"] : null) == 1)))) {
            // line 54
            echo "          <li><a class=\"student-remove\" href=\"javascript:;\" data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_student_remove", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "userId" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()))), "html", null, true);
            echo "\" data-user=\"";
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["default"]) ? $context["default"] : null), "user_name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["default"]) ? $context["default"] : null), "user_name", array()), $this->env->getExtension('translator')->trans("学员"))) : ($this->env->getExtension('translator')->trans("学员"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("移除"), "html", null, true);
            echo "</a></li>
        ";
        }
        // line 56
        echo "      </ul>
    </div>
  </td>
</tr>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:CourseStudentManage:tr.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 56,  112 => 54,  109 => 53,  101 => 36,  93 => 34,  85 => 32,  82 => 31,  72 => 19,  68 => 18,  63 => 15,  56 => 13,  54 => 12,  52 => 11,  46 => 10,  38 => 8,  36 => 7,  31 => 6,  27 => 4,  21 => 2,  19 => 1,);
    }
}
