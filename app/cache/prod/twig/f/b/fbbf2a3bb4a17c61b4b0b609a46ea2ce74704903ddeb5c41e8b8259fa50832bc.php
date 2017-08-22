<?php

/* TopxiaWebBundle:CourseTestpaperManage:create.html.twig */
class __TwigTemplate_fbbf2a3bb4a17c61b4b0b609a46ea2ce74704903ddeb5c41e8b8259fa50832bc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle:CourseManage:layout.html.twig", "TopxiaWebBundle:CourseTestpaperManage:create.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle:CourseManage:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["macro"] = $this->loadTemplate("TopxiaWebBundle::macro.html.twig", "TopxiaWebBundle:CourseTestpaperManage:create.html.twig", 2);
        // line 6
        $context["side_nav"] = "testpaper";
        // line 7
        $context["script_controller"] = "testpaper/testpaper-form";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("创建试卷"), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 9
    public function block_main($context, array $blocks = array())
    {
        // line 10
        echo "
<div class=\"panel panel-default panel-col test-creator\">
  <div class=\"panel-heading clearfix\">";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("创建试卷"), "html", null, true);
        echo "</div>

  <div class=\"panel-body\">

    <ol class=\"breadcrumb\">
      <li><a href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_testpaper", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("试卷管理"), "html", null, true);
        echo "</a></li>
      <li class=\"active\">";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("创建试卷"), "html", null, true);
        echo "</li>
    </ol>

    <form id=\"testpaper-form\" class=\"form-horizontal\" method=\"post\" data-build-check-url=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_testpaper_build_check", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
        echo "\" data-auto-submit=\"false\" data-have-base-fields=\"true\" data-have-build-fields=\"true\" data-course-id=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "html", null, true);
        echo "\">
      ";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "flash_messages", array(), "method"), "html", null, true);
        echo "

      ";
        // line 24
        $this->loadTemplate("TopxiaWebBundle:CourseTestpaperManage:testpaper-form-base-fields.html.twig", "TopxiaWebBundle:CourseTestpaperManage:create.html.twig", 24)->display($context);
        // line 25
        echo "      ";
        $this->loadTemplate("TopxiaWebBundle:CourseTestpaperManage:testpaper-form-build-fields.html.twig", "TopxiaWebBundle:CourseTestpaperManage:create.html.twig", 25)->display($context);
        // line 26
        echo "
      <div class=\"form-group mbm\">
        <div class=\"col-md-8 col-md-offset-2 controls\">
          <button id=\"testpaper-create-btn\" data-submiting-text=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("正在提交"), "html", null, true);
        echo "\" type=\"submit\" class=\"btn btn-primary\" >";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("保存，下一步"), "html", null, true);
        echo "</button>
          <a href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_testpaper", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-link  \">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("返回"), "html", null, true);
        echo "</a>
        </div>
      </div>

    </form>

  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:CourseTestpaperManage:create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 30,  92 => 29,  87 => 26,  84 => 25,  82 => 24,  77 => 22,  71 => 21,  65 => 18,  59 => 17,  51 => 12,  47 => 10,  44 => 9,  36 => 4,  32 => 1,  30 => 7,  28 => 6,  26 => 2,  11 => 1,);
    }
}
