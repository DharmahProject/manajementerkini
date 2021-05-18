<?php
    include "../koneksi.php";
	$id=$_POST['id'];
	$modal=mysqli_query($koneksi,"SELECT * FROM article WHERE id_article='$id'");
	$r=mysqli_fetch_array($modal);
?>
<div id="ModalDetail" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">

			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h4 class="modal-title" id="myModalLabel">Content Detail</h4>
			</div>

			<div class="modal-body">
				
					
				<div class="form-group" style="padding-bottom: 20px;">
				   <?php echo $r['content']; ?>
				</div>
					
				<div style="font-size:11px">
					<b>Ref. Link 1 :</b> <?php echo $r['ref_link1']; ?> <br>
					<b>Ref. Link 2 :</b> <?php echo $r['ref_link2']; ?> <br>
					<b>Ref. Link 3 :</b> <?php echo $r['ref_link3']; ?> <br><br>
				</div>
			<div class="modal-footer">
			</div>

			</div>

		   
		</div>
	</div>
</div>