<?php

/* TopxiaAdminBundle:User:edit-modal.html.twig */
class __TwigTemplate_728b02a8ea74f57b9cdcbb7ee67c1908f166fe7a6e690b7b2e402e515a85832e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::bootstrap-modal-layout.html.twig", "TopxiaAdminBundle:User:edit-modal.html.twig", 1);
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
        // line 3
        $context["modalSize"] = "large";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "编辑用户信息";
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "  <head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
    <meta name=\"renderer\" content=\"webkit\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"csrf-token\" content=\"5c52c2477011149dccacef6775eaa2e45f09627c\">
    <title>
      用户管理 -
      用户管理 -
      用户
      | 卫生人才在线学习平台  </title>


    <link href=\"/assets/libs/gallery2/bootstrap/3.1.1/css/bootstrap.css?6.17.13\" rel=\"stylesheet\">
    <link href=\"/assets/css/common.css?6.17.13\" rel=\"stylesheet\">
    <link href=\"/bundles/topxiaadmin/css/admin.css?6.17.13\" rel=\"stylesheet\">
    <link href=\"/bundles/topxiaadmin/css/admin_v2.css?6.17.13\" rel=\"stylesheet\">
    <link href=\"/assets/v2/css/es-icon.css?6.17.13\" rel=\"stylesheet\" media=\"screen\">

    <!--[if lt IE 9]>
    <script src=\"/assets/libs/html5shiv.js?6.17.13\"></script>
    <script src=\"/assets/libs/respond.min.js?6.17.13\"></script>
    <![endif]-->
    <style>.datetimepicker{padding:4px;margin-top:1px;-webkit-border-radius:4px;-moz-border-radius:4px;border-radius:4px;direction:ltr}.datetimepicker-inline{width:220px}.datetimepicker.datetimepicker-rtl{direction:rtl}.datetimepicker.datetimepicker-rtl table tr td span{float:right}.datetimepicker-dropdown,.datetimepicker-dropdown-left{top:0;left:0}[class*=\" datetimepicker-dropdown\"]:before{content:'';display:inline-block;border-left:7px solid transparent;border-right:7px solid transparent;border-bottom:7px solid #ccc;border-bottom-color:rgba(0,0,0,.2);position:absolute}[class*=\" datetimepicker-dropdown\"]:after{content:'';display:inline-block;border-left:6px solid transparent;border-right:6px solid transparent;border-bottom:6px solid #fff;position:absolute}[class*=\" datetimepicker-dropdown-top\"]:before{content:'';display:inline-block;border-left:7px solid transparent;border-right:7px solid transparent;border-top:7px solid #ccc;border-top-color:rgba(0,0,0,.2);border-bottom:0}[class*=\" datetimepicker-dropdown-top\"]:after{content:'';display:inline-block;border-left:6px solid transparent;border-right:6px solid transparent;border-top:6px solid #fff;border-bottom:0}.datetimepicker-dropdown-bottom-left:before{top:-7px;right:6px}.datetimepicker-dropdown-bottom-left:after{top:-6px;right:7px}.datetimepicker-dropdown-bottom-right:before{top:-7px;left:6px}.datetimepicker-dropdown-bottom-right:after{top:-6px;left:7px}.datetimepicker-dropdown-top-left:before{bottom:-7px;right:6px}.datetimepicker-dropdown-top-left:after{bottom:-6px;right:7px}.datetimepicker-dropdown-top-right:before{bottom:-7px;left:6px}.datetimepicker-dropdown-top-right:after{bottom:-6px;left:7px}.datetimepicker>div{display:none}.datetimepicker.minutes div.datetimepicker-minutes{display:block}.datetimepicker.hours div.datetimepicker-hours{display:block}.datetimepicker.days div.datetimepicker-days{display:block}.datetimepicker.months div.datetimepicker-months{display:block}.datetimepicker.years div.datetimepicker-years{display:block}.datetimepicker table{margin:0}.datetimepicker td,.datetimepicker th{text-align:center;width:20px;height:20px;-webkit-border-radius:4px;-moz-border-radius:4px;border-radius:4px;border:0}.table-striped .datetimepicker table tr td,.table-striped .datetimepicker table tr th{background-color:transparent}.datetimepicker table tr td.minute:hover{background:#eee;cursor:pointer}.datetimepicker table tr td.hour:hover{background:#eee;cursor:pointer}.datetimepicker table tr td.day:hover{background:#eee;cursor:pointer}.datetimepicker table tr td.old,.datetimepicker table tr td.new{color:#999}.datetimepicker table tr td.disabled,.datetimepicker table tr td.disabled:hover{background:0;color:#999;cursor:default}.datetimepicker table tr td.today,.datetimepicker table tr td.today:hover,.datetimepicker table tr td.today.disabled,.datetimepicker table tr td.today.disabled:hover{background-color:#fde19a;background-image:-moz-linear-gradient(top,#fdd49a,#fdf59a);background-image:-ms-linear-gradient(top,#fdd49a,#fdf59a);background-image:-webkit-gradient(linear,0 0,0 100%,from(#fdd49a),to(#fdf59a));background-image:-webkit-linear-gradient(top,#fdd49a,#fdf59a);background-image:-o-linear-gradient(top,#fdd49a,#fdf59a);background-image:linear-gradient(top,#fdd49a,#fdf59a);background-repeat:repeat-x;filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#fdd49a', endColorstr='#fdf59a', GradientType=0);border-color:#fdf59a #fdf59a #fbed50;border-color:rgba(0,0,0,.1) rgba(0,0,0,.1) rgba(0,0,0,.25);filter:progid:DXImageTransform.Microsoft.gradient(enabled=false)}.datetimepicker table tr td.today:hover,.datetimepicker table tr td.today:hover:hover,.datetimepicker table tr td.today.disabled:hover,.datetimepicker table tr td.today.disabled:hover:hover,.datetimepicker table tr td.today:active,.datetimepicker table tr td.today:hover:active,.datetimepicker table tr td.today.disabled:active,.datetimepicker table tr td.today.disabled:hover:active,.datetimepicker table tr td.today.active,.datetimepicker table tr td.today:hover.active,.datetimepicker table tr td.today.disabled.active,.datetimepicker table tr td.today.disabled:hover.active,.datetimepicker table tr td.today.disabled,.datetimepicker table tr td.today:hover.disabled,.datetimepicker table tr td.today.disabled.disabled,.datetimepicker table tr td.today.disabled:hover.disabled,.datetimepicker table tr td.today[disabled],.datetimepicker table tr td.today:hover[disabled],.datetimepicker table tr td.today.disabled[disabled],.datetimepicker table tr td.today.disabled:hover[disabled]{background-color:#fdf59a}.datetimepicker table tr td.today:active,.datetimepicker table tr td.today:hover:active,.datetimepicker table tr td.today.disabled:active,.datetimepicker table tr td.today.disabled:hover:active,.datetimepicker table tr td.today.active,.datetimepicker table tr td.today:hover.active,.datetimepicker table tr td.today.disabled.active,.datetimepicker table tr td.today.disabled:hover.active{background-color:#fbf069 \\9}.datetimepicker table tr td.active,.datetimepicker table tr td.active:hover,.datetimepicker table tr td.active.disabled,.datetimepicker table tr td.active.disabled:hover{background-color:#006dcc;background-image:-moz-linear-gradient(top,#08c,#04c);background-image:-ms-linear-gradient(top,#08c,#04c);background-image:-webkit-gradient(linear,0 0,0 100%,from(#08c),to(#04c));background-image:-webkit-linear-gradient(top,#08c,#04c);background-image:-o-linear-gradient(top,#08c,#04c);background-image:linear-gradient(top,#08c,#04c);background-repeat:repeat-x;filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#0088cc', endColorstr='#0044cc', GradientType=0);border-color:#04c #04c #002a80;border-color:rgba(0,0,0,.1) rgba(0,0,0,.1) rgba(0,0,0,.25);filter:progid:DXImageTransform.Microsoft.gradient(enabled=false);color:#fff;text-shadow:0 -1px 0 rgba(0,0,0,.25)}.datetimepicker table tr td.active:hover,.datetimepicker table tr td.active:hover:hover,.datetimepicker table tr td.active.disabled:hover,.datetimepicker table tr td.active.disabled:hover:hover,.datetimepicker table tr td.active:active,.datetimepicker table tr td.active:hover:active,.datetimepicker table tr td.active.disabled:active,.datetimepicker table tr td.active.disabled:hover:active,.datetimepicker table tr td.active.active,.datetimepicker table tr td.active:hover.active,.datetimepicker table tr td.active.disabled.active,.datetimepicker table tr td.active.disabled:hover.active,.datetimepicker table tr td.active.disabled,.datetimepicker table tr td.active:hover.disabled,.datetimepicker table tr td.active.disabled.disabled,.datetimepicker table tr td.active.disabled:hover.disabled,.datetimepicker table tr td.active[disabled],.datetimepicker table tr td.active:hover[disabled],.datetimepicker table tr td.active.disabled[disabled],.datetimepicker table tr td.active.disabled:hover[disabled]{background-color:#04c}.datetimepicker table tr td.active:active,.datetimepicker table tr td.active:hover:active,.datetimepicker table tr td.active.disabled:active,.datetimepicker table tr td.active.disabled:hover:active,.datetimepicker table tr td.active.active,.datetimepicker table tr td.active:hover.active,.datetimepicker table tr td.active.disabled.active,.datetimepicker table tr td.active.disabled:hover.active{background-color:#039 \\9}.datetimepicker table tr td span{display:block;width:23%;height:54px;line-height:54px;float:left;margin:1%;cursor:pointer;-webkit-border-radius:4px;-moz-border-radius:4px;border-radius:4px}.datetimepicker .datetimepicker-hours span{height:26px;line-height:26px}.datetimepicker .datetimepicker-hours table tr td span.hour_am,.datetimepicker .datetimepicker-hours table tr td span.hour_pm{width:14.6%}.datetimepicker .datetimepicker-hours fieldset legend,.datetimepicker .datetimepicker-minutes fieldset legend{margin-bottom:inherit;line-height:30px}.datetimepicker .datetimepicker-minutes span{height:26px;line-height:26px}.datetimepicker table tr td span:hover{background:#eee}.datetimepicker table tr td span.disabled,.datetimepicker table tr td span.disabled:hover{background:0;color:#999;cursor:default}.datetimepicker table tr td span.active,.datetimepicker table tr td span.active:hover,.datetimepicker table tr td span.active.disabled,.datetimepicker table tr td span.active.disabled:hover{background-color:#006dcc;background-image:-moz-linear-gradient(top,#08c,#04c);background-image:-ms-linear-gradient(top,#08c,#04c);background-image:-webkit-gradient(linear,0 0,0 100%,from(#08c),to(#04c));background-image:-webkit-linear-gradient(top,#08c,#04c);background-image:-o-linear-gradient(top,#08c,#04c);background-image:linear-gradient(top,#08c,#04c);background-repeat:repeat-x;filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#0088cc', endColorstr='#0044cc', GradientType=0);border-color:#04c #04c #002a80;border-color:rgba(0,0,0,.1) rgba(0,0,0,.1) rgba(0,0,0,.25);filter:progid:DXImageTransform.Microsoft.gradient(enabled=false);color:#fff;text-shadow:0 -1px 0 rgba(0,0,0,.25)}.datetimepicker table tr td span.active:hover,.datetimepicker table tr td span.active:hover:hover,.datetimepicker table tr td span.active.disabled:hover,.datetimepicker table tr td span.active.disabled:hover:hover,.datetimepicker table tr td span.active:active,.datetimepicker table tr td span.active:hover:active,.datetimepicker table tr td span.active.disabled:active,.datetimepicker table tr td span.active.disabled:hover:active,.datetimepicker table tr td span.active.active,.datetimepicker table tr td span.active:hover.active,.datetimepicker table tr td span.active.disabled.active,.datetimepicker table tr td span.active.disabled:hover.active,.datetimepicker table tr td span.active.disabled,.datetimepicker table tr td span.active:hover.disabled,.datetimepicker table tr td span.active.disabled.disabled,.datetimepicker table tr td span.active.disabled:hover.disabled,.datetimepicker table tr td span.active[disabled],.datetimepicker table tr td span.active:hover[disabled],.datetimepicker table tr td span.active.disabled[disabled],.datetimepicker table tr td span.active.disabled:hover[disabled]{background-color:#04c}.datetimepicker table tr td span.active:active,.datetimepicker table tr td span.active:hover:active,.datetimepicker table tr td span.active.disabled:active,.datetimepicker table tr td span.active.disabled:hover:active,.datetimepicker table tr td span.active.active,.datetimepicker table tr td span.active:hover.active,.datetimepicker table tr td span.active.disabled.active,.datetimepicker table tr td span.active.disabled:hover.active{background-color:#039 \\9}.datetimepicker table tr td span.old{color:#999}.datetimepicker th.switch{width:145px}.datetimepicker thead tr:first-child th,.datetimepicker tfoot tr:first-child th{cursor:pointer}.datetimepicker thead tr:first-child th:hover,.datetimepicker tfoot tr:first-child th:hover{background:#eee}.input-append.date .add-on i,.input-prepend.date .add-on i{cursor:pointer;width:14px;height:14px}body.modal-open .datetimepicker {z-index: 1200 !important;}</style>

    <script>
        var app = {};
        app.debug = false;
        app.version = '6.17.13';
        app.httpHost = 'http://192.168.0.102';
        app.basePath = '';
        app.theme = 'jianmo';
        app.themeGlobalScript = 'theme/global-script';
        app.jsPaths = {\"common\":\"common\",\"theme\":\"\\/themes\\/jianmo\\/js\",\"customwebbundle\":\"\\/bundles\\/customweb\\/js\",\"customadminbundle\":\"\\/bundles\\/customadmin\\/js\",\"topxiawebbundle\":\"\\/bundles\\/topxiaweb\\/js\",\"topxiaadminbundle\":\"\\/bundles\\/topxiaadmin\\/js\",\"classroombundle\":\"\\/bundles\\/classroom\\/js\",\"materiallibbundle\":\"\\/bundles\\/materiallib\\/js\",\"sensitivewordbundle\":\"\\/bundles\\/sensitiveword\\/js\",\"orgbundle\":\"\\/bundles\\/org\\/js\"};

        app.crontab = '/common/crontab';

        var CKEDITOR_BASEPATH = app.basePath + '/assets/libs/ckeditor/4.6.7/';
        var CLOUD_FILE_SERVER = \"\";

        app.config = {\"api\":{\"weibo\":{\"key\":\"\"},\"qq\":{\"key\":\"\"},\"douban\":{\"key\":\"\"},\"renren\":{\"key\":\"\"}},\"cloud\":{\"video_player\":\"http:\\/\\/cdn.staticfile.org\\/GrindPlayerCN\\/1.0.2\\/GrindPlayer.swf\",\"video_player_watermark_plugin\":\"http:\\/\\/cdn.staticfile.org\\/GrindPlayerCN\\/1.0.2\\/Watermake-1.0.3.swf\",\"video_player_fingerprint_plugin\":\"http:\\/\\/cdn.staticfile.org\\/GrindPlayerCN\\/1.0.2\\/Fingerprint-1.0.1.swf\"},\"loading_img_path\":\"\\/assets\\/img\\/default\\/loading.gif?6.17.13\"};

        app.arguments = {};
        app.controller = 'user/list';

        app.scripts = null;

        app.uploadUrl = '/file/upload';
        app.imgCropUrl = '/file/img/crop';
        app.lessonCopyEnabled = '0';

        app.mainScript = '/bundles/topxiaadmin/js/admin-app.js?6.17.13';
    </script>
    <script src=\"/assets/libs/seajs/seajs/2.2.1/sea.js?6.17.13\"></script>
    <script src=\"/assets/libs/seajs/seajs-style/1.0.2/seajs-style.js?6.17.13\"></script>
    <script src=\"/assets/libs/seajs/seajs-text/1.1.1/seajs-text.min.js?6.17.13\"></script>
    <script src=\"/assets/libs/seajs-global-config.js?6.17.13\"></script>
    <script src=\"/assets/libs/seajs-global-config.js?6.17.13\"></script>
  </head>
<form id=\"user-edit-form\" class=\"form-horizontal\" method=\"post\" action=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("admin_user_edit", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()))), "html", null, true);
        echo "\">

  <div class=\"row form-group\">
    <div class=\"col-md-2 control-label\">
      <label for=\"truename\">姓名</label>
    </div>
    <div class=\"col-md-7 controls\">
      <input type=\"text\" id=\"truename\" name=\"truename\" class=\"form-control\" value=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "truename", array()), "html", null, true);
        echo "\" >
    </div>
  </div>

  <div class=\"row form-group\">
    <div class=\"col-md-2 control-label\">
      <label for=\"gender\">性别</label>
    </div>
    <div class=\"col-md-7 controls radios\">
      <div id=\"gender\">
        <input type=\"radio\" id=\"gender_0\" name=\"gender\" value=\"male\"
        ";
        // line 84
        if (($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "gender", array()) == "male")) {
            echo " checked=\"checked\" ";
        }
        echo ">
        <label for=\"gender_0\">男</label>

        <input type=\"radio\" id=\"gender_1\" name=\"gender\" value=\"female\"
        ";
        // line 88
        if (($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "gender", array()) == "female")) {
            echo " checked=\"checked\" ";
        }
        echo ">
        <label for=\"gender_1\">女</label>
      </div>

    </div>
  </div>

    <div class=\"row form-group\">
      <div class=\"col-md-2 control-label\"> 
        <label for=\"idcard\">身份证号</label>
      </div>
      <div class=\"col-md-7 controls\">
        <input type=\"text\" id=\"idcard\" name=\"idcard\" class=\"form-control\" value=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "idcard", array()), "html", null, true);
        echo "\">
     </div>
    </div>
  <div class=\"row form-group\">
    <div class=\"col-md-2 control-label\">
      <label for=\"mobile\">手机号码</label>
    </div>
    <div class=\"col-md-7 controls\">
      <input type=\"text\" id=\"mobile\" name=\"mobile\" class=\"form-control\" value=\"";
        // line 108
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "mobile", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "mobile", array()), "")) : ("")), "html", null, true);
        echo "\">
    </div>
  </div>
