<form action="<?php echo site_url('barang/update'); ?>" method="post">
	<div class="form-group">
		<label>Nama Barang</label>
		<input type="text" name="nama_barang" class="form-control input-sm" value="<?php echo $isi_tabel->nama_barang; ?>">
	</div>
	<div class="form-group">
		<label>Deskripsi</label>
		<input type="text" name="deskripsi" class="form-control input-sm" value="<?php echo $isi_tabel->deskripsi; ?>">
	</div>
	<div class="form-group">
		<label>Kategori</label>
		<select name="kategori" class="form-control input-sm" >
			<option value="pakaian" <?php if ($isi_tabel->kategori=="pakaian") {echo "selected";} ?>>Pakaian</option>
			<option value="elekrotnik" <?php if ($isi_tabel->kategori=="elekrotnik") {echo "selected";} ?>>Elektronik</option>
			<option value="accesoris" <?php if ($isi_tabel->kategori=="accesoris") {echo "selected";} ?>>Accesoris</option>
			<option value="lainnya" <?php if ($isi_tabel->kategori=="lainnya") {echo "selected";} ?>>Lainnya</option>
		</select>
	</div>
	<div class="form-group">
		<label>Harga</label>
		<input type="number" name="harga" class="form-control input-sm" value="<?php echo $isi_tabel->harga; ?>">
	</div>
	<div class="form-group">
		<label>Status</label>
		<select name="status" class="form-control input-sm">
			<option value="tersedia" <?php if ($isi_tabel->status=="tersedia") {echo "selected";} ?>>Tersedia</option>
			<option value="habis" <?php if ($isi_tabel->status=="habis") {echo "selected";} ?>>Habis</option>
		</select>
	</div>
	<div class="form-group">
		<input type="submit" name="submit" value="Simpan" class=" btn btn-primary btn-sm">
		<a class="btn btn-default btn-sm" href="<?php echo site_url('barang'); ?>">Kembali</a>
	</div>
</form>