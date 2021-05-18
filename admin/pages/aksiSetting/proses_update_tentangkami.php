
<?php
	include "../koneksi.php";
	$id=$_POST['id'];
	$sejarah = $_POST['sejarah'];
	$visi = $_POST['visi'];
	$misi = $_POST['misi'];
	$gambar=$_FILES["image"]['name'];
	
	if ($gambar != null)
	{
		$modal=mysqli_query($koneksi,"UPDATE t_tentang_kami 
			SET gambar ='$gambar', sejarah ='$sejarah', misi ='$misi',visi ='$visi'
			WHERE id = '$id'")or die(mysqli_error());
		copy($_FILES["image"]["tmp_name"],"../../images/tentangkami/".$gambar);
	}
	else
	{
	
		$modal=mysqli_query($koneksi,"UPDATE t_tentang_kami 
			SET sejarah ='$sejarah', misi ='$misi',visi ='$visi'
			WHERE id = '$id'")or die(mysqli_error());
	}
	
?>