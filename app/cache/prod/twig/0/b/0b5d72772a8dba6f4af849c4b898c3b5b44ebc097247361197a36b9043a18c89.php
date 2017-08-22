<?php

/* TopxiaAdminBundle:User:index.html.twig */
class __TwigTemplate_0b5d72772a8dba6f4af849c4b898c3b5b44ebc097247361197a36b9043a18c89 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("TopxiaAdminBundle::layout.html.twig", "TopxiaAdminBundle:User:index.html.twig", 2);
        $this->blocks = array(
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaAdminBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 4
        $context["menu"] = "admin_user_manage";
        // line 6
        $context["script_controller"] = "user/list";
        // line 2
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    public function block_main($context, array $blocks = array())
    {
        // line 9
        echo "<style type=\"text/css\">
  .ri {
    float:right;
  }
  .div{width:400px; height:30px;float:right}
  .input{width:200px;height:30px;float:right}
  .button1{width:100px;height:30px;float:right}
</style>
";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "flash_messages", array(), "method"), "html", null, true);
        echo "

<div>

  <a class=\"btn btn-info btn-sm\" href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("admin_user_create");
        echo "\"><span class=\"glyphicon glyphicon-plus\"></span>添加用户</a>


  <div class=\"form-group div\">

    <button type=\"button\" class=\"btn btn-info btn-sm button1\"  onclick=\"myajaxFileUpload('/functionDir/upload_members.php',null)\" class=\"btn\"><span class=\"glyphicon glyphicon-plus\"></span>批量创建用户</button>
    <input type=\"text\" id=\"copyFile\" name=\"copyFile\"  style=\" width:66%;margin-right:10px;display: none\" />

    <input type=\"file\" class=\"input\"id=\"file\"    name=\"file\" onchange=\"getFile(this,'copyFile')\"  />
    <a href=\"/functionDir/download_student.php\">下载模板</a>

  </div>
</div>
    <div>
<form id=\"user-search-form\" class=\"form-inline well well-sm\" action=\"\" method=\"get\" novalidate>
  <div class=\"mbm\">
    ";
        // line 37
        $this->loadTemplate("OrgBundle:Org:org-tree-select.html.twig", "TopxiaAdminBundle:User:index.html.twig", 37)->display(array_merge($context, array("orgCode" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "orgCode"), "method"), "modal" => "list")));
        // line 38
        echo "   <!--
    <select class=\"form-control\" name=\"datePicker\" id=\"datePicker\">
      ";
        // line 40
        echo $this->env->getExtension('topxia_html_twig')->selectOptions(array("longinDate" => "登录时间", "registerDate" => "注册时间"), $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "datePicker"), "method"), "--时间类型--");
        echo "
    </select>

    <div class=\"form-group \">
      <input class=\"form-control\" type=\"text\" id=\"startDate\" name=\"startDate\" value=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "query", array()), "get", array(0 => "startDate"), "method"), "html", null, true);
        echo "\" placeholder=\"起始时间\">
      -
      <input class=\"form-control\" type=\"text\" id=\"endDate\" name=\"endDate\" value=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "query", array()), "get", array(0 => "endDate"), "method"), "html", null, true);
        echo "\" placeholder=\"结束时间\">
    </div>
  </div>
  -->
    ";
        // line 57
        echo "  <span class=\"divider\"></span>
  ";
        // line 65
        echo "  <div class=\"form-group\">
    <select id=\"keywordType\" name=\"keywordType\" class=\"form-control\">
      ";
        // line 67
        echo $this->env->getExtension('topxia_html_twig')->selectOptions($this->env->getExtension('topxia_web_twig')->getDict("userKeyWordType"), (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "query", array()), "get", array(0 => "keywordType"), "method")) ? ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "query", array()), "get", array(0 => "keywordType"), "method")) : ("nickname")));
        echo "
    </select>
  </div>

  <div class=\"form-group\">
    <input type=\"text\" id=\"keyword\" name=\"keyword\" class=\"form-control\" value=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "query", array()), "get", array(0 => "keyword"), "method"), "html", null, true);
        echo "\" placeholder=\"关键词\">
  </div>


  <button class=\"btn btn-primary\">搜索</button>

  ";
        // line 78
        if ($this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN")) {
            // line 79
            echo "    ";
            if ((isset($context["showUserExport"]) ? $context["showUserExport"] : null)) {
                // line 80
                echo "      <a class=\"btn btn-primary mhs\" id=\"user-export\" data-toggle=\"modal\" data-target=\"#modal\" data-url=\"";
                echo $this->env->getExtension('routing')->getPath("admin_user_export");
                echo "\">导出搜索结果</a>
    ";
            }
            // line 82
            echo "  ";
        }
        // line 83
        echo "</form>

<table id=\"user-table\" class=\"table table-striped table-hover\" data-search-form=\"#user-search-form\">
  <thead>
    <tr>
      <th>用户名</th>
      <th>手机号</th>
      <th>工号</th>
      <th>科室</th>
      <th>学位</th>
      <th>职称</th>
      <th>操作</th>
    </tr>
  </thead>
  <tbody>
    <p class=\"text-muted\">
      <span class=\"mrl\">用户总数：<strong class=\"inflow-num\">";
        // line 99
        echo twig_escape_filter($this->env, (isset($context["userCount"]) ? $context["userCount"] : null), "html", null, true);
        echo "</strong></span>
    </p>
    ";
        // line 101
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 102
            echo "        ";
            $this->loadTemplate("TopxiaAdminBundle:User:user-table-tr.html.twig", "TopxiaAdminBundle:User:index.html.twig", 102)->display(array_merge($context, array("user" => $context["user"], "profile" => $this->getAttribute((isset($context["profiles"]) ? $context["profiles"] : null), $this->getAttribute($context["user"], "id", array()), array(), "array"))));
            // line 103
            echo "    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 104
        echo "  </tbody>
</table>
";
        // line 107
        echo "



    </div>
  <ul  class=\"pagination ri\">
    <li ";
        // line 113
        if (($this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "currentPage", array()) == $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "firstPage", array()))) {
            echo "class=\"disabled\"";
        }
        echo "><a  href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "getPageUrl", array(0 => $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "previousPage", array())), "method"), "html", null, true);
        echo "\">上一页</a></li>
      ";
        // line 114
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "pages", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 115
            echo "        <li ";
            if (($context["page"] == $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "currentPage", array()))) {
                echo "class=\"active\"";
            }
            echo "><a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "getPageUrl", array(0 => $context["page"]), "method"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["page"], "html", null, true);
            echo "</a></li>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 117
        echo "    <li ";
        if (($this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "currentPage", array()) == $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "lastPage", array()))) {
            echo "class=\"disabled\"";
        }
        echo "><a  href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "getPageUrl", array(0 => $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "nextPage", array())), "method"), "html", null, true);
        echo "\">下一页</a></li>
  </ul>
";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:User:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  231 => 117,  216 => 115,  212 => 114,  204 => 113,  196 => 107,  192 => 104,  178 => 103,  175 => 102,  158 => 101,  153 => 99,  135 => 83,  132 => 82,  126 => 80,  123 => 79,  121 => 78,  112 => 72,  104 => 67,  100 => 65,  97 => 57,  90 => 46,  85 => 44,  78 => 40,  74 => 38,  72 => 37,  53 => 21,  46 => 17,  36 => 9,  33 => 8,  29 => 2,  27 => 6,  25 => 4,  11 => 2,);
    }
}
