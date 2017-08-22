<?php

/* TopxiaWebBundle:MyCourse:batstudentcourse.htm.twig */
class __TwigTemplate_fdce63ab9940abd2bc978c06647ca115131247c84b247728f1df46fbf499748e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle:CourseStudentManage:index.html.twig", "TopxiaWebBundle:MyCourse:batstudentcourse.htm.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'maincontent' => array($this, 'block_maincontent'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle:CourseStudentManage:index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 5
        $context["submenu"] = "student";
        // line 7
        $context["script_controller"] = "course-manage/students";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "学员管理 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 9
    public function block_maincontent($context, array $blocks = array())
    {
        // line 10
        echo "


    <div class=\"form-group\" style=\"width: 100%\">
       <form action=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_fetch_bat_student", array("courseId" => (isset($context["courseId"]) ? $context["courseId"] : null))), "html", null, true);
        echo "\">
           <select id=\"keshi\" name=\"keshi\" class=\"form-control\" style=\"width: 30%;float: left\">
               ";
        // line 16
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["classr"]) ? $context["classr"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["k"]) {
            // line 17
            echo "                   <option ";
            if (((isset($context["keshi"]) ? $context["keshi"] : null) == $this->getAttribute($context["k"], "id", array()))) {
                echo " selected ";
            }
            echo " value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["k"], "id", array()), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["k"], "title", array()), "html", null, true);
            echo " </option>
               ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['k'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "           </select>
           <button type=\"submit\" clas=\"btn bbtn btn-info btn-sm mhs\" style=\"width: 10%\">搜索</button>
       </form>
    </div>
    ";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:MyCourse:batstudentcourse.htm.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 19,  59 => 17,  55 => 16,  50 => 14,  44 => 10,  41 => 9,  34 => 3,  30 => 1,  28 => 7,  26 => 5,  11 => 1,);
    }
}
