<?php

class Request {

    function request($url, $options) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_URL, $url. '?'. http_build_query($options));
    
        $response = curl_exec($ch);
        $data = json_decode($response);
        curl_close($ch);
    
        return $data;
    }

}



?>