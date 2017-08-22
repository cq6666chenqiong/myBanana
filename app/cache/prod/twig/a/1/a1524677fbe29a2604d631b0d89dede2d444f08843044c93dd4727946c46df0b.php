<?php

/* TopxiaWebBundle:MyCourse:batstudentcourse1.htm.twig */
class __TwigTemplate_a1524677fbe29a2604d631b0d89dede2d444f08843044c93dd4727946c46df0b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle:CourseStudentManage:index.html.twig", "TopxiaWebBundle:MyCourse:batstudentcourse1.htm.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'maincontent' => array($this, 'block_maincontent'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle:CourseStudentManage:index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 5
        $context["submenu"] = "student";
        // line 7
        $context["script_controller"] = "course-manage/students";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "学员管理 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 9
    public function block_maincontent($context, array $blocks = array())
    {
        // line 10
        echo "<script>
    function fun(){
                var value = \$('input[type=checkbox]:checked').map(function(){return this.value}).get().join(',');
                document.getElementById('uids').value = value;
                document.getElementById('keshi1').value = document.getElementById('keshi').value;
                return true;
    }


    function bat() {
        \$s = \$('#all').is(\":checked\");
        if(\$s){
            \$('input[name=uid]').each(
                function(){
                    \$(this).prop(\"checked\",true);
                }
            );
        }else{
            \$('input[name=uid]').each(
                function(){
                    \$(this).prop(\"checked\",false);
                }
            );
        }
    }
</script>



    <div class=\"form-group\" style=\"width: 100%\">
        <form action=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_fetch_bat_student", array("courseId" => (isset($context["courseId"]) ? $context["courseId"] : null))), "html", null, true);
        echo "\">
            <select id=\"keshi\" name=\"keshi\" class=\"form-control\" style=\"width: 30%;float: left\">
                ";
        // line 42
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["classr"]) ? $context["classr"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["k"]) {
            // line 43
            echo "                    <option ";
            if (((isset($context["keshi"]) ? $context["keshi"] : null) == $this->getAttribute($context["k"], "id", array()))) {
                echo " selected ";
            }
            echo " value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["k"], "id", array()), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["k"], "title", array()), "html", null, true);
            echo " </option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['k'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "            </select>
            <button type=\"submit\" clas=\"btn bbtn btn-info btn-sm mhs\" style=\"width: 10%\">搜索</button>
        </form>
    </div>
    <div class=\"form-group\" style=\"width: 100%\">
        <input input type=\"checkbox\" id=\"all\"  onclick=\"bat()\">全选
    </div>

    <form action=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_give_bat_student", array("courseId" => (isset($context["courseId"]) ? $context["courseId"] : null))), "html", null, true);
        echo "\" >
            <table class=\"table table-striped table-hover\" >
                <th>
                    <tr>
                        <td>选择框</td>
                        <td>工号</td>
                        <td>姓名</td>
                    </tr>
                </th>
                <tbody id=\"userMemberBody\">
                ";
        // line 63
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["u"]) {
            // line 64
            echo "                   <tr>
                       <td><input type=\"checkbox\" name=\"uid\" value=\"";
            // line 65
            echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "id", array()), "html", null, true);
            echo "\"/></td>
                       <td>";
            // line 66
            echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "num", array()), "html", null, true);
            echo "</td>
                       <td>";
            // line 67
            echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "nickname", array()), "html", null, true);
            echo "</td>
                   </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['u'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "                </tbody>
            </table>
        <input id=\"uids\" name=\"uids\" type=\"hidden\"  />
        <input id=\"keshi1\" name=\"keshi1\" type=\"hidden\"  />
        <button type=\"submit\" onclick=\"fun();\" clas=\"btn btn-info btn-sm\" >提交</button>
    </form>

";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:MyCourse:batstudentcourse1.htm.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 70,  138 => 67,  134 => 66,  130 => 65,  127 => 64,  123 => 63,  110 => 53,  100 => 45,  85 => 43,  81 => 42,  76 => 40,  44 => 10,  41 => 9,  34 => 3,  30 => 1,  28 => 7,  26 => 5,  11 => 1,);
    }
}
