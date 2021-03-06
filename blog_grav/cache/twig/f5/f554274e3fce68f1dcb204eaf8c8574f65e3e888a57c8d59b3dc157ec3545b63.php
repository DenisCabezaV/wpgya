<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* forms/fields/date/date.html.twig */
class __TwigTemplate_eaa833080ca5a03d59723e0fed9dabd4a69f0cf67cb04cdc2c9508916dc9d82a extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'input_attributes' => [$this, 'block_input_attributes'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "forms/field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("forms/field.html.twig", "forms/fields/date/date.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_input_attributes($context, array $blocks = [])
    {
        // line 4
        echo "    type=\"date\"
    ";
        // line 5
        if ($this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", []), "min", [])) {
            echo "min=\"";
            echo $this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", []), "min", []);
            echo "\"";
        }
        // line 6
        echo "    ";
        if ($this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", []), "max", [])) {
            echo "max=\"";
            echo $this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", []), "max", []);
            echo "\"";
        }
        // line 7
        echo "    ";
        $this->displayParentBlock("input_attributes", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "forms/fields/date/date.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 7,  51 => 6,  45 => 5,  42 => 4,  39 => 3,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"forms/field.html.twig\" %}

{% block input_attributes %}
    type=\"date\"
    {% if field.validate.min %}min=\"{{ field.validate.min }}\"{% endif %}
    {% if field.validate.max %}max=\"{{ field.validate.max }}\"{% endif %}
    {{ parent() }}
{% endblock %}
", "forms/fields/date/date.html.twig", "/usr/share/nginx/html/user/plugins/form/templates/forms/fields/date/date.html.twig");
    }
}
