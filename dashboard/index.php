<!DOCTYPE html>
<?php
	require 'globals.php';
	require 'continents.php';
	require 'total.php';
	require_once 'countries.php';
?>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Covid-19</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/styles.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
		<script src="js/scripts.js"></script>
		<style>
			.container {
				max-width: 100%;
			}
			.h-scroll {
				height: 80vh; 
				position: relative;
				overflow-y: scroll;
			}
		</style>
	</head>
	<body class='bg-dark mb-3'>
		<nav class="navbar navbar-expand-md navbar-dark bg-dark mb-3">
			<div class="container-fluid">
				<a href="#" class="navbar-brand mr-3">Covid-19</a>
			</div>    
		</nav>
		<div class="container bg-dark mb-3">
			<div class="row bg-dark mb-3">
				<div class="col-12">
					<?php
						loadTotal();
					?>
				</div>
			</div>
			<br>
			<div class="row">
				<div class="col-3 bg-dark mb-3 h-scroll" >
					<?php 
						loadContinents();
					?>
				</div>
				<div class="col-9 list-of-countries">
					<?php
						loadCountries();
					?>				
				</div>
			</div>
		
			<hr>
			<footer>
				<div class="row">
					<div class="col-md-6">
						<p>Copyright &copy; 2020 Patrick Wallin</p>
					</div>
					<div class="col-md-6 text-md-right">
						<a href="#" class="text-dark">Terms of Use</a> 
						<span class="text-muted mx-2">|</span> 
						<a href="#" class="text-dark">Privacy Policy</a>
					</div>
				</div>
			</footer>
		</div>
	</body>
</html>