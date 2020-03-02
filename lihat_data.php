<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<table border="1" align="center">
		<tr align="center">
			<td>Nama</td>
			<td>Alamat</td>
			<td>No hp</td>
			<td>Tgl lahir</td>
			<td colspan="3" align="center">New</td>

		</tr>

		<?php
			include "koneksi.php";
			$query = "select * from mahasiswa";
			$sql = mysqli_query($koneksi,$query);
			while ($data = mysqli_fetch_array($sql)) {
				$id = $data['nim'];
				$nama = $data['nama'];
				$alamat = $data['alamat'];
				$no_hp = $data['no_hp'];
				$tgl_lahir = $data['tgl_lahir'];
		?>

				<tr align="center">
					<td><?php echo $nama; ?></td>
					<td><?php echo $alamat; ?></td>
					<td><?php echo $no_hp; ?></td>
					<td><?php echo $tgl_lahir; ?></td>
					<td><a href="update.php?<?php echo "nim=$id"?>">Update</a></td>
					<td><a href="proses_delete.php?<?php echo "no=$id"?>">Delete</a></td>
					<td><a href="create.php">Create</a></td>
				</tr>

			<?php }?>
		
	</table>
</body>
</html>