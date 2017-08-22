<?php

/* TopxiaWebBundle:CourseLesson/Part:status-label.html.twig */
class __TwigTemplate_7930ab3cd9568f41b225878b0d77a031bace14f656caa68099829ff9242e8c8a extends Twig_Template
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
        if ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "free", array())) {
            // line 2
            echo "\t  <span class=\"label label-success mrm\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans(""), "html", null, true);
            echo "</span>
";
        } elseif (($this->getAttribute(        // line 3
(isset($context["course"]) ? $context["course"] : null), "tryLookable", array()) && ((($this->getAttribute((isset($context["media"]) ? $context["media"] : null), "storage", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["media"]) ? $context["media"] : null), "storage", array()), "")) : ("")) == "cloud"))) {
            // line 4
            echo "\t  <span class=\"label label-warning mrm\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("试看"), "html", null, true);
            echo "</span>
";
        }
        // line 6
        echo "
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:CourseLesson/Part:status-label.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 6,  28 => 4,  26 => 3,  21 => 2,  19 => 1,);
    }
}
