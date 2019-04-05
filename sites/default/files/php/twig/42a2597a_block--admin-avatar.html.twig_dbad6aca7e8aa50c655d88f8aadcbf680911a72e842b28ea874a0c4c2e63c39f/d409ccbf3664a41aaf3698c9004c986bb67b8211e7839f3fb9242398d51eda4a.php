<?php

/* modules/custom/admin_avatar/templates/block--admin-avatar.html.twig */
class __TwigTemplate_666d98c0c17fd34a885f084f8ddb9b5bb79922c7dc5e29aeeb0d6ae8bb05e428 extends Twig_Template
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
        $tags = array();
        $filters = array();
        $functions = array("file_url" => 4);

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array(),
                array(),
                array('file_url')
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setTemplateFile($this->getTemplateName());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 1
        echo "<aside class=\"widget avatar-panel\">
    <div class=\"avatar\">
        <a href=\"/about\">
            <img class=\"img-thumbnail\" src=\"";
        // line 4
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, call_user_func_array($this->env->getFunction('file_url')->getCallable(), array((isset($context["avatar_url"]) ? $context["avatar_url"] : null))), "html", null, true));
        echo "\" style=\"width: 180px;\">
        </a>
    </div>
</aside>";
    }

    public function getTemplateName()
    {
        return "modules/custom/admin_avatar/templates/block--admin-avatar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 4,  43 => 1,);
    }
}
/* <aside class="widget avatar-panel">*/
/*     <div class="avatar">*/
/*         <a href="/about">*/
/*             <img class="img-thumbnail" src="{{ file_url(avatar_url) }}" style="width: 180px;">*/
/*         </a>*/
/*     </div>*/
/* </aside>*/
