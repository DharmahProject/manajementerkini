
<?php	
	$action = $_POST['action'];
	$idArticle = $_POST['idArticle'];

	echo"<input type='text' id='action' value ='$action' style='display:none'/>
		<input type='text' id='id' class='form-control'  name='' value='$idArticle' style='display:none'>
	";
	
	$sql3 = "SELECT * FROM article_category order by id_category"; // query silahkan disesuaikan
			$result3 = mysqli_query($koneksi, $sql3); // eksekusi query
	
?>

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

#img-Article{
    width: 100%;
}

.open_modal_detail {
    border-radius: 5px;
    cursor: pointer;
    transition: 0.3s;
}

#myImgArticle {
    border-radius: 5px;
}
.open_modal_detail:hover {opacity: 0.7;}

.hidePic{
	display:none;
}
.editorHeight{
	height:500px !important;
	
}

</style>
<script type="text/javascript">
	var gId= null;
	var actionMode = null;
	var strArray=['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
	
	
   $(document).ready(function () {
	   actionMode = $("#action").val();
	   
	   if(actionMode =="EDIT")
	   {
		   getdetail();;
		   $("#img-Article").removeClass("hidePic");
	   }
	   else
	   {
		   var d = new Date();
		   var datestring = d.getDate()  + "-" + strArray[(d.getMonth())] + "-" + d.getFullYear();
		   $('#date').val(datestring);
	   }

	   
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
		            $('#img-Article').attr('src', e.target.result);
					$('#img-Article').show();
		        }
		        
		        reader.readAsDataURL(input.files[0]);
		    }
		}

		$("#imgArticle").change(function(){
			readURL(this);		
		}); 
		
		 $("#myModal").on("hidden.bs.modal",function(){
			myform.reset();
			$('#img-Article').hide();
		});
	   
	   
	   
   });
   
   function getdetail(){
	   var id= $("#id").val();
	   
	   $.ajax({
			   url: "articleAction/modal_edit.php",
			   type: "POST",
			   data : {id: id,},
			   success: function (result){
				   
				   var data = JSON.parse(result);
				   var d = new Date(data.date);
				   
				   var datestring = d.getDate()  + "-" + strArray[(d.getMonth())] + "-" + d.getFullYear()
				   
				   $('#title').val(data.title);
				   $('#author').val(data.author);
				   $('#category').val(data.id_category);
				   $('#date').val(datestring);
				   $('#tags').val(data.tags);
				   $('#imageCaption').val(data.image_caption);
				   $('#status').val(data.status);
				   $('#referencelink1').val(data.ref_link1);
				   $('#referencelink2').val(data.ref_link2);
				   $('#referencelink3').val(data.ref_link3);
				   
				   $('#img-Article').show();
				   $('#txtimgArticle').val(data.picture);
				   $('#img-Article').attr('src', '../images/Article/'+data.picture);
				   
				   $('#content').text(data.content);
				   $('#content').ckeditor();
				   
			   }
			   
		   });
	};
	
	function saveArticle(){  
	   var action = $('#action').val(); 
	   var id = $('#id').val(); 
	   var tags = $('#tags').val(); 
	   var title = $('#title').val();
	   var author = $('#author').val();
	   var category = $('#category').val();
	   var date = $('#date').val();
	   var imageCaption = $('#imageCaption').val();
	   var status = $('#status').val();
	   var referencelink1 = $('#referencelink1').val();
	   var referencelink2 = $('#referencelink2').val();
	   var referencelink3 = $('#referencelink3').val();
	   var input = document.getElementById("imgArticle");
	   
	   var contentAdd= null;
	   
	   contentAdd= CKEDITOR.instances.content.getData();
	   
	   file = input.files[0];
	   
	   if(category == '' || category == null)  
	   {  
			showErrorMesgGrowl("Article Category should not be null");  
			return false;  
	   }
	   if(title == '' || title == null)  
	   {  
			showErrorMesgGrowl("Title should not be null");  
			return false;  
	   }
	   if(author == '' || author == null)  
	   {  
			showErrorMesgGrowl("Author should not be nul");  
			return false;  
	   }
	   if(tags == '' || tags == null)  
	   {  
			showErrorMesgGrowl("Tags should not be nul");  
			return false;  
	   }
	   if(contentAdd == '' || contentAdd == null)  
	   {  
			showErrorMesgGrowl("Content should not be null");  
			return false;  
	   }
	   
	   if (action == "ADD")
	   {
		   if(file == '' || file == null)  
		   {  
				showErrorMesgGrowl("Picture should not be null");  
				return false;  
		   }
	   }
	   
	   if(imageCaption == '' || imageCaption == null)  
	   {  
			showErrorMesgGrowl("Image Source should not be null");  
			return false;  
	   }
	   
	   formData= new FormData();
	   formData.append("id", id);
	   formData.append("category", category);
	   formData.append("title", title);
	   formData.append("author", author);
	   formData.append("tags", tags);
	   formData.append("date", date);
	   formData.append("imageCaption", imageCaption);
	   formData.append("status", status);
	   formData.append("referencelink1", referencelink1);
	   formData.append("referencelink2", referencelink2);
	   formData.append("referencelink3", referencelink3);
	   formData.append("contentAdd", contentAdd);
	   formData.append("picture", file);
	   
		$.ajax({  
			url:"articleAction/proses_save.php",  
			method:"POST",  
			data:{formData: formData},  
			data: formData,
			processData: false,
			contentType: false,  
			success:function(data)  
			{  
				 showSuccessMesgGrowl("Process Save Article finish successfully");  
				 
				 setTimeout(function () {
						cancel();
                    }, 3000);
			}  
	   })  
	   
	};
	
	function clearAddEdit(){
		$('#id').val(''); 
		$('#category').val(''); 
		$('#title').val(''); 
		$('#tags').val(''); 
		$('#author').val(''); 
		$('#date').val(''); 
		$('#status').val(''); 
		$('#referencelink1').val(''); 
		$('#referencelink2').val(''); 
		$('#referencelink3').val(''); 
		$('#imageCaption').val('');
		$('#img-Article').attr('src', "");
		$('#img-imgArticle').attr('src', "");
		$('#img-imgArticle').hide();
		$('#txtimgArticle').val('');
		
		CKEDITOR.instances.content.setData('');
	}
	
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
	
	function cancel(){
		clearAddEdit();
		
		var newForm = jQuery('<form>', {
                'action': 'dashboard.php?menu=articledata'
                        , 'method': 'post'
            })
                 
        ;
        $(document.body).append(newForm);

        newForm.submit();
	}
