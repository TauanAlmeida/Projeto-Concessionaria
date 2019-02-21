<?php

use App\model\Login;
use App\classes\Connection;
use DAO\LoginDAO;

require 'vendor/autoload.php';
require 'Registry.php';

$conn = new Connection();
$conn = $conn->getConnection();

$registry = Registry::getInstance();
$registry->set('Connection', $conn);

$modelLogin = new Login();
$modelLogin->setLogin($_POST['email_login']);
$modelLogin->setSenha($_POST['password']);


$loginDAO = new LoginDAO();
$loginDAO->validarLogin($modelLogin);

if ($loginDAO){
    echo 'foi';
}else{
    echo 'n foi';
}