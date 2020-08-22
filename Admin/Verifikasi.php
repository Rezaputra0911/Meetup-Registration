<?php include("../include/koneksi.php");?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Verifikasi</title>

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
          <h1 class="text-center">ADMIN</h1>
            <li><a href="ControlPengguna.php">Control Pengguna</a></li>
             <li class="active"><a href="Verifikasi.php">Verifikasi</a></li>
              <li><a href="RekapanData.php">Rekapan Data Seminar</a></li>
            <li><a href="../home.php">Log Out</a></li>
          </ul>
      </div>
      <div class="container">
        
       <div class="form">
           <?php
              $sql = "SELECT * FROM tbl_seminar";
              $hasil = mysqli_query($koneksi, $sql);
            ?>
            <table class="table table-bordered">
                 <thead>
                    <tr>
                      <th>Nama Seminar</th>
                      <th>Jadwal Seminar</th>
                      <th>Penanggungjawab</th>
                      <th>Status</th>
                      <th>Verifikasi</th>                      
                    </tr>
                  </thead>
                  <tbody>
            <?php while($row=mysqli_fetch_assoc($hasil)): ?> 
                <tr>
                    <td><?= $row['nama_sem'];?></td>
                    <td><?= $row['jadwal'];?></td>
                    <td><?= $row['penanggungjawab'];?></td>
                    <td><?= $row['status'];?></td>
                    <td><a class="btn btn-primary btn-lg" href="../include/edit_proses_seminar.php?username=<?php echo $row['username']; ?>" role="button">Verifikasi</a></td>
                    </form>
                </tr>
          
              <?php endwhile; ?>
                  </tbody>
               </table>
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