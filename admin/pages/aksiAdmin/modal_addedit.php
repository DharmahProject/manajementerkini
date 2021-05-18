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

#img-admin{
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
		            $('#img-admin').attr('src', e.target.result);
					$('#img-admin').show();
		        }
		        
		        reader.readAsDataURL(input.files[0]);
		    }
		}

		$("#imgAdmin").change(function(){
		    readURL(this);
			
		}); 
		
		 $("#myModal").on("hidden.bs.modal",function(){
			myform.reset();
			$('#img-admin').hide();
		});
			
}); 			

	
</script>	

	

<div id="ModalAdd" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h4 class="modal-title" id="myModalLabel">Add/ Edit Admin</h4>
        </div>

        <div class="modal-body">
				<div class="form-group" style="padding-bottom: 0px;">
                  <label for="Modal Name">Admin Code</label>
                  <input type="text" name="kode" id="kode" class="form-control" placeholder="Kode Admin.." />
				  <input type="hidden" id="id">
                </div>
				
				<div class="form-group" style="padding-bottom: 0px;">
                  <label for="Modal Name">Name</label>
                  <input type="text" name="nama" id="nama" class="form-control" placeholder="Nama Admin.."/>
                </div>
				
				<div class="form-group" style="padding-bottom: 0px;">
                  <label for="Modal Name">Email</label>
                  <input type="email" name="email" id="email"  class="form-control" placeholder="Email.."/>
                </div>
				
				<div class="form-group" style="padding-bottom: 0px;">
                  <label for="Modal Name">Password</label>
                  <input type="password" name="password" id="password"  class="form-control" placeholder="Password.."/>
                </div>
				
				<div class="form-group" style="padding-bottom: 0px;">
                  <label for="Modal Name">Password Confirmation</label>
                  <input type="password" name="kpassword" id="kpassword"  class="form-control" placeholder="Password.."/>
                </div>
				
				<div class="form-group" style="padding-bottom: 0px;">
                  <label for="Modal Name">Telephone</label>
                  <input type="number" name="telepon" id="telepon"  class="form-control" placeholder="Telepon.."/>
                </div>
				
				<div class="form-group" style="padding-bottom: 0px;">
                  <label for="Modal Name">Level</label>
                  <select class="form-control" name="level" id="level">
						<option value="">-- Choose --</option>
						<option value="Super Admin">Super Admin</option>
						<option value="Admin">Admin</option>
				  </select>
                </div>
				
				<div class="form-group" style="padding-bottom: 0px;">
                  <label for="Modal Name">Status</label>
                  <select class="form-control" name="status" id="status">
						<option value="">-- Pilih Status --</option>
						<option value="0">Non Active</option>
						<option value="1">Active</option>
				  </select>
                </div>
				
				<div class="form-group">
					<div class="input-group">
						<span class="input-group-btn">
							<span class="btn btn-default btn-file">
								Browse… <input type="file" id="imgAdmin" name="foto">
							</span>
						</span>
						<input type="text" class="form-control" id="txtadmin" readonly name="" value="">
					</div>
					<img id='img-admin'  class="img-responsive"/>
				</div>
			
	            <div class="modal-footer">
                  <button class="btn btn-success btn-xs" type="" onclick="btnSave();"> Save</button>
                  <button type="reset" class="btn btn-danger btn-xs" onclick="btnBatal();"  data-dismiss="modal" aria-hidden="true"> Cancel</button>
              </div>

		</div>
           
        </div>
    </div>
</div>