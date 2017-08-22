<?php

/* TopxiaWebBundle:CourseStudentManage:quit-record.html.twig */
class __TwigTemplate_3cda4c917a14fb3e8c9edc9064ed4651ba5419002293c9c931249af6c09323ca extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle:CourseStudentManage:index.html.twig", "TopxiaWebBundle:CourseStudentManage:quit-record.html.twig", 1);
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
        $context["submenu"] = "record";
        // line 7
        $context["script_controller"] = "course-manage/students";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "退出记录 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 9
    public function block_maincontent($context, array $blocks = array())
    {
        // line 10
        echo "  <form class=\"form-inline well well-sm \" action=\"\" method=\"get\" novalidate>
    <div class=\"form-group col-md-7\">
      <input class=\"form-control \" style=\"width:45%\" type=\"text\" placeholder=\"请输入用户名/邮箱/手机号\" name=\"keyword\" value=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "keyword"), "method"), "html", null, true);
        echo "\">

      <button class=\"btn btn-primary\">搜索</button>
    </div>
    <div class=\"clearfix\"></div>
  </form>
  
\t<table class=\"table table-striped\" id=\"quit-record-list\">
    <thead>
      <tr>
        <th>学员名称</th>
        <th width=\"30%\">退出原因 </th>
        <th>退出日期</th>
        <th>退款状态</th>
        <th>退款金额  
          <span class=\"glyphicon glyphicon-question-sign text-muted\" id=\"refund-coin-tips\" data-toggle=\"tooltip\" data-placement=\"bottom\" href=\"javascript:\" title=\"\" data-original-title=\"\"></span>
          <div id=\"refund-coin-tips-html\" style=\"display:none;\">
            <div style=\"width:150px;\">
              <span style=\"color:blue;\">1.</span>仅显示通过现金购买加入的学员退款记录<br><br>
              <span style=\"color:blue;\">2.</span>科室课程退款情况请在科室管理中查看<br>
            </div>
          </div>
        </th>
      </tr>
    </thead>
    <tbody>
      ";
        // line 38
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["refunds"]) ? $context["refunds"] : null));
        $context['_iterated'] = false;
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
        foreach ($context['_seq'] as $context["_key"] => $context["refund"]) {
            echo "        
        ";
            // line 39
            $this->loadTemplate("TopxiaWebBundle:CourseStudentManage:quit-record-tr.html.twig", "TopxiaWebBundle:CourseStudentManage:quit-record.html.twig", 39)->display($context);
            // line 40
            echo "      ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 41
            echo "        <tr class=\"empty\"><td colspan=\"20\">无学员记录</td></tr>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['refund'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "    </tbody>
  </table>

  ";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : null)), "method"), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:CourseStudentManage:quit-record.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 46,  119 => 43,  112 => 41,  99 => 40,  97 => 39,  77 => 38,  48 => 12,  44 => 10,  41 => 9,  34 => 3,  30 => 1,  28 => 7,  26 => 5,  11 => 1,);
    }
}
