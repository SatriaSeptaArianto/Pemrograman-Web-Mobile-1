<?php 

	$koneksi = mysqli_connect('localhost', 'root', '', 'laptop');

	if ($koneksi->connect_error){
		die('Database Tidak Terhubung :'. $koneksi->connect_error);
	} 

 ?>

 