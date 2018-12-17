<?php

include "conf/koneksi.php";

$sql = "CREATE TABLE kontributor (
id int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
nama varchar(50) NOT NULL,
username varchar(50) NOT NULL,
email varchar(50) NOT NULL,
password varchar(50) NOT NULL )";

$q = $koneksi->query($sql);
if ($q === TRUE) {
	echo "Tabel sukses dibuat";
} else {
	echo "Gagal membuat tabel.<br>". $koneksi->error;
}

$koneksi->close();

?>