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

/* _footer.html.twig */
class __TwigTemplate_a47e3ac57b3a328e5038df7dbe4cf914 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_footer.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_footer.html.twig"));

        // line 1
        echo "<footer class=\"footer\" style=\"background-color: #f1f1f1; position: fixed; bottom: 0; width: 100%; height: 60px; transition: transform 0.3s ease-in-out;\">
    <div class=\"footer-content\" style=\"display: flex; align-items: center; justify-content: space-between; height: 100%; padding: 0 20px;\">
        <div class=\"left-section\" style=\"display: flex; flex-direction: column; align-items: flex-start;\">
            <small style=\"margin-top: 5px;\">
                <a href=\"https://www.amazon.com/gp/help/customer/display.html?nodeId=508088&ref_=footer_cou\">Conditions of Use</a>
                &nbsp;|&nbsp;
                <a href=\"https://www.amazon.com/gp/help/customer/display.html?nodeId=468496&ref_=footer_privacy\">Privacy Notice</a>
                &nbsp;|&nbsp;
                <a href=\"https://www.facebook.com/\" target=\"_blank\"><img src=\"https://upload.wikimedia.org/wikipedia/commons/b/b8/2021_Facebook_icon.svg\" alt=\"Facebook\" style=\"height: 15px;\"></a>
                &nbsp;
                <a href=\"https://www.twitter.com/\" target=\"_blank\"><img src=\"https://upload.wikimedia.org/wikipedia/commons/6/6f/Logo_of_Twitter.svg\" alt=\"Twitter\" style=\"height: 15px;\"></a>
                &nbsp;
                <a href=\"https://www.tiktok.com/\" target=\"_blank\"><img src=\"https://www.svgrepo.com/show/327400/logo-tiktok.svg\" alt=\"TikTok\" style=\"height: 15px;\"></a>
            </small>
            <small>&copy; 2023, Banazon, Inc. or its affiliates. Apple, the Apple logo are trademark of Apple Inc, registered in the US, and other countries</small>
        </div>
        <div class=\"right-section\" style=\"display: flex; align-items: center;\">
            <span class=\"globalnav-image-regular globalnav-link-image\"></span><span class=\"globalnav-image-compact globalnav-link-image\"><svg height=\"60\" viewBox=\"0 0 17 48\" width=\"30\" xmlns=\"http://www.w3.org/2000/svg\"><path d=\"m15.5752 19.0792a4.2055 4.2055 0 0 0 -2.01 3.5376 4.0931 4.0931 0 0 0 2.4908 3.7542 9.7779 9.7779 0 0 1 -1.2755 2.6351c-.7941 1.1431-1.6244 2.2862-2.8878 2.2862s-1.5883-.734-3.0443-.734c-1.42 0-1.9252.7581-3.08.7581s-1.9611-1.0589-2.8876-2.3584a11.3987 11.3987 0 0 1 -1.9373-6.1487c0-3.61 2.3464-5.523 4.6566-5.523 1.2274 0 2.25.8062 3.02.8062.734 0 1.8771-.8543 3.2729-.8543a4.3778 4.3778 0 0 1 3.6822 1.841zm-6.8586-2.0456a1.3865 1.3865 0 0 1 -.2527-.024 1.6557 1.6557 0 0 1 -.0361-.337 4.0341 4.0341 0 0 1 1.0228-2.5148 4.1571 4.1571 0 0 1 2.7314-1.4078 1.7815 1.7815 0 0 1 .0361.373 4.1487 4.1487 0 0 1 -.9867 2.587 3.6039 3.6039 0 0 1 -2.5148 1.3236z\"></path></svg></span><span class=\"globalnav-link-text\"></span></a>
";
        // line 20
        echo "            <img src=\"http://online.gov.vn/Content/EndUser/LogoCCDVSaleNoti/logoSaleNoti.png\" alt=\"CCDV\" style=\"height: 30px; margin-left: 10px;\">
        </div>
    </div>
</footer>

<script>
    var prevScrollpos = window.pageYOffset;
    window.onscroll = function() {
        var currentScrollPos = window.pageYOffset;
        if (prevScrollpos > currentScrollPos) {
            document.querySelector('.footer').style.transform = \"translateY(0)\";
        } else {
            document.querySelector('.footer').style.transform = \"translateY(100%)\";
        }
        prevScrollpos = currentScrollPos;
    }
