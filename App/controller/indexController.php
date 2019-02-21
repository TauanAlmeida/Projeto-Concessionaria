<?php

namespace App\Controller;

//include 'App//model//produtos.php';

class indexController {
    
    protected $view;
    public $produtos;
    
    public function index() {
        $this->render('index.php','template.php');
    }

    public function login() {
        $this->render('login.php','template.php');
    }

    public function cadastro() {
        $this->render('cadastro.php','template.php');
    }

    public function insert() {
        $this->render('insert.php','template.php');
    }

    public function lista() {
        $modelProdutos = new \App\model\produtos();
        $this->produtos = $modelProdutos->RetornaProdutos();
        $this->render('lista.php','template.php');
    }
    
    public function conteudo() {
        $this->render('conteudo.php','template.php');
    }
    
    public function sobre() {
        $this->render('sobre.php','template.php');
    }

    public function contatos() {
        $this->render('contatos.php','template.php');
    }

    public function error404() {
        $this->render('error404.php','template.php');
    }

    public function content() {
        include $this->view;
    }
    


    public function render($view, $template) {
        $this->view = 'App//view//www//' . $view;
        include 'App//view//' . $template;
    }
    
}
