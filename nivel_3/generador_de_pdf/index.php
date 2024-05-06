<?php

require '../vendor/autoload.php';


use Spipu\Html2Pdf\Html2Pdf;

$html2pdf = new Html2Pdf();
$html = '<h1>Este html se convertirá a pdf</h1>';

$html2pdf->writeHTML($html);
$html2pdf->output('pdf_generado.pdf');


?>