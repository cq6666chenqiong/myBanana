<?php

/* TopxiaWebBundle:LessonQuestionPlugin:form.html.twig */
class __TwigTemplate_948293d2b629fc15c862f62f8890ae0d100ba66d07c3a917c0d8bb666b61f6e6 extends Twig_Template
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
        echo "<form id=\"lesson-question-plugin-form\" method=\"post\" action=\"";
        echo $this->env->getExtension('routing')->getPath("course_lesson_plugin_question_create");
        echo "\">

\t<div class=\"form-group\">
\t\t<div class=\"controls\">
\t    ";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "title", array()), 'widget', array("attr" => array("class" => "form-control expand-form-trigger", "placeholder" => $this->env->getExtension('translator')->trans("我要提问"), "data-display" => $this->env->getExtension('translator')->trans("标题"))));
        echo "
    </div>
\t</div>

\t<div class=\"form-group detail-form-group hide\">
\t\t<div class=\"controls\">
\t    ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "content", array()), 'widget', array("attr" => array("class" => "form-control", "rows" => 5, "placeholder" => $this->env->getExtension('translator')->trans("详细描述你的问题"), "data-image-upload-url" => $this->env->getExtension('routing')->getPath("editor_upload", array("token" => $this->env->getExtension('topxia_web_twig')->makeUpoadToken("course"))))));
        echo "
\t  </div>
\t</div>

\t<div class=\"form-group detail-form-group hide\">
\t\t<div class=\"controls clearfix\">
\t\t\t<button class=\"btn btn-primary btn-sm pull-right\" type=\"submit\">";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("提问"), "html", null, true);
        echo "</button>
\t\t\t<button class=\"btn btn-link btn-sm collapse-form-btn pull-right\" type=\"button\">";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("取消"), "html", null, true);
        echo "</button>
\t\t</div>
\t</div>

  ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'rest');
        echo "
  <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">
</form>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:LessonQuestionPlugin:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 23,  56 => 22,  49 => 18,  45 => 17,  36 => 11,  27 => 5,  19 => 1,);
    }
}
