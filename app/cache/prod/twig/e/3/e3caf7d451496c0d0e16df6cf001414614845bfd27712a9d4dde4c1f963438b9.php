<?php

/* TopxiaWebBundle:OrderRefund:refund-modal.html.twig */
class __TwigTemplate_e3caf7d451496c0d0e16df6cf001414614845bfd27712a9d4dde4c1f963438b9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::bootstrap-modal-layout.html.twig", "TopxiaWebBundle:OrderRefund:refund-modal.html.twig", 1);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("退出学习"), "html", null, true);
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "
  <form id=\"refund-form\" class=\"form-horizontal\" method=\"post\" action=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("order_refund", array("id" => $this->getAttribute((isset($context["target"]) ? $context["target"] : null), "id", array()), "targetType" => (isset($context["targetType"]) ? $context["targetType"] : null))), "html", null, true);
        echo "\" data-goto=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath(((isset($context["targetType"]) ? $context["targetType"] : null) . "_show"), array("id" => $this->getAttribute((isset($context["target"]) ? $context["target"] : null), "id", array()))), "html", null, true);
        echo "\">

    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("退学原因"), "html", null, true);
        echo "</div>
      <div class=\"col-md-8 controls\">

        <select class=\"form-control\" name=\"reason[type]\">
          ";
        // line 13
        echo $this->env->getExtension('topxia_dictionary_twig')->dictSelectOptions("refund_reason");
        echo "
        </select>
        <textarea class=\"form-control\" name=\"reason[note]\" placeholder=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("请输入您的退学原因"), "html", null, true);
        echo "\" style=\"margin-top:10px;display:none;\"></textarea>
        <span class='text-danger warnning'></span>
      </div>
    </div>
    ";
        // line 19
        if (((($this->getAttribute((isset($context["order"]) ? $context["order"] : null), "payment", array()) != "coin") && ((isset($context["maxRefundDays"]) ? $context["maxRefundDays"] : null) > 0)) && (($this->getAttribute((isset($context["order"]) ? $context["order"] : null), "amount", array()) * 100) > 0))) {
            // line 20
            echo "
      <div class=\"form-group\">
        <div class=\"col-md-8 col-md-offset-3\">
          <div class=\"checkbox\">
            <label><input type=\"checkbox\" name=\"applyRefund\" value=\"1\"";
            // line 24
            if ((((isset($context["maxRefundDays"]) ? $context["maxRefundDays"] : null) > 0) && (isset($context["refundOverdue"]) ? $context["refundOverdue"] : null))) {
                echo "disabled";
            }
            echo "> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("申请退款"), "html", null, true);
            echo " <span class=\"text-muted text-sm\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("（"), "html", null, true);
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("购买时的价格："), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "amount", array()), "html", null, true);
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("元"), "html", null, true);
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("）"), "html", null, true);
            echo "</span></label>
          </div>
          ";
            // line 26
            if ((((isset($context["maxRefundDays"]) ? $context["maxRefundDays"] : null) > 0) && (isset($context["refundOverdue"]) ? $context["refundOverdue"] : null))) {
                // line 27
                echo "            <div class=\"alert alert-warning\">已经超出了退款期限";
                echo twig_escape_filter($this->env, (isset($context["maxRefundDays"]) ? $context["maxRefundDays"] : null), "html", null, true);
                echo "天，不能申请退款。</div>
          ";
            }
            // line 29
            echo "        </div>
      </div>

    ";
        }
        // line 33
        echo "
    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">

  </form>
";
    }

    // line 39
    public function block_footer($context, array $blocks = array())
    {
        // line 40
        echo "  <button class=\"btn btn-danger refund-btn\" type=\"submit\" data-toggle=\"form-submit\" data-target=\"#refund-form\" data-loading-text=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("正在退出"), "html", null, true);
        echo "...\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("退出学习"), "html", null, true);
        echo "</button>
  <script>app.load('order-refund/order-refund-modal')</script>
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:OrderRefund:refund-modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 40,  117 => 39,  109 => 34,  106 => 33,  100 => 29,  94 => 27,  92 => 26,  77 => 24,  71 => 20,  69 => 19,  62 => 15,  57 => 13,  50 => 9,  42 => 6,  39 => 5,  36 => 4,  30 => 3,  11 => 1,);
    }
}
