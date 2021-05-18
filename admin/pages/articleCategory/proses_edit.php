<?php
	// Include / load file koneksi.php
	include "../koneksi.php";
	session_start();
	// Ambil data yang dikirim dari form
	$id = $_POST['id']; 
	$categoryname = $_POST['categoryname']; 
	$changed_by = $_SESSION['NAMA'];
	$changed_dt = date('Y-m-d');


	$update = mysqli_query($koneksi,"Update article_category 
			set category_name='$categoryname', changed_by='$changed_by',changed_dt= '$changed_dt' WHERE id_category = '$id'") or die(mysqli_error());
	
?>