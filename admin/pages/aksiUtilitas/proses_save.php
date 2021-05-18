<?php
	include "../koneksi.php";
	session_start();
	$nama = $_POST['nama'];
	$isi = $_POST['isi'];
	$created_by= 'Dharma';
	$created_dt= date('Y-m-d');
	$modal = mysqli_query($koneksi,"INSERT INTO utilitas 
			(nama, isi, created_by, created_dt) VALUES ('$nama','$isi', '$created_by', '$created_dt')") or die(mysqli_error());
	
	if($modal) 
	{
		$_SESSION['pesan'] = 'update';
			header('location:../dashboard.php?menu=utilitas');
	}
	else
	{
		echo "Database Error: Unable to create record.";
	}
?>