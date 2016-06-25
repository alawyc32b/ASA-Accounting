<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-COMPATIBLE" content="IE-edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="<% URL::asset('component/css/bootstrap.min.css') %>">
	<script type="text/javascript" src="<% URL::asset('component/js/jquery.min.js') %>"></script>
	<script type="text/javascript" src="<% URL::asset('component/js/bootstrap.min.js') %>"></script>

	<link rel="shortcut icon" type="image/png" href="<% URL::asset('component/img/asa_logo.png') %>">
	<title>ASA - @yield('title')</title>
</head>
<body>
	<nav class="navbar navbar-inverse">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="">ASA Accounting</a>
			</div>
			<ul class="nav navbar-nav">
				<li class="active"><a href="#">Beranda</a></li>
				<li><a href="#">Pelanggan</a></li>
				<li><a href="#">Barang</a></li>
				<li><a href="#">Barang Paket</a></li>
				<li><a href="#">Pemasok</a></li>
				<li><a href="#">Penerimaan</a></li>
				<li><a href="#">Penjualan</a></li>
				<li class="dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" href="#">Laporan
					<span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="#">Laporan Penerimaan</a></li>
						<li><a href="#">Laporan Penjualan</a></li>
					</ul>
				</li>
			</ul>
		</div>
	</nav>
</body>
</html>