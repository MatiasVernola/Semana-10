



<?php 
                  if(isset($_SESSION['usuario'])){
                    //solo muestra el menu si estas con la variable de sesión instaciada
?>

<div class="container">
        <span class="text-muted">Bienvenido   <?php echo $_SESSION['usuario'];?>   </span>  <span class="text-muted">Gracias por utilizar nuestra plataforma </span>
</div>

<?php 
                 }
                  else
                  {
?>



<div class="container">
        <span class="text-muted">Cuanto ingrese al sistema , aqui vera los datos importantes</span>  
</div>


<?php 
}
?>