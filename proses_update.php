<?php

	include "koneksi.php";

	$no = $_POST['nim'];
	$nama = $_POST['nama'];
	$alamat = $_POST['alamat'];
	$no_hp = $_POST['no_hp'];
	$tgl_lahir = $_POST['tgl_lahir'];

	$sql = "update mahasiswa set nama='$nama', alamat='alamat', no_hp='$no_hp',tgl_lahir='$tgl_lahir' where nim='$no'";
	$query = mysqli_query($koneksi,$sql);

	if ($sql) {
		echo "berhasil update 
		<meta http-equiv='refresh' content='0;url=lihat_data.php'> ";
	} else {
		echo "gagal update
		<meta http-equiv='refresh' content='0;url=lihat_data.php'> ";
	}

?>