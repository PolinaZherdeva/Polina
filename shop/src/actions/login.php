<?php
session_start();

require_once __DIR__.'/../helpers.php';

//email -> find -> user -> password = form.password -> auth()

$email = $_POST['email'] ?? null;
$password = $_POST['password'] ?? null;

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
    addValidationError(fieldName: 'password', message: 'Пустой пароль');
}

if (!empty($_SESSION['validation'])){
    addOldValue('email', $email);
    redirect(path: '../../login-register/login.php');
}

$user = findUser($email);

//var_dump($user);

if (!$user)
{
    setMessage(key: 'error', message: "Пользователь $email не зарегистрирован!");
    redirect(path: '../../login-register/login.php');
}

if (!password_verify($password, $user['password']))
{
    addOldValue('email', $email);
    setMessage(key: 'error', message: "Неверный пароль");
    redirect(path: '../../login-register/login.php');
}

$_SESSION['user']['user_id'] = $user['user_id'];


redirect(path: '../../login-register/home.php');


