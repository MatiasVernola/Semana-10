<?php
include 'AccesoDatos.php';

$miObjeto = new stdClass();
$miObjeto->nombre = $_GET ['nombre'];
$miObjeto->clave = $_GET ['clave'];


$objetoAccesoDato = AccesoDatos::dameUnobjetoAcceso();
$select="INSERT INTO usuario (nombre, clave) VALUES ('$miObjeto->nombre', '$miObjeto->clave')";
$consulta = $objetoAccesoDato->RetornarConsulta($select);
$consulta->execute();

header("Location:../paginas/ok.php");
?>													