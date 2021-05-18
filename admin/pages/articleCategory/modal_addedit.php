<!-- Modal Popup untuk Add--> 
<div id="ModalAdd" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
	<div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h4 class="modal-title" id="myModalLabel">Add/ Edit Article Category</h4>
        </div>

        <div class="modal-body">
				<div class="form-group">
					<label>Category Name</label>
					<input type="text" class="form-control" id="categoryName" name="hari" placeholder="Category Name..." required>
					<input type="hidden" class="form-control" id="id" name="id" placeholder="id...">
				</div>
				
              <div class="modal-footer">
                  <button class="btn btn-success btn-xs" type="" onclick="btnSave();"> Save</button>
                  <button type="reset" class="btn btn-danger btn-xs" onclick="btnBatal();"  data-dismiss="modal" aria-hidden="true"> Cancel</button>
              </div>
		  
		</div>
           
        </div>
    </div>
</div>