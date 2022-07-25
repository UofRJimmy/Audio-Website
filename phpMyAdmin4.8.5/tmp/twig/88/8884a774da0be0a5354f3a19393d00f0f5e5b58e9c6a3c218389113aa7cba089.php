<?php

/* table/search/column_comparison_operators.twig */
class __TwigTemplate_436c50f620eda9be9d10a45204efaeb1d0bca10c8946af5d59b692ab19d66e90 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<select id=\"ColumnOperator";
        echo twig_escape_filter($this->env, (isset($context["search_index"]) ? $context["search_index"] : null), "html", null, true);
        echo "\" name=\"criteriaColumnOperators[";
        echo twig_escape_filter($this->env, (isset($context["search_index"]) ? $context["search_index"] : null), "html", null, true);
        echo "]\">
    ";
        // line 2
        echo (isset($context["type_operators"]) ? $context["type_operators"] : null);
        echo "
</select>
";
    }

    public function getTemplateName()
    {
        return "table/search/column_comparison_operators.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "table/search/column_comparison_operators.twig", "D:\\phpstudy_pro\\WWW\\local\\phpMyAdmin4.8.5\\templates\\table\\search\\column_comparison_operators.twig");
    }
}
