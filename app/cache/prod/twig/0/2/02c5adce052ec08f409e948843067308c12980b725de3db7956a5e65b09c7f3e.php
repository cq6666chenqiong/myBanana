<?php

/* TopxiaWebBundle:CourseTestpaperManage:testpaper-form-base-fields.html.twig */
class __TwigTemplate_02c5adce052ec08f409e948843067308c12980b725de3db7956a5e65b09c7f3e extends Twig_Template
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
        echo "<div class=\"form-group\">
  <div class=\"col-md-2 control-label\"><label for=\"testpaper-name-field\">";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("试卷名称"), "html", null, true);
        echo "</label></div>
  <div class=\"col-md-8 controls\">
      <input class=\"form-control\"  value=\"";
        // line 4
        if ((($this->getAttribute((isset($context["testpaper"]) ? $context["testpaper"] : null), "name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["testpaper"]) ? $context["testpaper"] : null), "name", array()), null)) : (null))) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["testpaper"]) ? $context["testpaper"] : null), "name", array()), "html", null, true);
        }
        echo "\" name=\"name\"   id=\"testpaper-name-field\"/>
  </div>
</div>

<div class=\"form-group\">
  <div class=\"col-md-2 control-label\"><label for=\"testpaper-description-field\">";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("试卷说明"), "html", null, true);
        echo "</label></div>
  <div class=\"col-md-8 controls\">
    <textarea class=\"form-control\" id=\"testpaper-description-field\" name=\"description\" data-image-upload-url=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editor_upload", array("token" => $this->env->getExtension('topxia_web_twig')->makeUpoadToken("course"))), "html", null, true);
        echo "\">";
        if ((($this->getAttribute((isset($context["testpaper"]) ? $context["testpaper"] : null), "description", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["testpaper"]) ? $context["testpaper"] : null), "description", array()), null)) : (null))) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["testpaper"]) ? $context["testpaper"] : null), "description", array()), "html", null, true);
        }
        echo "</textarea>
  </div>
</div>

<div class=\"form-group\">
  <div class=\"col-md-2 control-label\"><label for=\"testpaper-limitedTime-field\">";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("时间限制"), "html", null, true);
        echo "</label></div>
  <div class=\"col-md-8 controls\">
      <input class=\"form-control width-input width-input-large\" name=\"limitedTime\" id=\"testpaper-limitedTime-field\" value=\"";
        // line 18
        if ((($this->getAttribute((isset($context["testpaper"]) ? $context["testpaper"] : null), "limitedTime", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["testpaper"]) ? $context["testpaper"] : null), "limitedTime", array()), null)) : (null))) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["testpaper"]) ? $context["testpaper"] : null), "limitedTime", array()), "html", null, true);
        } else {
            echo "0";
        }
        echo "\" /> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("分钟"), "html", null, true);
        echo "
      <div class=\"help-block\">";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("0分钟，表示无限制"), "html", null, true);
        echo "</div>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:CourseTestpaperManage:testpaper-form-base-fields.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 19,  59 => 18,  54 => 16,  42 => 11,  37 => 9,  27 => 4,  22 => 2,  19 => 1,);
    }
}
