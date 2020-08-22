<?php include("../include/koneksi.php");?>
<?php  $username3=$_GET['username']; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Akun Pengawas</title>

    <!-- Bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css/style_alya.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
   
	

		<!-- navbar  -->
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="container-fluid">
				<div class="navbar-header">
					<a href=""><img class="logo" src="../img/logo.png"/></a>
				</div>
			</div>
		</nav>
		 <!-- akhir navbar -->

		

		<!-- formulir-->
		<section class="formulir">
			<div class="gambar">
					<ul class="nav nav-pills nav-stacked">
					<h3 class="text-center">PENYELENGGARA<br/>SEMINAR</h3>
					  <li><a href="DaftarPeserta.php?username=<?php echo $username3; ?>">Daftar Peserta</a></li>
					  <li><a href="Kehadiran.php?username=<?php echo $username3; ?>">Kehadiran Peserta</a></li>
					   <li><a href="InformasiSeminar.php?username=<?php echo $username3; ?>">Informasi Seminar</a></li>
					  <li class="active"><a href="AkunPengawas.php?username=<?php echo $username3; ?>">Akun Pengawas</a></li>
					  <li><a href="../home.php">Log Out</a></li>
					</ul>
			</div>
			<div class="container">
				
				<div class="form">
					<form class="form-horizontal" action="../include/AddProses.php?subject_id=<?php echo 'akunpengawas';?>&&username=<?php echo $username3; ?>" method="post">

					   <div class="form-group">
					    <label class="control-label col-sm-2" for="email">Username:</label>
					    <div class="col-sm-10">
					      <input type="text" class="form-control" name="username" placeholder="Enter Username">
					    </div>
						</div>
					  <div class="form-group">
					    <label class="control-label col-sm-2" for="email">Password:</label>
					    <div class="col-sm-10">
					      <input type="password" class="form-control" name="password" placeholder="Enter Password">
					    </div>
					  </div>
					  <div class="form-group">
					    <label class="control-label col-sm-2" for="pwd">Konfirmasi Password:</label>
					    <div class="col-sm-10"> 
					      <input type="password" class="form-control" name="konfirmasi" placeholder="Confirm Password">
					    </div>
					  </div>
					  <div class="form-group"> 
					    <div class="col-sm-offset-2 col-sm-10">
					      <button type="submit" class="btn btn-primary" name="submit">Buat</button>
					    </div>
					  </div>
					</form>
				</div>
			</div>
		</section>
		<!--akhir formulir-->
		

		<!-- footer-->
		<footer>
			<div class="container text-center">
				<div class="row">
					<div class="col-sm-12">
						<p>&copy;copyright 2018 | built by <a href="#">Kalbis Institute</a></p>
					</div>
				</div>
			</div>
			
		</footer>
		<!--akhir footer-->
	
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>