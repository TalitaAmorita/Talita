<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<table border=1>
	<tr>
		<th>No</th>
		<th>Username</th>
		<th>Password</th>
		<th>Level</th>
		<th>Aksi</th>
	</tr>
	<a href="http://localhost/talita-booking/index.php/user/form">Input Data</a><br/>
	<?php
	$nomor = 1;
	foreach ($tbuser as $row) {
	?>
	<tr>
		<td><?php echo $nomor++; ?></td>
		<td><?php echo $row->username?></td>
		<td><?php echo $row->password?></td>
		<td><?php echo $row->level?></td>
		<td><a href="<?php echo base_url(). "index.php/user/del/" . $row->id; ?>">Hapus</a> |
		<a href="<?php echo base_url() . "index.php/user/edit/" . $row->id; ?>">Edit</a>
		</td>
	</tr>
	<?php
	}
	?>
	
</table>

</body>
</html>