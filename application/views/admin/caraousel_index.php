<div id="ngilang">
	<?= $this->session->flashdata('alert')?>
</div>
<h5>File Input</h5>
<div class="row">
	<div class="col-12 mb-3">
		<form action="<?= site_url('admin/caraousel/simpan') ?>" method="post" enctype='multipart/form-data'>
			<label class="form-label">Judul</label>
			<input type="text" class="form-control text-dark bg-white" placeholder="judul foto" name="judul" required />
	</div>
	<div class="col mb-3">
		<label class="form-label">Pilih Foto dengan ukuran (1:3)</label>
		<input type="file" name="foto" class="form-control" accept="image/png, image/jpeg">
	</div>
	<div class="modal-footer">
		<button type="submit" class="btn btn-primary">Simpan</button>
	</div>
	</form>
</div>
<div class="row d-flex col-lg-12">
	<?php foreach ($caraousel as $aa){ ?>
	<div class="card col-lg-3 my-2 mx-2">
		<img src="<?= base_url('assets/upload/caraousel/'.$aa['foto']) ?>" class="card-img-top">
		<div class="card-body">
			<h5 class="card-title text-dark"><?= $aa['judul'] ?></h5>
			<a href="<?php echo site_url('admin/caraousel/delete_data/'.$aa['foto']);?>" class="btn btn-sm btn-danger"
				onClick="return confirm('apakah anda yakin menghapus foto ini')"><span class="fa fa-trash"></span></a>
		</div>
	</div>
	<?php } ?>
</div>
