<head>
    <meta charset="UTF-8">
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>

    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet" />
    <link rel="shortcut icon" href="img/favicon.ico">
    <title>Diana</title>
</head>

<body>
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="index.html"><img src="img/favicon.png" style="width: 1.5em; height: 1.5em; float: left">  Diana</a>
            </div>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                <li><a href="{{ url('login') }}"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
            </ul>
        </div>
    </nav>
    @yield('content')
  </body>
</html>
