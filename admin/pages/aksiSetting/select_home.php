<style>
.btn-file, .btn-file1, .btn-file2,.btn-file3, .btn-file4 {
    position: relative;
    overflow: hidden;
}
.btn-file input[type=file], 
.btn-file1 input[type=file], 
.btn-file2 input[type=file], 
.btn-file3 input[type=file], 
.btn-file4 input[type=file] {
    position: absolute;
    top: 0;
    right: 0;
    min-width: 100%;
    min-height: 100%;
    font-size: 100px;
    text-align: right;
    filter: alpha(opacity=0);
    opacity: 0;
    outline: none;
    background: white;
    cursor: inherit;
    display: block;
}

#img-foto{
    width: 100%;
}
#img-gambar2{
    width: 100%;
}
#img-gambar3{
    width: 100%;
}
#img-gambar4{
    width: 100%;
}
#img-gambar1{
    width: 100%;
}

.open_modal_detail {
    border-radius: 5px;
    cursor: pointer;
    transition: 0.3s;
}

.open_modal_detail:hover {opacity: 0.7;}
</style>

<script type="text/javascript">
	$(document).ready( function() {
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
		            $('#img-foto').attr('src', e.target.result);
					$('#img-foto').show();
		        }
		        reader.readAsDataURL(input.files[0]);
		    }
		}

		$("#imgFoto").change(function(){
			readURL(this);		
		}); 
		 $("#myModal").on("hidden.bs.modal",function(){
			myform.reset();
			$('#img-foto').hide();
	});
	
	$(document).on('change', '.btn-file1 :file', function() {
		var input = $(this),
			label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
		input.trigger('fileselect', [label]);
		});

		$('.btn-file1 :file').on('fileselect', function(event, label) {
		    
		    var input = $(this).parents('.input-group').find(':text'),
		        log = label;
		    
		    if( input.length ) {
		        input.val(log);
		    } else {
		        if( log ) alert(log);
		    }
	    
		});
		function readURL1(input) {
			
		    if (input.files && input.files[0]) {
		        var reader = new FileReader();
		        
		        reader.onload = function (e) {
		            $('#img-gambar1').attr('src', e.target.result);
					$('#img-gambar1').show();
		        }
		        reader.readAsDataURL(input.files[0]);
		    }
		}

		$("#imgGambar1").change(function(){
			readURL1(this);		
		}); 
		 $("#myModal").on("hidden.bs.modal",function(){
			myform.reset();
			$('#img-gambar1').hide();
	});
	
	$(document).on('change', '.btn-file2 :file', function() {
		var input = $(this),
			label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
		input.trigger('fileselect', [label]);
		});

		$('.btn-file2 :file').on('fileselect', function(event, label) {
		    
		    var input = $(this).parents('.input-group').find(':text'),
		        log = label;
		    
		    if( input.length ) {
		        input.val(log);
		    } else {
		        if( log ) alert(log);
		    }
	    
		});
		function readURL2(input) {
			
		    if (input.files && input.files[0]) {
		        var reader = new FileReader();
		        
		        reader.onload = function (e) {
		            $('#img-gambar2').attr('src', e.target.result);
					$('#img-gambar2').show();
		        }
		        reader.readAsDataURL(input.files[0]);
		    }
		}

		$("#imgGambar2").change(function(){
			readURL2(this);		
		}); 
		 $("#myModal").on("hidden.bs.modal",function(){
			myform.reset();
			$('#img-gambar2').hide();
	});
	
	$(document).on('change', '.btn-file3 :file', function() {
		var input = $(this),
			label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
		input.trigger('fileselect', [label]);
		});

		$('.btn-file3 :file').on('fileselect', function(event, label) {
		    
		    var input = $(this).parents('.input-group').find(':text'),
		        log = label;
		    
		    if( input.length ) {
		        input.val(log);
		    } else {
		        if( log ) alert(log);
		    }
	    
		});
		function readURL3(input) {
			
		    if (input.files && input.files[0]) {
		        var reader = new FileReader();
		        
		        reader.onload = function (e) {
		            $('#img-gambar3').attr('src', e.target.result);
					$('#img-gambar3').show();
		        }
		        reader.readAsDataURL(input.files[0]);
		    }
		}

		$("#imgGambar3").change(function(){
			readURL3(this);		
		}); 
		 $("#myModal").on("hidden.bs.modal",function(){
			myform.reset();
			$('#img-gambar3').hide();
	});
	
	$(document).on('change', '.btn-file4 :file', function() {
		var input = $(this),
			label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
		input.trigger('fileselect', [label]);
		});

		$('.btn-file4 :file').on('fileselect', function(event, label) {
		    
		    var input = $(this).parents('.input-group').find(':text'),
		        log = label;
		    
		    if( input.length ) {
		        input.val(log);
		    } else {
		        if( log ) alert(log);
		    }
	    
		});
		function readURL4(input) {
			
		    if (input.files && input.files[0]) {
		        var reader = new FileReader();
		        
		        reader.onload = function (e) {
		            $('#img-gambar4').attr('src', e.target.result);
					$('#img-gambar4').show();
		        }
		        reader.readAsDataURL(input.files[0]);
		    }
		}

		$("#imgGambar4").change(function(){
			readURL4(this);		
		}); 
		 $("#myModal").on("hidden.bs.modal",function(){
			myform.reset();
			$('#img-gambar4').hide();
	});
			
}); 			

	
</script>

