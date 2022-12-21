<?php
require('fpdf.php');
include('variables.php');



// $articles_1 = "Число публикаций в РИНЦ: $numOfItemsFull";
// $articles_2 = "Число публикаций, входящих в ядро РИНЦ: $numOfCoreItems";
// $articles_3 = "Индекс Хирша по публикациям в РИНЦ: $hirschs";
// $articles_4 = "Индекс Хирша по ядру РИНЦ: $hirschCore";
// $articles_5 = "Число цитирований из публикаций, входящих в РИНЦ: $citedFull";
// $articles_6 = "Число цитирований из публикаций, входящих в ядро РИНЦ: $coreCited";
// $articles_7 = "Среднее число цитирований в расчете на одну публикацию: $avgCited";
// $articles_8 = "Число публикаций в РИНЦ за последние 5 лет (2017-2021): $publ5";
$name = $teacher['name'];
$ar1 = $numOfItemsFull;
$articles_1 = "Number of publications in the RSCI: $main_info_1";
$articles_2 = "The number of publications included in the core of the RSCI: $main_info_2";
$articles_3 = "The Hirsch index for publications in the RSCI: $main_info_3";
$articles_4 = "The Hirsch index of the RSCI core: $main_info_4";
$articles_5 = "The number of citations from publications included in the RSCI: $main_info_5";
$articles_6 = "The number of citations from publications included in the core of the RSCI: $main_info_6";
$articles_7 = "Average number of citations per publication: $main_info_7";
$articles_8 = "Number of publications in the RSCI over the last 5 years (2017-2021): $main_info_8";












//create a FPDF object
$pdf = new FPDF();
//set document properties
$pdf->SetAuthor('Group 211-361');
$pdf->SetTitle('Report about the teacher');
//set font for the entire document
$pdf->SetFont('Times', 'B', 16);
$pdf->SetTextColor(0, 0, 0);
//set up a page
$pdf->AddPage('P');

//$pdf->SetDisplayMode(real,'default');

//display the title with a border around it
$pdf->SetXY(50, 20);
$pdf->SetDrawColor(0, 0, 0);
$pdf->Cell(100, 10, 'Report about the teacher', 1, 1, 'C', 0);
//Set x and y position for the main text, reduce font size and write content

$pdf->SetFontSize(14);

define('FPDF_FONTPATH', "fpdf/font/");
//$str = "Московский политехнический университет";
//$str = iconv('UTF-8', 'cp1252', $str);
$pdf->SetXY(50, 40);
//$pdf->Cell(100, 10, iconv('UTF-8', 'windows-1251', "Московский политехнический университет"), 0, 1, 'C', 0);
$pdf->SetXY(50, 60);
$pdf->Cell(100, 10, 'CURRENT TEACHER', 0, 1, 'C', 0);

//$pdf->Cell(5, 20, "$name", 0, 1);
$pdf->SetXY(25, 80);
$pdf->Cell(5, 20, "$articles_1", 0, 1);
$pdf->SetXY(25, 100);
$pdf->Cell(5, 20, "$articles_2", 0, 1);
$pdf->SetXY(25, 120);
$pdf->Cell(5, 20, "$articles_3", 0, 1);
$pdf->SetXY(25, 140);
$pdf->Cell(5, 20, "$articles_4", 0, 1);
$pdf->SetXY(25, 160);
$pdf->Cell(5, 20, "$articles_5", 0, 1);
$pdf->SetXY(25, 180);
$pdf->Cell(5, 20, "$articles_6", 0, 1);
$pdf->SetXY(25, 200);
$pdf->Cell(5, 20, "$articles_7", 0, 1);
$pdf->SetXY(25, 220);
$pdf->Cell(5, 20, "$articles_8", 0, 1);

$pdf->AddPage('P');




//Output the document
$pdf->Output('report_current.pdf', 'I');
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
$pdf->Cell(150, 90, 'current teacher');
$pdf->Cell(150, 80, 'Report about the teacher');

$pdf->Output();
ob_end_flush();
*/
?>