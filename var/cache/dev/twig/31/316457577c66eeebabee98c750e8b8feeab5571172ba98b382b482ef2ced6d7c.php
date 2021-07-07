<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* staff/shared/header.html.twig */
class __TwigTemplate_e2c2d0aed81bc74877df5d0ccb419f196280e77bf63e57372727f2cee5ec56bc extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "staff/shared/header.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "staff/shared/header.html.twig"));

        // line 1
        echo "<nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
    <a class=\"navbar-brand\" href=\"/control\">
    <!-- TODO add a good alt text for the logo -->
        <img src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/assets/images/admin/logo_v3_full.png"), "html", null, true);
        echo "\" alt=\"logo\" class=\"m-2\">
    </a>

    <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarScroll\" aria-controls=\"navbarScroll\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"collapse navbar-collapse\" id=\"navbarScroll\">
        <ul class=\"navbar-nav m-2 me-auto my-lg-0\">
            <li class=\"nav-item dropdown mx-2\">
                <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"recordsDropdown\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                    ";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Records"), "html", null, true);
        echo "
                </a>
                <ul class=\"dropdown-menu\" aria-labelledby=\"recordsDropdown\">
                    <li><a class=\"dropdown-item\" href=\"/control/records/record.php\">";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("New record"), "html", null, true);
        echo "</a></li>
                    <li><a class=\"dropdown-item\" href=\"/control/records/index.php\">";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Browse items"), "html", null, true);
        echo "</a></li>
                    <li><a class=\"dropdown-item\" href=\"/control/records/subject_databases.php\">";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Databases by subject"), "html", null, true);
        echo "</a></li>
                </ul>
            </li>
            <li class=\"nav-item dropdown mx-2\">
                <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"guidesDropdown\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                    ";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Guides"), "html", null, true);
        echo "
                </a>
                <ul class=\"dropdown-menu\" aria-labelledby=\"guidesDropdown\">
                    <li><a class=\"dropdown-item\" href=\"/control/guides/metadata.php\">";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("New guide"), "html", null, true);
        echo "</a></li>
                    <li><a class=\"dropdown-item\" href=\"/control/guides/index.php\">";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Browse guides"), "html", null, true);
        echo "</a></li>
                    <li><a class=\"dropdown-item\" href=\"/control/guides/manage.php\">";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Manage files"), "html", null, true);
        echo "</a></li>
                    <li><a class=\"dropdown-item\" href=\"";
        // line 30
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("staff_link_checker");
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Link checker"), "html", null, true);
        echo "</a></li>
                    <li><a class=\"dropdown-item\" href=\"/control/guides/stats.php\">";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Stats"), "html", null, true);
        echo "</a></li>
                </ul>
            </li>
            <li class=\"nav-item dropdown mx-2\">
                <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"faqsDropdown\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                    ";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("FAQs"), "html", null, true);
        echo "
                </a>
                <ul class=\"dropdown-menu\" aria-labelledby=\"faqsDropdown\">
                    <li><a class=\"dropdown-item\" href=\"/control/faq/faq.php\">";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("New FAQ"), "html", null, true);
        echo "</a></li>
                    <li><a class=\"dropdown-item\" href=\"/control/faq/browse_faq.php?type=subject\">";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Browse by subject"), "html", null, true);
        echo "</a></li>
                    <li><a class=\"dropdown-item\" href=\"/control/faq/browse_faq.php?type=holding\">";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Browse by collection"), "html", null, true);
        echo "</a></li>
                </ul>
            </li>
            <li class=\"nav-item mx-2\">
                <a class=\"nav-link\" href=\"/control/talkback\">";
        // line 45
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Talkback"), "html", null, true);
        echo "</a>
            </li>
            <li class=\"nav-item dropdown mx-2\">
                <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"videosDropdown\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                    ";
        // line 49
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Videos"), "html", null, true);
        echo "
                </a>
                <ul class=\"dropdown-menu\" aria-labelledby=\"videosDropdown\">
                    <li><a class=\"dropdown-item\" href=\"/control/videos\">";
        // line 52
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Browse videos"), "html", null, true);
        echo "</a></li>
                    <li><a class=\"dropdown-item\" href=\"/control/videos/ingest.php\">";
        // line 53
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Find/ingest video"), "html", null, true);
        echo "</a></li>
                    <li><a class=\"dropdown-item\" href=\"/control/videos/video.php\">";
        // line 54
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Manually enter video"), "html", null, true);
        echo "</a></li>
                </ul>
            </li>
            <li class=\"nav-item dropdown mx-2\">
                <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"adminDropdown\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                    ";
        // line 59
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Admin"), "html", null, true);
        echo "
                </a>
                <ul class=\"dropdown-menu\" aria-labelledby=\"adminDropdown\">
                    <li><a class=\"dropdown-item\" href=\"/control/admin\">";
        // line 62
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Admin dashboard"), "html", null, true);
        echo "</a></li>
                    <li><hr class=\"dropdown-divider\"></li>
                    <li><a class=\"dropdown-item\" href=\"/control/admin/user.php\">";
        // line 64
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Add new user"), "html", null, true);
        echo "</a></li>
                    <li><a class=\"dropdown-item\" href=\"/control/admin/user.php?browse=true\">";
        // line 65
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Add new user"), "html", null, true);
        echo "</a></li>
                    <li><a class=\"dropdown-item\" href=\"/control/admin/departments.php\">";
        // line 66
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Departments"), "html", null, true);
        echo "</a></li>
                    <li><hr class=\"dropdown-divider\"></li>
                    <li><a class=\"dropdown-item\" href=\"/control/admin/manage_guides.php\">";
        // line 68
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Manage guides"), "html", null, true);
        echo "</a></li>
                    <li><a class=\"dropdown-item\" href=\"/control/admin/guide_collections.php\">";
        // line 69
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Guide collections"), "html", null, true);
        echo "</a></li>
                    <li><hr class=\"dropdown-divider\"></li>
                    <li><a class=\"dropdown-item\" href=\"/control/admin/sources.php\">";
        // line 71
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Database types"), "html", null, true);
        echo "</a></li>
                    <li><a class=\"dropdown-item\" href=\"/control/admin/faq_collections.php\">";
        // line 72
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("FAQ collections"), "html", null, true);
        echo "</a></li>
                    <li><a class=\"dropdown-item\" href=\"/control/edit-config.php\">";
        // line 73
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Config site"), "html", null, true);
        echo "</a></li>
                </ul>
            </li>
        </ul>
        <form class=\"d-flex\">
            <input class=\"form-control me-2\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\">
            <button class=\"btn btn-primary\" type=\"submit\">Search</button>
        </form>
    </div>
