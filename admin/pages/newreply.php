<!-- Javascript untuk popup modal Edit--> 
<script type="text/javascript">
	var gId= null;
	var actionMode = null;
	
   $(document).ready(function () {
	   SearchNewReply();
	   $('#dataTables').dataTable();
	   
   });
	
	function SearchNewReply(){  
	   $.ajax({  
			url:"newReplyAction/select_newcomment.php",  
			method:"POST",  
			data:{	},  
			dataType:"text",  
			success:function(data){  
				 $('#viewNewComment').html(data);
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
			 url:"newReplyAction/proses_delete.php",  
			 method:"POST",  
			 data:{id: gId },  
			 dataType:"text",  
			 success:function(data){  
				  SearchNewReply();  
				  $("#modal_delete").modal('hide');
				  showSuccessMesgGrowl("Process Delete New Comment Reply finish successfully");  
			 }  
		});  
		
	}
	
	function confirmUpdate(){
	    $.ajax({  
			 url:"newReplyAction/proses_update_status.php",  
			 method:"POST",  
			 data:{id: gId },  
			 dataType:"text",  
			 success:function(data){  
				  SearchNewReply();  
				  $("#modal_nonaktif").modal('hide');
				  showSuccessMesgGrowl("New Comment Reply Successfully displayed on the user page");  
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
		<div style="font-size:25px; padding:10px; 10px; 10px; 0px;"> New Comment Reply <hr></div>
	</div>
</div>
<!-- /.row -->
<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				<div style='color:#fff; padding:2px 2px 2px 15px; border-radius:3px;background-color:#337ab7'>
					* Click the "Show" button so that comments can appear on the user's page
				</div>
			</div>
			
			<div id="viewNewComment">
			
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
					Confirmation
				</h4>
			</div>
			<div class="modal-body">
				<input type="hidden" id="data-id">Are you sure you want to delete this data?
			</div>
			<div class="modal-footer">
				  <button type="button" class="btn btn-danger btn-xs" onclick="confirmDelete();">Yes</a>
				  <button type="button" class="btn btn-success btn-xs" data-dismiss="modal">No</button>
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
					Confirmation
				</h4>
			</div>
			<div class="modal-body">
				<input type="hidden" id="data-id"> Are you sure you want to activate this comment??
			</div>
			<div class="modal-footer">
				  <button type="button" class="btn btn-danger btn-xs" onclick="confirmUpdate();">Yes</a>
				  <button type="button" class="btn btn-success btn-xs" data-dismiss="modal">No</button>
			</div>
		</div>
	</div>
</div>
<!-- Modal Popup untuk nonaktif--> 