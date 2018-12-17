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
					<h4>Pick Your Role</h4><br>
					<div class="row">
						<div class="col-6">
							<img src="img/asAdministrator.png" alt="administrator" height="265" width="265" style="max-width:100%;height:auto;">
							<form>
								<input class="MyButton" type="button" value="ADMINISTRATOR" onclick="window.location.href='registerAdministrator.php'" style="background-color: #eeeeee; border: #efefef; color: black;" />
							</form>
						</div>
						<div class="col-6">
							<img src="img/asKontributor.png" alt="kontributor" height="265" width="265" style="max-width:100%;height:auto;">
  							<form>
								<input class="MyButton" type="button" value="KONTRIBUTOR" onclick="window.location.href='registerKontributor.php'" style="background-color: #eeeeee; border: #efefef; color: black;" />
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>