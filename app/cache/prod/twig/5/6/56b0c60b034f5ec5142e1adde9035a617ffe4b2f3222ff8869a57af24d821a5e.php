<?php

/* TopxiaWebBundle:Settings:security.html.twig */
class __TwigTemplate_56b0c60b034f5ec5142e1adde9035a617ffe4b2f3222ff8869a57af24d821a5e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle:Settings:layout.html.twig", "TopxiaWebBundle:Settings:security.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle:Settings:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 4
        $context["side_nav"] = "security";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("安全设置"), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 6
    public function block_main($context, array $blocks = array())
    {
        // line 7
        echo " ";
        $this->loadTemplate("TopxiaWebBundle:Settings:security.html.twig", "TopxiaWebBundle:Settings:security.html.twig", 7, "2042220871")->display(array_merge($context, array("class" => "panel-col")));
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Settings:security.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 7,  40 => 6,  32 => 2,  28 => 1,  26 => 4,  11 => 1,);
    }
}


/* TopxiaWebBundle:Settings:security.html.twig */
class __TwigTemplate_56b0c60b034f5ec5142e1adde9035a617ffe4b2f3222ff8869a57af24d821a5e_2042220871 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->loadTemplate("TopxiaWebBundle:Bootstrap:panel.html.twig", "TopxiaWebBundle:Settings:security.html.twig", 7);
        $this->blocks = array(
            'heading' => array($this, 'block_heading'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle:Bootstrap:panel.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    public function block_heading($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("安全设置"), "html", null, true);
    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        // line 10
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "flash_messages", array(), "method"), "html", null, true);
        echo "
";
        // line 32
        echo "    <hr>

    <div class=\"row\">
      <div class=\"col-xs-2 tar
        ";
        // line 36
        if ((isset($context["hasLoginPassword"]) ? $context["hasLoginPassword"] : null)) {
            // line 37
            echo "          text-success
        ";
        } else {
            // line 39
            echo "          text-danger
        ";
        }
        // line 41
        echo "      \" style=\"font-size:20px\">
        ";
        // line 42
        if ((isset($context["hasLoginPassword"]) ? $context["hasLoginPassword"] : null)) {
            // line 43
            echo "          <span class=\"glyphicon glyphicon-ok\"></span>
        ";
        } else {
            // line 45
            echo "          <span class=\"glyphicon glyphicon-warning-sign\"></span>
        ";
        }
        // line 47
        echo "      </div>

      <span class=\"col-sm-3 col-xs-6\" style=\"margin-top: 5px;\" >";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("登录密码"), "html", null, true);
        echo "</span>

      <span class=\"col-sm-4 hidden-xs\" style=\"margin-top: 5px;\" >";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("登录网校时需要输入的密码"), "html", null, true);
        echo "</span>

      <a href=\"";
        // line 53
        echo $this->env->getExtension('routing')->getPath("settings_password");
        echo "\" class=\"col-xs-offset-1 btn btn-primary\" style=\"margin-top: -3px;\" >";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("修改"), "html", null, true);
        echo "</a>
    </div>
    <hr>
        ";
        // line 148
        echo "    ";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Settings:security.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 148,  146 => 53,  141 => 51,  136 => 49,  132 => 47,  128 => 45,  124 => 43,  122 => 42,  119 => 41,  115 => 39,  111 => 37,  109 => 36,  103 => 32,  98 => 10,  95 => 9,  89 => 8,  43 => 7,  40 => 6,  32 => 2,  28 => 1,  26 => 4,  11 => 1,);
    }
}
