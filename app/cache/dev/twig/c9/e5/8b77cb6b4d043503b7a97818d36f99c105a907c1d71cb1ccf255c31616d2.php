<?php

/* SensioDistributionBundle:Configurator/Step:secret.html.twig */
class __TwigTemplate_c9e58b77cb6b4d043503b7a97818d36f99c105a907c1d71cb1ccf255c31616d2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SensioDistributionBundle::Configurator/layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SensioDistributionBundle::Configurator/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Symfony - Configure global Secret";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => "SensioDistributionBundle::Configurator/form.html.twig"));
        // line 7
        echo "
    <div class=\"step\">
        ";
        // line 9
        $this->env->loadTemplate("SensioDistributionBundle::Configurator/steps.html.twig")->display(array_merge($context, array("index" => (isset($context["index"]) ? $context["index"] : $this->getContext($context, "index")), "count" => (isset($context["count"]) ? $context["count"] : $this->getContext($context, "count")))));
        // line 10
        echo "
        <h1>Global Secret</h1>
        <p>Configure the global secret for your website (the secret is used for the CSRF protection among other things):</p>

        <div class=\"symfony-form-errors\">
            ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
        </div>
        <form action=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_configurator_step", array("index" => (isset($context["index"]) ? $context["index"] : $this->getContext($context, "index")))), "html", null, true);
        echo " \" method=\"POST\">
            <div class=\"symfony-form-row\">
                ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "secret"), 'label');
        echo "
                <div class=\"symfony-form-field\">
                    ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "secret"), 'widget');
        echo "
                    <a href=\"#\" onclick=\"generateSecret(); return false;\" class=\"sf-button\">
                        <span class=\"border-l\">
                            <span class=\"border-r\">
                                <span class=\"btn-bg\">Generate</span>
                            </span>
                        </span>
                    </a>
                    <div class=\"symfony-form-errors\">
                        ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "secret"), 'errors');
        echo "
                    </div>
                </div>
            </div>

            ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "

            <div class=\"symfony-form-footer\">
                <p>
                    <button type=\"submit\" class=\"sf-button\">
                        <span class=\"border-l\">
                            <span class=\"border-r\">
                                <span class=\"btn-bg\">NEXT STEP</span>
                            </span>
                        </span>
                    </button>
                </p>
                <p>* mandatory fields</p>
            </div>

        </form>

        <script type=\"text/javascript\">
            function generateSecret()
            {
                var result = '';
                for (i=0; i < 32; i++) {
                    result += Math.round(Math.random()*16).toString(16);
                }
                document.getElementById('distributionbundle_secret_step_secret').value = result;
            }
        </script>
    </div>
