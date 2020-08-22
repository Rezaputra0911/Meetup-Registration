<?php include("../include/koneksi.php"); ?>
<?php $username = $_GET['username']; ?>
<?php $user_sem = $_GET['user_sem']; ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Upload Dokumen</title>

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

        <?php
        $sql = "SELECT * FROM $user_sem where username= '$username'";
        $hasil = mysqli_query($koneksi, $sql);
        ?>
        <?php $row1 = mysqli_fetch_assoc($hasil); ?>
    <!-- formulir-->
    <section class="formulir">
      <?php  $sql = "SELECT * FROM $user_sem WHERE username = '$username'";
              $insert = mysqli_query($koneksi, $sql);
       ?>

      <div class="gambar">
          <ul class="nav nav-pills nav-stacked">
          <h1 class="text-center">PESERTA: <?php echo $row1['nama_pes'] ?></h1>
            <li><a href="Profil.php?username=<?php echo $username ?>&&user_sem=<?php echo $user_sem ?>">Profil</a></li>
             <li class="active"><a href="UploadDokumen.php?username=<?php echo $username ?>">Upload Dokumen</a></li>
            <li><a href="../home.php">Log Out</a></li>
          </ul>
      </div>
      <div class="container">
        <div class="overflow">
        <div class="form">
          <?php 
              include("../include/koneksi.php");
              $sql = "SELECT * FROM tbl_seminar WHERE username = '$user_sem'";
              $insert = mysqli_query($koneksi, $sql);

              while($row = mysqli_fetch_assoc($insert)):
              if($row['pembayaran'] == 'ya' && $row['paper'] == 'no'){
                $paper = '';
                $pembayaran = 'disabled';
              }else if($row['pembayaran'] == 'no' && $row['paper'] == 'ya'){
                $paper = 'disabled';
                $pembayaran = '';
              }else if($row['pembayaran'] == 'ya' && $row['paper'] == 'ya'){
                $paper = '';
                $pembayaran = '';
              }
              endwhile;
             ?>

              <?php 
              include("../include/koneksi.php");
              $sql = "SELECT * FROM $user_sem WHERE username = '$username'";
              $insert = mysqli_query($koneksi, $sql);

              while($row = mysqli_fetch_assoc($insert)):
              if($row['pembayaran'] != NULL && $row['paper'] != NULL){
                $pembayaran = 'disabled';
                $paper = 'disabled';
                }
              endwhile;
             ?>


          <form action="../include/add_file_proses.php?subject_id=<?php echo 'paper';?>&&user_sem=<?php echo $user_sem;?>&&username=<?php echo $username;?>" method="post" enctype="multipart/form-data">
            <h3 class="text-center">Upload Paper Mu!</h3>
            <div class="form-group">
              <input type="file" class="form-control-file" name="paper" <?php echo $pembayaran ;?> required >
            </div>
           <input class="btn btn-danger" name="submit" type="submit" value="upload" required />
          </form>
          <form action="../include/add_file_proses.php?subject_id=<?php echo 'pembayaran';?>&&user_sem=<?php echo $user_sem;?>&&username=<?php echo $username;?>" method="post" enctype="multipart/form-data">
            <h3 class="text-center">Upload Bukti Pembayaran!</h3>
            <div class="form-group">
              <input type="file" class="form-control-file" name="pembayaran" <?php echo $paper ;?> required>
            </div>
           <input class="btn btn-danger" name="submit" type="submit" value="upload"  required />
         </form>
          <p>Paper dan Bukti Pembayaran hanya dapat diupload satu kali, pastikan file yang kamu upload sudah benar. </br>Tunggu konfirmasi dari panitia seminar setelah kamu upload file-mu</p>
        </div>
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