<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
</head>
<body>
	
	<center>
		<a href="<?php echo base_url('index.php/Mahasiswa/logout'); ?>">LOGOUT</a>
		<br>
		<h2>Halo <?php echo $_SESSION['username']; ?></h2>
		<h1>Input Data</h1>
		<form action="<?php echo base_url('index.php/Mahasiswa/insert_mahasiswa') ?>" method="POST"> <!-- base url hanya bisa di php -->
			<table>
				<tr>
					<td>Nama</td>
					<td>:</td>
					<td><input type="text" name="nama"></td>
				</tr>
				<tr>
					<td>Nim</td>
					<td>:</td>
					<td><input type="text" name="nim"></td>
				</tr>
			</table>
			<input type="submit" value="Simpan">
		</form>


		<table border="1">
			<tr>
				<td>No</td>
				<td>Nama</td>
				<td>Nim</td>
				<td>Aksi</td>
			</tr>

			<?php 
			
				$no = 1;
				foreach($data as $mhs){ ?>
				<tr>
					<td><?php echo $no; ?></td>
					<td><?php echo $mhs->nama; ?></td>
					<td><?php echo $mhs->nim; ?></td>
					<td>
						<a href="<?php echo base_url('index.php/Mahasiswa/delete_mahasiswa?id=').$mhs->id; ?>">Hapus</a>
						<a href="<?php echo base_url('index.php/Mahasiswa/update_mahasiswa?id=').$mhs->id; ?>">Edit</a>
					</td>
				</tr>

				<?php 
				$no++;
			} 
			
			?>

			

		</table>


	</center>
</body>
</html>