<?php

require_once __DIR__ . '/../src/helpers.php';
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<device-width>, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="../css/login-register/login/login.css">
</head>
<body>
    <main>
        <a class="back" href="../index.php">Вернуться на главную страницу</a>
        <div class="container">
            <form class="login" action="../src/actions/login.php" method="post">
                <h2>Вход</h2>
                <?php if(hasMessage('error')): ?>
                    <span class="notice_error">
                        <?php echo getMessage('error'); ?>
                    </span>
                <?php endif; ?>
                
                <div class="email">
                    <span class="text">E-mail</span>
                    <input
                        type="text"
                        id="email"
                        name="email"
                        placeholder="ivan@areaweb.su"
                        value="<?php echo old(key: 'email')?>"
                        <?php validationIsError(fieldName: 'email'); ?>
                    >
                    <?php if(hasValidationErrror(fieldName: 'email')): ?> 
                        <span class="error-message"><?php echo validationErrorMessage('email'); ?></span>
                    <?php endif; ?>
                </div> 
                <div for="password">
                    <span class="text">Пароль</span>
                    <input 
                        type="password"
                        id="password"
                        name="password"
                        placeholder="******"
                        <?php validationIsError(fieldName: 'password'); ?>
                    >
                    <?php if(hasValidationErrror(fieldName: 'password')): ?> 
                        <span class="error-message"><?php echo validationErrorMessage('password'); ?></span>
                    <?php endif; ?>
                </div>
                <button type="submit" id="submit">Продолжить</button>
                <!-- <input class="input" type="password" placeholder="Пароль"> -->      
            </form>
            <p class="login-text">У меня еще нет <a class="login-btn" href="register.php">аккаунта</a></p>
        </div>
    </main>
</body>
</html>