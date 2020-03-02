<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	
	<?php
			include "koneksi.php";
			$id = $_GET['nim'];
			$query = "select * from mahasiswa where nim = '$id'";
			$sql = mysqli_query($koneksi,$query);
			while ($data = mysqli_fetch_array($sql)) {
				$id = $data['nim'];
				$nama = $data['nama'];
				$alamat = $data['alamat'];
				$no_hp = $data['no_hp'];
				$tgl_lahir = $data['tgl_lahir'];
	?>

	<form action="proses_update.php" method="post">
		<table align="center">
			<tr>
				<td>NIM</td>
				<td><input type="text" name="nim" value="<?php echo $id ?>"><br></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama" value="<?php echo $nama ?>"><br></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td><input type="text" name="alamat" value="<?php echo $alamat ?>"><br></td>
			</tr>
			<tr>
				<td>No Hp</td>
				<td><input type="text" name="no_hp" value="<?php echo $no_hp ?>"><br></td>
			</tr>
			<tr>
				<td>Tgl Lahir</td>
				<td><input type="date" name="tgl_lahir" value="<?php echo $tgl_lahir ?>"><br></td>
			</tr>
			<tr>
				<td colspan="2" align="center"><button type="submit" name="submit">Kirim Data</button></td>
			</tr>
		</table>
	</form>
	<?php }?>
</body>
</html>