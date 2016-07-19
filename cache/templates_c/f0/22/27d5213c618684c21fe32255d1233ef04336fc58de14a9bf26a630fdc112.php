<?php

/* pages/login.tpl */
class __TwigTemplate_f02227d5213c618684c21fe32255d1233ef04336fc58de14a9bf26a630fdc112 extends Twig_Template
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
        $this->env->loadTemplate("./common/header.tpl")->display($context);
        // line 2
        echo "
<section class=\"no-pad login-page fullscreen-element\">
<div class=\"background-image-holder\">
    <img src=\"/img/hero6.jpg\" class=\"background-image\" alt=\"Poster Image For Mobiles\">
</div>
    <div class=\"container align-vertical\">
<div class=\"row\">
    <div class=\"col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 text-center\">
    <h1 class=\"text-white\">Login to continue</h1>
    <div style=\"display:none\" class=\"alert alert-success\" role=\"alert\" id=\"error\"> </div>
    <div class=\"photo-form-wrapper clearfix\">
<form id= \"loginform\">
    <input name= \"emailadddress\" class=\"form-email\" placeholder=\"Email Address\" type=\"text\">
    <input name= \"password\" class=\"form-password\" placeholder=\"Password\" type=\"password\">
    <input class=\"login-btn btn-filled\" value=\"Login\" type=\"submit\">
</form>
        
    </div>
<a href=\"http://localhost/signup\" class=\"text-white\">Create an account ➞</a><br>
<a href=\"http://localhost/\" class=\"text-white\">Home</a>
    </div>
</div>
    </div>
</section>

";
        // line 27
        $this->env->loadTemplate("./common/footer.tpl")->display($context);
    }

    public function getTemplateName()
    {
        return "pages/login.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 27,  21 => 2,  19 => 1,);
    }
}
