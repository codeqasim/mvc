<?php

$root=(isset($_SERVER['HTTPS']) ? "https://" : "http://").$_SERVER['HTTP_HOST'];
$root.= str_replace(basename($_SERVER['SCRIPT_NAME']), '', $_SERVER['SCRIPT_NAME']);

require_once('././config.php');

?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="">
		<meta name="author" content="">
		<title><?=$title;?></title>
		<link rel="stylesheet" href="<?=$root;?>assets/css/bootstrap.min.css">
	</head>

	<body>

		<nav class="navbar navbar-expand-md navbar-dark bg-dark mb-5">
			<a class="navbar-brand" href="<?=$root;?>"><img src="<?=$root;?>assets/img/logo.png"/></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarCollapse">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item active"><a class="nav-link" href="<?php echo $root; ?>">Home <span class="sr-only">(current)</span></a></li>
					<li class="nav-item"><a class="nav-link" href="<?php echo $root; ?>search">Search</a></li>
					<li class="nav-item"><a class="nav-link" href="<?php echo $root; ?>hotels">Hotels</a></li>
					<li class="nav-item"><a class="nav-link" href="<?php echo $root; ?>flights">Flights</a></li>
				</ul>
				<div class="form-inline mt-2 mt-md-0">
					<input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
					<button class="btn btn-outline-success my-2 my-sm-0" type="">Search</button>
				</div>
			</div>
		</nav>

		<!-- Begin page content -->
		<!--<div class="container" style="margin-top: 100px;">
			<div class="">
				<h1>PHP VC TESTING</h1><br>
				<h4 class="text-success text-capitalize"><?= $head ?></h4>
			</div>
			<p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing.</p>

		</div>-->
