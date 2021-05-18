<?php
$db_link = mysqli_connect('localhost', 'manh8362_artikel_user', 'krisbanarto001', 'manh8362_artikel');
session_start();

$USERNAME = $_POST['username'];
$PASSWORD = $_POST['password'];

$query = "SELECT * FROM admin WHERE email='$USERNAME' and password='$PASSWORD' and status=1";
$result = mysqli_query($db_link, $query);

$data = mysqli_fetch_array($result);


if (mysqli_num_rows($result) > 0) {
	/*session_is_registered('USERNAME');  */
	$_SESSION['USERNAME'] = $data[1];
	$_SESSION['EMAIL'] = $data[3];
	$_SESSION['PASSWORD'] = $data[4];
	$_SESSION['NAMA'] = $data[2];
	$_SESSION['LEVEL'] = $data[5];
  echo "success";
}
else if ($USERNAME=='' or $PASSWORD=='')
{

     echo "error";
}
else 
{
     echo "error";
}
