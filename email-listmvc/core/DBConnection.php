<?php
namespace Core;
use PDO;
class DBConnection{
    public static function start(){
        try{
         return   $pdo = new PDO('mysql:host=127.0.0.1; dbname=email_list', 'root', 'root');
          
          } catch(PDOException $e ) {
            dd($e-> getMessage());
          }
          
    }
}