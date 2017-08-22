<?php

/* TopxiaWebBundle:Course:learn.html.twig */
class __TwigTemplate_292dfbae33ec330a7553b3b2b2b901b5dcd93375bc02ab212f6250b579a8a85f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::layout.html.twig", "TopxiaWebBundle:Course:learn.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'header' => array($this, 'block_header'),
            'footer' => array($this, 'block_footer'),
            'esBar' => array($this, 'block_esBar'),
            'full_content' => array($this, 'block_full_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 5
        $context["hideSetupHint"] = true;
        // line 7
        if ($this->env->getExtension('topxia_web_twig')->isPluginInstalled("Homework")) {
            // line 8
            $context["script_arguments"] = array("customChapter" => _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("course.custom_chapter_enabled"), true), "plugins" => array(0 => "lesson", 1 => "question", 2 => "note", 3 => "material", 4 => "homework"));
        } else {
            // line 10
            $context["script_arguments"] = array("customChapter" => _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("course.custom_chapter_enabled"), true), "plugins" => array(0 => "lesson", 1 => "question", 2 => "note", 3 => "material"));
        }
        // line 13
        $context["script_controller"] = "course/learn";
        // line 14
        $context["bodyClass"] = "lesson-dashboard-page";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "title", array()), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 16
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 17
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
    }

    // line 20
    public function block_header($context, array $blocks = array())
    {
    }

    // line 21
    public function block_footer($context, array $blocks = array())
    {
    }

    // line 22
    public function block_esBar($context, array $blocks = array())
    {
    }

    // line 23
    public function block_full_content($context, array $blocks = array())
    {
        // line 24
        echo "    <style>
        #wrapper{height:500px;-webkit-overflow-scrolling:touch;overflow:auto;}
    </style>
    <style type=\"text/css\">
        .popWindow {
            background-color: #707070;
            width: 100%;
            height: 100%;
            left: 0;
            top: 0;
            filter: alpha(opacity=0);
            opacity: 0.0;
            z-index: 1;
            position: absolute;

        }
        #warp{ width:100%;height:80px;background:#000}
        .maskLayer {
            background-color:#000;
            width: 100%;
            height: 100%;
            line-height: 30px;
            left: 50%;
            top: 50%;
            color:#fff;
            z-index: 2;
            position: absolute;
            text-align:center;
        }
    </style>
    <script language=\"javascript\" type=\"text/javascript\">
        function showDiv() {
            document.getElementById('popWindow').style.display = 'block';
            document.getElementById('maskLayer').style.display = 'block';
        }
        function closeDiv() {
            document.getElementById('popWindow').style.display = 'none';
            document.getElementById('maskLayer').style.display = 'none';
        }
    </script>
    <link href=\"/video/css/video-js.css\" rel=\"stylesheet\">
    <!-- If you'd like to support IE8 -->
    <script src=\"/video/js/videojs-ie8.min.js\"></script>
    <div id=\"maskLayer\" class=\"popWindow\" style=\"display: none;\">

        <a href=\"#\" onclick=\"closeDiv()\" style=\"cursor:pointer;text-decoration: none;\">
            关闭蒙板
        </a>
    </div>


    <script src=\"/video/video.min.js\"></script>
    <script src=\"/video/myvideo.js\"></script>
    <div class=\"lesson-dashboard\" id=\"lesson-dashboard\"
         data-course-id=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "html", null, true);
        echo "\"
         data-course-uri=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
        echo "\"
         data-dashboard-uri=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_learn", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
        echo "\"
         data-watch-limit=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("magic.lesson_watch_limit"), "html", null, true);
        echo "\"
         data-starttime = \"";
        // line 82
        echo twig_escape_filter($this->env, ((array_key_exists("starttime", $context)) ? (_twig_default_filter((isset($context["starttime"]) ? $context["starttime"] : null), "")) : ("")), "html", null, true);
        echo "\"
         data-hide-media-lesson-learn-btn=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->isFeatureEnabled("hide_media_lesson_learn_btn"), "html", null, true);
        echo "\">
        <div class=\"dashboard-content\">
            ";
        // line 91
        echo "            ";
        $context["classroom"] = $this->env->getExtension('topxia_data_twig')->getData("GetClassroomByCourseId", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array())));
        // line 92
        echo "            ";
        if ((isset($context["classroom"]) ? $context["classroom"] : null)) {
            // line 93
            echo "                <a class=\"btn btn-primary  nav-btn back-course-btn\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_show", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()))), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-chevron-left\" ></span> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("返回科室"), "html", null, true);
            echo "</a>
            ";
        } else {
            // line 95
            echo "                <a class=\"btn btn-primary  nav-btn back-course-btn\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-chevron-left\" ></span> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("返回课程"), "html", null, true);
            echo "</a>
            ";
        }
        // line 97
        echo "
            <a class=\"btn btn-primary  nav-btn prev-lesson-btn\" href=\"javascript:\" data-role=\"prev-lesson\" data-placement=\"right\" title=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("上一课时"), "html", null, true);
        echo "\"><span class=\"glyphicon glyphicon-chevron-up\" title=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("上一课时"), "html", null, true);
        echo "\"></span></a>
            <a class=\"btn btn-primary nav-btn next-lesson-btn\" href=\"javascript:\" data-role=\"next-lesson\" data-placement=\"right\" title=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("下一课时"), "html", null, true);
        echo "\"><span class=\"glyphicon glyphicon-chevron-down\"></span></a>

            <div class=\"dashboard-header\">
                <div class=\"pull-left title-group\">
          <span class=\"chapter-label\">
            ";
        // line 104
        if ( !_twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("course.custom_chapter_enabled"), true)) {
            // line 105
            echo "              <span data-role=\"custom-chapter-number\">第";
            if ($this->env->getExtension('topxia_web_twig')->getSetting("default.chapter_name")) {
                echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("default.chapter_name"), "章"), "html", null, true);
            } else {
                echo "章";
            }
            echo "</span></span>
                    ";
        } else {
            // line 107
            echo "                        第<span data-role=\"chapter-number\"></span>";
            if ($this->env->getExtension('topxia_web_twig')->getSetting("default.chapter_name")) {
                echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("default.chapter_name"), "章"), "html", null, true);
            } else {
                echo "章";
            }
            echo "</span>
                    ";
        }
        // line 109
        echo "                    <span class=\"divider\">&raquo;</span>
                    <span class=\"chapter-label\">
            ";
        // line 111
        if ( !_twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("course.custom_chapter_enabled"), true)) {
            // line 112
            echo "                        <span data-role=\"custom-unit-number\">第";
            if ($this->env->getExtension('topxia_web_twig')->getSetting("default.part_name")) {
                echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("default.part_name"), "节"), "html", null, true);
            } else {
                echo "节";
            }
            echo "</span></span>
                ";
        } else {
            // line 114
            echo "                    第<span data-role=\"unit-number\"></span>";
            if ($this->env->getExtension('topxia_web_twig')->getSetting("default.part_name")) {
                echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("default.part_name"), "节"), "html", null, true);
            } else {
                echo "节";
            }
            echo "</span>
                    ";
        }
        // line 116
        echo "                    <span class=\"divider\">&raquo;</span>
                    <span class=\"item-label\">";
        // line 117
        if (_twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("course.custom_chapter_enabled"), true)) {
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("课时"), "html", null, true);
            echo "<span data-role=\"lesson-number\"></span>";
        }
        echo "</span>
                    <span class=\"item-title\" data-role=\"lesson-title\">";
        // line 118
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("正在加载"), "html", null, true);
        echo "...</span>
                </div>
            </div>

            <div class=\"dashboard-body\">
                <div class=\"lesson-content\" id=\"lesson-video-content\" data-role=\"lesson-content\" style=\"display:none;\"
                        ";
        // line 124
        if ((($this->env->getExtension('topxia_web_twig')->getSetting("storage.video_watermark") > 0) && $this->env->getExtension('topxia_web_twig')->getSetting("storage.video_watermark_image"))) {
            // line 125
            echo "                            data-watermark=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getFpath($this->env->getExtension('topxia_web_twig')->getSetting("storage.video_watermark_image"), null, true), "html", null, true);
            echo "\"
                        ";
        }
        // line 127
        echo "                        ";
        if (($this->env->getExtension('topxia_web_twig')->getSetting("storage.video_fingerprint") && $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()))) {
            // line 128
            echo "                            data-fingerprint=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getFingerprint(), "html", null, true);
            echo "\"
                        ";
        }
        // line 130
        echo "                     data-user-id=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "id", array()), "html", null, true);
        echo "\"
                     data-balloon-player=\"1\"
                ></div>
                <div class=\"watermarkEmbedded\" ></div>

                <div class=\"lesson-content lesson-content-audio\" id=\"lesson-audio-content\" data-role=\"lesson-content\" style=\"display:none;\"></div>
                <div class=\"lesson-content\" id=\"lesson-swf-content\" data-role=\"lesson-content\"  onclick=\"showDiv()\"></div>
                <div class=\"lesson-content\" id=\"lesson-iframe-content\" data-role=\"lesson-content\" style=\"display:none;\"></div>
                <div class=\"lesson-content lesson-content-text\" id=\"lesson-text-content\" data-role=\"lesson-content\" style=\"display:none;\"
                        ";
        // line 139
        if ((_twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("course.copy_enabled"), 0) > 0)) {
            echo " oncopy=\"return false;\" oncut=\"return false;\" onselectstart=\"return false\" oncontextmenu=\"return false;\"";
        }
        echo ">
                    <div class=\"lesson-content-text-body\"></div>
                </div>

                <div class=\"lesson-content lesson-content-document\" id=\"lesson-document-content\" data-role=\"lesson-content\" style=\"display:none;\"
                     ";
        // line 144
        if ($this->env->getExtension('topxia_web_twig')->getSetting("magic.doc_watermark")) {
            echo "data-watermark-url=\"";
            echo $this->env->getExtension('routing')->getPath("cloud_doc_watermark");
            echo "\" ";
        }
        // line 145
        echo "                >
                    <div class=\"lesson-content-document-body\"></div>
                </div>

                <div class=\"lesson-content lesson-content-text\" id=\"lesson-live-content\" data-role=\"lesson-content\" style=\"display:none;\">
                    <div class=\"lesson-content-text-body\"></div>
                </div>
                <div class=\"lesson-content lesson-content-text\" id=\"lesson-unpublished-content\" data-role=\"lesson-content\" style=\"display:none;\">
                    <div class=\"lesson-content-text-body\">";
        // line 153
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("当前课时正在编辑中，暂时无法观看。"), "html", null, true);
        echo "</div>
                </div>

                <div class=\"lesson-content lesson-content-text\" id=\"lesson-testpaper-content\" data-role=\"lesson-content\" style=\"display:none;\">
                    <div class=\"lesson-content-text-body\"></div>
                </div>
                <div class=\"lesson-content lesson-content-text\" id=\"lesson-ppt-content\" data-role=\"lesson-content\" style=\"display:none;\"
                     ";
        // line 160
        if ($this->env->getExtension('topxia_web_twig')->getSetting("magic.ppt_watermark")) {
            echo "data-watermark-url=\"";
            echo $this->env->getExtension('routing')->getPath("cloud_ppt_watermark");
            echo "\" ";
        }
        // line 161
        echo "                >
                    <div class=\"lesson-content-text-body\"></div>
                </div>

            </div>

            <div class=\"dashboard-footer clearfix\">
                <div class=\"pull-right\">
                    ";
        // line 181
        echo "                    <input type=\"hidden\" id=\"lessonUrl\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "mediaUri", array()), "html", null, true);
        echo "\">
                    <input type=\"hidden\" id=\"lessonId\" value=\"";
        // line 182
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "id", array()), "html", null, true);
        echo "\">
                    <input type=\"hidden\" id=\"lessonType\" value=\"";
        // line 183
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "mediaSource", array()), "html", null, true);
        echo "\">
                   ";
        // line 185
        echo "                    <input type=\"button\" id=\"start\" onclick=\"start();\" value=\"开始\" style=\"height:30px;width:50px;\">
                   ";
        // line 188
        echo "                    ";
        // line 191
        echo "                </div>
            </div>

        </div>

        <div class=\"toolbar toolbar-open\" id=\"lesson-dashboard-toolbar\">
            <div class=\"toolbar-nav\">

                <ul class=\"toolbar-nav-stacked\" id=\"lesson-toolbar-primary\"></ul>
                ";
        // line 211
        echo "                </ul>

                <ul class=\"toolbar-nav-stacked\" id=\"lesson-toolbar-secondary\">
                    <li class=\"hide-pane\" style=\"display:none;\">
                        <a href=\"javascript:\"><span class=\"glyphicon glyphicon-chevron-right\"></span></a>
                    </li>
                </ul>

            </div>
            <div class=\"toolbar-pane-container\">
            </div>
        </div>

    </div>

    <div class=\"modal\" id=\"course-learned-modal\" style=\"display:none;\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                    <h4 class=\"modal-title\">";
        // line 231
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("学习进度提示"), "html", null, true);
        echo "</h4>
                </div>
                <div class=\"modal-body\">
                    <p class=\"text-success\">";
        // line 234
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("赞一个，这个课程你已经都学完啦，你可以再回顾一下或者去看看别的课程"), "html", null, true);
        echo "～～～</p>
                </div>
                <div class=\"modal-footer\">
                    <a href=\"";
        // line 237
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-primary\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("回课程主页"), "html", null, true);
        echo "</a>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <div class=\"modal\" id=\"mediaPlayed-control-modal\" style=\"display:none;\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                    <h4 class=\"modal-title\">";
        // line 248
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("媒体课时学习提示"), "html", null, true);
        echo "</h4>
                </div>
                <div class=\"modal-body\">
                    <p class=\"text-success\">";
        // line 251
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("此课时设置了必须完整播放完整个课时才能学完"), "html", null, true);
        echo "～～</p>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <div class=\"modal\" id=\"homeworkDone-control-modal\" style=\"display:none;\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                    <h4 class=\"modal-title\">";
        // line 262
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("作业未完成提示"), "html", null, true);
        echo "</h4>
                </div>
                <div class=\"modal-body\">
                    <p class=\"text-success\">";
        // line 265
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("此课时设置了必须做完本课时作业并提交后才能学完"), "html", null, true);
        echo "～～</p>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->


";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Course:learn.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  458 => 265,  452 => 262,  438 => 251,  432 => 248,  416 => 237,  410 => 234,  404 => 231,  382 => 211,  371 => 191,  369 => 188,  366 => 185,  362 => 183,  358 => 182,  353 => 181,  343 => 161,  337 => 160,  327 => 153,  317 => 145,  311 => 144,  301 => 139,  288 => 130,  282 => 128,  279 => 127,  273 => 125,  271 => 124,  262 => 118,  255 => 117,  252 => 116,  242 => 114,  232 => 112,  230 => 111,  226 => 109,  216 => 107,  206 => 105,  204 => 104,  196 => 99,  190 => 98,  187 => 97,  179 => 95,  171 => 93,  168 => 92,  165 => 91,  160 => 83,  156 => 82,  152 => 81,  148 => 80,  144 => 79,  140 => 78,  84 => 24,  81 => 23,  76 => 22,  71 => 21,  66 => 20,  59 => 17,  56 => 16,  48 => 3,  44 => 1,  42 => 14,  40 => 13,  37 => 10,  34 => 8,  32 => 7,  30 => 5,  11 => 1,);
    }
}
