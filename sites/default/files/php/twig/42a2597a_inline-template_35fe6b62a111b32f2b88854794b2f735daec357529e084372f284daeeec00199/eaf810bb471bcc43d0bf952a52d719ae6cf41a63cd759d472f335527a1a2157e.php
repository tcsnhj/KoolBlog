<?php

/* {# inline_template_start #}<a class="list-group-item" href="{{ path }}">
    <p>{{ title }}  <small>{{ created }}</small></p>
</a> */
class __TwigTemplate_31386007370d0ca9cdf2ba797ce1aa6eb88a34c378acb90fcf63cbbe2041c985 extends Twig_Template
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
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array(),
                array(),
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
        echo "<a class=\"list-group-item\" href=\"";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["path"]) ? $context["path"] : null), "html", null, true));
        echo "\">
    <p>";
        // line 2
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true));
        echo "  <small>";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["created"]) ? $context["created"] : null), "html", null, true));
        echo "</small></p>
</a>";
    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}<a class=\"list-group-item\" href=\"{{ path }}\">
    <p>{{ title }}  <small>{{ created }}</small></p>
</a>";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 2,  45 => 1,);
    }
}
/* {# inline_template_start #}<a class="list-group-item" href="{{ path }}">*/
/*     <p>{{ title }}  <small>{{ created }}</small></p>*/
/* </a>*/
