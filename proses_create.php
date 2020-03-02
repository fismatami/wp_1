<?php

	include "koneksi.php";

	$nama = $_POST['nama'];
	$alamat = $_POST['alamat'];
	$no_hp = $_POST['no_hp'];
	$tgl_lahir = $_POST['tgl_lahir'];


	if (empty($nama) || empty($alamat) || empty($no_hp) || empty($tgl_lahir)) {
		echo "gaboleh kosong <meta http-equiv='refresh' content='0;url=lihat_data.php'>";
	} else {
		$sql = "insert into mahasiswa (nama,alamat,no_hp,tgl_lahir) values ('$nama','$alamat','$no_hp','$tgl_lahir')";
		$query = mysqli_query($koneksi,$sql);

		if ($query) {
			echo "berhasil simpan
			<meta http-equiv='refresh' content='0;url=lihat_data.php'>";
		}else{
			echo "gagal simpan
			<meta http-equiv='refresh' content='0;url=lihat_data.php'>";
		}
	}

	
?>