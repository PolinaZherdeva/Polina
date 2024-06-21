<?php
require_once __DIR__ . '/../src/helpers.php';

checkAuth();

$user = currentUser();

$fullName = $user['first_name'] . ' ' . $user['last_name'];


?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page</title>
    <link rel="stylesheet" href="../css/login-register/home/home.css">
</head>
<body>
    <header class="header">
        <div class="container">
            <div class="logo">
                <a href ="../index.php">
                    <img src="../img/logo.png" alt="logo" width="210">
                </a>  
            </div>
        </div>
    </header>
    <main>
        <div class="container">
            <h2>Привет, <?php echo $fullName ?></h2>
            <div class="sidebar">
                <ul>
                    <li><a href="#">Заказы</a></li>
                    <li><a href="#">Возвраты</a></li>
                    <li><a href="#">Отзывы и вопросы</a></li>
                    <li><a href="#">Сохраненные карты</a></li>
                    <form action="../src/actions/logout.php" method="post">
                        <button role="button" class="logout">Выход из аккаунта</button>
                    </form>
                </ul>
            </div>
        </div>
    </main>
</body>
</html>