</script>

<div class="row">
	<div class="col-lg-12">
		<div style="font-size:25px; padding:10px; 10px; 10px; 0px;"> Add Article <hr></div>
	</div>
</div>


   <!-- tentang kami -->
	<div class="panel panel-success">
		<div class="panel-heading">
			<h4 class="panel-title">
				<a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Article Detail</a>
			</h4>
		</div>
		<div id="collapse2" class="panel">
			<div class="panel-body">
			
				<div class="row">
					<div class="form-group col-lg-6 col-md-6">
						<label>Article Category</label>
						<select name="category" id="category" class = "form-control" required>
								<option value="">-- Choose Category --</option>
								<?php 
									while($data3 = mysqli_fetch_array($result3))
									{
								?>
								<option value="<?php echo $data3['id_category'] ?>"><?php echo $data3['category_name'] ?></option>
									<?php } ?>
						 </select>
					</div>
					<div class="form-group col-lg-3 col-md-3">
						<label>Date</label>
						<input type="text" Placeholder="" id="date" class="form-control"  name="" value="" disabled>
					</div>
					<div class="form-group col-lg-3 col-md-3">
						<label>Status</label>
						<select id="status" class="form-control">
							<option value="0"> Active</option>
							<option value="1">Not Active</option>
						</select>
					</div>
				</div>
			
				<div class="row">
					<div class="form-group col-lg-6 col-md-6">
						<label>Title</label>
						<input type="text" Placeholder="Title.." id="title" class="form-control"  name="" value="">
					</div>
					<div class="form-group col-lg-3 col-md-3">
						<label>Author</label>
						<input type="text" Placeholder="Author.." id="author" class="form-control"  name="" value="">
					</div>
					<div class="form-group col-lg-3 col-md-3">
						<label>Tag</label>
						<input type="text" Placeholder="Tag.." id="tags" class="form-control"  name="" value="">
					</div>
				</div>
			
				<div class="form-group" style="margin-top:10px">
					<label>Content</label>
					<textarea id="content" class="ckeditor" name="content" style="height:500px !important"></textarea>	
				</div>
				
				
				<div class="row">
					<div class="form-group col-lg-6 col-md-6">
						<label>Picture</label>
						<div class="form-group">
							<div class="input-group">
								<span class="input-group-btn">
									<span class="btn btn-primary btn-file">
										Browse… <input type="file" id="imgArticle" name="imgArticle" value="">
									</span>
								</span>
								<input type="text" class="form-control" readonly name="" id="txtimgArticle" value="">
							</div>
							<img id='img-Article' src="../images/Article/<?php echo $data2['gambar']?>" class="img-responsive hidePic"/>
						</div>
					
					
					</div>
					
					<div class="form-group col-lg-6 col-md-6">
						 <label>Reference Links</label>
						 <input type="text" Placeholder="Reference Link.." id="referencelink1" class="form-control"  name="" value=""><br>
						 <input type="text" Placeholder="Reference Link.." id="referencelink2" class="form-control"  name="" value=""><br>
						 <input type="text" Placeholder="Reference Link.." id="referencelink3" class="form-control"  name="" value="">
					</div>
				
				</div>
				<div class="row">
					<div class="form-group col-lg-6 col-md-6">
						<input type="text" Placeholder="Image Source.." id="imageCaption" class="form-control"  name="" value="">
					</div>
				</div>
				
				<div class="row">
					<div class="form-group col-lg-6 col-md-6">
						 <button class="btn btn-success btn-xs" onclick="saveArticle();">Save</button>
						 <button class="btn btn-danger btn-xs" onclick="cancel();">Cancel</button>
						 
					</div>
				
				</div>
		</div>
				
		</div>
	</div>
	
  
  <script type="text/javascript" src="ckeditor/ckeditor.js"></script>