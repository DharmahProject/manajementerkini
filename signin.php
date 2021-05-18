<?php

include 'koneksi.php';
session_start();

$action=$_POST['action'];
$userSI=$_POST['userSI'];
$passSI=md5($_POST['passSI']);


$userSU=$_POST['userSU'];
$nameSU=$_POST['nameSU'];
$passSU=md5($_POST['passSU']);
$date= date('Y-m-d H:i:s');


$userG = $_POST['userG'];
$passG = $_POST['passG'];
$nameG = $_POST['nameG'];
$imageG= $_POST['imageG'];

$code = $_POST['passSU'];

if($action == 'signIn')
{
	$query="SELECT *, 'sukses' pesan FROM members WHERE email='$userSI' and password='$passSI'";

	$query1="SELECT 'Email or Password is invalid' as pesan";

	$result=mysqli_query($koneksi, $query);
	$result1=mysqli_query($koneksi, $query1);

	$data=mysqli_fetch_array($result);
	$data1=mysqli_fetch_array($result1);

		
	if(mysqli_num_rows($result)>0)
	{
		/*session_is_registered('USERNAME');  */
		$_SESSION['EMAIL']=$data[1];
		$_SESSION['NAME']=$data[2];
		$_SESSION['IMAGE']=$data[4];
		
		echo json_encode($data);
	}
	else 
	{
		echo json_encode($data1);
	}
}
else if($action == 'signUp')
{
	
	$querySU="SELECT * FROM members WHERE email='$userSU'";
	$resultSU=mysqli_query($koneksi, $querySU);
	$dataSU = mysqli_fetch_array($resultSU);
	
	$dataSU1="";
	$querySU1="";
	$resultSU1="";
	$sql="";
		
	if(mysqli_num_rows($resultSU)>0)
	{
		$querySU1="SELECT 'Email has been registered' as pesan";
		$resultSU1=mysqli_query($koneksi, $querySU1);
		$dataSU1 = mysqli_fetch_array($resultSU1);
		
		echo json_encode($dataSU1);
	}
	else 
	{
		$querySU1="SELECT 'Registration success, please check an email for confirmation!' as pesan";
		$resultSU1=mysqli_query($koneksi, $querySU1);
		$dataSU1 = mysqli_fetch_array($resultSU1);
		
		
		/*
		$to      = $email; // Send email to our user
		$subject = 'BISMAPRO Signup | Verification'; // Give the email a subject 
		$message = '
		 
		Thanks for signing up!
		Your account has been created, you can login with the following credentials after you have activated your account by pressing the url below.
		 
		------------------------
		Email/Username: '.$userSU.'
		Password: '.$code.'
		------------------------
		 
		Please click this link to activate your account:
		http://www.bismapro.com/verify.php?email='.$userSU.'&code='.$passSU.'
		 
		'; // Our message above including the link
							 
		$headers = 'From:noreply@bismapro.com' . "\r\n"; // Set from headers
		mail($to, $subject, $message, $headers); // Send our email
		*/
		
		echo json_encode($dataSU1);
		
			
		$sql="INSERT INTO members
			(email, password, name, image, status, created_dt) VALUES
			('$userSU','$passSU', '$nameSU','img1.png', '1','$date')
		";
		
		
		$insert = mysqli_query($koneksi, $sql) or die(mysqli_error());
	}
}
else
{
	
	$queryX="SELECT *, 'sukses' pesan FROM members WHERE email='$userG'";
	$resultX=mysqli_query($koneksi, $queryX);
	$dataX=mysqli_fetch_array($resultX);
	
	if(mysqli_num_rows($resultX)>0)
	{
		$_SESSION['EMAIL']=$dataX[1];
		$_SESSION['NAME']=$dataX[3];
		$_SESSION['IMAGE']=$dataX[4];
		
		echo json_encode($dataX);
	}
	else 
	{
		$_SESSION['EMAIL']=$userG;
		$_SESSION['NAME']=$nameG;
		$_SESSION['IMAGE']=$imageG;
		
		$sqlG="INSERT INTO members
			(email, password, name, image, status, created_dt) VALUES
			('$userG','$passG', '$nameG','$imageG', '1','$date')
		";
		$insertG = mysqli_query($koneksi, $sqlG) or die(mysqli_error());
			
		$queryZ="SELECT 'sukses' as pesan";
		$resultZ=mysqli_query($koneksi, $queryZ);
		
		$dataZ=mysqli_fetch_array($resultZ);
		
		echo json_encode($dataZ);
			
		
		
	}
}


?>