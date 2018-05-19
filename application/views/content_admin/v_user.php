<table class="table table-bordered">
<thread>
<tr>
<td>No</td>
<td>Nama</td>
<td>Username</td>
<td>Password</td>
<td>Email</td>
<td>Alamat</td>
<td>Role</td>
</tr>
</thread>
<tbody>
	<?php foreach ($isi_tabel as $key ) { ?>

	<tr>
		<td><?php echo $key->id; ?></td>
		<td><?php echo $key->nama; ?></td>
		<td><?php echo $key->username; ?></td>
		<td><?php echo $key->password; ?></td>
		<td><?php echo $key->email; ?></td>
		<td><?php echo $key->alamat; ?></td>
		<td><?php echo $key->role; ?></td>
		<td>edit | hapus</td>
	</tr>

	<?php } ?>
</tbody>

</table>
<a class=" btn btn-primary btn-sm" href="<?php echo site_url('user/tambah'); ?>">Tambah Data</a>
<br>