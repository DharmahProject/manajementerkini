<!-- Javascript untuk popup modal Edit--> 
<script type="text/javascript">
	var gId= null;
	var actionMode = null;
	
   $(document).ready(function () {
	   SearchSaranKomentar();
	   $('#dataTables').dataTable();
	   
   });
	
	function SearchSaranKomentar(){  
	   $.ajax({  
			url:"aksiSaranKomentar/select_sarankomentar.php",  
			method:"POST",  
			data:{	},  
			dataType:"text",  
			success:function(data){  
				 $('#viewSaranKomentar').html(data);
				 $('#dataTables').dataTable();
			} 
	   });  
    }
	
	function confirm_modalDelete(id){
		gId = id;
		$("#modal_delete").modal();
	}
	
	function confirm_modalUpdate(id){
		gId = id;
		$("#modal_nonaktif").modal();
	}
	function confirmDelete(){
	    $.ajax({  
			 url:"aksiSaranKomentar/proses_delete.php",  
			 method:"POST",  
			 data:{id: gId },  
			 dataType:"text",  
			 success:function(data){  
				  SearchSaranKomentar();  
				  $("#modal_delete").modal('hide');
				  showSuccessMesgGrowl("Saran dan Komentar berhasil dihapus");  
			 }  
		});  
		
	}
	
	function confirmUpdate(){
	    $.ajax({  
			 url:"aksiSaranKomentar/proses_update_status.php",  
			 method:"POST",  
			 data:{id: gId },  
			 dataType:"text",  
			 success:function(data){  
				  SearchSaranKomentar();  
				  $("#modal_nonaktif").modal('hide');
				  showSuccessMesgGrowl("Saran dan Komentar berhasil ditampilkan di halaman user");  
			 }  
		});  
	}
	
	function showSuccessMesgGrowl(mesg) {
		$.bootstrapGrowl(mesg, {
			type: 'success',
			allow_dismiss: true,
			align: 'center',
			delay: 10000
		})
	}
</script>
<?php
		error_reporting(0);
		session_start();
		//session_register("USERNAME");
		if(!isset($_SESSION['USERNAME'])|| !isset($_SESSION['NAMA']) || !isset($_SESSION['EMAIL'])) 
			{
				echo"<script>document.location.href='index.php';</script>";
			}
?>
	
<div class="row">
	<div class="col-lg-12">
		<div style="font-size:25px; padding:10px; 10px; 10px; 0px;"> Saran & Komentar <hr></div>
	</div>
</div>
<!-- /.row -->
<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				<div style='color:#fff; padding:2px 2px 2px 15px; border-radius:3px;background-color:#337ab7'>
					* Klik tombol "Aktifkan" agar komentar dapat tampil pada halaman user
				</div>
			</div>
			
			<div id="viewSaranKomentar">
			
			</div>
		</div>
	</div>
</div>
<!-- /.row -->


<!-- Modal Popup untuk delete--> 
<div id="modal_delete" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">
					Konfirmasi
				</h4>
			</div>
			<div class="modal-body">
				<input type="hidden" id="data-id">Apakah anda yakin ingin menghapus data ini?
			</div>
			<div class="modal-footer">
				  <button type="button" class="btn btn-danger btn-xs" onclick="confirmDelete();">Hapus</a>
				  <button type="button" class="btn btn-success btn-xs" data-dismiss="modal">Batal</button>
			</div>
		</div>
	</div>
</div>

<!-- Modal Popup untuk nonaktif--> 
<div id="modal_nonaktif" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">
					Konfirmasi
				</h4>
			</div>
			<div class="modal-body">
				<input type="hidden" id="data-id"> Are you sure you want to activate this comment??
			</div>
			<div class="modal-footer">
				  <button type="button" class="btn btn-danger btn-xs" onclick="confirmUpdate();">Aktifkan</a>
				  <button type="button" class="btn btn-success btn-xs" data-dismiss="modal">Batal</button>
			</div>
		</div>
	</div>
</div>
<!-- Modal Popup untuk nonaktif--> 