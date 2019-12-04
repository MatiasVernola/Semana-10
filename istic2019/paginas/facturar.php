<?php
session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../imagen.png" >

    <title>Baja un Cambio S.A</title>

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="../css/sticky-footer-navbar.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="../css/floating-labels.css" rel="stylesheet">

  </head>

  <style>

      body
      {background-image: url("https://scontent-eze1-1.xx.fbcdn.net/v/t1.0-9/13620708_1127731270603461_1202373994451962987_n.jpg?_nc_cat=100&_nc_ohc=fU9gZzCuwHoAQn3PYW3J3Fjm2rwSc0QUbXLnawLKRL9YP7gTeYLjWEAhg&_nc_ht=scontent-eze1-1.xx&oh=6f5d0e3ab0bfcb37cb3a1cda54dd2a8b&oe=5E79B05E");
         background-size: cover;
        }
         h1{  color:white;}
       
    
   
    th 
    {
      color:black;
      background-color: lightblue;
    }
    td {color:black;}
    table,th,td 
    {
     border: 3px solid black;
    text-align: center;
    background-color: lightblue;
    }
    </style>

  <body>

    <header>
    <?php
        include "../componentes/menu.php";
    ?>
    </header>

    <!-- Begin page content -->
    <main role="main" class="container">

      <div class="row">

     <div class="col-sm-4">
        
     

     <form class="form-signin" action="../funciones/hacerfacturar.php">
                              
     <h1   class="h3 mb-3font-weight-normal">Facturar Vehiculo</h1>
     <label for="inputEmail" class="sr-only">Patente</label>
     <input type="text" id="id"  name="patente" pattern="([A-ZÑ]{3}\d{3}|[A-ZÑ]{2}\d{3}[A-ZÑ]{2})$" class="form-control" placeholder="AAA111 o AA123AA" required autofocus>

      <button class="image" type="submit"><img src="https://cicde.mx/wp-content/uploads/2018/01/facturacion-por-terceros.png" width="250" height="100"></button>
                             
     <!--<button class="btn btn-lg btn-primary btn-block" type="submit">Facturar</button>-->
                              
     </form>

    </div>

    <div class="col-sm-8">

      <table style="width:100%">

       <tr>
            <th>Vehiculo</th>
            <th>Fecha/Hora Ingreso</th>
            
          </tr>


    <!--<form class="form-signin" action="../funciones/hacerBorradovehiculos.php">-->
    <?php
         include '../funciones/AccesoDatos.php';
         $cantidadAutos=0;
         $totalFacturado = 0;
         date_default_timezone_set('America/Argentina/Buenos_Aires');
        
         $objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
         $consulta =$objetoAccesoDato->RetornarConsulta("select id, patente  , horaingreso  from registrovehiculo");
         $consulta->execute();     
         $datos= $consulta->fetchAll(PDO::FETCH_ASSOC);
         foreach ($datos as $registrovehiculo)
         {
          echo "<tr>";
          echo "<td>".$registrovehiculo['id']."</td> <td>".$registrovehiculo['patente']."</td>   <td>".$registrovehiculo['horaingreso']."</td>";
          //echo "<input type='submit' name='hacer'  value='".$registrovehiculo['id']."'>borrar</input><br>";
         }
        echo "</table>";
         ?>

        </form>
        </div>
        </div>
      
         
                             
    </main>
      
     <footer class="footer">
    <?php
        include "../componentes/pie.php";
    ?>
    </footer>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" cAlumnorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
  </body>
</html>