<?php include("../include/koneksi.php");?>
<?php  $username3=$_GET['user_sem']; ?>
<?php  $username=$_GET['username']; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>ProfilMu</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../Penyelenggara/css/style_alya.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>s
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
        $sql = "SELECT * FROM $username3 where username = '$username'";
        $hasil = mysqli_query($koneksi, $sql);
        ?>
        <?php $row1 = mysqli_fetch_assoc($hasil); ?>
    

    <!-- formulir-->
    <section class="formulir">
      <div class="gambar">
          <ul class="nav nav-pills nav-stacked">
          <h1 class="text-center">PESERTA: <?php echo $row1['nama_pes'] ?></h1>
            <li  class="active"><a href="Profil.php?username=<?php echo $username ?>">Profil</a></li>
             <li><a href="UploadDokumen.php?username=<?php echo $username ?>&&user_sem=<?php echo $username3 ?>">Upload Dokumen</a></li>
            <li><a href="../home.php">Log Out</a></li>
          </ul>
      </div>
      <div class="container">
        
        <div class="form">
           <?php
              $sql = "SELECT * FROM $username3 where username = '$username'";
              $hasil = mysqli_query($koneksi, $sql);
            ?>
            <?php $row=mysqli_fetch_assoc($hasil)?>
            <table class="table">
               
                    <tr>
                      <th>Nama Seminar</th>
                      <td><?= $row['nama_pes'];?></td>           
                    </tr>
                     <tr>
                      <th>NIM</th>
                      <td><?= $row['nim'];?></td>           
                    </tr>
                     <tr>
                      <th>Jurusan</th>
                      <td><?= $row['jurusan'];?></td>           
                    </tr>
                     <tr>
                      <th>Email</th>
                      <td><?= $row['email'];?></td>           
                    </tr>
                    <tr>
                      <th>Username</th>
                      <td><?= $row['username'];?></td>           
                    </tr>
               </table>
                <a class="btn btn-primary btn-lg" href="EditProfil.php?user_sem=<?php echo $row['user_sem']; ?>&&id_pes=<?php echo $row['id_pes']?>" role="button">Edit</a></td>
                  <?php
                  $sql = "SELECT * FROM tbl_seminar where username = '$username3'";
                  $hasil = mysqli_query($koneksi, $sql);
                ?>
                <?php $row=mysqli_fetch_assoc($hasil)?>
                <h3>Informasi Seminar</h3>
                <table class="table">

                       <tr>
                      <th>Nama Seminar</th>
                      <td><?= $row['nama_sem'];?></td>           
                    </tr>
                     <tr>
                      <th>Jadwal</th>
                      <td><?= $row['jadwal'];?></td>           
                    </tr>
                     <tr>
                      <th>Tempat</th>
                      <td><?= $row['tempat'];?></td>           
                    </tr>
                    <tr>
                      <th>Narasumber</th>
                      <td><?= $row['narasumber'];?></td>           
                    </tr>
                    <tr>
                      <th>Penanggungjawab</th>
                      <td><?= $row['penanggungjawab'];?></td>           
                    </tr>
                    <tr>
                      <th>Waktu</th>
                      <td><?= $row['waktu'];?></td>           
                    </tr>
                   </table>
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