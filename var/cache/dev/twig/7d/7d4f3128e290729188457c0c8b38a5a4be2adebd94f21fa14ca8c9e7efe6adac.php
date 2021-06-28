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

/* inicio/index.html.twig */
class __TwigTemplate_a1eef0350a8ea8467919f2368ba36a1f59adfc2908708735137033b4b39559a2 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "inicio/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "inicio/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "inicio/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Hello InicioController!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>

<div class=\"example-wrapper container\">
   <h1>Blog Aplyca</h1>
   
<style>
* {box-sizing: border-box}
body {font-family: \"Lato\", sans-serif;}

/* Style the tab */
.tab {
  float: left;
  /*border: 1px solid #ccc;*/
  /*background-color: #f1f1f1;*/
  width: 30%;
  height: 300px;
}

/* Style the buttons inside the tab */
.tab button {
  display: block;
  background-color: inherit;
  color: black;
  padding: 22px 16px;
  width: 100%;
  border: none;
  outline: none;
  text-align: left;
  cursor: pointer;
  transition: 0.3s;
  font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #ffffff;
}

/* Create an active/current \"tab button\" class */
.tab button.active {
  background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
  float: left;
  padding: 0px 12px;
  /*border: 1px solid #ccc;*/
  width: 70%;
  border-left: none;
  max-height: auto;
}

.clearfix::after {
  content: \"\";
  clear: both;
  display: table;
}

p {
    font-size: 15px;
}
</style>

<body>
<div class=\"clearfix\">

    <p>Inicie sesión para dejar un comentario:</p>

    <div class=\"tab\">
    <button class=\"tablinks\" onclick=\"openPOst(event, 'London')\" id=\"defaultOpen\">London</button>
    <button class=\"tablinks\" onclick=\"openPOst(event, 'Paris')\">Paris</button>
    <button class=\"tablinks\" onclick=\"openPOst(event, 'Tokyo')\">Tokyo</button>
    </div>

    <div id=\"London\" class=\"tabcontent\">
    <h3>London</h3>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer viverra nibh risus, quis fermentum magna cursus accumsan. Cras tincidunt ac urna id varius. Quisque tempus ante id ipsum molestie consequat. Donec luctus, justo a finibus lacinia, tellus elit maximus lorem, quis imperdiet mi lacus ut lorem. Morbi vulputate porta tortor vel aliquet. Mauris posuere, lectus ut ornare ornare, erat erat sollicitudin leo, eu congue mauris ex vitae turpis. Morbi aliquet sem at commodo ultrices. Curabitur mollis pulvinar neque, eu feugiat erat gravida vel. Duis at auctor nulla, vel dapibus mauris. Integer a dui non libero facilisis suscipit nec ut orci.</p>
    </div>

    <div id=\"Paris\" class=\"tabcontent\">
    <h3>Paris</h3>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer viverra nibh risus, quis fermentum magna cursus accumsan. Cras tincidunt ac urna id varius. Quisque tempus ante id ipsum molestie consequat. Donec luctus, justo a finibus lacinia, tellus elit maximus lorem, quis imperdiet mi lacus ut lorem. Morbi vulputate porta tortor vel aliquet. Mauris posuere, lectus ut ornare ornare, erat erat sollicitudin leo, eu congue mauris ex vitae turpis. Morbi aliquet sem at commodo ultrices. Curabitur mollis pulvinar neque, eu feugiat erat gravida vel. Duis at auctor nulla, vel dapibus mauris. Integer a dui non libero facilisis suscipit nec ut orci.</p> 
    </div>

    <div id=\"Tokyo\" class=\"tabcontent clearfix\">
    <h3>Tokyo</h3>
    <p>Tokyo is the capital of Japan.</p>
    </div>
</div>



<script>
function openPOst(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName(\"tabcontent\");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = \"none\";
  }
  tablinks = document.getElementsByClassName(\"tablinks\");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(\" active\", \"\");
  }
  document.getElementById(cityName).style.display = \"block\";
  evt.currentTarget.className += \" active\";
}

// Get the element with id=\"defaultOpen\" and click on it
document.getElementById(\"defaultOpen\").click();
</script>
   

</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "inicio/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello InicioController!{% endblock %}

{% block body %}
<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>

<div class=\"example-wrapper container\">
   <h1>Blog Aplyca</h1>
   
<style>
* {box-sizing: border-box}
body {font-family: \"Lato\", sans-serif;}

/* Style the tab */
.tab {
  float: left;
  /*border: 1px solid #ccc;*/
  /*background-color: #f1f1f1;*/
  width: 30%;
  height: 300px;
}

/* Style the buttons inside the tab */
.tab button {
  display: block;
  background-color: inherit;
  color: black;
  padding: 22px 16px;
  width: 100%;
  border: none;
  outline: none;
  text-align: left;
  cursor: pointer;
  transition: 0.3s;
  font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #ffffff;
}

/* Create an active/current \"tab button\" class */
.tab button.active {
  background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
  float: left;
  padding: 0px 12px;
  /*border: 1px solid #ccc;*/
  width: 70%;
  border-left: none;
  max-height: auto;
}

.clearfix::after {
  content: \"\";
  clear: both;
  display: table;
}

p {
    font-size: 15px;
}
</style>

<body>
<div class=\"clearfix\">

    <p>Inicie sesión para dejar un comentario:</p>

    <div class=\"tab\">
    <button class=\"tablinks\" onclick=\"openPOst(event, 'London')\" id=\"defaultOpen\">London</button>
    <button class=\"tablinks\" onclick=\"openPOst(event, 'Paris')\">Paris</button>
    <button class=\"tablinks\" onclick=\"openPOst(event, 'Tokyo')\">Tokyo</button>
    </div>

    <div id=\"London\" class=\"tabcontent\">
    <h3>London</h3>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer viverra nibh risus, quis fermentum magna cursus accumsan. Cras tincidunt ac urna id varius. Quisque tempus ante id ipsum molestie consequat. Donec luctus, justo a finibus lacinia, tellus elit maximus lorem, quis imperdiet mi lacus ut lorem. Morbi vulputate porta tortor vel aliquet. Mauris posuere, lectus ut ornare ornare, erat erat sollicitudin leo, eu congue mauris ex vitae turpis. Morbi aliquet sem at commodo ultrices. Curabitur mollis pulvinar neque, eu feugiat erat gravida vel. Duis at auctor nulla, vel dapibus mauris. Integer a dui non libero facilisis suscipit nec ut orci.</p>
    </div>

    <div id=\"Paris\" class=\"tabcontent\">
    <h3>Paris</h3>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer viverra nibh risus, quis fermentum magna cursus accumsan. Cras tincidunt ac urna id varius. Quisque tempus ante id ipsum molestie consequat. Donec luctus, justo a finibus lacinia, tellus elit maximus lorem, quis imperdiet mi lacus ut lorem. Morbi vulputate porta tortor vel aliquet. Mauris posuere, lectus ut ornare ornare, erat erat sollicitudin leo, eu congue mauris ex vitae turpis. Morbi aliquet sem at commodo ultrices. Curabitur mollis pulvinar neque, eu feugiat erat gravida vel. Duis at auctor nulla, vel dapibus mauris. Integer a dui non libero facilisis suscipit nec ut orci.</p> 
    </div>

    <div id=\"Tokyo\" class=\"tabcontent clearfix\">
    <h3>Tokyo</h3>
    <p>Tokyo is the capital of Japan.</p>
    </div>
</div>



<script>
function openPOst(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName(\"tabcontent\");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = \"none\";
  }
  tablinks = document.getElementsByClassName(\"tablinks\");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(\" active\", \"\");
  }
  document.getElementById(cityName).style.display = \"block\";
  evt.currentTarget.className += \" active\";
}

// Get the element with id=\"defaultOpen\" and click on it
document.getElementById(\"defaultOpen\").click();
</script>
   

</div>
{% endblock %}
", "inicio/index.html.twig", "/Users/italoramirezprieto/Documents/symfony/pruebas_symfony/templates/inicio/index.html.twig");
    }
}
