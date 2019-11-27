
       <!-- Fixed navbar -->
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="#"><?php if(isset($_SESSION['usuario'])){
                                              echo $_SESSION['usuario'];
                                            }
                                            else
                                            {
                                             ?>
                                             Alumno
                                            <?php
                                            }
                                            ?></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-iconx|"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link" href="/istic2019/index.php">Inicio <span class="sr-only">(current)</span></a>
            </li>
              <?php 
            if(isset($_SESSION['usuario'])==false){
              //solo muestra estos item , si el usuario no esta logeado
            ?>
            <li class="nav-item">
              <a class="nav-link" href="/istic2019/paginas/registro.php">Registrate</a>
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="/istic2019/paginas/login.php">Login</a>
            </li>
            <?php 
            }
            ?>

            <?php 
            if(isset($_SESSION['usuario'])){
              //solo muestra el menu si estas con la variable de sesión instaciada
            ?>

            <li class="nav-item">
              <a class="nav-link" href="/istic2019/paginas/cargarvehiculo.php">Ingresar Vehiculo</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/istic2019/paginas/vehiculosenestacionamiento.php">Vehiculos estacionados</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/istic2019/paginas/facturar.php">Facturar Vehiculo</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/istic2019/paginas/listausuarios.php">Listar Usuarios</a>
            <li class="nav-item">
              <a class="nav-link" href="/istic2019/paginas/facturados.php">Vehiculos facturados</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/istic2019/funciones/hacerLogout.php">Cerrar Sesion</a>
            </li>
          
            <?php 
            }
            ?>



            <?php 
            if(isset($_SESSION['usuario']) && isset($_SESSION['perfil']) &&$_SESSION['perfil']=="admin"){
              //solo muestra el menu si estas con la variable de sesión instaciada y sos de perfil admin
            ?>

           
            <li class="nav-item">
              <a class="nav-link" href="/istic2019/Session/paginas/historialvehiculos.php">Historial Vehiculos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/istic2019/Session/paginas/historialusuarios.php">Historial Empleados</a>
            </li>

            <?php 
            }
            ?>
         
          </ul>
          
        </div>
      </nav>