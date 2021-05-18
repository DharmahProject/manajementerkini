<?php
	include "../koneksi.php";
	session_start();
	$id=$_POST['id'];
	$modal=mysqli_query($koneksi,"update comments_detail set status='1' WHERE id_detail='$id'") or die(mysqli_error());
?>