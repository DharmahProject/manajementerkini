<?php
    include "../koneksi.php";
	$id=$_GET['id'];
	$modal=mysqli_query($koneksi,"SELECT * FROM utilitas WHERE id='$id'");
	$r=mysqli_fetch_array($modal);
?>

<div class="modal-dialog">
    <div class="modal-content">

    	<div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h4 class="modal-title" id="myModalLabel">Edit Data Utilitas</h4>
        </div>

        <div class="modal-body">
        	<form action="aksiUtilitas/proses_edit.php" name="modal_popup" enctype="multipart/form-data" method="POST">
        		

				<div class="form-group" style="padding-bottom: 20px;">
                  <label for="Modal Name">Nama</label>
				  <input type="hidden" name="id"  class="form-control" value="<?php echo $r['id']; ?>" />
                  <input type="text" name="nama"  class="form-control" placeholder="Nama.." required value="<?php echo $r['nama']; ?>"/>
                </div>
				
				<div class="form-group" style="padding-bottom: 20px;">
                  <label for="Description">Isi</label>
				   <textarea class="ckeditor" name="isi" id="test1"><?php echo $r['isi']; ?></textarea>
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