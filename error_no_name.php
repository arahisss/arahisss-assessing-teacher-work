<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset = "UTF-8">
    <link rel = 'stylesheet' href = 'styles/style.css'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <meta name="keywords" content="bootstrap, bootstrap4" />
    <link href="styles/bootstrap.min.css" rel="stylesheet">
    <script src="js_files/bootstrap.bundle.min.js"></script>
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nabla&family=Open+Sans:ital,wght@0,400;0,500;1,400;1,500&family=Poppins&display=swap" rel="stylesheet">
    <title>Система оценки качества работы преподавателя</title>
</head>
<body>
    <div class="header">
        <div class="container">
            <div class="header-line">
                <img src="pictures/logo.png" class="logo" height="90px">
                <a class="nav-item" href="index.php">Главная</a>
                <a class="nav-item" href="#down-line">Контакты</a>
            </div>
        </div>    
    </div>
    <div class="header-down">
        <div class="elements">
            <h5>Такой преподаватель отсутствует в базе данных. Введите имя еще раз.</h5>
            <div class = "analyze">
                    <a href="index.php"><button type="button" id="form-button" class="custom-btn button1"><span>На главную</span></button></a>
            </div>
        </div>
    </div>
    <div class="footer">
        <div class="down-line" id="down-line">
            <p class="foot" id = "email">Почта: teaching.analysis@gmail.com</p>
            <p class="foot" id = "contact">Телефон: 89778030343</p>
            <a class="foot" id="source" href="https://elibrary.ru/">Источник данных: API eLIBRARY.RU</p>
        </div>   
    </div>
</body>  
</html>