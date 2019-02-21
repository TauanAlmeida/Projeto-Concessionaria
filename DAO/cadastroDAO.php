<?php


namespace DAO;
use App\model\Cadastro;

class CadastroDAO {

    private $conn;

    public function __construct() {
        $registry = \Registry::getInstance();
        $this->conn = $registry->get('Connection');
    }

    public function insertDAO(Cadastro $cad) {
        $this->conn->beginTransaction();

        try {
            $stmt = $this->conn->prepare(
                'INSERT INTO accounts (nome, senha, email, telefone) VALUES (:nome, :senha, :email, :telefone)'
            );

            $stmt->bindValue(':nome', $cad->getNome());
            $stmt->bindValue(':senha', $cad->getSenha());
            $stmt->bindValue(':email', $cad->getEmail());
            $stmt->bindValue(':telefone', $cad->getTelefone());
            $stmt->execute();
            $this->conn->commit();
            
        }
        catch(Exception $e) {
            
            $this->conn->rollback();
        }
    }


}

