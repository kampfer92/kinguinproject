<?php

/* emailsend/mail_act.tpl */
class __TwigTemplate_700ee7dce51e1cb3ef4d21aed6571600596d9265d6e0c68673e8f2173f110423 extends Twig_Template
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
        // line 1
        $this->env->loadTemplate("./emailsend/header_email.tpl")->display($context);
        // line 2
        echo "

<table border=\"0\" width=\"600\" cellpadding=\"0\" cellspacing=\"0\" class=\"container\" style=\"width:600px;max-width:600px\">
    <tr>
    <td class=\"container-padding header\" align=\"left\" style=\"font-family:Helvetica, Arial, sans-serif;font-size:24px;font-weight:bold;padding-bottom:12px;color:#DF4726;padding-left:24px;padding-right:24px\">
    Antwort v1.0
    </td>
    </tr>
    <tr>
    <td class=\"container-padding content\" align=\"left\" style=\"padding-left:24px;padding-right:24px;padding-top:12px;padding-bottom:12px;background-color:#ffffff\">
    <br>
    <div class=\"title\" style=\"font-family:Helvetica, Arial, sans-serif;font-size:18px;font-weight:600;color:#374550\">Single Column Fluid Layout</div>
    <br>

<div class=\"body-text\" style=\"font-family:Helvetica, Arial, sans-serif;font-size:14px;line-height:20px;text-align:left;color:#333333\">
<a href=\"http://localhost/activation/";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["activationcode"]) ? $context["activationcode"] : null), "html", null, true);
        echo "\">Click me to activate your account</a>

<br><br>
or copy the link below to your browser:
<br><br>
http://localhost/activation/";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["activationcode"]) ? $context["activationcode"] : null), "html", null, true);
        echo "

<!--";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["activationcode"]) ? $context["activationcode"] : null), "html", null, true);
        echo "-->

<br><br>
</div>

    </td>
    </tr>
    <tr>
<td class=\"container-padding footer-text\" align=\"left\" style=\"font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:16px;color:#aaaaaa;padding-left:24px;padding-right:24px\">
<br><br>
Welcome to the webiste: © 2015 Acme, Inc.
<br><br>

You are receiving this email because you opted in on our website. Update your <a href=\"#\" style=\"color:#aaaaaa\">email preferences</a> or <a href=\"#\" style=\"color:#aaaaaa\">unsubscribe</a>.
<br><br>

<strong>Alpha, Inc.</strong><br>
<span class=\"ios-footer\">
H.C Trakia<br>
Plovdiv, PC 4000<br>
</span>
<a href=\"https://www.facebook.com/\" style=\"color:#aaaaaa\">www.acme-inc.com</a><br>

<br><br>

    </td>
    </tr>
    </table>
";
        // line 52
        $this->env->loadTemplate("./emailsend/footer_email.tpl")->display($context);
    }

    public function getTemplateName()
    {
        return "emailsend/mail_act.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 52,  51 => 24,  46 => 22,  38 => 17,  30 => 9,  21 => 2,  19 => 1,);
    }
}
