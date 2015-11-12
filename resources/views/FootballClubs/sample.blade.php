<!DOCTYPE html>

<html>
    <head>
        <title>@yield('title')</title>
        <style>
            .button {
                font-weight: 600;
                color: white;
                text-decoration: none;
                padding: 0.8em;
                border-radius: 3px;
                background: rgb(25,25,112);
                box-shadow: 0 -3px rgb(0,191,255) inset;
                transition: 0.2s;
            } 
            .button:hover { 
                background: rgb(0,191,255); 
            }
            .button:active {
                background: rgb(30,150,90);
                box-shadow: 0 3px rgb(30,150,90) inset;
            }
            
            h2 {
                font-family: Arial;
                font-weight: normal;
                color: #000;
                letter-spacing: 5pt;
            }
            h1 {	
                font-family: Arial;
                font-weight: bolder;
                color: #000;
                letter-spacing: 7pt;
            }
            
    </style>

    </head>
    <body>
        @section('body')
        @show
    </body>
</html>


