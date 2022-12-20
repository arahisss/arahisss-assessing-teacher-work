<?php
require('fpdf.php');
//create a FPDF object
$pdf = new FPDF();
//set document properties
$pdf->SetAuthor('Group 211-361');
$pdf->SetTitle('Report about all the teachers');
//set font for the entire document
$pdf->SetFont('Times', 'B', 16);
$pdf->SetTextColor(0, 0, 0);
//set up a page
$pdf->AddPage('P');

//$pdf->SetDisplayMode(real,'default');

//display the title with a border around it
$pdf->SetXY(50, 20);
$pdf->SetDrawColor(0, 0, 0);
$pdf->Cell(100, 10, 'Report about all the teachers', 1, 0, 'C', 0);
//Set x and y position for the main text, reduce font size and write content
$pdf->SetXY(10, 50);
$pdf->SetFontSize(14);
$pdf->Write(5, 'Some info must be here');



$pdf->AddPage('P');




//Output the document
$pdf->Output('report_all.pdf', 'I');
?>






































<?php
/*
ob_start ();
require "fpdf.php";


// Load a UTF-8 string from a file and print it
//$txt = file_get_contents('HelloWorld.txt');
//$pdf->Write(8,$txt);


$pdf = new FPDF('P', 'pt', 'A4');
$pdf->AddPage();

//$pdf->AddFont('TimesNewRomanPSMT','','font/times.php');

$pdf->SetFont('Times', 'B', 14);
//$pdf->MultiCell('', '1.5', );
define('FPDF_FONTPATH',"fpdf/font/");
$pdf->AddFont('Times','','timesnrcyrmt.php'); 

//$pdf->Cell(40, 80, 'Отчет о преподавателе');
$pdf->Cell(150, 40, 'Moscow Polytechnic University');
$pdf->Cell(150, 90, 'all teachers');
$pdf->Cell(150, 90, 'Report about all the teachers');

$pdf->Output();
ob_end_flush();
*/
?>