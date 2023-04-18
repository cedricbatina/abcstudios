<?php

require "functions.php";

if ($_SERVER['REQUEST_METHOD'] == "POST") {

	$email = addslashes($_POST['email']);
	$password = addslashes($_POST['password']);

	$query = "select * from users where email = '$email' && password = '$password' limit 1";

	$result = mysqli_query($con, $query);

	if (mysqli_num_rows($result) > 0) {

		$row = mysqli_fetch_assoc($result);

		$_SESSION['info'] = $row;
		header("Location: profile.php");
		die;
	} else {
		$error = "wrong email or password";
	}
}
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
	<link href="./stylefile.css" rel="stylesheet">
	<title>@rtful Batina Creative Studios - Home</title>
</head>

<body>

	<?php require "header.php"; ?>
	<?php require "banner.php"; ?>


	<div class="container-fluid m-auto">

		<?php

		if (!empty($error)) {
			echo "<div>" . $error . "</div>";
		}

		?>
		<h2 style="text-align: center;">Login</h2>

		<form method="post" style="margin: auto;padding:10px;">

			<input type="email" name="email" placeholder="Email" required><br>
			<input type="password" name="password" placeholder="Password" aria-describedby="email-help" required><br>

			<button>Login</button>
		</form>
	</div>
	<?php require "footer.php"; ?>

</body>

</html>