<?php

/* themes/custom/clean/templates/views/views-view--project.html.twig */
class __TwigTemplate_a37e2c89f7c4a60b7729c703795ed99c00938ffa52c8782aea972517f8242ac7 extends Twig_Template
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
        $tags = array("if" => 6);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if'),
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
        echo "<div class=\"col-lg-12\">
    <br>

    <div id=\"timeline\">
        <p class=\"line-end\" data-translate=\"recently\">Recently</p>
        ";
        // line 6
        if ((isset($context["rows"]) ? $context["rows"] : null)) {
            // line 7
            echo "            ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["rows"]) ? $context["rows"] : null), "html", null, true));
            echo "
        ";
        } elseif (        // line 8
(isset($context["empty"]) ? $context["empty"] : null)) {
            // line 9
            echo "            <div class=\"view-empty\">
                ";
            // line 10
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["empty"]) ? $context["empty"] : null), "html", null, true));
            echo "
            </div>
        ";
        }
        // line 13
        echo "        <p class=\"line-end\">...</p>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "themes/custom/clean/templates/views/views-view--project.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 13,  62 => 10,  59 => 9,  57 => 8,  52 => 7,  50 => 6,  43 => 1,);
    }
}
/* <div class="col-lg-12">*/
/*     <br>*/
/* */
/*     <div id="timeline">*/
/*         <p class="line-end" data-translate="recently">Recently</p>*/
/*         {% if rows %}*/
/*             {{ rows }}*/
/*         {% elseif empty %}*/
/*             <div class="view-empty">*/
/*                 {{ empty }}*/
/*             </div>*/
/*         {% endif %}*/
/*         <p class="line-end">...</p>*/
/*     </div>*/
/* </div>*/
