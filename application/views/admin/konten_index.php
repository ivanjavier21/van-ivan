<div id="ngilang">
	<?= $this->session->flashdata('alert')?>
</div>
<button type="button" class="btn btn-info mb-2" data-bs-toggle="modal" data-bs-target="#exampleModal">
	Tambah Konten
</button>
<!-- Modal -->
<form action="<?= site_url('admin/konten/simpan') ?>" method="post" enctype='multipart/form-data'>
	<div class="modal fade text-white" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
		aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header bg-secondary">
					<h5 class="modal-title" id="exampleModalLabel">Tambah Konten</h5>
					<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body bg-secondary">
					<div class="row">
						<div class="col mb-3">
							<label class="form-label">Judul</label>
							<input type="text" id="nameWithTitle" class="form-control text-white" placeholder="Nama"
								name="judul" required />
						</div>
					</div>
					<div class="row">
						<div class="col mb-3">
							<label class="form-label">Kategori</label>
							<select name="id_kategori" class="form-control">
								<?php foreach($kategori as $aa) { ?>
								<option value="<?= $aa['id_kategori'] ?>"><?= $aa['nama_kategori'] ?></option>
								<?php } ?>
							</select>
						</div>
					</div>
					<div class="row">
						<div class="col mb-3">
							<label class="form-label">Keterangan</label>
							<textarea name="keterangan" class="form-control"></textarea>
						</div>
					</div>
					<div class="row">
						<div class="col mb-3">
							<label class="form-label">Foto</label>
							<input type="file" name="foto" class="form-control" accept="image/png, image/jpeg">
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-primary" data-bs-dismiss="modal">
							Close
						</button>
						<button type="submit" class="btn btn-info">Simpan</button>
					</div>
				</div>
			</div>
		</div>
</form>
</div>

<div class="bg-secondary rounded h-100 p-4">
	<h6 class="mb-4">Kategori Konten</h6>
	<div class="table-responsive">
		<table class="table">
			<thead>
				<tr>
					<th scope="col">No</th>
					<th scope="col">judul</th>
					<th scope="col">Kategori Konten</th>
					<th scope="col">Tanggal</th>
					<th scope="col">Kreator</th>
					<th scope="col">Foto</th>
					<th scope="col">Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php $i=1; foreach($konten as $aa) { ?>
				<tr>
					<th scope="row"><?= $i ?></th>
					<td><?= $aa['judul'] ?></td>
					<td><?= $aa['nama_kategori'] ?></td>
					<td><?= $aa['tanggal'] ?></td>
					<td><?= $aa['nama'] ?></td>
					<td>
						<a href="<?= base_url('assets/upload/konten/'.$aa['foto']) ?>" target="_blank">
							<span class="fa fa-edit"></span>Lihat Foto
						</a>
					</td>
					<td>
						<a href="<?php echo site_url('admin/konten/delete_data/'.$aa['foto']);?>"
							class="btn btn-sm btn-danger" onClick="return confirm('apakah anda yakin menghapus')"><span
								class="fa fa-trash"></span></a>
						<button type="button" class="btn btn-sm btn-info" data-bs-toggle="modal"
							data-bs-target="#konten<?= $i ?>">
							<span class="fa fa-edit"></span></a>
						</button>
						<!-- Modal -->
						<form action="<?= site_url('admin/konten/update') ?>" method="post"
							enctype='multipart/form-data'>
							<input type="hidden" name="nama_foto" value="<?= $aa['foto'] ?>">
							<div class="modal fade text-white" id="konten<?= $i ?>" tabindex="-1" role="dialog"
								aria-labelledby="exampleModalLabel" aria-hidden="true">
								<div class="modal-dialog" role="document">
									<div class="modal-content">
										<div class="modal-header bg-secondary">
											<h5 class="modal-title" id="exampleModalLabel"><?= $aa['judul'] ?></h5>
											<button type="button" class="close" data-bs-dismiss="modal"
												aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>
										<div class="modal-body bg-secondary">
											<div class="row">
												<div class="col mb-3">
													<label class="form-label">Judul</label>
													<input type="text" id="nameWithTitle"
														class="form-control text-white" value="<?= $aa['judul'] ?>"
														name="judul" />
												</div>
											</div>
											<div class="row">
												<div class="col mb-3">
													<label class="form-label">Kategori</label>
													<select name="id_kategori" class="form-control">
														<?php foreach($kategori as $uu) { ?>
														<option
															<?php if($uu['id_kategori']==$aa['id_kategori']){ echo"selected"; } ?>
															value="<?= $uu['id_kategori'] ?>">
															<?= $uu['nama_kategori'] ?></option>
														<?php } ?>
													</select>
												</div>
											</div>
											<div class="row">
												<div class="col mb-3">
													<label class="form-label">Keterangan</label>
													<textarea name="keterangan"
														class="form-control"><?= $aa['keterangan'] ?></textarea>
												</div>
											</div>
											<div class="row">
												<div class="col mb-3">
													<label class="form-label">Foto</label>
													<input type="file" name="foto" class="form-control"
														accept="image/png, image/jpeg">
												</div>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-primary" data-bs-dismiss="modal">
													Close
												</button>
												<button type="submit" class="btn btn-info">Simpan</button>
											</div>
										</div>
									</div>
								</div>
						</form>
	</div>
	</td>
</div>
</tr>
<?php $i++;} ?>
</tbody>
</table>
</div>
