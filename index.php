<!doctype html>
<html class="no-js" lang="">
<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Alterra | Home</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="apple-touch-icon" href="img/logo.png">
	<!-- Place favicon.ico in the root directory -->

	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/styles.min.css">
	<link rel="icon" href="img/logo.png">
	<script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>
<body>
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<!-- Add your site or application content here -->
<div id="wrapper">
	<header>
		<h1>The Alterra Expedition</h1>
		<h5>- auHIzr</h5>
	</header>
	<nav>
		<a href=""><img src="img/menu.svg" alt="Nav burger"></a>
		<ul>
			<li><a class="active" href="#">Home</a></li>
			<li><a href="#">Reports</a></li>
			<li><a href="#">Album</a></li>
			<li><a href="#">About</a></li>
			<li><a href="#">Point Of Origin</a></li>
			<li><a href="#">The Team</a></li>
			<li>
				<a class="login-link" href="#">Log In</a>
			</li>
				<form id="login">
				<input type="text" placeholder="Username">
				<input type="password" placeholder="Enter Password">
				<button>Log In</button>
			</form>
			
		</ul>
	</nav>
<main>
<!--
	id
	heading
	published
	author
	imgSrc
	imgAlt
	text
 -->
	
	<?php
		require "getArticle.php";
	 ?>
</main>
<hr>
<footer>
	<h2>Designed By: DCSL.net </h2>
</footer>
</div>

<script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.12.0.min.js"><\/script>')</script>
<script src="js/plugins.js"></script>
<script src="js/main.js"></script>

<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
<script>
	(function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
		function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
	e=o.createElement(i);r=o.getElementsByTagName(i)[0];
	e.src='https://www.google-analytics.com/analytics.js';
	r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
	ga('create','UA-XXXXX-X','auto');ga('send','pageview');
</script>
<script src="js/script.js"></script>
</body>
</html>
