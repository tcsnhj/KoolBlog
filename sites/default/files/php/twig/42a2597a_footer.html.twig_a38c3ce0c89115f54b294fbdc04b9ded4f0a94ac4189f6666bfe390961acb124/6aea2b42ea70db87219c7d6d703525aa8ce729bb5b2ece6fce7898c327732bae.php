<?php

/* themes/custom/clean/partials/footer.html.twig */
class __TwigTemplate_1999d0c26faafc8b160b136f7835383e8a83a272219d7f27e0767a971e4876e0 extends Twig_Template
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
        echo "<footer id=\"colophon\" class=\"site-footer\" role=\"contentinfo\">
    <div class=\"site-info container\">
        <div class=\"row\">
            ";
        // line 4
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array()), "html", null, true));
        echo "
            <div class=\"col-md-6\">
                ";
        // line 6
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_left", array()), "html", null, true));
        echo "
            </div>
            <div class=\"col-md-6\">
                ";
        // line 9
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_right", array()), "html", null, true));
        echo "
            </div>
        </div>
    </div>
</footer>";
    }

    public function getTemplateName()
    {
        return "themes/custom/clean/partials/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 9,  53 => 6,  48 => 4,  43 => 1,);
    }
}
/* <footer id="colophon" class="site-footer" role="contentinfo">*/
/*     <div class="site-info container">*/
/*         <div class="row">*/
/*             {{ page.footer }}*/
/*             <div class="col-md-6">*/
/*                 {{ page.footer_left }}*/
/*             </div>*/
/*             <div class="col-md-6">*/
/*                 {{ page.footer_right }}*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </footer>*/
