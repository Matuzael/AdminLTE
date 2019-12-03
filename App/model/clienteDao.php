<?php

namespace App\Model; 

class ClienteDao{

    public function create(Cliente $c){

        $sql = 'INSERT INTO clientes(nome,email,cpf) VALUES (?,?,?)';
        
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $c->getNome());
        $stmt->bindValue(2, $c->getEmail());
        $stmt->bindValue(3, $c->getCpf());
       

        $stmt->execute();

    }

    public function read(){

        $sql = 'SELECT * FROM clientes';

        $stmt = Conexao::getConn()->prepare($sql);

        $stmt->execute();

        if($stmt->rowCount()> 0):
            //Tendo registros no banco, ele retorna um array para $resultados;
            $resultado = $stmt->fetchAll(\PDO::FETCH_ASSOC);
            return $resultado;
        
        else:
            return [];
        endif;

    }

    public function update(Cliente $c){
        $sql = 'UPDATE clientes set nome=?, email=?, cpf=? WHERE id=? ';

        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $c->getNome());
        $stmt->bindValue(2, $c->getEmail());
        $stmt->bindValue(3, $c->getCpf());
        $stmt->bindValue(4, $c->getId());
        $stmt->execute();
    }

    public function delete($id){

        $sql = 'DELETE FROM clientes WHERE id=?';

        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1,$id);

        $stmt->execute();

    }

}