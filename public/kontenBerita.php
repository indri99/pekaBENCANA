<?php

$db = mysqli_connect('localhost', 'root', '', 'pekabencana');

$ambil_data = mysql_query("SELECT * FROM konten"); 

while($hasil_data = mysql_fetch_array($ambil_data)) {
	?>  
	<div class="row-fluid">  
		<img data-src="holder.js/300x200" alt="300x200" src="<?=$hasil_data['gambar'];?>" style="width: 300px; height: 200px;">  
		<div class="span4">  
		</div>  
		<div class="span8">  
			<h2><?=$hasil_data['judul'];?></h2>  
			<a href="index.php?link=lihatDetailBerita.php&id=<?=$hasil_data['id_berita'];?>" class="btn btn-primary">Baca Selengkapnya</a>   
			<p style="text-align:justify;"><?=substr($hasil_data['isi'],0,500);?></p>  
			<p><a href="#" class="btn btn-inverse">Diposkan pada <?=$hasil_data['tanggal'];?></a>?></p>  
		</div>     
	</div>  
	<?php
} 
?>