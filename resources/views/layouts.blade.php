<!DOCTYPE html>
<html>
<head>
	<title>{{ $title }}</title>
	<link rel="stylesheet" type="text/css" href="/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="/css/main.css">
</head>
<body>

<script type="text/javascript" src="/js/jquery-3.3.1.js"></script>
<script type="text/javascript" src="/js/bootstrap.bundle.js"></script>

<div class="">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-2">
				<div class="row">
					<div id="headside">
						<div style="color: white">
							<h4>laravel V 5.4</h4>
						</div>
					</div>
					<div id="sidebar">
						<nav id="menu">
							<ul>
							@section('sidebar')
								<li>
									<a href="/home">Home</a>
								</li>
								<li>
									<a href="/absent_in">Absen Masuk</a>
								</li>
								<li>
									<a href="">Absen Keluar</a>
								</li>
							@show
							</ul>
						</nav>
					</div>
				</div>
			</div>
			<div class="col-md-10">
				<div class="row">
					<div id="header">
						<h3>Basic Absensi</h3>
					</div>
					<div id="block-wrap">
						<div class="col-md-12">
							<div class="block-content">
								
								@yield('content')

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="row">
					<div id="footer" style="text-align: center; color: white">Copyright Agus Setiadi | 2018</div>
				</div>
			</div>
		</div>
	</div>
</div>

</body>
</html>
