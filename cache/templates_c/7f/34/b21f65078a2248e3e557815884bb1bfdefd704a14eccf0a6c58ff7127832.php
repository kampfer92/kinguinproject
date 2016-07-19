<?php

/* pages/SignupError.tpl */
class __TwigTemplate_7f34b21f65078a2248e3e557815884bb1bfdefd704a14eccf0a6c58ff7127832 extends Twig_Template
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
        echo "<section>
<div class =\"col-sm-12 text-center\">

    ";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["error"]) ? $context["error"] : null), "html", null, true);
        echo "

</div>
</section>
";
        // line 9
        $this->env->loadTemplate("./common/footer.tpl")->display($context);
    }

    public function getTemplateName()
    {
        return "pages/SignupError.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 9,  26 => 5,  21 => 2,  19 => 1,);
    }
}
