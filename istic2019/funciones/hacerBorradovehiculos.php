 <?php
include 'AccesoDatos.php';
//$miObjeto = new stdClass();
$id = $_GET['patente'];
var_dump($id);
die();
$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
$select="DELETE FROM `registrovehiculo` WHERE id=$id";
$consulta =$objetoAccesoDato->RetornarConsulta($select);
$consulta->execute();
header("Location: ../paginas/vehiculosenestacionamiento.php");
?>