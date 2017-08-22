<?php

/* TopxiaWebBundle:Settings:profile.html.twig */
class __TwigTemplate_6139898ddbaac21d0a1b8c1ed28784cf66da6697109401418ef673f3ea6809c7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle:Settings:layout.html.twig", "TopxiaWebBundle:Settings:profile.html.twig", 1);
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
        $context["script_controller"] = "settings/profile";
        // line 6
        $context["side_nav"] = "profile";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("基础信息"), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 8
    public function block_main($context, array $blocks = array())
    {
        // line 9
        echo "
\t";
        // line 10
        $this->loadTemplate("TopxiaWebBundle:Settings:profile.html.twig", "TopxiaWebBundle:Settings:profile.html.twig", 10, "129998523")->display(array_merge($context, array("class" => "panel-col")));
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Settings:profile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 10,  45 => 9,  42 => 8,  34 => 3,  30 => 1,  28 => 6,  26 => 5,  11 => 1,);
    }
}


/* TopxiaWebBundle:Settings:profile.html.twig */
class __TwigTemplate_6139898ddbaac21d0a1b8c1ed28784cf66da6697109401418ef673f3ea6809c7_129998523 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->loadTemplate("TopxiaWebBundle:Bootstrap:panel.html.twig", "TopxiaWebBundle:Settings:profile.html.twig", 10);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("基础信息"), "html", null, true);
    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        // line 13
        echo "
\t\t\t";
        // line 14
        if ((isset($context["fromCourse"]) ? $context["fromCourse"] : null)) {
            // line 15
            echo "\t\t\t<div class=\"alert alert-info\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("设置学位、自我介绍并保存后，即可开始创建课程。"), "html", null, true);
            echo "</div>
\t\t\t";
        }
        // line 17
        echo "
\t\t\t<form id=\"c\" class=\"form-horizontal\" method=\"post\">
\t\t\t\t";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "flash_messages", array(), "method"), "html", null, true);
        echo "

\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-md-2 control-label\" >";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("用户名"), "html", null, true);
        echo "</label>
\t\t\t\t\t\t<div class=\"col-md-7 controls\">
\t\t\t\t\t\t<div class=\"control-text\">
\t\t\t\t\t\t\t";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "nickname", array()), "html", null, true);
        echo "
\t\t\t\t\t\t\t";
        // line 29
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-md-2 control-label\" for=\"profile_truename\">";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("姓名"), "html", null, true);
        echo "</label>
\t\t\t\t\t\t";
        // line 35
        if (($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "truename", array()) && (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "approvalStatus", array()) == "approved") || ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "approvalStatus", array()) == "approving")))) {
            // line 36
            echo "              <div class=\"control-text\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "truename", array()), "html", null, true);
            echo "</div>
            ";
        } else {
            // line 38
            echo "            \t<div class=\"col-md-7 controls radios\">
              \t<input type=\"text\" id=\"profile_truename\" name=\"profile[truename]\" class=\"form-control\" data-widget-cid=\"widget-1\" data-explain=\"\" value=\"";
            // line 39
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "truename", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "truename", array()), "")) : ("")), "html", null, true);
            echo "\" readonly=\"readonly\">
              \t<div class=\"help-block\" style=\"display:none;\"></div>
            \t</div>
            ";
        }
        // line 43
        echo "\t\t\t\t\t</div>
\t\t\t\t
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-md-2 control-label\">";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("性别"), "html", null, true);
        echo "</label>
\t\t\t\t\t\t<div class=\"col-md-7 controls radios\">
\t\t\t\t\t\t\t<div id=\"profile_gender\">
\t\t\t\t\t\t\t\t<input type=\"radio\" id=\"profile_gender_0\" name=\"profile[gender]\" required=\"required\" value=\"male\" ";
        // line 49
        if (($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "gender", array()) == "male")) {
            echo "checked=\"checked\"";
        }
        echo ">
\t\t\t\t\t\t\t\t<label for=\"profile_gender_0\" class=\"required\">";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("男"), "html", null, true);
        echo "</label>
