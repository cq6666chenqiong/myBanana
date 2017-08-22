<?php

/* TopxiaWebBundle:CourseQuestionManage:question-form-choice.html.twig */
class __TwigTemplate_f821ec0370878f2e19b9facc2686e56689e13e2974c2022328e82b53a84bb88b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle:CourseQuestionManage:question-form-layout.html.twig", "TopxiaWebBundle:CourseQuestionManage:question-form-choice.html.twig", 1);
        $this->blocks = array(
            'question_extra_fields' => array($this, 'block_question_extra_fields'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle:CourseQuestionManage:question-form-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_question_extra_fields($context, array $blocks = array())
    {
        // line 4
        echo "
  <div data-role=\"choices\"></div>
  <div id=\"ckeditor-config\" style=\"display:none;\" data-image-upload-url=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editor_upload", array("token" => $this->env->getExtension('topxia_web_twig')->makeUpoadToken("course"))), "html", null, true);
        echo "\" data-image-download-url=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editor_download", array("token" => $this->env->getExtension('topxia_web_twig')->makeUpoadToken("course"))), "html", null, true);
        echo "\"></div>
  <div class=\"form-group\">
    <div class=\"col-md-2 control-label\"></div>
    <div class=\"col-md-8 controls\">
       <button class=\"btn btn-success btn-sm pull-right\" data-role=\"add-choice\" type=\"button\">";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("新增选项"), "html", null, true);
        echo "</button>
    </div>
  </div>
  <div class=\"form-group\">
    <div class=\"col-md-2 control-label\"><label>";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("不定项选择题"), "html", null, true);
        echo "</label></div>
      <div class=\"col-md-8 controls radios\">
        ";
        // line 16
        echo $this->env->getExtension('topxia_html_twig')->radios("uncertain", array("0" => $this->env->getExtension('translator')->trans("否"), "1" => $this->env->getExtension('translator')->trans("是")), ((((($this->getAttribute((isset($context["question"]) ? $context["question"] : null), "type", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["question"]) ? $context["question"] : null), "type", array()), "choice")) : ("choice")) == "uncertain_choice")) ? (1) : (0)));
        echo "
      </div>
  </div>

  ";
        // line 20
        if ((($this->getAttribute($this->getAttribute((isset($context["question"]) ? $context["question"] : null), "metas", array(), "any", false, true), "choices", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["question"]) ? $context["question"] : null), "metas", array(), "any", false, true), "choices", array()), null)) : (null))) {
            // line 21
            echo "    <script type=\"text/plain\" data-role=\"choices-data\">";
            echo twig_jsonencode_filter($this->getAttribute($this->getAttribute((isset($context["question"]) ? $context["question"] : null), "metas", array()), "choices", array()));
            echo "</script>
    <script type=\"text/plain\" data-role=\"answers-data\">";
            // line 22
            echo twig_jsonencode_filter($this->getAttribute((isset($context["question"]) ? $context["question"] : null), "answer", array()));
            echo "</script>
  ";
        }
        // line 24
        echo "  <script type=\"text/x-handlebars-template\" data-role=\"choice-template\">
    ";
        // line 38
        echo "
      <div class=\"form-group\" data-role=\"choice\">
        <div class=\"col-sm-2 control-label\"><label class=\"choice-label\" for=\"item-input-{{ id }}\">选项{{ code }}</label></div>
        <div class=\"col-sm-8 controls\">
          <textarea class=\"form-control item-input col-md-8\" id=\"item-input-{{ id }}\" name=\"choices[]\" data-display=\"选项内容\" data-image-upload-url=\"{{ imageUploadUrl }}\" data-image-download-url=\"{{ imageDownloadUrl }}\">{{ content }}</textarea>
          <p class=\"mtm\">
            <label><input type=\"checkbox\" class=\"answer-checkbox\" {{#if isAnswer }}checked=\"checked\"{{/if}}> 正确答案</label>
          </p>
        </div>
        <div class=\"col-sm-2\" style=\"padding-left:0;\">
          <a class=\"btn btn-default btn-sm delete-choice mlm\" data-role=\"delete-choice\" href=\"javascript:void(null)\"><i class=\"glyphicon glyphicon-trash\"></i></a>
        </div>
      </div>
    ";
        echo "
  </script>
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:CourseQuestionManage:question-form-choice.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 38,  75 => 24,  70 => 22,  65 => 21,  63 => 20,  56 => 16,  51 => 14,  44 => 10,  35 => 6,  31 => 4,  28 => 3,  11 => 1,);
    }
}
