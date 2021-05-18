
<script type="text/javascript">
	var gId= null;
	var actionMode = null;
	
   $(document).ready(function () {
	   SearchHubungiKami();
	   
   });
	
	
	function SearchHubungiKami(){  
	   $.ajax({  
			url:"aksiSetting/select_hubungikami.php",  
			method:"POST",  
			data:{	},  
			dataType:"text",  
			success:function(data){  
				 $('#viewHubungiKami').html(data);
			} 
	   });  
    }
	
	function batalHubungiKami(){
		SearchHubungiKami();
	}
	
	function saveHubungiKami(){  
	   var id = $('#idHk').val(); 
	   var about = $('#about').val();
	   var telepon = $('#telepon').val();
	   var email = $('#email').val();
	   var facebook = $('#facebook').val();
	   var instagram = $('#instagram').val();
	   var twitter = $('#twitter').val();
	   var linkedin = $('#linkedin').val();
	 
	  
	   if(about == '' || about == null)  
	   {  
			showErrorMesgGrowl("Short Biography should not be null");  
			return false;  
	   }
	   if(telepon == '' || telepon == null)  
	   {  
			showErrorMesgGrowl("Telephone should not be null");  
			return false;  
	   }
	   if(email == '' || email == null)  
	   {  
			showErrorMesgGrowl("Email should not be null");  
			return false;  
	   }
	   if(facebook == '' || facebook == null)  
	   {  
			showErrorMesgGrowl("Facebook should not be null");  
			return false;  
	   }
	   if(instagram == '' || instagram == null)  
	   {  
			showErrorMesgGrowl("Instagram should not be null");  
			return false;  
	   }
	   if(twitter == '' || twitter == null)  
	   {  
			showErrorMesgGrowl("Twitter should not be null");  
			return false;  
	   }
	   if(linkedin == '' || linkedin == null)  
	   {  
			showErrorMesgGrowl("LinkedIn should not be null");  
			return false;  
	   }
	   
		$.ajax({  
			url:"aksiSetting/proses_update_hubungikami.php",  
			method:"POST",  
			data:{id:id, about:about, telepon:telepon,email:email, facebook:facebook,instagram:instagram,twitter:twitter, linkedin:linkedin },  
			dataType:"text",  
			success:function(data)  
			{  
				 SearchHubungiKami();
				 $("#ModalAdd").modal('hide');
				 showSuccessMesgGrowl("Process Save About Me finish successfully");  
			}  
	   })  
	   
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
	
	function numberOnly(evt) {
	  var charCode = (evt.which) ? evt.which : event.keyCode
	   if (charCode > 31 && (charCode < 48 || charCode > 57))

		return false;
	}  
</script>

<div class="row">
	<div class="col-lg-12">
		<div style="font-size:25px; padding:10px; 10px; 10px; 0px;"> Setting <hr></div>
	</div>
</div>

	<!-- home -->
	<div class="panel-group" id="accordion">
		
	
	<!-- hubungi kami -->
    <div class="panel panel-success">
		<div class="panel-heading">
			<h4 class="panel-title">
				<a data-toggle="collapse" data-parent="#accordion" href="#collapse3">About Me</a>
			</h4>
		</div>
		<div id="collapse3" class="panel-collapse collapse in">
			  <div class="panel-body">
	  
			  <div id="viewHubungiKami">
			  </div>
	  
			</div>
		</div>
	</div>
  
</div>
  
  <script type="text/javascript" src="ckeditor/ckeditor.js"></script>