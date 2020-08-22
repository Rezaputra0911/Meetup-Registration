<?php include("include/koneksi.php");?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Daftar Seminar</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/design.css">
    <link rel="stylesheet" type="text/css" href="css/BuatSeminar.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
	<body>

		<!-- navbar -->
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

		<!--slideshow-->
		
			<div id="myCarousel" class="carousel slide" data-ride="carousel">
			  <!-- Indicators -->
			  <ol class="carousel-indicators">
			    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			    <li data-target="#myCarousel" data-slide-to="1"></li>
			    <li data-target="#myCarousel" data-slide-to="2"></li>
			  </ol>

			  <!-- Wrapper for slides -->
	            <div class="carousel-inner">
			    <div class="item active">
			      <img src="img/seminar.jpg" ">
			    </div>
			    <?php
				$sql = "SELECT * FROM tbl_seminar WHERE status = 'Aktif'";
				$hasil = mysqli_query($koneksi, $sql);
				?>
				<?php while($row=mysqli_fetch_assoc($hasil)): ?> 
				 <div class="item">
				      <img src="uploads/gambar/poster/<?php echo $row['poster']; ?>" >
				 </div>
			    <?php endwhile; ?>
			  </div>

			  <!-- Left and right controls -->
			  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
			    <span class="glyphicon glyphicon-chevron-left"></span>
			    <span class="sr-only">Previous</span>
			  </a>
			  <a class="right carousel-control" href="#myCarousel" data-slide="next">
			    <span class="glyphicon glyphicon-chevron-right"></span>
			    <span class="sr-only">Next</span>
			  </a>
			</div>
		
		<!-- akhir slideshow-->

		<!-- Pendaftaran-->
		<section class="seminar" id="seminar">
			<div class="container">
			  <h2>Pendaftaran Seminar</h2>
			  <p>Pilih Seminar yang ingin kamu ikuti</p>            
			  <table class="table table-striped">
				<?php
				$sql = "SELECT * FROM tbl_seminar WHERE status = 'Aktif'";
				$hasil = mysqli_query($koneksi, $sql);
				?>
			    <thead>
			      <tr>
			        <th>Nama Seminar</th>
			        <th>Jadwal Seminar</th>
			        <th>Waktu</th>
			        <th>Tempat Seminar</th>
			        <th>Narasumber</th>
			        <th>Daftar</th>
			      </tr>
			    </thead>
			    <tbody>
			    <?php while($row=mysqli_fetch_assoc($hasil)): ?> 
			      <tr>
			        <td><?= $row['nama_sem'];?></td>
			        <td><?= $row['jadwal'];?></td>
			         <td><?= $row['waktu'];?></td>
			        <td><?= $row['tempat'];?></td>
			        <td><?= $row['narasumber'];?></td>
			        <td><a class="btn btn-primary btn-lg" href="DaftarPeserta.php?username=<?php echo $row['username']; ?>" role="button">Daftar</a></td>
			      </tr>
			      <?php endwhile; ?>
			    </tbody>
			  </table>
			</div>
		</section>
		<!--akhir pendaftaran-->

		

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

		

		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
		<script src="js/jquery-3.3.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/script.js"></script>
	</body>
</html>
