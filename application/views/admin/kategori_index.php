<div id="ngilang">
	<?= $this->session->flashdata('alert')?>
</div>
<button type="button" class="btn btn-info mb-2" data-bs-toggle="modal" data-bs-target="#exampleModal">
	Tambah Kategori
</button>
<!-- Modal -->
<form action="<?= site_url('admin/kategori/simpan') ?>" method="post">
	<div class="modal fade text-white" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
		aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header bg-secondary">
					<h5 class="modal-title" id="exampleModalLabel">Tambah Kategori</h5>
				</div>
				<div class="modal-body bg-secondary">
					<div class="row">
						<div class="col mb-3">
							<label class="form-label">Nama Kategori</label>
							<input type="text" id="nameWithTitle" class="form-control text-white" placeholder="Nama"
								name="nama_kategori" required />
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
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
					<th scope="col">Nama Kategori Konten</th>
					<th scope="col">Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php $i=1; foreach($kategori as $aa) { ?>
				<tr>
					<th scope="row"><?= $i ?></th>
					<td><?= $aa['nama_kategori'] ?></td>
					<td>
						<a href="<?php echo site_url('admin/kategori/delete_data/'.$aa['id_kategori']);?>"
							class="btn btn-sm btn-danger" onClick="return confirm('apakah anda yakin menghapus')"><span
								class="fa fa-trash"></span></a>
						<button type="button" class="btn btn-sm btn-warning " data-bs-toggle="modal"
							data-bs-target="#edit<?= $aa['id_kategori'] ?>">
							<span class="fa fa-edit"></span>
						</button>
						<form action="<?= site_url('admin/kategori/update') ?>" method="post">
							<input type="hidden" name="id_kategori" value="<?= $aa['id_kategori'] ?>">
							<div class="modal fade text-white" id="edit<?= $aa['id_kategori'] ?>" tabindex="-1"
								role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
								<div class="modal-dialog" role="document">
									<div class="modal-content">
										<div class="modal-header bg-secondary">
											<h5 class="modal-title" id="exampleModalLabel">Perbarui Kategori</h5>
											<button type="button" class="close" data-bs-dismiss="modal"
												aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>
										<div class="modal-body bg-secondary">
											<div class="row">
												<div class="col mb-3">
													<label class="form-label">Nama Kategori Konten</label>
													<input type="text" id="nameWithTitle"
														class="form-control text-white" value="<?= $aa['nama_kategori'] ?>"
														name="nama_kategori" />
												</div>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-info"
													data-bs-dismiss="modal">Close</button>
												<button type="submit" class="btn btn-primary">Simpan</button>
											</div>
										</div>
									</div>
								</div>
						</form>
	</div>
	</td>
	</tr>
	<?php $i++;} ?>
	</tbody>
	</table>
</div>
