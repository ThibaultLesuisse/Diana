<head>
    <meta charset="UTF-8">
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>

    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet" />
    <link rel="shortcut icon" href="img/favicon.ico">
    <link href='https://fonts.googleapis.com/css?family=Lato:300,400' rel='stylesheet' type='text/css'>
    <title>Diana</title>
</head>
<html>
<body>
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="index.html"><img src="img/favicon.png" style="width: 1.5em; height: 1.5em; float: left">  Diana</a>
            </div>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="{{ url('/') }}"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
            </ul>
        </div>
    </nav>
    @yield('content')
  </body>
</html>
