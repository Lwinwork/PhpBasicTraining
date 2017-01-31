<?php
//enable cache
header('Cache-Control:no-cache');
header('Pragma:no-cacahe');

mb_internal_encoding("UTF-8");

//read module
require_once '/Applications/XAMPP/xamppfiles/include/fpdf181/mbfpdf.php';
require_once '/Applications/XAMPP/xamppfiles/lib/php/PEAR/Calendar-0.5.5/Calendar-0.5.5/Month/Weekdays.php';

$pdf=new MBFPDF();

$pdf->AddMBFont(GOTHIC,'SJIS');
$pdf->AddMBFont(PMINCHO,'SJIS');

//setting of template..cal.pdf-> template phit mae pdf doc ye file name...(1)->use mae page number
$pdf->setSourceFile("cal.pdf");
$template_index=$pdf->ImportPage(1);

$pdf->AddPage();

//setting of template
$pdf->useTemplate($template_index);

$calMonth=new Calendar_Month_Weekdays( date('Y'), date('n'), 0);
$calMonth->build();

//Title(year,month)
$pdf->SetFont(GOTHIC,'B',25);
$pdf->SetXY(84, 24);
$pdf->Write(10,mb_convert_encoding(date("Y年n月"),SJIS));

$PDF->SetFont(PMINCHO,'',12);

//constant definition
define(STARTX,36);//startingXcoordinate
define(STEPX,24.5);//font weight
define(STARTY,41);//startingYcoordinate
define(STEPY,47.5);//line weight

$x=STARTX;
$y=STARTY;
$w=0;
while($day=$calMonth->fetch()){
//if u have date,write
if(!$day->isEmpty()){
  $pdf->XY($x,$y);
  $pdf->Write(10,mb_convert_encoding("{$day->thisDay()}",SJIS));
  }

  $x += STEPX;

  //if last day of the week,coordinate ko,,head mar lote
  if($day->isLast()){
    $x=STARTX;
    $y +=STEPY;
    $w++;

  //5th week will be appeared under 4th week
  if($w > 4){
    $y -= STEPY;
    $y += 7;
    }
  }

}
$pdf->Output();
?>
