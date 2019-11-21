<?php
include 'AccesoDatos.php';

$miObjeto = new stdClass();
$miObjeto->nombre = $_GET ['nombre'];
$miObjeto->clave = $_GET ['clave'];


$objetoAccesoDato = AccesoDatos::dameUnobjetoAcceso();
$select="INSERT INTO usuario (nombre, clave) VALUES ('$miObjeto->nombre', '$miObjeto->clave')";
$consulta = $objetoAccesoDato->RetornarConsulta($select);
$consulta->execute();
$datos= $consulta->fetchAll(PDO::FETCH_ASSOC);		
	//var_dump($datos);
	foreach ($datos as $usuario) 
		{
			if($usuario["nombre"]==$miObjeto->nombre)
			{
				header("Location: ../paginas/usuarioyaregistrado.php");
		        exit();
			}
			
		}
        $objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
        $select="INSERT INTO usuario( nombre, clave) VALUES ('$miObjeto->nombre','$miObjeto->contraseña')";
        $consulta =$objetoAccesoDato->RetornarConsulta($select);
        $consulta->execute();
        header("Location: ../paginas/ok.php");
        exit();
        
        
//$archivo = fopen('../archivos/registro.txt', 'a');
//fwrite($archivo, json_encode($miObjeto)."\n");
//header("Location: ../paginas/ok.php");
//fclose($archivo);
?>

											