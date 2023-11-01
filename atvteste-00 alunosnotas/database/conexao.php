<?php

class Conexao{
    private static $instancia;
    public static function getConexao(){
        if(!isset(self::$instancia)){
            self::$instancia = new PDO('mysql:host=localhost; dbname=Atv_Consulta; charset=Utf8', 'root', 'root');
            return self::$instancia;
        }else{
            return self::$instancia;
        }
    }
}