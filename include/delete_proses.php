<?php //buatseminar
		$username=$_GET['username'];
		include("koneksi.php");
		// Tahap 2. Query SQL

		$sql = "SELECT * FROM $username where hadir = 'hadir'";
				$hitung = mysqli_query($koneksi, $sql);
				$rows= mysqli_num_rows($hitung);

		
		$sql = "SELECT * FROM tbl_seminar where username = '$username'";
		$cari = $delete = mysqli_query($koneksi, $sql); 
		$row = mysqli_fetch_assoc($cari);
		$nama_sem = $row['nama_sem'];
		$penanggungjawab = $row['penanggungjawab'];
		$jadwal = $row['jadwal'];

		$sql = "INSERT INTO tbl_rekap (nama_sem, jadwal, penanggungjawab, jml_pes) VALUES ('$nama_sem', '$jadwal', '$penanggungjawab', $rows)";
		$insert = mysqli_query($koneksi, $sql);

		$sql = "DELETE FROM tbl_login WHERE user_sem='$username'";
		$delete = mysqli_query($koneksi, $sql);

		$sql = "DELETE FROM tbl_login WHERE username='$username'";
		$delete = mysqli_query($koneksi, $sql);

		$sql = "DELETE FROM tbl_seminar WHERE username='$username'";
		$delete1 = mysqli_query($koneksi, $sql);

		$sql = "DROP TABLE $username";
		$drop = mysqli_query($koneksi, $sql);

		$sql = "SELECT * FROM $username";
		$cari = mysqli_query($koneksi, $sql);
		while($row = mysqli_fetch_assoc($cari)){
			unlink("../uploads/gambar/pembayaran/".$username.'/'.$row['pembayaran']);
		}
		rmdir("../uploads/gambar/pembayaran/".$username);

		$sql = "SELECT * FROM $username";
		$cari = mysqli_query($koneksi, $sql);
		while($row = mysqli_fetch_assoc($cari)){
			unlink("../uploads/paper/".$username.'/'.$row['paper']);
		}
		rmdir("../uploads/paper/".$username);
		header('location:../Admin/ControlPengguna.php');

 ?>