<?php
	include "../koneksi.php";
	session_start();
	$id=$_GET['id'];
	$modal=mysqli_query($koneksi,"Delete FROM utilitas WHERE id='$id'") or die(mysqli_error());
	
	if($modal) 
	{
		$_SESSION['pesan'] = 'delete';
			header('location:../dashboard.php?menu=utilitas');
	}
	else
	{
		echo "Database Error: Unable to create record.";
	}
?>