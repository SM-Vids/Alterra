
<nav>
		<a href=""><img src="img/menu.svg" alt="Nav burger"></a>
		<ul>
			<li><h2>Hello <?php if (empty($_SESSION['userName'] )) {
				echo "Guest";
			} else {
				echo $_SESSION['userName'];
			}
			 ?></h2></li>
			<li><a class="active" href="#">Home</a></li>
			<li><a href="#">Reports</a></li>
			<li><a href="#">Album</a></li>
			<li><a href="#">About</a></li>
			<li><a href="#">Point Of Origin</a></li>
			<li><a href="#">The Team</a></li>
			<li>
				<?php
					if (empty($_SESSION['userName'])) {
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
			
		</ul>
	</nav>