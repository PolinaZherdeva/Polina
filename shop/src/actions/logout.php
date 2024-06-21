<?php

require_once __DIR__.'/../helpers.php';

if ($_SERVER['REQUEST_METHOD'] = 'POST'){
    logout();
}

redirect(path: '/shop/login-register/login.php');
