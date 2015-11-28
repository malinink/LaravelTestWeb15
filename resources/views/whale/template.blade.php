<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Web15</title>
        
        <style>
            ul { 
                    list-style-type: none;
                    padding-left: 0;
                    margin-left: 0;
               }
            li:before {
                    content: '\2740';
               }
        </style>
	
</head>

<body>

	<hr>
	<div class="container">
            
	    @if (Session::has('flash_message'))
                <div class='alert alert-success'>{!! Session::get('flash_message') !!}</div>
            @endif
            
            @yield("content")
            <hr>
	</div>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"/>
</body>

</html>
