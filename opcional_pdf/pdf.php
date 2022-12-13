<?php
if (isset($_POST['nombre'])) {
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $apellido2 = $_POST['2ºapellido'];
    $utf8 = $nombre .' '. $apellido.' ' . $apellido2;
}
require('fpdf.php');
$pdf = new FPDF('L');
$pdf->AddPage();
$pdf->SetFont('Arial','B',30);
$utf8 = iconv('utf-8', 'cp1252', $utf8);
$pdf->Cell(0, 30, $utf8, 0, 0,'C');

$pdf->Image('./icons/formaaaa.png',52,165,55);
$pdf->Image('./icons/sello.png',122,145,50);

$pdf->Image('./icons/formaaaa.png',192,165,55);

$pdf->Rect(10, 10, 278, 190);
$pdf->Output();


?>