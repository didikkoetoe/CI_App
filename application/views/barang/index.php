<div class="container mt-3">
	<div class="row mt-3">
		<div class="col-md-6">
			<a href="<?= base_url(); ?>Barang/tambah" class="btn btn-primary float-end">Tambah Barang</a>
			<h2 class="text-center">Daftar Barang</h2>
			<ul class="list-group">
				<?php foreach($barang as $brg): ?>
					<li class="list-group-item"><?= $brg['nama']; ?></li>
				<?php endforeach; ?>
			</ul>
		</div>
	</div>
</div>