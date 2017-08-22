<?php

/* TopxiaWebBundle:PasswordReset:index.html.twig */
class __TwigTemplate_b23852a7cc2bf2587c3b51ad7722ddafd6294c6fb18996cc2e9280fd568076d3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::layout.html.twig", "TopxiaWebBundle:PasswordReset:index.html.twig", 1);
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
        // line 4
        $context["script_controller"] = "auth/password-reset";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("重设密码"), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        // line 7
        echo "<div class=\"row row-6\">
  <div class=\"col-md-6 col-md-offset-3 ptl\">
    <div class=\"panel panel-default panel-page\">
      <div class=\"panel-heading\"><h2>";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("重设密码"), "html", null, true);
        echo "</h2></div>

        <ul class=\"nav nav-tabs mbl js-find-password\">
          <li class=\"active js-find-by-email\">
            <a style=\"cursor: pointer;\">";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("邮箱地址"), "html", null, true);
        echo "
            </a>
          </li>
          ";
        // line 17
        if ((_twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("cloud_sms.sms_enabled"), "") == "1")) {
            // line 18
            echo "            <li class=\"js-find-by-mobile\">
              <a style=\"cursor: pointer;\">";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("手机号码"), "html", null, true);
            echo "
              </a>
            </li>
          ";
        }
        // line 23
        echo "        </ul>

      ";
        // line 25
        if ((isset($context["error"]) ? $context["error"] : null)) {
            echo " <div id=\"alertxx\" class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, (isset($context["error"]) ? $context["error"] : null), "html", null, true);
            echo "</div> ";
        }
        // line 26
        echo "
      <form id=\"password-reset-form\" class=\"form-vertical\" method=\"post\">
        <div class=\"form-group\">
          ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email", array()), 'label', array("label_attr" => array("class" => "control-label")) + (twig_test_empty($_label_ = $this->env->getExtension('translator')->trans("邮箱地址")) ? array() : array("label" => $_label_)));
        echo "
          <div class=\"controls\">
            ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            <p class=\"help-block\">请输入你在";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("site.name"), "html", null, true);
        echo "注册时填写的邮箱地址</p>
          </div>
        </div>

        <div class=\"form-group\">
          <div class=\"controls\">
            ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'rest');
        echo "
            <button type=\"submit\" class=\"btn btn-primary\" data-loading-text=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("正在发送重设密码邮件"), "html", null, true);
        echo "...\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("重设密码"), "html", null, true);
        echo "</button>
          </div>
        </div>

        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">

      </form>


      <form id=\"password-reset-by-mobile-form\" class=\"form-vertical\" action=\"";
        // line 48
        echo $this->env->getExtension('routing')->getPath("password_reset_by_sms");
        echo "\" method=\"post\" style=\"display: none;\">
        ";
        // line 55
        echo "
        <div class=\"form-group\">
          <label class=\"control-label required\" for=\"mobile\">手机号码</label>
          <div class=\"controls\">
            <input type=\"text\" id=\"mobile\" name=\"mobile\" data-url=\"";
        // line 59
        echo $this->env->getExtension('routing')->getPath("password_reset_check_mobile");
        echo "\" class=\"form-control\" data-role=\"mobile\">
          </div>
        </div>

        <div class=\"form-group\">
          <label class=\"control-label required\" for=\"sms_code\">短信验证码</label>
          <div class=\"controls row\" >
            <div class = \"col-md-8\" >
              <input type=\"text\" class=\"form-control\" id=\"sms-code\" name=\"sms_code\" data-explain=\"输入短信验证码\" required=\"required\" data-url=\"";
        // line 67
        echo $this->env->getExtension('routing')->getPath("edu_cloud_sms_check", array("type" => "sms_forget_password"));
        echo "\">
            </div>

            <div class=\"col-md-4\">
              <a href=\"#modal\" data-toggle=\"modal\" class=\"btn btn-default btn-sm js-sms-send disabled\" data-url=\"";
        // line 71
        echo $this->env->getExtension('routing')->getPath("register_captcha_modal");
        echo "\" data-sms-url=\"";
        echo $this->env->getExtension('routing')->getPath("edu_cloud_sms_send");
        echo "\">
                <span id=\"js-time-left\"></span>
                <span id=\"js-fetch-btn-text\">获取短信验证码</span>
             </a>
            </div>

            <div class=\"col-md-12 help-block\"></div>
          </div>
        </div>



        <div class=\"form-group\">
          <div class=\"controls\">
            <button type=\"submit\" class=\"btn btn-primary\" data-loading-text=\"提交中...\">重设密码</button>
          </div>
        </div>

        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">
      </form>

    </div><!-- /panel -->

  </div>

</div>
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:PasswordReset:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 89,  155 => 71,  148 => 67,  137 => 59,  131 => 55,  127 => 48,  119 => 43,  110 => 39,  106 => 38,  97 => 32,  93 => 31,  88 => 29,  83 => 26,  77 => 25,  73 => 23,  66 => 19,  63 => 18,  61 => 17,  55 => 14,  48 => 10,  43 => 7,  40 => 6,  32 => 3,  28 => 1,  26 => 4,  11 => 1,);
    }
}
