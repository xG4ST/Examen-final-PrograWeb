<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  
  <title>AÑADIR VUELOS</title>
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
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
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
			echo("<li><a href='updateFlightsPage.php'>UPDATE FLIGHTS</a></li>");
			echo("<li><a href='AdminLogout.php'>LOG OUT</a></li>");			
		}
		else
		{
			header("Location : Admin_signInPage.php");
		}
		?>
      </ul>
    </div>
  </div>
</nav>


<div class="jumbotron text-center">
<h1>AÑADIR VUELO</h1>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-4 col-sm-offset-4 col-xs-offset-2 col-md-offset-4" >
            <form class="form" role="form" action="AddFlights.php" method ="POST">
            <table>
            <tr>
            
            <td> <label for = "flight_no">Número de vuelo: </label><input class="form-control" name="flight_no" id = "flight_no" placeholder="Número de vuelo" /></td>
            <td><label for = "flight_Instance">Instancia de vuelo: </label><input class="form-control" name="flight_Instance" id= "flight_Instance" placeholder="Instancia de vuelo"  /></td>
			</tr>
			<tr>
			<td><label for = "from">Desde la identificación del aeropuerto: </label><input class="form-control" name="from" id = "from" placeholder="Desde la identificación del aeropuerto"  /> </td>
            <td> <label for = "to">A la identificación del aeropuerto: </label><input class="form-control" name="to" id= "to" placeholder="A la identificación del aeropuerto"  /></td>
			 </tr>
			 <tr>
			<td><label for = "fromCity">De la ciudad: </label><input class="form-control" name="fromCity" id = "fromCity" placeholder="De la ciudad"  /> </td>
            <td> <label for = "toCity">A la ciudady: </label><input class="form-control" name="toCity" id= "toCity" placeholder="A la ciudad"  /></td>
			 </tr>
			 <tr>
			<td><label for = "fromState">Del estado: </label><input class="form-control" name="fromState" id = "fromState" placeholder="Del estado"  /> </td>
            <td> <label for = "toState">Al estado: </label><input class="form-control" name="toState" id= "toState" placeholder="Al estado"  /></td>
			 </tr>
			 <tr>
			 <td><label for = "category">Categoría: </label><input class="form-control" name="category" id = "category" placeholder="Categoría"  /></td>
			<td><label for = "seats">Disponibilidad de asiento: </label><input class="form-control" name="seats" id = "seats" placeholder="Disponibilidad de asientos"  /></td>
			</tr>
			<tr>
			<td><label for = "depart_time">Hora de salida: </label><input class="form-control" name="depart_time" id = "depart_time" placeholder="Hora de salida" type="time"/></td>
             <td><label for = "arrive_time">Hora de llegada: </label><input class="form-control" name="arrive_time" id= "arrive_time" placeholder="Hora de llegada" type="time"/></td>
			  </tr>
			  <tr>
			<td> <label for = "arrive_date">Fecha de llegada: </label><input class="form-control" name="arrive_date" id= "arrive_date" placeholder="Fecha de llegada"  type="date"/></td>
            <td> <label for = "depart_date">Fecha de salida: </label><input class="form-control" name="depart_date" id= "depart_date" placeholder="Fecha de salida"  type="date"/></td>
			  </tr>
			 <tr>
			<td> <label for = "arrive_date">Tarifa: </label><input class="form-control" name="fare" id= "fare" placeholder="Tarifa"  type="number" min="0"/></td>
			  </tr>
			  </table>
			  
			 <br/>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Añadir</button>
            </form>
        </div>
 </div>   
</div>




</body>
</html>