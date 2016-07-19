<?php

/* pages/home.tpl */
class __TwigTemplate_2be3429d67837cc3ea62cb1bb39bf23deb86ad519a2724f0be671df506c85ab5 extends Twig_Template
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

";
        // line 4
        $this->env->loadTemplate("./sections/topbanner.tpl")->display($context);
        // line 5
        $this->env->loadTemplate("./sections/4colwithiconhead.tpl")->display($context);
        // line 6
        echo "
";
        // line 7
        $this->env->loadTemplate("./common/footer.tpl")->display($context);
    }

    public function getTemplateName()
    {
        return "pages/home.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 7,  29 => 6,  27 => 5,  25 => 4,  21 => 2,  19 => 1,);
    }
}
