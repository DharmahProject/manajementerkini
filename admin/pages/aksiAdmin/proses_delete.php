<?php
	include "../koneksi.php";
	session_start();
	$id=$_POST['id'];
	$delete=mysqli_query($koneksi,"Delete FROM admin WHERE id_admin='$id'");
?>