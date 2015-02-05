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

    <div class="container" style="width: 300px; text-align: center"><br><br><br><br>
        
        <h1>Registration</h1>
        
        <form>
        
        <h3>Personal information:</h3>
        <input id="inputName"  placeholder="First name" type="text" name="name" class="form-control" required autofocus /><br>
        
        <input  id="inputSurname" placeholder="Surname" type="text" name="surname" class="form-control" required/><br>
        
       	<input type="email" id="inputEmail" class="form-control" placeholder="Email address" required> <br/>
       	
       	<input type="date" id="inputEmail" class="form-control" placeholder="Password" required> <br/>
       	
       	<input  id="inputCountry" placeholder="Country" type="text" name="country" class="form-control" required/><br>
       	
       	
       	
       	<h3>User information:</h3>
       	
       	<input type="username" id="inputEmail" class="form-control" placeholder="Username" required> <br/>
       	
       	<input type="password" id="inputEmail" class="form-control" name="pass1" placeholder="Password" required> <br/>
       	
       	<input type="password" id="inputEmail" class="form-control" name="pass2" placeholder="Repeat password" required> <br/>
               
        <button class="btn btn-lg btn-primary btn-block" type="submit">Register</button>       
               
        </form>
        
        
        
        
      

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