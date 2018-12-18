<?php 
    $judul = "judul";
    $kabupatenkota = "kabupatenkota";
    

    $koneksi = mysqli_connect("localhost","root","","konten");
// Check connection
if ($koneksi->connect_error) {
    die("Connection failed: " . $koneksi->connect_error);
} 


     /*$link = mysqli_connect("localhost", "root", "", "pekabencana");
     if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
} */
      /*$conn = mysql_connect($judul, $kabupatenkota);
   
   if(! $conn ) {
      die('Could not connect: ' . mysql_error());
   }*/
/*$conn = new mysqli("judul", "kabupatenkota");
      
      if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} P
*/
$sql = "SELECT judul, kabupatenkota FROM konten";
/*if(mysqli_query($link, $sql)){
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}*/
$result = $koneksi->query($sql);


if( $result ){
  /*while($row = mysqli_fetch_assoc($result)) {*/
    echo "judul: " . $row["Judul"]. " kabupatenkota: " . $row["Kabupatenkota"]. "<br>";
    /*echo "<tr>"
      <th><b>JUDUL<b></th>
      <th><b>KABUPATENKOTA<b></th>
      <th><b>KATEGORI<b></th>
      <th><b>AKSI<b></th>
    </tr>*/
   
        echo "<tr>" .$row["judul"]. "</tr>";
        echo "<tr>" .$row["kabupatenkota"]. "</tr>";
        echo "<tr>" .$row["katagori"]. "</tr>";
      
       
    }

$koneksi->close();


<?php 
    $judul = "judul";
    $kabupatenkota = "kabupatenkota";
    

    $koneksi = mysqli_connect("localhost","root","","konten");
// Check connection
if ($koneksi->connect_error) {
    die("Connection failed: " . $koneksi->connect_error);
} 


     /*$link = mysqli_connect("localhost", "root", "", "pekabencana");
     if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
} */
      /*$conn = mysql_connect($judul, $kabupatenkota);
   
   if(! $conn ) {
      die('Could not connect: ' . mysql_error());
   }*/
/*$conn = new mysqli("judul", "kabupatenkota");
      
      if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} P
*/
$sql = "SELECT judul, kabupatenkota FROM konten";
/*if(mysqli_query($link, $sql)){
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}*/

$result = mysqli_query($koneksi, $sql);

if( $result ){
  /*while($row = mysqli_fetch_assoc($result)) {*/
    echo  $row["judul"].  $row["kabupatenkota"]. "<br>";

    /*echo "<tr>"
      <th><b>JUDUL<b></th>
      <th><b>KABUPATENKOTA<b></th>
      <th><b>KATEGORI<b></th>
      <th><b>AKSI<b></th>
    </tr>*/
   
       
    }
    else {
    echo "0 results";
}
$koneksi->close();
    ?>
