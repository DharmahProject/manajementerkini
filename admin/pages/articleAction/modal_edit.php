
<?php
    include "../koneksi.php";
	$id=$_POST['id'];
	$modal=mysqli_query($koneksi,"SELECT * FROM article WHERE id_article='$id'");
	$r=mysqli_fetch_array($modal);
	
	echo json_encode($r);
?>
