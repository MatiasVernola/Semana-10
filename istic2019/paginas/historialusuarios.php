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

  <style>

      body
      {background-image: url("https://scontent-eze1-1.xx.fbcdn.net/v/t1.0-9/13620708_1127731270603461_1202373994451962987_n.jpg?_nc_cat=100&_nc_ohc=fU9gZzCuwHoAQn3PYW3J3Fjm2rwSc0QUbXLnawLKRL9YP7gTeYLjWEAhg&_nc_ht=scontent-eze1-1.xx&oh=6f5d0e3ab0bfcb37cb3a1cda54dd2a8b&oe=5E79B05E");
         background-size: cover;
        }
         h1{  color:white;}
       
    td {color:black;}
    table,th,td 
    {
     border: 3px solid black;
    text-align: center;
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
         
    
     <h3>listado de usuarios registrados</h3>
     <br>


      <table style="width:100%">

       <tr>
            <th>usuarios</th>
            
          </tr>


      
<?php
  include '../funciones/AccesoDatos.php';
      $objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
      $consulta =$objetoAccesoDato->RetornarConsulta("select nombre  from usuario");
      $consulta->execute();     
      $datos= $consulta->fetchAll(PDO::FETCH_ASSOC);
    foreach ($datos as $usuario)  
    {
        echo "<tr>";
        echo "<td>".$usuario['nombre']."</td>";   
        echo "</tr>";
    }
    echo "</table>";
?>

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