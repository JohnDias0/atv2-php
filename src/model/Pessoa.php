<?php

namespace App\model;

class Pessoa {

    public $nome, $contato;
    function __construct($nome, $contato){
        $this->nome = $nome;
        $this-> contato = $contato;
    }
}
?>