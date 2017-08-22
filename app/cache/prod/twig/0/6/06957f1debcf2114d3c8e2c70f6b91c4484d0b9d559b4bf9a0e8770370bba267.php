<?php

/* TopxiaWebBundle:LessonLessonPlugin:list.html.twig */
class __TwigTemplate_06957f1debcf2114d3c8e2c70f6b91c4484d0b9d559b4bf9a0e8770370bba267 extends Twig_Template
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
        echo "<div class=\"course-item-list-in-toolbar-pane\">
  ";
        // line 2
        $this->loadTemplate("TopxiaWebBundle:CourseLesson/Widget:list.html.twig", "TopxiaWebBundle:LessonLessonPlugin:list.html.twig", 2)->display(array_merge($context, array("fromPlugin" => true)));
        // line 3
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:LessonLessonPlugin:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 3,  22 => 2,  19 => 1,);
    }
}
