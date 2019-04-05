<?php

/* themes/custom/clean/templates/views/views-view-fields--project.html.twig */
class __TwigTemplate_125bc49ab1735a273874fe60574f4ac0c5054586196669cf8ca589e3d7962da0 extends Twig_Template
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

        // line 32
        echo "<div class=\"meta\">
    <i class=\"fa fa-code-fork\"></i>
    <p class=\"date\">";
        // line 34
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_date", array()), "content", array()), "html", null, true));
        echo "</p>
    <i class=\"arrow-left\"></i>
</div>
<div class=\"content\">
    <header>
        <div class=\"links\"></div>
        <h3>";
        // line 40
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "title", array()), "content", array()), "html", null, true));
        echo "</h3>
        <p class=\"tags\">
            ";
        // line 42
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_project_tag", array()), "content", array()), "html", null, true));
        echo "
        </p>
    </header>
    <figure>";
        // line 45
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_image", array()), "content", array()), "html", null, true));
        echo "</figure>
    <article>";
        // line 46
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "body", array()), "content", array()), "html", null, true));
        echo "</article>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/clean/templates/views/views-view-fields--project.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 46,  67 => 45,  61 => 42,  56 => 40,  47 => 34,  43 => 32,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Theme override to display all the fields in a row.*/
/*  **/
/*  * Available variables:*/
/*  * - view: The view in use.*/
/*  * - fields: A list of fields, each one contains:*/
/*  *   - content: The output of the field.*/
/*  *   - raw: The raw data for the field, if it exists. This is NOT output safe.*/
/*  *   - class: The safe class ID to use.*/
/*  *   - handler: The Views field handler controlling this field.*/
/*  *   - inline: Whether or not the field should be inline.*/
/*  *   - wrapper_element: An HTML element for a wrapper.*/
/*  *   - wrapper_attributes: List of attributes for wrapper element.*/
/*  *   - separator: An optional separator that may appear before a field.*/
/*  *   - label: The field's label text.*/
/*  *   - label_element: An HTML element for a label wrapper.*/
/*  *   - label_attributes: List of attributes for label wrapper.*/
/*  *   - label_suffix: Colon after the label.*/
/*  *   - element_type: An HTML element for the field content.*/
/*  *   - element_attributes: List of attributes for HTML element for field content.*/
/*  *   - has_label_colon: A boolean indicating whether to display a colon after*/
/*  *     the label.*/
/*  *   - element_type: An HTML element for the field content.*/
/*  *   - element_attributes: List of attributes for HTML element for field content.*/
/*  * - row: The raw result from the query, with all data it fetched.*/
/*  **/
/*  * @see template_preprocess_views_view_fields()*/
/*  *//* */
/* #}*/
/* <div class="meta">*/
/*     <i class="fa fa-code-fork"></i>*/
/*     <p class="date">{{ fields.field_date.content }}</p>*/
/*     <i class="arrow-left"></i>*/
/* </div>*/
/* <div class="content">*/
/*     <header>*/
/*         <div class="links"></div>*/
/*         <h3>{{ fields.title.content }}</h3>*/
/*         <p class="tags">*/
/*             {{ fields.field_project_tag.content }}*/
/*         </p>*/
/*     </header>*/
/*     <figure>{{ fields.field_image.content }}</figure>*/
/*     <article>{{ fields.body.content }}</article>*/
/* </div>*/
/* */
