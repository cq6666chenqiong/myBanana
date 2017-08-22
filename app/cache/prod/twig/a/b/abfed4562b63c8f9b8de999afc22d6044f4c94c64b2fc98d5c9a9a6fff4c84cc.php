<?php

/* ClassroomBundle:Classroom:dashboard-nav.html.twig */
class __TwigTemplate_abfed4562b63c8f9b8de999afc22d6044f4c94c64b2fc98d5c9a9a6fff4c84cc extends Twig_Template
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
        echo "<div class=\"nav-btn-tab\">
  <ul class=\"nav nav-tabs\" role=\"tablist\">
    <li role=\"presentation\" class=\"";
        // line 3
        if (((isset($context["nav"]) ? $context["nav"] : null) == "introduction")) {
            echo "active";
        }
        echo "\"><a  href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_introductions", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()))), "html", null, true);
        echo "\">介绍</a></li>

    ";
        // line 5
        if ($this->env->getExtension('topxia_web_twig')->isPluginInstalled("ClassroomPlan")) {
            // line 6
            echo "      ";
            $context["classroomPlan"] = _twig_default_filter($this->env->getExtension('topxia_data_twig')->getData("GetClassroomPlanByClassroomId", array("classroomId" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()))), null);
            // line 7
            echo "      ";
            if (((((array_key_exists("classroomPlan", $context)) ? (_twig_default_filter((isset($context["classroomPlan"]) ? $context["classroomPlan"] : null), null)) : (null)) && ($this->getAttribute((isset($context["classroomPlan"]) ? $context["classroomPlan"] : null), "status", array()) == "published")) && $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()))) {
                // line 8
                echo "        ";
                $context["planMember"] = _twig_default_filter($this->env->getExtension('topxia_data_twig')->getData("UserClassroomPlanTaskNumInfo", array("classroomId" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()), "userId" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "id", array()))), null);
                // line 9
                echo "      ";
            }
            // line 10
            echo "    ";
        }
        // line 11
        echo "    ";
        if ( !((array_key_exists("planMember", $context)) ? (_twig_default_filter((isset($context["planMember"]) ? $context["planMember"] : null), null)) : (null))) {
            // line 12
            echo "      <li role=\"presentation\" class=\"";
            if (((isset($context["nav"]) ? $context["nav"] : null) == "course")) {
                echo "active";
            }
            echo "\"><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_courses", array("classroomId" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()))), "html", null, true);
            echo "\">课程 <small class=\"text-muted\">";
            if (($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "courseNum", array()) != 0)) {
                echo "( ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "courseNum", array()), "html", null, true);
                echo " )";
            }
            echo "</small></a></li>
    ";
        }
        // line 28
        echo "  </ul>
  ";
        // line 38
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "ClassroomBundle:Classroom:dashboard-nav.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 38,  68 => 28,  52 => 12,  49 => 11,  46 => 10,  43 => 9,  40 => 8,  37 => 7,  34 => 6,  32 => 5,  23 => 3,  19 => 1,);
    }
}
