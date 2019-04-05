<?php

/* themes/custom/clean/templates/paragraphs/field--paragraph--field-title--latest-reading.html.twig */
class __TwigTemplate_8bfc77dcf307f4dc1b9d0c292ccef6abd9942f2c63ba5e10fed82eb649a20020 extends Twig_Template
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
        $tags = array("for" => 1);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('for'),
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 2
            echo "    <h2 class=\"text-center\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "content", array()), "html", null, true));
            echo "</h2>
    <div class=\"centered\">
        <script type=\"text/javascript\" src=\"http://www.douban.com/service/badge/tcsnhj/?selection=latest&amp;picsize=medium&amp;hideself=on&amp;show=dolist&amp;n=18&amp;hidelogo=on&amp;cat=book&amp;columns=6\"></script>
    </div>
    <br>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "themes/custom/clean/templates/paragraphs/field--paragraph--field-title--latest-reading.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 2,  43 => 1,);
    }
}
/* {% for item in items %}*/
/*     <h2 class="text-center">{{ item.content }}</h2>*/
/*     <div class="centered">*/
/*         <script type="text/javascript" src="http://www.douban.com/service/badge/tcsnhj/?selection=latest&amp;picsize=medium&amp;hideself=on&amp;show=dolist&amp;n=18&amp;hidelogo=on&amp;cat=book&amp;columns=6"></script>*/
/*     </div>*/
/*     <br>*/
/* {% endfor %}*/
/* */
