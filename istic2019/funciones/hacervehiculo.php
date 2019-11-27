<?php
include 'AccesoDatos.php';
 $miObjeto2 = new stdClass();
 date_default_timezone_set('America/Argentina/Buenos_Aires');
 $hora=mktime();
 $hora2=date("d-m-y H:i",$hora);
 
 $miObjeto2->patente = $_GET['patente'];
 $miObjeto2->horaIngreso = $hora2;
    $objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
	$consulta =$objetoAccesoDato->RetornarConsulta("select patente from registrovehiculo");
	$consulta->execute();			
	$datos= $consulta->fetchAll(PDO::FETCH_ASSOC);		
	//var_dump($datos);
	foreach ($datos as $registrovehiculo) 
		{
			if($registrovehiculo["patente"]==$miObjeto2->patente)
			{
				header("Location: ../paginas/ok.php");
		        exit();
			}
		}
    $objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
    $select="INSERT INTO registrovehiculo ( patente, horaingreso) VALUES ('$miObjeto2->patente','$miObjeto2->horaIngreso')";
    $consulta =$objetoAccesoDato->RetornarConsulta($select);
    $consulta->execute();
    header("Location: ../paginas/ok.php");
 
 //$archivo = fopen('../archivos/vehiculos.txt', 'a');
 //fwrite($archivo, json_encode($miObjeto2)."\n");
 //fclose($archivo);
 //header("Location: ../paginas/okregistrovehiculo.php");
?>