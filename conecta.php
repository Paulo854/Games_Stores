<?php
abstract class ClassConexao{
public function Conectar()
{
    try{
        $Con=new PDO("mysql:host=127.0.0.1:50871;dbname=sistema","azure","6#vWHD_$");
        return $Con;
    }catch (PDOException $Erro){
        return $Erro->getMessage();
    }
}
}