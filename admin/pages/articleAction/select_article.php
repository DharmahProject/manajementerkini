<div class="table-responsive panel-body">
	<table class=" table table-striped table-bordered table-hover" id="dataTables"  style="width:1900px; max-width: 1400px;">
		<thead>
			<tr>
				<th rowspan="2" width="30px">No</th>
				<th rowspan="2" width="60px" class="text-center">Action</th>
				<th rowspan="2" width="300px">Title</th>
				<th rowspan="2" width="180px">Category</th>
				<th rowspan="2" width="130px">Content</th>
				<th rowspan="2" width="180px">Author</th>
				<th rowspan="2" width="100px">Picture</th>
				<th rowspan="2" width="150px">Image Source</th>
				<th rowspan="2" width="100px">Status</th>
				<th rowspan="2" width="60px">View</th>
				<th rowspan="2" width="60px">Comment</th>
				
				<th colspan="2">Created</th>
				<th colspan="2">Changed</th>
				
			</tr>
			<tr>
				<th width="100px">By</th>
				<th width="85px">Date</th>
				<th width="100px">By</th>
				<th width="85px">Date</th>
			</tr>
		</thead>
		<tbody>
			 <?php
				include "../koneksi.php";
				$sql = "SELECT a.*, ac.category_name FROM article a
							join article_category ac on a.id_category = ac.id_category
								ORDER BY id_article desc";
				$result = mysqli_query($koneksi, $sql); 
				$no_urut =0;
				$dateStr="";
				
				while ($data = mysqli_fetch_array($result)) {
					
					if ($data['changed_dt'] != null && $data['changed_dt'] != '0000-00-00')
					{
						$dateStr = date_format (new DateTime($data['changed_dt']), 'd-M-Y');
					}
					
					?>
					<tr>
						<td align="center" width="30px"> <?php echo ++$no_urut; ?></td>
						<td class="align-middle text-center">
							<a href="#" onclick="edit('<?php echo  $data['id_article']; ?>');" class="open_modal btn btn-xs btn-warning"><span class="glyphicon glyphicon-pencil"></span></a>
							<a href="#" onclick="confirm_modalDelete('<?php echo  $data['id_article']; ?>');" class="btn btn-xs btn-danger"><span class="glyphicon glyphicon-erase"></span></a>
						</td>
						<td> <?php echo $data ['title']; ?> </td>
						<td> <?php echo $data ['category_name']; ?> </td>
						<td> <a href="#" onclick="detail('<?php echo  $data['id_article']; ?>');">Show detail.. </a></td>
						<td> <?php echo $data ['author']; ?> </td>
						<td> <img src="../images/Article/<?php echo $data ['picture']; ?>" width="50px"> </td>
						<td align="center"> <?php echo $data ['image_source']; ?> </td>
						<td> <?php 
								if($data ['status']==0){
									echo"<div style='color:#fff; padding:4px; border-radius:3px;text-align:center; background-color:rgb(92, 184, 92)'>Active</div>";
								}else{
									echo"<div style='color:#fff; padding:4px; border-radius:3px;text-align:center; background-color:#f0ad4e'>Not Active</div>";
								}	
							?> 
						</td>
						
						<td align="center"> <?php echo $data ['views']; ?> </td>
						<td align="center"> <?php echo $data ['comments']; ?> </td>

						<td> <?php echo $data['created_by'] ?> </td>
						<td> <?php echo date_format (new DateTime($data['created_dt']), 'd-M-Y'); ?> </td>
						<td> <?php echo $data ['changed_by']; ?> </td>
						<td> <?php echo $dateStr; ?> </td>
						
					</tr>
					<?php
				}
				?>
		</tbody>
	</table>
	<!-- /.table-responsive -->
</div>

<script>


</script>