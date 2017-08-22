<?php

/* TopxiaWebBundle:CourseLesson/Part:lesson.html.twig */
class __TwigTemplate_f7f3e9b516efc91c79bd8a8c13ff1af12ee4ddb6bda7da0a273c6370fb9bc38c extends Twig_Template
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
        if ((isset($context["member"]) ? $context["member"] : null)) {
            // line 2
            echo "  ";
            $context["lessonUrl"] = (($this->env->getExtension('routing')->getPath("course_learn", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "lessonId" => $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "id", array()))) . "#lesson/") . $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "id", array()));
        } else {
            // line 4
            echo "  ";
            $context["lessonUrl"] = (((isset($context["previewUrl"]) ? $context["previewUrl"] : null) . "?lessonId=") . $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "id", array()));
        }
        // line 6
        echo "<li class=\"period lesson-item lesson-item-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "id", array()), "html", null, true);
        echo "\" data-id=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "id", array()), "html", null, true);
        echo "\" data-num=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index", array()), "html", null, true);
        echo "\">
  ";
        // line 7
        if (($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "status", array()) == "published")) {
            // line 8
            echo "    ";
            if (((($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "free", array()) || (isset($context["member"]) ? $context["member"] : null)) || $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "buyable", array())) || $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "tryLookable", array()))) {
                // line 9
                echo "      <a ";
                if ((isset($context["member"]) ? $context["member"] : null)) {
                    echo "href=\"";
                    echo twig_escape_filter($this->env, (isset($context["lessonUrl"]) ? $context["lessonUrl"] : null), "html", null, true);
                    echo "\" ";
                } else {
                    echo "href=\"#modal\" data-toggle=\"modal\" data-url=\"";
                    echo twig_escape_filter($this->env, (isset($context["lessonUrl"]) ? $context["lessonUrl"] : null), "html", null, true);
                    echo "\"";
                }
                // line 10
                echo "      title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "title", array()), "html", null, true);
                echo "\">
      ";
                // line 11
                $this->loadTemplate("TopxiaWebBundle:CourseLesson/Part:status-ball.html.twig", "TopxiaWebBundle:CourseLesson/Part:lesson.html.twig", 11)->display($context);
                // line 12
                echo "      <span class=\"title\">  ";
                if (_twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("course.custom_chapter_enabled"), true)) {
                    echo " 课时";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "number", array()), "html", null, true);
                    echo "：";
                }
                echo $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "title", array());
                echo "</span>
      ";
                // line 13
                $this->loadTemplate("TopxiaWebBundle:CourseLesson/Part:micro-tips.html.twig", "TopxiaWebBundle:CourseLesson/Part:lesson.html.twig", 13)->display($context);
                // line 14
                echo "      </a>
    ";
            } else {
                // line 16
                echo "      ";
                $this->loadTemplate("TopxiaWebBundle:CourseLesson/Part:status-ball.html.twig", "TopxiaWebBundle:CourseLesson/Part:lesson.html.twig", 16)->display($context);
                // line 17
                echo "      <span class=\"title\">  ";
                if (_twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("course.custom_chapter_enabled"), true)) {
                    echo " 课时";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "number", array()), "html", null, true);
                    echo "：";
                }
                echo $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "title", array());
                echo "</span>
      ";
                // line 18
                $this->loadTemplate("TopxiaWebBundle:CourseLesson/Part:micro-tips.html.twig", "TopxiaWebBundle:CourseLesson/Part:lesson.html.twig", 18)->display($context);
                // line 19
                echo "    ";
            }
            // line 20
            echo "  ";
        } else {
            // line 21
            echo "    ";
            $this->loadTemplate("TopxiaWebBundle:CourseLesson/Part:status-ball.html.twig", "TopxiaWebBundle:CourseLesson/Part:lesson.html.twig", 21)->display($context);
            // line 22
            echo "    <span class=\"title\">";
            if (_twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("course.custom_chapter_enabled"), true)) {
                echo " 课时";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "number", array()), "html", null, true);
                echo "：";
            }
            echo $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "title", array());
            echo "</span>
    ";
            // line 23
            $this->loadTemplate("TopxiaWebBundle:CourseLesson/Part:micro-tips.html.twig", "TopxiaWebBundle:CourseLesson/Part:lesson.html.twig", 23)->display($context);
            // line 24
            echo "  ";
        }
        // line 25
        echo "</li>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:CourseLesson/Part:lesson.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 25,  113 => 24,  111 => 23,  101 => 22,  98 => 21,  95 => 20,  92 => 19,  90 => 18,  80 => 17,  77 => 16,  73 => 14,  71 => 13,  61 => 12,  59 => 11,  54 => 10,  43 => 9,  40 => 8,  38 => 7,  29 => 6,  25 => 4,  21 => 2,  19 => 1,);
    }
}
