<?php

/* themes/custom/clean/templates/page--taxonomy.html.twig */
class __TwigTemplate_64fd7d6da0fbf615ea4f1effd45fa4f353394af28d9def04210548d19ef463ba extends Twig_Template
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
        $this->loadTemplate(((isset($context["directory"]) ? $context["directory"] : null) . "/partials/header.html.twig"), "themes/custom/clean/templates/page--taxonomy.html.twig", 1)->display($context);
        // line 2
        echo "
<div id=\"content\" class=\"site-content\">
  <div class=\"container main-content-area\">
    <div class=\"row pull-left\">
      <div class=\"main-content-inner col-sm-12 col-md-8\">
        <div class=\"list-group\">
          ";
        // line 8
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "html", null, true));
        echo "
        </div>
      </div>
      ";
        // line 11
        $this->loadTemplate(((isset($context["directory"]) ? $context["directory"] : null) . "/partials/sidebar.html.twig"), "themes/custom/clean/templates/page--taxonomy.html.twig", 11)->display($context);
        // line 12
        echo "    </div>
  </div>
</div>

";
        // line 16
        $this->loadTemplate(((isset($context["directory"]) ? $context["directory"] : null) . "/partials/footer.html.twig"), "themes/custom/clean/templates/page--taxonomy.html.twig", 16)->display($context);
    }

    public function getTemplateName()
    {
        return "themes/custom/clean/templates/page--taxonomy.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 16,  61 => 12,  59 => 11,  53 => 8,  45 => 2,  43 => 1,);
    }
}
/* {% include directory ~ '/partials/header.html.twig' %}*/
/* */
/* <div id="content" class="site-content">*/
/*   <div class="container main-content-area">*/
/*     <div class="row pull-left">*/
/*       <div class="main-content-inner col-sm-12 col-md-8">*/
/*         <div class="list-group">*/
/*           {{ page.content }}*/
/*         </div>*/
/*       </div>*/
/*       {% include directory ~ '/partials/sidebar.html.twig' %}*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* */
/* {% include directory ~ '/partials/footer.html.twig' %}*/
/* */
