<?php //buatseminar
	if(isset($_POST['submit'])){
		$subject_id=$_GET['subject_id'];
		if($subject_id=='buatseminar'){
			//Ambil data dari form
			$namasem = $_POST['namasem'];
			$jadwalsem = $_POST['jadwalsem'];
			$tempatsem = $_POST['tempatsem'];
			$waktusem = $_POST['waktusem'];
			$narasumber = $_POST['narasumber'];
			$telpon = $_POST['telpon'];
			$paper = $_POST['paper'];
			$pembayaran = $_POST['bayar'];


			
			$namaFile = $_FILES['poster']['name'];
			$ukuranFile = $_FILES['poster']['size'];
			$error = $_FILES['poster']['error'];
			$tmpName = $_FILES['poster']['tmp_name'];

			$ekstensiGambarValid = ['jpg','jpeg','png'];
			$ekstensiGambar = explode('.', $namaFile);
			$ekstensiGambar = strtolower(end($ekstensiGambar));
			if( !in_array($ekstensiGambar, $ekstensiGambarValid)){
				echo"<script>
						alert('yang anda upload bukan gambar!');
						</script>";
						return false;
			}

			if($ukuranFile > 6000000){
				echo"<script>
						alert('gambar terlalu besar!');
						</script>";
						return false;
			}

			$namaFileBaru = uniqid();
			$namaFileBaru .= '.';
			$namaFileBaru .= $ekstensiGambar;

			move_uploaded_file($tmpName, '../uploads/gambar/poster/' . $namaFileBaru);
			$poster = $namaFileBaru;


			$username =$_POST['username'];
			$password = $_POST['password'];
			$konfirmasi = $_POST['konfirmasi'];
			
			include("koneksi.php");
			mkdir('../uploads/gambar/pembayaran/'.$username);
			mkdir('../uploads/paper/'.$username);
			//validasi username
			$sql = "SELECT * FROM tbl_login where username = '$username'";
			$cari = mysqli_query($koneksi, $sql);
			if($row = mysqli_num_rows($cari) > 0){
					echo "<script>alert('username telah digunakan')</script>";
					return false;
			}else{
					//ke tabel seminar
					$sql = "INSERT INTO tbl_seminar (nama_sem, jadwal, tempat, narasumber, penanggungjawab, jml_peserta, username, status, paper, pembayaran, waktu, poster, password) VALUES ('$namasem', '$jadwalsem', '$tempatsem', '$narasumber', '$telpon' , 1 ,'$username', 'Tidak Aktif', '$paper', '$pembayaran', '$waktusem', '$poster','$password')";
					$insert = mysqli_query($koneksi, $sql);

					//ke tabel login
					$sql = "INSERT INTO tbl_login (username, password, privilage, user_sem) VALUES ('$username', '$password', 'penyelenggara', '$username3')";
					$insert = mysqli_query($koneksi, $sql);
					// redirect ke index.php
					header('location: ../BuatSeminar.php');		
				}
			
			
			
			
		}

		if($subject_id == 'akunpengawas'){
			$username3 = $_GET['username'];
				$password = $_POST['password'];
				$konfirmasi = $_POST['konfirmasi'];
				$username = $_POST['username'];

				if($password != $konfirmasi){
					 echo "<script>alert('Password Tidak Sama')</script>";
				}else{
					include("koneksi.php");
					// Tahap 2. Query SQL
						$sql = "SELECT * FROM tbl_login where username = '$username'";
					$cari = mysqli_query($koneksi, $sql);
					if($row1 = mysqli_num_rows($cari) > 0){
							echo "<script>alert('username telah digunakan')</script>";
							return false;
					}else{
						$sql = "SELECT * FROM tbl_login where username = '$username'";
						$cari = mysqli_query($koneksi, $sql);
						if($row = mysqli_num_rows($cari) > 0){
							echo "<script>alert('username telah digunakan')</script>";
						}else{
							$sql = "INSERT INTO tbl_login (username, password, privilage, user_sem) VALUES ('$username', '$password', 'pengawas', '$username3')";
							$insert = mysqli_query($koneksi, $sql);
							if($insert) header('location: ../Penyelenggara/DaftarPeserta.php?username='.$username3);
						}
					}

				}
		}
	}
?>