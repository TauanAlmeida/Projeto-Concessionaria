<?php

    namespace App\model;

    class Cadastro{
        private $nome;
        private $email;
        private $telefone;
        private $senha;
        
        public function setNome($nome){
            $this->nome = $nome;
        }
       
        public function getNome(){
            return $this->nome;
        }
        
        public function setEmail($email){
            $this->email = $email;
        }
       
        public function getEmail(){
            return $this->email;
        }

        public function getTelefone(){
            return $this->telefone;
        }
        
        public function setTelefone($tell){
            $this->telefone = $tell;
        }
       
        public function getSenha(){
            return $this->senha;
        }

        public function setSenha($senha){
            $this->senha = $senha;
        }
       
      
    
    
    }


?>