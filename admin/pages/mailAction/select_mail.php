<div class="table-responsive panel-body">
	<table class=" table table-striped table-bordered table-hover" id="dataTables" style="width:100%">
		<thead>
			<tr>
				<th>No</th>
				<th  width="60px" class="text-center">Action</th>
				<th>Name</th>
				<th>Email</th>
				<th width="120px">Date</th>
				<th width="500px">Message</th>
			</tr>
		</thead>
		<tbody>
			 <?php
				include "../koneksi.php"; 
				$sql = "SELECT * FROM saran_komentar ORDER BY status asc, id desc"; 
				$result = mysqli_query($koneksi, $sql);
				$no_urut =0;
			 
				$dateStr="";
			 
				while ($data = mysqli_fetch_array($result)){
					
					$dateStr = date_format (new DateTime($data['tanggal']), 'd-M-Y');
					
					?>
					<tr>
						<td align="center" width="50px"> <?php echo ++$no_urut; ?></td>
						 <td class="align-middle text-center">
							<?php 
								if($data ['status']==0){
							?>
							<a href="#" onclick="confirmUpdate('<?php echo  $data['id']; ?>');" class="btn btn-xs btn-info"><i class="fa fa-eye-slash" aria-hidden="true"></i></a>
							<?php }else { ?>
								<i class="fa fa-check-square-o" aria-hidden="true"></i>
							<?php }?>
						</td>
						<td> <?php echo $data ['nama']; ?> </td>
						<td> <?php echo $data ['email']; ?> </td>
						<td align="center"> <?php echo $dateStr ?> </td>
						<td> <?php echo $data ['komentar']; ?> </td>
					</tr>
					<?php
				}
				?>
		</tbody>
	</table>
	<!-- /.table-responsive -->
</div>