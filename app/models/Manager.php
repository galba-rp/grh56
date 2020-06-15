<?php
 namespace GRH56\Models;
  class Manager
{
    // dbconnect sets up connection to DB.
    // ---TODO--- create .env file to store DB access details in envirmental variables
     protected function dbConnect()
     {
        try{
            $bdd = new \PDO('mysql:host=localhost;dbname=grh56;charset=utf8', 'root', '');
           //$bdd = new \PDO('mysql:host=localhost;dbname=gretaxao_yaroslavhontar;', 'gretaxao_yaroslavhontar', 'YaroslavHontar2020');
            return $bdd; 
        }catch(Exception $e){
            require 'app/views/FRONT/error.php';
        }catch(Error $e){
            require 'app/views/FRONT/error.php';
        }
     }
}