<?php

/* themes/custom/clean/templates/views/item-list.html.twig */
class __TwigTemplate_28b8e0fbb7dedd30682db5b7e9f9d86d1046731a412da0f1642f6b624945d9bb extends Twig_Template
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
        $tags = array("if" => 25, "for" => 31);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if', 'for'),
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

        // line 24
        echo "
";
        // line 25
        if (((isset($context["items"]) ? $context["items"] : null) || (isset($context["empty"]) ? $context["empty"] : null))) {
            // line 26
            if ( !twig_test_empty((isset($context["title"]) ? $context["title"] : null))) {
                // line 27
                echo "<h3>";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true));
                echo "</h3>";
            }
            // line 30
            if ((isset($context["items"]) ? $context["items"] : null)) {
                // line 31
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 32
                    echo "<span class=\"label label-default\">";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "value", array()), "html", null, true));
                    echo "</span>&nbsp;";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
            } else {
                // line 35
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["empty"]) ? $context["empty"] : null), "html", null, true));
            }
        }
    }

    public function getTemplateName()
    {
        return "themes/custom/clean/templates/views/item-list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 35,  61 => 32,  57 => 31,  55 => 30,  50 => 27,  48 => 26,  46 => 25,  43 => 24,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Default theme implementation for an item list.*/
/*  **/
/*  * Available variables:*/
/*  * - items: A list of items. Each item contains:*/
/*  *   - attributes: HTML attributes to be applied to each list item.*/
/*  *   - value: The content of the list element.*/
/*  * - title: The title of the list.*/
/*  * - list_type: The tag for list element ("ul" or "ol").*/
/*  * - wrapper_attributes: HTML attributes to be applied to the list wrapper.*/
/*  * - attributes: HTML attributes to be applied to the list.*/
/*  * - empty: A message to display when there are no items. Allowed value is a*/
/*  *   string or render array.*/
/*  * - context: A list of contextual data associated with the list. May contain:*/
/*  *   - list_style: The custom list style.*/
/*  **/
/*  * @see template_preprocess_item_list()*/
/*  **/
/*  * @ingroup themeable*/
/*  *//* */
/* #}*/
/* */
/* {% if items or empty %}*/
/*     {%- if title is not empty -%}*/
/*         <h3>{{ title }}</h3>*/
/*     {%- endif -%}*/
/* */
/*     {%- if items -%}*/
/*         {%- for item in items -%}*/
/*             <span class="label label-default">{{ item.value }}</span>&nbsp;*/
/*         {%- endfor -%}*/
/*     {%- else -%}*/
/*         {{- empty -}}*/
/*     {%- endif -%}*/
/* {%- endif %}*/
/* */
