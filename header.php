	<!--<style>
		/* {
			padding: 0px;
			margin: 0px;
			box-sizing: border-box;
		}

		a {
			text-decoration: none;
		}

		body {
			background-color: #f7f7eb;
			font-family: tahoma;
		}

		header div {
			padding: 20px;
		}

		header a {
			color: white;
		}

		header {
			background-color: #766ecc;
			display: flex;
			color: white;
			justify-content: center;
			align-items: center;
		}

		footer {
			padding: 20px;
			text-align: center;
			background-color: #eee;
		}

		input {
			margin: 4px;
			padding: 8px;
			width: 100%;
		}

		textarea {
			margin: 4px;
			padding: 8px;
			width: 100%;
		}

		button {
			padding: 10px;
			cursor: pointer;
		}*/
	</style>-->
	<header class="container-fluid m-auto">
		<nav class="navbar navbar-expand-lg navbar-light row m-auto">
			<a href="index.php" class="navbar-brand col-6 text-center">
				<h1 class="site_name">@rtful Batina Creative Studios</h1>
			</a>
			<ul class="navbar-nav m-2 mb-lg-0 col-6 light text-center">
				<li class="nav-item m-2 "><a href="index.php" class="navbar-link  ">Accueil</a></li>
				<li class="nav-item m-2 "><a href="creations.php" class="navbar-link  ">Créations</a>
				</li>
				<li class="nav-item m-2 "><a href="contactez-nous.php" class="navbar-link  ">Contact</a></li>
				<?php if (empty($_SESSION["info"])) : ?>
					<li class="nav-item m-2"><a class="navbar-link " href="login.php">Log In</a></li>
					<!--<li class="nav-item m-2"><a class="navbar-link text-white" href="signup.php">Sign Up</a></li>-->
				<?php else : ?>
					<li class="nav-item m-2"><a class="navbar-link " href="profile.php">Profile</a></li>
					<li class="nav-item m-2"><a class="navbar-link " href="myprofile.php">monProfile</a></li>
					<li class="nav-item m-2"><a class="navbar-link " href="logout.php">Log Out</a></li>
				<?php endif; ?>
			</ul>

		</nav>

	</header>