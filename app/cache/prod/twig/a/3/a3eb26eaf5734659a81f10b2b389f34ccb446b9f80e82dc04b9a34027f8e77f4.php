<?php

/* ClassroomBundle:ClassroomAdmin:classroomadd.html.twig */
class __TwigTemplate_a3eb26eaf5734659a81f10b2b389f34ccb446b9f80e82dc04b9a34027f8e77f4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::layout.html.twig", "ClassroomBundle:ClassroomAdmin:classroomadd.html.twig", 1);
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
        // line 5
        $context["script_controller"] = "classroombundle/controller/classroom-admin/create";
        // line 6
        $this->env->getExtension('topxia_web_twig')->loadScript("classroombundle/controller/classroom-admin/classroom-create");
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "创建";
        echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), "科室"), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        // line 10
        echo "<div class=\"row\">
  <div class=\"col-md-offset-2 col-md-8\">
    <div class=\"panel panel-default panel-page\">
      <div class=\"panel-heading\"><h2>创建科室</h2></div>

        <form id=\"classroom-create-form\" class=\"form-horizontal\" method=\"post\">

          ";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "flash_messages", array(), "method"), "html", null, true);
        echo "

          <div class=\"form-group\">
            <div class=\"col-md-3 control-label\">
              <label for=\"classroom_title\" class=\"required\">科室名称</label>
            </div>
            <div class=\"col-md-8 controls\">
              <input type=\"text\" id=\"classroom_title\" name=\"title\" required=\"required\" class=\"form-control\" data-widget-cid=\"widget-1\" data-explain=\"\">
              <div class=\"help-block\" style=\"display:none;\"></div>
            </div>
          </div>

        ";
        // line 29
        $this->loadTemplate("OrgBundle:Org:org-tree-select.html.twig", "ClassroomBundle:ClassroomAdmin:classroomadd.html.twig", 29)->display(array_merge($context, array("lablecolmd" => 3)));
        // line 30
        echo "
          <div class=\"form-group\" style=\"display: none\">
            <div class=\"col-md-3 control-label\">
              <label >科室展示</label>
            </div>
            <div id=\"create-classroom\"  class=\"col-md-8 controls radios\">
              <label>
              <input id=\"showable-open\" type=\"radio\" name=\"showable\" value=\"1\" checked=\"checked\" > 开启
              </label>
              <label>
                <input id=\"showable-close\" type=\"radio\" name=\"showable\" value=\"0\"> 关闭
              </label>
              <div class=\"help-block\">关闭后，";
        // line 42
        echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), "科室"), "html", null, true);
        echo "将彻底隐藏，无法在前台查看到。</div>
            </div>

          </div>
          <div class=\"form-group\" style=\"display: none\">
            <div id='buyable'>
              <div class=\"col-md-3 control-label\">
                <label >";
        // line 49
        echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), "科室"), "html", null, true);
        echo "购买</label>
              </div>
              <div class=\"col-md-8 controls radios\">
                <label>
                  <input id=\"buyable-open\" type=\"radio\" name=\"buyable\" value=\"1\" checked=\"checked\" > 开启
                </label>
                <label>
                  <input id=\"buyable-close\" type=\"radio\" name=\"buyable\" value=\"0\"> 关闭
                </label>
                <div class=\"help-block\">关闭后";
        // line 58
        echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), "科室"), "html", null, true);
        echo "将无法在线购买加入。</div>
              </div>
            </div>

          </div>

          <div class=\"form-group\">
            <div class=\"col-md-offset-3 col-md-8 controls\">
              <input id=\"classroom-create-btn\" data-submiting-text=\"正在创建\" class=\"btn btn-fat btn-primary\" type=\"submit\" value=\"创建\">
            </div>
          </div>

          <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">

        </form>

    </div>

  </div>

</div>
";
    }

    public function getTemplateName()
    {
        return "ClassroomBundle:ClassroomAdmin:classroomadd.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 70,  108 => 58,  96 => 49,  86 => 42,  72 => 30,  70 => 29,  55 => 17,  46 => 10,  43 => 9,  34 => 3,  30 => 1,  28 => 6,  26 => 5,  11 => 1,);
    }
}
