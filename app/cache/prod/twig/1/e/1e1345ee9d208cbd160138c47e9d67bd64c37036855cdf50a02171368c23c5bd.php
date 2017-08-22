<?php

/* TopxiaWebBundle:CourseLessonManage:list-item.html.twig */
class __TwigTemplate_1e1345ee9d208cbd160138c47e9d67bd64c37036855cdf50a02171368c23c5bd extends Twig_Template
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
        echo "<li class=\"item-lesson clearfix\" id=\"lesson-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "id", array()), "html", null, true);
        echo "\" data-file-id=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "mediaId", array()), "html", null, true);
        echo "\" data-lesson-type=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "type", array()), "html", null, true);
        echo "\" style=\"word-break: break-all;\" >
  <div class=\"item-line\"></div>
  <div class=\"item-content\">
    ";
        // line 4
        $context["mediaStatus"] = (($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "mediaStatus", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "mediaStatus", array()), null)) : (null));
        // line 5
        echo "
    ";
        // line 6
        if (($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "type", array()) == "video")) {
            // line 7
            echo "      ";
            if (((isset($context["mediaStatus"]) ? $context["mediaStatus"] : null) == "waiting")) {
                // line 8
                echo "      <i class=\"fa fa-file-video-o text-warning\"></i>
      ";
            } elseif ((            // line 9
(isset($context["mediaStatus"]) ? $context["mediaStatus"] : null) == "doing")) {
                // line 10
                echo "      <i class=\"fa fa-file-video-o text-info\"></i>
      ";
            } elseif ((            // line 11
(isset($context["mediaStatus"]) ? $context["mediaStatus"] : null) == "error")) {
                // line 12
                echo "      <i class=\"fa fa-file-video-o text-danger\"></i>
      ";
            } else {
                // line 14
                echo "      <i class=\"fa fa-file-video-o text-success\"></i>
      ";
            }
            // line 16
            echo "    ";
        } elseif (($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "type", array()) == "live")) {
            // line 17
            echo "      ";
            if (((isset($context["mediaStatus"]) ? $context["mediaStatus"] : null) == "waiting")) {
                // line 18
                echo "      <i class=\"fa fa-video-camera text-warning\"></i>
      ";
            } elseif ((            // line 19
(isset($context["mediaStatus"]) ? $context["mediaStatus"] : null) == "doing")) {
                // line 20
                echo "      <i class=\"fa fa-video-camera text-info\"></i>
      ";
            } elseif ((            // line 21
(isset($context["mediaStatus"]) ? $context["mediaStatus"] : null) == "error")) {
                // line 22
                echo "      <i class=\"fa fa-video-camera text-danger\"></i>
      ";
            } else {
                // line 24
                echo "      <i class=\"fa fa-video-camera text-success\"></i>
      ";
            }
            // line 26
            echo "    ";
        } elseif (($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "type", array()) == "audio")) {
            // line 27
            echo "      <i class=\"fa fa-file-audio-o text-success\"></i>
    ";
        } elseif (($this->getAttribute(        // line 28
(isset($context["lesson"]) ? $context["lesson"] : null), "type", array()) == "testpaper")) {
            // line 29
            echo "      <i class=\"fa fa-file-text-o text-success\"></i>
    ";
        } elseif (($this->getAttribute(        // line 30
(isset($context["lesson"]) ? $context["lesson"] : null), "type", array()) == "text")) {
            // line 31
            echo "      <i class=\"fa fa-file-photo-o text-success\"></i>
    ";
        } elseif (($this->getAttribute(        // line 32
(isset($context["lesson"]) ? $context["lesson"] : null), "type", array()) == "document")) {
            // line 33
            echo "      <i class=\"fa fa-files-o text-success\"></i>
    ";
        } elseif (($this->getAttribute(        // line 34
(isset($context["lesson"]) ? $context["lesson"] : null), "type", array()) == "flash")) {
            // line 35
            echo "      <i class=\"fa fa-film text-success\"></i>
    ";
        } else {
            // line 37
            echo "      <i class=\"fa fa-file-powerpoint-o text-success\"></i>
    ";
        }
        // line 39
        echo "
    ";
        // line 40
        if (_twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("course.custom_chapter_enabled"), true)) {
            // line 41
            echo "      课时 <span class=\"number\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "number", array()), "html", null, true);
            echo "</span>：
    ";
        }
        // line 43
        echo "
    ";
        // line 44
        if (($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "free", array()) == 1)) {
            // line 45
            echo "      <span class=\"label label-success\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans(""), "html", null, true);
            echo "</span>
    ";
        } elseif ((($this->getAttribute(        // line 46
(isset($context["course"]) ? $context["course"] : null), "tryLookable", array()) && ($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "type", array()) == "video")) && ((($this->getAttribute((isset($context["file"]) ? $context["file"] : null), "storage", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["file"]) ? $context["file"] : null), "storage", array()), "")) : ("")) == "cloud"))) {
            // line 47
            echo "      <span class=\"label label-warning mrm\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("试看"), "html", null, true);
            echo "</span>";
        }
        // line 48
        echo "    ";
        if (((!twig_in_filter($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "type", array()), array(0 => "text", 1 => "live", 2 => "testpaper")) && ($this->getAttribute(        // line 49
(isset($context["lesson"]) ? $context["lesson"] : null), "mediaSource", array()) == "self")) && (($this->getAttribute(        // line 50
(isset($context["lesson"]) ? $context["lesson"] : null), "mediaId", array()) &&  !((array_key_exists("file", $context)) ? (_twig_default_filter((isset($context["file"]) ? $context["file"] : null), false)) : (false))) ||  !$this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "mediaId", array())))) {
            // line 52
            echo "      <span class=\"label label-danger fileDeletedLesson\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("课时文件已删除"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("无效课时"), "html", null, true);
            echo "</span>
    ";
        }
        // line 54
        echo "    ";
        echo $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "title", array());
        echo "
    ";
        // line 55
        if (twig_in_filter($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "type", array()), array(0 => "video", 1 => "audio"))) {
            // line 56
            echo "      <span class=\"text-muted\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->durationFilter($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "length", array())), "html", null, true);
            echo "</span>
    ";
        }
        // line 58
        echo "
    ";
        // line 59
        if (twig_in_filter($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "type", array()), array(0 => "live"))) {
            // line 60
            echo "      <span class=\"text-muted\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->dateformatFilter($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "startTime", array())), "html", null, true);
            echo "</span>
    ";
        }
        // line 62
        echo "
    ";
        // line 63
        if (($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "giveCredit", array()) > 0)) {
            // line 64
            echo "      <small class=\"text-muted\">(";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "giveCredit", array()), "html", null, true);
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("学分"), "html", null, true);
            echo ")</small>
    ";
        }
        // line 66
        echo "
    ";
        // line 67
        if (($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "requireCredit", array()) > 0)) {
            // line 68
            echo "      <small class=\"text-muted\">
        (需";
            // line 69
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "requireCredit", array()), "html", null, true);
            echo "学分)
      </small>
    ";
        }
        // line 72
        echo "
    <span data-role=\"mediaStatus\"></span>
    ";
        // line 74
        if (($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "type", array()) != "testpaper")) {
            // line 75
            echo "      ";
            $context["mediaTypeName"] = ((($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "type", array()) == "video")) ? ($this->env->getExtension('translator')->trans("视频")) : (((($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "type", array()) == "audio")) ? ($this->env->getExtension('translator')->trans("音频")) : ($this->env->getExtension('translator')->trans("文件")))));
            // line 76
            echo "      ";
            if (((isset($context["mediaStatus"]) ? $context["mediaStatus"] : null) == "waiting")) {
                // line 77
                echo "        <span class=\"text-warning\">(正在等待";
                echo twig_escape_filter($this->env, (isset($context["mediaTypeName"]) ? $context["mediaTypeName"] : null), "html", null, true);
                echo "格式转换)</span>
      ";
            } elseif ((            // line 78
(isset($context["mediaStatus"]) ? $context["mediaStatus"] : null) == "doing")) {
                // line 79
                echo "        <span class=\"text-info\">(正在转换";
                echo twig_escape_filter($this->env, (isset($context["mediaTypeName"]) ? $context["mediaTypeName"] : null), "html", null, true);
                echo "格式)</span>
      ";
            } elseif ((            // line 80
(isset($context["mediaStatus"]) ? $context["mediaStatus"] : null) == "error")) {
                // line 81
                echo "        <span class=\"text-danger\">(";
                echo twig_escape_filter($this->env, (isset($context["mediaTypeName"]) ? $context["mediaTypeName"] : null), "html", null, true);
                echo "格式转换失败)</span>
      ";
            }
            // line 83
            echo "    ";
        }
        // line 84
        echo "
    ";
        // line 85
        if (($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "status", array()) == "unpublished")) {
            // line 86
            echo "      <span class=\"unpublish-warning text-warning\">(";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("未发布"), "html", null, true);
            echo ")</span>
    ";
        }
        // line 88
        echo "  </div>

  <div class=\"item-actions\">
    <a class=\"btn btn-link\" data-toggle=\"modal\" data-target=\"#modal\" data-backdrop=\"static\" data-keyboard=\"false\"
      ";
        // line 92
        if (($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "type", array()) == "testpaper")) {
            // line 93
            echo "        data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_lesson_edit_testpaper", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "lessonId" => $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "id", array()))), "html", null, true);
            echo "\"
      ";
        } elseif (($this->getAttribute(        // line 94
(isset($context["lesson"]) ? $context["lesson"] : null), "type", array()) == "live")) {
            // line 95
            echo "        data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("live_course_manage_lesson_edit", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "lessonId" => $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "id", array()))), "html", null, true);
            echo "\"
      ";
        } else {
            // line 97
            echo "        data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_lesson_edit", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "lessonId" => $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "id", array()))), "html", null, true);
            echo "\"
      ";
        }
        // line 99
        echo "      ><span class=\"es-icon es-icon-edit prs\"></span>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("编辑"), "html", null, true);
        echo "</a>
    ";
        // line 100
        if (($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "type", array()) == "testpaper")) {
            // line 101
            echo "      <a class=\"btn btn-link\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_preview_test", array("testId" => $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "mediaId", array()))), "html", null, true);
            echo "\" target=\"_blank\"><span class=\"es-icon es-icon-visibility prs\"></span>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("预览"), "html", null, true);
            echo "</a>
    ";
        } else {
            // line 103
            echo "      <a class=\"btn btn-link\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_learn", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "preview" => 1, "lessonId" => $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "id", array()))), "html", null, true);
            echo "#lesson/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "id", array()), "html", null, true);
            echo "\" target=\"_blank\"><span class=\"es-icon es-icon-visibility prs\"></span>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("预览"), "html", null, true);
            echo "</a>
    ";
        }
        // line 105
        echo "    <span class=\"dropdown\">
      <a class=\"dropdown-toggle dropdown-more\" id=\"dropdown-more\" data-toggle=\"dropdown\" href=\"#\"><i class=\"es-icon es-icon-keyboardarrowdown\" style=\"margin-right:3px\" aria-haspopup=\"true\" aria-expanded=\"false\"></i>";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("更多"), "html", null, true);
        echo "</a>

      <ul class=\"dropdown-menu pull-right dropdown-menu-more\" role=\"menu\" style=\"margin-top:12px;min-width:144px\" aria-labelledby=\"dLabel\" style=\"display:none;\">

        ";
        // line 110
        if (($this->env->getExtension('topxia_web_twig')->isPluginInstalled("Homework") && ($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "type", array()) != "testpaper"))) {
            // line 111
            echo "          ";
            $context["homework"] = (($this->getAttribute((isset($context["homeworks"]) ? $context["homeworks"] : null), $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "id", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["homeworks"]) ? $context["homeworks"] : null), $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "id", array()), array(), "array"), null)) : (null));
            // line 112
            echo "          ";
            $context["homeworkId"] = (($this->getAttribute((isset($context["homework"]) ? $context["homework"] : null), "id", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["homework"]) ? $context["homework"] : null), "id", array()), null)) : (null));
            // line 113
            echo "          ";
            if ((isset($context["homework"]) ? $context["homework"] : null)) {
                // line 114
                echo "            <li><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_lesson_homework_edit", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "lessonId" => $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "id", array()), "homeworkId" => (isset($context["homeworkId"]) ? $context["homeworkId"] : null))), "html", null, true);
                echo "\" ><span class=\"glyphicon glyphicon-list-alt prs\"></span>";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("编辑作业"), "html", null, true);
                echo "</a></li>
            <li><a href=\"";
                // line 115
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_homework_preview", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "homeworkId" => (isset($context["homeworkId"]) ? $context["homeworkId"] : null))), "html", null, true);
                echo "\" class=\"preview-homework-btn\" ><span class=\"glyphicon glyphicon-eye-open prs\"></span>";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("预览作业"), "html", null, true);
                echo "</a></li>
            <li><a href=\"javascript:;\" class=\"delete-homework-btn\" data-url=\"";
                // line 116
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_lesson_homework_remove", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "lessonId" => $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "id", array()), "homeworkId" => (isset($context["homeworkId"]) ? $context["homeworkId"] : null))), "html", null, true);
                echo "\" ><span class=\"glyphicon glyphicon-trash prs\"></span>";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("移除作业"), "html", null, true);
                echo "</a></li>
          ";
            } else {
                // line 118
                echo "            <li><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_lesson_homework_create", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "lessonId" => $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "id", array()), "homeworkId" => (isset($context["homeworkId"]) ? $context["homeworkId"] : null))), "html", null, true);
                echo "\" ><span class=\"glyphicon glyphicon-list-alt prs\"></span>";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("布置作业"), "html", null, true);
                echo "</a></li>
          ";
            }
            // line 120
            echo "            <li class=\"divider\"></li>
          ";
            // line 121
            $context["lessonId"] = $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "id", array());
            // line 122
            echo "          ";
            $context["exercise"] = (($this->getAttribute((isset($context["exercises"]) ? $context["exercises"] : null), (isset($context["lessonId"]) ? $context["lessonId"] : null), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["exercises"]) ? $context["exercises"] : null), (isset($context["lessonId"]) ? $context["lessonId"] : null), array(), "array"), null)) : (null));
            // line 123
            echo "          ";
            if ((isset($context["exercise"]) ? $context["exercise"] : null)) {
                // line 124
                echo "            <li><a href=\"javascript:;\" class=\"delete-exercise-btn\" data-url=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_exercise_delete", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "lessonId" => $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "id", array()), "id" => $this->getAttribute((isset($context["exercise"]) ? $context["exercise"] : null), "id", array()))), "html", null, true);
                echo "\" ><span class=\"glyphicon glyphicon-trash prs\"></span>";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("移除练习"), "html", null, true);
                echo "</a></li>
          ";
            } else {
                // line 126
                echo "            <li><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_exercise_create", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "lessonId" => $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "id", array()))), "html", null, true);
                echo "\" ><span class=\"glyphicon glyphicon-list-alt prs\"></span>";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("新增练习"), "html", null, true);
                echo "</a></li>
          ";
            }
            // line 128
            echo "          <li class=\"divider\"></li>
        ";
        }
        // line 130
        echo "
        ";
        // line 131
        if ((($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "type", array()) == "video") && ($this->env->getExtension('topxia_web_twig')->getSetting("storage.upload_mode") == "cloud"))) {
            // line 132
            echo "          ";
            if (((($this->getAttribute((isset($context["file"]) ? $context["file"] : null), "storage", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["file"]) ? $context["file"] : null), "storage", array()), null)) : (null)) == "cloud")) {
                // line 133
                echo "          <li class=\"mark-manage\" style=\"display:none;\">
            <a href=\"";
                // line 134
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_lesson_marker_manage", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "lessonId" => $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "id", array()))), "html", null, true);
                echo "\" target=\"_blank\" class=\"manage-lesson-marker-btn\" >
            <span class=\"glyphicon glyphicon-list prs\"></span>弹题管理
            </a>
          </li>
          <li class=\"divider mark-manage-divider\" style=\"display:none;\"></li>
          ";
            }
            // line 140
            echo "        ";
        }
        // line 141
        echo "
        ";
        // line 142
        if (($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "type", array()) != "testpaper")) {
            // line 143
            echo "          <li><a href=\"javascript:;\" data-toggle=\"modal\"  data-target=\"#modal\" data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_material", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "lessonId" => $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "id", array()))), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-paperclip prs\"></span>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("添加资料"), "html", null, true);
            echo "</a></li>
          <li class=\"divider\"></li>
        ";
        }
        // line 146
        echo "
        <li class=\"";
        // line 147
        if (($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "status", array()) == "published")) {
            echo "hidden ";
        }
        echo "\">
          <a href=\"javascript:;\" class=\"publish-lesson-btn\" data-url=\"";
        // line 148
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_lesson_publish", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "lessonId" => $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "id", array()))), "html", null, true);
        echo "\">
            <span class=\"glyphicon glyphicon-ok-circle prs\"></span>";
        // line 149
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("发布"), "html", null, true);
        echo "
          </a>
        </li>

        <li class=\"";
        // line 153
        if (($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "status", array()) == "unpublished")) {
            echo "hidden ";
        }
        echo "\">
          <a href=\"javascript:;\" class=\"unpublish-lesson-btn\" data-url=\"";
        // line 154
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_lesson_unpublish", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "lessonId" => $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "id", array()))), "html", null, true);
        echo "\">
            <span class=\"glyphicon glyphicon-remove-circle prs\"></span>";
        // line 155
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("取消发布"), "html", null, true);
        echo "
          </a>
        </li>
        <li class=\"";
        // line 158
        if (($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "status", array()) == "published")) {
            echo "hidden ";
        }
        echo "\">
          <a href=\"javascript:;\" class=\"delete-lesson-btn\" data-url=\"";
        // line 159
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_lesson_delete", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "lessonId" => $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "id", array()))), "html", null, true);
        echo "\">
            <span class=\"glyphicon glyphicon-trash prs\"></span>";
        // line 160
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("删除"), "html", null, true);
        echo "
          </a>
        </li>
      </ul>
    </span>
  </div>
