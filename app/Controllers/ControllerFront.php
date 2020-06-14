<?php

namespace GRH56\Controllers;

class ControllerFront {   
    private $object;
    public $errorsContact;
    
    public function __construct(){
        $this->object = new \GRH56\Models\FrontManager();
        $this->errorsContact = [
            0 => '',
            1 => '',
            2 => '',
            3 => '',
            4 => '',
            ];
    }
    

    // home is getting lessons ant testimonials information from the database to display on  the front page.  
    function home() {
        $lessons = $this->object->displayLessons();
        $testimonials = $this->object->displayTestimonials();
       
        require 'app/views/FRONT/home.php';
    }

    
    function contactForm(){
        require 'app/views/FRONT/contact.php';
    }

    function about(){
        require 'app/views/FRONT/about.php';
    }
    
    function courses(){
        require 'app/views/FRONT/courses.php';
    }

    function aboutCookies(){
        require 'app/views/FRONT/cookies.php';
    }
    //contact form verification and message sending
    function sendMessage(){
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING); 
        extract($_POST);
       

        // switcing from key=>value array to indexed array for errors handling.
        $inedexedPost = array_values($_POST);      
        $errorsContact = $this->errorsContact;

        
        for($i= 0; $i < count($errorsContact); $i++){
            if (empty($inedexedPost[$i])){
                $errorsContact[$i] = "Veuillez remplir ce champ !";
            }
        }
        if(!filter_var($inedexedPost['2'], FILTER_VALIDATE_EMAIL)){
            $errorsContact['2'] = "L'adresse e-mail n'est pas valide !";
        }

        // checking if there are any errors min $errorsContact
        for($i= 0; $i < count($errorsContact); $i++){
            $errors;
            if (!empty($errorsContact[$i])){
                $errors++;
            }
        }
        if($errors == 0){
            $to = 'galba.rp@gmail.com';
            $subject  = $contact_subject;
            $message =  " From: " . $contact_name . " at " . $contact_email . "\n" . nl2br($contact_message); 
            $headers =  $contact_email . "/r/n";
            $headers .= 'MIME-Version: 1.0' .  "/r/n";
            $headers .= 'Content-type: text/plain; charset=utf-8' .  "/r/n";


            $sent = mail($to, $subject, $message, $headers);
            unset($_POST['contact_name']);
            unset($_POST['contact_surname']);
            unset($_POST['contact_email']);
            unset($_POST['contact_subject']);
            unset($_POST['contact_message']);
           
            $sendmail = $this->object->saveMail($name, $surname, $email, $subject, $message);
            // --- to change to if ($sent == true) on server--
            if ($sendmail == true){
                $_POST = [];
                $show = "show";
                $message = "Merci, votre message à été envoyé  !";
                require 'app/views/FRONT/contact.php';;
            }
            else{
                require 'app/views/FRONT/error.php';
            }
            
        }else{
            require 'app/views/FRONT/contact.php';
        }
    }
}  