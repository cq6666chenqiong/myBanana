<?php

/* TopxiaWebBundle:MyCourse:score.html.twig */
class __TwigTemplate_8a1e922530d4f4c6dd22cc3cdc6bb1abaaa343d380a7b349cee581378c9d984c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle:MyCourse:layout.html.twig", "TopxiaWebBundle:MyCourse:score.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle:MyCourse:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 5
        $context["tab_nav"] = "learning";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("我的学分"), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 7
    public function block_main($context, array $blocks = array())
    {
        // line 8
        echo "    <div class=\"panel panel-default panel-col\">
        <div class=\"panel-heading\">";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("我的学分"), "html", null, true);
        echo "</div>
        <div class=\"panel-body\">
             <table class=\"table table-striped table-hover\">
                 <tr><th>课程名</th><th>完成时间</th><th>学分</th></tr>
                 <tr><td>";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sorce"]) ? $context["sorce"] : null), "title", array()), "html", null, true);
        echo "</td><td>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sorce"]) ? $context["sorce"] : null), "createTime", array()), "html", null, true);
        echo "</td><td>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sorce"]) ? $context["sorce"] : null), "xuefen", array()), "html", null, true);
        echo "</td></tr>
             </table>
        </div>
    </div>

";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:MyCourse:score.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 13,  46 => 9,  43 => 8,  40 => 7,  32 => 3,  28 => 1,  26 => 5,  11 => 1,);
    }
}
