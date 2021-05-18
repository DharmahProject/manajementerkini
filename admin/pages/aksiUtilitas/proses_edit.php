
<?php
	include "../koneksi.php";
	session_start();
	$id=$_POST['id'];
	$nama = $_POST['nama'];
	$isi = $_POST['isi'];
	$changed_by= 'Dharma';
	$changed_dt= date('Y-m-d');
	$modal=mysqli_query($koneksi,"UPDATE utilitas SET nama = '$nama', isi = '$isi',changed_by = '$changed_by',changed_dt = '$changed_dt' WHERE id = '$id'")or die(mysqli_error());
	
	if($modal) 
	{
		$_SESSION['pesan'] = 'update';
			header('location:../dashboard.php?menu=utilitas');
	}
	else
	{
		echo "Database Error: Unable to create record.";
	}
?>
