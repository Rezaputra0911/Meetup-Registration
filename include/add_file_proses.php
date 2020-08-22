<?php //buatseminar
include("koneksi.php");
$username=$_GET['username'];
$user_sem=$_GET['user_sem'];
$sql = "SELECT * FROM $user_sem where username = '$username'";
$cek =  mysqli_query($koneksi, $sql);
$row4 = mysqli_fetch_assoc($cek);

		$subject_id=$_GET['subject_id'];
		if($subject_id=='pembayaran'){
			//Ambil data dari form
			$namaFile = $_FILES['pembayaran']['name'];
			$ukuranFile = $_FILES['pembayaran']['size'];
			$error = $_FILES['pembayaran']['error'];
			$tmpName = $_FILES['pembayaran']['tmp_name'];

			$ekstensiGambarValid = ['jpg','jpeg','png'];
			$ekstensiGambar = explode('.', $namaFile);
			$ekstensiGambar = strtolower(end($ekstensiGambar));
			if( !in_array($ekstensiGambar, $ekstensiGambarValid)){
				echo"<script>
						alert('yang anda upload bukan gambar .jpg atau .jpeg!');
						</script>";
						return false;
			}

			if($ukuranFile > 2000000){
				echo"<script>
						alert('gambar terlalu besar!');
						</script>";
						return false;
			}
			$namaFileBaru = $username;
			$namaFileBaru .= $row4['nim'];
			$namaFileBaru .= '.';
			$namaFileBaru .= $ekstensiGambar;

			move_uploaded_file($tmpName, '../uploads/gambar/pembayaran/'.$user_sem.'/' . $namaFileBaru);
			$pembayaran = $namaFileBaru;
			
		

			//validasi username
					//ke tabel seminar
					$sql = "UPDATE $user_sem set pembayaran = '$pembayaran' where username = '$username'";
					$insert = mysqli_query($koneksi, $sql);	
					header('location: ../peserta/UploadDokumen.php?username='. $username .'&&user_sem='.$user_sem);
		}

		if($subject_id=='paper'){
			//Ambil data dari form
			echo 'berhasil';
			$namaFile = $_FILES['paper']['name'];
			$ukuranFile = $_FILES['paper']['size'];
			$error = $_FILES['paper']['error'];
			$tmpName = $_FILES['paper']['tmp_name'];

			$ekstensiGambarValid = ['pdf'];
			$ekstensiGambar = explode('.', $namaFile);
			$ekstensiGambar = strtolower(end($ekstensiGambar));
			if( !in_array($ekstensiGambar, $ekstensiGambarValid)){
				echo"<script>
						alert('Upload papermu dengan pdf!');
						</script>";
						return false;
			}

			if($ukuranFile > 5000000){
				echo"<script>
						alert('Papermu terlalu besar!');
						</script>";
						return false;
			}

			$namaFileBaru = $username;
			$namaFileBaru .= $row4['nim'];
			$namaFileBaru .= '.';
			$namaFileBaru .= $ekstensiGambar;

			move_uploaded_file($tmpName, '../uploads/paper/'.$user_sem.'/' . $namaFileBaru);
			$paper = $namaFileBaru;
			
			include("koneksi.php");

			//validasi username
					//ke tabel seminar
					$sql = "UPDATE $user_sem set paper = '$paper' where username = '$username'";
					$insert = mysqli_query($koneksi, $sql);	
					header('location: ../peserta/UploadDokumen.php?username='. $username .'&&user_sem='.$user_sem);
		}
?>