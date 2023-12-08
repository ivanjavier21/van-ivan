<div id="ngilang">
	<?= $this->session->flashdata('alert')?>
</div>
<form action="<?= site_url('admin/konfigurasi/update') ?>" method="post">
	<div class="col-xl">
		<div class="bg-secondary rounded h-100 p-4">
			<h6 class="mb-4">Konfigurasi</h6>
			<form>
				<div class="row">
					<div class="col mb-3">
						<label class="form-label">Judul Website</label>
						<input type="text" class="form-control text-white" name="judul" value="<?= $konfig->judul_website; ?>" />
					</div>
				</div>
				<div class="row">
					<div class="col mb-3">
						<label class="form-label">Profile</label>
						<textarea name="profil_website" class="form-control"><?= $konfig->profil_website; ?></textarea>
					</div>
				</div>
				<div class="row">
					<div class="col mb-3">
						<label class="form-label">Facebook</label>
						<input type="text" id="nameWithTitle" class="form-control text-white" name="facebook" value="<?= $konfig->facebook; ?>"  />
					</div>
				</div>
				<div class="row">
					<div class="col mb-3">
						<label class="form-label">Instagram</label>
						<input type="text" id="nameWithTitle" class="form-control text-white" name="instagram" value="<?= $konfig->instagram; ?>"  />
					</div>
				</div>
				<div class="row">
					<div class="col mb-3">
						<label class="form-label">Email</label>
						<input type="text" id="nameWithTitle" class="form-control text-white" name="email" value="<?= $konfig->email; ?>"  />
					</div>
				</div>
				<div class="row">
					<div class="col mb-3">
						<label class="form-label">Alamat</label>
						<input type="text" id="nameWithTitle" class="form-control text-white" name="alamat" value="<?= $konfig->alamat; ?>"  />
					</div>
				</div>
				<div class="row">
					<div class="col mb-3">
						<label class="form-label">WhatsApp</label>
						<input type="text" id="nameWithTitle" class="form-control text-white" name="no_wa" value="<?= $konfig->no_wa; ?>"  />
					</div>
				</div>
                <button type="submit" class="btn btn-info">Simpan</button>
			</form>
		</div>
	</div>
</form>
