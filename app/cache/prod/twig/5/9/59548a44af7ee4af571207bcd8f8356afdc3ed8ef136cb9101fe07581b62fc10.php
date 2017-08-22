<?php

/* TopxiaWebBundle:CourseLessonManage:lesson-modal.html.twig */
class __TwigTemplate_59548a44af7ee4af571207bcd8f8356afdc3ed8ef136cb9101fe07581b62fc10 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::bootstrap-modal-layout.html.twig", "TopxiaWebBundle:CourseLessonManage:lesson-modal.html.twig", 1);
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
        $context["modal_class"] = "modal-lg";
        // line 4
        $context["lesson"] = ((array_key_exists("lesson", $context)) ? (_twig_default_filter((isset($context["lesson"]) ? $context["lesson"] : null), null)) : (null));
        // line 168
        $context["hideFooter"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        // line 8
        echo "  ";
        if ((isset($context["lesson"]) ? $context["lesson"] : null)) {
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("编辑课时"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "number", array()), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("添加课时"), "html", null, true);
        }
    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        // line 12
        echo "
<form id=\"course-lesson-form\" data-course-id=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "html", null, true);
        echo "\" class=\"form-horizontal lesson-form\" method=\"post\" ";
        if (array_key_exists("parentId", $context)) {
            echo "data-parentId=\"";
            echo twig_escape_filter($this->env, (isset($context["parentId"]) ? $context["parentId"] : null), "html", null, true);
            echo "\" ";
        }
        // line 14
        echo "  data-create-draft-url=\"";
        echo $this->env->getExtension('routing')->getPath("course_draft_create");
        echo "\"
  ";
        // line 15
        if ((isset($context["lesson"]) ? $context["lesson"] : null)) {
            // line 16
            echo "    action=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_lesson_edit", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "lessonId" => $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "id", array()))), "html", null, true);
            echo "\" data-lesson-id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "id", array()), "html", null, true);
            echo "\"
  ";
        } else {
            // line 18
            echo "    action=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_lesson_create", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
            echo "\"
  ";
        }
        // line 20
        echo "  >

  ";
        // line 23
        echo "  <div class=\"form-group\" style=\"display:none;\">
    <div class=\"col-md-2 control-label\"><label>";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("类型"), "html", null, true);
        echo "</label></div>
    <div class=\"col-md-9 controls\">
      <div class=\"radios\">
        ";
        // line 27
        echo $this->env->getExtension('topxia_html_twig')->radios("type", $this->env->getExtension('topxia_web_twig')->getDict("lessonType"), _twig_default_filter($this->env->getExtension('topxia_html_twig')->fieldValue((isset($context["lesson"]) ? $context["lesson"] : null), "type"), "video"));
        echo "
      </div>
    </div>
  </div>

  <div class=\"form-group for-text-type for-video-type for-audio-type ";
        // line 32
        if (($this->getAttribute((isset($context["storageSetting"]) ? $context["storageSetting"] : null), "upload_mode", array()) == "cloud")) {
            echo "for-ppt-type for-document-type for-flash-type";
        }
        echo "\" >
    <div class=\"col-md-2 control-label\"><label for=\"lesson-title-field\">";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("标题"), "html", null, true);
        echo "</label></div>
    <div class=\"col-md-9 controls\">
      <div class=\"row\">
        <div class=\"col-md-10\">
          <input id=\"lesson-title-field\" class=\"form-control\" type=\"text\" name=\"title\" value=\"";
        // line 37
        echo $this->env->getExtension('topxia_html_twig')->fieldValue((isset($context["lesson"]) ? $context["lesson"] : null), "title");
        echo "\" >
        </div>
        <div class=\"col-md-2\">
          <div class=\"checkbox\" style=\"display: none\">
            <label><input type=\"checkbox\" name=\"free\" value=\"1\" ";
        // line 41
        if ($this->env->getExtension('topxia_html_twig')->fieldValue((isset($context["lesson"]) ? $context["lesson"] : null), "free")) {
            echo " checked=\"checked\" ";
        }
        echo "> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("课时"), "html", null, true);
        echo "</label>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class=\"form-group for-text-type for-video-type for-audio-type ";
        // line 48
        if (($this->getAttribute((isset($context["storageSetting"]) ? $context["storageSetting"] : null), "upload_mode", array()) == "cloud")) {
            echo "for-ppt-type for-document-type for-flash-type";
        }
        echo "\">
    <div class=\"col-md-2 control-label\"><label for=\"lesson-summary-field\">";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("简介"), "html", null, true);
        echo "</label></div>
    <div class=\"col-md-9 controls\"><textarea class=\"form-control\" id=\"lesson-summary-field\" name=\"summary\" >";
        // line 50
        echo $this->env->getExtension('topxia_html_twig')->fieldValue((isset($context["lesson"]) ? $context["lesson"] : null), "summary");
        echo "</textarea>

    </div>
  </div>

  <div class=\"form-group for-text-type\">



    <div class=\"col-md-2 control-label\"><label for=\"lesson-content-field\" class=\"style1\">";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("内容"), "html", null, true);
        echo "</label></div>
    <div class=\"col-md-9 controls\">

      ";
        // line 62
        if (((array_key_exists("draft", $context)) ? (_twig_default_filter((isset($context["draft"]) ? $context["draft"] : null), false)) : (false))) {
            // line 63
            echo "      <a id =\"see-draft-btn\" class=\"btn btn-link\" data-url=\"";
            echo $this->env->getExtension('routing')->getPath("course_draft_view");
            echo "\" >
        <small>
        ";
            // line 65
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("您有一段自动保存内容，继续编辑请点击"), "html", null, true);
            echo "
        </small>
      </a>
      ";
        }
        // line 69
        echo "
      <textarea class=\"form-control\" id=\"lesson-content-field\" name=\"content\"
      data-image-upload-url=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editor_upload", array("token" => $this->env->getExtension('topxia_web_twig')->makeUpoadToken("course"))), "html", null, true);
        echo "\"
      data-flash-upload-url=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editor_upload", array("token" => $this->env->getExtension('topxia_web_twig')->makeUpoadToken("course", "flash"))), "html", null, true);
        echo "\" data-image-download-url=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editor_download", array("token" => $this->env->getExtension('topxia_web_twig')->makeUpoadToken("course"))), "html", null, true);
        echo "\"
      >";
        // line 73
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "content", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "content", array()), "")) : ("")), "html", null, true);
        echo "</textarea>
    </div>
  </div>

  <div class=\"form-group for-video-type for-audio-type ";
        // line 77
        if (($this->getAttribute((isset($context["storageSetting"]) ? $context["storageSetting"] : null), "upload_mode", array()) == "cloud")) {
            echo "for-ppt-type for-document-type for-flash-type";
        }
        echo " \">
    <div class=\"col-md-2 control-label for-video-type\"><label>";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("上传文件链接"), "html", null, true);
        echo "</label></div>
   ";
        // line 85
        echo "
    <div class=\"col-md-9 controls\">
      ";
        // line 87
        $this->loadTemplate("TopxiaWebBundle:CourseLessonManage:media-choose.html.twig", "TopxiaWebBundle:CourseLessonManage:lesson-modal.html.twig", 87)->display($context);
        // line 88
        echo "      <input id=\"lesson-media-field\" type=\"hidden\" name=\"media\" value=\"";
        echo twig_escape_filter($this->env, twig_jsonencode_filter($this->env->getExtension('topxia_html_twig')->fieldValue((isset($context["lesson"]) ? $context["lesson"] : null), "media")), "html", null, true);
        echo "\">
    </div>

  </div>
