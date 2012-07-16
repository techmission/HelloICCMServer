{% extends "page.tpl" %}

{% block id %}dynamic_greeting{% endblock %}

{% block content %}
  <h1>Hello to the following people:</h1>
  <ul>
    {% for name in names %}
      <li>{{name}}</li>
    {% endfor %}
  </ul>
{% endblock %}

{% block greeting_tab_class%}{% endblock %}

{% block personal_greeting_tab_class %}{% endblock %}

{% block dynamic_greeting_tab_class %}ui-btn-active ui-state-persist{% endblock %}
