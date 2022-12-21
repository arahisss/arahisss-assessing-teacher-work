<?php
define('FPDF_FONTPATH',"fpdf/font/");

// Optionally define the filesystem path to your system fonts
// otherwise tFPDF will use [path to tFPDF]/font/unifont/ directory

//define("_SYSTEM_TTFONTS", "tfpdf/font/unifont/");
define("_SYSTEM_TTFONTS", "tfpdf/font/");
require("fpdf/fpdf.php");
require('tfpdf/tfpdf.php');

include "api.php";
echo $numOfItemsFull;

// $pril=$_COOKIE["pril"];
// $name=$_COOKIE["name"];
// $type=$_COOKIE["type"];
// $typee=$_COOKIE["typee"];
// $typeee=$_COOKIE["typeee"];
// $typeeee=$_COOKIE["typeeee"];
date_default_timezone_set("Europe/Moscow");
$date = date('d.m.Y');

$pdf = new TFPDF();
$pdf->AddPage();
// $pdf->AddFont('ArialMT','','arial.php'); 
// $pdf->SetFont('ArialMT');

$pdf->AddFont('TimesNewRomanPSMT','','times.php'); 
$pdf->SetFont('TimesNewRomanPSMT');
    
// добавляем шрифт ариал
//$pdf->AddFont('Arial','','arial.php'); 
// устанавливаем шрифт Ариал
//$pdf->SetFont('Arial');

// $pdf->AddFont('DejaVu','','DejaVuSansCondensed.ttf',true);
// $pdf->SetFont('DejaVu','',14);
//$txt = file_get_contents('result.txt');
//$pdf->Write(8,$txt);

$text_name_1 = 'Logachev Maksim Sergeevich';
$pdf->Write(0,iconv('utf-8', 'windows-1251',"Коммерческое предложение"));
$text5='К настоящему заявлению прилагаю следующие документы: '."$m1";
$pdf->Write(10,iconv('utf-8', 'windows-1251', $text_name_1));
$pdf->Write(10,iconv('utf-8', 'windows-1251',$text5)); 

$pdf->Output('result_current.pdf', 'I');

?>