<?php

namespace App\Model;

class Venda{
    
    private $idVenda, $cliente, $produto, $quantidade, $valor;

    public function getIdVenda(){
        return $this->id;
    }

    public function setIdVenda($id){
        $this->id = $id;
    }
    
    public function getCliente(){
        return $this->cliente;
    }

    public function setCliente($cliente){
        $this->cliente = $cliente;
    }

    public function getProduto(){
        return $this->produto;
    }

    public function setProduto($produto){
        $this->produto = $produto;
    }

    public function getQuantidade(){
        return $this->quantidade;
    }

    public function setQuantidade($quantidade){
        $this->quantidade = $quantidade;
    }

    public function getValor(){
        return $this->valor;
    }

    public function setValor($valor){
        $this->valor = $valor;
    }


}