";
        // line 120
        echo "  <div class=\"form-group for-video-type for-audio-type\" id=\"lesson-length-form-group\">
      <div class=\"col-md-2 control-label for-video-type\"><label>";
        // line 121
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("视频时长"), "html", null, true);
        echo "</label></div>
      <div class=\"hide\"><label for=\"lesson-length-field\">";
        // line 122
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("视频时长或"), "html", null, true);
        echo "</label></div>
      <div class=\"col-md-2 control-label for-audio-type\"><label for=\"lesson-length-field\">";
        // line 123
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("音频时长"), "html", null, true);
        echo "</label></div>
    <div class=\"col-md-9 controls\">
      <input class=\"form-control width-input width-input-small\" id=\"lesson-minute-field\" type=\"text\" name=\"minute\" value=\"";
        // line 125
        echo $this->env->getExtension('topxia_html_twig')->fieldValue((isset($context["lesson"]) ? $context["lesson"] : null), "minute");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("分"), "html", null, true);
        echo "
      <input class=\"form-control width-input width-input-small\" id=\"lesson-second-field\" type=\"text\" name=\"second\" value=\"";
        // line 126
        echo $this->env->getExtension('topxia_html_twig')->fieldValue((isset($context["lesson"]) ? $context["lesson"] : null), "second");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("秒"), "html", null, true);
        echo "
      <div class=\"help-block\">";
        // line 127
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("时长必须为整数。"), "html", null, true);
        echo "</div>
    </div>
  </div>


  <div class=\"form-group for-text-type for-video-type for-audio-type for-ppt-type\">
    <div class=\"col-md-2 control-label\"><label for=\"lesson-give-credit-field\">";
        // line 133
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("学分"), "html", null, true);
        echo "</label></div>
    <div class=\"col-md-9 controls\">
      <input class=\"form-control width-input width-input-small\" id=\"lesson-give-credit-field\" type=\"text\" name=\"giveCredit\" value=\"";
        // line 135
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "giveCredit", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "giveCredit", array()), 0)) : (0)), "html", null, true);
        echo "\"> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("分"), "html", null, true);
        echo "
      <div class=\"help-block\">";
        // line 136
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("学完此课时，可获得的学分"), "html", null, true);
        echo "</div>
    </div>
  </div>



  <div class=\"form-group\">
    <div class=\"col-md-2 control-label\"><label>";
        // line 143
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("建议学习时长"), "html", null, true);
        echo "</label></div>
    <div class=\"col-md-9 controls\">
      <input class=\"form-control width-input width-input-small\" id=\"lesson-suggest-period-field\" type=\"text\" name=\"suggestHours\" value=\"";
        // line 145
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "suggestHours", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "suggestHours", array()), "1.0")) : ("1.0")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("小时"), "html", null, true);
        echo "
      <span class=\"for-video-type\">";
        // line 146
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("（如未设置，则默认学习时长为视频时长3倍取整。）"), "html", null, true);
        echo "</span>
      <span class=\"for-audio-type\">";
        // line 147
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("（如未设置，则默认学习时长为音频时长3倍取整。）"), "html", null, true);
        echo "</span>
      <span class=\"for-flash-type for-text-type for-ppt-type for-document-type\">";
        // line 148
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("（如未设置，则默认学习时长1小时。）"), "html", null, true);
        echo "</span>
      <div class=\"help-block\"></div>
    </div>
  </div>

  <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 153
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">


