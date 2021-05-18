<?php
	include "../koneksi.php";
	$sql1 = "SELECT * FROM t_hubungi_kami"; // query silahkan disesuaikan
	$result1 = mysqli_query($koneksi, $sql1); // eksekusi query
	$data1=mysqli_fetch_array($result1);
?>

<!--Hubungi kami -->
 
	<div class="form-group">
		<label>Biography</label>
		<textarea id="about" class="form-control" name="about" rows="3"><?php echo $data1['about']?></textarea>	
		<input type="hidden" id="idHk" value="<?php echo $data1['id']?>">
	</div>
	<div class="row">
		<div class="form-group col-lg-6 col-md-6">
			<label>Whatsapp</label>
			<input type="text" class="form-control" id="telepon" value="<?php echo $data1['whatsapp']?>" onkeypress="return numberOnly(event)" name="Whatsapp" placeholder="Whatsapp..." required/>
		</div>
		<div class="form-group col-lg-6 col-md-6">
			<label>Email</label>
			<input type="text" class="form-control" id="email" name="email" value="<?php echo $data1['email']?>" placeholder="Email..." required/>
		</div>
	</div>
	<div class="row">
		<div class="form-group col-lg-6 col-md-6">
			<label>Facebook</label>
			<input type="text" class="form-control" id="facebook" value="<?php echo $data1['facebook']?>" name="facebook" placeholder="Facebook..." required/>
		</div>
		<div class="form-group col-lg-6 col-md-6">
			<label>Instagram</label>
			<input type="text" class="form-control" id="instagram" value="<?php echo $data1['instagram']?>" name="instagram" placeholder="Instagram..." required/>
		</div>
	</div>
	<div class="row">
		<div class="form-group col-lg-6 col-md-6">
			<label>Twitter</label>
			<input type="text" class="form-control" id="twitter" value="<?php echo $data1['twitter']?>" name="twitter" placeholder="Twitter..." required/>
		</div>
		<div class="form-group col-lg-6 col-md-6">
			<label>LinkedIn</label>
			<input type="text" class="form-control" id="linkedin" value="<?php echo $data1['linkedin']?>" name="linkedin" placeholder="LinkedIn..." required/>
		</div>
		
	</div>
	<div class="row">
		<div class="form-group col-lg-6 col-md-6">
			<button class="btn btn-success btn-xs" onclick="saveHubungiKami();">Save</button>
			 <button class="btn btn-danger btn-xs" onclick="batalHubungiKami();">Cancel</button>
		</div>
		<div class="form-group col-lg-6 col-md-6">
			 
		</div>
	</div>
	  
	
  <!--Hubungi kami -->