<?php
	include "koneksi.php";
	session_start();
	$user = $_POST['user'];
	$email = $_POST['email'];
	$message = $_POST['message'];
	
	$created_dt= date('Y-m-d');
	$insert = mysqli_query($koneksi,"INSERT INTO saran_komentar 
			(nama, email, komentar, tanggal, status) VALUES ('$user','$email', '$message', '$created_dt','1')") or die(mysqli_error());
	
?>