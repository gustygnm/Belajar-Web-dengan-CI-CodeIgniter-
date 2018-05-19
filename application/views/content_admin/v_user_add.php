<form action="<?php echo site_url('user/store'); ?>" method="post">
	<div class="form-group">
		<label>Nama</label>
		<input type="text" name="nama" class="form-control input-sm">
	</div>
	<div class="form-group">
		<label>Username</label>
		<input type="text" name="username" class="form-control input-sm">
	</div>
	<div class="form-group">
		<label>Password</label>
		<input type="password" name="password" class="form-control input-sm">
	</div>
	<div class="form-group">
		<label>Email</label>
		<input type="email" name="email" class="form-control input-sm">
	</div>
	<div class="form-group">
		<label>Alamat</label>
		<input type="text" name="alamat" class="form-control input-sm">
	</div>
	<div class="form-group">
		<label>Role</label>
		<select name="role" class="form-control input-sm">
			<option value="admin">Admin</option>
			<option value="user">User</option>
		</select>
	</div>
	<div class="form-group">
		<input type="submit" name="submit" value="Simpan" class=" btn btn-primary btn-sm">
		<a class="btn btn-default btn-sm" href="<?php echo site_url('user'); ?>">Kembali</a>
	</div>
</form>