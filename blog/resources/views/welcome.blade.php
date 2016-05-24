<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
            }
            .enter-button {
              font-size: 3em;
              text-decoration: none;
              border: solid 1px black;
              border-radius: 4px;
              padding: 0;
              width: inherit;

            }
            a:link {
              text-decoration: none;
              color: black;
            }

            a:visited {
              text-decoration: none;
              color: black;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title">Diana, The Smartcloset</div>
                <div class="enter-button"> <a href="{{ url('index') }}">Enter here</a> </div>
            </div>
        </div>
    </body>
</html>
