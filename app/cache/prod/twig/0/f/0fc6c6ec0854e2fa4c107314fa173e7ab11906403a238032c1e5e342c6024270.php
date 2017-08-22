<?php

/* TopxiaWebBundle:Settings:email.html.twig */
class __TwigTemplate_0fc6c6ec0854e2fa4c107314fa173e7ab11906403a238032c1e5e342c6024270 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle:Settings:layout.html.twig", "TopxiaWebBundle:Settings:email.html.twig", 1);
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
        $context["script_controller"] = "settings/email";
        // line 7
        $context["side_nav"] = "email";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("邮箱设置"), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 9
    public function block_main($context, array $blocks = array())
    {
        // line 10
        echo "  ";
        $this->loadTemplate("TopxiaWebBundle:Settings:email.html.twig", "TopxiaWebBundle:Settings:email.html.twig", 10, "1619877361")->display(array_merge($context, array("class" => "panel-col")));
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Settings:email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 10,  42 => 9,  34 => 3,  30 => 1,  28 => 7,  26 => 5,  11 => 1,);
    }
}


/* TopxiaWebBundle:Settings:email.html.twig */
class __TwigTemplate_0fc6c6ec0854e2fa4c107314fa173e7ab11906403a238032c1e5e342c6024270_1619877361 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->loadTemplate("TopxiaWebBundle:Bootstrap:panel.html.twig", "TopxiaWebBundle:Settings:email.html.twig", 10);
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

    // line 11
    public function block_heading($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("邮箱设置"), "html", null, true);
    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        // line 13
        echo "    ";
        if ((($this->getAttribute((isset($context["mailer"]) ? $context["mailer"] : null), "enabled", array()) == 1) || ((($this->getAttribute((isset($context["cloudEmail"]) ? $context["cloudEmail"] : null), "status", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["cloudEmail"]) ? $context["cloudEmail"] : null), "status", array()), null)) : (null)) == "enable"))) {
            // line 14
            echo "      <form id=\"setting-email-form\" class=\"form-horizontal\" method=\"post\" >
        ";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "flash_messages", array(), "method"), "html", null, true);
            echo "

        <div class=\"form-group\">
          <div class=\"col-md-2 control-label\"><label>";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("当前登录邮箱"), "html", null, true);
            echo "</label></div>
          <div class=\"col-md-8 controls\">
            <span class=\"control-text\">
              ";
            // line 21
            $context["emailArr"] = twig_split_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "email", array()), "@");
            // line 22
            echo "              ";
            if (($this->getAttribute((isset($context["emailArr"]) ? $context["emailArr"] : null), 1, array(), "array") != "myBanana.net")) {
                // line 23
                echo "                ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "email", array()), "html", null, true);
                echo "
                ";
                // line 24
                if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "emailVerified", array())) {
                    // line 25
                    echo "                  <span class=\"text-success\">(";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("已验证"), "html", null, true);
                    echo ")</span>
                ";
                } else {
                    // line 27
                    echo "                  <p class=\"help-block mtm\">
                    ";
                    // line 28
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("邮箱地址尚未验证，"), "html", null, true);
                    echo "
                    <a id=\"send-verify-email\" class=\"btn btn-info btn-sm\" href=\"javascript:;\" data-url=\"";
                    // line 29
                    echo $this->env->getExtension('routing')->getPath("settings_email_verify");
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("去验证"), "html", null, true);
                    echo "</a>
                  </p>
                ";
                }
                // line 32
                echo "              ";
            } else {
                // line 33
                echo "                <span class=\"text-success\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("您还未设置邮箱，请在下方设置你的新邮箱。"), "html", null, true);
                echo "</span>
              ";
            }
            // line 35
            echo "
            </span>
          </div>
        </div>

        <div class=\"form-group\">
          <div class=\"col-md-2 control-label\">";
            // line 41
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email", array()), 'label', (twig_test_empty($_label_ = $this->env->getExtension('translator')->trans("新登录邮箱")) ? array() : array("label" => $_label_)));
            echo "</div>
          <div class=\"col-md-8 controls\">
            ";
            // line 43
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email", array()), 'widget', array("attr" => array("class" => "form-control")));
            echo "
          </div>
        </div>

        <div class=\"form-group\">
          <div class=\"col-md-2 control-label\">";
            // line 48
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "password", array()), 'label', (twig_test_empty($_label_ = $this->env->getExtension('translator')->trans("网站登录密码")) ? array() : array("label" => $_label_)));
            echo "</div>
          <div class=\"col-md-8 controls\">
            ";
            // line 50
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "password", array()), 'widget', array("attr" => array("class" => "form-control")));
            echo "
            <p class=\"help-block\">";
            // line 51
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("设置新的登录邮箱，需要校验当前的网站登录密码"), "html", null, true);
            echo "</p>
          </div>
        </div>

        <div class=\"form-group\">
          <div class=\"col-md-2 control-label\"></div>
          <div class=\"col-md-8 controls\">
            ";
            // line 58
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'rest');
            echo "
            <button id=\"email-save-btn\" data-submiting-text=\"";
            // line 59
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("正在提交"), "html", null, true);
            echo "\" type=\"submit\" class=\"btn btn-primary\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("提交"), "html", null, true);
            echo "</button>
          </div>
        </div>

        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            // line 63
            echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
            echo "\">
      </form>
    ";
        } else {
            // line 66
            echo "      <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("管理员尚未设置邮件服务器，不能更改邮箱地址。"), "html", null, true);
            echo "</div>
    ";
        }
        // line 68
        echo "    ";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Settings:email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  225 => 68,  219 => 66,  213 => 63,  204 => 59,  200 => 58,  190 => 51,  186 => 50,  181 => 48,  173 => 43,  168 => 41,  160 => 35,  154 => 33,  151 => 32,  143 => 29,  139 => 28,  136 => 27,  130 => 25,  128 => 24,  123 => 23,  120 => 22,  118 => 21,  112 => 18,  106 => 15,  103 => 14,  100 => 13,  97 => 12,  91 => 11,  45 => 10,  42 => 9,  34 => 3,  30 => 1,  28 => 7,  26 => 5,  11 => 1,);
    }
}
