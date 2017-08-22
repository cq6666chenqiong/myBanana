<?php

/* ClassroomBundle:ClassroomAdmin:index.html.twig */
class __TwigTemplate_686fa242a9996c29b5cfb9f26f0cf35b8ddbca5b012bbdb068436399b215bd59 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle::layout.html.twig", "ClassroomBundle:ClassroomAdmin:index.html.twig", 1);
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
        // line 3
        $context["menu"] = "admin_classroom_manage";
        // line 5
        $context["script_controller"] = "classroombundle/controller/classroom-admin/classroom";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_main($context, array $blocks = array())
    {
        // line 7
        echo "  <style type=\"text/css\">
    .ri {
      float:right;
    }
    .div{width:400px; height:30px;float:right}
    .input{width:200px;height:30px;float:right}
    .button1{width:100px;height:30px;float:right}
  </style>
  <a class=\"btn btn-info btn-sm\" href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("admin_classroom_create");
        echo "\"><span class=\"glyphicon glyphicon-plus\"></span>创建科室</a>
  <div class=\"form-group mbm div\">
    <button type=\"button\" class=\"btn btn-info btn-sm ri\" onclick=\"myajaxFileUpload('/functionDir/upload_file.php',null)\" ><span class=\"glyphicon glyphicon-plus\"></span>批量创建科室</button>
        <input type=\"text\" class=\"button1\" id=\"copyFile\" name=\"copyFile\"  style=\" width:66%;margin-right:10px;display: none\" />

        <input type=\"file\" class=\"input\" id=\"file\"   name=\"file\" onchange=\"getFile(this,'copyFile')\" />
       <a href=\"#\" onclick=\"myajaxFileUpload('/functionDir/download_keshi.php',null)\">下载模板</a>

  </div>
  <form id=\"message-search-form\" class=\"form-inline well well-sm\" action=\"\" method=\"get\" novalidate>
    ";
        // line 25
        $this->loadTemplate("OrgBundle:Org:org-tree-select.html.twig", "ClassroomBundle:ClassroomAdmin:index.html.twig", 25)->display(array_merge($context, array("orgCode" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "orgCode"), "method"), "modal" => "list")));
        // line 26
        echo "
    <div class=\"form-group\">
      <input class=\"form-control\" type=\"text\" placeholder=\"科室名称\" name=\"title\" value=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "title"), "method"), "html", null, true);
        echo "\">
    </div>

    <button class=\"btn btn-primary\">搜索</button>

  </form>
  ";
        // line 34
        if ((isset($context["classroomInfo"]) ? $context["classroomInfo"] : null)) {
            // line 35
            echo "  <table class=\"table table-striped table-hover\" id=\"classroom-table\">
    <thead>
    <tr>
      <th>科室编号</th>
      <th width=\"40%\">科室名称</th>
      <th>课程数</th>
      ";
            // line 45
            echo "      <th>状态</th>
      <th>操作</th>
    </tr>
    </thead>
    <tbody>

   ";
            // line 51
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["classroomInfo"]) ? $context["classroomInfo"] : null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["classroom"]) {
                // line 52
                echo "      ";
                $context["category"] = (($this->getAttribute((isset($context["categories"]) ? $context["categories"] : null), $this->getAttribute($context["classroom"], "categoryId", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["categories"]) ? $context["categories"] : null), $this->getAttribute($context["classroom"], "categoryId", array()), array(), "array"), null)) : (null));
                // line 53
                echo "      ";
                $this->loadTemplate("ClassroomBundle:ClassroomAdmin:table-tr.html.twig", "ClassroomBundle:ClassroomAdmin:index.html.twig", 53)->display(array_merge($context, array("classroom" => $context["classroom"], "category" => (isset($context["category"]) ? $context["category"] : null))));
                // line 54
                echo "
   ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['classroom'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 56
            echo "
    </tbody>

  </table>
  ";
        } else {
            // line 61
            echo "    <div class=\"empty\">暂无科室信息!</div>
  ";
        }
        // line 63
        echo "  <div class=\"pull-right\">
    ";
        // line 65
        echo "    <ul  class=\"pagination\">
      <li ";
        // line 66
        if (($this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "currentPage", array()) == $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "firstPage", array()))) {
            echo "class=\"disabled\"";
        }
        echo "><a  href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "getPageUrl", array(0 => $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "previousPage", array())), "method"), "html", null, true);
        echo "\">上一页</a></li>
        ";
        // line 67
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "pages", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 68
            echo "          <li ";
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
        // line 70
        echo "      <li ";
        if (($this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "currentPage", array()) == $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "lastPage", array()))) {
            echo "class=\"disabled\"";
        }
        echo "><a  href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "getPageUrl", array(0 => $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "nextPage", array())), "method"), "html", null, true);
        echo "\">下一页</a></li>
    </ul>
</div>


";
    }

    public function getTemplateName()
    {
        return "ClassroomBundle:ClassroomAdmin:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 70,  159 => 68,  155 => 67,  147 => 66,  144 => 65,  141 => 63,  137 => 61,  130 => 56,  115 => 54,  112 => 53,  109 => 52,  92 => 51,  84 => 45,  76 => 35,  74 => 34,  65 => 28,  61 => 26,  59 => 25,  46 => 15,  36 => 7,  33 => 6,  29 => 1,  27 => 5,  25 => 3,  11 => 1,);
    }
}
