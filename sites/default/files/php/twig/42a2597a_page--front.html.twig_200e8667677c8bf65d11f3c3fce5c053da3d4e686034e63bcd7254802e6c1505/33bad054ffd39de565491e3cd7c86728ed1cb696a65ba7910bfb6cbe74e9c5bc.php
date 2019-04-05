<?php

/* themes/custom/clean/templates/page--front.html.twig */
class __TwigTemplate_36a041bc99c56129a503b25bc10c3b03950e62efbf09da8a781f2785214ffa8d extends Twig_Template
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
        $this->loadTemplate(((isset($context["directory"]) ? $context["directory"] : null) . "/partials/header.html.twig"), "themes/custom/clean/templates/page--front.html.twig", 1)->display($context);
        // line 2
        echo "
<div id=\"content\" class=\"site-content\">
  <div class=\"container main-content-area\">
    <div class=\"row pull-left\">
      <div class=\"main-content-inner col-sm-12 col-md-8\">
        <div id=\"primary\" class=\"content-area\">
          <div id=\"main\" class=\"site-main\" role=\"main\">
            <article class=\"post sticky hentry\">
              <div class=\"blog-item-wrap\">
                ";
        // line 11
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "html", null, true));
        echo "
              </div>
            </article>
          </div>
        </div>
      </div>

      ";
        // line 18
        $this->loadTemplate(((isset($context["directory"]) ? $context["directory"] : null) . "/partials/sidebar.html.twig"), "themes/custom/clean/templates/page--front.html.twig", 18)->display($context);
        // line 19
        echo "    </div>
  </div>
</div>

";
        // line 23
        $this->loadTemplate(((isset($context["directory"]) ? $context["directory"] : null) . "/partials/footer.html.twig"), "themes/custom/clean/templates/page--front.html.twig", 23)->display($context);
    }

    public function getTemplateName()
    {
        return "themes/custom/clean/templates/page--front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 23,  68 => 19,  66 => 18,  56 => 11,  45 => 2,  43 => 1,);
    }
}
/* {% include directory ~ '/partials/header.html.twig' %}*/
/* */
/* <div id="content" class="site-content">*/
/*   <div class="container main-content-area">*/
/*     <div class="row pull-left">*/
/*       <div class="main-content-inner col-sm-12 col-md-8">*/
/*         <div id="primary" class="content-area">*/
/*           <div id="main" class="site-main" role="main">*/
/*             <article class="post sticky hentry">*/
/*               <div class="blog-item-wrap">*/
/*                 {{ page.content }}*/
/*               </div>*/
/*             </article>*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/* */
/*       {% include directory ~ '/partials/sidebar.html.twig' %}*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* */
/* {% include directory ~ '/partials/footer.html.twig' %}*/
/* */
