<!-- Javascript untuk popup modal Edit--> 
<script type="text/javascript">
	var gId= null;
	var actionMode = null;
	
   $(document).ready(function () {
	   SearchMail();
	   $('#dataTables').dataTable();
	   
   });
   
   
   function confirmUpdate(id){
	    $.ajax({  
			 url:"mailAction/proses_update_status.php",  
			 method:"POST",  
			 data:{id: id },  
			 dataType:"text",  
			 success:function(data){  
				  SearchMail();  
				  showSuccessMesgGrowl("Process Update finish successfully");  
			 }  
		});  
	}
	
	function SearchMail(){  
	   $.ajax({  
			url:"mailAction/select_mail.php",  
			method:"POST",  
			data:{	},  
			dataType:"text",  
			success:function(data){  
				 $('#viewMail').html(data);
				 $('#dataTables').dataTable();
			} 
	   });  
    }
	
	function showSuccessMesgGrowl(mesg) {
		$.bootstrapGrowl(mesg, {
			type: 'success',
			allow_dismiss: true,
			align: 'center',
			delay: 5000
		});
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
		<div style="font-size:25px; padding:10px; 10px; 10px; 0px;"> Mail Inbox <hr></div>
	</div>
</div>
<!-- /.row -->
<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				<div style='color:#fff; padding:2px 2px 2px 15px; border-radius:3px;background-color:#337ab7'>
					* Click &nbsp; <i class="fa fa-eye-slash" aria-hidden="true"></i> &nbsp; button to mark as read
				</div>
			</div>
			
			<div id="viewMail">
			
			</div>
		</div>
	</div>
</div>
<!-- /.row -->
