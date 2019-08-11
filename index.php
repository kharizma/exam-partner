<?php

session_start();

?>

<!DOCTYPE html>
<html>
	<head>
		<title>Welcome to Web App</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="assets/css/style.css ">
		<link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
	</head>
	<body>
		<div class="header">
			<a href="/">Exam Partner</a>
		</div>

		<?php if( isset($_SESSION['user_id'])): ?>

			<br/>Welcome. You are  successfully logged in!

			<a href="logout.php">Logout? </a>

		<?php else: ?>

		<div class="container">
			<div class="row">
				<div class="col-md-5">
					<a href="login.php">
						<div class="content">
							<p>Login</p>
						</div>
					</a>
				</div>
				<div class="col-md-2 bold">
					<h3>OR</h3>
				</div>
				<div class="col-md-5">
					<a href="register.php">
						<div class="content">
							<p>Register</p>
						</div>
					</a>
				</div>
			</div>
		</div>

		<?php endif; ?> 	

	</body>
</html>
