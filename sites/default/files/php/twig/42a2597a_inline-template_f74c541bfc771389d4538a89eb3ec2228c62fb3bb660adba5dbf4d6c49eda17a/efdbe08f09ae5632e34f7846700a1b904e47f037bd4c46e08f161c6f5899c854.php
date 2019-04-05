<?php

/* {# inline_template_start #}<a class="list-group-item" href={{ path }}>
    <h4>
        {{ title }}
        <small>{{ created }}</small>
    </h4>
</a> */
class __TwigTemplate_82acf6fe6c9f2e93c1578e68162131379cdbb7212338df90061c8cba9b84dbb9 extends Twig_Template
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
        echo "<a class=\"list-group-item\" href=";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["path"]) ? $context["path"] : null), "html", null, true));
        echo ">
    <h4>
        ";
        // line 3
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true));
        echo "
        <small>";
        // line 4
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["created"]) ? $context["created"] : null), "html", null, true));
        echo "</small>
    </h4>
</a>";
    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}<a class=\"list-group-item\" href={{ path }}>
    <h4>
        {{ title }}
        <small>{{ created }}</small>
    </h4>
</a>";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 4,  54 => 3,  48 => 1,);
    }
}
/* {# inline_template_start #}<a class="list-group-item" href={{ path }}>*/
/*     <h4>*/
/*         {{ title }}*/
/*         <small>{{ created }}</small>*/
/*     </h4>*/
/* </a>*/
