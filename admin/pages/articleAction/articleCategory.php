<?php
//        pagination config start
include "../koneksi.php";
$sql = "SELECT * FROM galery where id_kategory_galery= '$id1' ORDER BY id desc"; // query silahkan disesuaikan
$result = mysqli_query($koneksi, $sql); // eksekusi query

$tcount = mysqli_num_rows($result); // jumlah total baris
$count = 0; // untuk paginasi

?>

 <?php
	while ($data = mysqli_fetch_array($result)) {
		
		?>
		<div style="float:left; margin:5px; border:solid 1px #ddd; padding:10px">
			<div style="margin-bottom:5px">
			<a class="fancybox" href="../images/galery/<?php echo $data ['gambar']; ?>" data-fancybox-group="gallery" title="<?php echo $data ['keterangan']; ?>">
					<img id="myImg" src="../images/galery/<?php echo $data ['gambar']; ?>" width="130px" height="50px">
			</a>
			</div>
			<div align="right">
			<a href="#" data-toggle="modal" data-target="#form-modal" id='<?php echo  $data['id']; ?>' class="open_modal btn btn-xs btn-default"><span class="glyphicon glyphicon-pencil"></span></a>
				<a href="#" onclick="confirm_modal('aksiGaleri/proses_delete.php?&id=<?php echo  $data['id']; ?>');" class="btn btn-xs btn-danger"><span class="glyphicon glyphicon-erase"></span></a>
			</div>	
				</div>
		
		<?php
	}
	?>

 
 