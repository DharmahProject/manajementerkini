<?php
$db_link = mysqli_connect('localhost', 'root', '', 'bac');
session_start();

$email=$_POST['username'];
$kode=$_POST['kduser'];
$telp=$_POST['telp'];
$pwd=$_POST['pwd'];
$pwd1=$_POST['pwd1'];

	if($pwd != $pwd1) 
	{
		$_SESSION['pesan'] = 'passworderror';
		header('location:forgotpassword.php');
	}
	else
	{
		$query="SELECT * FROM admin WHERE email='$email' and kd_admin='$kode' and telepon = '$telp'";
	
		$result=mysqli_query($db_link, $query);

		$data=mysqli_fetch_array($result);
		
		if(mysqli_num_rows($result)>0)
		{
			$_SESSION['pesan']='sukses';
			$update = mysqli_query($db_link, "UPDATE admin set password ='$pwd' WHERE email='$email' and kd_admin='$kode' and telepon = '$telp'");
			header('location:forgotpassword.php');
		}
		else 
		{
			$_SESSION['pesan']='salah';
			header('location:forgotpassword.php');
		}
	}

?>