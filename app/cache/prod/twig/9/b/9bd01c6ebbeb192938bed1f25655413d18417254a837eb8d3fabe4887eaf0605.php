<?php

/* TopxiaWebBundle:CourseQuestionManage:question-tr.html.twig */
class __TwigTemplate_9bd01c6ebbeb192938bed1f25655413d18417254a837eb8d3fabe4887eaf0605 extends Twig_Template
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
        echo "<tr data-role='item'>
  <td><input value=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : null), "id", array()), "html", null, true);
        echo "\" type=\"checkbox\"  autocomplete=\"off\" data-role=\"batch-item\" ></td>
  <td>
    <a href=\"#modal\" data-toggle=\"modal\" data-url=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_question_preview", array("id" => $this->getAttribute((isset($context["question"]) ? $context["question"] : null), "id", array()), "courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
        echo "\">
      ";
        // line 5
        if ($this->getAttribute((isset($context["question"]) ? $context["question"] : null), "includeImg", array())) {
            echo "<span class=\"glyphicon glyphicon-picture\"></span>";
        }
        // line 6
        echo "      ";
        echo $this->env->getExtension('topxia_web_twig')->plainTextFilter($this->env->getExtension('topxia_web_twig')->fillQuestionStemTextFilter($this->getAttribute((isset($context["question"]) ? $context["question"] : null), "stem", array())), 40);
        echo "
    </a>
    <div>
      ";
        // line 9
        $context["target"] = (($this->getAttribute((isset($context["targets"]) ? $context["targets"] : null), $this->getAttribute((isset($context["question"]) ? $context["question"] : null), "target", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["targets"]) ? $context["targets"] : null), $this->getAttribute((isset($context["question"]) ? $context["question"] : null), "target", array()), array(), "array"), null)) : (null));
        // line 10
        echo "      ";
        if (((($this->getAttribute((isset($context["target"]) ? $context["target"] : null), "type", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["target"]) ? $context["target"] : null), "type", array()), null)) : (null)) != "course")) {
            // line 11
            echo "        <small class=\"text-muted\">从属于 ";
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["targets"]) ? $context["targets"] : null), $this->getAttribute((isset($context["question"]) ? $context["question"] : null), "target", array()), array(), "array", false, true), "simple_name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["targets"]) ? $context["targets"] : null), $this->getAttribute((isset($context["question"]) ? $context["question"] : null), "target", array()), array(), "array", false, true), "simple_name", array()), "")) : ("")), "html", null, true);
            echo "</small>
      ";
        } else {
            // line 13
            echo "        <small class=\"text-muted\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("从属于 本课程"), "html", null, true);
            echo "</small>
      ";
        }
        // line 15
        echo "      ";
        if (($this->getAttribute((isset($context["question"]) ? $context["question"] : null), "type", array()) == "material")) {
            // line 16
            echo "        ";
            if (($this->getAttribute((isset($context["question"]) ? $context["question"] : null), "subCount", array()) == 0)) {
                // line 17
                echo "          <span class=\"label label-danger\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("未完成"), "html", null, true);
                echo "</span>
        ";
            }
            // line 19
            echo "      ";
        }
        // line 20
        echo "    </div>

  </td>
  <td>
  ";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute($this->env->getExtension('topxia_web_twig')->getDict("questionType"), $this->getAttribute((isset($context["question"]) ? $context["question"] : null), "type", array()), array(), "array"), "html", null, true);
        echo "
  ";
        // line 25
        if (($this->getAttribute((isset($context["question"]) ? $context["question"] : null), "type", array()) == "material")) {
            echo "<br><small class=\"text-muted\">(";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : null), "subCount", array()), "html", null, true);
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("子题"), "html", null, true);
            echo ")</small>";
        }
        // line 26
        echo "  </td>
  <td>
    ";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "user_link", array(0 => $this->getAttribute((isset($context["users"]) ? $context["users"] : null), $this->getAttribute((isset($context["question"]) ? $context["question"] : null), "userId", array()), array(), "array")), "method"), "html", null, true);
        echo "
    <br />
    <span class=\"text-muted text-sm\">";
        // line 30
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : null), "updatedTime", array()), "Y-n-d H:i:s"), "html", null, true);
        echo "</span>
  </td>
  <td>
    <div class=\"btn-group\">
      <a class=\"btn btn-default btn-sm\" data-toggle=\"modal\" data-target=\"#modal\" data-url=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_question_preview", array("id" => $this->getAttribute((isset($context["question"]) ? $context["question"] : null), "id", array()), "courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("预览"), "html", null, true);
        echo "</a>
      <a href=\"#\" type=\"button\" class=\"btn btn-default btn-sm dropdown-toggle\" data-toggle=\"dropdown\"><span class=\"caret\"></span></a>
      <ul class=\"dropdown-menu pull-right\">
        ";
        // line 37
        if (($this->getAttribute((isset($context["question"]) ? $context["question"] : null), "type", array()) == "material")) {
            // line 38
            echo "          <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_question", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "parentId" => $this->getAttribute((isset($context["question"]) ? $context["question"] : null), "id", array()))), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-list\"></span> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("管理子题"), "html", null, true);
            echo "</a></li>
        ";
        }
        // line 40
        echo "        <li><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_question_update", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "id" => $this->getAttribute((isset($context["question"]) ? $context["question"] : null), "id", array()), "goto" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "server", array()), "get", array(0 => "REQUEST_URI"), "method"))), "html", null, true);
        echo "\"><span class=\"glyphicon glyphicon-edit\"></span> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("编辑"), "html", null, true);
        echo "</a></li>
        <li><a href=\"javascript:\" data-name='";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("题目"), "html", null, true);
        if (($this->getAttribute((isset($context["question"]) ? $context["question"] : null), "type", array()) == "material")) {
            echo "(";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("含子题"), "html", null, true);
            echo ")";
        }
        echo "' data-role='item-delete' data-url=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_question_delete", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "id" => $this->getAttribute((isset($context["question"]) ? $context["question"] : null), "id", array()))), "html", null, true);
        echo "\"><span class=\"glyphicon glyphicon-remove-circle\"></span> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("删除"), "html", null, true);
        echo "</a></li>
      </ul>
    </div>
  </td>
</tr>
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:CourseQuestionManage:question-tr.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 41,  125 => 40,  117 => 38,  115 => 37,  107 => 34,  100 => 30,  95 => 28,  91 => 26,  84 => 25,  80 => 24,  74 => 20,  71 => 19,  65 => 17,  62 => 16,  59 => 15,  53 => 13,  47 => 11,  44 => 10,  42 => 9,  35 => 6,  31 => 5,  27 => 4,  22 => 2,  19 => 1,);
    }
}
