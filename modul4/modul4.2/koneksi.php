<?php 
	$koneksi = mysqli_connect('localhost','root','','pemilu');

	if ($koneksi->connect_error) 
	{
		die('Database Tidak Terhubung :'. $koneksi->connect_error);
	} 

 ?>

 