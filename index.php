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
                <a class="nav-item" href="#body">Главная</a>
                <a class="nav-item" href="#down-line">Контакты</a>
            </div>
        </div>    
    </div>
    <div class="header-down">
        <div class="elements">
            <h3 id="project_name">Система оценки качества работы преподавателя</h3>
            <h5>Данный проект выполняется студентами Московского Политехнического университета.</h5>
            <h5>Научный руководитель - Логачёв Максим Сергеевич.</h5>
        </div>

        <div class = form1>
            <form action="index2.php" method="post">
                <p><input name="name" type="text" placeholder="Введите ФИО преподавателя" size = "50"/></p>
                <div class = "analyze">
                    <input type="submit" value="Анализировать" />
                </div>
            </form>
        </div>

        </div>
        <div class="footer">
            <div class="down-line">
                <p class="foot" id = "email">Почта: teaching.analysis@gmail.com</p>
                <p class="foot" id = "contact">Телефон: 89778030343</p>
            </div>   
        </div>

    

    <div class="footer">
        <div class="down-line" id="down-line">
            <p class="foot" id = "email">Почта: teaching.analysis@gmail.com</p>
            <p class="foot" id = "contact">Телефон: 89778030343</p>
            <p class="foot" id="source">Источник данных: API eLIBRARY.RU</p>
        </div>   
    </div>
</body>  
</html>