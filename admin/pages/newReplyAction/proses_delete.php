<?php
	include "../koneksi.php";
	session_start();
	$id=$_POST['id'];
	$modal1=mysqli_query($koneksi,"Delete FROM comments_detail WHERE id_detail ='$id'") or die(mysqli_error());

?>