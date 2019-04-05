<?php

/* themes/custom/clean/templates/page--posts.html.twig */
class __TwigTemplate_3c3888a6474cdd2d9bcee59ad2b9ea8fa1b7c93307f6338d4c7432ededa12fd0 extends Twig_Template
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
        $this->loadTemplate(((isset($context["directory"]) ? $context["directory"] : null) . "/partials/header.html.twig"), "themes/custom/clean/templates/page--posts.html.twig", 1)->display($context);
        // line 2
        echo "
<div id=\"content\" class=\"site-content\">
  <div class=\"container main-content-area\">
    <div class=\"row\">
      <div class=\"main-content-inner col-sm-12 col-md-8\">
          ";
        // line 7
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "html", null, true));
        echo "
      </div>
      ";
        // line 9
        $this->loadTemplate(((isset($context["directory"]) ? $context["directory"] : null) . "/partials/sidebar.html.twig"), "themes/custom/clean/templates/page--posts.html.twig", 9)->display($context);
        // line 10
        echo "    </div>
  </div>
</div>

";
        // line 14
        $this->loadTemplate(((isset($context["directory"]) ? $context["directory"] : null) . "/partials/footer.html.twig"), "themes/custom/clean/templates/page--posts.html.twig", 14)->display($context);
    }

    public function getTemplateName()
    {
        return "themes/custom/clean/templates/page--posts.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 14,  59 => 10,  57 => 9,  52 => 7,  45 => 2,  43 => 1,);
    }
}
/* {% include directory ~ '/partials/header.html.twig' %}*/
/* */
/* <div id="content" class="site-content">*/
/*   <div class="container main-content-area">*/
/*     <div class="row">*/
/*       <div class="main-content-inner col-sm-12 col-md-8">*/
/*           {{ page.content }}*/
/*       </div>*/
/*       {% include directory ~ '/partials/sidebar.html.twig' %}*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* */
/* {% include directory ~ '/partials/footer.html.twig' %}*/
/* */
