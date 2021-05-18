<?php
	// Include / load file koneksi.php
	include "../koneksi.php";	
	session_start();
	// Ambil data yang dikirim dari form
	$categoryname = $_POST['categoryname']; 
	
	$created_by = $_SESSION['NAMA'];
	$created_dt = date('Y-m-d');
    
    	
	$sql = "SELECT max(seq)seq FROM article_category "; // query silahkan disesuaikan
	$result=mysqli_query($koneksi,$sql);// eksekusi query
	$data = mysqli_fetch_array($result);
	$seq =$data['seq']+1;
	
	$insert = mysqli_query($koneksi,"INSERT INTO article_category 
			(category_name, seq, created_by, created_dt) VALUES ('$categoryname', '$seq', '$created_by', '$created_dt')") or die(mysqli_error());
	
	if($insert)
	{
	    echo"save";
	}
	else
	{
	    echo "gagal";
	}
	
?>