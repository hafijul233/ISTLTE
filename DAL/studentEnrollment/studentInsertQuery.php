<?php

//include '../../BLL/functions/constructor.php';
function InsertIntoStudentProfileInfo(Profile $NewStudent){
  $studentid = NULL;
  include '../../DAL/dbconnection.php';
  
  $InsertQuery = "INSERT INTO `studentprofileinfo`( `firstname`, `middlename`, `lastname`, `profilepicture`,"
               . " `emailaddress`, `contactNo`, `bloodgroup`, `birthdate`, `gender`, `presentaddress`, `presentphoneno`,"
               . " `permanentaddress`, `permanentphoneno`, `comments`) "
               . "VALUES ('$NewStudent->firstname','$NewStudent->middlename','$NewStudent->lastname','$NewStudent->profilepicture',"
               . " '$NewStudent->emailaddress','$NewStudent->contactNo','$NewStudent->bloodgroup','$NewStudent->birthdate','$NewStudent->gender',"
               . "'$NewStudent->presentaddress','$NewStudent->presentphoneno','$NewStudent->permanentaddress','$NewStudent->permanentphoneno',"
               . "'$NewStudent->comments');";
  
      if ($connection->query($InsertQuery) === TRUE) {
        
        $RetriveStudentId = "SELECT `id` FROM `studentprofileinfo` WHERE emailaddress = '$NewStudent->emailaddress' LIMIT 1;";
        
        $result = $connection->query($RetriveStudentId);

        if ($result->num_rows > 0) { 
          $row = $result->fetch_assoc();
            $studentid = $row["id"];
        } 
        else 
          $studentid = 0;
      }
      
      else {
        echo "<hr>Error: (On Table ProfileInfo) " . $InsertQuery . "<br>" . $connection->error;
        //die;
        $studentid = -1;
      }
      
  return $studentid;
}

function InsertIntoStudentEducationInfo(Profile $NewStudent){
  
  include '../../DAL/dbconnection.php';
  
  $InsertQuery = "INSERT INTO `studenteducationinfo`(`studentid`, `department`, `course`, `session`,"
               . " `semseter`, `classroll`, `registrationno`, `comments`)"
               . " VALUES ('$NewStudent->studentid','$NewStudent->department','$NewStudent->course','$NewStudent->session',"
               . "'$NewStudent->semseter','$NewStudent->classroll','$NewStudent->registrationno','$NewStudent->comments');";
  
      if ($connection->query($InsertQuery) === TRUE) {
        
        $confirm = 1;
        
      } 
      else {
        echo "<hr>Error: (On Table EducationInfo) " . $InsertQuery . "<br>" . $connection->error;
        //die;
        $confirm = 0;
      }
  return $confirm;
}

function InsertIntoStudentParentsInfo(Profile $NewStudent){
  
  include '../../DAL/dbconnection.php';
  
  $InsertQuery = "INSERT INTO `studentparentsinfo`(`studentid`, `fathername`, `fatherprofession`, `mothername`,"
               . " `motherprofession`, `postaddress`, `phoneno`, `emailaddress`, `gurdianname`, `gurdianphoneno`,"
               . " `relationwithstudent`, `comments`)"
               . " VALUES ('$NewStudent->studentid','$NewStudent->fathername','$NewStudent->fatherprofession','$NewStudent->mothername',"
               . "'$NewStudent->motherprofession','$NewStudent->postaddress','$NewStudent->phoneno','$NewStudent->emailaddress',"
               . "'$NewStudent->gurdianname','$NewStudent->gurdianphoneno','$NewStudent->relationwithstudent','$NewStudent->comments');";
  
      if ($connection->query($InsertQuery) === TRUE) {
        
        $confirm = 1;
        
      } 
      else {
        echo "<hr>Error: (On Table parentsInfo) " . $InsertQuery . "<br>" . $connection->error;
        //die;
        $confirm = 0;
      }
  return $confirm;
}

function InsertIntoUserAuthenticationInfo($emailaddress, $profileid, $comments){
  
  include '../../DAL/dbconnection.php';
    
//password Generation
    $characters = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $password = '';
    
    for ($i = 0; $i < 10; $i++) {
        $password .= $characters[rand(0, strlen($characters))];
    }
    
  $InsertQuery = "INSERT INTO `userauthenticationinfo`(`emailaddress`, `passwords`, `categories`, `profileid`, `comments`)"
               . " VALUES ('$emailaddress','$password','student','$profileid','$comments');";
  
      if ($connection->query($InsertQuery) === TRUE) {
        $confirm = 1;
      } 
      else {
        echo "<hr>Error: (On Table parentsInfo) " . $InsertQuery . "<br>" . $connection->error;
        die;
        $confirm = 0;
      }
  return $confirm;
}

function UpdateStudentRegister($profileid){
  
    include '../../DAL/dbconnection.php';
    
  $UpdateQuery = array("UPDATE `studentprofileinfo` SET `status`= '1' WHERE `id` = '$profileid';",
                  "UPDATE `studentparentsinfo` SET `status`= '1' WHERE `studentid` = '$profileid';",
                  "UPDATE `studenteducationinfo` SET `status`= '1' WHERE `studentid` = '$profileid';",
                  "UPDATE `userauthenticationinfo` SET `status`= '1' WHERE `profileid` = '$profileid';",);
  
    foreach ($UpdateQuery as $Query) {
      
      if ($connection->query($Query) === TRUE) {
          echo "Record updated successfully";
          $confirm = 1;
      }
      else {
        echo "Error updating record: " . $connection->error;
          die();
          $confirm = 0;
      }
    }    
  return $confirm;
}

function GetUserLoginInfo($profileid){
  
  include '../../DAL/dbconnection.php';
  
  $sql = "SELECT `emailaddress`, `passwords`, `categories` FROM `userauthenticationinfo` "
       . "WHERE `profileid` = '$profileid' ORDER BY `profileid` DESC LIMIT 1;";
  
  $result = $connection->query($sql);

  if ($result->num_rows > 0) {
      // output data of each row
      $row = $result->fetch_assoc();
      $row["result"] = 1;
  } else {
    $row["result"] = 0;
  }
  
  return $row;
}
