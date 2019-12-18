<?php

require_once('../lib/pdf/mpdf.php')


 $mpdf = new mPDF('c', 'A4');
 $mpdf ->writeHTML('<div>HOLA....</div>');
 $mpdf ->Output('reporte.pdf', 'I');

 ?>
