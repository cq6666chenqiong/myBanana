<?php

/* ClassroomBundle:Classroom:explore.html.twig */
class __TwigTemplate_3242f8523d9932dcb55ff68127391ecdf1449d25b5e18a6ad3e8775a77161cdb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::layout.html.twig", "ClassroomBundle:Classroom:explore.html.twig", 1);
        $this->blocks = array(
            'keywords' => array($this, 'block_keywords'),
            'description' => array($this, 'block_description'),
            'title' => array($this, 'block_title'),
            'top_content' => array($this, 'block_top_content'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["bodyClass"] = "classroom-list-page bg-blank";
        // line 3
        $context["script_controller"] = "classroombundle/controller/classroom/explore";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_keywords($context, array $blocks = array())
    {
        if ((isset($context["categoryArray"]) ? $context["categoryArray"] : null)) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["categoryArray"]) ? $context["categoryArray"] : null), "name", array()), "html", null, true);
            if ((isset($context["categoryParent"]) ? $context["categoryParent"] : null)) {
                echo ",";
                echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["categoryParent"]) ? $context["categoryParent"] : null), "name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["categoryParent"]) ? $context["categoryParent"] : null), "name", array()), "")) : ("")), "html", null, true);
            }
        } else {
            echo "全部";
        }
    }

    // line 5
    public function block_description($context, array $blocks = array())
    {
        echo $this->env->getExtension('topxia_web_twig')->plainTextFilter(((array_key_exists("categoryArrayDescription", $context)) ? (_twig_default_filter((isset($context["categoryArrayDescription"]) ? $context["categoryArrayDescription"] : null), "")) : ("")), 100);
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["categoryArray"]) ? $context["categoryArray"] : null), "name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["categoryArray"]) ? $context["categoryArray"] : null), "name", array()), "全部")) : ("全部")), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("site.name"), "html", null, true);
        if ($this->env->getExtension('topxia_web_twig')->getSetting("site.slogan")) {
            echo " - ";
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("site.slogan"), "html", null, true);
        }
        if ( !$this->env->getExtension('topxia_web_twig')->getSetting("copyright.owned")) {
            echo " - Powered By myBanana";
        }
        // line 7
        echo "    ";
    }

    // line 9
    public function block_top_content($context, array $blocks = array())
    {
        // line 10
        echo "  <div class=\"es-banner\">
    <div class=\"container\">
      <div class=\"title\">
        <i class=\"es-icon es-icon-viewcomfy\"></i>
          ";
        // line 15
        echo "        科室列表
      </div>
      <a class=\"btn btn-primary btn-lg more\" href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("course_explore");
        echo "\">
        查看课程
      </a>
    </div>
  </div>
  
";
    }

    // line 24
    public function block_content($context, array $blocks = array())
    {
        // line 25
        echo "  ";
        $context["price"] = (($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "price", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "price", array()), "all")) : ("all"));
        // line 26
        echo "  ";
        $context["orderBy"] = ((array_key_exists("orderBy", $context)) ? (_twig_default_filter((isset($context["orderBy"]) ? $context["orderBy"] : null), "createdTime")) : ("createdTime"));
        // line 27
        echo "  ";
        $context["currentLevelId"] = (($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "currentLevelId", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "currentLevelId", array()), "all")) : ("all"));
        // line 28
        echo "    ";
        // line 31
        echo "  <div class=\"es-filter\">
      ";
        // line 37
        echo "      <div class=\"filter hidden-xs\">

        ";
        // line 39
        if ($this->env->getExtension('topxia_web_twig')->isPluginInstalled("vip")) {
            // line 40
            echo "            ";
            // line 55
            echo "      ";
        }
        // line 56
        echo "      ";
        // line 67
        echo "    </div>
  </div>
  <div class=\"class-list row\">
    ";
        // line 70
        if ((isset($context["classrooms"]) ? $context["classrooms"] : null)) {
            // line 71
            echo "      ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["classrooms"]) ? $context["classrooms"] : null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["classroom"]) {
                // line 72
                echo "        <div class=\"col-md-4 col-sm-6\">
          <div class=\"class-item\">
            <div class=\"class-img\">
              <a href=\"";
                // line 75
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_show", array("id" => $this->getAttribute($context["classroom"], "id", array()))), "html", null, true);
                echo "\" target=\"_blank\">
                ";
                // line 76
                echo $this->env->getExtension('topxia_web_twig')->makeLazyImg($this->env->getExtension('topxia_web_twig')->getFpath($this->getAttribute($context["classroom"], "middlePicture", array()), "classroom.png"), "img-responsive", $this->getAttribute($context["classroom"], "title", array()), "lazyload_class.png");
                echo "
                <h3>";
                // line 77
                echo twig_escape_filter($this->env, $this->getAttribute($context["classroom"], "title", array()), "html", null, true);
                echo "</h3>
                <div class=\"image-overlay\"></div>
              </a>
            </div>
            <div class=\"class-serve\">
              ";
                // line 82
                $this->loadTemplate("ClassroomBundle:Classroom:service-block.html.twig", "ClassroomBundle:Classroom:explore.html.twig", 82)->display(array_merge($context, array("services" => $this->getAttribute($context["classroom"], "service", array()))));
                // line 83
                echo "            </div>
            <ul class=\"class-data clearfix\">
              <li><i class=\"es-icon es-icon-book\"></i>";
                // line 85
                echo twig_escape_filter($this->env, $this->getAttribute($context["classroom"], "courseNum", array()), "html", null, true);
                echo "</li>
              <li><i class=\"es-icon es-icon-people\"></i>";
                // line 86
                echo twig_escape_filter($this->env, ($this->getAttribute($context["classroom"], "studentNum", array()) + $this->getAttribute($context["classroom"], "auditorNum", array())), "html", null, true);
                echo "</li>
              <li><i class=\"es-icon es-icon-textsms\"></i>";
                // line 87
                echo twig_escape_filter($this->env, $this->getAttribute($context["classroom"], "threadNum", array()), "html", null, true);
                echo "</li>
            </ul>
          </div>
        </div>
      ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['classroom'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 92
            echo "      
    ";
        } else {
            // line 94
            echo "      <div class=\"empty\">目前暂时无";
            echo "科室

      </div>
    ";
        }
        // line 98
        echo "  </div>
  <nav class=\"text-center\">
    ";
        // line 100
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : null)), "method"), "html", null, true);
        echo "
  </nav>
";
    }

    public function getTemplateName()
    {
        return "ClassroomBundle:Classroom:explore.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  222 => 100,  218 => 98,  211 => 94,  207 => 92,  188 => 87,  184 => 86,  180 => 85,  176 => 83,  174 => 82,  166 => 77,  162 => 76,  158 => 75,  153 => 72,  135 => 71,  133 => 70,  128 => 67,  126 => 56,  123 => 55,  121 => 40,  119 => 39,  115 => 37,  112 => 31,  110 => 28,  107 => 27,  104 => 26,  101 => 25,  98 => 24,  87 => 17,  83 => 15,  77 => 10,  74 => 9,  70 => 7,  57 => 6,  51 => 5,  37 => 4,  33 => 1,  31 => 3,  29 => 2,  11 => 1,);
    }
}
