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
					<h4 class="form-login-heading display-3 text- text-success" style="color: #009624;"><b>LOGIN</b></h4>
					<form class="form-login" role="form" action="loginAdministrator.php" method="post">
						<?php include('errors.php'); ?>
						<input class="form-control form-control-lg" type="text" name="username" placeholder="Username" required></br>
						<input class="form-control form-control-lg" type="password" name="password" placeholder="Password" required>
						<div class="col-auto my-1">
							<div class="row">
								<div class="col-8">
									<div class="custom-control custom-checkbox mr-sm-2" align="left">
        								<input type="checkbox" class="custom-control-input" id="customControlAutosizing">
        								<label class="custom-control-label" for="customControlAutosizing">Remember me</label>
       								</div>
								</div>
  								<div class="col-4">
  									<a href="forgotPassword.php">Forgot password?</a>
  								</div>
							</div>
  						</div>
						<div class="mt-4">
							<button class="btn btn-lg btn-primary btn-block" type="submit" name="login_administrator" style="background-color: #009624; border: #009624; color: black;">
								<b>LOGIN</b>
								<a href="#"></a>
							</button>
						</div>
						<div class="form-register">
							<br>
							<br>
  							<a href="registerAs.php">Create a new account</a>
  						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</body>
</html>