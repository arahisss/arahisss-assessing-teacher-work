<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset = "UTF-8">
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
<?php include("api.php"); ?>

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
            <h5>Данный проект выполняется студентами Московского Политехнического университета.</h5>
            <h5>Научный руководитель - Логачёв Максим Сергеевич.</h5>
        </div>
        <div publForeign="" class="diagrams">
            
            <div>
                <canvas id="chart1"></canvas>
            </div>
            <div>
                <canvas id="chart2"></canvas>
            </div>
            <!-- скрипт с диаграммами
            <script>
            'use strict';
            var DEFAULT_COLORS1 = ['#DCDCE0', '#BCC0CD', '#9DA4B9', '#7D87A6', '#5D6B92'];
            var DEFAULT_COLORS2 = ['#5996F7', '#809FF9', '#A7A8FB', '#CEB0FD', '#F5B9FF'];
            var getTotal = function(myChart) {
                var sum = myChart.config.data.datasets[0].data.reduce((a, b) => a + b, 0);
                return `Total: ${sum}`;
                }
            var ctx = document.getElementById('chart1').getContext('2d');
            new Chart(ctx, {
                type: 'doughnut',
                data: {
                    datasets: [{
                        data: [1, 2, 3, 4, 5],
                        //$data_articles = $.parseJSON(data),
                        //articles = JSON.parse(<?php //$articles ?>),
                        //data: [articles[0], articles[1], articles[2], articles[3], articles[4]],
                        //data: [a0, a1, a2, a3, a4],
                        //data: [JSON.stringify()],
                        backgroundColor: DEFAULT_COLORS2,
                        label: 'Dataset 1'
                    }],
                    labels: ['publForeign', 'publRussian', 'publVAK', 'publTranslated', 'publIF']
                },
                options: {
                    responsive: true,
                    legend: {
                        display: true,
                        position: 'bottom',
                        labels: {
                            color: 'black',
                            boxWidth: 40,
                            boxHeight: 40,
                            padding: 20,
                        },
                    },
                    title: {
                        display: true,
                        fontSize: 20,
                        text: 'Данные о статьях'
                    },
                    animation: {
                        animateScale: true,
                        animateRotate: true
                    },
                    plugins: {
                        doughnutlabel: {
                            labels: [
                                {
                                    text: 'The title',
                                    font: {
                                        size: '60'
                                    }
                                },
                            ]
                        }
                    }
                }
            });
            ctx = document.getElementById('chart2').getContext('2d');
            new Chart(ctx, {
                type: 'doughnut',
                data: {
                    datasets: [{
                        data: [1, 2, 3, 4, 5],
                        backgroundColor: DEFAULT_COLORS2,
                        label: 'Dataset 1'
                    }],
                    labels: ['citForeign', 'citRussian', 'citVAK', 'citTranslated', 'citIF']
                },
                options: {
                    responsive: true,
                    legend: {
                        display: true,
                        position: 'bottom',
                        labels: {
                            color: 'black',
                            boxWidth: 40,
                            boxHeight: 40,
                            padding: 20,
                        },
                    },
                    title: {
                        display: true,
                        fontSize: 20,
                        text: 'Данные о цитированиях'
                    },
                    animation: {
                        animateScale: true,
                        animateRotate: true
                    },
                    plugins: {
                        doughnutlabel: {
                            labels: [
                                {
                                    text: 'This is one line of text',
                                    font: {
                                        size: '60',
                                        family: 'Arial, Helvetica, sans-serif',
                                        style: 'italic',
                                        weight: 'bold'
                                    },
                                    color: '#bc2c1a'
                                }
                            ]
                        }
                    }
                }
            });
            </script> -->
        </div>
        
        
        <div id="res_value">
            <?php
                include "db.php";
                $result = mysqli_query($connect, "SELECT * FROM `teacher` WHERE `name` = '$_POST[name]'");
                $teacher = mysqli_fetch_assoc($result);
            ?>

            <h3><?php echo $teacher['name']; ?></h3>
          
            <h5>Число публикаций в РИНЦ: <?php print_r($numOfItemsFull); ?></h5>
            <h5>Число публикаций, входящих в ядро РИНЦ: <?php echo $numOfCoreItems; ?></h5>
            <h5>Индекс Хирша по публикациям в РИНЦ: <?php echo $hirschs; ?></h5>
            <h5>Индекс Хирша по ядру РИНЦ: <?php echo $hirschCore; ?></h5>
            <h5>Число цитирований из публикаций, входящих в РИНЦ: <?php echo $citedFull; ?></h5>
            <h5>Число цитирований из публикаций, входящих в ядро РИНЦ: <?php echo $coreCited; ?></h5>
            <h5>Среднее число цитирований в расчете на одну публикацию: <?php echo $avgCited; ?></h5>
            <h5>Число публикаций в РИНЦ за последние 5 лет (2017-2021): <?php echo $publ5; ?></h5>
        </div>

    </div>
    <div class="footer2">
        <div class="down-line" id="down-line2">
            <p class="foot" id = "email">Почта: teaching.analysis@gmail.com</p>
            <p class="foot" id = "contact">Телефон: 89778030343</p>
            <p class="foot" id="source">Источник данных: API eLIBRARY.RU</p>
        </div>   
    </div>
</body>  
<script type="text/javascript" src="js_files/diagrams.js"></script>
</html>