<form action="<?php echo site_url('barang/store'); ?>" method="post" enctype="multipart/form-data">
	<div class="form-group">
		<label>Nama Barang</label>
		<input type="text" name="nama_barang" class="form-control input-sm">
	</div>
	<div class="form-group">
		<label>Deskripsi</label>
		<input type="text" name="deskripsi" class="form-control input-sm">
	</div>
	<div class="form-group">
		<label>Kategori</label>
		<select name="kategori" class="form-control input-sm">
			<option value="pakaian">Pakaian</option>
			<option value="elekrotnik">Elektronik</option>
			<option value="accesoris">Accesoris</option>
			<option value="lainnya">Lainnya</option>
		</select>
	</div>
	<div class="form-group">
		<label>Harga</label>
		<input type="number" name="harga" class="form-control input-sm">
	</div>
	<div class="form-group">
		<label>Status</label>
		<select name="status" class="form-control input-sm">
			<option value="tersedia">Tersedia</option>
			<option value="habis">Habis</option>
		</select>
	</div>
	<div class="form-group">
		<label>Gambar</label>
		<input type="file" name="image" class="form-control input-sm">
	</div>

	<div class="form-group">
		<input type="submit" name="submit" value="Simpan" class=" btn btn-primary btn-sm">
		<a class="btn btn-default btn-sm" href="<?php echo site_url('barang'); ?>">Kembali</a>
	</div>
</form>