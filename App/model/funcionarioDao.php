<?php

namespace App\Model; 

class FuncionarioDao{

    public function create(Funcionario $f){

        $sql = 'INSERT INTO funcionarios(nome,email,senha) VALUES (?,?,?)';
        
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $f->getNome());
        $stmt->bindValue(2, $f->getEmail());
        $stmt->bindValue(3, $f->getSenha());
       

        $stmt->execute();

    }

    public function read(){

        $sql = 'SELECT * FROM funcionarios';

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

    public function update(Funcionario $f){
        $sql = 'UPDATE produtos set nome=?, email=?, senha=? WHERE id=?';

        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $f->getNome());
        $stmt->bindValue(2, $f->getEmail());
        $stmt->bindValue(3, $f->getSenha());
        $stmt->bindValue(4, $f->getId());
        $stmt->execute();
    }

    public function delete($id){

        $sql = 'DELETE FROM clientes WHERE id=?';

        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1,$id);

        $stmt->execute();

    }

}