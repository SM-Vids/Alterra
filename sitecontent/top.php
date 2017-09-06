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
<header>
		<h1>The Alterra Expedition</h1>
		<h5>- auHIzr</h5>
	</header>
	<nav>
	<a href=""><img src="img/menu.svg" alt="Nav burger"></a>
	<ul>
		<li><h2>Hello <?php if (empty($_SESSION['userName'] )) {
			echo "Guest";
		} else {
			echo $_SESSION['userName'];
		}
		 ?></h2></li>
		<li><a class="active" href="index.php">Home</a></li>
		<li><a href="#">Reports</a></li>
		<li><a href="#">Album</a></li>
		<li><a href="#">About</a></li>
		<li><a href="#">Point Of Origin</a></li>
		<li><a href="#">The Team</a></li>
		<?php
		if (isset($_SESSION['accessLevel']) && $_SESSION['accessLevel'] <= 3)  {
			?>
			<li><a href="Admin/create.php">Create Post</a></li>
			<?php
		}
		?>
		<li>
			<?php
				if (!isset($_SESSION['userName'])) {
					?> <a class="login-link" href="#">Log In</a><?php
				} else {
					?> <a href="Admin/logout.php">Log Out <?php echo $_SESSION['userName'] ?></a> <?php
				}
				
			?>
		</li>
			<form action="Admin/login.php" method="POST" id="login">
			<input type="text" name="formUsername" placeholder="Username">
			<input type="password" name="formPassword" placeholder="Enter Password">
			<button>Log In</button>
		</form>
		<li><a href="#" id="createUser">Register</a></li>
		<form action="Admin/newuser.php" method="POST" id="createUserForm" required>
		<input type="text" name="newUsername" placeholder="New Username" required>
		<input type="password" name="newPassword" placeholder="New Password" required>
		<input type="password" name="newPasswordRepeat" placeholder="Repeat Password" required>
		<button>Create</button>
	</form>	
	</ul>
</nav>