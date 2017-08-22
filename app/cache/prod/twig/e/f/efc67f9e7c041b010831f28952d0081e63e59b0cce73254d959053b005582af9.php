<?php

/* TopxiaWebBundle:CourseQuestionManage:question-form-layout.html.twig */
class __TwigTemplate_efc67f9e7c041b010831f28952d0081e63e59b0cce73254d959053b005582af9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle:CourseManage:layout.html.twig", "TopxiaWebBundle:CourseQuestionManage:question-form-layout.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'main' => array($this, 'block_main'),
            'question_extra_fields' => array($this, 'block_question_extra_fields'),
            'question_buttons' => array($this, 'block_question_buttons'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle:CourseManage:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 5
        $context["side_nav"] = "question";
        // line 6
        $context["script_controller"] = "quiz-question/create";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        if ($this->getAttribute((isset($context["question"]) ? $context["question"] : null), "id", array())) {
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("编辑题目"), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("添加题目"), "html", null, true);
        }
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 8
    public function block_main($context, array $blocks = array())
    {
        // line 9
        echo "
";
        // line 10
        $context["parentQuestion"] = ((array_key_exists("parentQuestion", $context)) ? (_twig_default_filter((isset($context["parentQuestion"]) ? $context["parentQuestion"] : null), null)) : (null));
        // line 11
        echo "
<div class=\"panel panel-default panel-col\">
  <div class=\"panel-heading clearfix\">
    ";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("题目管理"), "html", null, true);
        echo "
  </div>
  <div class=\"panel-body\">

    <ol class=\"breadcrumb\">
      <li><a href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_question", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("题目管理"), "html", null, true);
        echo "</a></li>
      ";
        // line 20
        if ((isset($context["parentQuestion"]) ? $context["parentQuestion"] : null)) {
            // line 21
            echo "        <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_question", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "parentId" => $this->getAttribute((isset($context["parentQuestion"]) ? $context["parentQuestion"] : null), "id", array()))), "html", null, true);
            echo "\">";
            echo $this->env->getExtension('topxia_web_twig')->getDictText("questionType", $this->getAttribute((isset($context["parentQuestion"]) ? $context["parentQuestion"] : null), "type", array()));
            echo "</a></li>
      ";
        }
        // line 23
        echo "      <li class=\"active\">";
        if ($this->getAttribute((isset($context["question"]) ? $context["question"] : null), "id", array())) {
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("编辑题目"), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("添加题目"), "html", null, true);
        }
        echo "</li>
    </ol>

    <div id=\"question-creator-widget\">
      <form id=\"question-create-form\" data-role=\"question-form\" class=\"form-horizontal quiz-question\" method=\"post\"
          action=\"";
        // line 28
        if ($this->getAttribute((isset($context["question"]) ? $context["question"] : null), "id", array())) {
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_question_update", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "id" => $this->getAttribute((isset($context["question"]) ? $context["question"] : null), "id", array()), "goto" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "goto"), "method"))), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_question_create", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "type" => $this->getAttribute((isset($context["question"]) ? $context["question"] : null), "type", array()), "parentId" => (($this->getAttribute((isset($context["parentQuestion"]) ? $context["parentQuestion"] : null), "id", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["parentQuestion"]) ? $context["parentQuestion"] : null), "id", array()), 0)) : (0)), "goto" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "goto"), "method"))), "html", null, true);
        }
        echo "\"
          >
        ";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "flash_messages", array(), "method"), "html", null, true);
        echo "

        ";
        // line 32
        if ( !(isset($context["parentQuestion"]) ? $context["parentQuestion"] : null)) {
            // line 33
            echo "        <div class=\"form-group\">
          <div class=\"col-md-2 control-label\"><label>";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("从属"), "html", null, true);
            echo "</label></div>
          <div class=\"col-md-8 controls\">
            <select class=\"form-control width-input width-input-large\" name=\"target\" data-role=\"target\">
              ";
            // line 37
            echo $this->env->getExtension('topxia_html_twig')->selectOptions((isset($context["targetsChoices"]) ? $context["targetsChoices"] : null), (($this->getAttribute((isset($context["question"]) ? $context["question"] : null), "target", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["question"]) ? $context["question"] : null), "target", array()), null)) : (null)));
            echo "
            </select>
            <div class=\"help-block\">";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("可以针对本课程或者某个课时出题"), "html", null, true);
            echo "</div>
          </div>
        </div>
        ";
        }
        // line 43
        echo "
        <div class=\"form-group\">
          <div class=\"col-md-2 control-label\"><label>";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("难度"), "html", null, true);
        echo "</label></div>
          <div class=\"col-md-8 controls radios\">
            ";
        // line 47
        echo $this->env->getExtension('topxia_html_twig')->radios("difficulty", array("simple" => $this->env->getExtension('translator')->trans("简单"), "normal" => $this->env->getExtension('translator')->trans("一般"), "difficulty" => $this->env->getExtension('translator')->trans("困难")), (($this->getAttribute((isset($context["question"]) ? $context["question"] : null), "difficulty", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["question"]) ? $context["question"] : null), "difficulty", array()), "normal")) : ("normal")));
        echo "
          </div>
        </div>

        <div class=\"form-group\">
          <div class=\"col-md-2 control-label\"><label for=\"question-stem-field\">";
        // line 52
        echo twig_escape_filter($this->env, ((array_key_exists("question_stem_label", $context)) ? (_twig_default_filter((isset($context["question_stem_label"]) ? $context["question_stem_label"] : null), $this->env->getExtension('translator')->trans("题干"))) : ($this->env->getExtension('translator')->trans("题干"))), "html", null, true);
        echo "</label></div>
          <div class=\"col-md-8 controls\">
            <textarea class=\"form-control\" id=\"question-stem-field\" data-image-upload-url=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editor_upload", array("token" => $this->env->getExtension('topxia_web_twig')->makeUpoadToken("course"))), "html", null, true);
        echo "\"  data-image-download-url=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editor_download", array("token" => $this->env->getExtension('topxia_web_twig')->makeUpoadToken("course"))), "html", null, true);
        echo "\" name=\"stem\" style=\"height:180px;\">";
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["question"]) ? $context["question"] : null), "stem", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["question"]) ? $context["question"] : null), "stem", array()), "")) : ("")), "html", null, true);
        echo "</textarea>
            ";
        // line 55
        $context["question_stem_help"] = ((array_key_exists("question_stem_help", $context)) ? (_twig_default_filter((isset($context["question_stem_help"]) ? $context["question_stem_help"] : null), "")) : (""));
        // line 56
        echo "            ";
        if ((isset($context["question_stem_help"]) ? $context["question_stem_help"] : null)) {
            echo "<div class=\"help-block\">";
            echo (isset($context["question_stem_help"]) ? $context["question_stem_help"] : null);
            echo "</div>";
        }
        // line 57
        echo "          </div>
        </div>

        ";
        // line 60
        $this->displayBlock('question_extra_fields', $context, $blocks);
        // line 61
        echo "
        <div class=\"form-group\">
          <div class=\"col-md-8 col-md-offset-2 controls \">
              <a href=\"javascript:;\" data-toggle=\"collapse\" data-role=\"advanced-collapse\" data-target=\"#advanced-collapse\" class=\"text-success collapsed\">&raquo; ";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("显示/隐藏 高级选项"), "html", null, true);
        echo " ...</a>
          </div>
        </div>

        <div id=\"advanced-collapse\" class=\"advanced-collapse collapse\">
          <div class=\"form-group\">
            <div class=\"col-md-2 control-label\"><label for=\"question-analysis-field\">";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("解析"), "html", null, true);
        echo "</label></div>
            <div class=\"col-md-8 controls\">
                <textarea class=\"form-control\" id=\"question-analysis-field\" data-image-upload-url=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editor_upload", array("token" => $this->env->getExtension('topxia_web_twig')->makeUpoadToken("course"))), "html", null, true);
        echo "\" name=\"analysis\" data-image-download-url=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editor_download", array("token" => $this->env->getExtension('topxia_web_twig')->makeUpoadToken("course"))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["question"]) ? $context["question"] : null), "analysis", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["question"]) ? $context["question"] : null), "analysis", array()), "")) : ("")), "html", null, true);
        echo "</textarea>
            </div>
          </div>

          <div class=\"form-group\">
            <div class=\"col-md-2 control-label\"><label for=\"question-score-field\">";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("分值"), "html", null, true);
        echo "</label></div>
            <div class=\"col-md-4 controls\">
              <input class=\"form-control\" value=\"";
        // line 79
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["question"]) ? $context["question"] : null), "score", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["question"]) ? $context["question"] : null), "score", array()), 2)) : (2)), "html", null, true);
        echo "\" type=\"text\" id=\"question-score-field\" name=\"score\" />
            </div>
          </div>
        </div>

        <div class=\"form-group\">
          <div class=\"col-md-8 col-md-offset-2 controls\">
            ";
        // line 86
        $this->displayBlock('question_buttons', $context, $blocks);
        // line 92
        echo "            <a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_question", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "parentId" => (($this->getAttribute((isset($context["parentQuestion"]) ? $context["parentQuestion"] : null), "id", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["parentQuestion"]) ? $context["parentQuestion"] : null), "id", array()), 0)) : (0)))), "html", null, true);
        echo "\" class=\"btn btn-link\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("返回"), "html", null, true);
        echo "</a>
          </div>
        </div>

        <input type=\"hidden\" name=\"submission\">
        <input type=\"hidden\" name=\"type\" value=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : null), "type", array()), "html", null, true);
        echo "\">
        <input type=\"hidden\" name=\"parentId\" value=\"";
        // line 98
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["parentQuestion"]) ? $context["parentQuestion"] : null), "id", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["parentQuestion"]) ? $context["parentQuestion"] : null), "id", array()), 0)) : (0)), "html", null, true);
        echo "\">
        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">

      </form>

    </div>

  </div>
