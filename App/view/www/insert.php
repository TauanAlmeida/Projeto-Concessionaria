<?php

use App\model\Cadastro;
use App\classes\Connection;
use DAO\CadastroDAO;

require 'vendor/autoload.php';
require 'Registry.php';

$conn = new Connection();
$conn = $conn->getConnection();


$registry = Registry::getInstance();
$registry->set('Connection', $conn);

$modelCadastro = new Cadastro();
$modelCadastro->setNome($_POST['nome']);
$modelCadastro->setEmail($_POST['email']);
$modelCadastro->setTelefone($_POST['telefone']);
$modelCadastro->setSenha($_POST['senha']);

$cadastroDAO = new CadastroDAO();
$cadastroDAO->insertDAO($modelCadastro);

