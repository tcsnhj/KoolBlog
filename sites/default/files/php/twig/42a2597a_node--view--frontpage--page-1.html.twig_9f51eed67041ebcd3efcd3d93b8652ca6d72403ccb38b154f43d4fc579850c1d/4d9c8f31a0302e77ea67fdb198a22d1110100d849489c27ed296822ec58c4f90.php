<?php

/* themes/custom/clean/templates/node--view--frontpage--page-1.html.twig */
class __TwigTemplate_8e5db84eb9fd53979e4e8b37ff5bc7f4f4de86d8b633cca4550b87db963afdf0 extends Twig_Template
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
        $filters = array("format_date" => 9);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array(),
                array('format_date'),
                array()
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
        echo "<header class=\"entry-header page-header\">
    <h2 class=\"entry-title\">
        <a href=\"";
        // line 3
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true));
        echo "\" rel=\"bookmark\">";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true));
        echo "</a>
    </h2>

    <div class=\"entry-meta\">
        <span class=\"posted-on\">
            <i class=\"fa fa-calendar\"></i>
            <a rel=\"bookmark\"><time class=\"entry-date published\">";
        // line 9
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, call_user_func_array($this->env->getFilter('format_date')->getCallable(), array($this->getAttribute($this->getAttribute((isset($context["node"]) ? $context["node"] : null), "created", array()), "value", array()), "week_date")), "html", null, true));
        echo "</time></a>
        </span>
    </div>
</header>

<div class=\"entry-content\">
    ";
        // line 15
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["content"]) ? $context["content"] : null), "html", null, true));
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "themes/custom/clean/templates/node--view--frontpage--page-1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 15,  58 => 9,  47 => 3,  43 => 1,);
    }
}
/* <header class="entry-header page-header">*/
/*     <h2 class="entry-title">*/
/*         <a href="{{ url }}" rel="bookmark">{{ label }}</a>*/
/*     </h2>*/
/* */
/*     <div class="entry-meta">*/
/*         <span class="posted-on">*/
/*             <i class="fa fa-calendar"></i>*/
/*             <a rel="bookmark"><time class="entry-date published">{{ node.created.value | format_date('week_date') }}</time></a>*/
/*         </span>*/
/*     </div>*/
/* </header>*/
/* */
/* <div class="entry-content">*/
/*     {{ content }}*/
/* </div>*/
