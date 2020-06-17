<?php

declare(strict_types = 1);

 namespace GRH56\Models;

 class AdminManager extends Manager
 {  
    // lessonOfTheWeek adds new lesson to database.
    function lessonOfTheWeek(string $title, string $comment, string $upload_file) : object{
        $bdd = $this->dbConnect();
        $lessonOfTheWeek = $bdd->prepare('INSERT INTO lessonoftheweek (lod_title, lod_comment, lod_file) VALUES(?, ?, ?)');
        $lessonOfTheWeek->execute([$title, $comment, $upload_file]);
        return  $lessonOfTheWeek;
    }
    
    // allLessons gets all lessons.
    function allLessons() : array {
        $bdd = $this->dbConnect();
        $allLessons = $bdd->prepare('SELECT * FROM lessonoftheweek');
        $allLessons->execute();
        $allLessons = $allLessons -> fetchAll();
        return  $allLessons;
    }

    // lessonWeekUpdate updates lesson's information (title and comment but not video).
    function lessonWeekUpdate(string $lesson, string  $comment, int $id) : object{
        $bdd = $this->dbConnect();
        $lessonUpdate = $bdd->prepare('UPDATE lessonoftheweek SET lod_title = ?, lod_comment = ? WHERE id = ?');
        $lessonUpdate->execute([$lesson, $comment, $id]);
        return  $lessonUpdate;
    }

    // lessonWeekDelet delets lesson from db.
    function lessonWeekDelet(int $id) : string{
        $bdd = $this->dbConnect();
        $getVideo = $bdd->prepare('SELECT lod_file FROM lessonoftheweek WHERE id = ?');
        $getVideo->execute([$id]);
        $getVideo = $getVideo->fetch();
        $deleteLesson = $bdd->prepare('DELETE FROM lessonoftheweek WHERE id = ?');
        $deleteLesson->execute([$id]);
        
        if ($deleteLesson){
            return $getVideo['lod_file'];  
        }else{
            return ("false");
        }     	
    }
 }