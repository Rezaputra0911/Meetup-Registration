<?php //buatseminar
		$username=$_GET['username'];
		$nim = $_GET['nim'];
		$action = $_GET['action'];
		include("koneksi.php");
		// Tahap 2. Query SQL
		if($action == 'hadir'){
			$sql = "UPDATE $username SET hadir = 'hadir' WHERE nim = '$nim'";
			$insrt = mysqli_query($koneksi, $sql);
			if($insrt) {
				header('location:../Penyelenggara/DaftarPeserta.php?username='.$username);
			}
		}


		if($action == 'edit'){
			header('location:../Penyelenggara/EditForm.php?nim='.$nim. '&&username='.$username);
		}

		if($action == 'edit2'){
			  	$id_pes = $_GET['id_pes'];
			    $nama = $_POST['nama'];
			    $jurusan = $_POST['jurusan'];
			    $nim2 = $_POST['nim'];
			    $email = $_POST['email'];
			      $sql = "UPDATE $username SET nama_pes = '$nama', nim = '$nim', jurusan = '$jurusan', email = '$email' WHERE id_pes = '$id_pes'"; 
			    $insrt = mysqli_query($koneksi, $sql);
			 
		}

		if($action == 'edit3'){

			  	$nim = $_GET['nim'];
			      $sql = "UPDATE $username SET konfirmasi = 'Disetujui' WHERE nim = '$nim'"; 
			    $ubah = mysqli_query($koneksi, $sql);
			    if($ubah) {
					 header('location:../Penyelenggara/HalPengawas.php?username='.$username);
				}
			 
		}


 ?>