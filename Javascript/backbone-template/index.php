<html>
    <head>
        <title>Backbone Demo</title>
        <link rel="stylesheet" type="text/css" href="css/style.css"/>
    </head>
    <body>
        <div id="contacts"></div>
        <script id="contactTemplate" type="text/template">
            <img src="<%= photo %>" alt="<%= name %>" />
            <h1><%= name %><span><%= type %></span></h1>
            <div><%= address %></div>
            <dl>
            <dt>Tel:</dt><dd><%= tel %></dd>
            <dt>Email:</dt><dd><a href="mailto:<%= email %>"><%= email %></a></dd>
            </dl>
        </script>
        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/underscore.min.js"></script>
        <script type="text/javascript" src="js/backbone.min.js"></script>
        <script type="text/javascript" src="js/app.js"></script>
    </body>
</html>