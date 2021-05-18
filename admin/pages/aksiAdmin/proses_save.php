<?php
	include "../koneksi.php";
	session_start();
	$id = $_POST['id'];
	$kode = $_POST['kode'];
	$nama = $_POST['nama'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$telepon = $_POST['telepon'];
	$level = $_POST['level'];
	$status = $_POST['status'];
	$foto=$_FILES["foto"]['name'];
	$created_by= 'Dharma';
	$created_dt= date('Y-m-d');
	$insert = mysqli_query($koneksi,"INSERT INTO admin 
			(kd_admin, nm_admin, email, password, level, foto, status, telepon) VALUES ('$kode','$nama', '$email', '$password','$level','$foto', '$status', '$telepon')") or die(mysqli_error());
				copy($_FILES["foto"]["tmp_name"],"../../images/admin/".$foto);
	
?>