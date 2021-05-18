
<?php
	include "../koneksi.php";
	session_start();
	$id=$_POST['id'];
	$namasumber = $_POST['narasumber'];
	$isi = $_POST['isi'];
	$status = $_POST['status'];
	$gambar=$_FILES["gambar"]['name'];
	$changed_by= 'Dharma';
	$changed_dt= date('Y-m-d');
	
	if ($gambar != null)
	{
		$update=mysqli_query($koneksi,"UPDATE renungan_firman SET nara_sumber = '$namasumber', status='$status', isi = '$isi',changed_by = '$changed_by',changed_dt = '$changed_dt', gambar='$gambar' WHERE id = '$id'")or die(mysqli_error());
		copy($_FILES["gambar"]["tmp_name"],"../../images/renunganfirman/".$gambar);
	}
	else
	{
		$update=mysqli_query($koneksi,"UPDATE renungan_firman SET nara_sumber = '$namasumber', status='$status', isi = '$isi',changed_by = '$changed_by',changed_dt = '$changed_dt' WHERE id = '$id'")or die(mysqli_error());
		
	}

	if($update) 
	{
		$_SESSION['pesan'] = 'update';
		header('location:../dashboard.php?menu=renunganfirman');
	}
	else
	{
		echo "Database Error: Unable to create record.";
	}
?>