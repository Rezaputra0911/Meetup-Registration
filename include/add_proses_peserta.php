<?php //daftarpeserta

	if(isset($_POST['submit'])){
		$username3=$_GET['username'];
		//Ambil data dari form
		$nama2 =$_POST['nama'];
		$nim = $_POST['nim'];
		$jurusan = $_POST['jurusan'];
		$email = $_POST['email'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		$konfirmasi = $_POST['konfirmasi'];

		if($password != $konfirmasi){
			 echo "<script>alert('Password Tidak Sama')</script>";
		}else{

			if($username == ''){
				include("koneksi.php");
				// Tahap 2. Query SQL
					$sql = "SELECT * FROM tbl_login where username = '$username'";
				$cari = mysqli_query($koneksi, $sql);
				if($row = mysqli_num_rows($cari) > 0){
					echo "<script>alert('username telah digunakan')</script>";
					return false;
				}else{
				$sql = "INSERT INTO $username3 (username, password, nama_pes, nim, jurusan, email, paper, pembayaran, konfirmasi, hadir, user_sem) VALUES ('$username', '$password', '$nama2', '$nim', '$jurusan', '$email', null, null, 'Dikonfirmasi', 'Tidak hadir', '$username3')";
					$insert = mysqli_query($koneksi, $sql);
					header('location: ../DaftarSeminar.php');
				}
			}else{
				include("koneksi.php");
				// Tahap 2. Query SQL
				$sql = "SELECT * FROM tbl_login where username = '$username'";
				$cari = mysqli_query($koneksi, $sql);
				if($row = mysqli_num_rows($cari) > 0){
					echo "<script>alert('username telah digunakan')</script>";
					return false;
				}else{
					$sql = "INSERT INTO $username3 (username, password, nama_pes, nim, jurusan, email, paper, pembayaran, konfirmasi, hadir, user_sem) VALUES ('$username', '$password', '$nama2', '$nim', '$jurusan', '$email', null, null, 'Belum Dikonfirmasi', 'Tidak hadir', '$username3')";
					$insert = mysqli_query($koneksi, $sql);
					$sql = "INSERT INTO tbl_login (username, password, privilage, user_sem) VALUES ('$username', '$password', 'peserta', '$username3')";
					$insert = mysqli_query($koneksi, $sql);
					// redirect ke index.php
					header('location: ../DaftarSeminar.php');
				}
				
			}
	}		
		
	}
 ?>