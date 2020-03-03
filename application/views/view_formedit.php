<!DOCTYPE html>
<html>
<head>
	<title>Edit Data</title>
</head>
<body>
	<center>
	<h1>Edit Data</h1>
	<form action="<?php echo base_url('index.php/Mahasiswa/update_proses'); ?>" method="POST"> <!-- base url hanya bisa di php -->
		
			<table>
				<?php foreach($data as $mhs){ ?>
					<tr >
						<td>ID</td>
						<td>:</td>
						<td><input type="text" name="id" value="<?php echo $mhs->id; ?>" readonly ></td>
					</tr>
					<tr>
						<td>Nama</td>
						<td>:</td>
						<td><input type="text" name="nama" value="<?php echo $mhs->nama; ?>"></td>
					</tr>
					<tr>
						<td>Nim</td>
						<td>:</td>
						<td><input type="text" name="nim" value="<?php echo $mhs->nim; ?>"></td>
					</tr>
				</table>
				<?php } ?>
			<input type="submit" value="Edit">
			<a href="<?php echo base_url('index.php/Mahasiswa'); ?>">Batal</a>
		</form>
	</center>
</body>
</html>


















