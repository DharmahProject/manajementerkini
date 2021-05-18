<div class="table-responsive panel-body">
	<table class=" table table-striped table-bordered table-hover" id="dataTables" style="width:1600px">
		<thead>
			<tr>
				<th width="50px">No</th>
				<th width="100px" class="text-center">Action</th>
				<th width="150px">Name</th>
				<th width="150px">Email</th>
				<th width="350px">Article</th>
				<th width="350px">Comment</th>
				<th width="350px">Comment Reply</th>
				<th width="100px">Date</th>
				<th width="100px">Status</th>
				
			</tr>
		</thead>
		<tbody>
			 <?php
				include "../koneksi.php"; 
				$sql = "SELECT cd.*, a.title, m.email, m.name, c.comment as hcomment FROM comments_detail cd 
							join comments c on c.id_comment = cd.id_comment
							join article a on a.id_article = c.id_article
							join members m on m.id_member = c.id_member
						ORDER BY cd.status asc, cd.id_comment asc"; 
				$result = mysqli_query($koneksi, $sql);
				$no_urut =0;
				$dateStr="";
			 
				while ($data = mysqli_fetch_array($result)){
					
					$dateStr = date_format (new DateTime($data['comment_date']), 'd-M-Y');
					
					?>
					<tr>
						<td class="align-middle text-center" width="50px"> <?php echo ++$no_urut; ?></td>
						<td class="align-middle text-center">
							<?php 
								if($data ['status']==0){
							?>
							<a href="#" onclick="confirm_modalUpdate('<?php echo  $data['id_detail']; ?>');" class="btn btn-xs btn-info">Show</a>
							<?php } ?>
							<a href="#" onclick="confirm_modalDelete('<?php echo  $data['id_detail']; ?>');" class="btn btn-xs btn-danger"><span class="glyphicon glyphicon-erase"></span></a>
						</td>
						<td> <?php echo $data ['name']; ?> </td>
						<td> <?php echo $data ['email']; ?> </td>
						<td> <?php echo $data ['title']; ?> </td>
						<td> <?php echo $data ['hcomment']; ?> </td>
						<td> <?php echo $data ['comment']; ?> </td>
						<td> <?php echo $dateStr ?> </td>
						<td> <?php 
								if($data ['status']==1){
									echo"<div style='color:#fff; padding:2px; border-radius:3px;text-align:center; background-color:rgb(92, 184, 92)'>Show</div>";
								}else{
									echo"<div style='color:#fff; padding:2px; border-radius:3px;text-align:center; background-color:#f0ad4e'>Now Show</div>";
								}	
							?> 
						</td>
					   
					</tr>
					<?php
				}
				?>
		</tbody>
	</table>
	<!-- /.table-responsive -->
</div>