\t\t\t\t\t\t\t\t<input type=\"radio\" id=\"profile_gender_1\" name=\"profile[gender]\" required=\"required\" value=\"female\" ";
        // line 51
        if (($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "gender", array()) == "female")) {
            echo "checked=\"checked\"";
        }
        echo ">
\t\t\t\t\t\t\t\t<label for=\"profile_gender_1\" class=\"required\">";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("女"), "html", null, true);
        echo "</label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-md-2 control-label\" for=\"profile_idcard\">";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("身份证号"), "html", null, true);
        echo "</label>
\t\t\t\t\t\t";
        // line 59
        if (($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "idcard", array()) && (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "approvalStatus", array()) == "approved") || ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "approvalStatus", array()) == "approving")))) {
            // line 60
            echo "              <div class=\"col-md-7 controls\">
                <div class=\"control-text\">";
            // line 61
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->blur_idcard_number($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "idcard", array())), "html", null, true);
            echo "</div>
              </div>
            ";
        } else {
            // line 64
            echo "              <div class=\"col-md-7 controls radios\">
                <input type=\"text\" id=\"profile_idcard\" name=\"profile[idcard]\" class=\"form-control\" value=\"";
            // line 65
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "idcard", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "idcard", array()), "")) : ("")), "html", null, true);
            echo "\">
                <div class=\"help-block\" style=\"display:none;\"></div>
              </div>
            ";
        }
        // line 69
        echo "\t\t\t\t\t</div>

\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label for=\"profile_mobile\" class=\"col-md-2 control-label\">";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("手机号码"), "html", null, true);
        echo "</label>
\t\t\t\t\t<div class=\"col-md-7 controls\">
\t\t\t\t\t\t<input type=\"text\" id=\"profile_mobile\" name=\"profile[mobile]\" class=\"form-control\" data-widget-cid=\"widget-5\" data-explain=\"\" value=\"";
        // line 74
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "mobile", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "mobile", array()), "")) : ("")), "html", null, true);
        echo "\">

\t\t\t\t\t\t<div class=\"help-block\" style=\"display:none\"></div>
\t\t\t\t\t</div>
\t\t\t\t</div>
";
        // line 110
        echo "\t\t\t\t\t<div class=\"form-group form-forIam-group form-notStudent-group\">
\t\t\t\t\t\t<label class=\"col-md-2 control-label\">";
        // line 111
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("科室"), "html", null, true);
        echo "</label>
\t\t\t\t\t\t<div class=\"col-md-7 controls\">
\t\t\t\t\t\t\t";
        // line 114
        echo "\t\t\t\t\t\t\t<select name=\"profile[company]\" class=\"form-control\"  onfocus=\"this.defaultIndex=this.selectedIndex;\" onchange=\"this.selectedIndex=this.defaultIndex;\">
                               ";
        // line 115
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["classr"]) ? $context["classr"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 116
            echo "\t\t\t\t\t\t\t\t   <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "id", array()), "html", null, true);
            echo "\" ";
            if (($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "company", array()) == $this->getAttribute($context["c"], "id", array()))) {
                echo " selected=\"selected\" ";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "title", array()), "html", null, true);
            echo "</option>
\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 118
        echo "\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t<div class=\"help-block\" style=\"display:none;\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"form-group form-forIam-group form-notStudent-group\">
\t\t\t\t\t\t<label class=\"col-md-2 control-label\">";
        // line 124
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("职称"), "html", null, true);
        echo "</label>
\t\t\t\t\t\t<div class=\"col-md-7 controls\">
\t\t\t\t\t\t\t<input type=\"text\" id=\"profile_job\" name=\"profile[job]\" class=\"form-control\" value=\"";
        // line 126
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "job", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "job", array()), "")) : ("")), "html", null, true);
        echo "\" readonly=\"readonly\">
\t\t\t\t\t\t\t<div class=\"help-block\" style=\"display:none;\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-md-2 control-label\">";
        // line 132
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("学位"), "html", null, true);
        echo "</label>
