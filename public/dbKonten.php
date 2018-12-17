<?php 

  // variable declaration
  $judul = "";
  $kabupatenkota = "";
  $provinsi    = "";
  $isi    = "";
  $gambar    = "";
  $video    = "";
  $errors = array(); 
  $_SESSION['success'] = "";

  // connect to database
  $db = mysqli_connect('localhost', 'root', '', 'pekabencana');

  // REGISTER USER
  if (isset($_POST['tbh_konten'])) {
    // receive all input values from the form
    $judul = mysqli_real_escape_string($db, $_POST['judul']);
    $kabupatenkota = mysqli_real_escape_string($db, $_POST['kabupatenkota']);
    $provinsi = mysqli_real_escape_string($db, $_POST['provinsi']);
    $isi = mysqli_real_escape_string($db, $_POST['isi']);
    $gambar = mysqli_real_escape_string($db, $_POST['gambar']);
    $video = mysqli_real_escape_string($db, $_POST['video']);

    // form validation: ensure that the form is correctly filled
    if (empty($judul)) { array_push($errors, "Judul is required"); }
    if (empty($kabupatenkota)) { array_push($errors, "Kabupaten/Kota is required"); }
    if (empty($provinsi)) { array_push($errors, "Provinsi is required"); }
    if (empty($isi)) { array_push($errors, "Isi is required"); }

    // register user if there are no errors in the form
    if (count($errors) == 0) {
      
      mysqli_query($db, "INSERT INTO konten (judul, kabupatenkota, provinsi, isi, gambar, video) VALUES ('$judul', '$kabupatenkota', '$provinsi', '$isi', '$gambar', '$video')");

      $_SESSION['success'] = "Konten berhasil ditambahkan dan sedang menunggu validasi";
      header('location: kontributor.php');
    }

  }

?>