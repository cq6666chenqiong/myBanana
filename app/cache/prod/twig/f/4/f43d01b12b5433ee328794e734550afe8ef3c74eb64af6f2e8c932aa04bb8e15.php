<?php

/* TopxiaWebBundle:CourseQuestionManage:question-form-fill.html.twig */
class __TwigTemplate_f43d01b12b5433ee328794e734550afe8ef3c74eb64af6f2e8c932aa04bb8e15 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle:CourseQuestionManage:question-form-layout.html.twig", "TopxiaWebBundle:CourseQuestionManage:question-form-fill.html.twig", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle:CourseQuestionManage:question-form-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["question_stem_help"] = $this->env->getExtension('translator')->trans("点击编辑器按钮 <span style=\"color:red\">[ ]</span>  可以插入填空项；也可手工输入，例如“今年是[[2014|马]]年”，回答“2014”或者“马”都算答对");
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:CourseQuestionManage:question-form-fill.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,  24 => 3,  11 => 1,);
    }
}
