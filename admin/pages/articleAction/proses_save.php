<?php
	include "../koneksi.php";
	session_start();
	$id = $_POST['id'];
	$category = $_POST['category'];
	$title = $_POST['title'];
	$author = $_POST['author'];
	$tags = $_POST['tags'];
	$kode = md5($_POST['title']);
	$date = date('Y-m-d H:i:s');
	$status = $_POST['status'];
	$imageCaption = $_POST['imageCaption'];
	$referencelink1 = $_POST['referencelink1'];
	$referencelink2 = $_POST['referencelink2'];
	$referencelink3 = $_POST['referencelink3'];
	$contentAdd = $_POST['contentAdd'];
	$picture=$_FILES["picture"]['name'];
	$created_by= $_POST['author'];
	$created_dt= date('Y-m-d H:i:s');
	$changed_by= $_POST['author'];
	$changed_dt= date('Y-m-d H:i:s');
	
	$sql="";
	
	if ($id == null || $id =='')
	{
		$sql="INSERT INTO article 
			(id_category, title, content, author, image_caption, date, status, picture, ref_link1, ref_link2, ref_link3, views, likes, comments, created_by, created_dt, tags, kode) VALUES
			('$category','$title', '$contentAdd' ,'$author','$imageCaption' , '$date', '$status', '$picture', '$referencelink1', '$referencelink2','$referencelink3', '0', '0', '0', '$created_by', '$created_dt','$tags','$kode')";
	}
	else{
		
		if ($picture ==null || $picture =='')
		{
			$sql = "UPDATE article SET
					id_category = '$category',
					title	=  '$title',
					content = '$contentAdd',
					author = '$author',
					tags = '$tags',
					status = '$status',
					image_caption = '$imageCaption',
					ref_link1 = '$referencelink1',
					ref_link2 = '$referencelink2', 
					ref_link3 = '$referencelink3', 
					changed_by	= '$changed_by',
					changed_dt = '$changed_dt'
				where id_article = '$id'
			";
		}
		else
		{
			$sql = "UPDATE article SET
					id_category = '$category',
					title	=  '$title',
					content = '$contentAdd',
					author = '$author',
					tags = '$tags',
					status = '$status',
					image_caption = '$imageCaption',
					picture = '$picture',
					ref_link1 = '$referencelink1',
					ref_link2 = '$referencelink2', 
					ref_link3 = '$referencelink3', 
					changed_by	= '$changed_by',
					changed_dt = '$changed_dt'
				where id_article = '$id'
			";
		}
	}
	
	$insert = mysqli_query($koneksi, $sql) or die(mysqli_error());
	copy($_FILES["picture"]["tmp_name"],"../../images/Article/".$picture);
	
	if($insert) 
	{
		echo "Process Save Article finish successfully";
	}
	else
	{
		echo "Database Error: Unable to create record.";
	}
?>