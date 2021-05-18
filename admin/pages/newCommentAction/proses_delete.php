<?php
	include "../koneksi.php";
	session_start();
	$id=$_POST['id'];
	$modal=mysqli_query($koneksi,"Delete FROM comments WHERE id_comment ='$id'") or die(mysqli_error());
	$modal1=mysqli_query($koneksi,"Delete FROM comments_detail WHERE id_comment ='$id'") or die(mysqli_error());

?>