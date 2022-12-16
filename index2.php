<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset = "UTF-8">
    <link rel="stylesheet/less" type="text/css" href="styles/preloader.less">
    <link rel = 'stylesheet' href = 'styles/style.css'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <meta name="keywords" content="bootstrap, bootstrap4" />
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600&display=swap" rel="stylesheet">
    <link href="styles/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.7.0/dist/Chart.min.js"></script>
	<script src="../dist/chartjs-plugin-doughnutlabel.js"></script>
    <script src="js_files/bootstrap.bundle.min.js"></script>
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nabla&family=Open+Sans:ital,wght@0,400;0,500;1,400;1,500&family=Poppins&display=swap" rel="stylesheet">
    <title>Система оценки качества работы преподавателя</title>
</head>
<body>
    
    <!--для прелоадера
    <div class="center">
        <div class="loader blur">
            <script src="js_files/preloader.js"></script>
            <div class="circle circle-1"></div>
            <div class="circle circle-2"></div>
        </div>
    </div>-->

    <!--
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="955 0 44 44">
    <svg x="955" stroke="#000">
        <g fill="none" fill-rule="evenodd" stroke-width="2">
        <circle cx="22" cy="22" r="1">
            <animate attributeName="r" begin="0s" calcMode="spline" dur="1.8s" keySplines="0.165, 0.84, 0.44, 1" keyTimes="0; 1" repeatCount="indefinite" values="1; 20" begin="3s;op.end+3s" />
            <animate attributeName="stroke-opacity" begin="0s" calcMode="spline" dur="1.8s" keySplines="0.3, 0.61, 0.355, 1" keyTimes="0; 1" repeatCount="3" values="1; 0" begin="3s;op.end+3s" />
        </circle>
        <circle cx="22" cy="22" r="1">
            <animate attributeName="r" begin="-0.9s" calcMode="spline" dur="1.8s" keySplines="0.165, 0.84, 0.44, 1" keyTimes="0; 1" repeatCount="indefinite" values="1; 20" begin="3s;op.end+3s" />
            <animate attributeName="stroke-opacity" begin="-0.9s" calcMode="spline" dur="1.8s" keySplines="0.3, 0.61, 0.355, 1" keyTimes="0; 1" repeatCount="indefinite" values="1; 0" begin="3s;op.end+3s" />
        </circle>
        </g>
    </svg>
    </svg>-->


    <div class="header">
        <div class="container2">
            <div class="header-line">
                <img src="pictures/logo.png" class="logo" height="90px">
                <a class="nav-item" href="index.php">Главная</a>
                <a class="nav-item" href="#down-line2">Контакты</a>
            </div>
        </div>    
    </div>
    <div class="header-down">
        <div class="elements">
            <h3 class="h3_2" id="project_name">Система оценки качества работы преподавателя</h3>
        </div>
        <div id="res_value">
            <?php
                include "db.php";
                //$result = mysqli_query($connect, "SELECT * FROM `teacher` WHERE `name` = '$_POST[name]'");
                //$teacher = mysqli_fetch_assoc($result);
                $result = mysqli_query($connect, "SELECT * FROM `teacher` WHERE `name` = '$_POST[name]'");
                if (mysqli_num_rows($result) == 1) { 
                    $teacher = mysqli_fetch_assoc($result);
                }
                else {
                    echo '<script>location.replace("error_no_name.php");</script>'; exit;
                    //echo "no users with this name";
                }
            ?>
        <?php include("api.php"); ?>
            <h3><?php echo $teacher['name']; ?></h3>
            <h5>Число публикаций в РИНЦ: <?php echo $numOfItemsFull; ?></h5>
            <h5>Число публикаций, входящих в ядро РИНЦ: <?php echo $numOfCoreItems; ?></h5>
            <h5>Индекс Хирша по публикациям в РИНЦ: <?php echo $hirschs; ?></h5>
            <h5>Индекс Хирша по ядру РИНЦ: <?php echo $hirschCore; ?></h5>
            <h5>Число цитирований из публикаций, входящих в РИНЦ: <?php echo $citedFull; ?></h5>
            <h5>Число цитирований из публикаций, входящих в ядро РИНЦ: <?php echo $coreCited; ?></h5>
            <h5>Среднее число цитирований в расчете на одну публикацию: <?php echo $avgCited; ?></h5>
            <h5>Число публикаций в РИНЦ за последние 5 лет (2017-2021): <?php echo $publ5; ?></h5>
        </div>
        <div class="diagrams">
            <div class="articles" publForeign="<?= $articles['publForeign']?>" publRussian="<?= $articles['publRussian']?>"
            publVAK="<?= $articles['publVAK']?>" publTranslated="<?= $articles['publTranslated']?>" publIF="<?= $articles['publIF']?>" >
                <canvas id="chart1"></canvas>
            </div>
            <div class="citations" citForeign="<?= $citations['citForeign']?>" citRussian="<?= $citations['citRussian']?>"
            citVAK="<?= $citations['citVAK']?>" citTranslated="<?= $citations['citTranslated']?>" citIF="<?= $citations['citIF']?>">
                <canvas id="chart2"></canvas>
            </div> 
        </div>
    </div>
    <div class="footer2">
        <div class="down-line" id="down-line2">
            <p class="foot" id = "email">Почта: teaching.analysis@gmail.com</p>
            <p class="foot" id = "contact">Телефон: 89778030343</p>
            <a class="foot" id="source" href="https://elibrary.ru/">Источник данных: API eLIBRARY.RU</p>
        </div>   
    </div>
</body>  
<script type="text/javascript" src="js_files/diagrams.js"></script>
</html>