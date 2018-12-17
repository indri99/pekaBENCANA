<?php 
	include('dbKonten.php');
	$judul = $_POST['judul'];
	$kabupatenkota = $_POST['kabupatenkota'];
	$provinsi = $_POST['provinsi'];
	$isi = $_POST['isi'];
	$gambar = $_POST['gambar'];
	$video = $_POST['video'];

	// $query = "INSERT INTO kontributor (nama, username, email, password) VALUES ($name, $username, $email, $password1)";
	mysqli_query($db, "INSERT INTO konten (judul, kabupatenkota, provinsi, isi, gambar, video) VALUES ('$judul', '$kabupatenkota', '$provinsi', '$isi', '$gambar', '$video')");

	// kamu harus direct otomatis
	// keywordnya php direct: nanti ada masukin alamat mau direct ke mana

  	header('location: kontributorDashboard.php');
 ?>