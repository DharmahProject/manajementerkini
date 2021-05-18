<script>
	window.setTimeout(function () {
		$(".alert-success").fadeTo(1000, 0).slideUp(1000, function () {
			$(this).remove();
		});
	}, 2000);
</script>
<style>
	.alert-success{
	position:absolute; z-index:3000; text-align:center; left: 40%;
	}
</style>
<?php
		error_reporting(0);
		$db_link = mysqli_connect('localhost', 'root', '', 'bac');
		session_start();
		//session_register("USERNAME");
		if(!isset($_SESSION['USERNAME'])|| !isset($_SESSION['NAMA']) || !isset($_SESSION['EMAIL'])) 
			{
				echo"<script>document.location.href='index.php';</script>";
			}


        $db_link = mysqli_connect('localhost', 'root', '', 'bac'); // sesuaikan username dan password mysqli anda
        $sql = "SELECT * FROM utilitas ORDER BY id asc"; // query silahkan disesuaikan
        $result = mysqli_query($db_link, $sql); // eksekusi query

   
?>

<!-- alert insert, update & delete -->
	<?php 
		if (isset($_SESSION['pesan']) && $_SESSION['pesan'] == 'insert') { ?>
	
		<div class="alert alert-success fade in"  >
			<button type="button" class="close" data-dismiss="alert">x</button>
			<strong>Success! </strong> Data Galery berhasil disimpan
		</div>	
		
	<?php unset($_SESSION['pesan']); } elseif (isset($_SESSION['pesan']) && $_SESSION['pesan'] == 'update') {  ?>
		
		<div class="alert alert-success fade in"  >
			<button type="button" class="close" data-dismiss="alert">x</button>
			<strong>Success! </strong> Data Galery berhasil diperbaharui
		</div>
		
	<?php unset($_SESSION['pesan']); } elseif (isset($_SESSION['pesan']) && $_SESSION['pesan'] == 'delete') {  ?>
	
		<div class="alert alert-success fade in"  >
			<button type="button" class="close" data-dismiss="alert">x</button>
			<strong>Success! </strong> Data Galery telah dihapus
		</div>
	<?php unset($_SESSION['pesan']); } else {unset($_SESSION['pesan']);} ?>
	<!-- alert insert, update & delete -->
	
<div class="row">
	<div class="col-lg-12">
		<div style="font-size:25px; padding:10px; 10px; 10px; 0px;"> Utilitas <hr></div>
	</div>
</div>
<!-- /.row -->
<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				<!-- Button trigger modal -->
				<button class = "btn btn-primary btn-xs" data-toggle = "modal" data-target = "#ModalAdd"> Tambah Data </button>
				<span style="color:#fff; padding:4px; border-radius:3px;text-align:right; margin-left:15px; background-color:#f0ad4e"> * Utilitas sewaktu-waktu dapat digunakan untuk menambah data yang tunggal</span>
			</div>
			<!-- /.panel-heading -->
			<div id="view">
				<div class="table-responsive panel-body" id="">
					<table class=" table table-striped table-bordered table-hover" id="dataTables" style="width:100%">
					<thead>
						<tr>
							<th rowspan="2">No</th>
							<th rowspan="2">Nama</th>
							<th rowspan="2" width="400px">Isi</th>
							<th colspan="2">Dibuat</th>
							<th colspan="2">Diubah</th>
							<th rowspan="2" class="text-center"><span class="glyphicon glyphicon-cog"></span></th>
						</tr>
						<tr>
							<th>Oleh</th>
							<th>Tanggal</th>
							<th>Oleh</th>
							<th>Tanggal</th>
						</tr>
					</thead>
					<tbody>
						 <?php
                            while ($data = mysqli_fetch_array($result)){
                                ?>
                                <tr>
                                    <td width="40px"> <?php echo ++$no_urut; ?></td>
                                    <td> <?php echo $data ['nama']; ?> </td>
									<td> <?php echo $data ['isi']; ?> </td>
									<td> <?php echo $data ['created_by']; ?> </td>
									<td> <?php echo $data ['created_dt']; ?> </td>
									<td> <?php echo $data ['changed_by']; ?> </td>
									<td> <?php echo $data ['changed_dt']; ?> </td>
                                    <td class="align-middle text-center">
										<a href="#" data-toggle="modal" data-target="#form-modal" id='<?php echo  $data['id']; ?>' class="open_modal btn btn-xs btn-default"><span class="glyphicon glyphicon-pencil"></span></a>
										<a href="#" onclick="confirm_modal('aksiUtilitas/proses_delete.php?&id=<?php echo  $data['id']; ?>');" class="btn btn-xs btn-danger"><span class="glyphicon glyphicon-erase"></span></a>
									</td>
                                </tr>
                                <?php
                            }
                            ?>
					</tbody>
				</table>
				<!-- /.table-responsive -->
			</div>
			</div>
			<!-- /.panel-body -->
		</div>
		<!-- /.panel -->
	</div>
	<!-- /.col-lg-12 -->
