<?php
mb_internal_encoding("UTF-8");
//read module
require_once '/Applications/XAMPP/xamppfiles/include/fpdf181/mbfpdf.php';

//MBFPDF class ye instant creation
$pdf=new MBFPDF();

//font 登録..addMBFont method ,,,japanese font ma change yin lote sa yar ma lo..(fontname,moji code)
$pdf->AddMBFont(GOTHIC,'SJIS');
$pdf->AddMBFont(PMINCHO,'SJIS');

//adding page..addpage method
$pdf->AddPage();

//create PDF content...set font method... SetFont(GOTHIC,'',20);font name,font style,font size....font style mar B,I,U,BU etc

$pdf->SetFont(GOTHIC,'',20);

//write mae..words twe ko SJIS code ko.change..output out ag,,,write method ko use...Write(10 =>line no takasa,)
$pdf->Write(10,mb_convert_encoding("Appear with MS\n",SJIS));
$pdf->SetFont(PMINCHO,'',24);
$pdf->Write(10,mb_convert_encoding("Appear with MSP",SJIS));

//output document(appearing browser)...output method...
$pdf->Output();



?>
