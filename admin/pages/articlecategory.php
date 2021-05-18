<script type="text/javascript">
	var gId= null;
	var actionMode = null;
	
   $(document).ready(function () {
	   SearchArticleCategory();
	   $('#dataTables').dataTable();
	   
   });
	
	function SearchArticleCategory(){  
	   $.ajax({  
			url:"articleCategory/select_articlecategory.php",  
			method:"POST",  
			data:{	},  
			dataType:"text",  
			success:function(data){  
				 $('#viewArticleCategory').html(data);
				 $('#dataTables').dataTable();
			} 
	   });  
    }
	
	function clearAddEdit(){
		$('#categoryName').val(''); 
	}
	
	function btnAdd(){
		actionMode = 'ADD';
		clearAddEdit();
		$("#ModalAdd").modal();
	}
	
	function btnBatal(){
		clearAddEdit();
	}
	
	function btnSave(){
		save();
	}
	
	function save(){  
	  
	   var id = $('#id').val(); 
	   var categoryname = $('#categoryName').val(); 
	   
	  
	   if(categoryname == '')  
	   {  
			showErrorMesgGrowl("Category Name should not be null");  
			return false;  
	   }
	   
	   if (actionMode == "ADD")
	   {		   
		   $.ajax({  
				url:"articleCategory/proses_save.php",  
				method:"POST",  
				data:{categoryname:categoryname},  
				dataType:"text",  
				success:function(data)  
				{  
					 SearchArticleCategory();
					 $("#ModalAdd").modal('hide');
					 clearAddEdit();
					 showSuccessMesgGrowl("Process Save Article Category finish successfully");  
				}  
		   });  
	   }
	   else{
		   
		    $.ajax({  
				url:"articleCategory/proses_edit.php",  
				method:"POST",  
				data:{id:id, categoryname:categoryname},  
				dataType:"text",  
				success:function(data)  
				{  
					 SearchArticleCategory();
					 $("#ModalAdd").modal('hide');
					 clearAddEdit();
					 showSuccessMesgGrowl("Process Update Article Category finish successfully");  
				}  
		   })  
	   }
	};
	
	function showErrorMesgGrowl(mesg) {
		$.bootstrapGrowl(mesg, {
			type: 'danger',
			allow_dismiss: true,
			align: 'center',
			delay: 10000
		});
	}
	
	function showSuccessMesgGrowl(mesg) {
		$.bootstrapGrowl(mesg, {
			type: 'success',
			allow_dismiss: true,
			align: 'center',
			delay: 10000
		});
	}

	function confirm_modalDelete(id){
		gId = id;
		$("#modal_delete").modal();
	}
	
	function editData(id, categoryName)
	{
	   actionMode = 'EDIT';
	   
	   $("#ModalAdd").modal();
	   $('#id').val(id); 
	   $('#categoryName').val(categoryName); 
	}
	function confirmDelete(){
	    $.ajax({  
			 url:"articleCategory/proses_delete.php",  
			 method:"POST",  
			 data:{id: gId },  
			 dataType:"text",  
			 success:function(data){  
				  SearchArticleCategory();  
				  $("#modal_delete").modal('hide');
				  showSuccessMesgGrowl("Process Delete Article Category finish successfully");  
			 }  
		});  
		
	}
	
</script>

<?php
	error_reporting(0);
	include "../koneksi.php";
	session_start();
	
	if(!isset($_SESSION['USERNAME'])|| !isset($_SESSION['NAMA']) || !isset($_SESSION['EMAIL'])) 
	{
		echo"<script>document.location.href='index.php';</script>";
	}    
?>

<div class="row">
	<div class="col-lg-12">
		<div style="font-size:25px; padding:10px; 10px; 10px; 0px;"> Article Category <hr></div>
	</div>
</div>
<!-- /.row -->
<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				<button class = "btn btn-primary btn-xs" onclick="btnAdd();"> <i class="fa fa-plus"></i>  &nbsp;<span>  Add Data</span>  </button>
			</div>
			
			<div id="viewArticleCategory">
			
			</div>
		</div>
	</div>
</div>


<?php include "articleCategory/modal_addedit.php"; ?>

<?php include "confirmDelete.php"; ?>
