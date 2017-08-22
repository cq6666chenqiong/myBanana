<?php

/* TopxiaWebBundle:CourseTestpaperManage:tr.html.twig */
class __TwigTemplate_7e729e9aaf5ca55ae6ee5941ce79d0134163daa0fec024c6b8380ca4c5b023b7 extends Twig_Template
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
        $context["macro"] = $this->loadTemplate("TopxiaWebBundle::macro.html.twig", "TopxiaWebBundle:CourseTestpaperManage:tr.html.twig", 1);
        // line 2
        echo "<tr data-role='item'>
    <td><input value=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["testpaper"]) ? $context["testpaper"] : null), "id", array()), "html", null, true);
        echo "\" type=\"checkbox\" data-role=\"batch-item\" ></td>
    <td>
      <a href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_preview_test", array("testId" => $this->getAttribute((isset($context["testpaper"]) ? $context["testpaper"] : null), "id", array()))), "html", null, true);
        echo "\" target=\"_blank\">";
        echo $this->env->getExtension('topxia_web_twig')->plainTextFilter($this->getAttribute((isset($context["testpaper"]) ? $context["testpaper"] : null), "name", array()), 40);
        echo "</a>
    </td>
    <td>
      ";
        // line 8
        if (($this->getAttribute((isset($context["testpaper"]) ? $context["testpaper"] : null), "status", array()) == "draft")) {
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("草稿"), "html", null, true);
        }
        // line 9
        echo "      ";
        if (($this->getAttribute((isset($context["testpaper"]) ? $context["testpaper"] : null), "status", array()) == "open")) {
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("已发布"), "html", null, true);
        }
        // line 10
        echo "      ";
        if (($this->getAttribute((isset($context["testpaper"]) ? $context["testpaper"] : null), "status", array()) == "closed")) {
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("已关闭"), "html", null, true);
        }
        // line 11
        echo "    </td>
    <td>
      ";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["testpaper"]) ? $context["testpaper"] : null), "itemCount", array()), "html", null, true);
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("题"), "html", null, true);
        echo " <span class=\"text-muted\">/</span> ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["testpaper"]) ? $context["testpaper"] : null), "score", array()), "html", null, true);
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("分"), "html", null, true);
        echo "
      ";
        // line 14
        if (($this->getAttribute((isset($context["testpaper"]) ? $context["testpaper"] : null), "passedScore", array()) > 0)) {
            // line 15
            echo "        <div class=\"text-muted\"><small>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("及格："), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["testpaper"]) ? $context["testpaper"] : null), "passedScore", array()), "html", null, true);
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("分"), "html", null, true);
            echo "</small></div>
      ";
        }
        // line 17
        echo "    </td>
    <td>
      ";
        // line 19
        if (($this->getAttribute((isset($context["testpaper"]) ? $context["testpaper"] : null), "limitedTime", array()) > 0)) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["testpaper"]) ? $context["testpaper"] : null), "limitedTime", array()), "html", null, true);
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("分钟"), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("无限制"), "html", null, true);
        }
        // line 20
        echo "    </td>
    <td>
      ";
        // line 22
        echo $context["macro"]->getuser_link((isset($context["user"]) ? $context["user"] : null));
        echo "
      <br />
      <span class=\"text-muted text-sm\">";
        // line 24
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["testpaper"]) ? $context["testpaper"] : null), "updatedTime", array()), "Y-n-d H:i:s"), "html", null, true);
        echo "</span>
    </td>
    <td>
        <div class=\"btn-group\">
          <a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_preview_test", array("testId" => $this->getAttribute((isset($context["testpaper"]) ? $context["testpaper"] : null), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default btn-sm\" target=\"_blank\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("预览"), "html", null, true);
        echo "</a>

          <a href=\"#\" type=\"button\" class=\"btn btn-default btn-sm dropdown-toggle\" data-toggle=\"dropdown\">
              <span class=\"caret\"></span>
          </a>

          <ul class=\"dropdown-menu pull-right\">
            ";
        // line 35
        if (twig_in_filter($this->getAttribute((isset($context["testpaper"]) ? $context["testpaper"] : null), "status", array()), array(0 => "draft", 1 => "closed"))) {
            // line 36
            echo "              <li><a class=\"open-testpaper\" href=\"javascript:\" title=\"发布试卷";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["testpaper"]) ? $context["testpaper"] : null), "name", array()), "html", null, true);
            echo "\" data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_testpaper_publish", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "id" => $this->getAttribute((isset($context["testpaper"]) ? $context["testpaper"] : null), "id", array()))), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-ok\"></span> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("发布试卷"), "html", null, true);
            echo "</a></li>
            ";
        }
        // line 38
        echo "            ";
        if (($this->getAttribute((isset($context["testpaper"]) ? $context["testpaper"] : null), "status", array()) == "open")) {
            // line 39
            echo "              <li><a class=\"close-testpaper\" href=\"javascript:\" title=\"关闭试卷";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["testpaper"]) ? $context["testpaper"] : null), "name", array()), "html", null, true);
            echo "\" data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_testpaper_close", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "id" => $this->getAttribute((isset($context["testpaper"]) ? $context["testpaper"] : null), "id", array()))), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-list\"></span> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("关闭试卷"), "html", null, true);
            echo "</a></li>
            ";
        }
        // line 41
        echo "
            ";
        // line 42
        if (($this->getAttribute((isset($context["testpaper"]) ? $context["testpaper"] : null), "status", array()) == "draft")) {
            // line 43
            echo "              <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_testpaper_update", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "id" => $this->getAttribute((isset($context["testpaper"]) ? $context["testpaper"] : null), "id", array()))), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-edit\"></span> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("编辑试卷信息"), "html", null, true);
            echo "</a></li>
              <li><a href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_testpaper_items", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "testpaperId" => $this->getAttribute((isset($context["testpaper"]) ? $context["testpaper"] : null), "id", array()))), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-list\"></span> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("管理题目"), "html", null, true);
            echo "</a></li>
              <li><a href=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_testpaper_items_reset", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "testpaperId" => $this->getAttribute((isset($context["testpaper"]) ? $context["testpaper"] : null), "id", array()))), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-repeat\"></span> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("重新生成题目"), "html", null, true);
            echo "</a></li>
              <li><a href=\"javascript:\" data-name='";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("试卷"), "html", null, true);
            echo "' data-role='item-delete' data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_testpaper_delete", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "testpaperId" => $this->getAttribute((isset($context["testpaper"]) ? $context["testpaper"] : null), "id", array()))), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-remove-circle\"></span> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("删除试卷"), "html", null, true);
            echo "</a></li>
            ";
        }
        // line 48
        echo "          </ul>
        </div>
    </td>
</tr>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:CourseTestpaperManage:tr.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 48,  161 => 46,  155 => 45,  149 => 44,  142 => 43,  140 => 42,  137 => 41,  127 => 39,  124 => 38,  114 => 36,  112 => 35,  100 => 28,  93 => 24,  88 => 22,  84 => 20,  77 => 19,  73 => 17,  65 => 15,  63 => 14,  55 => 13,  51 => 11,  46 => 10,  41 => 9,  37 => 8,  29 => 5,  24 => 3,  21 => 2,  19 => 1,);
    }
}
