<?php
include "koneksi.php";
session_start();
$comment = $_POST['comment'];
$nameComment = $_POST['nameComment'];
$emailComment = $_POST['emailComment'];
$idComment = $_POST['idComment'];
$idArticle = $_POST['idArticle'];
$idMember = $_POST['idMember'];
$date = date('Y-m-d H:i:s');
$action = $_POST['action'];

$sql = '';
$email = '';

$sql1 = "select id_member from members where email ='$emailComment'";
$select1 = mysqli_query($koneksi, $sql1);

$data1 = mysqli_fetch_array($select1);

$email = $data1['id_member'];


$sqlUpdate = "Update article set comments = comments +1 
					where id_article = '$idArticle'
				";

$sqlInsertMember = "insert into members(email, password, name, image, status, created_dt) values
						('$emailComment','1','$nameComment','img.png','1', '$date')";

if ($email == null or $email == '') {
	$insertMamber = mysqli_query($koneksi, $sqlInsertMember);
}

$sql2 = "select id_member from members where email ='$emailComment'";
$select2 = mysqli_query($koneksi, $sql2);

$data2 = mysqli_fetch_array($select2);

$email2 = $data2['id_member'];


if ($action == '') {

	$sql = "INSERT INTO comments 
				(id_member, id_article, comment, status, new_status) VALUES
				('$email2','$idArticle', '$comment','1','0')";
} else {
	$sql = "INSERT INTO comments_detail 
				(id_comment, id_member, id_article, comment, comment_date, status) VALUES
				('$idComment', '$email2','$idArticle', '$comment' ,'$date', '1')";
}

$insert = mysqli_query($koneksi, $sql);

$update = mysqli_query($koneksi, $sqlUpdate);

if ($insert) {
	echo "Process Save Article finish successfully";
} else {
	echo "Database Error: Unable to create record.";
}
