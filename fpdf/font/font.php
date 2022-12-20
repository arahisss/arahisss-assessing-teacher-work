<?php
require "fpdf/makefont/makefont.php"; // подключаем нужный скрипт
MakeFont('c:\\windows\\fonts\\times.ttf',"times.afm","cp1251"); // запускаем нужную нам функцию
MakeFont('c:\\windows\\fonts\\timesbd.ttf',"timesbd.afm","cp1251");
//MakeFont("arialbi.ttf","arialbi.afm","cp1251");
//MakeFont("ariali.ttf","ariali.afm","cp1251");
?>