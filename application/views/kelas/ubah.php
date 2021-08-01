<!-- Begin Page Content -->
<div class="container-fluid">
	<!-- new table -->
	<div class="row mt-3 justify-content-center">
		<div class="col-md-12">

			<!-- form CI -->
			<div class="card col-md-6 mx-auto">
				<!-- <div class="card-header mt-2">
					<h3>Ubah Data Admin</h3>
				</div> -->
				<div class="card-body">
					
					<form action="" method="post">
						<!-- id -->
						<input type="hidden" name="tmp_id_kelas" value="<?= $kls['id_kelas']; ?>">
						<div class="form-group">
							<label for="id_kelas">Kode Kelas</label>
							<input type="text" name="id_kelas" maxlength="5" class="form-control" id="id_kelas" value="<?= $kls['id_kelas']; ?>">
							<small  class="form-text text-danger"><?= form_error('id_kelas'); ?>.</small>
						</div>

						<!-- nama -->
						<div class="form-group">
							<label for="nama_kelas">Nama Kelas</label>
							<input type="text" name="nama_kelas" class="form-control" id="nama_kelas" value="<?= $kls['nama_kelas']; ?>">
							<small  class="form-text text-danger"><?= form_error('nama_kelas'); ?>.</small>
						</div>

						<button type="submit" name="ubah" class="btn btn-primary float-right">Ubah Data</button>
					</form>
				</div>
			</div>
		</div>
	</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->