</div>
<!-- /.row -->


<!-- Modal Popup untuk Add--> 
<div id="ModalAdd" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h4 class="modal-title" id="myModalLabel">Tambah Data Utilitas</h4>
        </div>

        <div class="modal-body">
          <form action="aksiUtilitas/proses_save.php" name="modal_popup" enctype="multipart/form-data" method="POST">
                
				<div class="form-group" style="padding-bottom: 20px;">
                  <label for="Modal Name">Nama</label>
                  <input type="text" name="nama"  class="form-control" placeholder="Nama.." required/>
                </div>
				
				<div class="form-group" style="padding-bottom: 20px;">
                  <label for="Description">Isi</label>
				   <textarea class="ckeditor" name="isi"></textarea>	
                </div>
              <div class="modal-footer">
                  <button class="btn btn-success btn-xs" type="submit">
                      Simpan
                  </button>

                  <button type="reset" class="btn btn-danger btn-xs"  data-dismiss="modal" aria-hidden="true">
                    Batal
                  </button>
              </div>
		  </form>
		</div>
           
        </div>
    </div>
</div>

<!-- Modal Popup untuk Edit--> 
<div id="ModalEdit" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

</div>

<!-- Modal Popup untuk delete--> 
<div id="modal_delete" class="modal fade">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title">
							Konfirmasi
						</h4>
					</div>
					<div class="modal-body">
						<!--
						-- Beri id "data-nis" untuk textbox nis yang digunakan untuk menampung
						-- data nis yang akan dihapus
						-->
						<input type="hidden" id="data-id">
						
						Apakah anda yakin ingin menghapus data ini?
					</div>
					<div class="modal-footer">
						  <a href="#" class="btn btn-danger btn-xs" id="delete_link">Hapus</a>
						  <button type="button" class="btn btn-success btn-xs" data-dismiss="modal">Batal</button>
					</div>
				</div>
			</div>
		</div>


<!-- Javascript untuk popup modal Edit--> 
<script type="text/javascript">
   $(document).ready(function () {
	   $('#dataTables').dataTable();
   $(".open_modal").click(function(e) {
      var m = $(this).attr("id");
		   $.ajax({
    			   url: "aksiUtilitas/modal_edit.php",
    			   type: "GET",
    			   data : {id: m,},
    			   success: function (ajaxData){
      			   $("#ModalEdit").html(ajaxData);
				   CKEDITOR.replace("test1");
      			   $("#ModalEdit").modal('show',{backdrop: 'true'});
      		   }
    		   });
        });
      });
</script>

<!-- Javascript untuk popup modal Delete--> 
<script type="text/javascript">
    function confirm_modal(delete_url)
    {
      $('#modal_delete').modal('show', {backdrop: 'static'});
      document.getElementById('delete_link').setAttribute('href' , delete_url);
    }
</script>