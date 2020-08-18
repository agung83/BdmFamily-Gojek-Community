<div class="card">
	<div class="card-header">
		<h2>Data Admin</h2>
	</div>
	<div class="card-body">
		<a class="btn btn-success text-white mb-2" data-toggle="modal" data-target="#tambah"><i class="fa fa-plus-square mr-2"></i>Tambah Data</a>
		<div class="table-responsive">
			<table class="table table-bordered">
				<thead>
					<tr>
						<th>Nomor</th>
						<th>Admin Nama</th>
						<th>Admin Username</th>
						<th>Admin Password</th>
						<th>Admin Foto</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($dataadmin as $no => $pecah) :

					?>
						<tr>
							<td><?= ++$no ?></td>
							<td><?= $pecah->admin_nama  ?></td>
							<td><?= $pecah->admin_username  ?></td>
							<td><?= $pecah->admin_password  ?></td>
							<td><?= $pecah->admin_foto  ?></td>
							<td>
								<button onclick="showEdit()" class="btn btn-warning mb-1"><i class="fa fa-edit"></i></button>
								<button onclick="showDelete()" class="btn btn-danger mb-1"><i class="fa fa-trash"></i></button>
							</td>
						</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
		</div>

	</div>
</div>


<!-- Modal -->
<div class="modal fade" id="tambah" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header bg-success">
				<h5 class="modal-title" id="exampleModalLabel">Tambah Data Admin</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				...
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary">Save changes</button>
			</div>
		</div>
	</div>
</div>

<!-- Modal -->
<div class="modal fade" id="edit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header bg-success">
				<h5 class="modal-title" id="exampleModalLabel">Edit Data Admin</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				...
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary">Save changes</button>
			</div>
		</div>
	</div>
</div>

<div class="modal" id="delete">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-body">
				<h4 class="modal-title text-center">Yakin Ingin Menghapus Data..?</h4>
				<form action="<?= base_url('hapusBerita') ?>" method="POST">
					<input type="hidden" id="idhapus" name="idhapus">
			</div>
			<div class="modal-footer">
				<button type="submit" class="btn btn-primary btn-sm">Hapus</button>
				<button type="reset" data-dismiss="modal" class="btn btn-danger btn-sm">Batal</button>
			</div>
			</form>
		</div>
	</div>
</div>


<script>
	function showEdit() {
		$('#edit').modal()

	}

	function showDelete(params) {
		$('#delete').modal()
	}
</script>