\t\t\t\t\t\t<div class=\"col-md-7 controls\">
\t\t\t\t\t\t\t<input type=\"text\" id=\"profile_title\" name=\"profile[title]\" class=\"form-control\" value=\"";
        // line 134
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "title", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "title", array()), "")) : ("")), "html", null, true);
        echo "\" readonly=\"readonly\">
\t\t\t\t\t\t\t<div class=\"help-block\" style=\"display:none;\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-md-2 control-label\">";
        // line 140
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("其他"), "html", null, true);
        echo "</label>
\t\t\t\t\t\t<div class=\"col-md-7 controls\">
\t\t\t\t\t\t\t<textarea type=\"text\" rows=\"4\" maxlength=\"80\" id=\"profile_signature\" name=\"profile[signature]\" class=\"form-control\">";
        // line 142
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "signature", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "signature", array()), "")) : ("")), "html", null, true);
        echo "</textarea>
\t\t\t\t\t\t\t<div class=\"help-block\" style=\"display:none;\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
";
        // line 154
        echo "\t\t\t\t\t<div class=\"form-group\" style=\"display: none\">
\t\t\t\t\t\t<label class=\"col-md-2 control-label\">";
        // line 155
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("个人主页"), "html", null, true);
        echo "</label>
\t\t\t\t\t\t<div class=\"col-md-7 controls\">
\t\t\t\t\t\t\t<input type=\"text\" id=\"profile_site\" name=\"profile[site]\" class=\"form-control\" data-widget-cid=\"widget-4\" data-explain=\"\" value=\"";
        // line 157
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "site", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "site", array()), "")) : ("")), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t<div class=\"help-block\" style=\"display:none;\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"form-group\" style=\"display: none\">
\t\t\t\t\t\t<div class=\"col-md-2 control-label\">
\t\t\t\t\t\t\t<label for=\"weibo\">";
        // line 164
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("微博"), "html", null, true);
        echo "</label>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-7 controls\">
\t\t\t\t\t\t\t<input type=\"text\" id=\"weibo\" name=\"profile[weibo]\" class=\"form-control\" data-widget-cid=\"widget-3\" data-explain=\"\" value=\"";
        // line 167
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "weibo", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "weibo", array()), "")) : ("")), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t<div class=\"help-block\" style=\"display:none;\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-2 controls mts\"><input type=\"checkbox\" name=\"profile[isWeiboPublic]\" ";
        // line 170
        if ($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "isWeiboPublic", array())) {
            echo "checked=\"checked\" ";
        }
        echo "/>公开</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-md-2 control-label\">";
        // line 174
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("工号"), "html", null, true);
        echo "</label>
\t\t\t\t\t\t<div class=\"col-md-7 controls\">
\t\t\t\t\t\t\t<input type=\"text\" id=\"profile_weixin\" name=\"profile[weixin]\" class=\"form-control\" value=\"";
        // line 176
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "weixin", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "weixin", array()), "")) : ("")), "html", null, true);
        echo "\" readonly=\"readonly\">
\t\t\t\t\t\t\t<div class=\"help-block\" style=\"display:none;\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-2 controls mts\" style=\"display: none\"><input type=\"checkbox\" name=\"profile[isWeixinPublic]\" ";
        // line 179
        if ($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "isWeixinPublic", array())) {
            echo "checked=\"checked\" ";
        }
        echo "/>公开</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"form-group\" style=\"display: none\">
\t\t\t\t\t\t<label for=\"profile_qq\" class=\"col-md-2 control-label\">QQ</label>
\t\t\t\t\t\t<div class=\"col-md-7 controls\">
\t\t\t\t\t\t\t<input type=\"text\" id=\"profile_qq\" name=\"profile[qq]\" class=\"form-control\" data-widget-cid=\"widget-2\" data-explain=\"\" value=\"";
        // line 185
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "qq", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "qq", array()), "")) : ("")), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t<div class=\"help-block\" style=\"display:none;\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-2 controls mts\"><input type=\"checkbox\" name=\"profile[isQQPublic]\" ";
        // line 188
        if ($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "isQQPublic", array())) {
            echo "checked=\"checked\"";
        }
        echo "/>公开</div>
