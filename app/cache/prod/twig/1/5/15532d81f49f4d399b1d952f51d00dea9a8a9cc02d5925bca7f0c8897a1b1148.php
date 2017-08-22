<?php

/* TopxiaWebBundle:Register:index.html.twig */
class __TwigTemplate_15532d81f49f4d399b1d952f51d00dea9a8a9cc02d5925bca7f0c8897a1b1148 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::layout.html.twig", "TopxiaWebBundle:Register:index.html.twig", 1);
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
        // line 4
        $context["script_controller"] = "auth/register";
        // line 6
        $context["parameter"] = $this->env->getExtension('topxia_web_twig')->getParametersFromUrl($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "uri", array()));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("注册"), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "  <body style=\" background-image:url(/ff.jpg);
          background-repeat: no-repeat;
          background-attachment: fixed;
          background-position: center;
          width: 100%;
          height: 100%;
          \">


<div class=\"es-section login-section\">
  ";
        // line 126
        echo "  ";
        // line 155
        echo "</div>

  ";
        // line 157
        if (($this->env->getExtension('topxia_web_twig')->getSetting("login_bind.weixinmob_enabled") == "1")) {
            // line 158
            echo "    ";
            $this->env->getExtension('topxia_web_twig')->loadScript("auth/isWeiXin");
            // line 159
            echo "  ";
        }
        // line 160
        echo "
  </body>
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Register:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 160,  68 => 159,  65 => 158,  63 => 157,  59 => 155,  57 => 126,  45 => 8,  42 => 7,  34 => 3,  30 => 1,  28 => 6,  26 => 4,  11 => 1,);
    }
}
