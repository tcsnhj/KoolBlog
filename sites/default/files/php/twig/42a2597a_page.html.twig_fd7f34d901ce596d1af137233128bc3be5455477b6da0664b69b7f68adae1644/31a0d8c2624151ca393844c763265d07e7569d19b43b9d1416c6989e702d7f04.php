<?php

/* themes/custom/clean/templates/page.html.twig */
class __TwigTemplate_4dec1d43da134fe957960af5178065482e9249fe5f071c581a9159ef0c194309 extends Twig_Template
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
        $tags = array("include" => 1);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('include'),
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
        $this->loadTemplate(((isset($context["directory"]) ? $context["directory"] : null) . "/partials/header.html.twig"), "themes/custom/clean/templates/page.html.twig", 1)->display($context);
        // line 2
        echo "
<div class=\"container\">
  ";
        // line 4
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "html", null, true));
        echo "
</div>
<br>

";
        // line 8
        $this->loadTemplate(((isset($context["directory"]) ? $context["directory"] : null) . "/partials/footer.html.twig"), "themes/custom/clean/templates/page.html.twig", 8)->display($context);
    }

    public function getTemplateName()
    {
        return "themes/custom/clean/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 8,  49 => 4,  45 => 2,  43 => 1,);
    }
}
/* {% include directory ~ '/partials/header.html.twig' %}*/
/* */
/* <div class="container">*/
/*   {{ page.content }}*/
/* </div>*/
/* <br>*/
/* */
/* {% include directory ~ '/partials/footer.html.twig' %}*/
/* */
