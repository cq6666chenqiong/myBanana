<?php

/* TopxiaWebBundle:Settings:layout.html.twig */
class __TwigTemplate_6e71ade621f47520830d1c691b92af636505c14e74904e3b62563714610fa9c0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::layout.html.twig", "TopxiaWebBundle:Settings:layout.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
            'side' => array($this, 'block_side'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("个人设置"), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "<div class=\"row\">
  <div class=\"col-md-3\">
    ";
        // line 8
        $this->displayBlock('side', $context, $blocks);
        // line 53
        echo "  </div>
  <div class=\"col-md-9\">
    ";
        // line 55
        $this->displayBlock('main', $context, $blocks);
        // line 56
        echo "  </div>
</div>
";
    }

    // line 8
    public function block_side($context, array $blocks = array())
    {
        // line 9
        echo "      <div class=\"sidenav\">
        <ul class=\"list-group\">
          <li class=\"list-group-heading\">";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("个人设置"), "html", null, true);
        echo "</li>
          ";
        // line 12
        $context["side_nav"] = ((array_key_exists("side_nav", $context)) ? (_twig_default_filter((isset($context["side_nav"]) ? $context["side_nav"] : null), null)) : (null));
        // line 13
        echo "
          <li class=\"list-group-item ";
        // line 14
        if (((isset($context["side_nav"]) ? $context["side_nav"] : null) == "profile")) {
            echo "active";
        }
        echo "\">
            <a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("settings");
        echo "\"><i class=\"glyphicon glyphicon-user\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("基础信息"), "html", null, true);
        echo "</a>
          </li>
          <li class=\"list-group-item ";
        // line 17
        if (((isset($context["side_nav"]) ? $context["side_nav"] : null) == "avatar")) {
            echo "active";
        }
        echo "\">
            <a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("settings_avatar");
        echo "\"><i class=\"glyphicon glyphicon-picture\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("头像设置"), "html", null, true);
        echo "</a>
          </li>
          ";
        // line 25
        echo "          <li class=\"list-group-item ";
        if (((isset($context["side_nav"]) ? $context["side_nav"] : null) == "security")) {
            echo "active";
        }
        echo "\">
            <a href=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("settings_security");
        echo "\"><i class=\"glyphicon glyphicon-lock\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("安全设置"), "html", null, true);
        echo "</a>
          </li>


          ";
        // line 33
        echo "
          <li class=\"list-group-item ";
        // line 34
        if (((isset($context["side_nav"]) ? $context["side_nav"] : null) == "email")) {
            echo "active";
        }
        echo "\">
            <a href=\"";
        // line 35
        echo $this->env->getExtension('routing')->getPath("settings_email");
        echo "\"><i class=\"glyphicon glyphicon-envelope\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("邮箱设置"), "html", null, true);
        echo "</a>
          </li>
          ";
        // line 50
        echo "        </ul>
      </div>
    ";
    }

    // line 55
    public function block_main($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Settings:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 55,  134 => 50,  127 => 35,  121 => 34,  118 => 33,  109 => 26,  102 => 25,  95 => 18,  89 => 17,  82 => 15,  76 => 14,  73 => 13,  71 => 12,  67 => 11,  63 => 9,  60 => 8,  54 => 56,  52 => 55,  48 => 53,  46 => 8,  42 => 6,  39 => 5,  31 => 3,  11 => 1,);
    }
}
