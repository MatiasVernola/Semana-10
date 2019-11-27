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
		$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
      $consulta =$objetoAccesoDato->RetornarConsulta("select nombre  , clave  from usuario");
      $consulta->execute();     
      $datos= $consulta->fetchAll(PDO::FETCH_ASSOC);
    //$archivo = fopen("../archivos/registro.txt", "r") or die("Imposible arbrir el archivo");
  
    //while(!feof($archivo)) 
    foreach ($datos as $usuario) 
    {
      //$objeto = json_decode(fgets($archivo));
      if ($usuario["nombre"] == $usuarioIngresado) 
      { 
        $booUsuario = 1;
        if ($usuario["clave"] == $claveIngresada)
        {
            $booPassword= 1;
          //fclose($archivo);
          $_SESSION['usuario']=$usuario["nombre"];
          $_SESSION['perfil']=$usuario["perfil"];
          //$_COOKIE['cookiename']=$usuarioIngresado;
          setcookie("cookie", $_SESSION['usuario']);
          header("Location: ../paginas/login.php?exito=signup");
          exit();
        }     
      }
      
    } 
    if ($booUsuario == 0) 
    {
      header("Location: ../paginas/no.php");
      exit();
    }
    if ($booPassword == 0)
    {
            header("Location: ../paginas/no.php");
      exit();
    }
      
    //fclose($archivo);
    
  } 
  
  
?>





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
}

if(isset($datos[0] ["nombre"]) AND isset($datos[0] ["clave"]))
	var_dump($datos[0] ["clave"]); die ();
{

 $_SESSION ($datos[0] ["nombre"])==$usuarioIngresado;



}
fdelse
{
   if ($booUsuario == 0) {
			header("Location: ../paginas/login.php?error=usuarioincorrecto");
		}

         else 
	    {
			header("Location: ../paginas/login.php?error=contraseñaincorrecta");
		}
}



//}
//		while(!feof($archivo)) 
/*		
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
*/
?>