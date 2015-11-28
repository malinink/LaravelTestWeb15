<!DOCTYPE html>

<html>
    <head>
        <title>@yield('title', $title)</title>
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <style type="text/css">
            .button {
                font-weight: 600;
                color: white;
                text-decoration: none;
                padding: 0.8em;
                border-radius: 3px;
                background: rgb(60,200,130);
                box-shadow: 0 -3px rgb(50,170,110) inset;
                transition: 0.2s;
            } 
            .button:hover { 
                background: rgb(50,170,110); 
            }
            .button:active {
                background: rgb(30,150,90);
                box-shadow: 0 3px rgb(30,150,90) inset;
            }
            
            h2 {
                font-family: Verdana;
                font-weight: bold;
                color: #000;
                letter-spacing: -0.11em;
            }

            h1 {	
                font-family: Verdana;
                font-weight: bold;
                color: #000;
                letter-spacing: -0.11em;
            }
    </style>

    </head>
    <body class='container'>
        @section('body')
        @show
    </body>
</html>

