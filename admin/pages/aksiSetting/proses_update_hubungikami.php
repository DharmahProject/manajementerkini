
<?php
	include "../koneksi.php";
	$id=$_POST['id'];
	$about = $_POST['about'];
	$linkedin = $_POST['linkedin'];
	$telepon = $_POST['telepon'];
	$email = $_POST['email'];
	$facebook = $_POST['facebook'];
	$instagram = $_POST['instagram'];
	$twitter = $_POST['twitter'];
	
	
	
	$sql = "insert into t_hubungi_kami 
		(about, email, linkedin, instagram, facebook, twitter, whatsapp)
		values('$about', '$email', '$linkedin', '$instagram', '$facebook', '$twitter', '$telepon')";
		
	$sql1 = "UPDATE t_hubungi_kami 
			SET about = '$about' ,whatsapp = '$telepon',email = '$email',
				facebook = '$facebook',instagram = '$instagram', twitter = '$twitter', linkedin = '$linkedin'
			WHERE id = '$id'";
		
	
	if($id == null)
	{
		$insert = mysqli_query($koneksi, $sql) or die(mysqli_error());
	}
	else
	{
		$update = mysqli_query($koneksi, $sql1) or die(mysqli_error());
	}
	
?>