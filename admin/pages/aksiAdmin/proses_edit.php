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

	if ($foto != null)
	{
		$update = mysqli_query($koneksi,"update admin 
					set kd_admin = '$kode', 
						nm_admin = '$nama', 
						email = '$email', 
						password = '$password', 
						level = '$level', 
						foto = '$foto', 
						status = '$status', 
						telepon = '$telepon'
						where id_admin = '$id' ");
					copy($_FILES["foto"]["tmp_name"],"../../images/admin/".$foto);
	}
	else
	{
		$update = mysqli_query($koneksi,"update admin 
					set kd_admin = '$kode', 
						nm_admin = '$nama', 
						email = '$email', 
						password = '$password', 
						level = '$level', 
						status = '$status', 
						telepon = '$telepon'
						where id_admin = '$id' ");
	}
?>