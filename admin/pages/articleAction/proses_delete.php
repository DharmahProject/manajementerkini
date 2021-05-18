<?php
	include "../koneksi.php";
	session_start();
	$id=$_POST['id'];
	$delete=mysqli_query($koneksi,"Delete FROM article WHERE id_article='$id'") or die(mysqli_error());

?>