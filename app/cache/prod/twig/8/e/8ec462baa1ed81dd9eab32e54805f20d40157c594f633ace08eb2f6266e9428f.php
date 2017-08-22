<?php

/* ClassroomBundle:ClassroomManage:menu.html.twig */
class __TwigTemplate_8ec462baa1ed81dd9eab32e54805f20d40157c594f633ace08eb2f6266e9428f extends Twig_Template
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
        if ((isset($context["canManage"]) ? $context["canManage"] : null)) {
            // line 2
            echo "  <ul class=\"list-group\">
    <li class=\"list-group-item ";
            // line 3
            if (((isset($context["side_nav"]) ? $context["side_nav"] : null) == "main")) {
                echo "active";
            }
            echo "\">
      <a href=\"";
            // line 4
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_manage", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()))), "html", null, true);
            echo "\">管理首页</a>
    </li>
  </ul>
  
  <ul class=\"list-group\">
    <li class=\"list-group-heading\">科室设置</li>
    <li class=\"list-group-item ";
            // line 10
            if (((isset($context["side_nav"]) ? $context["side_nav"] : null) == "base")) {
                echo "active";
            }
            echo "\">
      <a href=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_manage_set_info", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()))), "html", null, true);
            echo "\">基本信息 ";
            if (twig_test_empty($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "about", array()))) {
                echo "<span class=\"label label-info\">未完善</span>";
            }
            echo "</a>
    </li>
      ";
            // line 18
            echo "          <li class=\"list-group-item ";
            if (((isset($context["side_nav"]) ? $context["side_nav"] : null) == "picture")) {
                echo "active";
            }
            echo "\">
          <a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_manage_set_picture", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()))), "html", null, true);
            echo "\">封面图片 ";
            if (twig_test_empty($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "smallPicture", array()))) {
                echo "<span class=\"label label-info\">未设置</span>";
            }
            echo "</a>
          </li>
      ";
            // line 40
            echo "   </ul>
 ";
        }
        // line 42
        echo "
 <ul class=\"list-group\">
   <li class=\"list-group-heading\">课程设置</li>
   ";
        // line 45
        if ((isset($context["canManage"]) ? $context["canManage"] : null)) {
            // line 46
            echo "     <li class=\"list-group-item ";
            if (((isset($context["side_nav"]) ? $context["side_nav"] : null) == "courses")) {
                echo "active";
            }
            echo "\"><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_manage_courses", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()))), "html", null, true);
            echo "\">课程管理</a></li>
     ";
            // line 52
            echo "  ";
        }
        // line 68
        echo "</ul>
";
    }

    public function getTemplateName()
    {
        return "ClassroomBundle:ClassroomManage:menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 68,  90 => 52,  81 => 46,  79 => 45,  74 => 42,  70 => 40,  61 => 19,  54 => 18,  45 => 11,  39 => 10,  30 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
