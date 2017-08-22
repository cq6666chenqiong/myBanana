<?php

/* TopxiaWebBundle:QuizQuestionTest:do-test-pause-modal.html.twig */
class __TwigTemplate_c7f316c59a931f0758c3a788457065da330740101102487223a9010315c0d0a7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::bootstrap-modal-layout.html.twig", "TopxiaWebBundle:QuizQuestionTest:do-test-pause-modal.html.twig", 1);
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
        $context["modal_class"] = "modal-sm";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("暂停"), "html", null, true);
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "
<div class=\"well well-lg\">
  <div class=\"empty\">";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("考试已暂停，请尽快回来哦~"), "html", null, true);
        echo "
  </div>
</div>


";
    }

    // line 16
    public function block_footer($context, array $blocks = array())
    {
        // line 17
        echo "  <button type=\"button\" class=\"btn btn-info\" data-dismiss=\"modal\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("继续"), "html", null, true);
        echo "</button>

";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:QuizQuestionTest:do-test-pause-modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 17,  56 => 16,  46 => 9,  42 => 7,  39 => 6,  33 => 5,  29 => 1,  27 => 3,  11 => 1,);
    }
}
