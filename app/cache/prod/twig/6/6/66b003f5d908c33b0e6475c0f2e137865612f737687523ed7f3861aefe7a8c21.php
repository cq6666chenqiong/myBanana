<?php

/* ClassroomBundle:ClassroomManage:header.html.twig */
class __TwigTemplate_66b003f5d908c33b0e6475c0f2e137865612f737687523ed7f3861aefe7a8c21 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["unsetted"] = "";
        // line 2
        if ( !$this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "about", array())) {
            // line 3
            $context["unsetted"] = ((isset($context["unsetted"]) ? $context["unsetted"] : null) . ",简介");
        }
        // line 5
        if ( !$this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "smallPicture", array())) {
            // line 6
            $context["unsetted"] = ((isset($context["unsetted"]) ? $context["unsetted"] : null) . ",图片");
        }
        // line 13
        if (($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "courseNum", array()) == 0)) {
            // line 14
            $context["unsetted"] = ((isset($context["unsetted"]) ? $context["unsetted"] : null) . ",课程");
        }
        // line 16
        echo "

<div class=\"es-section course-manage-header clearfix\">
  <img class=\"picture\" src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getFpath($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "smallPicture", array()), "classroom.png"), "html", null, true);
        echo "\">
  <h1 class=\"title\"><a href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_show", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "title", array()), "html", null, true);
        echo "</a>
    ";
        // line 21
        if (($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "status", array()) == "draft")) {
            // line 22
            echo "    <span class=\"label label-warning \">未发布</span>
    ";
        } elseif (($this->getAttribute(        // line 23
(isset($context["classroom"]) ? $context["classroom"] : null), "status", array()) == "closed")) {
            // line 24
            echo "    <span class=\"label label-danger \">已关闭</span>
    ";
        }
        // line 26
        echo "    ";
        if (($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "status", array()) == "published")) {
            // line 27
            echo "    <span class=\"label label-success\"> 已发布</span>
    ";
        }
        // line 29
        echo "  </h1>

  <div class=\"toolbar hidden-xs\">
    ";
        // line 32
        if (($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "status", array()) == "published")) {
            // line 33
            echo "      <div class=\"btn-group\">
        <a class=\"btn btn-default dropdown-toggle btn-sm\" href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_show", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()))), "html", null, true);
            echo "\">返回科室主页</a>
      </div>
    ";
        }
        // line 51
        echo "
      ";
        // line 52
        if (($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "status", array()) != "published")) {
            // line 53
            echo "      <div class=\"btn-group\">
        <button type=\"button\" class=\"btn btn-success btn-sm\" data-toggle=\"modal\" data-target=\"#myModal\">
          发布
        </button>
      </div>

      <div id=\"myModal\" class=\"modal fade\">
        <div class=\"modal-dialog\">
          <div class=\"modal-content\">
            <div class=\"modal-header\">
              <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
              <h4 class=\"modal-title\">发布科室</h4>
            </div>
            <div class=\"modal-body\">
              <p>
                ";
            // line 68
            if ((twig_length_filter($this->env, (isset($context["unsetted"]) ? $context["unsetted"] : null)) > 0)) {
                // line 69
                echo "                ";
                $context["unsetted"] = twig_split_filter($this->env, $this->env->getExtension('topxia_web_twig')->subStr((isset($context["unsetted"]) ? $context["unsetted"] : null), 1, (twig_length_filter($this->env, (isset($context["unsetted"]) ? $context["unsetted"] : null)) - 1)), ",");
                // line 70
                echo "                <span class=\"text-danger\">
                    ";
                // line 71
                echo twig_escape_filter($this->env, twig_join_filter((isset($context["unsetted"]) ? $context["unsetted"] : null), "，"), "html", null, true);
                echo "还未设置
                </span>
                ";
            }
            // line 74
            echo "                &nbsp;确定要发布吗？
              </p>
            </div>
            <div class=\"modal-footer\">
              <a data-dismiss=\"modal\" href=\"\">取消</a>&nbsp;
              <button type=\"button\" class=\"btn btn-success\" id=\"publishSure\" data-url=\"";
            // line 79
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_manage_publish", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()))), "html", null, true);
            echo "\">确定</button>
            </div>
          </div>
        </div>
      </div>
    ";
        }
        // line 85
        echo "
  </div>
</div>

";
        // line 89
        $this->env->getExtension('topxia_web_twig')->loadScript("classroombundle/controller/classroom/manage/publish");
    }

    public function getTemplateName()
    {
        return "ClassroomBundle:ClassroomManage:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 89,  137 => 85,  128 => 79,  121 => 74,  115 => 71,  112 => 70,  109 => 69,  107 => 68,  90 => 53,  88 => 52,  85 => 51,  79 => 34,  76 => 33,  74 => 32,  69 => 29,  65 => 27,  62 => 26,  58 => 24,  56 => 23,  53 => 22,  51 => 21,  45 => 20,  41 => 19,  36 => 16,  33 => 14,  31 => 13,  28 => 6,  26 => 5,  23 => 3,  21 => 2,  19 => 1,);
    }
}
