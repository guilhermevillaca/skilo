<?php

/* FrontBundle:Home:index.html.twig */
class __TwigTemplate_f22383e383bf05b436abb02066cabd34080fb97c1a2d48cc6efc11745efa6b7b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Skilo : Home";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "


    <!-- Page Layout here -->
    <div class=\"row\">



        <div class=\"col s12 m12 l12 header\"> <!-- Note that \"m4 l3\" was added -->

            <div class=\"row\">

                <div class=\"col s12 m4 l3\">

                    <img id=\"logo\" height=\"140\" src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/framework/img/logo.png"), "html", null, true);
        echo "\" alt=\"\" />

                </div>

                <div class=\"col s12 m4 l6\">

                    <nav>
                        <div class=\"nav-wrapper\">
                            <div class=\"col s12\">                                
                                <a href=\"#\" data-activates=\"mobile-demo\" class=\"button-collapse\"><i class=\"mdi-navigation-menu\"></i></a>
                                <ul class=\"right hide-on-med-and-down\">
                                    <li><a href=\"sass.html\">Sass</i></a></li>
                                    <li><a href=\"components.html\">Components</a></li>
                                    <li><a href=\"javascript.html\">Javascript</a></li>
                                    <li><a href=\"mobile.html\">Mobile</a></li>
                                </ul>
                                <ul class=\"side-nav\" id=\"mobile-demo\">
                                    <li><a href=\"sass.html\">Sass</i></a></li>
                                    <li><a href=\"components.html\">Components</a></li>
                                    <li><a href=\"javascript.html\">Javascript</a></li>
                                    <li><a href=\"mobile.html\">Mobile</a></li>
                                </ul>
                            </div>
                        </div>
                    </nav>

                </div>

                <div class=\"col s12 m4 l3 buttons-header\">
                    <a class=\"waves-effect waves-teal btn-flat\">Criar Conta</a>
                    <a class=\"waves-effect waves-light btn\">Entrar</a>
                </div>

            </div>

        </div>

        <div class=\"col s12 m12 l12 content\"> <!-- Note that \"m8 l9\" was added -->
            content
            <!-- Teal page content
    
                  This content will be:
              9-columns-wide on large screens,
              8-columns-wide on medium screens,
              12-columns-wide on small screens  -->

        </div>

        <footer class=\"col s12 m12 l12\"> <!-- Note that \"m8 l9\" was added -->
            content
            <!-- Teal page content
    
                  This content will be:
              9-columns-wide on large screens,
              8-columns-wide on medium screens,
              12-columns-wide on small screens  -->

        </footer>

    </div>

    <script type=\"text/javascript\">
        \$(document).ready(function () {
            \$(\".button-collapse\").sideNav();
        });
    </script>

";
    }

    public function getTemplateName()
    {
        return "FrontBundle:Home:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 20,  38 => 6,  35 => 5,  29 => 3,);
    }
}
