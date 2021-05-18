<?php
	include "koneksi.php";
	session_start();		
	$cat = $_GET['category'];
?>

<script type="text/javascript">
	function saveMail()
	{
		var user = $("#user").val();
		var email = $("#email").val();
		var message = $("#message").val();
		
		if(user==''){
			showErrorMesgGrowl("Nama tidak boleh kosong");  
			return false; 
	   }
	   if(email==''){
			showErrorMesgGrowl("Email tidak boleh kosong");  
			return false; 
	   }
	   
	   if(email !=''){
			var rs = email;
			var atps=rs.indexOf("@");
			var dots=rs.lastIndexOf(".");
			if (atps<1 || dots<atps+2 || dots+2>=rs.length) {
				showErrorMesgGrowl("Alamat email tidak valid");  
				return false;
			} 
	   }
	  
	   if(message==''){
			showErrorMesgGrowl("Pesan tidak boleh kosong");  
			return false; 
	   }
	   
	   
	   formData= new FormData();
	   formData.append("user", user);
	   formData.append("email", email);
	   formData.append("message", message);
	   	   
	   $.ajax({  
			url:"contact_action.php",  
			method:"POST",  
			data:{formData: formData},  
			data: formData,
			processData: false,
			contentType: false,  
			success:function(data)  
			{  
				 clearAddEdit();
				 showSuccessMesgGrowl("Pesan anda telah terkirim, terima kasih telah menghubungi kami.");  
			}  
	   });
	}	
	
	function clearAddEdit(){
		$("#user").val('');
		$("#email").val('');
		$("#message").val('');
	}
	
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
			
</script>

<!-- contact-->
    <!-- Page Header -->
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul class="breadcrumb">
                        <li ><a style="color:#fff" href="index.php"> <i class="fa fa-home"></i> &nbsp; Home</a></li>
                        <li ><a style="color:#fff" href="#">About Me</a></li>
                       
                    </ul>
                </div>
            </div>
        </div>
    </div>



    <!-- ABOUT ME -->
    <section class="page-section padding-60">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h2 class="title-section"><span class="title-regular">AUTHOR</span><br/></h2>
                    <hr class="title-underline" />
					
					<h3>Kris Banarto</h3>
                    <p>
                        
                    </p>
					<div class="row">
						<div class="col-md-6">
						
							<?php 
								include "koneksi.php";					
								session_start();
								
								$email = $_SESSION['EMAIL'];
								
								$sqlA = "SELECT * FROM admin where kd_admin='krisbn01' ";
								$execA = mysqli_query($koneksi,$sqlA);
								
								$dataA = mysqli_fetch_array($execA);
								
							?>
						
						
							<img src="admin/images/admin/<?php echo $dataA['foto'] ?>" class="img-responsive"> 
						</div>
						<div class="col-md-6">
							<p>
							<?php 
								include "koneksi.php";					
								session_start();
								
								$sqlL = "SELECT * FROM t_hubungi_kami where id='1'";
								$exec = mysqli_query($koneksi,$sqlL);
								
								$data = mysqli_fetch_array($exec);
								
								
								echo "$data[about]";
							
							?>
							
								<br>
								<div class="social-icon" title="Whatsapp"><i class="fa fa-whatsapp brd-size-30 "></i>
									<span style="font-size:14px">  <?php echo $data['whatsapp'] ?></span>
								</div>
								<div class="social-icon" title="Gmail"><i class="fa fa-envelope-o brd-size-30 "></i>
									<span style="font-size:14px">  <?php echo $data['email'] ?></span>
								</div>
								
							</p>
					
					</div>
						</div>
                </div>
                <div class="col-md-4">
                    <h2 class="title-section"><span class="title-regular">CONTACT</span> <span style="color:#e96b56">ME</span></h2>
                                <hr class="title-underline" />
                                <p>
                                    Silahkan hubungi saya dengan mengirim pesan di bawah ini jika ada saran, masukan dan komentar. Terimakasih.
                                </p>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="user" placeholder="NAME">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="email" placeholder="EMAIL">
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" rows="5" id="message" placeholder="MESSAGE"></textarea>
                                </div>
                                <button type="button" onclick="saveMail()" class="btn btn-default">SEND <i class="fa fa-envelope"></i></button>
                </div>
            </div>
        </div>
    </section>