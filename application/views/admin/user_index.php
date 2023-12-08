<div id="ngilang">
	<?= $this->session->flashdata('alert')?>
</div>
<button type="button" class="btn btn-info mb-2" data-bs-toggle="modal" data-bs-target="#exampleModal">
	Tambah User
</button>
<!-- Modal -->
<form action="<?= site_url('admin/user/simpan') ?>" method="post">
	<div class="modal fade text-white" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
		aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header bg-secondary">
					<h5 class="modal-title" id="exampleModalLabel">Tambah User</h5>
					<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body bg-secondary">
					<div class="row">
						<div class="col mb-3">
							<label class="form-label">-Nama</label>
							<input type="text" id="nameWithTitle" class="form-control text-white" placeholder="Nama" name="nama"
								required />
						</div>
					</div>
					<div class="row">
						<div class="col mb-3">
							<label class="form-label">-Username</label>
							<input type="text" id="nameWithTitle" class="form-control text-white" placeholder="Username"
								name="username" required />
						</div>
					</div>
					<div class="row">
						<div class="col mb-3">
							<label class="form-label">-Password</label>
							<input type="password" id="nameWithTitle" class="form-control text-white" placeholder="Password"
								name="password" required />
						</div>
					</div>
					<div class="row">
						<div class="col mb-3">
							<label class="form-label">-Level</label>
							<select name="level" class="form-control">
								<option value="Admin">Admin</option>
								<option value="Kontributor">Kontributor</option>
							</select>
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
	<h6 class="mb-4">Data Pengguna</h6>
	<div class="table-responsive">
		<table class="table">
			<thead>
				<tr>
					<th scope="col">No</th>
					<th scope="col">Username</th>
					<th scope="col">Nama</th>
					<th scope="col">Level</th>
					<th scope="col">Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php $i=1; foreach($user as $aa) { ?>
				<tr>
					<th scope="row"><?= $i ?></th>
					<td><?= $aa['username'] ?></td>
					<td><?= $aa['nama'] ?></td>
					<td><?= $aa['level'] ?></td>
					<td>
						<a href="<?php echo site_url('admin/user/delete_data/'.$aa['id_user']);?>" class="btn btn-sm btn-danger"
							onClick="return confirm('apakah anda yakin menghapus')"><span class="fa fa-trash"></span></a>
						<button type="button" class="btn btn-sm btn-warning " data-bs-toggle="modal" 
            data-bs-target="#edit<?= $aa['id_user'] ?>">
							<span class="fa fa-edit"></span>
						</button>
						<form action="<?= site_url('admin/user/update') ?>" method="post">
             <input type="hidden" name="id_user" value="<?= $aa['id_user'] ?>">
							<div class="modal fade text-white" id="edit<?= $aa['id_user'] ?>" tabindex="-1" role="dialog"
								aria-labelledby="exampleModalLabel" aria-hidden="true">
								<div class="modal-dialog" role="document">
									<div class="modal-content">
										<div class="modal-header bg-secondary">
											<h5 class="modal-title" id="exampleModalLabel">Perbarui Nama User</h5>
											<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>
										<div class="modal-body bg-secondary">
                      <div class="row">
                        <div class="col mb-3">
                          <label class="form-label">-Nama</label>
                          <input type="text" id="nameWithTitle" class="form-control text-white" value="<?= $aa['nama'] ?>"
                            name="nama" />
                        </div>
                      </div>
                      <div class="row">
                        <div class="col mb-3">
                          <label class="form-label">-Username</label>
                          <input type="text" id="nameWithTitle" class="form-control text-black" value="<?= $aa['username'] ?>"
                            name="username" readonly/>
                        </div>
                      </div>
											<div class="modal-footer">
												<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
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
