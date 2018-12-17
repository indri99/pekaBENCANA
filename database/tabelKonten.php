<?php

include "conf/koneksi.php";

$sql = "CREATE TABLE konten (
id int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
judul varchar(50) NOT NULL,
kabupatenkota varchar(50) NOT NULL,
provinsi varchar(50) NOT NULL,
isi varchar(255) NOT NULL,
gambar blob NOT NULL,
video blob NOT NULL )";

$q = $koneksi->query($sql);
if ($q === TRUE) {
	echo "Tabel sukses dibuat";
} else {
	echo "Gagal membuat tabel.<br>". $koneksi->error;
}

$koneksi->close();

?>