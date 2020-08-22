<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Login</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css/masuk.css">

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
					<a href="home.php"><img class="logo" src="img/logo.png"/></a>
				</div>
			</div>
		</nav>
		 <!-- akhir navbar -->

		

		<!-- formulir-->
		<section class="login">
			<div class="container">
			    <div class="row vertical-offset-100">
			      <div class="col-md-4 col-md-offset-4">
			        <div class="panel panel-default">
			          <div class="panel-heading">
			            <h3 class="panel-title">Please sign in</h3>
			        </div>
			          <div class="panel-body">
			            <form method="post" action="include/masuk_proses.php">
			             <fieldset>
			                <div class="form-group">
			                  <input class="form-control" placeholder="Username" name="username" type="text">
			              </div>
			              <div class="form-group">
			                <input class="form-control" placeholder="Password" name="password" type="password" value="">
			              </div>
			              <input class="btn btn-lg btn-success btn-block" name="submit" type="submit" value="submit">
			            </fieldset>
			              </form>
			          </div>
			      </div>
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