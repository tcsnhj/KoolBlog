<?php

/* themes/custom/clean/templates/page--node.html.twig */
class __TwigTemplate_c412e0e9f86c8467b6daf7396a623bea513888799734f7e2a048a1dfb10d9e65 extends Twig_Template
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
        $tags = array("include" => 1, "if" => 7);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('include', 'if'),
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
        $this->loadTemplate(((isset($context["directory"]) ? $context["directory"] : null) . "/partials/header.html.twig"), "themes/custom/clean/templates/page--node.html.twig", 1)->display($context);
        // line 2
        echo "
<div id=\"post-content\" class=\"container\">
  ";
        // line 4
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "html", null, true));
        echo "
</div>

";
        // line 7
        if (($this->getAttribute((isset($context["node"]) ? $context["node"] : null), "getType", array(), "method") == "post")) {
            // line 8
            echo "<div id=\"ds-content\" class=\"container\">
  <!-- 多说评论框 start -->
  <div class=\"ds-thread\" data-thread-key=\"";
            // line 10
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["node"]) ? $context["node"] : null), "nid", array()), "value", array()), "html", null, true));
            echo "\" data-title=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["node"]) ? $context["node"] : null), "title", array()), "value", array()), "html", null, true));
            echo "\" data-author-key=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["node"]) ? $context["node"] : null), "getOwnerId", array(), "method"), "html", null, true));
            echo "\"></div>
  <!-- 多说评论框 end -->
  <!-- 多说公共JS代码 start (一个网页只需插入一次) -->
  <script type=\"text/javascript\">
    var duoshuoQuery = {short_name:\"gtdcode\"};
    (function() {
      var ds = document.createElement('script');
      ds.type = 'text/javascript';ds.async = true;
      ds.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') + '//static.duoshuo.com/embed.js';
      ds.charset = 'UTF-8';
      (document.getElementsByTagName('head')[0]
      || document.getElementsByTagName('body')[0]).appendChild(ds);
    })();
  </script>
  <!-- 多说公共JS代码 end -->
</div>
";
        }
        // line 27
        echo "
";
        // line 28
        $this->loadTemplate(((isset($context["directory"]) ? $context["directory"] : null) . "/partials/footer.html.twig"), "themes/custom/clean/templates/page--node.html.twig", 28)->display($context);
    }

    public function getTemplateName()
    {
        return "themes/custom/clean/templates/page--node.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 28,  85 => 27,  61 => 10,  57 => 8,  55 => 7,  49 => 4,  45 => 2,  43 => 1,);
    }
}
/* {% include directory ~ '/partials/header.html.twig' %}*/
/* */
/* <div id="post-content" class="container">*/
/*   {{ page.content }}*/
/* </div>*/
/* */
/* {% if node.getType() == 'post' %}*/
/* <div id="ds-content" class="container">*/
/*   <!-- 多说评论框 start -->*/
/*   <div class="ds-thread" data-thread-key="{{ node.nid.value }}" data-title="{{ node.title.value }}" data-author-key="{{ node.getOwnerId() }}"></div>*/
/*   <!-- 多说评论框 end -->*/
/*   <!-- 多说公共JS代码 start (一个网页只需插入一次) -->*/
/*   <script type="text/javascript">*/
/*     var duoshuoQuery = {short_name:"gtdcode"};*/
/*     (function() {*/
/*       var ds = document.createElement('script');*/
/*       ds.type = 'text/javascript';ds.async = true;*/
/*       ds.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') + '//static.duoshuo.com/embed.js';*/
/*       ds.charset = 'UTF-8';*/
/*       (document.getElementsByTagName('head')[0]*/
/*       || document.getElementsByTagName('body')[0]).appendChild(ds);*/
/*     })();*/
/*   </script>*/
/*   <!-- 多说公共JS代码 end -->*/
/* </div>*/
/* {% endif %}*/
/* */
/* {% include directory ~ '/partials/footer.html.twig' %}*/
/* */