</nav>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "staff/shared/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  206 => 73,  202 => 72,  198 => 71,  193 => 69,  189 => 68,  184 => 66,  180 => 65,  176 => 64,  171 => 62,  165 => 59,  157 => 54,  153 => 53,  149 => 52,  143 => 49,  136 => 45,  129 => 41,  125 => 40,  121 => 39,  115 => 36,  107 => 31,  101 => 30,  97 => 29,  93 => 28,  89 => 27,  83 => 24,  75 => 19,  71 => 18,  67 => 17,  61 => 14,  48 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
    <a class=\"navbar-brand\" href=\"/control\">
    <!-- TODO add a good alt text for the logo -->
        <img src=\"{{ asset('build/assets/images/admin/logo_v3_full.png') }}\" alt=\"logo\" class=\"m-2\">
    </a>

    <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarScroll\" aria-controls=\"navbarScroll\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"collapse navbar-collapse\" id=\"navbarScroll\">
        <ul class=\"navbar-nav m-2 me-auto my-lg-0\">
            <li class=\"nav-item dropdown mx-2\">
                <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"recordsDropdown\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                    {{'Records' | trans}}
                </a>
                <ul class=\"dropdown-menu\" aria-labelledby=\"recordsDropdown\">
                    <li><a class=\"dropdown-item\" href=\"/control/records/record.php\">{{ 'New record' | trans }}</a></li>
                    <li><a class=\"dropdown-item\" href=\"/control/records/index.php\">{{ 'Browse items' | trans }}</a></li>
                    <li><a class=\"dropdown-item\" href=\"/control/records/subject_databases.php\">{{ 'Databases by subject' | trans }}</a></li>
                </ul>
            </li>
            <li class=\"nav-item dropdown mx-2\">
                <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"guidesDropdown\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                    {{'Guides' | trans}}
                </a>
                <ul class=\"dropdown-menu\" aria-labelledby=\"guidesDropdown\">
                    <li><a class=\"dropdown-item\" href=\"/control/guides/metadata.php\">{{ 'New guide' | trans }}</a></li>
                    <li><a class=\"dropdown-item\" href=\"/control/guides/index.php\">{{ 'Browse guides' | trans }}</a></li>
                    <li><a class=\"dropdown-item\" href=\"/control/guides/manage.php\">{{ 'Manage files' | trans }}</a></li>
                    <li><a class=\"dropdown-item\" href=\"{{ path('staff_link_checker') }}\">{{ 'Link checker' | trans }}</a></li>
                    <li><a class=\"dropdown-item\" href=\"/control/guides/stats.php\">{{ 'Stats' | trans }}</a></li>
                </ul>
            </li>
            <li class=\"nav-item dropdown mx-2\">
                <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"faqsDropdown\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                    {{'FAQs' | trans}}
                </a>
                <ul class=\"dropdown-menu\" aria-labelledby=\"faqsDropdown\">
                    <li><a class=\"dropdown-item\" href=\"/control/faq/faq.php\">{{ 'New FAQ' | trans }}</a></li>
                    <li><a class=\"dropdown-item\" href=\"/control/faq/browse_faq.php?type=subject\">{{ 'Browse by subject' | trans }}</a></li>
                    <li><a class=\"dropdown-item\" href=\"/control/faq/browse_faq.php?type=holding\">{{ 'Browse by collection' | trans }}</a></li>
                </ul>
            </li>
            <li class=\"nav-item mx-2\">
                <a class=\"nav-link\" href=\"/control/talkback\">{{ 'Talkback' | trans }}</a>
            </li>
            <li class=\"nav-item dropdown mx-2\">
                <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"videosDropdown\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                    {{'Videos' | trans}}
                </a>
                <ul class=\"dropdown-menu\" aria-labelledby=\"videosDropdown\">
                    <li><a class=\"dropdown-item\" href=\"/control/videos\">{{ 'Browse videos' | trans }}</a></li>
                    <li><a class=\"dropdown-item\" href=\"/control/videos/ingest.php\">{{ 'Find/ingest video' | trans }}</a></li>
                    <li><a class=\"dropdown-item\" href=\"/control/videos/video.php\">{{ 'Manually enter video' | trans }}</a></li>
                </ul>
            </li>
            <li class=\"nav-item dropdown mx-2\">
                <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"adminDropdown\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                    {{'Admin' | trans}}
                </a>
                <ul class=\"dropdown-menu\" aria-labelledby=\"adminDropdown\">
                    <li><a class=\"dropdown-item\" href=\"/control/admin\">{{ 'Admin dashboard' | trans }}</a></li>
                    <li><hr class=\"dropdown-divider\"></li>
                    <li><a class=\"dropdown-item\" href=\"/control/admin/user.php\">{{ 'Add new user' | trans }}</a></li>
                    <li><a class=\"dropdown-item\" href=\"/control/admin/user.php?browse=true\">{{ 'Add new user' | trans }}</a></li>
                    <li><a class=\"dropdown-item\" href=\"/control/admin/departments.php\">{{ 'Departments' | trans }}</a></li>
                    <li><hr class=\"dropdown-divider\"></li>
                    <li><a class=\"dropdown-item\" href=\"/control/admin/manage_guides.php\">{{ 'Manage guides' | trans }}</a></li>
                    <li><a class=\"dropdown-item\" href=\"/control/admin/guide_collections.php\">{{ 'Guide collections' | trans }}</a></li>
                    <li><hr class=\"dropdown-divider\"></li>
                    <li><a class=\"dropdown-item\" href=\"/control/admin/sources.php\">{{ 'Database types' | trans }}</a></li>
                    <li><a class=\"dropdown-item\" href=\"/control/admin/faq_collections.php\">{{ 'FAQ collections' | trans }}</a></li>
                    <li><a class=\"dropdown-item\" href=\"/control/edit-config.php\">{{ 'Config site' | trans }}</a></li>
                </ul>
            </li>
        </ul>
        <form class=\"d-flex\">
            <input class=\"form-control me-2\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\">
            <button class=\"btn btn-primary\" type=\"submit\">Search</button>
        </form>
    </div>
</nav>", "staff/shared/header.html.twig", "/home/site/wwwroot/templates/staff/shared/header.html.twig");
    }
}
