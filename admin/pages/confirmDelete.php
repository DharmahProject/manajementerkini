<!-- Modal Popup untuk delete--> 
<div id="modal_delete" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">
					Confirmation
				</h4>
			</div>
			<div class="modal-body">
				<input type="hidden" id="data-id">Are you sure want to delete this article?
			</div>
			<div class="modal-footer">
				  <button type="button" class="btn btn-danger btn-xs" onclick="confirmDelete();">Yes</a>
				  <button type="button" class="btn btn-success btn-xs" data-dismiss="modal">No</button>
			</div>
		</div>
	</div>
</div>