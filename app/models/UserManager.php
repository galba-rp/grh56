<?php
 namespace GRH56\Models;
 class UserManager extends Manager
 {     
   // session sets session variables to use across class (DRY)
  function session( $name, $surname, $email, $user, $status){
      $_SESSION['name'] = $name;
      $_SESSION['surname'] = $surname;
      $_SESSION['email'] = $email;
      $_SESSION['user'] = $user;
      $_SESSION['status'] = $status;
   }
   //checkEmailExists  retrieves id if email exists in the DB.
   public function checkEmailexists($email){
      $bdd = $this->dbConnect();
      $signUpData = $bdd->prepare('SELECT id_student FROM users WHERE email=?' );
      $signUpData->execute([$email]);
      $signUpData = $signUpData->fetchAll();
      return $signUpData;
 }

   //checkLogIn check if passwords match for given email.
   public function checkLogIn($email, $password){
      $bdd = $this->dbConnect();
      $loginData = $bdd->prepare('SELECT * FROM users WHERE email=?');
      $loginData->execute([$email]);
      $loginData = $loginData->fetch();
      if ($loginData){
         if( password_verify($password,$loginData['pass'])){
            $this->session($loginData['username'], $loginData['surname'], $loginData['email'], $loginData['id_student'], $loginData['id_status']);
            //return based on user status
            if($loginData['id_status'] === "0"){
               return "user";
            }else{
               return "admin";
            }         
         }else{ 
            return false;
         }
      }else{
         return($loginData);
      }        
   }

  //userRegistrer  inserts new user information into DB and sets SESSION variables.
   public function userRegister($name, $surname, $email, $password){
         $bdd = $this->dbConnect();
         $signUpData = $bdd->prepare('INSERT INTO users(username, surname, email, pass)  VALUES (?, ?, ?, ?)' );
         $signUpData->execute([$name, $surname, $email, $password]);
         if($signUpData){
            $getUserData = $bdd->prepare('SELECT * FROM users WHERE email=?');
            $getUserData->execute([$email]);
            $getUserData = $getUserData-> fetch();           
            $this->session($getUserData['username'], $getUserData['surname'], $getUserData['email'], $getUserData['id_student'], $getUserData['id_status']);
            return true;
         }else{
            return false;
         }
   }

   // userUpdate updates user information and rewrites SESSION variables.
   public function userUpdate($nameUpdate, $surnameUpdate, $emailUpdate, $id){
        $bdd = $this->dbConnect();
        $updateData = $bdd->prepare('UPDATE users SET username = ?, surname = ?, email = ?  WHERE id_student = ? ');
        $updateData->execute([$nameUpdate, $surnameUpdate, $emailUpdate, $id]);
      //using data from database to set sesison values for user 
        $getUserData = $bdd->prepare('SELECT * FROM users WHERE id_student=?');
        $getUserData->execute([$id]);
        $getUserData = $getUserData-> fetch();
        if($updateData){
           $this->session($getUserData['username'], $getUserData['surname'], $getUserData['email'], $getUserData['id_student'], $getUserData['id_status']);
           return true;
        }else{
           return false;
        }
   }
   
   //userDelete delets user information from DB.
   public function deleteUser($id){ 
      $bdd = $this->dbConnect();
      $deleteUser = $bdd->prepare('DELETE FROM users WHERE id_student = ?');
      $deleteUser->execute([$id]); 
      if($deleteUser){
         return true;
      }else{
         return false;
      }
   }
   
   //ChangePassword updates user password in DB.
   public function changePassword($newPasswordHash, $email){
      $bdd = $this->dbConnect();
      $updatePass = $bdd->prepare('UPDATE users SET pass = ?  WHERE email = ? ');
      $updatePass->execute([$newPasswordHash, $email]); 
      if($updatePass){
         return true;
      }else{
         return false;
      }
   }

   //latestLesson retrives lesson of the week with highest id 
   function latestLesson(){
      $bdd = $this->dbConnect();
      $lod = $bdd->prepare('SELECT * FROM lessonoftheweek ORDER BY id DESC LIMIT 1');
      $lod->execute();
      $lod = $lod->fetch();
      return $lod;
  } 
}