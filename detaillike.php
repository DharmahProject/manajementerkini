<?php
	include "koneksi.php";					
	$id= $_POST['id'];
	error_reporting(0);
	session_start();
	
	$sqlL = "SELECT * FROM article a where kode= '$id'";
	$exec = mysqli_query($koneksi,$sqlL);
	
	$dataL = mysqli_fetch_array($exec);
	$date1StrL = date_format (new DateTime($dataL['date']), 'd-M-Y h:i');
	
	$id= $dataL['id_article'];
	
	$sqlC = "SELECT count(1) countss FROM comments where id_article= '$id' and status='1'";
	$execC = mysqli_query($koneksi,$sqlC);
	$dataC = mysqli_fetch_array($execC);
	
	
?>

	<i class="fa fa-calendar"></i> <?php echo $date1StrL ?> &nbsp;
	<i class="fa fa-user"></i> By : <?php echo $dataL['author'] ?> &nbsp;
	<i class="fa fa-eye"></i> <?php echo $dataL['views'] ?> Views &nbsp;
	<i class="fa fa-comments"></i> <?php echo $dataC['countss'] ?> Comments

