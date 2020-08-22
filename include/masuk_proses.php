<?php //login

	if(isset($_POST['submit'])){
		$username = $_POST['username'];
		$password = $_POST['password'];
		
			include("koneksi.php");
			// Tahap 2. Query SQL
			$sql = "SELECT * FROM tbl_login";
			$insert = mysqli_query($koneksi, $sql);

			while($row = mysqli_fetch_assoc($insert)):
				if($username == $row['username']){
					if ($password == $row['password']) {
						if($row['privilage'] == 'peserta'){
							header('location: ../Peserta/UploadDokumen.php?user_sem='.$row['user_sem'].'&&username='.$row['username']);
						}else if($row['privilage'] == 'penyelenggara'){
							header('location: ../Penyelenggara/DaftarPeserta.php?username='.$row['username']);
						}else if($row['privilage'] == 'pengawas'){
							header('location: ../Penyelenggara/HalPengawas.php?username='.$row['user_sem']);
						}else if($row['privilage'] == 'admin'){
							header('location: ../Admin/ControlPengguna.php?username='.$row['username']);
						}
					}
				}
			endwhile;
		}
		echo "<script>alert('username atau password salah')</script>";
 ?>