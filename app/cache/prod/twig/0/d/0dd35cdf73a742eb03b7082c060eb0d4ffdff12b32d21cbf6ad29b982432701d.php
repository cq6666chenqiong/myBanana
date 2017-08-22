<?php

/* TopxiaWebBundle:LessonNotePlugin:form.html.twig */
class __TwigTemplate_0dd35cdf73a742eb03b7082c060eb0d4ffdff12b32d21cbf6ad29b982432701d extends Twig_Template
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
        echo "<form id=\"lesson-note-plugin-form\" method=\"post\" action=\"";
        echo $this->env->getExtension('routing')->getPath("course_lesson_plugin_note_save");
        echo "\">
  <div class=\"form-group note-content\">
    <div class=\"controls\">
      ";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "content", array()), 'widget', array("attr" => array("data-image-upload-url" => $this->env->getExtension('routing')->getPath("editor_upload", array("token" => $this->env->getExtension('topxia_web_twig')->makeUpoadToken("course"))))));
        echo "
    </div>
  </div>

  <div class=\"form-group note-actions\">
    <div class=\"controls clearfix\">
      <span class=\"text-muted\" data-role=\"saved-message\"></span>
      <button id=\"save\" class=\"btn btn-primary btn-xs pull-right\" type=\"submit\">";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("保存笔记"), "html", null, true);
        echo "</button>
      ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'rest');
        echo "
      <label class=\"text-muted\"><input type=\"checkbox\" name=\"status\" ";
        // line 13
        if ((($this->getAttribute((isset($context["note"]) ? $context["note"] : null), "status", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["note"]) ? $context["note"] : null), "status", array()), 1)) : (1))) {
            echo "checked ";
        }
        echo "> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("分享笔记"), "html", null, true);
        echo "</label>
    </div>
  </div>
  <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">
</form>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:LessonNotePlugin:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 16,  44 => 13,  40 => 12,  36 => 11,  26 => 4,  19 => 1,);
    }
}
