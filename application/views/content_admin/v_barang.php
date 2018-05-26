<table class="table table-bordered" style=" padding-right: :15px; ">
<thread>
<tr>
<td>No</td>
<td>Nama Barang</td>
<td>Deskripsi</td>
<td>Kategori</td>
<td>Harga</td>
<td>Status</td>
<td>Gambar</td>
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
		<td>
			<center>
	<img src="<?php echo base_url('foto-barang/'.$key->gambar); ?>" class="img" style="width: 80px">
			</center>
		</td>
		<td><a class="btn btn-default btn-sm" href="<?php echo site_url('barang/edit/' .$key->id); ?>"> Edit </a>  <a class="btn btn-danger btn-sm" href="<?php echo site_url('barang/delete/' .$key->id); ?>" onclick="return confirm('Yakin Hapus?')"> Hapus </a></td>
	</tr>

	<?php } ?>
</tbody>

</table>

    <script src="<?php echo base_url(); ?>asset/bootstrap/js/sweetalert.js"></script>
<a class=" btn btn-primary btn-sm" href="<?php echo site_url('barang/tambah'); ?>">Tambah Data</a>
<br>
