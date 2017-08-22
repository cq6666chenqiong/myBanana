<?php

/* TopxiaWebBundle:Course:create.html.twig */
class __TwigTemplate_0592b4b0ff009f0a97c09ddba7b1c442656136caf414f548c849c90ed97bad9e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::layout.html.twig", "TopxiaWebBundle:Course:create.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 5
        $context["script_controller"] = "course/create";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        if (((isset($context["type"]) ? $context["type"] : null) == "normal")) {
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("创建课程"), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("创建直播课程"), "html", null, true);
        }
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "<div class=\"row\">
  <div class=\"col-md-offset-2 col-md-8\">
    <div class=\"panel panel-default panel-page\">
      <div class=\"panel-heading\"><h2>";
        // line 11
        if (((isset($context["type"]) ? $context["type"] : null) == "normal")) {
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("创建课程"), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("创建直播课程"), "html", null, true);
        }
        echo "</h2></div>

      ";
        // line 13
        if ((( !$this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "largeAvatar", array()) ||  !$this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "title", array())) ||  !$this->getAttribute((isset($context["userProfile"]) ? $context["userProfile"] : null), "about", array()))) {
            // line 14
            echo "        ";
            $this->loadTemplate("TopxiaWebBundle:Settings:user-profile.html.twig", "TopxiaWebBundle:Course:create.html.twig", 14)->display($context);
            // line 15
            echo "      ";
        } else {
            // line 16
            echo "        <form id=\"course-create-form\" class=\"form-horizontal\" method=\"post\">

          ";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "flash_messages", array(), "method"), "html", null, true);
            echo "

          <div class=\"form-group\">
            <div class=\"col-md-2 control-label\"><label for=\"course_title\" class=\"required\">";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("标题"), "html", null, true);
            echo "</label></div>
            <div class=\"col-md-8 controls\">
              <input type=\"text\" id=\"course_title\" name=\"title\" required=\"required\" class=\"form-control\" data-widget-cid=\"widget-1\" data-explain=\"\">
              <div class=\"help-block\" style=\"display:none;\"></div>
            </div>
          </div> 

          ";
            // line 28
            $this->loadTemplate("OrgBundle:Org:org-tree-select.html.twig", "TopxiaWebBundle:Course:create.html.twig", 28)->display($context);
            // line 29
            echo "
      <div class=\"form-group\" >
        <label class=\"col-md-2 control-label\">";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("课程类型"), "html", null, true);
            echo "</label>
          <div class=\"col-md-8 controls radios\">
            ";
            // line 33
            echo $this->env->getExtension('topxia_html_twig')->radios("buyable", array("1" => $this->env->getExtension('translator')->trans("必修"), "0" => $this->env->getExtension('translator')->trans("选修")), (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "buyable", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "buyable", array()), 1)) : (1)));
            echo "
           ";
            // line 35
            echo "        </div>
      </div>

          <div class=\"form-group\">
            <div class=\"col-md-offset-2 col-md-8 controls\">
              <input id=\"course-create-btn\" data-submiting-text=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("正在创建"), "html", null, true);
            echo "\" class=\"btn btn-fat btn-primary\" type=\"submit\" value=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("创建"), "html", null, true);
            echo "\">
            </div>
          </div>
";
            // line 52
            echo "          <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
            echo "\">
          <input type=\"hidden\" name=\"type\" value=\"";
            // line 53
            echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : null), "html", null, true);
            echo "\">

        </form>

      ";
        }
        // line 58
        echo "    </div>

  </div>

</div>
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Course:create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 58,  124 => 53,  119 => 52,  111 => 40,  104 => 35,  100 => 33,  95 => 31,  91 => 29,  89 => 28,  79 => 21,  73 => 18,  69 => 16,  66 => 15,  63 => 14,  61 => 13,  52 => 11,  47 => 8,  44 => 7,  32 => 3,  28 => 1,  26 => 5,  11 => 1,);
    }
}
