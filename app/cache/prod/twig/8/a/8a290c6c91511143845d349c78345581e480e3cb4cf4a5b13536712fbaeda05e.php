<?php

/* TopxiaWebBundle:CourseStudentManage:show-modal.html.twig */
class __TwigTemplate_8a290c6c91511143845d349c78345581e480e3cb4cf4a5b13536712fbaeda05e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::bootstrap-modal-layout.html.twig", "TopxiaWebBundle:CourseStudentManage:show-modal.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
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
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("个人详细信息"), "html", null, true);
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "
<table class=\"table table-striped table-condenseda table-bordered\">
\t<tr>
\t\t<th width=\"25%\">";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("用户名"), "html", null, true);
        echo "</th>
\t\t<td width=\"75%\">
\t\t\t";
        // line 12
        echo "\t\t\t";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "nickname", array()), "html", null, true);
        echo "
\t\t</td>
\t</tr>

\t<tr>
\t\t<th>Email</th>
\t\t<td>
\t\t  ";
        // line 19
        $context["emailArr"] = twig_split_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "email", array()), "@");
        // line 20
        echo "\t      ";
        if (($this->getAttribute((isset($context["emailArr"]) ? $context["emailArr"] : null), 1, array(), "array") != "myBanana.net")) {
            // line 21
            echo "\t        ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "email", array()), "html", null, true);
            echo "
\t      ";
        } else {
            // line 23
            echo "\t        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("暂无"), "html", null, true);
            echo "
\t      ";
        }
        // line 25
        echo "\t\t</td>
\t</tr>

\t<tr>
\t\t<th>";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("姓名"), "html", null, true);
        echo "</th>
\t\t<td>
\t\t\t";
        // line 31
        if ($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "truename", array())) {
            // line 32
            echo "\t\t\t\t";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "truename", array()), "html", null, true);
            echo "
\t\t\t";
        } else {
            // line 34
            echo "\t\t\t\t";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("暂无"), "html", null, true);
            echo "
\t\t\t";
        }
        // line 36
        echo "\t\t</td>
\t</tr>

\t<tr>
\t\t<th>";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("性别"), "html", null, true);
        echo "</th>
\t\t<td>
\t\t\t";
        // line 42
        if (($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "gender", array()) == "mail")) {
            // line 43
            echo "\t\t\t\t";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("男"), "html", null, true);
            echo "
\t\t\t";
        } elseif (($this->getAttribute(        // line 44
(isset($context["profile"]) ? $context["profile"] : null), "gender", array()) == "femail")) {
            // line 45
            echo "\t\t\t\t";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("女"), "html", null, true);
            echo "
\t\t\t";
        } else {
            // line 47
            echo "\t\t\t\t";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("暂无"), "html", null, true);
            echo "
\t\t\t";
        }
        // line 49
        echo "\t\t</td>
\t</tr>

\t<tr>
\t\t<th>";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("科室"), "html", null, true);
        echo "</th>
\t\t<td>
\t\t\t";
        // line 55
        if ($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "company", array())) {
            // line 56
            echo "\t\t\t\t";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "company", array()), "html", null, true);
            echo "
\t\t\t";
        } else {
            // line 58
            echo "\t\t\t\t";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("暂无"), "html", null, true);
            echo "
\t\t\t";
        }
        // line 60
        echo "\t\t</td>
\t</tr>

\t<tr>
\t\t<th>";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("职称"), "html", null, true);
        echo "</th>
\t\t<td>
\t\t\t";
        // line 66
        if ($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "job", array())) {
            // line 67
            echo "\t\t\t\t";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "job", array()), "html", null, true);
            echo "
\t\t\t";
        } else {
            // line 69
            echo "\t\t\t\t";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("暂无"), "html", null, true);
            echo "
\t\t\t";
        }
        // line 71
        echo "\t\t</td>
\t</tr>

\t<tr>
\t\t<th>";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("学位"), "html", null, true);
        echo "</th>
\t\t<td>
\t\t";
        // line 77
        if ($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "title", array())) {
            // line 78
            echo "\t\t\t\t";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "title", array()), "html", null, true);
            echo "
\t\t\t";
        } else {
            // line 80
            echo "\t\t\t\t";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("暂无"), "html", null, true);
            echo "
\t\t\t";
        }
        // line 82
        echo "\t\t</td>
\t</tr>

\t<tr>
\t\t<th>";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("手机号码"), "html", null, true);
        echo "</th>
\t\t<td>
\t\t";
        // line 88
        if ($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "mobile", array())) {
            // line 89
            echo "\t\t\t\t";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "mobile", array()), "html", null, true);
            echo "
\t\t\t";
        } else {
            // line 91
            echo "\t\t\t\t";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("暂无"), "html", null, true);
            echo "
\t\t\t";
        }
        // line 93
        echo "\t\t</td>
\t</tr>

\t<tr>
\t\t<th>";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("其他"), "html", null, true);
        echo "</th>
\t\t<td>
\t\t";
        // line 99
        if ($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "signature", array())) {
            // line 100
            echo "\t\t\t\t";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "signature", array()), "html", null, true);
            echo "
\t\t\t";
        } else {
            // line 102
            echo "\t\t\t\t";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("暂无"), "html", null, true);
            echo "
\t\t\t";
        }
        // line 104
        echo "\t\t</td>
\t</tr>
";
        // line 140
        echo "\t<tr>
\t\t<th>";
        // line 141
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("工号"), "html", null, true);
        echo "</th>
\t\t<td>
\t\t\t";
        // line 143
        if ($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "weixin", array())) {
            // line 144
            echo "\t\t\t\t";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "weixin", array()), "html", null, true);
            echo "
\t\t\t";
        } else {
            // line 146
            echo "\t\t\t\t";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("暂无"), "html", null, true);
            echo "
\t\t\t";
        }
        // line 148
        echo "\t\t</td>
\t</tr>
";
        // line 162
        echo "\t";
        // line 182
        echo "  </table>
</table>

";
    }

    // line 187
    public function block_footer($context, array $blocks = array())
    {
        // line 188
        echo "\t<button type=\"button\" class=\"btn btn-primary\" data-dismiss=\"modal\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("关闭"), "html", null, true);
        echo "</button>
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:CourseStudentManage:show-modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  301 => 188,  298 => 187,  291 => 182,  289 => 162,  285 => 148,  279 => 146,  273 => 144,  271 => 143,  266 => 141,  263 => 140,  259 => 104,  253 => 102,  247 => 100,  245 => 99,  240 => 97,  234 => 93,  228 => 91,  222 => 89,  220 => 88,  215 => 86,  209 => 82,  203 => 80,  197 => 78,  195 => 77,  190 => 75,  184 => 71,  178 => 69,  172 => 67,  170 => 66,  165 => 64,  159 => 60,  153 => 58,  147 => 56,  145 => 55,  140 => 53,  134 => 49,  128 => 47,  122 => 45,  120 => 44,  115 => 43,  113 => 42,  108 => 40,  102 => 36,  96 => 34,  90 => 32,  88 => 31,  83 => 29,  77 => 25,  71 => 23,  65 => 21,  62 => 20,  60 => 19,  49 => 12,  44 => 9,  39 => 6,  36 => 5,  30 => 3,  11 => 1,);
    }
}
