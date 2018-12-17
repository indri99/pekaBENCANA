<?php

$namaServer = "localhost";
$namaPengguna = "root";
$password = "";
$nama_db = "pekabencana";

$koneksi = new mysqli($namaServer, $namaPengguna, $password, $nama_db);

if ($koneksi->connect_error) {
	die ("Koneksi gagal : " . $koneksi->connect_error.  "<br>");
}
echo "Koneksi sukses. <br>";
?>