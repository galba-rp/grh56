<?php
 namespace GRH56\Models;
  class Manager
{
     protected function dbConnect()
     {
        try{
            $bdd = new \PDO('mysql:host=localhost;dbname=grh56;charset=utf8', 'root', '');
           //$bdd = new \PDO('mysql:host=localhost;dbname=gretaxao_yaroslavhontar;', 'gretaxao_yaroslavhontar', 'YaroslavHontar2020');
            return $bdd; 
        }catch(Exception $e){
            die("Error: " .$e->getMessage());
        }
     }
}