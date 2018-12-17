<?php include('dbAdministrator.php')?>
<!DOCTYPE html>
<html>
<head>
	<title>PEKA BENCANA</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>
<body>
	<div class="jumbotron jumbotron-fluid p-0 m-0" style="height: 100vh">
		<div class="row pt-0 h-100 w-100">
			<div class="col-6 bg-warning d-flex align-items-center">
				<h1 class="text-center" style="font-size: 5vw;">PORTAL EDUKASI KESIAPSIAGAAN BENCANA</h1>
			</div>
			<div class="col-6 d-flex align-items-center text-center">
				<div class="container">
					<h4 class="form-register-heading display-3 text- text-success" style="color: #009624;"><b>REGISTER</b></h4>
					<p>Please fill in this form to create an account</p>
					<form class="form-register" action="registerAdministrator.php" method="post">
						<?php include('errors.php');?>
						<input class="form-control form-control-lg" type="text" name="name" value="<?php echo $name; ?>" placeholder="Name"  required></br>
						<input class="form-control form-control-lg" type="text" name="username" value="<?php echo $username; ?>" placeholder="Username"  required></br>
						<input class="form-control form-control-lg" type="text" name="email" value="<?php echo $email; ?>" placeholder="Email"  required></br>
						<input class="form-control form-control-lg" type="password" name="password1" placeholder="Password" required></br>
						<input class="form-control form-control-lg" type="password" name="password2" placeholder="Confirm Password" required></br>
						<hr><p align="left">By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

						<div class="mt-4">
							<button class="btn btn-lg btn-primary btn-block" type="submit" name="reg_administrator" style="background-color: #009624; border: #009624; color: black;">
								<b>REGISTER</b>
							</button>
						</div>

						<div class="container login">
							<br>
    						<p>Already have an account? <a href="loginAs.php">Login</a>.</p>
  						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</body>
</html>