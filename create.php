<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<form action="proses_create.php" method="post">
		<table align="center">
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama"><br></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td><input type="text" name="alamat"><br></td>
			</tr>
			<tr>
				<td>No Hp</td>
				<td><input type="text" name="no_hp"><br></td>
			</tr>
			<tr>
				<td>Tgl Lahir</td>
				<td><input type="date" name="tgl_lahir"><br></td>
			</tr>
			<tr>
				<td colspan="2" align="center"><button type="submit" name="submit">Kirim Data</button></td>
			</tr>
		</table>
	</form>
</body>
</html>