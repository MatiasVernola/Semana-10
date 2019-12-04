<?php
include 'AccesoDatos.php';
$precio=5;
$patente2 = $_GET['patente'];
$bandera=0;
      $objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
      $consulta =$objetoAccesoDato->RetornarConsulta("select id,  patente  , horaingreso  from registrovehiculo");
      $consulta->execute();     
      $datos= $consulta->fetchAll(PDO::FETCH_ASSOC);
//$archivo = fopen('../archivos/vehiculos.txt', 'r');
//while(!feof ($archivo))
	//$objeto = json_decode(fgets($archivo));
  foreach ($datos as $registrovehiculo) 
  {
    if ($registrovehiculo['patente'] == $patente2)
    {
      //if (isset($objeto))
      //{
        $bandera=1;
        date_default_timezone_set('America/Argentina/Buenos_Aires');
        $horaSalida =mktime();
        //var_dump($horaSalida);
        $horaSalida2=date("d-m-y H:i",$horaSalida);
        $tiempo = $horaSalida - $registrovehiculo['horaingreso'];
        $cobrar = ($tiempo / 60 /60) * $precio;
    
        $objetoFacturado = new stdClass();
        date_default_timezone_set('America/Argentina/Buenos_Aires');
        $objetoFacturado->Vehiculo = $patente2;
        $objetoFacturado->fechaEntrada =$registrovehiculo['horaingreso'];
        $objetoFacturado->fechaSalida =$horaSalida2;
        $objetoFacturado->importe = $cobrar;
    
        //$archivo1 = fopen('../archivos/facturados.txt', 'a');
        //fwrite($archivo1, json_encode($objetoFacturado)."\n");
        //fclose($archivo1);
            $objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
            $select="INSERT INTO vehiculosfacturados( patente, horaingreso, horasalida,importe) VALUES ('$objetoFacturado->Vehiculo','$objetoFacturado->fechaEntrada','$objetoFacturado->fechaSalida','$objetoFacturado->importe')";
            $consulta =$objetoAccesoDato->RetornarConsulta($select);
            $consulta->execute();
            $id=$registrovehiculo['id'];
            $objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 

            $select="DELETE FROM `registrovehiculo` WHERE id='$id'";
            //var_dump($select);
            //die();

            $consulta =$objetoAccesoDato->RetornarConsulta($select);
            $consulta->execute();
       
       
        header("Location:../paginas/pagar.php? &cobrar=".$cobrar."&ingreso=".$registrovehiculo['horaingreso']."&salida=".$horaSalida2."&patente=".$patente2);
        exit();
      }
   }
   
 
if ($bandera==0)
{
  header("Location: ../paginas/nopatentenolocalizada.php");
  exit();
}
//fclose($archivo);
?>
