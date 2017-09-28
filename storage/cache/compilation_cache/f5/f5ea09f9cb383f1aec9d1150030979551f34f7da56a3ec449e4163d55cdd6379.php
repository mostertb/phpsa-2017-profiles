<?php

/* index.html.twig */
class __TwigTemplate_caa78c583cab0d4774afa430d8495c7db9ca5a14c3af18494ab510b3059d7a70 extends Twig_Template
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
        echo "<!doctype html>

<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">

    <title>PHP South Africa 2017 Profiles</title>

    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css\">
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js\" ></script>
</head>

<body>
<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-md-12\">
            <h1>PHP South Africa 2017 Attendee Profiles</h1>

            <h2>About</h2>
            <p>
                Once again this year, a core theme at the <a href=\"http://phpsouthafrica.com\" target=\"_blank\">PHP SA 2017 Conference</a>
                has been the importance of getting involved in OpenSource projects. This is why we have dusted off our yearly
                humorous educational project.
            </p>

            <p>
                If you have been thinking about getting involved in OpenSource but the whole exercise seems daunting, we invite
                you to sign up a <a href=\"https://github.com/\" target=\"_blank\">GitHub Account</a> and submit a
                <a href=\"https://help.github.com/articles/about-pull-requests/\" target=\"_blank\">Pull Request</a> to the
                the <a href=\"https://github.com/mostertb/phpsa-2017-profiles\">phpsa-2017-profiles</a> project (the code that generates this
                page) as a way to get you started.
            </p>

            <h2>Why?</h2>
            <p>
                The main idea is to provide a safe environment in which to practice the mechanics of contributing to a GitHub
                project in order to break down one more barrier between you and one of the world's most addictive hobbies.<br>
                If you're already an open source contributor/maintainer, this is also a great platform to recommend projects
                for other attendee to get involved in.
            </p>
            <p>
                By submitting a profile, you also get an opportunity introduce yourself and jump into the all-important \"Hallway Track\"
            </p>
            <p>
                Most importantly, though, its fun to hack away at some code over the week
            </p>

            <div class=\"alert alert-warning\" role=\"alert\">
                <p class=\"text-center\">
                    <strong>Please Note:</strong> While not expressly forbidden, profile submissions to this project are probably
                    not going to win you any conference prizes. Larger framework submissions may though.
                </p>
            </div>

            <p>
                Once you've gotten your feet wet by submitting your first pull request, we recommend that you go have a
                look at Digital Ocean's <a href=\"https://hacktoberfest.digitalocean.com/\" target=\"_blank\">Hacktoberfest</a>
                initiative
            </p>
            <p>You may also want to look at <strong>TODO.md</strong> in this project if you'd like to continue to contribute here...</p>

            <h2>Stickers!</h2>


            <div class=\"row\">
                <div class=\"col-md-offset-2 col-md-8\">
                    <div class=\"thumbnail\">
                        <img src=\"https://cdn.shopify.com/s/files/1/0051/4802/products/sticker-large_1024x1024.jpg?v=1368814212\" alt=\"GitHub Stickers\">
                        <div class=\"caption text-center\">
                            This year we have stickers! Once you have had your Pull Request accepted, go say hi to Brad Mostert
                            and he'll give you a GitHub sticker. <br>
                            There are the Standard Die-Cut Stickers for profile submissions as well as a selection of their
                            custom stickers available to more interesteing submissions!
                        </div>
                    </div>
                </div>
            </div>



            <h2>History</h2>
            <p>So we've done this twice before...</p>

            <h4>2015</h4>
            <p>
                At the PHP Craft Conference 2015 the contributors of this project played a little joke.
            </p>
            <p>
                The 2015 conference organisers had decided to hold a competition to win a
                <a href=\"https://www.jetbrains.com/phpstorm/\" target=\"_blank\">JetBrains PHPStorm</a> license. To enter,
                attendees simply had to submit a Pull Request... to any OpenSource project. So we created a project!
            </p>
            <p>
                <strong>Everyone was disqualified... :)</strong>
            </p>

            <h4>2016</h4>
            <p>
                At the 2016 conferenece we tried to go legitimate to see if we could get away with it. We did. Zander was grumpy
                with us. It was hilarious
            </p>

            <h4>2017</h4>
            <p>
                This year, the aim is to go even bigger. If we make a success once again, this will officially become a
                PHP SA tradition!
            </p>


            <h2>Contents</h2>
            <div class=\"list-group\">
                ";
        // line 112
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["profiles"] ?? null));
        foreach ($context['_seq'] as $context["index"] => $context["profile"]) {
            // line 113
            echo "                    <a href=\"#";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["profile"], "getSlug", array(), "method"), "html", null, true);
            echo "\" class=\"list-group-item\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["profile"], "getName", array(), "method"), "html", null, true);
            echo "</a>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['index'], $context['profile'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 115
        echo "            </div>
            <h2>Bios</h2>
            ";
        // line 117
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["profiles"] ?? null));
        foreach ($context['_seq'] as $context["index"] => $context["profile"]) {
            // line 118
            echo "            <div class=\"media\">
                <div class=\"media-left\">
                    ";
            // line 120
            if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["profile"], "getProfileImageURL", array(), "method") == null)) {
                // line 121
                echo "                    <span style=\"font-size:4.5em;\" class=\"glyphicon glyphicon-user\" aria-hidden=\"true\"></span>
                    ";
            } else {
                // line 123
                echo "                    <a name=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["profile"], "getSlug", array(), "method"), "html", null, true);
                echo "\">
                        <img class=\"media-object\" width=\"64\" height=\"64\" src=\"";
                // line 124
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["profile"], "getProfileImageURL", array(), "method"), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["profile"], "getName", array(), "method"), "html", null, true);
                echo "\">
                    </a>
                    ";
            }
            // line 127
            echo "                </div>
                <div class=\"media-body\">
                    <h4 class=\"media-heading\">
                        ";
            // line 130
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["profile"], "getName", array(), "method"), "html", null, true);
            echo "
                    </h4>
                    <p>
                        ";
            // line 133
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["profile"], "getBiography", array(), "method"), "html", null, true);
            echo "
                    </p>
                    ";
            // line 135
            if (twig_get_attribute($this->env, $this->getSourceContext(), $context["profile"], "getGitHubUsername", array(), "method")) {
                // line 136
                echo "                    <p>
                        <strong>GitHub Homepage:</strong>
                        <a href=\"https://github.com/";
                // line 138
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["profile"], "getGitHubUsername", array(), "method"), "html", null, true);
                echo "\" target=\"_blank\">
                            ";
                // line 139
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["profile"], "getGitHubUsername", array(), "method"), "html", null, true);
                echo "
                        </a>
                    </p>
                    ";
            }
            // line 143
            echo "                    ";
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["profile"], "getMaintainedProjects", array(), "method")) > 0)) {
                // line 144
                echo "                    <h5>Projects</h5>
                    <ul>
                        ";
                // line 146
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), $context["profile"], "getMaintainedProjects", array()));
                foreach ($context['_seq'] as $context["name"] => $context["url"]) {
                    // line 147
                    echo "                        <li>
                            <a href=\"";
                    // line 148
                    echo twig_escape_filter($this->env, $context["url"], "html", null, true);
                    echo "\" target=\"_blank\">";
                    echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                    echo "</a>
                        </li>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['name'], $context['url'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 151
                echo "                    </ul>
                    ";
            }
            // line 153
            echo "                    ";
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["profile"], "getInvolvedProjects", array(), "method")) > 0)) {
                // line 154
                echo "                        <h5>Projects</h5>
                        <ul>
                            ";
                // line 156
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), $context["profile"], "getInvolvedProjects", array()));
                foreach ($context['_seq'] as $context["name"] => $context["url"]) {
                    // line 157
                    echo "                                <li>
                                    <a href=\"";
                    // line 158
                    echo twig_escape_filter($this->env, $context["url"], "html", null, true);
                    echo "\" target=\"_blank\">";
                    echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                    echo "</a>
                                </li>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['name'], $context['url'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 161
                echo "                        </ul>
                    ";
            }
            // line 163
            echo "                </div>
            </div>

            <hr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['index'], $context['profile'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 168
        echo "        </div>
    </div>
</div>

</body>
</html>";
    }

    public function getTemplateName()
    {
        return "index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  279 => 168,  269 => 163,  265 => 161,  254 => 158,  251 => 157,  247 => 156,  243 => 154,  240 => 153,  236 => 151,  225 => 148,  222 => 147,  218 => 146,  214 => 144,  211 => 143,  204 => 139,  200 => 138,  196 => 136,  194 => 135,  189 => 133,  183 => 130,  178 => 127,  170 => 124,  165 => 123,  161 => 121,  159 => 120,  155 => 118,  151 => 117,  147 => 115,  136 => 113,  132 => 112,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "index.html.twig", "/Users/timhaak/Dev/phpsa/phpsa-2017-profiles/src/templates/index.html.twig");
    }
}