</li>
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:CourseLessonManage:list-item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  465 => 160,  461 => 159,  455 => 158,  449 => 155,  445 => 154,  439 => 153,  432 => 149,  428 => 148,  422 => 147,  419 => 146,  410 => 143,  408 => 142,  405 => 141,  402 => 140,  393 => 134,  390 => 133,  387 => 132,  385 => 131,  382 => 130,  378 => 128,  370 => 126,  362 => 124,  359 => 123,  356 => 122,  354 => 121,  351 => 120,  343 => 118,  336 => 116,  330 => 115,  323 => 114,  320 => 113,  317 => 112,  314 => 111,  312 => 110,  305 => 106,  302 => 105,  292 => 103,  284 => 101,  282 => 100,  277 => 99,  271 => 97,  265 => 95,  263 => 94,  258 => 93,  256 => 92,  250 => 88,  244 => 86,  242 => 85,  239 => 84,  236 => 83,  230 => 81,  228 => 80,  223 => 79,  221 => 78,  216 => 77,  213 => 76,  210 => 75,  208 => 74,  204 => 72,  198 => 69,  195 => 68,  193 => 67,  190 => 66,  183 => 64,  181 => 63,  178 => 62,  172 => 60,  170 => 59,  167 => 58,  161 => 56,  159 => 55,  154 => 54,  146 => 52,  144 => 50,  143 => 49,  141 => 48,  136 => 47,  134 => 46,  129 => 45,  127 => 44,  124 => 43,  118 => 41,  116 => 40,  113 => 39,  109 => 37,  105 => 35,  103 => 34,  100 => 33,  98 => 32,  95 => 31,  93 => 30,  90 => 29,  88 => 28,  85 => 27,  82 => 26,  78 => 24,  74 => 22,  72 => 21,  69 => 20,  67 => 19,  64 => 18,  61 => 17,  58 => 16,  54 => 14,  50 => 12,  48 => 11,  45 => 10,  43 => 9,  40 => 8,  37 => 7,  35 => 6,  32 => 5,  30 => 4,  19 => 1,);
    }
}
