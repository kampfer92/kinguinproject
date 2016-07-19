<?php

/* ./common/footer.tpl */
class __TwigTemplate_a23fb666cb4056783560813466a8bdfc54e7e4ed41dd77c31826d1a3d93f4429 extends Twig_Template
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
        echo "</div>

<div class=\"footer-container\">

<footer class=\"social bg-secondary-1\">

<div class=\"container\">
<div class=\"row\">
<div class=\"col-sm-12 text-center\">
<h1 class=\"text-white\">Follow us</h1>
<a href=\"https://mail.google.com\" class=\"text-white\"><strong>yavor92@gmail.com</strong></a><br>
<ul class=\"social-icons\">
    <li>
            <a href=\"https://twitter.com/\">
                    <i class=\"icon social_twitter\"></i>
            </a>
    </li>

    <li>
            <a href=\"https://www.facebook.com/\">
                    <i class=\"icon social_facebook\"></i>
            </a>
    </li>

    <li>
            <a href=\"https://www.instagram.com/\">
                    <i class=\"icon social_instagram\"></i>
            </a>
    </li>

</ul><br>
<span class=\"sub\">© Copright 2014 <a href=\"https://www.facebook.com/sin.a.sin.5\">AlphaYavor</a> - All Rights Reserved</span>
</div>
</div>
</div>

</footer>
</div>

<script src=\"https://www.youtube.com/iframe_api\"></script>
<script src=\"/js/jquery.min.js\"></script>
<script src=\"/js/jquery.plugin.min.js\"></script>
<script src=\"/js/bootstrap.min.js\"></script>
<script src=\"/js/jquery.flexslider-min.js\"></script>
<script src=\"/js/smooth-scroll.min.js\"></script>
<script src=\"/js/skrollr.min.js\"></script>
<script src=\"/js/spectragram.min.js\"></script>
<script src=\"/js/scrollReveal.min.js\"></script>
<script src=\"/js/isotope.min.js\"></script>
<script src=\"/js/twitterFetcher_v10_min.js\"></script>
<script src=\"/js/lightbox.min.js\"></script>
<script src=\"/js/jquery.countdown.min.js\"></script>
<script src=\"/js/scripts.js\"></script>
";
        // line 54
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["javascript"]) ? $context["javascript"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["js"]) {
            // line 55
            echo "<script src=\"";
            echo twig_escape_filter($this->env, (isset($context["js"]) ? $context["js"] : null), "html", null, true);
            echo "\"></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['js'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "</body>
</html>";
    }

    public function getTemplateName()
    {
        return "./common/footer.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 57,  78 => 55,  74 => 54,  19 => 1,);
    }
}
