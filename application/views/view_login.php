<!DOCTYPE html>
<html lang="en">
<head>
	<title></title>
</head>
<body>
	<center>

		<form action="<?php echo base_url('index.php/Mahasiswa/login') ?>" method="post">
		<h2>LOGIN INTERFACE</h2>
			<table>
				<tr>
					<td>Username</td>
					<td><input type="text" name="username"></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="Password" name="password"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="Login"></td>
				</tr>
				
			</table>
			
		</form>
	</center>
</body>
</html>