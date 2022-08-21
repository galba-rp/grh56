<?php

namespace GRH56\Controllers;

class ControllerAdmin
{   
    private $object;
    public $errors;

    // connecting to the model and creating  an array for errors display.
    public function __construct(){
        $this->object = new \GRH56\Models\AdminManager();
        $this->errors = [
            'lesson' => '',
            'video' => '',
            'comment' => '',
            'not uploaded' => '',
        ];
    }

    function lessons(){
        require 'app/views/BACK/lessons.php';
    }

    // lessonWeek creates lesson of the Week
    function lessonWeek(){
        $show =" ";
        $message = " ";
        $errors = $this->errors;
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        extract($_POST);
        // replacing all spaces with undescores for filename.
        $filename = preg_replace('/\s+/', '_', $_FILES["myfile"]["name"]);
        $upload_dir = "app/public/videos/";
        $upload_file = $upload_dir . basename($filename);
        $upload = 1; //initial value
        $fileType = strtolower(pathinfo($upload_file, PATHINFO_EXTENSION));

        if (empty($title)){
            $errors['lesson'] = "Lesson's title is missing !";
        }
        if (empty($comment)){
            $errors['comment'] = "Comment is missing !";
        }

        //checking if file already exists.
        if (file_exists($upload_file)) {
            $errors['video'] = "File already exists.";
            $upload = 0;
        }
      
        // limiting file size.
        if ($_FILES["myfile"]["size"] > 25000000) {
            $errors['video'] =  "File is too large.";
            $upload = 0;
        }
    
        // limiting to MP4 format only.
        if ($fileType != "mp4") {
            $errors['video'] = "Only MP4 files are allowed.";
            $upload = 0;
        }
        if ($upload == 0) {
            $errors['not uploaded'] = "An error has occured, please try again";
        }
        if (!empty($errors['video']) || !empty($errors['lesson']) || !empty($errors['comment']) || !empty($errors['not uploaded'])){
            require 'app/views/BACK/admin.php';
        } elseif (empty($errors['video']) && empty($errors['lesson']) && empty($errors['comment']) && empty($errors['not uploaded'])) {
            if (move_uploaded_file($_FILES["myfile"]["tmp_name"], $upload_file)){
                $lessonWeek = $this->object->lessonOfTheWeek($title, $comment, $upload_file);
                    if ($lessonWeek) {
                        $show = "show";
                        $message = "Lesson successfully created!";
                        require 'app/views/BACK/admin.php';
                    } else {
                        throw new \Exception("lessonWeek creatoion failed");
                    }
            } else {
                throw new \Exception("lessonWeek failed");
            }
        }
    }

    // allLessons gets all "lesson of the week" from db
    function allLessons(){
        $show =" ";
        $message = " ";
        $errors = $this->errors;
        $allLessons = $this->object->allLessons();
        require 'app/views/BACK/lessons.php';
    }

    // updateWeekLeeson updates lesson's title and lesson's comment.
    function updateWeekLesson(){
        $message= "";
        $show = "";
        $errors = $this->errors;
        $allLessons = $this->object->allLessons();
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        extract($_POST);

        if (empty($_POST['update_title'])){
            $errors['lesson'] = "Lesson's title is missing !";
        }
        if (empty($_POST['update_comment'])){
            $errors['comment'] = "Comment is missing !";
        }
        if (!empty($errors['lesson']) || !empty($errors['comment'])){
            require 'app/views/BACK/lessons.php';
        } else {
            $lessonUpdate = $this->object->lessonWeekUpdate($update_title, $update_comment, $id);
            
            if ($lessonUpdate){
                $show = "show";
                $message = "Lesson has beeen updated!";
                require 'app/views/BACK/admin.php';
           } else {
                throw new \Exception("updateWeekLesson failed");
            }
        }
    }

     // deleteWeekLesson delets lesson form db.
    function deleteWeekLesson(){
        $errors = $this->errors;
        $message= "";
        $show = "";
        extract($_POST);
        $lessonDelete = $this->object->lessonWeekDelet($id);
        if ($lessonDelete){
            unlink($lessonDelete);
            $show = "show";
            $message = "Lesson has been deleted!";
            require 'app/views/BACK/admin.php';
        } else {
            throw new \Exception("deletWeekLesson failed");
        }
    }
}