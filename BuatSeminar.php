
<?php include("include/koneksi.php");?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Buat Seminar</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/design.css">
    <link rel="stylesheet" type="text/css" href="css/seminar.css">

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
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a href="home.php"><img class="logo" src="img/logo.png"/></a>
				</div>

				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav navbar-right">
						<li><a href="BuatSeminar.php">Buat Seminar</a></li>
						<li><a href="DaftarSeminar.php">Daftar Seminar</a></li>
						<li><a href="masuk.php">Login</a></li>
					</ul>
				</div>

			</div>
		</nav>
		 <!-- akhir navbar -->

		

		<!-- formulir-->
		<section class="formulir">
			<div class="container">
				<div class="gambar">
					<img src="img/regis.jpg">
				</div>
				<div class="form">
					<form action ="include/AddProses.php?subject_id=<?php echo 'buatseminar'; ?>" method="post" enctype="multipart/form-data">
						<h3 class="text-center">Input Informasi Seminar Kamu</h3>
						<div class="form-group">
							<label>Nama Seminar</label>
							<input type="text" name="namasem" class="form-control"/>
						</div>
						<div class="form-group">
							<label>Jadwal Seminar</label>
							<input type="date" name="jadwalsem" class="form-control"/>
						</div>
						<div class="form-group">
							<label>Waktu Seminar</label>
							<input type="text" name="waktusem" class="form-control" placeholder="ex: 18.00-19.00" />
						</div>
						<div class="form-group">
							<label>Tempat Seminar</label>
							<input type="text" name="tempatsem" class="form-control"/>
						</div>
						<div class="form-group">
							<label>Narasumber Seminar</label>
							<input type="text" name="narasumber" class="form-control"/>
						</div>
						<div class="form-group">
							<label>Email Penanggung Jawab</label>
							<input type="text" name="telpon" class="form-control" placeholder="example@MeetUp.com" />
						</div>
						<div class="form-group">
							<label>Apakah Seminarmu Berbayar?</label>
							<label class="radio-inline">
						      <input type="radio" value="ya" name="bayar"/>Ya
						    </label>
						    <label class="radio-inline">
						      <input type="radio" value="no" name="bayar"/>Tidak
						    </label>
					    </div>
					    <div class="form-group">
							<label>Apakah Seminarmu Membutuhkan Paper?</label>
							<label class="radio-inline">
						      <input type="radio" value="ya" name="paper"/>Ya
						    </label>
						    <label class="radio-inline">
						      <input type="radio" value="no" name="paper"/>Tidak
						    </label>
					    </div>
					    <div class="form-group">
							<label>Poster Seminarmu</label>
							<input type="file" class="form-control-file" name="poster"/>
						</div>
						<h3 class="text-center">Buat Akun Seminar Kamu</h3>
						<div class="form-group">
							<label>Username</label>
							<input type="text" name="username" class="form-control"/>
						</div>
						<div class="form-group">
							<label>Password</label>
							<input type="password" name="password" class="form-control"/>
						</div>
						<div class="form-group">
							<label>Konfirmasi Password</label>
							<input type="password" name="konfirmasi" class="form-control"/>
						</div>
						<input class="btn btn-primary btn-block" name="submit" type="submit" value="submit" />
					</form>
				</div>
			</div>
			<footer>
			<div class="container text-center fixed fixed-bottom">
				<div class="row">
					<div class="col-sm-12">
						<p>&copy;copyright 2018 | built by <a href="#">Kalbis Institute</a></p>
					</div>
				</div>
			</div>
			
		</footer><footer>
			<div class="container text-center fixed fixed-bottom">
				<div class="row">
					<div class="col-sm-12">
						<p>&copy;copyright 2018 | built by <a href="#">Kalbis Institute</a></p>
					</div>
				</div>
			</div>
			
		</footer><footer>
			<div class="container text-center fixed fixed-bottom">
				<div class="row">
					<div class="col-sm-12">
						<p>&copy;copyright 2018 | built by <a href="#">Kalbis Institute</a></p>
					</div>
				</div>
			</div>
			
		</footer>
		</section>
		<!--akhir formulir-->
		

		<!-- footer-->
		
		<!--akhir footer-->

		

		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="js/jquery-3.3.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/script.js"></script>
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
	</body>
</html>
