<?php
	include "../koneksi.php";
	session_start();	
	$id=$_POST['id'];
	$delete=mysqli_query($koneksi,"Delete FROM article_category WHERE id_category='$id'");
	
?>