<?php 
	include('dbKontributor.php');
	$name = $_POST['name'];
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password1 = $_POST['password1'];
	$password2 = $_POST['password2'];

	// $query = "INSERT INTO kontributor (nama, username, email, password) VALUES ($name, $username, $email, $password1)";
	mysqli_query($db, "INSERT INTO kontributor (nama, username, email, password) VALUES ('$name', '$username', '$email', '$password1')");

	// kamu harus direct otomatis
	// keywordnya php direct: nanti ada masukin alamat mau direct ke mana

  	header('location: kontributorDashboard.php');
 ?>