<?php
   
namespace App\Model; 
   
class Conexao{
    private static $instance;
    
    public static function getConn(){

        //Se não existir instância, crie uma
        if(!isset(self::$instance)):
            self::$instance = new \PDO('mysql:host=localhost;dbname=controle_vendas;charset=utf8','root','');
        
        endif;

        return self::$instance;
    }
}
?>