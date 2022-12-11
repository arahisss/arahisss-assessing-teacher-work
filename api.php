<?php
    include "dp.php";

    $index_h = $teacher['index_h'];

    // Если индекс хирша есть в бд, то просто выводим его, если нет, то оправляем запрос к API
    if ($index_h != null) {
        echo $index_h;
    }
    else {
        //url, с помощью которого будут формироваться запросы
        $url = 'https://serpapi.com/search.json';    

        // берем из бд имя автора
        $mauthors = $teacher['name'];
    
        // Параметры, из которых будет формироваться запрос, то есть все это будет соединятся в один url
        $options_profile = array(
            'engine' => 'google_scholar_profiles',
            'api_key' => '307f263ee859b4f80787d1279daf1105ab0f7c5bdfd895146bbd35c9444d7760',
            'mauthors' => $mauthors,
        );

        // Первый запрос для получения author_id

        //Curl - функция, которая используется для выполнения http запросов
        $ch = curl_init(); // открывает сеанс cURL
        // curl_setopt устанавливает параметры для запроса
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); // параметр, который говорит вернуть ответ в виде строки

        // передаем в параметры сам url, который формируется с помощью http_build_query по заданым options
        curl_setopt($ch, CURLOPT_URL, $url. '?'. http_build_query($options_profile));

        $response = curl_exec($ch); // выполняет запрос
        $data = json_decode($response); // расшифровка полученного json
        curl_close($ch); // закрываем сеанс curl

        // получаем author_id
        $author_id = $data->profiles[0]->author_id;
        // параметры для запроса на автора
        $options_author = array(
            'engine' => 'google_scholar_author',
            'api_key' => '307f263ee859b4f80787d1279daf1105ab0f7c5bdfd895146bbd35c9444d7760',
            'author_id' => $author_id
        );

        // Второй запрос для получения данных об авторе по его id
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_URL, $url. '?'. http_build_query($options_author));

        $response = curl_exec($ch);
        $data = json_decode($response);
        curl_close($ch);
        
        // получаем индекс хирша
        $index_h = $data->cited_by->table[1]->h_index->all;
        // добавляем индекс хирша в бд
        mysqli_query($connect, "UPDATE `teacher` SET `index_h` = '$index_h' WHERE `name`='$mauthors'; ");

        // Выводим индекс Хирша
    echo $author_id;        

        print_r($index_h);

    }







    // echo '<td>'. $data->cited_by->table[1]->h_index->all. '</td>';


    //     // $author_id = $profile_request['profiles'][0]['author_id'];

//     // foreach ($data['profiles'] as $i) {
//     //     // echo $i['author_id'];

//     //     if ($i['affiliations'] = 'Московский политехнический университет') {
//     //         $author_id = $i['author_id'];
//     //     }
        
        
//     // }

    ?>


