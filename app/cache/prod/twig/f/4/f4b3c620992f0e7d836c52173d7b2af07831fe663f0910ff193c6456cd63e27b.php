<?php

/* TopxiaAdminBundle:sorce:departmentsorce.html.twig */
class __TwigTemplate_f4b3c620992f0e7d836c52173d7b2af07831fe663f0910ff193c6456cd63e27b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle:sorce:layout.html.twig", "TopxiaAdminBundle:sorce:departmentsorce.html.twig", 1);
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
        echo "<script>
    function getExcel(){
        var year = \$(\"#year\").val();
        myajax('/functionDir/createExcel/make_xuefentongji.php?year='+year);
    }
</script>
    <div style=\"height: 40px\">
        <form action=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("admin_sorce_statisticaldepartment");
        echo "\" method=\"get\">
        <span>统计年度</span><input id=\"year\" name=\"year\" value=\"";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["year"]) ? $context["year"] : null), "html", null, true);
        echo "\"/><input type=\"submit\" value=\"查询\">
            <button onclick=\"getExcel()\" style=\"float: right\">Excel下载</button>
        </form>

    </div>

    <table id=\"user-table\" class=\"table table-striped table-hover\" data-search-form=\"#user-search-form\">
        <thead>
        <tr>
            <th>科室名称</th>
            <th>在岗人数</th>
            <th>初级合格人数</th>
            <th>中级合格人数</th>
            <th>副高级合格人数</th>
            <th>高级合格人数</th>
            <th>30岁以下合格人数</th>
            <th>30-40岁合格人数</th>
            <th>40-50岁合格人数</th>
            <th>50岁以上合格人数</th>
            <th>合计人数</th>
            <th>合格率</th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 38
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["kkeys"]) ? $context["kkeys"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["k"]) {
            // line 39
            echo "            <tr>
                <td>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["keshi"]) ? $context["keshi"] : null), $context["k"], array(), "array"), "html", null, true);
            echo "</td>
                <td>";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["arrayk"]) ? $context["arrayk"] : null), $context["k"], array(), "array"), 1, array(), "array"), "html", null, true);
            echo "</td>
                <td>";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["arrayk"]) ? $context["arrayk"] : null), $context["k"], array(), "array"), 2, array(), "array"), "html", null, true);
            echo "</td>
                <td>";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["arrayk"]) ? $context["arrayk"] : null), $context["k"], array(), "array"), 3, array(), "array"), "html", null, true);
            echo "</td>
                <td>";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["arrayk"]) ? $context["arrayk"] : null), $context["k"], array(), "array"), 4, array(), "array"), "html", null, true);
            echo "</td>
                <td>";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["arrayk"]) ? $context["arrayk"] : null), $context["k"], array(), "array"), 5, array(), "array"), "html", null, true);
            echo "</td>
                <td>";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["arrayk"]) ? $context["arrayk"] : null), $context["k"], array(), "array"), 6, array(), "array"), "html", null, true);
            echo "</td>
                <td>";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["arrayk"]) ? $context["arrayk"] : null), $context["k"], array(), "array"), 7, array(), "array"), "html", null, true);
            echo "</td>
                <td>";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["arrayk"]) ? $context["arrayk"] : null), $context["k"], array(), "array"), 8, array(), "array"), "html", null, true);
            echo "</td>
                <td>";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["arrayk"]) ? $context["arrayk"] : null), $context["k"], array(), "array"), 9, array(), "array"), "html", null, true);
            echo "</td>
                <td>";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["arrayk"]) ? $context["arrayk"] : null), $context["k"], array(), "array"), 10, array(), "array"), "html", null, true);
            echo "</td>
                <td>";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["arrayk"]) ? $context["arrayk"] : null), $context["k"], array(), "array"), 11, array(), "array"), "html", null, true);
            echo "%</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['k'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "        <tr>
            <th>合计</th>
            <th>";
        // line 56
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["heji"]) ? $context["heji"] : null), 0, array(), "array"), "html", null, true);
        echo "</th>
            <th>";
        // line 57
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["heji"]) ? $context["heji"] : null), 1, array(), "array"), "html", null, true);
        echo "</th>
            <th>";
        // line 58
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["heji"]) ? $context["heji"] : null), 2, array(), "array"), "html", null, true);
        echo "</th>
            <th>";
        // line 59
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["heji"]) ? $context["heji"] : null), 3, array(), "array"), "html", null, true);
        echo "</th>
            <th>";
        // line 60
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["heji"]) ? $context["heji"] : null), 4, array(), "array"), "html", null, true);
        echo "</th>
            <th>";
        // line 61
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["heji"]) ? $context["heji"] : null), 5, array(), "array"), "html", null, true);
        echo "</th>
            <th>";
        // line 62
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["heji"]) ? $context["heji"] : null), 6, array(), "array"), "html", null, true);
        echo "</th>
            <th>";
        // line 63
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["heji"]) ? $context["heji"] : null), 7, array(), "array"), "html", null, true);
        echo "</th>
            <th>";
        // line 64
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["heji"]) ? $context["heji"] : null), 8, array(), "array"), "html", null, true);
        echo "</th>
            <th>";
        // line 65
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["heji"]) ? $context["heji"] : null), 9, array(), "array"), "html", null, true);
        echo "</th>
            <th>";
        // line 66
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["heji"]) ? $context["heji"] : null), 10, array(), "array"), "html", null, true);
        echo "%</th>
        </tr>
        </tbody>
    </table>

";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:sorce:departmentsorce.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 66,  171 => 65,  167 => 64,  163 => 63,  159 => 62,  155 => 61,  151 => 60,  147 => 59,  143 => 58,  139 => 57,  135 => 56,  131 => 54,  122 => 51,  118 => 50,  114 => 49,  110 => 48,  106 => 47,  102 => 46,  98 => 45,  94 => 44,  90 => 43,  86 => 42,  82 => 41,  78 => 40,  75 => 39,  71 => 38,  44 => 14,  40 => 13,  31 => 6,  28 => 5,  11 => 1,);
    }
}