";
        // line 132
        echo "    <div class=\"row form-group\">
        <div class=\"col-md-2 control-label\"> 
          <label for=\"company\">科室</label>
        </div>
        <div class=\"col-md-7 controls\">
          ";
        // line 138
        echo "
          <select name=\"company\" class=\"form-control\">
              ";
        // line 140
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["classr"]) ? $context["classr"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 141
            echo "                <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "id", array()), "html", null, true);
            echo "\" ";
            if (($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "company", array()) == $this->getAttribute($context["c"], "id", array()))) {
                echo " selected=\"selected\" ";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "title", array()), "html", null, true);
            echo "</option>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 143
        echo "          </select>
       </div>
    </div>
    
    <div class=\"row form-group\">
      <div class=\"col-md-2 control-label\"> 
        <label for=\"job\">职称</label>
      </div>
      <div class=\"col-md-7 controls\">
        <input type=\"text\" id=\"job\" name=\"job\" class=\"form-control\" value=\"";
        // line 152
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "job", array()), "html", null, true);
        echo "\">
     </div>
    </div>

    <p></p>
    <div class=\"row form-group\">
      <div class=\"col-md-2 control-label\"> 
        <label for=\"title\">学位</label>
      </div>
      <div class=\"col-md-7 controls\">
        <input type=\"text\" id=\"title\" name=\"title\" class=\"form-control\" value=\"";
        // line 162
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "title", array()), "html", null, true);
        echo "\">
     </div>
    </div>
    <p></p>
    <div class=\"row form-group\">
      <div class=\"col-md-2 control-label\"> 
        <label for=\"signature\">其他</label>
      </div>
      <div class=\"col-md-7 controls\">
        <textarea type=\"text\" rows=\"4\" maxlength=\"80\" id=\"signature\" name=\"signature\" class=\"form-control\">";
        // line 171
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "signature", array()), "html", null, true);
        echo "</textarea>
     </div>
    </div>
    <p></p>
    <div class=\"row form-group\" style=\"display: none\">
      <div class=\"col-md-2 control-label\"> 
        <label for=\"about\">自我介绍</label>
      </div>
      <div class=\"col-md-7 controls\">
        <textarea id=\"about\" name=\"about\" data-image-upload-url=\"";
        // line 180
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editor_upload", array("token" => $this->env->getExtension('topxia_web_twig')->makeUpoadToken("default"))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "about", array()), "html", null, true);
        echo "</textarea>
      </div>
    </div>
    <p></p>
    <div class=\"row form-group\" style=\"display: none\">
      <div class=\"col-md-2 control-label\"> 
        <label for=\"site\">个人主页</label>
      </div>
      <div class=\"col-md-7 controls\">
        <input type=\"text\" id=\"site\" name=\"site\" class=\"form-control\" value=\"";
        // line 189
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "site", array()), "html", null, true);
        echo "\">
     </div>
    </div>
    <p></p>
  <div class=\"row form-group\" style=\"display: none\">
      <div class=\"col-md-2 control-label\"> 
        <label for=\"weibo\">微博</label>
      </div>
      <div class=\"col-md-7 controls\">
        <input type=\"text\" id=\"weibo\" name=\"weibo\" class=\"form-control\" value=\"";
        // line 198
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "weibo", array()), "html", null, true);
        echo "\">
     </div>
    </div>
    <p></p>
    <div class=\"row form-group\" style=\"display: none\">
      <div class=\"col-md-2 control-label\"> 
        <label for=\"qq\">QQ</label>
      </div>
      <div class=\"col-md-7 controls\">
        <input type=\"text\" id=\"qq\" name=\"qq\" class=\"form-control\" value=\"";
        // line 207
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "qq", array()), "html", null, true);
        echo "\">
     </div>
    </div>
    <p></p>
    <div class=\"row form-group\">
      <div class=\"col-md-2 control-label\"> 
        <label for=\"weixin\">工号</label>
      </div>
      <div class=\"col-md-7 controls\">
        <input type=\"text\" id=\"weixin\" name=\"weixin\" class=\"form-control\" value=\"";
        // line 216
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "weixin", array()), "html", null, true);
        echo "\">
     </div>
    </div> 

    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 220
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">           

