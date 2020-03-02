<?php

	include "koneksi.php";

	$no = $_GET['no'];
	$sql = "delete from mahasiswa where nim = '$no'";
	$query = mysqli_query($koneksi,$sql);

	if ($query) {
		echo "berhasil hapus
		<meta http-equiv='refresh' content='0;url=lihat_data.php'> ";
	} else {
		echo "gagal hapus
		<meta http-equiv='refresh' content='0;url=lihat_data.php'>";
	}
	

?>