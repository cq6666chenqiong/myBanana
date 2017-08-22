<?php

/* TopxiaWebBundle:CourseLessonManage:index.html.twig */
class __TwigTemplate_c64bae364bfaebcc4b9753ea857a856580bf0aca849ffafbfe9c9d33cabeed68 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle:CourseManage:layout.html.twig", "TopxiaWebBundle:CourseLessonManage:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle:CourseManage:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 5
        $context["side_nav"] = "lesson";
        // line 6
        $context["script_controller"] = "course-manage/lesson";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("课时管理"), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 8
    public function block_main($context, array $blocks = array())
    {
        // line 9
        echo "
<div class=\"panel panel-default panel-col lesson-manage-panel\"
\tdata-file-status-url=";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_lesson_file_status", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
        echo ">
\t<div class=\"panel-heading\">
\t\t<div class=\"pull-right\">

\t\t\t<button class=\"btn btn-info btn-sm\" id=\"lesson-create-btn\" data-toggle=\"modal\" data-target=\"#modal\" data-backdrop=\"static\" data-keyboard=\"false\" data-url=\"";
        // line 15
        if (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "type", array()) == "normal")) {
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_lesson_create", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("live_course_manage_lesson_create", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
        }
        echo "\"><i class=\"glyphicon glyphicon-plus\"></i> ";
        if (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "type", array()) == "normal")) {
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("课时"), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("直播课时"), "html", null, true);
        }
        echo "</button>

\t\t\t";
        // line 17
        if ((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "type", array()) == "normal") || ($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "type", array()) == "live"))) {
            // line 18
            echo "\t\t\t\t<button class=\"btn btn-info btn-sm\" id=\"lesson-create-btn\" data-toggle=\"modal\" data-target=\"#modal\" data-backdrop=\"static\" data-keyboard=\"false\" data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_lesson_create_testpaper", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
            echo "\"><i class=\"glyphicon glyphicon-plus\"></i> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("试卷"), "html", null, true);
            echo "</button>
\t\t\t";
        }
        // line 36
        echo "\t";
        // line 37
        echo "\t</div>

\t";
        // line 39
        if (twig_test_empty((isset($context["items"]) ? $context["items"] : null))) {
            // line 40
            echo "
\t <div class=\"empty\">";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("暂无课时内容！"), "html", null, true);
            echo "</div>

\t ";
        }
        // line 44
        echo "
\t<div class=\"panel-body\">
\t\t<ul class=\"lesson-list sortable-list\" id=\"course-item-list\" data-sort-url=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_lesson_sort", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
        echo "\">
\t\t\t";
        // line 47
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["id"] => $context["item"]) {
            // line 48
            echo "\t\t\t  ";
            if (twig_in_filter("chapter", $context["id"])) {
                // line 49
                echo "\t\t\t    ";
                $this->loadTemplate("TopxiaWebBundle:CourseChapterManage:list-item.html.twig", "TopxiaWebBundle:CourseLessonManage:index.html.twig", 49)->display(array_merge($context, array("chapter" => $context["item"])));
                // line 50
                echo "\t\t\t  ";
            } elseif (twig_in_filter("lesson", $context["id"])) {
                // line 51
                echo "\t\t\t  \t";
                $this->loadTemplate("TopxiaWebBundle:CourseLessonManage:list-item.html.twig", "TopxiaWebBundle:CourseLessonManage:index.html.twig", 51)->display(array_merge($context, array("lesson" => $context["item"], "file" => (($this->getAttribute((isset($context["files"]) ? $context["files"] : null), $this->getAttribute($context["item"], "mediaId", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["files"]) ? $context["files"] : null), $this->getAttribute($context["item"], "mediaId", array()), array(), "array"), null)) : (null)))));
                // line 52
                echo "\t\t\t  ";
                // line 56
                echo "\t\t\t  ";
            }
            // line 57
            echo "\t\t\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['id'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "
\t\t</ul>
\t</div>
</div>

";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:CourseLessonManage:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 58,  140 => 57,  137 => 56,  135 => 52,  132 => 51,  129 => 50,  126 => 49,  123 => 48,  106 => 47,  102 => 46,  98 => 44,  92 => 41,  89 => 40,  87 => 39,  83 => 37,  81 => 36,  73 => 18,  71 => 17,  56 => 15,  49 => 11,  45 => 9,  42 => 8,  34 => 3,  30 => 1,  28 => 6,  26 => 5,  11 => 1,);
    }
}
