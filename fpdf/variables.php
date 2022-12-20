<?php
include "../api.php";

//main info
$main_info_1 = $numOfItemsFull;
$main_info_2 = $numOfCoreItems;
$main_info_3 = $hirschs;
$main_info_4 = $hirschCore;
$main_info_5 = $citedFull;
$main_info_6 = $coreCited;
$main_info_7 = $avgCited;
$main_info_8 = $publ5;

//articles
$publForeign = "$articles[publForeign]";
$publRussian = "$articles[publRussian]";
$publVAK = "$articles[publVAK]";
$publTranslated = "$articles[publTranslated]";
$publIF = "$articles[publIF]";

//citations
$citForeign = "$citations[citForeign]";
$citRussian = "$citations[citRussian]";
$citVAK = "$citations[citVAK]";
$citTranslated = "$citations[citTranslated]";
$citIF = "$citations[citIF]";

echo $main_info_1;