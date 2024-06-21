<?php
//session_start(); //можно прикрепить в helpers.php если будем пользоваться функцией часто

require_once __DIR__.'/../helpers.php';//подключаем helpers для доступа к различным функциям 

//Выносим данные из $_POST в отдельные переменные
$first_name = $_POST['first_name'] ?? null;
$last_name = $_POST['last_name'] ?? null;
$email = $_POST['email'] ?? null;
$password = $_POST['password'] ?? null;
$passwordConfirmation = $_POST['password-confirmation'] ?? null;

// Validation (сессии??)

$_SESSION['validation']=[]; 

if(empty($first_name)) {
    //$_SESSION['validation']['name'] = 'Неверное имя';
    addValidationError(fieldName: 'first_name', message: 'Введите имя');
    
}

if(empty($last_name)) {
    //$_SESSION['validation']['name'] = 'Неверное имя';
    addValidationError(fieldName: 'last_name', message: 'Введите фамилию');
    
}

if(empty($email))
{
    addValidationError(fieldName: 'email', message: 'Введите почту');
}
else if(!filter_var($email, filter: FILTER_VALIDATE_EMAIL))
{
    addValidationError(fieldName: 'email', message: 'Неверно указана почта');
}

if(empty($password))
{
    addValidationError(fieldName: 'password', message: 'Пароль пустой');
}

if (($password)!==($passwordConfirmation))
{
    addValidationError(fieldName: 'password-confirmation', message: 'Пароли не совпадают');
}

if (!empty($_SESSION['validation'])){
    addOldValue('first_name', $first_name);
    addOldValue('last_name', $first_name);
    addOldValue('email', $email);
    redirect(path: '../../login-register/register.php');
}

$pdo =getPDO();

$query = "INSERT INTO users (first_name, last_name, email, password) VALUES (:first_name, :last_name, :email, :password)";
$params = [
    'first_name' => $first_name,
    'last_name' => $last_name,
    'email' => $email,
    'password' => password_hash($password, PASSWORD_DEFAULT)// qwe123 -> зашифровать hash функцией
];
$stmt = $pdo->prepare($query);

if (findUser($email)) {
    setMessage(key: 'error', message: "Пользователь $email уже зарегистрирован!");
    redirect(path: '../../login-register/register.php');
}

try {
    $stmt ->execute($params);
} catch (\Exception $e){
    die($e ->getMessage());
}

redirect(path: '../../login-register/login.php');