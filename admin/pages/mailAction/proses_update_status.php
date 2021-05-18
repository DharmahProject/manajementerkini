<?php
	include "../koneksi.php";
	session_start();
	$id=$_POST['id'];
	$modal=mysqli_query($koneksi,"update saran_komentar set status='1' WHERE id='$id'") or die(mysqli_error());
?>