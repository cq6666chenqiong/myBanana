<?php

/* TopxiaWebBundle:Settings:password.html.twig */
class __TwigTemplate_f4d3fffed4013f958bd2089dde7caf32aceca1dee3a4ee9cfae38ff60a129c38 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle:Settings:layout.html.twig", "TopxiaWebBundle:Settings:password.html.twig", 1);
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
        // line 5
        $context["script_controller"] = "settings/password";
        // line 7
        $context["side_nav"] = "security";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("密码修改"), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("安全设置"), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 9
    public function block_main($context, array $blocks = array())
    {
        // line 10
        echo "
  <div class=\"panel panel-default panel-col\">
    <div class=\"panel-heading\">";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("安全设置"), "html", null, true);
        echo "</div>
    <div class=\"panel-body\">

      <ul class=\"breadcrumb\">
        <li><a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("settings_security");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("安全设置"), "html", null, true);
        echo "</a></li>
        <li class=\"active\">";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("登录密码修改"), "html", null, true);
        echo "</li>
      </ul>


";
        // line 21
        if ( !$this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "password", array())) {
            // line 22
            echo "        <div class=\"alert alert-warning\">
          <p>";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("当前帐号从第三方帐号直接登录时创建，尚未设置密码。"), "html", null, true);
            echo "</p>
          <p>";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("为了帐号的安全，请通过邮箱找回密码的方式，重设密码！"), "html", null, true);
            echo "</p>
          <p><a href=\"";
            // line 25
            echo $this->env->getExtension('routing')->getPath("password_reset");
            echo "\" class=\"btn btn-primary\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("现在就去重设密码！"), "html", null, true);
            echo "</a></p>
        </div>
      ";
        }
        // line 28
        echo "
      <form id=\"settings-password-form\" class=\"form-horizontal\" method=\"post\" ";
        // line 29
        if ( !$this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "password", array())) {
            echo " style=\"display:none;\"";
        }
        echo ">

        ";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "flash_messages", array(), "method"), "html", null, true);
        echo "

        <div class=\"form-group\">
          <div class=\"col-md-2 control-label\">";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "currentPassword", array()), 'label', (twig_test_empty($_label_ = $this->env->getExtension('translator')->trans("当前密码")) ? array() : array("label" => $_label_)));
        echo "</div>
          <div class=\"controls col-md-8 controls\">
            ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "currentPassword", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
          </div>
        </div>

        <div class=\"form-group\">
          <div class=\"col-md-2 control-label\">";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "newPassword", array()), 'label', (twig_test_empty($_label_ = $this->env->getExtension('translator')->trans("新密码")) ? array() : array("label" => $_label_)));
        echo "</div>
          <div class=\"controls col-md-8 controls\">
            ";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "newPassword", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
          </div>
        </div>

        <div class=\"form-group\">
          <div class=\"col-md-2 control-label\">";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "confirmPassword", array()), 'label', (twig_test_empty($_label_ = $this->env->getExtension('translator')->trans("确认密码")) ? array() : array("label" => $_label_)));
        echo "</div>
          <div class=\"controls col-md-8 controls\">
            ";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "confirmPassword", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
          </div>
        </div>

        <div class=\"form-group\">
          <div class=\"col-md-2 control-label\"></div>
          <div class=\"controls col-md-8 controls\">
            ";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'rest');
        echo "
            <button id=\"password-save-btn\" data-submiting-text=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("正在保存"), "html", null, true);
        echo "\" type=\"submit\" class=\"btn btn-primary\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("提交"), "html", null, true);
        echo "</button>
          </div>
        </div>

        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">

      </form>

    </div>
  </div>

";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Settings:password.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 62,  153 => 58,  149 => 57,  139 => 50,  134 => 48,  126 => 43,  121 => 41,  113 => 36,  108 => 34,  102 => 31,  95 => 29,  92 => 28,  84 => 25,  80 => 24,  76 => 23,  73 => 22,  71 => 21,  64 => 17,  58 => 16,  51 => 12,  47 => 10,  44 => 9,  34 => 3,  30 => 1,  28 => 7,  26 => 5,  11 => 1,);
    }
}
