<!DOCTYPE html>
<html lang="en">
<head>
	
	<meta charset="utf-8">
	<title>Rhonin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('node_modules/bootstrap/dist/css/bootstrap.min.css') }}" >
	<link id="base-style" href="custom/style.css" rel="stylesheet">
    <script src="{{ URL::asset('node_modules/jquery/dist/jquery.min.js')}}"></script>
    <script src="{{ URL::asset('node_modules/bootstrap/dist/js/bootstrap.min.js')}}"></script>

		
</head>

<body>

<nav class="navbar navbar-default" role="navigation">
	<div class="container-fluid"> 
	<div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse"
				data-target="#example-navbar-collapse">
			<span class="sr-only">切换导航</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
		<a class="navbar-brand" href="#">Rhonin</a>
	</div>
	<div class="collapse navbar-collapse" id="example-navbar-collapse">
		<ul class="nav navbar-nav">
			<li class="active"><a href="#">产品列表</a></li>
			<li><a href="#">进货</a></li>
		</ul>
	</div>


	</div>
</nav>

@yield('content')
   
</body>
</html>
