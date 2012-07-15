<?php

/* page.tpl */
class __TwigTemplate_6286689fc4fcc3a8d0726ad4639a6671 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'id' => array($this, 'block_id'),
            'content' => array($this, 'block_content'),
            'greeting_tab_class' => array($this, 'block_greeting_tab_class'),
            'personal_greeting_tab_class' => array($this, 'block_personal_greeting_tab_class'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE HTML>
<html>
  <head>
    <title>Hello!</title>
    <script type=\"text/javascript\" charset=\"utf-8\" src=\"cordova-1.8.1.js\"></script>
    <link rel=\"stylesheet\" href=\"http://code.jquery.com/mobile/1.1.1/jquery.mobile-1.1.1.min.css\" />
    <link rel=\"stylesheet\" href=\"style.css\" type=\"text/css\" />
    <script src=\"http://code.jquery.com/jquery-1.7.1.min.js\"></script>
    <script src=\"http://code.jquery.com/mobile/1.1.1/jquery.mobile-1.1.1.min.js\"></script>
    <script src=\"event_bindings.js\"></script>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.00\" />
  </head>
  <body>
    <div data-role=\"page\" id=\"";
        // line 14
        $this->displayBlock('id', $context, $blocks);
        echo "\">
      <div data-role=\"header\" data-position=\"fixed\">
         This is the Header
      </div>
      <div data-role=\"content\">
        ";
        // line 19
        $this->displayBlock('content', $context, $blocks);
        // line 20
        echo "      </div>
      <div data-role=\"footer\" data-position=\"fixed\">
        <a href=\"http://christianvolunteering.org/HelloICCMServer/greeting.php\" data-role=\"button\" data-icon=\"home\" class=\"";
        // line 22
        $this->displayBlock('greeting_tab_class', $context, $blocks);
        echo "\">Greeting</a>
        <a href=\"http://christianvolunteering.org/HelloICCMServer/personal_greeting_prompt.php\" data-role=\"button\" data-icon=\"info\" class=\"";
        // line 23
        $this->displayBlock('personal_greeting_tab_class', $context, $blocks);
        echo "\">Personal Greeting</a>
      </div>
    </div>
  </body>
</html>
";
    }

    // line 14
    public function block_id($context, array $blocks = array())
    {
    }

    // line 19
    public function block_content($context, array $blocks = array())
    {
    }

    // line 22
    public function block_greeting_tab_class($context, array $blocks = array())
    {
    }

    // line 23
    public function block_personal_greeting_tab_class($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "page.tpl";
    }

    public function getDebugInfo()
    {
        return array (  79 => 23,  74 => 22,  69 => 19,  64 => 14,  54 => 23,  46 => 20,  36 => 14,  21 => 1,  50 => 22,  44 => 19,  38 => 6,  35 => 5,  29 => 3,);
    }
}
