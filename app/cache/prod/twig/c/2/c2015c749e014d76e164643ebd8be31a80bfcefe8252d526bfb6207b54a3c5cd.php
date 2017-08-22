<?php

/* TopxiaWebBundle:Course:info.html.twig */
class __TwigTemplate_c2015c749e014d76e164643ebd8be31a80bfcefe8252d526bfb6207b54a3c5cd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle:Course:normal-layout.html.twig", "TopxiaWebBundle:Course:info.html.twig", 1);
        $this->blocks = array(
            'course_main' => array($this, 'block_course_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle:Course:normal-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["tab"] = "info";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_course_main($context, array $blocks = array())
    {
        // line 6
        echo "
  <div class=\"course-detail-content\">

    <div class=\"es-piece\">
      <div class=\"piece-body p-lg clearfix\">
        ";
        // line 11
        if ($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "about", array())) {
            // line 12
            echo "          ";
            echo $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "about", array());
            echo "
        ";
        } else {
            // line 14
            echo "          <div class=\"text-muted\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("暂无课程简介"), "html", null, true);
            echo "</div>
        ";
        }
        // line 16
        echo "
        ";
        // line 17
        if ((isset($context["category"]) ? $context["category"] : null)) {
            // line 18
            echo "          <p><strong>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("分类："), "html", null, true);
            echo "</strong><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_explore", array("category" => (($this->getAttribute((isset($context["category"]) ? $context["category"] : null), "code", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["category"]) ? $context["category"] : null), "code", array()), $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "id", array()))) : ($this->getAttribute((isset($context["category"]) ? $context["category"] : null), "id", array()))))), "html", null, true);
            echo "\" target=\"_blank\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "name", array()), "html", null, true);
            echo "</a></p>
        ";
        }
        // line 20
        echo "
        ";
        // line 21
        if ((isset($context["tags"]) ? $context["tags"] : null)) {
            // line 22
            echo "          <p><strong>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("标签："), "html", null, true);
            echo "</strong>
            ";
            // line 23
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["tags"]) ? $context["tags"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 24
                echo "              <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tag_show", array("name" => $this->getAttribute($context["tag"], "name", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "name", array()), "html", null, true);
                echo "</a>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo "          </p>
        ";
        }
        // line 28
        echo "
      </div>
    </div>

    ";
        // line 32
        if ($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "goals", array())) {
            // line 33
            echo "      <div class=\"es-piece\">
        <div class=\"piece-header\">
          ";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("课程目标"), "html", null, true);
            echo "
        </div>
        <div class=\"piece-body\">
          <ul class=\"piece-body-list\">
            ";
            // line 39
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "goals", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["goal"]) {
                // line 40
                echo "            <li>
              <i class=\"es-icon es-icon-chevronright\"></i> ";
                // line 41
                echo twig_escape_filter($this->env, $context["goal"], "html", null, true);
                echo "
            </li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['goal'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            echo "          </ul>
        </div>
      </div>
    ";
        }
        // line 48
        echo "
    ";
        // line 49
        if ($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "audiences", array())) {
            // line 50
            echo "      <div class=\"es-piece\">
        <div class=\"piece-header\">
          ";
            // line 52
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("适合人群"), "html", null, true);
            echo "
        </div>
        <div class=\"piece-body\">
          <ul class=\"piece-body-list\">
            ";
            // line 56
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "audiences", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["audience"]) {
                // line 57
                echo "            <li>
              <i class=\"es-icon es-icon-chevronright\"></i> ";
                // line 58
                echo twig_escape_filter($this->env, $context["audience"], "html", null, true);
                echo "
            </li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['audience'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 61
            echo "          </ul>
        </div>
      </div>
    ";
        }
        // line 65
        echo "  </div>
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Course:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 65,  172 => 61,  163 => 58,  160 => 57,  156 => 56,  149 => 52,  145 => 50,  143 => 49,  140 => 48,  134 => 44,  125 => 41,  122 => 40,  118 => 39,  111 => 35,  107 => 33,  105 => 32,  99 => 28,  95 => 26,  84 => 24,  80 => 23,  75 => 22,  73 => 21,  70 => 20,  60 => 18,  58 => 17,  55 => 16,  49 => 14,  43 => 12,  41 => 11,  34 => 6,  31 => 5,  27 => 1,  25 => 3,  11 => 1,);
    }
}
