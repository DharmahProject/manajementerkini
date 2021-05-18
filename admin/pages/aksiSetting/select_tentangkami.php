<style>
.btn-file {
    position: relative;
    overflow: hidden;
}
.btn-file input[type=file] {
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

#img-tentangkita{
    width: 100%;
}

.open_modal_detail {
    border-radius: 5px;
    cursor: pointer;
    transition: 0.3s;
}

#myImgTentangkita {
    border-radius: 5px;
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
		            $('#img-tentangkita').attr('src', e.target.result);
					$('#img-tentangkita').show();
		        }
		        
		        reader.readAsDataURL(input.files[0]);
		    }
		}

		$("#imgTentangkami").change(function(){
			readURL(this);		
		}); 
		
		 $("#myModal").on("hidden.bs.modal",function(){
			myform.reset();
			$('#img-tentangkita').hide();
	});
			
}); 			

	
</script>

<?php
	include "../koneksi.php";
	$sql2 = "SELECT * FROM t_tentang_kami where id=1"; // query silahkan disesuaikan
	$result2 = mysqli_query($koneksi, $sql2); // eksekusi query
	$data2=mysqli_fetch_array($result2);
?>

<!--tentang kami -->

	<div class="form-group">
		<label>Sejarah Singkat GPdI BAIT ALLAH</label>
		<textarea id="sejarah" class="ckeditor" name="sejarah" style="height:100px !important"><?php echo $data2['sejarah']?></textarea>	
		<input type="hidden" id="idTk" value="<?php echo $data2['id']?>">
	</div>
	<div class="row">
		<div class="form-group col-lg-6 col-md-6">
			<label>Visi</label>
			<textarea id="visi" class="form-control" name="visi"  rows="5" placeholder="Visi..." ><?php echo $data2['visi']?></textarea>	
		</div>
		<div class="form-group col-lg-6 col-md-6">
			<label>Misi</label>
			<textarea id="misi" class="form-control" name="misi"  rows="5" placeholder="Misi..." ><?php echo $data2['misi']?></textarea>	
		</div>
	</div>
	
	<div class="row">
		<div class="form-group col-lg-6 col-md-6">
			<label>Gambar</label>
			<div class="form-group">
				<div class="input-group">
					<span class="input-group-btn">
						<span class="btn btn-danger btn-file">
							Browse… <input type="file" id="imgTentangkami" name="imgTentangkami" value="<?php echo $data2['gambar']?>">
						</span>
					</span>
					<input type="text" class="form-control" readonly name="" value="<?php echo $data2['gambar']?>">
				</div>
				<img id='img-tentangkita' src="../images/tentangkami/<?php echo $data2['gambar']?>" class="img-responsive"/>
			</div>
		
		
		</div>
		
		<div class="form-group col-lg-6 col-md-6">
			 <button class="btn btn-success btn-xs" onclick="saveTentangKami();">Simpan</button>
			 <button class="btn btn-danger btn-xs" onclick="batalTentangKami();">Batal</button>
		</div>
	</div>
  <!--tentang kami -->
  