<?php //buatseminar
		$username=$_GET['username'];
		include("koneksi.php");
		// Tahap 2. Query SQL
		$sql = "UPDATE tbl_seminar SET status = 'Aktif' WHERE username = '$username' AND status = 'Tidak Aktif'";
		$insrt = mysqli_query($koneksi, $sql);

		$sql = "CREATE TABLE $username (id_pes int(5) primary key AUTO_INCREMENT NOT NULL, username varchar(50), password varchar(25), nama_pes varchar(50), nim  varchar(15), jurusan varchar(25), email varchar(25), paper text, pembayaran text, konfirmasi varchar(20), hadir varchar(15), user_sem varchar(30) )";
		$buat = mysqli_query($koneksi, $sql);

		if($insrt) header('location:../Admin/Verifikasi.php');

 ?>