<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    {{-- Style --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/caremed.css') }}">

	<title>CareMed - @yield('title')</title>
</head>
<body>
	<div class="navigation">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<div class="brand">
						<h3>CareMed</h3>
					</div>
				</div>
				<div class="col-md-9">
					<div class="menuTrigger">MENU</div>
					<ul class="menu">
						<li class="menuList">Dental Products
							<i class="fa fa-caret-down fa-2" aria-hidden="true"></i>
							<ul>
								<li><a href="#">Dental Product 1</a></li>
								<li><a href="#">Dental Product 2</a></li>
								<li><a href="#">Dental Product 3</a></li>
							</ul>
						</li>
						<li class="menuList">Medical Products
							<i class="fa fa-caret-down fa-2" aria-hidden="true"></i>
							<ul>
								<li><a href="#">Medical Product 1</a></li>
								<li><a href="#">Medical Product 2</a></li>
								<li><a href="#">Medical Product 3</a></li>
							</ul>
						</li>
						<li class="menuList">Services</li>
						<li class="menuList">Events
							<i class="fa fa-caret-down fa-2" aria-hidden="true"></i>
							<ul>
								<li><a href="#">Event 1</a></li>
								<li><a href="#">Event 2</a></li>
								<li><a href="#">Event 3</a></li>
							</ul>
						</li>
						<li class="menuList">About</li>
						<li class="menuList">Contact</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	
	
		