\t\t\t\t\t</div>



\t\t\t\t\t";
        // line 193
        if ((isset($context["fields"]) ? $context["fields"] : null)) {
            // line 194
            echo "\t\t\t\t\t<hr>
\t\t\t\t\t";
            // line 195
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["fields"]) ? $context["fields"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 196
                echo "\t\t\t\t\t";
                if (($this->getAttribute($context["field"], "type", array()) == "text")) {
                    // line 197
                    echo "\t\t\t\t\t<div class=\"form-group\" style=\"display: none\">
\t\t\t\t\t\t<label for=\"";
                    // line 198
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "fieldName", array()), "html", null, true);
                    echo "\" class=\"col-md-2 control-label\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "title", array()), "html", null, true);
                    echo "</label>
\t\t\t\t\t\t<div class=\"col-md-7 controls\">
\t\t\t\t\t\t\t<textarea id=\"";
                    // line 200
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "fieldName", array()), "html", null, true);
                    echo "\" name=\"profile[";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "fieldName", array()), "html", null, true);
                    echo "]\" class=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "type", array()), "html", null, true);
                    echo " form-control\">";
                    echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), $this->getAttribute($context["field"], "fieldName", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), $this->getAttribute($context["field"], "fieldName", array()), array(), "array"), "")) : ("")), "html", null, true);
                    echo "</textarea>
\t\t\t\t\t\t\t<div class=\"help-block\" style=\"display:none;\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t";
                } elseif (($this->getAttribute(                // line 204
$context["field"], "type", array()) == "int")) {
                    // line 205
                    echo "\t\t\t\t\t<div class=\"form-group\" style=\"display: none\">
\t\t\t\t\t\t<label for=\"";
                    // line 206
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "fieldName", array()), "html", null, true);
                    echo "\" class=\"col-md-2 control-label\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "title", array()), "html", null, true);
                    echo "</label>
\t\t\t\t\t\t<div class=\"col-md-7 controls\">
\t\t\t\t\t\t\t<input type=\"text\" id=\"";
                    // line 208
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "fieldName", array()), "html", null, true);
                    echo "\" placeholder=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("最大值为9位整数"), "html", null, true);
                    echo "\" name=\"profile[";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "fieldName", array()), "html", null, true);
                    echo "]\" class=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "type", array()), "html", null, true);
                    echo " form-control\"  value=\"";
                    echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), $this->getAttribute($context["field"], "fieldName", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), $this->getAttribute($context["field"], "fieldName", array()), array(), "array"), "")) : ("")), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t<div class=\"help-block\" style=\"display:none;\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t";
                } elseif (($this->getAttribute(                // line 212
$context["field"], "type", array()) == "float")) {
                    // line 213
                    echo "\t\t\t\t\t<div class=\"form-group\" style=\"display: none\">
\t\t\t\t\t\t<label for=\"";
                    // line 214
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "fieldName", array()), "html", null, true);
                    echo "\" class=\"col-md-2 control-label\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "title", array()), "html", null, true);
                    echo "</label>
\t\t\t\t\t\t<div class=\"col-md-7 controls\">
\t\t\t\t\t\t\t<input type=\"text\" id=\"";
                    // line 216
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "fieldName", array()), "html", null, true);
                    echo "\" placeholder=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("保留到2位小数"), "html", null, true);
                    echo "\" name=\"profile[";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "fieldName", array()), "html", null, true);
                    echo "]\" class=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "type", array()), "html", null, true);
                    echo " form-control\"  value=\"";
                    echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), $this->getAttribute($context["field"], "fieldName", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), $this->getAttribute($context["field"], "fieldName", array()), array(), "array"), "")) : ("")), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t<div class=\"help-block\" style=\"display:none;\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t";
                } elseif (($this->getAttribute(                // line 220
$context["field"], "type", array()) == "date")) {
                    // line 221
                    echo "\t\t\t\t\t<div class=\"form-group\" style=\"display: none\">
\t\t\t\t\t\t<label for=\"";
                    // line 222
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "fieldName", array()), "html", null, true);
                    echo "\" class=\"col-md-2 control-label\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "title", array()), "html", null, true);
                    echo "</label>
