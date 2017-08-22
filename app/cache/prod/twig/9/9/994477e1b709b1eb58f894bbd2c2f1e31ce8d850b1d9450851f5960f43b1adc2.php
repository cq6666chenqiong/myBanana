<?php

/* TopxiaWebBundle:LessonMaterialPlugin:index.html.twig */
class __TwigTemplate_994477e1b709b1eb58f894bbd2c2f1e31ce8d850b1d9450851f5960f43b1adc2 extends Twig_Template
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
        $context["web_macro"] = $this->loadTemplate("TopxiaWebBundle::macro.html.twig", "TopxiaWebBundle:LessonMaterialPlugin:index.html.twig", 1);
        // line 2
        echo "
";
        // line 3
        if (($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "type", array()) != "live")) {
            // line 4
            echo "<h5>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("课时简介"), "html", null, true);
            echo "</h5>
<div class=\"lesson-about\">
\t";
            // line 6
            if ($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "summary", array())) {
                // line 7
                echo "    ";
                echo nl2br($this->env->getExtension('topxia_web_twig')->spaceToNbsp($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "summary", array())));
                echo "
\t";
            } else {
                // line 9
                echo "\t  ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("此课时无简介。"), "html", null, true);
                echo "
\t";
            }
            // line 11
            echo "</div>
";
        }
        // line 13
        echo "
";
        // line 14
        if (((twig_in_filter($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "type", array()), array(0 => "video", 1 => "audio")) && $this->env->getExtension('topxia_web_twig')->getSetting("course.student_download_media")) && (isset($context["file"]) ? $context["file"] : null))) {
            // line 15
            echo "<h5>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("课时音视频文件下载"), "html", null, true);
            echo "</h5>
<div class=\"lesson-about\">
  <a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_lesson_media_download", array("courseId" => $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "courseId", array()), "lessonId" => $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->fileSizeFilter($this->getAttribute((isset($context["file"]) ? $context["file"] : null), "fileSize", array())), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("点击下载"), "html", null, true);
            echo ")</a>
</div>
";
        }
        // line 20
        echo "

<h5>";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("课时资料"), "html", null, true);
        echo "</h5>

";
        // line 24
        if (($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "status", array()) == "published")) {
            // line 25
            echo "  <ul class=\"media-list toolbar-pane-list\">
  ";
            // line 26
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["materials"]) ? $context["materials"] : null));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["material"]) {
                // line 27
                echo "    <li class=\"media list-item\">
      <div class=\"media-body list-item-body\">
        ";
                // line 29
                if ($this->getAttribute($context["material"], "link", array())) {
                    // line 30
                    echo "          <div class=\"title\">
            <a href=\"";
                    // line 31
                    echo twig_escape_filter($this->env, $this->getAttribute($context["material"], "link", array()), "html", null, true);
                    echo "\" target=\"_blank\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["material"], "title", array()), "html", null, true);
                    echo "</a>
            <span class=\"glyphicon glyphicon-new-window text-muted text-sm\" title=\"";
                    // line 32
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("网络链接资料"), "html", null, true);
                    echo "\"></span>
          </div>
        ";
                } else {
                    // line 35
                    echo "        \t<div class=\"title\">
        \t\t<a href=\"";
                    // line 36
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_material_download", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "materialId" => $this->getAttribute($context["material"], "id", array()))), "html", null, true);
                    echo "\" target=\"_blank\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["material"], "title", array()), "html", null, true);
                    echo "</a>
        \t\t<span class=\"meta\">(";
                    // line 37
                    echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->fileSizeFilter($this->getAttribute($context["material"], "fileSize", array())), "html", null, true);
                    echo ")</span>
        \t</div>
        \t<div class=\"summary\">";
                    // line 39
                    echo twig_escape_filter($this->env, $this->getAttribute($context["material"], "description", array()), "html", null, true);
                    echo "</div>
        ";
                }
                // line 41
                echo "      </div>
    </li>
    ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 44
                echo "      <li class=\"empty-item\" style=\"text-align:left;margin-left:10px;\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("此课时无资料"), "html", null, true);
                echo "</li>
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['material'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 46
            echo "  </ul>
";
        } else {
            // line 48
            echo "  <div class=\"lesson-about\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("此课时尚未发布，不能下载课时资料"), "html", null, true);
            echo "</div>
";
        }
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:LessonMaterialPlugin:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 48,  146 => 46,  137 => 44,  130 => 41,  125 => 39,  120 => 37,  114 => 36,  111 => 35,  105 => 32,  99 => 31,  96 => 30,  94 => 29,  90 => 27,  85 => 26,  82 => 25,  80 => 24,  75 => 22,  71 => 20,  61 => 17,  55 => 15,  53 => 14,  50 => 13,  46 => 11,  40 => 9,  34 => 7,  32 => 6,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
