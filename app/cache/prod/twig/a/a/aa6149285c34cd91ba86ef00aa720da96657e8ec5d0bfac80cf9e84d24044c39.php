<?php

/* TopxiaAdminBundle:User:user-table-tr.html.twig */
class __TwigTemplate_aa6149285c34cd91ba86ef00aa720da96657e8ec5d0bfac80cf9e84d24044c39 extends Twig_Template
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
        $context["admin_macro"] = $this->loadTemplate("TopxiaAdminBundle::macro.html.twig", "TopxiaAdminBundle:User:user-table-tr.html.twig", 1);
        // line 2
        echo "
<style>
    .fs{
        color: black;
    }
</style>
<tr id=\"user-table-tr-";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()), "html", null, true);
        echo "\">
  <td>
      <span class=\"fs\">
    <strong class=\"fs\">";
        // line 11
        echo $context["admin_macro"]->getuser_link((isset($context["user"]) ? $context["user"] : null));
        echo "</strong>
      </span>
    ";
        // line 13
        if ($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "locked", array())) {
            // line 14
            echo "      <label class=\"label label-danger\">禁</label>
    ";
        }
        // line 16
        echo "
    <br>
      ";
        // line 25
        echo "  </td>

  <td>


    ";
        // line 30
        if ($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "verifiedMobile", array())) {
            // line 31
            echo "      ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "verifiedMobile", array()), "html", null, true);
            echo "
    ";
        } elseif ($this->getAttribute(        // line 32
(isset($context["profile"]) ? $context["profile"] : null), "mobile", array())) {
            // line 33
            echo "      ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "mobile", array()), "html", null, true);
            echo "
    ";
        } else {
            // line 35
            echo "       -- 
    ";
        }
        // line 37
        echo "
  </td>

  <td>
      ";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "weixin", array()), "html", null, true);
        echo "
  </td>
  <td>
      ";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classr"]) ? $context["classr"] : null), $this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "company", array()), array(), "array"), "html", null, true);
        echo "
  </td>
  <td>
      ";
        // line 47
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "title", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "title", array()), "")) : ("")), "html", null, true);
        echo "
  </td>
  <td>
      ";
        // line 50
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "job", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "job", array()), "")) : ("")), "html", null, true);
        echo "
  </td>


";
        // line 93
        echo "  <td>
    <div class=\"btn-group\">
";
        // line 103
        echo "          <li><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_user_edit", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()))), "html", null, true);
        echo "\" data-toggle=\"modal\" data-url=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_user_edit", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()))), "html", null, true);
        echo "\"  >编辑用户信息</a></li>

            ";
        // line 105
        $context["enableOrg"] = $this->env->getExtension('topxia_web_twig')->getSetting("magic.enable_org", "0");
        // line 106
        echo "          ";
        // line 120
        echo "        ";
        if ($this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN")) {
            // line 126
            echo "        ";
        }
        // line 132
        echo "        ";
        if ($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "locked", array())) {
            // line 133
            echo "          <li><a class=\"unlock-user\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_user_unlock", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()))), "html", null, true);
            echo "\" title=\"解禁用户";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "nickname", array()), "html", null, true);
            echo "\" data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_user_unlock", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()))), "html", null, true);
            echo "\">解禁用户</a></li>
        ";
        } else {
            // line 135
            echo "              ";
            if (!twig_in_filter("ROLE_SUPER_ADMIN", $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "roles", array()))) {
                // line 136
                echo "                    ";
                if (twig_in_filter("ROLE_SUPER_ADMIN", $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "roles", array()))) {
                    // line 137
                    echo "                          <li></li>
                           ";
                } else {
                    // line 139
                    echo "                            <li><a class=\"lock-user\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_user_lock", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()))), "html", null, true);
                    echo "\" title=\"封禁用户";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "nickname", array()), "html", null, true);
                    echo "\" data-url=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_user_lock", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()))), "html", null, true);
                    echo "\">封禁用户</a></li>
                    ";
                }
                // line 141
                echo "               ";
            } else {
                // line 142
                echo "                   <li><a class=\"lock-user\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_user_lock", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()))), "html", null, true);
                echo "\" title=\"封禁用户";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "nickname", array()), "html", null, true);
                echo "\" data-url=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_user_lock", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()))), "html", null, true);
                echo "\">封禁用户</a></li>
              ";
            }
            // line 144
            echo "        ";
        }
        // line 145
        echo "      </ul>
    </div>
  </td>
</tr>
";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:User:user-table-tr.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 145,  175 => 144,  165 => 142,  162 => 141,  152 => 139,  148 => 137,  145 => 136,  142 => 135,  132 => 133,  129 => 132,  126 => 126,  123 => 120,  121 => 106,  119 => 105,  111 => 103,  107 => 93,  100 => 50,  94 => 47,  88 => 44,  82 => 41,  76 => 37,  72 => 35,  66 => 33,  64 => 32,  59 => 31,  57 => 30,  50 => 25,  46 => 16,  42 => 14,  40 => 13,  35 => 11,  29 => 8,  21 => 2,  19 => 1,);
    }
}
