<?php

namespace DAO;
use App\model\Login;

require 'App/functions/helpers.php';

class LoginDAO{

    private $conn;

    public function __construct() {
        $registry = \Registry::getInstance();
        $this->conn = $registry->get('Connection');
    }

    public function validarLogin(Login $login){
        $this->conn->beginTransaction();
        try {
            $stmt = $this->conn->prepare(
                'SELECT * FROM accounts  WHERE senha = :senha and email = :email'
            );

            $stmt->bindValue(':senha', $login->getSenha());
            $stmt->bindValue(':email', $login->getLogin());
            
            
            $stmt->execute();
            $this->conn->commit();

           
        }
        catch(Exception $e) {
            $this->conn->rollback();
        }
    }

}