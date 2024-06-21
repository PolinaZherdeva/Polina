<?php

session_start();

require_once __DIR__. '/config.php';

//метод для переадресации
function redirect(string $path)
{
    header(header: "Location: $path");
    die();
}

//метод для проверки наличия ошибка - отрисует/не отрисует метод
function validationIsError(string $fieldName)
{
    echo  isset($_SESSION['validation'][$fieldName]) ? 'aria-invalid="true"': '';
}

//метод для вывода типа ошибка
function validationErrorMessage (string $fieldName)
{
    $message = $_SESSION['validation'][$fieldName] ?? '';
    unset($_SESSION['validation'][$fieldName]);
    echo  $message;
}

//метод для проверки наличия типа ошибки 
function hasValidationErrror (string $fieldName): bool
{
    return isset($_SESSION['validation'][$fieldName]);
}

function addValidationError(string $fieldName, string $message): void
{
    $_SESSION['validation'][$fieldName] = $message;
}

function clearValidation()
{
    $_SESSION['validation']=[];
}

function addOldValue(string $key, mixed $value)
{
    $_SESSION['old'][$key] = $value;
}

function old(string $key)
{
    $value = $_SESSION['old'][$key] ?? '';
    unset($_SESSION['old'][$key]);
    return $value;
}

function clearOldValue(string $key): void
{
    $_SESSION['old']=[];
}

function getPDO()
{
    try{
        return new \PDO('mysql:host=' . DB_HOST . ';port=' . DB_PORT . ';dbname=' . DB_NAME, DB_USERNAME, DB_PASSWORD);
    } catch (\PDOException $e) {
        die("Connection error: {$e->getMessage()}");
    }

}

function setMessage(string $key, string $message): void
{
    $_SESSION['message'][$key] = $message;
}

function hasMessage(string $key): bool
{
    return isset($_SESSION['message'][$key]);
}

function getMessage(string $key): string
{
    $message = $_SESSION['message'][$key] ?? '';
    unset($_SESSION['message'][$key]);
    return $message;
}

function findUser(string $email): array|bool
{
    $pdo =getPDO();
    $stmt = $pdo -> prepare(query: "SELECT * FROM users WHERE email= :email");
    $stmt -> execute(['email'=>$email]);
    return $stmt -> fetch(mode: \PDO::FETCH_ASSOC); //$user
}

function currentUser(): array|false
{
    $pdo =getPDO();

    if (!isset($_SESSION['user']))
    {
        return false;
    }

    $userId = $_SESSION['user']['user_id'] ?? null;

    $stmt = $pdo -> prepare(query: "SELECT * FROM users WHERE user_id= :user_id");
    $stmt -> execute(['user_id'=>  $userId]);
    return $stmt -> fetch(mode: \PDO::FETCH_ASSOC); 
}

function logout(): void
{
    unset($_SESSION['user']['user_id']);
    redirect(path: '/../../shop/index.php');
}

// не дает доступ к странице профиля пользователя при отсутствии авторизации
function checkAuth(): void
{
    if (!isset($_SESSION['user']['user_id']))
    {
        redirect(path: '/shop/login-register/login.php' );
    }
}

//проверка, что пользователь авторизировался - переход к странице профиля
function checkGuest(): void
{
    if (isset($_SESSION['user']['user_id']))
    {
        redirect(path: '/shop/login-register/home.php' );
    }
}