<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registration site</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <?php include 'Navigation_top.php';?>
      </div>
    </nav>

    <div class="container">

   	<div style="text-align: center" class="jumbotron">
        <h1>Welcome to registration page!</h1>
        <p class="lead">Here you can login and registrate for the competition!<br> If you are new user on this website, go to <a href="Registration.php"> registration</a> site.</p>
        <p><a href="Login.php" class="btn btn-primary btn-lg" role="button">Login</a></p>
    </div>
    	
    <div style="text-align: center" class="jumbotron">
        <h1 style="color: red">{Information holder}</h1>	
        <p style="color: red" class="lead"> {Here we can add some more information about registration (e.g. prices and registration deadlines) }</p>
        
    </div>
      
      
    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>