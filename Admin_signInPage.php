<!DOCTYPE html>
<html lang="en">
<head>
  <title>Registrar administrador</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel = "stylesheet" href="css/home.css">
  <script src="js/home.js"></script>
 
  
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60" class="shortPage">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="home.html"><img src="images/logo.png" alt="JustFly"/></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
       <ul class="nav navbar-nav navbar-right">
        <li><a href="home.html">INICIO</a></li>
		<?php
		if(isset($_SESSION['admin_email']))
		{
			echo("<li><a href='updateFlightsPage.php'>ACTUALIZAR VUELOS</a></li>");
			echo("<li><a href='AdminLogout.php'>CERRAR SESIÓN</a></li>");			
		}
		else
		{
			echo('<li><a href="Admin_signInPage.php">INICIAR SESIÓN</a></li>');
		}
		?>
      </ul>
    </div>
  </div>
</nav>

<div class="jumbotron text-center">
<h1>Registrar administrador  </h1>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-4 col-sm-offset-4 col-xs-offset-2 col-md-offset-4" >
            <form action="Admin_signIn.php" method="post" class="form" role="form">
             <label for = "email">Usuario: </label><input class="form-control" name="email" id = "email" placeholder="Correo" type="email" />
             <label for = "password">Contraseña: </label><input class="form-control" name="password" id= "password" placeholder="Contraseña" type="password" />
			 <br />
            <button class="btn btn-lg btn-primary btn-block" type="submit">Iniciar sesión</button>
            </form>
        </div>
 </div>   
</div>




</body>
</html>