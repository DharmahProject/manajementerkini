<?php
	include "../koneksi.php";
	session_start();
	$id=$_POST['id'];
	$modal=mysqli_query($koneksi,"update comments set new_status='1' WHERE id_comment='$id'") or die(mysqli_error());
?>