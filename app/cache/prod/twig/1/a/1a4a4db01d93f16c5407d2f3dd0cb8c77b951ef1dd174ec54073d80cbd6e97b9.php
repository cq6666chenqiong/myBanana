<?php

/* TopxiaWebBundle:CourseManage:base.html.twig */
class __TwigTemplate_1a4a4db01d93f16c5407d2f3dd0cb8c77b951ef1dd174ec54073d80cbd6e97b9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle:CourseManage:layout.html.twig", "TopxiaWebBundle:CourseManage:base.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle:CourseManage:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 5
        $context["side_nav"] = "base";
        // line 6
        $context["script_controller"] = "course-manage/base";
        // line 8
        $context["script_arguments"] = array("categoryUrl" => $this->env->getExtension('routing')->getPath("category_all"), "tagMatchUrl" => $this->env->getExtension('routing')->getPath("tag_match"), "locationUrl" => $this->env->getExtension('routing')->getPath("location_all"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("基本信息"), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 14
    public function block_main($context, array $blocks = array())
    {
        // line 15
        echo "    <link rel=\"stylesheet\" type=\"text/css\" href=\"/css/styles.css\" media=\"all\">


    <script src=\"/js/jquery.js\"></script>
    <script type=\"text/javascript\" src=\"/js/moment.js\"></script>
    <script type=\"text/javascript\" src=\"/js/bootstrap-datetimepicker.js\"></script>

  <script type=\"text/javascript\">
      \$(document).ready(function(){
          // date time picker
          if(\$(\".iDate.full\").length>0){
              \$(\".iDate.full\").datetimepicker({
                  locale: \"zh-cn\",
                  format: \"YYYY-MM-DD a hh:mm\",
                  dayViewHeaderFormat: \"YYYY年 MMMM\"
              });
          }
          if(\$(\".iDate.date\").length>0){
              \$(\".iDate.date\").datetimepicker({
                  locale:\"zh-cn\",
                  format:\"YYYY-MM-DD\",
                  dayViewHeaderFormat:\"YYYY年 MMMM\"
              });
          }
      })
  </script>
<div class=\"panel panel-default panel-col\">
  <div class=\"panel-heading\">";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("基本信息"), "html", null, true);
        echo "</div>
  <div class=\"panel-body\">
    <form class=\"form-horizontal\" id=\"course-form\" method=\"post\">

      ";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "flash_messages", array(), "method"), "html", null, true);
        echo "

      <div class=\"form-group\">
        <label class=\"col-md-2 control-label\">";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("标题"), "html", null, true);
        echo "</label>
        <div class=\"col-md-8 controls\">
          <input type=\"text\" id=\"course_title\" name=\"title\" required=\"required\" class=\"form-control\" value=\"";
        // line 51
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "title", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "title", array()), "")) : ("")), "html", null, true);
        echo "\">
          <div class=\"help-block\" style=\"display:none;\"></div>
        </div>
      </div>

      <div class=\"form-group\">
        <label class=\"col-md-2 control-label\">";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("简介"), "html", null, true);
        echo "</label>
        <div class=\"col-md-8 controls\">
          <textarea id=\"course_subtitle\" name=\"subtitle\" required=\"required\" class=\"form-control\">";
        // line 59
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "subtitle", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "subtitle", array()), "")) : ("")), "html", null, true);
        echo "</textarea>
          <div class=\"help-block\" style=\"display:none;\"></div>
        </div>
      </div>

      <div class=\"form-group\">
        <label class=\"col-md-2 control-label\">";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("学科类型"), "html", null, true);
        echo "</label>
        <div class=\"col-md-8 controls\">
          <select id=\"\" name=\"\" required=\"required\" >
            <option value=\"1\">内科</option>
          </select>
          <select id=\"\" name=\"\" required=\"required\" >
            <option value=\"1\">心内科</option>
          </select>
        </div>
      </div>


      <div class=\"form-group\">
        <label class=\"col-md-2 control-label\">";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("资源类型"), "html", null, true);
        echo "</label>
        <div class=\"col-md-8 controls\">
          <input type=\"text\" id=\"course_tags\" name=\"tags\" required=\"required\" class=\"width-full select2-offscreen\" tabindex=\"-1\" value=\"";
        // line 80
        echo twig_escape_filter($this->env, twig_join_filter((isset($context["tags"]) ? $context["tags"] : null), ","), "html", null, true);
        echo "\" data-explain=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("用于按标签搜索课程、相关课程的提取等，由网校管理员后台统一管理"), "html", null, true);
        echo "\">
            ";
        // line 82
        echo "        </div>
      </div>

        <div class=\"form-group\" style=\"display: none\">
        <label class=\"col-md-2 control-label\">";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("课程购买"), "html", null, true);
        echo "</label>
          <div class=\"col-md-8 controls radios\">
            ";
        // line 88
        echo $this->env->getExtension('topxia_html_twig')->radios("buyable", array("1" => $this->env->getExtension('translator')->trans("开启"), "0" => $this->env->getExtension('translator')->trans("关闭")), (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "buyable", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "buyable", array()), 1)) : (1)));
        echo "
           <div class=\"help-block\">";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("关闭后课程将无法在线购买加入、由教师/管理员后台导入。"), "html", null, true);
        echo "</div>
        </div>
      </div>

      ";
        // line 93
        if (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "type", array()) == "live")) {
            // line 94
            echo "
      <div class=\"form-group\">
        <label class=\"col-md-2 control-label\" for=\"maxStudentNum-field\">直播最大";
            // line 96
            echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name"), "学员"), "html", null, true);
            echo "数</label>
        <div class=\"col-md-8 controls\">
          <input type=\"text\" id=\"maxStudentNum-field\" name=\"maxStudentNum\" class=\"form-control width-input width-input-large\" value=\"";
            // line 98
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "maxStudentNum", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "maxStudentNum", array()), 20)) : (20)), "html", null, true);
            echo "\" data-live-capacity-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("live_capacity", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("人"), "html", null, true);
            echo "
          <div class=\"help-block\" style=\"display:none;\"></div>
        </div>
      </div>

      ";
        }
        // line 104
        echo "      <div class=\"form-group\" style=\"display: none\">
        <label class=\"col-md-2 control-label\" for=\"course_expiryDay\">";
        // line 105
        if ($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name")) {
            echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name"), $this->env->getExtension('translator')->trans("学员")), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("学员"), "html", null, true);
        }
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("有效期"), "html", null, true);
        echo "</label>
        <div class=\"col-md-8 controls\">
         ";
        // line 108
        echo "            <input type=\"text\" id=\"course_expiryDay\" name=\"expiryDay\" required=\"required\" class=\"form-control width-input width-input-large\" value=\"365\" > ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("天"), "html", null, true);
        echo "
          <div class=\"help-block\">设置该值后，";
        // line 109
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("default.user_name", "学员"), "html", null, true);
        echo "只能在有效期内进行课程的相关操作，系统默认会在到期前10天提醒";
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("default.user_name", "学员"), "html", null, true);
        echo "。该值为0，则不做此限制。</div>
        </div>
      </div>



        <div class=\"form-group\">
            <label class=\"col-md-2 control-label\">";
        // line 116
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("有效时间"), "html", null, true);
        echo "</label>
            <div class=\"col-md-8 controls\">
                <div class=\"iDate date\">
                    <input type=\"text\" id=\"expiryTime\" name=\"expiryTime\" value=\"";
        // line 119
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "expiryTimeStr", array()), "html", null, true);
        echo "\">
                    <button type=\"button\" class=\"addOn\"></button>
                </div>
            </div>
        </div>

        <div class=\"form-group\">
            <label class=\"col-md-2 control-label\">";
        // line 126
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("课程类型"), "html", null, true);
        echo "</label>
            <div class=\"col-md-8 controls\">
                <div class=\"iDate date\">
                   <select name=\"buyable\">
                        <option value=\"1\" ";
        // line 130
        if (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "buyable", array()) == 1)) {
            echo " selected=\"selected\" ";
        }
        echo ">必修</option>
                        <option value=\"0\" ";
        // line 131
        if (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "buyable", array()) == 0)) {
            echo " selected=\"selected\" ";
        }
        echo ">选修</option>
                   </select>
                </div>
            </div>
        </div>



      ";
        // line 139
        if (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "type", array()) == "normal")) {
            // line 140
            echo "        <div class=\"form-group\" style=\"display: none\">
          <label class=\"col-md-2 control-label\">";
            // line 141
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("连载状态"), "html", null, true);
            echo "</label>
          <div class=\"col-md-8 controls radios\">
            ";
            // line 143
            echo $this->env->getExtension('topxia_html_twig')->radios("serializeMode", array("none" => $this->env->getExtension('translator')->trans("非连载课程"), "serialize" => $this->env->getExtension('translator')->trans("更新中"), "finished" => $this->env->getExtension('translator')->trans("已完结")), (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "serializeMode", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "serializeMode", array()), "none")) : ("none")));
            echo "
          </div>
        </div>
      ";
        }
        // line 178
        echo "      ";
        $this->loadTemplate("OrgBundle:Org:org-tree-select.html.twig", "TopxiaWebBundle:CourseManage:base.html.twig", 178)->display(array_merge($context, array("orgCode" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "orgCode", array()), "inputClass" => "width-input width-input-large")));
        // line 188
        echo "      <div class=\"form-group\">
        <div class=\"col-md-offset-2 col-md-8 controls\">
            <button class=\"btn btn-fat btn-primary\" id=\"course-create-btn\" type=\"submit\">";
        // line 190
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("保存"), "html", null, true);
        echo "</button>
        </div>
      </div>

      <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 194
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">

    </form>
  </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:CourseManage:base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  293 => 194,  286 => 190,  282 => 188,  279 => 178,  272 => 143,  267 => 141,  264 => 140,  262 => 139,  249 => 131,  243 => 130,  236 => 126,  226 => 119,  220 => 116,  208 => 109,  203 => 108,  193 => 105,  190 => 104,  177 => 98,  172 => 96,  168 => 94,  166 => 93,  159 => 89,  155 => 88,  150 => 86,  144 => 82,  138 => 80,  133 => 78,  117 => 65,  108 => 59,  103 => 57,  94 => 51,  89 => 49,  83 => 46,  76 => 42,  47 => 15,  44 => 14,  36 => 3,  32 => 1,  30 => 8,  28 => 6,  26 => 5,  11 => 1,);
    }
}
