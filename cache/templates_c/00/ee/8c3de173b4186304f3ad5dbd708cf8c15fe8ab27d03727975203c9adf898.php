<?php

/* pages/signupSuccess.tpl */
class __TwigTemplate_00ee8c3de173b4186304f3ad5dbd708cf8c15fe8ab27d03727975203c9adf898 extends Twig_Template
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
        echo "    <section>
    <div class=\"col-sm-12 text-center\">
        Hello, You have successfuly signed up,you should receive and email shortly!<br>
        If you do not receive one however, do please wait, it might take time depending <br>
        on your location! Thank you.
    </div>
    </section>
";
        // line 9
        $this->env->loadTemplate("./common/footer.tpl")->display($context);
    }

    public function getTemplateName()
    {
        return "pages/signupSuccess.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 9,  21 => 2,  19 => 1,);
    }
}
