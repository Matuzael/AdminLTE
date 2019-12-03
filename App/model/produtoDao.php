<?php

namespace App\Model; 

class ProdutoDao{

    public function create(Produto $p){

        $sql = 'INSERT INTO produtos(nome,descricao,quantidade) VALUES (?,?,?)';
        
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $p->getNome());
        $stmt->bindValue(2, $p->getDescricao());
        $stmt->bindValue(3, $p->getQuantidade());
       

        $stmt->execute();

    }

    public function read(){

        $sql = 'SELECT * FROM produtos';

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

    public function update(Produto $p){
        $sql = 'UPDATE produtos set nome=?, descricao=?, quantidade=? WHERE cod=? ';

        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $c->getNome());
        $stmt->bindValue(2, $c->getDescricao());
        $stmt->bindValue(3, $c->getQuantidade());
        $stmt->bindValue(4, $c->getCod());
        $stmt->execute();
    }

    public function delete($cod){

        $sql = 'DELETE FROM clientes WHERE cod=?';

        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1,$cod);

        $stmt->execute();

    }

}