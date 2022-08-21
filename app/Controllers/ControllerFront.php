<?php

namespace GRH56\Controllers;

class ControllerFront
{
    private $object;
    public $errorsContact;

    // connecting to the model and creating an array for errors display.
    public function __construct()
    {
        $this->object = new \GRH56\Models\FrontManager();
        $this->errorsContact = [
            0 => '',
            1 => '',
            2 => '',
            3 => '',
            4 => '',
        ];
    }


    // home is getting lessons ant testimonials information from the database to display on the front page.
    function home()
    {
        $lessons = $this->object->displayLessons();
        $testimonials = $this->object->displayTestimonials();

        require 'app/views/FRONT/home.php';
    }

    function contactForm()
    {
        require 'app/views/FRONT/contact.php';
    }

    function about()
    {
        require 'app/views/FRONT/about.php';
    }

    function  generalEnglish()
    {
        require 'app/views/FRONT/general_english.php';
    }

    function  bussinesEnglish()
    {
        require 'app/views/FRONT/bussines_english.php';
    }

    function  horeca()
    {
        require 'app/views/FRONT/horeca.php';
    }

    function aboutCookies()
    {
        require 'app/views/FRONT/cookies.php';
    }

    function generalConditions()
    {
        require 'app/views/FRONT/conditions.php';
    }
    function sendQuestionnaire()
    {
        // $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        // extract($_POST);
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        // extract($_POST);
        print_r($_POST);
    }

    //contact form verification and message sending
    function sendMessage()
    {
        echo 'Hello World';

        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        extract($_POST);

        // switcing from key=>value array to indexed array for errors handling.
        $inedexedPost = array_values($_POST);
        $errorsContact = $this->errorsContact;

        for ($i = 0; $i < count($errorsContact); $i++) {
            if (empty($inedexedPost[$i])) {
                $errorsContact[$i] = "Veuillez remplir ce champ !";
            }
        }
        if (!filter_var($inedexedPost['2'], FILTER_VALIDATE_EMAIL)) {
            $errorsContact['2'] = "L'adresse e-mail n'est pas valide !";
        }

        // checking if there are any errors in $errorsContact
        for ($i = 0; $i < count($errorsContact); $i++) {
            $errors;
            if (!empty($errorsContact[$i])) {
                $errors++;
            }
        }
        if ($errors == 0) {
            $to = 'galba.rp@gmail.com';
            $subject  = $_POST['contact_subject'];
            $message =  'From : ' .  $contact_name . " " . $contact_surname . "\r\n" . $contact_email . "\r\n" . $contact_message . ";  ";
            $headers = 'MIME-Version: 1.0';
            $headers .= 'Content-type: text/HTML; charset=utf-8';

            $sent = mail($to, $subject, $message, $headers);

            //storing message in the DB.
            $sendmail = $this->object->saveMail($contact_name, $contact_surname, $contact_email, $subject, $message);

            // --- to change to if ($sent == true) on server--
            if ($sent == true) {
                $_POST = [];
                $show = "show";
                $message = "Merci, votre message à été envoyé  !";
                require 'app/views/FRONT/contact.php';;
            } else {
                require 'app/views/FRONT/error.php';
            }
        } else {
            require 'app/views/FRONT/contact.php';
        }
    }

    function questionnaireForm()
    {
        require 'app/views/FRONT/questionnaire.php';
    }
}
