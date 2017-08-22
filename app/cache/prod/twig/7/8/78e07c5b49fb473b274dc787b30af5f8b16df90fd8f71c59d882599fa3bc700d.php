<?php

/* ClassroomBundle:Classroom:teachers-block.html.twig */
class __TwigTemplate_78e07c5b49fb473b274dc787b30af5f8b16df90fd8f71c59d882599fa3bc700d extends Twig_Template
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
        $context["web_macro"] = $this->loadTemplate("TopxiaWebBundle::macro.html.twig", "ClassroomBundle:Classroom:teachers-block.html.twig", 1);
        // line 2
        echo "
";
        // line 3
        $this->env->getExtension('topxia_web_twig')->loadScript("classroombundle/controller/classroom/teachers");
    }

    public function getTemplateName()
    {
        return "ClassroomBundle:Classroom:teachers-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 3,  21 => 2,  19 => 1,);
    }
}
