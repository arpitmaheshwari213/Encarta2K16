<?php
ob_start();
session_start();
require_once "includes/config.php";
require_once "includes/database.php";
require_once "includes/functions.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Nilesh Hirani">
    <title>Encarta</title>

	<!-- Material Design fonts -->
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700" type="text/css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

	<!-- JQuery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

	<!-- Bootstrap Latest compiled and minified CSS and JavaScript -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

	<!-- Bootstrap Material Design -->
	<link href="css/bootstrap-material-design.css" rel="stylesheet">
	<link href="css/ripples.min.css" rel="stylesheet">
	<link href="css/jquery.dropdown.css" rel="stylesheet">

	<script src="js/material.min.js"></script>
	<script src="js/ripples.min.js"></script>
	<script src="js/jquery.dropdown.js"></script>


	<!-- Navbar -->
	<link href="css/navbar.css" rel="stylesheet">



	<script>
	$(document).ready(function(){
		$.material.init();
		$("select").dropdown();
	});
	</script>
</head>
<body>
	<header>
		<nav class="navbar navbar-default">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="index.php#home" style="padding:0px;margin-left:10px;height:100%;"><img src="img/logo.png"></a>
				</div>
				<div class="collapse navbar-collapse" id="myNavbar">
					<ul class="nav navbar-nav navbar-right">
						<li><a href="index.php#home">HOME</a></li>
						<li><a href="index.php#about">ABOUT</a></li>
						<li><a href="index.php#events">EVENTS</a></li>
						<li><a href="index.php#contact">CONTACT</a></li>
						<?php if(!isset($_SESSION['logged_in'])) { ?>
						<li><a href="login.php" <?php  ?>>LOGIN</a></li>
						<?php } else { ?>
						<li class="dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" href="#">Hi! <?php echo $_SESSION['name']; ?>
								<span class="caret"></span>
							</a>
							<ul class="dropdown-menu">
								<li><a href="profile.php">Profile</a></li>
								<!-- <li><a href="#">Select evets</a></li> -->
								<li><a href="logout.php">Logout</a></li>
							</ul>
						</li>
						<?php } ?>
					</ul>
				</div>
			</div>
		</nav>
	</header>
