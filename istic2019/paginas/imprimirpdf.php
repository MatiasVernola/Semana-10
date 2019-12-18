<?php
//require('fpdf.php');
//include 'fpdf.php'
require'fpdf/fpdf.php'

//echo ("hola");
class PDF extends FPDF 
{
  // Cabecera de página
  function Header()
  {
    // Logo
    $this->Image('imagen.png',10,8,33);
    // Arial bold 15
    $this->SetFont('Arial','B',15);
    // Movernos a la derecha
    $this->Cell(80);
    // Título
    $this->Cell(30,10,'Title',1,0,'C');
    // Salto de línea
    $this->Ln(20);

    $this->Cell(90, 10, 'id', 1, 0, 'C', 0);
	$this->Cell(30, 10, 'patente', 1, 0, 'C', 0);
	$this->Cell(30, 10, 'hora de ingreso', 1, 1, 'C', 0);
  }

  // Pie de página
  function Footer()
  {
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,'Pagina '.$this->PageNo().'/{nb}',0,0,'C');
  }
}


//require 'conexion.php'


$mysqli = new mysqli("localhost", "root", "", "istic2019"); //esto no tendria que estar, porque se usa el require que esta arriba

$consulta = "SELECT * FROM registrovehiculo";
$resultado = $mysqli->query($consulta);

$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','',16);

while ($row = $resultado->fetch_assoc())
 {
	$pdf->Cell(90, 10, $row['id'], 1, 0, 'C', 0);
	$pdf->Cell(30, 10, $row['patente'], 1, 0, 'C', 0);
	$pdf->Cell(30, 10, $row['horaingreso'], 1, 1, 'C', 0);
 }



?>
