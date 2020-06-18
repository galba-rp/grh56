<?php

declare(strict_types = 1);

namespace GRH56\Models;

class FrontManager extends Manager
{

    //displayLessons retrieves all lessons form DB to be displayed on home page.
    public function displayLessons() : array{
         //conncting to dtabase through dbConnect() from class Manager
        $bdd = $this->dbConnect();
        $lessons = $bdd->prepare('SELECT lessons.title, lessons.short, lessons.description, images.image_path FROM lessons INNER JOIN images ON lessons.lesson_id = images.connect_id');
        $lessons->execute(array());
        $lessons = $lessons->fetchAll();

        return $lessons;
    }
     
    // displayTestimonials retrieves all testimonials form DB 
    public function displayTestimonials() : array{
        $bdd = $this->dbConnect();
        $testimonials = $bdd->prepare('SELECT * FROM testimonials');
        $testimonials->execute(array());
        $testimonials = $testimonials->fetchAll();

        return $testimonials;
    }

    //saveMail saves message from contact form to DB.
    public function saveMail(string $name, string $surname, string $email, string $subject,string $message) : bool{
        $bdd = $this->dbConnect();
        $mail = $bdd->prepare('INSERT INTO contactMessages(contact_name, surname, email, mailsubject, mail) VALUES (?, ?, ?, ?, ?)');
        $mail->execute([$name, $surname, $email, $subject, $message]);
        if ($mail){
             return true;
        } else {
            return false;
        }
     }
 }