<?php

/* TopxiaWebBundle:CourseStudentManage:create-modal.html.twig */
class __TwigTemplate_3a48cacaa795e102eb7b902ec6980937ca37fb9db1fa131b7b1f1dbd15b5b109 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::bootstrap-modal-layout.html.twig", "TopxiaWebBundle:CourseStudentManage:create-modal.html.twig", 1);
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
        $context["modalSize"] = "large";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("添加"), "html", null, true);
        if ($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name")) {
            echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name"), $this->env->getExtension('translator')->trans("学员")), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("学员"), "html", null, true);
        }
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "
<form id=\"student-create-form\" class=\"form-horizontal\" method=\"post\" action=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_student_create", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
        echo "\">
  ";
        // line 9
        if (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "status", array()) == "published")) {
            // line 10
            echo "  \t<div class=\"row form-group\">
      <div class=\"col-md-2 control-label\">
        <label for=\"student-nickname\">";
            // line 12
            if ($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name")) {
                echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name"), $this->env->getExtension('translator')->trans("学员")), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("学员"), "html", null, true);
            }
            echo "</label>
      </div>
      <div class=\"col-md-7 controls\">
        <input type=\"text\" id=\"student-nickname\" name=\"queryfield\" class=\"form-control\"
        data-url=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_student_check", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
            echo "\" placeholder='";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("邮箱/手机/用户名"), "html", null, true);
            echo "' >
      \t<div class=\"help-block\">";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("只能添加系统中已注册的用户"), "html", null, true);
            echo "</div>
    \t</div>
    </div>

    <div class=\"row form-group\" style=\"display: none\">
      <div class=\"col-md-2 control-label\">
        <label for=\"buy-price\">";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("购买价格"), "html", null, true);
            echo "</label>
      </div>
      <div class=\"col-md-7 controls\">
        <input type=\"text\" id=\"buy-price\" name=\"price\" value=\"0\" class=\"form-control\">
        <div class=\"help-block\">";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("本课程的价格为"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "price", array()), "html", null, true);
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("元"), "html", null, true);
            echo "</div>
      </div>
    </div>

    <div class=\"row form-group\" style=\"display: none\">
      <div class=\"col-md-2 control-label\">
        <label for=\"student-remark\">";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("备注"), "html", null, true);
            echo "</label>
      </div>
      <div class=\"col-md-7 controls\">
        <input type=\"text\" id=\"student-remark\" name=\"remark\" class=\"form-control\">
        <div class=\"help-block\">";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("选填"), "html", null, true);
            echo "</div>
      </div>
    </div>

  ";
        } else {
            // line 42
            echo "    <div class=\"empty\">";
            echo $this->env->getExtension('topxia_web_twig')->getDictText("courseStatus", $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "status", array()));
            echo "课程不能添加";
            if ($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name")) {
                echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name"), "学员"), "html", null, true);
            } else {
                echo "学员";
            }
            echo "，请课程发布后再添加。</div>
  ";
        }
        // line 44
        echo "
  <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">

</form>

";
    }

    // line 51
    public function block_footer($context, array $blocks = array())
    {
        // line 52
        echo "  ";
        if (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "status", array()) == "published")) {
            // line 53
            echo "    <button id=\"student-create-form-submit\" type=\"submit\" class=\"btn btn-primary pull-right\" data-toggle=\"form-submit\" data-target=\"#student-create-form\" data-submiting-text=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("正在保存"), "html", null, true);
            echo "...\" data-user=\"";
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["default"]) ? $context["default"] : null), "user_name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["default"]) ? $context["default"] : null), "user_name", array()), $this->env->getExtension('translator')->trans("学员"))) : ($this->env->getExtension('translator')->trans("学员"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("保存"), "html", null, true);
            echo "</button>
  ";
        }
        // line 55
        echo "  <button type=\"button\" class=\"btn btn-link pull-right\" data-dismiss=\"modal\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("取消"), "html", null, true);
        echo "</button>
  <script>app.load('course-manage/student-create')</script>
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:CourseStudentManage:create-modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 55,  149 => 53,  146 => 52,  143 => 51,  134 => 45,  131 => 44,  119 => 42,  111 => 37,  104 => 33,  93 => 27,  86 => 23,  77 => 17,  71 => 16,  60 => 12,  56 => 10,  54 => 9,  50 => 8,  47 => 7,  44 => 6,  33 => 5,  29 => 1,  27 => 3,  11 => 1,);
    }
}
