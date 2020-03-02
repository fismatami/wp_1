<?php

	include "koneksi.php";

	$username = $_POST['username'];
	$password = $_POST['password'];

	$sql = "select * from login";
	$query = mysqli_query($koneksi,$sql);

	while ($data = mysqli_fetch_array($query)) {
		$uname = $data['username'];
		$pass = $data['password'];

		if (($username != $uname) || ($password != $pass)) {
			echo "<meta http-equiv='refresh' content='0;url=index.php'>";
			
		} else {
			echo "<meta http-equiv='refresh' content='0;url=lihat_data.php'>";
		}

	}

	
	

?>