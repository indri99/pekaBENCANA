<?php

include "conf/koneksi.php";

$sql = "CREATE DATABASE pekaBENCANA";
$q = $koneksi->query($sql);
if ($q === TRUE) {
	echo "Basisdata sukses dibuat.";
} else {
	echo "Gagal membuat basisdata. ". $koneksi->error;
}
$koneksi->close();

?>