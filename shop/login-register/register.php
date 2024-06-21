<?php

require_once __DIR__ . '/../src/helpers.php';

//$_SESSION['validation']=[];
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<device-width>, initial-scale=1.0">
    <title>register</title>
    <link rel="stylesheet" href="../css/login-register/register/register.css">
</head>
<body>
    <main>
        <a class="back" href="../index.php">Вернуться на главную страницу</a>
        <div class="container">
            <form class="register" action="../src/actions/register.php" method="post">
                <h2>Регистрация</h2>
                <?php if(hasMessage('error')): ?>
                    <span class="notice_error">
                        <?php echo getMessage('error'); ?>
                    </span>
                <?php endif; ?>
                <div class="name">
                    <span class="text-label">Имя</span>
                    <input
                        type="text"
                        id="first_name"
                        name="first_name"
                        placeholder="Иван"
                        value="<?php echo old(key: 'first_name')?>"
                        <?php validationIsError(fieldName: 'first_name'); ?>
                    >
                    <?php if(hasValidationErrror(fieldName: 'first_name')): ?> 
                        <span class="error-message"><?php echo validationErrorMessage('first_name'); ?></span>
                    <?php endif; ?>
                </div>
                <div class="surname">
                    <span class="text-label">Фамилия</span>
                    <input
                        type="text"
                        id="last_name"
                        name="last_name"
                        placeholder="Иванов"
                        value="<?php echo old(key: 'last_name')?>"
                        <?php validationIsError(fieldName: 'last_name'); ?>
                    >
                    <?php if(hasValidationErrror(fieldName: 'last_name')): ?> 
                        <span class="error-message"><?php echo validationErrorMessage('last_name'); ?></span>
                    <?php endif; ?>
                </div>
                <div class="email">
                    <span class="text-label">E-mail</span>
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
                <div class="password">
                    <span class="text-label">Пароль</span>
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
                <div class="password-second">
                    <span class="text-label">Подтверждение</span>
                    <input 
                    type="password"
                    id="password"
                    name="password-confirmation"
                    placeholder="******"
                    <?php validationIsError(fieldName: 'password-confirmation'); ?>
                    >
                    <?php if(hasValidationErrror(fieldName: 'password-confirmation')): ?> 
                        <span class="error-message"><?php echo validationErrorMessage('password-confirmation'); ?></span>
                    <?php endif; ?>
                </div>
                <label class="checkbox-container-item">
                    <input type="checkbox" name="checkbox-1">
                    <span class="text">Я принимаю все условия пользования</span>
                </label>  
                
                <button type="submit" id="submit">Продолжить</button>
                <!-- <input class="input" type="password" placeholder="Пароль"> -->      
            </form>
            <p class="login-text">У меня уже есть <a class="login-btn" href="login.php">аккаунт</a></p>
        </div>
    </main>
</body>
</html>