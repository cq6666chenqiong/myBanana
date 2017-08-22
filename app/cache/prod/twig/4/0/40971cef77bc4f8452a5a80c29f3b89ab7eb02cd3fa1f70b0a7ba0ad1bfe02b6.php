<?php

/* TopxiaAdminBundle:sorce:score.html.twig */
class __TwigTemplate_40971cef77bc4f8452a5a80c29f3b89ab7eb02cd3fa1f70b0a7ba0ad1bfe02b6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle:sorce:layout.html.twig", "TopxiaAdminBundle:sorce:score.html.twig", 1);
        $this->blocks = array(
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaAdminBundle:sorce:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_main($context, array $blocks = array())
    {
        // line 6
        echo "    <script>
        function getExcel(){
            var year = \$(\"#year\").val();
            var department = \$(\"#department\").val();
            myajax('/functionDir/createExcel/make_xueshengtongji.php?year='+year+'&department='+department);
        }
    </script>
    <div style=\"height: 40px\">
        <form action=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("admin_sorce_statistical");
        echo "\" method=\"get\">
            <span>统计年度</span><input id=\"year\" name=\"year\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["year"]) ? $context["year"] : null), "html", null, true);
        echo "\"/>
            <span>科室</span>
            <select id=\"department\" name=\"department\" >
                <option value=\"\">全部</option>
                ";
        // line 19
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["classr"]) ? $context["classr"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["k"]) {
            // line 20
            echo "                   <option ";
            if (((isset($context["department"]) ? $context["department"] : null) == $this->getAttribute($context["k"], "id", array()))) {
                echo " selected ";
            }
            echo " value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["k"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["k"], "title", array()), "html", null, true);
            echo "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['k'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "            </select>
            <input type=\"submit\" value=\"查询\" >
            <button onclick=\"getExcel()\" style=\"float: right\">Excel下载</button>
        </form>

    </div>

    <table id=\"user-table\" class=\"table table-striped table-hover\" data-search-form=\"#user-search-form\">
        <thead>
        <tr>
            <th>科室名称</th>
            <th>用户名</th>
            <th>职称</th>
            <th>年龄</th>
            <th>是否合格</th>
            <th>备注</th>
        </tr>
        </thead>
        <tbody>
                ";
        // line 41
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["arry"]) ? $context["arry"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["ar"]) {
            // line 42
            echo "                    <tr>
                        <td>";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["ar"], 0, array(), "array"), "html", null, true);
            echo "</td>
                        <td>";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["ar"], 1, array(), "array"), "html", null, true);
            echo "</td>
                        <td>";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($context["ar"], 2, array(), "array"), "html", null, true);
            echo "</td>
                        <td>";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($context["ar"], 3, array(), "array"), "html", null, true);
            echo "</td>
                        <td>";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($context["ar"], 4, array(), "array"), "html", null, true);
            echo "</td>
                        <td>";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($context["ar"], 5, array(), "array"), "html", null, true);
            echo "</td>
                    </tr>
                 ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ar'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "        </tbody>
    </table>
    ";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "currentPage", array()), "html", null, true);
        echo "
   ";
        // line 55
        echo "    <ul  class=\"pagination\">
        <li ";
        // line 56
        if (($this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "currentPage", array()) == $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "firstPage", array()))) {
            echo "class=\"disabled\"";
        }
        echo "><a  href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "getPageUrl", array(0 => $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "previousPage", array())), "method"), "html", null, true);
        echo "\">上一页</a></li>
        ";
        // line 57
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "pages", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 58
            echo "            <li ";
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
        // line 60
        echo "        <li ";
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
        return "TopxiaAdminBundle:sorce:score.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 60,  151 => 58,  147 => 57,  139 => 56,  136 => 55,  132 => 53,  128 => 51,  119 => 48,  115 => 47,  111 => 46,  107 => 45,  103 => 44,  99 => 43,  96 => 42,  92 => 41,  71 => 22,  56 => 20,  52 => 19,  45 => 15,  41 => 14,  31 => 6,  28 => 5,  11 => 1,);
    }
}