<?php
	include "../koneksi.php";
	$sql3 = "SELECT * FROM t_home where id=1"; // query silahkan disesuaikan
	$result3 = mysqli_query($koneksi, $sql3); // eksekusi query
	$data3=mysqli_fetch_array($result3);
?>

<!--Home -->
		<input type="hidden" id="idHm" value="<?php echo $data3['id']?>">
		<div class="form-group">
			<label>Kata Sambutan</label>
			<textarea class="ckeditor" id="kataSambutan" name="kataSambutan"><?php echo $data3['sambutan']?></textarea>
			
		</div>
		<div class="row">
			<div class="form-group col-lg-6 col-md-6">
				<label>Gambar 1</label>
				<div class="form-group">
					<div class="input-group">
						<span class="input-group-btn">
							<span class="btn btn-success btn-file1">
								Browse… <input type="file" id="imgGambar1" name="imgGambar1" value="<?php echo $data3['gambar1']?>">
							</span>
						</span>
						<input type="text" class="form-control" readonly name="" value="<?php echo $data3['gambar1']?>">
					</div>
					<img id='img-gambar1' src="../images/home/<?php echo $data3['gambar1']?>" class="img-responsive"/>
				</div>
					<input type="text" class="form-control" id="ketgambar1" name="ketgambar1" placeholder="Keterangan..." value="<?php echo $data3['ket_gambar1']?>"/>
			</div>
			<div class="form-group col-lg-6 col-md-6">
				<label>Gambar 2</label>
				<div class="form-group">
					<div class="input-group">
						<span class="input-group-btn">
							<span class="btn btn-warning btn-file2">
								Browse… <input type="file" id="imgGambar2" name="imgGambar2" value="<?php echo $data3['gambar2']?>">
							</span>
						</span>
						<input type="text" class="form-control" readonly name="" value="<?php echo $data3['gambar2']?>">
					</div>
					<img id='img-gambar2' src="../images/home/<?php echo $data3['gambar2']?>" class="img-responsive"/>
				</div>
					<input type="text" class="form-control" id="ketgambar2" name="ketgambar2" placeholder="Keterangan..." value="<?php echo $data3['ket_gambar2']?>"/>
			</div>
		</div>
		<div class="row">
			<div class="form-group col-lg-6 col-md-6">
				<label>Gambar 3</label>
				<div class="form-group">
					<div class="input-group">
						<span class="input-group-btn">
							<span class="btn btn-danger btn-file3">
								Browse… <input type="file" id="imgGambar3" name="imgGambar3" value="<?php echo $data3['gambar3']?>">
							</span>
						</span>
						<input type="text" class="form-control" readonly name="" value="<?php echo $data3['gambar3']?>">
					</div>
					<img id='img-gambar3' src="../images/home/<?php echo $data3['gambar3']?>" class="img-responsive"/>
				</div>
					<input type="text" class="form-control" id="ketgambar3" name="ketgambar3" placeholder="Keterangan..." value="<?php echo $data3['ket_gambar3']?>"/>
			</div>
			<div class="form-group col-lg-6 col-md-6">
				<label>Gambar 4</label>
				<div class="form-group">
					<div class="input-group">
						<span class="input-group-btn">
							<span class="btn btn-info btn-file4">
								Browse… <input type="file" id="imgGambar4" name="imgGambar4" value="<?php echo $data3['gambar4']?>">
							</span>
						</span>
						<input type="text" class="form-control" readonly name="" value="<?php echo $data3['gambar4']?>">
					</div>
					<img id='img-gambar4' src="../images/home/<?php echo $data3['gambar4']?>" class="img-responsive"/>
				</div>
					<input type="text" class="form-control" id="ketgambar4" name="ketgambar4" placeholder="Keterangan..." value="<?php echo $data3['ket_gambar4']?>"/>
			</div>
		</div>
		<div class="row">
			<div class="form-group col-lg-6 col-md-6">
				<label>Foto</label>
				<div class="form-group">
					<div class="input-group">
						<span class="input-group-btn">
							<span class="btn btn-default btn-file">
								Browse… <input type="file" id="imgFoto" name="imgFoto" value="<?php echo $data3['foto']?>">
							</span>
						</span>
						<input type="text" class="form-control" readonly name="" value="<?php echo $data3['foto']?>">
					</div>
					<img id='img-foto' src="../images/home/<?php echo $data3['foto']?>" class="img-responsive"/>
				</div>
			</div>
			<div class="form-group col-lg-6 col-md-6">
				<label>Judul Ayat Emas</label>
				<input type="text" id="judulAyatEmas" class="form-control" name="judulAyatEmas" placeholder="Judul Ayat Emas..." value="<?php echo $data3['judul_ayatemas']?>">
				<br>
				<label>Ayat Emas</label>
				<textarea id="ayatEmas" class="form-control" name="ayatEmas"  rows="5" placeholder="Ayat Emas..." ><?php echo $data3['ayat_emas']?></textarea>	
			</div>
			</div>
		<div class="row">
			
			<div class="form-group col-lg-6 col-md-6">
				 <button class="btn btn-success btn-xs" onclick="saveHome();">Simpan</button>
				<button class="btn btn-danger btn-xs" onclick="batalHome();">Batal</button>
			</div>
		</div>
	  </div>
	  
	  
	  </div>
    </div>
  </div>
  <!--Home -->