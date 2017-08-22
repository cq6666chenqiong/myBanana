<?php

/* TopxiaWebBundle:Announcement:announcement-modal-layout.html.twig */
class __TwigTemplate_fe79381df182df60e3118a860e11603e16b874e011fd006db5b970f1aa48ffd0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::bootstrap-modal-layout.html.twig", "TopxiaWebBundle:Announcement:announcement-modal-layout.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle::bootstrap-modal-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("公告管理"), "html", null, true);
        echo "
";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "<ul class=\"nav nav-tabs mbm\">
\t<li ";
        // line 9
        if (((isset($context["tab"]) ? $context["tab"] : null) == "manage")) {
            echo "class=\"active\"";
        }
        echo ">
\t\t<a href=\"javascript:;\" data-role=\"announcement-modal\" data-url=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("announcement_add", array("targetType" => (isset($context["targetType"]) ? $context["targetType"] : null), "targetId" => (isset($context["targetId"]) ? $context["targetId"] : null))), "html", null, true);
        echo "\">";
        if ((($this->getAttribute((isset($context["announcement"]) ? $context["announcement"] : null), "id", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["announcement"]) ? $context["announcement"] : null), "id", array()), null)) : (null))) {
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("编辑公告"), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("添加公告"), "html", null, true);
        }
        echo "</a>
\t</li>
\t<li ";
        // line 12
        if (((isset($context["tab"]) ? $context["tab"] : null) == "list")) {
            echo "class=\"active\"";
        }
        echo ">
\t\t<a href=\"javascript:;\" data-role=\"announcement-modal\" data-url=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("announcement_list", array("targetType" => (isset($context["targetType"]) ? $context["targetType"] : null), "targetId" => (isset($context["targetId"]) ? $context["targetId"] : null))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("历史公告"), "html", null, true);
        echo "</a>
\t</li>
</ul>
";
        // line 16
        $this->displayBlock('content', $context, $blocks);
        // line 17
        echo "
";
    }

    // line 16
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Announcement:announcement-modal-layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 16,  78 => 17,  76 => 16,  68 => 13,  62 => 12,  51 => 10,  45 => 9,  42 => 8,  39 => 7,  33 => 4,  30 => 3,  11 => 1,);
    }
}
