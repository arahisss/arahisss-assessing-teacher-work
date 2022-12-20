<?php

include "dp.php";

function request_EL($url, $options)
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_URL, $url . '?' . http_build_query($options));

    $response = curl_exec($ch);
    curl_close($ch);

    return $response;
}

$url = 'http://elibrary.ru/projects/API-NEB/API_NEB.aspx';

// ordid = 14985 это идентификатор политеха
// $options = array(
//     'ucode' => 'aae88eb8-a470-ed11-8ec7-000af73d0592',
//     'sid' => '013',
//     'orgid' => '14985'
// );

// $response = request_EL($url, $options);

// $xml = simplexml_load_string($response);
// $json = json_encode($xml);
// $data_all = json_decode($json);

// echo '<pre>';
// // print_r($data);

// $authors = $data_all->authors->author;

// echo $authors[0];

// for ($i = 0; $i < 4; $i++) {
//     $options2 = array(
//         'ucode' => 'aae88eb8-a470-ed11-8ec7-000af73d0592',
//         'sid' => '024',
//         'authorid' => $authors[$i]
//     );

//     $response = request_EL($url, $options2);

//     $xml = simplexml_load_string($response);
//     $json = json_encode($xml);
//     $data = json_decode($json, true);

//     // echo '<pre>';
//     // print_r($data);

//     $name = $data['author']['lastName'] . ' ' . $data['author']['firstName'] . ' ' . $data['author']['secondName'];
//     echo $name;
//     echo $authors[$i];

//     mysqli_query($connect, "INSERT INTO `teacher` (`name`, `author_id`) VALUES('$name' , '$authors[$i]' )");

// }

// if ($teacher['author_id'] != null) {

// }


$options2 = array(
    'ucode' => 'aae88eb8-a470-ed11-8ec7-000af73d0592',
    'sid' => '024',
    'authorid' => $teacher['author_id']
);


$response = request_EL($url, $options2);

$xml = simplexml_load_string($response);
$json = json_encode($xml);
$data = json_decode($json, true);


$numOfItemsFull = $data['author']['@attributes']['numOfItemsFull'];
$numOfCoreItems = $data['author']['@attributes']['numOfCoreItems'];
$hirschs = $data['author']['@attributes']['hirschs'];
$hirschCore = $data['author']['@attributes']['hirschCore'];
$citedFull = $data['author']['@attributes']['citedFull'];
$coreCited = $data['author']['@attributes']['coreCited'];
$avgCited = $data['author']['@attributes']['avgCited'];
$publ5 = $data['author']['@attributes']['publ5'];

// header("Location: index2.php?numOfItemsFull=$numOfItemsFull");

// Массив с данными о статьях
$articles = array(
    'publForeign' => $data['author']['@attributes']['publForeign'],
    'publRussian' => $data['author']['@attributes']['publRussian'],
    'publVAK' => $data['author']['@attributes']['publVAK'],
    'publTranslated' => $data['author']['@attributes']['publTranslated'],
    'publIF' => $data['author']['@attributes']['publIF']
);


// Массив с данными о цитированиях
$citations = array(
    'citForeign' => $data['author']['@attributes']['citForeign'],
    'citRussian' => $data['author']['@attributes']['citRussian'],
    'citVAK' => $data['author']['@attributes']['citVAK'],
    'citTranslated' => $data['author']['@attributes']['citTranslated'],
    'citIF' => $data['author']['@attributes']['citIF']
);
