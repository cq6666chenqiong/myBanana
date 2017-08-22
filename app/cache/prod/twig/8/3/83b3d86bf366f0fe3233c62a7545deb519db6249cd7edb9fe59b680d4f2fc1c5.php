<?php

/* TopxiaWebBundle:CourseMaterial:index.html.twig */
class __TwigTemplate_83b3d86bf366f0fe3233c62a7545deb519db6249cd7edb9fe59b680d4f2fc1c5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle:Course:normal-layout.html.twig", "TopxiaWebBundle:CourseMaterial:index.html.twig", 1);
        $this->blocks = array(
            'course_main' => array($this, 'block_course_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle:Course:normal-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["script_controller"] = "course/common";
        // line 5
        $context["tab"] = "material";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_course_main($context, array $blocks = array())
    {
        // line 8
        echo "
\t<ul class=\"media-list\">
\t";
        // line 10
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["materials"]) ? $context["materials"] : null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["material"]) {
            // line 11
            echo "\t  ";
            $context["lesson"] = (($this->getAttribute((isset($context["lessons"]) ? $context["lessons"] : null), $this->getAttribute($context["material"], "lessonId", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["lessons"]) ? $context["lessons"] : null), $this->getAttribute($context["material"], "lessonId", array()), array(), "array"), null)) : (null));
            // line 12
            echo "\t  <li class=\"media\">
\t  \t<div class=\"media-body\">
\t    \t<div class=\"mbs\">
\t    \t  ";
            // line 15
            if (((isset($context["lesson"]) ? $context["lesson"] : null) && ($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "status", array()) != "published"))) {
                // line 16
                echo "\t\t\t    ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["material"], "title", array()), "html", null, true);
                echo " <span class=\"text-muted text-sm\">(";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("课时未发布，不能下载该资料"), "html", null, true);
                echo ")</span>
\t\t\t  ";
            } else {
                // line 18
                echo "\t\t\t    ";
                if ($this->getAttribute($context["material"], "link", array())) {
                    // line 19
                    echo "            <a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["material"], "link", array()), "html", null, true);
                    echo "\" target=\"_blank\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["material"], "title", array()), "html", null, true);
                    echo "</a>
            <span class=\"glyphicon glyphicon-new-window text-muted text-sm\" title=\"";
                    // line 20
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("网络链接资料"), "html", null, true);
                    echo "\"></span>
\t\t\t    ";
                } else {
                    // line 22
                    echo "\t\t\t\t    <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_material_download", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "materialId" => $this->getAttribute($context["material"], "id", array()))), "html", null, true);
                    echo "\" target=\"_blank\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["material"], "title", array()), "html", null, true);
                    echo "</a>
\t\t\t    ";
                }
                // line 24
                echo "\t\t\t  ";
            }
            // line 25
            echo "\t    \t</div>

\t    \t";
            // line 27
            if (($this->getAttribute($context["material"], "description", array()) &&  !$this->getAttribute($context["material"], "link", array()))) {
                // line 28
                echo "\t\t\t    <div class=\"text-muted text-sm mbs\">
\t\t\t    \t";
                // line 29
                echo $this->env->getExtension('topxia_web_twig')->plainTextFilter($this->getAttribute($context["material"], "description", array()), 100);
                echo "
\t\t\t    </div>
\t\t\t\t";
            }
            // line 32
            echo "
\t    \t<div class=\"text-sm\">
\t    \t  ";
            // line 34
            if (($this->getAttribute($context["material"], "fileId", array()) > 0)) {
                // line 35
                echo "\t\t    \t\t<span class=\"text-muted\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->fileSizeFilter($this->getAttribute($context["material"], "fileSize", array())), "html", null, true);
                echo "</span>
\t\t    \t\t<span class=\"bullet\">•</span>
\t    \t\t";
            }
            // line 38
            echo "\t    \t\t";
            if ((isset($context["lesson"]) ? $context["lesson"] : null)) {
                // line 39
                echo "\t    \t\t  <a class=\"link-muted\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_learn", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
                echo "#lesson/";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "id", array()), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "title", array()), "html", null, true);
                echo "\">课时";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "number", array()), "html", null, true);
                echo "</a>
\t\t    \t\t<span class=\"bullet\">•</span>
\t    \t\t";
            }
            // line 42
            echo "\t\t    \t<span class=\"text-muted\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("上传于"), "html", null, true);
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->smarttimeFilter($this->getAttribute($context["material"], "createdTime", array())), "html", null, true);
            echo "</span>
\t    \t</div>

\t    </div>
\t  </li>
\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 48
            echo "\t  <li class=\"empty tac text-muted mvl\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("课程暂无资料"), "html", null, true);
            echo "</li>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['material'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "\t</ul>
\t";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : null)), "method"), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:CourseMaterial:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 51,  155 => 50,  146 => 48,  133 => 42,  120 => 39,  117 => 38,  110 => 35,  108 => 34,  104 => 32,  98 => 29,  95 => 28,  93 => 27,  89 => 25,  86 => 24,  78 => 22,  73 => 20,  66 => 19,  63 => 18,  55 => 16,  53 => 15,  48 => 12,  45 => 11,  40 => 10,  36 => 8,  33 => 7,  29 => 1,  27 => 5,  25 => 3,  11 => 1,);
    }
}
