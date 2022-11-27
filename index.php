<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Система оценки качества работы преподавателя</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Проект "Система оценки качества работы преподавателя"</h1>
    <h2>Данный проект выполняется студентами Московского Политехнического университета.</h2>
    <h2>Научный руководитель - Логачёв Максим Сергеевич.</h2>

    <?php 
        // http://api.elsevier.com/content/search/author?query=AFFIL%28university%29
        // https://api.elsevier.com/content/search/author?query=authlast(Einstein)%20and%20authfirst(Albert)%20and%20affil(Princeton)&apiKey=7f59af901d2d86f78a1fd60c1bf9426a

        $url = 'https://api.elsevier.com/content/search/author';

        $options = array(
            'apiKey' => 'c718020d82709e407c135fb4a33a9a06',
            'authlast' => 'Einstein',
            'authfirst' => 'Albert',
            'affil' => 'Princeton'
            
        );
        //'lang' => 'en'

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_URL, $url.'?'.http_build_query($options));

        $response = curl_exec($ch);
        curl_close($ch);

        echo '<pre>';
        print_r($response);

        
    ?>

    <script type="text/javascript" src="https://api.elsevier.com/content/search/author"></script>
    <script type="text/javascript" src="main.js"></script>


</body>
</html>