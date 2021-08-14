<div class="container">
	<div class="row mt-3">
		<div class="col-md-6">
			<div class="card">
				<div class="card-header text-center">Form Tambah Barang</div>
				<div class="card-body">

					<?php if (validation_errors()): ?>
						<div class="alert alert-danger" role="alert">
						  <?= validation_errors(); ?>
						</div>
					<?php endif ?>

					<form action="" method="post">
						<div class="mb-3">
							<label for="nama" class="form-label">Nama</label>
							<input type="text" name="nama" id="nama" class="form-control">
						</div>
						<div class="mb-3">
							<label for="harga" class="form-label">Harga</label>
							<input type="number" name="harga" id="harga" class="form-control">
						</div>
						<div class="mb-3">
							<label for="berat" class="form-label">Berat</label>
							<input type="number" name="berat" id="berat" class="form-control">
						</div>
						<div class="mb-3">
							<label for="warna" class="form-label">Warna</label>
							<input type="text" name="warna" id="warna" class="form-control">
						</div>
						<div class="mb-3">
							<label for="jumlah" class="form-label">Jumlah</label>
							<input type="number" name="jumlah" id="jumlah" class="form-control">
						</div>
						<div class="mb-3">
							<label for="deskripsi" class="form-label">Deskripsi</label>
							<textarea name="deskripsi" id="deskripsi" cols="30" rows="5" class="form-control"></textarea>
						</div>
						<button type="submit" class="btn btn-primary float-end">Submit</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>