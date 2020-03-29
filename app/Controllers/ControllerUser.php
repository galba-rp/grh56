<?php

namespace GRH56\Controllers;
// creating user class with registration signin functions
class ControllerUser
{
     function userRegistrationCheck(){
        //for security - cleaning received data
       $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        
        if (isset($_POST['signup'])){
            
            $email = ($_POST['emailAjax']);
            //using email  input for sql request  
            $userSignUp = new \GRH56\Models\UserManager();
            $signUpData = $userSignUp->checkEmailexists($email);
             //checking response from model(if there is any data in the array) 
            if(count($signUpData) > 0){
                exit("Cette adresse e-mail est déjà utilisée ");
            }else{

                exit("ok");
            }
        }

    }
    // function signUp(){
    //     require 'app/views/STUDENT/student.php';
    //     var_dump($_POST['emailAjax']);   
    //         // $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);// filter removes tags/special characters from array     
    //         // $name = $_POST['name'];
    //         // $surname = $_POST['surname'];
    //         // $email = $_POST['email'];
    //         // $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    //         // $userSignUpObj = new \GRH56\Models\UserManager();
    //         // $userSignUp = $userSignUpEmail->signUp($name, $surname, $email, $password);
    
    //         // if($userSignUp){
    //         //     require 'app/views/STUDENT/student.php';
    //         // }else{
    //         //     die('Oups! Il y a une erreur....');
    //         // }
    //      }
    function checkUser(){
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        if (isset($_POST['signin'])){
            // escape special characters
            $email =$_POST['emailAjax'];
            $password = $_POST['passwordAjax'];
            
            //using email  and password inputs for sql request  
            $userLogIn = new \GRH56\Models\UserManager();
            $loginData = $userLogIn->checkLogIn($email, $password);
         
    
            // checking response from model(if there is any data in the array) 
            if(count($loginData) > 0){
                $_SESSION['connected'] = '1';
                $_SESSION['email'] = $email;
                exit("ok");
                
            }else{
                exit('Votre identifiant ou mot de passe est incorrect.');
            }

        }
        
    }
    function logIn(){       
        require 'app/views/STUDENT/student.php';

    }
    function logOut(){
        unset($_SESSION['connected']);
        session_destroy();
        $controllerFront = new \GRH56\Controllers\ControllerFront();
        $controllerFront -> home();
    }
    
}  