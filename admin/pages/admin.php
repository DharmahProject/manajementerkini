
<script type="text/javascript">
	var gId= null;
	var actionMode = null;
	
	$(document).ready(function() {
		SearchAdmin();
	    $('#dataTables').dataTable();

	});
	
	function SearchAdmin(){  
	   $.ajax({  
			url:"aksiAdmin/select_admin.php",  
			method:"POST",  
			data:{	},  
			dataType:"text",  
			success:function(data){  
				 $('#viewAdmin').html(data);
				 $('#dataTables').dataTable();
			} 
	   });  
    }
	
	function clearAddEdit(){
		$('#kode').val(''); 
		$('#nama').val(''); 
		$('#email').val(''); 
		$('#password').val(''); 
		$('#kpassword').val(''); 
		$('#telepon').val(''); 
		$('#level').val(''); 
		$('#status').val(''); 
		$('#img-admin').attr('src', "");
	    $('#img-admin').hide();
	    $('#txtadmin').val('');
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
	   var kode = $('#kode').val(); 
	   var nama = $('#nama').val(); 
	   var email = $('#email').val(); 
	   var password = $('#password').val(); 
	   var kpassword = $('#kpassword').val(); 
	   var telepon = $('#telepon').val(); 
	   var level = $('#level').val(); 
	   var status = $('#status').val(); 
	   
	   var input = document.getElementById("imgAdmin");	 
		file = input.files[0];	   
	   
	  
	   if(kode == ''){  
			showErrorMesgGrowl("Admin Code should not be null");  
			return false;  
	   }
	   else if(nama==''){
			showErrorMesgGrowl("Admin Name should not be null");  
			return false; 
	   }
	   else if(email==''){
			showErrorMesgGrowl("Email should not be null");  
			return false; 
	   }
	   else if(password==''){
			showErrorMesgGrowl("Password should not be null");  
			return false; 
	   }
	   else if(kpassword==''){
			showErrorMesgGrowl("Password Confirmation should not be null");  
			return false; 
	   }
	   else if(password != kpassword){
			showErrorMesgGrowl("Password and Password Corfirmation is not match!!");  
			return false; 
	   }
	   else if(telepon==''){
			showErrorMesgGrowl("Telephone should not be null");  
			return false; 
	   }
	   else if(level==''){
			showErrorMesgGrowl("Please choose admin level");  
			return false; 
	   }
	   else if(status==''){
			showErrorMesgGrowl("Please choose admin status");  
			return false; 
	   }
	   if (actionMode == "ADD")
	   {
		   if(file == '' || file == null){  
				showErrorMesgGrowl("Please choose admin photo");  
				return false;  
		   }
	   }
	   
	   formData= new FormData();
	   formData.append("id", id);
	   formData.append("kode", kode);
	   formData.append("nama", nama);
	   formData.append("email", email);
	   formData.append("password", password);
	   formData.append("telepon", telepon);
	   formData.append("level", level);
	   formData.append("status", status);
	   formData.append("foto", file);
	   
	   if (actionMode == "ADD")
	   {		   
		   $.ajax({  
				url:"aksiAdmin/proses_save.php",  
				method:"POST",  
				data:{formData: formData},  
				data: formData,
				processData: false,
				contentType: false,  
				success:function(data)  
				{  
					 SearchAdmin();
					 $("#ModalAdd").modal('hide');
					 clearAddEdit();
					 showSuccessMesgGrowl("Process Save Admin finish successfully");  
				}  
		   });  
	   }
	   else{
		   
		    $.ajax({  
				url:"aksiAdmin/proses_edit.php",  
				method:"POST",  
				data:{formData: formData},  
				data: formData,
				processData: false,
				contentType: false, 
				success:function(data)  
				{  
					 SearchAdmin();
					 $("#ModalAdd").modal('hide');
					 clearAddEdit();
					 showSuccessMesgGrowl("Process Updaye Admin finish successfully");  
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
	
	function editData(id, kode, nama, email, password, level, foto, status, telepon)
	{
	   actionMode = 'EDIT';
	   $("#ModalAdd").modal();
	   $('#id').val(id); 
	   $('#kode').val(kode); 
	   $('#nama').val(nama); 
	   $('#email').val(email); 
	   $('#password').val(password); 
	   $('#kpassword').val(password); 
	   $('#level').val(level); 
	   $('#foto').val(foto); 
	   $('#status').val(status); 
	   $('#telepon').val(telepon); 
	   $('#img-admin').attr('src', "../images/admin/"+foto);
	   $('#img-admin').show();
	   $('#txtadmin').val(foto);
	   
	}
	
	function confirmDelete(){
	    $.ajax({  
			 url:"aksiAdmin/proses_delete.php",  
			 method:"POST",  
			 data:{id: gId },  
			 dataType:"text",  
			 success:function(data){  
				  SearchAdmin();  
				  $("#modal_delete").modal('hide');
				  showSuccessMesgGrowl("Process Delete Admin finish successfully");  
			 }  
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
		<div style="font-size:25px; padding:10px; 10px; 10px; 0px;"> Admin Data <hr></div>
	</div>
	
</div>
<!-- /.row -->
	
<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				<!-- Button trigger modal -->
				<?php
				$data = mysqli_fetch_array($result);
				if ($_SESSION['LEVEL']== "Super Admin")
				{
					echo"<button class = 'btn btn-primary btn-xs' onclick='btnAdd();'> <i class='fa fa-plus'></i>  &nbsp;<span>  Add Data</span> </button>";
				}
				?>
				<span style="color:#fff; padding:4px; font-size:11px; border-radius:3px;text-align:right; margin-left:15px; background-color:#5cb85c"> 
				* Contact Super Admin, if you want to add new data.</span>
				
			</div>
			<div id="viewAdmin">
				
			</div>
		</div>
	</div>
</div>

<?php include "aksiAdmin/modal_addedit.php"; ?>

<?php include "confirmDelete.php"; ?>