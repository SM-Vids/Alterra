<?php session_start();?>
<!doctype html>
<html class="no-js" lang="">
<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">

	<title>Alterra | Home</title>

	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="apple-touch-icon" href="img/logo.png">
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/styles.min.css">
	<link rel="icon" href="img/logo.png">

	<script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>
<body>
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
