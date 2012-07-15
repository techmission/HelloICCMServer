<!DOCTYPE HTML>
<html>
  <head>
    <title>Hello!</title>
    <script type="text/javascript" charset="utf-8" src="cordova-1.8.1.js"></script>
    <link rel="stylesheet" href="http://code.jquery.com/mobile/1.1.1/jquery.mobile-1.1.1.min.css" />
    <link rel="stylesheet" href="style.css" type="text/css" />
    <script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
    <script src="http://code.jquery.com/mobile/1.1.1/jquery.mobile-1.1.1.min.js"></script>
    <script src="event_bindings.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.00" />
  </head>
  <body>
    <div data-role="page" id="{% block id %}{% endblock %}">
      <div data-role="header" data-position="fixed">
         This is the Header
      </div>
      <div data-role="content">
        {% block content %}{% endblock %}
      </div>
      <div data-role="footer" data-position="fixed">
        <a href="http://christianvolunteering.org/HelloICCMServer/greeting.php" data-role="button" data-icon="home" class="{% block greeting_tab_class %}{% endblock %}">Greeting</a>
        <a href="http://christianvolunteering.org/HelloICCMServer/personal_greeting_prompt.php" data-role="button" data-icon="info" class="{% block personal_greeting_tab_class %}{% endblock %}">Personal Greeting</a>
      </div>
    </div>
  </body>
</html>