";
        // line 222
        if ((isset($context["fields"]) ? $context["fields"] : null)) {
            // line 223
            echo "          <hr>
          ";
            // line 224
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["fields"]) ? $context["fields"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 225
                echo "          ";
                if (($this->getAttribute($context["field"], "type", array()) == "text")) {
                    // line 226
                    echo "          <div class=\"form-group\">
            <label for=\"";
                    // line 227
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "fieldName", array()), "html", null, true);
                    echo "\" class=\"col-md-2 control-label\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "title", array()), "html", null, true);
                    echo "</label>
            <div class=\"col-md-7 controls\">
              <textarea id=\"";
                    // line 229
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "fieldName", array()), "html", null, true);
                    echo "\" name=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "fieldName", array()), "html", null, true);
                    echo "\" class=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "type", array()), "html", null, true);
                    echo " form-control\" >";
                    echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), $this->getAttribute($context["field"], "fieldName", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), $this->getAttribute($context["field"], "fieldName", array()), array(), "array"), "")) : ("")), "html", null, true);
                    echo "</textarea>
              <div class=\"help-block\" style=\"display:none;\"></div>
            </div>
          </div>
          ";
                } elseif (($this->getAttribute(                // line 233
$context["field"], "type", array()) == "int")) {
                    // line 234
                    echo "          <div class=\"form-group\">
            <label for=\"";
                    // line 235
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "fieldName", array()), "html", null, true);
                    echo "\" class=\"col-md-2 control-label\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "title", array()), "html", null, true);
                    echo "</label>
            <div class=\"col-md-7 controls\">
              <input type=\"text\" id=\"";
                    // line 237
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "fieldName", array()), "html", null, true);
                    echo "\" placeholder=\"最大值为9位整数\" name=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "fieldName", array()), "html", null, true);
                    echo "\" class=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "type", array()), "html", null, true);
                    echo " form-control\"  value=\"";
                    echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), $this->getAttribute($context["field"], "fieldName", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), $this->getAttribute($context["field"], "fieldName", array()), array(), "array"), "")) : ("")), "html", null, true);
                    echo "\">
              <div class=\"help-block\" style=\"display:none;\"></div>
            </div>
          </div>
          ";
                } elseif (($this->getAttribute(                // line 241
$context["field"], "type", array()) == "float")) {
                    // line 242
                    echo "          <div class=\"form-group\">
            <label for=\"";
                    // line 243
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "fieldName", array()), "html", null, true);
                    echo "\" class=\"col-md-2 control-label\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "title", array()), "html", null, true);
                    echo "</label>
            <div class=\"col-md-7 controls\">
              <input type=\"text\" id=\"";
                    // line 245
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "fieldName", array()), "html", null, true);
                    echo "\" placeholder=\"保留到2位小数\" name=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "fieldName", array()), "html", null, true);
                    echo "\" class=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "type", array()), "html", null, true);
                    echo " form-control\" value=\"";
                    echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), $this->getAttribute($context["field"], "fieldName", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), $this->getAttribute($context["field"], "fieldName", array()), array(), "array"), "")) : ("")), "html", null, true);
                    echo "\">
              <div class=\"help-block\" style=\"display:none;\"></div>
            </div>
          </div>
          ";
                } elseif (($this->getAttribute(                // line 249
$context["field"], "type", array()) == "date")) {
                    // line 250
                    echo "          <div class=\"form-group\">
            <label for=\"";
                    // line 251
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "fieldName", array()), "html", null, true);
                    echo "\" class=\"col-md-2 control-label\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "title", array()), "html", null, true);
                    echo "</label>
            <div class=\"col-md-7 controls\">
              <input type=\"text\" id=\"";
                    // line 253
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "fieldName", array()), "html", null, true);
                    echo "\" name=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "fieldName", array()), "html", null, true);
                    echo "\" class=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "type", array()), "html", null, true);
                    echo " form-control\"   value=\"";
                    if ($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), $this->getAttribute($context["field"], "fieldName", array()), array(), "array")) {
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), $this->getAttribute($context["field"], "fieldName", array()), array(), "array"), "html", null, true);
                    }
                    echo "\">
              <div class=\"help-block\" style=\"display:none;\"></div>
            </div>
          </div>
          ";
                } elseif (($this->getAttribute(                // line 257
$context["field"], "type", array()) == "varchar")) {
                    // line 258
                    echo "          <div class=\"form-group\">
            <label for=\"";
                    // line 259
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "fieldName", array()), "html", null, true);
                    echo "\" class=\"col-md-2 control-label\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "title", array()), "html", null, true);
                    echo "</label>
            <div class=\"col-md-7 controls\">
              <input type=\"text\" id=\"";
                    // line 261
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "fieldName", array()), "html", null, true);
                    echo "\" name=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "fieldName", array()), "html", null, true);
                    echo "\" class=\"form-control\"  value=\"";
                    echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), $this->getAttribute($context["field"], "fieldName", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), $this->getAttribute($context["field"], "fieldName", array()), array(), "array"), "")) : ("")), "html", null, true);
                    echo "\">
              <div class=\"help-block\" style=\"display:none;\"></div>
            </div>
          </div>
          ";
                }
                // line 266
                echo "          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 267
            echo "          ";
        }
        // line 268
        echo "
    <button id=\"edit-user-btn\" data-submiting-text=\"正在提交\" type=\"submit\" class=\"btn btn-primary pull-right\" data-toggle=\"form-submit\" data-target=\"#user-edit-form\">保存</button>
    <button type=\"button\" class=\"btn btn-link pull-right\" data-dismiss=\"modal\">取消</button>

</form>
";
    }

    // line 275
    public function block_footer($context, array $blocks = array())
    {
        // line 276
        echo "
  <script>app.load('user/edit-modal')</script>

";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:User:edit-modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  467 => 276,  464 => 275,  455 => 268,  452 => 267,  446 => 266,  434 => 261,  427 => 259,  424 => 258,  422 => 257,  407 => 253,  400 => 251,  397 => 250,  395 => 249,  382 => 245,  375 => 243,  372 => 242,  370 => 241,  357 => 237,  350 => 235,  347 => 234,  345 => 233,  332 => 229,  325 => 227,  322 => 226,  319 => 225,  315 => 224,  312 => 223,  310 => 222,  305 => 220,  298 => 216,  286 => 207,  274 => 198,  262 => 189,  248 => 180,  236 => 171,  224 => 162,  211 => 152,  200 => 143,  185 => 141,  181 => 140,  177 => 138,  170 => 132,  164 => 108,  153 => 100,  136 => 88,  127 => 84,  113 => 73,  103 => 66,  42 => 7,  39 => 6,  33 => 5,  29 => 1,  27 => 3,  11 => 1,);
    }
}
