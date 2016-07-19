<?php

/* pages/usedEmail.tpl */
class __TwigTemplate_c05234a4fd1ea57bd686046af7ade063a0fb23b03b46f936801fda9c0fa3a2ea extends Twig_Template
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
       The email you have entered is already in use! Please try again.
    </div>
    </section>
";
        // line 7
        $this->env->loadTemplate("./common/footer.tpl")->display($context);
    }

    public function getTemplateName()
    {
        return "pages/usedEmail.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 7,  21 => 2,  19 => 1,);
    }
}
