<?php

 session_start();

require_once __DIR__. '/vendor/autoload.php';

try{
    $controllerUser = new \GRH56\Controllers\ControllerUser(); //creating object controllerUser for login verification
    
    if(isset($_POST['signin'])){
    $controllerUser -> checkUserLogIn();
    }elseif(isset($_POST['signup'])){
        $controllerUser -> userRegistrationCheck();
    }
}catch(Exception $e){
    require 'app/views/FRONT/error.php';
}catch(Error $e){

    require 'app/views/FRONT/error.php';
}