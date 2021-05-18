
<script type="text/javascript">
	var gId= null;
	var actionMode = null;
	
	$(document).ready(function() {
		SearchArticle();

		
		$(document).on('change', '.btn-file :file', function() {
		var input = $(this),
			label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
		input.trigger('fileselect', [label]);
		});

		$('.btn-file :file').on('fileselect', function(event, label) {
		    
		    var input = $(this).parents('.input-group').find(':text'),
		        log = label;
		    
		    if( input.length ) {
		        input.val(log);
		    } else {
		        if( log ) alert(log);
		    }
	    
		});
		function readURL(input) {
			
		    if (input.files && input.files[0]) {
		        var reader = new FileReader();
		        
		        reader.onload = function (e) {
		            $('#img-upload').attr('src', e.target.result);
					$('#img-upload').show();
		        }
		        
		        reader.readAsDataURL(input.files[0]);
		    }
		}

		$("#imgInp").change(function(){
		    readURL(this);
			
		}); 
		
		 $("#myModal").on("hidden.bs.modal",function(){
			myform.reset();
			$('#img-upload').hide();
		});

	});
	
	
	  function detail(id){
	   $.ajax({
			   url: "articleAction/modal_detail.php",
			   type: "POST",
			   data : {id: id,},
			   success: function (ajaxData){
				   $("#viewDetail").html(ajaxData);
				   $("#ModalDetail").modal('show');
				   
			   }
		   });
	};
	
	function edit(id){
		
		actionMode = 'EDIT';
		var newForm = jQuery('<form>', {
                'action': 'dashboard.php?menu=addarticle'
                        , 'method': 'post'
            })
			.append(jQuery('<input>', {
				 'name': 'action',
				 'value': actionMode,
				 'type': 'hidden'
			 }))
			 .append(jQuery('<input>', {
				 'name': 'idArticle',
				 'value': id,
				 'type': 'hidden'
			 }))
                 
        ;
        $(document.body).append(newForm);

        newForm.submit();
	};
	
	function SearchArticle(){  
	   $.ajax({  
			url:"articleAction/select_article.php",  
			method:"POST",  
			data:{	},  
			dataType:"text",  
			success:function(data){  
				 $('#viewData').html(data);
				 $('#dataTables').dataTable();
			} 
	   });  
    }
	
	function btnAdd(){
		actionMode = 'ADD';

		var newForm = jQuery('<form>', {
                'action': 'dashboard.php?menu=addarticle'
                        , 'method': 'post'
            })
			.append(jQuery('<input>', {
				 'name': 'action',
				 'value': actionMode,
				 'type': 'hidden'
			 }))
			 .append(jQuery('<input>', {
				 'name': 'id',
				 'value': '',
				 'type': 'hidden'
			 }))
                 
        ;
        $(document.body).append(newForm);

        newForm.submit();
	}
	
	function btnSave(){
		save();
	}
	
	function save(){  
	  
	   var id = $('#id').val();  
	   var judul = null; 
	   var isi= null;
	   var isiData= null;
	   
	   var narasumber = null; 
	   var tanggal = $('#tanggal').val(); 
	   var status = $('#status').val(); 
	   var input = null;
	   
	   
	   if (actionMode == "ADD"){
		   judul = $('#judul').val(); 
		   isiData= CKEDITOR.instances.isiAdd.getData();
		   narasumber = $('#narasumber').val(); 
		   input = document.getElementById("imgRenungan");
	   }
	   else{
		   judul = $('#judulEdit').val(); 
		   isiData= CKEDITOR.instances.isiEdit.getData();
		   narasumber = $('#narasumberEdit').val(); 
		   input = document.getElementById("imgRenunganEdit");
	   }   
	   file = input.files[0];	   
		
	   if(judul==''){
			showErrorMesgGrowl("Masukan judul");  
			return false; 
	   }
	   if(narasumber==''){
			showErrorMesgGrowl("Masukan narasumber");  
			return false; 
	   }
	   
	   if (actionMode=="ADD"){
			
			if(isiData=='' || isiData == null){
				showErrorMesgGrowl("Masukan isi Renungan Firman Tuhan");  
				return false; 
			}
			else{
				isiData = CKEDITOR.instances.isiAdd.getData();
			}

			if(file == '' || file == null){  
				showErrorMesgGrowl("Pilih Gambar");  
				return false;  
		   }
	   } 
	   else{
		   if(isiData=='' || isiData == null){
				showErrorMesgGrowl("Masukan isi Renungan Firman Tuhan");  
				return false; 
			}
			else
			{
				isiData = CKEDITOR.instances.isiEdit.getData();
			}
	   }
	   
	   formData= new FormData();
	   formData.append("id", id);
	   formData.append("judul", judul);
	   formData.append("isi", isiData);
	   formData.append("narasumber", narasumber);
	   formData.append("tanggal", tanggal);
	   formData.append("status", status);
	   formData.append("gambar", file);
	   
	   if (actionMode == "ADD")
	   {		   
		   $.ajax({  
				url:"articleAction/proses_save.php",  
				method:"POST",  
				data:{formData: formData},  
				data: formData,
				processData: false,
				contentType: false,  
				success:function(data)  
				{  
					 SearchArticle();
					 $("#ModalAdd").modal('hide');
					 clearAddEdit();
					 showSuccessMesgGrowl("Process Save Article finish successfully");  
				}  
		   });  
	   }
	   else{
		   
		    $.ajax({  
				url:"articleAction/proses_edit.php",  
				method:"POST",  
				data:{formData: formData},  
				data: formData,
				processData: false,
				contentType: false, 
				success:function(data)  
				{  
					 SearchArticle();
					 $("#ModalEdit").modal('hide');
					 clearAddEdit();
					 showSuccessMesgGrowl("Process Save Article finish successfully");  
				}  
		   })  
	   }
	};
	
	function showErrorMesgGrowl(mesg) {
		$.bootstrapGrowl(mesg, {
			type: 'danger',
			allow_dismiss: true,
			align: 'center',
			delay: 5000
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
	
	function confirm_modalDelete(id){
		gId = id;
		$("#modal_delete").modal();
	}
	
	function confirmDelete(){
	    $.ajax({  
			 url:"articleAction/proses_delete.php",  
			 method:"POST",  
			 data:{id: gId },  
			 dataType:"text",  
			 success:function(data){  
				  SearchArticle();  
				  $("#modal_delete").modal('hide');
				  showSuccessMesgGrowl("Process Delete Article finish successfully");  
			 }  
		});  
	}
	
		
</script>

<?php
		error_reporting(0);
		$db_link = mysqli_connect('localhost', 'root', '', 'bac');
		session_start();
		//session_register("USERNAME");
		if(!isset($_SESSION['USERNAME'])|| !isset($_SESSION['NAMA']) || !isset($_SESSION['EMAIL'])) 
			{
				echo"<script>document.location.href='index.php';</script>";
			}

       
?>

<div class="row">
	<div class="col-lg-12">
		<div style="font-size:25px; padding:10px; 10px; 10px; 0px;"> Article Data<hr></div>
	</div>

	<!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				<button class = "btn btn-primary btn-xs" onclick="btnAdd();"><i class="fa fa-plus"></i>  &nbsp;<span>  Add Data</span> </button>
			</div>
			
			<div id="viewData">
			
			</div>
			
		</div>
	</div>
</div>
<!-- /.row -->

	

	<div id="viewDetail">
		<?php include "articleAction/modal_detail.php"; ?>
	</div>

	<?php include "confirmDelete.php"; ?>
