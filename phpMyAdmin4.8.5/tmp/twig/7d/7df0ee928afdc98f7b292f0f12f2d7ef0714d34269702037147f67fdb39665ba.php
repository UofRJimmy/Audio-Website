<?php

/* database/structure/browse_table_label.twig */
class __TwigTemplate_f5a8f54761564c3707e95650891399acf87abe612c26836571d85c4f9db2d860 extends Twig_Template
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
        echo "<a href=\"sql.php";
        echo (isset($context["tbl_url_query"]) ? $context["tbl_url_query"] : null);
        echo "&amp;pos=0\" title=\"";
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
        echo "\">
    ";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["truename"]) ? $context["truename"] : null), "html", null, true);
        echo "
</a>
";
    }

    public function getTemplateName()
    {
        return "database/structure/browse_table_label.twig";
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
        return new Twig_Source("", "database/structure/browse_table_label.twig", "D:\\phpstudy_pro\\WWW\\local\\phpMyAdmin4.8.5\\templates\\database\\structure\\browse_table_label.twig");
    }
}