</div>


";
    }

    // line 60
    public function block_question_extra_fields($context, array $blocks = array())
    {
    }

    // line 86
    public function block_question_buttons($context, array $blocks = array())
    {
        // line 87
        echo "              ";
        if ( !$this->getAttribute((isset($context["question"]) ? $context["question"] : null), "id", array())) {
            // line 88
            echo "                <button type=\"submit\" data-role=\"submit\" class=\"btn btn-primary submit-btn\" data-submission=\"continue\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("保存并继续添加"), "html", null, true);
            echo "</button>
              ";
        }
        // line 90
        echo "              <button type=\"submit\" data-role=\"submit\" class=\"btn btn-primary submit-btn\" data-submission=\"submit\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("保存"), "html", null, true);
        echo "</button>
            ";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:CourseQuestionManage:question-form-layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  280 => 90,  274 => 88,  271 => 87,  268 => 86,  263 => 60,  248 => 99,  244 => 98,  240 => 97,  229 => 92,  227 => 86,  217 => 79,  212 => 77,  200 => 72,  195 => 70,  186 => 64,  181 => 61,  179 => 60,  174 => 57,  167 => 56,  165 => 55,  157 => 54,  152 => 52,  144 => 47,  139 => 45,  135 => 43,  128 => 39,  123 => 37,  117 => 34,  114 => 33,  112 => 32,  107 => 30,  98 => 28,  85 => 23,  77 => 21,  75 => 20,  69 => 19,  61 => 14,  56 => 11,  54 => 10,  51 => 9,  48 => 8,  36 => 3,  32 => 1,  30 => 6,  28 => 5,  11 => 1,);
    }
}
