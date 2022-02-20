{% extends "layouts/master.php" %}
{% block title %}Dashboard{% endblock %}
{% block content %}
<div id="appcontent">
    {% include "sections/dashboard.php" with { 'counts':counts} %}
</div>
{% endblock %}