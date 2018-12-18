<?php
$koneksi = mysqli_connect("localhost","root","","pekabencana");

if ($koneksi->connect_error) {
  die("Connection failed: " . $koneksi->connect_error);
}

$sql = "SELECT * FROM konten WHERE id = 11";
$result = mysqli_query($koneksi, $sql);

if( mysqli_num_rows($result) > 0 ){
  while($row = mysqli_fetch_assoc($result)){
    $judul = $row["judul"];
    $isi = $row["isi"];
  }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>PEKA BENCANA</title>
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans|Candal|Alegreya+Sans">
  <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/imagehover.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
  <!--Banner-->
  <div class="banner">
    <div class="bg-color">
      <div class="container">
        <div class="row">
          <div class="banner-text text-center">
            <div class="text-border">
              <h2 class="text-dec">PEKA BENCANA</h2>
            </div>
            <div class="intro-para text-center quote">
              <p class="big-text" style="font-size: 75px; color: black;">
                <b>PORTAL EDUKASI <br>
                KESIAPSIAGAAN BENCANA <br></b>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--/ Banner-->
  <!--/ Isi-->
  <div class="intro-para text-center quote">
    <p class="big-text" style="font-size: 55px; color: black; margin-left: 10%; margin-right: 10%; text-align: center;">
      <b><?php echo $judul;?></b>
     </p>
  </div>
  <div id="isi" class="section-padding" style="font-size: 35px; color: black; margin-left: 10%; margin-right: 10%; text-align: center;">
    <?=$isi;?>
  </div>
  <!--/ Isi-->
  <!--Footer-->
  <footer id="footer" class="footer">
    <div class="container text-center">
      <!-- End newsletter-form -->
      ©2018 Universitas Islam Indonesia<br>
      Jalan Kaliurang km. 14,5 Sleman<br>
      Yogyakarta 55584<br>
    </div>
  </footer>
  <!--/ Footer-->

  <script src="js/jquery.min.js"></script>
  <script src="js/jquery.easing.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/custom.js"></script>
  <script src="contactform/contactform.js"></script>

</body>

</html>