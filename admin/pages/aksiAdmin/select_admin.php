<?php
		error_reporting(0);
		session_start();
		//session_register("USERNAME");
		if(!isset($_SESSION['USERNAME'])|| !isset($_SESSION['NAMA']) || !isset($_SESSION['EMAIL'])) 
			{
				echo"<script>document.location.href='index.php';</script>";
			}
?>
<div class="table-responsive panel-body" id="">
	<table class=" table table-striped table-bordered table-hover" id="dataTables" style="width:100%">
		<thead>
			<tr>
				<th>No</th>
				<th>Action</th>
				<th>Name</th>
				<th>Email</th>
				<th>Telephone</th>
				<th>Level</th>
				<th>Photo</th>
				<th>Status</th>
				
			</tr>
		</thead>
		<tbody>
			 <?php
				include "../koneksi.php";
			
				
				$sql = "SELECT id_admin, kd_admin,nm_admin, email, password, level, foto, status, telepon FROM admin ORDER BY id_admin asc"; // query silahkan disesuaikan
				$result=mysqli_query($koneksi,$sql);// eksekusi query
				$no_urut = 0;
				while ($data = mysqli_fetch_array($result)){
				?>
				<tr>
					<td align="center" width="50px"> <?php echo ++$no_urut; ?></td>
					<td class="align-middle text-center">
						<?php 
							if ($_SESSION['USERNAME'] == $data['kd_admin'] && $_SESSION['LEVEL'] =="Admin")
							{
						?>
								<a href="#" onclick="editData('<?php echo  $data['id_admin']; ?>','<?php echo  $data['kd_admin']; ?>','<?php echo  $data['nm_admin']; ?>','<?php echo  $data['email']; ?>',
								'<?php echo  $data['password']; ?>','<?php echo  $data['level']; ?>','<?php echo  $data['foto']; ?>','<?php echo  $data['status']; ?>','<?php echo  $data['telepon']; ?>');" class="open_modal btn btn-xs btn-warning">
								<span class="glyphicon glyphicon-pencil"></span>
								</a>
						<?php
							}
							if ($_SESSION['LEVEL'] =="Super Admin")
							{
						?>
								<a href="#" onclick="editData('<?php echo  $data['id_admin']; ?>','<?php echo  $data['kd_admin']; ?>','<?php echo  $data['nm_admin']; ?>','<?php echo  $data['email']; ?>',
								'<?php echo  $data['password']; ?>','<?php echo  $data['level']; ?>','<?php echo  $data['foto']; ?>','<?php echo  $data['status']; ?>','<?php echo  $data['telepon']; ?>');" class="open_modal btn btn-xs btn-warning">
								<span class="glyphicon glyphicon-pencil"></span></a>
								<a href="#" onclick="confirm_modalDelete('<?php echo  $data['id_admin']; ?>');" class="btn btn-xs btn-danger"><span class="glyphicon glyphicon-erase"></span></a>
						<?php
							}
						?>
					</td>
					<td width=""> <?php echo $data ['nm_admin']; ?> </td>
					<td> <?php echo $data ['email']; ?> </td>
					<td align="center" class="align-middle"><?php echo $data['telepon']; ?></td>
					<td align="center" class="align-middle"><?php echo $data['level']; ?></td>
					<td class="align-middle text-center"><img src="../images/admin/<?php echo $data['foto']; ?>" width="70px" height="70px" style="border-radius:100%; box-shadow: 0px 1px 10px #999"></td>
					<td class="align-middle text-center"><?php 
						if($data['status']=='1')
							echo "<label style='color:#fff; padding:4px; font-size:11px; border-radius:3px;text-align:right; background-color:#5cb85c'> Aktif</label>"; 
						else
							echo "<label style='color:#fff; padding:4px; font-size:11px; border-radius:3px;text-align:center;background-color:#f0ad4e'> Tidak Aktif</label>"; 
					
					?></td>
					
				</tr>
				<?php
				}
				?>
		</tbody>
	</table>
</div>