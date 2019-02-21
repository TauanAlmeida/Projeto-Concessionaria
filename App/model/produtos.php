<?php

namespace App\model;

class produtos {
    private $produtos;

    public function LerProdutos() {
        $this->produtos = ['primeiro item vindo do model', 'segundo item vindo do model', 'terceiro item vindo do model'];
    }
    public function RetornaProdutos() {
        $this->LerProdutos();
        return $this->produtos;
    }
}
