<?php

namespace App\Model;

class Produto{

    private $cod, $nome, $descricao, $quantidade;

    public function getCod(){
        return $this->cod;
    }

    public function setCod($cod){
        $this->cod = $cod;
    }

   
    public function getNome(){
        return $this->nome;
    }

    public function setNome($nome){
        $this->nome = $nome;
    }

    public function getDescricao(){
        return $this->descricao;
    }

    public function setDescricao($descricao){
        $this->descricao = $descricao;
    }

    public function getQuantidade(){
        return $this->quantidade;
    }

    public function setQuantidade($quantidade){
        $this->quantidade = $quantidade;
    }




}