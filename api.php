<?php

// require 'path/to/google-search-results.php';
// require 'path/to/restclient.php';

// $query = [
//  "engine" => "google_scholar_profiles",
//  "mauthors" => "Mike",
// ];

// $search = new GoogleSearch('307f263ee859b4f80787d1279daf1105ab0f7c5bdfd895146bbd35c9444d7760');
// $result = $search->get_json($query);
// $profiles = $result->profiles;

// print_r($profiles);

        //https://serpapi.com/search.json?engine=google_scholar_profiles
        //&mauthors=Логачёв Максим
        //&api_key=307f263ee859b4f80787d1279daf1105ab0f7c5bdfd895146bbd35c9444d7760


    include "dp.php";

    $url = 'https://serpapi.com/search.json';
    $mauthors = $teacher['name'];

    $author_id = $teacher['author_id'];



    $options_profile = array(
        'engine' => 'google_scholar_profiles',
        'api_key' => '307f263ee859b4f80787d1279daf1105ab0f7c5bdfd895146bbd35c9444d7760',
        'mauthors' => $mauthors,

    );


    if ($author_id == null) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_URL, $url. '?'. http_build_query($options_profile));

        $response = curl_exec($ch);
        $data = json_decode($response);
        curl_close($ch);

        $author_id = $data->profiles[0]->author_id;
        echo $author_id;
        mysqli_query($connect, "UPDATE `teacher` SET `author_id` = '$author_id' WHERE `name`='$mauthors'; ");

    }

    
//     // $author_id = $profile_request['profiles'][0]['author_id'];

//     // foreach ($data['profiles'] as $i) {
//     //     // echo $i['author_id'];

//     //     if ($i['affiliations'] = 'Московский политехнический университет') {
//     //         $author_id = $i['author_id'];
//     //     }
        
        
//     // }


    $options_author = array(
        'engine' => 'google_scholar_author',
        'api_key' => '307f263ee859b4f80787d1279daf1105ab0f7c5bdfd895146bbd35c9444d7760',
        'author_id' => $author_id
    );

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_URL, $url. '?'. http_build_query($options_author));

    $response = curl_exec($ch);
    $data = json_decode($response);
    curl_close($ch);


    // print_r($author_request->cited_by->table[1]->h_index->all);
    print_r($data->cited_by->table[1]->h_index->all);


    ?>


