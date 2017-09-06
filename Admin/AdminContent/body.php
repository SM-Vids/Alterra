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
	<a href=""><img src="../img/menu.svg" alt="Nav burger"></a>
	<ul>
		<li><h2>Hello <?php if (empty($_SESSION['userName'] )) {
			echo "Guest";
		} else {
			echo $_SESSION['userName'];
		}
		 ?></h2></li>
		<li><a class="active" href="../index.php">Home</a></li>
		<li><a href="#">Reports</a></li>
		<li><a href="#">Album</a></li>
		<li><a href="#">About</a></li>
		<li><a href="#">Point Of Origin</a></li>
		<li><a href="#">The Team</a></li>
		<li><a href="create.php">Create Post</a></li>
		<li>
			<?php
				if (!isset($_SESSION['userName'])) {
					?> <a class="login-link" href="#">Log In</a><?php
				} else {
					?> <a href="logout.php">Log Out <?php echo $_SESSION['userName'] ?></a> <?php
				}
				
			?>
		</li>
			<form action="login.php" method="POST" id="login">
			<input type="text" name="formUsername" placeholder="Username">
			<input type="password" name="formPassword" placeholder="Enter Password">
			<button>Log In</button>
		</form>
		
	</ul>
</nav>