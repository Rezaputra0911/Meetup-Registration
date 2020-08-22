<?php include("../include/koneksi.php");?>
<?php  $username3=$_GET['username']; ?>
<?php  $nim = $_GET['nim'];?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Edit Profil Peserta</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../Penyelenggara/css/style_alya.css">

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
            <li class="active"><a href="DaftarPeserta.php?username=<?php echo $username3; ?>">Daftar Peserta</a></li>
            <li><a href="Kehadiran.php?username=<?php echo $username3; ?>">Kehadiran Peserta</a></li>
            <li><a href="InformasiSeminar.php?username=<?php echo $username3; ?>">Informasi Seminar</a></li>
            <li><a href="AkunPengawas.php?username=<?php echo $username3; ?>">Akun Pengawas</a></li>
            <li><a href="../home.php">Log Out</a></li>
          </ul>
      </div>
      <div class="container">
        
        <div class="form">
          
        <?php
        $sql = "SELECT * FROM $username3 where nim= '$nim'";
        $hasil = mysqli_query($koneksi, $sql);
        ?>
        <?php $row1 = mysqli_fetch_assoc($hasil); ?>
      <form action ="../include/edit_proses_pes.php?id_pes=<?php echo $row1['id_pes']; ?>&&username=<?php echo $username3;?>&&action=<?php echo 'edit2'?> " method="post">
            <div class="form-group">
              <label>Nama Peserta</label>
              <input type="text" class="form-control" name="nama" value="<?php echo $row1['nama_pes']; ?>">
            </div>
            <div class="form-group">
              <label>NIM</label>
              <input type="text" name="nim" class="form-control" value="<?php echo $row1['nim']; ?>" />
             </div>
             <div class="form-group"> 
              <label>Jurusan</label>
              <input type="text" name="jurusan" class="form-control" value="<?php echo $row1['jurusan']; ?>" />
            </div>
            <div class="form-group"> 
              <label>Email</label>
              <input type="text" name="email" class="form-control" value="<?php echo $row1['email']; ?>" />
            </div>
             <input class="btn btn-primary btn-block" name="submit" type="submit" value="submit" />
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