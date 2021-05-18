
<?php
	include "../koneksi.php";
	$id=$_POST['id'];
	$sambutan = $_POST['sambutan'];
	$ketgambar1 = $_POST['ketgambar1'];
	$ketgambar2 = $_POST['ketgambar2'];
	$ketgambar3 = $_POST['ketgambar3'];
	$ketgambar4 = $_POST['ketgambar4'];
	$judulayatemas = $_POST['judulAyatEmas'];
	$ayatemas = $_POST['ayatEmas'];
	$sambutan = $_POST['sambutan'];
	
	$foto=$_FILES["foto"]['name'];
	$gambar1=$_FILES["gambar1"]['name'];
	$gambar2=$_FILES["gambar2"]['name'];
	$gambar3=$_FILES["gambar3"]['name'];
	$gambar4=$_FILES["gambar4"]['name'];
	
	
		$modal=mysqli_query($koneksi,"UPDATE t_home 
			SET foto ='$foto', 
				gambar1 ='$gambar1', 
				gambar2 ='$gambar2', 
				gambar3 ='$gambar3', 
				gambar4 ='$gambar4', 
				sambutan ='$sambutan', ket_gambar1 ='$ketgambar1',ket_gambar2 ='$ketgambar2',ket_gambar3 ='$ketgambar3',ket_gambar4 ='$ketgambar4'
				,judul_ayatemas ='$judulayatemas', ayat_emas ='$ayatemas'
			WHERE id = '$id'")or die(mysqli_error());
			
		copy($_FILES["foto"]["tmp_name"],"../../images/home/".$foto);
		copy($_FILES["gambar1"]["tmp_name"],"../../images/home/".$gambar1);
		copy($_FILES["gambar2"]["tmp_name"],"../../images/home/".$gambar2);
		copy($_FILES["gambar3"]["tmp_name"],"../../images/home/".$gambar3);
		copy($_FILES["gambar4"]["tmp_name"],"../../images/home/".$gambar4);
	
	
?>