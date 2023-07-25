<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* account/order.html.twig */
class __TwigTemplate_5f8f1172914ca8a975fb1159643cf038 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "account/order.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "account/order.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "account/order.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Order details";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h2>Details of order ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 6, $this->source); })()), "reference", [], "any", false, false, false, 6), "html", null, true);
        echo "</h2>
    <hr>
    <p>
        <b>Order date :</b> ";
        // line 9
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 9, $this->source); })()), "createdAt", [], "any", false, false, false, 9), "d/m/Y"), "html", null, true);
        echo " <br>
        <b>Status:</b> ";
        // line 10
        echo (((twig_get_attribute($this->env, $this->source,         // line 11
(isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 11, $this->source); })()), "state", [], "any", false, false, false, 11) == 1)) ? ("Payment accepted") : ((((twig_get_attribute($this->env, $this->source,         // line 12
(isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 12, $this->source); })()), "state", [], "any", false, false, false, 12) == 2)) ? ("In preparation") : ("Shipped"))));
        // line 13
        echo "<br>
        <b>Reference : </b><span>";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 14, $this->source); })()), "reference", [], "any", false, false, false, 14), "html", null, true);
        echo "</span><br>
        <b>Carrier:</b> ";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 15, $this->source); })()), "carrierName", [], "any", false, false, false, 15), "html", null, true);
        echo "<br>
    </p>
    <h5>Here's your order</h5>
    <table class=\"table mt-4\">
    <thead>
        <tr>
            <th scope=\"col\">Items</th>
            <th scope=\"col\">Quantity</th>
            <th scope=\"col\">Unit Price </th>
            <th scope=\"col\">Total</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 29, $this->source); })()), "orderDetails", [], "any", false, false, false, 29));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 30
            echo "            <tr>
                <td>";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 31), "html", null, true);
            echo "</td>
                <td>x";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 32), "html", null, true);
            echo "</td>
                <td>";
            // line 33
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 33) / 100), 2, ",", "."), "html", null, true);
            echo " \$</td>
                <td>";
            // line 34
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 34) / 100), 2, ",", "."), "html", null, true);
            echo " \$</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "            <tr>
                <th>Total price</th>
                <td></td>
                <td></td>
                <td class=\"font-weight-bold text-danger\">";
        // line 41
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 41, $this->source); })()), "total", [], "any", false, false, false, 41) / 100), 2, ",", "."), "html", null, true);
        echo " \$</td>
            </tr>
    </tbody>
</table>
    <div class=\"text-right\">
        <b>Shipping fee:</b> ";
        // line 46
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 46, $this->source); })()), "carrierPrice", [], "any", false, false, false, 46) / 100), 2, ",", "."), "html", null, true);
        echo " \$<br>
        <b>Subtotal: </b> ";
        // line 47
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 47, $this->source); })()), "carrierPrice", [], "any", false, false, false, 47) + twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 47, $this->source); })()), "total", [], "any", false, false, false, 47)) / 100), 2, ",", "."), "html", null, true);
        echo " \$
    </div>
    <a title=\"Back to my account\"href=\"";
        // line 49
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account");
        echo "\"><i class='fas fa-angle-left' style='font-size:15px'></i> Return to My Account</a>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "account/order.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 49,  173 => 47,  169 => 46,  161 => 41,  155 => 37,  146 => 34,  142 => 33,  138 => 32,  134 => 31,  131 => 30,  127 => 29,  110 => 15,  106 => 14,  103 => 13,  101 => 12,  100 => 11,  99 => 10,  95 => 9,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Order details{% endblock %}

{% block body %}
    <h2>Details of order {{order.reference}}</h2>
    <hr>
    <p>
        <b>Order date :</b> {{order.createdAt|date('d/m/Y')}} <br>
        <b>Status:</b> {{
            order.state == 1 ? 'Payment accepted' :
            order.state == 2 ? 'In preparation': 'Shipped'
        }}<br>
        <b>Reference : </b><span>{{order.reference}}</span><br>
        <b>Carrier:</b> {{order.carrierName}}<br>
    </p>
    <h5>Here's your order</h5>
    <table class=\"table mt-4\">
    <thead>
        <tr>
            <th scope=\"col\">Items</th>
            <th scope=\"col\">Quantity</th>
            <th scope=\"col\">Unit Price </th>
            <th scope=\"col\">Total</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        {% for product in order.orderDetails %}
            <tr>
                <td>{{product.product}}</td>
                <td>x{{product.quantity}}</td>
                <td>{{(product.price / 100)|number_format(2,',','.') }} \$</td>
                <td>{{(product.total / 100)|number_format(2,',','.') }} \$</td>
            </tr>
        {% endfor %}
            <tr>
                <th>Total price</th>
                <td></td>
                <td></td>
                <td class=\"font-weight-bold text-danger\">{{(order.total / 100)|number_format(2,',','.') }} \$</td>
            </tr>
    </tbody>
</table>
    <div class=\"text-right\">
        <b>Shipping fee:</b> {{(order.carrierPrice / 100)|number_format(2,',','.') }} \$<br>
        <b>Subtotal: </b> {{((order.carrierPrice + order.total) / 100)|number_format(2,',','.') }} \$
    </div>
    <a title=\"Back to my account\"href=\"{{ path('account') }}\"><i class='fas fa-angle-left' style='font-size:15px'></i> Return to My Account</a>
{% endblock %}
", "account/order.html.twig", "C:\\Users\\Acer\\ecommerce-symfony\\templates\\account\\order.html.twig");
    }
}
