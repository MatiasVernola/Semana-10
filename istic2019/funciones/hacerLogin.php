<?php
	session_start();
//include '../funciones/AccesoDatos.php'; //llamo al codigo que esta en accessoDatos.php
//include './funciones/AccesoDatos.php';
//include 'istic2019/funciones/AccesoDatos.php';
include 'AccesoDatos.php';
	$usuarioIngresado = $_GET['nombre'];
	$claveIngresada = $_GET['clave'];
	
	$booUsuario = 0;
	$booPassword = 0;

	if (empty($usuarioIngresado) || empty($claveIngresada)) 
	{
		header("Location: ../paginas/login.php?error=camposvacios");
		exit();
	}
	else 
	{
		//$select="INSERT INTO usuario (nombre, clave) VALUES ('$miObjeto->nombre', '$miObjeto->clave')";
		$select="SELECT * FROM `usuario` WHERE nombre = '$usuarioIngresado'  AND clave = '$claveIngresada'";
		//var_dump($select); die();
//$consulta = $objetoAccesoDato->RetornarConsulta($select);) or die("Imposible arbrir el archivo");
	$objetoAccesoDato = AccesoDatos::dameUnobjetoAcceso();
	$consulta = $objetoAccesoDato->RetornarConsulta($select);
	$respuesta=$consulta->execute();
	$datos= $consulta->fetchAll(PDO::FETCH_ASSOC);		
	//var_dump($consulta); die();

//var_dump($datos[0] ["nombre"]); die();

if(isset($datos[0] ["nombre"]))
{

 $_SESSION //preguntar solo por el nombre


}else
{





}
		while(!feof($archivo)) 
		
		if ($booUsuario == 0) {
			header("Location: ../paginas/login.php?error=usuarioincorrecto");
			fclose($archivo);
			exit();
		}
		else 
	    {
			header("Location: ../paginas/login.php?error=contraseñaincorrecta");
			fclose($archivo);
			exit();
		}

		fclose($archivo);
	}	
	header("Location: ../paginas/login.php");
	exit();
?>