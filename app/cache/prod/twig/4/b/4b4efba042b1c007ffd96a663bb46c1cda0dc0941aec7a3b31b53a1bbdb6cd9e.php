<?php

/* TopxiaWebBundle:Course:courses-block-grid.html.twig */
class __TwigTemplate_4b4efba042b1c007ffd96a663bb46c1cda0dc0941aec7a3b31b53a1bbdb6cd9e extends Twig_Template
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
        echo "<style>
.classroomPicture{

  width: 24px;
  height: 24px;
}
</style>
";
        // line 8
        $context["mode"] = ((array_key_exists("mode", $context)) ? (_twig_default_filter((isset($context["mode"]) ? $context["mode"] : null), "default")) : ("default"));
        // line 9
        echo "<ul class=\"course-grids\">
  ";
        // line 10
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["courses"]) ? $context["courses"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["course"]) {
            // line 11
            echo "    <li class=\"course-grid\">
      <a href=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute($context["course"], "id", array()))), "html", null, true);
            echo "\" class=\"grid-body\">
        <img src=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getFpath($this->getAttribute($context["course"], "largePicture", array()), "course.png"), "html", null, true);
            echo "\"  class=\"img-responsive thumb\">
          ";
            // line 14
            if (($this->getAttribute($context["course"], "status", array()) == "draft")) {
                // line 15
                echo "            <span class=\"label  label-warning course-status\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("未发布"), "html", null, true);
                echo "</span>
          ";
            } elseif (($this->getAttribute(            // line 16
$context["course"], "status", array()) == "closed")) {
                // line 17
                echo "            <span class=\"label label-danger course-status\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("已关闭"), "html", null, true);
                echo "</span>
          ";
            }
            // line 19
            echo "          ";
            if (($this->getAttribute($context["course"], "status", array()) != "closed")) {
                // line 20
                echo "            ";
                if (($this->getAttribute($context["course"], "serializeMode", array()) == "serialize")) {
                    // line 21
                    echo "              <span class=\"label label-success series-mode-label\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("更新中"), "html", null, true);
                    echo "</span>
            ";
                } elseif (($this->getAttribute(                // line 22
$context["course"], "serializeMode", array()) == "finished")) {
                    // line 23
                    echo "              <span class=\"label label-warning series-mode-label\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("已完结"), "html", null, true);
                    echo "</span>
            ";
                }
                // line 25
                echo "          ";
            }
            // line 26
            echo "          ";
            if (($this->getAttribute($context["course"], "type", array()) == "live")) {
                // line 27
                echo "            ";
                $context["lesson"] = (($this->getAttribute($context["course"], "lesson", array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($context["course"], "lesson", array(), "array"), null)) : (null));
                // line 28
                echo "            ";
                if ((((isset($context["lesson"]) ? $context["lesson"] : null) && (twig_date_format_filter($this->env, "now", "U") >= $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "startTime", array()))) && (twig_date_format_filter($this->env, "now", "U") <= $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "endTime", array())))) {
                    // line 29
                    echo "              <span class=\"label label-warning series-mode-label\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("正在直播中"), "html", null, true);
                    echo "</span>
            ";
                } else {
                    // line 31
                    echo "              <span class=\"label label-success series-mode-label\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("直播"), "html", null, true);
                    echo "</span>
            ";
                }
                // line 33
                echo "          ";
            }
            // line 34
            echo "
        <span class=\"title\">";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "title", array()), "html", null, true);
            echo "</span>

          ";
            // line 37
            if (($this->getAttribute($context["course"], "buyable", array()) == 1)) {
                // line 38
                echo "              <span class=\"title\" style=\"float: right\">必修</span>
          ";
            } else {
                // line 40
                echo "              <span class=\"title\" style=\"float: right\">选修</span>
          ";
            }
            // line 42
            echo "        ";
            if (twig_in_filter((isset($context["mode"]) ? $context["mode"] : null), array(0 => "default", 1 => "teach"))) {
                // line 43
                echo "
          ";
                // line 44
                if (($this->getAttribute($context["course"], "type", array()) == "live")) {
                    // line 45
                    echo "            ";
                    $context["lesson"] = (($this->getAttribute($context["course"], "lesson", array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($context["course"], "lesson", array(), "array"), null)) : (null));
                    // line 46
                    echo "            ";
                    if ((isset($context["lesson"]) ? $context["lesson"] : null)) {
                        // line 47
                        echo "              <span class=\"live-course-lesson metas\">
                <span class=\"text-success mrm\">";
                        // line 48
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "startTime", array()), "n月j日 H:i"), "html", null, true);
                        echo " ~ ";
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "endTime", array()), "H:i"), "html", null, true);
                        echo "</span>
                <span class=\"text-muted mrm\">第";
                        // line 49
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "number", array()), "html", null, true);
                        echo "课时</span>
              </span>
            ";
                    }
                    // line 52
                    echo "          ";
                }
                // line 53
                echo "
          <span class=\"metas clearfix\">
            <span class=\"price-col\">
              <span class=\"meta-label\">";
                // line 56
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("价格"), "html", null, true);
                echo "</span>
              ";
                // line 57
                if (($this->env->getExtension('topxia_web_twig')->getSetting("coin.coin_enabled") && ($this->env->getExtension('topxia_web_twig')->getSetting("coin.price_type") == "Coin"))) {
                    // line 58
                    echo "              <span class=\"price-num\" style=\"display:inline \" >";
                    if (($this->getAttribute($context["course"], "price", array()) > 0)) {
                        echo twig_escape_filter($this->env, ($this->getAttribute($context["course"], "price", array()) * $this->env->getExtension('topxia_web_twig')->getSetting("coin.cash_rate")), "html", null, true);
                        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("coin.coin_name"), "html", null, true);
                    } else {
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans(""), "html", null, true);
                    }
                    echo "</span>
              ";
                } else {
                    // line 60
                    echo "              <span class=\"price-num\">";
                    if (($this->getAttribute($context["course"], "price", array()) > 0)) {
                        echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "price", array()), "html", null, true);
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("元"), "html", null, true);
                    } else {
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans(""), "html", null, true);
                    }
                    echo "</span>
              ";
                }
                // line 62
                echo "            </span>

            ";
                // line 64
                if (($this->env->getExtension('topxia_web_twig')->getSetting("course.show_student_num_enabled", "1") == 1)) {
                    // line 65
                    echo "            <span class=\"student-col\">
              <span class=\"meta-label\">";
                    // line 66
                    echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("default.user_name", $this->env->getExtension('translator')->trans("学员")), "html", null, true);
                    echo "</span>
              <span class=\"student-num\">";
                    // line 67
                    echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "studentNum", array()), "html", null, true);
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("人"), "html", null, true);
                    echo "</span>
            </span>
            ";
                }
                // line 70
                echo "
            <span class=\"review-col\">
              ";
                // line 72
                if (($this->getAttribute($context["course"], "ratingNum", array()) > 0)) {
                    // line 73
                    echo "                <span class=\"meta-label\"><strong>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "ratingNum", array()), "html", null, true);
                    echo "</strong> ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("评价"), "html", null, true);
                    echo "</span>
                <span class=\"review-rating\">
                  <span class=\"stars-";
                    // line 75
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["course"], "rating", array())), "html", null, true);
                    echo "\">&nbsp;</span>
                </span>
              ";
                } else {
                    // line 78
                    echo "                <span class=\"meta-label\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("无评价"), "html", null, true);
                    echo "</span>
                <span class=\"review-rating\">
                  <span class=\"stars-0\">&nbsp;</span>
                </span>
              ";
                }
                // line 83
                echo "            </span>

          </span>
        ";
            }
            // line 87
            echo "
        ";
            // line 88
            if (twig_in_filter((isset($context["mode"]) ? $context["mode"] : null), array(0 => "default"))) {
                // line 89
                echo "          ";
                $context["user"] = (($this->getAttribute((isset($context["users"]) ? $context["users"] : null), twig_first($this->env, $this->getAttribute($context["course"], "teacherIds", array())), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["users"]) ? $context["users"] : null), twig_first($this->env, $this->getAttribute($context["course"], "teacherIds", array())), array(), "array"), null)) : (null));
                // line 90
                echo "          ";
                if ((isset($context["user"]) ? $context["user"] : null)) {
                    // line 91
                    echo "            <span class=\"teacher clearfix\">
              <img src=\"";
                    // line 92
                    echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getFpath($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "smallAvatar", array()), "avatar.png"), "html", null, true);
                    echo "\" class=\"thumb\">
              <span class=\"nickname ellipsis\">";
                    // line 93
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "nickname", array()), "html", null, true);
                    echo "</span>
              <span class=\"user-title ellipsis\">";
                    // line 94
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "title", array()), "html", null, true);
                    echo "</span>
            </span>
          ";
                }
                // line 97
                echo "        ";
            }
            // line 98
            echo "
        ";
            // line 99
            if (twig_in_filter((isset($context["mode"]) ? $context["mode"] : null), array(0 => "learn"))) {
                // line 100
                echo "          <div class=\"learn-status\">
              <div class=\"mbm\">
              ";
                // line 102
                if (($this->getAttribute($context["course"], "classroomCount", array()) > 0)) {
                    // line 103
                    echo "                ";
                    $context["classroom"] = $this->getAttribute($context["course"], "classroom", array());
                    // line 104
                    echo "                <img class=\"classroomPicture\" src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getFpath($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "smallPicture", array()), "classroom.png"), "html", null, true);
                    echo "\"> <span class=\"text-muted\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "title", array()), "html", null, true);
                    echo "
                ";
                    // line 105
                    if (($this->getAttribute($context["course"], "classroomCount", array()) > 1)) {
                        // line 106
                        echo "                ";
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("等"), "html", null, true);
                        echo "
                ";
                    }
                    // line 107
                    echo "</span>
              ";
                }
                // line 109
                echo "              </div>



            ";
                // line 113
                if ($this->getAttribute($context["course"], "memberIsLearned", array())) {
                    // line 114
                    echo "              <div class=\"progress\">
                <div class=\"progress-bar progress-bar-success\" style=\"width: 100%;\"></div>
              </div>
              ";
                    // line 117
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("学习总时长"), "html", null, true);
                    echo ":";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "learnTime", array()), "html", null, true);
                    echo "
              <div class=\"action clearfix\"><span class=\"btn btn-default btn-sm pull-right\">";
                    // line 118
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("查看课程"), "html", null, true);
                    echo "</span></div>
            ";
                } else {
                    // line 120
                    echo "              <div class=\"progress\">
                <div class=\"progress-bar progress-bar-success\" style=\"width: ";
                    // line 121
                    echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->calculatePercent($this->getAttribute($context["course"], "memberLearnedNum", array()), $this->getAttribute($context["course"], "lessonNum", array())), "html", null, true);
                    echo ";\"></div>
              </div>
              <div class=\"action\"><span class=\"btn btn-primary btn-sm\">";
                    // line 123
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("继续学习"), "html", null, true);
                    echo "</span></div>
            ";
                }
                // line 125
                echo "          </div>
          ";
                // line 126
                if (($this->getAttribute($context["course"], "status", array()) == "draft")) {
                    // line 127
                    echo "            <span class=\"label  label-warning course-status\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("未发布"), "html", null, true);
                    echo "</span>
          ";
                } elseif (($this->getAttribute(                // line 128
$context["course"], "status", array()) == "closed")) {
                    // line 129
                    echo "            <span class=\"label label-danger course-status\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("已关闭"), "html", null, true);
                    echo "</span>
          ";
                }
                // line 131
                echo "        ";
            }
            // line 132
            echo "
        ";
            // line 133
            if (((isset($context["mode"]) ? $context["mode"] : null) == "teach")) {
                // line 134
                echo "          ";
                if (($this->getAttribute($context["course"], "status", array()) == "published")) {
                    // line 135
                    echo "            <span class=\"label label-success course-status\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("已发布"), "html", null, true);
                    echo "</span>
          ";
                } elseif (($this->getAttribute(                // line 136
$context["course"], "status", array()) == "draft")) {
                    // line 137
                    echo "            <span class=\"label  label-warning course-status\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("未发布"), "html", null, true);
                    echo "</span>
          ";
                } elseif (($this->getAttribute(                // line 138
$context["course"], "status", array()) == "closed")) {
                    // line 139
                    echo "            <span class=\"label label-danger course-status\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("已关闭"), "html", null, true);
                    echo "</span>
          ";
                }
                // line 141
                echo "        ";
            }
            // line 142
            echo "
      </a>
    </li>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['course'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 146
        echo "</ul>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Course:courses-block-grid.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  409 => 146,  400 => 142,  397 => 141,  391 => 139,  389 => 138,  384 => 137,  382 => 136,  377 => 135,  374 => 134,  372 => 133,  369 => 132,  366 => 131,  360 => 129,  358 => 128,  353 => 127,  351 => 126,  348 => 125,  343 => 123,  338 => 121,  335 => 120,  330 => 118,  324 => 117,  319 => 114,  317 => 113,  311 => 109,  307 => 107,  301 => 106,  299 => 105,  292 => 104,  289 => 103,  287 => 102,  283 => 100,  281 => 99,  278 => 98,  275 => 97,  269 => 94,  265 => 93,  261 => 92,  258 => 91,  255 => 90,  252 => 89,  250 => 88,  247 => 87,  241 => 83,  232 => 78,  226 => 75,  218 => 73,  216 => 72,  212 => 70,  205 => 67,  201 => 66,  198 => 65,  196 => 64,  192 => 62,  181 => 60,  170 => 58,  168 => 57,  164 => 56,  159 => 53,  156 => 52,  150 => 49,  144 => 48,  141 => 47,  138 => 46,  135 => 45,  133 => 44,  130 => 43,  127 => 42,  123 => 40,  119 => 38,  117 => 37,  112 => 35,  109 => 34,  106 => 33,  100 => 31,  94 => 29,  91 => 28,  88 => 27,  85 => 26,  82 => 25,  76 => 23,  74 => 22,  69 => 21,  66 => 20,  63 => 19,  57 => 17,  55 => 16,  50 => 15,  48 => 14,  44 => 13,  40 => 12,  37 => 11,  33 => 10,  30 => 9,  28 => 8,  19 => 1,);
    }
}
