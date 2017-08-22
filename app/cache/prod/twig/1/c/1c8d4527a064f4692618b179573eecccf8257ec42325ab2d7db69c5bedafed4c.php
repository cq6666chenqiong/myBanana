<?php

/* TopxiaWebBundle:QuizQuestionTest:question-preview-modal.html.twig */
class __TwigTemplate_1c8d4527a064f4692618b179573eecccf8257ec42325ab2d7db69c5bedafed4c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::bootstrap-modal-layout.html.twig", "TopxiaWebBundle:QuizQuestionTest:question-preview-modal.html.twig", 1);
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
        // line 5
        $context["modal_class"] = "modal-lg";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("题目预览"), "html", null, true);
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "
  ";
        // line 9
        $this->loadTemplate((("TopxiaWebBundle:QuizQuestionTest:do-test-" . (isset($context["type"]) ? $context["type"] : null)) . ".html.twig"), "TopxiaWebBundle:QuizQuestionTest:question-preview-modal.html.twig", 9)->display($context);
        // line 10
        echo "
";
    }

    // line 12
    public function block_footer($context, array $blocks = array())
    {
        // line 13
        echo "  <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("关闭"), "html", null, true);
        echo "</button>
  <script>app.load('quiz-question/preview');</script>
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:QuizQuestionTest:question-preview-modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 13,  52 => 12,  47 => 10,  45 => 9,  42 => 8,  39 => 7,  33 => 3,  29 => 1,  27 => 5,  11 => 1,);
    }
}
