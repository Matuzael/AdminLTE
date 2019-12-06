<?php

namespace App\Model; 

class VendaDao{

    public function create(Venda $v){

        $sql = 'INSERT INTO vendas(cliente,produto,quantidade,valor) VALUES (?,?,?,?)';
        
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $v->getCliente());
        $stmt->bindValue(2, $v->getProduto());
        $stmt->bindValue(3, $v->getQuantidade());
        $stmt->bindValue(4, $v->getValor());
       

        $stmt->execute();

    }

    public function read(){

        $sql = 'SELECT * FROM vendas';

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

    public function update(Vendas $v){
        $sql = 'UPDATE vendas set cliente=?, produto=?, quantidade=?, valor=? WHERE idVenda=? ';

        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $v->getCliente());
        $stmt->bindValue(2, $v->getProduto());
        $stmt->bindValue(3, $v->getQuantidade());
        $stmt->bindValue(4, $v->getValor());
        $stmt->bindValue(5, $v->getIdVenda());

        $stmt->execute();
    }

    public function delete($id){

        $sql = 'DELETE FROM vendas WHERE idVenda=?';

        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1,$id);

        $stmt->execute();

    }

    public function readOne($id){

        $sql = 'SELECT * FROM vendas WHERE idVenda=? ';

        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1,$id);
        $stmt->execute();

        if($stmt->rowCount()> 0):
            //Tendo registros no banco, ele retorna um array para $resultados;
            $resultado = $stmt->fetchAll(\PDO::FETCH_ASSOC);
            return $resultado;
        
        else:
            return [];
        endif;


}
}