";
    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle:Configurator/Step:secret.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1035 => 312,  1026 => 311,  1023 => 310,  1009 => 307,  1003 => 306,  1000 => 305,  978 => 302,  953 => 301,  950 => 300,  942 => 296,  938 => 295,  935 => 294,  926 => 287,  924 => 286,  920 => 285,  917 => 284,  912 => 280,  904 => 278,  900 => 277,  898 => 276,  896 => 275,  893 => 274,  887 => 271,  884 => 270,  880 => 267,  877 => 265,  875 => 264,  872 => 263,  865 => 259,  863 => 258,  841 => 257,  838 => 255,  835 => 253,  833 => 252,  831 => 251,  828 => 250,  824 => 247,  822 => 246,  820 => 245,  817 => 244,  813 => 239,  810 => 238,  804 => 234,  802 => 233,  799 => 232,  795 => 229,  793 => 228,  791 => 227,  789 => 226,  787 => 225,  780 => 221,  777 => 216,  772 => 212,  752 => 208,  749 => 206,  747 => 205,  744 => 203,  739 => 200,  737 => 199,  735 => 198,  732 => 197,  728 => 192,  726 => 191,  719 => 187,  717 => 186,  714 => 185,  704 => 182,  701 => 180,  699 => 179,  696 => 178,  692 => 175,  687 => 173,  683 => 170,  681 => 169,  674 => 165,  672 => 164,  669 => 163,  664 => 160,  662 => 159,  659 => 158,  655 => 155,  653 => 154,  650 => 153,  646 => 150,  644 => 149,  641 => 148,  637 => 145,  634 => 144,  628 => 140,  619 => 135,  611 => 129,  601 => 128,  596 => 127,  594 => 126,  591 => 124,  589 => 123,  586 => 122,  581 => 118,  579 => 116,  578 => 115,  577 => 114,  576 => 113,  572 => 112,  569 => 110,  567 => 109,  564 => 108,  559 => 104,  557 => 103,  555 => 102,  553 => 101,  551 => 100,  547 => 99,  544 => 97,  542 => 96,  539 => 95,  522 => 91,  508 => 88,  505 => 87,  477 => 80,  475 => 79,  473 => 78,  468 => 77,  466 => 76,  442 => 71,  438 => 69,  432 => 66,  428 => 64,  426 => 63,  424 => 62,  405 => 58,  400 => 55,  397 => 54,  385 => 48,  376 => 46,  352 => 34,  349 => 33,  333 => 23,  317 => 16,  301 => 12,  271 => 300,  266 => 294,  260 => 291,  250 => 273,  245 => 269,  225 => 238,  215 => 224,  186 => 189,  146 => 147,  129 => 122,  126 => 121,  124 => 108,  114 => 91,  110 => 38,  100 => 36,  77 => 25,  356 => 330,  354 => 329,  65 => 17,  20 => 1,  806 => 235,  803 => 487,  792 => 485,  788 => 484,  784 => 224,  771 => 481,  745 => 475,  742 => 202,  723 => 190,  706 => 471,  702 => 469,  698 => 468,  694 => 467,  690 => 174,  686 => 465,  682 => 464,  678 => 168,  675 => 462,  673 => 461,  656 => 460,  645 => 458,  630 => 141,  625 => 139,  621 => 136,  618 => 448,  616 => 133,  602 => 445,  597 => 442,  563 => 410,  545 => 407,  528 => 406,  525 => 92,  523 => 404,  518 => 402,  513 => 400,  389 => 160,  386 => 159,  378 => 157,  371 => 156,  363 => 38,  358 => 151,  353 => 149,  343 => 146,  340 => 27,  331 => 22,  328 => 139,  326 => 19,  307 => 287,  302 => 125,  296 => 121,  293 => 7,  290 => 5,  281 => 310,  276 => 305,  259 => 103,  253 => 274,  232 => 88,  222 => 237,  210 => 216,  184 => 185,  175 => 58,  170 => 84,  155 => 47,  152 => 46,  127 => 35,  34 => 4,  367 => 155,  357 => 123,  345 => 30,  334 => 141,  332 => 116,  327 => 114,  324 => 18,  321 => 135,  318 => 111,  306 => 107,  297 => 104,  291 => 102,  288 => 4,  274 => 110,  265 => 105,  263 => 293,  255 => 283,  231 => 83,  212 => 223,  202 => 212,  190 => 76,  161 => 162,  58 => 15,  188 => 90,  174 => 173,  167 => 71,  118 => 49,  104 => 74,  76 => 25,  462 => 202,  449 => 75,  446 => 74,  441 => 196,  439 => 195,  431 => 189,  429 => 188,  422 => 184,  415 => 60,  408 => 176,  401 => 172,  394 => 168,  380 => 158,  373 => 45,  361 => 152,  351 => 328,  348 => 121,  342 => 28,  338 => 119,  335 => 134,  329 => 21,  325 => 129,  323 => 128,  320 => 17,  315 => 131,  303 => 13,  300 => 105,  289 => 113,  286 => 112,  275 => 105,  270 => 102,  267 => 101,  262 => 98,  256 => 96,  248 => 270,  233 => 244,  226 => 84,  216 => 79,  213 => 78,  207 => 215,  200 => 72,  197 => 197,  194 => 196,  191 => 194,  185 => 74,  181 => 184,  178 => 59,  172 => 57,  165 => 83,  153 => 77,  150 => 55,  134 => 133,  113 => 40,  90 => 27,  84 => 33,  81 => 30,  70 => 19,  53 => 11,  480 => 82,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 199,  444 => 149,  440 => 70,  437 => 147,  435 => 146,  430 => 65,  427 => 143,  423 => 142,  413 => 59,  409 => 132,  407 => 131,  402 => 56,  398 => 129,  393 => 51,  387 => 49,  384 => 121,  381 => 47,  379 => 119,  374 => 116,  368 => 41,  365 => 39,  362 => 110,  360 => 37,  355 => 150,  341 => 105,  337 => 26,  322 => 101,  314 => 99,  312 => 130,  309 => 288,  305 => 95,  298 => 11,  294 => 90,  285 => 3,  283 => 115,  278 => 309,  268 => 299,  264 => 84,  258 => 284,  252 => 80,  247 => 78,  241 => 93,  229 => 87,  220 => 232,  214 => 69,  177 => 65,  169 => 168,  140 => 55,  132 => 51,  128 => 49,  107 => 37,  61 => 2,  273 => 304,  269 => 107,  254 => 92,  243 => 263,  240 => 262,  238 => 250,  235 => 249,  230 => 243,  227 => 241,  224 => 81,  221 => 77,  219 => 76,  217 => 231,  208 => 76,  204 => 213,  179 => 178,  159 => 158,  143 => 51,  135 => 53,  119 => 95,  102 => 30,  71 => 15,  67 => 16,  63 => 21,  59 => 17,  38 => 6,  94 => 45,  89 => 35,  85 => 26,  75 => 22,  68 => 20,  56 => 12,  87 => 26,  21 => 2,  26 => 3,  93 => 28,  88 => 28,  78 => 24,  46 => 14,  27 => 3,  44 => 8,  31 => 3,  28 => 3,  201 => 92,  196 => 92,  183 => 82,  171 => 172,  166 => 167,  163 => 82,  158 => 80,  156 => 157,  151 => 152,  142 => 59,  138 => 56,  136 => 138,  121 => 107,  117 => 39,  105 => 25,  91 => 44,  62 => 14,  49 => 12,  24 => 2,  25 => 3,  19 => 1,  79 => 26,  72 => 21,  69 => 21,  47 => 10,  40 => 11,  37 => 7,  22 => 2,  246 => 136,  157 => 56,  145 => 74,  139 => 139,  131 => 132,  123 => 61,  120 => 31,  115 => 40,  111 => 90,  108 => 33,  101 => 73,  98 => 29,  96 => 53,  83 => 30,  74 => 16,  66 => 10,  55 => 12,  52 => 12,  50 => 10,  43 => 12,  41 => 7,  35 => 5,  32 => 6,  29 => 3,  209 => 82,  203 => 73,  199 => 211,  193 => 73,  189 => 190,  187 => 75,  182 => 87,  176 => 177,  173 => 85,  168 => 61,  164 => 163,  162 => 59,  154 => 153,  149 => 148,  147 => 75,  144 => 144,  141 => 143,  133 => 55,  130 => 46,  125 => 42,  122 => 41,  116 => 94,  112 => 39,  109 => 87,  106 => 86,  103 => 32,  99 => 54,  95 => 39,  92 => 31,  86 => 36,  82 => 25,  80 => 24,  73 => 23,  64 => 19,  60 => 20,  57 => 19,  54 => 15,  51 => 37,  48 => 10,  45 => 9,  42 => 7,  39 => 10,  36 => 5,  33 => 4,  30 => 3,);
    }
}
