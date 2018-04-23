<!DOCTYPE html>
<html>
<head>
	<title>Biodata</title>
	<link rel="stylesheet" type="text/css" href="<?php echo 
	base_url(); ?>asset/bootstrap/css/bootstrap.min.css">
</head>
<body>
	<center>
		<h4>Biodata Saya</h4>
		<table class="table table-bordered">
			<tr>
				<td>Nama</td>
				<td> : </td>
				<td><?php echo $nama?></td>
			</tr>
			<tr>
				<td>NIM</td>
				<td> : </td>
				<td><?php echo $nim?></td>
			</tr>		
			<tr>
				<td>Kelas</td>
				<td> : </td>
				<td><?php echo $kelas?></td>
			</tr>		
			<tr>
				<td>Semester</td>
				<td> : </td>
				<td><?php echo $semester?></td>
			</tr>
		</table>
	</center>
</body>
</html>