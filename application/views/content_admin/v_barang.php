<table class="table table-bordered">
<thread>
<tr>
<td>No</td>
<td>Nama Barang</td>
<td>Deskripsi</td>
<td>Kategori</td>
<td>Harga</td>
<td>Status</td>
<td>Aksi</td>
</tr>
</thread>
<tbody>
	<?php foreach ($isi_tabel as $key ) { ?>

	<tr>
		<td><?php echo $key->id; ?></td>
		<td><?php echo $key->nama_barang; ?></td>
		<td><?php echo $key->deskripsi; ?></td>
		<td><?php echo $key->kategori; ?></td>
		<td>Rp. <?php echo $key->harga; ?></td>
		<td><?php echo $key->status; ?></td>
		<td><a class="btn btn-default btn-sm" href="<?php echo site_url('barang/edit/' .$key->id); ?>"> Edit </a>  <a class="btn btn-danger btn-sm" href="<?php echo site_url('barang/hapus/' .$key->id); ?>"> Hapus </a></td>
	</tr>

	<?php } ?>
</tbody>

</table>
<a class=" btn btn-primary btn-sm" href="<?php echo site_url('barang/tambah'); ?>">Tambah Data</a>
<br>