\t\t\t\t\t\t<div class=\"col-md-7 controls\">
\t\t\t\t\t\t\t<input type=\"text\" id=\"";
                    // line 224
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "fieldName", array()), "html", null, true);
                    echo "\" name=\"profile[";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "fieldName", array()), "html", null, true);
                    echo "]\" class=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "type", array()), "html", null, true);
                    echo " form-control\" value=\"";
                    if ($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), $this->getAttribute($context["field"], "fieldName", array()), array(), "array")) {
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), $this->getAttribute($context["field"], "fieldName", array()), array(), "array"), "html", null, true);
                    }
                    echo "\">
\t\t\t\t\t\t\t<div class=\"help-block\" style=\"display:none;\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t";
                } elseif (($this->getAttribute(                // line 228
$context["field"], "type", array()) == "varchar")) {
                    // line 229
                    echo "\t\t\t\t\t<div class=\"form-group\" style=\"display: none\">
\t\t\t\t\t\t<label for=\"";
                    // line 230
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "fieldName", array()), "html", null, true);
                    echo "\" class=\"col-md-2 control-label\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "title", array()), "html", null, true);
                    echo "</label>
\t\t\t\t\t\t<div class=\"col-md-7 controls\">
\t\t\t\t\t\t\t<input type=\"text\" id=\"";
                    // line 232
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "fieldName", array()), "html", null, true);
                    echo "\" name=\"profile[";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "fieldName", array()), "html", null, true);
                    echo "]\" class=\"form-control\" value=\"";
                    echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), $this->getAttribute($context["field"], "fieldName", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), $this->getAttribute($context["field"], "fieldName", array()), array(), "array"), "")) : ("")), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t<div class=\"help-block\" style=\"display:none;\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t";
                }
                // line 237
                echo "\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 238
            echo "\t\t\t\t\t";
        }
        // line 239
        echo "
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-7 col-md-offset-2\">
\t\t\t\t\t\t\t<button id=\"profile-save-btn\" data-submiting-text=\"";
        // line 242
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("正在保存"), "html", null, true);
        echo "\" type=\"submit\" class=\"btn btn-primary\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("保存"), "html", null, true);
        echo "</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 246
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">
\t\t\t</form>

\t\t";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Settings:profile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  559 => 246,  550 => 242,  545 => 239,  542 => 238,  536 => 237,  524 => 232,  517 => 230,  514 => 229,  512 => 228,  497 => 224,  490 => 222,  487 => 221,  485 => 220,  470 => 216,  463 => 214,  460 => 213,  458 => 212,  443 => 208,  436 => 206,  433 => 205,  431 => 204,  418 => 200,  411 => 198,  408 => 197,  405 => 196,  401 => 195,  398 => 194,  396 => 193,  386 => 188,  380 => 185,  369 => 179,  363 => 176,  358 => 174,  349 => 170,  343 => 167,  337 => 164,  327 => 157,  322 => 155,  319 => 154,  312 => 142,  307 => 140,  298 => 134,  293 => 132,  284 => 126,  279 => 124,  271 => 118,  256 => 116,  252 => 115,  249 => 114,  244 => 111,  241 => 110,  233 => 74,  228 => 72,  223 => 69,  216 => 65,  213 => 64,  207 => 61,  204 => 60,  202 => 59,  198 => 58,  189 => 52,  183 => 51,  179 => 50,  173 => 49,  167 => 46,  162 => 43,  155 => 39,  152 => 38,  146 => 36,  144 => 35,  140 => 34,  133 => 29,  129 => 25,  123 => 22,  117 => 19,  113 => 17,  107 => 15,  105 => 14,  102 => 13,  99 => 12,  93 => 11,  48 => 10,  45 => 9,  42 => 8,  34 => 3,  30 => 1,  28 => 6,  26 => 5,  11 => 1,);
    }
}
