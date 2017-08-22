<?php

/* TopxiaWebBundle:CourseTestpaperManage:testpaper-modal.html.twig */
class __TwigTemplate_e73f89e109fd8bf17a4a549952e67459d0964171961c72deab1bc9585550ac1f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::bootstrap-modal-layout.html.twig", "TopxiaWebBundle:CourseTestpaperManage:testpaper-modal.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle::bootstrap-modal-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["lesson"] = ((array_key_exists("lesson", $context)) ? (_twig_default_filter((isset($context["lesson"]) ? $context["lesson"] : null), null)) : (null));
        // line 4
        $context["modal_class"] = "modal-lg";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        // line 7
        echo "  ";
        if ((isset($context["lesson"]) ? $context["lesson"] : null)) {
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("编辑试卷课时"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "number", array()), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("添加试卷课时"), "html", null, true);
        }
    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        // line 11
        echo "  ";
        if ((isset($context["paperOptions"]) ? $context["paperOptions"] : null)) {
            // line 12
            echo "    <form id=\"course-lesson-form\" class=\"form-horizontal lesson-form\" method=\"post\"  ";
            if (array_key_exists("parentId", $context)) {
                echo "data-parentId=\"";
                echo twig_escape_filter($this->env, (isset($context["parentId"]) ? $context["parentId"] : null), "html", null, true);
                echo "\" ";
            }
            // line 13
            echo "      ";
            if ((isset($context["lesson"]) ? $context["lesson"] : null)) {
                // line 14
                echo "        action=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_lesson_edit_testpaper", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "lessonId" => $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "id", array()))), "html", null, true);
                echo "\"
      ";
            } else {
                // line 16
                echo "        action=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_lesson_create_testpaper", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
                echo "\"
      ";
            }
            // line 18
            echo "      >

      <div class=\"form-group\">
        <div class=\"col-md-2 control-label\"><label for=\"lesson-mediaId-field\">";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("试卷"), "html", null, true);
            echo "</label></div>
        <div class=\"col-md-9 controls\">
          <select id=\"lesson-mediaId-field\" class=\"form-control\" name=\"mediaId\" data-url=\"";
            // line 23
            echo $this->env->getExtension('routing')->getPath("course_manage_real_time_testpaper_check");
            echo "\" data-get-testpaper-items=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_testpaper_items_get", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
            echo "\">
            ";
            // line 24
            echo $this->env->getExtension('topxia_html_twig')->selectOptions((isset($context["paperOptions"]) ? $context["paperOptions"] : null), (($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "mediaId", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "mediaId", array()), 0)) : (0)), $this->env->getExtension('translator')->trans("请选择试卷"));
            echo "
          </select>
          <div class=\"help-block\">";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("如果找不到试卷，请先确定该试卷已经发布"), "html", null, true);
            echo "</div>
        </div>
      </div>

      <div class=\"form-group\" id=\"questionItemShowDiv\" style=\"display:none;\">
        <div class=\"col-md-2 control-label\"></div>
        <div class=\"col-md-9 controls\" id=\"questionItemShowTable\">

        </div>
      </div>

      <div class=\"form-group\">
        <div class=\"col-md-2 control-label\"><label for=\"lesson-title-field\">";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("标题"), "html", null, true);
            echo "</label></div>
        <div class=\"col-md-9 controls\">
          <input id=\"lesson-title-field\" class=\"form-control\" type=\"text\" name=\"title\" value=\"";
            // line 40
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "title", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "title", array()), "")) : ("")), "html", null, true);
            echo "\">
        </div>
      </div>
      ";
            // line 61
            echo "
      ";
            // line 62
            if (twig_in_filter("lesson_credit", (isset($context["features"]) ? $context["features"] : null))) {
                // line 63
                echo "      <div class=\"form-group\">
        <div class=\"col-md-2 control-label\"><label for=\"lesson-title-field\">";
                // line 64
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("限制学分"), "html", null, true);
                echo "</label></div>
        <div class=\"col-md-9 controls\">
          <input class=\"form-control width-input width-input-small\" type=\"text\" name=\"requireCredit\" value=\"";
                // line 66
                echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "requireCredit", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "requireCredit", array()), 0)) : (0)), "html", null, true);
                echo "\"> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("分"), "html", null, true);
                echo "
          <div class=\"help-block\">";
                // line 67
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("参加此次考试所需的学分，０分则不限制。"), "html", null, true);
                echo "</div>
        </div>
      </div>
      ";
            }
            // line 71
            echo "
      <div class=\"form-group\">
        <div class=\"col-md-2 control-label\"><label for=\"lesson-suggest-hour-field\">";
            // line 73
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("学习时长"), "html", null, true);
            echo "</label></div>
        <div class=\"col-md-9 controls\">";
            // line 74
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("建议"), "html", null, true);
            echo "
          <input id=\"lesson-suggest-hour-field\" class=\"form-control width-input width-input-small\" type=\"text\" name=\"suggestHours\" value=\"";
            // line 75
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "suggestHours", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "suggestHours", array()), "0.0")) : ("0.0")), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("小时"), "html", null, true);
            echo "
          <div class=\"help-block\">";
            // line 76
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("（如未设置，则默认完成时长为：客观题每题5分钟、主观题每题30分钟。合计取整）"), "html", null, true);
            echo "
          </div>
        </div>
      </div>

      <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            // line 81
            echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
            echo "\">
    </form>
    <script>app.load('course-manage/lesson-testpaper-modal')</script>

  ";
        } else {
            // line 86
            echo "    <div class=\"empty\">尚未创建试卷，请先<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_testpaper", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
            echo "\">创建试卷</a>。</div>
  ";
        }
        // line 88
        echo "
";
    }

    // line 91
    public function block_footer($context, array $blocks = array())
    {
        // line 92
        echo "  ";
        if ((isset($context["paperOptions"]) ? $context["paperOptions"] : null)) {
            // line 93
            echo "    <button type=\"button\" class=\"btn btn-link\" data-dismiss=\"modal\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("取消"), "html", null, true);
            echo "</button>
    <button id=\"course-testpaper-btn\" data-submiting-text=\"";
            // line 94
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("正在提交"), "html", null, true);
            echo "\" type=\"submit\" class=\"btn btn-primary\" data-toggle=\"form-submit\" data-target=\"#course-lesson-form\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("保存"), "html", null, true);
            echo "</button>
  ";
        } else {
            // line 96
            echo "    <button type=\"button\" class=\"btn btn-link\" data-dismiss=\"modal\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("取消"), "html", null, true);
            echo "</button>
    ";
        }
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:CourseTestpaperManage:testpaper-modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  212 => 96,  205 => 94,  200 => 93,  197 => 92,  194 => 91,  189 => 88,  183 => 86,  175 => 81,  167 => 76,  161 => 75,  157 => 74,  153 => 73,  149 => 71,  142 => 67,  136 => 66,  131 => 64,  128 => 63,  126 => 62,  123 => 61,  117 => 40,  112 => 38,  97 => 26,  92 => 24,  86 => 23,  81 => 21,  76 => 18,  70 => 16,  64 => 14,  61 => 13,  54 => 12,  51 => 11,  48 => 10,  38 => 7,  35 => 6,  31 => 1,  29 => 4,  27 => 3,  11 => 1,);
    }
}
