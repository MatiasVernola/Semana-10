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
    

    <title>Baja un Cambio S.A </title>

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
      h1, p, h2, h3
      {color:white;}
      

    </style>

  </head>

  <body>

    <header>
    <?php
        include "../componentes/menu.php";
    ?>
    </header>

    <!-- Begin page content -->
    <main role="main" class="container">
         
      <h1 class="mt-5"> Estacionamiento Baja un Cambio S.A</h1>
      <p class="lead">Bienvenido a Estacionamientos Alumno</p>

        


            <?php 
                  if(isset($_SESSION['usuario'])){
                    //solo muestra el menu si estas con la variable de sesión instaciada
            ?>
                              <h2>Usted ya esta logeado</h2>
                              <h3>  <?php echo $_SESSION['usuario'];?>  </h3>
                             
            <?php 
              }
              else
              {
            ?>

                              <form class="form-signin" action="../funciones/hacerLogin.php">
                              
                              <h1 class="h3 mb-3 font-weight-normal">Ingrese sus datos</h1>
                              <label for="inputEmail" class="sr-only">USuario</label>
                              <input type="text" id="inputEmail"  name="nombre"class="form-control" placeholder="tu usuario" required autofocus>
                              <label for="inputPassword" class="sr-only">Clave</label>
                              <input type="password" id="inputPassword" name="clave" class="form-control" placeholder="la clave secreta" required>
                              <div class="checkbox mb-3">
                                <label>
                                  <input type="checkbox" value="remember-me"> Recordarme
                                </label>
                              </div>
                              <button class="image" type="submit"> <img src="https://lh3.googleusercontent.com/2Su-btecpAek3kd5oKWsCQ9fhFPBXWqKNS2eeSJdgkcWqsA2BzuuQckfv4BH3_CoGXx_WDVhUGEpmIoqdQKR3Qyr9DZvVhRaP0J6StSvsVQk6VelEYQ15TXsh3p665XGjTb0S7J8"></button>
                              <p class="mt-5 mb-3 text-muted"></p>
                              </form>
                            



            <?php 
              }
            ?>

    </main>
      
    <!-- <footer class="footer">
    <?php
        //include "../componentes/pie.php";
    ?>
    </footer>
    -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" cAlumnorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
  </body>
</html>