</form>


<script>app.load('course-manage/lesson-modal')</script>


";
    }

    // line 163
    public function block_footer($context, array $blocks = array())
    {
        // line 164
        echo "    <button type=\"button\" class=\"btn btn-link\" data-dismiss=\"modal\" id=\"cancel-btn\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("取消"), "html", null, true);
        echo "</button>
    <button id=\"course-lesson-btn\" data-submiting-text=\"";
        // line 165
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("正在提交"), "html", null, true);
        echo "\" type=\"submit\" class=\"btn btn-primary\" data-toggle=\"form-submit\" data-target=\"#course-lesson-form\">";
        if ((isset($context["lesson"]) ? $context["lesson"] : null)) {
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("保存"), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("添加"), "html", null, true);
        }
        echo "</button>
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:CourseLessonManage:lesson-modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  335 => 165,  330 => 164,  327 => 163,  313 => 153,  305 => 148,  301 => 147,  297 => 146,  291 => 145,  286 => 143,  276 => 136,  270 => 135,  265 => 133,  256 => 127,  250 => 126,  244 => 125,  239 => 123,  235 => 122,  231 => 121,  228 => 120,  220 => 88,  218 => 87,  214 => 85,  210 => 78,  204 => 77,  197 => 73,  191 => 72,  187 => 71,  183 => 69,  176 => 65,  170 => 63,  168 => 62,  162 => 59,  150 => 50,  146 => 49,  140 => 48,  126 => 41,  119 => 37,  112 => 33,  106 => 32,  98 => 27,  92 => 24,  89 => 23,  85 => 20,  79 => 18,  71 => 16,  69 => 15,  64 => 14,  56 => 13,  53 => 12,  50 => 11,  40 => 8,  37 => 7,  33 => 1,  31 => 168,  29 => 4,  27 => 3,  11 => 1,);
    }
}
