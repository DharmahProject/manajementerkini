<div class="table-responsive panel-body" id="">
	<table class=" table table-striped table-bordered table-hover" id="dataTables" >
		<thead>
			<tr>
				<th rowspan="2" style="widht:80px">No</th>
				<th rowspan="2" style="widht:100px">Action</th>
				<th rowspan="2" style="widht:200px">Category Name</th>
				<th colspan="2" style="widht:400px">Created</th>
				<th colspan="2" style="widht:400px">Changed</th>
			</tr>
			<tr>
				<th>By</th>
				<th>Date</th>
				<th>By</th>
				<th>Date</th>
			</tr>
		</thead>
		<tbody>
			 <?php
				include "../koneksi.php";
				$sql = "SELECT * FROM article_category ORDER BY id_category desc"; // query silahkan disesuaikan
				$result=mysqli_query($koneksi,$sql);// eksekusi query
				$no_urut = 0;
				$dateStr="";
				while ($data = mysqli_fetch_array($result)){
					
					if ($data['changed_dt'] != null && $data['changed_dt'] != '0000-00-00')
					{
						$dateStr = date_format (new DateTime($data['changed_dt']), 'd-M-Y');
					}
					
					?>
					<tr>
						<td align="center" width="40px"> <?php echo ++$no_urut; ?></td>
						<td class="align-middle text-center">
							<a href="#" onclick="editData('<?php echo  $data['id_category']; ?>','<?php echo  $data['category_name']; ?>');" class="open_modal btn btn-xs btn-warning">
							<span class="glyphicon glyphicon-pencil"></span></a>
							<a href="#" onclick="confirm_modalDelete('<?php echo  $data['id_category']; ?>');" class="btn btn-xs btn-danger"><span class="glyphicon glyphicon-erase"></span></a>
						</td>
						<td> <?php echo $data ['category_name']; ?> </td>
						<td> <?php echo $data ['created_by']; ?> </td>
						<td align="center"> <?php echo date_format (new DateTime($data['created_dt']), 'd-M-Y'); ?> </td>
						<td> <?php echo $data ['changed_by']; ?> </td>
						<td align="center"> <?php echo $dateStr ?> </td>
					
					</tr>
					<?php
					
				}
				?>
		</tbody>
	</table>
	<!-- /.table-responsive -->
</div>