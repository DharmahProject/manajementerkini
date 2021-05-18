<div class="table-responsive panel-body">
	<table class=" table table-striped table-bordered table-hover" id="dataTables" style="width:1300px">
		<thead>
			<tr>
				<th width="50px">No</th>
				<th width="150px" class="text-center">Action</th>
				<th width="150px">Name</th>
				<th width="150px">Email</th>
				<th width="350px">Article</th>
				<th width="350px">Comment</th>
				<th width="100px">Date</th>


			</tr>
		</thead>
		<tbody>
			<?php
			include "../koneksi.php";
			$sql = "SELECT c.*, a.title, m.email, m.name FROM comments c 
							join article a on a.id_article = c.id_article
							join members m on m.id_member = c.id_member
						ORDER BY c.new_status asc, id_comment desc";
			$result = mysqli_query($koneksi, $sql);
			$no_urut = 0;
			$dateStr = "";

			while ($data = mysqli_fetch_array($result)) {

				$dateStr = date_format(new DateTime($data['comment_date']), 'd-M-Y');

			?>
				<tr>
					<td class="align-middle text-center" width="50px"> <?php echo ++$no_urut; ?></td>
					<td class="align-middle text-center">
						<?php
						if ($data['new_status'] == 0) {
						?>
							<a href="#" onclick="confirm_modalUpdate('<?php echo  $data['id_comment']; ?>');" class="btn btn-xs btn-success">Mark as Read</a>
						<?php } else { ?>
							<i class="fa fa-check-square-o btn btn-xs btn-success" aria-hidden="true"></i>
						<?php }


						?>
						<a href="#" onclick="confirm_modalDelete('<?php echo  $data['id_comment']; ?>');" class="btn btn-xs btn-danger"><span class="glyphicon glyphicon-erase"></span></a>
					</td>
					<td> <?php echo $data['name']; ?> </td>
					<td> <?php echo $data['email']; ?> </td>
					<td> <?php echo $data['title']; ?> </td>
					<td> <?php echo $data['comment']; ?> </td>
					<td> <?php echo $dateStr ?> </td>

				</tr>
			<?php
			}
			?>
		</tbody>
	</table>
	<!-- /.table-responsive -->
</div>