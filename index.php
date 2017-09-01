<?php session_start();?>
<?php if ($_SESSION['loginFail'] == true) {
	echo "<script>alert(\"Sorry you don't seem to have an account here. Try again.\")";	
}
?>
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
<div id="wrapper">
	<?php require "sitecontent/header.php"; ?>
	<?php require "sitecontent/nav.php"; ?>
<main>
	<?php require "admin/getArticle.php";?>
</main>
<hr>
<?php require "sitecontent/footer.php"; ?>
</div>

<?php require "sitecontent/scripts.php"; ?>
</body>
</html>