</script>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "_footer.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  63 => 20,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<footer class=\"footer\" style=\"background-color: #f1f1f1; position: fixed; bottom: 0; width: 100%; height: 60px; transition: transform 0.3s ease-in-out;\">
    <div class=\"footer-content\" style=\"display: flex; align-items: center; justify-content: space-between; height: 100%; padding: 0 20px;\">
        <div class=\"left-section\" style=\"display: flex; flex-direction: column; align-items: flex-start;\">
            <small style=\"margin-top: 5px;\">
                <a href=\"https://www.amazon.com/gp/help/customer/display.html?nodeId=508088&ref_=footer_cou\">Conditions of Use</a>
                &nbsp;|&nbsp;
                <a href=\"https://www.amazon.com/gp/help/customer/display.html?nodeId=468496&ref_=footer_privacy\">Privacy Notice</a>
                &nbsp;|&nbsp;
                <a href=\"https://www.facebook.com/\" target=\"_blank\"><img src=\"https://upload.wikimedia.org/wikipedia/commons/b/b8/2021_Facebook_icon.svg\" alt=\"Facebook\" style=\"height: 15px;\"></a>
                &nbsp;
                <a href=\"https://www.twitter.com/\" target=\"_blank\"><img src=\"https://upload.wikimedia.org/wikipedia/commons/6/6f/Logo_of_Twitter.svg\" alt=\"Twitter\" style=\"height: 15px;\"></a>
                &nbsp;
                <a href=\"https://www.tiktok.com/\" target=\"_blank\"><img src=\"https://www.svgrepo.com/show/327400/logo-tiktok.svg\" alt=\"TikTok\" style=\"height: 15px;\"></a>
            </small>
            <small>&copy; 2023, Banazon, Inc. or its affiliates. Apple, the Apple logo are trademark of Apple Inc, registered in the US, and other countries</small>
        </div>
        <div class=\"right-section\" style=\"display: flex; align-items: center;\">
            <span class=\"globalnav-image-regular globalnav-link-image\"></span><span class=\"globalnav-image-compact globalnav-link-image\"><svg height=\"60\" viewBox=\"0 0 17 48\" width=\"30\" xmlns=\"http://www.w3.org/2000/svg\"><path d=\"m15.5752 19.0792a4.2055 4.2055 0 0 0 -2.01 3.5376 4.0931 4.0931 0 0 0 2.4908 3.7542 9.7779 9.7779 0 0 1 -1.2755 2.6351c-.7941 1.1431-1.6244 2.2862-2.8878 2.2862s-1.5883-.734-3.0443-.734c-1.42 0-1.9252.7581-3.08.7581s-1.9611-1.0589-2.8876-2.3584a11.3987 11.3987 0 0 1 -1.9373-6.1487c0-3.61 2.3464-5.523 4.6566-5.523 1.2274 0 2.25.8062 3.02.8062.734 0 1.8771-.8543 3.2729-.8543a4.3778 4.3778 0 0 1 3.6822 1.841zm-6.8586-2.0456a1.3865 1.3865 0 0 1 -.2527-.024 1.6557 1.6557 0 0 1 -.0361-.337 4.0341 4.0341 0 0 1 1.0228-2.5148 4.1571 4.1571 0 0 1 2.7314-1.4078 1.7815 1.7815 0 0 1 .0361.373 4.1487 4.1487 0 0 1 -.9867 2.587 3.6039 3.6039 0 0 1 -2.5148 1.3236z\"></path></svg></span><span class=\"globalnav-link-text\"></span></a>
{#            <img src=\"https://upload.wikimedia.org/wikipedia/commons/a/a4/Mastercard_2019_logo.svg\" alt=\"MasterCard\" style=\"height: 25px; margin-left: 10px;\">#}
            <img src=\"http://online.gov.vn/Content/EndUser/LogoCCDVSaleNoti/logoSaleNoti.png\" alt=\"CCDV\" style=\"height: 30px; margin-left: 10px;\">
        </div>
    </div>
</footer>

<script>
    var prevScrollpos = window.pageYOffset;
    window.onscroll = function() {
        var currentScrollPos = window.pageYOffset;
        if (prevScrollpos > currentScrollPos) {
            document.querySelector('.footer').style.transform = \"translateY(0)\";
        } else {
            document.querySelector('.footer').style.transform = \"translateY(100%)\";
        }
        prevScrollpos = currentScrollPos;
    }
</script>", "_footer.html.twig", "C:\\Users\\Acer\\banazonweb\\templates\\_footer.html.twig");
    }
}
